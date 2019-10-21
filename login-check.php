<?php 
include 'conn.php';
 
$username = $_POST['email'];
$password = $_POST['password'];
 
$query = mysql_query("select * from login where email='$username' and password='$password'");
$cek = mysql_num_rows($query);
echo $cek;
?>
