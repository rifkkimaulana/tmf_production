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
    <link rel="icon" href="<?php echo $base_url; ?>/gambar/icon.png" type="image/png">

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

    <!-- Local .css style sheet-->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/tmf_style.css">

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
            <?php include 'halaman/modal.php'; ?>
            <div class="content-header">
            </div>
            <div id="skeletonScreen">
                <div class="container mt-5">
                    <div class="skeleton-content"></div>
                    <div class="skeleton-img"></div>
                    <div class="skeleton-content"></div>
                </div>
            </div>
            <div id="content" style="display: none">
                <?php include_once('halaman/main-content.php'); ?>
            </div>
        </div>
        <?php include_once('halaman/footer.php'); ?>
        <script src="<?php echo $base_url; ?>/assets/tmf_ui.js"></script>
    </div>

    <script src="<?php echo $base_url; ?>/assets/dist/js/adminlte.min.js"></script>
    <script
        src="<?php echo $base_url; ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <link href="<?php echo $base_url; ?>/assets/summernote/summernote-bs4.css" rel="stylesheet">
    <script src="<?php echo $base_url; ?>/assets/summernote/summernote-bs4.min.js"></script>

</body>

</html>

<?php
//$html = ob_get_clean();
//$minified_html = minify_html($html);
//echo $minified_html;
?>