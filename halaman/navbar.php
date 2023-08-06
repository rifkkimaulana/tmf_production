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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="gambar/user/user.png" class="user-image img-circle elevation-2" alt="User Image">
                    </a>
                    <button class="nav-link dropdown-toggle btn btn-sm btn-success" type="button"
                        data-toggle="dropdown">
                        Login
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header">
                            <img src="gambar/user/user.png" class="img-circle elevation-2" alt="User Image">
                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>