<?php

$idx = $_GET['idx'];
echo "id : ".$idx;

$conn = mysqli_connect('localhost', 'test', '1111', 'test', '3307');

// $sql = id=$idx인 것을 가지고오기
$sql = "select * from myuser where id=$idx";
// 쿼리 함수 날려서 $result에 대입
$result = mysqli_query($conn, $sql);
// $result에 있는 값들을 한 줄씩 가져와서 $re에 대입
$re = mysqli_fetch_row($result);
// $re 출력
echo $re[0]; // id
echo $re[1]; // user_id
echo $re[2]; // user_name

?>

<form method="post" action="update.php">
  <!-- disabled : 수정 못하게 막음 -->
  ID <input type="text" name="idx" value="<?php echo $re[0] ?>" disabled><br /> <!-- 메모장 복사 (중요) -->
  아이디<input type="text" name="userid" value="<?php echo $re[1]?>"> <br />
  이름<input type="text" name="username" value="<?php echo $re[2]?>"> <br />
  <input type="hidden" name="idx" value="<?php echo $re[0] ?>" /><br />
  <button type="submit">수정완료</button>
</form>