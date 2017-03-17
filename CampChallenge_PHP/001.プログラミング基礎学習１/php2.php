<?php
echo "日本語をバイト数で取得", strlen('スズキ');
echo "<br>";

echo "日本語を文字数で取得", mb_strlen('スズキ');
echo "<br>";

echo "英数字をバイト数で取得", strlen('suzuki');
echo "<br>";

echo "英数字を文字数で取得", mb_strlen('suzuki');
echo "<br>";
 ?>
