<?php
include '../config/koneksi.php';

$artikelId = $_GET['id'];

$query = "SELECT judul_artikel, isi_artikel, kategori_ids, tag_ids, thumbnail, status FROM tb_artikel WHERE id = $artikelId";
$result = mysqli_query($koneksi, $query);


$row = mysqli_fetch_assoc($result);

$image = $row['thumbnail'];

// Ambil nama tag berdasarkan tag_ids
$tagIds = explode(',', $row['tag_ids']);
$tagNames = array();
foreach ($tagIds as $tagId) {
    $queryTagName = "SELECT nama_tag FROM tb_tag_artikel WHERE id = $tagId";
    $resultTagName = mysqli_query($koneksi, $queryTagName);
    if ($rowTagName = mysqli_fetch_assoc($resultTagName)) {
        $tagNames[] = $rowTagName['nama_tag'];
    }
}
$tagNamesString = implode(', ', $tagNames);

// Ambil kategori artikel berdasarkan kategori_ids
$kategoriIds = explode(',', $row['kategori_ids']);
$kategoriNames = array();
foreach ($kategoriIds as $kategoriId) {
    $queryKategoriName = "SELECT nama_kategori FROM tb_kategori_artikel WHERE id = $kategoriId";
    $resultKategoriName = mysqli_query($koneksi, $queryKategoriName);
    if ($rowKategoriName = mysqli_fetch_assoc($resultKategoriName)) {
        $kategoriNames[] = $rowKategoriName['nama_kategori'];
    }
}
$kategoriNamesString = implode(', ', $kategoriNames);

?>

