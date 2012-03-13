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
	     <a href="image/fN_screenshot.png"><img src="image/fN_screenshot_small.png"
	     alt="freenet screenshot" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">Más capturas de Freenet</a></p>
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
      	   <p>No podemos identificar tu S.O. Por favor activa javascript, o ve a la <a href="download.html">página de descargas</a> para instalar Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="http://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">Descarga</span>
   	   <span id="version">0.7.5 parar Windows</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">Instalar</span>
   	   <span id="version">0.7.5 para Mac OS</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">Instalar</span>
	     	     <span id="version">0.7.5 para GNU/Linux - Unix</span>
	     	  </a>
	     </div>
	     <p style="float: left; clear: left;">
		Si no funciona, por favor visita las 
	     	<a href="download.html#unix">instrucciones de instalación</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Instrucciones de instalación e instaladores para otros sistemas.</a></p>

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
	  (13 de Abril 2011) <a href="news.html#freedom-house-april-2011">¡Freenet máxima herramienta anticensura en encuesta a usuarios Chinos!</a><br/>
	  <a href="news.html">Noticias anteriores</a>
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
