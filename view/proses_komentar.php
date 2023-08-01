<?php
include '../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tmdb_id = $_POST['tmdb_id'];
    $komentar = $_POST['komentar'];
    $waktu_post = date("Y-m-d H:i:s");

    $query_insert = "INSERT INTO tb_komentar (nama, komentar, waktu_post, tmdb_id) VALUES ('$nama', '$komentar', '$waktu_post', '$tmdb_id')";

    if (mysqli_query($koneksi, $query_insert)) {
        header("Location: ../dashboard.php?page=view&id=" . $tmdb_id);
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>