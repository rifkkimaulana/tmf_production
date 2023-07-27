<?php
include '../../config/koneksi.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $tvShowId = $_GET['id'];

    $deleteQuery = "DELETE FROM tb_tv_show WHERE id = $tvShowId";

    if (mysqli_query($koneksi, $deleteQuery)) {
        header("Location: ../dashboard.php?page=tv_show&alert=berhasil_delete");
        exit();
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
} else {
    header("Location: ../dashboard.php?page=tv_show&alert=gagal_delete");
    exit();
}
?>