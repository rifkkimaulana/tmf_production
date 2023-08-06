<?php
include 'config/base_url.php';
session_start();
$username = $_SESSION['username'];
echo $username;
$data = array(
    'username' => 'contoh_username',
    'action' => 'login',
    'description_log' => 'Mencoba Login'
);

$endpoint_url = $base_url . '/config/insert_log.php';
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($endpoint_url, false, $context);

var_dump($result);

session_unset();
session_destroy();

setcookie("remember_me", "", time() - 3600, "/");

//header("location: login/index.php");
//exit();
?>