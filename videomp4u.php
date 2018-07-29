<?php 
$url = file_get_contents('https://www.mp4upload.com/embed-'.$_GET['v'].'.html');
$mp4u = explode('quot', $url);
$mp4u = explode('|282', $mp4u[1]);
$mp4upload = str_replace('|', '', $mp4u[0]);
$www = explode('|www', $url);
$www = explode('|', $www[1]);
$link = ('https://www'.$www[0].'.mp4upload.com:282/d/'.$mp4upload.'/video.mp4');
?>
<!DOCTYPE html><html><head><title>MP4Upload</title>
<link rel="icon" href="//www.mp4upload.com/images/favicon.gif" type="image/x-icon"/>
<meta name="robots" content="noindex"/><meta name="googlebot" content="noindex"/>
<meta name="referrer" content="never"/><meta name="referrer" content="no-referrer"/>
<script src="//ssl.p.jwpcdn.com/player/v/7.11.2/jwplayer.js"></script>
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<style>*{margin:0px;}html{overflow:hidden;}</style>
</head><body><div id="mp4upload"></div><script>
jwplayer.key = "XsWyeNQ1jdztTqhiD5MXEpz37wrnHdV05j7Ocg==";
var MP4Play = jwplayer("mp4upload");
MP4Play.setup({
sources: [{'file':'<?php if($www[0]!=''){ echo $link; } ?>','type':'video/mp4'}],
preload: 'auto',
primary: 'html5',
width: $(window).width(),
height: $(window).height()
})
$(document).ready(function(){
$(window).resize(function(){
jwplayer().resize($(window).width(),$(window).height())
})
})
</script></body></html>