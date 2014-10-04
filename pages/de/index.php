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
	<h1>Teilen, Unterhalten, Surfen. Anonym.In dem Freien&nbsp;Netz.</h1>
      </div>
      <div class="whatis">
	<p>
	  Freenet ist freie Software, die es Ihnen ermöglicht, <strong>anonym</strong> zu surfen, 
	  und <abbr title="Webseiten, die nur über Freenet zugänglich sind">Freeseiten</abbr> und Dateien zu <strong>veröffentlichen</strong> und sich zu <strong>unterhalten</strong>, ohne Zensur fürchten zu müssen. Freenet ist <strong>dezentral</strong> organisiert, um es resistenter gegen Angriffe zu machen, und im "<strong>Darknet</strong>"-Modus sehr schwer zu entdecken, da sich Nutzer dann nur mit ihren Freunden verbinden.
	  <br/>
	  <a href="whatis.html">Mehr erfahren!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">Weitere Screenshots</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="image/screenshot/browse.png" class="thickbox"><img src="image/screenshot/browse.png" width="383" height="311" alt="Bookmarks" /></a></li>
             <li><a href="image/screenshot/sone.png" class="thickbox"><img src="image/screenshot/sone.png" width="383" height="298" alt="Sone" /></a></li>
             <li><a href="image/screenshot/fms.png" class="thickbox"><img src="image/screenshot/fms.png" width="383" height="298" alt="FMS forum" /></a></li>
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
      	   <p>Wir konnten Ihr Betriebssystem nicht feststellen. Bitte aktivieren Sie Javascript oder folgen Sie den Installationsschritten auf der <a href="download.html">Download Seite</a>.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenetproject.org/jnlp/FreenetInstaller.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Download</span>
   	   <span id="version">0.7.5 für Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="/jnlp/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Installieren</span>
   	   <span id="version">0.7.5 für Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="/jnlp/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Installieren</span>
	     	     <span id="version">0.7.5 für Linux/Unix</span>
	     	  </a>
	     </div>
	     <p style="clear: left;">
		Wenn das nicht funktionieren sollte, lesen Sie bitte die
	     	<a href="download.html#unix">Installations-Anleitang</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Installations-Anleitungen und Installation für andere Betriebssysteme.</a></p>

    <div style="clear: both"></div>

	<div id="donate_button">
	     <h4>Spenden</h4>
	     <p>Wir verlangen von niemandem Geld für Download und Nutzung von Freenet. Wir sind eine gemeinnützige Organisation, die zum Überleben auf Ihre Spenden angewiesen ist.</p>
	     <p>Unser aktueller Kontostand ist von <b>$MONEYBALANCE</b> wird unseren bezahlten Entwickler und den Server für weitere <b>MONEYDAYS Tage</b> finanzieren.</p>
	     <p><a href="donate.html">Spenden</a></p>
	</div>
  <div id="testimonials">
<!--todo: random testimonial, as soon as we have enough-->
	<h4>Erfolgsgeschichten</h4>
      <blockquote>„Ich lauf seit Monaten Darknet only. Für das was ich mache reicht es mit 8 peers locker: ich downloade nix und hab kein wot laufen.  Ich hatte mal 15 darknet peers, da war nicht viel unterschied zu sehen zu nem 15 peer opennet client.“ — Ratchet</blockquote>
  </div>
      <div id="news">
	<h4>Neuigkeiten</h4>
    <p>
      Release Notes werden im <a href="https://emu.freenetproject.org/pipermail/devl/">devl Archiv</a> veröffentlicht.
    </p>
	<p>
		  (12th July 2014) <a href="news.html#build01464">Freenet 0.7.5 build 1464 released</a><br/>
		  (14th June 2014) <a href="news.html#build01463">Freenet 0.7.5 build 1463 released</a><br/>
		  (26th May 2014) <a href="news.html#build01462">Freenet 0.7.5 build 1462 released</a><br/>
		  (30th March 2014) <a href="news.html#build01461">Freenet 0.7.5 build 1461 released</a><br/>
		  (1st March 2014) <a href="news.html#gsoc-2014">Freenet accepted into Google Summer of Code!</a><br/>
    </p>
    <p>
	  <a href="news.html">Ältere Neuigkeiten</a>
	</p>
      </div>

    </div>

    <div id="commits" style="clear: both;">
        <h4>Neuste Code-Änderungen</h4>
        <div id="latest-commits"></div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#latest-commits').githubInfoWidget(
                { users: ['freenet', 'freenet'],
                  repos: ['fred', 'plugin-WebOfTrust'],
                  branches: ['next', 'master'],
                  last: 5, limitMessageTo: 50 });
        });
    </script>

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
