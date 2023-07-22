<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_negara"])) {
        $country_name = $_POST["nama_negara"];

        // Jika data country_slug tidak diisi, buat slug dari country_name
        if (empty($_POST["slug_negara"])) {
            // Hapus karakter non-alfanumerik dan spasi dari country_name
            $country_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($country_name));
        } else {
            $country_slug = $_POST["slug_negara"];
        }

        $query = "INSERT INTO tb_negara (nama_negara, slug_negara) VALUES ('$country_name', '$country_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=negara");
            exit();
        } else {
            echo "Gagal menyimpan data negara.";
        }
    }
}

mysqli_close($koneksi);
?>