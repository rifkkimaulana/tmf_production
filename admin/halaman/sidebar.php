<?php
include '../base_url.php';
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
                    class="nav-item <?php echo ($page == 'catat_keuangan' || $page == 'ck_kategori' || $page == 'ck_transaksi' || $page == 'ck_hutang' || $page == 'ck_piutang') ? 'menu-open' : ''; ?>">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=catat_keuangan"
                        class="nav-link <?php echo ($page == 'catat_keuangan' || $page == 'ck_kategori' || $page == 'ck_transaksi' || $page == 'ck_hutang' || $page == 'ck_piutang') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            Catat Keuangan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-left: 20px;">
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=ck_kategori"
                                class="nav-link <?php echo ($page == 'ck_kategori') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=ck_transaksi"
                                class="nav-link <?php echo ($page == 'ck_transaksi') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=ck_hutang"
                                class="nav-link <?php echo ($page == 'ck_hutang') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Hutang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=ck_piutang"
                                class="nav-link <?php echo ($page == 'ck_piutang') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Piutang</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=rekening_bank"
                        class="nav-link <?php echo ($page == 'rekening_bank') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-university"></i>
                        <p>Rekening Bank</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=laporan_keuangan"
                        class="nav-link <?php echo ($page == 'laporan_keuangan') ? 'active' : ''; ?>">
                        <i class="nav-icon fa fa-file"></i>
                        <p>Laporan Keuangan</p>
                    </a>
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