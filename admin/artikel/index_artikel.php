<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Artikel</h3>
                        <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=add_artikel"
                            class="btn-primary btn-sm float-right">Add Artikel</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; width: 2%;">No</th>
                                        <th style="text-align: center; width: 30%;">Judul Artikel</th>
                                        <th style="text-align: center; width: 20%;">Kategori</th>
                                        <th style="text-align: center; width: 20%;">Status</th>
                                        <th style="text-align: center; width: 15%;">Tanggal Rilis</th>
                                        <th style="text-align: center; width: 13%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT tb_artikel.id, tb_artikel.judul_artikel, GROUP_CONCAT(tb_kategori_artikel.nama_kategori SEPARATOR ', ') AS kategori_artikel, tb_tag_artikel.nama_tag, tb_artikel.created_at
                                    FROM tb_artikel
                                    LEFT JOIN tb_kategori_artikel ON FIND_IN_SET(tb_kategori_artikel.id, tb_artikel.kategori_ids)
                                    JOIN tb_tag_artikel ON tb_artikel.tag_ids = tb_tag_artikel.id
                                    GROUP BY tb_artikel.id
                                    ORDER BY tb_artikel.id DESC";

                                    $result = mysqli_query($koneksi, $query);
                                    if (!$result) {
                                        die("Query gagal: " . mysqli_error($koneksi));
                                    }

                                    $nomorUrut = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $nomorUrut . "</td>";
                                        echo "<td>" . $row['judul_artikel'] . "</td>";
                                        echo "<td>" . $row['kategori_artikel'] . "</td>";
                                        echo "<td>" . $row['nama_tag'] . "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";
                                        echo '<td style="text-align: center;">
                                            <a href="dashboard.php?page=update_artikel&id=' . $row['id'] . '" class="btn btn-sm btn-warning" title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger" title="Hapus" data-toggle="modal" data-target="#modalKonfirmasiHapusArtikel" data-artikelid="' . $row['id'] . '" data-judulartikel="' . $row['judul_artikel'] . '">
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