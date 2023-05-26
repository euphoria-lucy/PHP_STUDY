<?php

$real_id = "test";
$real_pass = "testpass";
// 사용자가 입력한 id와 pass를 가져옴
// $_GET $_POST

$id = $_POST["user_id"]; // $id : 사용자가 입력한 id값
$pass = $_POST["user_pass"];

if ($id == $real_id && $pass == $real_pass) {
  echo "id : ".$id."<br/>";
  echo "pass : ".$pass."<br/>";
} else {
  echo "잘못입력";
}


?>