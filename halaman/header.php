<?php
session_start();
include 'config/base_url.php';
include 'config/koneksi.php';

$q_negara = "SELECT * FROM tb_negara";
$r_negara = mysqli_query($koneksi, $q_negara);
$negara = array();

while ($row_negara = mysqli_fetch_assoc($r_negara)) {
    $negara[] = $row_negara['nama_negara'];
}

if (empty($negara)) {
    exit();
}

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

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/adminlte.min.css">
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

        .comment-form {
            padding-bottom: 15px;
        }

        .comment-form .submit-btn {
            margin-top: 10px;
        }

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

        .img-poster {
            max-width: 100%;
        }

        @media (max-width: 768px) {
            .img-poster-android-landscape {
                max-width: 50%;
                display: block;
                margin: 0 auto;
            }
        }

        @media (max-width: 576px) {
            .img-poster-android-portrait {
                max-width: 100%;
                display: block;
                margin: 0 auto;
            }
        }

        .card-flat {
            display: block;
        }

        @media screen and (max-width: 767px) {
            .hide-on-small-screen {
                display: none;
            }
        }

        @media screen and (min-width: 768px) {
            .hide-on-large-screen {
                display: none;
            }
        }


        .tmf-card-terbaru {
            padding: 10px;
            margin-bottom: 5px;
        }

        .tmf-card-terbaru h3 {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin: 0;
        }

        .tmf-card-terbaru .line {
            flex: 1;
            height: 1px;
            background-color: #007bff;
            margin-left: 10px;
        }

        .thumbnail-container {
            position: relative;
            overflow: hidden;
        }

        .thumbnail-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .thumbnail-container:hover img {
            transform: scale(1.1);
        }

        .video-info {
            padding: 10px;
        }

        .col-lg-3,
        .col-md-4,
        .col-sm-6,
        .col-12 {
            margin-bottom: 15px;
        }

        .video-info strong {
            font-size: 16px;
            display: block;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .video-info p {
            margin: 0;
        }

        .video-info a {
            color: #606060;
            text-decoration: none;
        }

        .video-info a:hover {
            color: #000;
        }

        .card-img-top {
            max-width: 100%;
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">