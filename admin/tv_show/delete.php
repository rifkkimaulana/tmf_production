<?php
include '../../config/koneksi.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $tvShowId = $_GET['id'];

    $query_tv = "SELECT * FROM tb_tv_show WHERE id = $tvShowId";
    $result_tv = mysqli_query($koneksi, $query_tv);
    $row_tv = mysqli_fetch_assoc($result_tv);
    $tmdb_id = $row_tv['tmdb_id'];

    $deleteTmdbId = "DELETE FROM tb_tmdb WHERE id = $tmdb_id";
    if (mysqli_query($koneksi, $deleteTmdbId)) {
        echo 'sukses delete';
    } else {
        die("Tidak dapat menghapus tmdb: " . mysqli_error($koneksi));
    }

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