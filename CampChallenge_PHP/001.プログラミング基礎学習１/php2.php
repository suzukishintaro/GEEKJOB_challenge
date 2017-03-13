<?php

function number($a,$b=5,$type=false){
  $c=$a*$b;
  if ($type==true){
    $c=$c*$c;
  }
  return $c;
}

echo number(10,20,true);


?>
