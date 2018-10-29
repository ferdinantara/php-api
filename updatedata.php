<?php
include 'config.php';
// menyimpan data kedalam variabel
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];
// query SQL untuk insert data
$query="UPDATE tb_siswa SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname' where id='$id'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>