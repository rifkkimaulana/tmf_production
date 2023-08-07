<div class="container">
    <div class="row">

        <script async="&#97;&#115;&#121;&#110;&#99;" data-cfasync="&#102;&#97;&#108;&#115;&#101;"
            src="&#47;&#47;&#100;&#114;&#101;&#97;&#100;&#102;&#117;&#108;&#112;&#114;&#111;&#102;&#105;&#116;&#97;&#98;&#108;&#101;&#46;&#99;&#111;&#109;&#47;&#98;&#48;&#101;&#99;&#101;&#48;&#102;&#49;&#55;&#99;&#101;&#52;&#51;&#102;&#97;&#99;&#56;&#51;&#49;&#50;&#56;&#54;&#53;&#52;&#100;&#102;&#56;&#54;&#53;&#102;&#101;&#55;&#47;&#105;&#110;&#118;&#111;&#107;&#101;&#46;&#106;&#115;"></script>
        &#13;
        <div
            id="&#99;&#111;&#110;&#116;&#97;&#105;&#110;&#101;&#114;&#45;&#98;&#48;&#101;&#99;&#101;&#48;&#102;&#49;&#55;&#99;&#101;&#52;&#51;&#102;&#97;&#99;&#56;&#51;&#49;&#50;&#56;&#54;&#53;&#52;&#100;&#102;&#56;&#54;&#53;&#102;&#101;&#55;">
        </div>

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