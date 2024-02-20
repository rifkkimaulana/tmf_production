<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Jaringan</h3>
                    </div>
                    <div class="card-body">
                        <form action="jaringan/create.php" method="post">
                            <div class="form-group">
                                <label for="nama_jaringan">Nama Jaringan</label>
                                <input type="text" class="form-control" id="nama_jaringan" name="nama_jaringan"
                                    required>
                                <small id="network_name_help" class="form-text text-muted">Masukkan nama jaringan
                                    seperti LAN, WAN, dll.</small>
                            </div>
                            <div class="form-group">
                                <label for="slug_jaringan">Slug</label>
                                <input type="text" class="form-control" id="slug_jaringan" name="slug_jaringan">
                                <small id="network_slug_help" class="form-text text-muted">"Slug" adalah versi
                                    URL-friendly dari nama jaringan. Biasanya, menggunakan huruf kecil dan terdiri dari
                                    huruf, angka, dan tanda hubung (-).</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <form action="jaringan/delete.php" method="post" id="form-jaringan">

                        <div class="card-header">
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-danger" id="deleteNetworkBtn">
                                    <i class="fas fa-trash"></i> Hapus Jaringan
                                </button>
                            </div>

                            <h3 class="card-title">Jaringan</h3>
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
                                            <th style="width: 30%;">Nama Jaringan</th>
                                            <th style="width: 30%;">Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM tb_jaringan ORDER BY id DESC";
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td><input type="checkbox" name="selected_network[]" value="' . $row['id'] . '"></td>';
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama_jaringan'] . "</td>";
                                            echo "<td>" . $row['slug_jaringan'] . "</td>";

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