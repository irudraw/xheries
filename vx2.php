<!--
<script src="https://content.jwplatform.com/libraries/lOWCQSKB.js" ></script>
<script>jwplayer.key="/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q==";</script>
<div id="myElement">Loading the player...</div>
<script type="text/javascript">
var playerInstance = jwplayer("myElement")
playerInstance.setup({
    playlist: [{
        file: "http://hvm170g.tu.tv/vid62/0/037/652/0037652230.mp4?host=hvm170g.tu.tv",
        image: "https://3.bp.blogspot.com/-QqtuCcAQW_o/WMizoimqxgI/AAAAAAAATo8/ZfxjGuX1W4QhvxdfkfmQbXwul1ATm692gCLcB/s1600/working-wallpaper-015.jpg",
        tracks: [{ 
            file: "/assets/captions-en.vtt", 
            label: "Latino",
            kind: "captions",
            "default": true 
        },{ 
            file: "/assets/captions-fr.vtt", 
            kind: "captions",
            label: "Subtitulado"
        }]
    }]
});
</script>
-->

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
        image: 'https://3.bp.blogspot.com/-QqtuCcAQW_o/WMizoimqxgI/AAAAAAAATo8/ZfxjGuX1W4QhvxdfkfmQbXwul1ATm692gCLcB/s1600/working-wallpaper-015.jpg',
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




<div id="msj-salirReg" class="msj-salirReg"> X </div>

<?php  
$a=$_GET['a'];

$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
echo $enlace_actual;

echo "
<script>
    $(document).ready(function(){

             $('#msj-salirReg').click(function(){
                  var url = '$enlace_actual';
                  var nuevaUrl = url.substring(0, url.indexOf('?'));
                  


</script>"
?>
<script>
function getURLParameter(name) { 

        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null; 

} 


function changeUrlParam (param, value) { 

        var currentURL = window.location.href+'&'; 

        var change = new RegExp('('+param+')=(.*)&', 'g'); 

        var newURL = currentURL.replace(change, '$1='+value+'&'); 

 

        if (getURLParameter(param) !== null){ 

                try { 

                        window.history.replaceState('', '', newURL.slice(0, - 1) ); 

                } catch (e) { 

                        console.log(e); 

                } 

        } else { 

                var currURL = window.location.href; 

                if (currURL.indexOf("?") !== -1){ 

                        window.history.replaceState('', '', currentURL.slice(0, - 1) + '&' + param + '=' + value); 

                } else { 

                        window.history.replaceState('', '', currentURL.slice(0, - 1) + '?' + param + '=' + value); 

                } 

        } 

}


</script>