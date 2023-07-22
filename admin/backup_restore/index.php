<?php
include '../config/koneksi.php';

// Mengambil nama database
$queryDatabase = "SELECT DATABASE() AS 'database_name'";
$resultDatabase = mysqli_query($koneksi, $queryDatabase);
$rowDatabase = mysqli_fetch_assoc($resultDatabase);
$database = $rowDatabase['database_name'];

// Mengambil ukuran database
$query = "SELECT table_schema AS 'Database', ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS 'Size (MB)'
          FROM information_schema.TABLES
          WHERE table_schema = '$database'
          GROUP BY table_schema";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$ukuranDatabase = $row['Size (MB)'];

// Menampilkan tabel-tabel database
$queryTables = "SHOW TABLES";
$resultTables = mysqli_query($koneksi, $queryTables);

$tables = array();
while ($rowTables = mysqli_fetch_row($resultTables)) {
    $tables[] = $rowTables[0];
}

?>

<!-- Tampilan HTML -->


<!-- Form Backup dan Restore -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Backup - Restore Database</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Ukuran Database:
                    <?php echo $ukuranDatabase; ?> MB [ MAX UPLOAD SIZE : 32
                    MB ]
                </p>
                <p class="card-text">Supported extension: .sql and .sql.gz (recommended)</p>
                <form action="backup_restore/restore_database.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="backupFile">Pilih File Backup:</label>
                        <input type="file" class="form-control-file" id="backupFile" name="backupFile" required>
                    </div>
                    <button type="submit" class="btn btn-success">Restore Database</button>


                    <a href="backup_restore/backup_database.php" class="btn btn-primary" download>Backup
                        Database</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tabel Detail Database -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Detail Database</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Tabel</th>
                            <th>Rows</th>
                            <th>Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $queryTables = "SHOW TABLES FROM $database";
                        $resultTables = mysqli_query($koneksi, $queryTables);

                        while ($row = mysqli_fetch_array($resultTables)) {
                            $table = $row[0];

                            // Mendapatkan jumlah baris (Rows)
                            $queryRowCount = "SELECT COUNT(*) AS 'Rows' FROM $table";
                            $resultRowCount = mysqli_query($koneksi, $queryRowCount);
                            $rowRowCount = mysqli_fetch_assoc($resultRowCount);
                            $rows = $rowRowCount['Rows'];

                            // Mendapatkan ukuran tabel (Size)
                            $queryTableData = "SHOW TABLE STATUS LIKE '$table'";
                            $resultTableData = mysqli_query($koneksi, $queryTableData);
                            $rowTableData = mysqli_fetch_assoc($resultTableData);
                            $size = round($rowTableData['Data_length'] / 1024 / 1024, 2);

                            ?>
                            <tr>
                                <td>
                                    <?php echo $table; ?>
                                </td>
                                <td>
                                    <?php echo $rows; ?>
                                </td>
                                <td>
                                    <?php echo $size; ?> MB
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>