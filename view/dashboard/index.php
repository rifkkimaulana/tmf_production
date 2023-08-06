<?php
$query_film_tv = "SELECT tb_film.thumbnail, tb_film.judul_film 
                AS judul, tb_film.tmdb_id, tb_film.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                FROM tb_film
                LEFT JOIN tb_view ON tb_film.tmdb_id = tb_view.tmdb_id
                GROUP BY tb_film.tmdb_id

                UNION

                SELECT tb_tv_show.thumbnail, tb_tv_show.judul_tv_show 
                AS judul, tb_tv_show.tmdb_id, tb_tv_show.genre_ids, SUM(tb_view.jumlah_lihat) AS total_kunjungan
                FROM tb_tv_show
                LEFT JOIN tb_view ON tb_tv_show.tmdb_id = tb_view.tmdb_id
                GROUP BY tb_tv_show.tmdb_id

                ORDER BY total_kunjungan DESC ";

$result_film_tv = mysqli_query($koneksi, $query_film_tv);

if (isset($_GET['search']) && !empty($_GET['search'])) {
    include 'search_movies_tv.php';
} else {
    include 'all_movies_tv.php';
}

include 'widgets_dashboard.php';
?>