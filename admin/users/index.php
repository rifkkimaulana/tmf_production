<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
                <!-- Tombol Tambah Pengguna -->
                <div class="card-tools">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah_pengguna_modal">
                        <i class="fas fa-plus"></i> Tambah Pengguna
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table-datatable">
                        <thead>
                            <tr>
                                <th width="1%">NO</th>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>EMAIL</th>
                                <th>WA</th>
                                <th>LEVEL</th>
                                <th width="15%">FOTO</th>
                                <th width="10%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../config/koneksi.php");

                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM tb_users");
                            while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['user_nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['user_username']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['no_wa']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['user_level']; ?>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <?php if ($d['user_foto'] == "") { ?>
                                                <img src="../gambar/sistem/user.png" class="img-fluid" style="max-width: 80px;">
                                            <?php } else { ?>
                                                <img src="../gambar/user/<?php echo $d['user_foto'] ?>" class="img-fluid"
                                                    style="max-width: 80px;">
                                            <?php } ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#edit_user_<?php echo $d['user_id'] ?>">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <?php if ($d['user_username'] != 'admin') { ?>
                                            <?php if ($d['user_id'] != 1) { ?>
                                                <a class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#hapus_user_<?php echo $d['user_id'] ?>">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tambah Pengguna -->
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
<!-- END Modal Tambah Pengguna -->

<!-- Modal User Update -->
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

<!-- Modal Hapus Pengguna -->
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
<!-- END Modal Hapus Pengguna -->