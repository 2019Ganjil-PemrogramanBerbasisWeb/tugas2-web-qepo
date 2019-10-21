<?php
include 'conn.php';


	session_start();
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$data = mysqli_query("SELECT * FROM login WHERE email='$email' and password='$password'",$conn);
	$cek = mysqli_fetch_array($data);

	if($cek > 0){
		$_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        header('location:asjdsa.html');
	} else {
		$msg='Gagal Login';
	}
?>
