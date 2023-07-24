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

//bagian 3 - Player
$notif_player = $_POST["notif_player"];

$playerJudul1 = $_POST["playerJudul-1"];
$kodeEmbed1 = $_POST["kodeEmbed-1"];

$playerJudul2 = $_POST["playerJudul-2"];
$kodeEmbed2 = $_POST["kodeEmbed-2"];

$playerJudul3 = $_POST["playerJudul-3"];
$kodeEmbed3 = $_POST["kodeEmbed-3"];

$playerJudul4 = $_POST["playerJudul-4"];
$kodeEmbed4 = $_POST["kodeEmbed-4"];

$playerJudul5 = $_POST["playerJudul-5"];
$kodeEmbed5 = $_POST["kodeEmbed-5"];

$playerJudul6 = $_POST["playerJudul-6"];
$kodeEmbed6 = $_POST["kodeEmbed-6"];

$playerJudul7 = $_POST["playerJudul-7"];
$kodeEmbed7 = $_POST["kodeEmbed-7"];

$playerJudul8 = $_POST["playerJudul-8"];
$kodeEmbed8 = $_POST["kodeEmbed-8"];

$playerJudul9 = $_POST["playerJudul-9"];
$kodeEmbed9 = $_POST["kodeEmbed-9"];

$playerJudul10 = $_POST["playerJudul-10"];
$kodeEmbed10 = $_POST["kodeEmbed-10"];

$playerJudul11 = $_POST["playerJudul-11"];
$kodeEmbed11 = $_POST["kodeEmbed-11"];

$playerJudul12 = $_POST["playerJudul-12"];
$kodeEmbed12 = $_POST["kodeEmbed-12"];

$playerJudul13 = $_POST["playerJudul-13"];
$kodeEmbed13 = $_POST["kodeEmbed-13"];

$playerJudul14 = $_POST["playerJudul-14"];
$kodeEmbed14 = $_POST["kodeEmbed-14"];

$playerJudul15 = $_POST["playerJudul-15"];
$kodeEmbed15 = $_POST["kodeEmbed-15"];

$sql = "INSERT INTO tb_player (judul1, link1, judul2, link2, judul3, link3, judul4, link4, judul5, link5,
                                judul6, link6, judul7, link7, judul8, link8, judul9, link9, judul10, link10,
                                judul11, link11, judul12, link12, judul13, link13, judul14, link14, judul15, link15, pemberitahuan_player, created_at, updated_at)
        VALUES ('$playerJudul1', '$kodeEmbed1', '$playerJudul2', '$kodeEmbed2', '$playerJudul3', '$kodeEmbed3',
                '$playerJudul4', '$kodeEmbed4', '$playerJudul5', '$kodeEmbed5', '$playerJudul6', '$kodeEmbed6',
                '$playerJudul7', '$kodeEmbed7', '$playerJudul8', '$kodeEmbed8', '$playerJudul9', '$kodeEmbed9',
                '$playerJudul10', '$kodeEmbed10', '$playerJudul11', '$kodeEmbed11', '$playerJudul12', '$kodeEmbed12',
                '$playerJudul13', '$kodeEmbed13', '$playerJudul14', '$kodeEmbed14', '$playerJudul15', '$kodeEmbed15', '$notif_player',
                NOW(), NOW())";

