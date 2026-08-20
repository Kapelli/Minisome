-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Isäntä: 127.0.0.1:3306
-- Luontiaika: 20.08.2026 klo 06:45
-- Palvelimen versio: 8.4.7
-- PHP-versio 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Tietokanta: `minisome`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `posts`
--

INSERT INTO `posts` (`id`, `author`, `content`, `created_at`) VALUES
(1, 'Testi1ljk', 'Testaus22', '2026-08-11 07:57:38'),
(2, 'Testi2', 'Testaus222', '2026-08-11 07:57:38'),
(3, 'testi3 muokattu', 'testaus3', '2026-08-11 07:58:20'),
(4, 'testi4', 'testaus4', '2026-08-11 07:58:20'),
(5, 'testi5', 'testaus5', '2026-08-11 07:59:20'),
(13, 'Jarkko', 'miksi tämä sivusto on niin huono bro 😭✌️', '2026-08-13 10:54:00'),
(14, 'jarkko', 'jarkko', '2026-08-13 10:55:57'),
(15, 'testi3', 'testaus3muokattu', '2026-08-18 12:45:10'),
(16, 'sfd', 'sfd', '2026-08-18 13:20:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
