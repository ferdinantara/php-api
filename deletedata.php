<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id= $_GET['id'];
// query SQL untuk insert data

// $query="DELETE from tb_siswa where id='$id'";

mysqli_query($connection,"DELETE from tb_siswa where id='$id'");
// mengalihkan ke halaman index.php
header("location:index.php");
?>