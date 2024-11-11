<?php

 function area($length,$width)
 {
     return $length * $width;
 }

 function perimeter($length,$width)
 {
     return 2 * ($length + $width);
 }
 $length =5;
 $width =10;

 $a= area($length,$width);
 $b= perimeter($length,$width);

 echo "the area of the rectangle is:".$a ."<br>";
 echo "the perimeter of the rectangle is:".$b ."<br>";

?>


