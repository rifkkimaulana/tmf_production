<?php
$timestamp = date('Y-m-d H:i:s');
$ip_address = $_SERVER['REMOTE_ADDR'];

$query_log = "INSERT INTO tb_logs_aplikasi (timestamp, username, action, description, ip_address)
VALUES (?, ?, 'login', ?, ?)";

$stmt = mysqli_prepare($koneksi, $query_log);
mysqli_stmt_bind_param($stmt, "ssss", $timestamp, $username, $description_log, $ip_address);
mysqli_stmt_execute($stmt);
?>