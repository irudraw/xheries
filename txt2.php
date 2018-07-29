<?php
$url = file_get_contents('http://www.mediafire.com/file/5xhaqrj8f8yzcsd/To_Love-Ru_03_%255Balex_261%255D.mp4/file');
 
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
 

	$href = $hrefs->item(36);
	//echo $href->getAttribute('href');
        $mf = $href->getAttribute('href');
        echo $mf;
?>