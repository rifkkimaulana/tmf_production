<?php
include '../config/koneksi.php';

$idFilm = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT judul_film, deskripsi, status, genre_ids, tag_ids, direktur_ids, pemain_ids, tahun_ids, negara_ids, kualitas_ids, thumbnail, tmdb_id, player_id, download_id, created_at, updated_at FROM tb_film WHERE id = $idFilm");
$row = mysqli_fetch_assoc($result);

$tagIds = explode(',', $row['tag_ids']);
$tagNames = array();
foreach ($tagIds as $tagId) {
    $queryTagName = "SELECT nama_tag FROM tb_tag WHERE id = $tagId";
    $resultTagName = mysqli_query($koneksi, $queryTagName);
    if ($rowTagName = mysqli_fetch_assoc($resultTagName)) {
        $tagNames[] = $rowTagName['nama_tag'];
    }
}
$tagNamesString = implode(', ', $tagNames);

$direkturIds = explode(',', $row['direktur_ids']);
$direkturNames = array();
foreach ($direkturIds as $direkturId) {
    $queryDirekturName = "SELECT nama_direksi FROM tb_direksi WHERE id = $direkturId";
    $resultDirekturName = mysqli_query($koneksi, $queryDirekturName);
    if ($rowDirekturName = mysqli_fetch_assoc($resultDirekturName)) {
        $direkturNames[] = $rowDirekturName['nama_direksi'];
    }
}
$direkturNamesString = implode(', ', $direkturNames);

$pemainIds = explode(',', $row['pemain_ids']);
$pemainNames = array();
foreach ($pemainIds as $pemainId) {
    $queryPemainName = "SELECT nama_pemain FROM tb_pemain WHERE id = $pemainId";
    $resultPemainName = mysqli_query($koneksi, $queryPemainName);
    if ($rowPemainName = mysqli_fetch_assoc($resultPemainName)) {
        $pemainNames[] = $rowPemainName['nama_pemain'];
    }
}
$pemainNamesString = implode(', ', $pemainNames);

$tahunIds = explode(',', $row['tahun_ids']);
$tahunNames = array();
foreach ($tahunIds as $tahunId) {
    $queryTahunName = "SELECT tahun_rilis FROM tb_tahun WHERE id = $tahunId";
    $resultTahunName = mysqli_query($koneksi, $queryTahunName);
    if ($rowTahunName = mysqli_fetch_assoc($resultTahunName)) {
        $tahunNames[] = $rowTahunName['tahun_rilis'];
    }
}
$tahunNamesString = implode(', ', $tahunNames);

$negaraIds = explode(',', $row['negara_ids']);
$negaraNames = array();
foreach ($negaraIds as $negaraId) {
    $queryNegaraName = "SELECT nama_negara FROM tb_negara WHERE id = $negaraId";
    $resultNegaraName = mysqli_query($koneksi, $queryNegaraName);
    if ($rowNegaraName = mysqli_fetch_assoc($resultNegaraName)) {
        $negaraNames[] = $rowNegaraName['nama_negara'];
    }
}
$negaraNamesString = implode(', ', $negaraNames);

$kualitasIds = explode(',', $row['kualitas_ids']);
$kualitasNames = array();
foreach ($kualitasIds as $kualitasId) {
    $queryKualitasName = "SELECT nama_kualitas FROM tb_kualitas WHERE id = $kualitasId";
    $resultKualitasName = mysqli_query($koneksi, $queryKualitasName);
    if ($rowKualitasName = mysqli_fetch_assoc($resultKualitasName)) {
        $kualitasNames[] = $rowKualitasName['nama_kualitas'];
    }
}
$kualitasNamesString = implode(', ', $kualitasNames);

$id_tmdb = $row['tmdb_id'];

$result_tmdb = mysqli_query($koneksi, "SELECT judul, bahasa, tagline, rating_mpaa, tanggal_rilis, tahun_rilis, waktu_jalan, rating1, rating2, anggaran, pendapatan, link_trailer, url_poster, imdb_id, tmdb_id, penerjemah FROM tb_tmdb WHERE id = $id_tmdb");
$row_tmdb = mysqli_fetch_assoc($result_tmdb);

$id_player = $row['player_id'];

