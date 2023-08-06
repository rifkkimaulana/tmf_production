<?php
$tmdb_id = $_GET['id'];

$query_film = "SELECT * FROM tb_film WHERE tmdb_id = '$tmdb_id'";
$result_film = mysqli_query($koneksi, $query_film);
$row_film = mysqli_fetch_assoc($result_film);
$link = $row_film['link_trailer'];
$id_player = $row_film['player_id'];
$id_download = $row_film['download_id'];

$query_tmdb = "SELECT link_trailer FROM tb_tmdb WHERE id = '$tmdb_id'";
$result_tmdb = mysqli_query($koneksi, $query_tmdb);
$row_tmdb = mysqli_fetch_assoc($result_tmdb);
$judul_tmdb = $row_tmdb['judul'];
$tanggal_rilis = date("d F Y", strtotime($row_tmdb['tanggal_rilis']));
$waktu_jalan = formatDuration($row_tmdb['waktu_jalan']);
$anggaran = formatCurrency($row_tmdb['anggaran']);
$pendapatan = formatCurrency($row_tmdb['pendapatan']);

$query_play = "SELECT * FROM tb_player WHERE id = '$id_player'";
$result_play = mysqli_query($koneksi, $query_play);
$row_play = mysqli_fetch_assoc($result_play);

$query_jumlah_komentar = "SELECT COUNT(*) as total_komentar FROM tb_komentar WHERE tmdb_id = ?";
$stmt = $koneksi->prepare($query_jumlah_komentar);
$stmt->bind_param("i", $tmdb_id);
$stmt->execute();
$result = $stmt->get_result();
$row_jumlah_komentar = $result->fetch_assoc();
$total_komentar = $row_jumlah_komentar['total_komentar'];

$genre_ids = explode(",", $row_film['genre_ids']);
$genres = array();
foreach ($genre_ids as $genre_id) {
    $query_genre = "SELECT nama_genre FROM tb_genre WHERE id = '$genre_id'";
    $result_genre = mysqli_query($koneksi, $query_genre);
    $row_genre = mysqli_fetch_assoc($result_genre);
    $genres[] = $row_genre['nama_genre'];
}

$jaringan_ids = explode(",", $row_film['jaringan_ids']);
$jaringan = array();
foreach ($jaringan_ids as $jaringan_id) {
    $query_jaringan = "SELECT nama_jaringan FROM tb_jaringan WHERE id = '$jaringan_id'";
    $result_jaringan = mysqli_query($koneksi, $query_jaringan);
    $row_jaringan = mysqli_fetch_assoc($result_jaringan);
    $jaringan[] = $row_jaringan['nama_jaringan'];
}

$kualitas_ids = explode(",", $row_film['kualitas_ids']);
$kualitas = array();
foreach ($kualitas_ids as $kualitas_id) {
    $query_kualitas = "SELECT nama_kualitas FROM tb_kualitas WHERE id = '$kualitas_id'";
    $result_kualitas = mysqli_query($koneksi, $query_kualitas);
    $row_kualitas = mysqli_fetch_assoc($result_kualitas);
    $kualitas[] = $row_kualitas['nama_kualitas'];
}

$negara_ids = explode(",", $row_film['negara_ids']);
$negara = array();
foreach ($negara_ids as $negara_id) {
    $query_negara = "SELECT nama_negara FROM tb_negara WHERE id = '$negara_id'";
    $result_negara = mysqli_query($koneksi, $query_negara);
    $row_negara = mysqli_fetch_assoc($result_negara);
    $negara[] = $row_negara['nama_negara'];
}

