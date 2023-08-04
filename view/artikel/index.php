<div class="col-md-9 tmf_production">
    <?php
    include 'config/koneksi.php';

    if (isset($_GET['judul']) && !empty($_GET['judul'])) {
        $encoded_judul = $_GET['judul'];
        $judul_artikel = urldecode($encoded_judul);

        // Ambil data artikel berdasarkan judul
        $query_artikel = "SELECT * FROM tb_artikel WHERE judul_artikel = '$judul_artikel'";
        $result_artikel = mysqli_query($koneksi, $query_artikel);

        if (mysqli_num_rows($result_artikel) > 0) {
            $row_artikel = mysqli_fetch_assoc($result_artikel);
            $artikel_id = $row_artikel['id'];
            $judul_artikel = $row_artikel['judul_artikel'];
            $isi_artikel = $row_artikel['isi_artikel'];
            $tanggal_artikel = $row_artikel['created_at'];
            $image_path = $row_artikel['thumbnail'];

            $kategori_ids = $row_artikel['kategori_ids'];
            $kategori_ids_array = array_filter(explode(',', $kategori_ids));
            $nama_kategori = array();

            foreach ($kategori_ids_array as $kategori_id) {
                $query_kategori = "SELECT nama_kategori FROM tb_kategori_artikel WHERE id = '$kategori_id'";
                $result_kategori = mysqli_query($koneksi, $query_kategori);
                $row_kategori = mysqli_fetch_assoc($result_kategori);
                $nama_kategori[] = $row_kategori['nama_kategori'];
            }

            $formatted_date = date('d M Y', strtotime($tanggal_artikel));
            ?>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        <b>
                            <?php echo $judul_artikel; ?>
                        </b>
                    </h5>
                </div>
                <?php if (!empty($image_path)) { ?>
                    <div class="container" align-items="middle">
                        <img class="card-img-top img-thumbnail img-fluid mt-3"
                            style="max-width: 100%; max-height: 200px; margin-left: auto;"
                            src="gambar/artikel/<?php echo $image_path; ?>" alt="<?php echo $encoded_judul; ?>">
                    </div>
                <?php } ?>
                <div class="card-body tmf_teks">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2 class="card-title">
                                <b>
                                    <?php echo $judul_artikel; ?>
                                </b>
                            </h2>
                            <small class="text-muted">Dipublikasikan pada
                                <?php echo $formatted_date; ?>
                            </small>
                        </div>
                    </div>
                    <p class="card-text">
                        <?php echo $isi_artikel; ?>
                    </p>
                    <div class="d-flex justify-content-end">
                        <p class="card-text">
                            <small class="text-muted">Kategori:
                                <?php echo implode(', ', $nama_kategori); ?>
                            </small>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Form Komentar-->
            <div class="card-flat comment-form" style="margin-bottom: 5px;">
                </br>
                <?php
                $query_jumlah_komentar = "SELECT COUNT(*) as total_komentar FROM tb_komentar WHERE artikel_id = ?";
                $stmt = $koneksi->prepare($query_jumlah_komentar);
                $stmt->bind_param("i", $artikel_id);
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
                    ?>
                    <?php if (isset($_SESSION['nama'])) { ?>
                        <input type="hidden" name="nama" value="<?php echo $_SESSION['nama']; ?>">
                        <input type="hidden" name="artikel_id" value="<?php echo $artikel_id; ?>">
                        <input type="hidden" name="halaman" value="<?php echo $_GET['page']; ?>">
                        <div class="form-group">
                            <input class="form-control" id="komentar" name="komentar" rows="3" placeholder="Tambahkan komentar"
                                required></input>
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
            <?php if (empty($artikel_id)) {
            } else { ?>
                <div class="card-flat">
                    </br>
                    <?php
                    $query_komentar = "SELECT * FROM tb_komentar WHERE artikel_id = '$artikel_id' ORDER BY id DESC";
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
            <?php } ?>



        <?php } else {
            echo '<div class="alert alert-danger">Artikel tidak ditemukan</div>';
        }
    } else {
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            // Jika terdapat parameter search di URL, lakukan pencarian berdasarkan judul artikel
            $search = $_GET['search'];
            $query_artikel = "SELECT * FROM tb_artikel WHERE judul_artikel LIKE '%$search%' ORDER BY created_at DESC";

            $result_artikel = mysqli_query($koneksi, $query_artikel);

            if (empty($row_artikel)) { ?>
                <div class="card-header mb-3">
                    <h5 class="card-title">Hasil Pencarian Artikel :
                        <b>
                            <?php echo $_GET['search']; ?>
                        </b>
                    </h5>
                </div>
                <?php
            }

            while ($row_artikel = mysqli_fetch_assoc($result_artikel)) {
                $artikel_id = $row_artikel['id'];
                $judul_artikel = $row_artikel['judul_artikel'];
                $isi_artikel = $row_artikel['isi_artikel'];
                $tanggal_artikel = $row_artikel['created_at'];
                $image_path = $row_artikel['thumbnail'];

                $kategori_ids = $row_artikel['kategori_ids'];
                $kategori_ids_array = array_filter(explode(',', $kategori_ids));
                $nama_kategori = array();

                foreach ($kategori_ids_array as $kategori_id) {
                    $query_kategori = "SELECT nama_kategori FROM tb_kategori_artikel WHERE id = '$kategori_id'";
                    $result_kategori = mysqli_query($koneksi, $query_kategori);
                    $row_kategori = mysqli_fetch_assoc($result_kategori);
                    $nama_kategori[] = $row_kategori['nama_kategori'];
                }

                $formatted_date = date('d M Y', strtotime($tanggal_artikel));
                $encoded_judul = urlencode($judul_artikel);
                ?>
                <div class="col-lg-12">

                    <div class="card">
                        <div class="row">
                            <?php if (!empty($image_path)) { ?>
                                <div class="col-md-3 col-sm-3 col-12">
                                    <a href="dashboard.php?page=artikel&judul=<?php echo $encoded_judul; ?>">
                                        <div class="container" align-items="middle">
                                            <img class="card-img-top img-thumbnail img-fluid mt-3"
                                                style="max-width: 100%; max-height: 200px; margin-left: auto;"
                                                src="gambar/artikel/<?php echo $image_path; ?>" alt="<?php echo $encoded_judul; ?>">
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="<?php echo (!empty($image_path)) ? 'col-md-9 col-sm-9 col-12' : 'col-md-12'; ?>">
                                <a href="dashboard.php?page=artikel&judul=<?php echo $encoded_judul; ?>">
                                    <div class="card-body tmf_teks">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="card-title">
                                                    <b>
                                                        <?php echo substr($judul_artikel, 0, 80); ?>
                                                    </b>
                                                </h2>
                                                <small class="text-muted">Dipublikasikan pada
                                                    <?php echo $formatted_date; ?>
                                                </small>
                                            </div>
                                        </div>
                                        <p class="card-text">
                                            <?php echo substr($isi_artikel, 0, 100); ?>
                                        </p>
                                        <div class="d-flex justify-content-end">
                                            <p class="card-text">
                                                <small class="text-muted">Kategori:
                                                    <?php echo implode(', ', $nama_kategori); ?>
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            // Jika tidak ada parameter judul di URL, tampilkan daftar artikel terbaru
            $query_artikel = "SELECT * FROM tb_artikel ORDER BY created_at DESC";
            $result_artikel = mysqli_query($koneksi, $query_artikel);

            while ($row_artikel = mysqli_fetch_assoc($result_artikel)) {
                $artikel_id = $row_artikel['id'];
                $judul_artikel = $row_artikel['judul_artikel'];
                $isi_artikel = $row_artikel['isi_artikel'];
                $tanggal_artikel = $row_artikel['created_at'];
                $image_path = $row_artikel['thumbnail'];

                $kategori_ids = $row_artikel['kategori_ids'];
                $kategori_ids_array = array_filter(explode(',', $kategori_ids));
                $nama_kategori = array();

                foreach ($kategori_ids_array as $kategori_id) {
                    $query_kategori = "SELECT nama_kategori FROM tb_kategori_artikel WHERE id = '$kategori_id'";
                    $result_kategori = mysqli_query($koneksi, $query_kategori);
                    $row_kategori = mysqli_fetch_assoc($result_kategori);
                    $nama_kategori[] = $row_kategori['nama_kategori'];
                }

                $formatted_date = date('d M Y', strtotime($tanggal_artikel));
                $encoded_judul = urlencode($judul_artikel);
                ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <?php if (!empty($image_path)) { ?>
                                <div class="col-md-3 col-sm-3 col-12">
                                    <a href="dashboard.php?page=artikel&judul=<?php echo $encoded_judul; ?>">
                                        <div class="container" align-items="middle">
                                            <img class="card-img-top img-thumbnail img-fluid mt-3"
                                                style="max-width: 100%; max-height: 200px; margin-left: auto;"
                                                src="gambar/artikel/<?php echo $image_path; ?>" alt="<?php echo $encoded_judul; ?>">
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="<?php echo (!empty($image_path)) ? 'col-md-9 col-sm-9 col-12' : 'col-md-12'; ?>">
                                <a href="dashboard.php?page=artikel&judul=<?php echo $encoded_judul; ?>">
                                    <div class="card-body tmf_teks">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="card-title">
                                                    <b>
                                                        <?php echo substr($judul_artikel, 0, 80); ?>
                                                    </b>
                                                </h2>
                                                <small class="text-muted">Dipublikasikan pada
                                                    <?php echo $formatted_date; ?>
                                                </small>
                                            </div>
                                        </div>
                                        <p class="card-text">
                                            <?php echo substr($isi_artikel, 0, 100); ?>
                                        </p>
                                        <div class="d-flex justify-content-end">
                                            <p class="card-text">
                                                <small class="text-muted">Kategori:
                                                    <?php echo implode(', ', $nama_kategori); ?>
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    }
    ?>
</div>

<div class="col-md-3 tmf_production ">
    <div class="card-flat hide-on-small-screen">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-flat">
                    <div class="card-header">
                        <h5 class="card-title m-0">Cari Artikel</h5>
                    </div>
                </div>
                <form action="dashboard.php" method="get">
                    <div class="form-group mt-3">
                        <div class="input-group">
                            <!-- Hidden input untuk menentukan halaman yang akan dituju -->
                            <input type="hidden" name="page" value="artikel">
                            <input type="text" class="form-control" id="judul" name="search"
                                placeholder="Masukkan judul artikel">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
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
?>

<script>
    // Menampilkan dan menyembunyikan button komentar
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
<!-- End Kolom komentar-->