<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] == "zg.tv" OR $_SERVER['HTTP_X_REQUESTED_WITH'] == "com.zgtv.zgrafic"){
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
   <script src="http://zgrafic.com/list/code/tawk.js"></script>
</head>

<!--
<body oncontextmenu="return false" >
-->

<body>
<div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content"><ul data-role="listview" data-filter="true" data-input="#myFilter" data-inset="true">

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
xmlhttp.open("GET","xml.php",false);
xmlhttp.send();
 
// Obtenemos un objeto XMLDocument con el contenido del archivo xml del servidor
xmlDoc=xmlhttp.responseXML;
 
// Obtenemos todos los nodos denominados foro del archivo xml
var foros=xmlDoc.getElementsByTagName("anime");
 
// Hacemos un bucle por todos los elementos foro
for(var i=0;i<foros.length;i++)
{
	// Del elemento foro, obtenemos del primer elemento denominado "titulo"
	// el valor del primer elemento interno
	titulo=foros[i].getElementsByTagName("titulo")[0].childNodes[0].nodeValue
	code=foros[i].getElementsByTagName("code")[0].childNodes[0].nodeValue
	dia=foros[i].getElementsByTagName("dia")[0].childNodes[0].nodeValue
 
	document.write("<li>");
		document.write("<a href='../anime/"+titulo+"/' target='_blank'>");
		document.write("<img src='../anime/"+titulo+"/poster.png' class='ui-li-thumb'  height='100%'>");
		document.write("<h2>"+titulo+"</h2>");
		document.write("<p>Code: "+code+"</p>");
		document.write("<p class='ui-li-aside'>"+dia+"</p>");
		document.write("</a>");
	document.write("</li>");
}
</script>



</ul></div>

<div data-role="header" data-position="fixed" data-theme="b">
<form class="ui-filterable" >
<input id="myFilter" data-type="search" data-theme="a">
</form>

</div>

</div>

</body>
</html>

<?php
}
else{
?>

<script src="http://zgrafic.com/list/code/android.js"></script>

<?php
}
?>


