<?php
function my_profile(){
  echo "鈴木<br>";
  echo "1988/06/17<br>";
  echo "野球<br>";
  return true;
}
$prof =  my_profile();
echo $prof;
if ($prof == true) {
  echo "この処理は正しく実行できました";
} else {
  echo "正しく実行できませんでした";
}
 ?>
