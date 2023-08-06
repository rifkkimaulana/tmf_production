<?php
function formatDuration($minutes)
{
    $hours = floor($minutes / 60);
    $remainingMinutes = $minutes % 60;

    if ($hours > 0) {
        return $hours . " jam " . $remainingMinutes . " menit";
    } else {
        return $remainingMinutes . " menit";
    }
}
function formatCurrency($amount)
{
    return "IDR " . number_format($amount, 0, ',', '.');
}
function timeSinceUpload($timestamp)
{
    $timeDiff = time() - strtotime($timestamp);
    $intervals = array(
        1 => array('tahun', 31556952),
        $timeDiff < 31556952 => array('bulan', 2629746),
        $timeDiff < 2629746 => array('minggu', 604800),
        $timeDiff < 604800 => array('hari', 86400),
        $timeDiff < 86400 => array('jam', 3600),
        $timeDiff < 3600 => array('menit', 60),
        $timeDiff < 60 => array('detik', 1)
    );

    foreach ($intervals as $interval => $value) {
        if ($timeDiff >= $value[1]) {
            $timeUnits = floor($timeDiff / $value[1]);
            return $timeUnits . ' ' . $value[0] . ' yang lalu';
        }
    }
}
function getGenreId($koneksi, $nama_genre)
{
    $query_genre_id = "SELECT id FROM tb_genre WHERE nama_genre = '$nama_genre'";
    $result_genre_id = mysqli_query($koneksi, $query_genre_id);

    if ($result_genre_id && mysqli_num_rows($result_genre_id) > 0) {
        $row_genre_id = mysqli_fetch_assoc($result_genre_id);
        return $row_genre_id['id'];
    } else {
        return null;
    }
}
function getKualitasId($koneksi, $nama_kualitas)
{
    $query_kualitas_id = "SELECT id FROM tb_kualitas WHERE nama_kualitas = '$nama_kualitas'";
    $result_kualitas_id = mysqli_query($koneksi, $query_kualitas_id);

    if ($result_kualitas_id && mysqli_num_rows($result_kualitas_id) > 0) {
        $row_kualitas_id = mysqli_fetch_assoc($result_kualitas_id);
        return $row_kualitas_id['id'];
    } else {
        return null;
    }
}
function getNegaraId($koneksi, $nama_negara)
{
    $query_negara_id = "SELECT id FROM tb_negara WHERE nama_negara = '$nama_negara'";
    $result_negara_id = mysqli_query($koneksi, $query_negara_id);

    if ($result_negara_id && mysqli_num_rows($result_negara_id) > 0) {
        $row_negara_id = mysqli_fetch_assoc($result_negara_id);
        return $row_negara_id['id'];
    } else {
        return null;
    }
}
function getTahunId($koneksi, $nama_tahun)
{
    $query_tahun_id = "SELECT id FROM tb_tahun WHERE tahun_rilis = '$nama_tahun'";
    $result_tahun_id = mysqli_query($koneksi, $query_tahun_id);

    if ($result_tahun_id && mysqli_num_rows($result_tahun_id) > 0) {
        $row_tahun_id = mysqli_fetch_assoc($result_tahun_id);
        return $row_tahun_id['id'];
    } else {
        return null;
    }
}
function getNegaraIdByName($koneksi, $nama_negara)
{
    $nama_negara = mysqli_real_escape_string($koneksi, $nama_negara);

    $query_negara = "SELECT id FROM tb_negara WHERE nama_negara = '$nama_negara'";

    $result_negara = mysqli_query($koneksi, $query_negara);

    if ($result_negara && mysqli_num_rows($result_negara) > 0) {
        $row_negara = mysqli_fetch_assoc($result_negara);
        return $row_negara['id'];
    } else {
        return null;
    }
}
?>