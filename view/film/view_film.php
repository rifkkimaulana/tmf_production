<?php
include 'config/koneksi.php';

if (isset($_GET['id'])) {
    $filmId = $_GET['id'];
} else {
    exit("Error: Film ID not found in URL.");
}

$query_film = "SELECT * FROM tb_film WHERE tmdb_id = '$filmId'";
$result_film = mysqli_query($koneksi, $query_film);
$row_film = mysqli_fetch_assoc($result_film);

if (!$row_film) {
    exit("Error: Film not found in database.");
}

$tmdb_id = $row_film['tmdb_id'];
$query_tmdb = "SELECT link_trailer FROM tb_tmdb WHERE id = '$tmdb_id'";
$result_tmdb = mysqli_query($koneksi, $query_tmdb);
$row_tmdb = mysqli_fetch_assoc($result_tmdb);

$link = !empty($row_tmdb['link_trailer']) ? $row_tmdb['link_trailer'] : $row_film['link_trailer'];

$id_player = $row_film['player_id'];
$id_download = $row_film['download_id'];

?>

<div class="col-md-9 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <div class="card tmf_shadow bg-black">
                <div class="embed-responsive embed-responsive-16by9">
                    <?php
                    include 'config/koneksi.php';
                    $playValue = isset($_GET['play']) ? $_GET['play'] : '';

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
                    ?>
                    <?php
                    if (empty($link)) {
                        $link = $row_play['link1'];
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
                            <a href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=1"; ?>"
                                class="btn btn-sm btn-dark">Lewati Trailer</a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <script>
                var iframe = document.querySelector("iframe");
                var lewatiNotification = document.querySelector(".lewati-notification");

                // Tampilkan notifikasi lewati setelah 5 detik
                setTimeout(function () {
                    lewatiNotification.style.display = "block";
                }, 5000);

                // Tambahkan event click untuk tombol "Lewati"
                lewatiNotification.querySelector("a").addEventListener("click", function (event) {
                    event.preventDefault();
                    var link_film = this.getAttribute("href");
                    iframe.remove(); // Hapus iframe trailer
                    window.location.href = link_film; // Menuju ke link film
                });
            </script>

            <div class="card-flat">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal"
                        data-target="#modalNotifikasi">
                        INFO PLAYER
                    </button>
                    <div class="float-right">
                        <a href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id; ?>"><button
                                type="button" class="btn btn-sm btn-secondary">Trailer</button></a>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Play
                            <span class="sr-only">Play</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=1"; ?>">Server
                                1</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=2"; ?>">Server
                                2</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=3"; ?>">Server
                                3</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=4"; ?>">Server
                                4</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=5"; ?>">Server
                                5</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=6"; ?>">Server
                                6</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=7"; ?>">Server
                                7</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=8"; ?>">Server
                                8</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=9"; ?>">Server
                                9</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=10"; ?>">Server
                                10</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=11"; ?>">Server
                                11</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=12"; ?>">Server
                                12</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=13"; ?>">Server
                                13</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=14"; ?>">Server
                                14</a>
                            <a class="dropdown-item"
                                href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id . "&play=15"; ?>">Server
                                15</a>
                        </div>
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal"
                            data-target="#modalDownload">Unduh</button>
                    </div>
                </div>
                <div class="modal fade" id="modalNotifikasi" tabindex="-1" role="dialog"
                    aria-labelledby="modalNotifikasiLabel" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <?php if (empty($judul)) {
                                    $judul = 'tidak ada informasi';
                                } ?>
                                <?php echo $judul; ?>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-bell mr-3" style="font-size: 24px;"></i>
                                    <div>
                                        <p>
                                            Keterangan:</br>
                                            <?php echo $row_play['pemberitahuan_player']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal List Download -->
                <div class="modal fade" id="modalDownload" tabindex="-1" role="dialog"
                    aria-labelledby="modalDownloadLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDownloadLabel">Pilih File untuk Diunduh</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                $query_download = "SELECT * FROM tb_download WHERE id = '$id_download'";
                                $result_download = mysqli_query($koneksi, $query_download);
                                $row_download = mysqli_fetch_assoc($result_download);

                                $judul_null = "null";
                                $link_null = "null";

                                ?>
                                <ul class="list-group" style="height: 300px; overflow: auto;">
                                    <li class="list-group-item">Server 1 :
                                        <?php
                                        if (!empty($row_download['judul1']) && !empty($row_download['link1'])) {
                                            echo $row_download['judul1'];
                                            echo '<a href="' . $row_download['link1'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 2 :
                                        <?php
                                        if (!empty($row_download['judul2']) && !empty($row_download['link2'])) {
                                            echo $row_download['judul2'];
                                            echo '<a href="' . $row_download['link2'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 3 :
                                        <?php
                                        if (!empty($row_download['judul3']) && !empty($row_download['link3'])) {
                                            echo $row_download['judul3'];
                                            echo '<a href="' . $row_download['link3'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 4 :
                                        <?php
                                        if (!empty($row_download['judul4']) && !empty($row_download['link4'])) {
                                            echo $row_download['judul4'];
                                            echo '<a href="' . $row_download['link4'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 5 :
                                        <?php
                                        if (!empty($row_download['judul5']) && !empty($row_download['link5'])) {
                                            echo $row_download['judul5'];
                                            echo '<a href="' . $row_download['link5'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 6 :
                                        <?php
                                        if (!empty($row_download['judul6']) && !empty($row_download['link6'])) {
                                            echo $row_download['judul6'];
                                            echo '<a href="' . $row_download['link6'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 7 :
                                        <?php
                                        if (!empty($row_download['judul7']) && !empty($row_download['link7'])) {
                                            echo $row_download['judul7'];
                                            echo '<a href="' . $row_download['link7'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 8 :
                                        <?php
                                        if (!empty($row_download['judul8']) && !empty($row_download['link8'])) {
                                            echo $row_download['judul8'];
                                            echo '<a href="' . $row_download['link8'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 9 :
                                        <?php
                                        if (!empty($row_download['judul9']) && !empty($row_download['link9'])) {
                                            echo $row_download['judul9'];
                                            echo '<a href="' . $row_download['link9'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 10 :
                                        <?php
                                        if (!empty($row_download['judul10']) && !empty($row_download['link10'])) {
                                            echo $row_download['judul10'];
                                            echo '<a href="' . $row_download['link10'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 11 :
                                        <?php
                                        if (!empty($row_download['judul11']) && !empty($row_download['link11'])) {
                                            echo $row_download['judul11'];
                                            echo '<a href="' . $row_download['link11'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 12 :
                                        <?php
                                        if (!empty($row_download['judul12']) && !empty($row_download['link12'])) {
                                            echo $row_download['judul12'];
                                            echo '<a href="' . $row_download['link12'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 13 :
                                        <?php
                                        if (!empty($row_download['judul13']) && !empty($row_download['link13'])) {
                                            echo $row_download['judul13'];
                                            echo '<a href="' . $row_download['link13'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 14 :
                                        <?php
                                        if (!empty($row_download['judul14']) && !empty($row_download['link14'])) {
                                            echo $row_download['judul14'];
                                            echo '<a href="' . $row_download['link14'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">Server 15 :
                                        <?php
                                        if (!empty($row_download['judul15']) && !empty($row_download['link15'])) {
                                            echo $row_download['judul15'];
                                            echo '<a href="' . $row_download['link15'] . '" class="float-right">Unduh</a>';
                                        } else {
                                            echo $judul_null;
                                            echo '<a href="' . $link_null . '" class="float-right">Unduh</a>';
                                        }
                                        ?>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="tmf_production">
                    <b>
                        <?php echo $row_film['judul_film']; ?>
                    </b>
                </h4>
                <?php
                $description = $row_film['deskripsi'];
                $words = explode(' ', $description);
                $limited_description = implode(' ', array_slice($words, 0, 20));
                $full_description = $description;

                $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$filmId'";
                $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
                $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);

                $total_kunjungan = $row_kunjungan['total_kunjungan'];

                $query_film = "SELECT * FROM tb_film WHERE tmdb_id = '$filmId'";
                $result_film = mysqli_query($koneksi, $query_film);
                $row_film = mysqli_fetch_assoc($result_film);

                if (!$row_film) {
                    exit("Error: Film not found in database.");
                }

                // Calculate the time duration in seconds between the created_at timestamp and the current time
                $created_at_timestamp = strtotime($row_film['created_at']);
                $current_timestamp = time();
                $time_duration_seconds = $current_timestamp - $created_at_timestamp;

                // Convert the time duration to a human-readable format (hours, minutes, and seconds)
                $time_duration_formatted = gmdate("H:i:s", $time_duration_seconds);

                // Function to convert timestamp to "time since upload" format
                function timeSinceUpload($timestamp)
                {
                    $timeDiff = time() - strtotime($timestamp);

                    $intervals = array(
                        1 => array('tahun', 31556952),
                        $timeDiff < 31556952 => array('bulan', 2629746),
                        $timeDiff < 2629746 => array('minggu', 604800),
                        $timeDiff < 604800 => array('hari', 86400),
                        $timeDiff < 86400 => array('jam', 3600),
                        $timeDiff < 3600 => array('menit', 60),
                        $timeDiff < 60 => array('detik', 1)
                    );

                    foreach ($intervals as $interval => $value) {
                        if ($timeDiff >= $value[1]) {
                            $timeUnits = floor($timeDiff / $value[1]);
                            return $timeUnits . ' ' . $value[0] . ' yang lalu';
                        }
                    }
                }

                // Calculate the total number of views for the movie
                $query_kunjungan = "SELECT SUM(jumlah_lihat) AS total_kunjungan FROM tb_view WHERE tmdb_id = '$filmId'";
                $result_kunjungan = mysqli_query($koneksi, $query_kunjungan);
                $row_kunjungan = mysqli_fetch_assoc($result_kunjungan);
                $total_kunjungan = $row_kunjungan['total_kunjungan'];
                ?>

                <a> <b>
                        <?php echo $total_kunjungan; ?>x ditonton <b>.</b>
                        <?php echo timeSinceUpload($row_film['created_at']); ?>
                    </b></a>

                <p class="card-text" id="filmDescription">
                    <?php echo $limited_description; ?>
                </p>


                <?php if (count($words) > 20) { ?>
                    <a class="card-link tmf_teks" id="showMoreLink" onclick="toggleDescription()">Lebih Banyak</a>
                <?php } ?>


            </div>

            <?php
            $tmdb_id = $row_film['tmdb_id'];
            $query_tmdb = "SELECT * FROM tb_tmdb WHERE id = '$tmdb_id'";
            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
            $row_tmdb = mysqli_fetch_assoc($result_tmdb);

            // Ambil nama-nama genre dari tabel tb_genre berdasarkan genre_ids
            $genre_ids = explode(",", $row_film['genre_ids']);
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


            <div class="card-flat">
                </br>
                <hr>
                <b>
                    Judul Film:
                </b>
                <a href="<?php echo $base_url . "/dashboard.php?page=movies&id=" . $tmdb_id; ?>">
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
                <a href="<?php echo "https://www.imdb.com/title/" . $row_tmdb['imdb_id']; ?>" target="_blank">
                    <?php echo $row_tmdb['imdb_id']; ?>
                </a>
                <hr>
                <b>ID TMDB:</b>
                <a href="<?php echo "https://www.themoviedb.org/movie/" . $row_tmdb['tmdb_id']; ?>" target="_blank">
                    <?php echo $row_tmdb['tmdb_id']; ?> </a>
                <hr>
                <a><b>Jumlah Episode:</b>
                    <?php echo $row_tmdb['jumlah_episode']; ?>
                </a>
            </div>

            <script>
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
                    $tmdb_id = $row_film['tmdb_id'];
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

            <div class="card-flat">
                </br>
                <?php
                include 'config/koneksi.php';
                $tmdb_id = $row_film['tmdb_id'];
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
        </div>
    </div>
</div>

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


                    $query_film = "SELECT * FROM tb_film WHERE tmdb_id = '$filmId'";
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
                        if (!empty($row_film['judul_film'])) {
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
                                <?php $tmdb_id = $row_film['tmdb_id']; ?>
                                <div class="col-lg-4 col-sm-6 col-6 tmf_teks">
                                    <a href="dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>" style="color: black;">
                                        <div class="thumbnail-container">
                                            <?php if (!empty($row_film['thumbnail'])) { ?>
                                                <img class="img-fluid rounded img-landscape-zoom"
                                                    src="gambar/film/<?php echo $row_film['thumbnail']; ?>"
                                                    alt="<?php echo $row_film['judul_film']; ?>">
                                            <?php } else {
                                                $tmdb_id = $row_film['tmdb_id'];
                                                $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                                $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                                $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                                $url_poster = $row_tmdb['url_poster'];
                                                ?>
                                                <img class="img-fluid rounded img-landscape-zoom" src="<?php echo $url_poster; ?>"
                                                    alt="<?php echo $row_film['judul_film']; ?>">
                                            <?php } ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-sm-6 col-6">
                                    <a href="dashboard.php?page=movies&id=<?php echo $tmdb_id; ?>" style="color: black;">
                                        <strong>
                                            <?php echo $row_film['judul_film']; ?>
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
    // Function to reload the view count
    function reloadViewCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Update the content of the view count element
                document.getElementById("viewCount").innerHTML = "<b>" + this.responseText + "x ditonton</b>";
            }
        };
        xhttp.open("GET", "get_view_count.php?id=<?php echo $filmId; ?>", true);
        xhttp.send();
    }

    setInterval(reloadViewCount, 60000);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var tmdb_id = <?php echo $filmId; ?>;
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "<?php echo $base_url; ?>/kunjungan.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("berkunjung=" + tmdb_id);
    });
</script>

<script>
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
</script>