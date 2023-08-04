<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_quality"]) && is_array($_POST["selected_quality"]) && !empty($_POST["selected_quality"])) {
        foreach ($_POST["selected_quality"] as $quality_id) {
            $query = "DELETE FROM tb_kualitas WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $quality_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=kualitas");
        exit();
    } else {
        header("Location: ../dashboard.php?page=kualitas");
        exit();
    }
}

mysqli_close($koneksi);
?>