<?php
 function vat($amount,$vatrate =15)
 {
     $v = ($amount * $vatrate)/100;
     return $v;
 }
 $amount =100;
 
 $v= vat($amount);

 echo "the vat on $:".$amount."is $".$v;

?>


