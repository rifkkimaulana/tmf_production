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

$link_trailer = !empty($row_tmdb['link_trailer']) ? $row_tmdb['link_trailer'] : $row_film['link_trailer'];


?>

<div class="col-md-9 tmf_production">
    <div class="row">

        <div class="col-lg-12">

            <div class="card card-primary tmf_shadow">

                <div class="embed-responsive embed-responsive-16by9">
                    <?php
                    if (strpos($link_trailer, 'v=') !== false) {
                        $video_id = substr($link_trailer, strpos($link_trailer, 'v=') + 2);
                        $link_trailer = "https://www.youtube.com/embed/" . $video_id . "?autoplay=1";
                    } else {
                        exit("Error: Invalid YouTube URL.");
                    }
                    ?>
                    <iframe src="<?php echo $link_trailer; ?>" title="TMF PRODUCTION PLAYER" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="card-flat">
                <h4>
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
            $nama_genre = implode(", ", $genres);

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
                <a>
                    <b>
                        Judul Film:
                    </b>
                    <?php echo $row_tmdb['judul']; ?>
                </a>
                <hr>
                <a><b>Genre:</b>
                    <?php echo $nama_genre; ?>
                </a>
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
                <a><b>ID IMDB:</b>
                    <?php echo $row_tmdb['imdb_id']; ?>
                </a>
                <hr>
                <a><b>ID TMDB:</b>
                    <?php echo $row_tmdb['tmdb_id']; ?>
                </a>
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

            <!-- Comment Form (Left Side) -->

            <div class="card-flat comment-form">
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
                    <?php echo $total_komentar; ?> Komentar
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
                        <div class="form-group">
                            <input class="form-control" id="komentar" name="komentar" rows="3" required></input>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-rounded float-right submit-btn"
                            id="kirimBtn" style="display: none;">Kirim</button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded float-right submit-btn"
                            id="batalBtn" style="display: none;">Batal</button>
                    <?php } else { ?>
                        <div class="form-group">
                            <input class="form-control" id="komentar" name="komentar" rows="3"
                                placeholder="Silahkan login untuk menambahkan komentar!" disabled></input>
                        </div>
                    <?php } ?>
                </form>
            </div>

            <div class="card-flat">
                </br></br>
                <?php
                include 'config/koneksi.php';
                $query_komentar = "SELECT * FROM tb_komentar ORDER BY id DESC";
                $result_komentar = mysqli_query($koneksi, $query_komentar);
                ?>
                <?php while ($row_komentar = mysqli_fetch_assoc($result_komentar)) { ?>
                    <div class="media">
                        <?php
                        // Ambil foto profil pengguna dari tabel tb_users berdasarkan nama pengguna (nama yang mengirim komentar)
                        $namaUser = $row_komentar['nama'];
                        $query_user = "SELECT logo_user FROM tb_users WHERE user_nama = '$namaUser'";
                        $result_user = mysqli_query($koneksi, $query_user);
                        $row_user = mysqli_fetch_assoc($result_user);
                        $fotoProfil = $row_user['logo_user'];

                        // Tampilkan foto profil jika ada, jika tidak, tampilkan foto default
                        if (!empty($fotoProfil)) {
                            $fotoUrl = $base_url . '/gambar/user/' . $fotoProfil;
                        } else {
                            $fotoUrl = 'https://www.pngkey.com/png/detail/202-2024792_user-profile-icon-png-download-fa-user-circle.png';
                        }
                        ?>
                        <img src="<?php echo $fotoUrl; ?>" class="mr-3" alt="User Avatar"
                            style="width: 30px; height: 30px;">
                        <div class="media-body">
                            <form action="view/proses_hapus_komentar.php" method="POST">
                                <h6 class="mt-0">
                                    <b>
                                        <?php echo $row_komentar['nama']; ?>
                                    </b> .
                                    <?php echo timeSinceUpload($row_komentar['waktu_post']); ?> .
                                    <?php
                                    if (isset($_SESSION['nama']) && $_SESSION['nama'] === $row_komentar['nama']) {
                                        ?>

                                        <input type="hidden" name="komentar_id" value="<?php echo $row_komentar['id']; ?>">
                                        <a href="#" class="text-danger"
                                            onclick="if(confirm('Apakah Anda yakin ingin menghapus komentar ini?')) { this.parentNode.parentNode.submit(); } event.returnValue = false;">Hapus</a>

                                        <?php
                                    }
                                    ?>
                                </h6>
                            </form>

                            <?php echo $row_komentar['komentar']; ?>
                        </div>
                    </div>
                    <hr>
                <?php } ?>
            </div>



        </div>
    </div>

</div>

<?php include 'view/widgets.php'; ?>


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

    // Reload the view count every minute (60,000 milliseconds)
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