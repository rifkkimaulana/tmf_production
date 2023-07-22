<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_kualitas"])) {
        $quality_name = $_POST["nama_kualitas"];

        // Jika data quality_slug tidak diisi, buat slug dari quality_name
        if (empty($_POST["slug_kualitas"])) {
            // Hapus karakter non-alfanumerik dan spasi dari quality_name
            $quality_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($quality_name));
        } else {
            $quality_slug = $_POST["slug_kualitas"];
        }

        $query = "INSERT INTO tb_kualitas (nama_kualitas, slug_kualitas) VALUES ('$quality_name', '$quality_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=kualitas");
            exit();
        } else {
            echo "Gagal menyimpan data kualitas.";
        }
    }
}

mysqli_close($koneksi);
?>