<?php
session_start();
$username = $_SESSION['nama'];
$description_log = 'Menghentikan session.';
include 'config/insert_log.php';

session_unset();
session_destroy();

setcookie("remember_me", "", time() - 3600, "/");

header("location: login/index.php");
exit();
?>