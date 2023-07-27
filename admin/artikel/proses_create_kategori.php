<?php
include '../../config/koneksi.php';

// Periksa apakah request datang dari metode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Periksa apakah data kategori baru telah terisi
    if (isset($_POST["nama_kategori"])) {
        $nama_kategori = $_POST["nama_kategori"];

        // Jika data slug_kategori tidak diisi, buat slug dari nama_kategori
        if (empty($_POST["slug_kategori"])) {
            // Hapus karakter non-alfanumerik dan spasi dari nama_kategori
            $slug_kategori = preg_replace('/[^a-z0-9]+/', '-', strtolower($nama_kategori));
        } else {
            $slug_kategori = $_POST["slug_kategori"];
        }

        // Lakukan query untuk menambahkan kategori baru ke dalam database
        $query = "INSERT INTO tb_kategori_artikel (nama_kategori, slug_kategori) VALUES ('$nama_kategori', '$slug_kategori')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Query berhasil, kirimkan data kategori yang baru sebagai respon
            $query = "SELECT id, nama_kategori FROM tb_kategori_artikel";
            $result = mysqli_query($koneksi, $query);

            // Bangun kembali tampilan categoryContainer
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
            // Query gagal, kirimkan pesan error
            echo "Gagal menambahkan kategori: " . mysqli_error($koneksi);
        }
    } else {
        // Data kategori baru tidak terisi, kirimkan pesan error
        echo "Data kategori baru tidak ditemukan";
    }
} else {
    // Request bukan dari metode POST, kirimkan pesan error
    echo "Request tidak valid";
}

// Tutup koneksi database
mysqli_close($koneksi);

header("Location: ../dashboard.php?page=kategori_artikel");
exit;
?>