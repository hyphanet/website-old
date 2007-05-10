<?
//    Last edited Saturday, October 04, 2003
$pos = 1;
$menus = array(
		'What is Freenet?' 	=> '/whatis',
		'Philosophy' 		=> '/philosophy',
		'News' 				=> '/news', 
		'Download'			=> '/download',
		'Documentation' 	=> '/documentation',
		'sub1' 				=> array(
			'Install' 		=>'/install',
			'Connect' 		=> '/connect',
			'Content'		=> '/content',
			'Understand' 		=> '/understand',
			'Freemail' 		=> '/freemail',
			'Frost' 		=> '/frost',
			'jSite'			=> '/jsite',
			'Thaw'			=> '/thaw',
			'FAQ' 			=> '/faq',
			'Wiki'			=> 'http://wiki.freenetproject.org/'),  
		'Donate'			=> '/donate',
		'Sponsors'			=> '/sponsors',
		'Developer' 			=> '/developer',
		'sub2' 				=> array(				
			'Whats New?' 	=> 'http://cia.navi.cx/stats/Project/freenet/',
			'Freenet Specs' => 'http://wiki.freenetproject.org/FreenetSpecifications',
			'Browse SVN' 	=> 'http://emu.freenetproject.org/cgi-bin/viewcvs.cgi/trunk/',
			'Bug Tracker' 	=> 'https://bugs.freenetproject.org/',
			'Javadoc' 		=> 'http://emu.freenetproject.org/javadoc/'),
		'Mailing Lists' 		=> '/lists',
		'Tools' 			=> '/tools',
		'Papers' 			=> '/papers',
		'People' 			=> '/people' 
);

function lnk($text, $link) {
	echo '<li><a href="'.$link.'">'.$text.'</a></li>';
}

function showMenu($category) {
	echo '<ul class="submenu">';	
	foreach ($category as $subtitle => $sublink) {
		if (strcmp(substr($sublink, 0, 4), 'http')) {
			page($subtitle, $sublink);
		} else {
			lnk($subtitle, $sublink);
		}
		/*	echo '<li><a href="'.$sublink.'">'.$subtitle.'</a></li>'; */
	}
}

function page($text, $link) {
	global $page;
	//far away from perfect but better than nothing!
	//  if(!ereg("^A-Za-z0-9_-]+$",$link)){ echo "Nice try !"; exit();}
	if ($link == $page) {
		echo '<li><span style="font-weight: 800; background:#eee;">'.$text.'</span></li>';
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
		echo '</ul>';
	}
	else
	{
		if(strcmp($page, 'documentation')) {
			showMenu($menus['sub1']);
		} else if (strcmp($previousLink, 'developer')) {
			showMenu($menus['sub2']);
		}
	}
}
?>

