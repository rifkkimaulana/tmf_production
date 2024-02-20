<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_kategori"])) {
        $nama_kategori = $_POST["nama_kategori"];

        if (empty($_POST["slug_kategori"])) {
            $slug_kategori = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_kategori));
        } else {
            $slug_kategori = $_POST["slug_kategori"];
        }

        $query = "INSERT INTO tb_kategori_artikel (nama_kategori, slug_kategori) VALUES ('$nama_kategori', '$slug_kategori')";
        $result = mysqli_query($koneksi, $query);
    }
    header("Location: ../../admin/dashboard.php?page=kategori_artikel");
    exit();
}

mysqli_close($koneksi);
?>