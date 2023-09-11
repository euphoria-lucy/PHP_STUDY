<?php

$id = $_POST["user_id"];
$password = $_POST["user_password"];
$password_check = $_POST["user_password_check"];
$name = $_POST["user_name"];
$gender = $_POST["user_gender"];
$email = $_POST["user_email"];
$email_e = $_POST["user_email_e"];
// $email_address = $_POST["user_email_address"];
$address = $_POST["user_address"];
$detail_address = $_POST["user_detail_address"];
$cellphone_t = $_POST["cellphone"];
$cellphone_f = $_POST["cellphone_choice"];
$cellphone_m = $_POST["cellphone_medium"];
$cellphone_e = $_POST["cellphone_end"];
$introduce = $_POST["txt"];

echo "아이디 : ".$id."<br/>";
echo "비밀번호 : ".$password."<br/>";
echo "비밀번호 확인 : ".$password_check."<br/>";
echo "이름 : ".$name."<br/>";
echo "성별 : ".$gender."<br/>";
echo "이메일 : ".$email." @ ".$email_e."<br/>";
echo "주소 : ".$address."<br/>";
echo "상세주소 : ".$detail_address."<br/>";
echo "휴대폰 : ".$cellphone_t." ".$cellphone_f." - ".$cellphone_m." - ".$cellphone_e."<br/>";
echo " 자기소개 : ".$introduce."<br/>";

?>