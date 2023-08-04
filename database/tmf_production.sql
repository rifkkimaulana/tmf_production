-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 13.23
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmf_production`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `kategori_ids` varchar(255) NOT NULL,
  `tag_ids` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `status`, `judul_artikel`, `isi_artikel`, `kategori_ids`, `tag_ids`, `thumbnail`, `created_at`, `updated_at`) VALUES
(15, 'draf', 'asdf', '<p>asdf</p>', '5', '4', '64c258477d0c9_IMG_0094.JPG', '2023-07-27 06:43:03', '2023-07-27 07:44:40'),
(16, 'publik', 'judul test', '<p>test juful</p>', '5,15,16', '3,6', '64c2688e76114_Untitled.png', '2023-07-27 07:52:30', '2023-07-27 08:03:36'),
(17, 'draf', 'asddasd', '<p>asdasdasd</p>', '5,15,16', '4', '64c26b1ae6048_Untitled.png', '2023-07-27 08:03:22', '2023-07-27 08:03:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_direksi`
--

CREATE TABLE `tb_direksi` (
  `id` int(11) NOT NULL,
  `nama_direksi` varchar(255) NOT NULL,
  `slug_direksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_direksi`
--

INSERT INTO `tb_direksi` (`id`, `nama_direksi`, `slug_direksi`) VALUES
(8, 'KimSaboo', 'kimsaboo'),
(11, 'Andy Muschietti', 'andy-muschietti'),
(13, 'Michael P. Henning', 'michael-p.-henning'),
(14, '', ''),
(15, 'Greta Gerwig', 'greta-gerwig'),
(16, 'Rob Marshall', 'rob-marshall'),
(17, 'Steven Caple Jr.', 'steven-caple-jr.'),
(18, 'Kirk DeMicco', 'kirk-demicco'),
(19, 'Eiichirō Hasumi', 'eiichir??-hasumi'),
(20, 'Oleksandra Ruban', 'oleksandra-ruban'),
(21, ' Oleg Malamuzh', '-oleg-malamuzh'),
(22, '  Oleg Malamuzh', '--oleg-malamuzh'),
(23, 'Tomek Baginski', 'tomek-baginski'),
(24, 'Kensuke Sonomura', 'kensuke-sonomura'),
(25, 'Christopher McQuarrie', 'christopher-mcquarrie'),
(26, 'Chad Stahelski', 'chad-stahelski'),
(27, 'Michael Jelenic', 'michael-jelenic'),
(28, ' Aaron Horvath', '-aaron-horvath'),
(29, 'Antoni Nykowski', 'antoni-nykowski'),
(30, 'Jeff Wamester', 'jeff-wamester'),
(31, 'Ethan Spaulding', 'ethan-spaulding'),
(32, 'Castille Landon', 'castille-landon'),
(33, 'Patrick Wilson', 'patrick-wilson'),
(34, 'Terry Bishop', 'terry-bishop'),
(35, 'Willard Carroll', 'willard-carroll'),
(36, 'Ivan Ivanov-Vano', 'ivan-ivanov-vano'),
(37, 'J. Stephen Maunder', 'j.-stephen-maunder'),
(38, 'Kim Ki-duk', 'kim-ki-duk'),
(39, 'Noriyo Sasaki', 'noriyo-sasaki'),
(40, 'Kari Skogland', 'kari-skogland'),
(41, 'Jacques Doillon', 'jacques-doillon'),
(42, 'Robert Markowitz', 'robert-markowitz'),
(43, 'Mel Gibson', 'mel-gibson'),
(44, 'Norbert Kückelmann', 'norbert-k??ckelmann'),
(45, '   Oleg Malamuzh', '---oleg-malamuzh'),
(46, 'Francis Ford Coppola', 'francis-ford-coppola'),
(47, 'Frank Darabont', 'frank-darabont'),
(48, 'Joaquim Dos Santos', 'joaquim-dos-santos'),
(49, ' Justin K. Thompson', '-justin-k.-thompson'),
(50, ' Kemp Powers', '-kemp-powers'),
(51, 'Norbert Kückelmann', 'norbert-k??ckelmann');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_download`
--

CREATE TABLE `tb_download` (
  `id` int(11) NOT NULL,
  `judul1` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `judul2` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `judul3` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `judul4` varchar(255) NOT NULL,
  `link4` varchar(255) NOT NULL,
  `judul5` varchar(255) NOT NULL,
  `link5` varchar(255) NOT NULL,
  `judul6` varchar(255) NOT NULL,
  `link6` varchar(255) NOT NULL,
  `judul7` varchar(255) NOT NULL,
  `link7` varchar(255) NOT NULL,
  `judul8` varchar(255) NOT NULL,
  `link8` varchar(255) NOT NULL,
  `judul9` varchar(255) NOT NULL,
  `link9` varchar(255) NOT NULL,
  `judul10` varchar(255) NOT NULL,
  `link10` varchar(255) NOT NULL,
  `judul11` varchar(255) NOT NULL,
  `link11` varchar(255) NOT NULL,
  `judul12` varchar(255) NOT NULL,
  `link12` varchar(255) NOT NULL,
  `judul13` varchar(255) NOT NULL,
  `link13` varchar(255) NOT NULL,
  `judul14` varchar(255) NOT NULL,
  `link14` varchar(255) NOT NULL,
  `judul15` varchar(255) NOT NULL,
  `link15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_download`
--

INSERT INTO `tb_download` (`id`, `judul1`, `link1`, `judul2`, `link2`, `judul3`, `link3`, `judul4`, `link4`, `judul5`, `link5`, `judul6`, `link6`, `judul7`, `link7`, `judul8`, `link8`, `judul9`, `link9`, `judul10`, `link10`, `judul11`, `link11`, `judul12`, `link12`, `judul13`, `link13`, `judul14`, `link14`, `judul15`, `link15`) VALUES
(3, 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '1dssd', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '321', '312sdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '123', '4234234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '123', '4234234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '3', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '765', '432', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'Tanpa KEterangan', 'youtube.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_episode_tv_show`
--

CREATE TABLE `tb_episode_tv_show` (
  `id` int(11) NOT NULL,
  `nama_episode` varchar(200) NOT NULL,
  `slug_episode` text NOT NULL,
  `jumlah_episode` int(11) NOT NULL,
  `tv_show_id` varchar(100) NOT NULL,
  `player_id` varchar(100) NOT NULL,
  `download_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_episode_tv_show`
--

INSERT INTO `tb_episode_tv_show` (`id`, `nama_episode`, `slug_episode`, `jumlah_episode`, `tv_show_id`, `player_id`, `download_id`, `status`, `created_at`, `updated_at`) VALUES
(13, 'King the Land', 'king-the-land', 1, '39', '72', '72', 'publik', '2023-08-03 00:05:04', '2023-08-03 00:05:04'),
(14, 'King the Land', 'king-the-land', 2, '39', '76', '76', 'publik', '2023-08-03 00:40:57', '2023-08-03 00:40:57'),
(15, 'King the Land', 'king-the-land', 3, '39', '77', '77', 'publik', '2023-08-03 00:45:33', '2023-08-03 00:45:33'),
(16, 'King the Land', 'king-the-land', 4, '39', '78', '78', 'publik', '2023-08-03 00:45:37', '2023-08-03 00:45:37'),
(17, 'King the Land', 'king-the-land', 5, '39', '79', '79', 'publik', '2023-08-03 00:45:44', '2023-08-03 00:45:44'),
(18, 'King the Land', 'king-the-land', 6, '39', '80', '80', 'publik', '2023-08-03 00:46:00', '2023-08-03 00:46:00'),
(19, 'King the Land', 'king-the-land', 7, '39', '81', '81', 'publik', '2023-08-03 00:46:06', '2023-08-03 00:46:06'),
(20, 'King the Land', 'king-the-land', 8, '39', '82', '82', 'publik', '2023-08-03 00:46:10', '2023-08-03 00:46:10'),
(21, 'King the Land', 'king-the-land', 9, '39', '83', '83', 'publik', '2023-08-03 00:46:15', '2023-08-03 00:46:15'),
(22, 'King the Land', 'king-the-land', 10, '39', '84', '84', 'publik', '2023-08-03 00:46:19', '2023-08-03 00:46:19'),
(23, 'King the Land', 'king-the-land', 11, '39', '85', '85', 'publik', '2023-08-03 00:46:22', '2023-08-03 00:46:22'),
(24, 'King the Land', 'king-the-land', 12, '39', '86', '86', 'publik', '2023-08-03 00:46:25', '2023-08-03 00:46:25'),
(25, 'King the Land', 'king-the-land', 13, '39', '87', '87', 'publik', '2023-08-03 00:46:29', '2023-08-03 00:46:29'),
(26, 'King the Land', 'king-the-land', 14, '39', '88', '88', 'publik', '2023-08-03 00:46:32', '2023-08-03 00:46:32'),
(27, 'King the Land', 'king-the-land', 1, '40', '89', '89', 'publik', '2023-08-03 19:55:47', '2023-08-03 19:55:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_film`
--

CREATE TABLE `tb_film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `genre_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `tag_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `direktur_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `pemain_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `tahun_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `negara_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `kualitas_ids` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `tmdb_id` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL,
  `download_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_film`
--

INSERT INTO `tb_film` (`id`, `judul_film`, `deskripsi`, `status`, `genre_ids`, `tag_ids`, `direktur_ids`, `pemain_ids`, `tahun_ids`, `negara_ids`, `kualitas_ids`, `thumbnail`, `tmdb_id`, `player_id`, `download_id`, `created_at`, `updated_at`) VALUES
(14, 'The Flash (2023)', 'When his attempt to save his family inadvertently alters the future, Barry Allen becomes trapped in a reality in which General Zod has returned and there are no Super Heroes to turn to. In order to save the world that he is in and return to the future that he knows, Barry\'s only hope is to race for his life. But will making the ultimate sacrifice be enough to reset the universe?', 'draf', '50,51,52', '31', '11', '10,11,12,13,14,74,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69', '6', '11', '11', '', 23, 22, 22, '2023-07-29 22:43:46', '2023-07-29 22:43:46'),
(27, 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '37', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', 36, 35, 35, '2023-07-30 00:36:14', '2023-07-30 00:36:14'),
(28, 'The Little Mermaid (2023)', 'The youngest of King Triton’s daughters, and the most defiant, Ariel longs to find out more about the world beyond the sea, and while visiting the surface, falls for the dashing Prince Eric. With mermaids forbidden to interact with humans, Ariel makes a deal with the evil sea witch, Ursula, which gives her a chance to experience life on land, but ultimately places her life – and her father’s crown – in jeopardy.', 'draf', '51,54,60,61', '38,39,40', '16', '450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,400,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,', '6', '11', '12', '', 37, 36, 36, '2023-07-30 00:36:59', '2023-07-30 00:36:59'),
(38, 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,504,505,506,507,508,509,510,585,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,583,528,529,530,531,532,533,534,535,586,537,538,539', '6', '11', '12', '', 47, 46, 46, '2023-07-30 00:53:53', '2023-07-30 00:53:53'),
(39, 'Ruby Gillman, Teenage Kraken (2023)', 'Ruby Gillman, a sweet and awkward high school student, discovers she\'s a direct descendant of the warrior kraken queens. The kraken are sworn to protect the oceans of the world against the vain, power-hungry mermaids. Destined to inherit the throne from her commanding grandmother, Ruby must use her newfound powers to protect those she loves most.', 'draf', '59,54,60,57', '42', '18', '587,588,589,590,510,591,537,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615', '6', '11', '12', '', 48, 47, 47, '2023-07-30 00:55:33', '2023-07-30 00:55:33'),
(40, 'Resident Evil: Death Island (2023)', 'In San Francisco, Jill Valentine is dealing with a zombie outbreak and a new T-Virus, Leon Kennedy is on the trail of a kidnapped DARPA scientist, and Claire Redfield is investigating a monstrous fish that is killing whales in the bay. Joined by Chris Redfield and Rebecca Chambers, they discover the trail of clues from their separate cases all converge on the same location, Alcatraz Island, where a new evil has taken residence and awaits their arrival.', 'draf', '59,50,62', '43', '19', '616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645', '6', '14', '12', '', 49, 48, 48, '2023-07-30 00:56:03', '2023-07-30 00:56:03'),
(41, 'Mavka: The Forest Song (2023)', 'Mavka — a Soul of the Forest and its Warden — faces an impossible choice between love and her duty as guardian to the Heart of the Forest, when she falls in love with a human — the talented young musician Lukas.', 'draf', '23,24,25,26,50,51,52,54,57,59,60,61,62,63,64,65', '70', '20,45', '646,1529,1530,1531,1532,1533,1534,1535,1536,1537,1538,1539,1540,1541,1542,1543', '6', '18', '2', '', 50, 49, 49, '2023-07-30 00:56:34', '2023-07-31 20:12:52'),
(42, 'Knights of the Zodiac (2023)', 'When a headstrong street orphan, Seiya, in search of his abducted sister unwittingly taps into hidden powers, he discovers he might be the only person alive who can protect a reincarnated goddess, sent to watch over humanity. Can he let his past go and embrace his destiny to become a Knight of the Zodiac?', 'draf', '60,50,51', '44', '23', '677,678,679,680,681,682,683,684,685,686,687,688,689,690,691', '6', '14,16', '12', '', 51, 50, 50, '2023-07-30 00:57:38', '2023-07-30 00:57:38'),
(43, 'Bad City (2022)', 'Kensuke Sonomura directs the legendary Hitoshi Ozawa in this ultimate V-Cinema actioner.  Kaiko City is plagued with poverty and crime. When a corrupt businessman decides to run for mayor and starts eliminating opponents from the rival mafia, a former police captain serving time for murder is secretly released and put in charge of a special task force to arrest him.', 'draf', '50,63', '36', '24', '692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713', '15', '14', '12', '', 52, 51, 51, '2023-07-30 00:58:00', '2023-07-30 00:58:00'),
(44, 'Mission: Impossible - Dead Reckoning Part One (2023)', 'Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands. With control of the future and the world\'s fate at stake and dark forces from Ethan\'s past closing in, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan must consider that nothing can matter more than his mission—not even the lives of those he cares about most.', 'draf', '50,51,64', '45', '25', '714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,', '6', '11', '12', '', 53, 52, 52, '2023-07-30 00:58:41', '2023-07-30 00:58:41'),
(45, 'John Wick: Chapter 4 (2023)', 'With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'draf', '50,64,63', '46,47', '26', '837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865', '6', '19,16', '12', '', 54, 53, 53, '2023-07-30 01:00:27', '2023-07-30 01:00:27'),
(46, 'Mission: Impossible - Dead Reckoning Part One (2023)', 'Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands. With control of the future and the world\'s fate at stake and dark forces from Ethan\'s past closing in, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan must consider that nothing can matter more than his mission—not even the lives of those he cares about most.', 'terbitkan', '50,51,64', '45', '25', '714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,866,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,', '6', '11', '12', '', 55, 54, 54, '2023-07-30 01:01:23', '2023-07-30 01:01:23'),
(47, 'The Super Mario Bros. Movie (2023)', 'While working underground to fix a water main, Brooklyn plumbers—and brothers—Mario and Luigi are transported down a mysterious pipe and wander into a magical new world. But when the brothers are separated, Mario embarks on an epic quest to find Luigi.', 'publik', '59,54,51,60,57', '48', '27,28', '867,868,869,870,871,872,873,874,875,876,877,878,534,879,880,881,882,883,884,885,886,887,888,889,890,891,892,893,894,895,896,897,898,899,900,901,902', '6', '14,16', '12', '', 56, 55, 55, '2023-07-30 01:03:05', '2023-07-30 01:03:05'),
(48, 'Mr. Car and the Knights Templar (2023)', 'A well-known art historian, treasure hunter and owner of an unusual car stumbles upon a Templar treasure, which is the key to a great power that can upset the balance of good and evil in the world. Supported by friendly scouts, Mr. Car starts a big race against time and a hostile organization, the stake of which is the heritage of knightly orders.', 'draf', '51', '36', '29', '903,904,905,906,907,908,909,910,911,912,913,914,915,916,917,918,919,920,921,922,923,924,925,926,927,928,929,930,931,932,933,934,935,936,937,938,939,940,941,942,943,944,945,946,947,948,949,950', '6', '20,21', '12', '', 57, 56, 56, '2023-07-30 01:03:47', '2023-07-30 01:03:47'),
(49, 'Justice League: Warworld (2023)', 'Until now, the Justice League has been a loose association of superpowered individuals. But when they are swept away to Warworld, a place of unending brutal gladiatorial combat, Batman, Superman, Wonder Woman and the others must somehow unite to form an unbeatable resistance able to lead an entire planet to freedom.', 'draf', '59,50,52', '49', '30', '951,952,953,954,955,956,957,958,959,534,960,961,962,963,964,965,966', '6', '11', '12', '', 58, 57, 57, '2023-07-30 01:04:45', '2023-07-30 01:04:45'),
(50, 'Mortal Kombat Legends: Battle of the Realms (2021)', 'The Earthrealm heroes must journey to the Outworld and fight for the survival of their homeland, invaded by the forces of evil warlord Shao Kahn, in the tournament to end all tournaments: the final Mortal Kombat.', 'draf', '59,50,60', '36', '31', '967,968,969,970,971,972,973,974,975,976,977,960,954,978,979,980,981,982', '16', '11', '12', '', 59, 58, 58, '2023-07-30 01:05:41', '2023-07-30 01:05:41'),
(51, 'After Ever Happy (2022)', 'As a shocking truth about a couple\'s families emerges, the two lovers discover they are not so different from each other. Tessa is no longer the sweet, simple, good girl she was when she met Hardin — any more than he is the cruel, moody boy she fell so hard for.', 'draf', '61,23', '36', '32', '983,984,985,986,987,988,989,990,991,992,993,994,995,996,997,998,999,1000,1001,1002,1003', '15', '11', '12', '', 60, 59, 59, '2023-07-30 01:06:57', '2023-07-30 01:06:57'),
(53, 'Insidious: The Red Door (2023) ', 'To put their demons to rest once and for all, Josh Lambert and a college-aged Dalton Lambert must go deeper into The Further than ever before, facing their family\'s dark past and a host of new and more horrifying terrors that lurk behind the red door.', 'draf', '23,24,25,26,50,51,52,54,57,59,60,61,62,63,64,65', '50', '33', '1004,1497,1498,1499,1500,1501,1502,1503,1504,1505,1506,1507,1508,1509,1510,1511,1512,1513,1514,1515,1516,1517,1518,1519,1520,1521,1522,1523,1524,1525,1526,1527,1528', '6', '13,35', '2', '', 62, 61, 61, '2023-07-30 16:22:07', '2023-07-31 20:11:36'),
(54, 'The Godfather (1972)', 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.', 'draf', '23,63', '', '46', '1544,1545,1546,1547,1548,1549,1550,1551,1552,1553,1554,1555,1556,1557,1558,1559,1560,1561,1562,1563,1564,1565,1566,1567,1568,1569,1570,1571,1572,1573,1574,1575,1576,1577,1578,1579,1580,1581,1582,1583,', '26', '11', '2', '', 91, 63, 63, '2023-08-01 09:06:59', '2023-08-01 09:06:59'),
(55, 'The Green Mile (1999)', 'A supernatural tale set on death row in a Southern prison, where gentle giant John Coffey possesses the mysterious power to heal people\'s ailments. When the cell block\'s head guard, Paul Edgecomb, recognizes Coffey\'s miraculous gift, he tries desperately to help stave off the condemned man\'s execution.', 'publik', '60,23,63', '71', '47', '1603,1604,1605,1606,1607,1608,1609,1610,1611,1612,1613,1614,1615,1616,1617,1618,1619,1620,1621,1622,1623,1624,1625,1626,1627,1628,1629,1630,1631,1632,1633,1634,1635,1636,1637,1638,1639,1640,1641,1642,', '24', '11', '2', '', 92, 64, 64, '2023-08-01 09:08:58', '2023-08-01 09:08:58'),
(56, 'Spider-Man: Across the Spider-Verse (2023)', 'After reuniting with Gwen Stacy, Brooklyn’s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters the Spider Society, a team of Spider-People charged with protecting the Multiverse’s very existence. But when the heroes clash on how to handle a new threat, Miles finds himself pitted against the other Spiders and must set out on his own to save those he loves most.', 'draf', '50,51,59,52', '', '48,49,50', '1646,1647,1648,512,1649,1650,1651,288,1652,1653,723,1654,1655,1656,1657,1658,1659,1660,1661,1662,1663,1664,1665,1666,1667,1668,1669,1670,1671,1672,1673,1674,1675,1676,1677,1678,1679,1680,1681,1682,168', '6', '11', '2', '', 93, 65, 65, '2023-08-01 09:10:03', '2023-08-01 09:10:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id` int(11) NOT NULL,
  `nama_genre` varchar(255) NOT NULL,
  `slug_genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_genre`
--

INSERT INTO `tb_genre` (`id`, `nama_genre`, `slug_genre`) VALUES
(23, 'Drama', 'drama'),
(24, 'Komedi', 'komedi'),
(25, 'Horor', 'horor'),
(26, 'Mysteri', 'mysteri'),
(27, 'Arcade', 'arcade'),
(28, 'Doctor', 'doctor'),
(39, 'Anime', 'anime'),
(50, 'Action', 'action'),
(51, 'Adventure', 'adventure'),
(52, 'Science Fiction', 'science-fiction'),
(54, 'Family', 'family'),
(56, 'Sci-Fi & Fantasy', 'sci-fi-&-fantasy'),
(57, 'Comedy', 'comedy'),
(58, 'Action & Adventure', 'action-&-adventure'),
(59, 'Animation', 'animation'),
(60, 'Fantasy', 'fantasy'),
(61, 'Romance', 'romance'),
(62, 'Horror', 'horror'),
(63, 'Crime', 'crime'),
(64, 'Thriller', 'thriller'),
(65, 'Mystery', 'mystery'),
(66, 'Reality', 'reality'),
(67, 'Kids', 'kids');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jaringan`
--

CREATE TABLE `tb_jaringan` (
  `id` int(11) NOT NULL,
  `nama_jaringan` varchar(255) NOT NULL,
  `slug_jaringan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jaringan`
--

INSERT INTO `tb_jaringan` (`id`, `nama_jaringan`, `slug_jaringan`) VALUES
(2, 'SBS', 'sbs'),
(4, ' 1001TV', '-1001tv'),
(5, 'CBC Television', 'cbc-television'),
(6, 'tvN', 'tvn'),
(7, 'Nippon TV', 'nippon-tv'),
(8, ' MBS', '-mbs'),
(9, ' TBS', '-tbs'),
(10, ' YTV', '-ytv'),
(11, 'Disney+', 'disney+'),
(12, 'Netflix', 'netflix'),
(13, 'CBS', 'cbs'),
(14, ' Peacock', '-peacock'),
(15, 'TF1', 'tf1'),
(16, 'MBS', 'mbs'),
(17, ' CBC', '-cbc'),
(18, ' Tulip Television', '-tulip-television'),
(19, ' SBC', '-sbc'),
(20, ' BSN', '-bsn'),
(21, ' tys', '-tys'),
(22, ' HBC', '-hbc'),
(23, ' RKK Kumamoto Broadcasting', '-rkk-kumamoto-broadcasting'),
(24, ' Nagasaki Culture Telecasting Corporation', '-nagasaki-culture-telecasting-corporation'),
(25, ' i-Television', '-i-television'),
(26, ' SBS TV', '-sbs-tv'),
(27, ' IBC Iwate Broadcasting', '-ibc-iwate-broadcasting'),
(28, ' Broadcasting System of San-in', '-broadcasting-system-of-san-in'),
(29, ' Hokuriku Broadcasting', '-hokuriku-broadcasting'),
(30, ' Oita Broadcasting System', '-oita-broadcasting-system'),
(31, ' TV-U Fukushima', '-tv-u-fukushima'),
(32, ' RSK', '-rsk'),
(33, ' TV-U Yamagata', '-tv-u-yamagata'),
(34, ' Tohoku Broadcasting', '-tohoku-broadcasting'),
(35, ' RKB', '-rkb'),
(36, ' TV Kochi Broadcasting', '-tv-kochi-broadcasting'),
(37, ' Ryukyu Broadcasting', '-ryukyu-broadcasting'),
(38, ' TV Yamanashi', '-tv-yamanashi'),
(39, ' RCC', '-rcc'),
(40, ' MRT Miyazaki Broadcasting', '-mrt-miyazaki-broadcasting'),
(41, ' ATV', '-atv'),
(42, ' MBC South Japan Broadcasting', '-mbc-south-japan-broadcasting'),
(43, 'USA Network', 'usa-network'),
(44, 'ABC', 'abc'),
(45, 'Apple TV+', 'apple-tv+'),
(46, '', ''),
(47, 'Prime Video', 'prime-video'),
(48, 'ITV2', 'itv2'),
(49, 'NBC', 'nbc'),
(50, 'Starz', 'starz'),
(51, 'The CW', 'the-cw'),
(52, 'BBC One', 'bbc-one'),
(53, ' BBC Two', '-bbc-two'),
(54, 'FOX', 'fox'),
(55, ' Netflix', '-netflix'),
(56, ' Comedy Central', '-comedy-central'),
(57, ' Hulu', '-hulu'),
(58, 'JTBC', 'jtbc'),
(59, '  Peacock', '--peacock');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_artikel`
--

CREATE TABLE `tb_kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `slug_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori_artikel`
--

INSERT INTO `tb_kategori_artikel` (`id`, `nama_kategori`, `slug_kategori`) VALUES
(5, 'Tanpa Kategori', 'tanpa-kategori'),
(15, 'Pacar', 'pacar'),
(16, 'Sempurna', 'sempurna'),
(17, 'Jenong', 'jenong'),
(18, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `waktu_post` datetime NOT NULL,
  `tmdb_id` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id`, `nama`, `komentar`, `waktu_post`, `tmdb_id`, `artikel_id`) VALUES
(13, 'Rifki Maulana', 'adsasdf', '2023-08-01 11:03:22', 36, 0),
(14, 'Rifki Maulana', 'keren', '2023-08-01 11:10:50', 93, 0),
(15, 'Rifki Maulana', 'goof', '2023-08-02 07:28:37', 36, 0),
(25, 'Rifki Maulana', 'bagus sekali', '2023-08-04 12:47:33', 0, 15),
(26, 'Rifki Maulana', 'mantap mang', '2023-08-04 13:20:42', 0, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kualitas`
--

CREATE TABLE `tb_kualitas` (
  `id` int(11) NOT NULL,
  `nama_kualitas` varchar(255) NOT NULL,
  `slug_kualitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kualitas`
--

INSERT INTO `tb_kualitas` (`id`, `nama_kualitas`, `slug_kualitas`) VALUES
(2, 'HD', 'hd'),
(3, 'FHD', 'fhd'),
(5, 'XHD', 'xhd'),
(12, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_logs_aplikasi`
--

CREATE TABLE `tb_logs_aplikasi` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_negara`
--

CREATE TABLE `tb_negara` (
  `id` int(11) NOT NULL,
  `nama_negara` varchar(255) NOT NULL,
  `slug_negara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_negara`
--

INSERT INTO `tb_negara` (`id`, `nama_negara`, `slug_negara`) VALUES
(3, 'South Korea', 'south-korea'),
(5, 'Kenya', 'kenya'),
(11, 'United States of America', 'united-states-of-america'),
(13, 'Canada', 'canada'),
(14, 'Japan', 'japan'),
(15, 'United Kingdom', 'united-kingdom'),
(16, ' United States of America', '-united-states-of-america'),
(17, '', ''),
(18, 'Ukraine', 'ukraine'),
(19, 'Germany', 'germany'),
(20, 'Latvia', 'latvia'),
(21, ' Poland', '-poland'),
(22, '  United States of America', '--united-states-of-america'),
(23, '   United States of America', '---united-states-of-america'),
(24, '    United States of America', '----united-states-of-america'),
(25, '     United States of America', '-----united-states-of-america'),
(26, '      United States of America', '------united-states-of-america'),
(27, 'Poland', 'poland'),
(28, 'France', 'france'),
(29, ' Japan', '-japan'),
(30, ' South Korea', '-south-korea'),
(31, '  Japan', '--japan'),
(32, '  South Korea', '--south-korea'),
(33, 'Spain', 'spain'),
(34, ' United Kingdom', '-united-kingdom'),
(35, '       United States of America', '-------united-states-of-america');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemain`
--

CREATE TABLE `tb_pemain` (
  `id` int(11) NOT NULL,
  `nama_pemain` varchar(255) NOT NULL,
  `slug_pemain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemain`
--

INSERT INTO `tb_pemain` (`id`, `nama_pemain`, `slug_pemain`) VALUES
(3, 'Kim Saboo', 'kim-saboo'),
(7, 'pemain nyata', 'pemain-nyata'),
(10, 'Ezra Miller', 'ezra-miller'),
(11, ' Sasha Calle', '-sasha-calle'),
(12, ' Michael Keaton', '-michael-keaton'),
(13, ' Michael Shannon', '-michael-shannon'),
(14, ' Ron Livingston', '-ron-livingston'),
(15, ' Maribel Verdú', '-maribel-verd??'),
(16, ' Kiersey Clemons', '-kiersey-clemons'),
(17, ' Antje Traue', '-antje-traue'),
(18, ' Saoirse-Monica Jackson', '-saoirse-monica-jackson'),
(19, ' Rudy Mancuso', '-rudy-mancuso'),
(20, ' Ed Wade', '-ed-wade'),
(21, ' Jeremy Irons', '-jeremy-irons'),
(22, ' Temuera Morrison', '-temuera-morrison'),
(23, ' Sanjeev Bhaskar', '-sanjeev-bhaskar'),
(24, ' Sean Rogers', '-sean-rogers'),
(25, ' Kieran Hodgson', '-kieran-hodgson'),
(26, ' Luke Brandon Field', '-luke-brandon-field'),
(27, ' Ian Loh', '-ian-loh'),
(28, ' Karl Collins', '-karl-collins'),
(29, ' Nikolaj Coster-Waldau', '-nikolaj-coster-waldau'),
(30, ' Poppy Shepherd', '-poppy-shepherd'),
(31, ' Nina Barker-Francis', '-nina-barker-francis'),
(32, ' Ava Hamada', '-ava-hamada'),
(33, ' Maurice Chung', '-maurice-chung'),
(34, ' Florence Wright', '-florence-wright'),
(35, ' Bastian Antonio Fuentes', '-bastian-antonio-fuentes'),
(36, ' Andoni Gracia', '-andoni-gracia'),
(37, ' Alex Hank', '-alex-hank'),
(38, ' Miki Muschietti', '-miki-muschietti'),
(39, ' Rebecca Hiller', '-rebecca-hiller'),
(40, ' Rob Hunt', '-rob-hunt'),
(41, ' Jonny Stockwell', '-jonny-stockwell'),
(42, ' Michael Byrch', '-michael-byrch'),
(43, ' Bret Jones', '-bret-jones'),
(44, ' Sue Maund', '-sue-maund'),
(45, ' Alex Batareanu', '-alex-batareanu'),
(46, ' Andrei Nova', '-andrei-nova'),
(47, ' Gabriel Constantin', '-gabriel-constantin'),
(48, ' Oleg Mirochnikov', '-oleg-mirochnikov'),
(49, ' Katia Elizarova', '-katia-elizarova'),
(50, ' Denis Khoroshko', '-denis-khoroshko'),
(51, ' Zsuzsa Magyar', '-zsuzsa-magyar'),
(52, ' Michael Lerman', '-michael-lerman'),
(53, ' Rosie Ede', '-rosie-ede'),
(54, ' Andy Muschietti', '-andy-muschietti'),
(55, ' Ellie Rawnsley', '-ellie-rawnsley'),
(56, ' Greg Lockett', '-greg-lockett'),
(57, ' Chelsea Leigh Macleod', '-chelsea-leigh-macleod'),
(58, ' Leslie Soo', '-leslie-soo'),
(59, ' Freya Evans', '-freya-evans'),
(60, ' Sue Moore', '-sue-moore'),
(61, ' Lynn Farleigh', '-lynn-farleigh'),
(62, ' Martin Pemberton', '-martin-pemberton'),
(63, ' Sarah Lawn', '-sarah-lawn'),
(64, ' David Calvitto', '-david-calvitto'),
(65, ' Ben Affleck', '-ben-affleck'),
(66, ' Gal Gadot', '-gal-gadot'),
(67, ' Nicolas Cage', '-nicolas-cage'),
(68, ' George Clooney', '-george-clooney'),
(69, ' Jason Momoa', '-jason-momoa'),
(70, ' Maribel Verdú', '-maribel-verd??'),
(71, ' Maribel Verdú', '-maribel-verd??'),
(72, ' Maribel Verdú', '-maribel-verd??'),
(73, '', ''),
(74, ' Maribel Verdú', '-maribel-verd??'),
(75, 'Han Suk-kyu', 'han-suk-kyu'),
(76, 'Ahn Hyo-seop', 'ahn-hyo-seop'),
(77, 'Jin Kyung', 'jin-kyung'),
(78, 'Lee Sung-kyoung', 'lee-sung-kyoung'),
(79, 'Kim Joo-heon', 'kim-joo-heon'),
(80, 'Im Won-hee', 'im-won-hee'),
(81, 'Lee Kyung-young', 'lee-kyung-young'),
(82, 'Byun Woo-min', 'byun-woo-min'),
(83, 'Kim Min-jae', 'kim-min-jae'),
(84, 'So Joo-yeon', 'so-joo-yeon'),
(85, 'Shin Dong-wook', 'shin-dong-wook'),
(86, 'Yoon Na-moo', 'yoon-na-moo'),
(87, 'Lee Sin-young', 'lee-sin-young'),
(88, 'Lee Hong-nae', 'lee-hong-nae'),
(89, 'Yoon Bo-ra', 'yoon-bo-ra'),
(90, 'Jeong Ji-an', 'jeong-ji-an'),
(91, 'Ko Sang-ho', 'ko-sang-ho'),
(92, 'Amybeth McNulty', 'amybeth-mcnulty'),
(93, ' Geraldine James', '-geraldine-james'),
(94, ' R. H. Thomson', '-r.-h.-thomson'),
(95, ' Lucas Jade Zumann', '-lucas-jade-zumann'),
(96, ' Kiawentiio', '-kiawentiio'),
(97, 'Gong Yoo', 'gong-yoo'),
(98, ' Kim Go-eun', '-kim-go-eun'),
(99, ' Lee Dong-wook', '-lee-dong-wook'),
(100, ' Yoo In-na', '-yoo-in-na'),
(101, ' Yook Sung-jae', '-yook-sung-jae'),
(102, ' Lee El', '-lee-el'),
(103, ' Kim Seong-gyeom', '-kim-seong-gyeom'),
(104, ' Jo Woo-jin', '-jo-woo-jin'),
(105, ' Yoon Kyung-ho', '-yoon-kyung-ho'),
(106, ' Kim Baek Ri', '-kim-baek-ri'),
(107, ' Kim Woo Jin', '-kim-woo-jin'),
(108, 'Daiki Yamashita', 'daiki-yamashita'),
(109, ' Nobuhiko Okamoto', '-nobuhiko-okamoto'),
(110, ' Kenta Miyake', '-kenta-miyake'),
(111, ' Ayane Sakura', '-ayane-sakura'),
(112, ' Kaito Ishikawa', '-kaito-ishikawa'),
(113, ' Yuki Kaji', '-yuki-kaji'),
(114, ' Aoi Yuki', '-aoi-yuki'),
(115, 'Margot Robbie', 'margot-robbie'),
(116, 'Ryan Gosling', 'ryan-gosling'),
(117, 'America Ferrera', 'america-ferrera'),
(118, 'Kate McKinnon', 'kate-mckinnon'),
(119, 'Ariana Greenblatt', 'ariana-greenblatt'),
(120, 'Michael Cera', 'michael-cera'),
(121, 'Issa Rae', 'issa-rae'),
(122, 'Will Ferrell', 'will-ferrell'),
(123, 'Rhea Perlman', 'rhea-perlman'),
(124, 'Alexandra Shipp', 'alexandra-shipp'),
(125, 'Emma Mackey', 'emma-mackey'),
(126, 'Hari Nef', 'hari-nef'),
(127, 'Sharon Rooney', 'sharon-rooney'),
(128, 'Ana Kayne', 'ana-kayne'),
(129, 'Ritu Arya', 'ritu-arya'),
(130, 'Dua Lipa', 'dua-lipa'),
(131, 'Nicola Coughlan', 'nicola-coughlan'),
(132, 'Emerald Fennell', 'emerald-fennell'),
(133, 'Simu Liu', 'simu-liu'),
(134, 'Kingsley Ben-Adir', 'kingsley-ben-adir'),
(135, 'Ncuti Gatwa', 'ncuti-gatwa'),
(136, 'Scott Evans', 'scott-evans'),
(137, 'John Cena', 'john-cena'),
(138, 'Helen Mirren', 'helen-mirren'),
(139, 'Connor Swindells', 'connor-swindells'),
(140, 'Jamie Demetriou', 'jamie-demetriou'),
(141, 'Andrew Leung', 'andrew-leung'),
(142, 'Will Merrick', 'will-merrick'),
(143, 'Zheng Xi Yong', 'zheng-xi-yong'),
(144, 'Asim Chaudhry', 'asim-chaudhry'),
(145, 'Ray Fearon', 'ray-fearon'),
(146, 'Erica Ford', 'erica-ford'),
(147, 'Hannah Khalique-Brown', 'hannah-khalique-brown'),
(148, 'Mette Towley', 'mette-towley'),
(149, 'Marisa Abela', 'marisa-abela'),
(150, 'Lucy Boynton', 'lucy-boynton'),
(151, 'Rob Brydon', 'rob-brydon'),
(152, 'Tom Stourton', 'tom-stourton'),
(153, 'Chris Taylor', 'chris-taylor'),
(154, 'David Mumeni', 'david-mumeni'),
(155, 'Olivia Brody', 'olivia-brody'),
(156, 'Isla Ashworth', 'isla-ashworth'),
(157, 'Eire Farrell', 'eire-farrell'),
(158, 'Daisy Duczmal', 'daisy-duczmal'),
(159, 'Genvieve Toussaint', 'genvieve-toussaint'),
(160, 'Isabella Nightingale', 'isabella-nightingale'),
(161, 'Manuela Mora', 'manuela-mora'),
(162, 'Aida Sexton', 'aida-sexton'),
(163, 'Millie-Rose Crossley', 'millie-rose-crossley'),
(164, 'Anvita Nehru', 'anvita-nehru'),
(165, 'Kayla-Mai Alvares', 'kayla-mai-alvares'),
(166, 'Luke Mullen', 'luke-mullen'),
(167, 'Patrick Luwis', 'patrick-luwis'),
(168, 'Mac Brandt', 'mac-brandt'),
(169, 'Paul Jurewicz', 'paul-jurewicz'),
(170, 'Oraldo Austin', 'oraldo-austin'),
(171, 'Benjamin Arthur', 'benjamin-arthur'),
(172, 'Carlos Jacott', 'carlos-jacott'),
(173, 'Adam Ray', 'adam-ray'),
(174, 'George Basil', 'george-basil'),
(175, 'Ptolemy Slocum', 'ptolemy-slocum'),
(176, 'Deb Hiett', 'deb-hiett'),
(177, 'James Leon', 'james-leon'),
(178, 'Oliver Vaquer', 'oliver-vaquer'),
(179, 'Tony Noto', 'tony-noto'),
(180, 'Christopher T. Wood', 'christopher-t.-wood'),
(181, 'Ann Roth', 'ann-roth'),
(182, 'Annie Mumolo', 'annie-mumolo'),
(183, 'Elise Gallup', 'elise-gallup'),
(184, 'McKenna Roberts', 'mckenna-roberts'),
(185, 'Brylee Hsu', 'brylee-hsu'),
(186, 'Sasha Milstein', 'sasha-milstein'),
(187, 'Lauren Holt', 'lauren-holt'),
(188, 'Sterling Jones', 'sterling-jones'),
(189, 'Ryan Piers Williams', 'ryan-piers-williams'),
(190, 'Jamaal Lewis', 'jamaal-lewis'),
(191, 'Kathryn Akin', 'kathryn-akin'),
(192, 'Grace Jabbari', 'grace-jabbari'),
(193, 'Ira Mandela Siobhan', 'ira-mandela-siobhan'),
(194, 'Lisa Spencer', 'lisa-spencer'),
(195, 'Naomi Weijand', 'naomi-weijand'),
(196, 'Tom Clark', 'tom-clark'),
(197, 'Ireanne Abenoja', 'ireanne-abenoja'),
(198, 'Davide Albonetti', 'davide-albonetti'),
(199, 'Charlotte Anderson', 'charlotte-anderson'),
(200, 'Michael Anderson', 'michael-anderson'),
(201, 'Rico Bakker', 'rico-bakker'),
(202, 'James Bamford', 'james-bamford'),
(203, 'William John Banks', 'william-john-banks'),
(204, 'Callum Bell', 'callum-bell'),
(205, 'Adam Blaug', 'adam-blaug'),
(206, 'Mason Boyce', 'mason-boyce'),
(207, 'Taylor Bradshaw', 'taylor-bradshaw'),
(208, 'Alex Brown', 'alex-brown'),
(209, 'Miekaile Browne', 'miekaile-browne'),
(210, 'Lewis Calcutt', 'lewis-calcutt'),
(211, 'Nikkita Chadha', 'nikkita-chadha'),
(212, 'Oliver Chapman', 'oliver-chapman'),
(213, 'Megan Charles', 'megan-charles'),
(214, 'Callum Clack', 'callum-clack'),
(215, 'Danny Coburn', 'danny-coburn'),
(216, 'Kat Collings', 'kat-collings'),
(217, 'Adam Crossley', 'adam-crossley'),
(218, 'Sia Dauda', 'sia-dauda'),
(219, 'Gustave Die', 'gustave-die'),
(220, 'Grace Durkin', 'grace-durkin'),
(221, 'Joelle Dyson', 'joelle-dyson'),
(222, 'Lewis Easter', 'lewis-easter'),
(223, 'Onyemachi Ejimofor', 'onyemachi-ejimofor'),
(224, 'Cameron Everitt', 'cameron-everitt'),
(225, 'Luke Field-Wright', 'luke-field-wright'),
(226, 'Sasha Flesch', 'sasha-flesch'),
(227, 'Adam Fogarty', 'adam-fogarty'),
(228, 'Mikey French', 'mikey-french'),
(229, 'Anna-Kay Gayle', 'anna-kay-gayle'),
(230, 'Charlie Goddard', 'charlie-goddard'),
(231, 'Marlie Goddard', 'marlie-goddard'),
(232, 'Ellis Harman', 'ellis-harman'),
(233, 'Yasmin Harrison', 'yasmin-harrison'),
(234, 'Josh Hawkins', 'josh-hawkins'),
(235, 'James Healy', 'james-healy'),
(236, 'Tim Hodges', 'tim-hodges'),
(237, 'Mira Jebari', 'mira-jebari'),
(238, 'Beccy Jones', 'beccy-jones'),
(239, 'Thomas Kalek', 'thomas-kalek'),
(240, 'Lily Laight', 'lily-laight'),
(241, 'Maiya Leeke', 'maiya-leeke'),
(242, 'Cristian Liberti', 'cristian-liberti'),
(243, 'Prodromos Marneros', 'prodromos-marneros'),
(244, 'Nahum McLean', 'nahum-mclean'),
(245, 'Jordan Melchor', 'jordan-melchor'),
(246, 'Ramzan Miah', 'ramzan-miah'),
(247, 'Andy Monaghan', 'andy-monaghan'),
(248, 'Florivaldo Mossi', 'florivaldo-mossi'),
(249, 'Hannah Nazareth', 'hannah-nazareth'),
(250, 'Grant Neal', 'grant-neal'),
(251, 'Freja Nicole', 'freja-nicole'),
(252, 'Shaun Niles', 'shaun-niles'),
(253, 'Ella Nonini', 'ella-nonini'),
(254, 'Jack William Parry', 'jack-william-parry'),
(255, 'Josie Pocock', 'josie-pocock'),
(256, 'Barnaby Quarendon', 'barnaby-quarendon'),
(257, 'Redmand Rance', 'redmand-rance'),
(258, 'Zara Richards', 'zara-richards'),
(259, 'Liam Riddick', 'liam-riddick'),
(260, 'Alana Rixon', 'alana-rixon'),
(261, 'Adam Paul Robertson', 'adam-paul-robertson'),
(262, 'Kingdom Sibanda', 'kingdom-sibanda'),
(263, 'Sebastian Skov', 'sebastian-skov'),
(264, 'Aaron J. Smith', 'aaron-j.-smith'),
(265, 'Joshua Smith', 'joshua-smith'),
(266, 'Lucia-Rose Sokolowski', 'lucia-rose-sokolowski'),
(267, 'Janine Somcio', 'janine-somcio'),
(268, 'Callum Sterling', 'callum-sterling'),
(269, 'Todd Talbot', 'todd-talbot'),
(270, 'Charles Tatman', 'charles-tatman'),
(271, 'Grant Thresh', 'grant-thresh'),
(272, 'Connor Tidman', 'connor-tidman'),
(273, 'Wahchi Vong', 'wahchi-vong'),
(274, 'Jerry Wan', 'jerry-wan'),
(275, 'Sasha Wareham', 'sasha-wareham'),
(276, 'Stan West', 'stan-west'),
(277, 'Oliver Wheeler', 'oliver-wheeler'),
(278, 'Josh Wild', 'josh-wild'),
(279, 'Joe Wolstenholme', 'joe-wolstenholme'),
(280, 'Richard Womersley', 'richard-womersley'),
(281, 'Ashley Young', 'ashley-young'),
(282, 'Alex Sturman', 'alex-sturman'),
(283, ' Ryan Gosling', '-ryan-gosling'),
(284, ' America Ferrera', '-america-ferrera'),
(285, ' Kate McKinnon', '-kate-mckinnon'),
(286, ' Ariana Greenblatt', '-ariana-greenblatt'),
(287, ' Michael Cera', '-michael-cera'),
(288, ' Issa Rae', '-issa-rae'),
(289, ' Will Ferrell', '-will-ferrell'),
(290, ' Rhea Perlman', '-rhea-perlman'),
(291, ' Alexandra Shipp', '-alexandra-shipp'),
(292, ' Emma Mackey', '-emma-mackey'),
(293, ' Hari Nef', '-hari-nef'),
(294, ' Sharon Rooney', '-sharon-rooney'),
(295, ' Ana Kayne', '-ana-kayne'),
(296, ' Ritu Arya', '-ritu-arya'),
(297, ' Dua Lipa', '-dua-lipa'),
(298, ' Nicola Coughlan', '-nicola-coughlan'),
(299, ' Emerald Fennell', '-emerald-fennell'),
(300, ' Simu Liu', '-simu-liu'),
(301, ' Kingsley Ben-Adir', '-kingsley-ben-adir'),
(302, ' Ncuti Gatwa', '-ncuti-gatwa'),
(303, ' Scott Evans', '-scott-evans'),
(304, ' John Cena', '-john-cena'),
(305, ' Helen Mirren', '-helen-mirren'),
(306, ' Connor Swindells', '-connor-swindells'),
(307, ' Jamie Demetriou', '-jamie-demetriou'),
(308, ' Andrew Leung', '-andrew-leung'),
(309, ' Will Merrick', '-will-merrick'),
(310, ' Zheng Xi Yong', '-zheng-xi-yong'),
(311, ' Asim Chaudhry', '-asim-chaudhry'),
(312, ' Ray Fearon', '-ray-fearon'),
(313, ' Erica Ford', '-erica-ford'),
(314, ' Hannah Khalique-Brown', '-hannah-khalique-brown'),
(315, ' Mette Towley', '-mette-towley'),
(316, ' Marisa Abela', '-marisa-abela'),
(317, ' Lucy Boynton', '-lucy-boynton'),
(318, ' Rob Brydon', '-rob-brydon'),
(319, ' Tom Stourton', '-tom-stourton'),
(320, ' Chris Taylor', '-chris-taylor'),
(321, ' David Mumeni', '-david-mumeni'),
(322, ' Olivia Brody', '-olivia-brody'),
(323, ' Isla Ashworth', '-isla-ashworth'),
(324, ' Eire Farrell', '-eire-farrell'),
(325, ' Daisy Duczmal', '-daisy-duczmal'),
(326, ' Genvieve Toussaint', '-genvieve-toussaint'),
(327, ' Isabella Nightingale', '-isabella-nightingale'),
(328, ' Manuela Mora', '-manuela-mora'),
(329, ' Aida Sexton', '-aida-sexton'),
(330, ' Millie-Rose Crossley', '-millie-rose-crossley'),
(331, ' Anvita Nehru', '-anvita-nehru'),
(332, ' Kayla-Mai Alvares', '-kayla-mai-alvares'),
(333, ' Luke Mullen', '-luke-mullen'),
(334, ' Patrick Luwis', '-patrick-luwis'),
(335, ' Mac Brandt', '-mac-brandt'),
(336, ' Paul Jurewicz', '-paul-jurewicz'),
(337, ' Oraldo Austin', '-oraldo-austin'),
(338, ' Benjamin Arthur', '-benjamin-arthur'),
(339, ' Carlos Jacott', '-carlos-jacott'),
(340, ' Adam Ray', '-adam-ray'),
(341, ' George Basil', '-george-basil'),
(342, ' Ptolemy Slocum', '-ptolemy-slocum'),
(343, ' Deb Hiett', '-deb-hiett'),
(344, ' James Leon', '-james-leon'),
(345, ' Oliver Vaquer', '-oliver-vaquer'),
(346, ' Tony Noto', '-tony-noto'),
(347, ' Christopher T. Wood', '-christopher-t.-wood'),
(348, ' Ann Roth', '-ann-roth'),
(349, ' Annie Mumolo', '-annie-mumolo'),
(350, ' Elise Gallup', '-elise-gallup'),
(351, ' McKenna Roberts', '-mckenna-roberts'),
(352, ' Brylee Hsu', '-brylee-hsu'),
(353, ' Sasha Milstein', '-sasha-milstein'),
(354, ' Lauren Holt', '-lauren-holt'),
(355, ' Sterling Jones', '-sterling-jones'),
(356, ' Ryan Piers Williams', '-ryan-piers-williams'),
(357, ' Jamaal Lewis', '-jamaal-lewis'),
(358, ' Kathryn Akin', '-kathryn-akin'),
(359, ' Grace Jabbari', '-grace-jabbari'),
(360, ' Ira Mandela Siobhan', '-ira-mandela-siobhan'),
(361, ' Lisa Spencer', '-lisa-spencer'),
(362, ' Naomi Weijand', '-naomi-weijand'),
(363, ' Tom Clark', '-tom-clark'),
(364, ' Ireanne Abenoja', '-ireanne-abenoja'),
(365, ' Davide Albonetti', '-davide-albonetti'),
(366, ' Charlotte Anderson', '-charlotte-anderson'),
(367, ' Michael Anderson', '-michael-anderson'),
(368, ' Rico Bakker', '-rico-bakker'),
(369, ' James Bamford', '-james-bamford'),
(370, ' William John Banks', '-william-john-banks'),
(371, ' Callum Bell', '-callum-bell'),
(372, ' Adam Blaug', '-adam-blaug'),
(373, ' Mason Boyce', '-mason-boyce'),
(374, ' Taylor Bradshaw', '-taylor-bradshaw'),
(375, ' Alex Brown', '-alex-brown'),
(376, ' Miekaile Browne', '-miekaile-browne'),
(377, ' Lewis Calcutt', '-lewis-calcutt'),
(378, ' Nikkita Chadha', '-nikkita-chadha'),
(379, ' Oliver Chapman', '-oliver-chapman'),
(380, ' Megan Charles', '-megan-charles'),
(381, ' Callum Clack', '-callum-clack'),
(382, ' Danny Coburn', '-danny-coburn'),
(383, ' Kat Collings', '-kat-collings'),
(384, ' Adam Crossley', '-adam-crossley'),
(385, ' Sia Dauda', '-sia-dauda'),
(386, ' Gustave Die', '-gustave-die'),
(387, ' Grace Durkin', '-grace-durkin'),
(388, ' Joelle Dyson', '-joelle-dyson'),
(389, ' Lewis Easter', '-lewis-easter'),
(390, ' Onyemachi Ejimofor', '-onyemachi-ejimofor'),
(391, ' Cameron Everitt', '-cameron-everitt'),
(392, ' Luke Field-Wright', '-luke-field-wright'),
(393, ' Sasha Flesch', '-sasha-flesch'),
(394, ' Adam Fogarty', '-adam-fogarty'),
(395, ' Mikey French', '-mikey-french'),
(396, ' Anna-Kay Gayle', '-anna-kay-gayle'),
(397, ' Charlie Goddard', '-charlie-goddard'),
(398, ' Marlie Goddard', '-marlie-goddard'),
(399, ' Ellis Harman', '-ellis-harman'),
(400, ' Yasmin Harrison', '-yasmin-harrison'),
(401, ' Josh Hawkins', '-josh-hawkins'),
(402, ' James Healy', '-james-healy'),
(403, ' Tim Hodges', '-tim-hodges'),
(404, ' Mira Jebari', '-mira-jebari'),
(405, ' Beccy Jones', '-beccy-jones'),
(406, ' Thomas Kalek', '-thomas-kalek'),
(407, ' Lily Laight', '-lily-laight'),
(408, ' Maiya Leeke', '-maiya-leeke'),
(409, ' Cristian Liberti', '-cristian-liberti'),
(410, ' Prodromos Marneros', '-prodromos-marneros'),
(411, ' Nahum McLean', '-nahum-mclean'),
(412, ' Jordan Melchor', '-jordan-melchor'),
(413, ' Ramzan Miah', '-ramzan-miah'),
(414, ' Andy Monaghan', '-andy-monaghan'),
(415, ' Florivaldo Mossi', '-florivaldo-mossi'),
(416, ' Hannah Nazareth', '-hannah-nazareth'),
(417, ' Grant Neal', '-grant-neal'),
(418, ' Freja Nicole', '-freja-nicole'),
(419, ' Shaun Niles', '-shaun-niles'),
(420, ' Ella Nonini', '-ella-nonini'),
(421, ' Jack William Parry', '-jack-william-parry'),
(422, ' Josie Pocock', '-josie-pocock'),
(423, ' Barnaby Quarendon', '-barnaby-quarendon'),
(424, ' Redmand Rance', '-redmand-rance'),
(425, ' Zara Richards', '-zara-richards'),
(426, ' Liam Riddick', '-liam-riddick'),
(427, ' Alana Rixon', '-alana-rixon'),
(428, ' Adam Paul Robertson', '-adam-paul-robertson'),
(429, ' Kingdom Sibanda', '-kingdom-sibanda'),
(430, ' Sebastian Skov', '-sebastian-skov'),
(431, ' Aaron J. Smith', '-aaron-j.-smith'),
(432, ' Joshua Smith', '-joshua-smith'),
(433, ' Lucia-Rose Sokolowski', '-lucia-rose-sokolowski'),
(434, ' Janine Somcio', '-janine-somcio'),
(435, ' Callum Sterling', '-callum-sterling'),
(436, ' Todd Talbot', '-todd-talbot'),
(437, ' Charles Tatman', '-charles-tatman'),
(438, ' Grant Thresh', '-grant-thresh'),
(439, ' Connor Tidman', '-connor-tidman'),
(440, ' Wahchi Vong', '-wahchi-vong'),
(441, ' Jerry Wan', '-jerry-wan'),
(442, ' Sasha Wareham', '-sasha-wareham'),
(443, ' Stan West', '-stan-west'),
(444, ' Oliver Wheeler', '-oliver-wheeler'),
(445, ' Josh Wild', '-josh-wild'),
(446, ' Joe Wolstenholme', '-joe-wolstenholme'),
(447, ' Richard Womersley', '-richard-womersley'),
(448, ' Ashley Young', '-ashley-young'),
(449, ' Alex Sturman', '-alex-sturman'),
(450, 'Halle Bailey', 'halle-bailey'),
(451, ' Jonah Hauer-King', '-jonah-hauer-king'),
(452, ' Daveed Diggs', '-daveed-diggs'),
(453, ' Awkwafina', '-awkwafina'),
(454, ' Jacob Tremblay', '-jacob-tremblay'),
(455, ' Noma Dumezweni', '-noma-dumezweni'),
(456, ' Javier Bardem', '-javier-bardem'),
(457, ' Melissa McCarthy', '-melissa-mccarthy'),
(458, ' Art Malik', '-art-malik'),
(459, ' Jessica Alexander', '-jessica-alexander'),
(460, ' Emily Coates', '-emily-coates'),
(461, ' Jude Akuwudike', '-jude-akuwudike'),
(462, ' Russell Balogh', '-russell-balogh'),
(463, ' Adrian Christopher', '-adrian-christopher'),
(464, ' Simone Ashley', '-simone-ashley'),
(465, ' Martina Laird', '-martina-laird'),
(466, ' John Dagleish', '-john-dagleish'),
(467, ' Sienna King', '-sienna-king'),
(468, ' Karolina Conchet', '-karolina-conchet'),
(469, ' Craig Stein', '-craig-stein'),
(470, ' Lorena Andrea', '-lorena-andrea'),
(471, ' Kajsa Mohammar', '-kajsa-mohammar'),
(472, ' Nathalie Sorrell', '-nathalie-sorrell'),
(473, ' Jodi Benson', '-jodi-benson'),
(474, ' Christopher Fairbank', '-christopher-fairbank'),
(475, ' Matthew Carver', '-matthew-carver'),
(476, ' Julz West', '-julz-west'),
(477, ' Shay Barclay', '-shay-barclay'),
(478, ' Arina Li', '-arina-li'),
(479, ' Leon Cooke', '-leon-cooke'),
(480, ' Tarik Frimpong', '-tarik-frimpong'),
(481, ' Chris George', '-chris-george'),
(482, ' Erica Stubbs', '-erica-stubbs'),
(483, ' Kate Thompson', '-kate-thompson'),
(484, ' Jonathan Bishop', '-jonathan-bishop'),
(485, ' Aaron Bryan', '-aaron-bryan'),
(486, ' Sophie Carmen-Jones', '-sophie-carmen-jones'),
(487, ' Jon-Scott Clark', '-jon-scott-clark'),
(488, ' Cameron Valentina', '-cameron-valentina'),
(489, ' Austyn Farrell', '-austyn-farrell'),
(490, ' Cecil Jee', '-cecil-jee'),
(491, ' Ben Hukin', '-ben-hukin'),
(492, ' Andrew Lyle-Pinnock', '-andrew-lyle-pinnock'),
(493, ' Chanel Mian', '-chanel-mian'),
(494, ' Ebony Molina', '-ebony-molina'),
(495, ' Ian Oswald', '-ian-oswald'),
(496, ' Oliver Ravelin', '-oliver-ravelin'),
(497, ' Charles Ruhrmund', '-charles-ruhrmund'),
(498, ' Nicole Valverde', '-nicole-valverde'),
(499, ' Sasha Watson Lobo', '-sasha-watson-lobo'),
(500, ' Johnny White', '-johnny-white'),
(501, ' Charlotte Wilmott', '-charlotte-wilmott'),
(502, ' Bobby Windebank', '-bobby-windebank'),
(503, 'Anthony Ramos', 'anthony-ramos'),
(504, ' Dominique Fishback', '-dominique-fishback'),
(505, ' Peter Cullen', '-peter-cullen'),
(506, ' Ron Perlman', '-ron-perlman'),
(507, ' Peter Dinklage', '-peter-dinklage'),
(508, ' Michelle Yeoh', '-michelle-yeoh'),
(509, ' Pete Davidson', '-pete-davidson'),
(510, ' Liza Koshy', '-liza-koshy'),
(511, ' Cristo Fernández', '-cristo-fern??ndez'),
(512, ' Luna Lauren Velez', '-luna-lauren-velez'),
(513, ' Dean Scott Vazquez', '-dean-scott-vazquez'),
(514, ' Tobe Nwigwe', '-tobe-nwigwe'),
(515, ' Sarah Stiles', '-sarah-stiles'),
(516, ' Leni Parker', '-leni-parker'),
(517, ' Frank Marrs', '-frank-marrs'),
(518, ' Aidan Devine', '-aidan-devine'),
(519, ' Kerwin Jackson', '-kerwin-jackson'),
(520, ' Mike Chute', '-mike-chute'),
(521, ' Tyler Hall', '-tyler-hall'),
(522, ' Sean Tucker', '-sean-tucker'),
(523, ' Jay Farrar', '-jay-farrar'),
(524, ' Lucas Huarancca', '-lucas-huarancca'),
(525, ' Amiel Cayo', '-amiel-cayo'),
(526, ' Santusa Cutipa', '-santusa-cutipa'),
(527, ' Yesenia Inquillay', '-yesenia-inquillay'),
(528, ' Josue Sallo', '-josue-sallo'),
(529, ' Mellissa Alvarez', '-mellissa-alvarez'),
(530, ' Gloria Cusi', '-gloria-cusi'),
(531, ' Michael Kelly', '-michael-kelly'),
(532, ' Jason D. Avalos', '-jason-d.-avalos'),
(533, ' Lesley Stahl', '-lesley-stahl'),
(534, ' John DiMaggio', '-john-dimaggio'),
(535, ' David Sobolov', '-david-sobolov'),
(536, ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez'),
(537, ' Colman Domingo', '-colman-domingo'),
(538, ' Tongayi Chirisa', '-tongayi-chirisa'),
(539, ' Luke Jones', '-luke-jones'),
(540, ' Cristo Fernández', '-cristo-fern??ndez'),
(541, ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez'),
(542, 'Dominique Fishback', 'dominique-fishback'),
(543, 'Peter Cullen', 'peter-cullen'),
(544, 'Ron Perlman', 'ron-perlman'),
(545, 'Peter Dinklage', 'peter-dinklage'),
(546, 'Michelle Yeoh', 'michelle-yeoh'),
(547, 'Pete Davidson', 'pete-davidson'),
(548, 'Liza Koshy', 'liza-koshy'),
(549, 'Cristo Fernández', 'cristo-fern??ndez'),
(550, 'Luna Lauren Velez', 'luna-lauren-velez'),
(551, 'Dean Scott Vazquez', 'dean-scott-vazquez'),
(552, 'Tobe Nwigwe', 'tobe-nwigwe'),
(553, 'Sarah Stiles', 'sarah-stiles'),
(554, 'Leni Parker', 'leni-parker'),
(555, 'Frank Marrs', 'frank-marrs'),
(556, 'Aidan Devine', 'aidan-devine'),
(557, 'Kerwin Jackson', 'kerwin-jackson'),
(558, 'Mike Chute', 'mike-chute'),
(559, 'Tyler Hall', 'tyler-hall'),
(560, 'Sean Tucker', 'sean-tucker'),
(561, 'Jay Farrar', 'jay-farrar'),
(562, 'Lucas Huarancca', 'lucas-huarancca'),
(563, 'Amiel Cayo', 'amiel-cayo'),
(564, 'Santusa Cutipa', 'santusa-cutipa'),
(565, 'Yesenia Inquillay', 'yesenia-inquillay'),
(566, 'Josue Sallo', 'josue-sallo'),
(567, 'Mellissa Alvarez', 'mellissa-alvarez'),
(568, 'Gloria Cusi', 'gloria-cusi'),
(569, 'Michael Kelly', 'michael-kelly'),
(570, 'Jason D. Avalos', 'jason-d.-avalos'),
(571, 'Lesley Stahl', 'lesley-stahl'),
(572, 'John DiMaggio', 'john-dimaggio'),
(573, 'David Sobolov', 'david-sobolov'),
(574, 'Michaela Jaé Rodriguez', 'michaela-ja??-rodriguez'),
(575, 'Colman Domingo', 'colman-domingo'),
(576, 'Tongayi Chirisa', 'tongayi-chirisa'),
(577, 'Luke Jones', 'luke-jones'),
(578, 'Cristo Fernández', 'cristo-fern??ndez'),
(579, 'Michaela Jaé Rodriguez', 'michaela-ja??-rodriguez'),
(580, ' Cristo Fernández', '-cristo-fern??ndez'),
(581, ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez'),
(582, ' Cristo Fernández', '-cristo-fern??ndez'),
(583, ' Sumac T\'Ika', '-sumac-t\'ika'),
(584, ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez'),
(585, ' Cristo Fernández', '-cristo-fern??ndez'),
(586, ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez'),
(587, 'Lana Condor', 'lana-condor'),
(588, ' Toni Collette', '-toni-collette'),
(589, ' Annie Murphy', '-annie-murphy'),
(590, ' Sam Richardson', '-sam-richardson'),
(591, ' Will Forte', '-will-forte'),
(592, ' Jaboukie Young-White', '-jaboukie-young-white'),
(593, ' Blue Chapman', '-blue-chapman'),
(594, ' Ramona Young', '-ramona-young'),
(595, ' Eduardo Franco', '-eduardo-franco'),
(596, ' Jane Fonda', '-jane-fonda'),
(597, ' Nicole Byer', '-nicole-byer'),
(598, ' Echo Kellum', '-echo-kellum'),
(599, ' Brianna Paige Arsement', '-brianna-paige-arsement'),
(600, ' Juju Green', '-juju-green'),
(601, ' Preston Blaine Arsement', '-preston-blaine-arsement'),
(602, ' Jordan Matter', '-jordan-matter'),
(603, ' Ricardo Hurtado', '-ricardo-hurtado'),
(604, ' Randy Thom', '-randy-thom'),
(605, ' Tiffany Wu', '-tiffany-wu'),
(606, ' Merk Nguyen', '-merk-nguyen'),
(607, ' Sydney Bell', '-sydney-bell'),
(608, ' Atticus Shaindlin', '-atticus-shaindlin'),
(609, ' Lynnanne Zager', '-lynnanne-zager'),
(610, ' Karen Foster', '-karen-foster'),
(611, ' Salish Matter', '-salish-matter'),
(612, ' Caleb Pierce', '-caleb-pierce'),
(613, ' Qalil Ismail', '-qalil-ismail'),
(614, ' Suzanne Buirgy', '-suzanne-buirgy'),
(615, ' Emma Chamberlain', '-emma-chamberlain'),
(616, 'Matthew Mercer', 'matthew-mercer'),
(617, ' Kevin Dorman', '-kevin-dorman'),
(618, ' Erin Cahill', '-erin-cahill'),
(619, ' Nicole Tompkins', '-nicole-tompkins'),
(620, ' Stephanie Panisello', '-stephanie-panisello'),
(621, ' Salli Saffioti', '-salli-saffioti'),
(622, ' Cristina Valenzuela', '-cristina-valenzuela'),
(623, ' Daman Mills', '-daman-mills'),
(624, ' Frank Todaro', '-frank-todaro'),
(625, ' Lucien Dodge', '-lucien-dodge'),
(626, ' Isaac Robinson-Smith', '-isaac-robinson-smith'),
(627, ' Alejandro Saab', '-alejandro-saab'),
(628, ' Bob Carter', '-bob-carter'),
(629, ' Bill Butts', '-bill-butts'),
(630, ' Ananda Dawn Jacobs', '-ananda-dawn-jacobs'),
(631, ' Dawn M. Bennett', '-dawn-m.-bennett'),
(632, ' Joe Hernandez', '-joe-hernandez'),
(633, ' John Bentley', '-john-bentley'),
(634, ' Kenta Nitta', '-kenta-nitta'),
(635, ' Keren Louis', '-keren-louis'),
(636, ' Kim Gasiciel', '-kim-gasiciel'),
(637, ' Masaaki Sasaki', '-masaaki-sasaki'),
(638, ' Momotaro Sakae', '-momotaro-sakae'),
(639, ' Runa Kitanoe', '-runa-kitanoe'),
(640, ' Ryan Colt Levy', '-ryan-colt-levy'),
(641, ' Ryuhei Higashiyama', '-ryuhei-higashiyama'),
(642, ' Takahiro Yoneoka', '-takahiro-yoneoka'),
(643, ' Tiana Camacho', '-tiana-camacho'),
(644, ' Zeke Alton', '-zeke-alton'),
(645, ' Luis E. Bermudez', '-luis-e.-bermudez'),
(646, 'Nataliia Denysenko', 'nataliia-denysenko'),
(647, ' Artem Pyvovarov', '-artem-pyvovarov'),
(648, ' Nazar Zadniprovskyi', '-nazar-zadniprovskyi'),
(649, ' Oleh Skripka', '-oleh-skripka'),
(650, ' Olena Kravets', '-olena-kravets'),
(651, ' Serhii Prytula', '-serhii-prytula'),
(652, ' Oleh Mykhailiuta', '-oleh-mykhailiuta'),
(653, ' Nataliia Sumska', '-nataliia-sumska'),
(654, ' Julia Sanina', '-julia-sanina'),
(655, ' Mykhailo Khoma', '-mykhailo-khoma'),
(656, ' Nina Matviienko', '-nina-matviienko'),
(657, ' Kateryna Osadcha', '-kateryna-osadcha'),
(658, ' Andrii Mostrenko', '-andrii-mostrenko'),
(659, ' Khrystyna Soloviy', '-khrystyna-soloviy'),
(660, ' Kateryna Kukhar', '-kateryna-kukhar'),
(661, ' DakhaBrakha', '-dakhabrakha'),
(662, '  Artem Pyvovarov', '--artem-pyvovarov'),
(663, '  Nazar Zadniprovskyi', '--nazar-zadniprovskyi'),
(664, '  Oleh Skripka', '--oleh-skripka'),
(665, '  Olena Kravets', '--olena-kravets'),
(666, '  Serhii Prytula', '--serhii-prytula'),
(667, '  Oleh Mykhailiuta', '--oleh-mykhailiuta'),
(668, '  Nataliia Sumska', '--nataliia-sumska'),
(669, '  Julia Sanina', '--julia-sanina'),
(670, '  Mykhailo Khoma', '--mykhailo-khoma'),
(671, '  Nina Matviienko', '--nina-matviienko'),
(672, '  Kateryna Osadcha', '--kateryna-osadcha'),
(673, '  Andrii Mostrenko', '--andrii-mostrenko'),
(674, '  Khrystyna Soloviy', '--khrystyna-soloviy'),
(675, '  Kateryna Kukhar', '--kateryna-kukhar'),
(676, '  DakhaBrakha', '--dakhabrakha'),
(677, 'Mackenyu', 'mackenyu'),
(678, ' Madison Iseman', '-madison-iseman'),
(679, ' Diego Tinoco', '-diego-tinoco'),
(680, ' Mark Dacascos', '-mark-dacascos'),
(681, ' Nick Stahl', '-nick-stahl'),
(682, ' Famke Janssen', '-famke-janssen'),
(683, ' Sean Bean', '-sean-bean'),
(684, ' Caitlin M Hutson', '-caitlin-m-hutson'),
(685, ' Katie Moy', '-katie-moy'),
(686, ' Kaylan Teague', '-kaylan-teague'),
(687, ' Ryusei Iwata', '-ryusei-iwata'),
(688, ' T.J. Storm', '-t.j.-storm'),
(689, ' David Torok', '-david-torok'),
(690, ' Todd Williams', '-todd-williams'),
(691, ' Zoltán Durkó', '-zolt??n-durk??'),
(692, 'Hitoshi Ozawa', 'hitoshi-ozawa'),
(693, ' Mitsu Dan', '-mitsu-dan'),
(694, ' Akane Sakanoue', '-akane-sakanoue'),
(695, ' Katsuya', '-katsuya'),
(696, ' Masanori Mimoto', '-masanori-mimoto'),
(697, ' Taro Suwa', '-taro-suwa'),
(698, ' Kentarō Shimazu', '-kentar??-shimazu'),
(699, ' Koji Kiryu', '-koji-kiryu'),
(700, ' Akira Hamada', '-akira-hamada'),
(701, ' Arisa Matsunaga', '-arisa-matsunaga'),
(702, ' Huh Soo-cheol', '-huh-soo-cheol'),
(703, ' Akihiko Kuwata', '-akihiko-kuwata'),
(704, ' Hideo Nakano', '-hideo-nakano'),
(705, ' Kenji Fukuda', '-kenji-fukuda'),
(706, ' Kazuyoshi Ozawa', '-kazuyoshi-ozawa'),
(707, ' Daisuke Nagakura', '-daisuke-nagakura'),
(708, ' Yoshiyuki Yamaguchi', '-yoshiyuki-yamaguchi'),
(709, ' Kazuki Namioka', '-kazuki-namioka'),
(710, ' Tak Sakaguchi', '-tak-sakaguchi'),
(711, ' TOMOKAZU', '-tomokazu'),
(712, ' Lily Franky', '-lily-franky'),
(713, ' Rino Katase', '-rino-katase'),
(714, 'Tom Cruise', 'tom-cruise'),
(715, ' Hayley Atwell', '-hayley-atwell'),
(716, ' Ving Rhames', '-ving-rhames'),
(717, ' Simon Pegg', '-simon-pegg'),
(718, ' Rebecca Ferguson', '-rebecca-ferguson'),
(719, ' Vanessa Kirby', '-vanessa-kirby'),
(720, ' Esai Morales', '-esai-morales'),
(721, ' Pom Klementieff', '-pom-klementieff'),
(722, ' Henry Czerny', '-henry-czerny'),
(723, ' Shea Whigham', '-shea-whigham'),
(724, ' Greg Tarzan Davis', '-greg-tarzan-davis'),
(725, ' Frederick Schmidt', '-frederick-schmidt'),
(726, ' Mariela Garriga', '-mariela-garriga'),
(727, ' Cary Elwes', '-cary-elwes'),
(728, ' Charles Parnell', '-charles-parnell'),
(729, ' Mark Gatiss', '-mark-gatiss'),
(730, ' Indira Varma', '-indira-varma'),
(731, ' Rob Delaney', '-rob-delaney'),
(732, ' Marcello Walton', '-marcello-walton'),
(733, ' Brian Law', '-brian-law'),
(734, ' Lincoln Conway', '-lincoln-conway'),
(735, ' Alex James-Phelps', '-alex-james-phelps'),
(736, ' Marcin Dorociński', '-marcin-doroci??ski'),
(737, ' Ivan Ivashkin', '-ivan-ivashkin'),
(738, ' Zahari Baharov', '-zahari-baharov'),
(739, ' Adrian Bouchet', '-adrian-bouchet'),
(740, ' Sam Barrett', '-sam-barrett'),
(741, ' Louis Vaughan', '-louis-vaughan'),
(742, ' Jean Kartal', '-jean-kartal'),
(743, ' Os Leanse', '-os-leanse'),
(744, ' Luke Smith', '-luke-smith'),
(745, ' Nikolaos Brahimllari', '-nikolaos-brahimllari'),
(746, ' Matt Malecki', '-matt-malecki'),
(747, ' Damian Rozanek', '-damian-rozanek'),
(748, ' Antonio Bustorff', '-antonio-bustorff'),
(749, ' Ioachim Ciobanu', '-ioachim-ciobanu'),
(750, ' Michael Kosterin', '-michael-kosterin'),
(751, ' Sergej Lopouchanski', '-sergej-lopouchanski'),
(752, ' Robert Luckay', '-robert-luckay'),
(753, ' Jadran Malkovich', '-jadran-malkovich'),
(754, ' Mikhail Safronov', '-mikhail-safronov'),
(755, ' Christopher Sciueref', '-christopher-sciueref'),
(756, ' Andrea Scarduzio', '-andrea-scarduzio'),
(757, ' Barnaby Kay', '-barnaby-kay'),
(758, ' Gloria Obianyo', '-gloria-obianyo'),
(759, ' Alex Brock', '-alex-brock'),
(760, ' Kaye Dinauto', '-kaye-dinauto'),
(761, ' Dana Blacklake', '-dana-blacklake'),
(762, ' Arevinth V Sarma', '-arevinth-v-sarma'),
(763, ' Doroteya Toleva', '-doroteya-toleva'),
(764, ' Lucia Tong', '-lucia-tong'),
(765, ' Hersha Verity', '-hersha-verity'),
(766, ' Yennis Cheung', '-yennis-cheung'),
(767, ' Laura Vortler', '-laura-vortler'),
(768, ' Faycal Attougui', '-faycal-attougui'),
(769, ' Gaetano Bruno', '-gaetano-bruno'),
(770, ' Marco Sincini', '-marco-sincini'),
(771, ' Evita Ciri', '-evita-ciri'),
(772, ' Melissa Anna Bartolini', '-melissa-anna-bartolini'),
(773, ' John Akanmu', '-john-akanmu'),
(774, ' Marco Lascari', '-marco-lascari'),
(775, ' Simon Rizzoni', '-simon-rizzoni'),
(776, ' Nicolas Wang', '-nicolas-wang'),
(777, ' Lee Bridgman', '-lee-bridgman'),
(778, ' Daniella Carraturo', '-daniella-carraturo'),
(779, ' Katie Collins', '-katie-collins'),
(780, ' Joanna Dyce', '-joanna-dyce'),
(781, ' Taylor Goodridge', '-taylor-goodridge'),
(782, ' Jessica Holland', '-jessica-holland'),
(783, ' Philip Hulford', '-philip-hulford'),
(784, ' Nicholas Tredrea', '-nicholas-tredrea'),
(785, ' Megan Westpfel', '-megan-westpfel'),
(786, ' Marc Wesley DeHaney', '-marc-wesley-dehaney'),
(787, ' Rocky Taylor', '-rocky-taylor'),
(788, '  Hayley Atwell', '--hayley-atwell'),
(789, '  Ving Rhames', '--ving-rhames'),
(790, '  Simon Pegg', '--simon-pegg'),
(791, '  Rebecca Ferguson', '--rebecca-ferguson'),
(792, '  Vanessa Kirby', '--vanessa-kirby'),
(793, '  Esai Morales', '--esai-morales'),
(794, '  Pom Klementieff', '--pom-klementieff'),
(795, '  Henry Czerny', '--henry-czerny'),
(796, '  Shea Whigham', '--shea-whigham'),
(797, '  Greg Tarzan Davis', '--greg-tarzan-davis'),
(798, '  Frederick Schmidt', '--frederick-schmidt'),
(799, '  Mariela Garriga', '--mariela-garriga'),
(800, '  Cary Elwes', '--cary-elwes'),
(801, '  Charles Parnell', '--charles-parnell'),
(802, '  Mark Gatiss', '--mark-gatiss'),
(803, '  Indira Varma', '--indira-varma'),
(804, '  Rob Delaney', '--rob-delaney'),
(805, '  Marcello Walton', '--marcello-walton'),
(806, '  Brian Law', '--brian-law'),
(807, '  Lincoln Conway', '--lincoln-conway'),
(808, '  Alex James-Phelps', '--alex-james-phelps'),
(809, '  Marcin Dorociński', '--marcin-doroci??ski'),
(810, '  Ivan Ivashkin', '--ivan-ivashkin'),
(811, '  Zahari Baharov', '--zahari-baharov'),
(812, '  Adrian Bouchet', '--adrian-bouchet'),
(813, '  Sam Barrett', '--sam-barrett'),
(814, '  Louis Vaughan', '--louis-vaughan'),
(815, '  Jean Kartal', '--jean-kartal'),
(816, '  Os Leanse', '--os-leanse'),
(817, '  Luke Smith', '--luke-smith'),
(818, '  Nikolaos Brahimllari', '--nikolaos-brahimllari'),
(819, '  Matt Malecki', '--matt-malecki'),
(820, '  Damian Rozanek', '--damian-rozanek'),
(821, '  Antonio Bustorff', '--antonio-bustorff'),
(822, '  Ioachim Ciobanu', '--ioachim-ciobanu'),
(823, '  Michael Kosterin', '--michael-kosterin'),
(824, '  Sergej Lopouchanski', '--sergej-lopouchanski'),
(825, '  Robert Luckay', '--robert-luckay'),
(826, '  Jadran Malkovich', '--jadran-malkovich'),
(827, '  Mikhail Safronov', '--mikhail-safronov'),
(828, '  Christopher Sciueref', '--christopher-sciueref'),
(829, '  Andrea Scarduzio', '--andrea-scarduzio'),
(830, '  Barnaby Kay', '--barnaby-kay'),
(831, '  Gloria Obianyo', '--gloria-obianyo'),
(832, '  Alex Brock', '--alex-brock'),
(833, '  Kaye Dinauto', '--kaye-dinauto'),
(834, '  Dana Blacklake', '--dana-blacklake'),
(835, '  Arevinth V Sarma', '--arevinth-v-sarma'),
(836, '  Doroteya Toleva', '--doroteya-toleva'),
(837, 'Keanu Reeves', 'keanu-reeves'),
(838, ' Donnie Yen', '-donnie-yen'),
(839, ' Bill Skarsgård', '-bill-skarsg??rd'),
(840, ' Ian McShane', '-ian-mcshane'),
(841, ' Laurence Fishburne', '-laurence-fishburne'),
(842, ' Lance Reddick', '-lance-reddick'),
(843, ' Clancy Brown', '-clancy-brown'),
(844, ' Hiroyuki Sanada', '-hiroyuki-sanada'),
(845, ' Rina Sawayama', '-rina-sawayama'),
(846, ' Scott Adkins', '-scott-adkins'),
(847, ' Aimée Kwan', '-aim??e-kwan'),
(848, ' Marko Zaror', '-marko-zaror'),
(849, ' Natalia Tena', '-natalia-tena'),
(850, ' Shamier Anderson', '-shamier-anderson'),
(851, ' George Georgiou', '-george-georgiou'),
(852, ' Yoshinori Tashiro', '-yoshinori-tashiro'),
(853, ' Hiroki Sumi', '-hiroki-sumi'),
(854, ' Daiki Suzuki', '-daiki-suzuki'),
(855, ' Julia Asuka Riedl', '-julia-asuka-riedl'),
(856, ' Milena Rendón', '-milena-rend??n'),
(857, ' Ivy Quainoo', '-ivy-quainoo'),
(858, ' Irina Trifanov', '-irina-trifanov'),
(859, ' Iryna Fedorova', '-iryna-fedorova'),
(860, ' Andrej Kaminsky', '-andrej-kaminsky'),
(861, ' Sven Marquardt', '-sven-marquardt'),
(862, ' Raicho Vasilev', '-raicho-vasilev'),
(863, ' Marie Pierra Kakoma', '-marie-pierra-kakoma'),
(864, ' Gina Aponte', '-gina-aponte'),
(865, ' Christoph Hofmann', '-christoph-hofmann'),
(866, ' Marcin Dorociński', '-marcin-doroci??ski'),
(867, 'Chris Pratt', 'chris-pratt'),
(868, ' Anya Taylor-Joy', '-anya-taylor-joy'),
(869, ' Charlie Day', '-charlie-day'),
(870, ' Jack Black', '-jack-black'),
(871, ' Keegan-Michael Key', '-keegan-michael-key'),
(872, ' Seth Rogen', '-seth-rogen'),
(873, ' Fred Armisen', '-fred-armisen'),
(874, ' Sebastian Maniscalco', '-sebastian-maniscalco'),
(875, ' Charles Martinet', '-charles-martinet'),
(876, ' Kevin Michael Richardson', '-kevin-michael-richardson'),
(877, ' Khary Payton', '-khary-payton'),
(878, ' Rino Romano', '-rino-romano'),
(879, ' Jessica DiCicco', '-jessica-dicicco'),
(880, ' Eric Bauza', '-eric-bauza'),
(881, ' Juliet Jelenic', '-juliet-jelenic'),
(882, ' Scott Menville', '-scott-menville'),
(883, ' Carlos Alazraqui', '-carlos-alazraqui'),
(884, ' Jason Broad', '-jason-broad'),
(885, ' Ashly Burch', '-ashly-burch'),
(886, ' Rachel Butera', '-rachel-butera'),
(887, ' Cathy Cavadini', '-cathy-cavadini'),
(888, ' Will Collyer', '-will-collyer'),
(889, ' Django Craig', '-django-craig'),
(890, ' Willow Geer', '-willow-geer'),
(891, ' Aaron Hendry', '-aaron-hendry'),
(892, ' Andy Hirsch', '-andy-hirsch'),
(893, ' Barbara Harris', '-barbara-harris'),
(894, ' Phil LaMarr', '-phil-lamarr'),
(895, ' Jeremy Maxwell', '-jeremy-maxwell'),
(896, ' Daniel Mora', '-daniel-mora'),
(897, ' Eric Osmond', '-eric-osmond'),
(898, ' Noreen Reardon', '-noreen-reardon'),
(899, ' Lee Shorten', '-lee-shorten'),
(900, ' Cree Summer', '-cree-summer'),
(901, ' Nisa Ward', '-nisa-ward'),
(902, ' Nora Wyman', '-nora-wyman'),
(903, 'Mateusz Janicki', 'mateusz-janicki'),
(904, ' Sandra Drzymalska', '-sandra-drzymalska'),
(905, ' Olgierd Blecharz', '-olgierd-blecharz'),
(906, ' Piotr Sega', '-piotr-sega'),
(907, ' Kalina Kowalczuk', '-kalina-kowalczuk'),
(908, ' Jacek Beler', '-jacek-beler'),
(909, ' Maria Dębska', '-maria-d??bska'),
(910, ' Anna Dymna', '-anna-dymna'),
(911, ' Przemysław Bluszcz', '-przemys??aw-bluszcz'),
(912, ' Ewa Błaszczyk', '-ewa-b??aszczyk'),
(913, ' Adam Ferency', '-adam-ferency'),
(914, ' Radosław Rożniecki', '-rados??aw-ro??niecki'),
(915, ' Eryk Pratsko', '-eryk-pratsko'),
(916, ' Juliusz Godzina', '-juliusz-godzina'),
(917, ' Krzysztof Ogonek', '-krzysztof-ogonek'),
(918, ' Szymon Kukla', '-szymon-kukla'),
(919, ' Mateusz Łasowski', '-mateusz-??asowski'),
(920, ' Kajetan Miros', '-kajetan-miros'),
(921, ' Magdalena Majtyka', '-magdalena-majtyka'),
(922, ' Krzysztof Satała', '-krzysztof-sata??a'),
(923, ' Andrzej Szubski', '-andrzej-szubski'),
(924, ' Joanna Król', '-joanna-kr??l'),
(925, ' Grzegorz Szypka', '-grzegorz-szypka'),
(926, ' Anna Rokita', '-anna-rokita'),
(927, ' Michał Kasprzak-Komarczewski', '-micha??-kasprzak-komarczewski'),
(928, ' Dariusz Maj', '-dariusz-maj'),
(929, ' Mateusz Grydlik', '-mateusz-grydlik'),
(930, ' Tomasz Augustynowicz', '-tomasz-augustynowicz'),
(931, ' Igor Górewicz', '-igor-g??rewicz'),
(932, ' Michał Petrow', '-micha??-petrow'),
(933, ' Piotr Stefańczuk', '-piotr-stefa??czuk'),
(934, ' India Maag', '-india-maag'),
(935, ' Aron Jończyk', '-aron-jo??czyk'),
(936, ' Łukasz Lewandowski', '-??ukasz-lewandowski'),
(937, ' Rafał Meusiak', '-rafa??-meusiak'),
(938, ' Mariusz Majuch', '-mariusz-majuch'),
(939, ' Mila Majewska', '-mila-majewska'),
(940, ' Danuta Burska', '-danuta-burska'),
(941, ' Jan Niemczyk', '-jan-niemczyk'),
(942, ' Olga Żebrowska', '-olga-??ebrowska'),
(943, ' Bożena Kulig-Fiallo', '-bo??ena-kulig-fiallo'),
(944, ' Jerzy Kornacki', '-jerzy-kornacki'),
(945, ' Agata Sierakiewicz', '-agata-sierakiewicz'),
(946, ' Rafał Maj', '-rafa??-maj'),
(947, ' Zbigniew Rowiński', '-zbigniew-rowi??ski'),
(948, ' Joanna Stępień', '-joanna-st??pie??'),
(949, ' Kamil Płocki', '-kamil-p??ocki'),
(950, ' Arturs Abramenko', '-arturs-abramenko'),
(951, 'Jensen Ackles', 'jensen-ackles'),
(952, ' Darren Criss', '-darren-criss'),
(953, ' Stana Katic', '-stana-katic'),
(954, ' Ike Amadi', '-ike-amadi'),
(955, ' Troy Baker', '-troy-baker'),
(956, ' Matt Bomer', '-matt-bomer'),
(957, ' Roger Cross', '-roger-cross'),
(958, ' Brett Dalton', '-brett-dalton'),
(959, ' Trevor Devall', '-trevor-devall'),
(960, ' Robin Atkin Downes', '-robin-atkin-downes'),
(961, ' Frank Grillo', '-frank-grillo'),
(962, ' Rachel Kimsey', '-rachel-kimsey'),
(963, ' David Lodge', '-david-lodge'),
(964, ' Damian O\'Hare', '-damian-o\'hare'),
(965, ' Teddy Sears', '-teddy-sears'),
(966, ' Kari Wahlgren', '-kari-wahlgren'),
(967, 'Jordan Rodrigues', 'jordan-rodrigues'),
(968, ' Jennifer Carpenter', '-jennifer-carpenter'),
(969, ' Joel McHale', '-joel-mchale'),
(970, ' Patrick Seitz', '-patrick-seitz'),
(971, ' Dave B. Mitchell', '-dave-b.-mitchell'),
(972, ' Bayardo De Murguia', '-bayardo-de-murguia'),
(973, ' Fred Tatasciore', '-fred-tatasciore'),
(974, ' Matthew Mercer', '-matthew-mercer'),
(975, ' Emily O\'Brien', '-emily-o\'brien'),
(976, ' Debra Wilson', '-debra-wilson'),
(977, ' Artt Butler', '-artt-butler'),
(978, ' Grey DeLisle', '-grey-delisle'),
(979, ' Matthew Yang King', '-matthew-yang-king'),
(980, ' Paul Nakauchi', '-paul-nakauchi'),
(981, ' Matthew Lillard', '-matthew-lillard'),
(982, ' Kyle Wyatt', '-kyle-wyatt'),
(983, 'Josephine Langford', 'josephine-langford'),
(984, ' Hero Fiennes Tiffin', '-hero-fiennes-tiffin'),
(985, ' Louise Lombard', '-louise-lombard'),
(986, ' Chance Perdomo', '-chance-perdomo'),
(987, ' Rob Estes', '-rob-estes'),
(988, ' Arielle Kebbel', '-arielle-kebbel'),
(989, ' Stephen Moyer', '-stephen-moyer'),
(990, ' Mira Sorvino', '-mira-sorvino'),
(991, ' Frances Turner', '-frances-turner'),
(992, ' Kiana Madeira', '-kiana-madeira'),
(993, ' Carter Jenkins', '-carter-jenkins'),
(994, ' Atanas Srebrev', '-atanas-srebrev'),
(995, ' Anton Kottas', '-anton-kottas'),
(996, ' Emmenuel Todorov', '-emmenuel-todorov'),
(997, ' Velizar Nikolaev Biney', '-velizar-nikolaev-biney'),
(998, ' Franklin Kendrick', '-franklin-kendrick'),
(999, ' Ana Ivanova', '-ana-ivanova'),
(1000, ' Tosin Thompson', '-tosin-thompson'),
(1001, ' Jordan Peters', '-jordan-peters'),
(1002, ' Jack Bandeira', '-jack-bandeira'),
(1003, ' Ryan Ol', '-ryan-ol'),
(1004, 'Ty Simpkins', 'ty-simpkins'),
(1005, ' Patrick Wilson', '-patrick-wilson'),
(1006, ' Rose Byrne', '-rose-byrne'),
(1007, ' Lin Shaye', '-lin-shaye'),
(1008, ' Sinclair Daniel', '-sinclair-daniel'),
(1009, ' Hiam Abbass', '-hiam-abbass'),
(1010, ' Andrew Astor', '-andrew-astor'),
(1011, ' Juliana Davies', '-juliana-davies'),
(1012, ' Steve Coulter', '-steve-coulter'),
(1013, ' Peter Dager', '-peter-dager'),
(1014, ' Joseph Bishara', '-joseph-bishara'),
(1015, ' Angus Sampson', '-angus-sampson'),
(1016, ' Leigh Whannell', '-leigh-whannell'),
(1017, ' Justin Sturgis', '-justin-sturgis'),
(1018, ' David Call', '-david-call'),
(1019, ' Stephen Gray', '-stephen-gray'),
(1020, ' Robin S. Walker', '-robin-s.-walker'),
(1021, ' Bridget Kim', '-bridget-kim'),
(1022, ' Logan Wilson', '-logan-wilson'),
(1023, ' Kasjan Wilson', '-kasjan-wilson'),
(1024, ' Mary Looram', '-mary-looram'),
(1025, ' Adrian Acosta', '-adrian-acosta'),
(1026, ' AJ Dyer', '-aj-dyer'),
(1027, ' Kalin Wilson', '-kalin-wilson'),
(1028, ' E. Roger Mitchell', '-e.-roger-mitchell'),
(1029, ' Dagmara Domińczyk', '-dagmara-domi??czyk'),
(1030, ' Tom Toland', '-tom-toland'),
(1031, ' Elaine Apruzzese', '-elaine-apruzzese'),
(1032, ' Suki Úna Rae', '-suki-??na-rae'),
(1033, ' Desi Ramos', '-desi-ramos'),
(1034, ' Victorya Danylko-Petrovskaya', '-victorya-danylko-petrovskaya'),
(1035, ' Tom Fitzpatrick', '-tom-fitzpatrick'),
(1036, ' Barbara Hershey', '-barbara-hershey'),
(1037, '  Patrick Wilson', '--patrick-wilson'),
(1038, '  Rose Byrne', '--rose-byrne'),
(1039, '  Lin Shaye', '--lin-shaye'),
(1040, '  Sinclair Daniel', '--sinclair-daniel'),
(1041, '  Hiam Abbass', '--hiam-abbass'),
(1042, '  Andrew Astor', '--andrew-astor'),
(1043, '  Juliana Davies', '--juliana-davies'),
(1044, '  Steve Coulter', '--steve-coulter'),
(1045, '  Peter Dager', '--peter-dager'),
(1046, '  Joseph Bishara', '--joseph-bishara'),
(1047, '  Angus Sampson', '--angus-sampson'),
(1048, '  Leigh Whannell', '--leigh-whannell'),
(1049, '  Justin Sturgis', '--justin-sturgis'),
(1050, '  David Call', '--david-call'),
(1051, '  Stephen Gray', '--stephen-gray'),
(1052, '  Robin S. Walker', '--robin-s.-walker'),
(1053, '  Bridget Kim', '--bridget-kim'),
(1054, '  Logan Wilson', '--logan-wilson'),
(1055, '  Kasjan Wilson', '--kasjan-wilson'),
(1056, '  Mary Looram', '--mary-looram'),
(1057, '  Adrian Acosta', '--adrian-acosta'),
(1058, '  AJ Dyer', '--aj-dyer'),
(1059, '  Kalin Wilson', '--kalin-wilson'),
(1060, '  E. Roger Mitchell', '--e.-roger-mitchell'),
(1061, '  Dagmara Domińczyk', '--dagmara-domińczyk'),
(1062, '  Tom Toland', '--tom-toland'),
(1063, '  Elaine Apruzzese', '--elaine-apruzzese'),
(1064, '  Suki Úna Rae', '--suki-Úna-rae'),
(1065, '  Desi Ramos', '--desi-ramos'),
(1066, '  Victorya Danylko-Petrovskaya', '--victorya-danylko-petrovskaya'),
(1067, '  Tom Fitzpatrick', '--tom-fitzpatrick'),
(1068, '  Barbara Hershey', '--barbara-hershey'),
(1069, ' Dagmara Domińczyk', '-dagmara-domi??czyk'),
(1070, ' Suki Úna Rae', '-suki-??na-rae'),
(1071, '  Dagmara Domińczyk', '--dagmara-domi??czyk'),
(1072, '  Suki Úna Rae', '--suki-??na-rae'),
(1073, '   Patrick Wilson', '---patrick-wilson'),
(1074, '   Rose Byrne', '---rose-byrne'),
(1075, '   Lin Shaye', '---lin-shaye'),
(1076, '   Sinclair Daniel', '---sinclair-daniel'),
(1077, '   Hiam Abbass', '---hiam-abbass'),
(1078, '   Andrew Astor', '---andrew-astor'),
(1079, '   Juliana Davies', '---juliana-davies'),
(1080, '   Steve Coulter', '---steve-coulter'),
(1081, '   Peter Dager', '---peter-dager'),
(1082, '   Joseph Bishara', '---joseph-bishara'),
(1083, '   Angus Sampson', '---angus-sampson'),
(1084, '   Leigh Whannell', '---leigh-whannell'),
(1085, '   Justin Sturgis', '---justin-sturgis'),
(1086, '   David Call', '---david-call'),
(1087, '   Stephen Gray', '---stephen-gray'),
(1088, '   Robin S. Walker', '---robin-s.-walker'),
(1089, '   Bridget Kim', '---bridget-kim'),
(1090, '   Logan Wilson', '---logan-wilson'),
(1091, '   Kasjan Wilson', '---kasjan-wilson'),
(1092, '   Mary Looram', '---mary-looram'),
(1093, '   Adrian Acosta', '---adrian-acosta'),
(1094, '   AJ Dyer', '---aj-dyer'),
(1095, '   Kalin Wilson', '---kalin-wilson'),
(1096, '   E. Roger Mitchell', '---e.-roger-mitchell'),
(1097, '   Dagmara Domińczyk', '---dagmara-domińczyk'),
(1098, '   Tom Toland', '---tom-toland'),
(1099, '   Elaine Apruzzese', '---elaine-apruzzese'),
(1100, '   Suki Úna Rae', '---suki-Úna-rae'),
(1101, '   Desi Ramos', '---desi-ramos'),
(1102, '   Victorya Danylko-Petrovskaya', '---victorya-danylko-petrovskaya'),
(1103, '   Tom Fitzpatrick', '---tom-fitzpatrick'),
(1104, '   Barbara Hershey', '---barbara-hershey'),
(1105, '    Patrick Wilson', '----patrick-wilson'),
(1106, '    Rose Byrne', '----rose-byrne'),
(1107, '    Lin Shaye', '----lin-shaye'),
(1108, '    Sinclair Daniel', '----sinclair-daniel'),
(1109, '    Hiam Abbass', '----hiam-abbass'),
(1110, '    Andrew Astor', '----andrew-astor'),
(1111, '    Juliana Davies', '----juliana-davies'),
(1112, '    Steve Coulter', '----steve-coulter'),
(1113, '    Peter Dager', '----peter-dager'),
(1114, '    Joseph Bishara', '----joseph-bishara'),
(1115, '    Angus Sampson', '----angus-sampson'),
(1116, '    Leigh Whannell', '----leigh-whannell'),
(1117, '    Justin Sturgis', '----justin-sturgis'),
(1118, '    David Call', '----david-call'),
(1119, '    Stephen Gray', '----stephen-gray'),
(1120, '    Robin S. Walker', '----robin-s.-walker'),
(1121, '    Bridget Kim', '----bridget-kim'),
(1122, '    Logan Wilson', '----logan-wilson'),
(1123, '    Kasjan Wilson', '----kasjan-wilson'),
(1124, '    Mary Looram', '----mary-looram'),
(1125, '    Adrian Acosta', '----adrian-acosta'),
(1126, '    AJ Dyer', '----aj-dyer'),
(1127, '    Kalin Wilson', '----kalin-wilson'),
(1128, '    E. Roger Mitchell', '----e.-roger-mitchell'),
(1129, '    Dagmara Domińczyk', '----dagmara-domi??czyk'),
(1130, '    Tom Toland', '----tom-toland'),
(1131, '    Elaine Apruzzese', '----elaine-apruzzese'),
(1132, '    Suki Úna Rae', '----suki-??na-rae'),
(1133, '    Desi Ramos', '----desi-ramos'),
(1134, '    Victorya Danylko-Petrovskaya', '----victorya-danylko-petrovskaya'),
(1135, '    Tom Fitzpatrick', '----tom-fitzpatrick'),
(1136, '    Barbara Hershey', '----barbara-hershey'),
(1137, '     Patrick Wilson', '-----patrick-wilson'),
(1138, '     Rose Byrne', '-----rose-byrne'),
(1139, '     Lin Shaye', '-----lin-shaye'),
(1140, '     Sinclair Daniel', '-----sinclair-daniel'),
(1141, '     Hiam Abbass', '-----hiam-abbass'),
(1142, '     Andrew Astor', '-----andrew-astor'),
(1143, '     Juliana Davies', '-----juliana-davies'),
(1144, '     Steve Coulter', '-----steve-coulter'),
(1145, '     Peter Dager', '-----peter-dager'),
(1146, '     Joseph Bishara', '-----joseph-bishara'),
(1147, '     Angus Sampson', '-----angus-sampson'),
(1148, '     Leigh Whannell', '-----leigh-whannell'),
(1149, '     Justin Sturgis', '-----justin-sturgis'),
(1150, '     David Call', '-----david-call'),
(1151, '     Stephen Gray', '-----stephen-gray'),
(1152, '     Robin S. Walker', '-----robin-s.-walker'),
(1153, '     Bridget Kim', '-----bridget-kim'),
(1154, '     Logan Wilson', '-----logan-wilson'),
(1155, '     Kasjan Wilson', '-----kasjan-wilson'),
(1156, '     Mary Looram', '-----mary-looram'),
(1157, '     Adrian Acosta', '-----adrian-acosta'),
(1158, '     AJ Dyer', '-----aj-dyer'),
(1159, '     Kalin Wilson', '-----kalin-wilson'),
(1160, '     E. Roger Mitchell', '-----e.-roger-mitchell'),
(1161, '     Dagmara Domińczyk', '-----dagmara-domi??czyk'),
(1162, '     Tom Toland', '-----tom-toland'),
(1163, '     Elaine Apruzzese', '-----elaine-apruzzese'),
(1164, '     Suki Úna Rae', '-----suki-??na-rae'),
(1165, '     Desi Ramos', '-----desi-ramos'),
(1166, '     Victorya Danylko-Petrovskaya', '-----victorya-danylko-petrovskaya'),
(1167, '     Tom Fitzpatrick', '-----tom-fitzpatrick'),
(1168, '     Barbara Hershey', '-----barbara-hershey'),
(1169, '      Patrick Wilson', '------patrick-wilson'),
(1170, '      Rose Byrne', '------rose-byrne'),
(1171, '      Lin Shaye', '------lin-shaye'),
(1172, '      Sinclair Daniel', '------sinclair-daniel'),
(1173, '      Hiam Abbass', '------hiam-abbass'),
(1174, '      Andrew Astor', '------andrew-astor'),
(1175, '      Juliana Davies', '------juliana-davies'),
(1176, '      Steve Coulter', '------steve-coulter'),
(1177, '      Peter Dager', '------peter-dager'),
(1178, '      Joseph Bishara', '------joseph-bishara'),
(1179, '      Angus Sampson', '------angus-sampson'),
(1180, '      Leigh Whannell', '------leigh-whannell'),
(1181, '      Justin Sturgis', '------justin-sturgis'),
(1182, '      David Call', '------david-call'),
(1183, '      Stephen Gray', '------stephen-gray'),
(1184, '      Robin S. Walker', '------robin-s.-walker'),
(1185, '      Bridget Kim', '------bridget-kim'),
(1186, '      Logan Wilson', '------logan-wilson'),
(1187, '      Kasjan Wilson', '------kasjan-wilson'),
(1188, '      Mary Looram', '------mary-looram'),
(1189, '      Adrian Acosta', '------adrian-acosta'),
(1190, '      AJ Dyer', '------aj-dyer'),
(1191, '      Kalin Wilson', '------kalin-wilson'),
(1192, '      E. Roger Mitchell', '------e.-roger-mitchell'),
(1193, '      Dagmara Domińczyk', '------dagmara-domińczyk'),
(1194, '      Tom Toland', '------tom-toland');
INSERT INTO `tb_pemain` (`id`, `nama_pemain`, `slug_pemain`) VALUES
(1195, '      Elaine Apruzzese', '------elaine-apruzzese'),
(1196, '      Suki Úna Rae', '------suki-Úna-rae'),
(1197, '      Desi Ramos', '------desi-ramos'),
(1198, '      Victorya Danylko-Petrovskaya', '------victorya-danylko-petrovskaya'),
(1199, '      Tom Fitzpatrick', '------tom-fitzpatrick'),
(1200, '      Barbara Hershey', '------barbara-hershey'),
(1201, 'Samuel L. Jackson', 'samuel-l.-jackson'),
(1202, ' Ben Mendelsohn', '-ben-mendelsohn'),
(1203, ' Killian Scott', '-killian-scott'),
(1204, ' Samuel Adewunmi', '-samuel-adewunmi'),
(1205, ' Dermot Mulroney', '-dermot-mulroney'),
(1206, ' Emilia Clarke', '-emilia-clarke'),
(1207, ' Olivia Colman', '-olivia-colman'),
(1208, ' Don Cheadle', '-don-cheadle'),
(1209, ' Charlayne Woodard', '-charlayne-woodard'),
(1210, ' Christopher McDonald', '-christopher-mcdonald'),
(1211, ' Katie Finneran', '-katie-finneran'),
(1212, '  Ben Mendelsohn', '--ben-mendelsohn'),
(1213, '  Kingsley Ben-Adir', '--kingsley-ben-adir'),
(1214, '  Killian Scott', '--killian-scott'),
(1215, '  Samuel Adewunmi', '--samuel-adewunmi'),
(1216, '  Dermot Mulroney', '--dermot-mulroney'),
(1217, '  Emilia Clarke', '--emilia-clarke'),
(1218, '  Olivia Colman', '--olivia-colman'),
(1219, '  Don Cheadle', '--don-cheadle'),
(1220, '  Charlayne Woodard', '--charlayne-woodard'),
(1221, '  Christopher McDonald', '--christopher-mcdonald'),
(1222, '  Katie Finneran', '--katie-finneran'),
(1223, '   Ben Mendelsohn', '---ben-mendelsohn'),
(1224, '   Kingsley Ben-Adir', '---kingsley-ben-adir'),
(1225, '   Killian Scott', '---killian-scott'),
(1226, '   Samuel Adewunmi', '---samuel-adewunmi'),
(1227, '   Dermot Mulroney', '---dermot-mulroney'),
(1228, '   Emilia Clarke', '---emilia-clarke'),
(1229, '   Olivia Colman', '---olivia-colman'),
(1230, '   Don Cheadle', '---don-cheadle'),
(1231, '   Charlayne Woodard', '---charlayne-woodard'),
(1232, '   Christopher McDonald', '---christopher-mcdonald'),
(1233, '   Katie Finneran', '---katie-finneran'),
(1234, '    Ben Mendelsohn', '----ben-mendelsohn'),
(1235, '    Kingsley Ben-Adir', '----kingsley-ben-adir'),
(1236, '    Killian Scott', '----killian-scott'),
(1237, '    Samuel Adewunmi', '----samuel-adewunmi'),
(1238, '    Dermot Mulroney', '----dermot-mulroney'),
(1239, '    Emilia Clarke', '----emilia-clarke'),
(1240, '    Olivia Colman', '----olivia-colman'),
(1241, '    Don Cheadle', '----don-cheadle'),
(1242, '    Charlayne Woodard', '----charlayne-woodard'),
(1243, '    Christopher McDonald', '----christopher-mcdonald'),
(1244, '    Katie Finneran', '----katie-finneran'),
(1245, '     Ben Mendelsohn', '-----ben-mendelsohn'),
(1246, '     Kingsley Ben-Adir', '-----kingsley-ben-adir'),
(1247, '     Killian Scott', '-----killian-scott'),
(1248, '     Samuel Adewunmi', '-----samuel-adewunmi'),
(1249, '     Dermot Mulroney', '-----dermot-mulroney'),
(1250, '     Emilia Clarke', '-----emilia-clarke'),
(1251, '     Olivia Colman', '-----olivia-colman'),
(1252, '     Don Cheadle', '-----don-cheadle'),
(1253, '     Charlayne Woodard', '-----charlayne-woodard'),
(1254, '     Christopher McDonald', '-----christopher-mcdonald'),
(1255, '     Katie Finneran', '-----katie-finneran'),
(1256, '      Ben Mendelsohn', '------ben-mendelsohn'),
(1257, '      Kingsley Ben-Adir', '------kingsley-ben-adir'),
(1258, '      Killian Scott', '------killian-scott'),
(1259, '      Samuel Adewunmi', '------samuel-adewunmi'),
(1260, '      Dermot Mulroney', '------dermot-mulroney'),
(1261, '      Emilia Clarke', '------emilia-clarke'),
(1262, '      Olivia Colman', '------olivia-colman'),
(1263, '      Don Cheadle', '------don-cheadle'),
(1264, '      Charlayne Woodard', '------charlayne-woodard'),
(1265, '      Christopher McDonald', '------christopher-mcdonald'),
(1266, '      Katie Finneran', '------katie-finneran'),
(1267, '       Ben Mendelsohn', '-------ben-mendelsohn'),
(1268, '       Kingsley Ben-Adir', '-------kingsley-ben-adir'),
(1269, '       Killian Scott', '-------killian-scott'),
(1270, '       Samuel Adewunmi', '-------samuel-adewunmi'),
(1271, '       Dermot Mulroney', '-------dermot-mulroney'),
(1272, '       Emilia Clarke', '-------emilia-clarke'),
(1273, '       Olivia Colman', '-------olivia-colman'),
(1274, '       Don Cheadle', '-------don-cheadle'),
(1275, '       Charlayne Woodard', '-------charlayne-woodard'),
(1276, '       Christopher McDonald', '-------christopher-mcdonald'),
(1277, '       Katie Finneran', '-------katie-finneran'),
(1278, 'Henry Cavill', 'henry-cavill'),
(1279, ' Anya Chalotra', '-anya-chalotra'),
(1280, ' Freya Allan', '-freya-allan'),
(1281, ' Mimî M. Khayisa', '-mim??-m.-khayisa'),
(1282, ' Anna Shaffer', '-anna-shaffer'),
(1283, ' Joey Batey', '-joey-batey'),
(1284, ' MyAnna Buring', '-myanna-buring'),
(1285, ' Mecia Simson', '-mecia-simson'),
(1286, ' Eamon Farren', '-eamon-farren'),
(1287, ' Mahesh Jadu', '-mahesh-jadu'),
(1288, ' Tom Canton', '-tom-canton'),
(1289, ' Graham McTavish', '-graham-mctavish'),
(1290, ' Cassie Clare', '-cassie-clare'),
(1291, ' Royce Pierreson', '-royce-pierreson'),
(1292, ' Hugh Skinner', '-hugh-skinner'),
(1293, ' Wilson Radjou-Pujalte', '-wilson-radjou-pujalte'),
(1294, ' Bart Edwards', '-bart-edwards'),
(1295, 'Sarah Hyland', 'sarah-hyland'),
(1296, ' Iain Stirling', '-iain-stirling'),
(1297, ' Anna Kurdys', '-anna-kurdys'),
(1298, ' Carmen Kocourek', '-carmen-kocourek'),
(1299, ' Carsten ', '-carsten-'),
(1300, 'Annouck Hautbois', 'annouck-hautbois'),
(1301, 'Benjamin Bollen', 'benjamin-bollen'),
(1302, 'Antoine Tomé', 'antoine-tom??'),
(1303, ' Benjamin Bollen', '-benjamin-bollen'),
(1304, ' Antoine Tomé', '-antoine-tom??'),
(1305, '  Benjamin Bollen', '--benjamin-bollen'),
(1306, '  Antoine Tomé', '--antoine-tom??'),
(1307, 'Junya Enoki', 'junya-enoki'),
(1308, ' Yuma Uchida', '-yuma-uchida'),
(1309, ' Asami Seto', '-asami-seto'),
(1310, ' Yuichi Nakamura', '-yuichi-nakamura'),
(1311, 'Gabriel Macht', 'gabriel-macht'),
(1312, ' Sarah Rafferty', '-sarah-rafferty'),
(1313, ' Amanda Schull', '-amanda-schull'),
(1314, ' Rick Hoffman', '-rick-hoffman'),
(1315, ' Dulé Hill', '-dul??-hill'),
(1316, ' Katherine Heigl', '-katherine-heigl'),
(1317, ' Dulé Hill', '-dul??-hill'),
(1318, ' Dulé Hill', '-dul??-hill'),
(1319, ' Dulé Hill', '-dul??-hill'),
(1320, 'Ellen Pompeo', 'ellen-pompeo'),
(1321, ' James Pickens Jr.', '-james-pickens-jr.'),
(1322, ' Chandra Wilson', '-chandra-wilson'),
(1323, ' Kevin McKidd', '-kevin-mckidd'),
(1324, ' Camilla Luddington', '-camilla-luddington'),
(1325, ' Kim Raver', '-kim-raver'),
(1326, ' Chris Carmack', '-chris-carmack'),
(1327, ' Jake Borelli', '-jake-borelli'),
(1328, ' Anthony Hill', '-anthony-hill'),
(1329, ' Caterina Scorsone', '-caterina-scorsone'),
(1330, ' Kelly McCreary', '-kelly-mccreary'),
(1331, ' Harry Shum Jr.', '-harry-shum-jr.'),
(1332, ' Adelaide Kane', '-adelaide-kane'),
(1333, ' Alexis Floyd', '-alexis-floyd'),
(1334, ' Niko Terho', '-niko-terho'),
(1335, ' Midori Francis', '-midori-francis'),
(1336, 'James Pickens Jr.', 'james-pickens-jr.'),
(1337, 'Chandra Wilson', 'chandra-wilson'),
(1338, 'Kevin McKidd', 'kevin-mckidd'),
(1339, 'Camilla Luddington', 'camilla-luddington'),
(1340, 'Kim Raver', 'kim-raver'),
(1341, 'Chris Carmack', 'chris-carmack'),
(1342, 'Jake Borelli', 'jake-borelli'),
(1343, 'Anthony Hill', 'anthony-hill'),
(1344, 'Caterina Scorsone', 'caterina-scorsone'),
(1345, 'Kelly McCreary', 'kelly-mccreary'),
(1346, 'Harry Shum Jr.', 'harry-shum-jr.'),
(1347, 'Adelaide Kane', 'adelaide-kane'),
(1348, 'Alexis Floyd', 'alexis-floyd'),
(1349, 'Niko Terho', 'niko-terho'),
(1350, 'Midori Francis', 'midori-francis'),
(1351, 'Freddie Highmore', 'freddie-highmore'),
(1352, ' Fiona Gubelmann', '-fiona-gubelmann'),
(1353, ' Will Yun Lee', '-will-yun-lee'),
(1354, ' Christina Chang', '-christina-chang'),
(1355, ' Paige Spara', '-paige-spara'),
(1356, ' Bria Samoné Henderson', '-bria-samon??-henderson'),
(1357, ' Noah Galvin', '-noah-galvin'),
(1358, ' Hill Harper', '-hill-harper'),
(1359, ' Richard Schiff', '-richard-schiff'),
(1360, 'Idris Elba', 'idris-elba'),
(1361, ' Neil Maskell', '-neil-maskell'),
(1362, ' Eve Myles', '-eve-myles'),
(1363, ' Christine Adams', '-christine-adams'),
(1364, ' Max Beesley', '-max-beesley'),
(1365, ' Archie Panjabi', '-archie-panjabi'),
(1366, ' Ben Miles', '-ben-miles'),
(1367, ' Hattie Morahan', '-hattie-morahan'),
(1368, ' Neil Stuke', '-neil-stuke'),
(1369, ' Kaisa Hammarlund', '-kaisa-hammarlund'),
(1370, ' Zora Bishop', '-zora-bishop'),
(1371, ' Jeremy Ang Jones', '-jeremy-ang-jones'),
(1372, ' Kate Phillips', '-kate-phillips'),
(1373, ' Jasper Britton', '-jasper-britton'),
(1374, ' Jack McMullen', '-jack-mcmullen'),
(1375, ' Aimee Kelly', '-aimee-kelly'),
(1376, ' Mohamed Elsandel', '-mohamed-elsandel'),
(1377, 'Neil Maskell', 'neil-maskell'),
(1378, 'Eve Myles', 'eve-myles'),
(1379, 'Christine Adams', 'christine-adams'),
(1380, 'Max Beesley', 'max-beesley'),
(1381, 'Archie Panjabi', 'archie-panjabi'),
(1382, 'Ben Miles', 'ben-miles'),
(1383, 'Hattie Morahan', 'hattie-morahan'),
(1384, 'Neil Stuke', 'neil-stuke'),
(1385, 'Kaisa Hammarlund', 'kaisa-hammarlund'),
(1386, 'Zora Bishop', 'zora-bishop'),
(1387, 'Jeremy Ang Jones', 'jeremy-ang-jones'),
(1388, 'Kate Phillips', 'kate-phillips'),
(1389, 'Jasper Britton', 'jasper-britton'),
(1390, 'Jack McMullen', 'jack-mcmullen'),
(1391, 'Aimee Kelly', 'aimee-kelly'),
(1392, 'Mohamed Elsandel', 'mohamed-elsandel'),
(1393, 'Lola Tung', 'lola-tung'),
(1394, ' Christopher Briney', '-christopher-briney'),
(1395, ' Gavin Casalegno', '-gavin-casalegno'),
(1396, ' Sean Kaufman', '-sean-kaufman'),
(1397, ' David Lacono', '-david-lacono'),
(1398, '  Christopher Briney', '--christopher-briney'),
(1399, '  Gavin Casalegno', '--gavin-casalegno'),
(1400, '  Sean Kaufman', '--sean-kaufman'),
(1401, '  David Lacono', '--david-lacono'),
(1402, '   Christopher Briney', '---christopher-briney'),
(1403, '   Gavin Casalegno', '---gavin-casalegno'),
(1404, '   Sean Kaufman', '---sean-kaufman'),
(1405, '   David Lacono', '---david-lacono'),
(1406, '    Christopher Briney', '----christopher-briney'),
(1407, '    Gavin Casalegno', '----gavin-casalegno'),
(1408, '    Sean Kaufman', '----sean-kaufman'),
(1409, '    David Lacono', '----david-lacono'),
(1410, '     Christopher Briney', '-----christopher-briney'),
(1411, '     Gavin Casalegno', '-----gavin-casalegno'),
(1412, '     Sean Kaufman', '-----sean-kaufman'),
(1413, '     David Lacono', '-----david-lacono'),
(1414, '      Christopher Briney', '------christopher-briney'),
(1415, '      Gavin Casalegno', '------gavin-casalegno'),
(1416, '      Sean Kaufman', '------sean-kaufman'),
(1417, '      David Lacono', '------david-lacono'),
(1418, 'Iain Stirling', 'iain-stirling'),
(1419, ' Maya Jama', '-maya-jama'),
(1420, ' André Furtado', '-andr??-furtado'),
(1421, ' Catherine Agbaje', '-catherine-agbaje'),
(1422, ' Ella Thomas', '-ella-thomas'),
(1423, ' George Fensom', '-george-fensom'),
(1424, ' Jess Harding', '-jess-harding'),
(1425, ' Mehdi Edno', '-mehdi-edno'),
(1426, ' Mitchel Taylor', '-mitchel-taylor'),
(1427, ' Molly Marsh', '-molly-marsh'),
(1428, ' Ruchee Gurung', '-ruchee-gurung'),
(1429, ' Tyrique Hyde', '-tyrique-hyde'),
(1430, ' Zachariah Noble', '-zachariah-noble'),
(1431, ' Whitney Adebayo', '-whitney-adebayo'),
(1432, ' Sammy Root', '-sammy-root'),
(1433, 'James Spader', 'james-spader'),
(1434, ' Diego Klattenhoff', '-diego-klattenhoff'),
(1435, ' Hisham Tawfiq', '-hisham-tawfiq'),
(1436, ' Anya Banerjee', '-anya-banerjee'),
(1437, ' Harry Lennix', '-harry-lennix'),
(1438, 'Caitríona Balfe', 'caitr??ona-balfe'),
(1439, ' Sam Heughan', '-sam-heughan'),
(1440, ' Richard Rankin', '-richard-rankin'),
(1441, ' Sophie Skelton', '-sophie-skelton'),
(1442, '<br />\r\n<b>Notice</b>:  Undefined variable: nama_pemain_string in <b>C:\\xampp\\htdocs\\tmf_production\\admin\\tv_show\\create_tmdb.php</b> on line <b>655</b><br />\r\n', '<br-/>\r\n<b>notice</b>:--undefined-variable:-nama_pemain_string-in-<b>c:\\xampp\\htdocs\\tmf_production\\admin\\tv_show\\create_tmdb.php</b>-on-line-<b>655</b><br-/>\r\n'),
(1443, 'Grant Gustin', 'grant-gustin'),
(1444, ' Candice Patton', '-candice-patton'),
(1445, ' Danielle Panabaker', '-danielle-panabaker'),
(1446, ' Danielle Nicolet', '-danielle-nicolet'),
(1447, ' Kayla Compton', '-kayla-compton'),
(1448, ' Brandon McKnight', '-brandon-mcknight'),
(1449, ' Jon Cor', '-jon-cor'),
(1450, 'Cillian Murphy', 'cillian-murphy'),
(1451, ' Paul Anderson', '-paul-anderson'),
(1452, ' Sophie Rundle', '-sophie-rundle'),
(1453, ' Natasha O\'Keeffe', '-natasha-o\'keeffe'),
(1454, 'Tom Ellis', 'tom-ellis'),
(1455, ' Lauren German', '-lauren-german'),
(1456, ' Kevin Alejandro', '-kevin-alejandro'),
(1457, ' D.B. Woodside', '-d.b.-woodside'),
(1458, ' Lesley-Ann Brandt', '-lesley-ann-brandt'),
(1459, ' Aimee Garcia', '-aimee-garcia'),
(1460, ' Rachael Harris', '-rachael-harris'),
(1461, ' Brianna Hildebrand', '-brianna-hildebrand'),
(1462, 'Mariska Hargitay', 'mariska-hargitay'),
(1463, ' Peter Scanavino', '-peter-scanavino'),
(1464, ' Ice-T', '-ice-t'),
(1465, ' Octavio Pisano', '-octavio-pisano'),
(1466, ' Billy West', '-billy-west'),
(1467, ' Katey Sagal', '-katey-sagal'),
(1468, ' Tress MacNeille', '-tress-macneille'),
(1469, ' Maurice LaMarche', '-maurice-lamarche'),
(1470, ' Lauren Tom', '-lauren-tom'),
(1471, ' David Herman', '-david-herman'),
(1472, 'Dan Castellaneta', 'dan-castellaneta'),
(1473, ' Julie Kavner', '-julie-kavner'),
(1474, ' Nancy Cartwright', '-nancy-cartwright'),
(1475, ' Yeardley Smith', '-yeardley-smith'),
(1476, ' Hank Azaria', '-hank-azaria'),
(1477, ' Harry Shearer', '-harry-shearer'),
(1478, 'Lee Jun-ho', 'lee-jun-ho'),
(1479, ' Yoona', '-yoona'),
(1480, ' Go Won-hee', '-go-won-hee'),
(1481, ' Kim Ga-eun', '-kim-ga-eun'),
(1482, ' Ahn Se-ha', '-ahn-se-ha'),
(1483, ' Kim Jae-won', '-kim-jae-won'),
(1484, ' Son Byung-ho', '-son-byung-ho'),
(1485, ' Kim Sun-young', '-kim-sun-young'),
(1486, ' Kim Young-ok', '-kim-young-ok'),
(1487, ' Kong Ye-ji', '-kong-ye-ji'),
(1488, ' Kim Jung-min', '-kim-jung-min'),
(1489, ' Choi Ji-hyeon', '-choi-ji-hyeon'),
(1490, ' Kim Chae-yoon', '-kim-chae-yoon'),
(1491, ' Lee Ho-suk', '-lee-ho-suk'),
(1492, ' Lee Ji-hye', '-lee-ji-hye'),
(1493, ' Choi Tae-hwan', '-choi-tae-hwan'),
(1494, ' Lee Ye-joo', '-lee-ye-joo'),
(1495, ' Jeong Won-jo', '-jeong-won-jo'),
(1496, ' Kim Dong-Ha', '-kim-dong-ha'),
(1497, '       Patrick Wilson', '-------patrick-wilson'),
(1498, '       Rose Byrne', '-------rose-byrne'),
(1499, '       Lin Shaye', '-------lin-shaye'),
(1500, '       Sinclair Daniel', '-------sinclair-daniel'),
(1501, '       Hiam Abbass', '-------hiam-abbass'),
(1502, '       Andrew Astor', '-------andrew-astor'),
(1503, '       Juliana Davies', '-------juliana-davies'),
(1504, '       Steve Coulter', '-------steve-coulter'),
(1505, '       Peter Dager', '-------peter-dager'),
(1506, '       Joseph Bishara', '-------joseph-bishara'),
(1507, '       Angus Sampson', '-------angus-sampson'),
(1508, '       Leigh Whannell', '-------leigh-whannell'),
(1509, '       Justin Sturgis', '-------justin-sturgis'),
(1510, '       David Call', '-------david-call'),
(1511, '       Stephen Gray', '-------stephen-gray'),
(1512, '       Robin S. Walker', '-------robin-s.-walker'),
(1513, '       Bridget Kim', '-------bridget-kim'),
(1514, '       Logan Wilson', '-------logan-wilson'),
(1515, '       Kasjan Wilson', '-------kasjan-wilson'),
(1516, '       Mary Looram', '-------mary-looram'),
(1517, '       Adrian Acosta', '-------adrian-acosta'),
(1518, '       AJ Dyer', '-------aj-dyer'),
(1519, '       Kalin Wilson', '-------kalin-wilson'),
(1520, '       E. Roger Mitchell', '-------e.-roger-mitchell'),
(1521, '       Dagmara Domińczyk', '-------dagmara-domi??czyk'),
(1522, '       Tom Toland', '-------tom-toland'),
(1523, '       Elaine Apruzzese', '-------elaine-apruzzese'),
(1524, '       Suki Úna Rae', '-------suki-??na-rae'),
(1525, '       Desi Ramos', '-------desi-ramos'),
(1526, '       Victorya Danylko-Petrovskaya', '-------victorya-danylko-petrovskaya'),
(1527, '       Tom Fitzpatrick', '-------tom-fitzpatrick'),
(1528, '       Barbara Hershey', '-------barbara-hershey'),
(1529, '   Artem Pyvovarov', '---artem-pyvovarov'),
(1530, '   Nazar Zadniprovskyi', '---nazar-zadniprovskyi'),
(1531, '   Oleh Skripka', '---oleh-skripka'),
(1532, '   Olena Kravets', '---olena-kravets'),
(1533, '   Serhii Prytula', '---serhii-prytula'),
(1534, '   Oleh Mykhailiuta', '---oleh-mykhailiuta'),
(1535, '   Nataliia Sumska', '---nataliia-sumska'),
(1536, '   Julia Sanina', '---julia-sanina'),
(1537, '   Mykhailo Khoma', '---mykhailo-khoma'),
(1538, '   Nina Matviienko', '---nina-matviienko'),
(1539, '   Kateryna Osadcha', '---kateryna-osadcha'),
(1540, '   Andrii Mostrenko', '---andrii-mostrenko'),
(1541, '   Khrystyna Soloviy', '---khrystyna-soloviy'),
(1542, '   Kateryna Kukhar', '---kateryna-kukhar'),
(1543, '   DakhaBrakha', '---dakhabrakha'),
(1544, 'Marlon Brando', 'marlon-brando'),
(1545, ' Al Pacino', '-al-pacino'),
(1546, ' James Caan', '-james-caan'),
(1547, ' Robert Duvall', '-robert-duvall'),
(1548, ' Richard S. Castellano', '-richard-s.-castellano'),
(1549, ' Diane Keaton', '-diane-keaton'),
(1550, ' Talia Shire', '-talia-shire'),
(1551, ' Gianni Russo', '-gianni-russo'),
(1552, ' Sterling Hayden', '-sterling-hayden'),
(1553, ' John Marley', '-john-marley'),
(1554, ' Richard Conte', '-richard-conte'),
(1555, ' Al Lettieri', '-al-lettieri'),
(1556, ' Abe Vigoda', '-abe-vigoda'),
(1557, ' John Cazale', '-john-cazale'),
(1558, ' Rudy Bond', '-rudy-bond'),
(1559, ' Al Martino', '-al-martino'),
(1560, ' Morgana King', '-morgana-king'),
(1561, ' Lenny Montana', '-lenny-montana'),
(1562, ' John Martino', '-john-martino'),
(1563, ' Salvatore Corsitto', '-salvatore-corsitto'),
(1564, ' Richard Bright', '-richard-bright'),
(1565, ' Alex Rocco', '-alex-rocco'),
(1566, ' Tony Giorgio', '-tony-giorgio'),
(1567, ' Vito Scotti', '-vito-scotti'),
(1568, ' Tere Livrano', '-tere-livrano'),
(1569, ' Victor Rendina', '-victor-rendina'),
(1570, ' Jeannie Linero', '-jeannie-linero'),
(1571, ' Julie Gregg', '-julie-gregg'),
(1572, ' Ardell Sheridan', '-ardell-sheridan'),
(1573, ' Simonetta Stefanelli', '-simonetta-stefanelli'),
(1574, ' Angelo Infanti', '-angelo-infanti'),
(1575, ' Corrado Gaipa', '-corrado-gaipa'),
(1576, ' Franco Citti', '-franco-citti'),
(1577, ' Saro Urzì', '-saro-urz??'),
(1578, ' Roman Coppola', '-roman-coppola'),
(1579, ' Sofia Coppola', '-sofia-coppola'),
(1580, ' Don Costello', '-don-costello'),
(1581, ' Italia Coppola', '-italia-coppola'),
(1582, ' Gray Frederickson', '-gray-frederickson'),
(1583, ' Ron Gilbert', '-ron-gilbert'),
(1584, ' Sonny Grosso', '-sonny-grosso'),
(1585, ' Louis Guss', '-louis-guss'),
(1586, ' Randy Jurgensen', '-randy-jurgensen'),
(1587, ' Tony King', '-tony-king'),
(1588, ' Tony Lip', '-tony-lip'),
(1589, ' Joe Lo Grippo', '-joe-lo-grippo'),
(1590, ' Lou Martini Jr.', '-lou-martini-jr.'),
(1591, ' Raymond Martino', '-raymond-martino'),
(1592, ' Joseph Medaglia', '-joseph-medaglia'),
(1593, ' Carol Morley', '-carol-morley'),
(1594, ' Rick Petrucelli', '-rick-petrucelli'),
(1595, ' Sal Richards', '-sal-richards'),
(1596, ' Tom Rosqui', '-tom-rosqui'),
(1597, ' Frank Sivero', '-frank-sivero'),
(1598, ' Filomena Spagnuolo', '-filomena-spagnuolo'),
(1599, ' Joe Spinell', '-joe-spinell'),
(1600, ' Gabriele Torrei', '-gabriele-torrei'),
(1601, ' Nick Vallelonga', '-nick-vallelonga'),
(1602, ' Conrad Yama', '-conrad-yama'),
(1603, 'Tom Hanks', 'tom-hanks'),
(1604, ' Michael Clarke Duncan', '-michael-clarke-duncan'),
(1605, ' David Morse', '-david-morse'),
(1606, ' Bonnie Hunt', '-bonnie-hunt'),
(1607, ' Michael Jeter', '-michael-jeter'),
(1608, ' Doug Hutchison', '-doug-hutchison'),
(1609, ' Sam Rockwell', '-sam-rockwell'),
(1610, ' James Cromwell', '-james-cromwell'),
(1611, ' Barry Pepper', '-barry-pepper'),
(1612, ' Graham Greene', '-graham-greene'),
(1613, ' Jeffrey DeMunn', '-jeffrey-demunn'),
(1614, ' Patricia Clarkson', '-patricia-clarkson'),
(1615, ' Harry Dean Stanton', '-harry-dean-stanton'),
(1616, ' Dabbs Greer', '-dabbs-greer'),
(1617, ' Eve Brent', '-eve-brent'),
(1618, ' William Sadler', '-william-sadler'),
(1619, ' Mack Miles', '-mack-miles'),
(1620, ' Rai Tasco', '-rai-tasco'),
(1621, ' Paula Malcomson', '-paula-malcomson'),
(1622, ' Christopher Joel Ives', '-christopher-joel-ives'),
(1623, ' Evanne Drucker', '-evanne-drucker'),
(1624, ' Bailey Drucker', '-bailey-drucker'),
(1625, ' Brian Libby', '-brian-libby'),
(1626, ' Brent Briscoe', '-brent-briscoe'),
(1627, ' Bill McKinney', '-bill-mckinney'),
(1628, ' Gary Sinise', '-gary-sinise'),
(1629, ' Rachel Singer', '-rachel-singer'),
(1630, ' Scotty Leavenworth', '-scotty-leavenworth'),
(1631, ' Bill Gratton', '-bill-gratton'),
(1632, ' Dee Croxton', '-dee-croxton'),
(1633, ' Rebecca Klingler', '-rebecca-klingler'),
(1634, ' Gary Imhoff', '-gary-imhoff'),
(1635, ' Van Epperson', '-van-epperson'),
(1636, ' David E. Browning', '-david-e.-browning'),
(1637, ' Tommy Barnes', '-tommy-barnes'),
(1638, ' Wes Hall', '-wes-hall'),
(1639, ' Phil Hawn', '-phil-hawn'),
(1640, ' Judy Herrera', '-judy-herrera'),
(1641, ' Ted Hollis', '-ted-hollis'),
(1642, ' Gower Mills', '-gower-mills'),
(1643, ' Garth Shaw', '-garth-shaw'),
(1644, ' Jared Stovall', '-jared-stovall'),
(1645, ' Todd Thompson', '-todd-thompson'),
(1646, 'Shameik Moore', 'shameik-moore'),
(1647, ' Hailee Steinfeld', '-hailee-steinfeld'),
(1648, ' Brian Tyree Henry', '-brian-tyree-henry'),
(1649, ' Jake Johnson', '-jake-johnson'),
(1650, ' Oscar Isaac', '-oscar-isaac'),
(1651, ' Jason Schwartzman', '-jason-schwartzman'),
(1652, ' Daniel Kaluuya', '-daniel-kaluuya'),
(1653, ' Karan Soni', '-karan-soni'),
(1654, ' Greta Lee', '-greta-lee'),
(1655, ' Mahershala Ali', '-mahershala-ali'),
(1656, ' Amandla Stenberg', '-amandla-stenberg'),
(1657, ' Jharrel Jerome', '-jharrel-jerome'),
(1658, ' Andy Samberg', '-andy-samberg'),
(1659, ' Jack Quaid', '-jack-quaid'),
(1660, ' Rachel Dratch', '-rachel-dratch'),
(1661, ' Ziggy Marley', '-ziggy-marley'),
(1662, ' Jorma Taccone', '-jorma-taccone'),
(1663, ' J.K. Simmons', '-j.k.-simmons'),
(1664, ' Donald Glover', '-donald-glover'),
(1665, ' Elizabeth Perkins', '-elizabeth-perkins'),
(1666, ' Kathryn Hahn', '-kathryn-hahn'),
(1667, ' Ayo Edebiri', '-ayo-edebiri'),
(1668, ' Nicole Delaney', '-nicole-delaney'),
(1669, ' Antonina Lentini', '-antonina-lentini'),
(1670, ' Atsuko Okatsuka', '-atsuko-okatsuka'),
(1671, ' Peter Sohn', '-peter-sohn'),
(1672, ' Melissa Sturm', '-melissa-sturm'),
(1673, ' Lorraine Velez', '-lorraine-velez'),
(1674, ' Nic Novicki', '-nic-novicki'),
(1675, ' Taran Killam', '-taran-killam'),
(1676, ' Metro Boomin', '-metro-boomin'),
(1677, ' Josh Keaton', '-josh-keaton'),
(1678, ' Sofia Barclay', '-sofia-barclay'),
(1679, ' Danielle Perez', '-danielle-perez'),
(1680, ' Yuri Lowenthal', '-yuri-lowenthal'),
(1681, ' Rita Rani Ahuja', '-rita-rani-ahuja'),
(1682, ' Ismail Bashey', '-ismail-bashey'),
(1683, ' Oscar Camacho', '-oscar-camacho'),
(1684, ' Freddy Ferrari', '-freddy-ferrari'),
(1685, ' Kerry Gutierrez', '-kerry-gutierrez'),
(1686, ' Kamal Khan', '-kamal-khan'),
(1687, ' Angelo Sekou Kouyate', '-angelo-sekou-kouyate'),
(1688, ' Andrew Leviton', '-andrew-leviton'),
(1689, ' David Michie', '-david-michie'),
(1690, ' Sumit Naig', '-sumit-naig'),
(1691, ' Juan Pacheco', '-juan-pacheco'),
(1692, ' Chrystee Pharris', '-chrystee-pharris'),
(1693, ' Ben Pronsky', '-ben-pronsky'),
(1694, ' Al Rodrigo', '-al-rodrigo'),
(1695, ' Jaswant Dev Shrestha', '-jaswant-dev-shrestha'),
(1696, ' Libby Thomas Dickey', '-libby-thomas-dickey'),
(1697, ' Ruth Zalduondo', '-ruth-zalduondo'),
(1698, ' Jasper Johannes Andrews', '-jasper-johannes-andrews'),
(1699, ' Gredel Berrios Calladine', '-gredel-berrios-calladine'),
(1700, ' Natalia Castellanos', '-natalia-castellanos'),
(1701, ' Russell Tyre Francis', '-russell-tyre-francis'),
(1702, ' Deepti Gupta', '-deepti-gupta'),
(1703, ' Sohm Kapila', '-sohm-kapila'),
(1704, ' Pradnya Kuwadekar', '-pradnya-kuwadekar'),
(1705, ' Ashley London', '-ashley-london'),
(1706, ' Christopher Miller', '-christopher-miller'),
(1707, ' Andrea Navedo', '-andrea-navedo'),
(1708, ' Lakshmi Patel', '-lakshmi-patel'),
(1709, ' Jacqueline Pinol', '-jacqueline-pinol'),
(1710, ' Eliyas Qureshi', '-eliyas-qureshi'),
(1711, ' Lashana Rodriguez', '-lashana-rodriguez'),
(1712, ' Dennis Singletary', '-dennis-singletary'),
(1713, ' Amanda Troop', '-amanda-troop'),
(1714, ' Sitara Attaie', '-sitara-attaie'),
(1715, ' Mayuri Bhandari', '-mayuri-bhandari'),
(1716, ' June Christopher', '-june-christopher'),
(1717, ' Michelle Jubilee Gonzalez', '-michelle-jubilee-gonzalez'),
(1718, ' Marabina Jaimes', '-marabina-jaimes'),
(1719, ' Rez Kempton', '-rez-kempton'),
(1720, ' Lex Lang', '-lex-lang'),
(1721, ' Phil Lord', '-phil-lord'),
(1722, ' Richard Miro', '-richard-miro'),
(1723, ' Doug Nicholas', '-doug-nicholas'),
(1724, ' Shakira Ja\'nai Paye', '-shakira-ja\'nai-paye'),
(1725, ' James Pirri', '-james-pirri'),
(1726, ' Marley Ralph', '-marley-ralph'),
(1727, ' Michelle Ruff', '-michelle-ruff'),
(1728, ' Narender Sood', '-narender-sood'),
(1729, ' Cedric L. Williams', '-cedric-l.-williams'),
(1730, ' Kimberly Bailey', '-kimberly-bailey'),
(1731, ' Sanjay Chandani', '-sanjay-chandani'),
(1732, ' Melanie Duke', '-melanie-duke'),
(1733, ' Jorge R. Gutierrez', '-jorge-r.-gutierrez'),
(1734, ' Miguel Jiron', '-miguel-jiron'),
(1735, ' Deepti Kingra-Mickelsen', '-deepti-kingra-mickelsen'),
(1736, ' Luisa Leschin', '-luisa-leschin'),
(1737, ' Caitlin McKenna', '-caitlin-mckenna'),
(1738, ' Richard Andrew Morgado', '-richard-andrew-morgado'),
(1739, ' Arthur Ortiz', '-arthur-ortiz'),
(1740, ' Eliana A. Perez', '-eliana-a.-perez'),
(1741, ' Juan Pope', '-juan-pope'),
(1742, ' Mike Rianda', '-mike-rianda'),
(1743, ' Stan Sellers', '-stan-sellers'),
(1744, ' Warren Sroka', '-warren-sroka'),
(1745, ' Jason Linere-White', '-jason-linere-white'),
(1746, ' Kimiko Glenn', '-kimiko-glenn'),
(1747, ' Peggy Lu', '-peggy-lu'),
(1748, ' John Mulaney', '-john-mulaney'),
(1749, ' Andrew Garfield', '-andrew-garfield'),
(1750, ' Denis Leary', '-denis-leary'),
(1751, ' Tobey Maguire', '-tobey-maguire'),
(1752, ' Cliff Robertson', '-cliff-robertson'),
(1753, ' Alfred Molina', '-alfred-molina'),
(1754, ' Post Malone', '-post-malone'),
(1755, '  Iain Stirling', '--iain-stirling'),
(1756, '  Anna Kurdys', '--anna-kurdys'),
(1757, '  Carmen Kocourek', '--carmen-kocourek'),
(1758, '  Carsten ', '--carsten-'),
(1759, '<br />\r\n<b>Notice</b>:  Undefined variable: nama_pemain_string in <b>C:xampphtdocs	mf_productionadmin	v_showcreate_tmdb.php</b> on line <b>655</b><br />\r\n', '<br-/>\r\n<b>notice</b>:--undefined-variable:-nama_pemain_string-in-<b>c:xampphtdocs	mf_productionadmin	v_showcreate_tmdb.php</b>-on-line-<b>655</b><br-/>\r\n'),
(1760, '  Julie Kavner', '--julie-kavner'),
(1761, '  Nancy Cartwright', '--nancy-cartwright'),
(1762, '  Yeardley Smith', '--yeardley-smith'),
(1763, '  Hank Azaria', '--hank-azaria'),
(1764, '  Harry Shearer', '--harry-shearer'),
(1765, '       Christopher Briney', '-------christopher-briney'),
(1766, '       Gavin Casalegno', '-------gavin-casalegno'),
(1767, '       Sean Kaufman', '-------sean-kaufman'),
(1768, '       David Lacono', '-------david-lacono'),
(1769, '  Sarah Rafferty', '--sarah-rafferty'),
(1770, '  Amanda Schull', '--amanda-schull'),
(1771, '  Rick Hoffman', '--rick-hoffman'),
(1772, '  Dulé Hill', '--dul??-hill'),
(1773, '  Katherine Heigl', '--katherine-heigl'),
(1774, '  Peter Scanavino', '--peter-scanavino'),
(1775, '  Ice-T', '--ice-t'),
(1776, '  Octavio Pisano', '--octavio-pisano');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_player`
--

CREATE TABLE `tb_player` (
  `id` int(11) NOT NULL,
  `judul1` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `judul2` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `judul3` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `judul4` varchar(255) NOT NULL,
  `link4` varchar(255) NOT NULL,
  `judul5` varchar(255) NOT NULL,
  `link5` varchar(255) NOT NULL,
  `judul6` varchar(255) NOT NULL,
  `link6` varchar(255) NOT NULL,
  `judul7` varchar(255) NOT NULL,
  `link7` varchar(255) NOT NULL,
  `judul8` varchar(255) NOT NULL,
  `link8` varchar(255) NOT NULL,
  `judul9` varchar(255) NOT NULL,
  `link9` varchar(255) NOT NULL,
  `judul10` varchar(255) NOT NULL,
  `link10` varchar(255) NOT NULL,
  `judul11` varchar(255) NOT NULL,
  `link11` varchar(255) NOT NULL,
  `judul12` varchar(255) NOT NULL,
  `link12` varchar(255) NOT NULL,
  `judul13` varchar(255) NOT NULL,
  `link13` varchar(255) NOT NULL,
  `judul14` varchar(255) NOT NULL,
  `link14` varchar(255) NOT NULL,
  `judul15` varchar(255) NOT NULL,
  `link15` varchar(255) NOT NULL,
  `pemberitahuan_player` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_player`
--

INSERT INTO `tb_player` (`id`, `judul1`, `link1`, `judul2`, `link2`, `judul3`, `link3`, `judul4`, `link4`, `judul5`, `link5`, `judul6`, `link6`, `judul7`, `link7`, `judul8`, `link8`, `judul9`, `link9`, `judul10`, `link10`, `judul11`, `link11`, `judul12`, `link12`, `judul13`, `link13`, `judul14`, `link14`, `judul15`, `link15`, `pemberitahuan_player`, `created_at`, `updated_at`) VALUES
(4, 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-24 17:00:33', '2023-07-24 17:00:33'),
(5, 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-24 17:07:24', '2023-07-24 17:07:24'),
(6, 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDFad', '2023-07-24 17:14:29', '2023-07-24 21:56:56'),
(7, 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDF', '2023-07-24 20:18:12', '2023-07-24 20:18:12'),
(8, 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDF', '2023-07-24 20:20:30', '2023-07-24 20:20:30'),
(9, 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDF', '2023-07-24 20:21:38', '2023-07-24 20:21:38'),
(10, '123', '123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tidak Ada Pemberitahuan', '2023-07-24 22:11:49', '2023-07-24 23:17:43'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-27 08:09:39', '2023-07-27 08:09:39'),
(12, 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-27 18:11:01', '2023-07-27 18:11:01'),
(13, 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-27 18:11:43', '2023-07-27 18:11:43'),
(14, 'a', 'b', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-27 18:15:14', '2023-07-27 18:15:14'),
(15, '123', '436', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-27 18:16:43', '2023-07-27 18:16:43'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-29 22:35:38', '2023-07-29 22:35:38'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-29 22:39:08', '2023-07-29 22:39:08'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-29 22:41:26', '2023-07-29 22:41:26'),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-29 22:42:39', '2023-07-29 22:42:39'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-29 22:43:41', '2023-07-29 22:43:41'),
(22, 'Drakot', 'https://short.ink/4Nhbgb0ZN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tidak Ada pemberitahun', '2023-07-29 22:43:46', '2023-08-01 19:47:10'),
(23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:23:54', '2023-07-30 00:23:54'),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:24:07', '2023-07-30 00:24:07'),
(25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:24:42', '2023-07-30 00:24:42'),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:27:29', '2023-07-30 00:27:29'),
(27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:28:42', '2023-07-30 00:28:42'),
(28, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:28:56', '2023-07-30 00:28:56'),
(29, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:30:10', '2023-07-30 00:30:10'),
(30, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:30:38', '2023-07-30 00:30:38'),
(31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:31:36', '2023-07-30 00:31:36'),
(32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:32:18', '2023-07-30 00:32:18'),
(33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:32:37', '2023-07-30 00:32:37'),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:33:36', '2023-07-30 00:33:36'),
(35, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:36:14', '2023-07-30 00:36:14'),
(36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:36:58', '2023-07-30 00:36:58'),
(37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:37:23', '2023-07-30 00:37:23'),
(38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:38:30', '2023-07-30 00:38:30'),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:39:23', '2023-07-30 00:39:23'),
(40, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:40:38', '2023-07-30 00:40:38'),
(41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:40:41', '2023-07-30 00:40:41'),
(42, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:49:54', '2023-07-30 00:49:54'),
(43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:50:25', '2023-07-30 00:50:25'),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:50:35', '2023-07-30 00:50:35'),
(45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:52:56', '2023-07-30 00:52:56'),
(46, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:53:53', '2023-07-30 00:53:53'),
(47, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:55:33', '2023-07-30 00:55:33'),
(48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:56:03', '2023-07-30 00:56:03'),
(49, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:56:34', '2023-07-31 20:12:52'),
(50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:57:38', '2023-07-30 00:57:38'),
(51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:58:00', '2023-07-30 00:58:00'),
(52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 00:58:40', '2023-07-30 00:59:32'),
(53, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:00:27', '2023-07-30 01:00:27'),
(54, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:01:23', '2023-07-30 01:02:25'),
(55, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:03:05', '2023-07-30 01:03:05'),
(56, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:03:47', '2023-07-30 01:03:47'),
(57, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:04:45', '2023-07-30 01:04:45'),
(58, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:05:41', '2023-07-30 01:05:41'),
(59, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 01:06:57', '2023-07-30 01:06:57'),
(60, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 16:15:21', '2023-07-30 16:21:19'),
(61, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 16:22:07', '2023-07-31 20:11:36'),
(63, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-01 09:06:59', '2023-08-01 09:06:59'),
(64, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-01 09:08:58', '2023-08-01 09:08:58'),
(65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-01 09:10:02', '2023-08-01 09:10:02'),
(72, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:05:04', '2023-08-02 22:05:04'),
(73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:07:32', '2023-08-02 22:07:32'),
(74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:15:01', '2023-08-02 22:15:01'),
(75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:15:34', '2023-08-02 22:15:34'),
(76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:40:57', '2023-08-02 22:40:57'),
(77, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:45:33', '2023-08-02 22:45:33'),
(78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:45:37', '2023-08-02 22:45:37'),
(79, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:45:44', '2023-08-02 22:45:44'),
(80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:00', '2023-08-02 22:46:00'),
(81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:06', '2023-08-02 22:46:06'),
(82, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:10', '2023-08-02 22:46:10'),
(83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:15', '2023-08-02 22:46:15'),
(84, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:19', '2023-08-02 22:46:19'),
(85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:22', '2023-08-02 22:46:22'),
(86, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:25', '2023-08-02 22:46:25'),
(87, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:29', '2023-08-02 22:46:29'),
(88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-02 22:46:32', '2023-08-02 22:46:32'),
(89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-03 17:55:47', '2023-08-03 17:55:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tag`
--

CREATE TABLE `tb_tag` (
  `id` int(11) NOT NULL,
  `nama_tag` varchar(255) NOT NULL,
  `slug_tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tag`
--

INSERT INTO `tb_tag` (`id`, `nama_tag`, `slug_tag`) VALUES
(5, 'sadasd', 'sadasd'),
(6, 'sadasdF', 'sadasdf'),
(9, 'film terbaru', 'film-terbaru'),
(31, 'Worlds collide.', 'worlds-collide.'),
(33, 'May values ​​not die and beauty not be shallow..', 'may-values-​​not-die-and-beauty-not-be-shallow..'),
(34, 'Welcome back to Green Gables.', 'welcome-back-to-green-gables.'),
(35, 'A mysterious romance between a goblin and a young human bride.', 'a-mysterious-romance-between-a-goblin-and-a-young-human-bride.'),
(36, '', ''),
(37, 'She\'s everything. He\'s just Ken.', 'she\'s-everything.-he\'s-just-ken.'),
(38, 'Watch and you\'ll see', 'watch-and-you\'ll-see'),
(39, ' some day I\'ll be', '-some-day-i\'ll-be'),
(40, ' part of your world!', '-part-of-your-world!'),
(41, 'Unite or fall.', 'unite-or-fall.'),
(42, 'Discover the hero just beneath the surface.', 'discover-the-hero-just-beneath-the-surface.'),
(43, 'Destinies intertwined. A world gone mad.', 'destinies-intertwined.-a-world-gone-mad.'),
(44, 'Go beyond your destiny.', 'go-beyond-your-destiny.'),
(45, 'We all share the same fate.', 'we-all-share-the-same-fate.'),
(46, 'No way back', 'no-way-back'),
(47, ' one way out.', '-one-way-out.'),
(48, 'Not all heroes wear capes. Some wear overalls.', 'not-all-heroes-wear-capes.-some-wear-overalls.'),
(49, 'Three heroes. Three worlds. One salvation.', 'three-heroes.-three-worlds.-one-salvation.'),
(50, 'It ends where it all began.', 'it-ends-where-it-all-began.'),
(51, 'Who do you trust?', 'who-do-you-trust?'),
(52, 'Destiny is a beast.', 'destiny-is-a-beast.'),
(53, 'Time to de-evilize!', 'time-to-de-evilize!'),
(54, 'A boy fights... for ', 'a-boy-fights...-for-'),
(55, 'Nothing is ever black and white', 'nothing-is-ever-black-and-white'),
(56, 'Begin again.', 'begin-again.'),
(57, 'Everyone operates differently.', 'everyone-operates-differently.'),
(58, 'Let them think they re in control.', 'let-them-think-they-re-in-control.'),
(59, 'Let them think they\'re in control.', 'let-them-think-they\'re-in-control.'),
(60, 'It’s not summer without you.', 'it’s-not-summer-without-you.'),
(61, 'It is what it is.', 'it-is-what-it-is.'),
(62, 'Family. Business.', 'family.-business.'),
(63, 'Our history is now.', 'our-history-is-now.'),
(64, 'The fastest man alive.', 'the-fastest-man-alive.'),
(65, 'London\'s for the taking', 'london\'s-for-the-taking'),
(66, 'It\'s good to be bad.', 'it\'s-good-to-be-bad.'),
(67, 'Standing for victims.', 'standing-for-victims.'),
(68, 'We\'re back again! Again!', 'we\'re-back-again!-again!'),
(69, 'A 7-star sweet romance.', 'a-7-star-sweet-romance.'),
(70, 'default', 'default'),
(71, 'Miracles do happen.', 'miracles-do-happen.'),
(72, 'Tag Not Found', 'tag-not-found');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tag_artikel`
--

CREATE TABLE `tb_tag_artikel` (
  `id` int(11) NOT NULL,
  `nama_tag` varchar(200) NOT NULL,
  `slug_tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tag_artikel`
--

INSERT INTO `tb_tag_artikel` (`id`, `nama_tag`, `slug_tag`) VALUES
(3, 'Drama', 'drama'),
(4, 'Drakor', 'drakor'),
(6, ' Drakor', '-drakor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id` int(11) NOT NULL,
  `tahun_rilis` int(11) NOT NULL,
  `slug_tahun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tahun`
--

INSERT INTO `tb_tahun` (`id`, `tahun_rilis`, `slug_tahun`) VALUES
(6, 2023, '2023'),
(12, 2016, '2016'),
(13, 2017, '2017'),
(14, 0, ''),
(15, 2022, '2022'),
(16, 2021, '2021'),
(17, 2019, '2019'),
(18, 2015, '2015'),
(19, 2020, '2020'),
(20, 2011, '2011'),
(21, 2005, '2005'),
(22, 2013, '2013'),
(23, 2014, '2014'),
(24, 1999, '1999'),
(25, 1989, '1989'),
(26, 1972, '1972');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tmdb`
--

CREATE TABLE `tb_tmdb` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `bahasa` varchar(100) DEFAULT NULL,
  `tagline` text DEFAULT NULL,
  `rating_mpaa` varchar(50) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `tahun_rilis` int(11) DEFAULT NULL,
  `tanggal_terakhir_mengudara` date DEFAULT NULL,
  `waktu_jalan` int(11) DEFAULT NULL,
  `rating1` decimal(3,1) DEFAULT NULL,
  `rating2` decimal(3,1) DEFAULT NULL,
  `anggaran` decimal(15,2) DEFAULT NULL,
  `pendapatan` decimal(15,2) DEFAULT NULL,
  `link_trailer` varchar(255) DEFAULT NULL,
  `url_poster` varchar(255) DEFAULT NULL,
  `imdb_id` varchar(20) DEFAULT NULL,
  `tmdb_id` varchar(50) DEFAULT NULL,
  `jumlah_episode` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penerjemah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tmdb`
--

INSERT INTO `tb_tmdb` (`id`, `judul`, `bahasa`, `tagline`, `rating_mpaa`, `tanggal_rilis`, `tahun_rilis`, `tanggal_terakhir_mengudara`, `waktu_jalan`, `rating1`, `rating2`, `anggaran`, `pendapatan`, `link_trailer`, `url_poster`, `imdb_id`, `tmdb_id`, `jumlah_episode`, `created_at`, `updated_at`, `penerjemah`) VALUES
(23, 'The Flash', 'English', 'Worlds collide.', '', '2023-06-13', 2023, NULL, 144, '6.9', '10.0', '190000000.00', '267481043.00', 'https://www.youtube.com/watch?v=jprhe-cWKGs', 'https://image.tmdb.org/t/p/w200//rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', 'tt0439572', '298618', NULL, '2023-07-29 22:43:46', '2023-07-29 22:43:46', ''),
(24, 'Dr. Romantic', 'Korean', 'May values ​​not die and beauty not be shallow..', '', '1970-01-01', 2016, '2023-06-17', 60, '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=d3Xxx8EsEyM', 'https://image.tmdb.org/t/p/w200//5WC5zEItQk7Av75osRRjbcKfHWD.jpg', '', '68398', 52, '2023-07-29 23:41:57', '2023-07-29 23:41:57', ''),
(25, 'Anne with an E', 'English', 'Welcome back to Green Gables.', '', '1970-01-01', 2017, '2019-11-24', 47, '8.7', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//6P6tXhjT5tK3qOXzxF9OMLlG7iz.jpg', '', '70785-anne', 27, '2023-07-30 00:19:51', '2023-07-30 00:19:51', ''),
(26, 'Goblin', 'Korean', 'A mysterious romance between a goblin and a young human bride.', '', '1970-01-01', 2016, '2017-01-21', 77, '8.7', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=8AcNEVUzV4o', 'https://image.tmdb.org/t/p/w200//t7aUi8jbsIUSCNqA1akAbKjBWjU.jpg', '', '67915', 16, '2023-07-30 00:21:53', '2023-07-30 00:21:53', ''),
(27, 'My Hero Academia', 'Japanese', '', '', '1970-01-01', 2016, '2023-03-25', 24, '8.7', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=EPVkcwyLQQ8', 'https://image.tmdb.org/t/p/w200//ivOLM47yJt90P19RH1NvJrAJz9F.jpg', '', '65930', 138, '2023-07-30 00:22:56', '2023-07-30 00:22:56', ''),
(28, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:28:42', '2023-07-30 00:28:42', ''),
(29, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:28:56', '2023-07-30 00:28:56', ''),
(30, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:30:10', '2023-07-30 00:30:10', ''),
(31, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:30:38', '2023-07-30 00:30:38', ''),
(32, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:31:36', '2023-07-30 00:31:36', ''),
(33, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:32:18', '2023-07-30 00:32:18', ''),
(34, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:32:37', '2023-07-30 00:32:37', ''),
(35, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:33:36', '2023-07-30 00:33:36', ''),
(36, 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', 2023, NULL, 114, '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', NULL, '2023-07-30 00:36:14', '2023-07-30 00:36:14', ''),
(37, 'The Little Mermaid', 'English', 'Watch and you\'ll see, some day I\'ll be, part of your world!', '', '2023-05-18', 2023, NULL, 135, '6.4', '10.0', '250000000.00', '556713998.00', 'https://www.youtube.com/watch?v=kpGo2_d3oYE', 'https://image.tmdb.org/t/p/w200//ym1dxyOk4jFcSl4Q2zmRrA5BEEN.jpg', 'tt5971474', '447277', NULL, '2023-07-30 00:36:58', '2023-07-30 00:36:58', ''),
(38, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:37:23', '2023-07-30 00:37:23', ''),
(39, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:38:30', '2023-07-30 00:38:30', ''),
(40, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:39:23', '2023-07-30 00:39:23', ''),
(41, '', '', '', '', '1970-01-01', 0, NULL, 0, '0.0', '0.0', '0.00', '0.00', '', '', '', '', NULL, '2023-07-30 00:40:38', '2023-07-30 00:40:38', ''),
(42, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:40:41', '2023-07-30 00:40:41', ''),
(43, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:49:54', '2023-07-30 00:49:54', ''),
(44, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:50:25', '2023-07-30 00:50:25', ''),
(45, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:50:35', '2023-07-30 00:50:35', ''),
(46, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:52:56', '2023-07-30 00:52:56', ''),
(47, 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', 2023, NULL, 127, '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', NULL, '2023-07-30 00:53:53', '2023-07-30 00:53:53', ''),
(48, 'Ruby Gillman, Teenage Kraken', 'English', 'Discover the hero just beneath the surface.', '', '2023-06-28', 2023, NULL, 91, '7.8', '10.0', '0.00', '26770000.00', 'https://www.youtube.com/watch?v=u4uyD8FFUIw', 'https://image.tmdb.org/t/p/w200//kgrLpJcLBbyhWIkK7fx1fM4iSvf.jpg', 'tt27155038', '1040148', NULL, '2023-07-30 00:55:33', '2023-07-30 00:55:33', ''),
(49, 'Resident Evil: Death Island', 'Japanese', 'Destinies intertwined. A world gone mad.', '', '2023-06-22', 2023, NULL, 91, '7.9', '10.0', '0.00', '53929.00', 'https://www.youtube.com/watch?v=L-vkuA8oqMY', 'https://image.tmdb.org/t/p/w200//qayga07ICNDswm0cMJ8P3VwklFZ.jpg', 'tt26674627', '1083862', NULL, '2023-07-30 00:56:03', '2023-07-30 00:56:03', ''),
(50, 'Mavka: The Forest Song', 'Ukrainian', '', '', '2023-01-20', 2023, NULL, 99, '7.5', '7.5', '5000000.00', '11700000.00', 'https://www.youtube.com/watch?v=WZ1je_JJTv8', 'https://image.tmdb.org/t/p/w200//eeJjd9JU2Mdj9d7nWRFLWlrcExi.jpg', 'tt6685538', '459003', NULL, '2023-07-30 00:56:34', '2023-07-30 00:56:48', ''),
(51, 'Knights of the Zodiac', 'English', 'Go beyond your destiny.', '', '2023-04-27', 2023, NULL, 113, '6.6', '10.0', '60000000.00', '6794519.00', 'https://www.youtube.com/watch?v=gZ3o0lTfYOs', 'https://image.tmdb.org/t/p/w200//qW4crfED8mpNDadSmMdi7ZDzhXF.jpg', 'tt6528290', '455476', NULL, '2023-07-30 00:57:38', '2023-07-30 00:57:38', ''),
(52, 'Bad City', 'Japanese', '', '', '2022-07-05', 2022, NULL, 118, '6.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=-c1J6Q8IfGI', 'https://image.tmdb.org/t/p/w200//zjWAjosdXELkaqCnlc1s8FQtIZL.jpg', 'tt21243618', '987507', NULL, '2023-07-30 00:58:00', '2023-07-30 00:58:00', ''),
(53, 'Mission: Impossible - Dead Reckoning Part One', 'English', 'We all share the same fate.', '', '2023-01-20', 2023, NULL, 164, '7.8', '7.8', '291000000.00', '373082750.00', 'https://www.youtube.com/watch?v=HurjfO_TDlQ', 'https://image.tmdb.org/t/p/w200//NNxYkU70HPurnNCSiCjYAmacwm.jpg', 'tt9603212', '575264', NULL, '2023-07-30 00:58:40', '2023-07-30 00:59:32', ''),
(54, 'John Wick: Chapter 4', 'English', 'No way back, one way out.', '', '2023-03-22', 2023, NULL, 170, '7.8', '10.0', '90000000.00', '431769198.00', 'https://www.youtube.com/watch?v=yjRHZEUamCc', 'https://image.tmdb.org/t/p/w200//vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'tt10366206', '603692', NULL, '2023-07-30 01:00:27', '2023-07-30 01:00:27', ''),
(55, 'Mission: Impossible - Dead Reckoning Part One', 'English', 'We all share the same fate.', '', '2023-01-20', 2023, NULL, 164, '7.8', '7.8', '291000000.00', '373082750.00', 'https://www.youtube.com/watch?v=HurjfO_TDlQ', 'https://image.tmdb.org/t/p/w200//NNxYkU70HPurnNCSiCjYAmacwm.jpg', 'tt9603212', '575264', NULL, '2023-07-30 01:01:23', '2023-07-30 01:02:25', ''),
(56, 'The Super Mario Bros. Movie', 'English', 'Not all heroes wear capes. Some wear overalls.', '', '2023-04-05', 2023, NULL, 93, '7.8', '10.0', '100000000.00', '1347013866.00', 'https://www.youtube.com/watch?v=RjNcTBXTk4I', 'https://image.tmdb.org/t/p/w200//qNBAXBIQlnOThrVvA6mA2B5ggV6.jpg', 'tt6718170', '502356', NULL, '2023-07-30 01:03:05', '2023-07-30 01:03:05', ''),
(57, 'Mr. Car and the Knights Templar', 'Polish', '', '', '2023-07-12', 2023, NULL, 110, '6.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=Po0pMvWM19s', 'https://image.tmdb.org/t/p/w200//xEAXVe0BzW4K9Ky6eTo4CJwzJ8P.jpg', 'tt27876411', '1059638', NULL, '2023-07-30 01:03:47', '2023-07-30 01:03:47', ''),
(58, 'Justice League: Warworld', 'English', 'Three heroes. Three worlds. One salvation.', '', '2023-07-25', 2023, NULL, 90, '7.9', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=IPDLodUE9gg', 'https://image.tmdb.org/t/p/w200//qmevjlNDaWoEughGlXFWHbQ4TaR.jpg', 'tt27687527', '1003581', NULL, '2023-07-30 01:04:45', '2023-07-30 01:04:45', ''),
(59, 'Mortal Kombat Legends: Battle of the Realms', 'English', '', '', '2021-08-31', 2021, NULL, 80, '7.8', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=hRRtd7Etato', 'https://image.tmdb.org/t/p/w200//ablrE8IbWcIrAxMmm4gnPn75AMS.jpg', 'tt14901058', '841755', NULL, '2023-07-30 01:05:41', '2023-07-30 01:05:41', ''),
(60, 'After Ever Happy', 'English', '', '', '2022-08-24', 2022, NULL, 95, '6.8', '10.0', '0.00', '12467270.00', 'https://www.youtube.com/watch?v=hLQ-5exgctI', 'https://image.tmdb.org/t/p/w200//6b7swg6DLqXCO3XUsMnv6RwDMW2.jpg', 'tt13070038', '744276', NULL, '2023-07-30 01:06:57', '2023-07-30 01:06:57', ''),
(61, 'Insidious: The Red Door', 'English', 'It ends where it all began.', '', '2023-01-20', 2023, NULL, 107, '6.0', '6.0', '16000000.00', '155000000.00', 'https://www.youtube.com/watch?v=gexw4P68kbg', 'https://image.tmdb.org/t/p/w200//uS1AIL7I1Ycgs8PTfqUeN6jYNsQ.jpg', 'tt13405778', '614479', NULL, '2023-07-30 16:15:21', '2023-07-30 16:19:08', ''),
(62, 'Insidious: The Red Door', 'English', 'It ends where it all began.', '', '2023-01-20', 2023, NULL, 107, '6.0', '6.0', '16000000.00', '155000000.00', 'https://www.youtube.com/watch?v=gexw4P68kbg', 'https://image.tmdb.org/t/p/w200//uS1AIL7I1Ycgs8PTfqUeN6jYNsQ.jpg', 'tt13405778', '614479', NULL, '2023-07-30 16:22:07', '2023-07-30 16:22:16', ''),
(63, 'Secret Invasion', 'English', 'Who do you trust?', '', '0000-00-00', 2023, '2023-07-26', 0, '7.4', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=Tp_YZNqNBhw', 'https://image.tmdb.org/t/p/w200//f5ZMzzCvt2IzVDxr54gHPv9jlC9.jpg', '', '114472', 6, '2023-07-30 16:26:11', '2023-07-30 16:34:46', ''),
(64, 'The Witcher', 'English', 'Destiny is a beast.', '', '0000-00-00', 2019, '2023-07-27', 47, '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=eb90gqGYP9c', 'https://image.tmdb.org/t/p/w200//cZ0d3rtvXPVvuiX22sP79K3Hmjz.jpg', '', '71912', 24, '2023-07-30 16:36:07', '2023-07-30 16:36:07', ''),
(65, 'Love Island', 'English', '', '', '0000-00-00', 2019, '2023-07-29', 43, '7.1', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=fpIehnHmjRY', 'https://image.tmdb.org/t/p/w200//kU2y21cls8WargMaX7KI47URMjD.jpg', '', '90521', 137, '2023-07-30 16:36:48', '2023-07-30 16:36:48', ''),
(66, 'Miraculous: Tales of Ladybug & Cat Noir', 'French', 'Time to de-evilize!', '', '0000-00-00', 2015, '2023-05-14', 24, '8.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=04mqq9T6y_c', 'https://image.tmdb.org/t/p/w200//psDcRgUX38cIeGeADwLRPyO7SYC.jpg', '', '65334', 129, '2023-07-30 16:43:42', '2023-07-30 16:43:42', ''),
(67, 'Jujutsu Kaisen', 'Japanese', 'A boy fights... for ', '', '0000-00-00', 2020, '2023-07-27', 24, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=VpO6APNqY1c', 'https://image.tmdb.org/t/p/w200//3yFHMtdhriig4sm1w8oMQfA2gFN.jpg', '', '95479', 47, '2023-07-30 16:44:51', '2023-07-30 16:44:51', ''),
(71, 'Suits', 'English', 'Nothing is ever black and white', '', '0000-00-00', 2011, '2019-09-25', 42, '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=cUnkjEIW2-o', 'https://image.tmdb.org/t/p/w200//vQiryp6LioFxQThywxbC6TuoDjy.jpg', '', '37680', 134, '2023-07-30 16:47:32', '2023-07-30 16:47:32', ''),
(72, 'Grey\'s Anatomy', 'English', 'Begin again.', '', '0000-00-00', 2005, '2023-05-18', 43, '8.3', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//daSFbrt8QCXV2hSwB0hqYjbj681.jpg', '', '1416', 419, '2023-07-30 16:52:08', '2023-07-30 16:52:08', ''),
(73, 'The Good Doctor', 'English', 'Everyone operates differently.', '', '0000-00-00', 2017, '2023-05-01', 43, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=lnY9FWUTY84', 'https://image.tmdb.org/t/p/w200//luhKkdD80qe62fwop6sdrXK9jUT.jpg', '', '71712', 116, '2023-07-30 16:53:03', '2023-07-30 16:53:03', ''),
(74, 'Hijack', 'English', 'Let them think they re in control.', '', '0000-00-00', 2023, '2023-07-26', 0, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', 7, '2023-07-30 16:54:20', '2023-07-30 16:54:20', ''),
(75, 'Hijack', 'English', 'Let them think they re in control.', '', '0000-00-00', 2023, '2023-07-26', 0, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', 7, '2023-07-30 16:55:00', '2023-07-30 16:55:00', ''),
(76, '', '', '', '', '0000-00-00', 0, '0000-00-00', 0, '0.0', '0.0', '0.00', '0.00', '', '', '', '', 0, '2023-07-30 17:09:11', '2023-07-30 17:09:11', ''),
(77, 'Hijack', 'English', 'Let them think they\'re in control.', '', '0000-00-00', 2023, '2023-07-26', 0, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', 7, '2023-07-30 17:10:37', '2023-07-30 17:10:37', ''),
(78, 'Hijack', 'English', 'Let them think they\'re in control.', '', '0000-00-00', 2023, '2023-07-26', 0, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', 7, '2023-07-30 17:11:26', '2023-07-30 17:11:26', ''),
(79, 'The Summer I Turned Pretty', 'English', 'It’s not summer without you.', '', '0000-00-00', 2022, '2023-07-27', 45, '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=FfAueqEab30', 'https://image.tmdb.org/t/p/w200//ePpNZ6QCT5ylXniZmfQPyjyFCCM.jpg', '', '194766-the-summer-i-turned-pretty', 15, '2023-07-30 17:12:01', '2023-07-30 17:12:01', ''),
(80, 'Love Island', 'English', 'It is what it is.', '', '0000-00-00', 2015, '2023-07-29', 45, '6.1', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//xcvfGvsEyKm01dIHLh2gxnhM14A.jpg', '', '66636', 505, '2023-07-30 17:15:07', '2023-07-30 17:15:07', ''),
(81, 'The Blacklist', 'English', 'Family. Business.', '', '0000-00-00', 2013, '2023-07-13', 43, '7.6', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=-WYdUaK54fU', 'https://image.tmdb.org/t/p/w200//r935SMphvXppx5bJjbIBNx02fwc.jpg', '', '46952', 218, '2023-07-30 17:15:32', '2023-07-30 17:15:32', ''),
(82, 'Outlander', 'English', 'Our history is now.', '', '0000-00-00', 2014, '2023-07-28', 0, '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=KAS01FFj1fQ', 'https://image.tmdb.org/t/p/w200//oftZNfyTVNU7IfOqoGLoT8MGvNs.jpg', '', '56570', 91, '2023-07-30 17:15:59', '2023-07-30 17:15:59', ''),
(83, 'Baki Hanma', 'Japanese', '', '', '0000-00-00', 2021, '2023-07-26', 24, '8.1', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=SDOdIjgevrk', 'https://image.tmdb.org/t/p/w200//x145FSI9xJ6UbkxfabUsY2SFbu3.jpg', '', '129600', 26, '2023-07-30 17:16:24', '2023-07-30 17:16:24', ''),
(84, 'The Flash', 'English', 'The fastest man alive.', '', '0000-00-00', 2014, '2023-05-24', 44, '7.8', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=IgVyroQjZbE', 'https://image.tmdb.org/t/p/w200//rg8N7x27Ef6PvlIiioLStf9ZaIO.jpg', '', '60735', 184, '2023-07-30 17:16:49', '2023-07-30 17:16:49', ''),
(85, 'Peaky Blinders', 'English', 'London\'s for the taking', '', '0000-00-00', 2013, '2022-04-03', 58, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=EM12mcTEI88', 'https://image.tmdb.org/t/p/w200//vUUqzWa2LnHIVqkaKVlVGkVcZIW.jpg', '', '60574', 36, '2023-07-30 17:17:09', '2023-07-30 17:17:09', ''),
(86, 'Lucifer', 'English', 'It\'s good to be bad.', '', '0000-00-00', 2016, '2021-09-10', 107, '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=X4bF_quwNtw', 'https://image.tmdb.org/t/p/w200//ekZobS8isE6mA53RAiGDG93hBxL.jpg', '', '63174', 93, '2023-07-30 17:17:28', '2023-07-30 17:17:28', ''),
(88, 'Futurama', 'English', 'We\'re back again! Again!', '', '0000-00-00', 1999, '2023-07-24', 22, '8.4', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=dUHzt5md1x0', 'https://image.tmdb.org/t/p/w200//7RRHbCUtAsVmKI6FEMzZB6Re88P.jpg', '', '615', 134, '2023-07-30 17:18:14', '2023-07-30 17:18:14', ''),
(89, 'The Simpsons', 'English', '', '', '0000-00-00', 1989, '2023-05-21', 22, '8.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=_jgYEYERYFQ', 'https://image.tmdb.org/t/p/w200//zI3E2a3WYma5w8emI35mgq5Iurx.jpg', '', '456', 751, '2023-07-30 17:18:33', '2023-07-30 17:18:33', ''),
(90, 'King the Land', 'Korean', 'A 7-star sweet romance.', '', '0000-00-00', 2023, '2023-07-29', 70, '6.4', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=AGF16szMOmo', 'https://image.tmdb.org/t/p/w200//oqpzn6xcqqZpk3DB3z3sT6UFkZp.jpg', '', '198004', 16, '2023-07-30 17:19:14', '2023-07-30 17:19:14', ''),
(91, 'The Godfather', 'English', 'An offer you can\'t refuse.', '', '1972-03-14', 1972, NULL, 175, '8.7', '10.0', '6000000.00', '245066411.00', 'https://www.youtube.com/watch?v=Ew9ngL1GZvs', 'https://image.tmdb.org/t/p/w200//3bhkrj58Vtu7enYsRolD1fZdja1.jpg', 'tt0068646', '238', NULL, '2023-08-01 09:06:59', '2023-08-01 09:06:59', ''),
(92, 'The Green Mile', 'English', 'Miracles do happen.', '', '1999-12-10', 1999, NULL, 189, '8.5', '10.0', '60000000.00', '286801374.00', 'https://www.youtube.com/watch?v=Bg7epsq0OIQ', 'https://image.tmdb.org/t/p/w200//o0lO84GI7qrG6XFvtsPOSV7CTNa.jpg', 'tt0120689', '497', NULL, '2023-08-01 09:08:58', '2023-08-01 09:08:58', ''),
(93, 'Spider-Man: Across the Spider-Verse', 'English', 'It\'s how you wear the mask that matters.', '', '2023-05-31', 2023, NULL, 140, '8.5', '10.0', '100000000.00', '665569774.00', 'https://www.youtube.com/watch?v=yFrxzaBLDQM', 'https://image.tmdb.org/t/p/w200//8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg', 'tt9362722', '569094', NULL, '2023-08-01 09:10:02', '2023-08-01 09:10:02', ''),
(94, 'King the Land', 'Korean', 'A 7-star sweet romance.', '', '0000-00-00', 2023, '2023-07-30', 70, '7.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=AGF16szMOmo', 'https://image.tmdb.org/t/p/w200//oqpzn6xcqqZpk3DB3z3sT6UFkZp.jpg', '', '198004', 16, '2023-08-03 17:48:25', '2023-08-03 17:48:25', ''),
(100, 'Law & Order: Special Victims Unit', 'English', 'Standing for victims.', '', '0000-00-00', 1999, '2023-05-18', 43, '8.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=EFJqFVYKggA', 'https://image.tmdb.org/t/p/w200//ywBt4WKADdMVgxTR1rS2uFwMYTH.jpg', '', '2734', 539, '2023-08-04 08:28:29', '2023-08-04 08:34:16', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tv_show`
--

CREATE TABLE `tb_tv_show` (
  `id` int(11) NOT NULL,
  `judul_tv_show` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `genre_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tag_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `direktur_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `pemain_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tahun_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `negara_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `kualitas_ids` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `jaringan_ids` varchar(100) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `tmdb_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tv_show`
--

INSERT INTO `tb_tv_show` (`id`, `judul_tv_show`, `deskripsi`, `status`, `genre_ids`, `tag_ids`, `direktur_ids`, `pemain_ids`, `tahun_ids`, `negara_ids`, `kualitas_ids`, `jaringan_ids`, `thumbnail`, `tmdb_id`, `created_at`, `updated_at`) VALUES
(6, 'Secret Invasion (2023)', 'Nick Fury and Talos discover a faction of shapeshifting Skrulls who have been infiltrating Earth for years.', 'draf', '23,56,58', '51', '34', '1201,1267,1268,1269,1270,1271,1272,1273,1274,1275,1276,1277', '6', '11', '2', '11', '', 63, '2023-07-30 16:26:12', '2023-07-30 16:35:22'),
(7, 'The Witcher (2019)', 'Geralt of Rivia, a mutated monster-hunter for hire, journeys toward his destiny in a turbulent world where people often prove more wicked than beasts.', 'draf', '23,58,56', '52', '35', '1278,1279,1280,1281,1282,1283,1284,1285,1286,1287,1288,1289,1290,1291,1292,1293,1294', '17', '27,16', '2', '12', '', 64, '2023-07-30 16:36:07', '2023-07-30 16:36:07'),
(8, 'Love Island (2019)', 'American version of the British dating reality competition in which ten singles come to stay in a villa for a few weeks and have to couple up with one another. Over the course of those weeks, they face the public vote and might be eliminated from the show. Other islanders join and try to break up the couples.', 'draf', '23,54,56,57,58,59,63,65,66,67', '72', '36', '1295,1755,1756,1757,1758', '17', '11', '2', '13,59', '', 65, '2023-07-30 16:36:48', '2023-08-02 18:42:59'),
(9, 'Miraculous: Tales of Ladybug & Cat Noir (2015) ', 'Normal high school kids by day, protectors of Paris by night! Miraculous follows the heroic adventures of Marinette and Adrien as they transform into Ladybug and Cat Noir and set out to capture akumas, creatures responsible for turning the people of Paris into villains. But neither hero knows the other’s true identity – or that they’re classmates!', 'draf', '23,56,58,59,66,67', '53', '14', '1300,1305,1306', '18', '28,31,32', '2', '15', '', 66, '2023-07-30 16:43:42', '2023-07-30 16:44:09'),
(10, 'Jujutsu Kaisen (2020)', 'Yuji Itadori is a boy with tremendous physical strength, though he lives a completely ordinary high school life. One day, to save a classmate who has been attacked by curses, he eats the finger of Ryomen Sukuna, taking the curse into his own soul. From then on, he shares one body with Ryomen Sukuna. Guided by the most powerful of sorcerers, Satoru Gojo, Itadori is admitted to Tokyo Jujutsu High School, an organization that fights the curses... and thus begins the heroic tale of a boy who became a curse to exorcise a curse, a life from which he could never turn back.', 'draf', '59,58,56', '54', '14', '1307,1308,1309,1310', '19', '14', '2', '16,9,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42', '', 67, '2023-07-30 16:44:51', '2023-07-30 16:44:51'),
(13, 'Suits (2011)', 'While running from a drug deal gone bad, Mike Ross, a brilliant young college-dropout, slips into a job interview with one of New York City\'s best legal closers, Harvey Specter. Tired of cookie-cutter law school grads, Harvey takes a gamble by hiring Mike on the spot after he recognizes his raw talent and photographic memory.', 'publik', '23,54,56,57,58,59,63,65,66,67', '55', '37', '1311,1769,1770,1771,1772,1773', '20', '11', '2', '43', '', 71, '2023-07-30 16:47:32', '2023-08-04 07:49:40'),
(14, 'Grey\'s Anatomy (2005)', 'Follows the personal and professional lives of a group of doctors at Seattle’s Grey Sloan Memorial Hospital.', 'draf', '23', '56', '38', '1320,1336,1337,1338,1339,1340,1341,1342,1343,1344,1345,1346,1347,1348,1349,1350', '21', '11', '2', '44', '', 72, '2023-07-30 16:52:08', '2023-07-30 16:52:08'),
(15, 'The Good Doctor (2017)', 'Shaun Murphy, a young surgeon with autism and savant syndrome, relocates from a quiet country life to join a prestigious hospital\'s surgical unit. Unable to personally connect with those around him, Shaun uses his extraordinary medical gifts to save lives and challenge the skepticism of his colleagues.', 'draf', '23', '57', '14', '1351,1352,1353,1354,1355,1356,1357,1358,1359', '13', '11', '2', '44', '', 73, '2023-07-30 16:53:03', '2023-07-30 16:53:03'),
(27, 'Hijack (2023)', 'When Flight KA29 is hijacked during its seven-hour journey from Dubai to London, Sam Nelson—an accomplished corporate negotiator—tries using his professional skills to save everyone on board. Will this high-risk strategy be his undoing?', 'draf', '23', '59', '39', '1360,1361,1362,1363,1364,1365,1366,1367,1368,1369,1370,1371,1372,1373,1374,1375,1376', '6', '15', '2', '45', '', 78, '2023-07-30 17:11:27', '2023-07-30 17:11:27'),
(28, 'The Summer I Turned Pretty (2022)', 'Every summer, Belly and her family head to the Fishers’ beach house in Cousins. Every summer is the same ... until Belly turns sixteen. Relationships will be tested, painful truths will be revealed, and Belly will be forever changed. It’s a summer of first love, first heartbreak and growing up — it\'s the summer she turns pretty.', 'draf', '23,54,56,57,58,59,63,65,66,67', '60', '14', '1393,1765,1766,1767,1768', '15', '11', '2', '47', '', 79, '2023-07-30 17:12:01', '2023-08-04 06:20:28'),
(29, 'Love Island (2015)', 'A stunning cast engages in the ultimate game of love, as they land in a sunshine paradise in search of passion and romance. Each of the glamorous members of the public will live like celebrities in a luxury villa, but in order to stay there, they will not only have to win over the hearts of each other, but also the hearts of the public.', 'draf', '66', '61', '14', '1418,1419,1420,1421,1422,1423,1424,1425,1426,1427,1428,1429,1430,1431,1432', '18', '33,34', '2', '48', '', 80, '2023-07-30 17:15:07', '2023-07-30 17:15:07'),
(30, 'The Blacklist (2013)', 'Raymond \"Red\" Reddington, one of the FBI\'s most wanted fugitives, surrenders in person at FBI Headquarters in Washington, D.C. He claims that he and the FBI have the same interests: bringing down dangerous criminals and terrorists. In the last two decades, he\'s made a list of criminals and terrorists that matter the most but the FBI cannot find because it does not know they exist. Reddington calls this \"The Blacklist\". Reddington will co-operate, but insists that he will speak only to Elizabeth Keen, a rookie FBI profiler.', 'draf', '23,63,65', '62', '40', '1433,1434,1435,1436,1437', '22', '11', '2', '49', '', 81, '2023-07-30 17:15:32', '2023-07-30 17:15:32'),
(31, 'Outlander (2014)', 'The story of Claire Randall, a married combat nurse from 1945 who is mysteriously swept back in time to 1743, where she is immediately thrown into an unknown world where her life is threatened. When she is forced to marry Jamie, a chivalrous and romantic young Scottish warrior, a passionate affair is ignited that tears Claire\'s heart between two vastly different men in two irreconcilable lives.', 'draf', '23,56', '63', '14', '1438,1439,1440,1441', '23', '15,16', '2', '50', '', 82, '2023-07-30 17:16:00', '2023-07-30 17:16:00'),
(32, 'Baki Hanma (2021)', 'To gain the skills he needs to surpass his powerful father, Baki enters Arizona State Prison to take on the notorious inmate known as Mr. Unchained.', 'draf', '23,54,56,57,58,59,63,65,66,67', '72', '14', '1759', '16', '14', '2', '12', '', 83, '2023-07-30 17:16:24', '2023-08-02 18:43:13'),
(33, 'The Flash (2014)', 'After a particle accelerator causes a freak storm, CSI Investigator Barry Allen is struck by lightning and falls into a coma. Months later he awakens with the power of super speed, granting him the ability to move through Central City like an unseen guardian angel. Though initially excited by his newfound powers, Barry is shocked to discover he is not the only \"meta-human\" who was created in the wake of the accelerator explosion -- and not everyone is using their new powers for good. Barry partners with S.T.A.R. Labs and dedicates his life to protect the innocent. For now, only a few close friends and associates know that Barry is literally the fastest man alive, but it won\'t be long before the world learns what Barry Allen has become...The Flash.', 'draf', '23,56', '64', '14', '1443,1444,1445,1446,1447,1448,1449', '23', '11', '2', '51', '', 84, '2023-07-30 17:16:49', '2023-07-30 17:16:49'),
(34, 'Peaky Blinders (2013)', 'A gangster family epic set in 1919 Birmingham, England and centered on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby, who means to move up in the world.', 'draf', '23,63', '65', '14', '1450,1451,1452,1453', '22', '15', '2', '52,53', '', 85, '2023-07-30 17:17:09', '2023-07-30 17:17:09'),
(35, 'Lucifer (2016)', 'Bored and unhappy as the Lord of Hell, Lucifer Morningstar abandoned his throne and retired to Los Angeles, where he has teamed up with LAPD detective Chloe Decker to take down criminals. But the longer he\'s away from the underworld, the greater the threat that the worst of humanity could escape.', 'draf', '63,56', '66', '41', '1454,1455,1456,1457,1458,1459,1460,1461', '12', '11', '2', '54,55', '', 86, '2023-07-30 17:17:28', '2023-07-30 17:17:28'),
(37, 'Futurama (1999)', 'The adventures of a late-20th-century New York City pizza delivery boy, Philip J. Fry, who, after being unwittingly cryogenically frozen for one thousand years, finds employment at Planet Express, an interplanetary delivery company in the retro-futuristic 31st century.', 'draf', '59,57,56', '68', '43', '572,1466,1467,1468,1469,1470,894,1471', '24', '11', '2', '54,56,57', '', 88, '2023-07-30 17:18:14', '2023-07-30 17:18:14'),
(38, 'The Simpsons (1989)', 'Set in Springfield, the average American town, the show focuses on the antics and everyday adventures of the Simpson family; Homer, Marge, Bart, Lisa and Maggie, as well as a virtual cast of thousands. Since the beginning, the series has been a pop culture icon, attracting hundreds of celebrities to guest star. The show has also made name for itself in its fearless satirical take on politics, media and American life in general.', 'draf', '23,54,56,57,58,59,63,65,66,67', '72', '14', '1472,1760,1761,1762,1763,1764', '25', '11', '2', '54', '', 89, '2023-07-30 17:18:33', '2023-08-02 18:43:26'),
(39, 'King the Land (2023)', 'Amid a tense inheritance fight, a charming heir clashes with his hardworking employee who\'s known for her irresistible smile — which he cannot stand.', 'publik', '23,57', '69', '44', '1478,1479,1480,1481,1482,1483,1484,1485,1486,1487,1488,1489,1490,1491,1492,1493,1494,1495,1496', '6', '3', '2', '58', '', 90, '2023-07-30 17:19:15', '2023-07-30 17:19:15'),
(40, 'King the Land (2023) Season 2', 'Amid a tense inheritance fight, a charming heir clashes with his hardworking employee who\'s known for her irresistible smile — which he cannot stand.', 'draf', '23,57', '69', '51', '1478,1479,1480,1481,1482,1483,1484,1485,1486,1487,1488,1489,1490,1491,1492,1493,1494,1495,1496', '6', '3', '2', '58', '', 94, '2023-08-03 17:48:25', '2023-08-03 17:48:25'),
(46, 'Law & Order: Special Victims Unit (1999)', 'In the criminal justice system, sexually-based offenses are considered especially heinous. In New York City, the dedicated detectives who investigate these vicious felonies are members of an elite squad known as the Special Victims Unit. These are their stories.', 'draf', '23,54,56,57,58,59,63,65,66,67', '67', '42', '1462,1774,1775,1776', '24', '11', '2', '49', '', 100, '2023-08-04 08:28:29', '2023-08-04 08:34:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `reset_token` varchar(100) NOT NULL,
  `reset_id` varchar(100) NOT NULL,
  `logo_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`, `email`, `no_wa`, `reset_token`, `reset_id`, `logo_user`) VALUES
(4, 'Rifki Maulana', 'admin', '$2y$10$Aysw4aF5zmcUTnH94qISZeWbJQP/HMT2B.Ygf5baUpIC0fVEQ7Fxa', 'user.png', 'administrator', 'rifkkimaulana@gmail.com', '083130649979', '', 'c9900301-681e-49cc-be74-0488d27396dc', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_view`
--

CREATE TABLE `tb_view` (
  `id` int(11) NOT NULL,
  `tmdb_id` int(11) NOT NULL,
  `jumlah_lihat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `sesi_waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_view`
--

INSERT INTO `tb_view` (`id`, `tmdb_id`, `jumlah_lihat`, `tanggal`, `user_agent`, `sesi_waktu`) VALUES
(1, 1, 1, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(2, 0, 2, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(3, 36, 120, '2023-08-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(4, 54, 81, '2023-08-03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(5, 62, 45, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(6, 59, 15, '2023-08-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(7, 60, 1, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(8, 47, 37, '2023-08-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(9, 23, 246, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(10, 51, 3, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(11, 37, 31, '2023-08-03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(12, 53, 67, '2023-08-03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(13, 57, 17, '2023-08-01', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Mobile/15E148 Safari/604.1', '00:36:00'),
(14, 49, 6, '2023-08-02', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Mobile/15E148 Safari/604.1', '00:36:00'),
(15, 50, 5, '2023-08-04', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Mobile/15E148 Safari/604.1', '00:36:00'),
(16, 48, 32, '2023-08-02', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Mobile/15E148 Safari/604.1', '00:36:00'),
(17, 91, 8, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(18, 92, 14, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(19, 93, 10, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(20, 52, 2, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(21, 55, 3, '2023-08-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(22, 56, 1, '2023-08-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(23, 58, 1, '2023-08-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(24, 67, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(25, 63, 16, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(26, 90, 222, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(27, 64, 3, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(28, 82, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(29, 94, 59, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(30, 65, 5, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(31, 66, 3, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(32, 88, 5, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(33, 89, 3, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(34, 85, 3, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(35, 78, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(36, 87, 4, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(37, 86, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(38, 83, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(39, 80, 1, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(40, 79, 1, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(41, 71, 11, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(42, 95, 5, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(43, 96, 1, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(44, 97, 1, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(45, 98, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(46, 99, 2, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00'),
(47, 100, 9, '2023-08-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.188', '00:36:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_direksi`
--
ALTER TABLE `tb_direksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_episode_tv_show`
--
ALTER TABLE `tb_episode_tv_show`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_film`
--
ALTER TABLE `tb_film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jaringan`
--
ALTER TABLE `tb_jaringan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori_artikel`
--
ALTER TABLE `tb_kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kualitas`
--
ALTER TABLE `tb_kualitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_logs_aplikasi`
--
ALTER TABLE `tb_logs_aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemain`
--
ALTER TABLE `tb_pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_player`
--
ALTER TABLE `tb_player`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tag`
--
ALTER TABLE `tb_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tag_artikel`
--
ALTER TABLE `tb_tag_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tmdb`
--
ALTER TABLE `tb_tmdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tv_show`
--
ALTER TABLE `tb_tv_show`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `tb_view`
--
ALTER TABLE `tb_view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_direksi`
--
ALTER TABLE `tb_direksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_download`
--
ALTER TABLE `tb_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `tb_episode_tv_show`
--
ALTER TABLE `tb_episode_tv_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_film`
--
ALTER TABLE `tb_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `tb_jaringan`
--
ALTER TABLE `tb_jaringan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_artikel`
--
ALTER TABLE `tb_kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_kualitas`
--
ALTER TABLE `tb_kualitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_logs_aplikasi`
--
ALTER TABLE `tb_logs_aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_pemain`
--
ALTER TABLE `tb_pemain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1777;

--
-- AUTO_INCREMENT untuk tabel `tb_player`
--
ALTER TABLE `tb_player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `tb_tag`
--
ALTER TABLE `tb_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tb_tag_artikel`
--
ALTER TABLE `tb_tag_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_tmdb`
--
ALTER TABLE `tb_tmdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tb_tv_show`
--
ALTER TABLE `tb_tv_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_view`
--
ALTER TABLE `tb_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
