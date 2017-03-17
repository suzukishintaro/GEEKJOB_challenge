<?php
$a = "きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
echo "変換前<br>", $a, "<br>";
echo "変換後<br>";

$b = array('I', 'U');
$c = array('い', 'う');

echo str_replace($b, $c, $a);

 ?>
