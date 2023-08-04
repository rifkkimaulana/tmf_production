<div class="card-flat">
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
    ?>

    <div class="card-body">
        <form action="#" method="GET">
            <div class="form-group">
                <input type="hidden" class="form-control" id="page" name="page" value="dashboard">
                <input type="text" class="form-control" id="search" name="search" placeholder="Search Film & TV Show"
                    value="<?php echo $_GET['search']; ?>" required>
            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" id="tipe" name="tipe">
                    <option value="">Semua Tipe</option>
                    <option value="film">Film</option>
                    <option value="tvshow">TV Show</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" id="genre" name="genre">
                    <option value="">Semua Genre</option>
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