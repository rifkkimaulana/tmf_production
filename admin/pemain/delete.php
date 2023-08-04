<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_player"]) && is_array($_POST["selected_player"]) && !empty($_POST["selected_player"])) {
        foreach ($_POST["selected_player"] as $player_id) {
            $query = "DELETE FROM tb_pemain WHERE id = ?";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, "i", $player_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        header("Location: ../dashboard.php?page=pemain");
        exit();
    } else {
        header("Location: ../dashboard.php?page=pemain");
        exit();
    }
}

mysqli_close($koneksi);
?>