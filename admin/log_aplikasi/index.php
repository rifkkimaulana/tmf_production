<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Log Aplikasi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>User ID</th>
                                <th>Action</th>
                                <th>Description</th>
                                <th>IP Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM tb_logs_aplikasi ORDER BY timestamp DESC");
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
                                        <?php echo $d['user_id']; ?>
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