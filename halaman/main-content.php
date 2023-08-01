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
                case 'view':
                    include "view/view.php";
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