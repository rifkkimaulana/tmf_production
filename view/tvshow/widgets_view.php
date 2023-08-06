<div class="col-md-3 tmf_production ">
    <div class="row">
        <div class="col-lg-12">
            <?php include 'button_small.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-flat">
                <div class="card-header">
                    <h5 class="card-title m-0">TV SHOW Rekomendasi</h5>
                </div>
                <div class="card-body" style="max-height: 1000px; overflow-y: auto;">
                    <?php
                    if (!$result_tv2) {
                        die("Query failed: " . mysqli_error($koneksi));
                    }

                    while ($row_tv2 = mysqli_fetch_assoc($result_tv2)) {
                        $judul2 = $row_tv2['judul_tv_show'];
                        $thumbnail = $row_tv2['thumbnail'];

                        $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tv_tmdb_id'";
                        $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                        $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                        $url_poster = $row_tmdb['url_poster'];

                        if (!empty($judul2)) {

                            $genre_ids = array_filter(explode(',', $row_tv2['genre_ids']));
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
                                    <a href="<?php $base_url; ?>/dashboard.php?page=tv&id=<?php echo $tv_tmdb_id; ?>"
                                        style="color: black;">
                                        <div class="thumbnail-container">
                                            <?php if (!empty($thumbnail)) { ?>
                                                <img class="img-fluid rounded img-landscape-zoom"
                                                    src="<?php echo $base_url; ?>/gambar/tv/<?php echo $thumbnail; ?>"
                                                    alt="<?php echo $judul2; ?>">
                                            <?php } else {

                                                ?>
                                                <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                                    alt="<?php echo $judul2; ?>">
                                            <?php } ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="<?php $base_url; ?>/dashboard.php?page=tv&id=<?php echo $tv_tmdb_id; ?>"
                                        style="color: black;">
                                        <strong>
                                            <?php echo $judul2; ?>
                                        </strong></br>
                                        <?php foreach ($genres as $genres) { ?>
                                            <a style="font-size: 14px;"
                                                href="dashboard.php?page=genre&f=<?php echo urlencode($genres); ?>">
                                                <?php echo $genres . ", "; ?>
                                            </a>
                                        <?php } ?>
                                        <small>
                                            <p style="font-size: 14px;"><i class="fas fa-eye"></i>
                                                <?php echo $total_kunjungan; ?>
                                            </p>
                                        </small>
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