<?php
include 'config.php';
$id         = $_GET['id'];
$qry  = mysqli_query($connection, "select * from tb_siswa where id='$id'");
$row        = mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		edit data | kukuh
	</title>
</head>
<body>
<form method="post" action="updatedata.php">
            <table>
                <tr>
                	<td>
                		ID
                	</td>
                	<td>
                		<input type="text" value="<?php echo $row['id'];?>" name="id"> 
                	</td>
            	</tr>
                <tr>
                	<td>
                		Username
                	</td>
                	<td>
                		<input type="text" value="<?php echo $row['username']; ?>" name="username">
                	</td>
                </tr>
                <tr>
                	<td>
                		Password
                	</td>
                	<td>
                        <input type="text" value="<?php echo $row['password']; ?>" name="password">
                    </td>
                </tr>
                <tr>
                	<td>
                		Level
                	</td>
                	<td>
                        <select name="level" value='<?php echo $row['level']; ?>'>
                            <option>Admin</option>
							<option>User</option>
							<option>Guest</option>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>
                		Fullname
                	</td>
                	<td>
                		<input type="text" value="<?php echo $row['fullname'];?>" name="fullname">
                	</td>
                </tr>
                <tr>
                	<td>
                	<input type="submit" value="simpan" name="simpan">
                	</td>
                	<td>
                		<a href="index.php">
                			Kembali
                		</a>
                	</td>
                </tr>
            </table>
        </form>
</body>
</html>
