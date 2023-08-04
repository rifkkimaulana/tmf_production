<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_pemain"])) {
        $player_name = $_POST["nama_pemain"];

        if (empty($_POST["slug_pemain"])) {
            $player_slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($player_name));
        } else {
            $player_slug = $_POST["slug_pemain"];
        }

        $query = "INSERT INTO tb_pemain (nama_pemain, slug_pemain) VALUES ('$player_name', '$player_slug')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../../admin/dashboard.php?page=pemain");
            exit();
        } else {
            echo "Gagal menyimpan data pemain.";
        }
    }
}
mysqli_close($koneksi);
?>