<!--
  jQuery library
-->
<script type="text/javascript" src="/js/jquery-1.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="/js/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="/js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="/js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

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
	<h1>Teilen, Sprechen, Surfen. Anonym.In dem Freien&nbsp;Netz.</h1>
      </div>
      <div class="whatis">
	<p>
	  Freenet ist freie Software, die es Ihnen ermöglicht, <strong>anonym</strong> zu surfen, 
	  und <abbr title="Webseiten, die nur über Freenet zugänglich sind">Freeseiten</abbr> und Dateien zu <strong>veröffentlichen</strong> und sich zu <strong>Unterhalten</strong>, ohne Zensur fürchten zu müssen. Freenet ist <strong>dezentral</strong>, um es resistenter gegen Angriffe zu machen, und im "<strong>Darknet</strong>"-Modus sehr schwer zu entdecken, da sich Nutzer dann nur mit ihren Freunden verbinden.
	  <br/>
	  <a href="whatis.html">Mehr erfahren!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="/image/fN_screenshot.png"><img src="/image/fN_screenshot_small.png"
	     alt="freenet screenshot" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">Weitere Screenshots</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="/image/fN_screenshot.png" class="thickbox"><img src="/image/fN_screenshot_small.png" width="383" height="309" alt="screenshot 2"/></a></li>  
             <li><a href="/image/fN_screenshot_minimalist.png" class="thickbox"><img src="/image/fN_screenshot_minimalist_small.png" width="383" height="311" alt="screenshot 3" /></a></li>  
             <li><a href="/image/fN_screenshot_downloads.png" class="thickbox"><img src="/image/fN_screenshot_downloads_small.png" width="383" height="298" alt="screenshot 5" /></a></li>  
             <li><a href="/image/fN_screenshot_freetalk_messages.png" class="thickbox"><img src="/image/fN_screenshot_freetalk_messages_small.png" width="383" height="303" alt="screenshot 6" /></a></li>  
             <li><a href="/image/fN_screenshot_searched.png" class="thickbox"><img src="/image/fN_screenshot_searched_small.png" width="383" height="298" alt="screenshot 7" /></a></li>  
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
      	   <p>Wir konnten Ihr Betriebssystem nicht feststellen. Bitte aktivieren Sie Javascript oder folgen Sie den Installationsschritten auf der <a href="download.html">Download Seite</a>.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Download</span>
   	   <span id="version">0.7.5 für Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="https://freenetproject.org/jnlp/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Install</span>
   	   <span id="version">0.7.5 für Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="https://freenetproject.org/jnlp/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Install</span>
	     	     <span id="version">0.7.5 für Linux/Unix</span>
	     	  </a>
	     </div>
	     <p style="float: left; clear: left;">
		Wenn das nicht funktionieren sollte, lesen Sie bitte die
	     	<a href="download.html#unix">Installations-Anleitang</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Installations-Anleitungen und Installation für andere Betriebssysteme.</a></p>

	<div id="donate_button">
	     <h4>Spenden</h4>
	     <p>Wir verlangen von niemandem Geld für Download und Nutzung von Freenet. Wir sind eine gemeinnützige Organisation, die zum Überleben auf Ihre Spenden angewiesen ist.</p>
	     <p>Unser aktueller Kontostand ist von <b>$MONEYBALANCE</b> wird unseren einen bezahlten Entwickler und den Server für weitere <b>MONEYDAYS Tage</b> finanzieren.</p>
	     <p><a href="donate.html">Spenden Sie!</a></p>
	</div>

      <div id="news">
	<h4>Neuigkeiten</h4>
	<p>
	  (12th September 2012) <a href="https://emu.freenetproject.org/pipermail/devl/2012-September/036546.html">Released Freenet 0.7.5 build 1413</a><br/>
	  (13th April 2011) <a href="news.html#freedom-house-april-2011">Freenet top anti-censorship tool in survey of Chinese users!</a><br/>
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
