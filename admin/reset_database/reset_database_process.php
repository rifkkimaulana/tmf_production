<?php
include '../../koneksi.php';

$queryTables = "SHOW TABLES";
$resultTables = mysqli_query($koneksi, $queryTables);

$tables = array();
while ($rowTables = mysqli_fetch_row($resultTables)) {
    $table = $rowTables[0];
    if ($table !== 'user') {
        mysqli_query($koneksi, "TRUNCATE TABLE $table");
    }
}

$queryDatabase = "SELECT DATABASE() AS 'database_name'";
$resultDatabase = mysqli_query($koneksi, $queryDatabase);
$rowDatabase = mysqli_fetch_assoc($resultDatabase);
$database = $rowDatabase['database_name'];

header("Location: ../../admin/dashboard.php?page=dashboard");
exit();
?>