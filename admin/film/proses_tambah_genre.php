<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nama_genre"])) {
        $nama_genre = $_POST["nama_genre"];

        if (empty($_POST["slug_genre"])) {
            $slug_genre = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_genre));
        } else {
            $slug_genre = $_POST["slug_genre"];
        }

        $query = "INSERT INTO tb_genre (nama_genre, slug_genre) VALUES ('$nama_genre', '$slug_genre')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $query = "SELECT id, nama_genre FROM tb_genre";
            $result = mysqli_query($koneksi, $query);

            echo '<div id="genreContainer">';
            while ($row = mysqli_fetch_assoc($result)) {
                $id_genre = $row['id'];
                $nama_genre = $row['nama_genre'];

                echo '<div class="form-check">';
                echo '<input type="checkbox" class="form-check-input" id="genre_' . $id_genre . '" value="' . $id_genre . '">';
                echo '<label class="form-check-label" for="genre_' . $id_genre . '">' . $nama_genre . '</label>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "Gagal menambahkan genre: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data genre baru tidak ditemukan";
    }
} else {
    echo "Request tidak valid";
}

mysqli_close($koneksi);
?>