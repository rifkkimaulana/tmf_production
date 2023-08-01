<?php
require_once 'config/koneksi.php';

$tmdb_id = $_POST['berkunjung'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$session_duration = 3600;

$tmdb_id = mysqli_real_escape_string($koneksi, $tmdb_id);
$user_agent = mysqli_real_escape_string($koneksi, $user_agent);
$session_duration = mysqli_real_escape_string($koneksi, $session_duration);

$tanggal = date("Y-m-d H:i:s");

// Check if tmdb_id exists in tb_view table
$query_check = "SELECT COUNT(*) AS count FROM tb_view WHERE tmdb_id = '$tmdb_id'";
$result_check = mysqli_query($koneksi, $query_check);
$row_check = mysqli_fetch_assoc($result_check);
$count = $row_check['count'];

if ($count == 0) {
    $query = "INSERT INTO tb_view (tmdb_id, jumlah_lihat, tanggal, user_agent, sesi_waktu) 
              VALUES ('$tmdb_id', 1, '$tanggal', '$user_agent', '$session_duration')";
} else {
    $query = "UPDATE tb_view 
              SET jumlah_lihat = jumlah_lihat + 1, 
                  tanggal = '$tanggal', 
                  sesi_waktu = '$session_duration' 
              WHERE tmdb_id = '$tmdb_id'";
}

if (mysqli_query($koneksi, $query)) {
    echo "Data kunjungan berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>