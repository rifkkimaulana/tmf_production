<?php
include '../config/koneksi.php';
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Film</h3>
                    </div>
                    <div class="card-body">
                        <form action="kualitas/create.php" method="post">
                            <div class="form-group">
                                <label for="judul_film">Judul Film</label>
                                <input type="text" class="form-control" id="judul_film" name="judul_film" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="pengaturan_tab_list">
                            <li class="nav-item">
                                <a class="nav-link active" id="film-tab" data-toggle="pill" href="#pengaturan_film"
                                    aria-controls="pengaturan_film">Pengaturan Film</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="player-tab" data-toggle="pill" href="#pengaturan_player"
                                    aria-controls="pengaturan_player">Pengaturan Player</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="download-tab" data-toggle="pill" href="#pengaturan_download"
                                    aria-controls="pengaturan_download">Pengaturan Download</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pengaturan_film">
                                </br>
                                <form>
                                    <div class="form-group">
                                        <label for="judul">Judul (TMDB):</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                        <small class="text-muted">Isi dengan judul film asli dari TMDB.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasa">Bahasa (TMDB):</label>
                                        <input type="text" class="form-control" id="bahasa" name="bahasa">
                                        <small class="text-muted">Isi dengan bahasa lisan film dari TMDB.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tagline">Tagline (TMDB):</label>
                                        <input type="text" class="form-control" id="tagline" name="tagline">
                                        <small class="text-muted">Isi dengan tagline film dari TMDB.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="rating_mpaa">Rating MPAA (TMDB):</label>
                                        <input type="text" class="form-control" id="rating_mpaa" name="rating_mpaa">
                                        <small class="text-muted">Isi dengan rating usia film (MPAA) dari TMDB. Contoh:
                                            G, PG, PG-13, R, NC-17.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_rilis">Tanggal Rilis (TMDB):</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tanggal_rilis"
                                                name="tanggal_rilis" placeholder="dd mmm yyyy">
                                            <div class="input-group-append" data-target="#tanggal_rilis"
                                                data-toggle="datetimepicker">
                                                <span class="input-group-text"><i
                                                        class="fas fa-calendar-alt"></i></span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Isi dengan tanggal rilis film dari TMDB. Format: dd
                                            mmm yyyy (Contoh: 23 Jan 2015).</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="tahun_rilis">Tahun Rilis (TMDB):</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis"
                                                placeholder="yyyy">
                                            <div class="input-group-append" data-target="#tahun_rilis"
                                                data-toggle="datetimepicker">
                                                <span class="input-group-text"><i
                                                        class="fas fa-calendar-alt"></i></span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Isi dengan tahun rilis film dari TMDB. Format: yyyy
                                            (Contoh: 2015).</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="waktu_jalan">Waktu jalan dalam menit (TMDB):</label>
                                        <input type="text" class="form-control" id="waktu_jalan" name="waktu_jalan">
                                        <small class="text-muted">Isi dengan waktu pemutaran film dalam menit dari
                                            TMDB.</small>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="rating_tmdb">Rating TMDB:</label>
                                                    <input type="text" class="form-control" id="rating_tmdb"
                                                        name="rating_tmdb">
                                                    <small class="text-muted">Isi dengan peringkat rata-rata/suara dari
                                                        TMDB.</small>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="other_input">Other Input:</label>
                                                    <input type="text" class="form-control" id="other_input"
                                                        name="other_input">
                                                    <small class="text-muted">This is another input in the second
                                                        column.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="form-group">
                                        <label for="anggaran">Anggaran (TMDB):</label>
                                        <input type="text" class="form-control" id="anggaran" name="anggaran">
                                        <small class="text-muted">Isi dengan anggaran film dari TMDB.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendapatan">Pendapatan (TMDB):</label>
                                        <input type="text" class="form-control" id="pendapatan" name="pendapatan">
                                        <small class="text-muted">Isi dengan pendapatan film dari TMDB.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube_id">Youtube ID Untuk Trailer (TMDB):</label>
                                        <input type="text" class="form-control" id="youtube_id" name="youtube_id">
                                        <small class="text-muted">Isi dengan ID YouTube untuk trailer film dari TMDB.
                                            Contoh: YROTBt1sae8.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="penerjemah">Penerjemah:</label>
                                        <input type="text" class="form-control" id="penerjemah" name="penerjemah">
                                        <small class="text-muted">Jika menggunakan subtitle di player, isi dengan
                                            informasi penerjemah subtitle film.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="url_poster">Url Poster (TMDB):</label>
                                        <input type="text" class="form-control" id="url_poster" name="url_poster">
                                        <small class="text-muted">Isi dengan URL gambar poster film dari TMDB. Gunakan
                                            gambar internal saja.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="imdb_id">imdbID:</label>
                                        <input type="text" class="form-control" id="imdb_id" name="imdb_id">
                                        <small class="text-muted">Isi dengan ID film dari IMDb. Contoh:
                                            tt2582802.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmdb_id">tmdbID:</label>
                                        <input type="text" class="form-control" id="tmdb_id" name="tmdb_id">
                                        <small class="text-muted">Isi dengan ID film dari TMDB. Contoh: 244786.</small>
                                    </div>
                                </form>

                            </div>

                            <!-- Player Tab Pane -->
                            <div class="tab-pane fade" id="pengaturan_player">
                                <div class="form-group">
                                    </br>
                                    <label for="notif_player">Pemberitahuan Playar:</label>
                                    <input type="text" class="form-control" id="notif_player" name="notif_player">
                                    <small class="text-muted">Pemberitahuan Untuk Player</small>
                                </div>
                                <ul class="nav nav-tabs" id="nested_player_tab_list">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="player-general-tab" data-toggle="pill"
                                            href="#play1">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play2">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play3">3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play4">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play5">5</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play6">6</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play7">7</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play8">8</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play9">9</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play10">10</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play11">11</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play12">12</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play13">13</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play14">14</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#play15">15</a>
                                    </li>

                                </ul>

                                <!-- Nested Tab panes for Player Tab -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="play1">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-1">Judul Player 1:</label>
                                            <input type="text" class="form-control" id="playerJudul-1"
                                                name="playerJudul-1">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-1">Kode Embed 1:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-1" name="kodeEmbed-1">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="play2">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-2">Judul Player 2:</label>
                                            <input type="text" class="form-control" id="playerJudul-2"
                                                name="playerJudul-2">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-2">Kode Embed 2:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-2" name="kodeEmbed-2">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play3">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-3">Judul Player 3:</label>
                                            <input type="text" class="form-control" id="playerJudul-3"
                                                name="playerJudul-3">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-3">Kode Embed 3:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-3" name="kodeEmbed-3">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play4">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-4">Judul Player 4:</label>
                                            <input type="text" class="form-control" id="playerJudul-4"
                                                name="playerJudul-4">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-4">Kode Embed 4:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-4" name="kodeEmbed-4">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play5">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-5">Judul Player 5:</label>
                                            <input type="text" class="form-control" id="playerJudul-5"
                                                name="playerJudul-5">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-5">Kode Embed 5:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-5" name="kodeEmbed-5">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play6">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-6">Judul Player 6:</label>
                                            <input type="text" class="form-control" id="playerJudul-6"
                                                name="playerJudul-6">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-6">Kode Embed 6:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-6" name="kodeEmbed-6">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play7">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-7">Judul Player 7:</label>
                                            <input type="text" class="form-control" id="playerJudul-7"
                                                name="playerJudul-7">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-7">Kode Embed 7:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-7" name="kodeEmbed-7">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play8">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-8">Judul Player 8:</label>
                                            <input type="text" class="form-control" id="playerJudul-8"
                                                name="playerJudul-8">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-8">Kode Embed 8:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-8" name="kodeEmbed-8">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play9">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-9">Judul Player 9:</label>
                                            <input type="text" class="form-control" id="playerJudul-9"
                                                name="playerJudul-9">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-9">Kode Embed 9:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-9" name="kodeEmbed-9">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play10">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-10">Judul Player 10:</label>
                                            <input type="text" class="form-control" id="playerJudul-10"
                                                name="playerJudul-10">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-10">Kode Embed 10:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-10"
                                                name="kodeEmbed-10">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play11">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-11">Judul Player 11:</label>
                                            <input type="text" class="form-control" id="playerJudul-11"
                                                name="playerJudul-11">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-11">Kode Embed 11:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-11"
                                                name="kodeEmbed-11">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play12">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-12">Judul Player 12:</label>
                                            <input type="text" class="form-control" id="playerJudul-12"
                                                name="playerJudul-12">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-12">Kode Embed 12:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-12"
                                                name="kodeEmbed-12">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play13">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-13">Judul Player 13:</label>
                                            <input type="text" class="form-control" id="playerJudul-13"
                                                name="playerJudul-13">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-13">Kode Embed 13:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-13"
                                                name="kodeEmbed-13">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play14">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-14">Judul Player 14:</label>
                                            <input type="text" class="form-control" id="playerJudul-14"
                                                name="playerJudul-14">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-14">Kode Embed 14:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-14"
                                                name="kodeEmbed-14">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="play15">
                                        </br>
                                        <div class="form-group">
                                            <label for="playerJudul-15">Judul Player 15:</label>
                                            <input type="text" class="form-control" id="playerJudul-15"
                                                name="playerJudul-15">
                                            <small class="text-muted">Isikan Judul Player</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kodeEmbed-15">Kode Embed 15:</label>
                                            <input type="text" class="form-control" id="kodeEmbed-15"
                                                name="kodeEmbed-15">
                                            <small class="text-muted">Isikan dengan kode embed url video yang akan
                                                diputar.</small>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Download Tab Pane -->
                            <div class="tab-pane fade" id="pengaturan_download">
                                </br>
                                <!-- Nested Nav tabs for Download Tab -->
                                <ul class="nav nav-tabs" id="nested_download_tab_list">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="player-general-tab" data-toggle="pill"
                                            href="#donwload-1">1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-2">2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-3">3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-4">4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-5">5</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-6">6</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-7">7</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-8">8</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-9">9</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-10">10</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-11">11</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-12">12</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-13">13</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-14">14</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="player-subtitles-tab" data-toggle="pill"
                                            href="#donwload-15">15</a>
                                    </li>
                                </ul>

                                <!-- Nested Tab panes for Player Tab -->
                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="donwload-1">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-1">Judul Download 1:</label>
                                            <input type="text" class="form-control" id="judulDownload-1"
                                                name="judulDownload-1">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-1">Kode Embed 1:</label>
                                            <input type="text" class="form-control" id="linkDownload-1"
                                                name="linkDownload-1">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-2">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-2">Judul Download 2:</label>
                                            <input type="text" class="form-control" id="judulDownload-2"
                                                name="judulDownload-2">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-2">Kode Embed 2:</label>
                                            <input type="text" class="form-control" id="linkDownload-2"
                                                name="linkDownload-2">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-3">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-3">Judul Download 3:</label>
                                            <input type="text" class="form-control" id="judulDownload-3"
                                                name="judulDownload-3">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-3">Kode Embed 3:</label>
                                            <input type="text" class="form-control" id="linkDownload-3"
                                                name="linkDownload-3">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-4">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-4">Judul Download 4:</label>
                                            <input type="text" class="form-control" id="judulDownload-4"
                                                name="judulDownload-4">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-4">Kode Embed 4:</label>
                                            <input type="text" class="form-control" id="linkDownload-4"
                                                name="linkDownload-4">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-5">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-5">Judul Download 5:</label>
                                            <input type="text" class="form-control" id="judulDownload-5"
                                                name="judulDownload-5">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-5">Kode Embed 5:</label>
                                            <input type="text" class="form-control" id="linkDownload-5"
                                                name="linkDownload-5">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-6">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-6">Judul Download 6:</label>
                                            <input type="text" class="form-control" id="judulDownload-6"
                                                name="judulDownload-6">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-6">Kode Embed 6:</label>
                                            <input type="text" class="form-control" id="linkDownload-6"
                                                name="linkDownload-6">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-7">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-7">Judul Download 7:</label>
                                            <input type="text" class="form-control" id="judulDownload-7"
                                                name="judulDownload-7">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-7">Kode Embed 7:</label>
                                            <input type="text" class="form-control" id="linkDownload-7"
                                                name="linkDownload-7">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-8">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-8">Judul Download 8:</label>
                                            <input type="text" class="form-control" id="judulDownload-8"
                                                name="judulDownload-8">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-8">Kode Embed 8:</label>
                                            <input type="text" class="form-control" id="linkDownload-8"
                                                name="linkDownload-8">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-9">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-9">Judul Download 9:</label>
                                            <input type="text" class="form-control" id="judulDownload-9"
                                                name="judulDownload-9">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-9">Kode Embed 9:</label>
                                            <input type="text" class="form-control" id="linkDownload-9"
                                                name="linkDownload-9">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-10">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-10">Judul Download 10:</label>
                                            <input type="text" class="form-control" id="judulDownload-10"
                                                name="judulDownload-10">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-10">Kode Embed 10:</label>
                                            <input type="text" class="form-control" id="linkDownload-10"
                                                name="linkDownload-10">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-11">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-11">Judul Download 11:</label>
                                            <input type="text" class="form-control" id="judulDownload-11"
                                                name="judulDownload-11">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-11">Kode Embed 11:</label>
                                            <input type="text" class="form-control" id="linkDownload-11"
                                                name="linkDownload-11">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-12">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-12">Judul Download 12:</label>
                                            <input type="text" class="form-control" id="judulDownload-12"
                                                name="judulDownload-12">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-12">Kode Embed 12:</label>
                                            <input type="text" class="form-control" id="linkDownload-12"
                                                name="linkDownload-12">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-13">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-13">Judul Download 13:</label>
                                            <input type="text" class="form-control" id="judulDownload-13"
                                                name="judulDownload-13">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-13">Kode Embed 13:</label>
                                            <input type="text" class="form-control" id="linkDownload-13"
                                                name="linkDownload-13">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-14">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-14">Judul Download 14:</label>
                                            <input type="text" class="form-control" id="judulDownload-14"
                                                name="judulDownload-14">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-14">Kode Embed 14:</label>
                                            <input type="text" class="form-control" id="linkDownload-14"
                                                name="linkDownload-14">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donwload-15">
                                        </br>
                                        <div class="form-group">
                                            <label for="judulDownload-15">Judul Download 15:</label>
                                            <input type="text" class="form-control" id="judulDownload-15"
                                                name="judulDownload-15">
                                            <small class="text-muted">Judul Download</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkDownload-15">Kode Embed 15:</label>
                                            <input type="text" class="form-control" id="linkDownload-15"
                                                name="linkDownload-15">
                                            <small class="text-muted">Isikan link sumber download.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-4">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseOne">
                                    Terbitkan
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="statusFilm">Status</label>
                                    <select class="form-control" id="statusFilm" name="statusFilm">
                                        <option value="draf">Draf</option>
                                        <option value="publik">Publik</option>
                                        <option value="terbitkan">Terbitkan segera</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseGenre">
                                    Genre
                                </a>
                            </h4>
                        </div>
                        <div id="collapseGenre" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group" style="height: 100px; overflow-y: auto;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">Item 1</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                        <label class="form-check-label" for="checkbox2">Item 2</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox3">
                                        <label class="form-check-label" for="checkbox3">Item 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">Item 1</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                        <label class="form-check-label" for="checkbox2">Item 2</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox3">
                                        <label class="form-check-label" for="checkbox3">Item 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">Item 1</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                        <label class="form-check-label" for="checkbox2">Item 2</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox3">
                                        <label class="form-check-label" for="checkbox3">Item 3</label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseTag">
                                    Tag
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTag" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="tagInput" placeholder="Enter a tag">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                onclick="addTag()">Add</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="tagList">
                                    <!-- Display added tags here -->
                                </div>
                            </div>
                            <style>
                                .tag {
                                    display: inline-block;
                                    background-color: #f0f0f0;
                                    padding: 5px 10px;
                                    margin-right: 5px;
                                    border-radius: 5px;
                                }

                                .tag i {
                                    margin-left: 5px;
                                    cursor: pointer;
                                }
                            </style>
                            <script>
                                function addTag() {
                                    // Get the input value
                                    const inputElement = document.getElementById("tagInput");
                                    const tags = inputElement.value.split(',').map(tag => tag.trim());

                                    // Check if there are any tags entered
                                    if (tags.length > 0 && tags[0] !== "") {
                                        // Get the tag container element
                                        const tagContainerElement = document.getElementById("tagList");

                                        // Add each tag as a separate element
                                        tags.forEach(tag => {
                                            // Create a new span element for the tag
                                            const newTagElement = document.createElement("span");
                                            newTagElement.textContent = tag;
                                            newTagElement.classList.add("tag");

                                            // Create a delete icon
                                            const deleteIcon = document.createElement("i");
                                            deleteIcon.classList.add("fas", "fa-times");
                                            deleteIcon.addEventListener("click", function () {
                                                tagContainerElement.removeChild(newTagElement);
                                            });

                                            // Append the delete icon and tag to the container
                                            newTagElement.appendChild(deleteIcon);
                                            tagContainerElement.appendChild(newTagElement);
                                        });

                                        // Clear the input field
                                        inputElement.value = "";
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseFirektur">
                                    Direktur
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFirektur" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="directorInput"
                                            placeholder="Enter a director's name">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                onclick="addDirector()">Add</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="directorList">
                                    <!-- Display added directors here -->
                                </div>
                            </div>

                            <style>
                                .director {
                                    display: inline-block;
                                    background-color: #f0f0f0;
                                    padding: 5px 10px;
                                    margin-right: 5px;
                                    border-radius: 5px;
                                }

                                .director i {
                                    margin-left: 5px;
                                    cursor: pointer;
                                }
                            </style>

                            <script>
                                function addDirector() {
                                    // Get the input value
                                    const inputElement = document.getElementById("directorInput");
                                    const directorNames = inputElement.value.split(',').map(director => director.trim());

                                    // Check if there are any director names entered
                                    if (directorNames.length > 0 && directorNames[0] !== "") {
                                        // Get the director container element
                                        const directorContainerElement = document.getElementById("directorList");

                                        // Add each director name as a separate element
                                        directorNames.forEach(directorName => {
                                            // Create a new span element for the director name
                                            const newDirectorElement = document.createElement("span");
                                            newDirectorElement.textContent = directorName;
                                            newDirectorElement.classList.add("director");

                                            // Create a delete icon
                                            const deleteIcon = document.createElement("i");
                                            deleteIcon.classList.add("fas", "fa-times");
                                            deleteIcon.addEventListener("click", function () {
                                                directorContainerElement.removeChild(newDirectorElement);
                                            });

                                            // Append the delete icon and director name to the container
                                            newDirectorElement.appendChild(deleteIcon);
                                            directorContainerElement.appendChild(newDirectorElement);
                                        });

                                        // Clear the input field
                                        inputElement.value = "";
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapsePemain">
                                    Pemain
                                </a>
                            </h4>
                        </div>
                        <div id="collapsePemain" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="playerInput"
                                            placeholder="Enter a player's name">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                onclick="addPlayer()">Add</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="playerList">
                                    <!-- Display added players here -->
                                </div>
                            </div>

                            <style>
                                .player {
                                    display: inline-block;
                                    background-color: #f0f0f0;
                                    padding: 5px 10px;
                                    margin-right: 5px;
                                    border-radius: 5px;
                                }

                                .player i {
                                    margin-left: 5px;
                                    cursor: pointer;
                                }
                            </style>

                            <script>
                                function addPlayer() {
                                    // Get the input value
                                    const inputElement = document.getElementById("playerInput");
                                    const playerNames = inputElement.value.split(',').map(player => player.trim());

                                    // Check if there are any player names entered
                                    if (playerNames.length > 0 && playerNames[0] !== "") {
                                        // Get the player container element
                                        const playerContainerElement = document.getElementById("playerList");

                                        // Add each player name as a separate element
                                        playerNames.forEach(playerName => {
                                            // Create a new span element for the player name
                                            const newPlayerElement = document.createElement("span");
                                            newPlayerElement.textContent = playerName;
                                            newPlayerElement.classList.add("player");

                                            // Create a delete icon
                                            const deleteIcon = document.createElement("i");
                                            deleteIcon.classList.add("fas", "fa-times");
                                            deleteIcon.addEventListener("click", function () {
                                                playerContainerElement.removeChild(newPlayerElement);
                                            });

                                            // Append the delete icon and player name to the container
                                            newPlayerElement.appendChild(deleteIcon);
                                            playerContainerElement.appendChild(newPlayerElement);
                                        });

                                        // Clear the input field
                                        inputElement.value = "";
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseTahun">
                                    Tahun
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTahun" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" id="yearInput"
                                            placeholder="Enter a year">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                onclick="addYear()">Add</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="yearList">
                                    <!-- Display added years here -->
                                </div>
                            </div>

                            <style>
                                .year {
                                    display: inline-block;
                                    background-color: #f0f0f0;
                                    padding: 5px 10px;
                                    margin-right: 5px;
                                    border-radius: 5px;
                                }

                                .year i {
                                    margin-left: 5px;
                                    cursor: pointer;
                                }
                            </style>

                            <script>
                                function addYear() {
                                    // Get the input value
                                    const inputElement = document.getElementById("yearInput");
                                    const years = inputElement.value.split(',').map(year => year.trim());

                                    // Check if there are any years entered and they are valid numbers
                                    if (years.length > 0 && years.every(year => !isNaN(year))) {
                                        // Get the year container element
                                        const yearContainerElement = document.getElementById("yearList");

                                        // Add each year as a separate element
                                        years.forEach(year => {
                                            // Create a new span element for the year
                                            const newYearElement = document.createElement("span");
                                            newYearElement.textContent = year;
                                            newYearElement.classList.add("year");

                                            // Create a delete icon
                                            const deleteIcon = document.createElement("i");
                                            deleteIcon.classList.add("fas", "fa-times");
                                            deleteIcon.addEventListener("click", function () {
                                                yearContainerElement.removeChild(newYearElement);
                                            });

                                            // Append the delete icon and year to the container
                                            newYearElement.appendChild(deleteIcon);
                                            yearContainerElement.appendChild(newYearElement);
                                        });

                                        // Clear the input field
                                        inputElement.value = "";
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseNegara">
                                    Negara
                                </a>
                            </h4>
                        </div>
                        <div id="collapseNegara" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="countryInput"
                                            placeholder="Enter a country">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                onclick="addCountry()">Add</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="countryList">
                                    <!-- Display added countries here -->
                                </div>
                            </div>

                            <style>
                                .country {
                                    display: inline-block;
                                    background-color: #f0f0f0;
                                    padding: 5px 10px;
                                    margin-right: 5px;
                                    border-radius: 5px;
                                }

                                .country i {
                                    margin-left: 5px;
                                    cursor: pointer;
                                }
                            </style>

                            <script>
                                function addCountry() {
                                    // Get the input value
                                    const inputElement = document.getElementById("countryInput");
                                    const countries = inputElement.value.split(',').map(country => country.trim());

                                    // Check if there are any countries entered
                                    if (countries.length > 0 && countries[0] !== "") {
                                        // Get the country container element
                                        const countryContainerElement = document.getElementById("countryList");

                                        // Add each country as a separate element
                                        countries.forEach(country => {
                                            // Create a new span element for the country
                                            const newCountryElement = document.createElement("span");
                                            newCountryElement.textContent = country;
                                            newCountryElement.classList.add("country");

                                            // Create a delete icon
                                            const deleteIcon = document.createElement("i");
                                            deleteIcon.classList.add("fas", "fa-times");
                                            deleteIcon.addEventListener("click", function () {
                                                countryContainerElement.removeChild(newCountryElement);
                                            });

                                            // Append the delete icon and country name to the container
                                            newCountryElement.appendChild(deleteIcon);
                                            countryContainerElement.appendChild(newCountryElement);
                                        });

                                        // Clear the input field
                                        inputElement.value = "";
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseKualitas">
                                    Kualitas
                                </a>
                            </h4>
                        </div>
                        <div id="collapseKualitas" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="qualityInput"
                                            placeholder="Enter a quality">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                onclick="addQuality()">Add</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="qualityList">
                                    <!-- Display added qualities here -->
                                </div>
                            </div>

                            <style>
                                .quality {
                                    display: inline-block;
                                    background-color: #f0f0f0;
                                    padding: 5px 10px;
                                    margin-right: 5px;
                                    border-radius: 5px;
                                }

                                .quality i {
                                    margin-left: 5px;
                                    cursor: pointer;
                                }
                            </style>

                            <script>
                                function addQuality() {
                                    // Get the input value
                                    const inputElement = document.getElementById("qualityInput");
                                    const qualities = inputElement.value.split(',').map(quality => quality.trim());

                                    // Check if there are any qualities entered
                                    if (qualities.length > 0 && qualities[0] !== "") {
                                        // Get the quality container element
                                        const qualityContainerElement = document.getElementById("qualityList");

                                        // Add each quality as a separate element
                                        qualities.forEach(quality => {
                                            // Create a new span element for the quality
                                            const newQualityElement = document.createElement("span");
                                            newQualityElement.textContent = quality;
                                            newQualityElement.classList.add("quality");

                                            // Create a delete icon
                                            const deleteIcon = document.createElement("i");
                                            deleteIcon.classList.add("fas", "fa-times");
                                            deleteIcon.addEventListener("click", function () {
                                                qualityContainerElement.removeChild(newQualityElement);
                                            });

                                            // Append the delete icon and quality name to the container
                                            newQualityElement.appendChild(deleteIcon);
                                            qualityContainerElement.appendChild(newQualityElement);
                                        });

                                        // Clear the input field
                                        inputElement.value = "";
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a class="d-block text-dark" data-toggle="collapse" href="#collapseGambar">
                                    Gambar Andalan
                                </a>
                            </h4>
                        </div>
                        <div id="collapseGambar" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="imageInput">Upload Image:</label>
                                    <input type="file" class="form-control-file" id="imageInput" accept="image/*"
                                        onchange="previewImage(event)">
                                </div>

                                <div class="form-group">
                                    <label>Preview:</label><br>
                                    <img src="#" id="imagePreview" alt="Preview"
                                        style="max-width: 300px; max-height: 200px; display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function previewImage(event) {
                        const imagePreviewElement = document.getElementById("imagePreview");
                        const imageFile = event.target.files[0];
                        if (imageFile) {
                            const reader = new FileReader();
                            reader.onload = function () {
                                imagePreviewElement.src = reader.result;
                            }
                            reader.readAsDataURL(imageFile);
                            imagePreviewElement.style.display = "block"; // Show the image preview
                        } else {
                            imagePreviewElement.src = "#";
                            imagePreviewElement.style.display = "none"; // Hide the image preview
                        }
                    }
                </script>
            </div>
        </div>
</section>