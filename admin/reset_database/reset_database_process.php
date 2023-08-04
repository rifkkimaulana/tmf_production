<?php
include '../../config/koneksi.php';

session_start();
if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
}

$queryTables = "SHOW TABLES";
$resultTables = mysqli_query($koneksi, $queryTables);

$tables = array();
while ($rowTables = mysqli_fetch_row($resultTables)) {
    $table = $rowTables[0];
    if ($table !== 'tb_users') {
        mysqli_query($koneksi, "TRUNCATE TABLE $table");
    }
}

$queryDatabase = "SELECT DATABASE() AS 'database_name'";
$resultDatabase = mysqli_query($koneksi, $queryDatabase);
$rowDatabase = mysqli_fetch_assoc($resultDatabase);
$database = $rowDatabase['database_name'];

header("Location: ../../admin/dashboard.php?page=backup_restore");
exit();
?>