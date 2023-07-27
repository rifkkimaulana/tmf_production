<?php
include '../../config/koneksi.php';

// Periksa apakah request datang dari metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Periksa apakah data genre baru telah terisi
    if (isset($_POST["nama_genre"])) {
        $nama_genre = $_POST["nama_genre"];

        // Jika data slug_genre tidak diisi, buat slug dari nama_genre
        if (empty($_POST["slug_genre"])) {
            // Hapus karakter non-alfanumerik dan spasi dari nama_genre
            $slug_genre = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_genre));
        } else {
            $slug_genre = $_POST["slug_genre"];
        }

        // Lakukan query untuk menambahkan genre baru ke dalam database
        $query = "INSERT INTO tb_genre (nama_genre, slug_genre) VALUES ('$nama_genre', '$slug_genre')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Query berhasil, kirimkan data genre yang baru sebagai respon
            $query = "SELECT id, nama_genre FROM tb_genre";
            $result = mysqli_query($koneksi, $query);

            // Bangun kembali tampilan genreContainer
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
            // Query gagal, kirimkan pesan error
            echo "Gagal menambahkan genre: " . mysqli_error($koneksi);
        }
    } else {
        // Data genre baru tidak terisi, kirimkan pesan error
        echo "Data genre baru tidak ditemukan";
    }
} else {
    // Request bukan dari metode POST, kirimkan pesan error
    echo "Request tidak valid";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>