<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_direksi"]) && is_array($_POST["selected_direksi"]) && !empty($_POST["selected_direksi"])) {

        foreach ($_POST["selected_direksi"] as $director_id) {
            $query = "DELETE FROM tb_direksi WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $director_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=direksi");
        exit();
    } else {
        header("Location: ../dashboard.php?page=direksi");
        exit();
    }
}

mysqli_close($koneksi);
?>