<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_year"]) && is_array($_POST["selected_year"]) && !empty($_POST["selected_year"])) {

        foreach ($_POST["selected_year"] as $year_id) {
            $query = "DELETE FROM tb_tahun WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $year_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=tahun");
        exit();
    } else {
        header("Location: ../dashboard.php?page=tahun");
        exit();
    }
}

mysqli_close($koneksi);
?>