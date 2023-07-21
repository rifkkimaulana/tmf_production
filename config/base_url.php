<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

$base_path = "/tmf_production"; // mis. http://localhost/app_pencatatan_keuangan/

$host = $_SERVER['HTTP_HOST'];

$base_url = $protocol . $host . $base_path;

//echo $base_url;
?>