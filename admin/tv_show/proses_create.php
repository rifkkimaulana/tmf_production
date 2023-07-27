<?php

include '../../config/koneksi.php';

//bagian 2 TMDB
$judul = $_POST["judul"];
$bahasa = $_POST["bahasa"];
$tagline = $_POST["tagline"];
$rating_mpaa = $_POST["rating_mpaa"];
$tanggal_rilis_input = $_POST["tanggal_rilis"];
$tanggal_rilis = date('Y-m-d', strtotime($tanggal_rilis_input));
$tahun_rilis = $_POST["tahun_rilis"];
$waktu_jalan = $_POST["waktu_jalan"];
$rating_tmdb = $_POST["rating_tmdb"];
$other_input = $_POST["other_input"];
$anggaran = $_POST["anggaran"];
$pendapatan = $_POST["pendapatan"];
$youtube_id = $_POST["youtube_id"];
$penerjemah = $_POST["penerjemah"];
$url_poster = $_POST["url_poster"];
$imdb_id = $_POST["imdb_id"];
$tmdb_id = $_POST["tmdb_id"];

// Query SQL untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO tb_tmdb (judul, bahasa, tagline, rating_mpaa, tanggal_rilis, tahun_rilis, waktu_jalan, rating1, rating2, anggaran, pendapatan, link_trailer, url_poster, imdb_id, tmdb_id, penerjemah) 
        VALUES ('$judul', '$bahasa', '$tagline', '$rating_mpaa', '$tanggal_rilis', '$tahun_rilis', '$waktu_jalan', '$rating_tmdb', '$other_input', '$anggaran', '$pendapatan', '$youtube_id', '$url_poster', '$imdb_id', '$tmdb_id', '$penerjemah')";



