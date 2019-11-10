-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 02:26 AM
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakture`
--

CREATE TABLE `fakture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `narudzbenica_br` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` bigint(20) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `napomena_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `napomena_admin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukup_suma` decimal(10,2) DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakture`
--

INSERT INTO `fakture` (`id`, `narudzbenica_br`, `user_id`, `name`, `first_name`, `last_name`, `address`, `zip`, `city`, `state`, `napomena_user`, `napomena_admin`, `ukup_suma`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, '2019-1', 5, 'djura', 'Djura', 'Djuric', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', '2019-11-09 23:00:00', '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(2, '2019-2', 2, 'PeraKojot', 'Pera', 'Kojot', '21asd ', 10000, 'aaaaa', 'aaaaa', ' asd ', '', '4444.00', NULL, '2019-11-10 00:52:03', '2019-11-10 00:52:03'),
(3, '2019-3', 4, 'pperic', 'Pera', 'Peric', 'asd asd a', 21000, 'Petrograd', 'Perunija', '', '', '555.00', '2019-11-10 00:53:09', '2019-11-10 00:53:09', '2019-11-10 00:53:09'),
(4, '2019-4', 1, 'dmitic', 'Dragab', 'Mitic', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(5, '2019-5', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(6, '2019-6', 2, 'perakojot', 'Pera', 'Kojot', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', NULL, '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(7, '2019-7', 1, 'dmitic', 'Dragan', 'Mitic', '21asd ', 10080, 'aaaaa', 'aaaaa', ' asd ', '', '4444.00', NULL, '2019-11-10 00:52:03', '2019-11-10 00:52:03'),
(8, '2019-8', 4, 'pperic', 'Pera', 'Peric', 'asd asd a', 21000, 'Petrograd', 'Perunija', '', '', '555.00', '2019-11-10 00:53:09', '2019-11-10 00:53:09', '2019-11-10 00:53:09'),
(9, '2019-9', 5, 'djura', 'Djura', 'Djuric', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', NULL, '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(10, '2019-10', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', NULL, '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(11, '2019-11', 5, 'djura', 'Djura', 'Djuric', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', '2019-11-09 23:00:00', '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(12, '2019-12', 1, 'dmitic', 'Dragab', 'Mitic', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(13, '2019-13', 1, 'dmitic', 'Dragan', 'Mitic', '21asd ', 10080, 'aaaaa', 'aaaaa', ' asd ', '', '4444.00', NULL, '2019-11-10 00:52:03', '2019-11-10 00:52:03'),
(14, '2019-14', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', NULL, '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(15, '2019-15', 5, 'djura', 'Djura', 'Djuric', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', '2019-11-09 23:00:00', '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(16, '2019-16', 4, 'pperic', 'Pera', 'Peric', 'asd asd a', 21000, 'Petrograd', 'Perunija', '', '', '555.00', '2019-11-10 00:53:09', '2019-11-10 00:53:09', '2019-11-10 00:53:09'),
(17, '2019-17', 1, 'dmitic', 'Dragab', 'Mitic', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(18, '2019-18', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(19, '2019-19', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', NULL, '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(20, '2019-20', 5, 'djura', 'Djura', 'Djuric', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', '2019-11-09 23:00:00', '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(21, '2019-21', 1, 'dmitic', 'Dragab', 'Mitic', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(22, '2019-22', 5, 'djura', 'Djura', 'Djuric', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', '2019-11-09 23:00:00', '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(23, '2019-23', 2, 'PeraKojot', 'Pera', 'Kojot', '21asd ', 10000, 'aaaaa', 'aaaaa', ' asd ', '', '4444.00', NULL, '2019-11-10 00:52:03', '2019-11-10 00:52:03'),
(24, '2019-24', 4, 'pperic', 'Pera', 'Peric', 'asd asd a', 21000, 'Petrograd', 'Perunija', '', '', '555.00', '2019-11-10 00:53:09', '2019-11-10 00:53:09', '2019-11-10 00:53:09'),
(25, '2019-25', 1, 'dmitic', 'Dragab', 'Mitic', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(26, '2019-26', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', '2019-11-10 00:56:10', '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(27, '2019-27', 2, 'perakojot', 'Pera', 'Kojot', 'asdas', 37000, 'Krusevac', 'Not in USA', 'asd asd asd ', '', '222.00', NULL, '2019-11-10 00:50:39', '2019-11-10 00:50:39'),
(28, '2019-28', 1, 'dmitic', 'Dragan', 'Mitic', '21asd ', 10080, 'aaaaa', 'aaaaa', ' asd ', '', '4444.00', NULL, '2019-11-10 00:52:03', '2019-11-10 00:52:03'),
(29, '2019-29', 4, 'pperic', 'Pera', 'Peric', 'asd asd a', 21000, 'Petrograd', 'Perunija', '', '', '555.00', '2019-11-10 00:53:09', '2019-11-10 00:53:09', '2019-11-10 00:53:09'),
(30, '2019-30', 5, 'djura', 'Djura', 'Djuric', 'asd asd asd ', 22000, 'Bgd', 'Srb', 'asd qwd ', '', '666.00', NULL, '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(31, '2019-31', 3, 'mmikic', 'Mika', 'Mikić', 'asd asd as', 32000, 'Sevojno', 'Tunguzija', 'asd asd ', '', '888.00', NULL, '2019-11-10 00:56:10', '2019-11-10 00:56:10'),
(32, '2019-32', 5, 'djura', 'Djura', 'Djuric', 'asdas', 37000, 'Krussevac', 'Not s in USA', 'asds asd asd ', '', '222.00', '2019-11-09 23:00:00', '2019-11-09 23:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_27_123826_create_user_details_table', 1),
(5, '2019_10_27_134438_create_proizvodi_table', 1),
(6, '2019_10_27_134500_create_slike_table', 1),
(7, '2019_10_27_135555_create_kategorije_table', 1),
(8, '2019_10_27_143245_create_fakture_table', 1),
(9, '2019_11_07_170751_create_stavke_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, 'Cipele 24', 'Duboke2', 'Koža34', 'Guma43', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '223.00', '2019-11-09 23:40:54', '2019-11-09 23:40:54'),
(9, 'Patike 1', 'plitka', 'platno', 'đon', 'blue', 'qwe qwe qwe', 'Muške', 'leto', 'qwe qwe qwe', '223.00', '2019-11-09 23:36:55', '2019-11-09 23:36:55'),
(10, 'Čizme 1', 'Duboke', 'Koža', 'Guma', 'crvena', 'asda asdasd', 'Ženske', 'jesen/zima', 'asd asd asd', '22222.00', '2019-11-09 23:37:58', '2019-11-09 23:37:58'),
(11, 'Sandale 1', 'plitka', 'platno23', 'đon', 'Bela', NULL, 'Muške', 'zima', NULL, '22333.00', '2019-11-09 23:38:34', '2019-11-09 23:38:34'),
(12, 'Papuče 1', 'Duboke', 'Koža', 'Guma', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '22333.00', '2019-11-09 23:40:54', '2019-11-09 23:40:54'),
(13, 'Patike 2', 'plitka3', 'platno3', 'đon3', 'blue3', 'qwe qwe qwe', 'Ženske', 'leto3', 'qwe qwe qwe', '2232.00', '2019-11-09 23:36:55', '2019-11-09 23:36:55'),
(14, 'Čizme 2', 'Duboke2', 'Koža2', 'Guma2', 'crvena2', 'asda asdasd', 'Muške', 'jesen/zima', 'asd asd asd', '2222.00', '2019-11-09 23:37:58', '2019-11-09 23:37:58'),
(15, 'Sandale 2', 'plitka3', 'platno233', 'guma', 'Bela2', NULL, 'Muške', 'zima', NULL, '2233.00', '2019-11-09 23:38:34', '2019-11-09 23:38:34'),
(16, 'Papuče 2', 'Duboke2', 'Koža34', 'Guma43', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '223.00', '2019-11-09 23:40:54', '2019-11-09 23:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proizvod_id` bigint(20) UNSIGNED NOT NULL,
  `slika` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `proizvod_id`, `slika`) VALUES
