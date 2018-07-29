<div class="container">
    

<script src="https://content.jwplatform.com/libraries/lOWCQSKB.js" ></script>
<script>jwplayer.key="/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q==";</script>
<div id="myElement">Loading the player...</div>
	
	
<?php  
$a=$_GET['a'];

function codificar($dato) {
            $resultado = $dato;
            $arrayLetras = array('Z', 'G', 'T', 'V');
            $limite = count($arrayLetras) - 1;
            $num = mt_rand(0, $limite);
            for ($i = 1; $i <= $num; $i++) {
                $resultado = base64_encode($resultado);
            }
            $resultado = $resultado . '+' . $arrayLetras[$num];
            $resultado = base64_encode($resultado);
            return $resultado;
        }
        function decodificar($dato) {
            $resultado = base64_decode($dato);
            list($resultado, $letra) = explode('+', $resultado);
            $arrayLetras = array('Z', 'G', 'T', 'V');
            for ($i = 0; $i < count($arrayLetras); $i++) {
                if ($arrayLetras[$i] == $letra) {
                    for ($j = 1; $j <= $i; $j++) {
                        $resultado = base64_decode($resultado);
                    }
                    break;
                }
            }
            return $resultado;
        }

//echo "<a href='zgtvdescarga?a=$a' class='ui-btn ui-icon-action ui-btn-icon-right' style='background-color:#228B22;' id='descarg'>Descarga</a><p></p>";
//echo "<video id='video' src='$a' width='100%' height='500' autoplay style='background-color:#000000'></video>";
//echo "<div class='preloader'><img src='img/preloader.gif'></div>";

$x=decodificar($a);
	echo "<script type='text/javascript'>
var playerInstance = jwplayer('myElement')
playerInstance.setup({
    playlist: [{
        file: '$x',
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
