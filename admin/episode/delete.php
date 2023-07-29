<?php
include '../../config/koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $episode_id = $_GET['id'];

    $query = "SELECT * FROM tb_episode_tv_show WHERE id = $episode_id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        $player_id = $row['player_id'];
        $download_id = $row['download_id'];

        $query_delete_episode = "DELETE FROM tb_episode_tv_show WHERE id = $episode_id";
        $result_delete_episode = mysqli_query($koneksi, $query_delete_episode);

        $query_delete_player = "DELETE FROM tb_player WHERE id = $player_id";
        $result_delete_player = mysqli_query($koneksi, $query_delete_player);

        $query_delete_download = "DELETE FROM tb_download WHERE id = $download_id";
        $result_delete_download = mysqli_query($koneksi, $query_delete_download);

        if ($result_delete_episode && $result_delete_player && $result_delete_download) {
            header("Location: ../dashboard.php?page=episode&alert=berhasil_delete");
            exit;
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID episode tidak valid.";
}
?>