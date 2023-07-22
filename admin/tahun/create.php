<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tahun_rilis"])) {
        $year = $_POST["tahun_rilis"];

        // Jika data year_slug tidak diisi, buat slug dari year
        if (empty($_POST["slug_tahun"])) {
            // Hapus karakter non-alfanumerik dan spasi dari year
            $year_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($year));
        } else {
            $year_slug = $_POST["slug_tahun"];
        }

        $query = "INSERT INTO tb_tahun (tahun_rilis, slug_tahun) VALUES ('$year', '$year_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=tahun");
            exit();
        } else {
            echo "Gagal menyimpan data tahun.";
        }
    }
}

mysqli_close($koneksi);
?>