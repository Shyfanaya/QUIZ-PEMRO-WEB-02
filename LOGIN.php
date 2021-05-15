<?php
session_start();
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$database = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");
$result = mysqli_num_rows($database);
 
if($result > 0){
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");
	
	echo "<script>alert('Login Berhasil'); document.location.href = 'index.php';</script>";
}else{
	echo "<script>alert('Username atau Password Tidak Sesuai!'); document.location.href = 'index.php';</script>";
}

?>