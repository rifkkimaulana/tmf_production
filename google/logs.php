<?php
include '../config/base_url.php';
$url = $base_url . "/config/insert_log.php";
if (empty($username)) {
    $username = 'guest';
}
$data = array(
    'username' => $username,
    'action' => 'google login',
    'description_log' => $keterangan,
    'ip_address' => $_SERVER['REMOTE_ADDR']
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result !== false) {
    echo "Permintaan POST otomatis berhasil dikirim.";
} else {
    echo "Terjadi kesalahan dalam mengirimkan permintaan POST otomatis.";
}
?>