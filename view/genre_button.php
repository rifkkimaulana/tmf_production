<div class="content-header">
    <div class="container">
        <div class="row mb-0">
            <div class="col-12">
                <?php foreach ($limitedGenres as $genre) { ?>
                    <a href="<?php echo $base_url . "/dashboard.php?page=genre&f=" . $genre; ?>">
                        <button type="button" class="btn btn-secondary genre-button">
                            <?php echo $genre; ?>
                        </button>
                    </a>
                <?php } ?>
            </div>
            <?php
            mysqli_close($koneksi);
            ?>
        </div>
    </div>
</div>