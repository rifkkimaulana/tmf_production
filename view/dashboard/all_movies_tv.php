<?php
$query_film = "SELECT thumbnail, judul_film, tmdb_id FROM tb_film ORDER BY created_at DESC LIMIT 8";
$result_film = mysqli_query($koneksi, $query_film);

$query_tv = "SELECT thumbnail, judul_tv_show, tmdb_id FROM tb_tv_show ORDER BY created_at DESC LIMIT 8";
$result_tv = mysqli_query($koneksi, $query_tv);
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
        include 'config/koneksi.php'; //koneksi tambahan untuk while
        while ($row_film = mysqli_fetch_assoc($result_film)) {
            $judul_film = $row_film['judul_film'];
            $thumbnail_film = $row_film['thumbnail'];
            $tmdb_idFilm = $row_film['tmdb_id'];

            $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tmdb_idFilm'";
            $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
            $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);
            $total_kunjungan = $row_kunjungan['total_kunjungan'];

            if (!empty($judul_film)) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="thumbnail-container">
                        <?php if (!empty($thumbnail_film)) { ?>
                            <a href="<?php echo $base_url; ?>/dashboard.php?page=movies&id=<?php echo $tmdb_idFilm; ?>">
                                <img class="img-fluid rounded img-landscape-zoom" src="gambar/film/<?php echo $thumbnail_film; ?> "
                                    alt="<?php echo $judul_film; ?>">
                            </a>
                        <?php } else {
                            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_idFilm'";
                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                            $url_poster = $row_tmdb['url_poster'];
                            ?>
                            <a href="<?php echo $base_url; ?>/dashboard.php?page=movies&id=<?php echo $tmdb_idFilm; ?>">
                                <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                    alt="<?php echo $judul_film; ?>">
                            </a>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <a class=" tmf_teks"
                            href="<?php echo $base_url; ?>/dashboard.php?page=movies&id=<?php echo $tmdb_idFilm; ?>">
                            <h5 class="card-title">
                                <?php echo $judul_film; ?>
                            </h5>
                        </a></br>
                        <p style="font-size: 14px;">
                            <small>
                                <?php echo $total_kunjungan; ?> x ditonton
                            </small>
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
        include 'config/koneksi.php'; //koneksi tambahan untuk while
        while ($row_tv = mysqli_fetch_assoc($result_tv)) {
            $judul_tvShow = $row_tv['judul_tv_show'];
            $thumbnail_tv = $row_tv['thumbnail'];
            $tmdb_idTv = $row_tv['judul_tv_show'];

            $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tmdb_idTv'";
            $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
            $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);
            $total_kunjungan = $row_kunjungan['total_kunjungan'];

            if (!empty($judul_tvShow)) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="thumbnail-container">
                        <?php if (!empty($thumbnail_tv)) { ?>
                            <a href="<?php echo $base_url; ?>/dashboard.php?page=tv&id=<?php echo $tmdb_idTv; ?>">
                                <img class="img-fluid rounded img-landscape-zoom" src="gambar/tv/<?php echo $thumbnail_tv; ?> "
                                    alt="<?php echo $judul_tvShow; ?>">
                            </a>
                        <?php } else {
                            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_idTv'";
                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                            $url_poster = $row_tmdb['url_poster'];
                            ?>
                            <a href="<?php echo $base_url; ?>/dashboard.php?page=tv&id=<?php echo $tmdb_idTv; ?>">
                                <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                    alt="<?php echo $judul_tvShow; ?>">
                            </a>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <a class=" tmf_teks"
                            href="<?php echo $base_url; ?>/dashboard.php?page=tv&id=<?php echo $row_tv['tmdb_id']; ?>">
                            <h5 class="card-title">
                                <?php echo $judul_tvShow; ?>
                            </h5>
                        </a></br>
                        <p style="font-size: 14px;">
                            <small>
                                <?php echo $total_kunjungan; ?> x ditonton
                            </small>
                        </p>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</div>