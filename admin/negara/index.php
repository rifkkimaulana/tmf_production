<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Negara</h3>
                    </div>
                    <div class="card-body">
                        <form action="negara/create.php" method="post">
                            <div class="form-group">
                                <label for="nama_negara">Nama Negara</label>
                                <input type="text" class="form-control" id="nama_negara" name="nama_negara" required>
                                <small id="country_name_help" class="form-text text-muted">Masukkan nama negara seperti
                                    Indonesia, Amerika Serikat, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_negara">Slug</label>
                                <input type="text" class="form-control" id="slug_negara" name="slug_negara">
                                <small id="country_slug_help" class="form-text text-muted">"Slug" adalah versi
                                    URL-friendly dari nama negara. Biasanya, menggunakan huruf kecil dan terdiri dari
                                    huruf, angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="negara/delete.php" method="post" id="form-negara">
                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="deleteCountryBtn">
                                    <i class="fas fa-trash"></i> Hapus Negara
                                </button>
                            </div>
                            <h3 class="card-title">Negara</h3>
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
                                            <th style="width: 30%;">Nama Negara</th>
                                            <th style="width: 30%;">Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_negara ORDER BY id DESC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_country[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_negara'] . "</td>";
                                            echo "<td>" . $row['slug_negara'] . "</td>";

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