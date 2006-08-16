<body><h2>Download Freenet 0.5</h2>

<small><p>
Note that Freenet 0.5 is no-longer well supported as development effort has shifted to Freenet 0.7,
which you can download from <a href="/download.html">here</a>.
</p></small>

<h3>Important note for first time users</h3>

When you first start Freenet your node will know very little about the
network, meaning that it could take <b>several minutes or longer</b> to 
retrieve a web page.  Please be patient since Freenet will learn how to 
find information more effectively over time and its speed will gradually 
improve with use.
<p>

<i>If you have a firewall or a NAT box click <a 
href="/faq.html#firewall"><b>here</b></a> 
for some info.</i>

<BR>&nbsp;<BR>
<h3>Windows</h3>- Download and run 
<big><a href="http://downloads.freenetproject.org/freenet-java-webinstall.exe">freenet-java-webinstall.exe</a></big> which includes Java <B>or</B>
<br>- If you already have Java 5 update 4 or greater (<B>strongly</B> recommended for security, although v1.4.1 or greater works)
<big><a href="http://downloads.freenetproject.org/freenet-webinstall.exe">freenet-webinstall.exe</a></big><br>
<br>It will automatically install Freenet and other required components for you. When done, double-click on the small blue rabbit icon in your system-tray. 
<br>(Freenet contains <u><b>NO spyware or adware</b></u> , it's Free Software! The source code is publicly available for review)
<BR>&nbsp;<BR>
Freenet works best with <b>Windows 2000, XP Professional or NT.
</b>Windows ME, 98 and 95 work less well.
<!-- 2000 and Millenium Edition are different; all 2k's work good.  Millenium is also a bit borked.  The borked one is XP Home-->

<BR>&nbsp;<BR>
<h3>Unix/Linux</h3>
You need to have a recent Java Runtime Environment.  We have experienced
best results with Sun's Java Runtime Environment
which can be obtained from <a href="http://www.java.com/">http://www.java.com/</a>.
<BR>Java version 1.4.1 and later will work. However, be aware that there are applet security vulnerabilities in all versions prior to
Java 5 update 4. Generally, we recommend using at least Java 1.4.2.

<P>Currently Freenet does not run on Kaffe or GCJ, due to bugs in Classpath. This is being worked on.</P>
Once Java is installed, download 
<a 
href="http://downloads.freenetproject.org/freenet-stable-latest.tgz">freenet-stable-latest.tgz</a>. 
Get started by typing:
<pre>
$ tar xzf freenet-stable-latest.tgz
$ cd freenet
$ sh start-freenet.sh
</pre>

After you start Freenet wait a few seconds for it to start-up (on a slow
computer, you may need to wait about 30 seconds), and visit
http://127.0.0.1:8888/ in your web browser to access Freenet's user
interface.


<BR>&nbsp;<BR>
<h3>Hardware requirements</h3>
<b>Minimum:</b> 400MHz Pentium 2, with at least 192MB of RAM.<br>
<b>Recommended:</b> 1GHz or more processor with 256MB <!-- decreasing agaisnt my will :(-->RAM or 
more (especially if using Windows XP).


<BR>&nbsp;<BR>
<h3>Upgrading</h3>
After installing Freenet, Windows users can upgrade to the latest daily Freenet
"snapshot" release by clicking on "Update Snapshot" in the Freenet section of their
Start menu.
<p>
Linux users may similarily upgrade by running the update.sh shell script in the
freenet/ directory.
<p>
To see the latest changes of the builds in the stable branch, you can go to the
<b><a
href="/whatsnew.html">Changelog</b></a>.


<BR>&nbsp;<BR>
<h3>Source Code</h3>
Our 0.5 changelog is reachable <a href="/whatsnew.html">here</a>.
You can obtain the latest source code from SVN from <a href="https://emu.freenetproject.org/svn/branches/legacy/stable/">https://emu.freenetproject.org/svn/branches/legacy/stable/</a>, or you can download a daily snapshot:<ul>
<li><a href="http://downloads.freenetproject.org/freenet-stable-latest.src.tbz">Stable</a> - 
current stable branch source code</li>
<li><a 
href="http://downloads.freenetproject.org/freenet-unstable-latest.src.tbz">Unstable</a> 
- current unstable branch source code</li>
<li><a href="http://downloads.freenetproject.org/freenet-contrib-latest.src.tar.bz2">Contrib</a> - separate module needed to compile freenet-ext.jar; unpack this and one of the above in a common parent directory, and then run "ant distclean dist" to build everything.</li>
</ul><BR>
<!--end of empty space--></body>
<h3>Documentation</h3>

<p>This page contains links to documentation that would mainly be of
interest to developers of Freenet and Freenet-related tools.  Those 
with a higher level interest in Freenet's operation should look 
<a href="/papers.html">here</a>.</p>

<p>
<h3><a href="/fcp.html">FCP (Freenet Client 
  Protocol)</a></h3>
<p>FCP is intended to shield would-be Freenet client developers from the details and ever-changing internals of the Freenet node itself.</p>

<p>
<h3><a href="/fec.html">FEC (Forward Error-Correction) Protocol</a></h3>
<p>FEC specifically addresses the insertion and retrieval of Redundant Splitfiles.</p>

<p>
<h3><a href="/metadata.html">Freenet Metadata Spec</a></h3>
<p>This spec is for client metadata. It's intent is to provide
functionality for building web sites within Freenet, as well as
general description of the data inserted into Freenet.</p>
