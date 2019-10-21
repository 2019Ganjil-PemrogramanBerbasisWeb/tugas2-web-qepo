<?php


include 'conn.php';

$username = $_POST['email'];
$password = $_POST['password'];


$data = mysqli_query($link, " SELECT * FROM users WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);
if($cek > 0)
{
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['status'] = "Login";
  setcookie("mesage", "delete", time()-1); //hapus pesan setcookie
  header("location:index.php");
}
else {
  echo '<p>Data yang anda masukkan salah</p><br><a href="login.php">Kembali</a>'; 
}
?>
