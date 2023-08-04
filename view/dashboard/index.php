<?php
// Fungsi untuk mendapatkan id tb_genre berdasarkan nama_genre
function getGenreId($koneksi, $nama_genre)
{
    $query_genre_id = "SELECT id FROM tb_genre WHERE nama_genre = '$nama_genre'";
    $result_genre_id = mysqli_query($koneksi, $query_genre_id);

    if ($result_genre_id && mysqli_num_rows($result_genre_id) > 0) {
        $row_genre_id = mysqli_fetch_assoc($result_genre_id);
        return $row_genre_id['id'];
    } else {
        return null;
    }
}
function getKualitasId($koneksi, $nama_kualitas)
{
    $query_kualitas_id = "SELECT id FROM tb_kualitas WHERE nama_kualitas = '$nama_kualitas'";
    $result_kualitas_id = mysqli_query($koneksi, $query_kualitas_id);

    if ($result_kualitas_id && mysqli_num_rows($result_kualitas_id) > 0) {
        $row_kualitas_id = mysqli_fetch_assoc($result_kualitas_id);
        return $row_kualitas_id['id'];
    } else {
        return null;
    }
}

function getNegaraId($koneksi, $nama_negara)
{
    $query_negara_id = "SELECT id FROM tb_negara WHERE nama_negara = '$nama_negara'";
    $result_negara_id = mysqli_query($koneksi, $query_negara_id);

    if ($result_negara_id && mysqli_num_rows($result_negara_id) > 0) {
        $row_negara_id = mysqli_fetch_assoc($result_negara_id);
        return $row_negara_id['id'];
    } else {
        return null;
    }
}

function getTahunId($koneksi, $nama_tahun)
{
    $query_tahun_id = "SELECT id FROM tb_tahun WHERE tahun_rilis = '$nama_tahun'";
    $result_tahun_id = mysqli_query($koneksi, $query_tahun_id);

    if ($result_tahun_id && mysqli_num_rows($result_tahun_id) > 0) {
        $row_tahun_id = mysqli_fetch_assoc($result_tahun_id);
        return $row_tahun_id['id'];
    } else {
        return null;
    }
}


