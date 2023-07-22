<?php
// Sertakan file koneksi
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah data negara yang akan dihapus telah dipilih
    if (isset($_POST["selected_country"]) && is_array($_POST["selected_country"]) && !empty($_POST["selected_country"])) {
        // Loop through each selected country ID and perform the deletion
        foreach ($_POST["selected_country"] as $country_id) {
            // Gunakan prepared statement untuk menghindari SQL injection
            $query = "DELETE FROM tb_negara WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $country_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=negara");
        exit();
    } else {
        header("Location: ../dashboard.php?page=negara");
        exit();
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>