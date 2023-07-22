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
    <title>Panel APP Keuangan</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo $base_url; ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- Summernote -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/summernote/summernote-bs4.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/adminlte.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/js/moment.min.js"></script>

    <!-- JavaScript -->
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
        <!-- AdminLTE App -->
        <script src="<?php echo $base_url; ?>/assets/dist/js/adminlte.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script
            src="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?php echo $base_url; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo $base_url; ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function () {
                // Initialize datepicker
                $('#tanggalPicker').datetimepicker({
                    format: 'YYYY-MM-DD'

                });
            });
        </script>

        <script>
            $(function () {
                $(".datepicker").datepicker({
                    dateFormat: "yy-mm-dd", // Format tanggal yang digunakan (misal: 2023-07-15)
                    changeMonth: true, // Memungkinkan pengguna memilih bulan
                    changeYear: true, // Memungkinkan pengguna memilih tahun
                    showButtonPanel: true // Menampilkan panel navigasi (bulan dan tahun)
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                // Inisialisasi datepicker untuk Mulai Tanggal
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

                // Inisialisasi datepicker untuk Sampai Tanggal
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
        </script>

        <script>
            document.getElementById("laporanForm").addEventListener("submit", function (event) {
                event.preventDefault(); // Mencegah pengiriman form secara default

                var form = this;
                var urlParams = new URLSearchParams(window.location.search);

                // Mengambil nilai input tanggal dari form
                var tanggalDari = form.querySelector('input[name="tanggal_dari"]').value;
                var tanggalSampai = form.querySelector('input[name="tanggal_sampai"]').value;
                var kategori = form.querySelector('select[name="kategori"]').value;

                // Mengatur nilai parameter dalam URL
                urlParams.set("page", "laporan_keuangan");
                urlParams.set("tanggal_dari", tanggalDari);
                urlParams.set("tanggal_sampai", tanggalSampai);
                urlParams.set("kategori", kategori);

                // Mengarahkan pengguna ke URL yang dihasilkan
                window.location.href = window.location.pathname + "?" + urlParams.toString();
            });
        </script>

    </div>
</body>

</html>