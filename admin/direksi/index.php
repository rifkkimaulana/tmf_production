<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Direksi</h3>
                    </div>
                    <div class="card-body">
                        <form action="direksi/create.php" method="post">
                            <div class="form-group">
                                <label for="direksi_name">Nama Direksi</label>
                                <input type="text" class="form-control" id="direksi_name" name="nama_direksi" required>
                                <small id="direksi_name_help" class="form-text text-muted">Masukkan nama direksi seperti
                                    Action, Comedy, Drama, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="direksi_slug">Slug</label>
                                <input type="text" class="form-control" id="direksi_slug" name="direksi_slug">
                                <small id="direksi_slug_help" class="form-text text-muted">"Slug" adalah versi
                                    URL-friendly
                                    dari nama direksi. Biasanya, menggunakan huruf kecil dan terdiri dari huruf, angka,
                                    dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="direksi/delete.php" method="post" id="form-direksi">
                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="hapusDireksiBtn">
                                    <i class="fas fa-trash"></i> Hapus Direksi
                                </button>
                            </div>

                            <h3 class="card-title">Direksi</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tmf_datatable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 2%;">
                                                <input type="checkbox" id="checkAll">
                                            </th>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 30%;">Nama Direksi</th>
                                            <th style="width: 30%;">Slug</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_direksi ORDER BY id DESC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_direksi[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_direksi'] . "</td>";
                                            echo "<td>" . $row['slug_direksi'] . "</td>";

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
                </div>
            </div>
        </div>
    </div>
</section>