<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="<?php echo $base_url; ?>/dashboard.php?page=dashboard" class="navbar-brand">
            <span class="brand-text font-weight-light"><b>TMF</b>PRODUCTION</span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/dashboard.php?page=dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/dashboard.php?page=film" class="nav-link">Movies</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/dashboard.php?page=tvshow" class="nav-link">TV Shows</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Genres</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <?php foreach ($genres as $genre) { ?>
                            <?php
                            ?>
                            <li><a href="<?php echo $base_url . "/dashboard.php?page=genre&f=" . urlencode($genre); ?>"
                                    class="dropdown-item">
                                    <?php echo $genre; ?>
                                </a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Negara</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <?php foreach ($negara as $negara) { ?>
                            <?php
                            ?>
                            <li><a href="<?php echo $base_url . "/dashboard.php?page=negara&f=" . urlencode($negara); ?>"
                                    class="dropdown-item">
                                    <?php echo $negara; ?>
                                </a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/dashboard.php?page=artikel" class="nav-link">Artikel</a>
                </li>
            </ul>
            <form class="form-inline ml-auto" action="dashboard.php" method="GET">
                <input type="hidden" name="page" value="dashboard">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" name="search"
                        placeholder="Search Film & TV Show" aria-label="Search" value="<?php if (empty($_GET['search'])) {
                        } else {
                            echo $_GET['search'];
                        }
                        ?>" required>
                    <div class=" input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="hide-on-large-screen">
                <div class="col-12 mt-4">
                    <a href="<?php echo $base_url . "/login/index.php" ?>">
                        <button class="btn btn-success btn-block" data-toggle="modal"><b>MASUK</b>
                        </button>
                    </a>
                </div>
                <div class="col-12">
                    <a href="<?php echo $base_url . "/login/register.php" ?>">
                        <button class="btn btn-danger btn-block" data-toggle="modal"><b>DAFTAR</b>
                        </button>
                    </a>
                </div>
            </div>
            <div class="hide-on-small-screen">
                <?php
                if (isset($_SESSION['nama'])) {
                    $namaUser = $_SESSION['nama'];
                    $levelUser = $_SESSION['level'];
                    $query_user = "SELECT logo_user FROM tb_users WHERE user_nama = '$namaUser'";
                    $result_user = mysqli_query($koneksi, $query_user);
                    $row_user = mysqli_fetch_assoc($result_user);
                    $fotoProfil = $row_user['logo_user'];

                } else {
                    $namaUser = 'pengunjung';
                    $levelUser = '';
                }

                if (!empty($fotoProfil)) {
                    $fotoUrl = $base_url . '/gambar/user/' . $fotoProfil;
                } else {
                    $fotoUrl = $base_url . '/gambar/user/user.png';
                }

                ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $fotoUrl; ?>" class="user-image img-circle elevation-2"
                                alt="User Image">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <li class="user-header">
                                <img src="<?php echo $fotoUrl; ?>" class="img-circle elevation-2" alt="User Image">
                                <p>
                                    <?php echo $namaUser; ?>
                                    <small>
                                        <?php echo $levelUser; ?>
                                    </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <?php
                                if ($namaUser === "pengunjung") {
                                    ?>
                                    <div class="float-right">
                                        <a href="<?php echo $base_url . "/login/index.php" ?>"
                                            class="btn btn-default btn-primary">Login / Daftar</a>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="float-left">
                                        <a href="<?php echo $base_url . "/login/index.php" ?>"
                                            class="btn btn-default btn-secondary">Member Area</a>
                                    </div>
                                    <div class="float-right">
                                        <a href="<?php echo $base_url . "/logout.php" ?>"
                                            class="btn btn-default btn-danger">Logout</a>
                                    </div>
                                <?php } ?>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>