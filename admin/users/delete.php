<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../config/koneksi.php");

    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE user_id='$id'");
    $d = mysqli_fetch_assoc($data);
    $foto = $d['user_foto'];
    unlink("../../gambar/user/$foto");
    mysqli_query($koneksi, "delete from user where user_id='$id'");
    header("location: ../dashboard.php?page=users&alert=hapus");
}