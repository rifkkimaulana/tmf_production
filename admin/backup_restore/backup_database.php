<?php
include '../../config/koneksi.php';

$existingFiles = glob($backupDirectory . "*.sql");
foreach ($existingFiles as $existingFile) {
    unlink($existingFile);
}

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

$backupFilePath = $backupDirectory . $backupFileName;
$fileHandle = fopen($backupFilePath, 'w');
fwrite($fileHandle, $backupContent);
fclose($fileHandle);

if (file_exists($backupFilePath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($backupFilePath));
    header('Content-Length: ' . filesize($backupFilePath));
    readfile($backupFilePath);
    exit;

} else {
    echo "Gagal menyimpan dan mengunduh file backup.";
}
?>