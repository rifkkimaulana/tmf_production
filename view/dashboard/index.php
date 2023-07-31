<?php include 'view/genre_button.php'; ?>

<div class="col-md-8">
    <div class="row">
        <?php
        include 'config/koneksi.php';
        $query_film = "SELECT thumbnail, judul_film, tmdb_id FROM tb_film";
        $result_film = mysqli_query($koneksi, $query_film);

        while ($row_film = mysqli_fetch_assoc($result_film)) {
            if (!empty($row_film['judul_film'])) { ?>
                <div class="col-md-3">
                    <div class="card card-primary">
                        <?php if (!empty($row_film['thumbnail'])) { ?>
                            <img class="img-fluid rounded" src="gambar/film/<?php echo $row_film['thumbnail']; ?>"
                                alt="<?php echo $row_film['judul_film']; ?>">
                        <?php } else {
                            $tmdb_id = $row_film['tmdb_id'];
                            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                            $url_poster = $row_tmdb['url_poster'];
                            ?>
                            <img class="img-fluid rounded" src="<?php echo $url_poster; ?>"
                                alt="<?php echo $row_film['judul_film']; ?>">
                        <?php } ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row_film['judul_film']; ?>
                            </h5>
                            <p class="card-text">
                            </p>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</div>
<?php include 'view/widgets.php'; ?>