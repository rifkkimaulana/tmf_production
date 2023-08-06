<?php
$selected_country_name = $_GET['f'];

$selected_country_id = getNegaraIdByName($koneksi, $selected_country_name);

if ($selected_country_id !== null) {
    // Jika id negara yang sesuai ditemukan, gunakan id tersebut untuk melakukan filter dalam kueri UNION
    $query_film_tv = "SELECT thumbnail, judul, tmdb_id, genre_ids, negara_ids, total_kunjungan
                        FROM (
                            SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, tb_film.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                            FROM tb_film
                            LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                            WHERE FIND_IN_SET('$selected_country_id', tb_film.negara_ids)
                            GROUP BY tb_film.tmdb_id
                    
                            UNION
                    
                            SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, tb_tv_show.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                            FROM tb_tv_show
                            LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                            WHERE FIND_IN_SET('$selected_country_id', tb_tv_show.negara_ids)
                            GROUP BY tb_tv_show.tmdb_id
                        ) AS combined_data
                        ORDER BY total_kunjungan DESC ";

} else {

    // Jika id negara tidak ditemukan, mungkin berikan pesan kesalahan atau tampilkan semua film dan acara TV tanpa filter negara
    $query_film_tv = "SELECT thumbnail, judul, tmdb_id, genre_ids, negara_ids, total_kunjungan
                        FROM (
                            SELECT tb_film.thumbnail, tb_film.judul_film AS judul, tb_film.tmdb_id, tb_film.genre_ids, tb_film.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                            FROM tb_film
                            LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                            GROUP BY tb_film.tmdb_id
                    
                            UNION
                    
                            SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, tb_tv_show.negara_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                            FROM tb_tv_show
                            LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                            GROUP BY tb_tv_show.tmdb_id
                        ) AS combined_data
                        ORDER BY total_kunjungan DESC ";
}


$result_film_tv = mysqli_query($koneksi, $query_film_tv);
?>
<div class="col-md-12 tmf_production">
    <?php include 'view/genre_button.php'; ?>
    <div class="card-flat">
        <div class="tmf-card-terbaru">
            <h3>
                NEGARA :
                <?php echo $selected_country_name; ?>
                <span class="line"></span>
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <?php
            include 'config/koneksi.php'; // Penambahan koneksi untuk while
            if (isset($_GET['page']) && $_GET['page'] === 'negara') {
                $count = 0;

                while ($row_film_tv = mysqli_fetch_assoc($result_film_tv)) {
                    $judul = $row_film_tv['judul'];
                    $tmdb_id = $row_film_tv['tmdb_id'];
                    $thumbnail = $row_film_tv['thumbnail'];

                    $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = $tmdb_id;";
                    $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                    $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                    $url_poster = $row_tmdb['url_poster'];

                    if (!empty($judul)) {
                        $genre_ids = array_filter(explode(',', $row_film_tv['genre_ids']));
                        $genres = array();

                        foreach ($genre_ids as $genre_id) {
                            $query_genre = "SELECT nama_genre FROM tb_genre WHERE id = '$genre_id'";
                            $result_genre = mysqli_query($koneksi, $query_genre);
                            $row_genre = mysqli_fetch_assoc($result_genre);
                            $genres[] = $row_genre['nama_genre'];
                        }

                        $country_ids = array_filter(explode(',', $row_film_tv['negara_ids']));
                        $countries = array();

                        foreach ($country_ids as $country_id) {
                            $query_country = "SELECT nama_negara FROM tb_negara WHERE id = '$country_id'";
                            $result_country = mysqli_query($koneksi, $query_country);
                            $row_country = mysqli_fetch_assoc($result_country);
                            $countries[] = $row_country['nama_negara'];
                        }

                        if ($count % 4 === 0 && $count > 0) {
                            echo '</div><div class="row">';
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <a href="<?php echo $base_url; ?>/dashboard.php?page=<?php echo ($row_tmdb['jumlah_episode'] === null || $row_tmdb['jumlah_episode'] === '') ? 'movies' : 'tv'; ?>&id=<?php echo $row_film_tv['tmdb_id']; ?>"
                                style="color: black;">
                                <div class="thumbnail-container">
                                    <?php if (!empty($thumbnail)) { ?>
                                        <img class="img-fluid rounded img-landscape-zoom"
                                            src="gambar/<?php echo ($row_tmdb['jumlah_episode'] === null || $row_tmdb['jumlah_episode'] === '') ? 'film' : 'tv'; ?>/<?php echo $row_film_tv['thumbnail']; ?>"
                                            alt="<?php echo $judul; ?>">
                                    <?php } else {
                                        ?>
                                        <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                            alt="<?php echo $judul; ?>">
                                    <?php } ?>
                                </div>
                                <div class="video-info">
                                    <strong>
                                        <?php echo $judul; ?>
                                    </strong>
                                    <?php
                                    $genre_limit = 3;
                                    $count_genre = 0;

                                    foreach ($genres as $genre) {
                                        ?>
                                        <a style="font-size: 14px;"
                                            href="<?php echo $base_url; ?>/dashboard.php?page=genre&f=<?php echo urlencode($genre); ?>">
                                            <?php echo $genre . ", "; ?>
                                        </a>
                                        <?php
                                        $count_genre++;
                                        if ($count_genre >= $genre_limit) {
                                            break;
                                        }
                                    }
                                    ?>
                                    <?php foreach ($countries as $country) { ?>
                                        <span style="font-size: 12px;">
                                            <?php echo $country . ", "; ?>
                                        </span>
                                    <?php } ?>
                                    <small>
                                        <p style="font-size: 14px;"><i class="fas fa-eye"></i>
                                            <?php echo $row_film_tv['total_kunjungan']; ?> x ditonton
                                        </p>
                                    </small>
                                </div>
                            </a>
                        </div>
                        <?php
                        $count++;
                    }
                }
            }
            ?>
        </div>
        <script async="async" data-cfasync="false"
            src="//pl20262457.highcpmrevenuegate.com/b0ece0f17ce43fac83128654df865fe7/invoke.js"></script>
        <div id="container-b0ece0f17ce43fac83128654df865fe7"></div>
    </div>
</div>