<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Episode - TV Show</h3>
                    </div>
                    <div class="card-body">
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
                                $query = "SELECT tb_episode_tv_show.id AS episode_id, tb_tv_show.judul_tv_show, tb_episode_tv_show.nama_episode, tb_episode_tv_show.jumlah_episode, tb_episode_tv_show.slug_episode
               FROM tb_episode_tv_show
               LEFT JOIN tb_tv_show ON tb_episode_tv_show.tv_show_id = tb_tv_show.id";

                                $result = mysqli_query($koneksi, $query);
                                if (!$result) {
                                    die("Query gagal: " . mysqli_error($koneksi));
                                }

                                $nomorUrut = 1;

                                // Lakukan perulangan untuk menampilkan data dalam tabel
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $nomorUrut . "</td>";
                                    echo "<td>" . $row['judul_tv_show'] . "</td>";
                                    echo "<td>" . $row['nama_episode'] . "</td>";
                                    echo "<td>" . $row['jumlah_episode'] . "</td>";

                                    echo '<td style="text-align: center;">
                <a href="dashboard.php?page=update_episode_tv_show&id=' . $row['episode_id'] . '" class="btn btn-sm btn-warning" title="Ubah">
                    <i class="fas fa-edit"></i>
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
</section>
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
<script>
    // Tambahkan script berikut untuk menangkap ID dari button delete yang dipilih
    $(document).ready(function () {
        $('.btn-delete').click(function () {
            var episode_id = $(this).data('filmid');
            var hapusLink = document.getElementById('hapusLink');
            hapusLink.href = 'episode/delete.php?id=' + episode_id;
        });
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