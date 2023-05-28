<?php
$filename = "data3.txt";
$fp = fopen($filename, "r");
$count = intval(fgets($fp))+ 1;
echo "<h1>당신은 ".$count."번째 방문하셨습니다.</h1>";
fclose($fp);
$fp = fopen($filename, "w");
fwrite($fp, $count);
?>