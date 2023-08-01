<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['komentar_id'])) {
        $komentar_id = $_POST['komentar_id'];

        include '../../config/koneksi.php';

        $query_hapus = "DELETE FROM tb_komentar WHERE id = '$komentar_id'";
        $result_hapus = mysqli_query($koneksi, $query_hapus);

        if ($result_hapus) {
            header("Location: ../dashboard.php?page=komentar&alert=berhasil");
        } else {
            echo "Gagal menghapus komentar. Silakan coba lagi.";
        }

        mysqli_close($koneksi);
    } else {
        echo "Data tidak lengkap. Silakan coba lagi.";
    }
} else {
    echo "Akses tidak sah.";
}
?>