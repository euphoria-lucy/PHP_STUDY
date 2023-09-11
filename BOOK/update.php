<?php

include "./db_conn.php";

$idx = $_POST['idx'];
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];

$sql = "update book set title = '$title', author = '$author', content = '$content' where id = $idx";
mysqli_query($conn, $sql);

?>

<meta http-equiv="refresh" content='1;url=list.php'>