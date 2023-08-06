<div class="col-md-3 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <?php include 'view/search.php'; ?>
            <div class="card-flat">
                <div class="card-header">
                    <h5 class="card-title m-0">FILM Rekomendasi</h5>
                </div>
                <div class="card-body" style="max-height: 1000px; overflow-y: auto;">
                    <?php
                    include 'config/koneksi.php'; // Penambahan koneksi untuk while
                    $query_film = "SELECT * FROM tb_film WHERE tmdb_id = '$tmdb_id'";
                    $result_film = mysqli_query($koneksi, $query_film);
                    $row_film = mysqli_fetch_assoc($result_film);
                    $desired_genre_ids = $row_film['genre_ids'];
                    $query_film = "SELECT tb_film.thumbnail, tb_film.judul_film, tb_film.tmdb_id, tb_film.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                                    FROM tb_film
                                    LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                                    WHERE tb_film.genre_ids IN ($desired_genre_ids)
                                    GROUP BY tb_film.tmdb_id
                                    ORDER BY total_kunjungan DESC";

                    $result_film = mysqli_query($koneksi, $query_film);
                    while ($row_film = mysqli_fetch_assoc($result_film)) {
                        $judul_film = $row_film['judul_film'];
                        $thumbnail = $row_film['thumbnail'];

                        $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                        $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                        $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                        $url_poster = $row_tmdb['url_poster'];

                        $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tmdb_id'";
                        $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
                        $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);
                        $total_kunjungan = $row_kunjungan['total_kunjungan'];

                        if (!empty($judul_film)) {
                            $genre_ids = array_filter(explode(',', $row_film['genre_ids']));
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
                                    <a href="<?php echo $base_url; ?>/dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>"
                                        style="color: black;">
                                        <div class="thumbnail-container">
                                            <?php if (!empty($thumbnail)) { ?>
                                                <img class="img-fluid rounded img-landscape-zoom"
                                                    src="<?php echo $base_url; ?>/gambar/film/<?php echo $thumbnail; ?>"
                                                    alt="<?php echo $judul_film; ?>">
                                            <?php } else {
                                                ?>
                                                <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                                    alt="<?php echo $judul_film; ?>">
                                            <?php } ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>" style="color: black;">
                                        <strong>
                                            <?php echo $judul_film; ?>
                                        </strong></br>
                                        <?php foreach ($genres as $genres) { ?>
                                            <a style="font-size: 14px;"
                                                href="dashboard.php?page=genre&f=<?php echo urlencode($genres); ?>">
                                                <?php echo $genres . ", "; ?>
                                            </a>
                                        <?php } ?>
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
        <script async="async" data-cfasync="false"
            src="//pl20262457.highcpmrevenuegate.com/b0ece0f17ce43fac83128654df865fe7/invoke.js"></script>
        <div id="container-b0ece0f17ce43fac83128654df865fe7"></div>
    </div>
</div>