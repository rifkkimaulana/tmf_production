<!-- Modal dashboard -->
<!-- Search Modal Film -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Search Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="searchForm" method="get" action="dashboard.php">
                    <input type="hidden" name="page" value="add_film_tmdb">
                    <div class="form-group">
                        <label for="id_film">Silahkan masukan id film:</label>
                        <input type="text" id="id_film" name="id_film" class="form-control"
                            placeholder="Enter your search term" required>
                        <small class="text-muted">Isi dengan id film asli dari TMDB.</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal TV-->
<div class="modal" id="searchModalTv" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Search Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="searchForm" method="get" action="dashboard.php">
                    <input type="hidden" name="page" value="add_tv_show_tmdb">
                    <div class="form-group">
                        <label for="id_tv">Silahkan masukan id TV:</label>
                        <input type="text" id="id_tv" name="id_tv" class="form-control"
                            placeholder="Enter your search term" required>
                        <small class="text-muted">Isi dengan id TV asli dari TMDB.</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function openSearchModal() {
        $('#searchModal').modal('show');
    }
    function openSearchModalTv() {
        $('#searchModalTv').modal('show');
    }
</script>

<!-- Modal Page Users Add, Edit, Delete -->
<div class="modal fade" id="tambah_pengguna_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="users/create.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required="required"
                            placeholder="Masukkan Nama ..">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required="required"
                            placeholder="Masukkan Username ..">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required="required"
                            placeholder="Masukkan Email ..">
                    </div>
                    <div class="form-group">
                        <label>No Whatsapp</label>
                        <input type="text" class="form-control" name="no_wa" required="required"
                            placeholder="Masukkan No Whatsapp ..">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required="required" min="5"
                            placeholder="Masukkan Password ..">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level" required="required">
                            <option value=""> - Pilih Level - </option>
                            <option value="administrator"> Administrator </option>
                            <option value="manajemen"> Manajemen </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$data = mysqli_query($koneksi, "SELECT * FROM tb_users");
while ($d = mysqli_fetch_array($data)) {
    ?>
    <div class="modal fade" id="edit_user_<?php echo $d['user_id'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Pengguna</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="users/update.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="user_id" value="<?php echo $d['user_id']; ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required"
                                placeholder="Masukkan Nama .." value="<?php echo $d['user_nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required="required"
                                placeholder="Masukkan Username .." value="<?php echo $d['user_username']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required="required"
                                placeholder="Masukkan Email .." value="<?php echo $d['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>No Whatsapp</label>
                            <input type="text" class="form-control" name="no_wa" required="required"
                                placeholder="Masukkan No Whatsapp .." value="<?php echo $d['no_wa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" min="5"
                                placeholder="Masukkan Password ..">
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level" required="required">
                                <option value=""> - Pilih Level - </option>
                                <option value="administrator" <?php if ($d['user_level'] == 'administrator')
                                    echo 'selected="selected"'; ?>>Administrator</option>
                                <option value="manajemen" <?php if ($d['user_level'] == 'manajemen')
                                    echo 'selected="selected"'; ?>>Manajemen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM tb_users");
while ($d = mysqli_fetch_array($data)) {
    if ($d['user_username'] != 'admin' && $d['user_id'] != 1) {
        ?>
        <div class="modal fade" id="hapus_user_<?php echo $d['user_id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin ingin menghapus username:
                            <?php echo $d['user_username'] ?>?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <a href="users/delete.php?id=<?php echo $d['user_id'] ?>" class="btn btn-primary">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<!-- Modal Reset Database Konfirmasi -->
<div class="modal fade" id="confirmResetModal" tabindex="-1" role="dialog" aria-labelledby="confirmResetModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmResetModalLabel">Konfirmasi Reset Database</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin melakukan reset database? Tindakan ini akan menghapus semua data dalam tabel
                (kecuali tabel "user").
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="reset_database/reset_database_process.php" class="btn btn-danger">Reset Database</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Index Artikel -->
<?php
if (isset($_GET['alert'])) {
    if ($_GET['alert'] === 'berhasil_delete') {
        echo '<script>$("#modalBerhasilDelete").modal("show");</script>';
    } elseif ($_GET['alert'] === 'gagal_delete') {
        echo '<script>$("#modalGagalDelete").modal("show");</script>';
    }
}
?>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const alertParam = urlParams.get('alert');
    const pageParam = urlParams.get('page');

    if (alertParam === 'berhasil_diupdate' || (alertParam === 'berhasil_ditambahkan' && pageParam === 'artikel')) {
        $('#successModal').modal('show');
    }
</script>
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

<!-- Modal Film-->

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

<script>
    $('#modalKonfirmasi').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var filmId = button.data('filmid');
        var filmTitle = button.closest('tr').find('td:eq(1)').text();
        $('#filmTitle').text(filmTitle);

        var hapusLink = 'film/delete.php?id=' + filmId;
        $('#hapusFilmLink').attr('href', hapusLink);
    });
</script>

<div class="modal fade" id="modalBerhasilDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Berhasil Menghapus Film</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Film berhasil dihapus dari database.</p>
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
<div class="modal fade" id="berhasil_diubah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notifikasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Data berhasil diubah.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="berhasil_ditambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notifikasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
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

<!-- Modal TV SHOW-->


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

<script>
    $('#modalKonfirmasi').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var filmId = button.data('filmid');
        var filmTitle = button.closest('tr').find('td:eq(1)').text();

        $('#filmTitle').text(filmTitle);

        var hapusLink = 'tv_show/delete.php?id=' + filmId;
        $('#hapusFilmLink').attr('href', hapusLink);
    });
</script>

<div class="modal fade" id="modalBerhasilDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Berhasil Menghapus Film</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>TV berhasil dihapus dari database.</p>
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
                <h4 class="modal-title">Gagal Menghapus Film</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Gagal menghapus TV dari database. Silakan coba lagi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="berhasil_diubah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notifikasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Data berhasil diubah.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="berhasil_ditambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Notifikasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
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

<!-- Modal Episode-->
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

<!-- Move modal sidebar-->
<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogoutLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogoutLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin keluar?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?php echo $base_url; ?>/logout.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="modalBerhasilLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBerhasilLabel">Sukses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data berhasil disimpan.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBerhasilDihapus" tabindex="-1" role="dialog" aria-labelledby="modalBerhasilLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBerhasilLabel">Sukses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data berhasil Dihapus.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalGagal" tabindex="-1" role="dialog" aria-labelledby="modalGagalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalGagalLabel">Gagal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Terjadi kesalahan, Perubahan data gagal ditambahkan.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<script>
    var alertType = '<?php echo isset($_GET["alert"]) ? $_GET["alert"] : ""; ?>';

    $(document).ready(function () {
        if (alertType === 'berhasil') {
            $('#modalBerhasil').modal('show');
        } else if (alertType === 'gagal') {
            $('#modalGagal').modal('show');
        } else if (alertType === 'berhasil_dihapus') {
            $('#modalBerhasilDihapus').modal('show');
        }
    });
</script>