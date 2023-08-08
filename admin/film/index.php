<?php
include '../config/koneksi.php';
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Film</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; width: 2%;">No</th>
                                        <th style="text-align: center; width: 30%;">Judul Film</th>
                                        <th style="text-align: center; width: 20%;">Genre</th>
                                        <th style="text-align: center; width: 20%;">Tag</th>
                                        <th style="text-align: center; width: 15%;">Tanggal Rilis</th>
                                        <th style="text-align: center; width: 13%;">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT tb_film.id, tb_film.judul_film, GROUP_CONCAT(tb_genre.nama_genre SEPARATOR ', ') AS genres, tb_tag.nama_tag, tb_film.created_at
                                            FROM tb_film
                                            LEFT JOIN tb_genre ON FIND_IN_SET(tb_genre.id, tb_film.genre_ids)
                                            JOIN tb_tag ON tb_film.tag_ids = tb_tag.id
                                            GROUP BY tb_film.id
                                            ORDER BY tb_film.id ASC";

                                    $result = mysqli_query($koneksi, $query);
                                    if (!$result) {
                                        die("Query gagal: " . mysqli_error($koneksi));
                                    }

                                    $nomorUrut = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $nomorUrut . "</td>";
                                        echo "<td>" . $row['judul_film'] . "</td>";
                                        echo "<td>" . $row['genres'] . "</td>";
                                        echo "<td>" . $row['nama_tag'] . "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";
                                        echo '<td style="text-align: center;">
                      <a href="dashboard.php?page=update_film&id=' . $row['id'] . '" class="btn btn-sm btn-warning" title="Ubah">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-danger" title="Hapus" data-toggle="modal" data-target="#modalKonfirmasi" data-filmid="' . $row['id'] . '">
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
    });
</script>