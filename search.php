<?php
$api_key = "28f59279215bfffc21257db6c0f7bff5";
$base_url = "https://api.themoviedb.org/3";

if (isset($_GET['search_query'])) {
    $query = urlencode($_GET['search_query']);

    // Cari film berdasarkan query
    $movie_url = "{$base_url}/search/movie?api_key={$api_key}&query={$query}";

    // Melakukan permintaan ke API TMDb
    $movie_response = file_get_contents($movie_url);

    if ($movie_response !== false) {
        $movie_data = json_decode($movie_response, true);

        // Proses data di sini sesuai kebutuhan Anda
        if (count($movie_data['results']) > 0) {
            $movie_id = $movie_data['results'][0]['id'];
            $detail_url = "{$base_url}/movie/{$movie_id}?api_key={$api_key}&append_to_response=translations";

            $detail_response = file_get_contents($detail_url);
            $detail_data = json_decode($detail_response, true);

            // Mendapatkan informasi yang diinginkan
            $judul = $detail_data['title'];
            $bahasa = $detail_data['original_language'];
            $tagline = $detail_data['tagline'];
            $rating_mpaa = $detail_data['release_dates']['results'][0]['release_dates'][0]['certification'];
            $tahun_rilis = $detail_data['release_date'];
            $waktu_jalan = $detail_data['runtime'];
            $rating_tmdb = $detail_data['vote_average'];
            $anggaran = $detail_data['budget'];
            $pendapatan = $detail_data['revenue'];
            $youtube_id = $detail_data['videos']['results'][0]['key'];
            $penerjemah = $detail_data['translations']['translations'][0]['name'];
            $url_poster = "https://image.tmdb.org/t/p/w500/{$detail_data['poster_path']}";
            $imdb_id = $detail_data['imdb_id'];
            $tmdb_id = $detail_data['id'];

            // Tampilkan informasi yang diambil
            echo "<h2>Informasi Film:</h2>";
            echo "<p>Judul: $judul</p>";
            echo "<p>Bahasa: $bahasa</p>";
            echo "<p>Tagline: $tagline</p>";
            echo "<p>Rating MPAA: $rating_mpaa</p>";
            echo "<p>Tahun Rilis: $tahun_rilis</p>";
            echo "<p>Waktu Jalan: $waktu_jalan menit</p>";
            echo "<p>Rating TMDb: $rating_tmdb</p>";
            echo "<p>Anggaran: $anggaran</p>";
            echo "<p>Pendapatan: $pendapatan</p>";
            echo "<p>YouTube ID Trailer: $youtube_id</p>";
            echo "<p>Penerjemah: $penerjemah</p>";
            echo "<img src=\"$url_poster\" alt=\"$judul\">";
            echo "<p>IMDb ID: $imdb_id</p>";
            echo "<p>TMDb ID: $tmdb_id</p>";
        } else {
            echo "<p>Tidak ada hasil film untuk query tersebut.</p>";
        }
    } else {
        echo "Permintaan gagal.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pencarian Film dan TV Show</title>
</head>

<body>
    <h1>Pencarian Film dan TV Show di TMDb</h1>
    <form action="" method="GET">
        <input type="text" name="search_query" placeholder="Masukkan judul film atau TV show">
        <button type="submit">Cari</button>
    </form>
</body>

</html>