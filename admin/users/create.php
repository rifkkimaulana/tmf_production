<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../../config/koneksi.php");

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_wa = $_POST['no_wa'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $level = $_POST['level'];

    $rand = rand();
    $allowed = array('gif', 'png', 'jpg', 'jpeg', 'GIF', 'PNG', 'JPG', 'JPEG');
    $filename = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if ($filename == "") {
        mysqli_query($koneksi, "INSERT INTO tb_users (user_nama, user_username, user_password, user_level, email, no_wa) VALUES ('$nama','$username','$password','$level', '$email', '$no_wa')");
        header("location: ../dashboard.php?page=users&alert=berhasil");
        exit();
    } else {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $file_gambar = $rand . '_' . $filename;

        if (!in_array($ext, $allowed)) {
            echo "Tipe file yang diunggah tidak didukung. Harap unggah file dengan ekstensi GIF, PNG, JPG, atau JPEG.";
            exit;
        } else {
            $uploadDir = '../../gambar/user/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $uploadPath = $uploadDir . $file_gambar;

            if (move_uploaded_file($file_tmp, $uploadPath)) {
                mysqli_query($koneksi, "INSERT INTO tb_users (user_nama, user_username, user_password, user_level, email, no_wa, user_foto) VALUES ('$nama','$username','$password','$level', '$email', '$no_wa', '$file_gambar')");
                header("location: ../dashboard.php?page=users&alert=berhasil");
                exit();
            } else {
                echo "Gagal mengunggah file. Periksa izin folder dan konfigurasi server.";
                exit;
            }
        }
    }
}
?>