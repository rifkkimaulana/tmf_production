<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Kualitas</h3>
                    </div>
                    <div class="card-body">
                        <form action="kualitas/create.php" method="post">
                            <div class="form-group">
                                <label for="nama_kualitas">Nama Kualitas</label>
                                <input type="text" class="form-control" id="nama_kualitas" name="nama_kualitas"
                                    required>
                                <small id="quality_name_help" class="form-text text-muted">Masukkan nama kualitas
                                    seperti HD, Full HD, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_kualitas">Slug</label>
                                <input type="text" class="form-control" id="slug_kualitas" name="slug_kualitas">
                                <small id="quality_slug_help" class="form-text text-muted">"Slug" adalah versi
                                    URL-friendly dari nama kualitas. Biasanya, menggunakan huruf kecil dan terdiri dari
                                    huruf, angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="kualitas/delete.php" method="post" id="form-kualitas">
                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="deleteQualityBtn">
                                    <i class="fas fa-trash"></i> Hapus Kualitas
                                </button>
                            </div>
                            <h3 class="card-title">Kualitas</h3>
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
                                            <th style="width: 30%;">Nama Kualitas</th>
                                            <th style="width: 30%;">Slug</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_kualitas ORDER BY id DESC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_quality[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_kualitas'] . "</td>";
                                            echo "<td>" . $row['slug_kualitas'] . "</td>";

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