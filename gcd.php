<?php

function gcd($n1,$n2) {

  while ($n2 != 0){
     $r = $n1 % $n2;
     $n1 = $n2;
     $n2 = $r;
   }
   return $n1;
}
?>