<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

$base_path = "";

$host = $_SERVER['HTTP_HOST'];

$base_url = $protocol . $host . $base_path;

//echo $base_url;

?>