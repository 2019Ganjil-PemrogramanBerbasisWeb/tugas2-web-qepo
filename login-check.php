<?php


include 'conn.php';

$email = $_POST['email'];
$password = $_POST['pass'];


$data = mysqli_query($conn, " SELECT * FROM users WHERE email='$email' AND password='$password'");

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
