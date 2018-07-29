<?php
$url = file_get_contents('http://www.mediafire.com/file/krwqerjdo65b5n9/To_Love-Ru_01_%255Balex_261%255D.mp4/f2:05 11/06/2018ile');
 
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
 
for ($i = 0; $i < $hrefs->length; $i++) {
	$href = $hrefs->item($i);
	echo $href->getAttribute('href').'<br />';
}
?>