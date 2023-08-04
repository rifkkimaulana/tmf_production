<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_tag"]) && is_array($_POST["selected_tag"]) && !empty($_POST["selected_tag"])) {

        foreach ($_POST["selected_tag"] as $tag_id) {

            $query = "DELETE FROM tb_tag WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $tag_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=tag");
        exit();
    } else {
        header("Location: ../dashboard.php?page=tag");
        exit();
    }
}

mysqli_close($koneksi);
?>