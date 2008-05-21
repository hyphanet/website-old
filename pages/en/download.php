<h2>Download Freenet 0.7</h2>
<h3>Important note for first time users</h3>

<p>In an ideal world, all Freenet users would only connect to people they
trust (see your Friends page once your node is installed). In practice, if 
you don't know anyone already on Freenet you will have to enable promiscuous 
mode so your node automatically connects to other nodes (this is less 
secure). It may take several minutes for your node to connect to enough 
nodes for Freenet to be usable, and performance will likely improve over 
time after that. You will get best performance if you can leave your node
running 24x7.</p>

<p><i>If you have a firewall or a NAT box click <a href="/faq.html#firewall"><b>here</b></a>
for some info.</i></p>

<div id="jws">
<h2>Installation Instructions</h2>
Clicking the <big><big><a href="http://downloads.freenetproject.org/alpha/installer/mac/freenet.jnlp">Install Freenet 0.7</a></big></big> link should start the installer up. If it doesn't work for some reason, you can try the platform specific instructions (<a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows instructions</a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac OSX instructions</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux and Unix-like instructions</a>).
</div>

<div style="display: none;" id="nojws">
<h2>Installation Instructions</h2>
If your platform is not the one listed below, select your specific platform: <a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows instructions</a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac OSX instructions</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux and Unix-like instructions</a><br>
</div>

