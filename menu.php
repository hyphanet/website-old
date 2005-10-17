<?
//    Last edited Saturday, October 04, 2003
$pos = 1;
$menus = array(	'beginner' => array( 
				'News' => 'news', 
				'Download'=>'download', 
				'Donate'=>'donate',
				'Sponsors'=>'sponsors',
				'FAQ' => 'faq',
				'Philosophy' => 'philosophy',
				'Support' => 'lists',
				'Wiki'	=> 'http://freenetproject.org/wiki/',
				'Tools' => 'tools',
				'Papers' => 'papers',
				'People' => 'people' ),
		'user' => array(
				'What is Freenet?' => 'whatis',
				'Download'=>'download', 
				'Whats New?' => 'whatsnew',
				'Donate'=>'donate',
				'Sponsors'=>'sponsors',
				'Content' => 'content',
				'FAQ' => 'faq',
				'Documentation' => 'docs',
				'Wiki'	=> 'http://freenetproject.org/wiki/',
				'Philosophy' => 'philosophy',
				'Mailing Lists' => 'lists',
				'Tools' => 'tools',
                                'Papers' => 'papers',
				'People' => 'people' ),
		'developer' => array(
				'Download'=>'download', 
				'Whats New?' => 'whatsnew',
				'Documentation' => 'docs',
				'Donate'=>'donate',
				'Sponsors'=>'sponsors',
				'Content' => 'content',
				'Philosophy' => 'philosophy',
				'Mailing Lists' => 'lists',
				'Wiki'	=> 'http://freenetproject.org/wiki/',
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
  //far away from perfect but better than nothing!
//  if(!ereg("^A-Za-z0-9_-]+$",$link)){ echo "Nice try !"; exit();}
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
