<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../../config/koneksi.php';

// Pastikan nilai $_POST['selectedCategories'] ada dan tidak kosong
if (isset($_POST['selectedCategories']) && !empty($_POST['selectedCategories'])) {
    $selectedCategories = $_POST['selectedCategories'];
    $categoryArray = explode(',', $selectedCategories);
    $categoryIds = array();

    foreach ($categoryArray as $categoryName) {
        $slug = strtolower(str_replace(' ', '-', $categoryName));

        $sql = "SELECT id FROM tb_kategori_artikel WHERE nama_kategori = '$categoryName' AND slug_kategori = '$slug'";
        $result = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $categoryIds[] = $row['id'];
        } else {
            $insertSql = "INSERT INTO tb_kategori_artikel (nama_kategori, slug_kategori) VALUES ('$categoryName', '$slug')";
            if (mysqli_query($koneksi, $insertSql)) {
                $categoryIds[] = mysqli_insert_id($koneksi);
            } else {
                echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
            }
        }
    }

    $string_categoryIds = implode(',', $categoryIds);
} else {
    // Handle the case when $_POST['selectedCategories'] is not provided or empty
    echo "Error: No selected categories found.";
}

// Pastikan nilai $_POST['selectedTag'] ada dan tidak kosong
if (isset($_POST['selectedTag']) && !empty($_POST['selectedTag'])) {
    $selectedTag = $_POST['selectedTag'];
    $tagArray = explode(',', $selectedTag);
    $tagIds = array();

    foreach ($tagArray as $tagName) {
        $slug = strtolower(str_replace(' ', '-', $tagName));

        $sql = "SELECT id FROM tb_tag_artikel WHERE nama_tag = '$tagName' AND slug_tag = '$slug'";
        $result = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $tagIds[] = $row['id'];
        } else {
            $insertSql = "INSERT INTO tb_tag_artikel (nama_tag, slug_tag) VALUES ('$tagName', '$slug')";
            if (mysqli_query($koneksi, $insertSql)) {
                $tagIds[] = mysqli_insert_id($koneksi);
            } else {
                echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
            }
        }
    }

    $string_tagIds = implode(',', $tagIds);
} else {
    // Handle the case when $_POST['selectedTag'] is not provided or empty
    echo "Error: No selected tags found.";
}

// Create Artikel Proses
$judul_artikel = $_POST["judul_artikel"];
$isi_artikel = $_POST["isi_artikel"];
$status = $_POST['status'];

$currentTime = date('Y-m-d H:i:s');
$targetDir = "../../gambar/artikel/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

$imageFile = $_FILES["image_banner"];
$imageName = $imageFile["name"];
$imageTmpName = $imageFile["tmp_name"];
$imageError = $imageFile["error"];

$uniqueName = "";

if ($imageError === UPLOAD_ERR_OK) {
    $uniqueName = uniqid() . '_' . $imageName;

    move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
    echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;
} else {
    echo "Error dalam mengunggah gambar.";
}

$sql = "INSERT INTO tb_artikel (status, judul_artikel, isi_artikel, kategori_ids, tag_ids, created_at, updated_at, thumbnail) 
        VALUES ('$status', '$judul_artikel', '$isi_artikel', '$string_categoryIds', '$string_tagIds', '$currentTime', '$currentTime', '$uniqueName')";

if (mysqli_query($koneksi, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

header("Location: ../dashboard.php?page=artikel&alert=berhasil_ditambahkan");
exit;