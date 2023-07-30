<?php
ini_set('display_errors', E_ALL);
error_reporting(E_ALL);
// Include file koneksi.php
include '../../config/koneksi.php';

// Mengambil nama database
$queryDatabase = "SELECT DATABASE() AS 'database_name'";
$resultDatabase = mysqli_query($koneksi, $queryDatabase);
$rowDatabase = mysqli_fetch_assoc($resultDatabase);
$database = $rowDatabase['database_name'];

// Fungsi untuk melakukan restore database
function restoreDatabase($koneksi, $database, $backupFilePath)
{
    // Baca isi file backup
    $sqlCommands = file_get_contents($backupFilePath);

    // Eksekusi perintah-perintah SQL
    if (mysqli_multi_query($koneksi, $sqlCommands)) {
        echo "Restore database berhasil.";
    } else {
        echo "Gagal restore database: " . mysqli_error($koneksi);
    }
}

// Menyimpan backup database
if (isset($_POST['backupFile'])) {
    $backupFile = $_POST['backupFile'];
    $backupFilePath = "../../admin/backup_restore/database/$backupFile";

    if (file_exists($backupFilePath)) {
        // Panggil fungsi restoreDatabase
        restoreDatabase($koneksi, $database, $backupFilePath);
    } else {
        echo "File backup tidak ditemukan.";
    }

    header("Location: ../../dashboard.php?page=dashboard");
    exit();
}
?>