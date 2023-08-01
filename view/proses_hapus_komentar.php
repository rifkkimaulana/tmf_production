<?php
// Pastikan halaman ini hanya bisa diakses melalui metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Cek apakah pengguna sudah login atau belum
    session_start();
    if (!isset($_SESSION['nama'])) {
        // Jika belum login, alihkan pengguna ke halaman login atau tampilkan pesan error
        // Misalnya: header("Location: login.php");
        echo "Anda harus login terlebih dahulu untuk menghapus komentar.";
        exit();
    }

    // Cek apakah ada data yang dikirim dari form
    if (isset($_POST['komentar_id'])) {
        // Mendapatkan ID komentar yang akan dihapus
        $komentar_id = $_POST['komentar_id'];

        // Lakukan koneksi ke database
        include '../config/koneksi.php';

        // Lakukan query untuk menghapus komentar berdasarkan ID
        $query_hapus = "DELETE FROM tb_komentar WHERE id = '$komentar_id'";
        $result_hapus = mysqli_query($koneksi, $query_hapus);

        if ($result_hapus) {
            // Komentar berhasil dihapus, alihkan kembali ke halaman sebelumnya atau halaman komentar
            // Misalnya: header("Location: view.php");
            echo "Komentar berhasil dihapus.";
        } else {
            // Gagal menghapus komentar, tampilkan pesan error
            echo "Gagal menghapus komentar. Silakan coba lagi.";
        }

        // Tutup koneksi ke database
        mysqli_close($koneksi);
    } else {
        // Data tidak lengkap, tampilkan pesan error
        echo "Data tidak lengkap. Silakan coba lagi.";
    }
} else {
    // Jika halaman ini diakses melalui metode selain POST, tampilkan pesan error
    echo "Akses tidak sah.";
}
?>