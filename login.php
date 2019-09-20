<!DOCTYPE html>
<html>
<head>
	<title>Login CRUD OOP PHP</title>
	<link class="link" rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="kotak_login">
	<p class="tulisan_login" align="center">Silahkan Masukkan<br/>
							 Username Dan Password Anda</p>
<form action="" method="POST">
    <label for="username">Username</label>
    <input type="text" class="form_login" name="username" placeholder="Username"> <br>

    <label for="password">Password *</label>
    <input type="password" class="form_login" name="password" placeholder="Password"> <br>

    <input type="submit" class="tombol_login" value="LOGIN" name="btnlogin"> <input type="checkbox"> <b>Remember Me</b>
</form>	
<?php 
	session_start();
	include 'koneksi.php';
	if (isset($_SESSION['level'])) {
		if ($_SESSION['level'] == "user") {
			header("Location: user.php");
		}elseif($_SESSION['level'] == "admin"){
			header("Location: index.php");
		}
	}
if (isset($_POST['btnlogin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$koneksi  = new database();
	$koneksi  = $koneksi->koneksi;
	$query    = "SELECT * FROM test WHERE username = '$username' AND password ='$password'";

	$result	  = $koneksi->query($query);

	$row	  = $result->num_rows;

	$sql      = $koneksi->query("SELECT * FROM test WHERE username = '$username'");
	$akun     = $sql->fetch_array();

	if ($row > 0) {
		if ($akun['level']== "admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("Location: index.php");
		} else if ($akun['level']== "user") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "user";
			header("Location: user.php");
		}
	}else{
		echo "Username dan Password anda Salah!!!";
	}
}

?>
</div>
</body>
</html>