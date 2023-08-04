<?php
include '../config/base_url.php';
$tujuan_uri = '/google/callback.php';

$client_id = '864273206547-dfdu589bjeeejl6kid95ovnmrj3588jg.apps.googleusercontent.com';
$client_secret = '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';
$redirect_uri = $base_url . $tujuan_uri;
echo $redirect_uri;
?>