<?
//    Last edited Saturday, October 04, 2003
$pos = 1;
$menus = array(
				'Vad är Freenet?' 	=> 'whatis',
				'Filosofi' 			=> 'philosophy',
				'Nyheter' 			=> 'news', 
				'Ladda ner'			=> 'download',
				'Dokumentation' 	=> 'documentation',
				'sub1' 				=> array(
												'Installera' 		=>'install',
												'Ansluta' 			=> 'connect',
												'Innehåll'			=> 'content',
												'Förstå' 			=> 'understand',
												'Freemail' 			=> 'freemail',
												'Frost' 			=> 'frost',
												'jSite'				=> 'jsite',
												'Vanliga Frågor' 	=> 'faq',
												'Wiki'				=> 'https://wiki.freenetproject.org/'),  
				'Donera'			=> 'donate',
				'Sponsorer'			=> 'sponsors',
				'Utveckling' 		=> 'developer',
				'sub3' 				=> array(				
												'Vad är nytt?' 	=> 'http://cia.navi.cx/stats/Project/freenet/',
												'Freenet Specar' => 'https://wiki.freenetproject.org/FreenetSpecifications',
												'Bug Tracker' 	=> 'https://bugs.freenetproject.org/',
												'Javadoc' 		=> 'https://javadoc.freenetproject.org/'),
				'E-postlistor'	 	=> 'lists',
				'Verktyg' 			=> 'tools',
				'Freenet i skrift'	=> 'papers',
				'Människor' 		=> 'people' 
	);

function lnk($text, $link) {
?>
<li><a href="<?=$link?>"><?=$text ?></a></li>
<?
}
function page($text, $link) {
  global $page;
  //far away from perfect but better than nothing!
//  if(!ereg("^A-Za-z0-9_-]+$",$link)){ echo "Nice try !"; exit();}
  if ($link == $page) {
?>
<li><span class="selected-menu"><?=$text ?></span></li>
<?
  } else {
	lnk($text, $link.".html");
  }
}
/*
foreach($menus[$mode] as $title => $link) {
	if (strcmp(substr($link, 0, 4), 'http')) {
		page($title, $link);
	} else {
		lnk($title, $link);
	}
} */


echo '<ul class="menu">';
foreach($menus as $title => $link) {
	if (!stristr(substr($title, 0, 3), 'sub'))
	{	
		if (strcmp(substr($link, 0, 4), 'http')) {
			page($title, $link);
		} else {
			lnk($title, $link);
		}	
	}
	else
	{
		echo '<ul class="submenu">';	
			foreach ($link as $subtitle => $sublink) {
					if (strcmp(substr($sublink, 0, 4), 'http')) {
						page($subtitle, $sublink);
					} else {
						lnk($subtitle, $sublink);

				
			/*	echo '<li><a href="'.$sublink.'">'.$subtitle.'</a></li>'; */
		}
   		
   	}
	echo '</ul>';
}
}
?>

