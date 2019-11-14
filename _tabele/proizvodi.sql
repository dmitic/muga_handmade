-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 03:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_mugahandmade`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_obuce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materijali` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `djon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pol` enum('Muške','Ženske','Uniseks') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sezona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `napomena` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cena` decimal(9,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `naziv`, `tip_obuce`, `materijali`, `djon`, `boja`, `opis`, `pol`, `sezona`, `napomena`, `cena`, `created_at`, `updated_at`) VALUES
(1, 'Proizvod 1', 'plitka', 'platno', 'đon', 'blue', 'qwe qwe qwe', 'Muške', 'leto', 'qwe qwe qwe', '223.00', '2019-11-09 23:36:55', '2019-11-09 23:36:55'),
(2, 'Proizvod 2', 'Duboke', 'Koža', 'Guma', 'crvena', 'asda asdasd', 'Ženske', 'jesen/zima', 'asd asd asd', '22222.00', '2019-11-09 23:37:58', '2019-11-09 23:37:58'),
(3, 'Cipele 1', 'plitka', 'platno23', 'đon', 'Bela', NULL, 'Muške', 'zima', NULL, '22333.00', '2019-11-09 23:38:34', '2019-11-09 23:38:34'),
(4, 'Cipele 2', 'Duboke', 'Koža', 'Guma', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '22333.00', '2019-11-09 23:40:54', '2019-11-09 23:40:54'),
(5, 'Proizvod 3', 'plitka3', 'platno3', 'đon3', 'blue3', 'qwe qwe qwe', 'Ženske', 'leto3', 'qwe qwe qwe', '2232.00', '2019-11-09 23:36:55', '2019-11-09 23:36:55'),
(6, 'Proizvod 22', 'Duboke2', 'Koža2', 'Guma2', 'crvena2', 'asda asdasd', 'Muške', 'jesen/zima', 'asd asd asd', '2222.00', '2019-11-09 23:37:58', '2019-11-09 23:37:58'),
(7, 'Cipele 13', 'plitka3', 'platno233', 'guma', 'Bela2', NULL, 'Muške', 'zima', NULL, '2233.00', '2019-11-09 23:38:34', '2019-11-09 23:38:34'),
(8, 'Cipele 24', 'Duboke 2', 'Koža34', 'Guma43', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '223.00', '2019-11-09 23:40:54', '2019-11-10 18:19:20'),
(9, 'Patike 1', 'plitka', 'platno', 'đon', 'blue', 'qwe qwe qwe', 'Muške', 'leto', 'qwe qwe qwe', '223.00', '2019-11-09 23:36:55', '2019-11-09 23:36:55'),
(10, 'Čizme 1', 'Duboke', 'Koža', 'Guma', 'crvena', 'asda asdasd', 'Ženske', 'jesen/zima', 'asd asd asd', '22222.00', '2019-11-09 23:37:58', '2019-11-09 23:37:58'),
(11, 'Sandale 1', 'plitka', 'platno23', 'đon', 'Bela', NULL, 'Muške', 'zima', NULL, '22333.00', '2019-11-09 23:38:34', '2019-11-09 23:38:34'),
(12, 'Papuče 1', 'Duboke', 'Koža', 'Guma', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '22333.00', '2019-11-09 23:40:54', '2019-11-09 23:40:54'),
(13, 'Patike 2', 'plitka3', 'platno3', 'đon3', 'blue3', 'qwe qwe qwe', 'Ženske', 'leto3', 'qwe qwe qwe', '2232.00', '2019-11-09 23:36:55', '2019-11-09 23:36:55'),
(14, 'Čizme 2', 'Duboke2', 'Koža2', 'Guma2', 'crvena2', 'asda asdasd', 'Muške', 'jesen/zima', 'asd asd asd', '2222.00', '2019-11-09 23:37:58', '2019-11-09 23:37:58'),
(15, 'Sandale 2', 'plitka3', 'platno233', 'guma', 'Bela2', NULL, 'Muške', 'zima', NULL, '2233.00', '2019-11-09 23:38:34', '2019-11-09 23:38:34'),
(16, 'Papuče 2', 'Duboke2', 'Koža34', 'Guma43', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '223.00', '2019-11-09 23:40:54', '2019-11-09 23:40:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
