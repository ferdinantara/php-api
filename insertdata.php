<!DOCTYPE html>
<html>
<head>
	<title>
		inserting data
	</title>
</head>
<body>
	<?php 
    include "config.php";
	$qry = mysqli_query($connection,"SELECT * FROM tb_siswa");
	$data = mysqli_fetch_array($qry);
 	?>
	<form method="post" action="savedata.php">
            <table>
                <tr>
                	<td>
                		ID
                	</td>
                	<td>
                		<input type="text" name="id">
                	</td>
            	</tr>
                <tr>
                	<td>
                		Username
                	</td>
                	<td>
                		<input type="text" name="username">
                	</td>
                </tr>
                <tr>
                	<td>
                		Password
                	</td>
                	<td>
                        <input type="text" name="password">
                    </td>
                </tr>
                <tr>
                	<td>
                		Level
                	</td>
                	<td>
                        <select name="level">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                            <option value="guest">guest</option>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>
                		Fullname
                	</td>
                	<td>
                		<input type="text" name="fullname">
                	</td>
                </tr>
                <tr>
                	<td>
                	<input type="submit" value="simpan" name="simpan">
                	</td>
                </tr>
            </table>
        </form>
         <?php
                /*if (isset($_POST['simpan'])) 
                {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    $fullname = $_POST['fullname'];
                    $tambah = mysqli_query($connection, "INSERT INTO tb_siswa(id,username,password,level,fullname)VALUES('$id','$username','$password','$level','$fullname')");
                    if($tambah)
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Tambah Berhasil ');
                            document.location.href="index.php";
                        </script>
                        <?php
                    }
                    else
                    {
                        echo "FAIL GANNN";
                    }
                }*/
            ?>
</body>
</html>