<?php

// 1. db 접속
include "./db_conn.php";

// 2. 업로드된 파일 편집
$_file = addslashes(file_get_contents($_FILES['image']['tmp_name'])); // file_get_contents : 파일을 읽어오는 것, addslashes : 슬래시를 더하는 것 -> 변형된 이미지 코드들을 그대로 읽어라는 의미
// 서버에 올라간 임시파일을 읽어와서 특수문자에 \ 추가해서 _file에 대입

$sql = "insert into img_test1(image) values('$_file')"; // $_file은 꼭 ''를 해야함
mysqli_query($conn, $sql);
echo "Saved!"

?>