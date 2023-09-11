<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <!-- 테마 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

  <!-- 자바스크립트 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
</head>

<table border width="500px" class="table table-striped">
  <tr>
    <td>no</td>
    <td>아이디</td>
    <td>이름</td>
    <td>비고</td>
  </tr>


  <?php
// 1. 디비접속 
$conn = mysqli_connect('localhost', 'test', '1111', 'test', '3307');

// 2. myuser 테이블의 모든 데이터 조회 쿼리 날리기
$sql = "select * from myuser order by id desc"; // 모든 쿼리 받기. desc : 내림차순, asc : 오름차순
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
// $re = mysqli_fetch_row($result);

for ($i = 0; $i < $count; $i++) {
  $re = mysqli_fetch_row($result);
  echo "<tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td><td><a href='update_form.php?idx=$re[0]'>수정</a>&nbsp; <a href='delete_form.php'>삭제</a></td></tr>";
  // echo $re[1]."</br>";
  // echo $re[2]."</br>";
  // echo "</br>";
}

// echo "<table border><tr><td>no</td><td>아이디</td><td>이름</td></tr><tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td></tr></table>"

?>

</table></br>

<a href="add.html">사용자 추가하기</a>

<!-- <table border>
  <tr>
    <td>no</td>
    <td>아이디</td>
    <td>이름</td>
  </tr>
  <tr>
    <td>$re[0]</td>
    <td>$re[1]</td>
    <td>$re[2]</td>
  </tr>
</table> -->

<?php

?>