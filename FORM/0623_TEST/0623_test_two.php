<?php

$id = $_POST["user_id"];
$password = $_POST["user_password"];
$name = $_POST["user_name"];
$email = $_POST["user_email"];
$tel = $_POST["user_tel"];
$address = $_POST["user_address"];
$age = $_POST["user_age"];
$gender = $_POST["user_gender"];

echo "회원 ID : ".$id."<br/>";
echo "비밀번호 : ".$password."<br/>";
echo "이름 : ".$name."<br/>";
echo "Email : ".$email."<br/>";
echo "연락처 : ".$tel."<br/>";
echo "현주소 : ".$address."<br/>";
echo "나이 : ".$age."<br/>";
echo "성별 : ".$gender."<br/>";

?>