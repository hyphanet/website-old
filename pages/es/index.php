<!--
  jQuery library
-->
<script type="text/javascript" src="js/jquery-1.3.min.js"></script>

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
	<h1>Compartir, Conversar, Navegar. Anónimamente. En la Red&nbsp;Libre.</h1>
      </div>
      <div class="whatis">
	<p>
	  ¡Comparte archivos, conversa en foros, navega y publica, anónimamente y sin temor de bloqueo o censura! ¡Luego conecta a tus amigos para mejorar la seguridad!
	  <br/>
	  <a href="whatis.html">¡Aprender más!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">Más capturas de Freenet</a></p>
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
      	   <p>No podemos identificar tu S.O. Por favor activa javascript, o ve a la <a href="download.html">página de descargas</a> para instalar Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenetproject.org/jnlp/FreenetInstaller.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Descarga</span>
   	   <span id="version">0.7.5 parar Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="/jnlp/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Instalar</span>
   	   <span id="version">0.7.5 para OS X</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="/jnlp/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Instalar</span>
	     	     <span id="version">0.7.5 para GNU/Linux - Unix</span>
	     	  </a>
	     </div>
	     <p style="clear: left;">
		Si no funciona, por favor visita las 
	     	<a href="download.html#unix">instrucciones de instalación</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Instrucciones de instalación e instaladores para otros sistemas.</a></p>

    <div style="clear: both"></div>

	<div id="donate_button">
	     <h4>Haz una donación</h4>
	     <p>No cobramos a nadie por descargar y usar Freenet, somos una organización sin fines de lucro quienes confiamos en tus donaciones para sobrevivir.</p>
	     <p>Nuestro balance actual es <b>$MONEYBALANCE</b>.</p>
<!--	     <p>Our current balance of <b>$MONEYBALANCE</b> will pay for this server and our one paid developer for around another <b>MONEYDAYS days</b>.</p> -->
	     <p><a href="donate.html">Donar!</a></p>
	</div>

      <div id="news">
	<h4>Ultimas noticias</h4>
    <p>
	<?php
		include("pages/en/latestnews.php");
	?>
    </p>
	<p>
	  <a href="news.html">Noticias anteriores</a>
	</p>
      </div>


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
