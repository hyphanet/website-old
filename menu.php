<?
$pos = 1;
function item($text, $link) {
  global $pos;
  $pos = $pos + 1;
  if ($link == $page) {
?>
<tr><td width="1"
bgcolor="#356ace" name="mn" id="mn">&nbsp;</td>
     <td nowrap class="menu"><?=$text ?>&nbsp;</td></tr>
<?
  } else {
?>
<tr><td width="1"
id="mn<?=$pos ?>">&nbsp;</td>
      <td nowrap class="menu"><a class="menu"
href="index2.php?page=<?=$link ?>" onMouseOver="sideOvr('<?=$pos ?>');"
onMouseOut="sideOut('<?=$pos ?>');"><?=$text ?></a>&nbsp;</td></tr>
<?
  }
}

item("Applications", "applications");
item("FASD", "fasd");
item("FCP Tools", "fcptools");
item("Freenet Apps", "freeapps");
item("JVM Compatibility", "javacompat");
item("Key Types", "keys");
item("Mailing Lists", "mailinglists");
item("Metadata", "metadata");
item("Command Line Help", "switches");
item("UNIX Setup", "unixhowto");
?>
