<?php
// Select Negara
$q_negara = "SELECT * FROM tb_negara";
$r_negara = mysqli_query($koneksi, $q_negara);
$negara = array();

while ($row_negara = mysqli_fetch_assoc($r_negara)) {
    $negara[] = $row_negara['nama_negara'];
}

if (empty($negara)) {
    exit();
}

// Select Genre 
$q_genre = "SELECT * FROM tb_genre";
$r_genre = mysqli_query($koneksi, $q_genre);
$genres = array();

while ($row_film = mysqli_fetch_assoc($r_genre)) {
    $genres[] = $row_film['nama_genre'];
}
if (empty($genres)) {
    exit();
}

// Select Tahun
$q_tahun = "SELECT * FROM tb_tahun";
$r_tahun = mysqli_query($koneksi, $q_tahun);
$tahun = array();

while ($row_tahun = mysqli_fetch_assoc($r_tahun)) {
    $tahun[] = $row_tahun['tahun_rilis'];
}
if (empty($tahun)) {
    exit();
}
// Select Kualitas
$q_kualitas = "SELECT * FROM tb_kualitas";
$r_kualitas = mysqli_query($koneksi, $q_kualitas);
$kualitas = array();

while ($row_kualitas = mysqli_fetch_assoc($r_kualitas)) {
    $kualitas[] = $row_kualitas['nama_kualitas'];
}
if (empty($kualitas)) {
    exit();
}

?>
<div class="col-md-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Search Movie</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                placeholder="Judul film">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="tipe" name="tipe">
                                <option value="all">Semua Tipe</option>
                                <option value="film">Film</option>
                                <option value="tvShow">TV Show</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="genre" name="genre">
                                <option value="all_genre">Semua Genre</option>
                                <?php foreach ($genres as $genres) { ?>
                                    <?php
                                    $slug_negara = strtolower(str_replace(' ', '-', $genres));
                                    ?>
                                    <option value=" <?php echo $genres; ?>">
                                        <?php echo $genres; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="tahun" name="tahun">
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
                            <select class="form-control" id="negara" name="negara">
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
                            <select class="form-control" id="kualitas" name="kualitas">
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
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">MOST VIEW MOVIES</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg"
                                alt="DR. Doctor Romantic Season 1">
                        </div>
                        <div class="col-md-8">
                            <strong>DR. Doctor Romantic Season 1</strong><br>
                            <a style="font-size: 14px;" href="#">Crime, Drama, Kejahatan,
                                Mystery,
                                Korea
                            </a><br>
                            <p style="font-size: 14px;"><i class="fas fa-eye"></i> 144 </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid rounded" src="assets/dist/img/photo4.jpg"
                                alt="Partners for Justice (2018) Investigation Team">
                        </div>
                        <div class="col-md-8">
                            <strong>Partners for Justice (2018) Investigation
                                Team</strong><br>
                            <a style="font-size: 14px;" href="">Crime, Drama, Kejahatan,
                                Mystery,
                                Korea</a><br>
                            <p style="font-size: 14px;"><i class="fas fa-eye"></i> 144 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>