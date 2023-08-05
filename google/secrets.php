<?php
include '../config/base_url.php';
$tujuan_uri = '/google/callback.php';

$client_id = '864273206547-25t6ouvbg3lmp0fl1igi1p4i8chudbam.apps.googleusercontent.com';
$client_secret = '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';
$redirect_uri = $base_url . $tujuan_uri;
echo $redirect_uri;
?>