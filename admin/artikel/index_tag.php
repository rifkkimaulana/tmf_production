<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Tag Artikel</h3>
                    </div>
                    <div class="card-body">
                        <form action="artikel/create_tag.php" method="post">
                            <div class="form-group">
                                <label for="nama_tag">Nama Tag</label>
                                <input type="text" class="form-control" id="nama_tag" name="nama_tag" required>
                                <small id="nama_tag_help" class="form-text text-muted">Masukkan nama kategori
                                    seperti Aksi, Komedi, Drama, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_tag">Slug</label>
                                <input type="text" class="form-control" id="slug_tag" name="slug_tag">
                                <small id="slug_tag_help" class="form-text text-muted">“Slug” adalah versi
                                    URL-friendly dari nama. Umumnya semuanya huruf kecil dan hanya terdiri dari huruf,
                                    angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <form action="artikel/delete_tag.php" method="post" id="form-kategori-artikel">
                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="hapusKategoriArtikelBtn">
                                    <i class="fas fa-trash"></i> Hapus Kategori Artikel
                                </button>
                            </div>
                            <h3 class="card-title">Kategori Artikel</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_tag" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 2%;">
                                                <input type="checkbox" id="checkAll">
                                            </th>
                                            <th style="width: 5%;">No</th>
                                            <th style="width: 30%;">Kategori Artikel</th>
                                            <th style="width: 30%;">Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_tag_artikel";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_tag_artikel[]" value="' . $row['id'] . '"></td>';
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
                </div>
            </div>
        </div>
    </div>
</section>