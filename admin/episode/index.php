<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Episode - TV Show</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_episode" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; width: 2%;">No</th>
                                        <th style="text-align: center; width: 30%;">Judul TV Show</th>
                                        <th style="text-align: center; width: 20%;">Episode</th>
                                        <th style="text-align: center; width: 10%;">Jumlah</th>
                                        <th style="text-align: center; width: 13%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT tb_episode_tv_show.id AS episode_id, tb_tv_show.judul_tv_show, tb_episode_tv_show.nama_episode, tb_episode_tv_show.jumlah_episode, tb_episode_tv_show.tv_show_id
               FROM tb_episode_tv_show
               LEFT JOIN tb_tv_show ON tb_episode_tv_show.tv_show_id = tb_tv_show.id 
               ORDER BY tb_episode_tv_show.id DESC";

                                    $result = mysqli_query($koneksi, $query);
                                    if (!$result) {
                                        die("Query gagal: " . mysqli_error($koneksi));
                                    }
                                    $nomorUrut = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $nomorUrut . "</td>";
                                        echo "<td>" . $row['judul_tv_show'] . "</td>";
                                        echo "<td>" . $row['nama_episode'] . "</td>";
                                        echo "<td>" . $row['jumlah_episode'] . "</td>";

                                        echo '<td style="text-align: center;">
                                        <a href="dashboard.php?page=add_episode&id=' . $row['tv_show_id'] . '" class="btn btn-sm btn-primary" title="Ubah">
                    <i class="fas fa-plus"></i>
                </a>
                
                <a href="#" class="btn btn-sm btn-danger btn-delete" title="Hapus" data-toggle="modal" data-target="#modalKonfirmasi" data-filmid="' . $row['episode_id'] . '">
                        <i class="fas fa-trash"></i>
                    </a>
            </td>';
                                        echo "</tr>";

                                        $nomorUrut++;
                                    }

                                    mysqli_free_result($result);
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>