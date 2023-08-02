<?php foreach ($limitedGenres as $genre) { ?>
    <a href="<?php echo $base_url . "/dashboard.php?page=genre&f=" . $genre; ?>">
        <button type="button" class="btn btn-sm btn-secondary genre-button">
            <?php echo $genre; ?>
        </button>
    </a>
<?php } ?>
<hr>
<?php
mysqli_close($koneksi);
?>