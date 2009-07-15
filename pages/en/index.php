      <div id="whatis">
	<h1>Share, chat and browse anonymously on the Free&nbsp;Network</h1>
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
      
      <div id="windows" class="sprites download">
   	<a href="http://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Download</span>
   	   <span id="version">0.7.5 for Windows</span>
   	</a>
      </div>
	
	<div id="unix" class="download sprites">
	     <a href="http://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">
	     	<span id="software">Freenet</span>
	     	<span id="action">Download</span>
	     	<span id="version">0.7.5 for Unix</span>
	     </a>
	</div>
	
	<div id="macos" class="download sprites">
	     <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
	     	<span id="software">Freenet</span>
  	     	<span id="action">Download</span>
	     	<span id="version">0.7.5 for Mac</span>
	     </a>
	</div>

	<p style="clear:both;">If you need further informations about installation, click <a href="download.html">here</a>.</p>

      <div id="news">
	<h4>Latest news</h4>
	<p>
	  (07/08/2009) <a href="news.html#big-donation-german-finance">Big
	    donation from</a> <a href="http://www.finanzvergleich.de/">German finance site</a><br/>
	  (06/12/2009) <a href="news.html#freenet-0-7-5-released">Freenet
	    0.7.5 released!</a><br/>
	  (05/07/2009) <a href="/news.html#another-big-donation-google">Another
	    big donation funds ongoing development</a><br/>
	  <a href="news.html">Older news</a>
	</p>
      </div>

      <script type="text/javascript"><!--
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
			 showDiv(OSName);
      </script>
