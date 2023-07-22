<?php include 'config/base_url.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TMF Production | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="" class="navbar-brand">

                    <span class="brand-text font-weight-light"><b>TMF</b>PRODUCTION</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">TV Shows</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Genres</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Action</a></li>
                                <li><a href="#" class="dropdown-item">Adventure</a></li>
                                <li><a href="#" class="dropdown-item">Comedy</a></li>
                                <li><a href="#" class="dropdown-item">Drama</a></li>
                                <!-- Add more genres as needed -->
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <!-- Genre buttons -->
                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary">Action</button>
                            <button type="button" class="btn btn-secondary">Adventure</button>
                            <button type="button" class="btn btn-secondary">Comedy</button>
                            <button type="button" class="btn btn-secondary">Drama</button>
                            <!-- Add more genre buttons as needed -->
                        </div>
                        <!-- End Genre buttons -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg" alt="Movie 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 1</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo4.jpg" alt="Movie 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 2</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg" alt="Movie 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 3</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg" alt="Movie 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 1</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo4.jpg" alt="Movie 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 2</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg" alt="Movie 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 3</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg" alt="Movie 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 1</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo4.jpg" alt="Movie 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 2</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card card-primary">
                                        <img class="img-fluid rounded" src="assets/dist/img/photo3.jpg" alt="Movie 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title 3</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk
                                                of
                                                the
                                                card's content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


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
                                                    <input type="text" class="form-control" id="movieName"
                                                        name="movieName" placeholder="Judul film">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" id="movieType" name="movieType">
                                                        <option value="all">Semua Tipe</option>
                                                        <option value="movie">Film</option>
                                                        <option value="tvShow">TV Show</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" id="sortBy" name="sortBy">
                                                        <option value="index">Berdasarkan Indeks</option>
                                                        <option value="name">Berdasarkan Nama</option>
                                                        <option value="year">Berdasarkan Tahun</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" id="genre" name="genre">
                                                        <option value="all">Semua Genre</option>
                                                        <option value="action">Action</option>
                                                        <option value="adventure">Adventure</option>
                                                        <option value="comedy">Comedy</option>
                                                        <!-- Add more genre options as needed -->
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="year" name="year"
                                                        placeholder="Tahun film">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="country" name="country"
                                                        placeholder="Negara film">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="quality" name="quality"
                                                        placeholder="Kualitas film">
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
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-
            <?php echo date('Y'); ?> <a style="text-transform: uppercase;" href="<?php echo $base_url; ?>">TMF
                Production</a>.
        </strong>
        All rights reserved.
    </footer>

    <!-- jQuery -->
    <script src="<?php echo $base_url; ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $base_url; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $base_url; ?>/assets/dist/js/adminlte.min.js"></script>
</body>

</html>