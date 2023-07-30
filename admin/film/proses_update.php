<?php

include '../../config/koneksi.php';
$id_tmdb = $_POST['id'];

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

// Query SQL untuk melakukan update data di dalam tabel tb_tmdb
$sql = "UPDATE tb_tmdb SET judul='$judul', bahasa='$bahasa', tagline='$tagline', rating_mpaa='$rating_mpaa', tanggal_rilis='$tanggal_rilis', tahun_rilis='$tahun_rilis', waktu_jalan='$waktu_jalan', rating1='$rating_tmdb', rating2='$other_input', anggaran='$anggaran', pendapatan='$pendapatan', link_trailer='$youtube_id', url_poster='$url_poster', imdb_id='$imdb_id', tmdb_id='$tmdb_id', penerjemah='$penerjemah' WHERE id = $id_tmdb";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil diperbarui di tb_tmdb dengan ID: " . $id_tmdb;
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

$id_player_to_update = $_POST['id_player_to_update'];

$sql = "UPDATE tb_player SET 
            judul1='$playerJudul1', link1='$kodeEmbed1',
            judul2='$playerJudul2', link2='$kodeEmbed2',
            judul3='$playerJudul3', link3='$kodeEmbed3',
            judul4='$playerJudul4', link4='$kodeEmbed4',
            judul5='$playerJudul5', link5='$kodeEmbed5',
            judul6='$playerJudul6', link6='$kodeEmbed6',
            judul7='$playerJudul7', link7='$kodeEmbed7',
            judul8='$playerJudul8', link8='$kodeEmbed8',
            judul9='$playerJudul9', link9='$kodeEmbed9',
            judul10='$playerJudul10', link10='$kodeEmbed10',
            judul11='$playerJudul11', link11='$kodeEmbed11',
            judul12='$playerJudul12', link12='$kodeEmbed12',
            judul13='$playerJudul13', link13='$kodeEmbed13',
            judul14='$playerJudul14', link14='$kodeEmbed14',
            judul15='$playerJudul15', link15='$kodeEmbed15',
            pemberitahuan_player='$notif_player',
            updated_at=NOW()
        WHERE id = $id_player_to_update";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil diperbarui di tabel Player TB_PLAYER dengan ID: " . $id_player_to_update;
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

$id_download_to_update = $_POST['id_download_to_update'];

$sql = "UPDATE tb_download SET 
            judul1='$judulDownload1', link1='$linkDownload1',
            judul2='$judulDownload2', link2='$linkDownload2',
            judul3='$judulDownload3', link3='$linkDownload3',
            judul4='$judulDownload4', link4='$linkDownload4',
            judul5='$judulDownload5', link5='$linkDownload5',
            judul6='$judulDownload6', link6='$linkDownload6',
            judul7='$judulDownload7', link7='$linkDownload7',
            judul8='$judulDownload8', link8='$linkDownload8',
            judul9='$judulDownload9', link9='$linkDownload9',
            judul10='$judulDownload10', link10='$linkDownload10',
            judul11='$judulDownload11', link11='$linkDownload11',
            judul12='$judulDownload12', link12='$linkDownload12',
            judul13='$judulDownload13', link13='$linkDownload13',
            judul14='$judulDownload14', link14='$linkDownload14',
            judul15='$judulDownload15', link15='$linkDownload15'
        WHERE id = $id_download_to_update";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil diperbarui di tabel tb_download dengan ID: " . $id_download_to_update;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

//Genre
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

//Tag
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

//Direksi
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

//Pemain
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

//Tahun
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

//Negara
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

//Kualitas
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
$id_for_film = $_POST['id_for_film'];

$judul_film = $_POST["judul_film"];
$deskripsi = $_POST["deskripsi"];
$deskripsi = mysqli_real_escape_string($koneksi, $deskripsi);
$statusFilm = $_POST['statusFilm'];


// Bagian 13 - Gambar
$targetDir = "../../gambar/film/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

$imageFile = $_FILES["image_banner"];
$imageName = $imageFile["name"];
$imageTmpName = $imageFile["tmp_name"];
$imageError = $imageFile["error"];

$sqlThumbnail = "SELECT thumbnail FROM tb_film WHERE id = $id_for_film";
$resultThumbnail = mysqli_query($koneksi, $sqlThumbnail);

if (!$resultThumbnail) {
    die("Error: " . $sqlThumbnail . "<br>" . mysqli_error($koneksi));
}

$thumbnailLama = mysqli_fetch_assoc($resultThumbnail)["thumbnail"];

if ($imageError === UPLOAD_ERR_OK) {
    // Jika ada gambar baru yang diunggah, hapus gambar lama dari direktori jika ada
    if ($thumbnailLama && file_exists($targetDir . $thumbnailLama)) {
        unlink($targetDir . $thumbnailLama);
    }

    $uniqueName = uniqid() . '_' . $imageName;

    move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
    echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;

    // Update nilai thumbnail di database dengan nilai baru
    $sqlUpdateThumbnail = "UPDATE tb_film SET thumbnail = '$uniqueName' WHERE id = $id_for_film";
    if (!mysqli_query($koneksi, $sqlUpdateThumbnail)) {
        echo "Error: " . $sqlUpdateThumbnail . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada gambar baru yang diunggah, nilai thumbnail tetap sama
    $uniqueName = $thumbnailLama;
}



$sql = "UPDATE tb_film 
            SET judul_film = '$judul_film', 
                deskripsi = '$deskripsi', 
                status = '$statusFilm', 
                genre_ids = '$string_genreIds', 
                tag_ids = '$string_tagIds', 
                direktur_ids = '$string_direksiIds', 
                pemain_ids = '$string_pemainIds', 
                tahun_ids = '$string_tahunIds', 
                negara_ids = '$string_negaraIds', 
                kualitas_ids = '$string_kualitasIds', 
                thumbnail = '$uniqueName', 
                tmdb_id = '$id_tmdb', 
                player_id = '$id_player_to_update', 
                download_id = '$id_download_to_update'
            WHERE id = $id_for_film";

if (mysqli_query($koneksi, $sql)) {
    echo "Data film berhasil diperbarui di tabel tb_film dengan ID: " . $id_for_film;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
header("Location: ../dashboard.php?page=film&alert=berhasil_diubah");
exit;