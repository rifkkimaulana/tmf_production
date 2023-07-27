<?php
include '../../config/koneksi.php';

//bagian TMDB Untuk Tv Show
$judul = $_POST["judul"];
$bahasa = $_POST["bahasa"];
$tagline = $_POST["tagline"];
$rating_mpaa = $_POST["rating_mpaa"];
$tanggal_rilis_input = $_POST["tanggal_rilis"];
$tanggal_rilis = date('Y-m-d', strtotime($tanggal_rilis_input));
$tahun_rilis = $_POST["tahun_rilis"];
$tanggal_terakhir_mengudara = $_POST["tanggal_terakhir_mengudara"];
$waktu_jalan = $_POST["waktu_jalan"];
$jumlah_episode = $_POST["jumlah_episode"];
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
$sql = "INSERT INTO tb_tmdb (judul, bahasa, tagline, rating_mpaa, tanggal_rilis, tahun_rilis, tanggal_terakhir_mengudara, waktu_jalan, jumlah_episode, rating1, rating2, anggaran, pendapatan, link_trailer, url_poster, imdb_id, tmdb_id, penerjemah) 
        VALUES ('$judul', '$bahasa', '$tagline', '$rating_mpaa', '$tanggal_rilis', '$tahun_rilis', '$tanggal_terakhir_mengudara', '$waktu_jalan', '$jumlah_episode', '$rating_tmdb', '$other_input', '$anggaran', '$pendapatan', '$youtube_id', '$url_poster', '$imdb_id', '$tmdb_id', '$penerjemah')";

if (mysqli_query($koneksi, $sql)) {
    $id_tmdb = mysqli_insert_id($koneksi);
    echo "Data berhasil dimasukkan ke dalam t_tmdb.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Bagian Proses Genre
$selectedGenres = $_POST['selectedGenres'];
$genreArray = explode(',', $selectedGenres);
$genreIds = array();

foreach ($genreArray as $genreName) {
    $slug = strtolower(str_replace(' ', '-', $genreName));

    $sql = "SELECT id FROM tb_genre WHERE nama_genre = '$genreName' AND slug_genre = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $genreIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_genre (nama_genre, slug_genre) VALUES ('$genreName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $genreIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_genreIds = implode(',', $genreIds);

// Bagian Proses TAG
$selectedTag = $_POST['selectedTag'];
$tagArray = explode(',', $selectedTag);
$tagIds = array();

foreach ($tagArray as $tagName) {
    $slug = strtolower(str_replace(' ', '-', $tagName));

    $sql = "SELECT id FROM tb_tag WHERE nama_tag = '$tagName' AND slug_tag = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $tagIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_tag (nama_tag, slug_tag) VALUES ('$tagName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $tagIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_tagIds = implode(',', $tagIds);

// Bagian Proses Direksi
$selectedDireksi = $_POST['selectedDireksi'];
$direksiArray = explode(',', $selectedDireksi);
$direksiIds = array();

foreach ($direksiArray as $direksiName) {
    $slug = strtolower(str_replace(' ', '-', $direksiName));

    $sql = "SELECT id FROM tb_direksi WHERE nama_direksi = '$direksiName' AND slug_direksi = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $direksiIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_direksi (nama_direksi, slug_direksi) VALUES ('$direksiName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $direksiIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_direksiIds = implode(',', $direksiIds);

// Bagian Proses Pemain
$selectedPemain = $_POST['selectedPemain'];
$pemainArray = explode(',', $selectedPemain);
$pemainIds = array();

foreach ($pemainArray as $pemainName) {
    $slug = strtolower(str_replace(' ', '-', $pemainName));

    $sql = "SELECT id FROM tb_pemain WHERE nama_pemain = '$pemainName' AND slug_pemain = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pemainIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_pemain (nama_pemain, slug_pemain) VALUES ('$pemainName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $pemainIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_pemainIds = implode(',', $pemainIds);

// Bagian Proses Tahun
$selectedTahun = $_POST['selectedTahun'];
$tahunArray = explode(',', $selectedTahun);
$tahunIds = array();

foreach ($tahunArray as $tahunName) {
    $slug = strtolower(str_replace(' ', '-', $tahunName));

    $sql = "SELECT id FROM tb_tahun WHERE tahun_rilis = '$tahunName' AND slug_tahun = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $tahunIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_tahun (tahun_rilis, slug_tahun) VALUES ('$tahunName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $tahunIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_tahunIds = implode(',', $tahunIds);

// Bagian Proses Negara
$selectedNegara = $_POST['selectedNegara'];
$negaraArray = explode(',', $selectedNegara);
$negaraIds = array();

foreach ($negaraArray as $negaraName) {
    $slug = strtolower(str_replace(' ', '-', $negaraName));

    $sql = "SELECT id FROM tb_negara WHERE nama_negara = '$negaraName' AND slug_negara = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $negaraIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_negara (nama_negara, slug_negara) VALUES ('$negaraName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $negaraIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_negaraIds = implode(',', $negaraIds);

// Bagian Proses Kualitas
$selectedKualitas = $_POST['selectedKualitas'];
$kualitasArray = explode(',', $selectedKualitas);
$kualitasIds = array();

foreach ($kualitasArray as $kualitasName) {
    $slug = strtolower(str_replace(' ', '-', $kualitasName));

    $sql = "SELECT id FROM tb_kualitas WHERE nama_kualitas = '$kualitasName' AND slug_kualitas = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $kualitasIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_kualitas (nama_kualitas, slug_kualitas) VALUES ('$kualitasName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $kualitasIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_kualitasIds = implode(',', $kualitasIds);

// Bagian Proses Jaringan
$selectedJaringan = $_POST['selectedJaringan'];
$jaringanArray = explode(',', $selectedJaringan);
$jaringanIds = array();

foreach ($jaringanArray as $jaringanName) {
    $slug = strtolower(str_replace(' ', '-', $jaringanName));

    $sql = "SELECT id FROM tb_jaringan WHERE nama_jaringan = '$jaringanName' AND slug_jaringan = '$slug'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $jaringanIds[] = $row['id'];
    } else {
        $insertSql = "INSERT INTO tb_jaringan (nama_jaringan, slug_jaringan) VALUES ('$jaringanName', '$slug')";

        if (mysqli_query($koneksi, $insertSql)) {
            $jaringanIds[] = mysqli_insert_id($koneksi);
        } else {
            echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
        }
    }
}
$string_jaringanIds = implode(',', $jaringanIds);


//Bagian Insert TB_TV_Show
$judul_tv_show = $_POST["judul_tv_show"];
$deskripsi = $_POST["deskripsi"];
$status = $_POST['status'];

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

$sql = "INSERT INTO tb_tv_show (judul_tv_show, deskripsi, status, genre_ids, tag_ids, direktur_ids, pemain_ids, tahun_ids, negara_ids, kualitas_ids, jaringan_ids, thumbnail, tmdb_id,  created_at, updated_at) 
        VALUES ('$judul_tv_show', '$deskripsi', '$status', '$string_genreIds', '$string_tagIds', '$string_direksiIds', '$string_pemainIds', '$string_tahunIds', '$string_negaraIds', '$string_kualitasIds', '$string_jaringanIds', '$uniqueName', '$id_tmdb', NOW(), NOW())";

if (mysqli_query($koneksi, $sql)) {
    echo 'berhasil upload ke tb tv show';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>