<?php
	$email = $_POST['email'];
	$pass = $_POST['password'];
	include "conn.php";
	$newUser = "INSERT INTO login (email, password) VALUES ('$email', '$pass')";
    if ($conn->query($newUser) == TRUE) {
		echo "Pendaftaran berhasil";
	} else {
		echo "Gagal";
	}
	header("location:login.html");
?>
