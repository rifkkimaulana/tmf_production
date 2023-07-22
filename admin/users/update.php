<?php
include("../../config/koneksi.php");


$user_id = $_POST['user_id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$no_wa = $_POST['no_wa'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT user_password, user_foto FROM tb_users WHERE user_id='$user_id'");
$row = mysqli_fetch_assoc($data);
$old_password = $row['user_password'];
$old_photo = $row['user_foto'];

if (!empty($password)) {
    $password = password_hash($password, PASSWORD_DEFAULT);
} else {
    $password = $old_password;
}

$level = $_POST['level'];

$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg', 'GIF', 'PNG', 'JPG', 'JPEG');
$filename = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];

if (empty($filename)) {
    mysqli_query($koneksi, "UPDATE tb_users SET user_nama='$nama', user_username='$username', user_password='$password', user_level='$level', email='$email', no_wa='$no_wa' WHERE user_id='$user_id'");
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

        // Hapus gambar lama jika ada
        if (!empty($old_photo)) {
            $old_photo_path = $uploadDir . $old_photo;
            if (file_exists($old_photo_path)) {
                unlink($old_photo_path);
            }
        }

        if (move_uploaded_file($file_tmp, $uploadPath)) {
            mysqli_query($koneksi, "UPDATE user SET user_nama='$nama', user_username='$username', user_password='$password', user_level='$level', email='$email', no_wa='$no_wa', user_foto='$file_gambar' WHERE user_id='$user_id'");
            header("location: ../dashboard.php?page=users&alert=berhasil");
            exit();
        } else {
            echo "Gagal mengunggah file. Periksa izin folder dan konfigurasi server.";
            exit;
        }
    }
}


if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE user_id='$user_id'");
    $data = mysqli_fetch_array($query);

    // Assign data to variables
    $nama = $data['user_nama'];
    $username = $data['user_username'];
    $email = $data['email'];
    $no_wa = $data['no_wa'];
    $user_level = $data['user_level'];
    // ...
} else {
    // Redirect if no user_id is provided
    header("location: ../dashboard.php?page=users");
    exit();
}
?>