$result_player = mysqli_query($koneksi, "SELECT judul1, link1, judul2, link2, judul3, link3, judul4, link4, judul5, link5, judul6, link6, judul7, link7, judul8, link8, judul9, link9, judul10, link10, judul11, link11, judul12, link12, judul13, link13, judul14, link14, judul15, link15, pemberitahuan_player, created_at, updated_at FROM tb_player WHERE id = $id_player");
$row_play = mysqli_fetch_assoc($result_player);

$id_download = $row['download_id'];

$result_download = mysqli_query($koneksi, "SELECT judul1, link1, judul2, link2, judul3, link3, judul4, link4, judul5, link5, judul6, link6, judul7, link7, judul8, link8, judul9, link9, judul10, link10, judul11, link11, judul12, link12, judul13, link13, judul14, link14, judul15, link15 FROM tb_download WHERE id = $id_download");
$row_download = mysqli_fetch_assoc($result_download);
?>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="film/proses_update.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Film</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="id_for_film" value="<?php echo $_GET['id']; ?>">
                                <label for="judul_film">Judul Film</label>
                                <input type="text" class="form-control" id="judul_film" name="judul_film"
                                    value="<?php echo $row['judul_film']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi"
                                    name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class=" card">
                        <?php include 'film/form_card_update.php'; ?>
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
                                            <option value="draf" <?php echo ($row['status'] == 'draf') ? 'selected' : ''; ?>>Draf</option>
                                            <option value="publik" <?php echo ($row['status'] == 'publik') ? 'selected' : ''; ?>>Publik</option>
                                            <option value="terbitkan" <?php echo ($row['status'] == 'terbitkan') ? 'selected' : ''; ?>>Terbitkan segera</option>
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
                                $queryActiveGenres = "SELECT DISTINCT genre_ids FROM tb_film";
                                $resultActiveGenres = mysqli_query($koneksi, $queryActiveGenres);
                                $activeGenres = array();

                                while ($rowActiveGenres = mysqli_fetch_assoc($resultActiveGenres)) {
                                    $activeGenres = array_merge($activeGenres, explode(",", $rowActiveGenres['genre_ids']));
                                }

                                $activeGenres = array_unique($activeGenres);
                                ?>

                                <div class="card-body">
                                    <input type="hidden" name="selectedGenres" id="selectedGenresInput" value="">

                                    <div class="form-group" style="height: 100px; overflow-y: auto;">
                                        <div id="genreContainer">
                                            <?php
                                            $query = "SELECT id, nama_genre FROM tb_genre";
                                            $result = mysqli_query($koneksi, $query);

                                            if (!$result) {
                                                die("Query gagal: " . mysqli_error($koneksi));
                                            }

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id_genre = $row['id'];
                                                $nama_genre = $row['nama_genre'];
                                                $isChecked = in_array($id_genre, $activeGenres);

                                                echo '<div class="form-check">';
                                                echo '<input type="checkbox" class="form-check-input" id="genre_' . $id_genre . '" value="' . $nama_genre . '"';
                                                if ($isChecked) {
                                                    echo ' checked';
                                                }
                                                echo '>';
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
                            <input type="hidden" name="selectedTag" id="selectedTagInput"
                                value="<?php echo $tagNamesString; ?>">
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

                            $queryFilmTags = "SELECT tag_ids FROM tb_film WHERE id = $idFilm";
                            $resultFilmTags = mysqli_query($koneksi, $queryFilmTags);
                            $filmTags = array();

                            if ($rowFilmTags = mysqli_fetch_assoc($resultFilmTags)) {
                                $filmTags = explode(",", $rowFilmTags['tag_ids']);
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
                                        <?php
                                        foreach ($filmTags as $tagId) {
                                            $queryTagName = "SELECT nama_tag FROM tb_tag WHERE id = $tagId";
                                            $resultTagName = mysqli_query($koneksi, $queryTagName);

                                            if ($rowTagName = mysqli_fetch_assoc($resultTagName)) {
                                                $tagName = $rowTagName['nama_tag'];
                                                echo '<span class="tag">' . $tagName . '<i class="fas fa-times" onclick="removeTag(\'' . $tagName . '\')"></i></span>';
                                            }
                                        }
                                        ?>
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
                                        function removeTag(tagName) {
                                            const tagContainerElement = document.getElementById("tagList");
                                            const tags = tagContainerElement.getElementsByClassName("tag");

                                            for (let i = 0; i < tags.length; i++) {
                                                if (tags[i].textContent === tagName) {
                                                    tagContainerElement.removeChild(tags[i]);
                                                    break;
                                                }
                                            }

                                            selectedTagsArray = selectedTagsArray.filter(tag => tag !== tagName);
                                            updateSelectedTags();
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
                                value="<?php echo $direkturNamesString ?>">
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

                            $result = mysqli_query($koneksi, "SELECT direktur_ids FROM tb_film WHERE id = $idFilm");
                            $row = mysqli_fetch_assoc($result);
                            $direktorIds = $row['direktur_ids'];

                            $direktorIdsArray = explode(",", $direktorIds);
                            $direktorNames = array();

                            foreach ($direktorIdsArray as $direktorId) {
                                $resultDirektor = mysqli_query($koneksi, "SELECT nama_direksi FROM tb_direksi WHERE id = $direktorId");
                                $rowDirektor = mysqli_fetch_assoc($resultDirektor);
                                $direktorName = $rowDirektor['nama_direksi'];
                                $direktorNames[] = $direktorName;
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
                                        <?php
                                        foreach ($direktorNames as $direktorName) {
                                            echo '<span class="director">' . $direktorName . '<i class="fas fa-times" onclick="removeDirector(\'' . $direktorName . '\')"></i></span>';
                                        }
                                        ?>
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
                                        function removeDirector(directorName) {
                                            const directorContainerElement = document.getElementById("directorList");
                                            const directors = directorContainerElement.getElementsByClassName("director");

                                            for (let i = 0; i < directors.length; i++) {
                                                if (directors[i].textContent === directorName) {
                                                    directorContainerElement.removeChild(directors[i]);
                                                    break;
                                                }
                                            }

                                            selectedDirectorsArray = selectedDirectorsArray.filter(director => director !== directorName);
                                            updateSelectedDirectors();
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
                                value="<?php echo $pemainNamesString ?>">
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
                                    <?php
                                    $queryFilmPemain = "SELECT pemain_ids FROM tb_film WHERE id = $idFilm";
                                    $resultFilmPemain = mysqli_query($koneksi, $queryFilmPemain);
                                    $filmPemain = array();

                                    if ($rowFilmPemain = mysqli_fetch_assoc($resultFilmPemain)) {
                                        $filmPemain = explode(",", $rowFilmPemain['pemain_ids']);
                                    }
                                    ?>

                                    <div id="playerList">
                                        <?php
                                        foreach ($filmPemain as $pemainId) {
                                            $query_pemain = "SELECT nama_pemain FROM tb_pemain WHERE id = $pemainId";
                                            $result_pemain = mysqli_query($koneksi, $query_pemain);

                                            if ($row = mysqli_fetch_assoc($result_pemain)) {
                                                $nama_pemain = $row['nama_pemain'];
                                                echo '<span class="player">' . $nama_pemain . '<i class="fas fa-times" onclick="removePemain(\'' . $nama_pemain . '\')"></i></span>';
                                            }
                                        }
                                        ?>
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
                                    function removePemain(pemainName) {
                                        const pemainContainerElement = document.getElementById("playerList");
                                        const pemains = pemainContainerElement.getElementsByClassName("player");

                                        for (let i = 0; i < pemains.length; i++) {
                                            if (pemains[i].textContent === pemainName) {
                                                pemainContainerElement.removeChild(pemains[i]);
                                                break;
                                            }
                                        }

                                        selectedPemainArray = selectedPemainArray.filter(pemain => pemain !== pemainName);
                                        updateSelectedPemain();
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
                                value="<?php echo $tahunNamesString ?>">
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
                                        <?php
                                        $queryFilmTahun = "SELECT tahun_ids FROM tb_film WHERE id = $idFilm";
                                        $resultFilmTahun = mysqli_query($koneksi, $queryFilmTahun);
                                        $filmTahun = array();

                                        if ($rowFilmTahun = mysqli_fetch_assoc($resultFilmTahun)) {
                                            $filmTahun = explode(",", $rowFilmTahun['tahun_ids']);
                                        }

                                        foreach ($filmTahun as $tahunId) {
                                            $query_tahun = "SELECT tahun_rilis FROM tb_tahun WHERE id = $tahunId";
                                            $result_tahun = mysqli_query($koneksi, $query_tahun);

                                            if ($row = mysqli_fetch_assoc($result_tahun)) {
                                                $tahun_rilis = $row['tahun_rilis'];
                                                echo '<span class="year">' . $tahun_rilis . '<i class="fas fa-times" onclick="removeTahun(\'' . $tahun_rilis . '\')"></i></span>';
                                            }
                                        }
                                        ?>
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
                                    function removeTahun(tahun) {
                                        const yearContainerElement = document.getElementById("yearList");
                                        const years = yearContainerElement.getElementsByClassName("year");

                                        for (let i = 0; i < years.length; i++) {
                                            if (years[i].textContent === tahun) {
                                                yearContainerElement.removeChild(years[i]);
                                                break;
                                            }
                                        }

                                        selectedTahunArray = selectedTahunArray.filter(selectedYear => selectedYear !== tahun);
                                        updateSelectedTahun();
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
                                value="<?php echo $negaraNamesString ?>">

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
                                        <?php

                                        $queryFilmNegara = "SELECT negara_ids FROM tb_film WHERE id = $idFilm";
                                        $resultFilmNegara = mysqli_query($koneksi, $queryFilmNegara);
                                        $filmNegara = array();

                                        if ($rowFilmNegara = mysqli_fetch_assoc($resultFilmNegara)) {
                                            $filmNegara = explode(",", $rowFilmNegara['negara_ids']);
                                        }

                                        foreach ($filmNegara as $negaraId) {
                                            $query_negara = "SELECT nama_negara FROM tb_negara WHERE id = $negaraId";
                                            $result_negara = mysqli_query($koneksi, $query_negara);

                                            if ($row = mysqli_fetch_assoc($result_negara)) {
                                                $nama_negara = $row['nama_negara'];
                                                echo '<span class="country">' . $nama_negara . '<i class="fas fa-times" onclick="removeNegara(\'' . $nama_negara . '\')"></i></span>';
                                            }
                                        }
                                        ?>
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
                                    function removeNegara(negaraName) {
                                        const countryContainerElement = document.getElementById("countryList");
                                        const countries = countryContainerElement.getElementsByClassName("country");

                                        for (let i = 0; i < countries.length; i++) {
                                            if (countries[i].textContent === negaraName) {
                                                countryContainerElement.removeChild(countries[i]);
                                                break;
                                            }
                                        }

                                        selectedNegaraArray = selectedNegaraArray.filter(selectedCountry => selectedCountry !== negaraName);
                                        updateSelectedNegara();
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
                            <input type="hidden" name="selectedKualitas" id="selectedKualitasInput"
                                value="<?php echo $kualitasNamesString ?>">

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
                                        <?php
                                        $queryFilmKualitas = "SELECT kualitas_ids FROM tb_film WHERE id = $idFilm";
                                        $resultFilmKualitas = mysqli_query($koneksi, $queryFilmKualitas);
                                        $filmKualitas = array();

                                        if ($rowFilmKualitas = mysqli_fetch_assoc($resultFilmKualitas)) {
                                            $filmKualitas = explode(",", $rowFilmKualitas['kualitas_ids']);
                                        }

                                        $query_kualitas = "SELECT nama_kualitas FROM tb_kualitas WHERE id IN (" . implode(',', $filmKualitas) . ")";
                                        $result_kualitas = mysqli_query($koneksi, $query_kualitas);

                                        foreach ($result_kualitas as $row) {
                                            $nama_kualitas = $row['nama_kualitas'];
                                            echo '<span class="quality">' . $nama_kualitas . '<i class="fas fa-times" onclick="removeKualitas(\'' . $nama_kualitas . '\')"></i></span>';
                                        }
                                        ?>

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
                                    function removeKualitas(kualitas) {
                                        const qualityContainerElement = document.getElementById("qualityList");
                                        const qualities = qualityContainerElement.getElementsByClassName("quality");

                                        for (let i = 0; i < qualities.length; i++) {
                                            if (qualities[i].textContent === kualitas) {
                                                qualityContainerElement.removeChild(qualities[i]);
                                                break;
                                            }
                                        }

                                        selectedKualitasArray = selectedKualitasArray.filter(selectedQuality => selectedQuality !== kualitas);
                                        updateSelectedKualitas();
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