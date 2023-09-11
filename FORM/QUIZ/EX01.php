<?php

$num1 = $_POST["number_one"];
$num2 = $_POST["number_two"];
$num3 = $_POST["number_three"];
$num4 = $_POST["number_four"];
$num5 = $_POST["number_five"];
$even = 0;
$odd = 0;

if ($num1 % 2 == 0) {
  $even += $num1;
} else {
  $odd += $num1;
}

if ($num2 % 2 == 0) {
  $even += $num2;
} else {
  $odd += $num2;
}

if ($num3 % 2 == 0) {
  $even += $num3;
} else {
  $odd += $num3;
}

if ($num4 % 2 == 0) {
  $even += $num4;
} else {
  $odd += $num4;
}

if ($num5 % 2 == 0) {
  $even += $num5;
} else {
  $odd += $num5;
}

echo "짝수의 합 : ".$even."<br/>";
echo "홀수의 합 : ".$odd."<br/>";

?>