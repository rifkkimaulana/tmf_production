<?php
$safelink = 'https://semawur.com/st/?api=f0ad0323a77b9ddc5189f885e8a3b150446d37ce&url=';
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

$base_path = "";

$host = $_SERVER['HTTP_HOST'];

$base_url = $protocol . $host . $base_path;

?>