<?php

$num_one = $_POST["num_one"];
$num_two = $_POST["num_two"];
$max = 0;
$min = 0;
$cnt = 0;
$sum = 0;
$avg = 0;

if ( $num_one < $num_two ) {
  $max = $num_two;
  $min = $num_one;
} else {
  $max = $num_one;
  $min = $num_two;
}

for ( $i = $min; $i <= $max; $i++ ) {
  if ( $i % 3 == 0 || $i % 5 == 0 ) {
    $sum += $i;
    $cnt++;
  }
}

$avg = $sum / $cnt;

echo "합 : ".$sum." 평균 : ".$avg;


?>