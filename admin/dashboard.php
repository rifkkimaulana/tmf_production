<?php
//include '../config/minify_function.php';
//ob_start();
?>
<?php
include '../config/base_url.php';
include '../config/koneksi.php';

session_start();
if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TMF PRODUCTION</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet"
        href="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet"
        href="<?php echo $base_url; ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/adminlte.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/js/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include_once('halaman/navbar.php'); ?>
        <?php include_once('halaman/sidebar.php'); ?>

        <div class="content-wrapper">
            <div class="content-header">
            </div>
            <?php include_once('halaman/main-content.php'); ?>
        </div>
        <?php include_once('halaman/footer.php'); ?>

        <script src="<?php echo $base_url; ?>/assets/dist/js/adminlte.min.js"></script>
        <script
            src="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo $base_url; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo $base_url; ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <link href="<?php echo $base_url; ?>/assets/summernote/summernote-bs4.css" rel="stylesheet">
        <script src="<?php echo $base_url; ?>/assets/summernote/summernote-bs4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#tanggalPicker').datetimepicker({
                    format: 'YYYY-MM-DD'

                });
            });

            $(function () {
                $(".datepicker").datepicker({
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true
                });
            });

            $(document).ready(function () {

                $('#tanggal_rilis').datetimepicker({
                    format: 'DD MMM YYYY',
                    icons: {
                        time: 'fas fa-clock',
                        date: 'fas fa-calendar-alt',
                        up: 'fas fa-chevron-up',
                        down: 'fas fa-chevron-down',
                        previous: 'fas fa-chevron-left',
                        next: 'fas fa-chevron-right',
                        today: 'fas fa-calendar-check',
                        clear: 'fas fa-trash',
                        close: 'fas fa-times',
                    }
                });

                $('#tahun_rilis').datetimepicker({
                    format: 'YYYY',
                    viewMode: 'years',
                    icons: {
                        time: 'fas fa-clock',
                        date: 'fas fa-calendar-alt',
                        up: 'fas fa-chevron-up',
                        down: 'fas fa-chevron-down',
                        previous: 'fas fa-chevron-left',
                        next: 'fas fa-chevron-right',
                        today: 'fas fa-calendar-check',
                        clear: 'fas fa-trash',
                        close: 'fas fa-times',
                    }
                });
            });

            $(document).ready(function () {
                $('#mulaiTanggalPicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                    icons: {
                        time: 'fa fa-clock',
                        date: 'fa fa-calendar',
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down',
                        previous: 'fa fa-chevron-left',
                        next: 'fa fa-chevron-right',
                        today: 'fa fa-calendar-check-o',
                        clear: 'fa fa-trash',
                        close: 'fa fa-times'
                    }
                });

                $('#sampaiTanggalPicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                    icons: {
                        time: 'fa fa-clock',
                        date: 'fa fa-calendar',
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down',
                        previous: 'fa fa-chevron-left',
                        next: 'fa fa-chevron-right',
                        today: 'fa fa-calendar-check-o',
                        clear: 'fa fa-trash',
                        close: 'fa fa-times'
                    }
                });
            });

            document.getElementById("laporanForm").addEventListener("submit", function (event) {
                event.preventDefault();

                var form = this;
                var urlParams = new URLSearchParams(window.location.search);

                var tanggalDari = form.querySelector('input[name="tanggal_dari"]').value;
                var tanggalSampai = form.querySelector('input[name="tanggal_sampai"]').value;
                var kategori = form.querySelector('select[name="kategori"]').value;

                urlParams.set("page", "laporan_keuangan");
                urlParams.set("tanggal_dari", tanggalDari);
                urlParams.set("tanggal_sampai", tanggalSampai);
                urlParams.set("kategori", kategori);

                window.location.href = window.location.pathname + "?" + urlParams.toString();
            });
        </script>

        <!-- Search Modal Film -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Search Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="searchForm" method="get" action="dashboard.php">
                            <input type="hidden" name="page" value="add_film_tmdb">
                            <div class="form-group">
                                <label for="id_film">Silahkan masukan id film:</label>
                                <input type="text" id="id_film" name="id_film" class="form-control"
                                    placeholder="Enter your search term" required>
                                <small class="text-muted">Isi dengan id film asli dari TMDB.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal TV-->
        <div class="modal fade" id="searchModalTv" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Search Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="searchForm" method="get" action="dashboard.php">
                            <input type="hidden" name="page" value="add_tv_show_tmdb">
                            <div class="form-group">
                                <label for="id_tv">Silahkan masukan id TV:</label>
                                <input type="text" id="id_tv" name="id_tv" class="form-control"
                                    placeholder="Enter your search term" required>
                                <small class="text-muted">Isi dengan id TV asli dari TMDB.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="showLoadingModal()">Show Loading Modal</button>

        <!-- Modal Loading -->
        <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
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
        <script>
            function showLoadingModal() {
                $('#loadingModal').modal('show');
            }

            function hideLoadingModal() {
                $('#loadingModal').modal('hide');
            }

            document.addEventListener('DOMContentLoaded', function () {
                hideLoadingModal(); // Hide the loading modal initially
            });

            window.addEventListener('beforeunload', function () {
                showLoadingModal();
            });

            window.addEventListener('load', function () {
                hideLoadingModal();
            });
        </script>
        <script>
            function openSearchModal() {
                $('#searchModal').modal('show');
            }
            function openSearchModalTv() {
                $('#searchModalTv').modal('show');
            }
        </script>
    </div>

</body>

</html>

<?php
//$html = ob_get_clean();
//$minified_html = minify_html($html);
//echo $minified_html;
?>