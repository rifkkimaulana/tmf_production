<?php
include '../config/koneksi.php';
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Film</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; width: 1%;">No</th>
                                        <th style="text-align: center; width: 10%;">Judul Film</th>
                                        <th style="text-align: center; width: 7%;">Bahasa</th>
                                        <th style="text-align: center; width: 10%;">Tagline</th>
                                        <th style="text-align: center; width: 5%;">Rating</th>
                                        <th style="text-align: center; width: 8%;">Terbit</th>
                                        <th style="text-align: center; width: 10%;">Poster</th>
                                        <th style="text-align: center; width: 40%;">Overview</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $api_key = "28f59279215bfffc21257db6c0f7bff5";
                                    $base_url = "https://api.themoviedb.org/3";

                                    // Permintaan untuk daftar film populer (popular movies)
                                    $url = "{$base_url}/movie/popular?api_key={$api_key}";
                                    $response = file_get_contents($url);

                                    if ($response !== false) {
                                        $data = json_decode($response, true);

                                        // Proses data di sini sesuai kebutuhan Anda
                                        if (isset($data['results']) && count($data['results']) > 0) {
                                            $no = 1;
                                            foreach ($data['results'] as $movie) {
                                                $judul = $movie['title'];
                                                $bahasa = $movie['original_language'];
                                                $tagline = isset($movie['tagline']) ? $movie['tagline'] : "-";
                                                $rating = $movie['vote_average'];
                                                $terbit = $movie['release_date'];
                                                $poster = "https://image.tmdb.org/t/p/w200/{$movie['poster_path']}";
                                                $overview = $movie['overview'];

                                                echo "<tr>";
                                                echo "<td style=\"text-align: center;\">$no</td>";
                                                echo "<td style=\"text-align: center;\">$judul</td>";
                                                echo "<td style=\"text-align: center;\">$bahasa</td>";
                                                echo "<td style=\"text-align: center;\">$tagline</td>";
                                                echo "<td style=\"text-align: center;\">$rating</td>";
                                                echo "<td style=\"text-align: center;\">$terbit</td>";
                                                echo "<td style=\"text-align: center;\"><img src=\"$poster\" alt=\"$judul\" style=\"width: 100px;\"></td>";
                                                echo "<td style=\"text-align: center;\">$overview</td>";
                                                echo "</tr>";

                                                $no++;
                                            }
                                        } else {
                                            echo "<tr><td colspan=\"8\" style=\"text-align: center;\">Tidak ada data film yang ditemukan.</td></tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan=\"8\" style=\"text-align: center;\">Permintaan gagal.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

        // Event handler saat opsi tampilan berubah
        $('#selectLength').on('change', function () {
            table.page.len($(this).val()).draw();
        });
    });
</script>