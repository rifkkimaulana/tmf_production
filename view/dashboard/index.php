<?php
$query_film_tv = "SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
            FROM tb_film
            LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
            GROUP BY tb_film.tmdb_id
            UNION
            SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
            FROM tb_tv_show
            LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
            GROUP BY tb_tv_show.tmdb_id
            ORDER BY total_kunjungan DESC ";
$result_film_tv = mysqli_query($koneksi, $query_film_tv);

if (isset($_GET['search']) && !empty($_GET['search'])) {
    include 'search_movies_tv.php';
} else {
    include 'all_movies_tv.php';
} ?>

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
                    while ($row_film_tv = mysqli_fetch_assoc($result_film_tv)) {
                        $judul = $row_film_tv['judul'];
                        $cek_id_tmdb = $row_film_tv['tmdb_id'];

                        if (!empty($judul)) {
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
                                <div class="col-lg-4 col-sm-6 col-6 tmf_teks">
                                    <?php
                                    $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = $cek_id_tmdb;";
                                    $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                    $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                    $thumbnail = $row_tmdb['thumbnail'];
                                    ?>
                                    <a href="<?php echo $base_url; ?>/dashboard.php?page=<?php echo ($row_tmdb['jumlah_episode'] === null || $row_tmdb['jumlah_episode'] === '') ? 'movies' : 'tv'; ?>&id=<?php echo $cek_id_tmdb ?>"
                                        style="color: black;">
                                        <?php if (!empty($thumbnail)) { ?>
                                            <img class="img-fluid rounded img-landscape-zoom"
                                                src="gambar/<?php echo ($row_tmdb['jumlah_episode'] === null || $row_tmdb['jumlah_episode'] === '') ? 'movies' : 'tv'; ?>/<?php echo $thumbnail; ?>"
                                                alt="<?php echo $judul; ?>">
                                        <?php } else {
                                            $url_poster = $row_tmdb['url_poster'];
                                            ?>
                                            <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                                alt="<?php echo $judul; ?>">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="<?php echo $base_url; ?>/dashboard.php?page=<?php echo (strpos($row_film_tv['genre_ids'], ',') === false) ? 'tv' : 'movies'; ?>&id=<?php echo $cek_id_tmdb; ?>"
                                        style="color: black;">
                                        <strong>
                                            <?php echo $judul; ?>
                                        </strong><br>
                                        <?php
                                        $genre_limit = 3;
                                        $count_genre = 0;

                                        foreach ($genres as $genre) {
                                            ?>
                                            <a style="font-size: 14px;"
                                                href="<?php echo $base_url; ?>/dashboard.php?page=genre&f=<?php echo urlencode($genre); ?>">
                                                <small>
                                                    <?php echo $genre . ", "; ?>
                                                </small>
                                            </a>
                                            <?php
                                            $count_genre++;
                                            if ($count_genre >= $genre_limit) {
                                                break;
                                            }
                                        }
                                        ?>
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