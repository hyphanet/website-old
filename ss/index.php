<?php
/*  if (!$page)
  {
    $page="1";
  } */
?>
<html>
<head>
  <title>IPTPS 2003</title>

  <meta http-equiv="content-type"
 content="text/html; charset=ISO-8859-1">

  <meta name="author" content="Ian Clarke">

  <style type="text/css">
<!--
TD {margin:0; font-size:30;}
H1   {font-size:40;text-align:center;}
-->
  </style>
</head>
<body text="#ffffff" bgcolor="#000000" link="#000099" vlink="#990099"
 alink="#000099"><table cellpadding="0" cellspacing="0" border="0" width="100%">
  <tbody>
    <tr>
      <td valign="top" background="fnss2.png" width="52"><img
 src="fnss1.png" alt="" width="52" height="107"><br>
      <br>
      </td>
      <td valign="top" height="700"><table width="100%"><tr><td align="left"><font size="-4"><?php
    echo("<a href=\"index.php?page=");
    echo($page-1);
    echo("\">Prev</a>");
  ?></font></td><td align="right"><font size="-4"><?php
    echo("<a href=\"index.php?page=");
    echo($page+1);
    echo("\">Next</a>");
  ?></font></td></tr></table>
<?php
  include("slide".$page.".inc");
?>
      </td>
    </tr>

  </tbody>
</table>
</body>
</html>
