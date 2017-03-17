<?php
$prof1 = array(1,  'kazuaki', '1988.01.01', 'kurodawara');
$prof2 = array(2, 'masato', '1988.02.02', 'kawaguchi');
$prof3 = array(3, 'takashi', '2088.03.03', 'kawagoe');

$proflist = array($prof1, $prof2, $prof3);

$keyword = "masato";

for ($i=0; $i < count($proflist); $i++) {
  for ($j=0; $j < count($proflist[$i]); $j++) {
    if (array_search($keyword, $proflist[$i]) !== false) {
       print_r($proflist[$i]);
       break;
    }
  }
}
 ?>
