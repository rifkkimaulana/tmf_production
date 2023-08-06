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
    // Fungsi untuk menyembunyikan modal loading
    function hideLoadingModal() {
        $('#loadingModal').modal('hide');
    }

    // Event listener untuk menyembunyikan modal ketika halaman selesai dimuat
    $(window).on('load', function () {
        hideLoadingModal();
    });
</script>
<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'dashboard':
                    include "view/dashboard/index.php";
                    break;
                case 'film':
                    include "view/film/index.php";
                    break;
                case 'tvshow':
                    include "view/tvshow/index.php";
                    break;
                case 'artikel':
                    include "view/artikel/index.php";
                    break;
                case 'genre':
                    include "view/genre/index.php";
                    break;
                case 'negara':
                    include "view/negara/index.php";
                    break;
                case 'movies':
                    include "view/film/view_film.php";
                    break;
                case 'tv':
                    include "view/tvshow/view_tv.php";
                    break;
                case 'error':
                    include "view/error/halaman-buntu.php";
                    break;

                default:
                    include "view/error/halaman-buntu.php";
                    break;
            }
        } else {
            include "../dashboard/index.php";
        }
        ?>
    </div>
</div>