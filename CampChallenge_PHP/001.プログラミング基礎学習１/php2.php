<?php
function his_profile(){
  $id = 1;
  $name = "鈴木";
  $tanjou = "1988.06.17";
  $jusho = "中野";
  return array($id, $name, $tanjou, $jusho);
}

$prof =  his_profile();

for ($i=0; $i < count($prof); $i++) {
  echo $prof[$i];
  echo "<br>";
}
 ?>
