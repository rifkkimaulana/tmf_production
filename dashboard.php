<?php
include 'config/minify_function.php';
ob_start();
?>
<?php include 'halaman/header.php'; ?>
<?php include 'halaman/navbar.php'; ?>

<div class="content-wrapper" style="background-color: white;">
    <?php include 'halaman/main-content.php'; ?>
</div>
<?php include 'halaman/footer.php'; ?>

<?php
$html = ob_get_clean();
$minified_html = minify_html($html);
echo $minified_html;
?>