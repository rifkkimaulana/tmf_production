<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    if (!isset($_SESSION['nama'])) {
        echo "Anda harus login terlebih dahulu untuk menghapus komentar.";
        exit();
    }

    if (isset($_POST['komentar_id'])) {
        $komentar_id = $_POST['komentar_id'];
        $tmdb_id = $_POST['tmdb_id'];

        include '../config/koneksi.php';

        $query_hapus = "DELETE FROM tb_komentar WHERE id = '$komentar_id'";
        $result_hapus = mysqli_query($koneksi, $query_hapus);

        if ($result_hapus) {
            header("Location: ../dashboard.php?page=movies&id=" . $tmdb_id);
        } else {
            echo "Gagal menghapus komentar. Silakan coba lagi.";
        }

        mysqli_close($koneksi);
    } else {
        echo "Data tidak lengkap. Silakan coba lagi.";
    }
} else {
    echo "Akses tidak sah.";
}
?>