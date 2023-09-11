<?php

$num_o = $_POST["num_o"];
$num_t = $_POST["num_t"];
$max = 0;
$min = 0;

if ( $num_o <= 100 && $num_t <= 100) {
  if ( $num_o < $num_t ) {
    $max = $num_t;
    $min = $num_o;
  } else if ( $num_0 > $num_t ) {
    $max = $num_0;
    $min = $num_t;
  }
}

for ( $i = $min; $i <= $max; $i++ ) {
  echo $i." ";
}

?>