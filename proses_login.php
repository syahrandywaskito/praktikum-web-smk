<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
header("location: gawe_admin/index.php");
 ?>