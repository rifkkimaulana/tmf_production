<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah_pengguna_modal">
                        <i class="fas fa-plus"></i> Tambah Pengguna
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example2">
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
                            $data = mysqli_query($koneksi, "SELECT * FROM tb_users ORDER BY user_id DESC");
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
    });
</script>