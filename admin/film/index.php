<?php
include '../config/koneksi.php';
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Film</h3>
                    </div>
                    <div class="card-body">
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
                                            GROUP BY tb_film.id";

                                // Eksekusi query ke database dan tangani kesalahan
                                $result = mysqli_query($koneksi, $query);
                                if (!$result) {
                                    die("Query gagal: " . mysqli_error($koneksi));
                                }

                                // Inisialisasi nomor urut dengan angka 1
                                $nomorUrut = 1;

                                // Lakukan perulangan untuk menampilkan data dalam tabel
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $nomorUrut . "</td>";
                                    echo "<td>" . $row['judul_film'] . "</td>";
                                    echo "<td>" . $row['genres'] . "</td>"; // Tampilkan genre-genre yang telah digabungkan
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

                                    // Inkremen nomor urut setiap kali melakukan perulangan
                                    $nomorUrut++;
                                }

                                // Bebaskan hasil dari query
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
    });
</script>

<!-- Modal Konfirmasi Penghapusan -->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalKonfirmasiLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKonfirmasiLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus film "<span id="filmTitle"></span>"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="#" id="hapusFilmLink" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Script JavaScript -->
<script>
    // Menangkap event saat modal dibuka
    $('#modalKonfirmasi').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button yang membuka modal
        var filmId = button.data('filmid'); // Mengambil data-filmid dari atribut data pada button
        var filmTitle = button.closest('tr').find('td:eq(1)').text(); // Mengambil judul film dari kolom kedua pada baris yang dipilih

        $('#filmTitle').text(filmTitle);

        var hapusLink = 'film/delete.php?id=' + filmId;
        $('#hapusFilmLink').attr('href', hapusLink);
    });
</script>

<!-- Modal Berhasil Delete -->
<div class="modal fade" id="modalBerhasilDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Bagian Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Berhasil Menghapus Film</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Bagian Body Modal -->
            <div class="modal-body">
                <p>Film berhasil dihapus dari database.</p>
            </div>
            <!-- Bagian Footer Modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gagal Delete -->
<div class="modal fade" id="modalGagalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Gagal Menghapus Film</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Gagal menghapus film dari database. Silakan coba lagi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Notifikasi -->
<div class="modal fade" id="berhasil_diubah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notifikasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Isi pesan notifikasi di sini -->
                <p>Data berhasil diubah.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Notifikasi -->
<div class="modal fade" id="berhasil_ditambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notifikasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Isi pesan notifikasi di sini -->
                <p>Data berhasil diubah.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_GET['alert'])) {
    if ($_GET['alert'] === 'berhasil_delete') {
        echo '<script>$("#modalBerhasilDelete").modal("show");</script>';
    } elseif ($_GET['alert'] === 'gagal_delete') {
        echo '<script>$("#modalGagalDelete").modal("show");</script>';
    } elseif ($_GET['alert'] === 'berhasil_ditambah') {
        echo '<script>$("#berhasil_ditambah").modal("show");</script>';
    } elseif ($_GET['alert'] === 'berhasil_diubah') {
        echo '<script>$("#berhasil_diubah").modal("show");</script>';
    }
}
?>