if (isset($_GET['search']) && !empty($_GET['search'])) {

    $judul = $_GET['search'];
    $tipe = isset($_GET['tipe']) ? $_GET['tipe'] : '';
    $genre_filter = isset($_GET['genre']) ? $_GET['genre'] : '';
    $kualitas_filter = isset($_GET['kualitas']) ? $_GET['kualitas'] : '';
    $negara_filter = isset($_GET['negara']) ? $_GET['negara'] : '';
    $tahun_filter = isset($_GET['tahun']) ? $_GET['tahun'] : '';


    if ($tipe === 'film') {
        // Query SQL untuk mencari film berdasarkan judul dan genre
        $query_film = "SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, tb_film.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_film
                    LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                    JOIN tb_negara ON FIND_IN_SET(tb_negara.id, tb_film.negara_ids)
                    WHERE tb_film.judul_film LIKE '%$judul%'";

        if (!empty($genre_filter)) {
            // Dapatkan id tb_genre berdasarkan nama_genre
            $genre_id = getGenreId($koneksi, $genre_filter);
            if ($genre_id !== null) {
                // Filter genre berdasarkan genre_ids
                $query_film .= " AND FIND_IN_SET($genre_id, tb_film.genre_ids)";
            }
        }

        if (!empty($kualitas_filter)) {
            // Dapatkan id tb_kualitas berdasarkan nama_kualitas
            $kualitas_id = getKualitasId($koneksi, $kualitas_filter);
            if ($kualitas_id !== null) {
                // Filter kualitas berdasarkan kualitas_id
                $query_film .= " AND FIND_IN_SET($kualitas_id, tb_film.kualitas_ids)";
            }
        }

        if (!empty($negara_filter)) {
            // Dapatkan id tb_negara berdasarkan nama_negara
            $negara_id = getNegaraId($koneksi, $negara_filter);
            if ($negara_id !== null) {
                // Filter negara berdasarkan negara_id
                $query_film .= " AND FIND_IN_SET($negara_id, tb_film.negara_ids)";
            }
        }

        if (!empty($tahun_filter)) {
            // Dapatkan id tb_tahun berdasarkan nama_tahun
            $tahun_id = getTahunId($koneksi, $tahun_filter);
            if ($tahun_id !== null) {
                // Filter tahun berdasarkan tahun_id
                $query_film .= " AND FIND_IN_SET($tahun_id, tb_film.tahun_ids)";
            }
        }


        $query_film .= " GROUP BY tb_film.tmdb_id";
        $query_film_tv = $query_film;
    } elseif ($tipe === 'tvshow') {
        // Query SQL untuk mencari TV show berdasarkan judul dan genre
        $query_tv_show = "SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, tb_tv_show.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_tv_show
                    LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                    JOIN tb_negara ON FIND_IN_SET(tb_negara.id, tb_tv_show.negara_ids)
                    WHERE tb_tv_show.judul_tv_show LIKE '%$judul%'";

        if (!empty($genre_filter)) {
            // Dapatkan id tb_genre berdasarkan nama_genre
            $genre_id = getGenreId($koneksi, $genre_filter);
            if ($genre_id !== null) {
                // Filter genre berdasarkan genre_ids
                $query_tv_show .= " AND FIND_IN_SET($genre_id, tb_tv_show.genre_ids)";
            }
        }

        if (!empty($kualitas_filter)) {
            // Dapatkan id tb_kualitas berdasarkan nama_kualitas
            $kualitas_id = getKualitasId($koneksi, $kualitas_filter);
            if ($kualitas_id !== null) {
                // Filter kualitas berdasarkan kualitas_id
                $query_tv_show .= " AND FIND_IN_SET($kualitas_id, tb_tv_show.kualitas_ids)";
            }
        }

        if (!empty($negara_filter)) {
            // Dapatkan id tb_negara berdasarkan nama_negara
            $negara_id = getNegaraId($koneksi, $negara_filter);
            if ($negara_id !== null) {
                // Filter negara berdasarkan negara_id
                $query_tv_show .= " AND FIND_IN_SET($negara_id, tb_tv_show.negara_ids)";
            }
        }

        if (!empty($tahun_filter)) {
            // Dapatkan id tb_tahun berdasarkan nama_tahun
            $tahun_id = getTahunId($koneksi, $tahun_filter);
            if ($tahun_id !== null) {
                // Filter tahun berdasarkan tahun_id
                $query_tv_show .= " AND FIND_IN_SET($tahun_id, tb_tv_show.tahun_ids)";
            }
        }

        $query_film_tv = $query_tv_show;
    } else {
        // Query SQL untuk mencari film dan TV show berdasarkan judul dan genre
        $query_film = "SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, tb_film.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_film
                    LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                    JOIN tb_negara ON FIND_IN_SET(tb_negara.id, tb_film.negara_ids)
                    WHERE tb_film.judul_film LIKE '%$judul%'";

        $query_tv_show = "SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, tb_tv_show.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_tv_show
                    LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                    JOIN tb_negara ON FIND_IN_SET(tb_negara.id, tb_tv_show.negara_ids)
                    WHERE tb_tv_show.judul_tv_show LIKE '%$judul%'";

        if (!empty($genre_filter)) {
            // Dapatkan id tb_genre berdasarkan nama_genre
            $genre_id = getGenreId($koneksi, $genre_filter);
            if ($genre_id !== null) {
                // Filter genre berdasarkan genre_ids
                $query_film .= " AND FIND_IN_SET($genre_id, tb_film.genre_ids)";
                $query_tv_show .= " AND FIND_IN_SET($genre_id, tb_tv_show.genre_ids)";
            }
        }

        if (!empty($kualitas_filter)) {
            // Dapatkan id tb_kualitas berdasarkan nama_kualitas
            $kualitas_id = getKualitasId($koneksi, $kualitas_filter);
            if ($kualitas_id !== null) {
                // Filter kualitas berdasarkan kualitas_id
                $query_film .= " AND FIND_IN_SET($kualitas_id, tb_film.kualitas_ids)";
                $query_tv_show .= " AND FIND_IN_SET($kualitas_id, tb_tv_show.kualitas_ids)";
            }
        }

        if (!empty($negara_filter)) {
            // Dapatkan id tb_negara berdasarkan nama_negara
            $negara_id = getNegaraId($koneksi, $negara_filter);
            if ($negara_id !== null) {
                // Filter negara berdasarkan negara_id
                $query_film .= " AND FIND_IN_SET($negara_id, tb_film.negara_ids)";
                $query_tv_show .= " AND FIND_IN_SET($negara_id, tb_tv_show.negara_ids)";
            }
        }

        if (!empty($tahun_filter)) {
            // Dapatkan id tb_tahun berdasarkan nama_tahun
            $tahun_id = getTahunId($koneksi, $tahun_filter);
            if ($tahun_id !== null) {
                // Filter tahun berdasarkan tahun_id
                $query_tv_show .= " AND FIND_IN_SET($tahun_id, tb_tv_show.tahun_ids)";
                $query_film .= " AND FIND_IN_SET($tahun_id, tb_film.tahun_ids)";
            }
        }

        $query_film .= " GROUP BY tb_film.tmdb_id";
        $query_tv_show .= " GROUP BY tb_tv_show.tmdb_id";

        // Gabungkan hasil pencarian film dan TV show menggunakan UNION
        $query_film_tv = "SELECT * FROM (($query_film) UNION ($query_tv_show)) AS merged_results ORDER BY total_kunjungan DESC";
    }

    $result_film_tv = mysqli_query($koneksi, $query_film_tv);

    $count = 0;

    if (mysqli_num_rows($result_film_tv) == 0) {
        echo "FILM & TV SHOW Tidak Tersedia.";
    } else {
        ?>

        <div class="col-md-9 tmf_production">
            <div class="card-flat">
                <div class="tmf-card-terbaru ">
                    <h3>
                        Hasil Pencarian :
                        <?php echo $_GET['search']; ?>
                        <span class="line"></span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <?php
                while ($row_film_tv = mysqli_fetch_assoc($result_film_tv)) {
                    if (!empty($row_film_tv['judul'])) {
                        $genre_ids = array_filter(explode(',', $row_film_tv['genre_ids']));
                        $genres = array();

                        foreach ($genre_ids as $genre_id) {
                            $query_genre = "SELECT nama_genre FROM tb_genre WHERE id = '$genre_id'";
                            $result_genre = mysqli_query($koneksi, $query_genre);
                            $row_genre = mysqli_fetch_assoc($result_genre);
                            $genres[] = $row_genre['nama_genre'];
                        }

                        $country_ids = array_filter(explode(',', $row_film_tv['negara_ids']));
                        $countries = array();

                        foreach ($country_ids as $country_id) {
                            $query_country = "SELECT nama_negara FROM tb_negara WHERE id = '$country_id'";
                            $result_country = mysqli_query($koneksi, $query_country);
                            $row_country = mysqli_fetch_assoc($result_country);
                            $countries[] = $row_country['nama_negara'];
                        }

                        if ($count % 4 === 0 && $count > 0) {
                            echo '</div><div class="row">';
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <?php
                            $cek_id_tmdb = $row_film_tv['tmdb_id'];
                            $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = $cek_id_tmdb;";
                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                            ?>
                            <a href="dashboard.php?page=<?php echo ($row_tmdb['jumlah_episode'] === null || $row_tmdb['jumlah_episode'] === '') ? 'movies' : 'tv'; ?>&id=<?php echo $row_film_tv['tmdb_id']; ?>"
                                style="color: black;">
                                <div class="thumbnail-container">
                                    <?php if (!empty($row_film_tv['thumbnail'])) { ?>
                                        <img class="img-fluid rounded img-landscape-zoom"
                                            src="gambar/film/<?php echo $row_film_tv['thumbnail']; ?>"
                                            alt="<?php echo $row_film_tv['judul']; ?>">
                                    <?php } else {
                                        $tmdb_id = $row_film_tv['tmdb_id'];
                                        $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                        $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                        $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                        $url_poster = $row_tmdb['url_poster'];
                                        ?>
                                        <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                            alt="<?php echo $row_film_tv['judul']; ?>">
                                    <?php } ?>
                                </div>
                                <div class="video-info">
                                    <strong>
                                        <?php echo $row_film_tv['judul']; ?>
                                    </strong>
                                    <?php
                                    $genre_limit = 3;
                                    $count_genre = 0;

                                    foreach ($genres as $genre) {
                                        $slug_genre = strtolower(str_replace(' ', '-', $genre));
                                        ?>
                                        <a style="font-size: 14px;" href="dashboard.php?page=genre&f=<?php echo urlencode($slug_genre); ?>">
                                            <?php echo $genre . ", "; ?>
                                        </a>
                                        <?php
                                        $count_genre++;
                                        if ($count_genre >= $genre_limit) {
                                            break;
                                        }
                                    }
                                    ?>
                                    <?php foreach ($countries as $country) { ?>
                                        <span style="font-size: 12px;">
                                            <?php echo $country . ", "; ?>
                                        </span>
                                    <?php } ?>
                                    <p style="font-size: 14px;"><i class="fas fa-eye"></i>
                                        <?php echo $row_film_tv['total_kunjungan']; ?> x ditonton
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php
                        $count++;
                    }
                }
                ?>
            </div>
        </div>
        <?php
    }
} else {
    ?>


    <div class="col-md-9 tmf_production">
        <?php include 'view/genre_button.php'; ?>
        <div class="card-flat">
            <div class="tmf-card-terbaru ">
                <h3>
                    FILM TERBARU
                    <span class="line"></span>
                </h3>
            </div>
        </div>
        <div class="row">
            <?php
            include 'config/koneksi.php';
            $query_film = "SELECT thumbnail, judul_film, tmdb_id FROM tb_film
                   ORDER BY created_at DESC LIMIT 8";
            $result_film = mysqli_query($koneksi, $query_film);
            while ($row_film = mysqli_fetch_assoc($result_film)) {
                if (!empty($row_film['judul_film'])) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="thumbnail-container">
                            <?php if (!empty($row_film['thumbnail'])) { ?>
                                <a href="dashboard.php?page=movies&id=<?php echo $row_film['tmdb_id']; ?>">
                                    <img class="img-fluid rounded img-landscape-zoom"
                                        src="gambar/film/<?php echo $row_film['thumbnail']; ?> "
                                        alt="<?php echo $row_film['judul_film']; ?>">
                                </a>

                            <?php } else {
                                $tmdb_id = $row_film['tmdb_id'];
                                $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                $url_poster = $row_tmdb['url_poster'];
                                ?>
                                <a href="dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>">
                                    <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                        alt="<?php echo $row_film['judul_film']; ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <?php
                        $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tmdb_id'";
                        $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
                        $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);

                        $total_kunjungan = $row_kunjungan['total_kunjungan'];
                        ?>

                        </a>

                        <div class="card-body">
                            <a class=" tmf_teks" href="dashboard.php?page=movies&id=<?php echo $row_film['tmdb_id']; ?>">
                                <h5 class="card-title">
                                    <?php echo $row_film['judul_film']; ?>
                                </h5>
                            </a></br>
                            <p style="font-size: 14px;">
                                <?php echo $total_kunjungan; ?> x ditonton
                            </p>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>

        <!-- TV SHOW TERBARU -->
        <div class="card-flat">
            <div class="tmf-card-terbaru ">
                <h3>
                    TV SHOW TERBARU
                    <span class="line"></span>
                </h3>
            </div>
        </div>
        <div class="row">
            <?php
            include 'config/koneksi.php';
            $query_tv = "SELECT thumbnail, judul_tv_show, tmdb_id FROM tb_tv_show ORDER BY created_at DESC LIMIT 8";
            $result_tv = mysqli_query($koneksi, $query_tv);

            while ($row_tv = mysqli_fetch_assoc($result_tv)) {
                if (!empty($row_tv['judul_tv_show'])) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="thumbnail-container">
                            <?php if (!empty($row_tv['thumbnail'])) { ?>
                                <a href="dashboard.php?page=tv&id=<?php echo $row_tv['tmdb_id']; ?>">
                                    <img class="img-fluid rounded img-landscape-zoom"
                                        src="gambar/film/<?php echo $row_film['thumbnail']; ?> "
                                        alt="<?php echo $row_tv['judul_tv_show']; ?>">
                                </a>
                            <?php } else {
                                $tmdb_id = $row_tv['tmdb_id'];
                                $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                $url_poster = $row_tmdb['url_poster'];
                                ?>
                                <a href="dashboard.php?page=tv&id=<?php echo $tmdb_id; ?>">
                                    <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                        alt="<?php echo $row_tv['judul_tv_show']; ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <?php
                        $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tmdb_id'";
                        $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
                        $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);

                        $total_kunjungan = $row_kunjungan['total_kunjungan'];
                        ?>
                        </a>
                        <div class="card-body">
                            <a class=" tmf_teks" href="dashboard.php?page=tv&id=<?php echo $row_tv['tmdb_id']; ?>">
                                <h5 class="card-title">
                                    <?php echo $row_tv['judul_tv_show']; ?>
                                </h5>
                            </a></br>
                            <p style="font-size: 14px;">
                                <?php echo $total_kunjungan; ?> x ditonton
                            </p>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
<?php } ?>
<div class="col-md-3 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <?php include 'view/search.php'; ?>
            <div class="card-flat">
                <div class="card-header">
                    <h5 class="card-title m-0">FILM & TV Paling Banyak Diputar</h5>
                </div>
                <div class="card-body" style="max-height: 1000px; overflow-y: auto;">
                    <?php
                    $query_film_tv = "SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                                FROM tb_film
                                LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                                GROUP BY tb_film.tmdb_id
                                UNION
                                SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, '', SUM(tb_view.jumlah_lihat) AS total_kunjungan
                                FROM tb_tv_show
                                LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                                GROUP BY tb_tv_show.tmdb_id
                                ORDER BY total_kunjungan DESC ";
                    $result_film_tv = mysqli_query($koneksi, $query_film_tv);
                    while ($row_film_tv = mysqli_fetch_assoc($result_film_tv)) {
                        if (!empty($row_film_tv['judul'])) {
                            $genre_ids = array_filter(explode(',', $row_film_tv['genre_ids']));
                            $genres = array();

                            foreach ($genre_ids as $genre_id) {
                                $query_genre = "SELECT nama_genre FROM tb_genre WHERE id = '$genre_id'";
                                $result_genre = mysqli_query($koneksi, $query_genre);
                                $row_genre = mysqli_fetch_assoc($result_genre);
                                $genres[] = $row_genre['nama_genre'];
                            }
                            ?>
                            <div class="row">
                                <?php $tmdb_id = $row_film_tv['tmdb_id']; ?>
                                <div class="col-lg-4 col-sm-6 col-6 tmf_teks">
                                    <a href="dashboard.php?page=<?php echo (strpos($row_film_tv['genre_ids'], ',') === false) ? 'tv' : 'movies'; ?>&id=<?php echo $tmdb_id; ?>"
                                        style="color: black;">
                                        <?php if (!empty($row_film_tv['thumbnail'])) { ?>
                                            <img class="img-fluid rounded img-landscape-zoom"
                                                src="gambar/film/<?php echo $row_film_tv['thumbnail']; ?>"
                                                alt="<?php echo $row_film_tv['judul']; ?>">
                                        <?php } else {
                                            $tmdb_id = $row_film_tv['tmdb_id'];
                                            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                            $url_poster = $row_tmdb['url_poster'];
                                            ?>
                                            <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                                alt="<?php echo $row_film_tv['judul']; ?>">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="dashboard.php?page=<?php echo (strpos($row_film_tv['genre_ids'], ',') === false) ? 'tv' : 'movies'; ?>&id=<?php echo $tmdb_id; ?>"
                                        style="color: black;">
                                        <strong>
                                            <?php echo $row_film_tv['judul']; ?>
                                        </strong><br>
                                        <?php foreach ($genres as $genres) { ?>
                                            <?php
                                            $slug_genre = strtolower(str_replace(' ', '-', $genres));
                                            ?>
                                            <a style="font-size: 14px;"
                                                href="dashboard.php?page=genre&f=<?php echo urlencode($slug_genre); ?>">
                                                <?php echo $genres . ", "; ?>
                                            </a>
                                        <?php } ?>

                                        <p style="font-size: 14px;"><i class="fas fa-eye"></i>
                                            <?php echo $row_film_tv['total_kunjungan']; ?> x ditonton
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>