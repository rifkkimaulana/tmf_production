<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../config/koneksi.php';
    $tmdb_id_post = $_POST['tmdb_id_post'];

    $judul = $_POST["judul"];
    $bahasa = $_POST["bahasa"];
    $tagline = $_POST["tagline"];
    $rating_mpaa = $_POST["rating_mpaa"];

    if (isset($_POST["tanggal_rilis"]) && !empty($_POST["tanggal_rilis"])) {
        $tanggal_rilis_input = $_POST["tanggal_rilis"];
        $tanggal_rilis = date('Y-m-d', strtotime($tanggal_rilis_input));
    } else {
        $tanggal_rilis = "";
    }

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

    $sql = "UPDATE tb_tmdb SET 
        judul = '$judul',
        bahasa = '$bahasa',
        tagline = '$tagline',
        rating_mpaa = '$rating_mpaa',
        tanggal_rilis = '$tanggal_rilis',
        tahun_rilis = '$tahun_rilis',
        tanggal_terakhir_mengudara = '$tanggal_terakhir_mengudara',
        waktu_jalan = '$waktu_jalan',
        jumlah_episode = '$jumlah_episode',
        rating1 = '$rating_tmdb',
        rating2 = '$other_input',
        anggaran = '$anggaran',
        pendapatan = '$pendapatan',
        link_trailer = '$youtube_id',
        url_poster = '$url_poster',
        imdb_id = '$imdb_id',
        tmdb_id = '$tmdb_id',
        penerjemah = '$penerjemah'
        WHERE id = '$tmdb_id_post'";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dimasukkan ke dalam t_tmdb.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

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

    $id_for_tvshow = $_POST['tv_show_id'];

    $judul_tv_show = $_POST["judul_tv_show"];
    $deskripsi = $_POST["deskripsi"];
    $deskripsi = mysqli_real_escape_string($koneksi, $deskripsi);
    $status = $_POST['status'];

    $targetDir = "../../gambar/film/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $imageFile = $_FILES["image_banner"];
    $imageName = $imageFile["name"];
    $imageTmpName = $imageFile["tmp_name"];
    $imageError = $imageFile["error"];

    $sqlThumbnail = "SELECT thumbnail FROM tb_tv_show WHERE id = $id_for_tvshow";
    $resultThumbnail = mysqli_query($koneksi, $sqlThumbnail);

    if (!$resultThumbnail) {
        die("Error: " . $sqlThumbnail . "<br>" . mysqli_error($koneksi));
    }

    $thumbnailLama = mysqli_fetch_assoc($resultThumbnail)["thumbnail"];

    if ($imageError === UPLOAD_ERR_OK) {
        if ($thumbnailLama && file_exists($targetDir . $thumbnailLama)) {
            unlink($targetDir . $thumbnailLama);
        }

        $uniqueName = uniqid() . '_' . $imageName;

        move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
        echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;

        $sqlUpdateThumbnail = "UPDATE tb_film SET thumbnail = '$uniqueName' WHERE id = $id_for_tvshow";
        if (!mysqli_query($koneksi, $sqlUpdateThumbnail)) {
            echo "Error: " . $sqlUpdateThumbnail . "<br>" . mysqli_error($koneksi);
        }
    } else {
        $uniqueName = $thumbnailLama;
    }

    $sql = "UPDATE tb_tv_show SET 
        judul_tv_show = '$judul_tv_show',
        deskripsi = '$deskripsi',
        status = '$status',
        genre_ids = '$string_genreIds',
        tag_ids = '$string_tagIds',
        direktur_ids = '$string_direksiIds',
        pemain_ids = '$string_pemainIds',
        tahun_ids = '$string_tahunIds',
        negara_ids = '$string_negaraIds',
        kualitas_ids = '$string_kualitasIds',
        jaringan_ids = '$string_jaringanIds',
        thumbnail = '$uniqueName',
        tmdb_id = '$tmdb_id_post',
        updated_at = NOW()
        WHERE id = '$id_for_tvshow'";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data tv_show berhasil diperbarui di tabel tb_tv_show dengan ID: " . $id_for_tvshow;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    header("Location: ../dashboard.php?page=tv_show&alert=berhasil_diubah");
    exit;
}