<?
//    Last edited Saturday, October 04, 2003
$pos = 1;
$menus = array(	'beginner' => array( 
				'What is Freenet?' => 'whatis',
				'Philosophy' => 'philosophy',
				'News' => 'news', 
				'Download'=>'download', 
				'Donate'=>'donate',
				'Sponsors'=>'sponsors',
				'FAQ' => 'faq',
				'Support' => 'lists',
				'Wiki'	=> 'http://wiki.freenetproject.org/',
				'Bug Report' => 'https://bugs.freenetproject.org/',
				'Tools' => 'tools',
				'Papers' => 'papers',
				'People' => 'people' ),
		'user' => array(
				'What is Freenet?' => 'whatis',
				'Philosophy' => 'philosophy',
				'News' => 'news', 
				'Whats New?' => 'http://cia.navi.cx/stats/Project/freenet/',
				'Download'=>'download', 
				'Donate'=>'donate',
				'Sponsors'=>'sponsors',
				'Content' => 'content',
				'FAQ' => 'faq',
				'Documentation' => 'http://wiki.freenetproject.org/FreenetSpecifications',
				'Wiki'	=> 'http://wiki.freenetproject.org/',
				'Bug Report' => 'https://bugs.freenetproject.org/',
				'Mailing Lists' => 'lists',
				'Tools' => 'tools',
                                'Papers' => 'papers',
				'People' => 'people' ),
		'developer' => array(
				'What is Freenet?' => 'whatis',
				'Philosophy' => 'philosophy',
				'News' => 'news', 
				'Whats New?' => 'http://cia.navi.cx/stats/Project/freenet/',
				'Download'=>'download', 
				'Donate'=>'donate',
				'Sponsors'=>'sponsors',
				'Content' => 'content',
				'FAQ' => 'faq',
				'Documentation' => 'http://wiki.freenetproject.org/FreenetSpecifications',
				'Wiki'	=> 'http://wiki.freenetproject.org/',
				'Browse SVN' => 'http://emu.freenetproject.org/cgi-bin/viewcvs.cgi/trunk/',
				'Bug Tracker' => 'https://bugs.freenetproject.org/',
				'Mailing Lists' => 'lists',
				'Javadoc' => 'http://emu.freenetproject.org/javadoc/',
				'Tools' => 'tools',
                                'Papers' => 'papers',
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
	lnk($text, $link.".html");
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
