<?php
$tv_id = $_GET['id_tv'];

$endpoint = "/tv/{$tv_id}";
$query_string = "?api_key={$api_key}&append_to_response=videos,credits";

$url = $base_url_tmdb . $endpoint . $query_string;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    $data = json_decode($response, true);
    if (isset($data['name'])) {
        $judul = $data['name'];
        $tahun_rilis = substr($data['first_air_date'], 0, 4);
        $judul_tahun = $judul . " (" . $tahun_rilis . ")";
        $languageMap = array(
            "en" => "English",
            "ar" => "Arabic",
            "bn" => "Bengali",
            "zh" => "Chinese",
            "cs" => "Czech",
            "da" => "Danish",
            "nl" => "Dutch",
            "fi" => "Finnish",
            "fr" => "French",
            "de" => "German",
            "el" => "Greek",
            "he" => "Hebrew",
            "hi" => "Hindi",
            "hu" => "Hungarian",
            "id" => "Indonesian",
            "it" => "Italian",
            "ja" => "Japanese",
            "ko" => "Korean",
            "ms" => "Malay",
            "no" => "Norwegian",
            "fa" => "Persian",
            "pl" => "Polish",
            "pt" => "Portuguese",
            "ro" => "Romanian",
            "ru" => "Russian",
            "es" => "Spanish",
            "sv" => "Swedish",
            "th" => "Thai",
            "tr" => "Turkish",
            "uk" => "Ukrainian",
            "vi" => "Vietnamese",
            "other" => "Other",
        );
        $bahasa_kode = $data['original_language'];
        $bahasa = isset($languageMap[$bahasa_kode]) ? $languageMap[$bahasa_kode] : $languageMap['en'];

        $tagline = isset($data['tagline']) ? $data['tagline'] : "-";

        $waktu_jalan = 0;

        if (isset($data['episode_run_time'])) {
            $durasi_episode = $data['episode_run_time'];
            $waktu_jalan = array_sum($durasi_episode);
        }

        $jumlah_episode = 0;

        if (isset($data['number_of_episodes'])) {
            $jumlah_episode = $data['number_of_episodes'];
        }

        $rating = $data['vote_average'];

        if (isset($data['budget'])) {
            $anggaran = $data['budget'];
        } else {
            $anggaran = "";
        }

        if (isset($data['revenue'])) {
            $pendapatan = $data['revenue'];
        } else {
            $pendapatan = "";
        }

        if (isset($data['release_date'])) {
            $release_date = $data['release_date'];
            $tanggal_rilis = date('d M Y', strtotime($release_date));
        } else {
            $tanggal_rilis = "";
        }

        $last_air_date = $data['last_air_date'];

        $url_poster = "https://image.tmdb.org/t/p/w200/{$data['poster_path']}";
        $deskripsi = $data['overview'];

        if (isset($data['external_ids']['imdb_id'])) {
            $id_imdb = $data['external_ids']['imdb_id'];
        } else {
            $id_imdb = "";
        }

        $id_tmdb = $tv_id;

        $genres = $data['genres'];
        $genre_names = array();

        foreach ($genres as $genre) {
            $genre_names[] = $genre['name'];
        }

        $trailer_key = "";
        if (isset($data['videos']['results'])) {
            foreach ($data['videos']['results'] as $video) {
                if ($video['type'] === 'Trailer') {
                    $trailer_key = $video['key'];
                    break;
                }
            }
        }

        if (!empty($trailer_key)) {
            $trailer_link = "https://www.youtube.com/watch?v={$trailer_key}";
        } else {
            $trailer_link = "";
        }

        $credits_endpoint = "/movie/{$tv_id}/credits";
        $credits_url = $base_url_tmdb . $credits_endpoint . $query_string;
        $cast_url = $base_url_tmdb . $credits_endpoint . $query_string;

        $ch_credits = curl_init($credits_url);
        curl_setopt($ch_credits, CURLOPT_RETURNTRANSFER, true);
        $response_credits = curl_exec($ch_credits);
        curl_close($ch_credits);

        if ($response_credits !== false) {
            $credits_data = json_decode($response_credits, true);

            if (isset($credits_data['crew']) && is_array($credits_data['crew'])) {
                $directors = array_filter($credits_data['crew'], function ($crew) {
                    return $crew['job'] === 'Director';
                });

                $nama_direktur = array_column($directors, 'name');
                $nama_direktur_string = implode(', ', $nama_direktur);
            } else {
                $nama_direktur_string = "";
            }
        } else {
            $nama_direktur_string = "";
        }

        $ch_cast = curl_init($cast_url);
        curl_setopt($ch_cast, CURLOPT_RETURNTRANSFER, true);
        $response_cast = curl_exec($ch_cast);
        curl_close($ch_cast);

        if (isset($data['credits']['cast']) && !empty($data['credits']['cast'])) {
            $cast = $data['credits']['cast'];

            $nama_pemain = array_column($cast, 'name');
            $nama_pemain_string = implode(', ', $nama_pemain);

        }

        if (isset($data['production_countries'])) {
            $countries = $data['production_countries'];
            $country_names = array();

            foreach ($countries as $country) {
                $country_names[] = $country['name'];
            }
            $nama_negara = implode(', ', $country_names);
        } else {
            $nama_negara = "";
        }

        $networks = $data['networks'];
        $network_names = array();

        foreach ($networks as $network) {
            $network_names[] = $network['name'];
        }
        $jaringan = implode(', ', $network_names);
    } else {
        $judul = 'Tidak ditemukan untuk';
        $judul_tahun = "";
        $bahasa = "";
        $tagline = "";
        $deskripsi = "";
        $tanggal_rilis = "";
        $tahun_rilis = "";
        $waktu_jalan = "";
        $rating = "";
        $anggaran = "";
        $pendapatan = "";
        $trailer_link = "";
        $url_poster = "";
        $nama_direktur_string = "";
        $nama_pemain_string = "";
        $nama_negara = "";
        $id_imdb = "";
        $id_tmdb = "";
        $jumlah_episode = "";
        $jaringan = "";
    }
} else {
}
?>
<section class="content">
    <div class="container-fluid">
        <form action="tv_show/proses_create.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Tambah Film || Search:
                                    <?php echo $judul . " id: " . $tv_id; ?>
                                </h3>
                                <a href="<?php echo $base_url; ?>/admin/dashboard.php?page=add_tvshow"
                                    class="btn btn-sm btn-primary">Add Manual</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul_tv_show">Judul TV Show</label>
                                <input type="text" class="form-control" id="judul_tv_show" name="judul_tv_show"
                                    value="<?php echo $judul_tahun; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi"
                                    name="deskripsi"><?php echo $deskripsi; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <?php include 'tv_show/form_card_tmdb.php'; ?>
                    </div>
                </div>

                <div class="col-lg-4">
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
                                        <label for="status">Status</label>
                                        <select class="form-control" id="statusFilm" name="status">
                                            <option value="publik">Publik</option>
                                            <option value="draf">Draf</option>
                                            <option value="terbitkan">Terbitkan segera</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
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
                                <?php
                                $query = "SELECT id, nama_genre FROM tb_genre";
                                $result = mysqli_query($koneksi, $query);

                                if (!$result) {
                                    die("Query gagal: " . mysqli_error($koneksi));
                                }
                                ?>
                                <div class="card-body">
                                    <input type="hidden" name="selectedGenres" id="selectedGenresInput" value="">
                                    <div class="form-group" style="height: 100px; overflow-y: auto;">
                                        <div id="genreContainer">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id_genre = $row['id'];
                                                $nama_genre = $row['nama_genre'];

                                                echo '<div class="form-check">';
                                                echo '<input type="checkbox" class="form-check-input" id="genre_' . $nama_genre . '" value="' . $nama_genre . '" >';
                                                echo '<label class="form-check-label" for="genre_' . $id_genre . '">' . $nama_genre . '</label>';
                                                echo '</div>';
                                            }
                                            foreach ($genre_names as $nama_genre) {
                                                echo '<div class="form-check">';
                                                echo '<input type="checkbox" class="form-check-input" id="genre_' . $nama_genre . '" name="genre[]" value="' . $nama_genre . '" checked>';
                                                echo '<label class="form-check-label" for="genre_' . $nama_genre . '">' . $nama_genre . '</label>';
                                                echo '</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <form method="post" action="tv_show/proses_tambah_genre.php" id="addGenreForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="newGenreInput" name="nama_genre"
                                                placeholder="Masukkan genre baru">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addGenre()">Tambah
                                                    Genre</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <script>
                            function addGenre() {
                                let nama_genre = document.getElementById('newGenreInput').value;

                                let xhr = new XMLHttpRequest();

                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                        if (xhr.status === 200) {
                                            let genreContainer = document.getElementById('genreContainer');
                                            genreContainer.innerHTML = xhr.responseText;

                                            document.getElementById('newGenreInput').value = '';
                                        } else {
                                            console.error('Gagal menambahkan genre');
                                        }
                                    }
                                };

                                let data = "nama_genre=" + encodeURIComponent(nama_genre);

                                xhr.open('POST', 'tv_show/proses_tambah_genre.php', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.send(data);
                            }
                            function updateSelectedGenres() {
                                var checkboxes = document.querySelectorAll('#genreContainer input[type="checkbox"]:checked');

                                var selectedGenresArray = [];

                                for (var i = 0; i < checkboxes.length; i++) {
                                    selectedGenresArray.push(checkboxes[i].value);
                                }

                                var selectedGenresString = selectedGenresArray.join(',');

                                document.getElementById('selectedGenresInput').value = selectedGenresString;
                            }

                            var checkboxes = document.querySelectorAll('#genreContainer input[type="checkbox"]');
                            for (var i = 0; i < checkboxes.length; i++) {
                                checkboxes[i].addEventListener('change', updateSelectedGenres);
                            }

                            updateSelectedGenres();
                        </script>
                    </div>

                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedTag" id="selectedTagInput"
                                value="<?php echo $tagline; ?>">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a class="d-block text-dark" data-toggle="collapse" href="#collapseTag">
                                        Tag
                                    </a>
                                </h4>
                            </div>
                            <?php
                            $query_tag = "SELECT nama_tag FROM tb_tag";
                            $result_tag = mysqli_query($koneksi, $query_tag);

                            if (!$result) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }
                            ?>
                            <div id="collapseTag" class="collapse show" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="tagInput"
                                                placeholder="Enter a tag" value="<?php echo $tagline; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"
                                                    onclick="addTag()">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tagList">
                                    </div>

                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedTags()">Tampilkan
                                        Tag Tersimpan di
                                        database.</small>

                                    <div id="savedTagList" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_tag)) {
                                                $nama_tag = $row['nama_tag'];

                                                echo '<a class="tag-link" onclick="handleTagClick(\'' . $nama_tag . '\')">' . $nama_tag . '</a>';
                                                echo ' , ';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <script>
                                        let selectedTagsArray = [];

                                        function addTag() {
                                            const inputElement = document.getElementById("tagInput");
                                            const tagNames = inputElement.value.split(',').map(tag => tag.trim());

                                            if (tagNames.length > 0 && tagNames[0] !== "") {
                                                const tagContainerElement = document.getElementById("tagList");

                                                tagNames.forEach(tagName => {
                                                    const isTagExists = Array.from(tagContainerElement.children).some(tagElement => tagElement.textContent === tagName);

                                                    if (!isTagExists) {
                                                        const newTagElement = document.createElement("span");
                                                        newTagElement.textContent = tagName;
                                                        newTagElement.classList.add("tag");

                                                        const deleteIcon = document.createElement("i");
                                                        deleteIcon.classList.add("fas", "fa-times");
                                                        deleteIcon.addEventListener("click", function () {
                                                            tagContainerElement.removeChild(newTagElement);
                                                            selectedTagsArray = selectedTagsArray.filter(tag => tag !== tagName);
                                                            updateSelectedTags();
                                                        });

                                                        newTagElement.appendChild(deleteIcon);
                                                        tagContainerElement.appendChild(newTagElement);

                                                        if (!selectedTagsArray.includes(tagName)) {
                                                            selectedTagsArray.push(tagName);
                                                        }

                                                        updateSelectedTags();
                                                    }
                                                });

                                                inputElement.value = "";
                                            }
                                        }

                                        function updateSelectedTags() {
                                            const selectedTagInput = document.getElementById("selectedTagInput");
                                            selectedTagInput.value = selectedTagsArray.join(',');
                                        }

                                        function handleTagClick(tagName) {
                                            const tagInputValue = document.getElementById("tagInput");
                                            tagInputValue.value = tagName;
                                        }

                                        function toggleSavedTags() {
                                            const savedDirectorList = document.getElementById("savedTagList");
                                            savedDirectorList.style.display = savedDirectorList.style.display === "none" ? "block" : "none";
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedDireksi" id="selectedDireksiInput"
                                value="<?php echo $nama_direktur_string; ?>">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a class="d-block text-dark" data-toggle="collapse" href="#collapseDirektur">
                                        Direktur
                                    </a>
                                </h4>
                            </div>
                            <?php
                            $query_direksi = "SELECT id, nama_direksi FROM tb_direksi";
                            $result_direksi = mysqli_query($koneksi, $query_direksi);

                            if (!$result_direksi) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }
                            ?>
                            <div id="collapseDirektur" class="collapse show" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="directorInput"
                                                placeholder="Enter a director's name"
                                                value="<?php echo $nama_direktur_string; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"
                                                    onclick="addDirector()">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="directorList">
                                    </div>

                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedDirector()">Tampilkan Direktur Tersimpan di
                                        database.</small>

                                    <div id="savedDirectorList" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result_direksi)) {
                                                $id_direksi = $row['id'];
                                                $nama_direksi = $row['nama_direksi'];

                                                echo '<a class="director-link" onclick="handleDireksiClick(\'' . $nama_direksi . '\')">' . $nama_direksi . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <script>
                                        let selectedDirectorsArray = [];

                                        function addDirector() {
                                            const inputElement = document.getElementById("directorInput");
                                            const directorNames = inputElement.value.split(",").map((director) => director.trim());

                                            if (directorNames.length > 0 && directorNames[0] !== "") {
                                                const directorContainerElement = document.getElementById("directorList");

                                                directorNames.forEach((directorName) => {
                                                    const isDirectorExists = selectedDirectorsArray.includes(directorName);

                                                    if (!isDirectorExists) {
                                                        const newDirectorElement = document.createElement("span");
                                                        newDirectorElement.textContent = directorName;
                                                        newDirectorElement.classList.add("director");

                                                        const deleteIcon = document.createElement("i");
                                                        deleteIcon.classList.add("fas", "fa-times");
                                                        deleteIcon.addEventListener("click", function () {
                                                            directorContainerElement.removeChild(newDirectorElement);
                                                            selectedDirectorsArray = selectedDirectorsArray.filter((director) => director !== directorName);
                                                            updateSelectedDirectors();
                                                        });

                                                        newDirectorElement.appendChild(deleteIcon);
                                                        directorContainerElement.appendChild(newDirectorElement);
                                                        selectedDirectorsArray.push(directorName);
                                                        updateSelectedDirectors();
                                                    }
                                                });

                                                inputElement.value = "";
                                            }
                                        }

                                        function updateSelectedDirectors() {
                                            const selectedDirectorInput = document.getElementById("selectedDireksiInput");
                                            selectedDirectorInput.value = selectedDirectorsArray.join(',');
                                        }
                                        function handleDireksiClick(tagName) {
                                            const direksiInputValue = document.getElementById("directorInput");
                                            direksiInputValue.value = tagName;
                                        }
                                        function toggleSavedDirector() {
                                            const savedDirectorList = document.getElementById("savedDirectorList");
                                            savedDirectorList.style.display = savedDirectorList.style.display === "none" ? "block" : "none";
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedPemain" id="selectedPemainInput"
                                value="<?php echo $nama_pemain_string; ?>">
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
                                                placeholder="Enter a player's name"
                                                value="<?php echo $nama_pemain_string; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"
                                                    onclick="addPlayer()">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="playerList">
                                    </div>

                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedPemain()">Tampilkan
                                        Pemain Tersimpan di
                                        database.</small>

                                    <div id="toggleSavedPemain" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            $query_pemain = "SELECT id, nama_pemain FROM tb_pemain";
                                            $result_pemain = mysqli_query($koneksi, $query_pemain);

                                            while ($row = mysqli_fetch_assoc($result_pemain)) {
                                                $id_pemain = $row['id'];
                                                $nama_pemain = $row['nama_pemain'];


                                                echo '<a class="tag-link" onclick="handlePemainClick(\'' . $nama_pemain . '\')">' . $nama_pemain . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let selectedPemainArray = [];

                                    function addPlayer() {
                                        const inputElement = document.getElementById("playerInput");
                                        const playerNames = inputElement.value.split(',').map(player => player.trim());

                                        if (playerNames.length > 0 && playerNames[0] !== "") {
                                            const playerContainerElement = document.getElementById("playerList");

                                            playerNames.forEach(playerName => {
                                                const isPlayerExists = Array.from(playerContainerElement.children).some(playerElement => playerElement.textContent === playerName);

                                                if (!isPlayerExists) {
                                                    const newPlayerElement = document.createElement("span");
                                                    newPlayerElement.textContent = playerName;
                                                    newPlayerElement.classList.add("player");

                                                    const deleteIcon = document.createElement("i");
                                                    deleteIcon.classList.add("fas", "fa-times");
                                                    deleteIcon.addEventListener("click", function () {
                                                        playerContainerElement.removeChild(newPlayerElement);
                                                        selectedPemainArray = selectedPemainArray.filter(pemain => pemain !== playerName);
                                                        updateSelectedPemain();
                                                    });

                                                    newPlayerElement.appendChild(deleteIcon);
                                                    playerContainerElement.appendChild(newPlayerElement);

                                                    if (!selectedPemainArray.includes(playerName)) {
                                                        selectedPemainArray.push(playerName);
                                                    }

                                                    updateSelectedPemain();
                                                }
                                            });

                                            inputElement.value = "";
                                        }
                                    }

                                    function updateSelectedPemain() {
                                        const selectedPemainInput = document.getElementById("selectedPemainInput");
                                        selectedPemainInput.value = selectedPemainArray.join(',');
                                    }

                                    function handlePemainClick(pemainName) {
                                        const pemainInputValue = document.getElementById("playerInput");
                                        pemainInputValue.value = pemainName;
                                    }

                                    function toggleSavedPemain() {
                                        const toggleSavedPemain = document.getElementById("toggleSavedPemain");
                                        toggleSavedPemain.style.display = toggleSavedPemain.style.display === "none" ? "block" : "none";
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedTahun" id="selectedTahunInput"
                                value="<?php echo $tahun_rilis; ?>">
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
                                                placeholder="Enter a year" value="<?php echo $tahun_rilis; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"
                                                    onclick="addYear()">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="yearList">
                                    </div>
                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedTahun()">Tampilkan
                                        Tahun Tersimpan di
                                        database.</small>

                                    <div id="toggleSavedTahun" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            $query_tahun = "SELECT id, tahun_rilis FROM tb_tahun";
                                            $result_tahun = mysqli_query($koneksi, $query_tahun);
                                            while ($row = mysqli_fetch_assoc($result_tahun)) {
                                                $id_tahun = $row['id'];
                                                $nama_tahun = $row['tahun_rilis'];

                                                echo '<a class="tag-link" onclick="handleTahunClick(\'' . $nama_tahun . '\')">' . $nama_tahun . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let selectedTahunArray = [];

                                    function addYear() {
                                        const inputElement = document.getElementById("yearInput");
                                        const years = inputElement.value.split(',').map(year => year.trim());

                                        if (years.length > 0 && years.every(year => !isNaN(year))) {
                                            const yearContainerElement = document.getElementById("yearList");

                                            years.forEach(year => {
                                                const isYearExists = Array.from(yearContainerElement.children).some(yearElement => yearElement.textContent === year);

                                                if (!isYearExists) {
                                                    const newYearElement = document.createElement("span");
                                                    newYearElement.textContent = year;
                                                    newYearElement.classList.add("year");

                                                    const deleteIcon = document.createElement("i");
                                                    deleteIcon.classList.add("fas", "fa-times");
                                                    deleteIcon.addEventListener("click", function () {
                                                        yearContainerElement.removeChild(newYearElement);
                                                        selectedTahunArray = selectedTahunArray.filter(selectedYear => selectedYear !== year);
                                                        updateSelectedTahun();
                                                    });

                                                    newYearElement.appendChild(deleteIcon);
                                                    yearContainerElement.appendChild(newYearElement);

                                                    if (!selectedTahunArray.includes(year)) {
                                                        selectedTahunArray.push(year);
                                                    }

                                                    updateSelectedTahun();
                                                }
                                            });

                                            inputElement.value = "";
                                        }
                                    }

                                    function updateSelectedTahun() {
                                        const selectedTahunInput = document.getElementById("selectedTahunInput");
                                        selectedTahunInput.value = selectedTahunArray.join(',');
                                    }

                                    function handleTahunClick(tahunName) {
                                        const tahunInputValue = document.getElementById("yearInput");
                                        tahunInputValue.value = tahunName;
                                    }
                                    function toggleSavedTahun() {
                                        const toggleSavedTahun = document.getElementById("toggleSavedTahun");
                                        toggleSavedTahun.style.display = toggleSavedTahun.style.display === "none" ? "block" : "none";
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedNegara" id="selectedNegaraInput"
                                value="<?php echo $nama_negara; ?>">

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
                                                placeholder="Enter a country" value="<?php echo $nama_negara; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"
                                                    onclick="addCountry()">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="countryList">
                                    </div>
                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedNegara()">Tampilkan
                                        Negara Tersimpan di
                                        database.</small>

                                    <div id="savedNegaraList" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            $query_negara = "SELECT id, nama_negara FROM tb_negara";
                                            $result_negara = mysqli_query($koneksi, $query_negara);

                                            while ($row = mysqli_fetch_assoc($result_negara)) {
                                                $id_negara = $row['id'];
                                                $nama_negara = $row['nama_negara'];

                                                echo '<a class="tag-link" onclick="handleNegaraClick(\'' . $nama_negara . '\')">' . $nama_negara . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let selectedNegaraArray = [];

                                    function addCountry() {
                                        const inputElement = document.getElementById("countryInput");
                                        const countries = inputElement.value.split(',').map(country => country.trim());

                                        if (countries.length > 0 && countries[0] !== "") {
                                            const countryContainerElement = document.getElementById("countryList");

                                            countries.forEach(country => {
                                                const isCountryExists = Array.from(countryContainerElement.children).some(countryElement => countryElement.textContent === country);

                                                if (!isCountryExists) {
                                                    const newCountryElement = document.createElement("span");
                                                    newCountryElement.textContent = country;
                                                    newCountryElement.classList.add("country");

                                                    const deleteIcon = document.createElement("i");
                                                    deleteIcon.classList.add("fas", "fa-times");
                                                    deleteIcon.addEventListener("click", function () {
                                                        countryContainerElement.removeChild(newCountryElement);
                                                        selectedNegaraArray = selectedNegaraArray.filter(selectedCountry => selectedCountry !== country); // Hapus negara dari array saat dihapus dari daftar
                                                        updateSelectedNegara();
                                                    });

                                                    newCountryElement.appendChild(deleteIcon);
                                                    countryContainerElement.appendChild(newCountryElement);

                                                    if (!selectedNegaraArray.includes(country)) {
                                                        selectedNegaraArray.push(country);
                                                    }
                                                    updateSelectedNegara();

                                                }
                                            });

                                            inputElement.value = "";
                                        }
                                    }

                                    function updateSelectedNegara() {
                                        const selectedNegaraInput = document.getElementById("selectedNegaraInput");
                                        selectedNegaraInput.value = selectedNegaraArray.join(',');
                                    }

                                    function handleNegaraClick(negaraName) {
                                        const negaraInputValue = document.getElementById("countryInput");
                                        negaraInputValue.value = negaraName;
                                    }

                                    function toggleSavedNegara() {
                                        const savedNegaraList = document.getElementById("savedNegaraList");
                                        savedNegaraList.style.display = savedNegaraList.style.display === "none" ? "block" : "none";
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedKualitas" id="selectedKualitasInput" value="HD">

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
                                    </div>
                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedKualitas()">Tampilkan
                                        Kualitas Tersimpan di
                                        database.</small>

                                    <div id="savedKualitasList" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            $query_Kualitas = "SELECT id, nama_kualitas FROM tb_kualitas";
                                            $result_kualitas = mysqli_query($koneksi, $query_Kualitas);

                                            while ($row = mysqli_fetch_assoc($result_kualitas)) {
                                                $id_kualitas = $row['id'];
                                                $nama_kualitas = $row['nama_kualitas'];

                                                echo '<a class="tag-link" onclick="handleKualitasClick(\'' . $nama_kualitas . '\')">' . $nama_kualitas . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let selectedKualitasArray = [];

                                    function addQuality() {
                                        const inputElement = document.getElementById("qualityInput");
                                        const qualities = inputElement.value.split(',').map(quality => quality.trim());

                                        if (qualities.length > 0 && qualities[0] !== "") {
                                            const qualityContainerElement = document.getElementById("qualityList");

                                            qualities.forEach(quality => {

                                                const isQualityExists = Array.from(qualityContainerElement.children).some(qualityElement => qualityElement.textContent === quality);

                                                if (!isQualityExists) {
                                                    const newQualityElement = document.createElement("span");
                                                    newQualityElement.textContent = quality;
                                                    newQualityElement.classList.add("quality");

                                                    const deleteIcon = document.createElement("i");
                                                    deleteIcon.classList.add("fas", "fa-times");
                                                    deleteIcon.addEventListener("click", function () {
                                                        qualityContainerElement.removeChild(newQualityElement);
                                                        selectedKualitasArray = selectedKualitasArray.filter(selectedQuality => selectedQuality !== quality); // Hapus kualitas dari array saat dihapus dari daftar
                                                        updateSelectedKualitas();
                                                    });

                                                    newQualityElement.appendChild(deleteIcon);
                                                    qualityContainerElement.appendChild(newQualityElement);

                                                    if (!selectedKualitasArray.includes(quality)) {
                                                        selectedKualitasArray.push(quality);
                                                    }
                                                    updateSelectedKualitas();
                                                }
                                            });

                                            inputElement.value = "";
                                        }
                                    }

                                    function updateSelectedKualitas() {
                                        const selectedKualitasInput = document.getElementById("selectedKualitasInput");
                                        selectedKualitasInput.value = selectedKualitasArray.join(',');
                                    }

                                    function handleKualitasClick(kualitasName) {
                                        const kualitasInputValue = document.getElementById("qualityInput");
                                        kualitasInputValue.value = kualitasName;
                                    }

                                    function toggleSavedKualitas() {
                                        const savedKualitasList = document.getElementById("savedKualitasList");
                                        savedKualitasList.style.display = savedKualitasList.style.display === "none" ? "block" : "none";
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <input type="hidden" name="selectedJaringan" id="selectedJaringanInput"
                                value="<?php echo $jaringan; ?>">

                            <div class="card-header">
                                <h4 class="card-title">
                                    <a class="d-block text-dark" data-toggle="collapse" href="#collapseJaringan">
                                        Jaringan
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseJaringan" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="jaringanInput"
                                                placeholder="Enter a jaringan" value="<?php echo $jaringan; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"
                                                    onclick="addJaringan()">Add</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="jaringanList">
                                    </div>
                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedJaringan()">Tampilkan
                                        Jaringan Tersimpan di database.</small>

                                    <div id="savedJaringanList" style="display: none;">
                                        <hr>
                                        <div class="form-group" style="height: 80px; overflow-y: auto;">
                                            <?php
                                            $query_jaringan = "SELECT id, nama_jaringan FROM tb_jaringan";
                                            $result_jaringan = mysqli_query($koneksi, $query_jaringan);

                                            while ($row = mysqli_fetch_assoc($result_jaringan)) {
                                                $id_jaringan = $row['id'];
                                                $nama_jaringan = $row['nama_jaringan'];

                                                echo '<a class="tag-link" onclick="handleJaringanClick(\'' . $nama_jaringan . '\')">' . $nama_jaringan . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let selectedJaringanArray = [];

                                    function addJaringan() {
                                        const inputElement = document.getElementById("jaringanInput");
                                        const jaringans = inputElement.value.split(',').map(jaringan => jaringan.trim());

                                        if (jaringans.length > 0 && jaringans[0] !== "") {
                                            const jaringanContainerElement = document.getElementById("jaringanList");

                                            jaringans.forEach(jaringan => {

                                                const isJaringanExists = Array.from(jaringanContainerElement.children).some(jaringanElement => jaringanElement.textContent === jaringan);

                                                if (!isJaringanExists) {
                                                    const newJaringanElement = document.createElement("span");
                                                    newJaringanElement.textContent = jaringan;
                                                    newJaringanElement.classList.add("jaringan");

                                                    const deleteIcon = document.createElement("i");
                                                    deleteIcon.classList.add("fas", "fa-times");
                                                    deleteIcon.addEventListener("click", function () {
                                                        jaringanContainerElement.removeChild(newJaringanElement);
                                                        selectedJaringanArray = selectedJaringanArray.filter(selectedJaringan => selectedJaringan !== jaringan); // Hapus jaringan dari array saat dihapus dari daftar
                                                        updateSelectedJaringan();
                                                    });

                                                    newJaringanElement.appendChild(deleteIcon);
                                                    jaringanContainerElement.appendChild(newJaringanElement);

                                                    if (!selectedJaringanArray.includes(jaringan)) {
                                                        selectedJaringanArray.push(jaringan);
                                                    }
                                                    updateSelectedJaringan();
                                                }
                                            });

                                            inputElement.value = "";
                                        }
                                    }

                                    function updateSelectedJaringan() {
                                        const selectedJaringanInput = document.getElementById("selectedJaringanInput");
                                        selectedJaringanInput.value = selectedJaringanArray.join(',');
                                    }

                                    function handleJaringanClick(jaringanName) {
                                        const jaringanInputValue = document.getElementById("jaringanInput");
                                        jaringanInputValue.value = jaringanName;
                                    }

                                    function toggleSavedJaringan() {
                                        const savedJaringanList = document.getElementById("savedJaringanList");
                                        savedJaringanList.style.display = savedJaringanList.style.display === "none" ? "block" : "none";
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
                                        <input type="file" class="form-control-file" id="imageInput" name="image_banner"
                                            accept="image/*" onchange="previewImage(event)">
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
                </div>
            </div>
    </div>
    </form>
</section>