<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ZGTv. CODIFICADOR VIDEOS</title>
    </head>
    <body>

<div style="width:100%; text-align:center;">
  <div style="width: 500; margin: 0px auto; text-align:center;">

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
        ?>
        <h1>CODIFICAR ANIME VIDEO PELICULAS</h1>


<form method="get" target="_parent">
<input type="submit" value="Submit">
<input type="text" value='' id='Pegar' size='100' name="a">
</form>
<p><button onclick="seleccionar()">Select</button>

        <?php
        
        $resultado = codificar($a);
        
        echo $a;
        echo "<p><input type='text' value='$resultado' id='myInput' size='100'>";
        echo "<p><a href='http://zgtv.rf.gd/video?a=$resultado' a target='_blank'>Ir Video</a>";
        ?>
<p><button onclick="myFunction()">Copy text</button>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
}
function seleccionar() {
  var selText = document.getElementById("Pegar");
  selText.select();
}
</script>
</div>
</div>
    </body>
</html>