<?php
include '../config/koneksi.php';
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pemain</h3>
                    </div>
                    <div class="card-body">
                        <form action="pemain/create.php" method="post">
                            <div class="form-group">
                                <label for="nama_pemain">Nama Pemain</label>
                                <input type="text" class="form-control" id="playnama_pemainer_name" name="nama_pemain"
                                    required>
                                <small id="player_name_help" class="form-text text-muted">Masukkan nama pemain seperti
                                    Action, Comedy, Drama, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_pemain">Slug</label>
                                <input type="text" class="form-control" id="slug_pemain" name="slug_pemain">
                                <small id="player_slug_help" class="form-text text-muted">"Slug" adalah versi
                                    URL-friendly dari nama pemain. Biasanya, menggunakan huruf kecil dan terdiri dari
                                    huruf, angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="pemain/delete.php" method="post" id="form-pemain">
                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="deletePlayerBtn">
                                    <i class="fas fa-trash"></i> Hapus Pemain
                                </button>
                            </div>

                            <h3 class="card-title">Pemain</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 2%;">
                                                <input type="checkbox" id="checkAll">
                                            </th>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 30%;">Nama Pemain</th>
                                            <th style="width: 30%;">Slug</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_pemain ORDER BY id ASC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_player[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_pemain'] . "</td>";
                                            echo "<td>" . $row['slug_pemain'] . "</td>";

                                            echo "</tr>";
                                            $no++;
                                        }

                                        mysqli_close($koneksi);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                                    "zeroRecords": "Tidak ada data yang ditemukan",
                                    "info": "Menampilkan _START_ hingga _END_ dari total _TOTAL_ entri",
                                    "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
                                    "infoFiltered": "(difilter dari total _MAX_ entri)",
                                    "search": "Cari:",
                                    "paginate": {
                                        "first": "Awal",
                                        "last": "Akhir",
                                        "next": "Berikutnya",
                                        "previous": "Sebelumnya"
                                    }
                                },
                                "lengthMenu": [5, 10, 50, 100],
                                "pageLength": 5
                            });

                            $('#selectLength').on('change', function () {
                                table.page.len($(this).val()).draw();
                            });

                            $('#checkAll').on('change', function () {
                                $('input[name="selected_player[]"]').prop('checked', this.checked);
                            });

                            $('input[name="selected_player[]"]').on('change', function () {
                                if ($('input[name="selected_player[]"]:checked').length === $('input[name="selected_player[]"]').length) {
                                    $('#checkAll').prop('checked', true);
                                } else {
                                    $('#checkAll').prop('checked', false);
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>