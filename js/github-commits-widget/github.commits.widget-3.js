/*

https://github.com/alexanderbeletsky/github-commits-widget

# Legal Info (MIT License)

Copyright (c) 2012 Alexander Beletsky

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

*/

(function ($) {
    function widget(element, options, callback) {
        this.element = element;
        this.options = options;
        this.callback = $.isFunction(callback) ? callback : $.noop;
    }

    widget.prototype = (function() {

        // Callbacks modify these with results.
        var returnedCommitLists = 0;
        var commitList = [];

        function getCommits(user, repo, branch, options, callback) {
            /*
             * Add to context to use in rendering. Shallow copy specific to this
             * callback.
             */
            var context = $.extend({}, options);
            context.user = user;
            context.repo = repo;
            $.ajax({
                headers: {
                    "Accept": "application/vnd.github.v3"
                },
                url: "https://api.github.com/repos/" + user + "/" + repo + "/commits?sha=" + branch,
                dataType: 'json',
                success: callback,
                context: context
            });
        }

        function _widgetRun(widget) {
            if (!widget.options) {
                widget.element.append('<span class="error">Options for widget are not set.</span>');
                return;
            }

            var options = {};
            // Called with the element containing the constructed list.
            options.renderCallback = widget.callback;
            // Element into which the list is added.
            options.renderElement = widget.element;
            // Default avatar size to 20 pixels square.
            options.avatarSize = widget.options.avatarSize || 20;
            // Default to not showing any commits. TODO: Huh?
            options.showLast = widget.options.last === undefined ? 0 : widget.options.last;
            // Limit displayed commit message length. Default no limit.
            options.limitMessageTo = widget.options.limitMessageTo === undefined ? 0 : widget.options.limitMessageTo;

            var users = widget.options.users;
            var repos = widget.options.repos;
            options.numRepos = repos.length;
            var branches = widget.options.branches;

            for (var i = 0; i < options.numRepos; i++) {
                getCommits(users[i], repos[i], branches[i], options, parseCommits);
            }
        }

        function renderResults(options) {
            // Sort from most to least recent.
            var commits = commitList.sort(function(a, b) {
                var aTime = new Date(a.commit.committer.date).getTime();
                var bTime = new Date(b.commit.committer.date).getTime();
                return aTime < bTime;
            });
            var totalCommits = Math.min(options.showLast, commits.length);

            options.renderElement.empty();

            var list = $('<ul class="github-commits-list">').appendTo(options.renderElement);
            for (var c = 0; c < totalCommits; c++) {
                var cur = commits[c];
                var li = $("<li>");

                var e_user = $('<span class="github-user">');
                //add avatar & github link if possible
                if (cur.author !== null) {
                    e_user.append(avatar(cur.author.gravatar_id, options.avatarSize));
                    e_user.append(author(cur.author.login));
                }
                else //otherwise just list the name
                {
                    e_user.append(cur.commit.committer.name);
                }

                li.append(e_user);

                //add commit message
                li.append(message(cur.commit.message, cur.html_url));
                li.append(when(cur.commit.committer.date));

                list.append(li);
            }

            options.renderCallback(options.renderElement);

            function avatar(hash, size) {
                return $('<img>')
                        .attr('class', 'github-avatar')
                        .attr('src', 'https://www.gravatar.com/avatar/' + hash + '?s=' + size);
            }

            function author(login) {
                return  $('<a>')
                        .attr("href", 'https://github.com/' + login)
                        .text(login);
            }

            function message(commitMessage, url) {
                var originalCommitMessage = commitMessage;
                if (options.limitMessageTo > 0 && commitMessage.length > options.limitMessageTo)
                {
                    commitMessage = commitMessage.substr(0, options.limitMessageTo) + '...';
                }

                var link = $('<a class="github-commit"></a>')
                  .attr("title", originalCommitMessage)
                  .attr("href", url)
                  .text(commitMessage);

                return link;
            }

            function when(commitDate) {
                var commitTime = new Date(commitDate).getTime();
                var todayTime = new Date().getTime();

                var differenceInDays = Math.floor(((todayTime - commitTime)/(24*3600*1000)));
                if (differenceInDays === 0) {
                    var differenceInHours = Math.floor(((todayTime - commitTime)/(3600*1000)));
                    if (differenceInHours === 0) {
                        var differenceInMinutes = Math.floor(((todayTime - commitTime)/(600*1000)));
                        if (differenceInMinutes === 0) {

                            return 'just now';
                        }

                        return 'about ' + differenceInMinutes + ' minutes ago';
                    }

                    return 'about ' + differenceInHours + ' hours ago';
                } else if (differenceInDays == 1) {
                    return 'yesterday';
                }
                return differenceInDays + ' days ago';
            }
        }

        // Add to commitLists
        function parseCommits(data) {
            // Given as callback context.
            var options = this;
            var commits = data;
            // Cap contribution at showLast commits.
            var totalCommits = Math.min(options.showLast, commits.length);
            var addedCommits = commits.slice(0, totalCommits);
            /*
             * Compute html_url attributes to prevent the JSON from causing the
             * widget to link to an arbitrary domain.
             */
            for (var i = 0; i < addedCommits.length; i++) {
                var commit = addedCommits[i];
                var commit_url = 'https://github.com/' + options.user + '/' +
                                 options.repo + '/commit/' + commit.sha;
                addedCommits[i].html_url = commit_url;
            }
            commitList = commitList.concat(addedCommits);
            returnedCommitLists += 1;

            if (returnedCommitLists === options.numRepos) {
                renderResults(options);
            }
        }

        return {
            run: function () {
                _widgetRun(this);
            }
        };

    })();

    $.fn.githubInfoWidget = function(options, callback) {
        this.each(function () {
            new widget($(this), options, callback)
                .run();
        });
        return this;
    };

})(jQuery);