$pemain_ids = explode(",", $row_film['pemain_ids']);
$pemain = array();
foreach ($pemain_ids as $pemain_id) {
    $query_pemain = "SELECT nama_pemain FROM tb_pemain WHERE id = '$pemain_id'";
    $result_pemain = mysqli_query($koneksi, $query_pemain);
    $row_pemain = mysqli_fetch_assoc($result_pemain);
    $pemain[] = $row_pemain['nama_pemain'];
}
?>
<div class="col-md-9 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <div class="card tmf_shadow bg-black">
                <div class="embed-responsive embed-responsive-16by9">
                    <?php
                    $playValue = isset($_GET['play']) ? $_GET['play'] : '';

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

            <div class="card-flat">
                <hr>
                <b>
                    Judul Movies:
                </b>
                <a href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id; ?>">
                    <?php echo $judul_tmdb; ?>
                </a>
                <?php
                if (empty($row_film['genres'])) { ?>
                    <hr>
                    <b>Genre:</b>
                    <?php foreach ($genres as $genres) { ?>
                        <a href="dashboard.php?page=genre&f=<?php echo urlencode($genres); ?>">
                            <?php echo $genres . ", "; ?>
                        </a>
                        <?php
                    }
                }
                if (empty($row_film['negara_ids'])) {
                } else { ?>
                    <hr>
                    <b>Negara :</b>
                    <?php foreach ($negara as $negara) { ?>
                        <a href="dashboard.php?page=negara&f=<?php echo urlencode($negara); ?>">
                            <?php echo $negara . ", "; ?>
                        </a>

                        <?php
                    }
                }
                $bahasa = $row_tmdb['bahasa'];
                if (empty($anggaran)) {
                } else { ?>
                    <hr>
                    <a><b>Bahasa:</b>
                        <?php echo $bahasa; ?>
                    </a>
                <?php }
                $tagline = $row_tmdb['tagline'];
                if (empty($tagline)) {
                } else { ?>
                    <hr>
                    <a><b>Tagline:</b>
                        <?php echo $tagline; ?>
                    </a>
                <?php }
                $rating_mpaa = $row_tmdb['rating_mpaa'];
                if (empty($rating_mpaa)) {
                } else { ?>
                    <hr>
                    <a><b>Rating MPAA:</b>
                        <?php echo $rating_mpaa ?>
                    </a>
                <?php }
                if (empty($tanggal_rilis)) {
                } else { ?>
                    <hr>
                    <a><b>Tanggal Rilis:</b>
                        <?php echo $tanggal_rilis; ?>
                    </a>
                <?php }
                $waktu_jalan = formatDuration($row_tmdb['waktu_jalan']);
                $waktu_jalan_r = $row_tmdb['waktu_jalan'];
                if (empty($waktu_jalan_r)) {
                } else { ?>
                    <hr>
                    <a><b>Durasi:</b>
                        <?php echo $waktu_jalan; ?>
                    </a>
                <?php }
                $rating1 = $row_tmdb['rating1'];
                if (empty($rating1)) {
                } else { ?>
                    <hr>
                    <a><b>Rating TMDB:</b>
                        <?php echo $rating1 . " dari " . $row_tmdb['rating2']; ?>
                    </a>
                <?php }
                $anggaran_r = $row_tmdb['anggaran'];
                if (empty($anggaran_r)) {
                } else { ?>
                    <hr>
                    <a><b>Anggaran:</b>
                        <?php echo $anggaran; ?>
                    </a>
                <?php }
                $pendapatan_r = $row_tmdb['pendapatan'];
                if (empty($pendapatan_r)) {
                } else { ?>
                    <hr>
                    <a><b>Pendapatan:</b>
                        <?php echo $pendapatan; ?>
                    </a>
                    <?php
                }
                $imdb_id = $row_tmdb['imdb_id'];
                if (empty($imdb_id)) {
                } else { ?>
                    <hr>
                    <b>ID IMDB:</b>
                    <a href="<?php echo $safelink . "https://www.imdb.com/title/" . $row_tmdb['imdb_id']; ?>"
                        target="_blank">
                        <?php echo $imdb_id; ?>
                    </a>
                <?php }
                if (empty($select_id_dbtmdb)) {
                } else { ?>
                    <hr>
                    <b>ID TMDB:</b>
                    <a href="<?php echo $safelink . "https://www.themoviedb.org/tv/" . $row_tmdb['tmdb_id']; ?>"
                        target="_blank">
                        <?php echo $select_id_dbtmdb ?> </a>
                    <hr>
                    <a><b>Jumlah Episode:</b>
                        <?php echo $row_tmdb['jumlah_episode']; ?>
                    </a>
                <?php }
                if (empty($row_tv['kualitas_ids'])) {
                } else { ?>
                    <hr>
                    <b>Kualitas :</b>
                    <?php foreach ($kualitas as $kualitas) { ?>
                        <a href="dashboard.php?page=kualitas&f=<?php echo urlencode($kualitas); ?>">
                            <?php echo $kualitas . ", "; ?>
                        </a>

                        <?php
                    }
                }
                if (empty($row_tv['jaringan_ids'])) {
                } else { ?>
                    <hr>
                    <b>Network :</b>
                    <?php foreach ($jaringan as $jaringan) { ?>
                        <a href="dashboard.php?page=network&f=<?php echo urlencode($jaringan); ?>">
                            <?php echo $jaringan . ", "; ?>
                        </a>

                        <?php
                    }
                }
                if (empty($row_tv['pemain_ids'])) {
                } else { ?>
                    <hr>
                    <b>Pemain & Crew :</b>
                    <?php foreach ($pemain as $pemain) { ?>
                        <a href="dashboard.php?page=pemain&f=<?php echo urlencode($pemain); ?>">
                            <?php echo $pemain . ", "; ?>
                        </a>

                        <?php
                    }
                }
                ?>
            </div>

            <div class="card-flat comment-form" style="margin-bottom: 5px;">
                </br>
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