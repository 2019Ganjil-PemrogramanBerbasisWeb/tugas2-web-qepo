<?php
include 'conn.php';


	session_start();
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$data = mysqli_query($conn,"SELECT * FROM login WHERE email='$email' and password='$password'");
	$cek = mysqli_num_rows($data,$conn);

	if($cek > 0){
		$_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        header('location:asjdsa.html');
	} else {
		$msg='Gagal Login';
	}
?>
