<?php
include 'config/base_url.php';
session_start();

$url = $base_url . "/config/insert_log.php";
$data = array(
    'username' => $_SESSION['username'],
    'action' => 'logout',
    'description_log' => 'berhasil logout',
    'ip_address' => $_SERVER['REMOTE_ADDR']
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result !== false) {
    echo "Permintaan POST otomatis berhasil dikirim.";
} else {
    echo "Terjadi kesalahan dalam mengirimkan permintaan POST otomatis.";
}

session_unset();
session_destroy();

setcookie("remember_me", "", time() - 3600, "/");

header("location: login/index.php");
exit();
?>