<?
$pos = 1;
function item($text, $link) {
  global $pos, $page;
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
href="index.php?page=<?=$link ?>" onMouseOver="sideOvr('<?=$pos ?>');"
onMouseOut="sideOut('<?=$pos ?>');"><?=$text ?></a>&nbsp;</td></tr>
<?
  }
}
item("Download", "download");
item("Applications", "applications");
item("Mailing Lists", "mailinglists");
item("Donate", "donate");
?>
