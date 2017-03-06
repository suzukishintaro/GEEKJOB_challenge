<?php
$num = "d";
$massage = ' ';
 switch ($num){
  case "A":
    $massage = '英語';
    break;

  case "あ":
    $massage = '日本語';
    break;

  default:
  $massage = '';
    break;
}
echo $massage;
 ?>
