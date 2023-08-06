<?php
$judul = $_GET['search'];
$tipe = isset($_GET['tipe']) ? $_GET['tipe'] : '';
$genre_filter = isset($_GET['genre']) ? $_GET['genre'] : '';
$kualitas_filter = isset($_GET['kualitas']) ? $_GET['kualitas'] : '';
$negara_filter = isset($_GET['negara']) ? $_GET['negara'] : '';
$tahun_filter = isset($_GET['tahun']) ? $_GET['tahun'] : '';


if ($tipe === 'film') {
    $query_film = "SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, tb_film.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_film
                    LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                    JOIN tb_negara ON FIND_IN_SET(tb_negara.id, tb_film.negara_ids)
                    WHERE tb_film.judul_film LIKE '%$judul%'";

    if (!empty($genre_filter)) {
        $genre_id = getGenreId($koneksi, $genre_filter);
        if ($genre_id !== null) {
            $query_film .= " AND FIND_IN_SET($genre_id, tb_film.genre_ids)";
        }
    }
    if (!empty($kualitas_filter)) {
        $kualitas_id = getKualitasId($koneksi, $kualitas_filter);
        if ($kualitas_id !== null) {
            $query_film .= " AND FIND_IN_SET($kualitas_id, tb_film.kualitas_ids)";
        }
    }
    if (!empty($negara_filter)) {
        $negara_id = getNegaraId($koneksi, $negara_filter);
        if ($negara_id !== null) {
            $query_film .= " AND FIND_IN_SET($negara_id, tb_film.negara_ids)";
        }
    }
    if (!empty($tahun_filter)) {
        $tahun_id = getTahunId($koneksi, $tahun_filter);
        if ($tahun_id !== null) {
            $query_film .= " AND FIND_IN_SET($tahun_id, tb_film.tahun_ids)";
        }
    }
    $query_film .= " GROUP BY tb_film.tmdb_id";
    $query_film_tv = $query_film;
} elseif ($tipe === 'tvshow') {
    $query_tv_show = "SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, tb_tv_show.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_tv_show
                    LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                    JOIN tb_negara ON FIND_IN_SET(tb_negara.id, tb_tv_show.negara_ids)
                    WHERE tb_tv_show.judul_tv_show LIKE '%$judul%'";

    if (!empty($genre_filter)) {
        $genre_id = getGenreId($koneksi, $genre_filter);
        if ($genre_id !== null) {
            $query_tv_show .= " AND FIND_IN_SET($genre_id, tb_tv_show.genre_ids)";
        }
    }
    if (!empty($kualitas_filter)) {
        $kualitas_id = getKualitasId($koneksi, $kualitas_filter);
        if ($kualitas_id !== null) {
            $query_tv_show .= " AND FIND_IN_SET($kualitas_id, tb_tv_show.kualitas_ids)";
        }
    }
    if (!empty($negara_filter)) {
        $negara_id = getNegaraId($koneksi, $negara_filter);
        if ($negara_id !== null) {
            $query_tv_show .= " AND FIND_IN_SET($negara_id, tb_tv_show.negara_ids)";
        }
    }
    if (!empty($tahun_filter)) {
        $tahun_id = getTahunId($koneksi, $tahun_filter);
        if ($tahun_id !== null) {
            $query_tv_show .= " AND FIND_IN_SET($tahun_id, tb_tv_show.tahun_ids)";
        }
    }
    $query_film_tv = $query_tv_show;
} else {
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
        $genre_id = getGenreId($koneksi, $genre_filter);
        if ($genre_id !== null) {
            $query_film .= " AND FIND_IN_SET($genre_id, tb_film.genre_ids)";
            $query_tv_show .= " AND FIND_IN_SET($genre_id, tb_tv_show.genre_ids)";
        }
    }
    if (!empty($kualitas_filter)) {
        $kualitas_id = getKualitasId($koneksi, $kualitas_filter);
        if ($kualitas_id !== null) {
            $query_film .= " AND FIND_IN_SET($kualitas_id, tb_film.kualitas_ids)";
            $query_tv_show .= " AND FIND_IN_SET($kualitas_id, tb_tv_show.kualitas_ids)";
        }
    }
    if (!empty($negara_filter)) {
        $negara_id = getNegaraId($koneksi, $negara_filter);
        if ($negara_id !== null) {
            $query_film .= " AND FIND_IN_SET($negara_id, tb_film.negara_ids)";
            $query_tv_show .= " AND FIND_IN_SET($negara_id, tb_tv_show.negara_ids)";
        }
    }
    if (!empty($tahun_filter)) {
        $tahun_id = getTahunId($koneksi, $tahun_filter);
        if ($tahun_id !== null) {
            $query_tv_show .= " AND FIND_IN_SET($tahun_id, tb_tv_show.tahun_ids)";
            $query_film .= " AND FIND_IN_SET($tahun_id, tb_film.tahun_ids)";
        }
    }
    $query_film .= " GROUP BY tb_film.tmdb_id";
    $query_tv_show .= " GROUP BY tb_tv_show.tmdb_id";

    $query_film_tv = "SELECT * FROM (($query_film) UNION ($query_tv_show)) AS merged_results ORDER BY total_kunjungan DESC";
}

$result_film_tv = mysqli_query($koneksi, $query_film_tv);
$count = 0;

if (mysqli_num_rows($result_film_tv) == 0) { ?>
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
        <div class="card-body">
            Tidak Tersedia.
        </div>

    </div>
<?php } else {
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
                                    ?>
                                    <a style="font-size: 14px;" href="dashboard.php?page=genre&f=<?php echo urlencode($genre); ?>">
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
} ?>