<?php

$upload_dir = './uploads/';

$upload_file = $upload_dir.basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $upload_file);

// $a = $_FILES
// $sql = "insert into image(fname, fsize, fpath, ftmp_name) values (...............)"; // name, size, tmp_name : $_FILES, fpaht : $upload_file

?>