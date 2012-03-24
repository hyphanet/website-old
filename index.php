<?php

include 'includes/common.inc.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<META name="verify-v1" content="xaEIQxVVIFnpATgCaqfqrDfmoUnHpMhig0LfSGbfIzE=">

	<title>The Freenet Project - <?php echo $page ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language"    content="<?php echo $lang?>">
	<meta name="robots"      content="index,follow">
	<meta name="description" content="The Free Network Project : A Distributed Anonymous Information Storage and Retrieval System">
	<link href="/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		function getStyleByElementByID(whichDivId)
		{
			var elem;
			if( document.getElementById ) // this is the way the standards work
				elem = document.getElementById( whichDivId );
			else if( document.all ) // this is the way old msie versions work
				elem = document.all[whichDivId];
			else if( document.layers ) // this is the way nn4 works
				elem = document.layers[whichDivId];
			return elem.style;
		}

		function hideDiv( whichDivId )
		{
			getStyleByElementByID(whichDivId).display = 'none';
		}
		function showDiv( whichDivId )
		{
			getStyleByElementByID(whichDivId).display = 'inline';
		}
	</script>
	<script type="text/javascript" src="/PluginDetect.js"></script>
	<!--[if lt IE 7]><script defer type="text/javascript" src="/js/fixpng.js"></script><![endif]-->
</head>

<body>

    <div id="backheader">
      <div id="header">
	<div id="logo" class="sprites">
	  <a href="index.html"></a>
	</div>
	<div id="lang">
	  <p> 
	    <a <?php if ($lang == "es") echo "id=\"selected-lang\""?> class="drapeau" href="?language=es">es</a> 
	    <a <?php if ($lang == "en") echo "id=\"selected-lang\""?> class="drapeau" href="?language=en">en</a>

	  <?php if($lang == "en") 
		echo "Select your language:";
	  else 
		echo "Seleccione su idioma:";
	  ?>
	  </p>
	</div>
      </div>
    </div>

	<?php 
		// Include language specific menu-file 
		
		$menu = selectPage($lang_q, 'menu');
		if(file_exists($menu))
		{
			include("$menu"); 
		}
		else
		{
			include("pages/en/menu.php");
		}	
	?>

<div id="content"><?php 	include (escapeshellcmd($file));  ?>
</div>
<div id="backfooter">
     <div id="footer">
	<p>
	  <b>Contact</b> : Press enquiries should be directed
	  to <a href="mailto:ian@freenetproject.org">Ian Clarke</a><br/>
	  If you've found a problem with this site (broken link, wrong displaying, ...), please <a href="mailto:support@freenetproject.org">let us know</a><br/>
	  This website is licensed under the <a href="https://www.gnu.org/licenses/fdl.html">GNU Free Documentation License</a>
	</p>
      </div>
    </div>
	<div class="hideit">Send spam to <a href="mailto:catchme@freenetproject.org">catchme@freenetproject.org</a> ! :)</div>
<!-- Google Analytics Code Start -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-354970-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = 'https://ssl.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
<!-- Google Analytics Code End -->
<!-- Woopra Code Start -->
	<script type="text/javascript">
	(function(){
	 var wsc=document.createElement('script');
	 wsc.src='https://static.woopra.com/js/woopra.js';
	 wsc.async=true;
	 var ssc = document.getElementsByTagName('script')[0];
	 ssc.parentNode.insertBefore(wsc, ssc);
	 })();
	</script>
<!-- Woopra Code End -->
<!-- Uservoice feedback tab -->
<script type="text/javascript">
  var uservoiceJsHost = "https://cdn.uservoice.com";
  document.write(unescape("%3Cscript src='" + uservoiceJsHost + "/javascripts/widgets/tab.js' type='text/javascript'%3E%3C/script%3E"))
</script>
<script type="text/javascript">
UserVoice.Tab.show({ 
  /* required */
  key: 'freenet',
  host: 'freenet.uservoice.com', 
  forum: '8861', 
  /* optional */
  alignment: 'left',
  background_color:'black', 
  text_color: 'white',
  hover_color: 'blue',
  lang: 'en'
})
</script>
</body>
</html>
