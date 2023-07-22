<div class="content">
    <div class="container-fluid">


        <!-- Modal Konfirmasi Logout -->
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


        <!-- Modal Berhasil -->
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

        <!-- Modal Berhasil Dihapus -->
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

        <!-- Modal Gagal -->
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

        <!-- JavaScript untuk menampilkan modal -->
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
                case 'backup_restore':
                    include "backup_restore/index.php";
                    break;
                case 'reset_database':
                    include "reset_database/index.php";
                    break;
                case 'log_aplikasi':
                    include "log_aplikasi/index.php";
                    break;

                default:
                    include "error/halaman-buntu.php";
                    break;
            }
        } else {
            include "../dashboard/index.php";
        }
        ?>
    </div>
</div>