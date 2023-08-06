<div class="content">
    <div class="container-fluid">
        <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogoutLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLogoutLabel">Konfirmasi Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin keluar?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="<?php echo $base_url; ?>/logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="modalBerhasilLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBerhasilLabel">Sukses</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Data berhasil disimpan.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalBerhasilDihapus" tabindex="-1" role="dialog"
            aria-labelledby="modalBerhasilLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBerhasilLabel">Sukses</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Data berhasil Dihapus.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalGagal" tabindex="-1" role="dialog" aria-labelledby="modalGagalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalGagalLabel">Gagal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Terjadi kesalahan, Perubahan data gagal ditambahkan.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>


        <script>
            var alertType = '<?php echo isset($_GET["alert"]) ? $_GET["alert"] : ""; ?>';

            $(document).ready(function () {
                if (alertType === 'berhasil') {
                    $('#modalBerhasil').modal('show');
                } else if (alertType === 'gagal') {
                    $('#modalGagal').modal('show');
                } else if (alertType === 'berhasil_dihapus') {
                    $('#modalBerhasilDihapus').modal('show');
                }
            });
        </script>
        <!-- Modal Loading -->
        <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <span class="ml-2">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hubungkan dengan jQuery dan AdminLTE JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.1/dist/js/adminlte.min.js"></script>

        <script>
            // Function to show the loading modal
            function showLoadingModal() {
                $('#loadingModal').modal('show');
            }

            // Function to hide the loading modal
            function hideLoadingModal() {
                $('#loadingModal').modal('hide');
            }

            // Show the loading modal when the DOM content is loaded
            document.addEventListener('DOMContentLoaded', function () {
                showLoadingModal();
            });

            // Hide the loading modal when the page has completely loaded
            window.addEventListener('load', function () {
                hideLoadingModal();
            });
        </script>

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'dashboard':
                    include "dashboard/index.php";
                    break;
                case 'users':
                    include "users/index.php";
                    break;
                case 'genre':
                    include "genre/index.php";
                    break;
                case 'tag':
                    include "tag/index.php";
                    break;
                case 'direksi':
                    include "direksi/index.php";
                    break;
                case 'pemain':
                    include "pemain/index.php";
                    break;
                case 'tahun':
                    include "tahun/index.php";
                    break;
                case 'negara':
                    include "negara/index.php";
                    break;
                case 'jaringan':
                    include "jaringan/index.php";
                    break;
                case 'kualitas':
                    include "kualitas/index.php";
                    break;
                case 'kategori_artikel':
                    include "artikel/index_kategori.php";
                    break;
                case 'artikel':
                    include "artikel/index_artikel.php";
                    break;
                case 'add_artikel':
                    include "artikel/create_artikel.php";
                    break;
                case 'update_artikel':
                    include "artikel/update_artikel.php";
                    break;
                case 'tag_artikel':
                    include "artikel/index_tag.php";
                    break;
                case 'film':
                    include "film/index.php";
                    break;
                case 'add_film':
                    include "film/create.php";
                    break;
                case 'add_film_tmdb':
                    include "film/create_tmdb.php";
                    break;
                case 'update_film':
                    include "film/update.php";
                    break;
                case 'tv_show':
                    include "tv_show/index.php";
                    break;
                case 'add_tvshow':
                    include "tv_show/create.php";
                    break;
                case 'add_tv_show_tmdb':
                    include "tv_show/create_tmdb.php";
                    break;
                case 'update_tv_show':
                    include "tv_show/update.php";
                    break;
                case 'episode':
                    include "episode/index.php";
                    break;
                case 'add_episode':
                    include "episode/create.php";
                    break;
                case 'update_episode':
                    include "episode/update.php";
                    break;
                case 'backup_restore':
                    include "backup_restore/index.php";
                    break;
                case 'reset_database':
                    include "reset_database/index.php";
                    break;
                case 'log_aplikasi':
                    include "log_aplikasi/index.php";
                    break;
                case 'komentar':
                    include "komentar/index.php";
                    break;

                default:
                    include "../view/error/halaman-buntu.php";
                    break;
            }
        } else {
            include "../dashboard/index.php";
        }
        ?>
    </div>
</div>