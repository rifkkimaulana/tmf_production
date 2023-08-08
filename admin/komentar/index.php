<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Komentar</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tmf_datatable">
                        <thead>
                            <tr>
                                <th width="1%">NO</th>
                                <th>NAMA</th>
                                <th>KOMENTAR</th>
                                <th>WAKTU</th>
                                <th>PAGE</th>
                                <th width="10%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once '../config/koneksi.php';
                            $query_komentar = "SELECT * FROM tb_komentar ORDER BY id DESC";
                            $result_komentar = mysqli_query($koneksi, $query_komentar);
                            $no = 1;
                            while ($row_komentar = mysqli_fetch_assoc($result_komentar)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row_komentar['nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row_komentar['komentar']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row_komentar['waktu_post']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $tmdb_id = $row_komentar['tmdb_id'];
                                        $query_tmdb = "SELECT judul FROM tb_tmdb WHERE id = '$tmdb_id'";
                                        $result_tmdb = mysqli_query($koneksi, $query_tmdb);
                                        if ($row_tmdb = mysqli_fetch_assoc($result_tmdb)) {
                                            echo $row_tmdb['judul'];
                                        } else {
                                            echo "Judul Tidak Ditemukan";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (isset($_SESSION['nama']) && $_SESSION['nama'] === $row_komentar['nama']) {
                                            ?>
                                            <form action="view/proses_hapus_komentar.php" method="POST">
                                                <input type="hidden" name="komentar_id"
                                                    value="<?php echo $row_komentar['id']; ?>">
                                                <span>

                                                    <a class="btn btn-sm btn-danger" title="Hapus" data-toggle="modal"
                                                        data-target="#konfirmasiDeleteModal_<?php echo $row_komentar['id']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </span>

                                            </form>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <div class="modal fade" id="konfirmasiDeleteModal_<?php echo $row_komentar['id']; ?>"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Komentar
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus komentar ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <form action="komentar/delete.php" method="POST">
                                                    <input type="hidden" name="komentar_id"
                                                        value="<?php echo $row_komentar['id']; ?>">
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>