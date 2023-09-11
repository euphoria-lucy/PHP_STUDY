<?php

$num = $_POST["num"];
$sum = 0;

for ( $i = 1; $i <= $num; $i++ ) {
  if ( $i % 5 == 0 ) {
    $sum += $i;
  }
}

echo $sum;

?>