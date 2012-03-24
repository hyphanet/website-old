      <h1>Developer</h1>
      
      <h3>Source Code</h3>
      
      <p>
	We are using <a href="http://git-scm.com/">git</a> as our
	source code management system, hosted
	on <a href="http://www.github.com/">github</a>. We have many
	different git repositories for the website, freenet itself (fred),
	official plugins, the two installers, libraries and so on; 
	for the list, see <a href="http://github.com/freenet/">our page on github</a>.
	
      </p>

      <p>
	We strongly recommend that you use the official command-line git client,
	or the Windows port. If you want to use the Eclipse git integration, see
	the
	tutorial <a href="http://github.com/guides/using-the-egit-eclipse-plugin-with-github">here</a>.
      </p>
      
      <p>You can obtain the latest source code from git using the following command line:</p>
      <pre>
	git clone git://github.com/freenet/fred-staging.git</pre>

      <p>Once you have cloned the repository, to get new changes you should do:</p>
      <pre>
	git pull origin</pre>

      <p>
    More information on how to use git is further down this page.
      </p>

      <p>
	Git is a distributed revision control system, this means
	amongst other things:
      </p>
      <ul>
	<li>Everyone has a full copy of the repository, including all the history.</li>
	<li>Branching and merging is easy.</li>
	<li>Working offline (e.g. on a train) is easy.</li>
	<li>We are much less vulnerable to compromise or failure of a central server.</li>
	<li>Anonymous contribution over Freenet is much easier.</li>
	<li>Generally a more secure workflow.</li>
      </ul>
      
    <p>Initially we used git in a manner similar to SVN: Every developer has the right
    to push to the repository, and we gave out push rights fairly liberally. However,
    this is probably not the best model: Many other projects using Git use a more
    centralised (or decentralised, depending on how you look at it) model where you 
    fork the repository (this is really easy on github), make your changes, push them
    to your repository, and then ask us to pull them; then a core developer reviews the
    changes and either pulls them into the main repository or asks for further changes.
    The advantage is there are fewer reverts in the history, better code in general, stuff
    can be put off more easily when we are trying to get a release out, and the security
    model is simpler. We are trying to mode to this model at the moment. You may find
    it is easier to fork -staging and then post a pull request (github makes both of these things 
    easy), rather than asking for push rights to -staging.</p>
    
    <p>Each part of Freenet currently has two repositories: -official and -staging (e.g.
    fred-official and fred-staging). This is left over from our using git similarly to 
    SVN: The -official repository has been reviewed and released at least as a pre-build,
    and only core devs can push to it - they must review the code they are pushing before 
    doing so, and will usually sign a tag for the build or pre-build after doing so. The 
    -staging repository almost anyone can write to. New developers should fork on github
    and then post pull requests.</p>
      
      <p>
    Either way, please keep us informed of what you are doing with Freenet! Create a github
    account, and then contact us either through
	the <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl">development
	mailing list</a> or
	on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	in
	the <a href="irc://irc.freenode.net/%23freenet">#freenet</a>
	channel at irc.freenode.net.Note that you must use a real
	(working) email address when committing; we will provide
	contributors with @freenetproject.org redirects if needed.
      </p>

      <h3>Build Instructions</h3>
      
      <p>To build the source code you will need <a href="http://ant.apache.org/">Apache ANT</a>.</p>
      
      <h3>Full Build</h3>
      
      <p>
	Building Fred (the Freenet reference daemon) with ant will pull in
	freenet-ext.jar for third party dependancies from the website. To build
	freenet-ext.jar yourself you need to get the contrib module, build it, and put it into
	lib/freenet-ext.jar before you build the main project. Note also that the
	contrib module contains a number of native libraries used to improve 
	performance; you may also want to rebuild these.
      </p>
      <p>
	Plugins, installers etc can generally be built with ant, but some 
	libraries may be written in other languages and have their own building 
	procedures.
      </p>

      <h3>Basic git workflow</h3>
      <p>To pull all changes to the repository:</p>
      
      <pre>
	git pull origin</pre>

      <p>
	Or if you want to review the changes before you merge them into your
	local repository:
      </p>

      <pre>
	git fetch origin
	git log -p -M --ignore-space-change master..origin/master</pre>

      <p>
	If you are happy with the changes, then either merge your local changes
	into the remote changes:
      </p>

      <pre>
	git rebase origin/master</pre>
      <p>Or merge the remote changes into your local repository:</p>
      <pre>
	git merge origin/master</pre>
      <p>The latter will result in a non-linear history, so you should use rebase
	unless your local changes are very large.</p>
      <p>To commit your local changes to your local repository:</p>

      <pre>
	git commit -a</pre>
      <p>Or:</p>
      <pre>
	git commit [ filenames you want to commit ]</pre>
      <p>To upload your changes (assuming you have cloned the -staging tree):</p>
      <pre>
	git push origin</pre>
      <p>To view recent changes:</p>
      <pre>
	git log -p -M --ignore-space-change</pre>
      <p>To undo one or more local commits, assuming you have not pushed your 
	changes, and have not merged remote changes (this will simply reset your
	local repository to a previous version, getting rid of everything since 
	then):</p>
      <pre>
	git reset [ last good revision ]</pre>

      <p>Or if you have committed your change, you will need to revert it:</p>
      <pre>
	git revert [ revision to get rid of ]</pre>
      <p>
	More documentation for git can be found <a href="http://git-scm.com/documentation">here</a>
	or <a href="http://www.kernel.org/pub/software/scm/git/docs/">here</a>.
      </p>
      <p>
	If you don't like a commit, or think it could be improved, generally you should post to the devl 
	<a href="lists.html">mailing list</a>. You should CC the author of the 
	commit, but unless it is a trivial matter you should always
	mail devl.
      </p>
    <p>Please avoid monster commits. All commits are reviewed manually
    both to ensure security and to avoid bugs, and this is much easier if
    you follow some basic rules:</p>
    <ul>
    <li>Keep cosmetic changes separate from functional changes. In
    particular, indenting and braces improvements, while these are 
    generally acceptable, should <b>not</b> be mixed with functional 
    changes.</li>
    <li>Don't break the build: When you push, fred should build. Ideally
    each individual commit should build.</li>
    <li>Small commits: "git commit" is a purely local operation, so there
    is no reason to combine a bunch of unrelated changes in a single 
    commit. Obviously use your judgement.</li>
    <li>Big or controversial stuff should go on a branch, rather than
    just getting pushed. We may be in the process of getting a new build 
    out, and if big stuff is pushed it is likely to be shifted to a branch
    while the build is deployed.</li>
    </ul>

    <h3>The website</h3>
    <p>To edit the website, check out the website-staging repository, edit the files (in pages/en/),
    commit and push as above. Then remind Toad to deploy it if he doesn't do so in a reasonable time.
    Alternatively, fork the website module on github, and then post a pull request. This may actually
    get results more quickly!</p>
    <p>The website is php-based but is compiled at deploy time into static HTML. You can simulate this
    to see exactly what your changes will look like by running the make-pages.sh script (you will need
    php5-cgi). This outputs static HTML to output/.</p>
    <p>We are trying to move most of the documentation to <a href="http://wiki.freenetproject.org">the 
    wiki</a>, which should be easier to edit.</p>
    
