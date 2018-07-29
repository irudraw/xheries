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
   <script src="http://zgrafic.com/list/code/tawk.js"></script>
   <script type="text/javascript" src="http://www.linkbucks.com/visitScript/AboIl"></script>
   

<link href='img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

<!-- PopAds.net Popunder Code for video.zgrafic.com -->
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
  var _pop = _pop || [];
  _pop.push(['siteId', 1906916]);
  _pop.push(['minBid', 0]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', false]);
  (function() {
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    var s = document.getElementsByTagName('script')[0]; 
    pa.src = '//c1.popads.net/pop.js';
    pa.onerror = function() {
      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
      sa.src = '//c2.popads.net/pop.js';
      s.parentNode.insertBefore(sa, s);
    };
    s.parentNode.insertBefore(pa, s);
  })();
/*]]>/* */
</script>
<!-- PopAds.net Popunder Code End -->


<title>ZGTv.</title>

  <style>
  .textbox
  {
  font-size: 20px;
  }
 </style>
</head>
<body oncontextmenu="return false" onkeydown="return false">
<div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content"><ul data-role="listview" data-inset="true" id="id01">
  
</ul>
</div>
<script>

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i<arr.length; i++) {
        out += '<li><a href="https://popcash.net/world/go/433004/204720" data-icon="star"target="_blank" ><h2>' + arr[i].titulo + '</h2><p>' + arr[i].subt + '</p><p class="ui-li-aside">' + arr[i].display + '</p><a href="zgtv?a=' + arr[i].desc + '" target="_blank" >Video</a></a></li>';
    }
    document.getElementById("id01").innerHTML = out;
}
</script>

<div data-role="header" data-position="fixed" data-theme="b" align="center">

<img src="img/banner.png" width="979" height="140" onClick="location.href='http://video.zgrafic.com//'"> </div>
 

<div data-role="panel" id="myPanel" data-position="right" data-position-fixed="true" data-display="overlay" class="ui-block-a">

 
<?php include 'estrmenu.php';?>


  </div> 


<div data-role="footer" data-position="fixed" data-theme="b" align="center">
<h5 id="appID1">Este sitio no almacena ningún video en sus servidores, ni enlaza directamente, solo comparte contenido almacenado en sitios dedicados a compartir archivos de manera gratuita. <a href="https://play.google.com/store/apps/details?id=zg.tv&hl=es">¡Descarga Nuestra App ZGTv!</a> </h5> <!--<a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Open Panel</a>-->
</div>

</div>

<?php include 'id.php';?>
<script src="idioma.js"></script>
</body>
</html>


