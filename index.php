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
	<link href="/style.css" rel="stylesheet" type="text/css">
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
</head>

<body>
<div id="top">
	<a href="http://freenetproject.org/" style="text-decoration:none; border:none;
	display:block; height:48px; width:250px;" alt="The Free Network Project">&nbsp;</a>
</div>

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
	<br>
	<div class="shop" align="center">
		<a href="http://www.cafeshops.com/freenetproject"><img width="83" height="82" border="0" src="/image/freenet-mug.gif" alt="Freenet Store"><br>
		<font size="-2">Visit the Freenet Store!</font></a>
	</div>
</div>

<div id="content"><? 	include (escapeshellcmd($file));  ?>

<div id="footer">
<!--<p><? //echo otherLanguages(); ?></p>-->
<p>
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
</body>
</html>
