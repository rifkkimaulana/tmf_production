<?php
session_start();
if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
}

include '../../config/koneksi.php';
include '../../config/base_url.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["sqlFile"])) {
    $targetDir = $base_url . "/admin/backup_restore/database/";
    $targetFile = $targetDir . basename($_FILES["sqlFile"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($fileType == "sql") {
        if (move_uploaded_file($_FILES["sqlFile"]["tmp_name"], $targetFile)) {
            $sqlContent = file_get_contents($targetFile);
            $sqlStatements = explode(';', $sqlContent);

            $stmt = mysqli_stmt_init($koneksi);

            foreach ($sqlStatements as $sqlStatement) {
                $sqlStatement = trim($sqlStatement);
                if (!empty($sqlStatement)) {
                    if (mysqli_stmt_prepare($stmt, $sqlStatement)) {
                        if (mysqli_stmt_execute($stmt)) {
                            echo "Pernyataan SQL berhasil dieksekusi: " . $sqlStatement . "<br>";
                        } else {
                            echo "Gagal mengeksekusi pernyataan SQL: " . mysqli_stmt_error($stmt) . "<br>";
                        }
                    } else {
                        echo "Gagal menyiapkan pernyataan SQL: " . mysqli_stmt_error($stmt) . "<br>";
                    }
                }
            }

            mysqli_stmt_close($stmt);

            unlink($targetFile);

            echo '<script>window.location.href = "../dashboard.php?page=dashboard&alert=berhasil_restoreDatabase";</script>';

        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File yang diunggah bukan file SQL.";
    }
}
?>