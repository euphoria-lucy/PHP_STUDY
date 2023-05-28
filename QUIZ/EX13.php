<?php

$num = $_POST["num"];
$sum = 0;
$avg = 0;

if ( $num <= 100 ) {
  for ( $i = 1; $i <= $num; $i++ ) {
    $sum += $i;
  }
  $avg = $sum / $num;
}

echo $avg;

?>