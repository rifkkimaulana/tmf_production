<div class="col-md-9 tmf_production">
    <?php include 'view/genre_button.php'; ?>
    <div class="row">
        <?php
        include 'config/koneksi.php';
        $query_film = "SELECT thumbnail, judul_film, tmdb_id FROM tb_film";
        $result_film = mysqli_query($koneksi, $query_film);

        while ($row_film = mysqli_fetch_assoc($result_film)) {
            if (!empty($row_film['judul_film'])) { ?>
                <div class="col-md-3">
                    <?php if (!empty($row_film['thumbnail'])) { ?>
                        <a href="dashboard.php?page=view&id=<?php echo $row_film['tmdb_id']; ?>">
                            <img class=" col-md-12 zoom-effect" src="gambar/film/<?php echo $row_film['thumbnail']; ?> "
                                alt="<?php echo $row_film['judul_film']; ?>">
                        </a>

                    <?php } else {
                        $tmdb_id = $row_film['tmdb_id'];
                        $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                        $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                        $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                        $url_poster = $row_tmdb['url_poster'];
                        ?>
                        <a href="dashboard.php?page=view&id=<?php echo $tmdb_id; ?>">
                            <img class="col-md-12 zoom-effect" src="<?php echo $url_poster; ?>"
                                alt="<?php echo $row_film['judul_film']; ?>">
                        </a>
                    <?php } ?>


                    <div class="card-body">
                        <a class=" tmf_teks" href="dashboard.php?page=view&id=<?php echo $row_film['tmdb_id']; ?>">
                            <h5 class="card-title">
                                <?php echo $row_film['judul_film']; ?>
                            </h5>
                        </a>
                        <p class="card-text">
                            500 x ditonton
                        </p>
                    </div>


                </div>
            <?php }
        } ?>
    </div>

</div>
<?php include 'view/widgets.php'; ?>