<!--
  jQuery library
-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="js/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
$(document).ready(function() {
    $("#mycarousel").jcarousel({
      'visible': 1,
      'scroll': 1,
      'wrap': 'both'
    });
});
//-->
</script>

<!-- Contents -->

      <div id="whatistitle" style="margin-bottom: 10px";>
	<h1>Share, Chat, Browse. Anonymously. On the Free&nbsp;Network.</h1>
      </div>
      <div class="whatis">
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

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/fN_screenshot.png"><img src="image/fN_screenshot_small.png"
	     alt="freenet screenshot" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">More Freenet screenshots</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="image/fN_screenshot.png" class="thickbox"><img src="image/fN_screenshot_small.png" width="383" height="309" alt="screenshot 2"/></a></li>  
             <li><a href="image/fN_screenshot_minimalist.png" class="thickbox"><img src="image/fN_screenshot_minimalist_small.png" width="383" height="311" alt="screenshot 3" /></a></li>  
             <li><a href="image/fN_screenshot_downloads.png" class="thickbox"><img src="image/fN_screenshot_downloads_small.png" width="383" height="298" alt="screenshot 5" /></a></li>  
             <li><a href="image/fN_screenshot_freetalk_messages.png" class="thickbox"><img src="image/fN_screenshot_freetalk_messages_small.png" width="383" height="303" alt="screenshot 6" /></a></li>  
             <li><a href="image/fN_screenshot_searched.png" class="thickbox"><img src="image/fN_screenshot_searched_small.png" width="383" height="298" alt="screenshot 7" /></a></li>  
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
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
	<br>
	<p>
	  (21 August 2009) <a href="news.html#more-peers">More and less connections for more speed (by popular demand!)</a><br/>
	  (8 August 2009) <a href="news.html#xml-vuln">Severe vulnerability in Java affecting Freenet:
	    Upgrade your Java Virtual Machine <b>now</b>!</a><br/>
	  (30 July 2009) <a href="news.html#build1226">Improvements to security and
	    preparation for big new performance feature in new stable build</a><br/>
	  (08 July 2009) <a href="news.html#big-donation-german-finance">Big
	    donation from</a> <a href="http://www.finanzvergleich.de/">German finance site</a><br/>
	  (12 June 2009) <a href="news.html#freenet-0-7-5-released">Freenet
	    0.7.5 released!</a><br/>
	  <a href="news.html">Older news</a>
	</p>
      </div>


      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");
			 hideDiv("screenshot_nojs");
			 showDiv("screenshot_js");
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
