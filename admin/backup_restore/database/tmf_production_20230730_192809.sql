CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `kategori_ids` varchar(255) NOT NULL,
  `tag_ids` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_artikel VALUES ('15', 'draf', 'asdf', '<p>asdf</p>', '5', '4', '64c258477d0c9_IMG_0094.JPG', '2023-07-27 13:43:03', '2023-07-27 14:44:40');
INSERT INTO tb_artikel VALUES ('16', 'publik', 'judul test', '<p>test juful</p>', '5,15,16', '3,6', '64c2688e76114_Untitled.png', '2023-07-27 14:52:30', '2023-07-27 15:03:36');
INSERT INTO tb_artikel VALUES ('17', 'draf', 'asddasd', '<p>asdasdasd</p>', '5,15,16', '4', '64c26b1ae6048_Untitled.png', '2023-07-27 15:03:22', '2023-07-27 15:03:22');

CREATE TABLE `tb_direksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_direksi` varchar(255) NOT NULL,
  `slug_direksi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_direksi VALUES ('8', 'KimSaboo', 'kimsaboo');
INSERT INTO tb_direksi VALUES ('11', 'Andy Muschietti', 'andy-muschietti');
INSERT INTO tb_direksi VALUES ('13', 'Michael P. Henning', 'michael-p.-henning');
INSERT INTO tb_direksi VALUES ('14', '', '');
INSERT INTO tb_direksi VALUES ('15', 'Greta Gerwig', 'greta-gerwig');
INSERT INTO tb_direksi VALUES ('16', 'Rob Marshall', 'rob-marshall');
INSERT INTO tb_direksi VALUES ('17', 'Steven Caple Jr.', 'steven-caple-jr.');
INSERT INTO tb_direksi VALUES ('18', 'Kirk DeMicco', 'kirk-demicco');
INSERT INTO tb_direksi VALUES ('19', 'Eiichirō Hasumi', 'eiichir??-hasumi');
INSERT INTO tb_direksi VALUES ('20', 'Oleksandra Ruban', 'oleksandra-ruban');
INSERT INTO tb_direksi VALUES ('21', ' Oleg Malamuzh', '-oleg-malamuzh');
INSERT INTO tb_direksi VALUES ('22', '  Oleg Malamuzh', '--oleg-malamuzh');
INSERT INTO tb_direksi VALUES ('23', 'Tomek Baginski', 'tomek-baginski');
INSERT INTO tb_direksi VALUES ('24', 'Kensuke Sonomura', 'kensuke-sonomura');
INSERT INTO tb_direksi VALUES ('25', 'Christopher McQuarrie', 'christopher-mcquarrie');
INSERT INTO tb_direksi VALUES ('26', 'Chad Stahelski', 'chad-stahelski');
INSERT INTO tb_direksi VALUES ('27', 'Michael Jelenic', 'michael-jelenic');
INSERT INTO tb_direksi VALUES ('28', ' Aaron Horvath', '-aaron-horvath');
INSERT INTO tb_direksi VALUES ('29', 'Antoni Nykowski', 'antoni-nykowski');
INSERT INTO tb_direksi VALUES ('30', 'Jeff Wamester', 'jeff-wamester');
INSERT INTO tb_direksi VALUES ('31', 'Ethan Spaulding', 'ethan-spaulding');
INSERT INTO tb_direksi VALUES ('32', 'Castille Landon', 'castille-landon');
INSERT INTO tb_direksi VALUES ('33', 'Patrick Wilson', 'patrick-wilson');
INSERT INTO tb_direksi VALUES ('34', 'Terry Bishop', 'terry-bishop');
INSERT INTO tb_direksi VALUES ('35', 'Willard Carroll', 'willard-carroll');
INSERT INTO tb_direksi VALUES ('36', 'Ivan Ivanov-Vano', 'ivan-ivanov-vano');
INSERT INTO tb_direksi VALUES ('37', 'J. Stephen Maunder', 'j.-stephen-maunder');
INSERT INTO tb_direksi VALUES ('38', 'Kim Ki-duk', 'kim-ki-duk');
INSERT INTO tb_direksi VALUES ('39', 'Noriyo Sasaki', 'noriyo-sasaki');
INSERT INTO tb_direksi VALUES ('40', 'Kari Skogland', 'kari-skogland');
INSERT INTO tb_direksi VALUES ('41', 'Jacques Doillon', 'jacques-doillon');
INSERT INTO tb_direksi VALUES ('42', 'Robert Markowitz', 'robert-markowitz');
INSERT INTO tb_direksi VALUES ('43', 'Mel Gibson', 'mel-gibson');
INSERT INTO tb_direksi VALUES ('44', 'Norbert Kückelmann', 'norbert-k??ckelmann');

CREATE TABLE `tb_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_download VALUES ('3', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('4', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('5', '1dssd', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('6', '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('7', '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('8', '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('9', '1', 'ASDF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('10', '321', '312sdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('12', '123', '4234234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('13', '123', '4234234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('14', '3', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('15', '765', '432', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('17', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('27', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('29', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('31', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('32', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('35', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('36', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('37', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('38', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('39', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('40', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('41', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('42', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('43', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('45', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('46', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('47', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('48', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('49', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('52', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('53', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('56', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('57', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('59', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('60', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO tb_download VALUES ('62', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

CREATE TABLE `tb_episode_tv_show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_episode` varchar(200) NOT NULL,
  `slug_episode` text NOT NULL,
  `jumlah_episode` int(11) NOT NULL,
  `tv_show_id` varchar(100) NOT NULL,
  `player_id` varchar(100) NOT NULL,
  `download_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_episode_tv_show VALUES ('6', 'film king the land', 'film-king-the-land', '1', '39', '62', '62', 'draf', '2023-07-30 19:23:17', '2023-07-30 19:23:17');

CREATE TABLE `tb_film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_film VALUES ('9', 'Dr Romantic123', 'Dr Romantic', 'publik', '23,24,25,26', '5', '8', '3', '6', '3', '3', '64bef7d9b8f79_IMG_0094.JPG', '14', '10', '10', '2023-07-25 05:11:49', '2023-07-25 06:17:38');
INSERT INTO tb_film VALUES ('12', 'The Flash', 'When his attempt to save his family inadvertently alters the future, Barry Allen becomes trapped in a reality in which General Zod has returned and there are no Super Heroes to turn to. In order to save the world that he is in and return to the future that he knows, Barry\'s only hope is to race for his life. But will making the ultimate sacrifice be enough to reset the universe?', 'terbitkan', '50,51,52', '31', '11', '10,11,12,13,14,72,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69', '6', '11', '11', '', '21', '20', '20', '2023-07-30 05:42:39', '2023-07-30 05:42:39');
INSERT INTO tb_film VALUES ('13', '', '', '', '53', '32', '12', '73', '11', '12', '11', '', '22', '21', '21', '2023-07-30 05:43:41', '2023-07-30 05:43:41');
INSERT INTO tb_film VALUES ('14', 'The Flash (2023)', 'When his attempt to save his family inadvertently alters the future, Barry Allen becomes trapped in a reality in which General Zod has returned and there are no Super Heroes to turn to. In order to save the world that he is in and return to the future that he knows, Barry\'s only hope is to race for his life. But will making the ultimate sacrifice be enough to reset the universe?', 'draf', '50,51,52', '31', '11', '10,11,12,13,14,74,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69', '6', '11', '11', '', '23', '22', '22', '2023-07-30 05:43:46', '2023-07-30 05:43:46');
INSERT INTO tb_film VALUES ('15', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,', '6', '15,11', '12', '', '0', '23', '23', '2023-07-30 07:23:54', '2023-07-30 07:23:54');
INSERT INTO tb_film VALUES ('16', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '0', '24', '24', '2023-07-30 07:24:07', '2023-07-30 07:24:07');
INSERT INTO tb_film VALUES ('17', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '0', '25', '25', '2023-07-30 07:24:43', '2023-07-30 07:24:43');
INSERT INTO tb_film VALUES ('18', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '0', '26', '26', '2023-07-30 07:27:29', '2023-07-30 07:27:29');
INSERT INTO tb_film VALUES ('19', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '28', '27', '27', '2023-07-30 07:28:42', '2023-07-30 07:28:42');
INSERT INTO tb_film VALUES ('20', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '29', '28', '28', '2023-07-30 07:28:57', '2023-07-30 07:28:57');
INSERT INTO tb_film VALUES ('21', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '30', '29', '29', '2023-07-30 07:30:10', '2023-07-30 07:30:10');
INSERT INTO tb_film VALUES ('22', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '31', '30', '30', '2023-07-30 07:30:38', '2023-07-30 07:30:38');
INSERT INTO tb_film VALUES ('23', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '32', '31', '31', '2023-07-30 07:31:36', '2023-07-30 07:31:36');
INSERT INTO tb_film VALUES ('24', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '33', '32', '32', '2023-07-30 07:32:18', '2023-07-30 07:32:18');
INSERT INTO tb_film VALUES ('25', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '34', '33', '33', '2023-07-30 07:32:38', '2023-07-30 07:32:38');
INSERT INTO tb_film VALUES ('26', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '35', '34', '34', '2023-07-30 07:33:36', '2023-07-30 07:33:36');
INSERT INTO tb_film VALUES ('27', 'Barbie (2023)', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'draf', '57,51,60', '37', '15', '115,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,', '6', '15,16', '12', '', '36', '35', '35', '2023-07-30 07:36:14', '2023-07-30 07:36:14');
INSERT INTO tb_film VALUES ('28', 'The Little Mermaid (2023)', 'The youngest of King Triton’s daughters, and the most defiant, Ariel longs to find out more about the world beyond the sea, and while visiting the surface, falls for the dashing Prince Eric. With mermaids forbidden to interact with humans, Ariel makes a deal with the evil sea witch, Ursula, which gives her a chance to experience life on land, but ultimately places her life – and her father’s crown – in jeopardy.', 'draf', '51,54,60,61', '38,39,40', '16', '450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,400,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,', '6', '11', '12', '', '37', '36', '36', '2023-07-30 07:36:59', '2023-07-30 07:36:59');
INSERT INTO tb_film VALUES ('29', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539', '6', '11', '12', '', '38', '37', '37', '2023-07-30 07:37:23', '2023-07-30 07:37:23');
INSERT INTO tb_film VALUES ('30', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '', '6', '11', '12', '', '39', '38', '38', '2023-07-30 07:38:30', '2023-07-30 07:38:30');
INSERT INTO tb_film VALUES ('31', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '', '6', '11', '12', '', '40', '39', '39', '2023-07-30 07:39:23', '2023-07-30 07:39:23');
INSERT INTO tb_film VALUES ('33', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,504,505,506,507,508,509,510,540,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,541,537,538,539', '6', '11', '12', '', '42', '41', '41', '2023-07-30 07:40:41', '2023-07-30 07:40:41');
INSERT INTO tb_film VALUES ('34', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577', '6', '11', '3', '', '43', '42', '42', '2023-07-30 07:49:54', '2023-07-30 07:49:54');
INSERT INTO tb_film VALUES ('35', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,542,543,544,545,546,547,548,578,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,579,575,576,577', '6', '11', '12', '', '44', '43', '43', '2023-07-30 07:50:25', '2023-07-30 07:50:25');
INSERT INTO tb_film VALUES ('36', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,504,505,506,507,508,509,510,580,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,581,537,538,539', '6', '11', '12', '', '45', '44', '44', '2023-07-30 07:50:35', '2023-07-30 07:50:35');
INSERT INTO tb_film VALUES ('37', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,504,505,506,507,508,509,510,582,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,583,528,529,530,531,532,533,534,535,584,537,538,539', '6', '11', '12', '', '46', '45', '45', '2023-07-30 07:52:56', '2023-07-30 07:52:56');
INSERT INTO tb_film VALUES ('38', 'Transformers: Rise of the Beasts (2023)', 'When a new threat capable of destroying the entire planet emerges, Optimus Prime and the Autobots must team up with a powerful faction known as the Maximals. With the fate of humanity hanging in the balance, humans Noah and Elena will do whatever it takes to help the Transformers as they engage in the ultimate battle to save Earth.', 'draf', '50,51,52', '41', '17', '503,504,505,506,507,508,509,510,585,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,583,528,529,530,531,532,533,534,535,586,537,538,539', '6', '11', '12', '', '47', '46', '46', '2023-07-30 07:53:53', '2023-07-30 07:53:53');
INSERT INTO tb_film VALUES ('39', 'Ruby Gillman, Teenage Kraken (2023)', 'Ruby Gillman, a sweet and awkward high school student, discovers she\'s a direct descendant of the warrior kraken queens. The kraken are sworn to protect the oceans of the world against the vain, power-hungry mermaids. Destined to inherit the throne from her commanding grandmother, Ruby must use her newfound powers to protect those she loves most.', 'draf', '59,54,60,57', '42', '18', '587,588,589,590,510,591,537,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615', '6', '11', '12', '', '48', '47', '47', '2023-07-30 07:55:33', '2023-07-30 07:55:33');
INSERT INTO tb_film VALUES ('40', 'Resident Evil: Death Island (2023)', 'In San Francisco, Jill Valentine is dealing with a zombie outbreak and a new T-Virus, Leon Kennedy is on the trail of a kidnapped DARPA scientist, and Claire Redfield is investigating a monstrous fish that is killing whales in the bay. Joined by Chris Redfield and Rebecca Chambers, they discover the trail of clues from their separate cases all converge on the same location, Alcatraz Island, where a new evil has taken residence and awaits their arrival.', 'draf', '59,50,62', '43', '19', '616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645', '6', '14', '12', '', '49', '48', '48', '2023-07-30 07:56:03', '2023-07-30 07:56:03');
INSERT INTO tb_film VALUES ('41', 'Mavka: The Forest Song (2023)', 'Mavka — a Soul of the Forest and its Warden — faces an impossible choice between love and her duty as guardian to the Heart of the Forest, when she falls in love with a human — the talented young musician Lukas.', 'draf', '23,24,25,26,50,51,52,54,55,57,59,60,61,62', '36', '20,22', '646,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676', '6', '18', '12', '', '50', '49', '49', '2023-07-30 07:56:34', '2023-07-30 07:56:48');
INSERT INTO tb_film VALUES ('42', 'Knights of the Zodiac (2023)', 'When a headstrong street orphan, Seiya, in search of his abducted sister unwittingly taps into hidden powers, he discovers he might be the only person alive who can protect a reincarnated goddess, sent to watch over humanity. Can he let his past go and embrace his destiny to become a Knight of the Zodiac?', 'draf', '60,50,51', '44', '23', '677,678,679,680,681,682,683,684,685,686,687,688,689,690,691', '6', '14,16', '12', '', '51', '50', '50', '2023-07-30 07:57:38', '2023-07-30 07:57:38');
INSERT INTO tb_film VALUES ('43', 'Bad City (2022)', 'Kensuke Sonomura directs the legendary Hitoshi Ozawa in this ultimate V-Cinema actioner.  Kaiko City is plagued with poverty and crime. When a corrupt businessman decides to run for mayor and starts eliminating opponents from the rival mafia, a former police captain serving time for murder is secretly released and put in charge of a special task force to arrest him.', 'draf', '50,63', '36', '24', '692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713', '15', '14', '12', '', '52', '51', '51', '2023-07-30 07:58:00', '2023-07-30 07:58:00');
INSERT INTO tb_film VALUES ('44', 'Mission: Impossible - Dead Reckoning Part One (2023)', 'Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands. With control of the future and the world\'s fate at stake and dark forces from Ethan\'s past closing in, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan must consider that nothing can matter more than his mission—not even the lives of those he cares about most.', 'draf', '50,51,64', '45', '25', '714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,', '6', '11', '12', '', '53', '52', '52', '2023-07-30 07:58:41', '2023-07-30 07:58:41');
INSERT INTO tb_film VALUES ('45', 'John Wick: Chapter 4 (2023)', 'With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'draf', '50,64,63', '46,47', '26', '837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865', '6', '19,16', '12', '', '54', '53', '53', '2023-07-30 08:00:27', '2023-07-30 08:00:27');
INSERT INTO tb_film VALUES ('46', 'Mission: Impossible - Dead Reckoning Part One (2023)', 'Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands. With control of the future and the world\'s fate at stake and dark forces from Ethan\'s past closing in, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan must consider that nothing can matter more than his mission—not even the lives of those he cares about most.', 'terbitkan', '50,51,64', '45', '25', '714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,866,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,', '6', '11', '12', '', '55', '54', '54', '2023-07-30 08:01:23', '2023-07-30 08:01:23');
INSERT INTO tb_film VALUES ('47', 'The Super Mario Bros. Movie (2023)', 'While working underground to fix a water main, Brooklyn plumbers—and brothers—Mario and Luigi are transported down a mysterious pipe and wander into a magical new world. But when the brothers are separated, Mario embarks on an epic quest to find Luigi.', 'publik', '59,54,51,60,57', '48', '27,28', '867,868,869,870,871,872,873,874,875,876,877,878,534,879,880,881,882,883,884,885,886,887,888,889,890,891,892,893,894,895,896,897,898,899,900,901,902', '6', '14,16', '12', '', '56', '55', '55', '2023-07-30 08:03:05', '2023-07-30 08:03:05');
INSERT INTO tb_film VALUES ('48', 'Mr. Car and the Knights Templar (2023)', 'A well-known art historian, treasure hunter and owner of an unusual car stumbles upon a Templar treasure, which is the key to a great power that can upset the balance of good and evil in the world. Supported by friendly scouts, Mr. Car starts a big race against time and a hostile organization, the stake of which is the heritage of knightly orders.', 'draf', '51', '36', '29', '903,904,905,906,907,908,909,910,911,912,913,914,915,916,917,918,919,920,921,922,923,924,925,926,927,928,929,930,931,932,933,934,935,936,937,938,939,940,941,942,943,944,945,946,947,948,949,950', '6', '20,21', '12', '', '57', '56', '56', '2023-07-30 08:03:47', '2023-07-30 08:03:47');
INSERT INTO tb_film VALUES ('49', 'Justice League: Warworld (2023)', 'Until now, the Justice League has been a loose association of superpowered individuals. But when they are swept away to Warworld, a place of unending brutal gladiatorial combat, Batman, Superman, Wonder Woman and the others must somehow unite to form an unbeatable resistance able to lead an entire planet to freedom.', 'draf', '59,50,52', '49', '30', '951,952,953,954,955,956,957,958,959,534,960,961,962,963,964,965,966', '6', '11', '12', '', '58', '57', '57', '2023-07-30 08:04:45', '2023-07-30 08:04:45');
INSERT INTO tb_film VALUES ('50', 'Mortal Kombat Legends: Battle of the Realms (2021)', 'The Earthrealm heroes must journey to the Outworld and fight for the survival of their homeland, invaded by the forces of evil warlord Shao Kahn, in the tournament to end all tournaments: the final Mortal Kombat.', 'draf', '59,50,60', '36', '31', '967,968,969,970,971,972,973,974,975,976,977,960,954,978,979,980,981,982', '16', '11', '12', '', '59', '58', '58', '2023-07-30 08:05:41', '2023-07-30 08:05:41');
INSERT INTO tb_film VALUES ('51', 'After Ever Happy (2022)', 'As a shocking truth about a couple\'s families emerges, the two lovers discover they are not so different from each other. Tessa is no longer the sweet, simple, good girl she was when she met Hardin — any more than he is the cruel, moody boy she fell so hard for.', 'draf', '61,23', '36', '32', '983,984,985,986,987,988,989,990,991,992,993,994,995,996,997,998,999,1000,1001,1002,1003', '15', '11', '12', '', '60', '59', '59', '2023-07-30 08:06:57', '2023-07-30 08:06:57');
INSERT INTO tb_film VALUES ('53', 'Insidious: The Red Door (2023) ', 'To put their demons to rest once and for all, Josh Lambert and a college-aged Dalton Lambert must go deeper into The Further than ever before, facing their family\'s dark past and a host of new and more horrifying terrors that lurk behind the red door.', 'draf', '23,24,25,26,50,51,52,54,55,57,59,60,61,62,63,64,65', '50', '33', '1004,1169,1170,1171,1172,1173,1174,1175,1176,1177,1178,1179,1180,1181,1182,1183,1184,1185,1186,1187,1188,1189,1190,1191,1192,1193,1194,1195,1196,1197,1198,1199,1200', '6', '13,26', '2', '', '62', '61', '61', '2023-07-30 23:22:07', '2023-07-30 23:23:17');

CREATE TABLE `tb_genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_genre` varchar(255) NOT NULL,
  `slug_genre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_genre VALUES ('23', 'Drama', 'drama');
INSERT INTO tb_genre VALUES ('24', 'Komedi', 'komedi');
INSERT INTO tb_genre VALUES ('25', 'Horor', 'horor');
INSERT INTO tb_genre VALUES ('26', 'Mysteri', 'mysteri');
INSERT INTO tb_genre VALUES ('27', 'Arcade', 'arcade');
INSERT INTO tb_genre VALUES ('28', 'Doctor', 'doctor');
INSERT INTO tb_genre VALUES ('39', 'Anime', 'anime');
INSERT INTO tb_genre VALUES ('50', 'Action', 'action');
INSERT INTO tb_genre VALUES ('51', 'Adventure', 'adventure');
INSERT INTO tb_genre VALUES ('52', 'Science Fiction', 'science-fiction');
INSERT INTO tb_genre VALUES ('54', 'Family', 'family');
INSERT INTO tb_genre VALUES ('55', '', '');
INSERT INTO tb_genre VALUES ('56', 'Sci-Fi & Fantasy', 'sci-fi-&-fantasy');
INSERT INTO tb_genre VALUES ('57', 'Comedy', 'comedy');
INSERT INTO tb_genre VALUES ('58', 'Action & Adventure', 'action-&-adventure');
INSERT INTO tb_genre VALUES ('59', 'Animation', 'animation');
INSERT INTO tb_genre VALUES ('60', 'Fantasy', 'fantasy');
INSERT INTO tb_genre VALUES ('61', 'Romance', 'romance');
INSERT INTO tb_genre VALUES ('62', 'Horror', 'horror');
INSERT INTO tb_genre VALUES ('63', 'Crime', 'crime');
INSERT INTO tb_genre VALUES ('64', 'Thriller', 'thriller');
INSERT INTO tb_genre VALUES ('65', 'Mystery', 'mystery');
INSERT INTO tb_genre VALUES ('66', 'Reality', 'reality');
INSERT INTO tb_genre VALUES ('67', 'Kids', 'kids');

CREATE TABLE `tb_jaringan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jaringan` varchar(255) NOT NULL,
  `slug_jaringan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_jaringan VALUES ('2', 'SBS', 'sbs');
INSERT INTO tb_jaringan VALUES ('4', ' 1001TV', '-1001tv');
INSERT INTO tb_jaringan VALUES ('5', 'CBC Television', 'cbc-television');
INSERT INTO tb_jaringan VALUES ('6', 'tvN', 'tvn');
INSERT INTO tb_jaringan VALUES ('7', 'Nippon TV', 'nippon-tv');
INSERT INTO tb_jaringan VALUES ('8', ' MBS', '-mbs');
INSERT INTO tb_jaringan VALUES ('9', ' TBS', '-tbs');
INSERT INTO tb_jaringan VALUES ('10', ' YTV', '-ytv');
INSERT INTO tb_jaringan VALUES ('11', 'Disney+', 'disney+');
INSERT INTO tb_jaringan VALUES ('12', 'Netflix', 'netflix');
INSERT INTO tb_jaringan VALUES ('13', 'CBS', 'cbs');
INSERT INTO tb_jaringan VALUES ('14', ' Peacock', '-peacock');
INSERT INTO tb_jaringan VALUES ('15', 'TF1', 'tf1');
INSERT INTO tb_jaringan VALUES ('16', 'MBS', 'mbs');
INSERT INTO tb_jaringan VALUES ('17', ' CBC', '-cbc');
INSERT INTO tb_jaringan VALUES ('18', ' Tulip Television', '-tulip-television');
INSERT INTO tb_jaringan VALUES ('19', ' SBC', '-sbc');
INSERT INTO tb_jaringan VALUES ('20', ' BSN', '-bsn');
INSERT INTO tb_jaringan VALUES ('21', ' tys', '-tys');
INSERT INTO tb_jaringan VALUES ('22', ' HBC', '-hbc');
INSERT INTO tb_jaringan VALUES ('23', ' RKK Kumamoto Broadcasting', '-rkk-kumamoto-broadcasting');
INSERT INTO tb_jaringan VALUES ('24', ' Nagasaki Culture Telecasting Corporation', '-nagasaki-culture-telecasting-corporation');
INSERT INTO tb_jaringan VALUES ('25', ' i-Television', '-i-television');
INSERT INTO tb_jaringan VALUES ('26', ' SBS TV', '-sbs-tv');
INSERT INTO tb_jaringan VALUES ('27', ' IBC Iwate Broadcasting', '-ibc-iwate-broadcasting');
INSERT INTO tb_jaringan VALUES ('28', ' Broadcasting System of San-in', '-broadcasting-system-of-san-in');
INSERT INTO tb_jaringan VALUES ('29', ' Hokuriku Broadcasting', '-hokuriku-broadcasting');
INSERT INTO tb_jaringan VALUES ('30', ' Oita Broadcasting System', '-oita-broadcasting-system');
INSERT INTO tb_jaringan VALUES ('31', ' TV-U Fukushima', '-tv-u-fukushima');
INSERT INTO tb_jaringan VALUES ('32', ' RSK', '-rsk');
INSERT INTO tb_jaringan VALUES ('33', ' TV-U Yamagata', '-tv-u-yamagata');
INSERT INTO tb_jaringan VALUES ('34', ' Tohoku Broadcasting', '-tohoku-broadcasting');
INSERT INTO tb_jaringan VALUES ('35', ' RKB', '-rkb');
INSERT INTO tb_jaringan VALUES ('36', ' TV Kochi Broadcasting', '-tv-kochi-broadcasting');
INSERT INTO tb_jaringan VALUES ('37', ' Ryukyu Broadcasting', '-ryukyu-broadcasting');
INSERT INTO tb_jaringan VALUES ('38', ' TV Yamanashi', '-tv-yamanashi');
INSERT INTO tb_jaringan VALUES ('39', ' RCC', '-rcc');
INSERT INTO tb_jaringan VALUES ('40', ' MRT Miyazaki Broadcasting', '-mrt-miyazaki-broadcasting');
INSERT INTO tb_jaringan VALUES ('41', ' ATV', '-atv');
INSERT INTO tb_jaringan VALUES ('42', ' MBC South Japan Broadcasting', '-mbc-south-japan-broadcasting');
INSERT INTO tb_jaringan VALUES ('43', 'USA Network', 'usa-network');
INSERT INTO tb_jaringan VALUES ('44', 'ABC', 'abc');
INSERT INTO tb_jaringan VALUES ('45', 'Apple TV+', 'apple-tv+');
INSERT INTO tb_jaringan VALUES ('46', '', '');
INSERT INTO tb_jaringan VALUES ('47', 'Prime Video', 'prime-video');
INSERT INTO tb_jaringan VALUES ('48', 'ITV2', 'itv2');
INSERT INTO tb_jaringan VALUES ('49', 'NBC', 'nbc');
INSERT INTO tb_jaringan VALUES ('50', 'Starz', 'starz');
INSERT INTO tb_jaringan VALUES ('51', 'The CW', 'the-cw');
INSERT INTO tb_jaringan VALUES ('52', 'BBC One', 'bbc-one');
INSERT INTO tb_jaringan VALUES ('53', ' BBC Two', '-bbc-two');
INSERT INTO tb_jaringan VALUES ('54', 'FOX', 'fox');
INSERT INTO tb_jaringan VALUES ('55', ' Netflix', '-netflix');
INSERT INTO tb_jaringan VALUES ('56', ' Comedy Central', '-comedy-central');
INSERT INTO tb_jaringan VALUES ('57', ' Hulu', '-hulu');
INSERT INTO tb_jaringan VALUES ('58', 'JTBC', 'jtbc');

CREATE TABLE `tb_kategori_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) NOT NULL,
  `slug_kategori` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_kategori_artikel VALUES ('5', 'Tanpa Kategori', 'tanpa-kategori');
INSERT INTO tb_kategori_artikel VALUES ('15', 'Pacar', 'pacar');
INSERT INTO tb_kategori_artikel VALUES ('16', 'Sempurna', 'sempurna');
INSERT INTO tb_kategori_artikel VALUES ('17', 'Jenong', 'jenong');
INSERT INTO tb_kategori_artikel VALUES ('18', 'Admin', 'admin');

CREATE TABLE `tb_kualitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kualitas` varchar(255) NOT NULL,
  `slug_kualitas` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_kualitas VALUES ('2', 'HD', 'hd');
INSERT INTO tb_kualitas VALUES ('3', 'FHD', 'fhd');
INSERT INTO tb_kualitas VALUES ('5', 'XHD', 'xhd');
INSERT INTO tb_kualitas VALUES ('12', '', '');

CREATE TABLE `tb_logs_aplikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `tb_negara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_negara` varchar(255) NOT NULL,
  `slug_negara` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_negara VALUES ('3', 'South Korea', 'south-korea');
INSERT INTO tb_negara VALUES ('5', 'Kenya', 'kenya');
INSERT INTO tb_negara VALUES ('11', 'United States of America', 'united-states-of-america');
INSERT INTO tb_negara VALUES ('13', 'Canada', 'canada');
INSERT INTO tb_negara VALUES ('14', 'Japan', 'japan');
INSERT INTO tb_negara VALUES ('15', 'United Kingdom', 'united-kingdom');
INSERT INTO tb_negara VALUES ('16', ' United States of America', '-united-states-of-america');
INSERT INTO tb_negara VALUES ('17', '', '');
INSERT INTO tb_negara VALUES ('18', 'Ukraine', 'ukraine');
INSERT INTO tb_negara VALUES ('19', 'Germany', 'germany');
INSERT INTO tb_negara VALUES ('20', 'Latvia', 'latvia');
INSERT INTO tb_negara VALUES ('21', ' Poland', '-poland');
INSERT INTO tb_negara VALUES ('22', '  United States of America', '--united-states-of-america');
INSERT INTO tb_negara VALUES ('23', '   United States of America', '---united-states-of-america');
INSERT INTO tb_negara VALUES ('24', '    United States of America', '----united-states-of-america');
INSERT INTO tb_negara VALUES ('25', '     United States of America', '-----united-states-of-america');
INSERT INTO tb_negara VALUES ('26', '      United States of America', '------united-states-of-america');
INSERT INTO tb_negara VALUES ('27', 'Poland', 'poland');
INSERT INTO tb_negara VALUES ('28', 'France', 'france');
INSERT INTO tb_negara VALUES ('29', ' Japan', '-japan');
INSERT INTO tb_negara VALUES ('30', ' South Korea', '-south-korea');
INSERT INTO tb_negara VALUES ('31', '  Japan', '--japan');
INSERT INTO tb_negara VALUES ('32', '  South Korea', '--south-korea');
INSERT INTO tb_negara VALUES ('33', 'Spain', 'spain');
INSERT INTO tb_negara VALUES ('34', ' United Kingdom', '-united-kingdom');

CREATE TABLE `tb_pemain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemain` varchar(255) NOT NULL,
  `slug_pemain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1497 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_pemain VALUES ('3', 'Kim Saboo', 'kim-saboo');
INSERT INTO tb_pemain VALUES ('7', 'pemain nyata', 'pemain-nyata');
INSERT INTO tb_pemain VALUES ('10', 'Ezra Miller', 'ezra-miller');
INSERT INTO tb_pemain VALUES ('11', ' Sasha Calle', '-sasha-calle');
INSERT INTO tb_pemain VALUES ('12', ' Michael Keaton', '-michael-keaton');
INSERT INTO tb_pemain VALUES ('13', ' Michael Shannon', '-michael-shannon');
INSERT INTO tb_pemain VALUES ('14', ' Ron Livingston', '-ron-livingston');
INSERT INTO tb_pemain VALUES ('15', ' Maribel Verdú', '-maribel-verd??');
INSERT INTO tb_pemain VALUES ('16', ' Kiersey Clemons', '-kiersey-clemons');
INSERT INTO tb_pemain VALUES ('17', ' Antje Traue', '-antje-traue');
INSERT INTO tb_pemain VALUES ('18', ' Saoirse-Monica Jackson', '-saoirse-monica-jackson');
INSERT INTO tb_pemain VALUES ('19', ' Rudy Mancuso', '-rudy-mancuso');
INSERT INTO tb_pemain VALUES ('20', ' Ed Wade', '-ed-wade');
INSERT INTO tb_pemain VALUES ('21', ' Jeremy Irons', '-jeremy-irons');
INSERT INTO tb_pemain VALUES ('22', ' Temuera Morrison', '-temuera-morrison');
INSERT INTO tb_pemain VALUES ('23', ' Sanjeev Bhaskar', '-sanjeev-bhaskar');
INSERT INTO tb_pemain VALUES ('24', ' Sean Rogers', '-sean-rogers');
INSERT INTO tb_pemain VALUES ('25', ' Kieran Hodgson', '-kieran-hodgson');
INSERT INTO tb_pemain VALUES ('26', ' Luke Brandon Field', '-luke-brandon-field');
INSERT INTO tb_pemain VALUES ('27', ' Ian Loh', '-ian-loh');
INSERT INTO tb_pemain VALUES ('28', ' Karl Collins', '-karl-collins');
INSERT INTO tb_pemain VALUES ('29', ' Nikolaj Coster-Waldau', '-nikolaj-coster-waldau');
INSERT INTO tb_pemain VALUES ('30', ' Poppy Shepherd', '-poppy-shepherd');
INSERT INTO tb_pemain VALUES ('31', ' Nina Barker-Francis', '-nina-barker-francis');
INSERT INTO tb_pemain VALUES ('32', ' Ava Hamada', '-ava-hamada');
INSERT INTO tb_pemain VALUES ('33', ' Maurice Chung', '-maurice-chung');
INSERT INTO tb_pemain VALUES ('34', ' Florence Wright', '-florence-wright');
INSERT INTO tb_pemain VALUES ('35', ' Bastian Antonio Fuentes', '-bastian-antonio-fuentes');
INSERT INTO tb_pemain VALUES ('36', ' Andoni Gracia', '-andoni-gracia');
INSERT INTO tb_pemain VALUES ('37', ' Alex Hank', '-alex-hank');
INSERT INTO tb_pemain VALUES ('38', ' Miki Muschietti', '-miki-muschietti');
INSERT INTO tb_pemain VALUES ('39', ' Rebecca Hiller', '-rebecca-hiller');
INSERT INTO tb_pemain VALUES ('40', ' Rob Hunt', '-rob-hunt');
INSERT INTO tb_pemain VALUES ('41', ' Jonny Stockwell', '-jonny-stockwell');
INSERT INTO tb_pemain VALUES ('42', ' Michael Byrch', '-michael-byrch');
INSERT INTO tb_pemain VALUES ('43', ' Bret Jones', '-bret-jones');
INSERT INTO tb_pemain VALUES ('44', ' Sue Maund', '-sue-maund');
INSERT INTO tb_pemain VALUES ('45', ' Alex Batareanu', '-alex-batareanu');
INSERT INTO tb_pemain VALUES ('46', ' Andrei Nova', '-andrei-nova');
INSERT INTO tb_pemain VALUES ('47', ' Gabriel Constantin', '-gabriel-constantin');
INSERT INTO tb_pemain VALUES ('48', ' Oleg Mirochnikov', '-oleg-mirochnikov');
INSERT INTO tb_pemain VALUES ('49', ' Katia Elizarova', '-katia-elizarova');
INSERT INTO tb_pemain VALUES ('50', ' Denis Khoroshko', '-denis-khoroshko');
INSERT INTO tb_pemain VALUES ('51', ' Zsuzsa Magyar', '-zsuzsa-magyar');
INSERT INTO tb_pemain VALUES ('52', ' Michael Lerman', '-michael-lerman');
INSERT INTO tb_pemain VALUES ('53', ' Rosie Ede', '-rosie-ede');
INSERT INTO tb_pemain VALUES ('54', ' Andy Muschietti', '-andy-muschietti');
INSERT INTO tb_pemain VALUES ('55', ' Ellie Rawnsley', '-ellie-rawnsley');
INSERT INTO tb_pemain VALUES ('56', ' Greg Lockett', '-greg-lockett');
INSERT INTO tb_pemain VALUES ('57', ' Chelsea Leigh Macleod', '-chelsea-leigh-macleod');
INSERT INTO tb_pemain VALUES ('58', ' Leslie Soo', '-leslie-soo');
INSERT INTO tb_pemain VALUES ('59', ' Freya Evans', '-freya-evans');
INSERT INTO tb_pemain VALUES ('60', ' Sue Moore', '-sue-moore');
INSERT INTO tb_pemain VALUES ('61', ' Lynn Farleigh', '-lynn-farleigh');
INSERT INTO tb_pemain VALUES ('62', ' Martin Pemberton', '-martin-pemberton');
INSERT INTO tb_pemain VALUES ('63', ' Sarah Lawn', '-sarah-lawn');
INSERT INTO tb_pemain VALUES ('64', ' David Calvitto', '-david-calvitto');
INSERT INTO tb_pemain VALUES ('65', ' Ben Affleck', '-ben-affleck');
INSERT INTO tb_pemain VALUES ('66', ' Gal Gadot', '-gal-gadot');
INSERT INTO tb_pemain VALUES ('67', ' Nicolas Cage', '-nicolas-cage');
INSERT INTO tb_pemain VALUES ('68', ' George Clooney', '-george-clooney');
INSERT INTO tb_pemain VALUES ('69', ' Jason Momoa', '-jason-momoa');
INSERT INTO tb_pemain VALUES ('70', ' Maribel Verdú', '-maribel-verd??');
INSERT INTO tb_pemain VALUES ('71', ' Maribel Verdú', '-maribel-verd??');
INSERT INTO tb_pemain VALUES ('72', ' Maribel Verdú', '-maribel-verd??');
INSERT INTO tb_pemain VALUES ('73', '', '');
INSERT INTO tb_pemain VALUES ('74', ' Maribel Verdú', '-maribel-verd??');
INSERT INTO tb_pemain VALUES ('75', 'Han Suk-kyu', 'han-suk-kyu');
INSERT INTO tb_pemain VALUES ('76', 'Ahn Hyo-seop', 'ahn-hyo-seop');
INSERT INTO tb_pemain VALUES ('77', 'Jin Kyung', 'jin-kyung');
INSERT INTO tb_pemain VALUES ('78', 'Lee Sung-kyoung', 'lee-sung-kyoung');
INSERT INTO tb_pemain VALUES ('79', 'Kim Joo-heon', 'kim-joo-heon');
INSERT INTO tb_pemain VALUES ('80', 'Im Won-hee', 'im-won-hee');
INSERT INTO tb_pemain VALUES ('81', 'Lee Kyung-young', 'lee-kyung-young');
INSERT INTO tb_pemain VALUES ('82', 'Byun Woo-min', 'byun-woo-min');
INSERT INTO tb_pemain VALUES ('83', 'Kim Min-jae', 'kim-min-jae');
INSERT INTO tb_pemain VALUES ('84', 'So Joo-yeon', 'so-joo-yeon');
INSERT INTO tb_pemain VALUES ('85', 'Shin Dong-wook', 'shin-dong-wook');
INSERT INTO tb_pemain VALUES ('86', 'Yoon Na-moo', 'yoon-na-moo');
INSERT INTO tb_pemain VALUES ('87', 'Lee Sin-young', 'lee-sin-young');
INSERT INTO tb_pemain VALUES ('88', 'Lee Hong-nae', 'lee-hong-nae');
INSERT INTO tb_pemain VALUES ('89', 'Yoon Bo-ra', 'yoon-bo-ra');
INSERT INTO tb_pemain VALUES ('90', 'Jeong Ji-an', 'jeong-ji-an');
INSERT INTO tb_pemain VALUES ('91', 'Ko Sang-ho', 'ko-sang-ho');
INSERT INTO tb_pemain VALUES ('92', 'Amybeth McNulty', 'amybeth-mcnulty');
INSERT INTO tb_pemain VALUES ('93', ' Geraldine James', '-geraldine-james');
INSERT INTO tb_pemain VALUES ('94', ' R. H. Thomson', '-r.-h.-thomson');
INSERT INTO tb_pemain VALUES ('95', ' Lucas Jade Zumann', '-lucas-jade-zumann');
INSERT INTO tb_pemain VALUES ('96', ' Kiawentiio', '-kiawentiio');
INSERT INTO tb_pemain VALUES ('97', 'Gong Yoo', 'gong-yoo');
INSERT INTO tb_pemain VALUES ('98', ' Kim Go-eun', '-kim-go-eun');
INSERT INTO tb_pemain VALUES ('99', ' Lee Dong-wook', '-lee-dong-wook');
INSERT INTO tb_pemain VALUES ('100', ' Yoo In-na', '-yoo-in-na');
INSERT INTO tb_pemain VALUES ('101', ' Yook Sung-jae', '-yook-sung-jae');
INSERT INTO tb_pemain VALUES ('102', ' Lee El', '-lee-el');
INSERT INTO tb_pemain VALUES ('103', ' Kim Seong-gyeom', '-kim-seong-gyeom');
INSERT INTO tb_pemain VALUES ('104', ' Jo Woo-jin', '-jo-woo-jin');
INSERT INTO tb_pemain VALUES ('105', ' Yoon Kyung-ho', '-yoon-kyung-ho');
INSERT INTO tb_pemain VALUES ('106', ' Kim Baek Ri', '-kim-baek-ri');
INSERT INTO tb_pemain VALUES ('107', ' Kim Woo Jin', '-kim-woo-jin');
INSERT INTO tb_pemain VALUES ('108', 'Daiki Yamashita', 'daiki-yamashita');
INSERT INTO tb_pemain VALUES ('109', ' Nobuhiko Okamoto', '-nobuhiko-okamoto');
INSERT INTO tb_pemain VALUES ('110', ' Kenta Miyake', '-kenta-miyake');
INSERT INTO tb_pemain VALUES ('111', ' Ayane Sakura', '-ayane-sakura');
INSERT INTO tb_pemain VALUES ('112', ' Kaito Ishikawa', '-kaito-ishikawa');
INSERT INTO tb_pemain VALUES ('113', ' Yuki Kaji', '-yuki-kaji');
INSERT INTO tb_pemain VALUES ('114', ' Aoi Yuki', '-aoi-yuki');
INSERT INTO tb_pemain VALUES ('115', 'Margot Robbie', 'margot-robbie');
INSERT INTO tb_pemain VALUES ('116', 'Ryan Gosling', 'ryan-gosling');
INSERT INTO tb_pemain VALUES ('117', 'America Ferrera', 'america-ferrera');
INSERT INTO tb_pemain VALUES ('118', 'Kate McKinnon', 'kate-mckinnon');
INSERT INTO tb_pemain VALUES ('119', 'Ariana Greenblatt', 'ariana-greenblatt');
INSERT INTO tb_pemain VALUES ('120', 'Michael Cera', 'michael-cera');
INSERT INTO tb_pemain VALUES ('121', 'Issa Rae', 'issa-rae');
INSERT INTO tb_pemain VALUES ('122', 'Will Ferrell', 'will-ferrell');
INSERT INTO tb_pemain VALUES ('123', 'Rhea Perlman', 'rhea-perlman');
INSERT INTO tb_pemain VALUES ('124', 'Alexandra Shipp', 'alexandra-shipp');
INSERT INTO tb_pemain VALUES ('125', 'Emma Mackey', 'emma-mackey');
INSERT INTO tb_pemain VALUES ('126', 'Hari Nef', 'hari-nef');
INSERT INTO tb_pemain VALUES ('127', 'Sharon Rooney', 'sharon-rooney');
INSERT INTO tb_pemain VALUES ('128', 'Ana Kayne', 'ana-kayne');
INSERT INTO tb_pemain VALUES ('129', 'Ritu Arya', 'ritu-arya');
INSERT INTO tb_pemain VALUES ('130', 'Dua Lipa', 'dua-lipa');
INSERT INTO tb_pemain VALUES ('131', 'Nicola Coughlan', 'nicola-coughlan');
INSERT INTO tb_pemain VALUES ('132', 'Emerald Fennell', 'emerald-fennell');
INSERT INTO tb_pemain VALUES ('133', 'Simu Liu', 'simu-liu');
INSERT INTO tb_pemain VALUES ('134', 'Kingsley Ben-Adir', 'kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('135', 'Ncuti Gatwa', 'ncuti-gatwa');
INSERT INTO tb_pemain VALUES ('136', 'Scott Evans', 'scott-evans');
INSERT INTO tb_pemain VALUES ('137', 'John Cena', 'john-cena');
INSERT INTO tb_pemain VALUES ('138', 'Helen Mirren', 'helen-mirren');
INSERT INTO tb_pemain VALUES ('139', 'Connor Swindells', 'connor-swindells');
INSERT INTO tb_pemain VALUES ('140', 'Jamie Demetriou', 'jamie-demetriou');
INSERT INTO tb_pemain VALUES ('141', 'Andrew Leung', 'andrew-leung');
INSERT INTO tb_pemain VALUES ('142', 'Will Merrick', 'will-merrick');
INSERT INTO tb_pemain VALUES ('143', 'Zheng Xi Yong', 'zheng-xi-yong');
INSERT INTO tb_pemain VALUES ('144', 'Asim Chaudhry', 'asim-chaudhry');
INSERT INTO tb_pemain VALUES ('145', 'Ray Fearon', 'ray-fearon');
INSERT INTO tb_pemain VALUES ('146', 'Erica Ford', 'erica-ford');
INSERT INTO tb_pemain VALUES ('147', 'Hannah Khalique-Brown', 'hannah-khalique-brown');
INSERT INTO tb_pemain VALUES ('148', 'Mette Towley', 'mette-towley');
INSERT INTO tb_pemain VALUES ('149', 'Marisa Abela', 'marisa-abela');
INSERT INTO tb_pemain VALUES ('150', 'Lucy Boynton', 'lucy-boynton');
INSERT INTO tb_pemain VALUES ('151', 'Rob Brydon', 'rob-brydon');
INSERT INTO tb_pemain VALUES ('152', 'Tom Stourton', 'tom-stourton');
INSERT INTO tb_pemain VALUES ('153', 'Chris Taylor', 'chris-taylor');
INSERT INTO tb_pemain VALUES ('154', 'David Mumeni', 'david-mumeni');
INSERT INTO tb_pemain VALUES ('155', 'Olivia Brody', 'olivia-brody');
INSERT INTO tb_pemain VALUES ('156', 'Isla Ashworth', 'isla-ashworth');
INSERT INTO tb_pemain VALUES ('157', 'Eire Farrell', 'eire-farrell');
INSERT INTO tb_pemain VALUES ('158', 'Daisy Duczmal', 'daisy-duczmal');
INSERT INTO tb_pemain VALUES ('159', 'Genvieve Toussaint', 'genvieve-toussaint');
INSERT INTO tb_pemain VALUES ('160', 'Isabella Nightingale', 'isabella-nightingale');
INSERT INTO tb_pemain VALUES ('161', 'Manuela Mora', 'manuela-mora');
INSERT INTO tb_pemain VALUES ('162', 'Aida Sexton', 'aida-sexton');
INSERT INTO tb_pemain VALUES ('163', 'Millie-Rose Crossley', 'millie-rose-crossley');
INSERT INTO tb_pemain VALUES ('164', 'Anvita Nehru', 'anvita-nehru');
INSERT INTO tb_pemain VALUES ('165', 'Kayla-Mai Alvares', 'kayla-mai-alvares');
INSERT INTO tb_pemain VALUES ('166', 'Luke Mullen', 'luke-mullen');
INSERT INTO tb_pemain VALUES ('167', 'Patrick Luwis', 'patrick-luwis');
INSERT INTO tb_pemain VALUES ('168', 'Mac Brandt', 'mac-brandt');
INSERT INTO tb_pemain VALUES ('169', 'Paul Jurewicz', 'paul-jurewicz');
INSERT INTO tb_pemain VALUES ('170', 'Oraldo Austin', 'oraldo-austin');
INSERT INTO tb_pemain VALUES ('171', 'Benjamin Arthur', 'benjamin-arthur');
INSERT INTO tb_pemain VALUES ('172', 'Carlos Jacott', 'carlos-jacott');
INSERT INTO tb_pemain VALUES ('173', 'Adam Ray', 'adam-ray');
INSERT INTO tb_pemain VALUES ('174', 'George Basil', 'george-basil');
INSERT INTO tb_pemain VALUES ('175', 'Ptolemy Slocum', 'ptolemy-slocum');
INSERT INTO tb_pemain VALUES ('176', 'Deb Hiett', 'deb-hiett');
INSERT INTO tb_pemain VALUES ('177', 'James Leon', 'james-leon');
INSERT INTO tb_pemain VALUES ('178', 'Oliver Vaquer', 'oliver-vaquer');
INSERT INTO tb_pemain VALUES ('179', 'Tony Noto', 'tony-noto');
INSERT INTO tb_pemain VALUES ('180', 'Christopher T. Wood', 'christopher-t.-wood');
INSERT INTO tb_pemain VALUES ('181', 'Ann Roth', 'ann-roth');
INSERT INTO tb_pemain VALUES ('182', 'Annie Mumolo', 'annie-mumolo');
INSERT INTO tb_pemain VALUES ('183', 'Elise Gallup', 'elise-gallup');
INSERT INTO tb_pemain VALUES ('184', 'McKenna Roberts', 'mckenna-roberts');
INSERT INTO tb_pemain VALUES ('185', 'Brylee Hsu', 'brylee-hsu');
INSERT INTO tb_pemain VALUES ('186', 'Sasha Milstein', 'sasha-milstein');
INSERT INTO tb_pemain VALUES ('187', 'Lauren Holt', 'lauren-holt');
INSERT INTO tb_pemain VALUES ('188', 'Sterling Jones', 'sterling-jones');
INSERT INTO tb_pemain VALUES ('189', 'Ryan Piers Williams', 'ryan-piers-williams');
INSERT INTO tb_pemain VALUES ('190', 'Jamaal Lewis', 'jamaal-lewis');
INSERT INTO tb_pemain VALUES ('191', 'Kathryn Akin', 'kathryn-akin');
INSERT INTO tb_pemain VALUES ('192', 'Grace Jabbari', 'grace-jabbari');
INSERT INTO tb_pemain VALUES ('193', 'Ira Mandela Siobhan', 'ira-mandela-siobhan');
INSERT INTO tb_pemain VALUES ('194', 'Lisa Spencer', 'lisa-spencer');
INSERT INTO tb_pemain VALUES ('195', 'Naomi Weijand', 'naomi-weijand');
INSERT INTO tb_pemain VALUES ('196', 'Tom Clark', 'tom-clark');
INSERT INTO tb_pemain VALUES ('197', 'Ireanne Abenoja', 'ireanne-abenoja');
INSERT INTO tb_pemain VALUES ('198', 'Davide Albonetti', 'davide-albonetti');
INSERT INTO tb_pemain VALUES ('199', 'Charlotte Anderson', 'charlotte-anderson');
INSERT INTO tb_pemain VALUES ('200', 'Michael Anderson', 'michael-anderson');
INSERT INTO tb_pemain VALUES ('201', 'Rico Bakker', 'rico-bakker');
INSERT INTO tb_pemain VALUES ('202', 'James Bamford', 'james-bamford');
INSERT INTO tb_pemain VALUES ('203', 'William John Banks', 'william-john-banks');
INSERT INTO tb_pemain VALUES ('204', 'Callum Bell', 'callum-bell');
INSERT INTO tb_pemain VALUES ('205', 'Adam Blaug', 'adam-blaug');
INSERT INTO tb_pemain VALUES ('206', 'Mason Boyce', 'mason-boyce');
INSERT INTO tb_pemain VALUES ('207', 'Taylor Bradshaw', 'taylor-bradshaw');
INSERT INTO tb_pemain VALUES ('208', 'Alex Brown', 'alex-brown');
INSERT INTO tb_pemain VALUES ('209', 'Miekaile Browne', 'miekaile-browne');
INSERT INTO tb_pemain VALUES ('210', 'Lewis Calcutt', 'lewis-calcutt');
INSERT INTO tb_pemain VALUES ('211', 'Nikkita Chadha', 'nikkita-chadha');
INSERT INTO tb_pemain VALUES ('212', 'Oliver Chapman', 'oliver-chapman');
INSERT INTO tb_pemain VALUES ('213', 'Megan Charles', 'megan-charles');
INSERT INTO tb_pemain VALUES ('214', 'Callum Clack', 'callum-clack');
INSERT INTO tb_pemain VALUES ('215', 'Danny Coburn', 'danny-coburn');
INSERT INTO tb_pemain VALUES ('216', 'Kat Collings', 'kat-collings');
INSERT INTO tb_pemain VALUES ('217', 'Adam Crossley', 'adam-crossley');
INSERT INTO tb_pemain VALUES ('218', 'Sia Dauda', 'sia-dauda');
INSERT INTO tb_pemain VALUES ('219', 'Gustave Die', 'gustave-die');
INSERT INTO tb_pemain VALUES ('220', 'Grace Durkin', 'grace-durkin');
INSERT INTO tb_pemain VALUES ('221', 'Joelle Dyson', 'joelle-dyson');
INSERT INTO tb_pemain VALUES ('222', 'Lewis Easter', 'lewis-easter');
INSERT INTO tb_pemain VALUES ('223', 'Onyemachi Ejimofor', 'onyemachi-ejimofor');
INSERT INTO tb_pemain VALUES ('224', 'Cameron Everitt', 'cameron-everitt');
INSERT INTO tb_pemain VALUES ('225', 'Luke Field-Wright', 'luke-field-wright');
INSERT INTO tb_pemain VALUES ('226', 'Sasha Flesch', 'sasha-flesch');
INSERT INTO tb_pemain VALUES ('227', 'Adam Fogarty', 'adam-fogarty');
INSERT INTO tb_pemain VALUES ('228', 'Mikey French', 'mikey-french');
INSERT INTO tb_pemain VALUES ('229', 'Anna-Kay Gayle', 'anna-kay-gayle');
INSERT INTO tb_pemain VALUES ('230', 'Charlie Goddard', 'charlie-goddard');
INSERT INTO tb_pemain VALUES ('231', 'Marlie Goddard', 'marlie-goddard');
INSERT INTO tb_pemain VALUES ('232', 'Ellis Harman', 'ellis-harman');
INSERT INTO tb_pemain VALUES ('233', 'Yasmin Harrison', 'yasmin-harrison');
INSERT INTO tb_pemain VALUES ('234', 'Josh Hawkins', 'josh-hawkins');
INSERT INTO tb_pemain VALUES ('235', 'James Healy', 'james-healy');
INSERT INTO tb_pemain VALUES ('236', 'Tim Hodges', 'tim-hodges');
INSERT INTO tb_pemain VALUES ('237', 'Mira Jebari', 'mira-jebari');
INSERT INTO tb_pemain VALUES ('238', 'Beccy Jones', 'beccy-jones');
INSERT INTO tb_pemain VALUES ('239', 'Thomas Kalek', 'thomas-kalek');
INSERT INTO tb_pemain VALUES ('240', 'Lily Laight', 'lily-laight');
INSERT INTO tb_pemain VALUES ('241', 'Maiya Leeke', 'maiya-leeke');
INSERT INTO tb_pemain VALUES ('242', 'Cristian Liberti', 'cristian-liberti');
INSERT INTO tb_pemain VALUES ('243', 'Prodromos Marneros', 'prodromos-marneros');
INSERT INTO tb_pemain VALUES ('244', 'Nahum McLean', 'nahum-mclean');
INSERT INTO tb_pemain VALUES ('245', 'Jordan Melchor', 'jordan-melchor');
INSERT INTO tb_pemain VALUES ('246', 'Ramzan Miah', 'ramzan-miah');
INSERT INTO tb_pemain VALUES ('247', 'Andy Monaghan', 'andy-monaghan');
INSERT INTO tb_pemain VALUES ('248', 'Florivaldo Mossi', 'florivaldo-mossi');
INSERT INTO tb_pemain VALUES ('249', 'Hannah Nazareth', 'hannah-nazareth');
INSERT INTO tb_pemain VALUES ('250', 'Grant Neal', 'grant-neal');
INSERT INTO tb_pemain VALUES ('251', 'Freja Nicole', 'freja-nicole');
INSERT INTO tb_pemain VALUES ('252', 'Shaun Niles', 'shaun-niles');
INSERT INTO tb_pemain VALUES ('253', 'Ella Nonini', 'ella-nonini');
INSERT INTO tb_pemain VALUES ('254', 'Jack William Parry', 'jack-william-parry');
INSERT INTO tb_pemain VALUES ('255', 'Josie Pocock', 'josie-pocock');
INSERT INTO tb_pemain VALUES ('256', 'Barnaby Quarendon', 'barnaby-quarendon');
INSERT INTO tb_pemain VALUES ('257', 'Redmand Rance', 'redmand-rance');
INSERT INTO tb_pemain VALUES ('258', 'Zara Richards', 'zara-richards');
INSERT INTO tb_pemain VALUES ('259', 'Liam Riddick', 'liam-riddick');
INSERT INTO tb_pemain VALUES ('260', 'Alana Rixon', 'alana-rixon');
INSERT INTO tb_pemain VALUES ('261', 'Adam Paul Robertson', 'adam-paul-robertson');
INSERT INTO tb_pemain VALUES ('262', 'Kingdom Sibanda', 'kingdom-sibanda');
INSERT INTO tb_pemain VALUES ('263', 'Sebastian Skov', 'sebastian-skov');
INSERT INTO tb_pemain VALUES ('264', 'Aaron J. Smith', 'aaron-j.-smith');
INSERT INTO tb_pemain VALUES ('265', 'Joshua Smith', 'joshua-smith');
INSERT INTO tb_pemain VALUES ('266', 'Lucia-Rose Sokolowski', 'lucia-rose-sokolowski');
INSERT INTO tb_pemain VALUES ('267', 'Janine Somcio', 'janine-somcio');
INSERT INTO tb_pemain VALUES ('268', 'Callum Sterling', 'callum-sterling');
INSERT INTO tb_pemain VALUES ('269', 'Todd Talbot', 'todd-talbot');
INSERT INTO tb_pemain VALUES ('270', 'Charles Tatman', 'charles-tatman');
INSERT INTO tb_pemain VALUES ('271', 'Grant Thresh', 'grant-thresh');
INSERT INTO tb_pemain VALUES ('272', 'Connor Tidman', 'connor-tidman');
INSERT INTO tb_pemain VALUES ('273', 'Wahchi Vong', 'wahchi-vong');
INSERT INTO tb_pemain VALUES ('274', 'Jerry Wan', 'jerry-wan');
INSERT INTO tb_pemain VALUES ('275', 'Sasha Wareham', 'sasha-wareham');
INSERT INTO tb_pemain VALUES ('276', 'Stan West', 'stan-west');
INSERT INTO tb_pemain VALUES ('277', 'Oliver Wheeler', 'oliver-wheeler');
INSERT INTO tb_pemain VALUES ('278', 'Josh Wild', 'josh-wild');
INSERT INTO tb_pemain VALUES ('279', 'Joe Wolstenholme', 'joe-wolstenholme');
INSERT INTO tb_pemain VALUES ('280', 'Richard Womersley', 'richard-womersley');
INSERT INTO tb_pemain VALUES ('281', 'Ashley Young', 'ashley-young');
INSERT INTO tb_pemain VALUES ('282', 'Alex Sturman', 'alex-sturman');
INSERT INTO tb_pemain VALUES ('283', ' Ryan Gosling', '-ryan-gosling');
INSERT INTO tb_pemain VALUES ('284', ' America Ferrera', '-america-ferrera');
INSERT INTO tb_pemain VALUES ('285', ' Kate McKinnon', '-kate-mckinnon');
INSERT INTO tb_pemain VALUES ('286', ' Ariana Greenblatt', '-ariana-greenblatt');
INSERT INTO tb_pemain VALUES ('287', ' Michael Cera', '-michael-cera');
INSERT INTO tb_pemain VALUES ('288', ' Issa Rae', '-issa-rae');
INSERT INTO tb_pemain VALUES ('289', ' Will Ferrell', '-will-ferrell');
INSERT INTO tb_pemain VALUES ('290', ' Rhea Perlman', '-rhea-perlman');
INSERT INTO tb_pemain VALUES ('291', ' Alexandra Shipp', '-alexandra-shipp');
INSERT INTO tb_pemain VALUES ('292', ' Emma Mackey', '-emma-mackey');
INSERT INTO tb_pemain VALUES ('293', ' Hari Nef', '-hari-nef');
INSERT INTO tb_pemain VALUES ('294', ' Sharon Rooney', '-sharon-rooney');
INSERT INTO tb_pemain VALUES ('295', ' Ana Kayne', '-ana-kayne');
INSERT INTO tb_pemain VALUES ('296', ' Ritu Arya', '-ritu-arya');
INSERT INTO tb_pemain VALUES ('297', ' Dua Lipa', '-dua-lipa');
INSERT INTO tb_pemain VALUES ('298', ' Nicola Coughlan', '-nicola-coughlan');
INSERT INTO tb_pemain VALUES ('299', ' Emerald Fennell', '-emerald-fennell');
INSERT INTO tb_pemain VALUES ('300', ' Simu Liu', '-simu-liu');
INSERT INTO tb_pemain VALUES ('301', ' Kingsley Ben-Adir', '-kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('302', ' Ncuti Gatwa', '-ncuti-gatwa');
INSERT INTO tb_pemain VALUES ('303', ' Scott Evans', '-scott-evans');
INSERT INTO tb_pemain VALUES ('304', ' John Cena', '-john-cena');
INSERT INTO tb_pemain VALUES ('305', ' Helen Mirren', '-helen-mirren');
INSERT INTO tb_pemain VALUES ('306', ' Connor Swindells', '-connor-swindells');
INSERT INTO tb_pemain VALUES ('307', ' Jamie Demetriou', '-jamie-demetriou');
INSERT INTO tb_pemain VALUES ('308', ' Andrew Leung', '-andrew-leung');
INSERT INTO tb_pemain VALUES ('309', ' Will Merrick', '-will-merrick');
INSERT INTO tb_pemain VALUES ('310', ' Zheng Xi Yong', '-zheng-xi-yong');
INSERT INTO tb_pemain VALUES ('311', ' Asim Chaudhry', '-asim-chaudhry');
INSERT INTO tb_pemain VALUES ('312', ' Ray Fearon', '-ray-fearon');
INSERT INTO tb_pemain VALUES ('313', ' Erica Ford', '-erica-ford');
INSERT INTO tb_pemain VALUES ('314', ' Hannah Khalique-Brown', '-hannah-khalique-brown');
INSERT INTO tb_pemain VALUES ('315', ' Mette Towley', '-mette-towley');
INSERT INTO tb_pemain VALUES ('316', ' Marisa Abela', '-marisa-abela');
INSERT INTO tb_pemain VALUES ('317', ' Lucy Boynton', '-lucy-boynton');
INSERT INTO tb_pemain VALUES ('318', ' Rob Brydon', '-rob-brydon');
INSERT INTO tb_pemain VALUES ('319', ' Tom Stourton', '-tom-stourton');
INSERT INTO tb_pemain VALUES ('320', ' Chris Taylor', '-chris-taylor');
INSERT INTO tb_pemain VALUES ('321', ' David Mumeni', '-david-mumeni');
INSERT INTO tb_pemain VALUES ('322', ' Olivia Brody', '-olivia-brody');
INSERT INTO tb_pemain VALUES ('323', ' Isla Ashworth', '-isla-ashworth');
INSERT INTO tb_pemain VALUES ('324', ' Eire Farrell', '-eire-farrell');
INSERT INTO tb_pemain VALUES ('325', ' Daisy Duczmal', '-daisy-duczmal');
INSERT INTO tb_pemain VALUES ('326', ' Genvieve Toussaint', '-genvieve-toussaint');
INSERT INTO tb_pemain VALUES ('327', ' Isabella Nightingale', '-isabella-nightingale');
INSERT INTO tb_pemain VALUES ('328', ' Manuela Mora', '-manuela-mora');
INSERT INTO tb_pemain VALUES ('329', ' Aida Sexton', '-aida-sexton');
INSERT INTO tb_pemain VALUES ('330', ' Millie-Rose Crossley', '-millie-rose-crossley');
INSERT INTO tb_pemain VALUES ('331', ' Anvita Nehru', '-anvita-nehru');
INSERT INTO tb_pemain VALUES ('332', ' Kayla-Mai Alvares', '-kayla-mai-alvares');
INSERT INTO tb_pemain VALUES ('333', ' Luke Mullen', '-luke-mullen');
INSERT INTO tb_pemain VALUES ('334', ' Patrick Luwis', '-patrick-luwis');
INSERT INTO tb_pemain VALUES ('335', ' Mac Brandt', '-mac-brandt');
INSERT INTO tb_pemain VALUES ('336', ' Paul Jurewicz', '-paul-jurewicz');
INSERT INTO tb_pemain VALUES ('337', ' Oraldo Austin', '-oraldo-austin');
INSERT INTO tb_pemain VALUES ('338', ' Benjamin Arthur', '-benjamin-arthur');
INSERT INTO tb_pemain VALUES ('339', ' Carlos Jacott', '-carlos-jacott');
INSERT INTO tb_pemain VALUES ('340', ' Adam Ray', '-adam-ray');
INSERT INTO tb_pemain VALUES ('341', ' George Basil', '-george-basil');
INSERT INTO tb_pemain VALUES ('342', ' Ptolemy Slocum', '-ptolemy-slocum');
INSERT INTO tb_pemain VALUES ('343', ' Deb Hiett', '-deb-hiett');
INSERT INTO tb_pemain VALUES ('344', ' James Leon', '-james-leon');
INSERT INTO tb_pemain VALUES ('345', ' Oliver Vaquer', '-oliver-vaquer');
INSERT INTO tb_pemain VALUES ('346', ' Tony Noto', '-tony-noto');
INSERT INTO tb_pemain VALUES ('347', ' Christopher T. Wood', '-christopher-t.-wood');
INSERT INTO tb_pemain VALUES ('348', ' Ann Roth', '-ann-roth');
INSERT INTO tb_pemain VALUES ('349', ' Annie Mumolo', '-annie-mumolo');
INSERT INTO tb_pemain VALUES ('350', ' Elise Gallup', '-elise-gallup');
INSERT INTO tb_pemain VALUES ('351', ' McKenna Roberts', '-mckenna-roberts');
INSERT INTO tb_pemain VALUES ('352', ' Brylee Hsu', '-brylee-hsu');
INSERT INTO tb_pemain VALUES ('353', ' Sasha Milstein', '-sasha-milstein');
INSERT INTO tb_pemain VALUES ('354', ' Lauren Holt', '-lauren-holt');
INSERT INTO tb_pemain VALUES ('355', ' Sterling Jones', '-sterling-jones');
INSERT INTO tb_pemain VALUES ('356', ' Ryan Piers Williams', '-ryan-piers-williams');
INSERT INTO tb_pemain VALUES ('357', ' Jamaal Lewis', '-jamaal-lewis');
INSERT INTO tb_pemain VALUES ('358', ' Kathryn Akin', '-kathryn-akin');
INSERT INTO tb_pemain VALUES ('359', ' Grace Jabbari', '-grace-jabbari');
INSERT INTO tb_pemain VALUES ('360', ' Ira Mandela Siobhan', '-ira-mandela-siobhan');
INSERT INTO tb_pemain VALUES ('361', ' Lisa Spencer', '-lisa-spencer');
INSERT INTO tb_pemain VALUES ('362', ' Naomi Weijand', '-naomi-weijand');
INSERT INTO tb_pemain VALUES ('363', ' Tom Clark', '-tom-clark');
INSERT INTO tb_pemain VALUES ('364', ' Ireanne Abenoja', '-ireanne-abenoja');
INSERT INTO tb_pemain VALUES ('365', ' Davide Albonetti', '-davide-albonetti');
INSERT INTO tb_pemain VALUES ('366', ' Charlotte Anderson', '-charlotte-anderson');
INSERT INTO tb_pemain VALUES ('367', ' Michael Anderson', '-michael-anderson');
INSERT INTO tb_pemain VALUES ('368', ' Rico Bakker', '-rico-bakker');
INSERT INTO tb_pemain VALUES ('369', ' James Bamford', '-james-bamford');
INSERT INTO tb_pemain VALUES ('370', ' William John Banks', '-william-john-banks');
INSERT INTO tb_pemain VALUES ('371', ' Callum Bell', '-callum-bell');
INSERT INTO tb_pemain VALUES ('372', ' Adam Blaug', '-adam-blaug');
INSERT INTO tb_pemain VALUES ('373', ' Mason Boyce', '-mason-boyce');
INSERT INTO tb_pemain VALUES ('374', ' Taylor Bradshaw', '-taylor-bradshaw');
INSERT INTO tb_pemain VALUES ('375', ' Alex Brown', '-alex-brown');
INSERT INTO tb_pemain VALUES ('376', ' Miekaile Browne', '-miekaile-browne');
INSERT INTO tb_pemain VALUES ('377', ' Lewis Calcutt', '-lewis-calcutt');
INSERT INTO tb_pemain VALUES ('378', ' Nikkita Chadha', '-nikkita-chadha');
INSERT INTO tb_pemain VALUES ('379', ' Oliver Chapman', '-oliver-chapman');
INSERT INTO tb_pemain VALUES ('380', ' Megan Charles', '-megan-charles');
INSERT INTO tb_pemain VALUES ('381', ' Callum Clack', '-callum-clack');
INSERT INTO tb_pemain VALUES ('382', ' Danny Coburn', '-danny-coburn');
INSERT INTO tb_pemain VALUES ('383', ' Kat Collings', '-kat-collings');
INSERT INTO tb_pemain VALUES ('384', ' Adam Crossley', '-adam-crossley');
INSERT INTO tb_pemain VALUES ('385', ' Sia Dauda', '-sia-dauda');
INSERT INTO tb_pemain VALUES ('386', ' Gustave Die', '-gustave-die');
INSERT INTO tb_pemain VALUES ('387', ' Grace Durkin', '-grace-durkin');
INSERT INTO tb_pemain VALUES ('388', ' Joelle Dyson', '-joelle-dyson');
INSERT INTO tb_pemain VALUES ('389', ' Lewis Easter', '-lewis-easter');
INSERT INTO tb_pemain VALUES ('390', ' Onyemachi Ejimofor', '-onyemachi-ejimofor');
INSERT INTO tb_pemain VALUES ('391', ' Cameron Everitt', '-cameron-everitt');
INSERT INTO tb_pemain VALUES ('392', ' Luke Field-Wright', '-luke-field-wright');
INSERT INTO tb_pemain VALUES ('393', ' Sasha Flesch', '-sasha-flesch');
INSERT INTO tb_pemain VALUES ('394', ' Adam Fogarty', '-adam-fogarty');
INSERT INTO tb_pemain VALUES ('395', ' Mikey French', '-mikey-french');
INSERT INTO tb_pemain VALUES ('396', ' Anna-Kay Gayle', '-anna-kay-gayle');
INSERT INTO tb_pemain VALUES ('397', ' Charlie Goddard', '-charlie-goddard');
INSERT INTO tb_pemain VALUES ('398', ' Marlie Goddard', '-marlie-goddard');
INSERT INTO tb_pemain VALUES ('399', ' Ellis Harman', '-ellis-harman');
INSERT INTO tb_pemain VALUES ('400', ' Yasmin Harrison', '-yasmin-harrison');
INSERT INTO tb_pemain VALUES ('401', ' Josh Hawkins', '-josh-hawkins');
INSERT INTO tb_pemain VALUES ('402', ' James Healy', '-james-healy');
INSERT INTO tb_pemain VALUES ('403', ' Tim Hodges', '-tim-hodges');
INSERT INTO tb_pemain VALUES ('404', ' Mira Jebari', '-mira-jebari');
INSERT INTO tb_pemain VALUES ('405', ' Beccy Jones', '-beccy-jones');
INSERT INTO tb_pemain VALUES ('406', ' Thomas Kalek', '-thomas-kalek');
INSERT INTO tb_pemain VALUES ('407', ' Lily Laight', '-lily-laight');
INSERT INTO tb_pemain VALUES ('408', ' Maiya Leeke', '-maiya-leeke');
INSERT INTO tb_pemain VALUES ('409', ' Cristian Liberti', '-cristian-liberti');
INSERT INTO tb_pemain VALUES ('410', ' Prodromos Marneros', '-prodromos-marneros');
INSERT INTO tb_pemain VALUES ('411', ' Nahum McLean', '-nahum-mclean');
INSERT INTO tb_pemain VALUES ('412', ' Jordan Melchor', '-jordan-melchor');
INSERT INTO tb_pemain VALUES ('413', ' Ramzan Miah', '-ramzan-miah');
INSERT INTO tb_pemain VALUES ('414', ' Andy Monaghan', '-andy-monaghan');
INSERT INTO tb_pemain VALUES ('415', ' Florivaldo Mossi', '-florivaldo-mossi');
INSERT INTO tb_pemain VALUES ('416', ' Hannah Nazareth', '-hannah-nazareth');
INSERT INTO tb_pemain VALUES ('417', ' Grant Neal', '-grant-neal');
INSERT INTO tb_pemain VALUES ('418', ' Freja Nicole', '-freja-nicole');
INSERT INTO tb_pemain VALUES ('419', ' Shaun Niles', '-shaun-niles');
INSERT INTO tb_pemain VALUES ('420', ' Ella Nonini', '-ella-nonini');
INSERT INTO tb_pemain VALUES ('421', ' Jack William Parry', '-jack-william-parry');
INSERT INTO tb_pemain VALUES ('422', ' Josie Pocock', '-josie-pocock');
INSERT INTO tb_pemain VALUES ('423', ' Barnaby Quarendon', '-barnaby-quarendon');
INSERT INTO tb_pemain VALUES ('424', ' Redmand Rance', '-redmand-rance');
INSERT INTO tb_pemain VALUES ('425', ' Zara Richards', '-zara-richards');
INSERT INTO tb_pemain VALUES ('426', ' Liam Riddick', '-liam-riddick');
INSERT INTO tb_pemain VALUES ('427', ' Alana Rixon', '-alana-rixon');
INSERT INTO tb_pemain VALUES ('428', ' Adam Paul Robertson', '-adam-paul-robertson');
INSERT INTO tb_pemain VALUES ('429', ' Kingdom Sibanda', '-kingdom-sibanda');
INSERT INTO tb_pemain VALUES ('430', ' Sebastian Skov', '-sebastian-skov');
INSERT INTO tb_pemain VALUES ('431', ' Aaron J. Smith', '-aaron-j.-smith');
INSERT INTO tb_pemain VALUES ('432', ' Joshua Smith', '-joshua-smith');
INSERT INTO tb_pemain VALUES ('433', ' Lucia-Rose Sokolowski', '-lucia-rose-sokolowski');
INSERT INTO tb_pemain VALUES ('434', ' Janine Somcio', '-janine-somcio');
INSERT INTO tb_pemain VALUES ('435', ' Callum Sterling', '-callum-sterling');
INSERT INTO tb_pemain VALUES ('436', ' Todd Talbot', '-todd-talbot');
INSERT INTO tb_pemain VALUES ('437', ' Charles Tatman', '-charles-tatman');
INSERT INTO tb_pemain VALUES ('438', ' Grant Thresh', '-grant-thresh');
INSERT INTO tb_pemain VALUES ('439', ' Connor Tidman', '-connor-tidman');
INSERT INTO tb_pemain VALUES ('440', ' Wahchi Vong', '-wahchi-vong');
INSERT INTO tb_pemain VALUES ('441', ' Jerry Wan', '-jerry-wan');
INSERT INTO tb_pemain VALUES ('442', ' Sasha Wareham', '-sasha-wareham');
INSERT INTO tb_pemain VALUES ('443', ' Stan West', '-stan-west');
INSERT INTO tb_pemain VALUES ('444', ' Oliver Wheeler', '-oliver-wheeler');
INSERT INTO tb_pemain VALUES ('445', ' Josh Wild', '-josh-wild');
INSERT INTO tb_pemain VALUES ('446', ' Joe Wolstenholme', '-joe-wolstenholme');
INSERT INTO tb_pemain VALUES ('447', ' Richard Womersley', '-richard-womersley');
INSERT INTO tb_pemain VALUES ('448', ' Ashley Young', '-ashley-young');
INSERT INTO tb_pemain VALUES ('449', ' Alex Sturman', '-alex-sturman');
INSERT INTO tb_pemain VALUES ('450', 'Halle Bailey', 'halle-bailey');
INSERT INTO tb_pemain VALUES ('451', ' Jonah Hauer-King', '-jonah-hauer-king');
INSERT INTO tb_pemain VALUES ('452', ' Daveed Diggs', '-daveed-diggs');
INSERT INTO tb_pemain VALUES ('453', ' Awkwafina', '-awkwafina');
INSERT INTO tb_pemain VALUES ('454', ' Jacob Tremblay', '-jacob-tremblay');
INSERT INTO tb_pemain VALUES ('455', ' Noma Dumezweni', '-noma-dumezweni');
INSERT INTO tb_pemain VALUES ('456', ' Javier Bardem', '-javier-bardem');
INSERT INTO tb_pemain VALUES ('457', ' Melissa McCarthy', '-melissa-mccarthy');
INSERT INTO tb_pemain VALUES ('458', ' Art Malik', '-art-malik');
INSERT INTO tb_pemain VALUES ('459', ' Jessica Alexander', '-jessica-alexander');
INSERT INTO tb_pemain VALUES ('460', ' Emily Coates', '-emily-coates');
INSERT INTO tb_pemain VALUES ('461', ' Jude Akuwudike', '-jude-akuwudike');
INSERT INTO tb_pemain VALUES ('462', ' Russell Balogh', '-russell-balogh');
INSERT INTO tb_pemain VALUES ('463', ' Adrian Christopher', '-adrian-christopher');
INSERT INTO tb_pemain VALUES ('464', ' Simone Ashley', '-simone-ashley');
INSERT INTO tb_pemain VALUES ('465', ' Martina Laird', '-martina-laird');
INSERT INTO tb_pemain VALUES ('466', ' John Dagleish', '-john-dagleish');
INSERT INTO tb_pemain VALUES ('467', ' Sienna King', '-sienna-king');
INSERT INTO tb_pemain VALUES ('468', ' Karolina Conchet', '-karolina-conchet');
INSERT INTO tb_pemain VALUES ('469', ' Craig Stein', '-craig-stein');
INSERT INTO tb_pemain VALUES ('470', ' Lorena Andrea', '-lorena-andrea');
INSERT INTO tb_pemain VALUES ('471', ' Kajsa Mohammar', '-kajsa-mohammar');
INSERT INTO tb_pemain VALUES ('472', ' Nathalie Sorrell', '-nathalie-sorrell');
INSERT INTO tb_pemain VALUES ('473', ' Jodi Benson', '-jodi-benson');
INSERT INTO tb_pemain VALUES ('474', ' Christopher Fairbank', '-christopher-fairbank');
INSERT INTO tb_pemain VALUES ('475', ' Matthew Carver', '-matthew-carver');
INSERT INTO tb_pemain VALUES ('476', ' Julz West', '-julz-west');
INSERT INTO tb_pemain VALUES ('477', ' Shay Barclay', '-shay-barclay');
INSERT INTO tb_pemain VALUES ('478', ' Arina Li', '-arina-li');
INSERT INTO tb_pemain VALUES ('479', ' Leon Cooke', '-leon-cooke');
INSERT INTO tb_pemain VALUES ('480', ' Tarik Frimpong', '-tarik-frimpong');
INSERT INTO tb_pemain VALUES ('481', ' Chris George', '-chris-george');
INSERT INTO tb_pemain VALUES ('482', ' Erica Stubbs', '-erica-stubbs');
INSERT INTO tb_pemain VALUES ('483', ' Kate Thompson', '-kate-thompson');
INSERT INTO tb_pemain VALUES ('484', ' Jonathan Bishop', '-jonathan-bishop');
INSERT INTO tb_pemain VALUES ('485', ' Aaron Bryan', '-aaron-bryan');
INSERT INTO tb_pemain VALUES ('486', ' Sophie Carmen-Jones', '-sophie-carmen-jones');
INSERT INTO tb_pemain VALUES ('487', ' Jon-Scott Clark', '-jon-scott-clark');
INSERT INTO tb_pemain VALUES ('488', ' Cameron Valentina', '-cameron-valentina');
INSERT INTO tb_pemain VALUES ('489', ' Austyn Farrell', '-austyn-farrell');
INSERT INTO tb_pemain VALUES ('490', ' Cecil Jee', '-cecil-jee');
INSERT INTO tb_pemain VALUES ('491', ' Ben Hukin', '-ben-hukin');
INSERT INTO tb_pemain VALUES ('492', ' Andrew Lyle-Pinnock', '-andrew-lyle-pinnock');
INSERT INTO tb_pemain VALUES ('493', ' Chanel Mian', '-chanel-mian');
INSERT INTO tb_pemain VALUES ('494', ' Ebony Molina', '-ebony-molina');
INSERT INTO tb_pemain VALUES ('495', ' Ian Oswald', '-ian-oswald');
INSERT INTO tb_pemain VALUES ('496', ' Oliver Ravelin', '-oliver-ravelin');
INSERT INTO tb_pemain VALUES ('497', ' Charles Ruhrmund', '-charles-ruhrmund');
INSERT INTO tb_pemain VALUES ('498', ' Nicole Valverde', '-nicole-valverde');
INSERT INTO tb_pemain VALUES ('499', ' Sasha Watson Lobo', '-sasha-watson-lobo');
INSERT INTO tb_pemain VALUES ('500', ' Johnny White', '-johnny-white');
INSERT INTO tb_pemain VALUES ('501', ' Charlotte Wilmott', '-charlotte-wilmott');
INSERT INTO tb_pemain VALUES ('502', ' Bobby Windebank', '-bobby-windebank');
INSERT INTO tb_pemain VALUES ('503', 'Anthony Ramos', 'anthony-ramos');
INSERT INTO tb_pemain VALUES ('504', ' Dominique Fishback', '-dominique-fishback');
INSERT INTO tb_pemain VALUES ('505', ' Peter Cullen', '-peter-cullen');
INSERT INTO tb_pemain VALUES ('506', ' Ron Perlman', '-ron-perlman');
INSERT INTO tb_pemain VALUES ('507', ' Peter Dinklage', '-peter-dinklage');
INSERT INTO tb_pemain VALUES ('508', ' Michelle Yeoh', '-michelle-yeoh');
INSERT INTO tb_pemain VALUES ('509', ' Pete Davidson', '-pete-davidson');
INSERT INTO tb_pemain VALUES ('510', ' Liza Koshy', '-liza-koshy');
INSERT INTO tb_pemain VALUES ('511', ' Cristo Fernández', '-cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('512', ' Luna Lauren Velez', '-luna-lauren-velez');
INSERT INTO tb_pemain VALUES ('513', ' Dean Scott Vazquez', '-dean-scott-vazquez');
INSERT INTO tb_pemain VALUES ('514', ' Tobe Nwigwe', '-tobe-nwigwe');
INSERT INTO tb_pemain VALUES ('515', ' Sarah Stiles', '-sarah-stiles');
INSERT INTO tb_pemain VALUES ('516', ' Leni Parker', '-leni-parker');
INSERT INTO tb_pemain VALUES ('517', ' Frank Marrs', '-frank-marrs');
INSERT INTO tb_pemain VALUES ('518', ' Aidan Devine', '-aidan-devine');
INSERT INTO tb_pemain VALUES ('519', ' Kerwin Jackson', '-kerwin-jackson');
INSERT INTO tb_pemain VALUES ('520', ' Mike Chute', '-mike-chute');
INSERT INTO tb_pemain VALUES ('521', ' Tyler Hall', '-tyler-hall');
INSERT INTO tb_pemain VALUES ('522', ' Sean Tucker', '-sean-tucker');
INSERT INTO tb_pemain VALUES ('523', ' Jay Farrar', '-jay-farrar');
INSERT INTO tb_pemain VALUES ('524', ' Lucas Huarancca', '-lucas-huarancca');
INSERT INTO tb_pemain VALUES ('525', ' Amiel Cayo', '-amiel-cayo');
INSERT INTO tb_pemain VALUES ('526', ' Santusa Cutipa', '-santusa-cutipa');
INSERT INTO tb_pemain VALUES ('527', ' Yesenia Inquillay', '-yesenia-inquillay');
INSERT INTO tb_pemain VALUES ('528', ' Josue Sallo', '-josue-sallo');
INSERT INTO tb_pemain VALUES ('529', ' Mellissa Alvarez', '-mellissa-alvarez');
INSERT INTO tb_pemain VALUES ('530', ' Gloria Cusi', '-gloria-cusi');
INSERT INTO tb_pemain VALUES ('531', ' Michael Kelly', '-michael-kelly');
INSERT INTO tb_pemain VALUES ('532', ' Jason D. Avalos', '-jason-d.-avalos');
INSERT INTO tb_pemain VALUES ('533', ' Lesley Stahl', '-lesley-stahl');
INSERT INTO tb_pemain VALUES ('534', ' John DiMaggio', '-john-dimaggio');
INSERT INTO tb_pemain VALUES ('535', ' David Sobolov', '-david-sobolov');
INSERT INTO tb_pemain VALUES ('536', ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('537', ' Colman Domingo', '-colman-domingo');
INSERT INTO tb_pemain VALUES ('538', ' Tongayi Chirisa', '-tongayi-chirisa');
INSERT INTO tb_pemain VALUES ('539', ' Luke Jones', '-luke-jones');
INSERT INTO tb_pemain VALUES ('540', ' Cristo Fernández', '-cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('541', ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('542', 'Dominique Fishback', 'dominique-fishback');
INSERT INTO tb_pemain VALUES ('543', 'Peter Cullen', 'peter-cullen');
INSERT INTO tb_pemain VALUES ('544', 'Ron Perlman', 'ron-perlman');
INSERT INTO tb_pemain VALUES ('545', 'Peter Dinklage', 'peter-dinklage');
INSERT INTO tb_pemain VALUES ('546', 'Michelle Yeoh', 'michelle-yeoh');
INSERT INTO tb_pemain VALUES ('547', 'Pete Davidson', 'pete-davidson');
INSERT INTO tb_pemain VALUES ('548', 'Liza Koshy', 'liza-koshy');
INSERT INTO tb_pemain VALUES ('549', 'Cristo Fernández', 'cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('550', 'Luna Lauren Velez', 'luna-lauren-velez');
INSERT INTO tb_pemain VALUES ('551', 'Dean Scott Vazquez', 'dean-scott-vazquez');
INSERT INTO tb_pemain VALUES ('552', 'Tobe Nwigwe', 'tobe-nwigwe');
INSERT INTO tb_pemain VALUES ('553', 'Sarah Stiles', 'sarah-stiles');
INSERT INTO tb_pemain VALUES ('554', 'Leni Parker', 'leni-parker');
INSERT INTO tb_pemain VALUES ('555', 'Frank Marrs', 'frank-marrs');
INSERT INTO tb_pemain VALUES ('556', 'Aidan Devine', 'aidan-devine');
INSERT INTO tb_pemain VALUES ('557', 'Kerwin Jackson', 'kerwin-jackson');
INSERT INTO tb_pemain VALUES ('558', 'Mike Chute', 'mike-chute');
INSERT INTO tb_pemain VALUES ('559', 'Tyler Hall', 'tyler-hall');
INSERT INTO tb_pemain VALUES ('560', 'Sean Tucker', 'sean-tucker');
INSERT INTO tb_pemain VALUES ('561', 'Jay Farrar', 'jay-farrar');
INSERT INTO tb_pemain VALUES ('562', 'Lucas Huarancca', 'lucas-huarancca');
INSERT INTO tb_pemain VALUES ('563', 'Amiel Cayo', 'amiel-cayo');
INSERT INTO tb_pemain VALUES ('564', 'Santusa Cutipa', 'santusa-cutipa');
INSERT INTO tb_pemain VALUES ('565', 'Yesenia Inquillay', 'yesenia-inquillay');
INSERT INTO tb_pemain VALUES ('566', 'Josue Sallo', 'josue-sallo');
INSERT INTO tb_pemain VALUES ('567', 'Mellissa Alvarez', 'mellissa-alvarez');
INSERT INTO tb_pemain VALUES ('568', 'Gloria Cusi', 'gloria-cusi');
INSERT INTO tb_pemain VALUES ('569', 'Michael Kelly', 'michael-kelly');
INSERT INTO tb_pemain VALUES ('570', 'Jason D. Avalos', 'jason-d.-avalos');
INSERT INTO tb_pemain VALUES ('571', 'Lesley Stahl', 'lesley-stahl');
INSERT INTO tb_pemain VALUES ('572', 'John DiMaggio', 'john-dimaggio');
INSERT INTO tb_pemain VALUES ('573', 'David Sobolov', 'david-sobolov');
INSERT INTO tb_pemain VALUES ('574', 'Michaela Jaé Rodriguez', 'michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('575', 'Colman Domingo', 'colman-domingo');
INSERT INTO tb_pemain VALUES ('576', 'Tongayi Chirisa', 'tongayi-chirisa');
INSERT INTO tb_pemain VALUES ('577', 'Luke Jones', 'luke-jones');
INSERT INTO tb_pemain VALUES ('578', 'Cristo Fernández', 'cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('579', 'Michaela Jaé Rodriguez', 'michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('580', ' Cristo Fernández', '-cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('581', ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('582', ' Cristo Fernández', '-cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('583', ' Sumac T\'Ika', '-sumac-t\'ika');
INSERT INTO tb_pemain VALUES ('584', ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('585', ' Cristo Fernández', '-cristo-fern??ndez');
INSERT INTO tb_pemain VALUES ('586', ' Michaela Jaé Rodriguez', '-michaela-ja??-rodriguez');
INSERT INTO tb_pemain VALUES ('587', 'Lana Condor', 'lana-condor');
INSERT INTO tb_pemain VALUES ('588', ' Toni Collette', '-toni-collette');
INSERT INTO tb_pemain VALUES ('589', ' Annie Murphy', '-annie-murphy');
INSERT INTO tb_pemain VALUES ('590', ' Sam Richardson', '-sam-richardson');
INSERT INTO tb_pemain VALUES ('591', ' Will Forte', '-will-forte');
INSERT INTO tb_pemain VALUES ('592', ' Jaboukie Young-White', '-jaboukie-young-white');
INSERT INTO tb_pemain VALUES ('593', ' Blue Chapman', '-blue-chapman');
INSERT INTO tb_pemain VALUES ('594', ' Ramona Young', '-ramona-young');
INSERT INTO tb_pemain VALUES ('595', ' Eduardo Franco', '-eduardo-franco');
INSERT INTO tb_pemain VALUES ('596', ' Jane Fonda', '-jane-fonda');
INSERT INTO tb_pemain VALUES ('597', ' Nicole Byer', '-nicole-byer');
INSERT INTO tb_pemain VALUES ('598', ' Echo Kellum', '-echo-kellum');
INSERT INTO tb_pemain VALUES ('599', ' Brianna Paige Arsement', '-brianna-paige-arsement');
INSERT INTO tb_pemain VALUES ('600', ' Juju Green', '-juju-green');
INSERT INTO tb_pemain VALUES ('601', ' Preston Blaine Arsement', '-preston-blaine-arsement');
INSERT INTO tb_pemain VALUES ('602', ' Jordan Matter', '-jordan-matter');
INSERT INTO tb_pemain VALUES ('603', ' Ricardo Hurtado', '-ricardo-hurtado');
INSERT INTO tb_pemain VALUES ('604', ' Randy Thom', '-randy-thom');
INSERT INTO tb_pemain VALUES ('605', ' Tiffany Wu', '-tiffany-wu');
INSERT INTO tb_pemain VALUES ('606', ' Merk Nguyen', '-merk-nguyen');
INSERT INTO tb_pemain VALUES ('607', ' Sydney Bell', '-sydney-bell');
INSERT INTO tb_pemain VALUES ('608', ' Atticus Shaindlin', '-atticus-shaindlin');
INSERT INTO tb_pemain VALUES ('609', ' Lynnanne Zager', '-lynnanne-zager');
INSERT INTO tb_pemain VALUES ('610', ' Karen Foster', '-karen-foster');
INSERT INTO tb_pemain VALUES ('611', ' Salish Matter', '-salish-matter');
INSERT INTO tb_pemain VALUES ('612', ' Caleb Pierce', '-caleb-pierce');
INSERT INTO tb_pemain VALUES ('613', ' Qalil Ismail', '-qalil-ismail');
INSERT INTO tb_pemain VALUES ('614', ' Suzanne Buirgy', '-suzanne-buirgy');
INSERT INTO tb_pemain VALUES ('615', ' Emma Chamberlain', '-emma-chamberlain');
INSERT INTO tb_pemain VALUES ('616', 'Matthew Mercer', 'matthew-mercer');
INSERT INTO tb_pemain VALUES ('617', ' Kevin Dorman', '-kevin-dorman');
INSERT INTO tb_pemain VALUES ('618', ' Erin Cahill', '-erin-cahill');
INSERT INTO tb_pemain VALUES ('619', ' Nicole Tompkins', '-nicole-tompkins');
INSERT INTO tb_pemain VALUES ('620', ' Stephanie Panisello', '-stephanie-panisello');
INSERT INTO tb_pemain VALUES ('621', ' Salli Saffioti', '-salli-saffioti');
INSERT INTO tb_pemain VALUES ('622', ' Cristina Valenzuela', '-cristina-valenzuela');
INSERT INTO tb_pemain VALUES ('623', ' Daman Mills', '-daman-mills');
INSERT INTO tb_pemain VALUES ('624', ' Frank Todaro', '-frank-todaro');
INSERT INTO tb_pemain VALUES ('625', ' Lucien Dodge', '-lucien-dodge');
INSERT INTO tb_pemain VALUES ('626', ' Isaac Robinson-Smith', '-isaac-robinson-smith');
INSERT INTO tb_pemain VALUES ('627', ' Alejandro Saab', '-alejandro-saab');
INSERT INTO tb_pemain VALUES ('628', ' Bob Carter', '-bob-carter');
INSERT INTO tb_pemain VALUES ('629', ' Bill Butts', '-bill-butts');
INSERT INTO tb_pemain VALUES ('630', ' Ananda Dawn Jacobs', '-ananda-dawn-jacobs');
INSERT INTO tb_pemain VALUES ('631', ' Dawn M. Bennett', '-dawn-m.-bennett');
INSERT INTO tb_pemain VALUES ('632', ' Joe Hernandez', '-joe-hernandez');
INSERT INTO tb_pemain VALUES ('633', ' John Bentley', '-john-bentley');
INSERT INTO tb_pemain VALUES ('634', ' Kenta Nitta', '-kenta-nitta');
INSERT INTO tb_pemain VALUES ('635', ' Keren Louis', '-keren-louis');
INSERT INTO tb_pemain VALUES ('636', ' Kim Gasiciel', '-kim-gasiciel');
INSERT INTO tb_pemain VALUES ('637', ' Masaaki Sasaki', '-masaaki-sasaki');
INSERT INTO tb_pemain VALUES ('638', ' Momotaro Sakae', '-momotaro-sakae');
INSERT INTO tb_pemain VALUES ('639', ' Runa Kitanoe', '-runa-kitanoe');
INSERT INTO tb_pemain VALUES ('640', ' Ryan Colt Levy', '-ryan-colt-levy');
INSERT INTO tb_pemain VALUES ('641', ' Ryuhei Higashiyama', '-ryuhei-higashiyama');
INSERT INTO tb_pemain VALUES ('642', ' Takahiro Yoneoka', '-takahiro-yoneoka');
INSERT INTO tb_pemain VALUES ('643', ' Tiana Camacho', '-tiana-camacho');
INSERT INTO tb_pemain VALUES ('644', ' Zeke Alton', '-zeke-alton');
INSERT INTO tb_pemain VALUES ('645', ' Luis E. Bermudez', '-luis-e.-bermudez');
INSERT INTO tb_pemain VALUES ('646', 'Nataliia Denysenko', 'nataliia-denysenko');
INSERT INTO tb_pemain VALUES ('647', ' Artem Pyvovarov', '-artem-pyvovarov');
INSERT INTO tb_pemain VALUES ('648', ' Nazar Zadniprovskyi', '-nazar-zadniprovskyi');
INSERT INTO tb_pemain VALUES ('649', ' Oleh Skripka', '-oleh-skripka');
INSERT INTO tb_pemain VALUES ('650', ' Olena Kravets', '-olena-kravets');
INSERT INTO tb_pemain VALUES ('651', ' Serhii Prytula', '-serhii-prytula');
INSERT INTO tb_pemain VALUES ('652', ' Oleh Mykhailiuta', '-oleh-mykhailiuta');
INSERT INTO tb_pemain VALUES ('653', ' Nataliia Sumska', '-nataliia-sumska');
INSERT INTO tb_pemain VALUES ('654', ' Julia Sanina', '-julia-sanina');
INSERT INTO tb_pemain VALUES ('655', ' Mykhailo Khoma', '-mykhailo-khoma');
INSERT INTO tb_pemain VALUES ('656', ' Nina Matviienko', '-nina-matviienko');
INSERT INTO tb_pemain VALUES ('657', ' Kateryna Osadcha', '-kateryna-osadcha');
INSERT INTO tb_pemain VALUES ('658', ' Andrii Mostrenko', '-andrii-mostrenko');
INSERT INTO tb_pemain VALUES ('659', ' Khrystyna Soloviy', '-khrystyna-soloviy');
INSERT INTO tb_pemain VALUES ('660', ' Kateryna Kukhar', '-kateryna-kukhar');
INSERT INTO tb_pemain VALUES ('661', ' DakhaBrakha', '-dakhabrakha');
INSERT INTO tb_pemain VALUES ('662', '  Artem Pyvovarov', '--artem-pyvovarov');
INSERT INTO tb_pemain VALUES ('663', '  Nazar Zadniprovskyi', '--nazar-zadniprovskyi');
INSERT INTO tb_pemain VALUES ('664', '  Oleh Skripka', '--oleh-skripka');
INSERT INTO tb_pemain VALUES ('665', '  Olena Kravets', '--olena-kravets');
INSERT INTO tb_pemain VALUES ('666', '  Serhii Prytula', '--serhii-prytula');
INSERT INTO tb_pemain VALUES ('667', '  Oleh Mykhailiuta', '--oleh-mykhailiuta');
INSERT INTO tb_pemain VALUES ('668', '  Nataliia Sumska', '--nataliia-sumska');
INSERT INTO tb_pemain VALUES ('669', '  Julia Sanina', '--julia-sanina');
INSERT INTO tb_pemain VALUES ('670', '  Mykhailo Khoma', '--mykhailo-khoma');
INSERT INTO tb_pemain VALUES ('671', '  Nina Matviienko', '--nina-matviienko');
INSERT INTO tb_pemain VALUES ('672', '  Kateryna Osadcha', '--kateryna-osadcha');
INSERT INTO tb_pemain VALUES ('673', '  Andrii Mostrenko', '--andrii-mostrenko');
INSERT INTO tb_pemain VALUES ('674', '  Khrystyna Soloviy', '--khrystyna-soloviy');
INSERT INTO tb_pemain VALUES ('675', '  Kateryna Kukhar', '--kateryna-kukhar');
INSERT INTO tb_pemain VALUES ('676', '  DakhaBrakha', '--dakhabrakha');
INSERT INTO tb_pemain VALUES ('677', 'Mackenyu', 'mackenyu');
INSERT INTO tb_pemain VALUES ('678', ' Madison Iseman', '-madison-iseman');
INSERT INTO tb_pemain VALUES ('679', ' Diego Tinoco', '-diego-tinoco');
INSERT INTO tb_pemain VALUES ('680', ' Mark Dacascos', '-mark-dacascos');
INSERT INTO tb_pemain VALUES ('681', ' Nick Stahl', '-nick-stahl');
INSERT INTO tb_pemain VALUES ('682', ' Famke Janssen', '-famke-janssen');
INSERT INTO tb_pemain VALUES ('683', ' Sean Bean', '-sean-bean');
INSERT INTO tb_pemain VALUES ('684', ' Caitlin M Hutson', '-caitlin-m-hutson');
INSERT INTO tb_pemain VALUES ('685', ' Katie Moy', '-katie-moy');
INSERT INTO tb_pemain VALUES ('686', ' Kaylan Teague', '-kaylan-teague');
INSERT INTO tb_pemain VALUES ('687', ' Ryusei Iwata', '-ryusei-iwata');
INSERT INTO tb_pemain VALUES ('688', ' T.J. Storm', '-t.j.-storm');
INSERT INTO tb_pemain VALUES ('689', ' David Torok', '-david-torok');
INSERT INTO tb_pemain VALUES ('690', ' Todd Williams', '-todd-williams');
INSERT INTO tb_pemain VALUES ('691', ' Zoltán Durkó', '-zolt??n-durk??');
INSERT INTO tb_pemain VALUES ('692', 'Hitoshi Ozawa', 'hitoshi-ozawa');
INSERT INTO tb_pemain VALUES ('693', ' Mitsu Dan', '-mitsu-dan');
INSERT INTO tb_pemain VALUES ('694', ' Akane Sakanoue', '-akane-sakanoue');
INSERT INTO tb_pemain VALUES ('695', ' Katsuya', '-katsuya');
INSERT INTO tb_pemain VALUES ('696', ' Masanori Mimoto', '-masanori-mimoto');
INSERT INTO tb_pemain VALUES ('697', ' Taro Suwa', '-taro-suwa');
INSERT INTO tb_pemain VALUES ('698', ' Kentarō Shimazu', '-kentar??-shimazu');
INSERT INTO tb_pemain VALUES ('699', ' Koji Kiryu', '-koji-kiryu');
INSERT INTO tb_pemain VALUES ('700', ' Akira Hamada', '-akira-hamada');
INSERT INTO tb_pemain VALUES ('701', ' Arisa Matsunaga', '-arisa-matsunaga');
INSERT INTO tb_pemain VALUES ('702', ' Huh Soo-cheol', '-huh-soo-cheol');
INSERT INTO tb_pemain VALUES ('703', ' Akihiko Kuwata', '-akihiko-kuwata');
INSERT INTO tb_pemain VALUES ('704', ' Hideo Nakano', '-hideo-nakano');
INSERT INTO tb_pemain VALUES ('705', ' Kenji Fukuda', '-kenji-fukuda');
INSERT INTO tb_pemain VALUES ('706', ' Kazuyoshi Ozawa', '-kazuyoshi-ozawa');
INSERT INTO tb_pemain VALUES ('707', ' Daisuke Nagakura', '-daisuke-nagakura');
INSERT INTO tb_pemain VALUES ('708', ' Yoshiyuki Yamaguchi', '-yoshiyuki-yamaguchi');
INSERT INTO tb_pemain VALUES ('709', ' Kazuki Namioka', '-kazuki-namioka');
INSERT INTO tb_pemain VALUES ('710', ' Tak Sakaguchi', '-tak-sakaguchi');
INSERT INTO tb_pemain VALUES ('711', ' TOMOKAZU', '-tomokazu');
INSERT INTO tb_pemain VALUES ('712', ' Lily Franky', '-lily-franky');
INSERT INTO tb_pemain VALUES ('713', ' Rino Katase', '-rino-katase');
INSERT INTO tb_pemain VALUES ('714', 'Tom Cruise', 'tom-cruise');
INSERT INTO tb_pemain VALUES ('715', ' Hayley Atwell', '-hayley-atwell');
INSERT INTO tb_pemain VALUES ('716', ' Ving Rhames', '-ving-rhames');
INSERT INTO tb_pemain VALUES ('717', ' Simon Pegg', '-simon-pegg');
INSERT INTO tb_pemain VALUES ('718', ' Rebecca Ferguson', '-rebecca-ferguson');
INSERT INTO tb_pemain VALUES ('719', ' Vanessa Kirby', '-vanessa-kirby');
INSERT INTO tb_pemain VALUES ('720', ' Esai Morales', '-esai-morales');
INSERT INTO tb_pemain VALUES ('721', ' Pom Klementieff', '-pom-klementieff');
INSERT INTO tb_pemain VALUES ('722', ' Henry Czerny', '-henry-czerny');
INSERT INTO tb_pemain VALUES ('723', ' Shea Whigham', '-shea-whigham');
INSERT INTO tb_pemain VALUES ('724', ' Greg Tarzan Davis', '-greg-tarzan-davis');
INSERT INTO tb_pemain VALUES ('725', ' Frederick Schmidt', '-frederick-schmidt');
INSERT INTO tb_pemain VALUES ('726', ' Mariela Garriga', '-mariela-garriga');
INSERT INTO tb_pemain VALUES ('727', ' Cary Elwes', '-cary-elwes');
INSERT INTO tb_pemain VALUES ('728', ' Charles Parnell', '-charles-parnell');
INSERT INTO tb_pemain VALUES ('729', ' Mark Gatiss', '-mark-gatiss');
INSERT INTO tb_pemain VALUES ('730', ' Indira Varma', '-indira-varma');
INSERT INTO tb_pemain VALUES ('731', ' Rob Delaney', '-rob-delaney');
INSERT INTO tb_pemain VALUES ('732', ' Marcello Walton', '-marcello-walton');
INSERT INTO tb_pemain VALUES ('733', ' Brian Law', '-brian-law');
INSERT INTO tb_pemain VALUES ('734', ' Lincoln Conway', '-lincoln-conway');
INSERT INTO tb_pemain VALUES ('735', ' Alex James-Phelps', '-alex-james-phelps');
INSERT INTO tb_pemain VALUES ('736', ' Marcin Dorociński', '-marcin-doroci??ski');
INSERT INTO tb_pemain VALUES ('737', ' Ivan Ivashkin', '-ivan-ivashkin');
INSERT INTO tb_pemain VALUES ('738', ' Zahari Baharov', '-zahari-baharov');
INSERT INTO tb_pemain VALUES ('739', ' Adrian Bouchet', '-adrian-bouchet');
INSERT INTO tb_pemain VALUES ('740', ' Sam Barrett', '-sam-barrett');
INSERT INTO tb_pemain VALUES ('741', ' Louis Vaughan', '-louis-vaughan');
INSERT INTO tb_pemain VALUES ('742', ' Jean Kartal', '-jean-kartal');
INSERT INTO tb_pemain VALUES ('743', ' Os Leanse', '-os-leanse');
INSERT INTO tb_pemain VALUES ('744', ' Luke Smith', '-luke-smith');
INSERT INTO tb_pemain VALUES ('745', ' Nikolaos Brahimllari', '-nikolaos-brahimllari');
INSERT INTO tb_pemain VALUES ('746', ' Matt Malecki', '-matt-malecki');
INSERT INTO tb_pemain VALUES ('747', ' Damian Rozanek', '-damian-rozanek');
INSERT INTO tb_pemain VALUES ('748', ' Antonio Bustorff', '-antonio-bustorff');
INSERT INTO tb_pemain VALUES ('749', ' Ioachim Ciobanu', '-ioachim-ciobanu');
INSERT INTO tb_pemain VALUES ('750', ' Michael Kosterin', '-michael-kosterin');
INSERT INTO tb_pemain VALUES ('751', ' Sergej Lopouchanski', '-sergej-lopouchanski');
INSERT INTO tb_pemain VALUES ('752', ' Robert Luckay', '-robert-luckay');
INSERT INTO tb_pemain VALUES ('753', ' Jadran Malkovich', '-jadran-malkovich');
INSERT INTO tb_pemain VALUES ('754', ' Mikhail Safronov', '-mikhail-safronov');
INSERT INTO tb_pemain VALUES ('755', ' Christopher Sciueref', '-christopher-sciueref');
INSERT INTO tb_pemain VALUES ('756', ' Andrea Scarduzio', '-andrea-scarduzio');
INSERT INTO tb_pemain VALUES ('757', ' Barnaby Kay', '-barnaby-kay');
INSERT INTO tb_pemain VALUES ('758', ' Gloria Obianyo', '-gloria-obianyo');
INSERT INTO tb_pemain VALUES ('759', ' Alex Brock', '-alex-brock');
INSERT INTO tb_pemain VALUES ('760', ' Kaye Dinauto', '-kaye-dinauto');
INSERT INTO tb_pemain VALUES ('761', ' Dana Blacklake', '-dana-blacklake');
INSERT INTO tb_pemain VALUES ('762', ' Arevinth V Sarma', '-arevinth-v-sarma');
INSERT INTO tb_pemain VALUES ('763', ' Doroteya Toleva', '-doroteya-toleva');
INSERT INTO tb_pemain VALUES ('764', ' Lucia Tong', '-lucia-tong');
INSERT INTO tb_pemain VALUES ('765', ' Hersha Verity', '-hersha-verity');
INSERT INTO tb_pemain VALUES ('766', ' Yennis Cheung', '-yennis-cheung');
INSERT INTO tb_pemain VALUES ('767', ' Laura Vortler', '-laura-vortler');
INSERT INTO tb_pemain VALUES ('768', ' Faycal Attougui', '-faycal-attougui');
INSERT INTO tb_pemain VALUES ('769', ' Gaetano Bruno', '-gaetano-bruno');
INSERT INTO tb_pemain VALUES ('770', ' Marco Sincini', '-marco-sincini');
INSERT INTO tb_pemain VALUES ('771', ' Evita Ciri', '-evita-ciri');
INSERT INTO tb_pemain VALUES ('772', ' Melissa Anna Bartolini', '-melissa-anna-bartolini');
INSERT INTO tb_pemain VALUES ('773', ' John Akanmu', '-john-akanmu');
INSERT INTO tb_pemain VALUES ('774', ' Marco Lascari', '-marco-lascari');
INSERT INTO tb_pemain VALUES ('775', ' Simon Rizzoni', '-simon-rizzoni');
INSERT INTO tb_pemain VALUES ('776', ' Nicolas Wang', '-nicolas-wang');
INSERT INTO tb_pemain VALUES ('777', ' Lee Bridgman', '-lee-bridgman');
INSERT INTO tb_pemain VALUES ('778', ' Daniella Carraturo', '-daniella-carraturo');
INSERT INTO tb_pemain VALUES ('779', ' Katie Collins', '-katie-collins');
INSERT INTO tb_pemain VALUES ('780', ' Joanna Dyce', '-joanna-dyce');
INSERT INTO tb_pemain VALUES ('781', ' Taylor Goodridge', '-taylor-goodridge');
INSERT INTO tb_pemain VALUES ('782', ' Jessica Holland', '-jessica-holland');
INSERT INTO tb_pemain VALUES ('783', ' Philip Hulford', '-philip-hulford');
INSERT INTO tb_pemain VALUES ('784', ' Nicholas Tredrea', '-nicholas-tredrea');
INSERT INTO tb_pemain VALUES ('785', ' Megan Westpfel', '-megan-westpfel');
INSERT INTO tb_pemain VALUES ('786', ' Marc Wesley DeHaney', '-marc-wesley-dehaney');
INSERT INTO tb_pemain VALUES ('787', ' Rocky Taylor', '-rocky-taylor');
INSERT INTO tb_pemain VALUES ('788', '  Hayley Atwell', '--hayley-atwell');
INSERT INTO tb_pemain VALUES ('789', '  Ving Rhames', '--ving-rhames');
INSERT INTO tb_pemain VALUES ('790', '  Simon Pegg', '--simon-pegg');
INSERT INTO tb_pemain VALUES ('791', '  Rebecca Ferguson', '--rebecca-ferguson');
INSERT INTO tb_pemain VALUES ('792', '  Vanessa Kirby', '--vanessa-kirby');
INSERT INTO tb_pemain VALUES ('793', '  Esai Morales', '--esai-morales');
INSERT INTO tb_pemain VALUES ('794', '  Pom Klementieff', '--pom-klementieff');
INSERT INTO tb_pemain VALUES ('795', '  Henry Czerny', '--henry-czerny');
INSERT INTO tb_pemain VALUES ('796', '  Shea Whigham', '--shea-whigham');
INSERT INTO tb_pemain VALUES ('797', '  Greg Tarzan Davis', '--greg-tarzan-davis');
INSERT INTO tb_pemain VALUES ('798', '  Frederick Schmidt', '--frederick-schmidt');
INSERT INTO tb_pemain VALUES ('799', '  Mariela Garriga', '--mariela-garriga');
INSERT INTO tb_pemain VALUES ('800', '  Cary Elwes', '--cary-elwes');
INSERT INTO tb_pemain VALUES ('801', '  Charles Parnell', '--charles-parnell');
INSERT INTO tb_pemain VALUES ('802', '  Mark Gatiss', '--mark-gatiss');
INSERT INTO tb_pemain VALUES ('803', '  Indira Varma', '--indira-varma');
INSERT INTO tb_pemain VALUES ('804', '  Rob Delaney', '--rob-delaney');
INSERT INTO tb_pemain VALUES ('805', '  Marcello Walton', '--marcello-walton');
INSERT INTO tb_pemain VALUES ('806', '  Brian Law', '--brian-law');
INSERT INTO tb_pemain VALUES ('807', '  Lincoln Conway', '--lincoln-conway');
INSERT INTO tb_pemain VALUES ('808', '  Alex James-Phelps', '--alex-james-phelps');
INSERT INTO tb_pemain VALUES ('809', '  Marcin Dorociński', '--marcin-doroci??ski');
INSERT INTO tb_pemain VALUES ('810', '  Ivan Ivashkin', '--ivan-ivashkin');
INSERT INTO tb_pemain VALUES ('811', '  Zahari Baharov', '--zahari-baharov');
INSERT INTO tb_pemain VALUES ('812', '  Adrian Bouchet', '--adrian-bouchet');
INSERT INTO tb_pemain VALUES ('813', '  Sam Barrett', '--sam-barrett');
INSERT INTO tb_pemain VALUES ('814', '  Louis Vaughan', '--louis-vaughan');
INSERT INTO tb_pemain VALUES ('815', '  Jean Kartal', '--jean-kartal');
INSERT INTO tb_pemain VALUES ('816', '  Os Leanse', '--os-leanse');
INSERT INTO tb_pemain VALUES ('817', '  Luke Smith', '--luke-smith');
INSERT INTO tb_pemain VALUES ('818', '  Nikolaos Brahimllari', '--nikolaos-brahimllari');
INSERT INTO tb_pemain VALUES ('819', '  Matt Malecki', '--matt-malecki');
INSERT INTO tb_pemain VALUES ('820', '  Damian Rozanek', '--damian-rozanek');
INSERT INTO tb_pemain VALUES ('821', '  Antonio Bustorff', '--antonio-bustorff');
INSERT INTO tb_pemain VALUES ('822', '  Ioachim Ciobanu', '--ioachim-ciobanu');
INSERT INTO tb_pemain VALUES ('823', '  Michael Kosterin', '--michael-kosterin');
INSERT INTO tb_pemain VALUES ('824', '  Sergej Lopouchanski', '--sergej-lopouchanski');
INSERT INTO tb_pemain VALUES ('825', '  Robert Luckay', '--robert-luckay');
INSERT INTO tb_pemain VALUES ('826', '  Jadran Malkovich', '--jadran-malkovich');
INSERT INTO tb_pemain VALUES ('827', '  Mikhail Safronov', '--mikhail-safronov');
INSERT INTO tb_pemain VALUES ('828', '  Christopher Sciueref', '--christopher-sciueref');
INSERT INTO tb_pemain VALUES ('829', '  Andrea Scarduzio', '--andrea-scarduzio');
INSERT INTO tb_pemain VALUES ('830', '  Barnaby Kay', '--barnaby-kay');
INSERT INTO tb_pemain VALUES ('831', '  Gloria Obianyo', '--gloria-obianyo');
INSERT INTO tb_pemain VALUES ('832', '  Alex Brock', '--alex-brock');
INSERT INTO tb_pemain VALUES ('833', '  Kaye Dinauto', '--kaye-dinauto');
INSERT INTO tb_pemain VALUES ('834', '  Dana Blacklake', '--dana-blacklake');
INSERT INTO tb_pemain VALUES ('835', '  Arevinth V Sarma', '--arevinth-v-sarma');
INSERT INTO tb_pemain VALUES ('836', '  Doroteya Toleva', '--doroteya-toleva');
INSERT INTO tb_pemain VALUES ('837', 'Keanu Reeves', 'keanu-reeves');
INSERT INTO tb_pemain VALUES ('838', ' Donnie Yen', '-donnie-yen');
INSERT INTO tb_pemain VALUES ('839', ' Bill Skarsgård', '-bill-skarsg??rd');
INSERT INTO tb_pemain VALUES ('840', ' Ian McShane', '-ian-mcshane');
INSERT INTO tb_pemain VALUES ('841', ' Laurence Fishburne', '-laurence-fishburne');
INSERT INTO tb_pemain VALUES ('842', ' Lance Reddick', '-lance-reddick');
INSERT INTO tb_pemain VALUES ('843', ' Clancy Brown', '-clancy-brown');
INSERT INTO tb_pemain VALUES ('844', ' Hiroyuki Sanada', '-hiroyuki-sanada');
INSERT INTO tb_pemain VALUES ('845', ' Rina Sawayama', '-rina-sawayama');
INSERT INTO tb_pemain VALUES ('846', ' Scott Adkins', '-scott-adkins');
INSERT INTO tb_pemain VALUES ('847', ' Aimée Kwan', '-aim??e-kwan');
INSERT INTO tb_pemain VALUES ('848', ' Marko Zaror', '-marko-zaror');
INSERT INTO tb_pemain VALUES ('849', ' Natalia Tena', '-natalia-tena');
INSERT INTO tb_pemain VALUES ('850', ' Shamier Anderson', '-shamier-anderson');
INSERT INTO tb_pemain VALUES ('851', ' George Georgiou', '-george-georgiou');
INSERT INTO tb_pemain VALUES ('852', ' Yoshinori Tashiro', '-yoshinori-tashiro');
INSERT INTO tb_pemain VALUES ('853', ' Hiroki Sumi', '-hiroki-sumi');
INSERT INTO tb_pemain VALUES ('854', ' Daiki Suzuki', '-daiki-suzuki');
INSERT INTO tb_pemain VALUES ('855', ' Julia Asuka Riedl', '-julia-asuka-riedl');
INSERT INTO tb_pemain VALUES ('856', ' Milena Rendón', '-milena-rend??n');
INSERT INTO tb_pemain VALUES ('857', ' Ivy Quainoo', '-ivy-quainoo');
INSERT INTO tb_pemain VALUES ('858', ' Irina Trifanov', '-irina-trifanov');
INSERT INTO tb_pemain VALUES ('859', ' Iryna Fedorova', '-iryna-fedorova');
INSERT INTO tb_pemain VALUES ('860', ' Andrej Kaminsky', '-andrej-kaminsky');
INSERT INTO tb_pemain VALUES ('861', ' Sven Marquardt', '-sven-marquardt');
INSERT INTO tb_pemain VALUES ('862', ' Raicho Vasilev', '-raicho-vasilev');
INSERT INTO tb_pemain VALUES ('863', ' Marie Pierra Kakoma', '-marie-pierra-kakoma');
INSERT INTO tb_pemain VALUES ('864', ' Gina Aponte', '-gina-aponte');
INSERT INTO tb_pemain VALUES ('865', ' Christoph Hofmann', '-christoph-hofmann');
INSERT INTO tb_pemain VALUES ('866', ' Marcin Dorociński', '-marcin-doroci??ski');
INSERT INTO tb_pemain VALUES ('867', 'Chris Pratt', 'chris-pratt');
INSERT INTO tb_pemain VALUES ('868', ' Anya Taylor-Joy', '-anya-taylor-joy');
INSERT INTO tb_pemain VALUES ('869', ' Charlie Day', '-charlie-day');
INSERT INTO tb_pemain VALUES ('870', ' Jack Black', '-jack-black');
INSERT INTO tb_pemain VALUES ('871', ' Keegan-Michael Key', '-keegan-michael-key');
INSERT INTO tb_pemain VALUES ('872', ' Seth Rogen', '-seth-rogen');
INSERT INTO tb_pemain VALUES ('873', ' Fred Armisen', '-fred-armisen');
INSERT INTO tb_pemain VALUES ('874', ' Sebastian Maniscalco', '-sebastian-maniscalco');
INSERT INTO tb_pemain VALUES ('875', ' Charles Martinet', '-charles-martinet');
INSERT INTO tb_pemain VALUES ('876', ' Kevin Michael Richardson', '-kevin-michael-richardson');
INSERT INTO tb_pemain VALUES ('877', ' Khary Payton', '-khary-payton');
INSERT INTO tb_pemain VALUES ('878', ' Rino Romano', '-rino-romano');
INSERT INTO tb_pemain VALUES ('879', ' Jessica DiCicco', '-jessica-dicicco');
INSERT INTO tb_pemain VALUES ('880', ' Eric Bauza', '-eric-bauza');
INSERT INTO tb_pemain VALUES ('881', ' Juliet Jelenic', '-juliet-jelenic');
INSERT INTO tb_pemain VALUES ('882', ' Scott Menville', '-scott-menville');
INSERT INTO tb_pemain VALUES ('883', ' Carlos Alazraqui', '-carlos-alazraqui');
INSERT INTO tb_pemain VALUES ('884', ' Jason Broad', '-jason-broad');
INSERT INTO tb_pemain VALUES ('885', ' Ashly Burch', '-ashly-burch');
INSERT INTO tb_pemain VALUES ('886', ' Rachel Butera', '-rachel-butera');
INSERT INTO tb_pemain VALUES ('887', ' Cathy Cavadini', '-cathy-cavadini');
INSERT INTO tb_pemain VALUES ('888', ' Will Collyer', '-will-collyer');
INSERT INTO tb_pemain VALUES ('889', ' Django Craig', '-django-craig');
INSERT INTO tb_pemain VALUES ('890', ' Willow Geer', '-willow-geer');
INSERT INTO tb_pemain VALUES ('891', ' Aaron Hendry', '-aaron-hendry');
INSERT INTO tb_pemain VALUES ('892', ' Andy Hirsch', '-andy-hirsch');
INSERT INTO tb_pemain VALUES ('893', ' Barbara Harris', '-barbara-harris');
INSERT INTO tb_pemain VALUES ('894', ' Phil LaMarr', '-phil-lamarr');
INSERT INTO tb_pemain VALUES ('895', ' Jeremy Maxwell', '-jeremy-maxwell');
INSERT INTO tb_pemain VALUES ('896', ' Daniel Mora', '-daniel-mora');
INSERT INTO tb_pemain VALUES ('897', ' Eric Osmond', '-eric-osmond');
INSERT INTO tb_pemain VALUES ('898', ' Noreen Reardon', '-noreen-reardon');
INSERT INTO tb_pemain VALUES ('899', ' Lee Shorten', '-lee-shorten');
INSERT INTO tb_pemain VALUES ('900', ' Cree Summer', '-cree-summer');
INSERT INTO tb_pemain VALUES ('901', ' Nisa Ward', '-nisa-ward');
INSERT INTO tb_pemain VALUES ('902', ' Nora Wyman', '-nora-wyman');
INSERT INTO tb_pemain VALUES ('903', 'Mateusz Janicki', 'mateusz-janicki');
INSERT INTO tb_pemain VALUES ('904', ' Sandra Drzymalska', '-sandra-drzymalska');
INSERT INTO tb_pemain VALUES ('905', ' Olgierd Blecharz', '-olgierd-blecharz');
INSERT INTO tb_pemain VALUES ('906', ' Piotr Sega', '-piotr-sega');
INSERT INTO tb_pemain VALUES ('907', ' Kalina Kowalczuk', '-kalina-kowalczuk');
INSERT INTO tb_pemain VALUES ('908', ' Jacek Beler', '-jacek-beler');
INSERT INTO tb_pemain VALUES ('909', ' Maria Dębska', '-maria-d??bska');
INSERT INTO tb_pemain VALUES ('910', ' Anna Dymna', '-anna-dymna');
INSERT INTO tb_pemain VALUES ('911', ' Przemysław Bluszcz', '-przemys??aw-bluszcz');
INSERT INTO tb_pemain VALUES ('912', ' Ewa Błaszczyk', '-ewa-b??aszczyk');
INSERT INTO tb_pemain VALUES ('913', ' Adam Ferency', '-adam-ferency');
INSERT INTO tb_pemain VALUES ('914', ' Radosław Rożniecki', '-rados??aw-ro??niecki');
INSERT INTO tb_pemain VALUES ('915', ' Eryk Pratsko', '-eryk-pratsko');
INSERT INTO tb_pemain VALUES ('916', ' Juliusz Godzina', '-juliusz-godzina');
INSERT INTO tb_pemain VALUES ('917', ' Krzysztof Ogonek', '-krzysztof-ogonek');
INSERT INTO tb_pemain VALUES ('918', ' Szymon Kukla', '-szymon-kukla');
INSERT INTO tb_pemain VALUES ('919', ' Mateusz Łasowski', '-mateusz-??asowski');
INSERT INTO tb_pemain VALUES ('920', ' Kajetan Miros', '-kajetan-miros');
INSERT INTO tb_pemain VALUES ('921', ' Magdalena Majtyka', '-magdalena-majtyka');
INSERT INTO tb_pemain VALUES ('922', ' Krzysztof Satała', '-krzysztof-sata??a');
INSERT INTO tb_pemain VALUES ('923', ' Andrzej Szubski', '-andrzej-szubski');
INSERT INTO tb_pemain VALUES ('924', ' Joanna Król', '-joanna-kr??l');
INSERT INTO tb_pemain VALUES ('925', ' Grzegorz Szypka', '-grzegorz-szypka');
INSERT INTO tb_pemain VALUES ('926', ' Anna Rokita', '-anna-rokita');
INSERT INTO tb_pemain VALUES ('927', ' Michał Kasprzak-Komarczewski', '-micha??-kasprzak-komarczewski');
INSERT INTO tb_pemain VALUES ('928', ' Dariusz Maj', '-dariusz-maj');
INSERT INTO tb_pemain VALUES ('929', ' Mateusz Grydlik', '-mateusz-grydlik');
INSERT INTO tb_pemain VALUES ('930', ' Tomasz Augustynowicz', '-tomasz-augustynowicz');
INSERT INTO tb_pemain VALUES ('931', ' Igor Górewicz', '-igor-g??rewicz');
INSERT INTO tb_pemain VALUES ('932', ' Michał Petrow', '-micha??-petrow');
INSERT INTO tb_pemain VALUES ('933', ' Piotr Stefańczuk', '-piotr-stefa??czuk');
INSERT INTO tb_pemain VALUES ('934', ' India Maag', '-india-maag');
INSERT INTO tb_pemain VALUES ('935', ' Aron Jończyk', '-aron-jo??czyk');
INSERT INTO tb_pemain VALUES ('936', ' Łukasz Lewandowski', '-??ukasz-lewandowski');
INSERT INTO tb_pemain VALUES ('937', ' Rafał Meusiak', '-rafa??-meusiak');
INSERT INTO tb_pemain VALUES ('938', ' Mariusz Majuch', '-mariusz-majuch');
INSERT INTO tb_pemain VALUES ('939', ' Mila Majewska', '-mila-majewska');
INSERT INTO tb_pemain VALUES ('940', ' Danuta Burska', '-danuta-burska');
INSERT INTO tb_pemain VALUES ('941', ' Jan Niemczyk', '-jan-niemczyk');
INSERT INTO tb_pemain VALUES ('942', ' Olga Żebrowska', '-olga-??ebrowska');
INSERT INTO tb_pemain VALUES ('943', ' Bożena Kulig-Fiallo', '-bo??ena-kulig-fiallo');
INSERT INTO tb_pemain VALUES ('944', ' Jerzy Kornacki', '-jerzy-kornacki');
INSERT INTO tb_pemain VALUES ('945', ' Agata Sierakiewicz', '-agata-sierakiewicz');
INSERT INTO tb_pemain VALUES ('946', ' Rafał Maj', '-rafa??-maj');
INSERT INTO tb_pemain VALUES ('947', ' Zbigniew Rowiński', '-zbigniew-rowi??ski');
INSERT INTO tb_pemain VALUES ('948', ' Joanna Stępień', '-joanna-st??pie??');
INSERT INTO tb_pemain VALUES ('949', ' Kamil Płocki', '-kamil-p??ocki');
INSERT INTO tb_pemain VALUES ('950', ' Arturs Abramenko', '-arturs-abramenko');
INSERT INTO tb_pemain VALUES ('951', 'Jensen Ackles', 'jensen-ackles');
INSERT INTO tb_pemain VALUES ('952', ' Darren Criss', '-darren-criss');
INSERT INTO tb_pemain VALUES ('953', ' Stana Katic', '-stana-katic');
INSERT INTO tb_pemain VALUES ('954', ' Ike Amadi', '-ike-amadi');
INSERT INTO tb_pemain VALUES ('955', ' Troy Baker', '-troy-baker');
INSERT INTO tb_pemain VALUES ('956', ' Matt Bomer', '-matt-bomer');
INSERT INTO tb_pemain VALUES ('957', ' Roger Cross', '-roger-cross');
INSERT INTO tb_pemain VALUES ('958', ' Brett Dalton', '-brett-dalton');
INSERT INTO tb_pemain VALUES ('959', ' Trevor Devall', '-trevor-devall');
INSERT INTO tb_pemain VALUES ('960', ' Robin Atkin Downes', '-robin-atkin-downes');
INSERT INTO tb_pemain VALUES ('961', ' Frank Grillo', '-frank-grillo');
INSERT INTO tb_pemain VALUES ('962', ' Rachel Kimsey', '-rachel-kimsey');
INSERT INTO tb_pemain VALUES ('963', ' David Lodge', '-david-lodge');
INSERT INTO tb_pemain VALUES ('964', ' Damian O\'Hare', '-damian-o\'hare');
INSERT INTO tb_pemain VALUES ('965', ' Teddy Sears', '-teddy-sears');
INSERT INTO tb_pemain VALUES ('966', ' Kari Wahlgren', '-kari-wahlgren');
INSERT INTO tb_pemain VALUES ('967', 'Jordan Rodrigues', 'jordan-rodrigues');
INSERT INTO tb_pemain VALUES ('968', ' Jennifer Carpenter', '-jennifer-carpenter');
INSERT INTO tb_pemain VALUES ('969', ' Joel McHale', '-joel-mchale');
INSERT INTO tb_pemain VALUES ('970', ' Patrick Seitz', '-patrick-seitz');
INSERT INTO tb_pemain VALUES ('971', ' Dave B. Mitchell', '-dave-b.-mitchell');
INSERT INTO tb_pemain VALUES ('972', ' Bayardo De Murguia', '-bayardo-de-murguia');
INSERT INTO tb_pemain VALUES ('973', ' Fred Tatasciore', '-fred-tatasciore');
INSERT INTO tb_pemain VALUES ('974', ' Matthew Mercer', '-matthew-mercer');
INSERT INTO tb_pemain VALUES ('975', ' Emily O\'Brien', '-emily-o\'brien');
INSERT INTO tb_pemain VALUES ('976', ' Debra Wilson', '-debra-wilson');
INSERT INTO tb_pemain VALUES ('977', ' Artt Butler', '-artt-butler');
INSERT INTO tb_pemain VALUES ('978', ' Grey DeLisle', '-grey-delisle');
INSERT INTO tb_pemain VALUES ('979', ' Matthew Yang King', '-matthew-yang-king');
INSERT INTO tb_pemain VALUES ('980', ' Paul Nakauchi', '-paul-nakauchi');
INSERT INTO tb_pemain VALUES ('981', ' Matthew Lillard', '-matthew-lillard');
INSERT INTO tb_pemain VALUES ('982', ' Kyle Wyatt', '-kyle-wyatt');
INSERT INTO tb_pemain VALUES ('983', 'Josephine Langford', 'josephine-langford');
INSERT INTO tb_pemain VALUES ('984', ' Hero Fiennes Tiffin', '-hero-fiennes-tiffin');
INSERT INTO tb_pemain VALUES ('985', ' Louise Lombard', '-louise-lombard');
INSERT INTO tb_pemain VALUES ('986', ' Chance Perdomo', '-chance-perdomo');
INSERT INTO tb_pemain VALUES ('987', ' Rob Estes', '-rob-estes');
INSERT INTO tb_pemain VALUES ('988', ' Arielle Kebbel', '-arielle-kebbel');
INSERT INTO tb_pemain VALUES ('989', ' Stephen Moyer', '-stephen-moyer');
INSERT INTO tb_pemain VALUES ('990', ' Mira Sorvino', '-mira-sorvino');
INSERT INTO tb_pemain VALUES ('991', ' Frances Turner', '-frances-turner');
INSERT INTO tb_pemain VALUES ('992', ' Kiana Madeira', '-kiana-madeira');
INSERT INTO tb_pemain VALUES ('993', ' Carter Jenkins', '-carter-jenkins');
INSERT INTO tb_pemain VALUES ('994', ' Atanas Srebrev', '-atanas-srebrev');
INSERT INTO tb_pemain VALUES ('995', ' Anton Kottas', '-anton-kottas');
INSERT INTO tb_pemain VALUES ('996', ' Emmenuel Todorov', '-emmenuel-todorov');
INSERT INTO tb_pemain VALUES ('997', ' Velizar Nikolaev Biney', '-velizar-nikolaev-biney');
INSERT INTO tb_pemain VALUES ('998', ' Franklin Kendrick', '-franklin-kendrick');
INSERT INTO tb_pemain VALUES ('999', ' Ana Ivanova', '-ana-ivanova');
INSERT INTO tb_pemain VALUES ('1000', ' Tosin Thompson', '-tosin-thompson');
INSERT INTO tb_pemain VALUES ('1001', ' Jordan Peters', '-jordan-peters');
INSERT INTO tb_pemain VALUES ('1002', ' Jack Bandeira', '-jack-bandeira');
INSERT INTO tb_pemain VALUES ('1003', ' Ryan Ol', '-ryan-ol');
INSERT INTO tb_pemain VALUES ('1004', 'Ty Simpkins', 'ty-simpkins');
INSERT INTO tb_pemain VALUES ('1005', ' Patrick Wilson', '-patrick-wilson');
INSERT INTO tb_pemain VALUES ('1006', ' Rose Byrne', '-rose-byrne');
INSERT INTO tb_pemain VALUES ('1007', ' Lin Shaye', '-lin-shaye');
INSERT INTO tb_pemain VALUES ('1008', ' Sinclair Daniel', '-sinclair-daniel');
INSERT INTO tb_pemain VALUES ('1009', ' Hiam Abbass', '-hiam-abbass');
INSERT INTO tb_pemain VALUES ('1010', ' Andrew Astor', '-andrew-astor');
INSERT INTO tb_pemain VALUES ('1011', ' Juliana Davies', '-juliana-davies');
INSERT INTO tb_pemain VALUES ('1012', ' Steve Coulter', '-steve-coulter');
INSERT INTO tb_pemain VALUES ('1013', ' Peter Dager', '-peter-dager');
INSERT INTO tb_pemain VALUES ('1014', ' Joseph Bishara', '-joseph-bishara');
INSERT INTO tb_pemain VALUES ('1015', ' Angus Sampson', '-angus-sampson');
INSERT INTO tb_pemain VALUES ('1016', ' Leigh Whannell', '-leigh-whannell');
INSERT INTO tb_pemain VALUES ('1017', ' Justin Sturgis', '-justin-sturgis');
INSERT INTO tb_pemain VALUES ('1018', ' David Call', '-david-call');
INSERT INTO tb_pemain VALUES ('1019', ' Stephen Gray', '-stephen-gray');
INSERT INTO tb_pemain VALUES ('1020', ' Robin S. Walker', '-robin-s.-walker');
INSERT INTO tb_pemain VALUES ('1021', ' Bridget Kim', '-bridget-kim');
INSERT INTO tb_pemain VALUES ('1022', ' Logan Wilson', '-logan-wilson');
INSERT INTO tb_pemain VALUES ('1023', ' Kasjan Wilson', '-kasjan-wilson');
INSERT INTO tb_pemain VALUES ('1024', ' Mary Looram', '-mary-looram');
INSERT INTO tb_pemain VALUES ('1025', ' Adrian Acosta', '-adrian-acosta');
INSERT INTO tb_pemain VALUES ('1026', ' AJ Dyer', '-aj-dyer');
INSERT INTO tb_pemain VALUES ('1027', ' Kalin Wilson', '-kalin-wilson');
INSERT INTO tb_pemain VALUES ('1028', ' E. Roger Mitchell', '-e.-roger-mitchell');
INSERT INTO tb_pemain VALUES ('1029', ' Dagmara Domińczyk', '-dagmara-domi??czyk');
INSERT INTO tb_pemain VALUES ('1030', ' Tom Toland', '-tom-toland');
INSERT INTO tb_pemain VALUES ('1031', ' Elaine Apruzzese', '-elaine-apruzzese');
INSERT INTO tb_pemain VALUES ('1032', ' Suki Úna Rae', '-suki-??na-rae');
INSERT INTO tb_pemain VALUES ('1033', ' Desi Ramos', '-desi-ramos');
INSERT INTO tb_pemain VALUES ('1034', ' Victorya Danylko-Petrovskaya', '-victorya-danylko-petrovskaya');
INSERT INTO tb_pemain VALUES ('1035', ' Tom Fitzpatrick', '-tom-fitzpatrick');
INSERT INTO tb_pemain VALUES ('1036', ' Barbara Hershey', '-barbara-hershey');
INSERT INTO tb_pemain VALUES ('1037', '  Patrick Wilson', '--patrick-wilson');
INSERT INTO tb_pemain VALUES ('1038', '  Rose Byrne', '--rose-byrne');
INSERT INTO tb_pemain VALUES ('1039', '  Lin Shaye', '--lin-shaye');
INSERT INTO tb_pemain VALUES ('1040', '  Sinclair Daniel', '--sinclair-daniel');
INSERT INTO tb_pemain VALUES ('1041', '  Hiam Abbass', '--hiam-abbass');
INSERT INTO tb_pemain VALUES ('1042', '  Andrew Astor', '--andrew-astor');
INSERT INTO tb_pemain VALUES ('1043', '  Juliana Davies', '--juliana-davies');
INSERT INTO tb_pemain VALUES ('1044', '  Steve Coulter', '--steve-coulter');
INSERT INTO tb_pemain VALUES ('1045', '  Peter Dager', '--peter-dager');
INSERT INTO tb_pemain VALUES ('1046', '  Joseph Bishara', '--joseph-bishara');
INSERT INTO tb_pemain VALUES ('1047', '  Angus Sampson', '--angus-sampson');
INSERT INTO tb_pemain VALUES ('1048', '  Leigh Whannell', '--leigh-whannell');
INSERT INTO tb_pemain VALUES ('1049', '  Justin Sturgis', '--justin-sturgis');
INSERT INTO tb_pemain VALUES ('1050', '  David Call', '--david-call');
INSERT INTO tb_pemain VALUES ('1051', '  Stephen Gray', '--stephen-gray');
INSERT INTO tb_pemain VALUES ('1052', '  Robin S. Walker', '--robin-s.-walker');
INSERT INTO tb_pemain VALUES ('1053', '  Bridget Kim', '--bridget-kim');
INSERT INTO tb_pemain VALUES ('1054', '  Logan Wilson', '--logan-wilson');
INSERT INTO tb_pemain VALUES ('1055', '  Kasjan Wilson', '--kasjan-wilson');
INSERT INTO tb_pemain VALUES ('1056', '  Mary Looram', '--mary-looram');
INSERT INTO tb_pemain VALUES ('1057', '  Adrian Acosta', '--adrian-acosta');
INSERT INTO tb_pemain VALUES ('1058', '  AJ Dyer', '--aj-dyer');
INSERT INTO tb_pemain VALUES ('1059', '  Kalin Wilson', '--kalin-wilson');
INSERT INTO tb_pemain VALUES ('1060', '  E. Roger Mitchell', '--e.-roger-mitchell');
INSERT INTO tb_pemain VALUES ('1061', '  Dagmara Domińczyk', '--dagmara-domińczyk');
INSERT INTO tb_pemain VALUES ('1062', '  Tom Toland', '--tom-toland');
INSERT INTO tb_pemain VALUES ('1063', '  Elaine Apruzzese', '--elaine-apruzzese');
INSERT INTO tb_pemain VALUES ('1064', '  Suki Úna Rae', '--suki-Úna-rae');
INSERT INTO tb_pemain VALUES ('1065', '  Desi Ramos', '--desi-ramos');
INSERT INTO tb_pemain VALUES ('1066', '  Victorya Danylko-Petrovskaya', '--victorya-danylko-petrovskaya');
INSERT INTO tb_pemain VALUES ('1067', '  Tom Fitzpatrick', '--tom-fitzpatrick');
INSERT INTO tb_pemain VALUES ('1068', '  Barbara Hershey', '--barbara-hershey');
INSERT INTO tb_pemain VALUES ('1069', ' Dagmara Domińczyk', '-dagmara-domi??czyk');
INSERT INTO tb_pemain VALUES ('1070', ' Suki Úna Rae', '-suki-??na-rae');
INSERT INTO tb_pemain VALUES ('1071', '  Dagmara Domińczyk', '--dagmara-domi??czyk');
INSERT INTO tb_pemain VALUES ('1072', '  Suki Úna Rae', '--suki-??na-rae');
INSERT INTO tb_pemain VALUES ('1073', '   Patrick Wilson', '---patrick-wilson');
INSERT INTO tb_pemain VALUES ('1074', '   Rose Byrne', '---rose-byrne');
INSERT INTO tb_pemain VALUES ('1075', '   Lin Shaye', '---lin-shaye');
INSERT INTO tb_pemain VALUES ('1076', '   Sinclair Daniel', '---sinclair-daniel');
INSERT INTO tb_pemain VALUES ('1077', '   Hiam Abbass', '---hiam-abbass');
INSERT INTO tb_pemain VALUES ('1078', '   Andrew Astor', '---andrew-astor');
INSERT INTO tb_pemain VALUES ('1079', '   Juliana Davies', '---juliana-davies');
INSERT INTO tb_pemain VALUES ('1080', '   Steve Coulter', '---steve-coulter');
INSERT INTO tb_pemain VALUES ('1081', '   Peter Dager', '---peter-dager');
INSERT INTO tb_pemain VALUES ('1082', '   Joseph Bishara', '---joseph-bishara');
INSERT INTO tb_pemain VALUES ('1083', '   Angus Sampson', '---angus-sampson');
INSERT INTO tb_pemain VALUES ('1084', '   Leigh Whannell', '---leigh-whannell');
INSERT INTO tb_pemain VALUES ('1085', '   Justin Sturgis', '---justin-sturgis');
INSERT INTO tb_pemain VALUES ('1086', '   David Call', '---david-call');
INSERT INTO tb_pemain VALUES ('1087', '   Stephen Gray', '---stephen-gray');
INSERT INTO tb_pemain VALUES ('1088', '   Robin S. Walker', '---robin-s.-walker');
INSERT INTO tb_pemain VALUES ('1089', '   Bridget Kim', '---bridget-kim');
INSERT INTO tb_pemain VALUES ('1090', '   Logan Wilson', '---logan-wilson');
INSERT INTO tb_pemain VALUES ('1091', '   Kasjan Wilson', '---kasjan-wilson');
INSERT INTO tb_pemain VALUES ('1092', '   Mary Looram', '---mary-looram');
INSERT INTO tb_pemain VALUES ('1093', '   Adrian Acosta', '---adrian-acosta');
INSERT INTO tb_pemain VALUES ('1094', '   AJ Dyer', '---aj-dyer');
INSERT INTO tb_pemain VALUES ('1095', '   Kalin Wilson', '---kalin-wilson');
INSERT INTO tb_pemain VALUES ('1096', '   E. Roger Mitchell', '---e.-roger-mitchell');
INSERT INTO tb_pemain VALUES ('1097', '   Dagmara Domińczyk', '---dagmara-domińczyk');
INSERT INTO tb_pemain VALUES ('1098', '   Tom Toland', '---tom-toland');
INSERT INTO tb_pemain VALUES ('1099', '   Elaine Apruzzese', '---elaine-apruzzese');
INSERT INTO tb_pemain VALUES ('1100', '   Suki Úna Rae', '---suki-Úna-rae');
INSERT INTO tb_pemain VALUES ('1101', '   Desi Ramos', '---desi-ramos');
INSERT INTO tb_pemain VALUES ('1102', '   Victorya Danylko-Petrovskaya', '---victorya-danylko-petrovskaya');
INSERT INTO tb_pemain VALUES ('1103', '   Tom Fitzpatrick', '---tom-fitzpatrick');
INSERT INTO tb_pemain VALUES ('1104', '   Barbara Hershey', '---barbara-hershey');
INSERT INTO tb_pemain VALUES ('1105', '    Patrick Wilson', '----patrick-wilson');
INSERT INTO tb_pemain VALUES ('1106', '    Rose Byrne', '----rose-byrne');
INSERT INTO tb_pemain VALUES ('1107', '    Lin Shaye', '----lin-shaye');
INSERT INTO tb_pemain VALUES ('1108', '    Sinclair Daniel', '----sinclair-daniel');
INSERT INTO tb_pemain VALUES ('1109', '    Hiam Abbass', '----hiam-abbass');
INSERT INTO tb_pemain VALUES ('1110', '    Andrew Astor', '----andrew-astor');
INSERT INTO tb_pemain VALUES ('1111', '    Juliana Davies', '----juliana-davies');
INSERT INTO tb_pemain VALUES ('1112', '    Steve Coulter', '----steve-coulter');
INSERT INTO tb_pemain VALUES ('1113', '    Peter Dager', '----peter-dager');
INSERT INTO tb_pemain VALUES ('1114', '    Joseph Bishara', '----joseph-bishara');
INSERT INTO tb_pemain VALUES ('1115', '    Angus Sampson', '----angus-sampson');
INSERT INTO tb_pemain VALUES ('1116', '    Leigh Whannell', '----leigh-whannell');
INSERT INTO tb_pemain VALUES ('1117', '    Justin Sturgis', '----justin-sturgis');
INSERT INTO tb_pemain VALUES ('1118', '    David Call', '----david-call');
INSERT INTO tb_pemain VALUES ('1119', '    Stephen Gray', '----stephen-gray');
INSERT INTO tb_pemain VALUES ('1120', '    Robin S. Walker', '----robin-s.-walker');
INSERT INTO tb_pemain VALUES ('1121', '    Bridget Kim', '----bridget-kim');
INSERT INTO tb_pemain VALUES ('1122', '    Logan Wilson', '----logan-wilson');
INSERT INTO tb_pemain VALUES ('1123', '    Kasjan Wilson', '----kasjan-wilson');
INSERT INTO tb_pemain VALUES ('1124', '    Mary Looram', '----mary-looram');
INSERT INTO tb_pemain VALUES ('1125', '    Adrian Acosta', '----adrian-acosta');
INSERT INTO tb_pemain VALUES ('1126', '    AJ Dyer', '----aj-dyer');
INSERT INTO tb_pemain VALUES ('1127', '    Kalin Wilson', '----kalin-wilson');
INSERT INTO tb_pemain VALUES ('1128', '    E. Roger Mitchell', '----e.-roger-mitchell');
INSERT INTO tb_pemain VALUES ('1129', '    Dagmara Domińczyk', '----dagmara-domi??czyk');
INSERT INTO tb_pemain VALUES ('1130', '    Tom Toland', '----tom-toland');
INSERT INTO tb_pemain VALUES ('1131', '    Elaine Apruzzese', '----elaine-apruzzese');
INSERT INTO tb_pemain VALUES ('1132', '    Suki Úna Rae', '----suki-??na-rae');
INSERT INTO tb_pemain VALUES ('1133', '    Desi Ramos', '----desi-ramos');
INSERT INTO tb_pemain VALUES ('1134', '    Victorya Danylko-Petrovskaya', '----victorya-danylko-petrovskaya');
INSERT INTO tb_pemain VALUES ('1135', '    Tom Fitzpatrick', '----tom-fitzpatrick');
INSERT INTO tb_pemain VALUES ('1136', '    Barbara Hershey', '----barbara-hershey');
INSERT INTO tb_pemain VALUES ('1137', '     Patrick Wilson', '-----patrick-wilson');
INSERT INTO tb_pemain VALUES ('1138', '     Rose Byrne', '-----rose-byrne');
INSERT INTO tb_pemain VALUES ('1139', '     Lin Shaye', '-----lin-shaye');
INSERT INTO tb_pemain VALUES ('1140', '     Sinclair Daniel', '-----sinclair-daniel');
INSERT INTO tb_pemain VALUES ('1141', '     Hiam Abbass', '-----hiam-abbass');
INSERT INTO tb_pemain VALUES ('1142', '     Andrew Astor', '-----andrew-astor');
INSERT INTO tb_pemain VALUES ('1143', '     Juliana Davies', '-----juliana-davies');
INSERT INTO tb_pemain VALUES ('1144', '     Steve Coulter', '-----steve-coulter');
INSERT INTO tb_pemain VALUES ('1145', '     Peter Dager', '-----peter-dager');
INSERT INTO tb_pemain VALUES ('1146', '     Joseph Bishara', '-----joseph-bishara');
INSERT INTO tb_pemain VALUES ('1147', '     Angus Sampson', '-----angus-sampson');
INSERT INTO tb_pemain VALUES ('1148', '     Leigh Whannell', '-----leigh-whannell');
INSERT INTO tb_pemain VALUES ('1149', '     Justin Sturgis', '-----justin-sturgis');
INSERT INTO tb_pemain VALUES ('1150', '     David Call', '-----david-call');
INSERT INTO tb_pemain VALUES ('1151', '     Stephen Gray', '-----stephen-gray');
INSERT INTO tb_pemain VALUES ('1152', '     Robin S. Walker', '-----robin-s.-walker');
INSERT INTO tb_pemain VALUES ('1153', '     Bridget Kim', '-----bridget-kim');
INSERT INTO tb_pemain VALUES ('1154', '     Logan Wilson', '-----logan-wilson');
INSERT INTO tb_pemain VALUES ('1155', '     Kasjan Wilson', '-----kasjan-wilson');
INSERT INTO tb_pemain VALUES ('1156', '     Mary Looram', '-----mary-looram');
INSERT INTO tb_pemain VALUES ('1157', '     Adrian Acosta', '-----adrian-acosta');
INSERT INTO tb_pemain VALUES ('1158', '     AJ Dyer', '-----aj-dyer');
INSERT INTO tb_pemain VALUES ('1159', '     Kalin Wilson', '-----kalin-wilson');
INSERT INTO tb_pemain VALUES ('1160', '     E. Roger Mitchell', '-----e.-roger-mitchell');
INSERT INTO tb_pemain VALUES ('1161', '     Dagmara Domińczyk', '-----dagmara-domi??czyk');
INSERT INTO tb_pemain VALUES ('1162', '     Tom Toland', '-----tom-toland');
INSERT INTO tb_pemain VALUES ('1163', '     Elaine Apruzzese', '-----elaine-apruzzese');
INSERT INTO tb_pemain VALUES ('1164', '     Suki Úna Rae', '-----suki-??na-rae');
INSERT INTO tb_pemain VALUES ('1165', '     Desi Ramos', '-----desi-ramos');
INSERT INTO tb_pemain VALUES ('1166', '     Victorya Danylko-Petrovskaya', '-----victorya-danylko-petrovskaya');
INSERT INTO tb_pemain VALUES ('1167', '     Tom Fitzpatrick', '-----tom-fitzpatrick');
INSERT INTO tb_pemain VALUES ('1168', '     Barbara Hershey', '-----barbara-hershey');
INSERT INTO tb_pemain VALUES ('1169', '      Patrick Wilson', '------patrick-wilson');
INSERT INTO tb_pemain VALUES ('1170', '      Rose Byrne', '------rose-byrne');
INSERT INTO tb_pemain VALUES ('1171', '      Lin Shaye', '------lin-shaye');
INSERT INTO tb_pemain VALUES ('1172', '      Sinclair Daniel', '------sinclair-daniel');
INSERT INTO tb_pemain VALUES ('1173', '      Hiam Abbass', '------hiam-abbass');
INSERT INTO tb_pemain VALUES ('1174', '      Andrew Astor', '------andrew-astor');
INSERT INTO tb_pemain VALUES ('1175', '      Juliana Davies', '------juliana-davies');
INSERT INTO tb_pemain VALUES ('1176', '      Steve Coulter', '------steve-coulter');
INSERT INTO tb_pemain VALUES ('1177', '      Peter Dager', '------peter-dager');
INSERT INTO tb_pemain VALUES ('1178', '      Joseph Bishara', '------joseph-bishara');
INSERT INTO tb_pemain VALUES ('1179', '      Angus Sampson', '------angus-sampson');
INSERT INTO tb_pemain VALUES ('1180', '      Leigh Whannell', '------leigh-whannell');
INSERT INTO tb_pemain VALUES ('1181', '      Justin Sturgis', '------justin-sturgis');
INSERT INTO tb_pemain VALUES ('1182', '      David Call', '------david-call');
INSERT INTO tb_pemain VALUES ('1183', '      Stephen Gray', '------stephen-gray');
INSERT INTO tb_pemain VALUES ('1184', '      Robin S. Walker', '------robin-s.-walker');
INSERT INTO tb_pemain VALUES ('1185', '      Bridget Kim', '------bridget-kim');
INSERT INTO tb_pemain VALUES ('1186', '      Logan Wilson', '------logan-wilson');
INSERT INTO tb_pemain VALUES ('1187', '      Kasjan Wilson', '------kasjan-wilson');
INSERT INTO tb_pemain VALUES ('1188', '      Mary Looram', '------mary-looram');
INSERT INTO tb_pemain VALUES ('1189', '      Adrian Acosta', '------adrian-acosta');
INSERT INTO tb_pemain VALUES ('1190', '      AJ Dyer', '------aj-dyer');
INSERT INTO tb_pemain VALUES ('1191', '      Kalin Wilson', '------kalin-wilson');
INSERT INTO tb_pemain VALUES ('1192', '      E. Roger Mitchell', '------e.-roger-mitchell');
INSERT INTO tb_pemain VALUES ('1193', '      Dagmara Domińczyk', '------dagmara-domińczyk');
INSERT INTO tb_pemain VALUES ('1194', '      Tom Toland', '------tom-toland');
INSERT INTO tb_pemain VALUES ('1195', '      Elaine Apruzzese', '------elaine-apruzzese');
INSERT INTO tb_pemain VALUES ('1196', '      Suki Úna Rae', '------suki-Úna-rae');
INSERT INTO tb_pemain VALUES ('1197', '      Desi Ramos', '------desi-ramos');
INSERT INTO tb_pemain VALUES ('1198', '      Victorya Danylko-Petrovskaya', '------victorya-danylko-petrovskaya');
INSERT INTO tb_pemain VALUES ('1199', '      Tom Fitzpatrick', '------tom-fitzpatrick');
INSERT INTO tb_pemain VALUES ('1200', '      Barbara Hershey', '------barbara-hershey');
INSERT INTO tb_pemain VALUES ('1201', 'Samuel L. Jackson', 'samuel-l.-jackson');
INSERT INTO tb_pemain VALUES ('1202', ' Ben Mendelsohn', '-ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1203', ' Killian Scott', '-killian-scott');
INSERT INTO tb_pemain VALUES ('1204', ' Samuel Adewunmi', '-samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1205', ' Dermot Mulroney', '-dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1206', ' Emilia Clarke', '-emilia-clarke');
INSERT INTO tb_pemain VALUES ('1207', ' Olivia Colman', '-olivia-colman');
INSERT INTO tb_pemain VALUES ('1208', ' Don Cheadle', '-don-cheadle');
INSERT INTO tb_pemain VALUES ('1209', ' Charlayne Woodard', '-charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1210', ' Christopher McDonald', '-christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1211', ' Katie Finneran', '-katie-finneran');
INSERT INTO tb_pemain VALUES ('1212', '  Ben Mendelsohn', '--ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1213', '  Kingsley Ben-Adir', '--kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('1214', '  Killian Scott', '--killian-scott');
INSERT INTO tb_pemain VALUES ('1215', '  Samuel Adewunmi', '--samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1216', '  Dermot Mulroney', '--dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1217', '  Emilia Clarke', '--emilia-clarke');
INSERT INTO tb_pemain VALUES ('1218', '  Olivia Colman', '--olivia-colman');
INSERT INTO tb_pemain VALUES ('1219', '  Don Cheadle', '--don-cheadle');
INSERT INTO tb_pemain VALUES ('1220', '  Charlayne Woodard', '--charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1221', '  Christopher McDonald', '--christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1222', '  Katie Finneran', '--katie-finneran');
INSERT INTO tb_pemain VALUES ('1223', '   Ben Mendelsohn', '---ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1224', '   Kingsley Ben-Adir', '---kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('1225', '   Killian Scott', '---killian-scott');
INSERT INTO tb_pemain VALUES ('1226', '   Samuel Adewunmi', '---samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1227', '   Dermot Mulroney', '---dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1228', '   Emilia Clarke', '---emilia-clarke');
INSERT INTO tb_pemain VALUES ('1229', '   Olivia Colman', '---olivia-colman');
INSERT INTO tb_pemain VALUES ('1230', '   Don Cheadle', '---don-cheadle');
INSERT INTO tb_pemain VALUES ('1231', '   Charlayne Woodard', '---charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1232', '   Christopher McDonald', '---christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1233', '   Katie Finneran', '---katie-finneran');
INSERT INTO tb_pemain VALUES ('1234', '    Ben Mendelsohn', '----ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1235', '    Kingsley Ben-Adir', '----kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('1236', '    Killian Scott', '----killian-scott');
INSERT INTO tb_pemain VALUES ('1237', '    Samuel Adewunmi', '----samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1238', '    Dermot Mulroney', '----dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1239', '    Emilia Clarke', '----emilia-clarke');
INSERT INTO tb_pemain VALUES ('1240', '    Olivia Colman', '----olivia-colman');
INSERT INTO tb_pemain VALUES ('1241', '    Don Cheadle', '----don-cheadle');
INSERT INTO tb_pemain VALUES ('1242', '    Charlayne Woodard', '----charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1243', '    Christopher McDonald', '----christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1244', '    Katie Finneran', '----katie-finneran');
INSERT INTO tb_pemain VALUES ('1245', '     Ben Mendelsohn', '-----ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1246', '     Kingsley Ben-Adir', '-----kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('1247', '     Killian Scott', '-----killian-scott');
INSERT INTO tb_pemain VALUES ('1248', '     Samuel Adewunmi', '-----samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1249', '     Dermot Mulroney', '-----dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1250', '     Emilia Clarke', '-----emilia-clarke');
INSERT INTO tb_pemain VALUES ('1251', '     Olivia Colman', '-----olivia-colman');
INSERT INTO tb_pemain VALUES ('1252', '     Don Cheadle', '-----don-cheadle');
INSERT INTO tb_pemain VALUES ('1253', '     Charlayne Woodard', '-----charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1254', '     Christopher McDonald', '-----christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1255', '     Katie Finneran', '-----katie-finneran');
INSERT INTO tb_pemain VALUES ('1256', '      Ben Mendelsohn', '------ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1257', '      Kingsley Ben-Adir', '------kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('1258', '      Killian Scott', '------killian-scott');
INSERT INTO tb_pemain VALUES ('1259', '      Samuel Adewunmi', '------samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1260', '      Dermot Mulroney', '------dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1261', '      Emilia Clarke', '------emilia-clarke');
INSERT INTO tb_pemain VALUES ('1262', '      Olivia Colman', '------olivia-colman');
INSERT INTO tb_pemain VALUES ('1263', '      Don Cheadle', '------don-cheadle');
INSERT INTO tb_pemain VALUES ('1264', '      Charlayne Woodard', '------charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1265', '      Christopher McDonald', '------christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1266', '      Katie Finneran', '------katie-finneran');
INSERT INTO tb_pemain VALUES ('1267', '       Ben Mendelsohn', '-------ben-mendelsohn');
INSERT INTO tb_pemain VALUES ('1268', '       Kingsley Ben-Adir', '-------kingsley-ben-adir');
INSERT INTO tb_pemain VALUES ('1269', '       Killian Scott', '-------killian-scott');
INSERT INTO tb_pemain VALUES ('1270', '       Samuel Adewunmi', '-------samuel-adewunmi');
INSERT INTO tb_pemain VALUES ('1271', '       Dermot Mulroney', '-------dermot-mulroney');
INSERT INTO tb_pemain VALUES ('1272', '       Emilia Clarke', '-------emilia-clarke');
INSERT INTO tb_pemain VALUES ('1273', '       Olivia Colman', '-------olivia-colman');
INSERT INTO tb_pemain VALUES ('1274', '       Don Cheadle', '-------don-cheadle');
INSERT INTO tb_pemain VALUES ('1275', '       Charlayne Woodard', '-------charlayne-woodard');
INSERT INTO tb_pemain VALUES ('1276', '       Christopher McDonald', '-------christopher-mcdonald');
INSERT INTO tb_pemain VALUES ('1277', '       Katie Finneran', '-------katie-finneran');
INSERT INTO tb_pemain VALUES ('1278', 'Henry Cavill', 'henry-cavill');
INSERT INTO tb_pemain VALUES ('1279', ' Anya Chalotra', '-anya-chalotra');
INSERT INTO tb_pemain VALUES ('1280', ' Freya Allan', '-freya-allan');
INSERT INTO tb_pemain VALUES ('1281', ' Mimî M. Khayisa', '-mim??-m.-khayisa');
INSERT INTO tb_pemain VALUES ('1282', ' Anna Shaffer', '-anna-shaffer');
INSERT INTO tb_pemain VALUES ('1283', ' Joey Batey', '-joey-batey');
INSERT INTO tb_pemain VALUES ('1284', ' MyAnna Buring', '-myanna-buring');
INSERT INTO tb_pemain VALUES ('1285', ' Mecia Simson', '-mecia-simson');
INSERT INTO tb_pemain VALUES ('1286', ' Eamon Farren', '-eamon-farren');
INSERT INTO tb_pemain VALUES ('1287', ' Mahesh Jadu', '-mahesh-jadu');
INSERT INTO tb_pemain VALUES ('1288', ' Tom Canton', '-tom-canton');
INSERT INTO tb_pemain VALUES ('1289', ' Graham McTavish', '-graham-mctavish');
INSERT INTO tb_pemain VALUES ('1290', ' Cassie Clare', '-cassie-clare');
INSERT INTO tb_pemain VALUES ('1291', ' Royce Pierreson', '-royce-pierreson');
INSERT INTO tb_pemain VALUES ('1292', ' Hugh Skinner', '-hugh-skinner');
INSERT INTO tb_pemain VALUES ('1293', ' Wilson Radjou-Pujalte', '-wilson-radjou-pujalte');
INSERT INTO tb_pemain VALUES ('1294', ' Bart Edwards', '-bart-edwards');
INSERT INTO tb_pemain VALUES ('1295', 'Sarah Hyland', 'sarah-hyland');
INSERT INTO tb_pemain VALUES ('1296', ' Iain Stirling', '-iain-stirling');
INSERT INTO tb_pemain VALUES ('1297', ' Anna Kurdys', '-anna-kurdys');
INSERT INTO tb_pemain VALUES ('1298', ' Carmen Kocourek', '-carmen-kocourek');
INSERT INTO tb_pemain VALUES ('1299', ' Carsten ', '-carsten-');
INSERT INTO tb_pemain VALUES ('1300', 'Annouck Hautbois', 'annouck-hautbois');
INSERT INTO tb_pemain VALUES ('1301', 'Benjamin Bollen', 'benjamin-bollen');
INSERT INTO tb_pemain VALUES ('1302', 'Antoine Tomé', 'antoine-tom??');
INSERT INTO tb_pemain VALUES ('1303', ' Benjamin Bollen', '-benjamin-bollen');
INSERT INTO tb_pemain VALUES ('1304', ' Antoine Tomé', '-antoine-tom??');
INSERT INTO tb_pemain VALUES ('1305', '  Benjamin Bollen', '--benjamin-bollen');
INSERT INTO tb_pemain VALUES ('1306', '  Antoine Tomé', '--antoine-tom??');
INSERT INTO tb_pemain VALUES ('1307', 'Junya Enoki', 'junya-enoki');
INSERT INTO tb_pemain VALUES ('1308', ' Yuma Uchida', '-yuma-uchida');
INSERT INTO tb_pemain VALUES ('1309', ' Asami Seto', '-asami-seto');
INSERT INTO tb_pemain VALUES ('1310', ' Yuichi Nakamura', '-yuichi-nakamura');
INSERT INTO tb_pemain VALUES ('1311', 'Gabriel Macht', 'gabriel-macht');
INSERT INTO tb_pemain VALUES ('1312', ' Sarah Rafferty', '-sarah-rafferty');
INSERT INTO tb_pemain VALUES ('1313', ' Amanda Schull', '-amanda-schull');
INSERT INTO tb_pemain VALUES ('1314', ' Rick Hoffman', '-rick-hoffman');
INSERT INTO tb_pemain VALUES ('1315', ' Dulé Hill', '-dul??-hill');
INSERT INTO tb_pemain VALUES ('1316', ' Katherine Heigl', '-katherine-heigl');
INSERT INTO tb_pemain VALUES ('1317', ' Dulé Hill', '-dul??-hill');
INSERT INTO tb_pemain VALUES ('1318', ' Dulé Hill', '-dul??-hill');
INSERT INTO tb_pemain VALUES ('1319', ' Dulé Hill', '-dul??-hill');
INSERT INTO tb_pemain VALUES ('1320', 'Ellen Pompeo', 'ellen-pompeo');
INSERT INTO tb_pemain VALUES ('1321', ' James Pickens Jr.', '-james-pickens-jr.');
INSERT INTO tb_pemain VALUES ('1322', ' Chandra Wilson', '-chandra-wilson');
INSERT INTO tb_pemain VALUES ('1323', ' Kevin McKidd', '-kevin-mckidd');
INSERT INTO tb_pemain VALUES ('1324', ' Camilla Luddington', '-camilla-luddington');
INSERT INTO tb_pemain VALUES ('1325', ' Kim Raver', '-kim-raver');
INSERT INTO tb_pemain VALUES ('1326', ' Chris Carmack', '-chris-carmack');
INSERT INTO tb_pemain VALUES ('1327', ' Jake Borelli', '-jake-borelli');
INSERT INTO tb_pemain VALUES ('1328', ' Anthony Hill', '-anthony-hill');
INSERT INTO tb_pemain VALUES ('1329', ' Caterina Scorsone', '-caterina-scorsone');
INSERT INTO tb_pemain VALUES ('1330', ' Kelly McCreary', '-kelly-mccreary');
INSERT INTO tb_pemain VALUES ('1331', ' Harry Shum Jr.', '-harry-shum-jr.');
INSERT INTO tb_pemain VALUES ('1332', ' Adelaide Kane', '-adelaide-kane');
INSERT INTO tb_pemain VALUES ('1333', ' Alexis Floyd', '-alexis-floyd');
INSERT INTO tb_pemain VALUES ('1334', ' Niko Terho', '-niko-terho');
INSERT INTO tb_pemain VALUES ('1335', ' Midori Francis', '-midori-francis');
INSERT INTO tb_pemain VALUES ('1336', 'James Pickens Jr.', 'james-pickens-jr.');
INSERT INTO tb_pemain VALUES ('1337', 'Chandra Wilson', 'chandra-wilson');
INSERT INTO tb_pemain VALUES ('1338', 'Kevin McKidd', 'kevin-mckidd');
INSERT INTO tb_pemain VALUES ('1339', 'Camilla Luddington', 'camilla-luddington');
INSERT INTO tb_pemain VALUES ('1340', 'Kim Raver', 'kim-raver');
INSERT INTO tb_pemain VALUES ('1341', 'Chris Carmack', 'chris-carmack');
INSERT INTO tb_pemain VALUES ('1342', 'Jake Borelli', 'jake-borelli');
INSERT INTO tb_pemain VALUES ('1343', 'Anthony Hill', 'anthony-hill');
INSERT INTO tb_pemain VALUES ('1344', 'Caterina Scorsone', 'caterina-scorsone');
INSERT INTO tb_pemain VALUES ('1345', 'Kelly McCreary', 'kelly-mccreary');
INSERT INTO tb_pemain VALUES ('1346', 'Harry Shum Jr.', 'harry-shum-jr.');
INSERT INTO tb_pemain VALUES ('1347', 'Adelaide Kane', 'adelaide-kane');
INSERT INTO tb_pemain VALUES ('1348', 'Alexis Floyd', 'alexis-floyd');
INSERT INTO tb_pemain VALUES ('1349', 'Niko Terho', 'niko-terho');
INSERT INTO tb_pemain VALUES ('1350', 'Midori Francis', 'midori-francis');
INSERT INTO tb_pemain VALUES ('1351', 'Freddie Highmore', 'freddie-highmore');
INSERT INTO tb_pemain VALUES ('1352', ' Fiona Gubelmann', '-fiona-gubelmann');
INSERT INTO tb_pemain VALUES ('1353', ' Will Yun Lee', '-will-yun-lee');
INSERT INTO tb_pemain VALUES ('1354', ' Christina Chang', '-christina-chang');
INSERT INTO tb_pemain VALUES ('1355', ' Paige Spara', '-paige-spara');
INSERT INTO tb_pemain VALUES ('1356', ' Bria Samoné Henderson', '-bria-samon??-henderson');
INSERT INTO tb_pemain VALUES ('1357', ' Noah Galvin', '-noah-galvin');
INSERT INTO tb_pemain VALUES ('1358', ' Hill Harper', '-hill-harper');
INSERT INTO tb_pemain VALUES ('1359', ' Richard Schiff', '-richard-schiff');
INSERT INTO tb_pemain VALUES ('1360', 'Idris Elba', 'idris-elba');
INSERT INTO tb_pemain VALUES ('1361', ' Neil Maskell', '-neil-maskell');
INSERT INTO tb_pemain VALUES ('1362', ' Eve Myles', '-eve-myles');
INSERT INTO tb_pemain VALUES ('1363', ' Christine Adams', '-christine-adams');
INSERT INTO tb_pemain VALUES ('1364', ' Max Beesley', '-max-beesley');
INSERT INTO tb_pemain VALUES ('1365', ' Archie Panjabi', '-archie-panjabi');
INSERT INTO tb_pemain VALUES ('1366', ' Ben Miles', '-ben-miles');
INSERT INTO tb_pemain VALUES ('1367', ' Hattie Morahan', '-hattie-morahan');
INSERT INTO tb_pemain VALUES ('1368', ' Neil Stuke', '-neil-stuke');
INSERT INTO tb_pemain VALUES ('1369', ' Kaisa Hammarlund', '-kaisa-hammarlund');
INSERT INTO tb_pemain VALUES ('1370', ' Zora Bishop', '-zora-bishop');
INSERT INTO tb_pemain VALUES ('1371', ' Jeremy Ang Jones', '-jeremy-ang-jones');
INSERT INTO tb_pemain VALUES ('1372', ' Kate Phillips', '-kate-phillips');
INSERT INTO tb_pemain VALUES ('1373', ' Jasper Britton', '-jasper-britton');
INSERT INTO tb_pemain VALUES ('1374', ' Jack McMullen', '-jack-mcmullen');
INSERT INTO tb_pemain VALUES ('1375', ' Aimee Kelly', '-aimee-kelly');
INSERT INTO tb_pemain VALUES ('1376', ' Mohamed Elsandel', '-mohamed-elsandel');
INSERT INTO tb_pemain VALUES ('1377', 'Neil Maskell', 'neil-maskell');
INSERT INTO tb_pemain VALUES ('1378', 'Eve Myles', 'eve-myles');
INSERT INTO tb_pemain VALUES ('1379', 'Christine Adams', 'christine-adams');
INSERT INTO tb_pemain VALUES ('1380', 'Max Beesley', 'max-beesley');
INSERT INTO tb_pemain VALUES ('1381', 'Archie Panjabi', 'archie-panjabi');
INSERT INTO tb_pemain VALUES ('1382', 'Ben Miles', 'ben-miles');
INSERT INTO tb_pemain VALUES ('1383', 'Hattie Morahan', 'hattie-morahan');
INSERT INTO tb_pemain VALUES ('1384', 'Neil Stuke', 'neil-stuke');
INSERT INTO tb_pemain VALUES ('1385', 'Kaisa Hammarlund', 'kaisa-hammarlund');
INSERT INTO tb_pemain VALUES ('1386', 'Zora Bishop', 'zora-bishop');
INSERT INTO tb_pemain VALUES ('1387', 'Jeremy Ang Jones', 'jeremy-ang-jones');
INSERT INTO tb_pemain VALUES ('1388', 'Kate Phillips', 'kate-phillips');
INSERT INTO tb_pemain VALUES ('1389', 'Jasper Britton', 'jasper-britton');
INSERT INTO tb_pemain VALUES ('1390', 'Jack McMullen', 'jack-mcmullen');
INSERT INTO tb_pemain VALUES ('1391', 'Aimee Kelly', 'aimee-kelly');
INSERT INTO tb_pemain VALUES ('1392', 'Mohamed Elsandel', 'mohamed-elsandel');
INSERT INTO tb_pemain VALUES ('1393', 'Lola Tung', 'lola-tung');
INSERT INTO tb_pemain VALUES ('1394', ' Christopher Briney', '-christopher-briney');
INSERT INTO tb_pemain VALUES ('1395', ' Gavin Casalegno', '-gavin-casalegno');
INSERT INTO tb_pemain VALUES ('1396', ' Sean Kaufman', '-sean-kaufman');
INSERT INTO tb_pemain VALUES ('1397', ' David Lacono', '-david-lacono');
INSERT INTO tb_pemain VALUES ('1398', '  Christopher Briney', '--christopher-briney');
INSERT INTO tb_pemain VALUES ('1399', '  Gavin Casalegno', '--gavin-casalegno');
INSERT INTO tb_pemain VALUES ('1400', '  Sean Kaufman', '--sean-kaufman');
INSERT INTO tb_pemain VALUES ('1401', '  David Lacono', '--david-lacono');
INSERT INTO tb_pemain VALUES ('1402', '   Christopher Briney', '---christopher-briney');
INSERT INTO tb_pemain VALUES ('1403', '   Gavin Casalegno', '---gavin-casalegno');
INSERT INTO tb_pemain VALUES ('1404', '   Sean Kaufman', '---sean-kaufman');
INSERT INTO tb_pemain VALUES ('1405', '   David Lacono', '---david-lacono');
INSERT INTO tb_pemain VALUES ('1406', '    Christopher Briney', '----christopher-briney');
INSERT INTO tb_pemain VALUES ('1407', '    Gavin Casalegno', '----gavin-casalegno');
INSERT INTO tb_pemain VALUES ('1408', '    Sean Kaufman', '----sean-kaufman');
INSERT INTO tb_pemain VALUES ('1409', '    David Lacono', '----david-lacono');
INSERT INTO tb_pemain VALUES ('1410', '     Christopher Briney', '-----christopher-briney');
INSERT INTO tb_pemain VALUES ('1411', '     Gavin Casalegno', '-----gavin-casalegno');
INSERT INTO tb_pemain VALUES ('1412', '     Sean Kaufman', '-----sean-kaufman');
INSERT INTO tb_pemain VALUES ('1413', '     David Lacono', '-----david-lacono');
INSERT INTO tb_pemain VALUES ('1414', '      Christopher Briney', '------christopher-briney');
INSERT INTO tb_pemain VALUES ('1415', '      Gavin Casalegno', '------gavin-casalegno');
INSERT INTO tb_pemain VALUES ('1416', '      Sean Kaufman', '------sean-kaufman');
INSERT INTO tb_pemain VALUES ('1417', '      David Lacono', '------david-lacono');
INSERT INTO tb_pemain VALUES ('1418', 'Iain Stirling', 'iain-stirling');
INSERT INTO tb_pemain VALUES ('1419', ' Maya Jama', '-maya-jama');
INSERT INTO tb_pemain VALUES ('1420', ' André Furtado', '-andr??-furtado');
INSERT INTO tb_pemain VALUES ('1421', ' Catherine Agbaje', '-catherine-agbaje');
INSERT INTO tb_pemain VALUES ('1422', ' Ella Thomas', '-ella-thomas');
INSERT INTO tb_pemain VALUES ('1423', ' George Fensom', '-george-fensom');
INSERT INTO tb_pemain VALUES ('1424', ' Jess Harding', '-jess-harding');
INSERT INTO tb_pemain VALUES ('1425', ' Mehdi Edno', '-mehdi-edno');
INSERT INTO tb_pemain VALUES ('1426', ' Mitchel Taylor', '-mitchel-taylor');
INSERT INTO tb_pemain VALUES ('1427', ' Molly Marsh', '-molly-marsh');
INSERT INTO tb_pemain VALUES ('1428', ' Ruchee Gurung', '-ruchee-gurung');
INSERT INTO tb_pemain VALUES ('1429', ' Tyrique Hyde', '-tyrique-hyde');
INSERT INTO tb_pemain VALUES ('1430', ' Zachariah Noble', '-zachariah-noble');
INSERT INTO tb_pemain VALUES ('1431', ' Whitney Adebayo', '-whitney-adebayo');
INSERT INTO tb_pemain VALUES ('1432', ' Sammy Root', '-sammy-root');
INSERT INTO tb_pemain VALUES ('1433', 'James Spader', 'james-spader');
INSERT INTO tb_pemain VALUES ('1434', ' Diego Klattenhoff', '-diego-klattenhoff');
INSERT INTO tb_pemain VALUES ('1435', ' Hisham Tawfiq', '-hisham-tawfiq');
INSERT INTO tb_pemain VALUES ('1436', ' Anya Banerjee', '-anya-banerjee');
INSERT INTO tb_pemain VALUES ('1437', ' Harry Lennix', '-harry-lennix');
INSERT INTO tb_pemain VALUES ('1438', 'Caitríona Balfe', 'caitr??ona-balfe');
INSERT INTO tb_pemain VALUES ('1439', ' Sam Heughan', '-sam-heughan');
INSERT INTO tb_pemain VALUES ('1440', ' Richard Rankin', '-richard-rankin');
INSERT INTO tb_pemain VALUES ('1441', ' Sophie Skelton', '-sophie-skelton');
INSERT INTO tb_pemain VALUES ('1442', '<br />
<b>Notice</b>:  Undefined variable: nama_pemain_string in <b>C:\\xampp\\htdocs\\tmf_production\\admin\\tv_show\\create_tmdb.php</b> on line <b>655</b><br />
', '<br-/>
<b>notice</b>:--undefined-variable:-nama_pemain_string-in-<b>c:\\xampp\\htdocs\\tmf_production\\admin\\tv_show\\create_tmdb.php</b>-on-line-<b>655</b><br-/>
');
INSERT INTO tb_pemain VALUES ('1443', 'Grant Gustin', 'grant-gustin');
INSERT INTO tb_pemain VALUES ('1444', ' Candice Patton', '-candice-patton');
INSERT INTO tb_pemain VALUES ('1445', ' Danielle Panabaker', '-danielle-panabaker');
INSERT INTO tb_pemain VALUES ('1446', ' Danielle Nicolet', '-danielle-nicolet');
INSERT INTO tb_pemain VALUES ('1447', ' Kayla Compton', '-kayla-compton');
INSERT INTO tb_pemain VALUES ('1448', ' Brandon McKnight', '-brandon-mcknight');
INSERT INTO tb_pemain VALUES ('1449', ' Jon Cor', '-jon-cor');
INSERT INTO tb_pemain VALUES ('1450', 'Cillian Murphy', 'cillian-murphy');
INSERT INTO tb_pemain VALUES ('1451', ' Paul Anderson', '-paul-anderson');
INSERT INTO tb_pemain VALUES ('1452', ' Sophie Rundle', '-sophie-rundle');
INSERT INTO tb_pemain VALUES ('1453', ' Natasha O\'Keeffe', '-natasha-o\'keeffe');
INSERT INTO tb_pemain VALUES ('1454', 'Tom Ellis', 'tom-ellis');
INSERT INTO tb_pemain VALUES ('1455', ' Lauren German', '-lauren-german');
INSERT INTO tb_pemain VALUES ('1456', ' Kevin Alejandro', '-kevin-alejandro');
INSERT INTO tb_pemain VALUES ('1457', ' D.B. Woodside', '-d.b.-woodside');
INSERT INTO tb_pemain VALUES ('1458', ' Lesley-Ann Brandt', '-lesley-ann-brandt');
INSERT INTO tb_pemain VALUES ('1459', ' Aimee Garcia', '-aimee-garcia');
INSERT INTO tb_pemain VALUES ('1460', ' Rachael Harris', '-rachael-harris');
INSERT INTO tb_pemain VALUES ('1461', ' Brianna Hildebrand', '-brianna-hildebrand');
INSERT INTO tb_pemain VALUES ('1462', 'Mariska Hargitay', 'mariska-hargitay');
INSERT INTO tb_pemain VALUES ('1463', ' Peter Scanavino', '-peter-scanavino');
INSERT INTO tb_pemain VALUES ('1464', ' Ice-T', '-ice-t');
INSERT INTO tb_pemain VALUES ('1465', ' Octavio Pisano', '-octavio-pisano');
INSERT INTO tb_pemain VALUES ('1466', ' Billy West', '-billy-west');
INSERT INTO tb_pemain VALUES ('1467', ' Katey Sagal', '-katey-sagal');
INSERT INTO tb_pemain VALUES ('1468', ' Tress MacNeille', '-tress-macneille');
INSERT INTO tb_pemain VALUES ('1469', ' Maurice LaMarche', '-maurice-lamarche');
INSERT INTO tb_pemain VALUES ('1470', ' Lauren Tom', '-lauren-tom');
INSERT INTO tb_pemain VALUES ('1471', ' David Herman', '-david-herman');
INSERT INTO tb_pemain VALUES ('1472', 'Dan Castellaneta', 'dan-castellaneta');
INSERT INTO tb_pemain VALUES ('1473', ' Julie Kavner', '-julie-kavner');
INSERT INTO tb_pemain VALUES ('1474', ' Nancy Cartwright', '-nancy-cartwright');
INSERT INTO tb_pemain VALUES ('1475', ' Yeardley Smith', '-yeardley-smith');
INSERT INTO tb_pemain VALUES ('1476', ' Hank Azaria', '-hank-azaria');
INSERT INTO tb_pemain VALUES ('1477', ' Harry Shearer', '-harry-shearer');
INSERT INTO tb_pemain VALUES ('1478', 'Lee Jun-ho', 'lee-jun-ho');
INSERT INTO tb_pemain VALUES ('1479', ' Yoona', '-yoona');
INSERT INTO tb_pemain VALUES ('1480', ' Go Won-hee', '-go-won-hee');
INSERT INTO tb_pemain VALUES ('1481', ' Kim Ga-eun', '-kim-ga-eun');
INSERT INTO tb_pemain VALUES ('1482', ' Ahn Se-ha', '-ahn-se-ha');
INSERT INTO tb_pemain VALUES ('1483', ' Kim Jae-won', '-kim-jae-won');
INSERT INTO tb_pemain VALUES ('1484', ' Son Byung-ho', '-son-byung-ho');
INSERT INTO tb_pemain VALUES ('1485', ' Kim Sun-young', '-kim-sun-young');
INSERT INTO tb_pemain VALUES ('1486', ' Kim Young-ok', '-kim-young-ok');
INSERT INTO tb_pemain VALUES ('1487', ' Kong Ye-ji', '-kong-ye-ji');
INSERT INTO tb_pemain VALUES ('1488', ' Kim Jung-min', '-kim-jung-min');
INSERT INTO tb_pemain VALUES ('1489', ' Choi Ji-hyeon', '-choi-ji-hyeon');
INSERT INTO tb_pemain VALUES ('1490', ' Kim Chae-yoon', '-kim-chae-yoon');
INSERT INTO tb_pemain VALUES ('1491', ' Lee Ho-suk', '-lee-ho-suk');
INSERT INTO tb_pemain VALUES ('1492', ' Lee Ji-hye', '-lee-ji-hye');
INSERT INTO tb_pemain VALUES ('1493', ' Choi Tae-hwan', '-choi-tae-hwan');
INSERT INTO tb_pemain VALUES ('1494', ' Lee Ye-joo', '-lee-ye-joo');
INSERT INTO tb_pemain VALUES ('1495', ' Jeong Won-jo', '-jeong-won-jo');
INSERT INTO tb_pemain VALUES ('1496', ' Kim Dong-Ha', '-kim-dong-ha');

CREATE TABLE `tb_player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_player VALUES ('4', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-25 00:00:33', '2023-07-25 00:00:33');
INSERT INTO tb_player VALUES ('5', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-25 00:07:24', '2023-07-25 00:07:24');
INSERT INTO tb_player VALUES ('6', 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDFad', '2023-07-25 00:14:29', '2023-07-25 04:56:56');
INSERT INTO tb_player VALUES ('7', 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDF', '2023-07-25 03:18:12', '2023-07-25 03:18:12');
INSERT INTO tb_player VALUES ('8', 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDF', '2023-07-25 03:20:30', '2023-07-25 03:20:30');
INSERT INTO tb_player VALUES ('9', 'ASD', 'ASD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASDF', '2023-07-25 03:21:38', '2023-07-25 03:21:38');
INSERT INTO tb_player VALUES ('10', '123', '123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tidak Ada Pemberitahuan', '2023-07-25 05:11:49', '2023-07-25 06:17:43');
INSERT INTO tb_player VALUES ('11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-27 15:09:39', '2023-07-27 15:09:39');
INSERT INTO tb_player VALUES ('12', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-28 01:11:01', '2023-07-28 01:11:01');
INSERT INTO tb_player VALUES ('13', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-28 01:11:43', '2023-07-28 01:11:43');
INSERT INTO tb_player VALUES ('14', 'a', 'b', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-28 01:15:14', '2023-07-28 01:15:14');
INSERT INTO tb_player VALUES ('15', '123', '436', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdf', '2023-07-28 01:16:43', '2023-07-28 01:16:43');
INSERT INTO tb_player VALUES ('17', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 05:35:38', '2023-07-30 05:35:38');
INSERT INTO tb_player VALUES ('18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 05:39:08', '2023-07-30 05:39:08');
INSERT INTO tb_player VALUES ('19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 05:41:26', '2023-07-30 05:41:26');
INSERT INTO tb_player VALUES ('20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 05:42:39', '2023-07-30 05:42:39');
INSERT INTO tb_player VALUES ('21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 05:43:41', '2023-07-30 05:43:41');
INSERT INTO tb_player VALUES ('22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 05:43:46', '2023-07-30 05:43:46');
INSERT INTO tb_player VALUES ('23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:23:54', '2023-07-30 07:23:54');
INSERT INTO tb_player VALUES ('24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:24:07', '2023-07-30 07:24:07');
INSERT INTO tb_player VALUES ('25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:24:42', '2023-07-30 07:24:42');
INSERT INTO tb_player VALUES ('26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:27:29', '2023-07-30 07:27:29');
INSERT INTO tb_player VALUES ('27', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:28:42', '2023-07-30 07:28:42');
INSERT INTO tb_player VALUES ('28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:28:56', '2023-07-30 07:28:56');
INSERT INTO tb_player VALUES ('29', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:30:10', '2023-07-30 07:30:10');
INSERT INTO tb_player VALUES ('30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:30:38', '2023-07-30 07:30:38');
INSERT INTO tb_player VALUES ('31', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:31:36', '2023-07-30 07:31:36');
INSERT INTO tb_player VALUES ('32', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:32:18', '2023-07-30 07:32:18');
INSERT INTO tb_player VALUES ('33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:32:37', '2023-07-30 07:32:37');
INSERT INTO tb_player VALUES ('34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:33:36', '2023-07-30 07:33:36');
INSERT INTO tb_player VALUES ('35', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:36:14', '2023-07-30 07:36:14');
INSERT INTO tb_player VALUES ('36', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:36:58', '2023-07-30 07:36:58');
INSERT INTO tb_player VALUES ('37', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:37:23', '2023-07-30 07:37:23');
INSERT INTO tb_player VALUES ('38', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:38:30', '2023-07-30 07:38:30');
INSERT INTO tb_player VALUES ('39', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:39:23', '2023-07-30 07:39:23');
INSERT INTO tb_player VALUES ('40', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:40:38', '2023-07-30 07:40:38');
INSERT INTO tb_player VALUES ('41', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:40:41', '2023-07-30 07:40:41');
INSERT INTO tb_player VALUES ('42', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:49:54', '2023-07-30 07:49:54');
INSERT INTO tb_player VALUES ('43', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:50:25', '2023-07-30 07:50:25');
INSERT INTO tb_player VALUES ('44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:50:35', '2023-07-30 07:50:35');
INSERT INTO tb_player VALUES ('45', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:52:56', '2023-07-30 07:52:56');
INSERT INTO tb_player VALUES ('46', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:53:53', '2023-07-30 07:53:53');
INSERT INTO tb_player VALUES ('47', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:55:33', '2023-07-30 07:55:33');
INSERT INTO tb_player VALUES ('48', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:56:03', '2023-07-30 07:56:03');
INSERT INTO tb_player VALUES ('49', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:56:34', '2023-07-30 07:56:48');
INSERT INTO tb_player VALUES ('50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:57:38', '2023-07-30 07:57:38');
INSERT INTO tb_player VALUES ('51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:58:00', '2023-07-30 07:58:00');
INSERT INTO tb_player VALUES ('52', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 07:58:40', '2023-07-30 07:59:32');
INSERT INTO tb_player VALUES ('53', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:00:27', '2023-07-30 08:00:27');
INSERT INTO tb_player VALUES ('54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:01:23', '2023-07-30 08:02:25');
INSERT INTO tb_player VALUES ('55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:03:05', '2023-07-30 08:03:05');
INSERT INTO tb_player VALUES ('56', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:03:47', '2023-07-30 08:03:47');
INSERT INTO tb_player VALUES ('57', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:04:45', '2023-07-30 08:04:45');
INSERT INTO tb_player VALUES ('58', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:05:41', '2023-07-30 08:05:41');
INSERT INTO tb_player VALUES ('59', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 08:06:57', '2023-07-30 08:06:57');
INSERT INTO tb_player VALUES ('60', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 23:15:21', '2023-07-30 23:21:19');
INSERT INTO tb_player VALUES ('61', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-30 23:22:07', '2023-07-30 23:23:17');
INSERT INTO tb_player VALUES ('62', 'film king the land', 'film king the land', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-31 00:23:17', '2023-07-31 00:23:17');

CREATE TABLE `tb_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(255) NOT NULL,
  `slug_tag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_tag VALUES ('5', 'sadasd', 'sadasd');
INSERT INTO tb_tag VALUES ('6', 'sadasdF', 'sadasdf');
INSERT INTO tb_tag VALUES ('9', 'film terbaru', 'film-terbaru');
INSERT INTO tb_tag VALUES ('31', 'Worlds collide.', 'worlds-collide.');
INSERT INTO tb_tag VALUES ('33', 'May values ​​not die and beauty not be shallow..', 'may-values-​​not-die-and-beauty-not-be-shallow..');
INSERT INTO tb_tag VALUES ('34', 'Welcome back to Green Gables.', 'welcome-back-to-green-gables.');
INSERT INTO tb_tag VALUES ('35', 'A mysterious romance between a goblin and a young human bride.', 'a-mysterious-romance-between-a-goblin-and-a-young-human-bride.');
INSERT INTO tb_tag VALUES ('36', '', '');
INSERT INTO tb_tag VALUES ('37', 'She\'s everything. He\'s just Ken.', 'she\'s-everything.-he\'s-just-ken.');
INSERT INTO tb_tag VALUES ('38', 'Watch and you\'ll see', 'watch-and-you\'ll-see');
INSERT INTO tb_tag VALUES ('39', ' some day I\'ll be', '-some-day-i\'ll-be');
INSERT INTO tb_tag VALUES ('40', ' part of your world!', '-part-of-your-world!');
INSERT INTO tb_tag VALUES ('41', 'Unite or fall.', 'unite-or-fall.');
INSERT INTO tb_tag VALUES ('42', 'Discover the hero just beneath the surface.', 'discover-the-hero-just-beneath-the-surface.');
INSERT INTO tb_tag VALUES ('43', 'Destinies intertwined. A world gone mad.', 'destinies-intertwined.-a-world-gone-mad.');
INSERT INTO tb_tag VALUES ('44', 'Go beyond your destiny.', 'go-beyond-your-destiny.');
INSERT INTO tb_tag VALUES ('45', 'We all share the same fate.', 'we-all-share-the-same-fate.');
INSERT INTO tb_tag VALUES ('46', 'No way back', 'no-way-back');
INSERT INTO tb_tag VALUES ('47', ' one way out.', '-one-way-out.');
INSERT INTO tb_tag VALUES ('48', 'Not all heroes wear capes. Some wear overalls.', 'not-all-heroes-wear-capes.-some-wear-overalls.');
INSERT INTO tb_tag VALUES ('49', 'Three heroes. Three worlds. One salvation.', 'three-heroes.-three-worlds.-one-salvation.');
INSERT INTO tb_tag VALUES ('50', 'It ends where it all began.', 'it-ends-where-it-all-began.');
INSERT INTO tb_tag VALUES ('51', 'Who do you trust?', 'who-do-you-trust?');
INSERT INTO tb_tag VALUES ('52', 'Destiny is a beast.', 'destiny-is-a-beast.');
INSERT INTO tb_tag VALUES ('53', 'Time to de-evilize!', 'time-to-de-evilize!');
INSERT INTO tb_tag VALUES ('54', 'A boy fights... for ', 'a-boy-fights...-for-');
INSERT INTO tb_tag VALUES ('55', 'Nothing is ever black and white', 'nothing-is-ever-black-and-white');
INSERT INTO tb_tag VALUES ('56', 'Begin again.', 'begin-again.');
INSERT INTO tb_tag VALUES ('57', 'Everyone operates differently.', 'everyone-operates-differently.');
INSERT INTO tb_tag VALUES ('58', 'Let them think they re in control.', 'let-them-think-they-re-in-control.');
INSERT INTO tb_tag VALUES ('59', 'Let them think they\'re in control.', 'let-them-think-they\'re-in-control.');
INSERT INTO tb_tag VALUES ('60', 'It’s not summer without you.', 'it’s-not-summer-without-you.');
INSERT INTO tb_tag VALUES ('61', 'It is what it is.', 'it-is-what-it-is.');
INSERT INTO tb_tag VALUES ('62', 'Family. Business.', 'family.-business.');
INSERT INTO tb_tag VALUES ('63', 'Our history is now.', 'our-history-is-now.');
INSERT INTO tb_tag VALUES ('64', 'The fastest man alive.', 'the-fastest-man-alive.');
INSERT INTO tb_tag VALUES ('65', 'London\'s for the taking', 'london\'s-for-the-taking');
INSERT INTO tb_tag VALUES ('66', 'It\'s good to be bad.', 'it\'s-good-to-be-bad.');
INSERT INTO tb_tag VALUES ('67', 'Standing for victims.', 'standing-for-victims.');
INSERT INTO tb_tag VALUES ('68', 'We\'re back again! Again!', 'we\'re-back-again!-again!');
INSERT INTO tb_tag VALUES ('69', 'A 7-star sweet romance.', 'a-7-star-sweet-romance.');

CREATE TABLE `tb_tag_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(200) NOT NULL,
  `slug_tag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_tag_artikel VALUES ('3', 'Drama', 'drama');
INSERT INTO tb_tag_artikel VALUES ('4', 'Drakor', 'drakor');
INSERT INTO tb_tag_artikel VALUES ('6', ' Drakor', '-drakor');

CREATE TABLE `tb_tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_rilis` int(11) NOT NULL,
  `slug_tahun` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_tahun VALUES ('6', '2023', '2023');
INSERT INTO tb_tahun VALUES ('12', '2016', '2016');
INSERT INTO tb_tahun VALUES ('13', '2017', '2017');
INSERT INTO tb_tahun VALUES ('14', '0', '');
INSERT INTO tb_tahun VALUES ('15', '2022', '2022');
INSERT INTO tb_tahun VALUES ('16', '2021', '2021');
INSERT INTO tb_tahun VALUES ('17', '2019', '2019');
INSERT INTO tb_tahun VALUES ('18', '2015', '2015');
INSERT INTO tb_tahun VALUES ('19', '2020', '2020');
INSERT INTO tb_tahun VALUES ('20', '2011', '2011');
INSERT INTO tb_tahun VALUES ('21', '2005', '2005');
INSERT INTO tb_tahun VALUES ('22', '2013', '2013');
INSERT INTO tb_tahun VALUES ('23', '2014', '2014');
INSERT INTO tb_tahun VALUES ('24', '1999', '1999');
INSERT INTO tb_tahun VALUES ('25', '1989', '1989');

CREATE TABLE `tb_tmdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `penerjemah` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_tmdb VALUES ('11', 'asd', 'asd', 'a', 'd', '2023-07-26', '2023', '', '0', '99.9', '99.9', '123123.00', '123123412.00', 'asdfasdfasdfasdf', '234234', 'asdfasdf', '0', '', '2023-07-25 00:00:33', '2023-07-25 00:00:33', '');
INSERT INTO tb_tmdb VALUES ('12', 'asd', 'asd', 'a', 'd', '2023-07-26', '2023', '', '0', '99.9', '99.9', '123123.00', '123123412.00', 'asdfasdfasdfasdf', '234234', 'asdfasdf', '0', '', '2023-07-25 00:07:24', '2023-07-25 00:07:24', '');
INSERT INTO tb_tmdb VALUES ('13', 'dramatic2', 'Indonesia', 'kosong', '10', '2023-01-20', '2023', '', '5', '6.0', '6.0', '123123.00', '9000000.00', 'asdfasdfasdfasdf', '', '13', '14', '', '2023-07-25 00:14:29', '2023-07-25 03:21:38', 'kikik');
INSERT INTO tb_tmdb VALUES ('14', 'Dr Romantic', 'Korea', 'Korea', '4', '2023-01-20', '2023', '', '5', '1.0', '1.0', '800000000.00', '300000000.00', 'https://youtube.com/', 'Untitled.jpg', '123123', '321321', '', '2023-07-25 05:11:49', '2023-07-25 05:12:24', 'kikuk');
INSERT INTO tb_tmdb VALUES ('15', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', '2023-07-27', '2023', '', '234', '6.0', '10.0', '531234234.00', '234234.00', 'a', 'Untitled.jpg', 'asdf1234123', '12312', '', '2023-07-27 15:09:39', '2023-07-27 15:09:39', 'asdf');
INSERT INTO tb_tmdb VALUES ('16', '1', '2', '3', '4', '2023-07-28', '2023', '2023-07-27', '5', '1.0', '10.0', '800000000.00', '9000000.00', 'https://youtube.com/', 'Untitled.jpg', 'asdfasdf', '0', '6', '2023-07-27 20:44:40', '2023-07-27 20:44:40', 'asdfasdf');
INSERT INTO tb_tmdb VALUES ('17', '1243234234awerasdfasdf', '2', '3', '4', '2023-01-20', '2023', '2023-07-27', '5', '1.0', '10.0', '800000000.00', '9000000.00', 'https://youtube.com/awerawerawer', 'Untitled.jpg', 'asdfasdf', 'asdfasdf', '6', '2023-07-27 21:05:15', '2023-07-27 23:12:32', 'asdfasdf');
INSERT INTO tb_tmdb VALUES ('18', 'The Flash (2023)', 'English', 'Worlds collide.', '', '2023-06-13', '2023', '', '144', '6.9', '10.0', '190000000.00', '267481043.00', 'https://www.youtube.com/watch?v=jprhe-cWKGs', 'https://image.tmdb.org/t/p/w200//rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', 'tt0439572', '298618', '', '2023-07-30 05:35:38', '2023-07-30 05:35:38', '');
INSERT INTO tb_tmdb VALUES ('19', 'The Flash', 'English', 'Worlds collide.', '', '2023-06-13', '2023', '', '144', '6.9', '10.0', '190000000.00', '267481043.00', 'https://www.youtube.com/watch?v=jprhe-cWKGs', 'https://image.tmdb.org/t/p/w200//rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', 'tt0439572', '298618', '', '2023-07-30 05:39:08', '2023-07-30 05:39:08', '');
INSERT INTO tb_tmdb VALUES ('20', 'The Flash', 'English', 'Worlds collide.', '', '2023-06-13', '2023', '', '144', '6.9', '10.0', '190000000.00', '267481043.00', 'https://www.youtube.com/watch?v=jprhe-cWKGs', 'https://image.tmdb.org/t/p/w200//rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', 'tt0439572', '298618', '', '2023-07-30 05:41:26', '2023-07-30 05:41:26', '');
INSERT INTO tb_tmdb VALUES ('21', 'The Flash', 'English', 'Worlds collide.', '', '2023-06-13', '2023', '', '144', '6.9', '10.0', '190000000.00', '267481043.00', 'https://www.youtube.com/watch?v=jprhe-cWKGs', 'https://image.tmdb.org/t/p/w200//rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', 'tt0439572', '298618', '', '2023-07-30 05:42:39', '2023-07-30 05:42:39', '');
INSERT INTO tb_tmdb VALUES ('22', '', '', '', '', '1970-01-01', '0', '', '0', '0.0', '0.0', '0.00', '0.00', '', '', '', '', '', '2023-07-30 05:43:41', '2023-07-30 05:43:41', '');
INSERT INTO tb_tmdb VALUES ('23', 'The Flash', 'English', 'Worlds collide.', '', '2023-06-13', '2023', '', '144', '6.9', '10.0', '190000000.00', '267481043.00', 'https://www.youtube.com/watch?v=jprhe-cWKGs', 'https://image.tmdb.org/t/p/w200//rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg', 'tt0439572', '298618', '', '2023-07-30 05:43:46', '2023-07-30 05:43:46', '');
INSERT INTO tb_tmdb VALUES ('24', 'Dr. Romantic', 'Korean', 'May values ​​not die and beauty not be shallow..', '', '1970-01-01', '2016', '2023-06-17', '60', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=d3Xxx8EsEyM', 'https://image.tmdb.org/t/p/w200//5WC5zEItQk7Av75osRRjbcKfHWD.jpg', '', '68398', '52', '2023-07-30 06:41:57', '2023-07-30 06:41:57', '');
INSERT INTO tb_tmdb VALUES ('25', 'Anne with an E', 'English', 'Welcome back to Green Gables.', '', '1970-01-01', '2017', '2019-11-24', '47', '8.7', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//6P6tXhjT5tK3qOXzxF9OMLlG7iz.jpg', '', '70785-anne', '27', '2023-07-30 07:19:51', '2023-07-30 07:19:51', '');
INSERT INTO tb_tmdb VALUES ('26', 'Goblin', 'Korean', 'A mysterious romance between a goblin and a young human bride.', '', '1970-01-01', '2016', '2017-01-21', '77', '8.7', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=8AcNEVUzV4o', 'https://image.tmdb.org/t/p/w200//t7aUi8jbsIUSCNqA1akAbKjBWjU.jpg', '', '67915', '16', '2023-07-30 07:21:53', '2023-07-30 07:21:53', '');
INSERT INTO tb_tmdb VALUES ('27', 'My Hero Academia', 'Japanese', '', '', '1970-01-01', '2016', '2023-03-25', '24', '8.7', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=EPVkcwyLQQ8', 'https://image.tmdb.org/t/p/w200//ivOLM47yJt90P19RH1NvJrAJz9F.jpg', '', '65930', '138', '2023-07-30 07:22:56', '2023-07-30 07:22:56', '');
INSERT INTO tb_tmdb VALUES ('28', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:28:42', '2023-07-30 07:28:42', '');
INSERT INTO tb_tmdb VALUES ('29', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:28:56', '2023-07-30 07:28:56', '');
INSERT INTO tb_tmdb VALUES ('30', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:30:10', '2023-07-30 07:30:10', '');
INSERT INTO tb_tmdb VALUES ('31', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:30:38', '2023-07-30 07:30:38', '');
INSERT INTO tb_tmdb VALUES ('32', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:31:36', '2023-07-30 07:31:36', '');
INSERT INTO tb_tmdb VALUES ('33', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:32:18', '2023-07-30 07:32:18', '');
INSERT INTO tb_tmdb VALUES ('34', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:32:37', '2023-07-30 07:32:37', '');
INSERT INTO tb_tmdb VALUES ('35', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:33:36', '2023-07-30 07:33:36', '');
INSERT INTO tb_tmdb VALUES ('36', 'Barbie', 'English', 'She\'s everything. He\'s just Ken.', '', '2023-07-19', '2023', '', '114', '7.6', '10.0', '145000000.00', '578800000.00', 'https://www.youtube.com/watch?v=pBk4NYhWNMM', 'https://image.tmdb.org/t/p/w200//iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 'tt1517268', '346698', '', '2023-07-30 07:36:14', '2023-07-30 07:36:14', '');
INSERT INTO tb_tmdb VALUES ('37', 'The Little Mermaid', 'English', 'Watch and you\'ll see, some day I\'ll be, part of your world!', '', '2023-05-18', '2023', '', '135', '6.4', '10.0', '250000000.00', '556713998.00', 'https://www.youtube.com/watch?v=kpGo2_d3oYE', 'https://image.tmdb.org/t/p/w200//ym1dxyOk4jFcSl4Q2zmRrA5BEEN.jpg', 'tt5971474', '447277', '', '2023-07-30 07:36:58', '2023-07-30 07:36:58', '');
INSERT INTO tb_tmdb VALUES ('38', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:37:23', '2023-07-30 07:37:23', '');
INSERT INTO tb_tmdb VALUES ('39', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:38:30', '2023-07-30 07:38:30', '');
INSERT INTO tb_tmdb VALUES ('40', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:39:23', '2023-07-30 07:39:23', '');
INSERT INTO tb_tmdb VALUES ('41', '', '', '', '', '1970-01-01', '0', '', '0', '0.0', '0.0', '0.00', '0.00', '', '', '', '', '', '2023-07-30 07:40:38', '2023-07-30 07:40:38', '');
INSERT INTO tb_tmdb VALUES ('42', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:40:41', '2023-07-30 07:40:41', '');
INSERT INTO tb_tmdb VALUES ('43', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:49:54', '2023-07-30 07:49:54', '');
INSERT INTO tb_tmdb VALUES ('44', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:50:25', '2023-07-30 07:50:25', '');
INSERT INTO tb_tmdb VALUES ('45', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:50:35', '2023-07-30 07:50:35', '');
INSERT INTO tb_tmdb VALUES ('46', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:52:56', '2023-07-30 07:52:56', '');
INSERT INTO tb_tmdb VALUES ('47', 'Transformers: Rise of the Beasts', 'English', 'Unite or fall.', '', '2023-06-06', '2023', '', '127', '7.5', '10.0', '195000000.00', '0.00', 'https://www.youtube.com/watch?v=ZtuFgnxQMrA', 'https://image.tmdb.org/t/p/w200//gPbM0MK8CP8A174rmUwGsADNYKD.jpg', 'tt5090568', '667538', '', '2023-07-30 07:53:53', '2023-07-30 07:53:53', '');
INSERT INTO tb_tmdb VALUES ('48', 'Ruby Gillman, Teenage Kraken', 'English', 'Discover the hero just beneath the surface.', '', '2023-06-28', '2023', '', '91', '7.8', '10.0', '0.00', '26770000.00', 'https://www.youtube.com/watch?v=u4uyD8FFUIw', 'https://image.tmdb.org/t/p/w200//kgrLpJcLBbyhWIkK7fx1fM4iSvf.jpg', 'tt27155038', '1040148', '', '2023-07-30 07:55:33', '2023-07-30 07:55:33', '');
INSERT INTO tb_tmdb VALUES ('49', 'Resident Evil: Death Island', 'Japanese', 'Destinies intertwined. A world gone mad.', '', '2023-06-22', '2023', '', '91', '7.9', '10.0', '0.00', '53929.00', 'https://www.youtube.com/watch?v=L-vkuA8oqMY', 'https://image.tmdb.org/t/p/w200//qayga07ICNDswm0cMJ8P3VwklFZ.jpg', 'tt26674627', '1083862', '', '2023-07-30 07:56:03', '2023-07-30 07:56:03', '');
INSERT INTO tb_tmdb VALUES ('50', 'Mavka: The Forest Song', 'Ukrainian', '', '', '2023-01-20', '2023', '', '99', '7.5', '7.5', '5000000.00', '11700000.00', 'https://www.youtube.com/watch?v=WZ1je_JJTv8', 'https://image.tmdb.org/t/p/w200//eeJjd9JU2Mdj9d7nWRFLWlrcExi.jpg', 'tt6685538', '459003', '', '2023-07-30 07:56:34', '2023-07-30 07:56:48', '');
INSERT INTO tb_tmdb VALUES ('51', 'Knights of the Zodiac', 'English', 'Go beyond your destiny.', '', '2023-04-27', '2023', '', '113', '6.6', '10.0', '60000000.00', '6794519.00', 'https://www.youtube.com/watch?v=gZ3o0lTfYOs', 'https://image.tmdb.org/t/p/w200//qW4crfED8mpNDadSmMdi7ZDzhXF.jpg', 'tt6528290', '455476', '', '2023-07-30 07:57:38', '2023-07-30 07:57:38', '');
INSERT INTO tb_tmdb VALUES ('52', 'Bad City', 'Japanese', '', '', '2022-07-05', '2022', '', '118', '6.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=-c1J6Q8IfGI', 'https://image.tmdb.org/t/p/w200//zjWAjosdXELkaqCnlc1s8FQtIZL.jpg', 'tt21243618', '987507', '', '2023-07-30 07:58:00', '2023-07-30 07:58:00', '');
INSERT INTO tb_tmdb VALUES ('53', 'Mission: Impossible - Dead Reckoning Part One', 'English', 'We all share the same fate.', '', '2023-01-20', '2023', '', '164', '7.8', '7.8', '291000000.00', '373082750.00', 'https://www.youtube.com/watch?v=HurjfO_TDlQ', 'https://image.tmdb.org/t/p/w200//NNxYkU70HPurnNCSiCjYAmacwm.jpg', 'tt9603212', '575264', '', '2023-07-30 07:58:40', '2023-07-30 07:59:32', '');
INSERT INTO tb_tmdb VALUES ('54', 'John Wick: Chapter 4', 'English', 'No way back, one way out.', '', '2023-03-22', '2023', '', '170', '7.8', '10.0', '90000000.00', '431769198.00', 'https://www.youtube.com/watch?v=yjRHZEUamCc', 'https://image.tmdb.org/t/p/w200//vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'tt10366206', '603692', '', '2023-07-30 08:00:27', '2023-07-30 08:00:27', '');
INSERT INTO tb_tmdb VALUES ('55', 'Mission: Impossible - Dead Reckoning Part One', 'English', 'We all share the same fate.', '', '2023-01-20', '2023', '', '164', '7.8', '7.8', '291000000.00', '373082750.00', 'https://www.youtube.com/watch?v=HurjfO_TDlQ', 'https://image.tmdb.org/t/p/w200//NNxYkU70HPurnNCSiCjYAmacwm.jpg', 'tt9603212', '575264', '', '2023-07-30 08:01:23', '2023-07-30 08:02:25', '');
INSERT INTO tb_tmdb VALUES ('56', 'The Super Mario Bros. Movie', 'English', 'Not all heroes wear capes. Some wear overalls.', '', '2023-04-05', '2023', '', '93', '7.8', '10.0', '100000000.00', '1347013866.00', 'https://www.youtube.com/watch?v=RjNcTBXTk4I', 'https://image.tmdb.org/t/p/w200//qNBAXBIQlnOThrVvA6mA2B5ggV6.jpg', 'tt6718170', '502356', '', '2023-07-30 08:03:05', '2023-07-30 08:03:05', '');
INSERT INTO tb_tmdb VALUES ('57', 'Mr. Car and the Knights Templar', 'Polish', '', '', '2023-07-12', '2023', '', '110', '6.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=Po0pMvWM19s', 'https://image.tmdb.org/t/p/w200//xEAXVe0BzW4K9Ky6eTo4CJwzJ8P.jpg', 'tt27876411', '1059638', '', '2023-07-30 08:03:47', '2023-07-30 08:03:47', '');
INSERT INTO tb_tmdb VALUES ('58', 'Justice League: Warworld', 'English', 'Three heroes. Three worlds. One salvation.', '', '2023-07-25', '2023', '', '90', '7.9', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=IPDLodUE9gg', 'https://image.tmdb.org/t/p/w200//qmevjlNDaWoEughGlXFWHbQ4TaR.jpg', 'tt27687527', '1003581', '', '2023-07-30 08:04:45', '2023-07-30 08:04:45', '');
INSERT INTO tb_tmdb VALUES ('59', 'Mortal Kombat Legends: Battle of the Realms', 'English', '', '', '2021-08-31', '2021', '', '80', '7.8', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=hRRtd7Etato', 'https://image.tmdb.org/t/p/w200//ablrE8IbWcIrAxMmm4gnPn75AMS.jpg', 'tt14901058', '841755', '', '2023-07-30 08:05:41', '2023-07-30 08:05:41', '');
INSERT INTO tb_tmdb VALUES ('60', 'After Ever Happy', 'English', '', '', '2022-08-24', '2022', '', '95', '6.8', '10.0', '0.00', '12467270.00', 'https://www.youtube.com/watch?v=hLQ-5exgctI', 'https://image.tmdb.org/t/p/w200//6b7swg6DLqXCO3XUsMnv6RwDMW2.jpg', 'tt13070038', '744276', '', '2023-07-30 08:06:57', '2023-07-30 08:06:57', '');
INSERT INTO tb_tmdb VALUES ('61', 'Insidious: The Red Door', 'English', 'It ends where it all began.', '', '2023-01-20', '2023', '', '107', '6.0', '6.0', '16000000.00', '155000000.00', 'https://www.youtube.com/watch?v=gexw4P68kbg', 'https://image.tmdb.org/t/p/w200//uS1AIL7I1Ycgs8PTfqUeN6jYNsQ.jpg', 'tt13405778', '614479', '', '2023-07-30 23:15:21', '2023-07-30 23:19:08', '');
INSERT INTO tb_tmdb VALUES ('62', 'Insidious: The Red Door', 'English', 'It ends where it all began.', '', '2023-01-20', '2023', '', '107', '6.0', '6.0', '16000000.00', '155000000.00', 'https://www.youtube.com/watch?v=gexw4P68kbg', 'https://image.tmdb.org/t/p/w200//uS1AIL7I1Ycgs8PTfqUeN6jYNsQ.jpg', 'tt13405778', '614479', '', '2023-07-30 23:22:07', '2023-07-30 23:22:16', '');
INSERT INTO tb_tmdb VALUES ('63', 'Secret Invasion', 'English', 'Who do you trust?', '', '0000-00-00', '2023', '2023-07-26', '0', '7.4', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=Tp_YZNqNBhw', 'https://image.tmdb.org/t/p/w200//f5ZMzzCvt2IzVDxr54gHPv9jlC9.jpg', '', '114472', '6', '2023-07-30 23:26:11', '2023-07-30 23:34:46', '');
INSERT INTO tb_tmdb VALUES ('64', 'The Witcher', 'English', 'Destiny is a beast.', '', '0000-00-00', '2019', '2023-07-27', '47', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=eb90gqGYP9c', 'https://image.tmdb.org/t/p/w200//cZ0d3rtvXPVvuiX22sP79K3Hmjz.jpg', '', '71912', '24', '2023-07-30 23:36:07', '2023-07-30 23:36:07', '');
INSERT INTO tb_tmdb VALUES ('65', 'Love Island', 'English', '', '', '0000-00-00', '2019', '2023-07-29', '43', '7.1', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=fpIehnHmjRY', 'https://image.tmdb.org/t/p/w200//kU2y21cls8WargMaX7KI47URMjD.jpg', '', '90521', '137', '2023-07-30 23:36:48', '2023-07-30 23:36:48', '');
INSERT INTO tb_tmdb VALUES ('66', 'Miraculous: Tales of Ladybug & Cat Noir', 'French', 'Time to de-evilize!', '', '0000-00-00', '2015', '2023-05-14', '24', '8.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=04mqq9T6y_c', 'https://image.tmdb.org/t/p/w200//psDcRgUX38cIeGeADwLRPyO7SYC.jpg', '', '65334', '129', '2023-07-30 23:43:42', '2023-07-30 23:43:42', '');
INSERT INTO tb_tmdb VALUES ('67', 'Jujutsu Kaisen', 'Japanese', 'A boy fights... for ', '', '0000-00-00', '2020', '2023-07-27', '24', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=VpO6APNqY1c', 'https://image.tmdb.org/t/p/w200//3yFHMtdhriig4sm1w8oMQfA2gFN.jpg', '', '95479', '47', '2023-07-30 23:44:51', '2023-07-30 23:44:51', '');
INSERT INTO tb_tmdb VALUES ('68', 'Suits', 'English', 'Nothing is ever black and white', '', '0000-00-00', '2011', '2019-09-25', '42', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=cUnkjEIW2-o', 'https://image.tmdb.org/t/p/w200//vQiryp6LioFxQThywxbC6TuoDjy.jpg', '', '37680', '134', '2023-07-30 23:45:55', '2023-07-30 23:45:55', '');
INSERT INTO tb_tmdb VALUES ('69', 'Suits', 'English', 'Nothing is ever black and white', '', '0000-00-00', '2011', '2019-09-25', '42', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=cUnkjEIW2-o', 'https://image.tmdb.org/t/p/w200//vQiryp6LioFxQThywxbC6TuoDjy.jpg', '', '37680', '134', '2023-07-30 23:46:47', '2023-07-30 23:46:47', '');
INSERT INTO tb_tmdb VALUES ('70', 'Suits', 'English', 'Nothing is ever black and white', '', '0000-00-00', '2011', '2019-09-25', '42', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=cUnkjEIW2-o', 'https://image.tmdb.org/t/p/w200//vQiryp6LioFxQThywxbC6TuoDjy.jpg', '', '37680', '134', '2023-07-30 23:47:03', '2023-07-30 23:47:03', '');
INSERT INTO tb_tmdb VALUES ('71', 'Suits', 'English', 'Nothing is ever black and white', '', '0000-00-00', '2011', '2019-09-25', '42', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=cUnkjEIW2-o', 'https://image.tmdb.org/t/p/w200//vQiryp6LioFxQThywxbC6TuoDjy.jpg', '', '37680', '134', '2023-07-30 23:47:32', '2023-07-30 23:47:32', '');
INSERT INTO tb_tmdb VALUES ('72', 'Grey\'s Anatomy', 'English', 'Begin again.', '', '0000-00-00', '2005', '2023-05-18', '43', '8.3', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//daSFbrt8QCXV2hSwB0hqYjbj681.jpg', '', '1416', '419', '2023-07-30 23:52:08', '2023-07-30 23:52:08', '');
INSERT INTO tb_tmdb VALUES ('73', 'The Good Doctor', 'English', 'Everyone operates differently.', '', '0000-00-00', '2017', '2023-05-01', '43', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=lnY9FWUTY84', 'https://image.tmdb.org/t/p/w200//luhKkdD80qe62fwop6sdrXK9jUT.jpg', '', '71712', '116', '2023-07-30 23:53:03', '2023-07-30 23:53:03', '');
INSERT INTO tb_tmdb VALUES ('74', 'Hijack', 'English', 'Let them think they re in control.', '', '0000-00-00', '2023', '2023-07-26', '0', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', '7', '2023-07-30 23:54:20', '2023-07-30 23:54:20', '');
INSERT INTO tb_tmdb VALUES ('75', 'Hijack', 'English', 'Let them think they re in control.', '', '0000-00-00', '2023', '2023-07-26', '0', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', '7', '2023-07-30 23:55:00', '2023-07-30 23:55:00', '');
INSERT INTO tb_tmdb VALUES ('76', '', '', '', '', '0000-00-00', '0', '0000-00-00', '0', '0.0', '0.0', '0.00', '0.00', '', '', '', '', '0', '2023-07-31 00:09:11', '2023-07-31 00:09:11', '');
INSERT INTO tb_tmdb VALUES ('77', 'Hijack', 'English', 'Let them think they\'re in control.', '', '0000-00-00', '2023', '2023-07-26', '0', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', '7', '2023-07-31 00:10:37', '2023-07-31 00:10:37', '');
INSERT INTO tb_tmdb VALUES ('78', 'Hijack', 'English', 'Let them think they\'re in control.', '', '0000-00-00', '2023', '2023-07-26', '0', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=WxwKzsklvJo', 'https://image.tmdb.org/t/p/w200//szDEqqarPi3YqiPLevm7LObYrDJ.jpg', '', '198102', '7', '2023-07-31 00:11:26', '2023-07-31 00:11:26', '');
INSERT INTO tb_tmdb VALUES ('79', 'The Summer I Turned Pretty', 'English', 'It’s not summer without you.', '', '0000-00-00', '2022', '2023-07-27', '45', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=FfAueqEab30', 'https://image.tmdb.org/t/p/w200//ePpNZ6QCT5ylXniZmfQPyjyFCCM.jpg', '', '194766-the-summer-i-turned-pretty', '15', '2023-07-31 00:12:01', '2023-07-31 00:12:01', '');
INSERT INTO tb_tmdb VALUES ('80', 'Love Island', 'English', 'It is what it is.', '', '0000-00-00', '2015', '2023-07-29', '45', '6.1', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//xcvfGvsEyKm01dIHLh2gxnhM14A.jpg', '', '66636', '505', '2023-07-31 00:15:07', '2023-07-31 00:15:07', '');
INSERT INTO tb_tmdb VALUES ('81', 'The Blacklist', 'English', 'Family. Business.', '', '0000-00-00', '2013', '2023-07-13', '43', '7.6', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=-WYdUaK54fU', 'https://image.tmdb.org/t/p/w200//r935SMphvXppx5bJjbIBNx02fwc.jpg', '', '46952', '218', '2023-07-31 00:15:32', '2023-07-31 00:15:32', '');
INSERT INTO tb_tmdb VALUES ('82', 'Outlander', 'English', 'Our history is now.', '', '0000-00-00', '2014', '2023-07-28', '0', '8.2', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=KAS01FFj1fQ', 'https://image.tmdb.org/t/p/w200//oftZNfyTVNU7IfOqoGLoT8MGvNs.jpg', '', '56570', '91', '2023-07-31 00:15:59', '2023-07-31 00:15:59', '');
INSERT INTO tb_tmdb VALUES ('83', 'Baki Hanma', 'Japanese', '', '', '0000-00-00', '2021', '2023-07-26', '24', '8.1', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=SDOdIjgevrk', 'https://image.tmdb.org/t/p/w200//x145FSI9xJ6UbkxfabUsY2SFbu3.jpg', '', '129600', '26', '2023-07-31 00:16:24', '2023-07-31 00:16:24', '');
INSERT INTO tb_tmdb VALUES ('84', 'The Flash', 'English', 'The fastest man alive.', '', '0000-00-00', '2014', '2023-05-24', '44', '7.8', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=IgVyroQjZbE', 'https://image.tmdb.org/t/p/w200//rg8N7x27Ef6PvlIiioLStf9ZaIO.jpg', '', '60735', '184', '2023-07-31 00:16:49', '2023-07-31 00:16:49', '');
INSERT INTO tb_tmdb VALUES ('85', 'Peaky Blinders', 'English', 'London\'s for the taking', '', '0000-00-00', '2013', '2022-04-03', '58', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=EM12mcTEI88', 'https://image.tmdb.org/t/p/w200//vUUqzWa2LnHIVqkaKVlVGkVcZIW.jpg', '', '60574', '36', '2023-07-31 00:17:09', '2023-07-31 00:17:09', '');
INSERT INTO tb_tmdb VALUES ('86', 'Lucifer', 'English', 'It\'s good to be bad.', '', '0000-00-00', '2016', '2021-09-10', '107', '8.5', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=X4bF_quwNtw', 'https://image.tmdb.org/t/p/w200//ekZobS8isE6mA53RAiGDG93hBxL.jpg', '', '63174', '93', '2023-07-31 00:17:28', '2023-07-31 00:17:28', '');
INSERT INTO tb_tmdb VALUES ('87', 'Law & Order: Special Victims Unit', 'English', 'Standing for victims.', '', '0000-00-00', '1999', '2023-05-18', '43', '8.0', '10.0', '0.00', '0.00', '', 'https://image.tmdb.org/t/p/w200//ywBt4WKADdMVgxTR1rS2uFwMYTH.jpg', '', '2734', '539', '2023-07-31 00:17:55', '2023-07-31 00:17:55', '');
INSERT INTO tb_tmdb VALUES ('88', 'Futurama', 'English', 'We\'re back again! Again!', '', '0000-00-00', '1999', '2023-07-24', '22', '8.4', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=dUHzt5md1x0', 'https://image.tmdb.org/t/p/w200//7RRHbCUtAsVmKI6FEMzZB6Re88P.jpg', '', '615', '134', '2023-07-31 00:18:14', '2023-07-31 00:18:14', '');
INSERT INTO tb_tmdb VALUES ('89', 'The Simpsons', 'English', '', '', '0000-00-00', '1989', '2023-05-21', '22', '8.0', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=_jgYEYERYFQ', 'https://image.tmdb.org/t/p/w200//zI3E2a3WYma5w8emI35mgq5Iurx.jpg', '', '456', '751', '2023-07-31 00:18:33', '2023-07-31 00:18:33', '');
INSERT INTO tb_tmdb VALUES ('90', 'King the Land', 'Korean', 'A 7-star sweet romance.', '', '0000-00-00', '2023', '2023-07-29', '70', '6.4', '10.0', '0.00', '0.00', 'https://www.youtube.com/watch?v=AGF16szMOmo', 'https://image.tmdb.org/t/p/w200//oqpzn6xcqqZpk3DB3z3sT6UFkZp.jpg', '', '198004', '16', '2023-07-31 00:19:14', '2023-07-31 00:19:14', '');

CREATE TABLE `tb_tv_show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_tv_show VALUES ('6', 'Secret Invasion (2023)', 'Nick Fury and Talos discover a faction of shapeshifting Skrulls who have been infiltrating Earth for years.', 'draf', '23,56,58', '51', '34', '1201,1267,1268,1269,1270,1271,1272,1273,1274,1275,1276,1277', '6', '11', '2', '11', '', '63', '2023-07-30 23:26:12', '2023-07-30 23:35:22');
INSERT INTO tb_tv_show VALUES ('7', 'The Witcher (2019)', 'Geralt of Rivia, a mutated monster-hunter for hire, journeys toward his destiny in a turbulent world where people often prove more wicked than beasts.', 'draf', '23,58,56', '52', '35', '1278,1279,1280,1281,1282,1283,1284,1285,1286,1287,1288,1289,1290,1291,1292,1293,1294', '17', '27,16', '2', '12', '', '64', '2023-07-30 23:36:07', '2023-07-30 23:36:07');
INSERT INTO tb_tv_show VALUES ('8', 'Love Island (2019)', 'American version of the British dating reality competition in which ten singles come to stay in a villa for a few weeks and have to couple up with one another. Over the course of those weeks, they face the public vote and might be eliminated from the show. Other islanders join and try to break up the couples.', 'draf', '66', '36', '36', '1295,1296,1297,1298,1299', '17', '11', '2', '13,14', '', '65', '2023-07-30 23:36:48', '2023-07-30 23:36:48');
INSERT INTO tb_tv_show VALUES ('9', 'Miraculous: Tales of Ladybug & Cat Noir (2015) ', 'Normal high school kids by day, protectors of Paris by night! Miraculous follows the heroic adventures of Marinette and Adrien as they transform into Ladybug and Cat Noir and set out to capture akumas, creatures responsible for turning the people of Paris into villains. But neither hero knows the other’s true identity – or that they’re classmates!', 'draf', '23,56,58,59,66,67', '53', '14', '1300,1305,1306', '18', '28,31,32', '2', '15', '', '66', '2023-07-30 23:43:42', '2023-07-30 23:44:09');
INSERT INTO tb_tv_show VALUES ('10', 'Jujutsu Kaisen (2020)', 'Yuji Itadori is a boy with tremendous physical strength, though he lives a completely ordinary high school life. One day, to save a classmate who has been attacked by curses, he eats the finger of Ryomen Sukuna, taking the curse into his own soul. From then on, he shares one body with Ryomen Sukuna. Guided by the most powerful of sorcerers, Satoru Gojo, Itadori is admitted to Tokyo Jujutsu High School, an organization that fights the curses... and thus begins the heroic tale of a boy who became a curse to exorcise a curse, a life from which he could never turn back.', 'draf', '59,58,56', '54', '14', '1307,1308,1309,1310', '19', '14', '2', '16,9,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42', '', '67', '2023-07-30 23:44:51', '2023-07-30 23:44:51');
INSERT INTO tb_tv_show VALUES ('13', 'Suits (2011)', 'While running from a drug deal gone bad, Mike Ross, a brilliant young college-dropout, slips into a job interview with one of New York City\'s best legal closers, Harvey Specter. Tired of cookie-cutter law school grads, Harvey takes a gamble by hiring Mike on the spot after he recognizes his raw talent and photographic memory.', 'draf', '23', '55', '37', '1311,1312,1313,1314,1319,1316', '20', '11', '2', '43', '', '71', '2023-07-30 23:47:32', '2023-07-30 23:47:32');
INSERT INTO tb_tv_show VALUES ('14', 'Grey\'s Anatomy (2005)', 'Follows the personal and professional lives of a group of doctors at Seattle’s Grey Sloan Memorial Hospital.', 'draf', '23', '56', '38', '1320,1336,1337,1338,1339,1340,1341,1342,1343,1344,1345,1346,1347,1348,1349,1350', '21', '11', '2', '44', '', '72', '2023-07-30 23:52:08', '2023-07-30 23:52:08');
INSERT INTO tb_tv_show VALUES ('15', 'The Good Doctor (2017)', 'Shaun Murphy, a young surgeon with autism and savant syndrome, relocates from a quiet country life to join a prestigious hospital\'s surgical unit. Unable to personally connect with those around him, Shaun uses his extraordinary medical gifts to save lives and challenge the skepticism of his colleagues.', 'draf', '23', '57', '14', '1351,1352,1353,1354,1355,1356,1357,1358,1359', '13', '11', '2', '44', '', '73', '2023-07-30 23:53:03', '2023-07-30 23:53:03');
INSERT INTO tb_tv_show VALUES ('16', 'Hijack (2023)', 'When Flight KA29 is hijacked during its seven-hour journey from Dubai to London, Sam Nelson—an accomplished corporate negotiator—tries using his professional skills to save everyone on board. Will this high-risk strategy be his undoing?', 'draf', '23', '', '39', '1360,1361,1362,1363,1364,1365,1366,1367,1368,1369,1370,1371,1372,1373,1374,1375,1376', '6', '15', '2', '45', '', '0', '2023-07-30 23:53:39', '2023-07-30 23:53:39');
INSERT INTO tb_tv_show VALUES ('17', 'Hijack (2023)', 'When Flight KA29 is hijacked during its seven-hour journey from Dubai to London, Sam Nelson—an accomplished corporate negotiator—tries using his professional skills to save everyone on board. Will this high-risk strategy be his undoing?', 'draf', '23', '', '39', '1360,1361,1362,1363,1364,1365,1366,1367,1368,1369,1370,1371,1372,1373,1374,1375,1376', '6', '15', '2', '45', '', '74', '2023-07-30 23:54:20', '2023-07-30 23:54:20');
INSERT INTO tb_tv_show VALUES ('19', 'Hijack (2023)', 'When Flight KA29 is hijacked during its seven-hour journey from Dubai to London, Sam Nelson—an accomplished corporate negotiator—tries using his professional skills to save everyone on board. Will this high-risk strategy be his undoing?', 'draf', '23', '', '39', '1360,1361,1362,1363,1364,1365,1366,1367,1368,1369,1370,1371,1372,1373,1374,1375,1376', '6', '15', '2', '45', '', '0', '2023-07-30 23:55:19', '2023-07-30 23:55:19');
INSERT INTO tb_tv_show VALUES ('20', 'Hijack (2023)', 'When Flight KA29 is hijacked during its seven-hour journey from Dubai to London, Sam Nelson—an accomplished corporate negotiator—tries using his professional skills to save everyone on board. Will this high-risk strategy be his undoing?', 'draf', '23', '', '39', '1360,1361,1362,1363,1364,1365,1366,1367,1368,1369,1370,1371,1372,1373,1374,1375,1376', '6', '15', '2', '45', '', '0', '2023-07-30 23:57:12', '2023-07-30 23:57:12');
INSERT INTO tb_tv_show VALUES ('27', 'Hijack (2023)', 'When Flight KA29 is hijacked during its seven-hour journey from Dubai to London, Sam Nelson—an accomplished corporate negotiator—tries using his professional skills to save everyone on board. Will this high-risk strategy be his undoing?', 'draf', '23', '59', '39', '1360,1361,1362,1363,1364,1365,1366,1367,1368,1369,1370,1371,1372,1373,1374,1375,1376', '6', '15', '2', '45', '', '78', '2023-07-31 00:11:27', '2023-07-31 00:11:27');
INSERT INTO tb_tv_show VALUES ('28', 'The Summer I Turned Pretty (2022)', 'Every summer, Belly and her family head to the Fishers’ beach house in Cousins. Every summer is the same ... until Belly turns sixteen. Relationships will be tested, painful truths will be revealed, and Belly will be forever changed. It’s a summer of first love, first heartbreak and growing up — it\'s the summer she turns pretty.', 'draf', '23,55,56,58,59,66,67', '60', '14', '1393,1414,1415,1416,1417', '15', '11', '2', '47', '', '79', '2023-07-31 00:12:01', '2023-07-31 00:14:40');
INSERT INTO tb_tv_show VALUES ('29', 'Love Island (2015)', 'A stunning cast engages in the ultimate game of love, as they land in a sunshine paradise in search of passion and romance. Each of the glamorous members of the public will live like celebrities in a luxury villa, but in order to stay there, they will not only have to win over the hearts of each other, but also the hearts of the public.', 'draf', '66', '61', '14', '1418,1419,1420,1421,1422,1423,1424,1425,1426,1427,1428,1429,1430,1431,1432', '18', '33,34', '2', '48', '', '80', '2023-07-31 00:15:07', '2023-07-31 00:15:07');
INSERT INTO tb_tv_show VALUES ('30', 'The Blacklist (2013)', 'Raymond \"Red\" Reddington, one of the FBI\'s most wanted fugitives, surrenders in person at FBI Headquarters in Washington, D.C. He claims that he and the FBI have the same interests: bringing down dangerous criminals and terrorists. In the last two decades, he\'s made a list of criminals and terrorists that matter the most but the FBI cannot find because it does not know they exist. Reddington calls this \"The Blacklist\". Reddington will co-operate, but insists that he will speak only to Elizabeth Keen, a rookie FBI profiler.', 'draf', '23,63,65', '62', '40', '1433,1434,1435,1436,1437', '22', '11', '2', '49', '', '81', '2023-07-31 00:15:32', '2023-07-31 00:15:32');
INSERT INTO tb_tv_show VALUES ('31', 'Outlander (2014)', 'The story of Claire Randall, a married combat nurse from 1945 who is mysteriously swept back in time to 1743, where she is immediately thrown into an unknown world where her life is threatened. When she is forced to marry Jamie, a chivalrous and romantic young Scottish warrior, a passionate affair is ignited that tears Claire\'s heart between two vastly different men in two irreconcilable lives.', 'draf', '23,56', '63', '14', '1438,1439,1440,1441', '23', '15,16', '2', '50', '', '82', '2023-07-31 00:16:00', '2023-07-31 00:16:00');
INSERT INTO tb_tv_show VALUES ('32', 'Baki Hanma (2021)', 'To gain the skills he needs to surpass his powerful father, Baki enters Arizona State Prison to take on the notorious inmate known as Mr. Unchained.', 'draf', '59,58', '36', '14', '1442', '16', '14', '2', '12', '', '83', '2023-07-31 00:16:24', '2023-07-31 00:16:24');
INSERT INTO tb_tv_show VALUES ('33', 'The Flash (2014)', 'After a particle accelerator causes a freak storm, CSI Investigator Barry Allen is struck by lightning and falls into a coma. Months later he awakens with the power of super speed, granting him the ability to move through Central City like an unseen guardian angel. Though initially excited by his newfound powers, Barry is shocked to discover he is not the only \"meta-human\" who was created in the wake of the accelerator explosion -- and not everyone is using their new powers for good. Barry partners with S.T.A.R. Labs and dedicates his life to protect the innocent. For now, only a few close friends and associates know that Barry is literally the fastest man alive, but it won\'t be long before the world learns what Barry Allen has become...The Flash.', 'draf', '23,56', '64', '14', '1443,1444,1445,1446,1447,1448,1449', '23', '11', '2', '51', '', '84', '2023-07-31 00:16:49', '2023-07-31 00:16:49');
INSERT INTO tb_tv_show VALUES ('34', 'Peaky Blinders (2013)', 'A gangster family epic set in 1919 Birmingham, England and centered on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby, who means to move up in the world.', 'draf', '23,63', '65', '14', '1450,1451,1452,1453', '22', '15', '2', '52,53', '', '85', '2023-07-31 00:17:09', '2023-07-31 00:17:09');
INSERT INTO tb_tv_show VALUES ('35', 'Lucifer (2016)', 'Bored and unhappy as the Lord of Hell, Lucifer Morningstar abandoned his throne and retired to Los Angeles, where he has teamed up with LAPD detective Chloe Decker to take down criminals. But the longer he\'s away from the underworld, the greater the threat that the worst of humanity could escape.', 'draf', '63,56', '66', '41', '1454,1455,1456,1457,1458,1459,1460,1461', '12', '11', '2', '54,55', '', '86', '2023-07-31 00:17:28', '2023-07-31 00:17:28');
INSERT INTO tb_tv_show VALUES ('36', 'Law & Order: Special Victims Unit (1999)', 'In the criminal justice system, sexually-based offenses are considered especially heinous. In New York City, the dedicated detectives who investigate these vicious felonies are members of an elite squad known as the Special Victims Unit. These are their stories.', 'draf', '63,23,65', '67', '42', '1462,1463,1464,1465', '24', '11', '2', '49', '', '87', '2023-07-31 00:17:55', '2023-07-31 00:17:55');
INSERT INTO tb_tv_show VALUES ('37', 'Futurama (1999)', 'The adventures of a late-20th-century New York City pizza delivery boy, Philip J. Fry, who, after being unwittingly cryogenically frozen for one thousand years, finds employment at Planet Express, an interplanetary delivery company in the retro-futuristic 31st century.', 'draf', '59,57,56', '68', '43', '572,1466,1467,1468,1469,1470,894,1471', '24', '11', '2', '54,56,57', '', '88', '2023-07-31 00:18:14', '2023-07-31 00:18:14');
INSERT INTO tb_tv_show VALUES ('38', 'The Simpsons (1989)', 'Set in Springfield, the average American town, the show focuses on the antics and everyday adventures of the Simpson family; Homer, Marge, Bart, Lisa and Maggie, as well as a virtual cast of thousands. Since the beginning, the series has been a pop culture icon, attracting hundreds of celebrities to guest star. The show has also made name for itself in its fearless satirical take on politics, media and American life in general.', 'draf', '54,59,57', '36', '14', '1472,1473,1474,1475,1476,1477', '25', '11', '2', '54', '', '89', '2023-07-31 00:18:33', '2023-07-31 00:18:33');
INSERT INTO tb_tv_show VALUES ('39', 'King the Land (2023)', 'Amid a tense inheritance fight, a charming heir clashes with his hardworking employee who\'s known for her irresistible smile — which he cannot stand.', 'publik', '23,57', '69', '44', '1478,1479,1480,1481,1482,1483,1484,1485,1486,1487,1488,1489,1490,1491,1492,1493,1494,1495,1496', '6', '3', '2', '58', '', '90', '2023-07-31 00:19:15', '2023-07-31 00:19:15');

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `reset_token` varchar(100) NOT NULL,
  `reset_id` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO tb_users VALUES ('4', 'Rifki Maulana', 'admin', '$2y$10$Aysw4aF5zmcUTnH94qISZeWbJQP/HMT2B.Ygf5baUpIC0fVEQ7Fxa', 'user.png', 'administrator', 'rifkkimaulana@gmail.com', '083130649979', '', 'c9900301-681e-49cc-be74-0488d27396dc');

