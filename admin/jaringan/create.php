<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_jaringan"])) {
        $network_name = $_POST["nama_jaringan"];

        if (empty($_POST["slug_jaringan"])) {
            $network_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($network_name));
        } else {
            $network_slug = $_POST["slug_jaringan"];
        }

        $query = "INSERT INTO tb_jaringan (nama_jaringan, slug_jaringan) VALUES ('$network_name', '$network_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=jaringan");
            exit();
        } else {
            echo "Gagal menyimpan data jaringan.";
        }
    }
}
mysqli_close($koneksi);
?>