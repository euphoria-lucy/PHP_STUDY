<?php

$num_one = $_POST["num_one"];
$num_two = $_POST["num_two"];
$num_thr = $_POST["num_thr"];
$num_fou = $_POST["num_fou"];
$num_fiv = $_POST["num_fiv"];
$num_six = $_POST["num_six"];
$num_sev = $_POST["num_sev"];
$num_eig = $_POST["num_eig"];
$num_nin = $_POST["num_nin"];
$num_ten = $_POST["num_ten"];

$arr = array($num_one, $num_two, $num_thr, $num_fou, $num_fiv, $num_six, $num_sev, $num_eig, $num_nin, $num_ten);

$even_cnt = 0;
$odd_cnt = 0;

for ( $i = 0; $i < sizeof($arr); $i++ ) {
  if ( $arr[$i] % 2 == 0 ) {
    $even_cnt++;
  } else {
    $odd_cnt++;
  }
}

echo "짝수의 개수 : ".$even_cnt." 홀수의 개수 : ".$odd_cnt;

?>