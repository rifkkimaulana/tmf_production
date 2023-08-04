<?php

include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        echo "Error: No selected categories found.";
    }
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
        echo "Error: No selected tags found.";
    }


    $idArtikel = $_POST['id_artikel'];

    echo $idArtikel;


    $judulArtikel = $_POST['judul_artikel'];
    $isiArtikel = $_POST['isi_artikel'];
    $statusArtikel = $_POST['status'];

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
        $queryArtikelThumbnail = "SELECT thumbnail FROM tb_artikel WHERE id = $idArtikel";
        $resultArtikelThumbnail = mysqli_query($koneksi, $queryArtikelThumbnail);

        if ($rowArtikelThumbnail = mysqli_fetch_assoc($resultArtikelThumbnail)) {
            $oldThumbnail = $rowArtikelThumbnail['thumbnail'];
            if (!empty($oldThumbnail)) {
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
        $queryArtikelThumbnail = "SELECT thumbnail FROM tb_artikel WHERE id = $idArtikel";
        $resultArtikelThumbnail = mysqli_query($koneksi, $queryArtikelThumbnail);

        if ($rowArtikelThumbnail = mysqli_fetch_assoc($resultArtikelThumbnail)) {
            $uniqueName = $rowArtikelThumbnail['thumbnail'];
        }
    }

    $queryUpdateArtikel = "UPDATE tb_artikel 
                          SET judul_artikel = '$judulArtikel', isi_artikel = '$isiArtikel', status = '$statusArtikel', kategori_ids = '$string_categoryIds', tag_ids = '$string_tagIds', updated_at = '$currentTime', thumbnail = '$uniqueName'
                          WHERE id = $idArtikel";

    $resultUpdateArtikel = mysqli_query($koneksi, $queryUpdateArtikel);

    header("Location: ../dashboard.php?page=artikel&alert=berhasil_diupdate");
    exit;
}