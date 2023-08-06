<div class="col-md-9 tmf_production">
    <?php include 'view/genre_button.php'; ?>
    <div class="card-flat">
        <div class="tmf-card-terbaru ">
            <h3>
                TV SHOW
                <span class="line"></span>
            </h3>
        </div>
    </div>
    <div class="row">
        <?php
        include 'config/koneksi.php';
        $query_tv = "SELECT thumbnail, judul_tv_show, tmdb_id FROM tb_tv_show ORDER BY created_at DESC";
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


<div class="col-md-3 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <?php include 'view/search.php'; ?>
            <div class="card-flat">
                <div class="card-header">
                    <h5 class="card-title m-0">TV Paling Banyak Diputar</h5>
                </div>
                <div class="card-body" style="max-height: 1000px; overflow-y: auto;">
                    <?php
                    $query_tv = "SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                                FROM tb_tv_show
                                LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                                GROUP BY tb_tv_show.tmdb_id
                                ORDER BY total_kunjungan DESC";
                    $result_tv = mysqli_query($koneksi, $query_tv);
                    while ($row_tv = mysqli_fetch_assoc($result_tv)) {
                        if (!empty($row_tv['judul_tv_show'])) {
                            $genre_ids = array_filter(explode(',', $row_tv['genre_ids']));
                            $genres = array();

                            foreach ($genre_ids as $genre_id) {
                                $query_genre = "SELECT nama_genre FROM tb_genre WHERE id = '$genre_id'";
                                $result_genre = mysqli_query($koneksi, $query_genre);
                                $row_genre = mysqli_fetch_assoc($result_genre);
                                $genres[] = $row_genre['nama_genre'];
                            }
                            ?>
                            <div class="row">
                                <?php $tmdb_id = $row_tv['tmdb_id']; ?>
                                <div class="col-lg-4 col-sm-6 col-6 tmf_teks">
                                    <a href="dashboard.php?page=tv&id=<?php echo $tmdb_id; ?>" style="color: black;">
                                        <?php if (!empty($row_tv['thumbnail'])) { ?>
                                            <img class="img-fluid rounded img-landscape-zoom"
                                                src="gambar/tv/<?php echo $row_tv['thumbnail']; ?>"
                                                alt="<?php echo $row_tv['judul_tv_show']; ?>">
                                        <?php } else {
                                            $tmdb_id = $row_tv['tmdb_id'];
                                            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                            $url_poster = $row_tmdb['url_poster'];
                                            ?>
                                            <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                                alt="<?php echo $row_tv['judul_tv_show']; ?>">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="dashboard.php?page=tv&id=<?php echo $tmdb_id; ?>" style="color: black;">
                                        <strong>
                                            <?php echo $row_tv['judul_tv_show']; ?>
                                        </strong></br>
                                        <?php foreach ($genres as $genres) { ?>
                                            <?php
                                            $slug_genre = strtolower(str_replace(' ', '-', $genres));
                                            ?>
                                            <a style="font-size: 14px;"
                                                href="dashboard.php?page=genre&f=<?php echo urlencode($slug_genre); ?>">
                                                <?php echo $genres . ", "; ?>
                                            </a>
                                        <?php } ?>

                                        <?php
                                        $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tmdb_id'";
                                        $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
                                        $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);

                                        $total_kunjungan = $row_kunjungan['total_kunjungan'];
                                        ?>
                                        <p style="font-size: 14px;"><i class="fas fa-eye"></i>
                                            <?php echo $total_kunjungan; ?>
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