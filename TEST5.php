<style>
h1 {
  color: lightpink;
}
</style>

<?php
echo "<h1>strlen</h1>";
echo "<h1> strlen </h1>";
$str = "php is a popular scripting language";
echo strlen($str); // 공백포함

?>

<hr>
</hr>

<?php
echo "<h1>strcmp</h1>";
$var1 = "LIMSUNGJIN";
$var2 = "PARKSUNGHAN";

$result = strcmp($var1, $var2);

echo "result : ".$result;

?>

<hr>
</hr>

<?php
echo "<h1>strpos</h1>";
$str = "LIMSUNGJIN";
$find = "S";
$pos = strpos($str, $find);
echo "pos : ".$pos;

echo "</br>";
?>

<hr>
</hr>

<?php

echo "<h1>strtolower</h1>";
$str = "LIMSUNGJIN AND KEPCO VIXTORM";

echo strtolower($str)."</br>";
echo strtoupper($str)."</br>";

?>

<hr>
</hr>

<?php

echo "<h1>substr</h1>";
$str = "hellophpwolrd";
$result = substr($str, 2, 9);
echo $result;
echo "</br>";
$result = substr($str, 7);
echo $result;

?>

<hr>
</hr>
<br></br>

<?php

echo "<h1>implode</h1>";
$arr = array("SSG LANDERS", "KEXPO VIXTORM", "NCT DREAM", "KOREAN AIR JUMBOS", "HEUNGKUK LIFE PINK SPIDERS");
$str = implode(", ", $arr);
echo "implode: ".$str;

?>

<br></br>
<hr>
</hr>

<?php

echo "<h1>explode</h1>";
// 구분자를 기준으로
$str = "SSG LANDERS/KEXPO VIXTORM/NCT DREAM/KOREAN AIR JUMBOS/HEUNGKUK LIFE PINK SPIDERS";
$ar = explode("/ ", $str);

foreach($arr as $item) {
  echo $item."<br/>";
}

?>
<br></br>
<hr>
</hr>

<?php

echo "<h1>replace</h1>";
$txt = "NCT DREAM - PARK JISUNG";
$result = str_replace("-", "♥", $txt);
echo "변경 전 문자열 : ".$txt;
echo "<br></br>";
echo "변경 후 문자열 : ".$result;

?>