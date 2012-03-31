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
	<h1>Partagez, Discutez, Naviguez. Anonymement. Sur Freenet.</h1>
      </div>
      <div class="whatis">
	<p>
	  Freenet est un logiciel libre qui vous permet de partager des fichiers, de naviguer
	  sur des freesites (sites web accessibles uniquement via Freenet) et d'en publier, ainsi
	  que de discuter sur des forums, le tout anonymement, et sans crainte de censure. Freenet
	  est décentralisé (il n'y a pas de serveur central) et donc moins vulnérable aux attaques ;
	  s'il est utilisé en mode "darknet", où vous vous connectez uniquement à vos amis, il est
	  très difficile à détecter.
	  <br/>
	  <a href="whatis.html">En savoir plus !</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="/image/fN_screenshot.png"><img src="/image/fN_screenshot_small.png"
	     alt="freenet screenshot" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">More Freenet screenshots</a></p>
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
      	   <p>Nous n'avons pas pu détecter votre système d'exploitation. Veuillez activer le javascript, ou bien rendez vous sur <a href="download.html">la page de téléchargement</a> pour télécharger et installer Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Téléchargement</span>
   	   <span id="version">0.7.5 pour Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Installation</span>
   	   <span id="version">0.7.5 pour Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Installation</span>
	     	     <span id="version">0.7.5 pour Linux/Unix</span>
	     	  </a>
	     </div>
	     <p style="float: left; clear: left;">
		Si le lien ne fonctionne pas, référez-vous aux <a href="download.html#unix">instructions d'installation</a>.
	     </p>
	</div>
	
	<p style="clear:left; font-size: 12px;"><a href="download.html">Instructions et programmes d'installation pour les autres systèmes.</a></p>

	<div id="donate_button">
	     <h4>Faire un don</h4>
	     <p>Freenet est un logiciel gratuit (et libre), et nous sommes une organisation à but non lucratif. Nous avons donc besoin de vos dons pour survivre.</p>
	     <p><a href="donate.html">Donner !</a></p>
	</div>

      <div id="news">
	<h4>Dernières nouvelles (en anglais pour l'instant)</h4>
	<p>
	  (21 August 2009) <a href="news.html#more-peers">More and less connections for more speed (by popular demand!)</a><br/>
	  (08 August 2009) <a href="news.html#xml-vuln">Severe vulnerability in Java affecting Freenet:
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
