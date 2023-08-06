<?php
//include 'config/minify_function.php';
//ob_start();
?>
<?php include 'halaman/header.php'; ?>
<?php include 'halaman/navbar.php'; ?>
<div id="skeletonScreen">
    <div class="container mt-5">
        <div class="skeleton-header"></div>
        <div class="skeleton-content"></div>
        <div class="skeleton-content"></div>
        <div class="skeleton-content"></div>
    </div>
</div>
<div id="content" style="display: none">
    <div class="content-wrapper" style="background-color: white;">
        <?php include 'halaman/main-content.php'; ?>
    </div>
</div>
<?php include 'halaman/footer.php'; ?>

<?php
//$html = ob_get_clean();
//$minified_html = minify_html($html);
//echo $minified_html;
?>