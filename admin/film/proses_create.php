<?php
//Bagian 1
$judul_film = $_POST["judul_film"];
$deskripsi = $_POST["deskripsi"];

//bagian 2 TMDB
$judul = $_POST["judul"];
$bahasa = $_POST["bahasa"];
$tagline = $_POST["tagline"];
$rating_mpaa = $_POST["rating_mpaa"];
$tanggal_rilis = $_POST["tanggal_rilis"];
$tahun_rilis = $_POST["tahun_rilis"];
$waktu_jalan = $_POST["waktu_jalan"];
$rating_tmdb = $_POST["rating_tmdb"];
$other_input = $_POST["other_input"];
$anggaran = $_POST["anggaran"];
$pendapatan = $_POST["pendapatan"];
$youtube_id = $_POST["youtube_id"];
$penerjemah = $_POST["penerjemah"];
$url_poster = $_POST["url_poster"];
$imdb_id = $_POST["imdb_id"];
$tmdb_id = $_POST["tmdb_id"];

//bagian 3 - Player
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $playerJudul1 = $_POST["playerJudul-1"];
    $kodeEmbed1 = $_POST["kodeEmbed-1"];

    $playerJudul2 = $_POST["playerJudul-2"];
    $kodeEmbed2 = $_POST["kodeEmbed-2"];

    $playerJudul3 = $_POST["playerJudul-3"];
    $kodeEmbed3 = $_POST["kodeEmbed-3"];

    $playerJudul4 = $_POST["playerJudul-4"];
    $kodeEmbed4 = $_POST["kodeEmbed-4"];

    $playerJudul5 = $_POST["playerJudul-5"];
    $kodeEmbed5 = $_POST["kodeEmbed-5"];

    $playerJudul6 = $_POST["playerJudul-6"];
    $kodeEmbed6 = $_POST["kodeEmbed-6"];

    $playerJudul7 = $_POST["playerJudul-7"];
    $kodeEmbed7 = $_POST["kodeEmbed-7"];

    $playerJudul8 = $_POST["playerJudul-8"];
    $kodeEmbed8 = $_POST["kodeEmbed-8"];

    $playerJudul9 = $_POST["playerJudul-9"];
    $kodeEmbed9 = $_POST["kodeEmbed-9"];

    $playerJudul10 = $_POST["playerJudul-10"];
    $kodeEmbed10 = $_POST["kodeEmbed-10"];

    $playerJudul11 = $_POST["playerJudul-11"];
    $kodeEmbed11 = $_POST["kodeEmbed-11"];

    $playerJudul12 = $_POST["playerJudul-12"];
    $kodeEmbed12 = $_POST["kodeEmbed-12"];

    $playerJudul13 = $_POST["playerJudul-13"];
    $kodeEmbed13 = $_POST["kodeEmbed-13"];

    $playerJudul14 = $_POST["playerJudul-14"];
    $kodeEmbed14 = $_POST["kodeEmbed-14"];

    $playerJudul15 = $_POST["playerJudul-15"];
    $kodeEmbed15 = $_POST["kodeEmbed-15"];

}

//bagian 4 - download
$judulDownload1 = $_POST["judulDownload-1"];
$linkDownload1 = $_POST["linkDownload-1"];

$judulDownload2 = $_POST["judulDownload-2"];
$linkDownload2 = $_POST["linkDownload-2"];

$judulDownload3 = $_POST["judulDownload-3"];
$linkDownload3 = $_POST["linkDownload-3"];

$judulDownload4 = $_POST["judulDownload-4"];
$linkDownload4 = $_POST["linkDownload-4"];

$judulDownload5 = $_POST["judulDownload-5"];
$linkDownload5 = $_POST["linkDownload-5"];

$judulDownload6 = $_POST["judulDownload-6"];
$linkDownload6 = $_POST["linkDownload-6"];

$judulDownload7 = $_POST["judulDownload-7"];
$linkDownload7 = $_POST["linkDownload-7"];

$judulDownload8 = $_POST["judulDownload-8"];
$linkDownload8 = $_POST["linkDownload-8"];

$judulDownload9 = $_POST["judulDownload-9"];
$linkDownload9 = $_POST["linkDownload-9"];

$judulDownload10 = $_POST["judulDownload-10"];
$linkDownload10 = $_POST["linkDownload-10"];

$judulDownload11 = $_POST["judulDownload-11"];
$linkDownload11 = $_POST["linkDownload-11"];

$judulDownload12 = $_POST["judulDownload-12"];
$linkDownload12 = $_POST["linkDownload-12"];

$judulDownload13 = $_POST["judulDownload-13"];
$linkDownload13 = $_POST["linkDownload-13"];

$judulDownload14 = $_POST["judulDownload-14"];
$linkDownload14 = $_POST["linkDownload-14"];

$judulDownload15 = $_POST["judulDownload-15"];
$linkDownload15 = $_POST["linkDownload-15"];

//bagian 5 - genre
$selectedGenres = $_POST['selectedGenres'];
echo $selectedGenres;

//bagian 6 - Tag
$selectedTag = $_POST['selectedTag'];
echo $selectedTag;

//bagian 6 - Direktur
$selectedDireksi = $_POST['selectedDireksi'];
echo $selectedDireksi;

//bagian 6 - Direktur
$selectedPemain = $_POST['selectedPemain'];
echo $selectedPemain;

//bagian 6 - tahun
$selectedTahun = $_POST['selectedTahun'];
echo $selectedTahun;

//bagian 6 - negara
$selectedNegara = $_POST['selectedNegara'];
echo $selectedNegara;

//bagian 6 - negara
$selectedKualitas = $_POST['selectedKualitas'];
echo $selectedKualitas;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["image_banner"])) {
    $targetDir = "../../gambar/film/";

    // Pastikan folder sudah ada atau buat folder jika belum ada
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $imageFile = $_FILES["image_banner"];
    $imageName = $imageFile["name"];
    $imageTmpName = $imageFile["tmp_name"];
    $imageError = $imageFile["error"];

    if ($imageError === UPLOAD_ERR_OK) {
        // Buat nama unik untuk gambar dengan menggunakan uniqid()
        $uniqueName = uniqid() . '_' . $imageName;

        // Pindahkan file dari temp folder ke folder yang ditentukan dengan nama unik
        move_uploaded_file($imageTmpName, $targetDir . $uniqueName);
        echo "Gambar berhasil diunggah ke server dengan nama unik: " . $uniqueName;
    } else {
        echo "Error dalam mengunggah gambar.";
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}