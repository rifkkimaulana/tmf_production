<?php
include 'koneksi.php';
$username = $_POST['username'];
$action = $_POST['action'];
$description_log = $_POST['description_log'];
$ip_address = $_POST['ip_address'];

$timestamp = date('Y-m-d H:i:s');

$query_log = "INSERT INTO tb_logs_aplikasi (timestamp, username, action, description, ip_address)
                    VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($koneksi, $query_log);
mysqli_stmt_bind_param($stmt, "sssss", $timestamp, $username, $action, $description_log, $ip_address);

if (mysqli_stmt_execute($stmt)) {
    echo "Data kunjungan berhasil disimpan.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
mysqli_stmt_close($stmt);
mysqli_close($koneksi);

?>