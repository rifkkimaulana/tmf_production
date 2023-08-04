<?php
include '../config/koneksi.php';
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Artikel</h3>
                    </div>
                    <div class="card-body">
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
                    GROUP BY tb_artikel.id";

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
<div class="modal fade" id="modalKonfirmasiHapusArtikel" tabindex="-1" role="dialog"
    aria-labelledby="modalKonfirmasiHapusArtikelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKonfirmasiHapusArtikelLabel">Konfirmasi Hapus Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus artikel dengan judul:
                <span id="judulArtikelToDelete"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="#" class="btn btn-danger" id="hapusArtikelLink">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#modalKonfirmasiHapusArtikel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var artikelId = button.data('artikelid');
            var judulArtikel = button.data('judulartikel');

            $('#judulArtikelToDelete').text(judulArtikel);

            var hapusArtikelLink = 'artikel/proses_delete_artikel.php?id=' + artikelId;
            $('#hapusArtikelLink').attr('href', hapusArtikelLink);
        });
    });
</script>
<div class="modal fade" id="modalBerhasilDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Berhasil Menghapus Artikel</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Artikel berhasil dihapus dari database.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalGagalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Gagal Menghapus Artikel</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Gagal menghapus artikel dari database. Silakan coba lagi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
    }
}
?>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Artikel Berhasil Diupdate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Artikel berhasil diupdate.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const alertParam = urlParams.get('alert');

    if (alertParam === 'berhasil_diupdate') {
        $('#successModal').modal('show');
    }
</script>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Artikel Berhasil Ditambahkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Artikel berhasil ditambahkan.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const pageParam = urlParams.get('page');
    const alertParam = urlParams.get('alert');

    if (alertParam === 'berhasil_ditambahkan' && pageParam === 'artikel') {
        $('#successModal').modal('show');
    }
</script>