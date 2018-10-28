<?php
include 'config.php';
// menyimpan data kedalam variabel
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];
// query SQL untuk insert data
$tambah = mysqli_query($connection, "INSERT INTO tb_siswa(id,username,password,level,fullname)VALUES('$id','$username','$password','$level','$fullname')"); 

// mengalihkan ke halaman index.php
header("location:index.php");
?>