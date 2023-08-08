<?php
include '../config/koneksi.php';
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Tag</h3>
                    </div>
                    <div class="card-body">
                        <form action="tag/create.php" method="post">
                            <div class="form-group">
                                <label for="tag_name">Tag Name</label>
                                <input type="text" class="form-control" id="tag_name" name="tag_name" required>
                                <small id="tag_name_help" class="form-text text-muted">Enter the tag name such as
                                    Action, Comedy, Drama, etc.</small>
                            </div>
                            <div class="form-group">
                                <label for="tag_slug">Slug</label>
                                <input type="text" class="form-control" id="tag_slug" name="tag_slug">
                                <small id="tag_slug_help" class="form-text text-muted">"Slug" is the URL-friendly
                                    version of the tag name. Usually, it's all lowercase and consists of letters,
                                    numbers, and hyphens (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="tag/delete.php" method="post" id="form-tag">

                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="hapusTagBtn">
                                    <i class="fas fa-trash"></i> Delete Tag
                                </button>
                            </div>

                            <h3 class="card-title">Tags</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 2%;">
                                                <input type="checkbox" id="checkAll">
                                            </th>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 30%;">Tag Name</th>
                                            <th style="width: 30%;">Slug</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_tag ORDER BY id ASC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_tag[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_tag'] . "</td>";
                                            echo "<td>" . $row['slug_tag'] . "</td>";

                                            echo "</tr>";
                                            $no++;
                                        }

                                        mysqli_close($koneksi);
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </form>

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
                                    "search": "Search:",
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

                            $('#checkAll').on('change', function () {
                                $('input[name="selected_tag[]"]').prop('checked', this.checked);
                            });

                            $('input[name="selected_tag[]"]').on('change', function () {
                                if ($('input[name="selected_tag[]"]:checked').length === $('input[name="selected_tag[]"]').length) {
                                    $('#checkAll').prop('checked', true);
                                } else {
                                    $('#checkAll').prop('checked', false);
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>