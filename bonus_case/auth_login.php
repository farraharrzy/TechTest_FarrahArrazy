<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = mysqli_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);
echo $cek;
?>