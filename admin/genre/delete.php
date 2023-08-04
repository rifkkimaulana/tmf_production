<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_genre"]) && is_array($_POST["selected_genre"]) && !empty($_POST["selected_genre"])) {
        foreach ($_POST["selected_genre"] as $genre_id) {
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