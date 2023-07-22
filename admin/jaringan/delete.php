<?php
// Sertakan file koneksi
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah data jaringan yang akan dihapus telah dipilih
    if (isset($_POST["selected_network"]) && is_array($_POST["selected_network"]) && !empty($_POST["selected_network"])) {
        // Loop through each selected network ID and perform the deletion
        foreach ($_POST["selected_network"] as $network_id) {
            // Gunakan prepared statement untuk menghindari SQL injection
            $query = "DELETE FROM tb_jaringan WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $network_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=jaringan");
        exit();
    } else {
        header("Location: ../dashboard.php?page=jaringan");
        exit();
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>