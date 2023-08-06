<div class="card-flat">
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modalNotifikasi">
            INFO PLAYER
        </button>

        <div class="float-right">
            <a href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id; ?>"><button
                    type="button" class="btn btn-sm btn-secondary">Trailer</button>
            </a>
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Play
                <span class="sr-only">Play</span>
            </button>
            <?php $page = $_GET['page'] ?>
            <div class="dropdown-menu">
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=1"; ?>">Server
                    1</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=2"; ?>">Server
                    2</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=3"; ?>">Server
                    3</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=4"; ?>">Server
                    4</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=5"; ?>">Server
                    5</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=6"; ?>">Server
                    6</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=7"; ?>">Server
                    7</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=8"; ?>">Server
                    8</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=9"; ?>">Server
                    9</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=10"; ?>">Server
                    10</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=11"; ?>">Server
                    11</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=12"; ?>">Server
                    12</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=13"; ?>">Server
                    13</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=14"; ?>">Server
                    14</a>
                <a class="dropdown-item"
                    href="<?php echo $base_url . "/dashboard.php?page=" . $page . "&id=" . $tmdb_id . "&play=15"; ?>">Server
                    15</a>
            </div>
            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal"
                data-target="#modalDownload">Unduh</button>

        </div>
    </div>
    <div class="modal fade" id="modalNotifikasi" tabindex="-1" role="dialog" aria-labelledby="modalNotifikasiLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <?php if (empty($judul)) {
                        $judul = '';
                    } ?>
                    <?php echo $judul; ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-bell mr-3" style="font-size: 24px;"></i>
                        <div>
                            <p>
                                Keterangan:</br>
                                <?php echo $row_play['pemberitahuan_player']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDownload" tabindex="-1" role="dialog" aria-labelledby="modalDownloadLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDownloadLabel">Pilih File untuk Diunduh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $query_download = "SELECT * FROM tb_download WHERE id = '$id_download'";
                    $result_download = mysqli_query($koneksi, $query_download);
                    $row_download = mysqli_fetch_assoc($result_download);

                    $judul_null = "";
                    $download_unik = rand(1000, 9999);
                    $link_null = $base_url . "/dashboard.php?page=donwload_" . $download_unik;

                    ?>
                    <ul class="list-group" style="height: 300px; overflow: auto;">
                        <li class="list-group-item">Server 1 :
                            <?php
                            if (!empty($row_download['judul1']) && !empty($row_download['link1'])) {
                                echo $row_download['judul1'];
                                echo '<a href="' . $safelink . $row_download['link1'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 2 :
                            <?php
                            if (!empty($row_download['judul2']) && !empty($row_download['link2'])) {
                                echo $row_download['judul2'];
                                echo '<a href="' . $safelink . $row_download['link2'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 3 :
                            <?php
                            if (!empty($row_download['judul3']) && !empty($row_download['link3'])) {
                                echo $row_download['judul3'];
                                echo '<a href="' . $safelink . $row_download['link3'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 4 :
                            <?php
                            if (!empty($row_download['judul4']) && !empty($row_download['link4'])) {
                                echo $row_download['judul4'];
                                echo '<a href="' . $safelink . $row_download['link4'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 5 :
                            <?php
                            if (!empty($row_download['judul5']) && !empty($row_download['link5'])) {
                                echo $row_download['judul5'];
                                echo '<a href="' . $safelink . $row_download['link5'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 6 :
                            <?php
                            if (!empty($row_download['judul6']) && !empty($row_download['link6'])) {
                                echo $row_download['judul6'];
                                echo '<a href="' . $safelink . $row_download['link6'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 7 :
                            <?php
                            if (!empty($row_download['judul7']) && !empty($row_download['link7'])) {
                                echo $row_download['judul7'];
                                echo '<a href="' . $safelink . $row_download['link7'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 8 :
                            <?php
                            if (!empty($row_download['judul8']) && !empty($row_download['link8'])) {
                                echo $row_download['judul8'];
                                echo '<a href="' . $safelink . $row_download['link8'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 9 :
                            <?php
                            if (!empty($row_download['judul9']) && !empty($row_download['link9'])) {
                                echo $row_download['judul9'];
                                echo '<a href="' . $safelink . $row_download['link9'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 10 :
                            <?php
                            if (!empty($row_download['judul10']) && !empty($row_download['link10'])) {
                                echo $row_download['judul10'];
                                echo '<a href="' . $safelink . $row_download['link10'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 11 :
                            <?php
                            if (!empty($row_download['judul11']) && !empty($row_download['link11'])) {
                                echo $row_download['judul11'];
                                echo '<a href="' . $safelink . $row_download['link11'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 12 :
                            <?php
                            if (!empty($row_download['judul12']) && !empty($row_download['link12'])) {
                                echo $row_download['judul12'];
                                echo '<a href="' . $safelink . $row_download['link12'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 13 :
                            <?php
                            if (!empty($row_download['judul13']) && !empty($row_download['link13'])) {
                                echo $row_download['judul13'];
                                echo '<a href="' . $safelink . $row_download['link13'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 14 :
                            <?php
                            if (!empty($row_download['judul14']) && !empty($row_download['link14'])) {
                                echo $row_download['judul14'];
                                echo '<a href="' . $safelink . $row_download['link14'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Server 15 :
                            <?php
                            if (!empty($row_download['judul15']) && !empty($row_download['link15'])) {
                                echo $row_download['judul15'];
                                echo '<a href="' . $safelink . $row_download['link15'] . '" class="float-right">Unduh</a>';
                            } else {
                                echo $judul_null;
                                echo '<a href="' . $safelink . $link_null . '" class="float-right">Unduh</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h4 class="tmf_production">
        <b>
            <?php echo $judul_film; ?>
        </b>
    </h4>
    <a> <b>
            <?php echo $total_kunjungan; ?>x ditonton <b>.</b>
            <?php echo timeSinceUpload($row_film['created_at']); ?>
        </b></a>

    <p class="card-text" id="filmDescription">
        <?php echo $limited_description; ?>
    </p>

    <?php if (count($words) > 20) { ?>
        <a class="card-link tmf_teks" id="showMoreLink" onclick="toggleDescription()">Lebih Banyak</a>
    <?php } ?>


</div>