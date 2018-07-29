<?php
$url = file_get_contents('https://m.facebook.com/MotorolaPE/videos/2039258876108834');
 
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
$xpath = new DOMXPath($dom);
$srcs = $xpath->evaluate("/html/body//video");
 
for ($i = 0; $i < $srcs->length; $i++) {
	$src = $srcs->item($i);
	echo $src->getAttribute('src').'<br />';
}
?>