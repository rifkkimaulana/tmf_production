<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Tombol untuk menguji modal -->
<button type="button" class="btn btn-primary" id="testButton">Test Modal Loading</button>

<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <span class="ml-2">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Fungsi untuk menampilkan modal loading
    function showLoadingModal() {
        $('#loadingModal').modal('show');
    }

    // Fungsi untuk menyembunyikan modal loading
    function hideLoadingModal() {
        $('#loadingModal').modal('hide');
    }

    // Event untuk menampilkan modal loading saat halaman dimuat
    $(window).on('load', function () {
        hideLoadingModal(); // Menyembunyikan modal loading setelah halaman selesai dimuat
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