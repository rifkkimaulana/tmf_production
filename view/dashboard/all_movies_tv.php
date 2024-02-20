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
        
        <div id="container-b0ece0f17ce43fac83128654df865fe7"></div>
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
            $tmdb_idTv = $row_tv['tmdb_id'];

            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_idTv'";
            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
            $url_poster = $row_tmdb['url_poster'];

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
    <div class="row">
        <div class="card-body">
<<<<<<< HEAD
            
=======
            <script async="&#97;&#115;&#121;&#110;&#99;" data-cfasync="&#102;&#97;&#108;&#115;&#101;"
                src="&#47;&#47;&#100;&#114;&#101;&#97;&#100;&#102;&#117;&#108;&#112;&#114;&#111;&#102;&#105;&#116;&#97;&#98;&#108;&#101;&#46;&#99;&#111;&#109;&#47;&#98;&#48;&#101;&#99;&#101;&#48;&#102;&#49;&#55;&#99;&#101;&#52;&#51;&#102;&#97;&#99;&#56;&#51;&#49;&#50;&#56;&#54;&#53;&#52;&#100;&#102;&#56;&#54;&#53;&#102;&#101;&#55;&#47;&#105;&#110;&#118;&#111;&#107;&#101;&#46;&#106;&#115;"></script>
>>>>>>> cd8afe41a1174196e51a74f244c99c4fcd0bc3c5
            &#13;
            <div
                id="&#99;&#111;&#110;&#116;&#97;&#105;&#110;&#101;&#114;&#45;&#98;&#48;&#101;&#99;&#101;&#48;&#102;&#49;&#55;&#99;&#101;&#52;&#51;&#102;&#97;&#99;&#56;&#51;&#49;&#50;&#56;&#54;&#53;&#52;&#100;&#102;&#56;&#54;&#53;&#102;&#101;&#55;">
            </div>
        </div>
    </div>
</div>