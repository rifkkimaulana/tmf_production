<?php
session_start();
$username = $_SESSION['username'];
echo $username;

session_unset();
session_destroy();

setcookie("remember_me", "", time() - 3600, "/");

header("location: login/index.php");
exit();
?>