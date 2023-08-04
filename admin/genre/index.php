<?php
include '../config/koneksi.php';
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Genre</h3>
                    </div>
                    <div class="card-body">
                        <form action="genre/create.php" method="post">
                            <div class="form-group">
                                <label for="nama_genre">Nama Genre</label>
                                <input type="text" class="form-control" id="nama_genre" name="nama_genre" required>
                                <small id="nama_genre_help" class="form-text text-muted">Masukkan nama genre seperti
                                    Aksi, Komedi, Drama, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_genre">Slug</label>
                                <input type="text" class="form-control" id="slug_genre" name="slug_genre">
                                <small id="slug_genre_help" class="form-text text-muted">“Slug” adalah versi
                                    URL-friendly dari nama. Umumnya semuanya huruf kecil dan hanya terdiri dari huruf,
                                    angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <form action="genre/delete.php" method="post" id="form-genre">

                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="hapusGenreBtn">
                                    <i class="fas fa-trash"></i> Hapus Genre
                                </button>
                            </div>

                            <h3 class="card-title">Genre</h3>
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
                                            <th style="width: 30%;">Genre</th>
                                            <th style="width: 30%;">Slug</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_genre";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_genre[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_genre'] . "</td>";
                                            echo "<td>" . $row['slug_genre'] . "</td>";

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

                            $('#selectLength').on('change', function () {
                                table.page.len($(this).val()).draw();
                            });

                            $('#checkAll').on('change', function () {
                                $('input[name="selected_genre[]"]').prop('checked', this.checked);
                            });

                            $('input[name="selected_genre[]"]').on('change', function () {
                                if ($('input[name="selected_genre[]"]:checked').length === $('input[name="selected_genre[]"]').length) {
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