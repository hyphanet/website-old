<?php

if (!isset($_REQUEST["rewritten"])) {
        $currentURI = htmlentities($_SERVER['REQUEST_URI']);
        $host = htmlentities($_SERVER['HTTP_HOST']);
        $prefix = "http://".$host;
                                                            
        if ($c=preg_match_all ("/\\/index\\.php\\?page=([^&]+)/is", $currentURI, $matches)) {
                $page_name = $matches[1][0].".html";
        } else {          
                $page_name = "";
        }                               
        $newURI = $prefix.'/'.$page_name;

        header("Request-URI: $newURI");
        header("Content-Location: $newURI");
        header("Location: $newURI", 301);
        die;
} 

function setLanguage() {
	global $lang;
	
	$lang = $_GET['lang'];
	
	if(!isset($lang)) 
	{
		$languages = split(",", $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
		foreach ($languages as $language) {
			$lang_array = split(";q=", trim( $language ) );
       		$lang = trim( $lang_array[0] );
       		if( !isset( $lang_array[1] ) )
           		$q = 1;
       		else
           		$q = trim($lang_array[1]);
       		$lang_q["$lang"] = (float)$q;
		}
		
		arsort($lang_q);
		$i = 0;
		$lang_index = Array();
   		foreach($lang_q as $lang => $q) {
      		$lang_index[$i] = $lang; //add to a new array the index key/language
      		$i++;
   		}
  
	}
	else
	{
   		$lang_q[$lang] = '1' ;
   	}
   
   //return $lang_index; // uncomment for returning array with keys={0..n-1}, values={most..least preferred}
    return $lang_q;
		
}

function selectPage($lang_q, $page) {
	
	if (isset($page))
	{
		#echo "common - page exists ".dirname(__FILE__).'/'.$page.'.inc.php';
		$tmpfile = dirname(__FILE__).'/'.$page.'.inc.php';
		if (file_exists($tmpfile)) {
			#echo "file exists";
			include $tmpfile;
			foreach ( $lang_q as $aLang => $relevance ) 							// loop through each language
			{	
				foreach ( $pages as $userlang => $path )        					// loop through each language-file
				{
					if ($aLang == $userlang) {										// if we have a match, set file-include to $path
						$file = $path;
						if (file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$file)) 									// if file exists, break loop
						{
 							break 2;
 						}
					}
				}
				
			}	
		} else {
			$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
			syslog(LOG_CRIT, "Huh, someone attempted to access a non-existent file! page=$page file=$tmpfile from $ip");
		}

		if (!isset($file))
		{
			$file = $pages['en']; //if no match, default to english
		}		
	}
	return $file;

}	

function otherLanguages() {
		
	include dirname(__FILE__).'/languages.inc.php';	// Include language descriptions
		
	global $page;
	
	
	if (isset($page))
	{
		if (file_exists(dirname(__FILE__).'/'.$page.'.inc.php')) 
		{
			include dirname(__FILE__).'/'.$page.'.inc.php';	
					
			$out .= '<div id="additionalLang">:: &nbsp;';
			
			foreach ( $pages as $userlang => $path ) 
			{
				foreach ( $languages as $abbr_lang_name => $full_lang_name ) 
				{
					if ($userlang == $abbr_lang_name) 
					{
					    $out .= '<a href="'.$abbr_lang_name.($page ? $page : "index").'.html">'.$full_lang_name.'</a>&nbsp; :: &nbsp;';
					}
				}
			}
			
			$out .= '</div>';
		}	
	}		
	return $out;
	
}
	
if (isset($_REQUEST["lang"])) 
{
	$lang_q = array( $_REQUEST["lang"] => '1' );
	$lang = $_REQUEST["lang"];
}
else
{
	$lang_q = setLanguage();
}

if (isset($_REQUEST["page"])) {
	$page = escapeshellcmd(htmlentities(trim($_REQUEST["page"], '/')));
	$file = selectPage($lang_q, $page);		
	if(!file_exists($file) )
	{
		header('HTTP/1.0 404 Not Found');
		if(empty($_SERVER["HTTP_REFERER"]) || empty($_SERVER["REQUEST_URI"])){
			header("Location: /");
		}else{
			echo "<html><head><title>404</title><head>";
			echo "<body>404 error - broken link</body>";
			$to="webmaster";
			$subject="404 error";
			$content="\nA 404 error has occurred on the website : may you fix it ?\nFrom :  ".$_SERVER["HTTP_REFERER"]."\nTo : ".$_SERVER["REQUEST_URI"]."\nAt : ".date("D M j Y g:i:s a T"."\nUser-agent : ".$_SERVER["HTTP_USER_AGENT"]);
			@mail($to,$subject,escapeshellcmd($content),"svn-build");
		}
		die;
	}
} else {
	$page = "index";
	$lang_q = setLanguage();
	$file = selectPage($lang_q, $page);
}	
	
?>
