<?php
$start_num = 3;
function doubule(){
  global $start_num;
   $start_num *= 2;
   
   static $kaiten = 0;
   $kaiten++;
}
for ($i=0; $i < 20; $i++) {
  doubule();
}
echo $start_num;
 ?>
