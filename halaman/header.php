<?php
session_start();
include 'config/base_url.php';
include 'config/koneksi.php';

// Select Negara
$q_negara = "SELECT * FROM tb_negara";
$r_negara = mysqli_query($koneksi, $q_negara);
$negara = array();

while ($row_negara = mysqli_fetch_assoc($r_negara)) {
    $negara[] = $row_negara['nama_negara'];
}

if (empty($negara)) {
    exit();
}

// Select Genre Film
$q_genre = "SELECT * FROM tb_genre";
$r_genre = mysqli_query($koneksi, $q_genre);
$genres = array();

while ($row_film = mysqli_fetch_assoc($r_genre)) {
    $genres[] = $row_film['nama_genre'];
}
if (empty($genres)) {
    exit();
}

shuffle($genres);
$limitedGenres = array_slice($genres, 0, 9);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TMF Production | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/adminlte.min.css">
    <!-- Select2 Admin-->
    <link href="<?php echo $base_url; ?>/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />


    <style>
        .tmf_shadow {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .tmf_production {
            margin-top: 15px;
        }

        .genre-button {
            margin-bottom: 5px;
            margin-right: 5px;
        }

        .dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
        }

        .tmf_teks {
            color: black;
        }

        .card-body::-webkit-scrollbar {
            display: none;
        }

        .zoom-effect {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .zoom-effect:hover {
            transform: scale(1.0);
        }

        .card-flat hr {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .comment-form .form-control {
            border: none;
            border-bottom: 1px solid #dcdcdc;
            transition: border-bottom 0.3s;
        }

        /* Add bottom border to form */
        .comment-form {
            padding-bottom: 15px;
        }

        /* Style submit button */
        .comment-form .submit-btn {
            margin-top: 10px;
        }

        /* Style input field when focused */
        .comment-form .form-control:focus {
            border-bottom: 2px solid #007bff;
        }

        .lewati-notification {
            position: absolute;
            bottom: 10px;
            right: 5px;
            padding: 10px;
            display: none;
        }

        .lewati-content {
            display: flex;
            align-items: center;
            opacity: 0.5;
        }

        .lewati-content p {
            margin-right: 10px;
        }

        /* Ukuran poster pada tampilan di laptop */
        .img-poster {
            max-width: 100%;
        }

        /* Ukuran poster pada tampilan di perangkat Android dalam mode landscape */
        @media (max-width: 768px) {
            .img-poster-android-landscape {
                max-width: 50%;
                display: block;
                margin: 0 auto;
                /* Membuat gambar menjadi posisi tengah secara horizontal */
            }
        }

        /* Ukuran poster pada tampilan di perangkat Android dalam mode portrait */
        @media (max-width: 576px) {
            .img-poster-android-portrait {
                max-width: 100%;
                display: block;
                margin: 0 auto;
                /* Membuat gambar menjadi posisi tengah secara horizontal */
            }
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">