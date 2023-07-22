<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_genre"])) {
        $nama_genre = $_POST["nama_genre"];

        // Jika data slug_genre tidak diisi, buat slug dari nama_genre
        if (empty($_POST["slug_genre"])) {
            // Hapus karakter non-alfanumerik dan spasi dari nama_genre
            $slug_genre = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_genre));
        } else {
            $slug_genre = $_POST["slug_genre"];
        }

        $query = "INSERT INTO tb_genre (nama_genre, slug_genre) VALUES ('$nama_genre', '$slug_genre')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=genre");
            exit();
        } else {
            echo "Gagal menyimpan data genre.";
        }
    }
}

mysqli_close($koneksi);
?>