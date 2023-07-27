<div class="card-body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="pengaturan_tab_list">
        <li class="nav-item">
            <a class="nav-link active" id="film-tab" data-toggle="pill" href="#pengaturan_film"
                aria-controls="pengaturan_film">Pengaturan TV Show</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="pengaturan_film">
            </br>
            <div class="form-group">
                <input type="hidden" name="tmdb_id_post" id="tmdb_id_post" value="<?php echo $id_tmdb_post; ?>">

                <label for="judul">Judul TV Show (TMDB):</label>
                <input type="text" class="form-control" id="judul" name="judul"
                    value="<?php echo $row_tmdb['judul']; ?>" required>
                <small class=" text-muted">Isi dengan judul tv show asli dari TMDB.</small>
            </div>
            <div class="form-group">
                <label for="bahasa">Bahasa (TMDB):</label>
                <input type="text" class="form-control" id="bahasa" name="bahasa"
                    value="<?php echo $row_tmdb['bahasa']; ?>">
                <small class="text-muted">Isi dengan bahasa lisan tv show dari TMDB.</small>
            </div>
            <div class="form-group">
                <label for="tagline">Tagline (TMDB):</label>
                <input type="text" class="form-control" id="tagline" name="tagline"
                    value="<?php echo $row_tmdb['tagline']; ?>">
                <small class="text-muted">Isi dengan tagline tv show dari TMDB.</small>
            </div>
            <div class="form-group">
                <label for="rating_mpaa">Rating MPAA (TMDB):</label>
                <input type="text" class="form-control" id="rating_mpaa" name="rating_mpaa"
                    value="<?php echo $row_tmdb['rating_mpaa']; ?>">
                <small class="text-muted">Isi dengan rating usia tv show (MPAA) dari TMDB. Contoh:
                    G, PG, PG-13, R, NC-17.</small>
            </div>
            <div class="form-group">
                <label for="tanggal_rilis">Tanggal Rilis (TMDB):</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="tanggal_rilis" name="tanggal_rilis"
                        placeholder="dd mmm yyyy" value="<?php echo $row_tmdb['tanggal_rilis']; ?>">
                    <div class="input-group-append" data-target="#tanggal_rilis" data-toggle="datetimepicker">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <small class="text-muted">Isi dengan tanggal rilis tv show dari TMDB. Format: dd
                    mmm yyyy (Contoh: 23 Jan 2015).</small>
            </div>

            <div class="form-group">
                <label for="tahun_rilis">Tahun Rilis (TMDB):</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis" placeholder="yyyy"
                        value="<?php echo $row_tmdb['tahun_rilis']; ?>">
                    <div class="input-group-append" data-target="#tahun_rilis" data-toggle="datetimepicker">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <small class="text-muted">Isi dengan tahun rilis tv show dari TMDB. Format: yyyy
                    (Contoh: 2015).</small>
            </div>

            <div class="form-group">
                <label for="tanggal_terakhir_mengudara">Tanggal Terakhir Mengudara (TMDB):</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="tanggal_terakhir_mengudara"
                        name="tanggal_terakhir_mengudara" placeholder="yyyy-mm-dd"
                        value="<?php echo $row_tmdb['tanggal_terakhir_mengudara']; ?>">
                    <div class="input-group-append" data-target="#tanggal_terakhir_mengudara"
                        data-toggle="datetimepicker">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <small class="text-muted">Isi dengan tanggal terakhir mengudara tv show dari TMDB. Format: yyyy-mm-dd
                    (Contoh: 2023-07-24).</small>
            </div>

            <div class="form-group">
                <label for="waktu_jalan">Waktu jalan dalam menit (TMDB):</label>
                <input type="text" class="form-control" id="waktu_jalan" name="waktu_jalan"
                    value="<?php echo $row_tmdb['waktu_jalan']; ?>">
                <small class="text-muted">Isi dengan waktu pemutaran tv show dalam menit dari
                    TMDB.</small>
            </div>
            <div class="form-group">
                <label for="jumlah_episode">Jumlah Episode (TMDB) dalam menit:</label>
                <input type="text" class="form-control" id="jumlah_episode" name="jumlah_episode"
                    value="<?php echo $row_tmdb['jumlah_episode']; ?>">
                <small class="text-muted">Isi dengan jumlah episode dari TMDB.</small>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="rating_tmdb">Rating TMDB:</label>
                        <input type="text" class="form-control" id="rating_tmdb" name="rating_tmdb"
                            value="<?php echo $row_tmdb['rating1']; ?>">
                        <small class="text-muted">Isi dengan peringkat rata-rata/suara dari
                            TMDB.</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="other_input">Other Input:</label>
                        <input type="text" class="form-control" id="other_input" name="other_input"
                            value="<?php echo $row_tmdb['rating2']; ?>">
                        <small class="text-muted">This is another input in the second
                            column.</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="anggaran">Anggaran (TMDB):</label>
                <input type="text" class="form-control" id="anggaran" name="anggaran"
                    value="<?php echo $row_tmdb['anggaran']; ?>">
                <small class="text-muted">Isi dengan anggaran tv show dari TMDB.</small>
            </div>
            <div class="form-group">
                <label for="pendapatan">Pendapatan (TMDB):</label>
                <input type="text" class="form-control" id="pendapatan" name="pendapatan"
                    value="<?php echo $row_tmdb['pendapatan']; ?>">
                <small class="text-muted">Isi dengan pendapatan tv show dari TMDB.</small>
            </div>
            <div class="form-group">
                <label for="youtube_id">Youtube ID Untuk Trailer (TMDB):</label>
                <input type="text" class="form-control" id="youtube_id" name="youtube_id"
                    value="<?php echo $row_tmdb['link_trailer']; ?>">
                <small class="text-muted">Isi dengan ID YouTube untuk trailer tv show dari TMDB.
                    Contoh: YROTBt1sae8.</small>
            </div>
            <div class="form-group">
                <label for="penerjemah">Penerjemah:</label>
                <input type="text" class="form-control" id="penerjemah" name="penerjemah"
                    value="<?php echo $row_tmdb['penerjemah']; ?>">
                <small class="text-muted">Jika menggunakan subtitle di player, isi dengan
                    informasi penerjemah subtitle film.</small>
            </div>
            <div class="form-group">
                <label for="url_poster">Url Poster (TMDB):</label>
                <input type="text" class="form-control" id="url_poster" name="url_poster"
                    value="<?php echo $row_tmdb['url_poster']; ?>">
                <small class="text-muted">Isi dengan URL gambar poster tv show dari TMDB. Gunakan
                    gambar internal saja.</small>
            </div>
            <div class="form-group">
                <label for="imdb_id">imdbID:</label>
                <input type="text" class="form-control" id="imdb_id" name="imdb_id"
                    value="<?php echo $row_tmdb['imdb_id']; ?>">
                <small class="text-muted">Isi dengan ID tv show dari IMDb. Contoh:
                    tt2582802.</small>
            </div>
            <div class="form-group">
                <label for="tmdb_id">tmdbID:</label>
                <input type="text" class="form-control" id="tmdb_id" name="tmdb_id"
                    value="<?php echo $row_tmdb['tmdb_id']; ?>">
                <small class="text-muted">Isi dengan ID tv show dari TMDB. Contoh: 244786.</small>
            </div>
        </div>
    </div>
</div>

<!--Script Style Callendar Terakhir mengudara-->
<script>
    $(function () {
        $('#tanggal_terakhir_mengudara').datetimepicker({
            format: 'YYYY-MM-DD',
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'fas fa-calendar-day',
                clear: 'far fa-trash-alt',
                close: 'fas fa-times'
            }
        });
    });
</script>