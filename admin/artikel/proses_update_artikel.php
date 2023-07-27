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


$idArtikel = $_POST['id_artikel'];
$judulArtikel = $_POST['judul_artikel'];
$isiArtikel = $_POST['isi_artikel'];
$statusArtikel = $_POST['status'];

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

$uniqueName = "";

// Periksa apakah ada file gambar baru yang diunggah
if ($imageError === UPLOAD_ERR_OK) {
    // Hapus gambar lama sebelum menyimpan gambar baru
    $queryArtikelThumbnail = "SELECT thumbnail FROM tb_artikel WHERE id = $idArtikel";
    $resultArtikelThumbnail = mysqli_query($koneksi, $queryArtikelThumbnail);

    if ($rowArtikelThumbnail = mysqli_fetch_assoc($resultArtikelThumbnail)) {
        $oldThumbnail = $rowArtikelThumbnail['thumbnail'];
        if (!empty($oldThumbnail)) {
            // Hapus gambar lama dari direktori jika ada
            $oldFilePath = $targetDir . $oldThumbnail;
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
    }

    $uniqueName = uniqid() . '_' . $imageName;
    move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
    echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;
} else {
    // Gambar tidak diubah, tetapkan gambar lama pada variabel $uniqueName
    $queryArtikelThumbnail = "SELECT thumbnail FROM tb_artikel WHERE id = $idArtikel";
    $resultArtikelThumbnail = mysqli_query($koneksi, $queryArtikelThumbnail);

    if ($rowArtikelThumbnail = mysqli_fetch_assoc($resultArtikelThumbnail)) {
        $uniqueName = $rowArtikelThumbnail['thumbnail'];
    }
}

// Update data artikel pada tabel tb_artikel
$queryUpdateArtikel = "UPDATE tb_artikel 
                          SET judul_artikel = '$judulArtikel', isi_artikel = '$isiArtikel', status = '$statusArtikel', kategori_ids = '$selectedCategories', tag_ids = '$selectedTags', updated_at = '$currentTime', thumbnail = '$uniqueName'
                          WHERE id = $idArtikel";

$resultUpdateArtikel = mysqli_query($koneksi, $queryUpdateArtikel);

if ($resultUpdateArtikel) {
    // Jika berhasil memperbarui data artikel, kembalikan ke halaman sebelumnya dengan pesan sukses
    header('Location: artikel/index_artikel.php?status=success');
    exit();
} else {
    // Jika gagal memperbarui data artikel, kembalikan ke halaman sebelumnya dengan pesan error
    header('Location: artikel/idnex_artikel.php?status=error');
    exit();
}