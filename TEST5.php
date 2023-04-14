<style>

h1 {
  color: lightpink;
}
</style>

<?php
echo "<h1> strlen </h1>";
$str = "php is a popular scripting language";
echo strlen($str); // 공백포함

?>

<?php
$var1 = "LIMSUNGJIN";
$var2 = "PARKSUNGHAN";

$result = strcmp($var1, $var2);

echo "result : ".$result;

?>

<?php
$str = "LIMSUNGJIN";
$find = "S";
$pos = strpos($str, $find);
echo "pos : ".$pos;

echo "</br>";
?>

<?php

$str = "LIMSUNGJIN AND KEPCO VIXTORM";

echo strtolower($str)."</br>";
echo strtoupper($str)."</br>";

?>

<?php

$str = "hellophpwolrd";
$result = substr($str, 2, 9);
echo $result;
echo "</br>";
$result = substr($str, 7);
echo $result;

?>
