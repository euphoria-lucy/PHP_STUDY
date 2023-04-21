<?php

$filename = "data2.txt";
$fp = fopen("data2.txt", "r"); // r : 원래 있던 파일을 읽음
$result = fread($fp, filesize(("data2.txt")));
// filesize (처음부터 끝까지 파일 내에 있는 문자 출력하고 싶으면 텍스트파일 이름을 넣으면 됨)
echo $result;
fclose($fp);

?>