(1, 1, 'Proizvod-1/1573346215_slika_1.jpg'),
(2, 1, 'Proizvod-1/1573346221_slika_11.jpg'),
(3, 2, 'Proizvod-2/1573346278_slika_4.jpg'),
(4, 3, 'Cipele-1/1573346314_slika_3.jpg'),
(5, 4, 'Cipele-2/1573346454_slika_2.jpg'),
(6, 4, 'Cipele-2/1573346459_slika_21.jpg'),
(7, 4, 'Cipele-2/1573346464_slika_22.jpg'),
(8, 8, 'Cipele-24/1573346573_slika_1.jpg'),
(9, 8, 'Cipele-24/1573346578_slika_11.jpg'),
(10, 7, 'Cipele-13/1573346585_slika_4.jpg'),
(11, 6, 'Proizvod-22/1573346594_slika_22.jpg'),
(12, 6, 'Proizvod-22/1573346599_slika_21.jpg'),
(13, 5, 'Proizvod-3/1573346609_slika_3.jpg'),
(14, 5, 'Proizvod-3/1573346613_slika_4.jpg'),
(15, 12, 'Papuče-1/1573346736_slika_4.jpg'),
(16, 12, 'Papuče-1/1573346740_muga1.png'),
(17, 12, 'Papuče-1/1573346745_slika_2.jpg'),
(18, 16, 'Papuče-2/1573346754_slika_1.jpg'),
(19, 16, 'Papuče-2/1573346758_muga.jpg'),
(20, 11, 'Sandale-1/1573346766_slika_3.jpg'),
(21, 15, 'Sandale-2/1573346774_slika_1.jpg'),
(22, 15, 'Sandale-2/1573346778_slika_4.jpg'),
(23, 10, 'Čizme-1/1573346793_slika_4.jpg'),
(24, 14, 'Čizme-2/1573346804_slika_22.jpg'),
(25, 14, 'Čizme-2/1573346809_slika_21.jpg'),
(26, 14, 'Čizme-2/1573346813_slika_2.jpg'),
(27, 13, 'Patike-2/1573346825_slika_3.jpg'),
(28, 13, 'Patike-2/1573346830_muga1.png'),
(29, 13, 'Patike-2/1573346834_slika_4.jpg'),
(30, 9, 'Patike-1/1573346841_muga1.png'),
(31, 9, 'Patike-1/1573346845_slika_1.jpg'),
(32, 9, 'Patike-1/1573346851_slika_4.jpg'),
(33, 7, 'Cipele-13/1573346868_slika_22.jpg'),
(34, 7, 'Cipele-13/1573346871_slika_2.jpg'),
(35, 2, 'Proizvod-2/1573346882_slika_3.jpg'),
(36, 2, 'Proizvod-2/1573346887_slika_1.jpg'),
(37, 3, 'Cipele-1/1573346897_slika_4.jpg'),
(38, 3, 'Cipele-1/1573346902_slika_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stavke`
--

CREATE TABLE `stavke` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fakture_id` bigint(20) UNSIGNED NOT NULL,
  `proizvod_id` bigint(20) NOT NULL,
  `naziv_proizvoda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaziste` decimal(3,1) NOT NULL,
  `pojedinacna_cena` decimal(9,2) NOT NULL,
  `kolicina` bigint(20) NOT NULL,
  `ukupna_cena` decimal(9,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stavke`
--

INSERT INTO `stavke` (`id`, `fakture_id`, `proizvod_id`, `naziv_proizvoda`, `boja`, `gaziste`, `pojedinacna_cena`, `kolicina`, `ukupna_cena`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'asdas', 'asd', '23.0', '123.00', 2, '444.00', '2019-11-10 01:12:42', NULL),
(2, 1, 12, 'aaw ', ' asd as', '22.0', '111.00', 4, '444.00', '2019-11-10 01:12:42', NULL),
(5, 11, 11, 'wqew q', 'weqeqweq', '33.0', '123.00', 4, '444.00', '2019-11-10 01:14:40', NULL),
(6, 15, 5, 'dasdasdasd', 'qweqweqwe', '33.0', '222.00', 4, '444.00', '2019-11-10 01:15:06', NULL),
(7, 4, 15, 'aeqweqwe', 'qweqweqw', '12.0', '123.00', 3, '321.00', '2019-11-10 01:16:14', NULL),
(8, 4, 16, 'asdasd ', 'wq qw', '22.0', '111.00', 2, '222.00', '2019-11-10 01:16:14', NULL),
(9, 4, 15, 'aeqweqwe', 'qweqweqw', '12.0', '123.00', 3, '321.00', '2019-11-10 01:16:18', NULL),
(10, 4, 16, 'asdasd ', 'wq qw', '22.0', '111.00', 2, '222.00', '2019-11-10 01:16:18', NULL),
(11, 5, 2, 'asdas', 'aasdasd', '22.0', '222.00', 4, '888.00', '2019-11-10 01:22:29', NULL),
(12, 5, 13, 'asdasdas', 'asdas', '13.0', '111.00', 3, '3333.00', '2019-11-10 01:22:29', NULL),
(13, 12, 15, 'weqwed', 'qwdqwqw', '22.0', '123.00', 32, '123123.00', '2019-11-01 09:11:47', NULL),
(14, 18, 14, 'asdasdasd', 'asasd', '33.0', '234.00', 2, '4432.00', '2019-11-01 09:19:54', NULL),
(15, 12, 10, 'qweqwe', 'qweqweqwe', '22.0', '123.00', 3, '321.00', '2019-11-10 01:22:29', NULL),
(16, 21, 13, 'dsfdef ew', 'wer weewr', '33.0', '222.00', 4, '555.00', '2019-11-10 01:22:29', NULL),
(17, 21, 17, 'adww', 'asdasdas', '12.0', '231.00', 2, '444.00', '2019-11-10 01:22:29', NULL),
(18, 23, 16, 'weq we', 'qwe qwe', '22.0', '123.00', 2, '321.00', '2019-11-10 01:22:29', NULL),
(19, 10, 11, 'we qweqwe ', 'qweqw e', '23.0', '123.00', 3, '321.00', '2019-11-10 01:22:29', NULL),
(20, 3, 15, 'wqeqweqw', 'qweqweqwe', '22.0', '234.00', 432, '12324.00', '2019-11-10 01:22:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dmitic', 'dmitic@gmail.com', NULL, '$2y$10$HYncol9BmT9jswjfUJlHh.q8OisXFKrESaBU/.6Rr8OtRbaid2diK', 1, '0694490641', 'PMoijZD6a4YbkAdINFlBCk7XkVadZmuMguvxTScTOKzMMmlnbgWCWOzIN8DW', '2019-11-09 22:53:57', '2019-11-09 22:53:57'),
(2, 'PeraKojot', 'pera@kojot.com', NULL, '$2y$10$Ef.Maw7oS6PVG7V9jOT28euZ0ZrHugIF0B08RL.jcK5mya/BYTi6e', 0, '0698761433', NULL, '2019-11-09 22:54:32', '2019-11-09 22:54:32'),
(3, 'mmikić', 'mika@mika.com', NULL, '$2y$10$fgfHsF4kEyTUASTZIFp.WOxaHZo9OV0hKb4HafXxBsXPiWziq1Aji', 0, '12345678', NULL, '2019-11-09 22:56:18', '2019-11-09 22:57:33'),
(4, 'pperic', 'pera@pera.com', NULL, '$2y$10$xvnTvQMqBI2vmVlhEPBZN.EKL6FjQ4xQRKEfxmNXsmUg8t.L8U.He', 0, '87654321', NULL, '2019-11-09 22:58:06', '2019-11-09 22:58:06'),
(5, 'djura', 'djura@djura.com', NULL, '$2y$10$bTt9biLETm3ddqpb3qGqs.FtDnFr6jnSafckDldCB0a16aGgnR9ey', 0, '164982173', NULL, '2019-11-09 23:24:07', '2019-11-09 23:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` bigint(20) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `first_name`, `last_name`, `address`, `zip`, `city`, `state`, `created_at`, `updated_at`) VALUES
(1, 2, 'Pera', 'Kojot', 'Acme street 25', 15000, 'Acme Town', 'Acme', '2019-11-09 22:55:49', '2019-11-09 22:55:49'),
(2, 3, 'Mika', 'Mikić', 'Mikina street 29', 18000, 'Mikograd', 'Mikinija', '2019-11-09 22:56:51', '2019-11-09 22:56:51'),
(3, 4, 'Pera', 'Perić', 'Perina 22', 21000, 'Petrograd', 'Perunija', '2019-11-09 22:58:38', '2019-11-09 22:58:38'),
(4, 1, 'Dragan', 'Mitić', 'JG 277', 11080, 'Bgd', 'Srb', '2019-11-09 23:23:26', '2019-11-09 23:23:26'),
(5, 5, 'Đura', 'Đurić', 'Đurina 18', 23000, 'Niš', 'Srb', '2019-11-09 23:34:36', '2019-11-09 23:34:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakture`
--
ALTER TABLE `fakture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slike_proizvod_id_foreign` (`proizvod_id`);

--
-- Indexes for table `stavke`
--
ALTER TABLE `stavke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stavke_fakture_id_foreign` (`fakture_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_details_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakture`
--
ALTER TABLE `fakture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `stavke`
--
ALTER TABLE `stavke`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slike`
--
ALTER TABLE `slike`
  ADD CONSTRAINT `slike_proizvod_id_foreign` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stavke`
--
ALTER TABLE `stavke`
  ADD CONSTRAINT `stavke_fakture_id_foreign` FOREIGN KEY (`fakture_id`) REFERENCES `fakture` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
