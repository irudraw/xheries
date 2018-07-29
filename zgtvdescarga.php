<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   
 <link href='img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

   
</head>
<body >
<div data-role="page" data-theme="b"  class="my-page" id="demo-page">
<div  role="main" class="ui-content" align="center">



   <p id="gcomo">Click Derecho y Guardar enlace como..</p>
   
     <?php  
$a=$_GET['a'];
echo "<a href='$a' class='ui-btn ui-icon-action ui-btn-icon-right' style='background-color:#228B22; display: none;' download='ZGTv-Video' id='oculto'>Descargar</a>";
?>
<h2 id='CuentaAtras'></h2>
    
   <script language="JavaScript">
    var totalTiempo=5;
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Generando link de Descarga en "+totalTiempo+" segundos";
        if(totalTiempo==0)
        {
        document.getElementById('oculto').style.display = 'block';
		document.getElementById('CuentaAtras').innerHTML = "";
        }else{
            totalTiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
window.onload=updateReloj;
</script>
  <p><a href="https://www.youtube.com/channel/UCB_Hd04j1C3cz3nGgCpkWwA">Regresar al Canal de Youtube</a></p>
  

    

</div>

<div data-role="header" data-position="fixed" data-theme="b" align="center">

 <img src="img/banner.png" width="979" height="140"></div>


<div data-role="footer" data-position="fixed" data-theme="b" align="center">
<h5 id="appID1">Este sitio no almacena ningún video en sus servidores, ni enlaza directamente, solo comparte contenido almacenado en sitios dedicados a compartir archivos de manera gratuita. ¡Únete a nuestras redes sociales!  </h5>
</div>


</div>
<script src="idioma.js"></script>
</body>
</html>