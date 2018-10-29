<!DOCTYPE html>
<html>
<head>
  <title>
    table db | Kukuh
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php include "config.php"; ?>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>Username</th>
      <th>Password</th>
      <th>Level</th>
      <th>Fullname</th>
      <th>Action</th>
    </tr>

    <?php 
        $qry = mysqli_query($connection,"SELECT * FROM tb_siswa");
        while($db_siswa = mysqli_fetch_array($qry)){
    ?>

    <tr>
      <td><?php echo $db_siswa['id']; ?></td>
      <td><?php echo $db_siswa['username']; ?></td>
      <td><?php echo $db_siswa['password']; ?></td>
      <td><?php echo $db_siswa['level']; ?></td>
      <td><?php echo $db_siswa['fullname']; ?></td>
      <td>
        <div class="btn-update-delete">
                <a class="green" href='editdata.php?id=<?php echo $db_siswa['id']; ?>'>Update</a> or
                <a class="red" href='deletedata.php?id=<?php echo $db_siswa['id']; ?>'>Delete</a>
        </div>
      </td>
      <?php
      }
      ?>
    </tr>
  </table>
  <div class="button">
  <a class="btn"href="insertdata.php">TAMBAH</a>
  </div>
  
</body>
</html>