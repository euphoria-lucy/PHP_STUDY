<?php

include "./db_conn.php";
// title, author, price, publish, genre, content, gender
$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$publish = $_POST['publish'];
$genre = $_POST['sel'];
$content = $_POST['content'];
$gender = $_POST['gender'];

// 사용자가 입력한 값을 book table에 추가
// 1. 접속 mysqli_connect()
// 2. $sql = insert...
$sql = "insert into book(title, author, price, publish, genre, content, gender) values ('$title', '$author', '$price', '$publish', '$genre', '$content', '$gender')";
// 3. $sql를 mysqli_query() 날려주어야함
mysqli_query($conn, $sql);
// 4. 추가되었습니다. alert
echo "추가되었습니다.";

// 5. 종료
mysqli_close($conn);

?>