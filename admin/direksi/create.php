<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_direksi"])) {
        $director_name = $_POST["nama_direksi"];

        // Jika data director_slug tidak diisi, buat slug dari director_name
        if (empty($_POST["director_slug"])) {
            // Hapus karakter non-alfanumerik dan spasi dari director_name
            $director_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($director_name));
        } else {
            $director_slug = $_POST["direksi_slug"];
        }

        $query = "INSERT INTO tb_direksi (nama_direksi, slug_direksi) VALUES ('$director_name', '$director_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=direksi");
            exit();
        } else {
            echo "Gagal menyimpan data direksi.";
        }
    }
}

mysqli_close($koneksi);
?>