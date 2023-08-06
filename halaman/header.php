<?php
session_start();
include 'config/base_url.php';
include 'config/koneksi.php';
include 'config/function.php';

$q_negara = "SELECT * FROM tb_negara";
$r_negara = mysqli_query($koneksi, $q_negara);
$negara = array();

while ($row_negara = mysqli_fetch_assoc($r_negara)) {
    $negara[] = $row_negara['nama_negara'];
}

$q_genre = "SELECT * FROM tb_genre";
$r_genre = mysqli_query($koneksi, $q_genre);
$genres = array();

while ($row_film = mysqli_fetch_assoc($r_genre)) {
    $genres[] = $row_film['nama_genre'];
}

shuffle($genres);
$limitedGenres = array_slice($genres, 0, 9);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo $base_url; ?>/gambar/icon.png" type="image/png">

    <title>TMF Production | Dashboard</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/tmf_style.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/plugins/select2/css/select2.min.css">

</head>

<body class=" hold-transition layout-top-nav">
    <div class="wrapper">