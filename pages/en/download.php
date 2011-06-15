      <h1>Download Freenet</h1>
      <h3>Important note for first time users</h3>
      <p>
    For best performance, Freenet will run continually. It should
    not interfere with your computer usage, as it requires around 
    200MB of RAM and 10% of one CPU core, plus some disk access. We 
    strongly recommend you shut down Freenet while playing computer 
    games etc. On Windows you can do this from the system tray icon, 
    on other systems use the links on the system menu or the desktop.
      </p>
      <p>
    Normally Freenet will connect automatically and should "just work",
    automatically connecting to other nodes (Strangers). However,
    if you know several people who are already using Freenet, you can
    enable high security mode and 
    <a href="http://127.0.0.1:8888/addfriend/">add them as Friends</a>, 
	so Freenet will only connect to them, making your usage of Freenet 
	almost undetectable, while still being able to access the rest of the
	network through their friends' friends etc. This will be slower unless 
	you add 10+ friends who are usually online when you are.
      </p>

      <div id="nojws">
	
	<h2>Installation Instructions</h2>
	<p>
	  Show instructions for:
	  <a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows
	    </a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac
	    OSX</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux
	    etc</a><br/>
	</p>
      </div>
      
      <div id="windows">
	
	<h3>Windows</h3>
	
	<p>
	  - Download and
	  run <big><a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">the
	      installer</a> (8MB)</big><br/> 
	  <br/>
	  It will automatically install Freenet and other required
	  components for you. When done, your default browser will
	  automatically open up to Freenet's web-based user
	  interface. <br/>
	  (Freenet contains <b style="text-decoration: underline;">NO spyware or adware</b> ,
	  it's Free Software! The source code is publicly available
	  for review) <br/> 
	  <br/>
	  Freenet requires Windows XP or later.<br/>
	</p>
	
      </div>

      <div id="macos">
	
	<h3>Mac OSX</h3>
	
	<p>
	  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">Install Freenet 0.7</a> using JavaWebStart.<br/>
	  If this doesn't work, try <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">the instructions for Linux</a>.
	</p>
	
      </div>
      
      <div id="unix">
	
	<h3>Linux and other Unix-like systems</h3>

	<p>
	  Try the <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">JavaWebStart installer</a>.<br/>
	  If it doesn't work, please try the instructions given below.
	</p>	
	<p>
	  You need to have a recent <b>Java Runtime Environment</b>
	  (JRE). We have experienced best results with Sun's Java
	  Runtime Environment which can be obtained via
	  your <a href="http://en.wikipedia.org/wiki/Package_manager">package
	    manager</a> or
	  from <a href="http://www.java.com/">http://www.java.com/</a>.<br/> 
	</p>
	<p>
	  You need Java version 1.6. You should keep it up to date to
	  avoid problems and for best performance. Also, you might need
	  wget for the commands below to work (on Ubuntu, do
	  "apt-get install wget" on a console).
	</p>

	<p>
	  Open a terminal and type:
	</p>
	
	<!-- please use "pre" as following (ie a newline after the
	openning pre, and no newline before the ending pre) -->

	<pre>
	  wget <a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar</a> -O new_installer_offline.jar
	  java -jar new_installer_offline.jar</pre>
	
	<p>
	  Alternatively,
	  downloading <a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">the
	    installer</a>
	  (<a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar.sig">gpg
	    signature</a>) and then clicking on the file may work on
	  some systems, but if there are problems we recommend the
	  above command lines.
	</p>
	
	<p><b>Headless servers:</b> The standard installer won't work on a headless (console-only) system unless you install the X libraries and ssh -X into it. We <i>strongly</i> recommend you do this. Or you can use the deprecated and unreliable <a class='maybeSwitchProtocol' href="https://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz">headless installer</a>. To make this work, you must first install the latest Sun Java, make sure it is on the path (update-java-alternatives on Ubuntu), and make sure you have wget or curl installed. Also you should increase the memory limit in wrapper.conf after install. Then open http://127.0.0.1:8888/ in a web browser (see <a href="faq.html#fproxy-lan">here</a> for how to open it to your LAN).</p>

	<div id="mirrored">
	  
	  <h3>Mirrored installation</h3>
	  
	  <p>
	    If you have a working Freenet installation directory that you have mirrored 
	    from one Unix machine to another (e.g. via rsync or
	    unison), enabling the mirrored installation is not
	    difficult.  Nothing in a Freenet installation cares
	    about its host's IP address; it can't, or Freenet would
	    fail on machines that get IP addressss from a DHCP pool
	  </p>

	  <p>
	    All you actually need to do is tell the system you've
	    mirrored to that it should start the Freenet proxy
	    daemon for you on boot.  Do <tt>crontab -l</tt> on the
	    source machine, find the line that is tagged "FREENET
	    AUTOSTART" and add that to your crontab on the mirrored
	    machine.
	  </p>
	  
	  <p>
	    However: each installation has a unique identity key
	    generated at installation time. If you try to run two
	    instances with the same identity <em>at the same
	      time</em>, both proxy demons will become confused and
	    upset. Don't do this!
	  </p>
	  
	</div>
	
    <h3>HOWTO</h3>  
	      
      	     <p>You might find the <a href="http://www.minihowto.org/freenet_howto/freenet a very short minihowto.html">mini-howto</a> useful (it might be of interest to Windows users too).</p>

      </div>
      
      <script type="text/javascript">
					 // Try to detect if Sun Java 1.5.0 or higher is installed
					 //var Java = PluginDetect.isMinVersion('Java', '1,5,0');
					 
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
					 
					 hideDiv("windows");
					 hideDiv("macos");
					 hideDiv("unix");
					 if (OSName != "") {
					   showDiv(OSName);
					 } else {
					   showDiv("windows");
					   showDiv("macos");
					   showDiv("unix");
					 }
      </script>
      
      <h3>Firewalls and routers</h3>
      
      <p>
	Freenet should work fine with most routers, but if you are having problems
	and you have a firewall or router, click <a href="faq.html#firewall"><b>here</b></a>
	for some info.
      </p>
      
      <h3>So it's running, what do I do?</h3>
      
      <p>
	When the installer closes, it should open a browser window pointing to
	the first-time wizard. Here you can configure basic settings, and then
	start using Freenet. You can access Freenet later on via the system tray
	menu (bottom right on the screen), or use the Browse Freenet shortcut on the 
	desktop and/or start menu. If it doesn't work, open 
	<a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a> in your web browser.
      
      <p>
	For best security you should use a separate browser for Freenet, 
	preferably in privacy mode. On Windows, the system tray menu will 
	try to use Chrome in incognito mode if possible. Internet Explorer does
	not work well with Freenet, Firefox and Opera are widely
	used.
      </p>
      
      <p>
	If you know anyone running Freenet, you can improve your security and 
	help to build a robust network by connecting to their node. First, open the 
	<a href="http://127.0.0.1:8888/addfriend/">Add a friend page</a>. You and your
	friend should each download their "node reference". Send the file to
	the other person, and add his node reference using the form at the bottom
	of the page. When both are added, your friend's node should show up on the Friends 
	page, probably as "CONNECTED" or "BUSY". You can set a name for your node
	on the config page to make it easier to see who it is. Only add nodes run by people
	<b>you actually know</b>, whether online or offline, as adding total strangers
	harms performance and does not improve security much (they could be the bad guys!).
      </p>
      
      <h3>So I'm connected, what do I do?</h3>
      
      <p>
    Freenet itself includes anonymous websites ("freesites"), filesharing, searching, and 
    more, but you can also use <a href="http://wiki.freenetproject.org/FreenetZeroPointSevenApps">third party 
	applications</a> for chat, filesharing, to help you upload freesites, etc.
      </p>
      
      <h3>It doesn't work, now what?</h3>
      
      <p>
	If you have problems installing or running Freenet, please contact us on
	<a href="mailto:support@freenetproject.org">the support list</a> 
	(<a href="lists.html">subscribe here</a>), or join us on IRC on the
	#freenet channel on irc.freenode.net (try <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">here</a>).
      </p>
      
      <h3>Hardware requirements</h3>
      <p>
    Generally a 1GHz processor and 1GB of RAM should be fine. Freenet will run on smaller
    systems, but it uses at least 128MB of RAM, so unless the system
    does nothing else it will struggle in less than 512MB. However, the 
    processor is less of a problem, people have been known to run it on 400MHz Pentium 2's or
    ATOM's, although downloads and browsing would be slow.</p>
    
      <p>
	Freenet will use a portion of your disk for storing data, 
	you can configure this to any size from 100MB upwards, but
	we recommend at least 1GB. Freenet also uses disk space for
	your downloads. Freenet's memory usage is approximately
	192MB plus 1MB for every 2GB of datastore.
      </p>
      
      <p>
      On 64-bit Windows, we will install a 32-bit Java Virtual Machine because 
      of limitations of the <a href="http://wrapper.tanukisoftware.org/doc/english/download.jsp">Java Service Wrapper</a>.
      This will not necessarily auto-update itself, so you may need to <a href="http://www.java.com/en/download/manual.jsp">update it occasionally</a>.
      </p>
      
      <h3>Upgrading</h3>
      
      <p>
	Freenet provides an update-over-freenet mechanism:
	It will keep itself up to date automatically from other
	Freenet nodes, and this will normally work even if it is
	unable to route to them due to them being too new. This is
	anonymous and secure, and we recommend people use it.
	However, if something is severely broken, you can update
	your node manually from our servers:</p>
      
      <ul>
	<li>Windows users can upgrade to the latest-stable Freenet
	  release from the system tray menu, or by running "update.cmd" in the Freenet
	  directory.</li>
	<li>Mac and Linux users may upgrade by running the
	  update.sh shell script in the Freenet directory.</li>
      </ul>
      
      <p>
	<small>
	  <b>Source Code:</b>
	  See <a href="developer.html">the developer page</a> 
	  for git access, or download the lastest stable
	  tarball <a class='maybeSwitchProtocol' href="https://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2">here</a> (<a href="https://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2.sig">signature</a>).
	</small>
      </p>
