<?php
//if($_SERVER['HTTP_X_REQUESTED_WITH'] == "sunx.aphwp"){
?>
 
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body oncontextmenu="return false" onkeydown="return false" >
<div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content"><ul data-role="listview" data-inset="true">

<script>
if (window.XMLHttpRequest)
{
	// Objeto para IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}else{
	// Objeto para IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
 
// Abrimos el archivo que esta alojado en el servidor cd_catalog.xml
xmlhttp.open("GET","foros.xml",false);
xmlhttp.send();
 
// Obtenemos un objeto XMLDocument con el contenido del archivo xml del servidor
xmlDoc=xmlhttp.responseXML;
 
// Obtenemos todos los nodos denominados foro del archivo xml
var foros=xmlDoc.getElementsByTagName("<?php $w=$_GET['w']; echo $w;?>");
 
// Hacemos un bucle por todos los elementos foro
for(var i=0;i<foros.length;i++)
{
	// Del elemento foro, obtenemos del primer elemento denominado "titulo"
	// el valor del primer elemento interno
	titulo=foros[i].getElementsByTagName("titulo")[0].childNodes[0].nodeValue
	detalle=foros[i].getElementsByTagName("detalle")[0].childNodes[0].nodeValue
	informacion=foros[i].getElementsByTagName("informacion")[0].childNodes[0].nodeValue
	imgx=foros[i].getElementsByTagName("imgx")[0].childNodes[0].nodeValue
	links=foros[i].getElementsByTagName("links")[0].childNodes[0].nodeValue
 
	document.write("<li>");
		document.write("<a href='?v="+links+"&w=<?php $w=$_GET['w']; echo $w;?>'target='_parent'>");
		document.write("<img src='"+imgx+"' class='ui-li-thumb' width='100%' height='100%'>");
		document.write("<h2>"+titulo+"</h2>");
		document.write("<p>"+informacion+"</p>");
		document.write("<p class='ui-li-aside'>"+detalle+"</p>");
		document.write("</a>");
	document.write("</li>");
}
</script>



</ul></div>

<div data-role="footer" data-position="fixed" data-theme="b" align="center">
<div data-role="collapsible">
<h1>Press video</h1>

<?php include 'http://video.zgrafic.com/sunx/sunxrep.php';?>


</body>
</html>

<?php
//}
//else{
?>
<!--
<script>
    window.location.replace("http://sunx.awardspace.biz/home.php")
</script>
-->
<?php
//}
?>