if (mysqli_query($koneksi, $sql)) {
    $id_tmdb = mysqli_insert_id($koneksi);
    echo "Data berhasil dimasukkan ke dalam t_tmdb.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

$selectedGenres = $_POST['selectedGenres'];
$genreArray = explode(',', $selectedGenres);
$genreIds = array();

foreach ($genreArray as $genreName) {
    $slug = strtolower(str_replace(' ', '-', $genreName));

    // Cek apakah data sudah ada di tabel tb_genre
    $sql = "SELECT id FROM tb_genre WHERE nama_genre = '$genreName' AND slug_genre = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $genreIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_genre
        $insertSql = "INSERT INTO tb_genre (nama_genre, slug_genre) VALUES ('$genreName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $genreIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_genreIds = implode(',', $genreIds);

$selectedTag = $_POST['selectedTag'];
$tagArray = explode(',', $selectedTag);
$tagIds = array();

foreach ($tagArray as $tagName) {
    $slug = strtolower(str_replace(' ', '-', $tagName));

    // Cek apakah data sudah ada di tabel tb_tag
    $sql = "SELECT id FROM tb_tag WHERE nama_tag = '$tagName' AND slug_tag = '$slug'";
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
$selectedDireksi = $_POST['selectedDireksi'];
$direksiArray = explode(',', $selectedDireksi);
$direksiIds = array();

foreach ($direksiArray as $direksiName) {
    $slug = strtolower(str_replace(' ', '-', $direksiName));

    // Cek apakah data sudah ada di tabel tb_direksi
    $sql = "SELECT id FROM tb_direksi WHERE nama_direksi = '$direksiName' AND slug_direksi = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $direksiIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_direksi
        $insertSql = "INSERT INTO tb_direksi (nama_direksi, slug_direksi) VALUES ('$direksiName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $direksiIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_direksiIds = implode(',', $direksiIds);
$selectedPemain = $_POST['selectedPemain'];
$pemainArray = explode(',', $selectedPemain);
$pemainIds = array();

foreach ($pemainArray as $pemainName) {
    $slug = strtolower(str_replace(' ', '-', $pemainName));

    // Cek apakah data sudah ada di tabel tb_pemain
    $sql = "SELECT id FROM tb_pemain WHERE nama_pemain = '$pemainName' AND slug_pemain = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $pemainIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_pemain
        $insertSql = "INSERT INTO tb_pemain (nama_pemain, slug_pemain) VALUES ('$pemainName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $pemainIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_pemainIds = implode(',', $pemainIds);
$selectedTahun = $_POST['selectedTahun'];
$tahunArray = explode(',', $selectedTahun);
$tahunIds = array();

foreach ($tahunArray as $tahunName) {
    $slug = strtolower(str_replace(' ', '-', $tahunName));

    // Cek apakah data sudah ada di tabel tb_tahun
    $sql = "SELECT id FROM tb_tahun WHERE tahun_rilis = '$tahunName' AND slug_tahun = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $tahunIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_tahun
        $insertSql = "INSERT INTO tb_tahun (tahun_rilis, slug_tahun) VALUES ('$tahunName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $tahunIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_tahunIds = implode(',', $tahunIds);
$selectedNegara = $_POST['selectedNegara'];
$negaraArray = explode(',', $selectedNegara);
$negaraIds = array();

foreach ($negaraArray as $negaraName) {
    $slug = strtolower(str_replace(' ', '-', $negaraName));

    // Cek apakah data sudah ada di tabel tb_negara
    $sql = "SELECT id FROM tb_negara WHERE nama_negara = '$negaraName' AND slug_negara = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $negaraIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_negara
        $insertSql = "INSERT INTO tb_negara (nama_negara, slug_negara) VALUES ('$negaraName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $negaraIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_negaraIds = implode(',', $negaraIds);
$selectedKualitas = $_POST['selectedKualitas'];
$kualitasArray = explode(',', $selectedKualitas);
$kualitasIds = array();

foreach ($kualitasArray as $kualitasName) {
    $slug = strtolower(str_replace(' ', '-', $kualitasName));

    // Cek apakah data sudah ada di tabel tb_kualitas
    $sql = "SELECT id FROM tb_kualitas WHERE nama_kualitas = '$kualitasName' AND slug_kualitas = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data sudah ada, ambil id dari data tersebut
        $row = mysqli_fetch_assoc($result);
        $kualitasIds[] = $row['id'];
    } else {
        // Jika data belum ada, lakukan insert ke tabel tb_kualitas
        $insertSql = "INSERT INTO tb_kualitas (nama_kualitas, slug_kualitas) VALUES ('$kualitasName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            // Ambil id dari data yang baru diinsert
            $kualitasIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}

$string_kualitasIds = implode(',', $kualitasIds);

//Bagian 1
$judul_film = $_POST["judul_film"];
$deskripsi = $_POST["deskripsi"];
$statusFilm = $_POST['statusFilm'];


//bagian 13 - Gambar
$targetDir = "../../gambar/film/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

$imageFile = $_FILES["image_banner"];
$imageName = $imageFile["name"];
$imageTmpName = $imageFile["tmp_name"];
$imageError = $imageFile["error"];

if ($imageError === UPLOAD_ERR_OK) {
    $uniqueName = uniqid() . '_' . $imageName;

    move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
    echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;
} else {
    echo "Error dalam mengunggah gambar.";
}

// Bagian 2 - Proses Insert ke tb_film
$sql = "INSERT INTO tb_film (judul_film, deskripsi, status, genre_ids, tag_ids, direktur_ids, pemain_ids, tahun_ids, negara_ids, kualitas_ids, thumbnail, tmdb_id, player_id, download_id) 
        VALUES ('$judul_film', '$deskripsi', '$statusFilm', '$string_genreIds', '$string_tagIds', '$string_direksiIds', '$string_pemainIds', '$string_tahunIds', '$string_negaraIds', '$string_kualitasIds', '$uniqueName', '$id_tmdb', '$id_player', '$id_download')";

if (mysqli_query($koneksi, $sql)) {
    $filmId = mysqli_insert_id($koneksi);
    echo "Data berhasil dimasukkan ke dalam tb_film dengan ID: " . $filmId;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}