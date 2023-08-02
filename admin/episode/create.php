<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <?php if (empty($_GET['id'])) { ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Seleksi TV Show</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Judul TV Show</th>
                                            <th style="width: 10%;">Pilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT id, judul_tv_show FROM tb_tv_show";
                                        $result = mysqli_query($koneksi, $query);

                                        if (!$result) {
                                            die("Query gagal: " . mysqli_error($koneksi));
                                        }

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['judul_tv_show'] . "</td>";
                                            echo '<td>
                                  <form action="dashboard.php" method="get">
                                      <input type="hidden" name="page" value="add_episode">
                                      <input type="hidden" name="id" value="' . $row['id'] . '">
                                      <button type="submit" class="btn btn-primary">Pilih</button>
                                  </form>
                              </td>';
                                            echo "</tr>";
                                        }

                                        mysqli_free_result($result);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <form action="episode/proses_create.php" method="post" enctype="multipart/form-data">
                    <?php
                    include '../config/koneksi.php';
                    if (isset($_GET['id'])) {
                        $id_tv_show = $_GET['id'];
                        $result = mysqli_query($koneksi, "SELECT id, judul_tv_show, deskripsi, status, genre_ids, tag_ids, direktur_ids, pemain_ids, tahun_ids, negara_ids, kualitas_ids, jaringan_ids, thumbnail, tmdb_id,  created_at, updated_at FROM tb_tv_show
                    WHERE id = $id_tv_show");
                        $row = mysqli_fetch_assoc($result);

                        $id_tmdb_post = $row['tmdb_id'];
                        $id_tv_post = $row['id'];

                        $result_tmdb = mysqli_query($koneksi, "SELECT judul, bahasa, tagline, rating_mpaa, tanggal_rilis, tahun_rilis, tanggal_terakhir_mengudara, waktu_jalan, jumlah_episode, rating1, rating2, anggaran, pendapatan, link_trailer, url_poster, imdb_id, tmdb_id, penerjemah FROM tb_tmdb WHERE id = $id_tmdb_post");
                        $row_tmdb = mysqli_fetch_assoc($result_tmdb);

                        echo '<div class="card">';
                        include 'episode/form_tmdb.php';
                        echo '</div>';
                        ?>
                </div>
                <div class="col-4">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a class="d-block text-dark" data-toggle="collapse" href="#collapse1">
                                        Terbitkan
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="tv_show_id" id="tv_show_id"
                                            value="<?php echo $id_tv_post; ?>">

                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="publik">Publik</option>
                                            <option value="draf">Draf</option>
                                            <option value="terbitkan">Terbitkan segera</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                    <a href="<?php echo $base_url . "/admin/dashboard.php?page=add_episode"; ?>">
                                        <button type="button" class="btn btn-secondary float-right mr-1">Batal</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion2">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a class="d-block text-dark" data-toggle="collapse" href="#collapse2">
                                        Keterangan
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="collapse show" data-parent="#accordion2">
                                <div class="card-body">
                                    <form id="episodeForm" method="post" action="proses_form.php">
                                        <div class="form-group">
                                            <label for="nama_episode">Nama Episode</label>
                                            <input type="text" class="form-control" id="nama_episode" name="nama_episode"
                                                value="<?php echo $row_tmdb['judul']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_episode">Episode Ke</label>
                                            <input type="number" class="form-control" id="jumlah_episode"
                                                name="jumlah_episode" required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    } ?>
            </div>
        </div>
    </div>
</section>
</form>

<script>
    $(document).ready(function () {
        var table = $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "language": {
                "lengthMenu": "_MENU_",
                "zeroRecords": "No data found",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "Showing 0 to 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "search": "Cari:",
                "paginate": {
                    "first": "Start",
                    "last": "End",
                    "next": "Next",
                    "previous": "Previous"
                }
            },
            "lengthMenu": [5, 10, 50, 100],
            "pageLength": 5
        });


    });
</script>