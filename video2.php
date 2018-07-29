<div class="container">
    

<script src="https://content.jwplatform.com/libraries/lOWCQSKB.js" ></script>
<script>jwplayer.key="/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q==";</script>
<div id="myElement">Loading the player...</div>
	
	
<?php  
$a=$_GET['a'];
//echo "<a href='zgtvdescarga?a=$a' class='ui-btn ui-icon-action ui-btn-icon-right' style='background-color:#228B22;' id='descarg'>Descarga</a><p></p>";
//echo "<video id='video' src='$a' width='100%' height='500' autoplay style='background-color:#000000'></video>";
//echo "<div class='preloader'><img src='img/preloader.gif'></div>";
	
	echo "<script type='text/javascript'>
var playerInstance = jwplayer('myElement')
playerInstance.setup({
    playlist: [{
        file: '$a',
		id: 'myVid',
        image: 'img/portada.jpg',
        tracks: [{ 
            file: '/assets/captions-en.vtt', 
            label: 'Latino',
            kind: 'captions',
            'default': true 
        },{ 
            file: '/assets/captions-fr.vtt', 
            kind: 'captions',
            label: 'Subtitulado'
        }]
    }]
});
</script>"
?>

</div>

