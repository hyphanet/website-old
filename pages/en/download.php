<h2>Download Freenet 0.7</h2>
<h3>Important note for first time users</h3>

<p>Freenet will run continually in the background, in order to maximise 
performance. Running it only when you are using it will <b>not</b> result
in good performance. Freenet has a footprint of around 200MB of RAM and
10% of a modern CPU, so this should not be a problem. We strongly recommend
you use the links on the start menu to shut down Freenet when you play
computer games, and start it back up afterwards. We will implement a system
tray icon for this in future.</p>

<p>If you know several people who are already using Freenet, you can enable
high security and only connect to them, but if you do not know anyone on
Freenet, you should set the security level to normal or low, and Freenet
should just work.</p>

<div id="jws">
<h2>Installation Instructions</h2>
Clicking the <big><big><a href="http://checksums.freenetproject.org/latest/freenet.jnlp">Install Freenet 0.7</a></big></big> link should start the installer up, assuming you have <a href="http://www.java.com/getjava/">Java</a> installed. If it doesn't work for some reason, you can try the platform specific instructions (<a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows instructions</a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac OSX instructions</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux and Unix-like instructions</a>).
</div>

<div style="display: none;" id="nojws">
<h2>Installation Instructions</h2>
If your platform is not the one listed below, select your specific platform: <a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows instructions</a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac OSX instructions</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux and Unix-like instructions</a><br>
</div>

<div id="windows">
<h3>Windows</h3>
- Download and run <big><a href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">the installer</a> (8MB)</big><br>
<br>
It will automatically install Freenet and other required components for you. When done, your default browser will automatically open up to Freenet's web-based user interface. <br>
(Freenet contains <u><b>NO spyware or adware</b></u> , it's Free Software! The source code is publicly available for review) <BR>
<BR>
Freenet works best with Windows XP Professional. Freenet will run on Vista and Windows 7 but the uninstaller is not perfect on those systems.
Freenet will not run on anything older than Windows 2000 Professional (i.e. 95/98/ME), and in any case you should not run an operating system
for which security support has been discontinued.<br>
</div>

<div id="macos">
<h3>Mac OSX</h3>
<a href="http://checksums.freenetproject.org/latest/freenet.jnlp">Install Freenet 0.7</a> using JavaWebStart.<br>
If this doesn't work, try the linux instructions.
</div>

<div id="unix">
<h3>Linux and other Unix-like systems</h3>
You need to have a recent <b>Java Runtime Environment</b> (JRE). We have experienced best results with Sun's Java Runtime Environment which can be obtained via your <a href="http://en.wikipedia.org/wiki/Package_manager">package manager</a> or from <a href="http://www.java.com/">http://www.java.com/</a>. <BR>
Java version 1.5 and later will work. However, be aware that there are applet security vulnerabilities in all versions prior to Java 1.5 update 4. Generally, we recommend using latest. Also, you will need wget for the below commands to work (on Ubuntu, apt-get install wget).

<p>Open a terminal and type:</p>
<pre>
wget <a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar">https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar</a> -O new_installer_offline.jar
java -jar new_installer_offline.jar
</pre>
<p>Alternatively, downloading <a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar">the installer</a> (<a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar.sig">gpg signature</a>) and then clicking on the file may work on some systems, but if there are problems we recommend the above command lines.</p>

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
<div id="mirrored">
<h3>Mirrored installation</h3>
<p>If you have a working Freenet installation directory that you have mirrored 
from one Unix machine to another (e.g. via rsync or unison), enabling the mirrored installation is not difficult.  Nothing in a Freenet installation cares about its host's IP address; it can't, or Freenet would fail on machines that get IP addressss from a DHCP pool</p>
<p>All you actually need to do is tell the system you've mirrored to that it should start the Freenet proxy daemon for you on boot.  Do <tt>crontab -l</tt> on the source machine, find the line that is tagged "FREENET AUTOSTART" and add that to your crontab on the mirrored machine.</p>
<p>However: each installation has a unique identity key generated at installation time. If you try to run two instances with the same identity <em>at the same time</em>, both proxy demons will become confused and upset. Don't do this!</p>
</div>
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
	if(OSName == "windows") {
		// Disable JWS on Windows
		// Windows vista/7 have UAC enabled by default. We need to propose the .exe as JWS won't work :|
		// But the wininstaller is better than the JWS installer anyway, so use it for all Windows.
		showDiv("nojws");
		showDiv("windows");
	} else if(Java >= 1 && navigator.javaEnabled()) {
		showDiv("jws");
	} else if (OSName != "") {
		showDiv("nojws");
		showDiv(OSName);
	}
//--></script>

<h3>Firewalls and routers</h3>

<p>Freenet should work fine with most routers, but if you are having problems
and you have a firewall or router, click <a href="/faq.html#firewall"><b>here</b></a>
for some info.</i></p>

<h3>So it's running, what do I do?</h3>

<p>When the installer closes, it should open a browser window pointing to
the first-time wizard. Here you can configure basic settings, and then
start using Freenet. You can access Freenet later on via the Browse 
Freenet icon on the desktop and your start menu. If the browser window
isn't opened, for example because you used the headless installer, you 
should open it manually by clicking the Browse Freenet icon/menu item, 
or visiting:</p>
<pre><a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a></pre>
<p>For best security you should use a separate browser for Freenet, 
preferably in privacy mode. On Windows, the Browse Freenet icon will 
try to use Chrome in incognito mode if possible. Internet Explorer does
not work well with Freenet, Firefox and Opera are widely used.</p>
<p>If you know anyone running Freenet, you can improve your security and 
help to build the network by connecting to their node. First, open the 
<a href="http://127.0.0.1:8888/addfriend/">Add a friend page</a>. You and your
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
<b>Minimum:</b> 400MHz Pentium 2, with at least 256MB of RAM, at least 1GB free disk space.<br>
<b>Recommended:</b> 1GHz or more processor with 512MB
<!-- decreasing agaisnt my will :(-->
RAM or more (especially if using Windows XP), 50GB disk space for a large datastore and some downloads.</p>
</p>
<p>Freenet will use a portion of your disk for its datastore, it uses this to store data from your node and other nodes, you can configure this to any size from 100MB upwards,
but we recommend at least 1GB. Freenet also uses disk space for your downloads. Freenet's memory usage is approximately 192MB plus 1MB for every 2GB of datastore.
<h3>Upgrading</h3>
<p>Freenet provides now an update-over-freenet mechanism ; We recommend people to use it in favour of the updating scripts. However, you may also update your node manually:</p>
<ul><li>Windows users can upgrade to the latest-stable Freenet release by clicking on "update.cmd" in the Freenet directory.</li>
<li>Linux users may similarly upgrade by running the update.sh shell script in the Freenet directory.</li></ul>
<p><small><b>Note:</b> You can still find the download page for Freenet 0.5 <a href="/download-old.html">here</a>, however 0.5 is no longer officially maintained or supported and 0.7 has many radical improvements not least being that it is significantly faster.</small></p>
<p><small><b>Source Code:</b> See <a href="/developer.php">the developer page</a> for git access, or download the lastest stable tarball <a href="http://downloads.freenetproject.org/alpha/freenet-FREENETTAG-source.tar.bz2">here</a>.</p>
