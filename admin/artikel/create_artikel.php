<section class="content">
    <div class="container-fluid">
        <form action="artikel/proses_create_artikel.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Artikel</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul_artikel">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="isi_artikel">Deskripsi</label>
                                <textarea class="form-control summernote" id="isi_artikel"
                                    name="isi_artikel"></textarea>
                            </div>
                        </div>
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
                                        <select class="form-control" id="status" name="status">
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
                                        value="">
                                    <div class="form-group" style="height: 100px; overflow-y: auto;">
                                        <div id="categoryContainer">
                                            <?php
                                            $query = "SELECT id, nama_kategori FROM tb_kategori_artikel";
                                            $result = mysqli_query($koneksi, $query);
                                            if (!$result) {
                                                die("Query gagal: " . mysqli_error($koneksi));
                                            }
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id_kategori = $row['id'];
                                                $nama_kategori = $row['nama_kategori'];

                                                echo '<div class="form-check">';
                                                echo '<input type="checkbox" class="form-check-input" id="category_' . $id_kategori . '" value="' . $nama_kategori . '">';
                                                echo '<label class="form-check-label" for="category_' . $id_kategori . '">' . $nama_kategori . '</label>';
                                                echo '</div>';
                                            }
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
                                                    onclick="addCategory()">Tambah Kategori</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                            $query_tag = "SELECT nama_tag FROM tb_tag_artikel";
                            $result_tag = mysqli_query($koneksi, $query_tag);
                            if (!$result_tag) {
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
        </form>
    </div>
</section>

<script>
    function previewImage(event) {
        const imagePreviewElement = document.getElementById("imagePreview");
        const imageFile = event.target.files[0];
        if (imageFile) {
            const reader = new FileReader();
            reader.onload = function () {
                imagePreviewElement.src = reader.result;
            };
            reader.readAsDataURL(imageFile);
            imagePreviewElement.style.display = "block";
        } else {
            imagePreviewElement.src = "#";
            imagePreviewElement.style.display = "none";
        }
    }

    let selectedTagsArray = [];

    function addTag() {
        const inputElement = document.getElementById("tagInput");
        const tagNames = inputElement.value.split(",").map((tag) => tag.trim());

        if (tagNames.length > 0 && tagNames[0] !== "") {
            const tagContainerElement = document.getElementById("tagList");

            tagNames.forEach((tagName) => {
                const isTagExists = Array.from(tagContainerElement.children).some(
                    (tagElement) => tagElement.textContent === tagName
                );

                if (!isTagExists) {
                    const newTagElement = document.createElement("span");
                    newTagElement.textContent = tagName;
                    newTagElement.classList.add("tag");

                    const deleteIcon = document.createElement("i");
                    deleteIcon.classList.add("fas", "fa-times");
                    deleteIcon.addEventListener("click", function () {
                        tagContainerElement.removeChild(newTagElement);
                        selectedTagsArray = selectedTagsArray.filter(
                            (tag) => tag !== tagName
                        );
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
        selectedTagInput.value = selectedTagsArray.join(",");
    }

    function handleTagClick(tagName) {
        const tagInputValue = document.getElementById("tagInput");
        tagInputValue.value = tagName;
    }

    function toggleSavedTags() {
        const savedDirectorList = document.getElementById("savedTagList");
        savedDirectorList.style.display =
            savedDirectorList.style.display === "none" ? "block" : "none";
    }

    function addCategory() {
        let nama_kategori = document.getElementById("newCategoryInput").value;

        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let categoryContainer = document.getElementById("categoryContainer");
                    categoryContainer.innerHTML = xhr.responseText;
                    document.getElementById("newCategoryInput").value = "";

                    updateSelectedCategories();
                } else {
                    console.error("Gagal menambahkan kategori");
                }
            }
        };

        let data = "nama_kategori=" + encodeURIComponent(nama_kategori);

        xhr.open("POST", "artikel/proses_create_kategori.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(data);
    }

    function updateSelectedCategories() {
        var checkboxes = document.querySelectorAll(
            '#categoryContainer input[type="checkbox"]:checked'
        );

        var selectedCategoriesArray = [];

        for (var i = 0; i < checkboxes.length; i++) {
            selectedCategoriesArray.push(checkboxes[i].value);
        }

        var selectedCategoriesString = selectedCategoriesArray.join(",");

        document.getElementById("selectedCategoriesInput").value =
            selectedCategoriesString;
    }

    var checkboxes = document.querySelectorAll(
        '#categoryContainer input[type="checkbox"]'
    );
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener("change", updateSelectedCategories);
    }

    updateSelectedCategories();
</script>