<section class="content">
    <div class="container-fluid">
        <form action="artikel/proses_update_artikel.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <input type="hidden" name="id_artikel" id="id_artikel" value="<?php echo $artikelId; ?>">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Artikel</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul_artikel">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel"
                                    value="<?php echo $row['judul_artikel']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="isi_artikel">Deskripsi</label>
                                <textarea class="form-control summernote" id="isi_artikel"
                                    name="isi_artikel"><?php echo $row['isi_artikel']; ?></textarea>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('.summernote').summernote({
                                        height: 300,
                                        toolbar: [
                                            ['style', ['bold', 'italic', 'underline', 'clear']],
                                            ['para', ['ul', 'ol']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview']]
                                        ]
                                    });
                                });
                            </script>

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
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
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

                        <!--Style Update Kategori Artikel -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a class="d-block text-dark" data-toggle="collapse" href="#collapseCategory">
                                        Kategori Artikel
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseCategory" class="collapse show" data-parent="#accordion">
                                <?php
                                $query = "SELECT id, nama_kategori FROM tb_kategori_artikel";
                                $result = mysqli_query($koneksi, $query);
                                if (!$result) {
                                    die("Query gagal: " . mysqli_error($koneksi));
                                }
                                ?>

                                <div class="card-body">
                                    <input type="hidden" name="selectedCategories" id="selectedCategoriesInput"
                                        value="<?php echo $kategoriNamesString; ?>">
                                    <div class="form-group" style="height: 100px; overflow-y: auto;">
                                        <div id="categoryContainer">
                                            <?php
                                            $query_kategori = "SELECT id, nama_kategori FROM tb_kategori_artikel";
                                            $result_kategori = mysqli_query($koneksi, $query_kategori);
                                            if (!$result_kategori) {
                                                die("Query gagal: " . mysqli_error($koneksi));
                                            }

                                            if (isset($_GET['id'])) {
                                                $artikelId = $_GET['id'];

                                                $query_artikel = "SELECT kategori_ids FROM tb_artikel WHERE id = $artikelId";
                                                $result_artikel = mysqli_query($koneksi, $query_artikel);
                                                if (!$result_artikel) {
                                                    die("Query gagal: " . mysqli_error($koneksi));
                                                }

                                                if (mysqli_num_rows($result_artikel) > 0) {
                                                    $row_artikel = mysqli_fetch_assoc($result_artikel);
                                                    $kategori_ids = $row_artikel['kategori_ids'];

                                                    $kategori_ids_array = explode(',', $kategori_ids);
                                                } else {
                                                    $kategori_ids_array = array();
                                                }

                                                mysqli_free_result($result_artikel);
                                            } else {
                                                $kategori_ids_array = array();
                                            }

                                            while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
                                                $id_kategori = $row_kategori['id'];
                                                $nama_kategori = $row_kategori['nama_kategori'];
                                                $isChecked = in_array($id_kategori, $kategori_ids_array) ? 'checked' : '';

                                                echo '<div class="form-check">';
                                                echo '<input type="checkbox" class="form-check-input" id="category_' . $id_kategori . '" value="' . $nama_kategori . '" ' . $isChecked . '>';
                                                echo '<label class="form-check-label" for="category_' . $id_kategori . '">' . $nama_kategori . '</label>';
                                                echo '</div>';
                                            }

                                            mysqli_free_result($result_kategori);
                                            ?>
                                        </div>
                                    </div>

                                    <form method="post" action="artikel/proses_create_kategori.php"
                                        id="addCategoryForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="newCategoryInput"
                                                name="nama_kategori" placeholder="Masukkan kategori baru">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addCategory()">Tambah
                                                    Kategori</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--Style Update TAG Artikel-->
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
                            $query_tag = "SELECT nama_tag FROM tb_tag_artikel";
                            $result_tag = mysqli_query($koneksi, $query_tag);
                            $queryArtikelTags = "SELECT tag_ids FROM tb_artikel WHERE id = $artikelId";
                            $resultArtikelTags = mysqli_query($koneksi, $queryArtikelTags);
                            $artikelTags = array();
                            if ($rowArtikelTags = mysqli_fetch_assoc($resultArtikelTags)) {
                                $artikelTags = explode(",", $rowArtikelTags['tag_ids']);
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
                                        foreach ($artikelTags as $tagId) {
                                            $queryArtikelName = "SELECT nama_tag FROM tb_tag_artikel WHERE id = $tagId";
                                            $resultTagName = mysqli_query($koneksi, $queryArtikelName);

                                            if ($rowTagName = mysqli_fetch_assoc($resultTagName)) {
                                                $tagName = $rowTagName['nama_tag'];
                                                echo '<span class="tag">' . $tagName . '<i class="fas fa-times" onclick="removeTag(\'' . $tagName . '\')"></i></span>';
                                            }
                                        }
                                        ?>
                                    </div>

                                    <small class="text-primary" style="cursor: pointer;"
                                        onclick="toggleSavedTags()">Tampilkan
                                        Tag Tersimpan di database.</small>

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
                                </div>
                            </div>
                        </div>

                        <!-- Form Update Gambar-->
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
                                        <!-- Gambar Pertama (Pratinjau dari Input Tipe "File") -->
                                        <img src="" id="imagePreview" alt="Preview"
                                            style="max-width: 300px; max-height: 200px; display: none;">
                                        <!-- Gambar Kedua (Pratinjau dari Database atau Gambar Default) -->
                                        <img src="../gambar/artikel/<?php echo $image; ?>" alt="Preview"
                                            style="max-width: 300px; max-height: 200px; display: block;"
                                            id="defaultImage">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!--Script Bagian Kategori-->
<script>
    function addCategory() {
        let nama_kategori = document.getElementById('newCategoryInput').value;

        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let categoryContainer = document.getElementById('categoryContainer');
                    categoryContainer.innerHTML = xhr.responseText;

                    document.getElementById('newCategoryInput').value = '';
                } else {
                    console.error('Gagal menambahkan kategori');
                }
            }
        };

        let data = "nama_kategori=" + encodeURIComponent(nama_kategori);

        xhr.open('POST', 'artikel/proses_create_kategori.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
    }

    function updateSelectedCategories() {
        var checkboxes = document.querySelectorAll('#categoryContainer input[type="checkbox"]:checked');

        var selectedCategoriesArray = [];

        for (var i = 0; i < checkboxes.length; i++) {
            selectedCategoriesArray.push(checkboxes[i].value);
        }

        var selectedCategoriesString = selectedCategoriesArray.join(',');

        document.getElementById('selectedCategoriesInput').value = selectedCategoriesString;
    }

    var checkboxes = document.querySelectorAll('#categoryContainer input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', updateSelectedCategories);
    }

    updateSelectedCategories();
</script>
<!--Style Bagian Tag-->
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

<!-- Script Bagian TAG-->
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

<!--Script untuk preview image-->
<script>
    function previewImage(event) {
        const imagePreviewElement = document.getElementById("imagePreview");
        const defaultImageElement = document.getElementById("defaultImage");
        const imageFile = event.target.files[0];

        if (imageFile) {
            const reader = new FileReader();
            reader.onload = function () {
                imagePreviewElement.src = reader.result;
                imagePreviewElement.style.display = "block";
                defaultImageElement.style.display = "none";
            }
            reader.readAsDataURL(imageFile);
        } else {
            imagePreviewElement.style.display = "none";
            defaultImageElement.style.display = "block";
        }
    }
</script>