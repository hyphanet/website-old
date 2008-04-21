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
	<meta name="keywords"    content="gnu, fsf, gpl, fdl, free software, coding, freenet, The Free Network Project, network, decentralized, DHT, anonymous, EFF, Electronic Frontier Foundation, freedom, freedom of speech, liberty, philosophy, java, censorship, encryption, peer-to-peer, file sharing, internet, Ian Clarke, Matthew Toseland, Oskar Sandberg, Florent Daigniere, Scott Miller, Steven Starr">
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

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000033" alink="#000000">
<div id="top">
	<a href="http://freenetproject.org/"><img border="0" alt="The Freenet Project" src="/image/title.gif" width="414" height="51"></a>
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
	<div align="center">
		<a href="http://www.cafeshops.com/freenetproject"><img width="83" height="82" border="0" src="/image/freenet-mug.gif" alt="Freenet Store"><br>
		<font size="-2">Visit the Freenet Store!</font></a>
	</div>
<br>
	<div align="center">
		<a href="http://sourceforge.net"><img src="http://sflogo.sourceforge.net/sflogo.php?group_id=978&amp;type=1" width="88" height="31" border="0" alt="SourceForge.net Logo"></a>
	</div>
<br>
	<div align="center">
		<a href="http://hackontest.org/index.php?action=Root-projectDetail%2846%29"><img src="http://hackontest.org/templates/banners/HackontestBanner_150x40.jpg" alt="We are a hackontest candidate!"></a>
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
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script><script type="text/javascript">_uacct = "UA-354970-1";urchinTracker();</script>
</body>
</html>
