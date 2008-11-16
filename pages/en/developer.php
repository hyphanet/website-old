<h2>Developer</h2>

<h3>Source Code</h3>
<p>We are using <a href="http://subversion.tigris.org/">subversion</a> as our source code managment system.

<p>You can obtain the latest source code from SVN using the following command line:</p>
<pre>svn co http://freenet.googlecode.com/svn/trunk/freenet/</pre>

<p>They are a few integration tools tied to the repository: here is what you need to know:
<ul>
<li>You might or might not have access to the full svn tree.</li>
<li>All the commits are sent to one of our self-hosted <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo">mailing list</a> and might be reviewed there (read you should subscribe to the mailing lists).
<li>We are using an auto-build tool: If you commit something which doesn't build you will get an email from emu (our development server) saying so.</li>
<li>In case you would like to do an "indent" only commit, please ensure your commit message matches the following regular expression : '^[ ]*[Ii]ndent(ing)?([ ])*(:|$)')' so that it can be programatically verified by our <a href="https://emu.freenetproject.org/svn/trunk/scripts">home grown tools</a>.</li>
<li>We have some level of integration in between <a href="https://bugs.freenetproject.org/">the freenet bug tracker</a> and our repository: If you want to link a ticket to a commit, ensure that your commit message matches '/\b(?:bug|issue)\s*[#]{0,1}(\d+)\b/i'. If you want a commit to resolve a ticket ensure it matches '/\b(?:(?:re){0,1}solve(?:d|s){0,1}|fix(?:ed|es){0,1})\s+(?:bug|issue)?\s*[#]{0,1}(\d+)\b/i'.</li>
</ul>

To get access to the repository you should contact us either through the <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl">development mailing list</a> or on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a> in the <a href="irc://irc.freenode.net/%23freenet">#freenet</a> channel at irc.freenode.net.
</p>

<h3>Build Instructions</h3>
<p>To build the source code you will need <a href="http://ant.apache.org/">Apache ANT</a>.</p>
<br>
