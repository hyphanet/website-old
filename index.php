<?
if (isset($_REQUEST["page"])) {
	$page = htmlentities($_REQUEST["page"]);
	if(!file_exists("pages/".escapeshellcmd($page).".php") )
	{
		header('HTTP/1.0 401 Likely to be gone');
		if(empty($_SERVER["HTTP_REFERER"]) || empty($_SERVER["REQUEST_URI"])){
			header("Location: /");
		}
		/* else{
			echo "<html><head><title>404</title><head>";
			echo "<body>404 error - broken link</body>";
			$to="webmaster";
			$subject="404 error";
			$content="\nA 404 error has occurred on the website : may you fix it ?\nFrom :  ".$_SERVER["HTTP_REFERER"]."\nTo : ".$_SERVER["REQUEST_URI"]."\nAt : ".date("D M j Y g:i:s a T"."\nUser-agent : ".$_SERVER["HTTP_USER_AGENT"]);
			@mail($to,$subject,$content,"svn-build");
		}
		*/
		die;
	}
} else {
	$page = "index";
}

#include_once "config.inc.php";
#$a=mysql_connect("mysql4-f", $mysql_user, $mysql_password);
#$a=mysql_select_db("f978_access");
#$a=mysql_query("INSERT INTO access VALUES (\"".mysql_real_escape_string($_SERVER["REMOTE_ADDR"])."\", \"".mysql_real_escape_string($_SERVER["HTTP_REFERER"])."\", NOW())");
#$a=mysql_close();

$modes = array("beginner"=>FALSE, "user"=>FALSE, "developer"=>FALSE);
if (isset($_GET["mode"])) {
	$mode = htmlentities($_GET["mode"]);
	setcookie("mode", $mode, time()+60*60*24*30);
} elseif (!isset($_REQUEST["mode"])) {	
	$mode = "beginner";
} else {
	$mode = htmlentities($_REQUEST["mode"]);
}

$modes[$mode]=TRUE;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<META name="verify-v1" content="xaEIQxVVIFnpATgCaqfqrDfmoUnHpMhig0LfSGbfIzE=" />
	<title>The Freenet Project - <?= $page." - ".$mode ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="language"    content="en" />
	<meta name="robots"      content="index,follow" />
	<meta name="keywords"    content="gnu, fsf, gpl, fdl, free software, coding, freenet, The Free Network Project, network, decentralized, DHT, anonymous, EFF, Electronic Frontier Foundation, freedom, freedom of speech, liberty, philosophy, java, censorship, encryption, peer-to-peer, file sharing, internet, Ian Clarke, Matthew Toseland, Oskar Sandberg, Florent Daigniere, Scott Miller, Steven Starr" />

	<meta name="description" content="The Free Network Project : A Distributed Anonymous Information Storage and Retrieval System" />
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" language="javascript">
		var users=new Image();
		users.src="image/users.gif";
		var users_ovr=new Image();
		users_ovr.src="image/users_ovr.gif";
		var beginners=new Image();
		beginners.src="image/beginners.gif";
		var begin_ovr=new Image();
		begin_ovr.src="image/begin_ovr.gif";
		var developers=new Image();
		developers.src="image/developers.gif";
		var devel_ovr=new Image();
		devel_ovr.src="image/devel_ovr.gif";
		function rollOn(page) {
			if(document.images){
				eval('document.images["'+page+'"].src='+page.slice(0,5)+'_ovr.src');
			}
		}
		function rollOff(page) {
			if(document.images){
				eval('document.images["'+page+'"].src='+page+'.src');
			}
		}
		function sideOn(page) {
			eval('document.images["'+page+'"].src='+page.slice(0,5)+'_ovr.src');
		}
		function sideOut(num) {
			cell=document.getElementById('mn'+num);
			cell.bgColor="#ffffff";
		}
		function sideOvr(num) {
			cell=document.getElementById('mn'+num);
			cell.bgColor="#c7d6f1";
		}
	</script>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000033" alink="#000000" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td height="51" rowspan="2" align="left" background="image/hdr_bg_tall.gif"><a href="http://freenetproject.org/"><img border="0" alt="The Freenet Project" src="image/title.gif" width="414" height="51"></a></td>

	<td height="31">&nbsp;</td>
</tr>

<tr>
	<td height="20" align="right" valign="bottom" background="image/hdr_bg_short.gif"><?
	foreach($modes as $m => $k) {
		if(!$k) {
			echo "<a href=\"/index.php?".$page."&mode=".$m."\" onMouseOver=\"rollOn('";
			echo $m."s');\" onMouseOut=\"rollOff('".$m."s');\"><img border=0 name=".$m;
			echo "s alt=".$m."s src=\"image/".$m."s.gif\"></a>";
		}
	}?></td>
</tr></table>

<table width="100%" border="0" cellspacing="15" cellpadding="0">
<tr>
<td valign="top">
	<table border="0" cellspacing="5" cellpadding="0">
	<? include("menu.php"); ?>
	</table>
	<br>
	<div align="center">
		<a href="http://www.cafeshops.com/freenetproject"><img width="83" height="82" border="0" src="image/freenet-mug.gif" alt="Freenet Store"><br>
		<font size="-2">Visit the Freenet Store!</font></a>
	</div>
<br>
	<div align="center">
		<a href="http://sourceforge.net"><img src="http://sflogo.sourceforge.net/sflogo.php?group_id=978&amp;type=1" width="88" height="31" border="0" alt="SourceForge.net Logo"></a>
	</div>
</td>

<td valign="top" align="left" class="body" width="100%"><? 	include ("pages/".escapeshellcmd($page).".php");  ?></td>
</tr>
</table>
<center><font size=-1>This website is licensed under the <a href="http://www.gnu.org/licenses/fdl.html">GNU Free Documentation License</a></font></center>
	<div class="hideit">Send spam to <a href="mailto:catchme@freenetproject.org">catchme@freenetproject.org</a> ! :)</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script><script type="text/javascript">_uacct = "UA-354970-1";urchinTracker();</script>
</body>
</html>


