<?php
if (isset($_GET['id'])) {
    $tmdb_id = $_GET['id'];

    $query_film = "SELECT * FROM tb_tv_show WHERE tmdb_id = $tmdb_id;";
    $result_film = mysqli_query($koneksi, $query_film);
    $row_tv = mysqli_fetch_assoc($result_film);
    $tv_id = $row_tv['id'];
    $judul = $row_tv['judul_tv_show'];

} else {
    echo 'ID Tidak Ditemukan!';
}
?>
<div class="col-md-3 tmf_production order-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-flat">
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

                            $url = $base_url . "/dashboard.php" . "?page=" . $_GET['page'] . "&id=" . $_GET['id'] . "&episode=" . $episode;
                            ?>
                            <a href="<?php echo $url; ?>">
                                <button type="button"
                                    class="btn btn-sm <?php if ($_GET['episode'] == $episode) { ?> btn-primary <?php } else { ?> btn-secondary <?php } ?>">
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
            </div>
        </div>
    </div>
</div>