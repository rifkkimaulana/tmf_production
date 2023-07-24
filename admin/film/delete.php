<?php
include '../../config/koneksi.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $filmId = $_GET['id'];

    $deleteQuery = "DELETE FROM tb_film WHERE id = $filmId";

    if (mysqli_query($koneksi, $deleteQuery)) {
        header("Location: ../dashboard.php?page=film&alert=berhasil_delete");
        exit();
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
} else {
    header("Location: ../dashboard.php?page=film&alert=gagal_delete");
    exit();
}
?>