<?php 

include 'koneksi.php';

$nama = $_POST["nama"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "INSERT INTO users (nama, email, username, password) 
                VALUES ('$nama', '$email','$username', '$password')";

if (mysqli_query($koneksi, $sql)) {
      echo "<h1>Username $username berhasil terdaftar</h1>
            <a href='login.php'>Kembali Login</h1>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>
