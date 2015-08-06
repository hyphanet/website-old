<!--
  jQuery library
-->
<script type="text/javascript" src="/js/jquery-1.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="/js/jcarousel/lib/jquery.jcarousel.pack.js"></script>

<!--
  GitHub commits widget
-->
<script type="text/javascript" src="js/github-commits-widget/github.commits.widget-3.js"></script>

<!--
  Github commits widget stylesheet
-->

<link rel="stylesheet" type="text/css" href="js/github-commits-widget/style.css" />

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
	  Partagez des fichiers, discutez sur les forums, naviguez ou publiez anonymement, sans crainte de censure! Connectez vous a vos amis pour améliorer votre securité! 
	  <br/>
	  <a href="whatis.html">En savoir plus !</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">More Freenet screenshots</a></p>
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
      	   <p>Nous n'avons pas pu détecter votre système d'exploitation. Veuillez activer le javascript, ou vous rendre sur <a href="download.html">la page de téléchargement</a> pour télécharger et installer Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenetproject.org/jnlp/FreenetInstaller.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Téléchargement</span>
   	   <span id="version">0.7.5 pour Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="/jnlp/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Installation</span>
   	   <span id="version">0.7.5 pour OS X</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="/jnlp/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Installation</span>
	     	     <span id="version">0.7.5 pour GNU/Linux &amp; Unix</span>
	     	  </a>
	     </div>
	     <p style="clear: left;">
		Si le lien ne fonctionne pas, référez-vous aux <a href="download.html#unix">instructions d'installation</a>.
	     </p>
	</div>
	
	<p style="clear:left; font-size: 12px;"><a href="download.html">Instructions et programmes d'installation pour les autres systèmes d'exploitation.</a></p>

    <div style="clear: both"></div>

	<div id="donate_button">
	     <h4>Faire un don</h4>
	     <p>Freenet est un logiciel gratuit (et libre); nous sommes une organisation à but non lucratif qui a besoin de de vos dons pour survivre.</p>
	     <p><a class="donate-button" href="donate.html">Donner!</a></p>
	</div>

      <div id="news">
	<h4>Dernières nouvelles (en anglais pour l'instant)</h4>
    <p>
	<?php
		include("pages/en/latestnews.php");
	?>
    </p>
	<p> 
	  <a href="news.html">Older news</a>
	</p>
      </div>

   <div id="commits" style="clear: both;">
        <h4>Dernières activité des développeurs</h4>
        <div id="latest-commits"></div>
   </div>
   <script type="text/javascript">
       $(function() {
           $('#latest-commits').githubInfoWidget(
               { users: ['freenet', 'freenet'],
                 repos: ['fred', 'plugin-WebOfTrust'],
                 branches: ['next', 'next'],
                 last: 5, limitMessageTo: 50 });
       });
   </script>

      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");
			 hideDiv("screenshot_nojs");
			 showDiv("screenshot_js");
			 // Try to detect if Sun Java 1.6.0 or higher is installed
			 var Java = PluginDetect.isMinVersion('Java', '1,6,0');
			 
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
