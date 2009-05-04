<h2>Developer</h2>

<h3>Source Code</h3>
<p>We are using <a href="http://git-scm.com/">git</a> as our source code management system, hosted on <a href="http://www.github.com/">github</a>.

<p>You can obtain the latest source code from git using the following command line:</p>
<pre>git clone git://github.com/freenet/fred-staging.git</pre>

<p>We strongly recommend that you use the official command-line git client,
or the Windows port. We have had problems with others.</p>

<p>Visit <a href="http://github.com/freenet/">our page on github</a> to see all the repositories (plugins, applications, libraries, etc).

<p>Git is a distributed revision control system, this means amongst other things:<ul>
<li>Everyone has a full copy of the repository, including all the history.
<li>Branching and merging is easy.
<li>Working offline (e.g. on a train) is easy.
<li>We are much less vulnerable to compromise or failure of a central server.
<li>Anonymous contribution over Freenet is much easier.
<li>Generally a more secure workflow.
</ul>
<p>We have divided the code up into many sub-projects, each of which has two
repositories: the -staging repository, which has the latest code, to which
any developer can write, and the -official repository, which contains code
which has been reviewed by trusted developers. This is for security, because
we give out developer rights without any real checking, and because git 
allows destruction of old history. Stable builds are released from the official
repository, and the responsible developer will create a signed tag, which you 
can verify, for that build.</p>

<p>Most other projects using github use a different model, where a trusted 
maintainer pulls from other people's trees, rather than allowing any developer
to commit to a staging area; if you fork our code, and would like us to merge
your changes (maybe even over Freenet, but there will be additional checks in 
this case: for legal reasons we must be certain that anonymous contributions 
are your own work), feel free to contact us!</p>

<p>To get write access to the repository you should create a github account and then contact us either through the <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl">development mailing list</a> or on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a> in the <a href="irc://irc.freenode.net/%23freenet">#freenet</a> channel at irc.freenode.net.
Note that you must use a real (working) email address when committing; we will provide contributors with @freenetproject.org redirects.</p>
</p>

<h3>Build Instructions</h3>
<p>To build the source code you will need <a href="http://ant.apache.org/">Apache ANT</a>.</p>
<h3>Full Build</h3>
<p>Building Fred (the Freenet reference daemon) with ant will pull in
freenet-ext.jar for third party dependancies from the website. To build
freenet-ext.jar yourself you need to get the contrib module, build it, and put it into
lib/freenet-ext.jar before you build the main project. Note also that the
contrib module contains a number of native libraries used to improve 
performance; you may also want to rebuild these.</p>
<p>Plugins, installers etc can generally be built with ant, but some 
libraries may be written in other languages and have their own building 
procedures.</p>
<br>
