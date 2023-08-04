<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nama_kategori"])) {
        $nama_kategori = $_POST["nama_kategori"];

        if (empty($_POST["slug_kategori"])) {
            $slug_kategori = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_kategori));
        } else {
            $slug_kategori = $_POST["slug_kategori"];
        }

        $query = "INSERT INTO tb_kategori_artikel (nama_kategori, slug_kategori) VALUES ('$nama_kategori', '$slug_kategori')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $query = "SELECT id, nama_kategori FROM tb_kategori_artikel";
            $result = mysqli_query($koneksi, $query);

            echo '<div id="categoryContainer">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id_kategori = $row['id'];
                $nama_kategori = $row['nama_kategori'];

                echo '<div class="form-check">';
                echo '<input type="checkbox" class="form-check-input" id="category_' . $id_kategori . '" value="' . $id_kategori . '">';
                echo '<label class="form-check-label" for="category_' . $id_kategori . '">' . $nama_kategori . '</label>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "Gagal menambahkan kategori: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data kategori baru tidak ditemukan";
    }
} else {
    echo "Request tidak valid";
}

mysqli_close($koneksi);

?>