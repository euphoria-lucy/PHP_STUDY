<?php

$n = $_POST["number"];
$cnt = 0;
$sum = 0;

for ($i = 100; $i <= 999; $i++) {
  if ($i % (int)$n == 0) {
    $cnt++;
    $sum += $i;
  }
}

echo "갯수 : ".$cnt.", 합계 : ".$sum;

?>