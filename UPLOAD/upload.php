<?php

$upload_dir = '.uploads/';

if (!is_dir($upload_dir)) {
  mkdir($upload_dir);
}

// echo "name : ".$_FILES['userfile']['name']."<br>"."size : ".$_FILES['userfile']['size']."<br>"."tmp name : ".$_FILES['userfile']['tmp_name']."<br>"."type : ".$_FILES['userfile']['type'];

// basename : 파일의 이름만 뽑아내는 함수
$upload_file = $upload_dir.basename(($_FILES['userfile']['name'])); // upload_dir에는 '.uploads/' 경로가 있기 때문

// move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
  echo " upload 성공";
} else {
  echo "upload 실패";
}

echo $upload_file;

?>