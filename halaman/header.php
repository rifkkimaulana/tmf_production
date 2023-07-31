<?php
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
$limitedGenres = array_slice($genres, 0, 8);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        .genre-button {
            margin-bottom: 5px;
            margin-right: 5px;
        }

        .dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">