<?php
  session_start();
  if ($_SESSION['status'] != "Login"){
    header("location:index.html");
  }
?>