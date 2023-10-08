<script>
function action_imageView(url) {
  if (url) {
    var imgW = document.getElementById('img1').naturalWidth;
    var imgH = document.getElementById('img1').naturalHeight;
    var imgWindow = window.open("", "_image_view_", "width = " + imgW + ", height=" + imgH);
    imgWindow.document
      .write("<img src='" + url + "'>");
  }
}
</script>

<?php

// 1. db 접속
include "./db_conn.php";

// 2. 쿼리 select로 가져와서 $result로 넣고
$sql = "select fname, fsize, fpath, ftmp_name from image";
$result = mysqli_query($conn, $sql);

// 3. 한 줄씩 가져와서 mysqli_fetch_row()
$count = mysqli_num_rows($result);

for ($i = 0; $i < $count; $i++) {
  $re = mysqli_fetch_row($result);
  echo "$re[0] $re[1] $re[2] $re[3] <br>";


?>

<img src="<?php echo $re[2] ?>" onclick="action_imageView('<?php echo $re[2]?>')" id="img1" width="50px" height="50px">
<?php
}
?>