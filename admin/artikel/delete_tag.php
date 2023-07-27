<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_tag_artikel"]) && is_array($_POST["selected_tag_artikel"]) && !empty($_POST["selected_tag_artikel"])) {
        foreach ($_POST["selected_tag_artikel"] as $kategori_id) {
            $query = "DELETE FROM tb_tag_artikel WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $kategori_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../../admin/dashboard.php?page=tag_artikel");
        exit();
    } else {
        header("Location: ../../admin/dashboard.php?page=tag_artikel");
        exit();
    }
}

mysqli_close($koneksi);
?>