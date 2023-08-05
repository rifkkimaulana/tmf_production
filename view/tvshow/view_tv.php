<?php
$tv_tmdb_id = $_GET['id'];
$query_tv = "SELECT * FROM tb_tv_show WHERE tmdb_id = '$tv_tmdb_id'";
$result_tv = mysqli_query($koneksi, $query_tv);
$row_tv = mysqli_fetch_assoc($result_tv);
$id_tv = $row_tv['id'];

$query_tmdb = "SELECT link_trailer FROM tb_tmdb WHERE id = '$tv_tmdb_id'";
$result_tmdb = mysqli_query($koneksi, $query_tmdb);
if (mysqli_num_rows($result_tmdb) > 0) {
    $row_tmdb = mysqli_fetch_assoc($result_tmdb);
    $link = $row_tmdb['link_trailer'];
}

$episode = isset($_GET['episode']) ? $_GET['episode'] : '1';
$query_episode = "SELECT * FROM tb_episode_tv_show WHERE tv_show_id = '$id_tv' AND jumlah_episode = '$episode'";
$result_episode = mysqli_query($koneksi, $query_episode);

if (mysqli_num_rows($result_episode) > 0) {
    $row_episode = mysqli_fetch_assoc($result_episode);
    $id_player = $row_episode['player_id'];
    $id_download = $row_episode['download_id'];
}

$query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$tv_tmdb_id'";
$result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
$row_kunjungan = mysqli_fetch_assoc($result_kunjungan);

