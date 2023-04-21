<?php

// 1. 파일 저장
$filename = "data.txt";
// $fp = fopen($filename, "a"); // w : 읽기모드. 기존에 쓰여져있던 문장이 지워지고 내용이 새로 써짐, a : 기존에 쓰여있던 문장에 추가적으로 쓰여짐
// $str = "KEPCO VIXTORM";
// $str1 = "LIM SUNG-JIN";
// fwrite($fp, $str1);
// //fwrite($fp, $str1);

// fclose($fp);
// echo "저장되었습니다.";

// 2. 파일읽기
$fp = fopen($filename, "r");
while(!feof($fp)) { // end of file
 // echo fgets($fp);
  echo fgetc($fp);
}

?>