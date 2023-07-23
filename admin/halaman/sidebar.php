<?php
include '../config/base_url.php';
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=dashboard" class="brand-link">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="brand-text font-weight-light"><b>ADMIN</b> DASHBOARD</span>

            </div>
        </div>

    </a>
    <div class="sidebar">
        <div class="user-panel mt-1 pb-2 mb-1 d-flex sidebar-collapse">
            <div class="image mt-3">
                <a href="<?php echo $base_url; ?>" class="d-block">
                    <?php
                    $id_user = $_SESSION['id'];
                    $profil = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE user_id='$id_user'");
                    $profil = mysqli_fetch_assoc($profil);
                    $userImage = $profil['user_foto'] ? $base_url . '/gambar/user/' . $profil['user_foto'] : $base_url . '/gambar/sistem/user.png';
                    ?>
                    <img src="<?php echo $userImage; ?>" class="img-circle elevation-2" alt="User Image"
                        style="max-height: 45px;">
                </a>
            </div>
            <div class="info">
                <a href="<?php echo $base_url; ?>" class="d-block">
                    <?php echo $_SESSION['nama']; ?>
                </a>
                <span class="badge badge-success">Online</span>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=dashboard"
                        class="nav-link <?php echo ($page == 'dashboard') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard<span class="right badge badge-danger">New</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=users"
                        class="nav-link <?php echo ($page == 'users') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li
                    class="nav-item <?php echo ($page == 'film' || $page == 'filim' || $page == 'add_film') ? 'menu-open' : ''; ?>">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=film"
                        class="nav-link <?php echo ($page == 'film' || $page == 'add_film') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-film"></i>
                        <p>Film</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <!-- Submenu "Tambah Film" -->
                    <ul class="nav nav-treeview" style="padding-left: 20px;">
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=film"
                                class="nav-link <?php echo ($page == 'film') ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Lihat Semua Film</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=add_film"
                                class="nav-link <?php echo ($page == 'add_film') ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Tambah Film</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=tv_show"
                        class="nav-link <?php echo ($page == 'tv_show') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tv"></i>
                        <p>TV Show</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=blog"
                        class="nav-link <?php echo ($page == 'blog') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=komentar"
                        class="nav-link <?php echo ($page == 'komentar') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>Komentar</p>
                    </a>
                </li>

                <li
                    class="nav-item <?php echo ($page == 'pengaturan' || $page == 'genre' || $page == 'tag' || $page == 'direksi' || $page == 'pemain' || $page == 'tahun' || $page == 'negara' || $page == 'jaringan' || $page == 'kualitas') ? 'menu-open' : ''; ?>">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=pengaturan"
                        class="nav-link <?php echo ($page == 'pengaturan' || $page == 'genre' || $page == 'tag' || $page == 'direksi' || $page == 'pemain' || $page == 'tahun' || $page == 'negara' || $page == 'jaringan' || $page == 'kualitas') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Pengaturan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-left: 20px;">
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=genre"
                                class="nav-link <?php echo ($page == 'genre') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Genre</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=tag"
                                class="nav-link <?php echo ($page == 'tag') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=direksi"
                                class="nav-link <?php echo ($page == 'direksi') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Direksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=pemain"
                                class="nav-link <?php echo ($page == 'pemain') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pemain</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=tahun"
                                class="nav-link <?php echo ($page == 'tahun') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tahun</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=negara"
                                class="nav-link <?php echo ($page == 'negara') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Negara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=jaringan"
                                class="nav-link <?php echo ($page == 'jaringan') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jaringan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=kualitas"
                                class="nav-link <?php echo ($page == 'kualitas') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kualitas</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li
                    class="nav-item <?php echo ($page == 'backup_restore' || $page == 'reset_database') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Tool System
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-left: 20px;">
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=backup_restore"
                                class="nav-link <?php echo ($page == 'backup_restore') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Backup Restore</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=reset_database"
                                class="nav-link <?php echo ($page == 'reset_database') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reset Database</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=log_aplikasi"
                        class="nav-link <?php echo ($page == 'log_aplikasi') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-history"></i>
                        <p>Log Aplikasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogout">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>