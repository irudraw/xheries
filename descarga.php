<?php
$nombre = "zgtv.mp4";  
$filename = "https://www.dl.dropboxusercontent.com/s/zx968a114tq5jgl/Perdidos%20en%20el%20espacio%20%28Lost%20in%20Space%29%20-%201x10%20-%20Capitulo%2010.mp4";  
$size = filesize($filename);  
header("Content-Transfer-Encoding: binary");  
header("Content-type: application/force-download");  
header("Content-Disposition: attachment; filename=$nombre");  
header("Content-Length: $size");  
readfile("$filename");  
?>   