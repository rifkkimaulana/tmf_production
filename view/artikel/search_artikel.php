<?php
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
            <script async="async" data-cfasync="false"
                src="//pl20262457.highcpmrevenuegate.com/b0ece0f17ce43fac83128654df865fe7/invoke.js"></script>
            <div id="container-b0ece0f17ce43fac83128654df865fe7"></div>
        </div>
    </div>
    <?php
} ?>