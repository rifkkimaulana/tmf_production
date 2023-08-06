<?php
//include 'config/minify_function.php';
//ob_start();
?>
<?php include 'halaman/header.php'; ?>
<?php include 'halaman/navbar.php'; ?>

<div id="skeletonScreen">
    <div class="container mt-5">
        <div class="skeleton-content"></div>
        <div class="skeleton-img"></div>
        <div class="skeleton-content"></div>
    </div>
</div>
<div id="content" style="display: none">
    <?php include 'halaman/main-content.php'; ?>
    <?php include 'halaman/footer.php'; ?>
</div>

<?php
//$html = ob_get_clean();
//$minified_html = minify_html($html);
//echo $minified_html;
?>