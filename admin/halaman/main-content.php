<div class="content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'dashboard':
                    include "dashboard/index.php";
                    break;
                case 'users':
                    include "users/index.php";
                    break;
                case 'genre':
                    include "genre/index.php";
                    break;
                case 'tag':
                    include "tag/index.php";
                    break;
                case 'direksi':
                    include "direksi/index.php";
                    break;
                case 'pemain':
                    include "pemain/index.php";
                    break;
                case 'tahun':
                    include "tahun/index.php";
                    break;
                case 'negara':
                    include "negara/index.php";
                    break;
                case 'jaringan':
                    include "jaringan/index.php";
                    break;
                case 'kualitas':
                    include "kualitas/index.php";
                    break;
                case 'kategori_artikel':
                    include "artikel/index_kategori.php";
                    break;
                case 'artikel':
                    include "artikel/index_artikel.php";
                    break;
                case 'add_artikel':
                    include "artikel/create_artikel.php";
                    break;
                case 'update_artikel':
                    include "artikel/update_artikel.php";
                    break;
                case 'tag_artikel':
                    include "artikel/index_tag.php";
                    break;
                case 'film':
                    include "film/index.php";
                    break;
                case 'add_film':
                    include "film/create.php";
                    break;
                case 'add_film_tmdb':
                    include "film/create_tmdb.php";
                    break;
                case 'update_film':
                    include "film/update.php";
                    break;
                case 'tv_show':
                    include "tv_show/index.php";
                    break;
                case 'add_tvshow':
                    include "tv_show/create.php";
                    break;
                case 'add_tv_show_tmdb':
                    include "tv_show/create_tmdb.php";
                    break;
                case 'update_tv_show':
                    include "tv_show/update.php";
                    break;
                case 'episode':
                    include "episode/index.php";
                    break;
                case 'add_episode':
                    include "episode/create.php";
                    break;
                case 'update_episode':
                    include "episode/update.php";
                    break;
                case 'backup_restore':
                    include "backup_restore/index.php";
                    break;
                case 'reset_database':
                    include "reset_database/index.php";
                    break;
                case 'log_aplikasi':
                    include "log_aplikasi/index.php";
                    break;
                case 'komentar':
                    include "komentar/index.php";
                    break;

                default:
                    include "../view/error/halaman-buntu.php";
                    break;
            }
        } else {
            include "../dashboard/index.php";
        }
        ?>
    </div>
</div>