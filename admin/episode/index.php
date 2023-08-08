<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Episode - TV Show</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
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
               ORDER BY tb_episode_tv_show.created_at ASC";

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
<!--modal hapus-->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalKonfirmasiLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKonfirmasiLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="#" id="hapusLink" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<!--modal gagal karena episode sudah ada-->
<div class="modal fade" id="dataSudahAdaModal" tabindex="-1" role="dialog" aria-labelledby="dataSudahAdaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dataSudahAdaModalLabel">Data Sudah Ada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data episode tersebut sudah ada!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Data berhasil ditambahkan-->
<div class="modal fade" id="berhasilAddEpisodeModal" tabindex="-1" role="dialog"
    aria-labelledby="berhasilAddEpisodeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="berhasilAddEpisodeModalLabel">Berhasil Ditambahkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data episode berhasil ditambahkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--data gagal ditambahkan-->
<div class="modal fade" id="gagalDitambahkanModal" tabindex="-1" role="dialog"
    aria-labelledby="gagalDitambahkanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gagalDitambahkanModalLabel">Gagal Ditambahkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Terjadi kesalahan saat menambahkan data episode.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.btn-delete').click(function () {
            var episode_id = $(this).data('filmid');
            var hapusLink = document.getElementById('hapusLink');
            hapusLink.href = 'episode/delete.php?id=' + episode_id;
        });


        <?php
        if (isset($_GET['alert'])) {
            $alert = $_GET['alert'];
            if ($alert === 'data_sudah_ada') {
                echo "$('#dataSudahAdaModal').modal('show');";
            } elseif ($alert === 'berhasil_add_episode') {
                echo "$('#berhasilAddEpisodeModal').modal('show');";
            } elseif ($alert === 'gagal_ditambahkan') {
                echo "$('#gagalDitambahkanModal').modal('show');";
            }
        }
        ?>
    });
</script>

<!-- Modal -->
<div class="modal fade" id="modalBerhasilDelete" tabindex="-1" role="dialog" aria-labelledby="modalBerhasilDeleteLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBerhasilDeleteLabel">Berhasil Menghapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data berhasil dihapus.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Cek parameter URL saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        var urlParams = new URLSearchParams(window.location.search);
        var alertParam = urlParams.get('alert');

        // Jika parameter alert = berhasil_delete, maka tampilkan modal
        if (alertParam === 'berhasil_delete') {
            $('#modalBerhasilDelete').modal('show');
        }
    });
</script>
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

        // Event handler saat opsi tampilan berubah
        $('#selectLength').on('change', function () {
            table.page.len($(this).val()).draw();
        });
    });
</script>