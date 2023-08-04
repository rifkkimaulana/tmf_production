<div class="col-md-12 tmf_production">
    <?php include 'view/genre_button.php'; ?>
    <div class="card-flat">
        <div class="tmf-card-terbaru">
            <h3>
                GENRE:
                <?php echo $_GET['f'] ?>
                <span class="line"></span>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="row">
                <?php
                include 'config/koneksi.php';
                $selected_genre = $_GET['f'];

                $query_film_tv = "SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_film
                    LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                    JOIN tb_genre ON FIND_IN_SET(tb_genre.id, tb_film.genre_ids)
                    WHERE tb_genre.nama_genre LIKE '%$selected_genre%'
                    GROUP BY tb_film.tmdb_id
                    UNION
                    SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                    FROM tb_tv_show
                    LEFT JOIN tb_genre ON FIND_IN_SET(tb_genre.id, tb_tv_show.genre_ids)
                    LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                    WHERE tb_genre.nama_genre LIKE '%$selected_genre%'
                    GROUP BY tb_tv_show.tmdb_id
                    ORDER BY total_kunjungan DESC";

                $result_film_tv = mysqli_query($koneksi, $query_film_tv);
                $count = 0;

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
                                    <?php foreach ($genres as $genre) { ?>
                                        <?php
                                        $slug_genre = strtolower(str_replace(' ', '-', $genre));
                                        ?>
                                        <a style="font-size: 14px;"
                                            href="dashboard.php?page=genre&f=<?php echo urlencode($slug_genre); ?>">
                                            <?php echo $genre . ", "; ?>
                                        </a>
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
    </div>
</div>