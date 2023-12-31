<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Tahun</h3>
                    </div>
                    <div class="card-body">
                        <form action="tahun/create.php" method="post">
                            <div class="form-group">
                                <label for="tahun_rilis">Tahun</label>
                                <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis" required>
                                <small id="year_help" class="form-text text-muted">Masukkan tahun seperti 2023, 2022,
                                    dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_tahun">Slug</label>
                                <input type="text" class="form-control" id="slug_tahun" name="slug_tahun">
                                <small id="year_slug_help" class="form-text text-muted">"Slug" adalah versi URL-friendly
                                    dari tahun. Biasanya, menggunakan angka saja.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="tahun/delete.php" method="post" id="form-tahun">
                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="deleteYearBtn">
                                    <i class="fas fa-trash"></i> Hapus Tahun
                                </button>
                            </div>
                            <h3 class="card-title">Tahun</h3>
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
                                            <th style="width: 30%;">Tahun</th>
                                            <th style="width: 30%;">Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_tahun ORDER BY id DESC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_year[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['tahun_rilis'] . "</td>";
                                            echo "<td>" . $row['slug_tahun'] . "</td>";
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