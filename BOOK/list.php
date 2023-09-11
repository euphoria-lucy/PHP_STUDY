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
    <td>제목</td>
    <td>저자</td>
    <td>가격</td>
    <!-- <td>개요</td> -->
    <td>성별</td>
    <td>출판사</td>
  </tr>
  <?php

// 1. db 접속
include "./db_conn.php";
// 2. $sql에 select 쿼리 날림, id별로 내림차순으로
$sql = "select * from book order by id desc";
// 3. $result =  mysqli_query(); 
$result = mysqli_query($conn, $sql);
// 4. $re = mysqli_fetch_row();
// $re = mysqli_fetch_row($result);
$count = mysqli_num_rows($result);
// 5. table에 출력 - php밖으로 뺌

for ($i = 0; $i < $count; $i++) {
  $re = mysqli_fetch_row($result);
  if ($re[5] == 1) {
    $re[5] = "남성";
  } else {
    $re[5] = "여성";
  }
  echo "<tr><td>$re[0]</td><td><a href='read.php?idx=$re[0]'>$re[1]</a></td><td>$re[2]</td><td>$re[3]</td><td>$re[5]</td><td>$re[6]</td><td><?php echo $_SERVER[REMOTE_ADDR]?>
  </td>
  </tr>";
  }

  ?>
</table>