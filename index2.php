<?
if (isset($_REQUEST["page"])) {
  $page = $_REQUEST["page"];
} else {
  $page = "index";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy, see www.w3.org">
    <title>The Freenet Project - <?= $page ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

  <body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000033" alink="#000000">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="51" rowspan="2" align="left" background="image/hdr_bg_tall.gif"><a href="http://freenetproject.org/"><img border="0" alt="The Freenet Project" src="image/title.gif" width="414" height="51"></a></td>

        <td height="31">&nbsp;</td>
      </tr>

      <tr>
        <td height="20" align="right" valign="bottom" background="image/hdr_bg_short.gif"><!--
        <a href="index.php?page=<?=$page ?>&mode=user" 
                 onMouseOver="rollOn('users');" onMouseOut="rollOff('users')"
        ><img border="0" name="users" alt="Users" src="image/users.gif"></a><a
        href="index.php?page=<?=$page ?>&mode=developer" 
                 onMouseOver="rollOn('developers');"
        onMouseOut="rollOff('developers')" ><img border="0" name="developers"
        alt="Developers" src="image/developers.gif"></a>
        -->
        </td>
      </tr>
    </table>

    <table width="100%" border="0" cellspacing="15" cellpadding="0">
      <tr>
        <td valign="top">
          <table border="0" cellspacing="5" cellpadding="0">
            <? include("menu.php"); ?>
          </table>

          <div align="center">
            <a href="http://www.cafeshops.com/freenetproject"><img width="83" height="82" border="0" src="image/freenet-mug.gif" alt="Freenet Store"><br>
            <font size="-2">Visit the Freenet Store!</font></a>
          </div>

          <div align="center">
            <a href="http://sf.net"><img src="http://sourceforge.net/sflogo.php?group_id=978&amp;type=1" width="88" height="31" border="0" alt="SourceForge.net Logo"></a>
          </div>
        </td>

        <td valign="top" align="left" class="body" width="100%"><? include ("pages/$page.php"); ?>
        </td>
      </tr>
    </table>
  </body>
</html>

