<?php
include '../config/koneksi.php';
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="film/proses_create.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Film</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul_film">Judul Film</label>
                                <input type="text" class="form-control" id="judul_film" name="judul_film" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <?php include 'film/form_card_1.php'; ?>
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
                                                echo '<input type="checkbox" class="form-check-input" id="genre_' . $id_genre . '" value="' . $id_genre . '" >';
                                                echo '<label class="form-check-label" for="genre_' . $id_genre . '">' . $nama_genre . '</label>';
                                                echo '</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <form method="post" action="film/proses_tambah_genre.php" id="addGenreForm">
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

                                xhr.open('POST', 'film/proses_tambah_genre.php', true);
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
                            <input type="hidden" name="selectedTag" id="selectedTagInput" value="">
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
                                                placeholder="Enter a tag">
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
                                        // Variabel untuk menyimpan nilai tag yang sudah ditampilkan
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
                                                            // Saat tag dihapus, hapus juga dari selectedTagsArray
                                                            selectedTagsArray = selectedTagsArray.filter(tag => tag !== tagName);
                                                            updateSelectedTags(); // Update nilai input hidden
                                                        });

                                                        newTagElement.appendChild(deleteIcon);
                                                        tagContainerElement.appendChild(newTagElement);

                                                        // Tambahkan tag ke dalam selectedTagsArray jika belum ada di dalamnya
                                                        if (!selectedTagsArray.includes(tagName)) {
                                                            selectedTagsArray.push(tagName);
                                                        }

                                                        updateSelectedTags(); // Update nilai input hidden
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
                                            tagInputValue.value = tagName; // Isi input "tagInput" dengan nama tag yang dipilih
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
                            <input type="hidden" name="selectedDireksi" id="selectedDireksiInput" value="">
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
                                                placeholder="Enter a director's name">
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
                                        let selectedDirectorsArray = [];

                                        function addDirector() {
                                            const inputElement = document.getElementById("directorInput");
                                            const directorNames = inputElement.value.split(",").map((director) => director.trim());

                                            if (directorNames.length > 0 && directorNames[0] !== "") {
                                                const directorContainerElement = document.getElementById("directorList");

                                                directorNames.forEach((directorName) => {
                                                    // Cek apakah direktur sudah ada sebelumnya
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
                                                            updateSelectedDirectors(); // Update nilai input hidden
                                                        });

                                                        newDirectorElement.appendChild(deleteIcon);
                                                        directorContainerElement.appendChild(newDirectorElement);

                                                        // Tambahkan direktur ke dalam selectedDirectorsArray jika belum ada di dalamnya
                                                        selectedDirectorsArray.push(directorName);

                                                        updateSelectedDirectors(); // Update nilai input hidden
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


                                                echo '<a href="#" class="tag-link" data-id="' . $id_pemain . '">' . $nama_pemain . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
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
                                        const inputElement = document.getElementById("playerInput");
                                        const playerNames = inputElement.value.split(',').map(player => player.trim());

                                        if (playerNames.length > 0 && playerNames[0] !== "") {
                                            const playerContainerElement = document.getElementById("playerList");

                                            playerNames.forEach(playerName => {
                                                const newPlayerElement = document.createElement("span");
                                                newPlayerElement.textContent = playerName;
                                                newPlayerElement.classList.add("player");

                                                const deleteIcon = document.createElement("i");
                                                deleteIcon.classList.add("fas", "fa-times");
                                                deleteIcon.addEventListener("click", function () {
                                                    playerContainerElement.removeChild(newPlayerElement);
                                                });

                                                newPlayerElement.appendChild(deleteIcon);
                                                playerContainerElement.appendChild(newPlayerElement);
                                            });

                                            inputElement.value = "";
                                        }
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

                                                echo '<a href="#" class="tag-link" data-id="' . $id_tahun . '">' . $nama_tahun . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
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
                                        const inputElement = document.getElementById("yearInput");
                                        const years = inputElement.value.split(',').map(year => year.trim());

                                        if (years.length > 0 && years.every(year => !isNaN(year))) {
                                            const yearContainerElement = document.getElementById("yearList");

                                            years.forEach(year => {
                                                const newYearElement = document.createElement("span");
                                                newYearElement.textContent = year;
                                                newYearElement.classList.add("year");

                                                const deleteIcon = document.createElement("i");
                                                deleteIcon.classList.add("fas", "fa-times");
                                                deleteIcon.addEventListener("click", function () {
                                                    yearContainerElement.removeChild(newYearElement);
                                                });

                                                newYearElement.appendChild(deleteIcon);
                                                yearContainerElement.appendChild(newYearElement);
                                            });

                                            inputElement.value = "";
                                        }
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

                                                echo '<a href="#" class="tag-link" data-id="' . $id_tag . '">' . $nama_tag . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
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
                                        const inputElement = document.getElementById("countryInput");
                                        const countries = inputElement.value.split(',').map(country => country.trim());

                                        if (countries.length > 0 && countries[0] !== "") {
                                            const countryContainerElement = document.getElementById("countryList");

                                            countries.forEach(country => {
                                                const newCountryElement = document.createElement("span");
                                                newCountryElement.textContent = country;
                                                newCountryElement.classList.add("country");

                                                const deleteIcon = document.createElement("i");
                                                deleteIcon.classList.add("fas", "fa-times");
                                                deleteIcon.addEventListener("click", function () {
                                                    countryContainerElement.removeChild(newCountryElement);
                                                });

                                                newCountryElement.appendChild(deleteIcon);
                                                countryContainerElement.appendChild(newCountryElement);
                                            });

                                            inputElement.value = "";
                                        }
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

                                                echo '<a href="#" class="tag-link" data-id="' . $id_kualitas . '">' . $nama_kualitas . '</a>';
                                                echo ' ,';
                                            }
                                            ?>
                                        </div>
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
                                        const inputElement = document.getElementById("qualityInput");
                                        const qualities = inputElement.value.split(',').map(quality => quality.trim());

                                        if (qualities.length > 0 && qualities[0] !== "") {
                                            const qualityContainerElement = document.getElementById("qualityList");

                                            qualities.forEach(quality => {
                                                const newQualityElement = document.createElement("span");
                                                newQualityElement.textContent = quality;
                                                newQualityElement.classList.add("quality");

                                                const deleteIcon = document.createElement("i");
                                                deleteIcon.classList.add("fas", "fa-times");
                                                deleteIcon.addEventListener("click", function () {
                                                    qualityContainerElement.removeChild(newQualityElement);
                                                });

                                                newQualityElement.appendChild(deleteIcon);
                                                qualityContainerElement.appendChild(newQualityElement);
                                            });

                                            inputElement.value = "";
                                        }
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
                                imagePreviewElement.style.display = "block";
                            } else {
                                imagePreviewElement.src = "#";
                                imagePreviewElement.style.display = "none";
                            }
                        }
                    </script>
                </div>
            </div>
    </div>
    </form>

</section>