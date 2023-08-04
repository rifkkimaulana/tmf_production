<div class="card-flat">
    <?php
    $q_negara = "SELECT * FROM tb_negara";
    $r_negara = mysqli_query($koneksi, $q_negara);
    $negara = array();

    while ($row_negara = mysqli_fetch_assoc($r_negara)) {
        $negara[] = $row_negara['nama_negara'];
    }

    $q_genre = "SELECT * FROM tb_genre";
    $r_genre = mysqli_query($koneksi, $q_genre);
    $genres = array();

    while ($row_film = mysqli_fetch_assoc($r_genre)) {
        $genres[] = $row_film['nama_genre'];
    }

    $q_tahun = "SELECT * FROM tb_tahun";
    $r_tahun = mysqli_query($koneksi, $q_tahun);
    $tahun = array();

    while ($row_tahun = mysqli_fetch_assoc($r_tahun)) {
        $tahun[] = $row_tahun['tahun_rilis'];
    }

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
                    value="<?php if (empty($_GET['search'])) {
                    } else {
                        echo $_GET['search'];
                    } ?>" required>
            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" id="tipe" name="tipe">
                    <option value="" <?php if (!isset($_GET['tipe']) || $_GET['tipe'] === '')
                        echo 'selected'; ?>>Semua
                        Tipe</option>
                    <option value="film" <?php if (isset($_GET['tipe']) && $_GET['tipe'] === 'film')
                        echo 'selected'; ?>>
                        Film</option>
                    <option value="tvshow" <?php if (isset($_GET['tipe']) && $_GET['tipe'] === 'tvshow')
                        echo 'selected'; ?>>TV Show</option>
                </select>

            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" id="genre" name="genre">
                    <option value="">Semua Genre</option>
                    <?php foreach ($genres as $genre) { ?>
                        <?php
                        $selected = '';
                        if (isset($_GET['genre']) && $_GET['genre'] === $genre) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?php echo $genre; ?>" <?php echo $selected; ?>>
                            <?php echo $genre; ?>
                        </option>
                    <?php } ?>
                </select>

            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" id="tahun" name="tahun">
                    <option value="">Semua Tahun</option>
                    <?php foreach ($tahun as $tahun_item) { ?>
                        <?php
                        $selected = '';
                        if (isset($_GET['tahun']) && $_GET['tahun'] === $tahun_item) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?php echo $tahun_item; ?>" <?php echo $selected; ?>>
                            <?php echo $tahun_item; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" id="negara" name="negara">
                    <option value="">Semua Negara</option>
                    <?php foreach ($negara as $negara_item) { ?>
                        <?php
                        $selected = '';
                        if (isset($_GET['negara']) && $_GET['negara'] === $negara_item) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?php echo $negara_item; ?>" <?php echo $selected; ?>>
                            <?php echo $negara_item; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control form-control-sm" id="kualitas" name="kualitas">
                    <option value="">Semua Kualitas</option>
                    <?php foreach ($kualitas as $kualitas_item) {
                        ?>
                        <?php
                        $selected = '';
                        if (isset($_GET['kualitas']) && $_GET['kualitas'] === $kualitas_item) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?php echo $kualitas_item; ?>" <?php echo $selected; ?>>
                            <?php echo $kualitas_item; ?>
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