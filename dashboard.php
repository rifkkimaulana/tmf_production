<?php
//include 'config/minify_function.php';
//ob_start();
?>
<?php include 'halaman/header.php'; ?>
<?php include 'halaman/navbar.php'; ?>

<div class="content-wrapper" style="background-color: white;">
    <?php include 'halaman/main-content.php'; ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Modal -->
<div id="loadingModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Konten modal -->
        <div class="modal-content">
            <!-- Animasi loading -->
            <div class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- Header modal -->
            <div class="modal-header">
                <h4 class="modal-title">Loading...</h4>
            </div>
        </div>
    </div>
</div>
<script>
    // Fungsi untuk menampilkan modal loading
    function showLoadingModal() {
        var loadingModal = document.getElementById('loadingModal');
        loadingModal.style.display = 'block';

        // Simulasikan proses halaman selama 2 detik (gantilah dengan proses yang sesuai pada halaman Anda)
        setTimeout(function () {
            hideLoadingModal(); // Panggil fungsi untuk menyembunyikan modal setelah selesai proses
        }, 2000); // 2000 milidetik (2 detik) adalah waktu simulasi proses halaman
    }

    // Fungsi untuk menyembunyikan modal loading
    function hideLoadingModal() {
        var loadingModal = document.getElementById('loadingModal');
        loadingModal.style.display = 'none';
    }
</script>

<?php include 'halaman/footer.php'; ?>

<?php
//$html = ob_get_clean();
//$minified_html = minify_html($html);
//echo $minified_html;
?>