-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `comm`;
CREATE TABLE `comm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(250) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `comm` (`id`, `comment`, `user`) VALUES
(2,	'bagus gan!',	6),
(3,	'tolong kasih dark mode',	6),
(7,	'aku coba juga ah',	7),
(9,	'nyimak gan',	25);

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(46) NOT NULL,
  `done` tinyint(2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `items` (`id`, `name`, `done`, `created`, `user`) VALUES
(23,	'Transfer kos',	1,	'2020-05-10 08:28:32',	6),
(50,	'lemburrr',	1,	'2020-05-10 07:19:52',	6),
(53,	'ini juga',	1,	'2020-05-12 19:45:12',	7),
(55,	'ini juga ya',	1,	'2020-05-12 13:33:06',	7),
(56,	'Ini buat coba-coba',	0,	'2020-05-10 09:22:18',	7),
(57,	'fitur tambah tugas (create)',	1,	'2020-05-10 17:09:10',	7),
(58,	'fitur lihat tugas (read)',	1,	'2020-05-10 17:09:46',	7),
(59,	'fitur selesaikan dan urungkan tugas (update)',	1,	'2020-05-10 17:10:18',	7),
(60,	'fitur hapus tugas (delete)',	1,	'2020-05-10 17:10:59',	7),
(61,	'fitur cari tugas blm selesai (search + live)',	1,	'2020-05-10 17:13:12',	7),
(62,	'fitur voice typing',	0,	'2020-05-10 17:13:04',	7),
(64,	'page about',	1,	'2020-05-12 08:05:24',	7),
(65,	'fitur rating rajin malas',	0,	'2020-05-10 20:38:00',	7),
(66,	'fitur prioritas tugas',	0,	'2020-05-10 20:38:53',	7),
(67,	'fitur darkmode',	0,	'2020-05-10 20:44:31',	7),
(68,	'fitur share sosmed',	0,	'2020-05-11 03:10:27',	7),
(70,	'laporan pbw',	0,	'2020-05-11 15:36:09',	7),
(71,	'paper metpen',	1,	'2020-05-11 15:36:36',	7),
(72,	'awokawokawok',	0,	'2020-05-11 16:54:37',	14),
(74,	'prikitiew',	1,	'2020-05-11 19:40:32',	14),
(75,	'hola-holo',	0,	'2020-05-12 08:11:17',	14),
(76,	'jos-jos',	0,	'2020-05-11 16:55:04',	14),
(82,	'tugas lagi',	0,	'2020-05-12 11:52:45',	25),
(83,	'Kerja yas',	0,	'2020-05-12 14:38:54',	28),
(84,	'Apa dong',	0,	'2020-05-12 15:18:09',	29),
(85,	'menilai web',	0,	'2020-05-12 18:40:11',	31),
(87,	'Bangun pagi/tdk tidur sama sekali',	0,	'2020-05-12 19:30:45',	7),
(88,	'halo sayangku',	0,	'2020-05-12 21:15:56',	7),
(89,	'aku sayang kamu, ',	0,	'2020-05-12 21:16:34',	7);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(6,	'coba',	'$2y$10$lKD96qTcwgURWYT0fwMws.ZhqUORySjX9EO.cplT11s.UW.3taFVW'),
(7,	'aldi',	'$2y$10$sGHc.Mgs.bc9a1FrI4yGxeYV/y6qmNAk37/v3kUoUsZslCUYSvKxS'),
(25,	'123',	'$2y$10$uAAPN0MMQEsfn8.n0o9NRuxhJgisbB9Lhn4MF5nFcYEeVMZaPqQ1K'),
(26,	'fany',	'$2y$10$PrXGBoeQwIVrfBh1CTGrSuMq6OAVS9x.8i0unDsJjwJ7QyaydBBEK'),
(27,	'221810138',	'$2y$10$DaFVZgvDrmdI.MgfHYG26eZcfFtGlYKAxrxnPtICVNt9RN7pp15dq'),
(28,	'Anis',	'$2y$10$cxtg5N4ZhkuTv2iCzf.oPOcQM/hoZP6QSI2I2hgBqpUiAynVi2mEG'),
(29,	'Mukhamad Rizal ',	'$2y$10$mJpst4y4UmQgHH5yJJQDFuCxvqaWA43OWx9QJvRyOn8XNXSO7aFy2'),
(34,	'umar.dahlan@gma',	'$2y$10$Nz50BQfpq0UAoXh0uey3A.onqSvQ2EjOvM7Unxu9UF42My0b/8lZ2');

-- 2020-05-13 01:51:47