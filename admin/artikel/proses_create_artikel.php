<?php

include '../../config/koneksi.php';

// ARRAY KATEGORI ARTIKEL
$selectedCategories = $_POST['selectedCategories'];
$categoryArray = explode(',', $selectedCategories);
$categoryIds = array();

foreach ($categoryArray as $categoryName) {
    $slug = strtolower(str_replace(' ', '-', $categoryName));

    // Cek apakah data sudah ada di tabel tb_kategori_artikel
    $sql = "SELECT id FROM tb_kategori_artikel WHERE nama_kategori = '$categoryName' AND slug_kategori = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $categoryIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_kategori_artikel
        $insertSql = "INSERT INTO tb_kategori_artikel (nama_kategori, slug_kategori) VALUES ('$categoryName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $categoryIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_categoryIds = implode(',', $categoryIds);

// array tag artikel
$selectedTag = $_POST['selectedTag'];
$tagArray = explode(',', $selectedTag);
$tagIds = array();

foreach ($tagArray as $tagName) {
    $slug = strtolower(str_replace(' ', '-', $tagName));

    // Cek apakah data sudah ada di tabel tb_tag
    $sql = "SELECT id FROM tb_tag_artikel WHERE nama_tag = '$tagName' AND slug_tag = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $tagIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_tag
        $insertSql = "INSERT INTO tb_tag (nama_tag, slug_tag) VALUES ('$tagName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $tagIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_tagIds = implode(',', $tagIds);

$judul_artikel = $_POST["judul_artikel"];
$isi_artikel = $_POST["isi_artikel"];
$status = $_POST['status'];

// Format waktu saat ini
$currentTime = date('Y-m-d H:i:s');

// Lakukan proses untuk mengunggah gambar jika ada
$targetDir = "../../gambar/artikel/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

$imageFile = $_FILES["image_banner"];
$imageName = $imageFile["name"];
$imageTmpName = $imageFile["tmp_name"];
$imageError = $imageFile["error"];

$uniqueName = ""; // Inisialisasi variabel untuk menyimpan nama gambar unik

if ($imageError === UPLOAD_ERR_OK) {
    $uniqueName = uniqid() . '_' . $imageName;

    move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
    echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;
} else {
    echo "Error dalam mengunggah gambar.";
}

// Lakukan query untuk menambahkan data ke dalam tabel tb_artikel
$sql = "INSERT INTO tb_artikel (status, judul_artikel, isi_artikel, kategori_ids, tag_ids, created_at, updated_at, thumbnail) 
        VALUES ('$status', '$judul_artikel', '$isi_artikel', '$string_categoryIds', '$string_tagIds', '$currentTime', '$currentTime', '$uniqueName')";

if (mysqli_query($koneksi, $sql)) {
    $artikelId = mysqli_insert_id($koneksi);
    echo "Data berhasil dimasukkan ke dalam tb_artikel dengan ID: " . $artikelId;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}