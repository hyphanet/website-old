<?
//    Last edited Saturday, October 04, 2003
$pos = 1;
$menus = array(
		'Download'			=> '/download',
		'About'				=> '/whatis',
		'sub-about'			=> array(
			'What is Freenet?' => '/whatis',
			'Philosophy'	=> '/philosophy',
			'Papers'		=> '/papers',
			'People'		=> '/people',
			'News'			=> '/news'),
		'Help'				=> '/documentation',
		'sub-help'			=> array(
			'Documentation'	=> '/documentation',
			'FAQ'			=> '/faq',
			'Mailing lists'	=> '/lists',
			'Suggestions'	=> 'http://freenet.uservoice.com/',
			'Wiki'			=> 'http://wiki.freenetproject.org'),
		'Donate'			=> '/donate',
		'sub-donate'		=> array(
			'Donate'		=> '/donate',
			'Sponsors'		=> '/sponsors',
			'Buy stuff'		=> 'http://www.cafeshops.com/freenetproject'),
		'Developer' 			=> '/developer',
		'sub2' 				=> array(				
			'Whats New?' 	=> 'http://cia.navi.cx/stats/Project/freenet/',
			'Freenet Specs' => 'http://wiki.freenetproject.org/FreenetSpecifications',
			'Bug Tracker' 	=> 'https://bugs.freenetproject.org/'),
);

function lnk($text, $link) {
	echo '<li><a href="'.$link.'">'.$text.'</a></li>';
}

function showMenu($category) {
	echo '<ul class="submenu">';	
	foreach ($category as $subtitle => $sublink) {
		if (strcmp(substr($sublink, 0, 4), 'http')) {
			simple_page($subtitle, $sublink);
		} else {
			lnk($subtitle, $sublink);
		}
		/*	echo '<li><a href="'.$sublink.'">'.$subtitle.'</a></li>'; */
	}
	echo '</ul>';
}

function simple_page($text, $link) {
	global $page;
	//far away from perfect but better than nothing!
	//  if(!ereg("^A-Za-z0-9_-]+$",$link)){ echo "Nice try !"; exit();}
	if ($link == $page) {
		echo '<li><span class="selected-menu">'.$text.'</span></li>';
	} else {
		lnk($text, $link.".html");
	}
}

function page($text, $link) {
	global $page;
	global $menus;
	//far away from perfect but better than nothing!
	//  if(!ereg("^A-Za-z0-9_-]+$",$link)){ echo "Nice try !"; exit();}
	if ($link == $page ||
	($text == "Help" && in_array("$page", $menus["sub-help"])) ||
	($text == "About" && in_array("$page", $menus["sub-about"])) ||
	($text == "Donate" && in_array("$page", $menus["sub-donate"])) ||
	($text == "Developer" && in_array("$page", $menus["sub2"]))) {
		echo '<li><span class="selected-menu">'.$text.'</span></li>';
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
		if (("$page" == '/documentation' || in_array("$page", $menus["sub-help"])) &&
			"$title" == "sub-help") {
			showMenu($menus["$title"]);
		}
		
		if (("$page" == '/developer' || in_array("$page", $menus["sub2"])) &&
			"$title" == "sub2") {
			showMenu($menus["$title"]);
		}
		
		if (("$page" == '/whatis' || in_array("$page", $menus["sub-about"])) &&
			"$title" == "sub-about") {
			showMenu($menus["$title"]);
		}
		
		if (("$page" == '/donate' || in_array("$page", $menus["sub-donate"])) &&
			"$title" == "sub-donate") {
			showMenu($menus["$title"]);
		}
		
		
		
	}
}
echo '</ul>';
?>

