<?

include 'includes/common.inc.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<META name="verify-v1" content="xaEIQxVVIFnpATgCaqfqrDfmoUnHpMhig0LfSGbfIzE=" />
	<title>The Freenet Project - <?= $page ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="language"    content="en" />
	<meta name="robots"      content="index,follow" />
	<meta name="keywords"    content="gnu, fsf, gpl, fdl, free software, coding, freenet, The Free Network Project, network, decentralized, DHT, anonymous, EFF, Electronic Frontier Foundation, freedom, freedom of speech, liberty, philosophy, java, censorship, encryption, peer-to-peer, file sharing, internet, Ian Clarke, Matthew Toseland, Oskar Sandberg, Florent Daigniere, Scott Miller, Steven Starr" />

	<meta name="description" content="The Free Network Project : A Distributed Anonymous Information Storage and Retrieval System" />
	<link href="/style.css" rel="stylesheet" type="text/css">
	<script language="javascript">
		function toggleLayer( whichLayer )
		{
			var elem, vis;
			if( document.getElementById ) // this is the way the standards work
				elem = document.getElementById( whichLayer );
			else if( document.all ) // this is the way old msie versions work
				elem = document.all[whichLayer];
			else if( document.layers ) // this is the way nn4 works
				elem = document.layers[whichLayer];
			vis = elem.style;
			// if the style.display value is blank we try to figure it out here
			if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)
				vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'none':'block';
			vis.display = (vis.display==''||vis.display=='block')?'block':'none';
		}

		toggleLayer("hideit");
	</script>
	<script type="text/javascript" src="PluginDetect.js"></script>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000033" alink="#000000" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
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
</div>

<div id="content"><? 	include (escapeshellcmd($file));  ?>

<div id="footer">
<!--<p><? //echo otherLanguages(); ?></p>-->
<p>
This website is licensed under the <a href="http://www.gnu.org/licenses/fdl.html">GNU Free Documentation License</a>
</div>
</div>
</p>
	<div class="hideit">Send spam to <a href="mailto:catchme@freenetproject.org">catchme@freenetproject.org</a> ! :)</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script><script type="text/javascript">_uacct = "UA-354970-1";urchinTracker();</script>
</body>
</html>
