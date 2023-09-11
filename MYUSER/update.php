<?php

include "./db_conn.php";

$idx = $_POST['idx'];
$userid = $_POST['userid'];
$username = $_POST['username'];

// update 쿼리를 사용해서 $sql에 넣고
$sql = "update myuser set user_id = '$userid', user_name = '$username' where id = $idx";
// query() 날리면 끝
mysqli_query($conn, $sql);

?>