<?php
//header ("content-type: text/xml");
header('Content-Type: text/xml; charset=utf-8');
   $dir = "./";
   
   echo "<XML encoding='utf-8' standalone='yes' version='1.0'>\n";
   echo "  <foros>\n";
   
   if (is_dir($dir))
   {
       if ($gd = opendir($dir))
      {
           while (($archivo = readdir($gd)) !== false)
         {
            if ($archivo != "." & $archivo != ".." & $archivo != "list.php")
            {
               if (is_dir($archivo))
               {
                     echo "<anime>\n";
					 echo "<";
					 include ("../anime/$archivo/code.txt");
					 echo ">\n";
					 echo "<code>";
					 include ("../anime/$archivo/code.txt");
					 echo "</code>\n";
					 echo "<dia>";
					 include ("$archivo/dia.txt");
					 echo "</dia>\n";
					 echo "<pvideo>";
					 include ("../anime/$archivo/pvideo.txt");
					 echo "</pvideo>\n";
					 echo "<info xml:lang='es'>";
					 include ("../anime/$archivo/info.txt");
					 echo "</info>\n";
					 echo "<titulo>$archivo</titulo>\n";
					 echo "</";
					 include ("../anime/$archivo/code.txt");
					 echo ">\n";
					 echo "</anime>\n";
               }
            }
           }
           closedir($gd);
       }
   }
   echo "  </foros>\n";
   echo "</XML>\n";
?>