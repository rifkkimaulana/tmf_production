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
?>