<div id="windows">
<h3>Windows</h3>
- Download and run <big><a href="http://downloads.freenetproject.org/alpha/installer/install.exe">freenet webinstall</a> (3MB)</big><br>
<br>
It will automatically install Freenet and other required components for you. When done, your default browser will automatically open up to Freenet's web-based user interface. <br>
(Freenet contains <u><b>NO spyware or adware</b></u> , it's Free Software! The source code is publicly available for review) <BR>
<BR>
Freenet works best with 
<ul>
<li><b>Windows XP Professional</b> or</li>
<li><b>Windows 2000 Professional</b></li> 
</ul>
Windows 95, 98 and ME (Millennium Edition) don't work as well; in particular, the installer won't run on those operating systems.
Also we strongly recommend you not run an OS for which security support has been discontinued.<br>
If the installer doesn't work (something seriously wrong) then please let us know, install Java, and try the Linux instructions below.
</div>

<div id="macos">
<h3>Mac OSX</h3>
<a href="http://downloads.freenetproject.org/alpha/installer/mac/freenet.jnlp">Install Freenet 0.7</a> using JavaWebStart.<br>
If this doesn't work, try the linux instructions below.
</div>

<div id="unix">
<h3>Linux and other Unix-like systems</h3>
You need to have a recent <b>Java Runtime Environment</b> (JRE). We have experienced best results with Sun's Java Runtime Environment which can be obtained via your <a href="http://en.wikipedia.org/wiki/Package_manager">package manager</a> or from <a href="http://www.java.com/">http://www.java.com/</a>. <BR>
Java version 1.5 and later will work. However, be aware that there are applet security vulnerabilities in all versions prior to Java 1.5 update 4. Generally, we recommend using latest.

<p>Open a terminal and type:</p>
<pre>
wget <a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar">http://downloads.freenetproject.org/alpha/installer/new_installer.jar</a>
java -jar new_installer.jar
</pre>
<p>Alternatively, downloading <a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar">the installer</a> and then clicking on the file may work on some systems, but if there are problems we recommend the above command lines.</p>

<p>Or do the following on a headless system:</p>
<pre>
wget <a href="http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz">http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz</a>
cat freenet07.tar.gz | gzip -d | tar xv
cd freenet
./run.sh start
</pre>
<p>Read the <a href="faq.html#fproxy-lan">FAQ</a> on how to enable web-access from a remote computer.</p>
<!-- Deleted until it can be updated (#freenet-refs is no more; opennet)
<p>You might find the <a href="http://www.minihowto.org/freenet_howto/Freenet%2520-%2520a%2520very%2520short%2520howto_3077.html">mini-howto</a> useful (it might be of interest to Windows users too).</p>
-->
</div>

<script type="text/javascript"><!--
	// Try to detect if Sun Java 1.5.0 or higher is installed
	var Java = PluginDetect.isMinVersion('Java', '1,5,0');

	// Os detection
	var OSName="";
	if (navigator.appVersion.indexOf("Win")!=-1)
		OSName="windows";
	else if (navigator.appVersion.indexOf("Mac")!=-1)
		OSName="macos";
	else if (navigator.appVersion.indexOf("X11")!=-1)
		OSName="unix";
	else if (navigator.appVersion.indexOf("Linux")!=-1)
		OSName="unix";

	hideDiv("jws");
	hideDiv("nojws");
	hideDiv("windows");
	hideDiv("macos");
	hideDiv("unix");
	if(navigator.userAgent.indexOf("Windows NT 6.0") > -1) {
		// Windows vista has UAC enabled by default. We need to propose the .exe as JWS won't work :|
		showDiv("nojws");
		showDiv("windows");
	} else if(Java >= 1 && navigator.javaEnabled()) {
		showDiv("jws");
	} else if (OSName != "") {
		showDiv("nojws");
		showDiv(OSName);
	}
//--></script>

<h3>After installing</h3>

<P>Afer you start Freenet, wait a few seconds for it to start up (on a
slow computer, you may need to wait about 30 seconds), and visit</p>
<pre>http://127.0.0.1:8888/wizard/</pre>
<p>in your web browser to access Freenet's user
interface. Freenet will ask you a few questions and then go to the node homepage,
<pre>http://127.0.0.1:8888/</pre>
<p>from which you can access freesites, add friends etc. Hopefully the installer
will open the page for you, so you won't be reading this.</p>

<h3>Offline installation</h3>
Some people might encounter difficulties connecting to our server because of censorship. We do have an offline version of the installer available : <a href="http://downloads.freenetproject.org/alpha/installer/">Freenet 0.7 offline installer</a>. You shouldn't use it unless you have to (it's bigger to download and might not be as up to date as the online one).

<h3>So it's running, what do I do?</h3>

<p>You need to get connected.  The wizard will ask you whether to enable 
insecure mode. If you do, your Freenet node should automatically announce 
itself and start working within a few minutes. If not, Freenet will not 
work until you add some friends on the Friends page.</p>

<p>If you know anyone running Freenet, even if you have enabled insecure 
mode, you can improve your security and help to build the network by 
connecting to their node. Ask them for their reference, and give them yours.
If you visit</p>
<pre>http://127.0.0.1:8888/friends/</pre>
<p>in your browser, you can see your reference at the bottom and you can add
other people's references, either by cutting and pasting the reference
itself, or by pointing Freenet to a URL or a file containing their
reference.</p>
<p><b>Note: You need to add their reference and they need to add 
yours before your nodes can communicate.</b></p>
<p>If you don't know anyone running Freenet, enable insecure mode
(also known as opennet; the first time wizard will ask you), and wait 
a few minutes for the node to announce itself, and Freenet will 
start working by itself.</p>

<h3>So I'm connected, what do I do?</h3>

<p>You can find links to some pages in the index on the FProxy homepage at:</p>
<pre>http://127.0.0.1:8888/</pre>
<p>You can find links to some <a href="http://wiki.freenetproject.org/FreenetZeroPointSevenApps">third party 
applications for freenet</a>.</p>

<h3>It doesn't work, now what?</h3>
<p>If you have problems installing or running Freenet, please contact us on
<a href="mailto:support@freenetproject.org">the support list</a> 
(<a href="/lists.html">subscribe here</a>), or join us on 
<a href="http://en.wikipedia.org/wiki/IRC" title="Internet Relay Chat is a non-anonymous chat system used by many developers and users of Freenet">IRC</a>
in the <a href="irc://irc.freenode.net/freenet">#freenet</a> channel at irc.freenode.net.</p>
	
<h3>Hardware requirements</h3>
<p>
<b>Minimum:</b> 400MHz Pentium 2, with at least 192MB of RAM.<br>
<b>Recommended:</b> 1GHz or more processor with 256MB
<!-- decreasing agaisnt my will :(-->
RAM or more (especially if using Windows XP).
</p>
<h3>Upgrading</h3>
<p>Freenet provides now an update-over-freenet mechanism ; We recommend people to use it in favour of the updating scripts. However, you may also update your node manually:</p>
<ul><li>Windows users can upgrade to the latest-stable Freenet release by clicking on "update.cmd" in the Freenet directory.</li>
<li>Linux users may similarly upgrade by running the update.sh shell script in the freenet/bin/ directory.</li></ul>
<h3>Source Code</h3>
<p>You can obtain the latest source code from SVN:</p>
<pre>svn co --ignore-externals http://freenet.googlecode.com/svn/trunk/freenet/</pre>
<BR>
<p>
<small><b>Note:</b> You can still find the download page for Freenet 0.5 <a href="/download-old.html">here</a>, however 0.5 is no longer officially maintained or supported and 0.7 has many radical improvements not least being that it is significantly faster.</small>
</p>
