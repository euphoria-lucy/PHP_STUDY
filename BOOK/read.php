<?php

include "./db_conn.php";
$idx = $_GET['idx'];

$sql = "select * from book where id=$idx";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_row($result);

echo $re[0];
echo $re[1];
echo $re[2];
echo $re[4];

?>

<form method="post" action="update.php">
  번호 <input type="text" name="idx" value="<?php echo $re[0] ?>"><br />
  제목 <input type="text" name="title" value="<?php echo $re[1]?>"><br />
  저자 <input type="text" name="author" value="<?php echo $re[2]?>"><br />
  내용 <input type="text" name="content" value="<?php echo $re[4]?>"><br />
  <button type="submit">수정완료</button>
</form>
<!-- <input type="hidden" name="idx" value="<?php echo $re[0]?>" />  -->
<a href="delete.php?idx=$re[0]?>">삭제</a>