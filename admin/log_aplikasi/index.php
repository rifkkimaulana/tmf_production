<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Log Aplikasi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tmf_datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>User</th>
                                <th>Action</th>
                                <th>Description</th>
                                <th>IP Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once '../config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM tb_logs_aplikasi ORDER BY id DESC");
                            while ($d = mysqli_fetch_assoc($data)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['timestamp']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['username']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['action']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['description']; ?>
                                    </td>
                                    <td>
                                        <?php echo $d['ip_address']; ?>
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