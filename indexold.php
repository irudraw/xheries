<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--
<meta name="xhamster-site-verification" content="0d14ca6ae45e9335470090843a8d4ade"/>
-->
<meta name="keywords" content="ZGTv,Animes,Peliculas,Animes ZGTv,ZGTv Animes,Series,Animes Gratis,Descargar animes">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta lang="es">
<meta charset="utf-8">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <link href='img/zgtvlogo.png' rel='image_src'/>
   <meta name="title" content="ZGTv. Full Animes Videos Peliculas Gratis">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   <script src="http://zgrafic.com/list/code/tawk.js"></script>
   
   
   <!--inicioscrpgalleria-->
<script type="text/javascript" src="html5lightbox.js"></script>
<script type="text/javascript">
function LightboxGroupLink(id) { 
var href = document.getElementById(id).getAttribute('href'); 
html5Lightbox.showItem(href);
} 
</script>
<!--finscrpgalleria-->
   
<link href='img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

<title>ZGTv Peliculas - Series - Animes</title></head>

  <style>
  .textbox
  {
  font-size: 15px;
  }
 </style>

<style type="text/css">
#centro {
	width: 100%;
	position: absolute;
	top: 40%;
	left: 0;   

}
    </style>
    
<body oncontextmenu="return false">
<div data-role="page" data-theme="b"  class="my-page" id="demo-page">
    
<div data-role="header" data-position="fixed" data-theme="b" align="center">
<!--<img src="img/banner.png" width="979" height="140"> -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#00CC00">ZGTv.</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?a=todos" target="_parent">Todos los Animes</a></li>
      
      <li><a href="?a=estrenos" target="_parent">Animes en Estreno</a></li>
<!--      <li><a href="#">Link</a></li>
      -->
    </ul>
<!--    <a href="?a=estrenos" target="_parent"><button class="btn btn-danger navbar-btn">Animes en Estreno</button></a> -->
  </div>
</nav>
</div>


<div  role="main" class="ui-content" align="center">
<?php  
$a=$_GET['a'];
$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//if ($a == "todos") {
//  echo include 'carpetas.php';
//};
if ($a == "estrenos") {
  echo include 'estrenos.php';
}
else {
//  echo '<iframe frameborder="0" scrolling="no" src="slider/index.php" height="500" width="100%"></iframe>';
  echo include 'carpetas.php';
};
?>
</div>



<div data-role="footer" data-position="fixed" data-theme="b" align="center" >
<table width="350" border="0" align="center">
  <tr>
    <td>
<form class="ui-filterable" >
<input id="myFilter" data-type="search" data-theme="a">
</form>
    </td>
    <td>



    </td>
  </tr>
</table>

<h5>ZGTv Animes • Peliculas • Series. Este sitio no almacena ningún video en sus servidores, ni enlaza directamente, solo comparte contenido almacenado en sitios dedicados a compartir archivos de manera gratuita. <a href="https://play.google.com/store/apps/details?id=zg.tv&hl=es">¡Descarga Nuestra App ZGTv!</a></h5> 
</div>


</div>
</body>
</html>