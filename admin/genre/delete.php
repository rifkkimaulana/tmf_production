<?php
// Sertakan file koneksi
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah data genre yang akan dihapus telah dipilih
    if (isset($_POST["selected_genre"]) && is_array($_POST["selected_genre"]) && !empty($_POST["selected_genre"])) {
        // Loop through each selected genre ID and perform the deletion
        foreach ($_POST["selected_genre"] as $genre_id) {
            // Gunakan prepared statement untuk menghindari SQL injection
            $query = "DELETE FROM tb_genre WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $genre_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=genre");
        exit();
    } else {
        header("Location: ../dashboard.php?page=genre");
        exit();
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>