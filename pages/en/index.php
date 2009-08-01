      <div id="whatistitle">
	<h1>Share, Chat, Browse. Anonymously. On the Free&nbsp;Network.</h1>
      </div>
      <div id="whatis">
	<p>
	  Freenet is free software which lets you anonymously share files, browse 
	  and publish "freesites" (web sites accessible only through Freenet) and chat 
	  on forums, without fear of censorship. Freenet is decentralised to make it 
	  less vulnerable to attack, and if used in "darknet" mode, where users only 
	  connect to their friends, is very difficult to detect.
	  <br/>
	  <a href="whatis.html">Learn more!</a>
	</p>
      </div>

      <div id="screenshots">
	<a href="image/fN_screenshot.png"><img src="image/fN_screenshot.png"
	alt="freenet screenshot" width="100%" /></a>
      </div>      

      <div id="default">
      	   <p>We were unable to find your OS. Please turn on javascript, or go to the <a href="download.html">download page</a> to install Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="http://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Download</span>
   	   <span id="version">0.7.5 for Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Install</span>
   	   <span id="version">0.7.5 for Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Install</span>
	     	     <span id="version">0.7.5 for Linux/Unix</span>
	     	  </a>
	     </div>
	     <p style="float: left; clear: left;">
		If it doesn't work, please refer to the 
	     	<a href="download.html#unix">installation instructions</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Installation instructions and other systems installers.</a></p>

      <div id="news">
	<h4>Latest news</h4>
	<p>
	  (30 July 2009) <a href="news.html#build1226">Improvements to security and
	    preparation for big new performance feature in new stable build</a><br/>
	  (08 July 2009) <a href="news.html#big-donation-german-finance">Big
	    donation from</a> <a href="http://www.finanzvergleich.de/">German finance site</a><br/>
	  (12 June 2009) <a href="news.html#freenet-0-7-5-released">Freenet
	    0.7.5 released!</a><br/>
	  (7th May 2009) <a href="/news.html#another-big-donation-google">Another
	    big donation funds ongoing development</a><br/>
	  <a href="news.html">Older news</a>
	</p>
      </div>

      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");

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
			 
  			 if(OSName == "windows") {
				showDiv("windows");
				hideDiv("default");
  		 	 } else if (OSName != "") {
			       	showDiv(OSName);
				hideDiv("default");
			 } else {
			   	showDiv("windows");
				showDiv("macos");
				showDiv("unix");
				showDiv("default");
			 }
      </script>