if (mysqli_query($koneksi, $sql)) {
    $id_player = mysqli_insert_id($koneksi);
    echo "Data berhasil dimasukkan ke dalam tabel Player TB_PLAYER.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

//bagian 4 - download
$judulDownload1 = $_POST["judulDownload-1"];
$linkDownload1 = $_POST["linkDownload-1"];

$judulDownload2 = $_POST["judulDownload-2"];
$linkDownload2 = $_POST["linkDownload-2"];

$judulDownload3 = $_POST["judulDownload-3"];
$linkDownload3 = $_POST["linkDownload-3"];

$judulDownload4 = $_POST["judulDownload-4"];
$linkDownload4 = $_POST["linkDownload-4"];

$judulDownload5 = $_POST["judulDownload-5"];
$linkDownload5 = $_POST["linkDownload-5"];

$judulDownload6 = $_POST["judulDownload-6"];
$linkDownload6 = $_POST["linkDownload-6"];

$judulDownload7 = $_POST["judulDownload-7"];
$linkDownload7 = $_POST["linkDownload-7"];

$judulDownload8 = $_POST["judulDownload-8"];
$linkDownload8 = $_POST["linkDownload-8"];

$judulDownload9 = $_POST["judulDownload-9"];
$linkDownload9 = $_POST["linkDownload-9"];

$judulDownload10 = $_POST["judulDownload-10"];
$linkDownload10 = $_POST["linkDownload-10"];

$judulDownload11 = $_POST["judulDownload-11"];
$linkDownload11 = $_POST["linkDownload-11"];

$judulDownload12 = $_POST["judulDownload-12"];
$linkDownload12 = $_POST["linkDownload-12"];

$judulDownload13 = $_POST["judulDownload-13"];
$linkDownload13 = $_POST["linkDownload-13"];

$judulDownload14 = $_POST["judulDownload-14"];
$linkDownload14 = $_POST["linkDownload-14"];

$judulDownload15 = $_POST["judulDownload-15"];
$linkDownload15 = $_POST["linkDownload-15"];

// Query SQL untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO tb_download (judul1, link1, judul2, link2, judul3, link3, judul4, link4, judul5, link5,
                                judul6, link6, judul7, link7, judul8, link8, judul9, link9, judul10, link10,
                                judul11, link11, judul12, link12, judul13, link13, judul14, link14, judul15, link15)
        VALUES ('$judulDownload1', '$linkDownload1', '$judulDownload2', '$linkDownload2', '$judulDownload3', '$linkDownload3',
                '$judulDownload4', '$linkDownload4', '$judulDownload5', '$linkDownload5', '$judulDownload6', '$linkDownload6',
                '$judulDownload7', '$linkDownload7', '$judulDownload8', '$linkDownload8', '$judulDownload9', '$linkDownload9',
                '$judulDownload10', '$linkDownload10', '$judulDownload11', '$linkDownload11', '$judulDownload12', '$linkDownload12',
                '$judulDownload13', '$linkDownload13', '$judulDownload14', '$linkDownload14', '$judulDownload15', '$linkDownload15')";

if (mysqli_query($koneksi, $sql)) {
    $id_download = mysqli_insert_id($koneksi);
    echo "Data berhasil dimasukkan ke dalam tabel tb_download.";
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

// Sekarang, $tagIds berisi id-id dari data tag yang sudah ada atau baru saja diinsert.
// Anda dapat menggabungkan id-id tersebut menjadi satu string menggunakan implode.

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

// Sekarang, $direksiIds berisi id-id dari data direktur yang sudah ada atau baru saja diinsert.
// Anda dapat menggabungkan id-id tersebut menjadi satu string menggunakan implode.

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

// Sekarang, $pemainIds berisi id-id dari data pemain yang sudah ada atau baru saja diinsert.
// Anda dapat menggabungkan id-id tersebut menjadi satu string menggunakan implode.

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

// Sekarang, $tahunIds berisi id-id dari data tahun yang sudah ada atau baru saja diinsert.
// Anda dapat menggabungkan id-id tersebut menjadi satu string menggunakan implode.

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

// Sekarang, $negaraIds berisi id-id dari data negara yang sudah ada atau baru saja diinsert.
// Anda dapat menggabungkan id-id tersebut menjadi satu string menggunakan implode.

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

// Sekarang, $kualitasIds berisi id-id dari data kualitas yang sudah ada atau baru saja diinsert.
// Anda dapat menggabungkan id-id tersebut menjadi satu string menggunakan implode.

$string_kualitasIds = implode(',', $kualitasIds);


// Gunakan $genreIds, $tagIds, $direksiIds, $pemainIds, $tahunIds, $negaraIds, dan $kualitasIds sesuai kebutuhan Anda.

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