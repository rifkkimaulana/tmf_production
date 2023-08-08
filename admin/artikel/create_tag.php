<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_tag"])) {
        $nama_tag = $_POST["nama_tag"];

        if (empty($_POST["slug_tag"])) {
            $slug_tag = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_tag));
        } else {
            $slug_tag = $_POST["slug_tag"];
        }

        $query = "INSERT INTO tb_tag_artikel (nama_tag, slug_tag) VALUES ('$nama_tag', '$slug_tag')";
        $result = mysqli_query($koneksi, $query);

    }
    header("Location: ../../admin/dashboard.php?page=tag_artikel");
    exit();
}

mysqli_close($koneksi);
?>