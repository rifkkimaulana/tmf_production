<div class="card-flat hide-on-small-screen">
    <?php
    $query_tmdb2 = "SELECT * FROM tb_tmdb WHERE tmdb_id = $select_id_dbtmdb;";
    $result_tmdb2 = mysqli_query($koneksi, $query_tmdb2);

    if (mysqli_num_rows($result_tmdb2) > 0) {
        while ($row_tmdb2 = mysqli_fetch_assoc($result_tmdb2)) {
            $select_id_tmdb = $row_tmdb2['id'];

            $query_tv = "SELECT * FROM tb_tv_show WHERE tmdb_id = $select_id_tmdb;";
            $result_tv = mysqli_query($koneksi, $query_tv);
            $row_tv = mysqli_fetch_assoc($result_tv);
            $tv_id = $row_tv['id'];
            $judul = $row_tv['judul_tv_show'];
            ?>
            <hr>
            <div class="card-header font-weight-bold">
                <?php echo $judul; ?>
            </div>
            <div class="card-body">
                <?php
                $query_episode = "SELECT * FROM tb_episode_tv_show WHERE tv_show_id = $tv_id";
                $result_episode = mysqli_query($koneksi, $query_episode);
                if (mysqli_num_rows($result_episode) > 0) {
                    while ($row_episode = mysqli_fetch_assoc($result_episode)) {
                        $episode = $row_episode['jumlah_episode'];

                        $url = $base_url . "/dashboard.php" . "?page=" . $_GET['page'] . "&id=" . $select_id_tmdb . "&episode=" . $episode . "&play=1";
                        ?>
                        <a href="<?php echo $url; ?>">
                            <button type="button"
                                class="btn btn-sm <?php if ($_GET['episode'] == $episode && $_GET['id'] == $select_id_tmdb) { ?> btn-primary <?php } else { ?> btn-secondary <?php } ?> mt-1">
                                <?php echo $episode; ?>
                            </button>
                        </a>
                        <?php
                    }
                } else {
                    echo "<small>Episode tidak tersedia.</small>";
                }
                ?>
            </div>
            <?php
        }
    } else {
        echo "<small>Tidak ada id tersedia.</small>";
    } ?>
</div>