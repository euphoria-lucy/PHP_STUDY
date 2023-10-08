<?php

// 1. db 접속
include "./db_conn.php";

$upload_dir = './uploads/';

if (!is_dir($upload_dir)) { // 폴더가 없으면 만들기
  mkdir($upload_dir);
}

$upload_file = $upload_dir.basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $upload_file);

$fname = $_FILES['image']['name'];
$fsize = $_FILES['image']['size'];
$ftmp_name = $_FILES['image']['tmp_name'];

$sql = "insert into image(fname, fsize, fpath, ftmp_name) values ('$fname', '$fsize', '$upload_file', '$ftmp_name')";
mysqli_query($conn, $sql);
echo "SAVED!";

?>

<meta http-equiv="refresh" content='2;url=show.php'>