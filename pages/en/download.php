<h2>Download Freenet 0.7</h2>
<h3>Important note for first time users</h3>

<p>In an ideal world, all Freenet users would only connect to people they
trust (see your Friends page once your node is installed). In practice, if 
you don't know anyone already on Freenet you will have to set the network 
security level (on the config page) to "normal" or "low", so that your node 
automatically connects to other nodes. It may take several minutes for your 
node to connect to enough nodes for Freenet to be usable, and performance 
will likely improve over time after that. You will get best performance if 
you can leave your node running 24x7, so by default the installer will
install a service/cronjob to start Freenet when your computer boots up. 
Since Freenet is a distributed network, you will <b>not</b> get good performance 
if you only run it when you are actually using it.</p>

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
<p>Alternatively, downloading <a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar">the installer</a> (<a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar.sig">sig</a>) and then clicking on the file may work on some systems, but if there are problems we recommend the above command lines.</p>

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

<h3>Offline installation</h3>
<p>Some people might encounter difficulties connecting to our server because of censorship. We do have an offline version of the installer available : <a href="http://downloads.freenetproject.org/alpha/installer/new_installer_offline.jar">Freenet 0.7 offline installer</a>. You shouldn't use it unless you have to (it's bigger to download and might not be as up to date as the online one).</p>

<div id="unix">
<h3>Mirrored installation</h3>
<p>If you have a working Freenet installation directory that you have mirrored 
from one Unix machine to another (e.g. via rsync or unison), enabling the mirrorred installation is not difficult.  Nothing in a Freenet installation cares about its host's IP address; it can't, or Freenet would fail on machines that get IP addressss from a DHCP pool</p>
<p>All you actually need to do is tell the system you've mirrored to that it should start the Freenet proxy daemon for you on boot.  Do <tt>crontab -l</tt> on the source machine, find the line that is tagged "FREENET AUTOSTART" and add that to your crontab on the mirrored machine.</p>
</div>

<h3>So it's running, what do I do?</h3>

<p>When the installer closes, it should open a browser window pointing to
the first-time wizard. Here you can configure basic settings, and then
start using Freenet. You can access Freenet later on via the Browse 
Freenet icon on the desktop and your start menu. If the browser window
isn't opened, for example because you used the headless installer, you 
should open it manually:</p>
<pre><a href="http://127.0.0.1:8888/wizard/">http://127.0.0.1:8888/wizard/</a></pre>
<p>It is best to use the Browse Freenet icon, because this uses a 
customised Firefox profile optimised for Freenet, improving security and
performance.</p>
<p>If you know anyone running Freenet, you can improve your security and 
help to build the network by connecting to their node. First, open the 
<a href="http://127.0.0.1:8888/friends/">Friends page</a>. You and your
friend should each download their "node reference". Send the file to
the other person, and add his node reference using the form at the bottom
of the page. When both are added, your friend's node should show up on the Friends 
page, probably as "CONNECTED" or "BUSY". You can set a name for your node
on the config page to make it easier to see who it is.</p>
<p>Note that you should only connect to nodes run by people <b>you actually
know</b>. If you add noderefs from total strangers, this will not 
significantly improve your security (they could be NSA, after all), and will
reduce the performance of the network.</p>

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
<li>Linux users may similarly upgrade by running the update.sh shell script in the Freenet directory.</li></ul>
<h3>Source Code</h3>
<p>You can obtain the latest source code from SVN:</p>
<pre>svn co --ignore-externals http://freenet.googlecode.com/svn/trunk/freenet/</pre>
<BR>
<p>
<small><b>Note:</b> You can still find the download page for Freenet 0.5 <a href="/download-old.html">here</a>, however 0.5 is no longer officially maintained or supported and 0.7 has many radical improvements not least being that it is significantly faster.</small>
</p>
