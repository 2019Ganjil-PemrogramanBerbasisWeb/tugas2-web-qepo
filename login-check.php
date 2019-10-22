<?php
  error_reporting(0);
  session_start();

include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];


$data = mysqli_query($conn, " SELECT * FROM login WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0)
{
  $_SESSION['email'] = $email;
  $_SESSION['status'] = "Login";
  setcookie("mesage", "delete", time()-1); //hapus pesan setcookie
  header("location:homepage.php");
}
else {
  echo '<p>Data yang anda masukkan salah</p><br><a href="login.php">Kembali</a>'; 
}
?>
