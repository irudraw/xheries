
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


$x=decodificar($a);


$url = file_get_contents($x);
 
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
 

	$href = $hrefs->item(36);
	//echo $href->getAttribute('href');
        $mf = $href->getAttribute('href');
        //echo $mf;


	echo "<script type='text/javascript'>
var playerInstance = jwplayer('myElement')
playerInstance.setup({
    playlist: [{
        file: '$mf',
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