<?
$pos = 1;
$menus = array(	'beginner' => array( 
				'News' => 'news', 
				'Download'=>'download', 
				'Donate'=>'donate',
				'FAQ' => 'faq',
				'Philosophy' => 'philosophy',
				'Support' => 'lists',
				'Tools' => 'tools',
				'Papers' => 'papers',
				'People' => 'people' ),
		'user' => array(
				'What is Freenet?' => 'whatis',
				'Download'=>'download', 
				'Donate'=>'donate',
				'Content' => 'content',
				'FAQ' => 'faq',
				'Documentation' => 'docs',
				'Philosophy' => 'philosophy',
				'Mailing Lists' => 'lists',
				'Tools' => 'tools',
                                'Papers' => 'papers',
				'People' => 'people' ),
		'developer' => array(
				'What is Freenet?' => 'whatis',
				'Download'=>'download', 
				'Documentation' => 'docs',
				'Donate'=>'donate',
				'Content' => 'content',
				'Philosophy' => 'philosophy',
				'Mailing Lists' => 'lists',
				'Tools' => 'tools',
				'FAQ' => 'faq',
                                'Papers' => 'papers',
				'Browse CVS' => 'http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/freenet/freenet/',
				'People' => 'people' )
	);

function lnk($text, $link) {
  global $pos;
  $pos = $pos + 1;
?>
<tr><td width="1"
id="mn<?=$pos ?>">&nbsp;</td>
      <td nowrap class="menu"><a class="menu"
href="<?=$link?>" onMouseOver="sideOvr('<?=$pos ?>');"
onMouseOut="sideOut('<?=$pos ?>');"><?=$text ?></a>&nbsp;</td></tr>
<?
}
function page($text, $link) {
  global $page;
  if ($link == $page) {
?>
<tr><td width="1"
bgcolor="#356ace" name="mn" id="mn">&nbsp;</td>
     <td nowrap class="menu"><?=$text ?>&nbsp;</td></tr>
<?
  } else {
	lnk($text, "index.php?page=".$link);
  }
}
foreach($menus[$mode] as $title => $link) {
	if (strcmp(substr($link, 0, 4), 'http')) {
		page($title, $link);
	} else {
		lnk($title, $link);
	}
}
?>
