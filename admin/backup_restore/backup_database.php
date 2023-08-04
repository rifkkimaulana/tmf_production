<?php
session_start();
if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
}

include '../../config/koneksi.php';

$backupDirectory = '../backup_restore/database/';
$backupFileName = $database . '_' . date('Ymd_His') . '.sql';

$tables = array();
$resultTables = mysqli_query($koneksi, "SHOW TABLES");
while ($rowTables = mysqli_fetch_row($resultTables)) {
    $tables[] = $rowTables[0];
}

$backupContent = '';
foreach ($tables as $table) {
    $resultTableStructure = mysqli_query($koneksi, "SHOW CREATE TABLE $table");
    $rowTableStructure = mysqli_fetch_row($resultTableStructure);
    $backupContent .= $rowTableStructure[1] . ";\n\n";

    $resultTableData = mysqli_query($koneksi, "SELECT * FROM $table");
    while ($rowTableData = mysqli_fetch_assoc($resultTableData)) {
        $rowValues = array_map('addslashes', $rowTableData);
        $backupContent .= "INSERT INTO $table VALUES ('" . implode("', '", $rowValues) . "');\n";
    }

    $backupContent .= "\n";
}

// Set header untuk mengunduh file tanpa menyimpannya di direktori
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($backupFileName));
header('Content-Length: ' . strlen($backupContent));
echo $backupContent;
exit;
?>