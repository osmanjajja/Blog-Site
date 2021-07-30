<?php 

session_start();
$conn = new mysqli("localhost", "root", "", "blog", "3308");

  echo "<script> window.open('login.php','_self') </script>";

  session_destroy();

?>