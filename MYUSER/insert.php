<?php

// mysqli_connect(접속주소, 아이디, 비번, 사용할 디비);
$host = 'localhost';
$id = 'test';
$pass = '1111';
$db = 'test';
$port = '3307';
$conn = mysqli_connect($host, $id, $pass, $db, $port);
// if($conn) {
//     echo "Connected!";
// } else {
//     echo "Failed!";
// }
$uid = $_POST['userid'];
$uname = $_POST['username'];
echo $uid." ".$uname;
$sql = "insert into myuser(user_id, user_name)values('$uid', '$uname')";
mysqli_query($conn,$sql);
echo "<br>";
echo "Inserted!!";
echo "<script>alert ('가입되었습니다');</script>";
mysqli_close($conn);

?>

<meta http-equiv="refresh" content='2;url=list.php'> // 2초후에 list.php 파일로 가라는 의미