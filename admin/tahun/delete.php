<?php
// Sertakan file koneksi
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah data tahun yang akan dihapus telah dipilih
    if (isset($_POST["selected_year"]) && is_array($_POST["selected_year"]) && !empty($_POST["selected_year"])) {
        // Loop melalui setiap ID tahun yang dipilih dan lakukan penghapusan
        foreach ($_POST["selected_year"] as $year_id) {
            // Gunakan prepared statement untuk menghindari SQL injection
            $query = "DELETE FROM tb_tahun WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $year_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=tahun");
        exit();
    } else {
        header("Location: ../dashboard.php?page=tahun");
        exit();
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>