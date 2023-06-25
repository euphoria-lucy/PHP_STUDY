<?php

$name = $_POST["user_name"];
$email = $_POST["user_email"];
$password = $_POST["user_password"];
$password_check = $_POST["user_password_check"];
$school = $_POST["user_school"];
$major = $_POST["user_major"];

echo "사용자 이름 : ".$name."<br/>";
echo "이메일 : ".$email."<br/>";
echo "비밀번호 : ".$password."<br/>";
echo "비밀번호 확인 : ".$password_check."<br/>";
echo "학교 : ".$school."<br/>";
echo "전공 : ".$major."<br/>";

?>