<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
}

// Include file koneksi.php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["sqlFile"])) {
    $targetDir = __DIR__ . "/database/"; // Replace with the server-side directory path where you want to save the SQL file
    $targetFile = $targetDir . basename($_FILES["sqlFile"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is a SQL file
    if ($fileType == "sql") {
        if (move_uploaded_file($_FILES["sqlFile"]["tmp_name"], $targetFile)) {
            // Read and split the content of the SQL file by the semicolon
            $sqlContent = file_get_contents($targetFile);
            $sqlStatements = explode(';', $sqlContent);

            // Prepare the statement
            $stmt = mysqli_stmt_init($koneksi);

            // Execute each SQL statement
            foreach ($sqlStatements as $sqlStatement) {
                $sqlStatement = trim($sqlStatement);
                if (!empty($sqlStatement)) {
                    // Bind the SQL statement
                    if (mysqli_stmt_prepare($stmt, $sqlStatement)) {
                        if (mysqli_stmt_execute($stmt)) {
                            echo "Pernyataan SQL berhasil dieksekusi: " . $sqlStatement . "<br>";
                        } else {
                            echo "Gagal mengeksekusi pernyataan SQL: " . mysqli_stmt_error($stmt) . "<br>";

                            // Kosongkan bagian user_agent
                            if (strpos($sqlStatement, "INSERT INTO tb_view") !== false) {
                                $sqlStatement = str_replace("INSERT INTO tb_view (id, user_agent,", "INSERT INTO tb_view (id, user_agent, ", $sqlStatement);
                                $sqlStatement = preg_replace("/'(.+?)'/", "NULL", $sqlStatement, 1);

                                if (mysqli_stmt_prepare($stmt, $sqlStatement)) {
                                    if (mysqli_stmt_execute($stmt)) {
                                        echo "Data telah dikosongkan.<br>";
                                    } else {
                                        echo "Gagal mengosongkan data: " . mysqli_stmt_error($stmt) . "<br>";
                                    }
                                } else {
                                    echo "Gagal menyiapkan pernyataan SQL: " . mysqli_stmt_error($stmt) . "<br>";
                                }
                            }
                        }
                    } else {
                        echo "Gagal menyiapkan pernyataan SQL: " . mysqli_stmt_error($stmt) . "<br>";
                    }
                }
            }

            // Close the statement
            mysqli_stmt_close($stmt);

            // Hapus file SQL setelah dieksekusi
            unlink($targetFile);
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File yang diunggah bukan file SQL.";
    }
}

?>