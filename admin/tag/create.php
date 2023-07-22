<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tag_name"])) {
        $tag_name = $_POST["tag_name"];

        // Jika data tag_slug tidak diisi, buat slug dari tag_name
        if (empty($_POST["tag_slug"])) {
            // Hapus karakter non-alfanumerik dan spasi dari tag_name
            $tag_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($tag_name));
        } else {
            $tag_slug = $_POST["tag_slug"];
        }

        $query = "INSERT INTO tb_tag (nama_tag, slug_tag) VALUES ('$tag_name', '$tag_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=tag");
            exit();
        } else {
            echo "Gagal menyimpan data tag.";
        }
    }
}

mysqli_close($koneksi);
?>