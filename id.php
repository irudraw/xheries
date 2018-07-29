<?php 
//$a=$_GET['a'];

//if ($a == 'dbs-es') {
//  echo "<script src='http://zgrafic.com/zgtv/dbs/es/js.js'></script>";
//};

//if ($a == 'dbs-en') {
//  echo "<script src='http://zgrafic.com/zgtv/dbs/en/js.js'></script>";
//};

//if ($a == 'dbs-hi') {
  //echo "<script src='http://zgrafic.com/zgtv/dbs/hi/js.js'></script>";
//};

//if ($a == 'xxx') {
//  echo "<script src='2x/js.js'></script>";
//};

?>  




<script>
if (window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}else{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET","anime/xml.php",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;
var foros=xmlDoc.getElementsByTagName("<?php $a=$_GET['a']; echo $a;?>");
for(var i=0;i<foros.length;i++)
{
	titulo=foros[i].getElementsByTagName("titulo")[0].childNodes[0].nodeValue

document.write("<meta name='description' content='"+titulo+"'>");	
document.write("<script src='anime/"+titulo+"/js.js?v=<?php echo(rand()); ?>'>"+"</"+"script"+">");
}
</script>
     



