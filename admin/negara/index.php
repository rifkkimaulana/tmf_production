<?php
include '../config/koneksi.php';
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Negara</h3>
                    </div>
                    <div class="card-body">
                        <form action="negara/create.php" method="post">
                            <div class="form-group">
                                <label for="nama_negara">Nama Negara</label>
                                <input type="text" class="form-control" id="nama_negara" name="nama_negara" required>
                                <small id="country_name_help" class="form-text text-muted">Masukkan nama negara seperti
                                    Indonesia, Amerika Serikat, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_negara">Slug</label>
                                <input type="text" class="form-control" id="slug_negara" name="slug_negara">
                                <small id="country_slug_help" class="form-text text-muted">"Slug" adalah versi
                                    URL-friendly dari nama negara. Biasanya, menggunakan huruf kecil dan terdiri dari
                                    huruf, angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <form action="negara/delete.php" method="post" id="form-negara">

                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="deleteCountryBtn">
                                    <i class="fas fa-trash"></i> Hapus Negara
                                </button>
                            </div>

                            <h3 class="card-title">Negara</h3>
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
                                            <th style="width: 30%;">Nama Negara</th>
                                            <th style="width: 30%;">Slug</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_negara";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_country[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_negara'] . "</td>";
                                            echo "<td>" . $row['slug_negara'] . "</td>";

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

                            // Event handler ketika opsi jumlah entri diubah
                            $('#selectLength').on('change', function () {
                                table.page.len($(this).val()).draw();
                            });

                            // Event handler ketika checkbox pada thead di-check
                            $('#checkAll').on('change', function () {
                                $('input[name="selected_country[]"]').prop('checked', this.checked);
                            });

                            // Event handler ketika checkbox pada tbody di-check
                            $('input[name="selected_country[]"]').on('change', function () {
                                if ($('input[name="selected_country[]"]:checked').length === $('input[name="selected_country[]"]').length) {
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