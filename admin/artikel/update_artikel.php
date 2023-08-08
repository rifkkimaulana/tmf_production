<?php
include '../config/koneksi.php';

$artikelId = $_GET['id'];

$query = "SELECT judul_artikel, isi_artikel, kategori_ids, tag_ids, thumbnail, status FROM tb_artikel WHERE id = $artikelId";
$result = mysqli_query($koneksi, $query);


$row = mysqli_fetch_assoc($result);

$image = $row['thumbnail'];

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
                <div class="col-lg-8">
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
                                        <img src="" id="imagePreview" alt="Preview"
                                            style="max-width: 300px; max-height: 200px; display: none;">
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