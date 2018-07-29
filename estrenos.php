


<ul data-role="listview" data-inset="true" data-filter="true" data-input="#myFilter">

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
xmlhttp.open("GET","nuevos-a/xml.php",false);
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
	info=foros[i].getElementsByTagName("info")[0].childNodes[0].nodeValue
	pvideo=foros[i].getElementsByTagName("pvideo")[0].childNodes[0].nodeValue
 
	document.write("<li>");
		document.write("<a href='w?a="+code+"' target='_blank'>");
		document.write("<img src='anime/"+titulo+"/poster.png' class='ui-li-thumb'  height='100%'>");
		document.write("<h2>"+titulo+"</h2>");
		document.write("<p>Estreno</p>");
		document.write("<p class='ui-li-aside'>"+dia+"</p>");
		document.write("<a href='https://www.youtube.com/embed/"+pvideo+"??rel=0&showinfo=0&autoplay=1&modestbranding=1' class='html5lightbox' title='"+titulo+"' data-icon='star'>Video Previo</a>");
		document.write("</a>");
	document.write("</li>");
	
}
</script>
</ul>