<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
   <META HTTP-EQUIV="expires" CONTENT="Sun, 28 Dec 1997 09:32:45 GMT">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   

<link href='img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>


<title>ZGTv.</title>

  <style>
  .textbox
  {
  font-size: 20px;
  }
 </style>
</head>
<body oncontextmenu="return false" onkeydown="return false" >
	<div data-role="header" data-position="fixed" data-theme="b" align="center">

<img src="img/banner.png" width="979" height="140" onClick="location.href='#'"> </div>
<div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content"><ul data-role="listview" data-inset="true" id="id01">
  
</ul>
</div>
<?php include 'videocode/anime.php';?>

</div>

<script>
function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i<arr.length; i++) {
        out += '<li><a  onclick="document.getElementById(' + arr[i].onc +').src= ' + arr[i].url +';document.getElementById(' + arr[i].onc +').poster= ' + arr[i].postervid +'"><img src="anime/' + arr[i].titulo + '/' + arr[i].imag + '"   class="ui-li-thumb" alt="Test image" /><h2>' + arr[i].titulo + '</h2><p>' + arr[i].subt + '</p><p class="ui-li-aside">' + arr[i].display + '</p><a href="' + arr[i].desc + '" data-icon="arrow-d" target="_blank">Download</a></a></li>';
    }
    document.getElementById("id01").innerHTML = out;
}
</script>


 

<div data-role="panel" id="myPanel" data-position="right" data-position-fixed="true" data-display="overlay" class="ui-block-a">


  </div> 
	
	

<!--
<div data-role="footer" data-position="fixed" data-theme="b" align="center">
<h5 id="act">En caso no cargue los nuevos capitulos Presionar (Ctrl+F5) o en <a href="JavaScript: location.reload(true);">Actualizar</a></h5>
<h5 id="appID1">Este sitio no almacena ningún video en sus servidores, ni enlazat directamene, solo comparte contenido almacenado en sitios dedicados a compartir archivos de manera gratuita. <a href="https://play.google.com/store/apps/details?id=zg.tv&hl=es">¡Descarga Nuestra App ZGTv!</a> </h5> 
<a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Open Panel</a>
</div>
-->
</div>

<?php include 'id.php';?>
<script src="idioma.js"></script>
</body>
</html>


