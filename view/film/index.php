<div class="col-md-9 tmf_production">
    <?php include 'view/genre_button.php'; ?>
    <div class="row">
        <?php
        include 'config/koneksi.php';
        $query_film = "SELECT thumbnail, judul_film, tmdb_id FROM tb_film";
        $result_film = mysqli_query($koneksi, $query_film);

        while ($row_film = mysqli_fetch_assoc($result_film)) {
            if (!empty($row_film['judul_film'])) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <?php if (!empty($row_film['thumbnail'])) { ?>
                        <a href="dashboard.php?page=movies&id=<?php echo $row_film['tmdb_id']; ?>">
                            <img class="col-md-12 zoom-effect" src="gambar/film/<?php echo $row_film['thumbnail']; ?> "
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
                            <img class="col-md-12 zoom-effect" src="<?php echo $url_poster; ?>"
                                alt="<?php echo $row_film['judul_film']; ?>">
                        </a>
                    <?php } ?>
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

</div>
<?php include 'view/widgets.php'; ?>