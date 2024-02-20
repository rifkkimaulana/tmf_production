<?php

$host = 'localhost';
$database = 'tmf_movies';
$username = 'root';
$password = '';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    //echo 'Koneksi Berhasil';
}
