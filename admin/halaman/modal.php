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