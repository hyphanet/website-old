<body><h2>Download Freenet</h2>

<h3>Important note for first time users</h3>

When you first start Freenet your node will know very little about the
network, meaning that it could take <b>several minutes or longer</b> to 
retrieve a web page.  Please be patient since Freenet will learn how to 
find information more effectively over time and its speed will gradually 
improve with use.
<p>

<i>If you have a firewall or a NAT box click <a 
href="http://freenetproject.org/index.php?page=faq#firewall"><b>here</b></a> 
for some info.</i>


<h3>Windows</h3>- Download and run <big><a href="http://downloads.freenetproject.org/freenet-java-webinstall.exe">freenet-java-webinstall.exe</a> </big>or<br>- If you already have Java 1.4.1 or later installed <big><a href="http://downloads.freenetproject.org/freenet-webinstall.exe">freenet-webinstall.exe</a></big><br><br>It will automatically install Freenet and other required components for you. When done, double-click on the small blue rabbit icon in your task-tray. <br>
(Freenet contains <u><b>NO spyware or adware</b></u> , it's Free Software! The source code is publicly available for review)
<p>Freenet works best with <b>Windows 2000, XP Professional or NT.
</b>Windows ME, 98 and 95 work less well.</p>
<!-- 2000 and Millenium Edition are different; all 2k's work good.  Millenium is also a bit borked.  The borked one is XP Home-->
<h3>Unix/Linux</h3>
You need to have a recent Java Runtime Environment.  We have experienced
best results with Sun's Java Runtime Environment (versions 1.4.1 and later) 
which can be obtained from <a href="http://java.sun.com/">http://java.sun.com/</a>. Currently Freenet does not run on Kaffe or GCJ, due to bugs in Classpath. This is being worked on.
Once Java is installed, download 
<a 
href="http://freenetproject.org/snapshots/freenet-stable-latest.tgz">freenet-stable-latest.tgz</a>. 
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

<h3>Hardware requirements</h3>
<b>Minimum:</b> 400MHz Pentium 2, with at least 192MB of RAM.<br>
<b>Recommended:</b> 1GHz or more processor with 256MB <!-- decreasing agaisnt my will :(-->RAM or 
more (especially if using Windows XP).

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
href="http://www.freenetproject.org/index.php?page=whatsnew">Changelog</b></a>.

<h3>Source Code</h3>
You can obtain the latest source code from SVN from <a href="https://emu.freenetproject.org/svn/trunk/">https://emu.freenetproject.org/svn/</a>, or you can download a daily snapshot:<ul>
<li><a href="http://freenetproject.org/snapshots/freenet-stable-latest.src.tbz">Stable</a> - 
current stable branch source code</li>
<li><a 
href="http://freenetproject.org/snapshots/freenet-unstable-latest.src.tbz">Unstable</a> 
- current unstable branch source code</li>
<li><a href="http://downloads.freenetproject.org/freenet-contrib-latest.src.tar.bz2">Contrib</a> - separate module needed to compile freenet-ext.jar; unpack this and one of the above in a common parent directory, and then run "ant distclean dist" to build everything.</li>
</ul>
<!--end of empty space--></body>
