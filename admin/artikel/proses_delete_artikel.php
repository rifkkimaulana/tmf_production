<?php
include '../../config/koneksi.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $artikelId = $_GET['id'];

    $deleteQuery = "DELETE FROM tb_artikel WHERE id = $artikelId";

    if (mysqli_query($koneksi, $deleteQuery)) {
        header("Location: ../dashboard.php?page=artikel&alert=berhasil_delete");
        exit();
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
} else {
    header("Location: ../dashboard.php?page=artikel&alert=gagal_delete");
    exit();
}
?>