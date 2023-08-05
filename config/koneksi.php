<?php

$host = 'localhost';
$database = 'u1588530_tmf';
$username = 'u1588530_tmf_admin';
$password = 'Refasta2019';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    //echo 'Koneksi Berhasil';
}