<?
//Last translated Friday, March 28, 2008
$pos = 1;
$menus = array(
		'Was ist Freenet?' 	=> '/whatis',
		'Philosophie' 		=> '/philosophy',
		'Neuigkeiten' 		=> '/news', 
		'Download'			=> '/download',
		'Dokumentation' 	=> '/documentation',
		'sub1' 				=> array(
			'Installieren' 	=>'/install',
			'Verbinden' 	=> '/connect',
			'Inhalte'		=> '/content',
			'Verstehen'		=> '/understand',
			'Freemail' 		=> '/freemail',
			'Frost' 		=> '/frost',
			'jSite'			=> '/jsite',
			'Thaw'			=> '/thaw',
			'FAQ' 			=> '/faq',
			'Wiki'			=> 'http://wiki.freenetproject.org/'),  
		'Spenden'			=> '/donate',
		'Sponsoren'			=> '/sponsors',
		'Entwickler'		=> '/developer',
		'sub2' 				=> array(				
			'Was ist Neu?' 	=> 'http://cia.navi.cx/stats/Project/freenet/',
			'Spezifikationen'	=> 'http://wiki.freenetproject.org/FreenetSpecifications',
			'Im SVN st&ouml;bern'	=> 'http://emu.freenetproject.org/cgi-bin/viewcvs.cgi/trunk/',
			'SVN Repository'	=> 'http://freenet.googlecode.com/svn/trunk/',
			'Bug Tracker' 	=> 'https://bugs.freenetproject.org/'),
		'Mailing-Listen' 	=> '/lists',
		'Tools' 			=> '/tools',
		'Aufsätze' 			=> '/papers',
		'Leute' 			=> '/people' 
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
	echo '</ul>';
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
		if ("$page" == '/documentation' || in_array("$page", $menus["sub1"])) {
			showMenu($menus["$title"]);
		}
		
		if ("$page" == '/developer' || in_array("$page", $menus["sub2"])) {
			showMenu($menus["$title"]);
		}
	}
}
echo '</ul>';
?>

