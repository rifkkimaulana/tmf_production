<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_kategori_artikel"]) && is_array($_POST["selected_kategori_artikel"]) && !empty($_POST["selected_kategori_artikel"])) {
        foreach ($_POST["selected_kategori_artikel"] as $genre_id) {
            $query = "DELETE FROM tb_kategori_artikel WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $genre_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../../admin/dashboard.php?page=kategori_artikel");
        exit();
    } else {
        header("Location: ../../admin/dashboard.php?page=kategori_artikel");
        exit();
    }
}

mysqli_close($koneksi);
?>