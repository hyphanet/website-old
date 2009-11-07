<?

include 'includes/common.inc.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<META name="verify-v1" content="xaEIQxVVIFnpATgCaqfqrDfmoUnHpMhig0LfSGbfIzE=">

	<title>The Freenet Project - <?= $page ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="language"    content="en">
	<meta name="robots"      content="index,follow">
	<meta name="description" content="The Free Network Project : A Distributed Anonymous Information Storage and Retrieval System">
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		function hideDiv( whichDivId )
		{
			var elem, vis;
			if( document.getElementById ) // this is the way the standards work
				elem = document.getElementById( whichDivId );
			else if( document.all ) // this is the way old msie versions work
				elem = document.all[whichDivId];
			else if( document.layers ) // this is the way nn4 works
				elem = document.layers[whichDivId];
			vis = elem.style;
			vis.display = 'none';
		}
		function showDiv( whichDivId )
		{
			var elem, vis;
			if( document.getElementById ) // this is the way the standards work
				elem = document.getElementById( whichDivId );
			else if( document.all ) // this is the way old msie versions work
				elem = document.all[whichDivId];
			else if( document.layers ) // this is the way nn4 works
				elem = document.layers[whichDivId];
			vis = elem.style;
			vis.display = 'inline';
		}
	</script>
	<script type="text/javascript" src="PluginDetect.js"></script>
	<!--[if lt IE 7]><script defer type="text/javascript" src="js/fixpng.js"></script><![endif]-->
</head>

<body>

    <div id="backheader">
      <div id="header">
	<div id="logo" class="sprites">
	  <a href="index.html"></a>
	</div>
	<!--<div id="lang">
	  <p> Select your language :
	    <a class="drapeau" href="it/home.html">it</a> 
	    <a class="drapeau" href="es/home.html">es</a>
	    <a class="drapeau" href="fr/home.html">fr</a> 
	    <a id="selected-lang" class="drapeau">en</a>
	  </p>
	</div>-->
      </div>
    </div>

<div id="backmenu">	
<div id="menu">	
	<? 
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
</div>
</div>

<div id="content"><? 	include (escapeshellcmd($file));  ?>
</div>
<div id="backfooter">
     <div id="footer">
	<p>
	  <b>Contact</b> : Press enquiries should be directed
	  to <a href="mailto:ian@locut.us">Ian Clarke</a><br/>
	  If you've found a problem with this site (broken link, wrong displaying, ...), please <a href="mailto:support@freenetproject.org">let us know</a><br/>
	  This website is licensed under the <a href="http://www.gnu.org/licenses/fdl.html">GNU Free Documentation License</a>
	</p>
      </div>
    </div>
	<div class="hideit">Send spam to <a href="mailto:catchme@freenetproject.org">catchme@freenetproject.org</a> ! :)</div>

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-354970-1");
	pageTracker._trackPageview();
	</script>
<!-- Woopra Code Start -->
<script type="text/javascript">
var _wh = ((document.location.protocol=='https:') ? "https://sec1.woopra.com" : "http://static.woopra.com");
document.write(unescape("%3Cscript src='" + _wh + "/js/woopra.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<!-- Woopra Code End -->
<!-- Uservoice feedback tab -->
<script type="text/javascript">
  var uservoiceJsHost = ("https:" == document.location.protocol) ? "https://uservoice.com" : "http://cdn.uservoice.com";
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
