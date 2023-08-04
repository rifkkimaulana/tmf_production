<?php
include '../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tmdb_id = $_POST['tmdb_id'];
    $artikel_id = $_POST['artikel_id'];
    $komentar = $_POST['komentar'];
    $halaman = $_POST['halaman'];
    $waktu_post = date("Y-m-d H:i:s");

    $query_insert = "INSERT INTO tb_komentar (nama, komentar, waktu_post, tmdb_id, artikel_id) VALUES ('$nama', '$komentar', '$waktu_post', '$tmdb_id' , '$artikel_id')";
    if (mysqli_query($koneksi, $query_insert)) {
        $query_artikel = "SELECT judul_artikel FROM tb_artikel WHERE id = '$artikel_id'";
        $result_artikel = mysqli_query($koneksi, $query_artikel);
        $row_artikel = mysqli_fetch_assoc($result_artikel);
        $judul_artikel = $row_artikel['judul_artikel'];

        $encoded_judul = urlencode($judul_artikel);

        if ($halaman === 'artikel') {
            header("Location: ../dashboard.php?page=" . $halaman . "&judul=" . $encoded_judul);
        } else {
            header("Location: ../dashboard.php?page=" . $halaman . "&id=" . $tmdb_id);
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>