?>
<div class="col-md-9 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <div class="card tmf_shadow bg-black">
                <div class="embed-responsive embed-responsive-16by9">
                    <?php
                    $playValue = isset($_GET['play']) ? $_GET['play'] : '1';

                    if (isset($_GET['episode']) ? $_GET['episode'] : '') {

                        $query_play = "SELECT * FROM tb_player WHERE id = '$id_player'";
                        $result_play = mysqli_query($koneksi, $query_play);
                        $row_play = mysqli_fetch_assoc($result_play);

                        switch ($playValue) {
                            case 1:
                                $link = $row_play['link1'];
                                $judul = $row_play['judul1'];
                                break;
                            case 2:
                                $link = $row_play['link2'];
                                $judul = $row_play['judul2'];
                                break;
                            case 3:
                                $link = $row_play['link3'];
                                $judul = $row_play['judul2'];
                                break;
                            case 4:
                                $link = $row_play['link4'];
                                $judul = $row_play['judul4'];
                                break;
                            case 5:
                                $link = $row_play['link5'];
                                $judul = $row_play['judul5'];
                                break;
                            case 6:
                                $link = $row_play['link6'];
                                $judul = $row_play['judul6'];
                                break;
                            case 7:
                                $link = $row_play['link7'];
                                $judul = $row_play['judul7'];
                                break;
                            case 8:
                                $link = $row_play['link8'];
                                $judul = $row_play['judul8'];
                                break;
                            case 9:
                                $link = $row_play['link9'];
                                $judul = $row_play['judul9'];
                                break;
                            case 10:
                                $link = $row_play['link10'];
                                $judul = $row_play['judul10'];
                                break;
                            case 11:
                                $link = $row_play['link11'];
                                $judul = $row_play['judul11'];
                                break;
                            case 12:
                                $link = $row_play['link12'];
                                $judul = $row_play['judul12'];
                                break;
                            case 13:
                                $link = $row_play['link13'];
                                $judul = $row_play['judul13'];
                                break;
                            case 14:
                                $link = $row_play['link14'];
                                $judul = $row_play['judul14'];
                                break;
                            case 15:
                                $link = $row_play['link15'];
                                $judul = $row_play['judul15'];
                                break;
                            default:
                                if (strpos($link, 'v=') !== false) {
                                    $video_id = substr($link, strpos($link, 'v=') + 2);
                                    $link = "https://www.youtube.com/embed/" . $video_id . "?autoplay=1";
                                }
                                break;
                        }
                    } else {
                        if (strpos($link, 'v=') !== false) {
                            $video_id = substr($link, strpos($link, 'v=') + 2);
                            $link = "https://www.youtube.com/embed/" . $video_id . "?autoplay=1";
                        }
                    }
                    ?>

                    <iframe src="<?php echo $link; ?>" title="TMF PRODUCTION PLAYER" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>

                <?php
                if (strpos($link, 'autoplay=1') !== false) {
                    ?>
                    <div class="lewati-notification">
                        <div class="lewati-content">

                            <a href="<?php echo $base_url . "/dashboard.php?page=tv&id=" . $tv_tmdb_id . "&episode=" . $episode . "&play=" . $playValue; ?>"
                                class="btn btn-sm btn-dark">Lewati Trailer</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <?php include 'judul_deskripsi.php'; ?>

            <div class="card card-flat hide-on-large-screen tmf_production">
                <?php
                $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = $tv_tmdb_id;";
                $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                $select_id_dbtmdb = $row_tmdb['tmdb_id'];

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

            <div class="card-flat">
                <?php
                $tmdb_id = $row_tv['tmdb_id'];
                $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = '$tmdb_id'";
                $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                $row_tmdb = mysqli_fetch_assoc($result_tmdb);

                $genre_ids = explode(",", $row_tv['genre_ids']);
                $genres = array();
                foreach ($genre_ids as $genre_id) {
                    $query_genre = "SELECT nama_genre FROM tb_genre WHERE id = '$genre_id'";
                    $result_genre = mysqli_query($koneksi, $query_genre);
                    $row_genre = mysqli_fetch_assoc($result_genre);
                    $genres[] = $row_genre['nama_genre'];
                }

                $tanggal_rilis = date("d F Y", strtotime($row_tmdb['tanggal_rilis']));
                function formatDuration($minutes)
                {
                    $hours = floor($minutes / 60);
                    $remainingMinutes = $minutes % 60;

                    if ($hours > 0) {
                        return $hours . " jam " . $remainingMinutes . " menit";
                    } else {
                        return $remainingMinutes . " menit";
                    }
                }
                $waktu_jalan = formatDuration($row_tmdb['waktu_jalan']);

                function formatCurrency($amount)
                {
                    return "IDR " . number_format($amount, 0, ',', '.');
                }
                $anggaran = formatCurrency($row_tmdb['anggaran']);
                $pendapatan = formatCurrency($row_tmdb['pendapatan']);
                ?>
                <hr>
                <b>
                    Judul Film:
                </b>
                <a href="<?php echo $base_url . "/dashboard.php?page=tv&id=" . $tmdb_id; ?>">
                    <?php echo $row_tmdb['judul']; ?>
                </a>
                <hr>
                <b>Genre:</b>
                <?php foreach ($genres as $genres) { ?>
                    <?php
                    $slug_genre = strtolower(str_replace(' ', '-', $genres));
                    ?>
                    <a href="dashboard.php?page=genre&f=<?php echo urlencode($slug_genre); ?>">
                        <?php echo $genres . ", "; ?>
                    </a>
                <?php } ?>
                <hr>
                <a><b>Bahasa:</b>
                    <?php echo $row_tmdb['bahasa']; ?>
                </a>
                <hr>
                <a><b>Tagline:</b>
                    <?php echo $row_tmdb['tagline']; ?>
                </a>
                <hr>
                <a><b>Rating MPAA:</b>
                    <?php echo $row_tmdb['rating_mpaa']; ?>
                </a>
                <hr>
                <a><b>Tanggal Rilis:</b>
                    <?php echo $tanggal_rilis; ?>
                </a>
                <hr>
                <a><b>Durasi:</b>
                    <?php echo $waktu_jalan; ?>
                </a>
                <hr>
                <a><b>Rating TMDB:</b>
                    <?php echo $row_tmdb['rating1'] . " dari " . $row_tmdb['rating2']; ?>
                </a>
                <hr>
                <a><b>Anggaran:</b>
                    <?php echo $anggaran; ?>
                </a>
                <hr>
                <a><b>Pendapatan:</b>
                    <?php echo $pendapatan; ?>
                </a>
                <hr>
                <b>ID IMDB:</b>
                <a href="<?php echo $safelink . "https://www.imdb.com/title/" . $row_tmdb['imdb_id']; ?>"
                    target="_blank">
                    <?php echo $row_tmdb['imdb_id']; ?>
                </a>
                <hr>
                <b>ID TMDB:</b>
                <a href="<?php echo $safelink . "https://www.themoviedb.org/movie/" . $row_tmdb['tmdb_id']; ?>"
                    target="_blank">
                    <?php echo $row_tmdb['tmdb_id']; ?> </a>
                <hr>
                <a><b>Jumlah Episode:</b>
                    <?php echo $row_tmdb['jumlah_episode']; ?>
                </a>
            </div>
            <!-- End TMDB LIST -->


            <!-- Form Komentar-->
            <div class="card-flat comment-form" style="margin-bottom: 5px;">
                </br>
                <?php
                $query_jumlah_komentar = "SELECT COUNT(*) as total_komentar FROM tb_komentar WHERE tmdb_id = ?";
                $stmt = $koneksi->prepare($query_jumlah_komentar);
                $stmt->bind_param("i", $tmdb_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $row_jumlah_komentar = $result->fetch_assoc();
                $total_komentar = $row_jumlah_komentar['total_komentar'];
                ?>
                <h6>
                    <?php echo "    " . $total_komentar; ?> Komentar
                </h6>

                <form action="view/proses_komentar.php" method="POST">
                    <?php
                    if (isset($_SESSION['nama'])) {
                        $namaUser = $_SESSION['nama'];
                    } else {
                        $namaUser = 'Guest';
                    }
                    $tmdb_id = $row_tv['tmdb_id'];
                    ?>
                    <?php if (isset($_SESSION['nama'])) { ?>
                        <input type="hidden" name="nama" value="<?php echo $_SESSION['nama']; ?>">
                        <input type="hidden" name="tmdb_id" value="<?php echo $tmdb_id; ?>">
                        <input type="hidden" name="halaman" value="<?php echo $_GET['page']; ?>">
                        <div class="form-group">
                            <input class="form-control" id="komentar" name="komentar" rows="3"
                                placeholder="Tambahkan komentar" required></input>
                        </div>
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded float-right submit-btn ml-1"
                            id="kirimBtn" style="display: none;">Kirim </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-rounded float-right submit-btn"
                            id="batalBtn" style="display: none;">Batal </button>

                    <?php } else { ?>
                        <div class="form-group">
                            <input class="form-control" id="komentar" name="komentar" rows="3"
                                placeholder="Silahkan login untuk menambahkan komentar!" disabled></input>
                        </div>
                    <?php } ?>
                </form>
            </div>
            <!-- End form komentar-->

            <!-- Kolom komentar-->
            <div class="card-flat">
                </br>
                <?php
                include 'config/koneksi.php';
                $tmdb_id = $row_tv['tmdb_id'];
                $query_komentar = "SELECT * FROM tb_komentar WHERE tmdb_id = '$tmdb_id' ORDER BY id DESC";
                $result_komentar = mysqli_query($koneksi, $query_komentar);
                ?>
                <?php while ($row_komentar = mysqli_fetch_assoc($result_komentar)) { ?>
                    <div class="media">
                        <?php
                        $namaUser = $row_komentar['nama'];
                        $query_user = "SELECT logo_user FROM tb_users WHERE user_nama = '$namaUser'";
                        $result_user = mysqli_query($koneksi, $query_user);
                        $row_user = mysqli_fetch_assoc($result_user);
                        $fotoProfil = $row_user['logo_user'];
                        $tmdb_id = $row_film['tmdb_id'];
                        if (!empty($fotoProfil)) {
                            $fotoUrl = $base_url . '/gambar/user/' . $fotoProfil;
                        } else {
                            $fotoUrl = 'https://www.pngkey.com/png/detail/202-2024792_user-profile-icon-png-download-fa-user-circle.png';
                        }
                        ?>
                        <img src="<?php echo $fotoUrl; ?>" class="mr-3" alt="User"
                            style="width: 30px; height: 30px; margin-top: 10px;">
                        <div class="media-body">
                            <b>
                                <?php echo $row_komentar['nama']; ?>
                            </b>
                            <small>

                                <?php echo "(" . timeSinceUpload($row_komentar['waktu_post']) . ")"; ?>
                            </small></br>
                            <a>
                                <?php echo $row_komentar['komentar']; ?>
                            </a>
                        </div>
                        <form action="view/proses_hapus_komentar.php" method="POST">
                            <?php
                            if (isset($_SESSION['nama']) && $_SESSION['nama'] === $row_komentar['nama']) {
                                ?>
                                <input type="hidden" name="komentar_id" value="<?php echo $row_komentar['id']; ?>">
                                <input type="hidden" name="tmdb_id" value="<?php echo $tmdb_id; ?>">
                                <button type="submit" class="btn btn-outline btn-sm" style="margin-top: 10px;"
                                    onclick="if(confirm('Apakah Anda yakin ingin menghapus komentar ini?')) { this.parentNode.parentNode.submit(); } event.returnValue = false;">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                    <hr>
                <?php } ?>
            </div>
            <!-- End Kolom komentar-->
        </div>
    </div>
</div>

<?php
if (isset($_GET['id'])) {
    $tmdb_id = $_GET['id'];

    $query_film = "SELECT * FROM tb_tv_show WHERE tmdb_id = $tmdb_id;";
    $result_film = mysqli_query($koneksi, $query_film);
    $row_tv = mysqli_fetch_assoc($result_film);
    $id_tmdb = $row_tv['tmdb_id'];

    $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = $id_tmdb;";
    $result_tmdb = mysqli_query($koneksi, $query_tmdb);
    $row_tmdb = mysqli_fetch_assoc($result_tmdb);
    $select_id_dbtmdb = $row_tmdb['tmdb_id'];

    $query_tmdb2 = "SELECT * FROM tb_tmdb WHERE tmdb_id = $select_id_dbtmdb;";
    $result_tmdb2 = mysqli_query($koneksi, $query_tmdb2);
} else {
    echo 'ID Tidak Ditemukan!';
}
?>
<div class="col-md-3 tmf_production ">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-flat hide-on-small-screen">
                <?php
                $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = $tv_tmdb_id;";
                $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                $select_id_dbtmdb = $row_tmdb['tmdb_id'];

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

                    $query_tv = "SELECT * FROM tb_tv_show WHERE tmdb_id = '$tv_tmdb_id'";
                    $result_tv = mysqli_query($koneksi, $query_tv);
                    $row_tv = mysqli_fetch_assoc($result_tv);
                    $desired_genre_ids = $row_tv['genre_ids'];

                    $query_tv2 = "SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                                    FROM tb_tv_show
                                    LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                                    WHERE tb_tv_show.genre_ids IN ($desired_genre_ids)
                                    GROUP BY tb_tv_show.tmdb_id
                                    ORDER BY total_kunjungan DESC";

                    $result_tv2 = mysqli_query($koneksi, $query_tv2);
                    if (!$result_tv2) {
                        die("Query failed: " . mysqli_error($koneksi));
                    }
                    while ($row_tv = mysqli_fetch_assoc($result_tv2)) {

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
                                    <a href="dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>" style="color: black;">
                                        <div class="thumbnail-container">
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
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>" style="color: black;">
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

<script>
    function reloadViewCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("viewCount").innerHTML = "<b>" + this.responseText + "x ditonton</b>";
            }
        };
        xhttp.open("GET", "get_view_count.php?id=<?php echo $tv_tmdb_id; ?>", true);
        xhttp.send();
    }

    setInterval(reloadViewCount, 60000);

    document.addEventListener("DOMContentLoaded", function () {
        var tmdb_id = < ? php echo $tv_tmdb_id; ?>;
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "<?php echo $base_url; ?>/config/visit.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("berkunjung=" + tmdb_id);
    });

    var inputField = document.getElementById("komentar");
    var kirimBtn = document.getElementById("kirimBtn");
    var batalBtn = document.getElementById("batalBtn");

    inputField.addEventListener("focus", function () {
        kirimBtn.style.display = "inline-block";
        batalBtn.style.display = "inline-block";
    });

    batalBtn.addEventListener("click", function () {
        kirimBtn.style.display = "none";
        batalBtn.style.display = "none";
    });

    var descriptionElement = document.getElementById("filmDescription");
    var showMoreLink = document.getElementById("showMoreLink");
    var toggleState = false;
    var limitedDescription = "<?php echo $limited_description; ?>";
    var fullDescription = "<?php echo $full_description; ?>";

    function toggleDescription() {
        toggleState = !toggleState;
        if (toggleState) {
            descriptionElement.innerHTML = fullDescription;
            showMoreLink.innerHTML = "Sedikit";
        } else {
            descriptionElement.innerHTML = limitedDescription;
            showMoreLink.innerHTML = "Lebih Banyak";
        }
    }
</script>