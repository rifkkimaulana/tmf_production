<?php
// Select Negara
$q_negara = "SELECT * FROM tb_negara";
$r_negara = mysqli_query($koneksi, $q_negara);
$negara = array();

while ($row_negara = mysqli_fetch_assoc($r_negara)) {
    $negara[] = $row_negara['nama_negara'];
}

// Select Genre 
$q_genre = "SELECT * FROM tb_genre";
$r_genre = mysqli_query($koneksi, $q_genre);
$genres = array();

while ($row_film = mysqli_fetch_assoc($r_genre)) {
    $genres[] = $row_film['nama_genre'];
}

// Select Tahun
$q_tahun = "SELECT * FROM tb_tahun";
$r_tahun = mysqli_query($koneksi, $q_tahun);
$tahun = array();

while ($row_tahun = mysqli_fetch_assoc($r_tahun)) {
    $tahun[] = $row_tahun['tahun_rilis'];
}
// Select Kualitas
$q_kualitas = "SELECT * FROM tb_kualitas";
$r_kualitas = mysqli_query($koneksi, $q_kualitas);
$kualitas = array();

while ($row_kualitas = mysqli_fetch_assoc($r_kualitas)) {
    $kualitas[] = $row_kualitas['nama_kualitas'];
}

$query_film = "SELECT thumbnail, judul_film, tmdb_id, genre_ids FROM tb_film";
$result_film = mysqli_query($koneksi, $query_film);

?>
<div class="col-md-3 tmf_production">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-flat">
                <div class="card-body">
                    <form action="#" method="GET">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="page" name="page" value="dashboard">
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                placeholder="Search Film & TV Show">
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="tipe" name="tipe">
                                <option value="all">Semua Tipe</option>
                                <option value="film">Film</option>
                                <option value="tvShow">TV Show</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="genre" name="genre">
                                <option value="all_genre">Semua Genre</option>
                                <?php foreach ($genres as $genres) { ?>
                                    <?php
                                    $slug_genre = strtolower(str_replace(' ', '-', $genres));
                                    ?>
                                    <option value=" <?php echo $slug_genre; ?>">
                                        <?php echo $genres; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="tahun" name="tahun">
                                <option value="all_tahun">
                                    Semua Tahun
                                </option>
                                <?php foreach ($tahun as $tahun) { ?>
                                    <?php
                                    $slug_tahun = strtolower(str_replace(' ', '-', $tahun));
                                    ?>
                                    <option value=" <?php echo $slug_tahun; ?>">
                                        <?php echo $tahun; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="negara" name="negara">
                                <option value="all_negara">
                                    Semua Negara
                                </option>
                                <?php foreach ($negara as $negara) { ?>
                                    <?php
                                    $slug_negara = strtolower(str_replace(' ', '-', $negara));
                                    ?>
                                    <option value=" <?php echo $slug_negara; ?>">
                                        <?php echo $negara; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" id="kualitas" name="kualitas">
                                <option value="all_kualitas">
                                    Semua Kualitas
                                </option>
                                <?php foreach ($kualitas as $kualitas) { ?>
                                    <?php
                                    $slug_kualitas = strtolower(str_replace(' ', '-', $kualitas));
                                    ?>
                                    <option value=" <?php echo $slug_kualitas; ?>">
                                        <?php echo $kualitas; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="float-right">
                        <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="card-flat">
                <div class="card-header">
                    <h5 class="card-title m-0">MOST VIEW MOVIES</h5>
                </div>
                <div class="card-body" style="max-height: 1000px; overflow-y: auto;">
                    <?php
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
                                        <?php if (!empty($row_film['thumbnail'])) { ?>
                                            <img class="img-fluid rounded img-android img-poster img-poster-android-landscape"
                                                src="gambar/film/<?php echo $row_film['thumbnail']; ?>"
                                                alt="<?php echo $row_film['judul_film']; ?>">
                                        <?php } else {
                                            $tmdb_id = $row_film['tmdb_id'];
                                            $query_tmdb = "SELECT url_poster FROM tb_tmdb WHERE id = '$tmdb_id'";
                                            $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                            $row_tmdb = mysqli_fetch_assoc($result_tmdb);
                                            $url_poster = $row_tmdb['url_poster'];
                                            ?>
                                            <img class="img-fluid rounded img-android img-poster img-poster-android-landscape" src="<?php echo $url_poster; ?>"
                                                alt="<?php echo $row_film['judul_film']; ?>">
                                        <?php } ?>
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