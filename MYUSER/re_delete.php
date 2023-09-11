<?php

include('./db_conn.php');
// $conn=mysqli_connect($host, $id, $pass, $db, $port);
$idx = $_POST['idx'];
$sql = "delete from myuser where id = $idx";   // 삭제할 번호가 들어있음
mysqli_query($conn, $sql);
echo "deleted!";

?>