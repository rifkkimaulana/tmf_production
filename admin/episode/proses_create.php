<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../../config/koneksi.php';

    $notif_player = $_POST["notif_player"];

    $playerJudul1 = $_POST["playerJudul-1"];
    $kodeEmbed1 = $_POST["kodeEmbed-1"];

    $playerJudul2 = $_POST["playerJudul-2"];
    $kodeEmbed2 = $_POST["kodeEmbed-2"];

    $playerJudul3 = $_POST["playerJudul-3"];
    $kodeEmbed3 = $_POST["kodeEmbed-3"];

    $playerJudul4 = $_POST["playerJudul-4"];
    $kodeEmbed4 = $_POST["kodeEmbed-4"];

    $playerJudul5 = $_POST["playerJudul-5"];
    $kodeEmbed5 = $_POST["kodeEmbed-5"];

    $playerJudul6 = $_POST["playerJudul-6"];
    $kodeEmbed6 = $_POST["kodeEmbed-6"];

    $playerJudul7 = $_POST["playerJudul-7"];
    $kodeEmbed7 = $_POST["kodeEmbed-7"];

    $playerJudul8 = $_POST["playerJudul-8"];
    $kodeEmbed8 = $_POST["kodeEmbed-8"];

    $playerJudul9 = $_POST["playerJudul-9"];
    $kodeEmbed9 = $_POST["kodeEmbed-9"];

    $playerJudul10 = $_POST["playerJudul-10"];
    $kodeEmbed10 = $_POST["kodeEmbed-10"];

    $playerJudul11 = $_POST["playerJudul-11"];
    $kodeEmbed11 = $_POST["kodeEmbed-11"];

    $playerJudul12 = $_POST["playerJudul-12"];
    $kodeEmbed12 = $_POST["kodeEmbed-12"];

    $playerJudul13 = $_POST["playerJudul-13"];
    $kodeEmbed13 = $_POST["kodeEmbed-13"];

    $playerJudul14 = $_POST["playerJudul-14"];
    $kodeEmbed14 = $_POST["kodeEmbed-14"];

    $playerJudul15 = $_POST["playerJudul-15"];
    $kodeEmbed15 = $_POST["kodeEmbed-15"];

    $sql = "INSERT INTO tb_player (judul1, link1, judul2, link2, judul3, link3, judul4, link4, judul5, link5,
                                judul6, link6, judul7, link7, judul8, link8, judul9, link9, judul10, link10,
                                judul11, link11, judul12, link12, judul13, link13, judul14, link14, judul15, link15, pemberitahuan_player, created_at, updated_at)
        VALUES ('$playerJudul1', '$kodeEmbed1', '$playerJudul2', '$kodeEmbed2', '$playerJudul3', '$kodeEmbed3',
                '$playerJudul4', '$kodeEmbed4', '$playerJudul5', '$kodeEmbed5', '$playerJudul6', '$kodeEmbed6',
                '$playerJudul7', '$kodeEmbed7', '$playerJudul8', '$kodeEmbed8', '$playerJudul9', '$kodeEmbed9',
                '$playerJudul10', '$kodeEmbed10', '$playerJudul11', '$kodeEmbed11', '$playerJudul12', '$kodeEmbed12',
                '$playerJudul13', '$kodeEmbed13', '$playerJudul14', '$kodeEmbed14', '$playerJudul15', '$kodeEmbed15', '$notif_player',
                NOW(), NOW())";

    if (mysqli_query($koneksi, $sql)) {
        $id_player = mysqli_insert_id($koneksi);
        echo "Data berhasil dimasukkan ke dalam tabel Player TB_PLAYER.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    $judulDownload1 = $_POST["judulDownload-1"];
    $linkDownload1 = $_POST["linkDownload-1"];

    $judulDownload2 = $_POST["judulDownload-2"];
    $linkDownload2 = $_POST["linkDownload-2"];

    $judulDownload3 = $_POST["judulDownload-3"];
    $linkDownload3 = $_POST["linkDownload-3"];

    $judulDownload4 = $_POST["judulDownload-4"];
    $linkDownload4 = $_POST["linkDownload-4"];

    $judulDownload5 = $_POST["judulDownload-5"];
    $linkDownload5 = $_POST["linkDownload-5"];

    $judulDownload6 = $_POST["judulDownload-6"];
    $linkDownload6 = $_POST["linkDownload-6"];

    $judulDownload7 = $_POST["judulDownload-7"];
    $linkDownload7 = $_POST["linkDownload-7"];

    $judulDownload8 = $_POST["judulDownload-8"];
    $linkDownload8 = $_POST["linkDownload-8"];

    $judulDownload9 = $_POST["judulDownload-9"];
    $linkDownload9 = $_POST["linkDownload-9"];

    $judulDownload10 = $_POST["judulDownload-10"];
    $linkDownload10 = $_POST["linkDownload-10"];

    $judulDownload11 = $_POST["judulDownload-11"];
    $linkDownload11 = $_POST["linkDownload-11"];

    $judulDownload12 = $_POST["judulDownload-12"];
    $linkDownload12 = $_POST["linkDownload-12"];

    $judulDownload13 = $_POST["judulDownload-13"];
    $linkDownload13 = $_POST["linkDownload-13"];

    $judulDownload14 = $_POST["judulDownload-14"];
    $linkDownload14 = $_POST["linkDownload-14"];

    $judulDownload15 = $_POST["judulDownload-15"];
    $linkDownload15 = $_POST["linkDownload-15"];

    $sql = "INSERT INTO tb_download (judul1, link1, judul2, link2, judul3, link3, judul4, link4, judul5, link5,
                                judul6, link6, judul7, link7, judul8, link8, judul9, link9, judul10, link10,
                                judul11, link11, judul12, link12, judul13, link13, judul14, link14, judul15, link15)
        VALUES ('$judulDownload1', '$linkDownload1', '$judulDownload2', '$linkDownload2', '$judulDownload3', '$linkDownload3',
                '$judulDownload4', '$linkDownload4', '$judulDownload5', '$linkDownload5', '$judulDownload6', '$linkDownload6',
                '$judulDownload7', '$linkDownload7', '$judulDownload8', '$linkDownload8', '$judulDownload9', '$linkDownload9',
                '$judulDownload10', '$linkDownload10', '$judulDownload11', '$linkDownload11', '$judulDownload12', '$linkDownload12',
                '$judulDownload13', '$linkDownload13', '$judulDownload14', '$linkDownload14', '$judulDownload15', '$linkDownload15')";

    if (mysqli_query($koneksi, $sql)) {
        $id_download = mysqli_insert_id($koneksi);
        echo "Data berhasil dimasukkan ke dalam tabel tb_download.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    $nama_episode = $_POST['nama_episode'];
    $nama_episode = preg_replace('/[^A-Za-z0-9\s]/', '', $nama_episode);
    $nama_episode_low = strtolower($nama_episode);
    $slug_episode = str_replace(' ', '-', $nama_episode_low);

    $jumlah_episode = $_POST['jumlah_episode'];
    $tv_show_id = $_POST['tv_show_id'];
    $status = $_POST['status'];

    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');

    $cek_query = "SELECT * FROM tb_episode_tv_show WHERE jumlah_episode = '$jumlah_episode' AND tv_show_id = '$tv_show_id'";
    $cek_result = mysqli_query($koneksi, $cek_query);

    if (mysqli_num_rows($cek_result) > 0) {
        header("Location: ../dashboard.php?page=episode&alert=data_sudah_ada");
    } else {
        $query = "INSERT INTO tb_episode_tv_show (nama_episode, slug_episode, jumlah_episode, tv_show_id, player_id, download_id, status, created_at, updated_at) 
              VALUES ('$nama_episode', '$slug_episode', '$jumlah_episode', '$tv_show_id', '$id_player', '$id_download', '$status', '$created_at', '$updated_at')";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../dashboard.php?page=episode&alert=berhasil_add_episode");
            exit;
        } else {
            header("Location: ../dashboard.php?page=episode&alert=gagal_ditambahkan");
            exit;
        }
    }

    mysqli_close($koneksi);

} else {
    header("Location: dashboard.php?page=error");
}
?>