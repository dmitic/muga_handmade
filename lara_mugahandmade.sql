-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 02:53 AM
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
  `narudzbenica_br` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` bigint(20) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `napomena_user` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `napomena_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukup_suma` decimal(10,2) DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakture`
--

INSERT INTO `fakture` (`id`, `narudzbenica_br`, `user_id`, `name`, `first_name`, `last_name`, `address`, `zip`, `city`, `state`, `napomena_user`, `napomena_admin`, `ukup_suma`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, '2019-11-00001', 1, 'admin', 'Admin', 'Adminović', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '1990.90', NULL, '2019-11-14 00:26:20', '2019-11-14 00:26:20'),
(2, '2019-11-00002', 1, 'admin', 'Admin', 'Adminović', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '5981.80', '2019-11-14 19:24:57', '2019-11-14 00:33:24', '2019-11-14 19:24:57'),
(3, '2019-11-00003', 1, 'admin', 'Admin', 'Adminović', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '6990.90', '2019-11-14 19:24:26', '2019-11-14 01:10:07', '2019-11-14 19:24:26'),
(6, '2019-11-00006', 1, 'admin', 'Admin', 'Adminović', 'Adminova 35', 37000, 'Admingrad', 'Adminija', 'ad asd asd asd', NULL, '11581.80', '2019-11-14 19:24:47', '2019-11-14 11:24:59', '2019-11-14 19:24:47'),
(8, '2019-11-00008', 3, 'dmitic', 'Nije upisano', 'Nije upisano', 'Nije upisano', 0, 'Nije upisano', 'Nije upisano', '', NULL, '15881.80', '2019-11-14 19:25:31', '2019-11-14 11:41:39', '2019-11-14 19:25:31'),
(11, '2019-11-00011', 1, 'admin', 'Admin', 'Adminović', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '3890.90', NULL, '2019-11-14 12:39:03', '2019-11-14 12:39:03'),
(13, '2019-11-00013', 3, 'dmitic', 'Nije upisano', 'Nije upisano', 'Nije upisano', 0, 'Nije upisano', 'Nije upisano', '', NULL, '12772.70', '2019-11-14 19:23:19', '2019-11-14 18:34:54', '2019-11-14 19:23:19'),
(15, '2019-11-00015', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', 'dfg df gdf', NULL, '6880.90', NULL, '2019-11-14 20:23:29', '2019-11-14 20:23:29'),
(16, '2019-11-00016', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '6880.90', NULL, '2019-11-14 20:25:42', '2019-11-14 20:25:42'),
(130, '2019-11-00130', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', 'adsf w t4 terdfd gh', NULL, '24533.60', NULL, '2019-11-14 23:29:40', '2019-11-14 23:29:40'),
(133, '2019-11-00133', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '30513.60', NULL, '2019-11-14 23:31:33', '2019-11-14 23:31:33'),
(134, '2019-11-00134', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '24943.60', NULL, '2019-11-14 23:37:23', '2019-11-14 23:37:23'),
(135, '2019-11-00135', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', 'asdasdasd', NULL, '30254.50', NULL, '2019-11-14 23:38:29', '2019-11-14 23:38:29'),
(136, '2019-11-00136', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '11471.80', NULL, '2019-11-15 00:08:58', '2019-11-15 00:08:58'),
(137, '2019-11-00137', 1, 'admin', 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '', NULL, '6880.90', NULL, '2019-11-15 00:46:58', '2019-11-15 00:46:58');

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dmspamftw@gmail.com', '$2y$10$bcfd1fYyzwkMTgVKEpdgY.vr34Fzy7LJ.aVyzx/sVGFzSZrlMydyG', '2019-11-14 22:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_obuce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materijali` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postava` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `proizvodi` (`id`, `naziv`, `tip_obuce`, `materijali`, `postava`, `djon`, `boja`, `opis`, `pol`, `sezona`, `napomena`, `cena`, `created_at`, `updated_at`) VALUES
(1, 'M02 – Muške cipele \"Oxford\" #2', 'plitka', 'Velur', 'Koža', 'Mikro-Guma, presvučen kožom', 'Plava', 'Wingtip Oxford cipela, izradjena od nafinijeg velura, prirodnog porekla, na izuzetno udodbnom ravnom djonu od mikro-gume, idealan izbor za svakodnevne aktivnosti, kao I za najsvečanije prilike.', 'Muške', 'Proleće/Leto/Jesen', NULL, '1990.90', '2019-11-14 00:24:56', '2019-11-14 00:24:56'),
(2, 'M02 – Muške cipele \"Oxford\" #2', 'Plitka', 'Nubuk', 'Koža', 'Mikro-Guma, presvučen kožom', 'braon', 'Wingtip Oxford cipele, izradjene od prirodnog nubuka, praktične, jednostavne, savršeno se uklapaju u Casual stil.', 'Muške', 'Proleće/Leto/Jesen', NULL, '3990.90', '2019-11-14 00:32:25', '2019-11-14 00:32:25'),
(3, 'W07 – Ženske cipele \"Oxford\" #2', 'Plitka', 'Napa', 'Koža', 'Mikro-Guma Eva + Krupon', 'bela', '“Dajte devojci prave cipele i ona može da osvoji svet!” - Marilyn Monroe', 'Ženske', 'Proleće/Leto/Jesen', NULL, '6990.90', '2019-11-14 00:41:26', '2019-11-14 00:41:26'),
(4, 'M11 – Muške cipele \"Double M2\"', 'Plitka', 'Boks', 'Koža', 'TR Guma', 'crna', 'Double Monk cipele, sa elementima Wingtip Oxford cipela, izradjene od teleće Boks kože, smeštene u djon namenjen patikama, prošivene – naizgled, komplikovana I nespojiva kombinacija, ali kao gotov proizvod, idealna za svaku priliku.', 'Muške', 'Proleće/Leto/Jesen', NULL, '4590.90', '2019-11-14 00:43:31', '2019-11-14 00:43:31'),
(5, 'M02 – Muške cipele \"Oxford\" #2', 'Plitka', 'Velur', 'Koža', 'TR Guma', 'siva', 'Wingtip Oxford cipele, verovatno će zauvek biti u samom vrhu modnih lista (da, da Kiborže, postoje I modne liste, a ne samo kladioničarske). Idealne za svaku priliku, uklopive u gotovo svaki odevni stil, izradjene od prirodnih materijala, predstavljaju “MUST HAVE” u mnogim sezonama iza nas, ove sezone, a sigurno I u još mnogim sezonama pred nama.', 'Muške', 'Proleće/Leto/Jesen', NULL, '8890.90', '2019-11-14 00:44:52', '2019-11-14 00:44:52'),
(6, 'M02 – Muške cipele \"Oxford\" #2', 'Plitka', 'Velur', 'Koža', 'Mikro-Guma, presvučen kožom', 'plava', NULL, 'Muške', 'Proleće/Leto/Jesen', NULL, '3590.90', '2019-11-14 11:52:54', '2019-11-14 11:52:54'),
(7, 'W06 – Ženske čizme poluduboke', 'Duboka', 'Velur', 'Filc(čoja), Vuna, Koža', 'TR Guma', 'Siva', 'Polu-duboke čizme, izradjene od govedjeg špalt-vlelura, sa postavom koju možete odabrati po želji, može biti od filca, vune ili kože, sa visokim djonom I krupnim kramponima, teško promočive, idealne za zimu I hladno vreme.', 'Ženske', 'Jesen/Zima', NULL, '5890.90', '2019-11-14 12:01:11', '2019-11-14 12:01:11'),
(9, 'W06 – Ženske čizme poluduboke', 'Duboka', 'Nubuk', 'Filc(čoja), Vuna, Koža', 'TR Guma', 'Crvena', NULL, 'Ženske', 'Jesen/Zima', NULL, '3890.90', '2019-11-14 12:36:57', '2019-11-14 12:36:57'),
(10, 'W03 – Ženske cipele \"Paris\"', 'Plitka', 'Velur + Presovani Velur', 'Koža', 'Mikro-Guma Eva', 'roza', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '2990.00', '2019-11-14 12:45:30', '2019-11-14 19:14:18');

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
(1, 1, 'M02_–_Muske_cipele_Oxford_2/1573694696_1_(1).jpg'),
(2, 1, 'M02_–_Muske_cipele_Oxford_2/1573694710_1_(2).jpg'),
(3, 1, 'M02_–_Muske_cipele_Oxford_2/1573694715_1_(3).jpg'),
(4, 2, 'M02_–_Muske_cipele_Oxford_2/1573695145_2_(1).jpg'),
(5, 2, 'M02_–_Muske_cipele_Oxford_2/1573695151_2_(2).jpg'),
(6, 3, 'W07_–_zenske_cipele_Oxford_2/1573695686_3_(1).jpg'),
(7, 3, 'W07_–_zenske_cipele_Oxford_2/1573695694_3_(1).jpg'),
(8, 3, 'W07_–_zenske_cipele_Oxford_2/1573695700_3_(2).jpg'),
(9, 4, 'M11_–_Muske_cipele_Double_M2/1573695811_4_(2).jpg'),
(10, 4, 'M11_–_Muske_cipele_Double_M2/1573695818_4_(3).jpg'),
(11, 4, 'M11_–_Muske_cipele_Double_M2/1573695824_4_(4).jpg'),
(12, 5, 'M02_–_Muske_cipele_Oxford_2/1573695892_5_(2).jpg'),
(13, 5, 'M02_–_Muske_cipele_Oxford_2/1573695899_5_(3).jpg'),
(14, 5, 'M02_–_Muske_cipele_Oxford_2/1573695905_5_(5).jpg'),
(15, 6, 'M02_–_Muske_cipele_Oxford_2/1573735974_7_(2).jpg'),
(16, 6, 'M02_–_Muske_cipele_Oxford_2/1573735992_7_(3).jpg'),
(17, 6, 'M02_–_Muske_cipele_Oxford_2/1573735999_7_(4).jpg'),
(18, 7, 'W06_–_zenske_čizme_poluduboke/1573736471_12_(1).jpg'),
(19, 7, 'W06_–_zenske_čizme_poluduboke/1573736485_12_(2).jpg'),
(20, 7, 'W06_–_zenske_čizme_poluduboke/1573736491_12_(3).jpg'),
(21, 9, 'W06_–_zenske_čizme_poluduboke/1573738617_51_(1).jpg'),
(22, 9, 'W06_–_zenske_čizme_poluduboke/1573738629_51_(2).jpg'),
(23, 9, 'W06_–_zenske_čizme_poluduboke/1573738638_51_(3).jpg'),
(24, 10, 'W03_–_zenske_cipele_Paris/1573739130_53_(1).jpg'),
(25, 10, 'W03_–_zenske_cipele_Paris/1573739223_53_(2).jpg'),
(26, 10, 'W03_–_zenske_cipele_Paris/1573739234_53_(4).jpg');

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
(1, 1, 1, 'M02 – Muške cipele \"Oxford\" #2', 'Plava', '24.5', '1990.90', 1, '1990.90', '2019-11-14 00:26:20', '2019-11-14 00:26:20'),
(2, 2, 2, 'M02 – Muške cipele \"Oxford\" #2', 'braon', '20.0', '3990.90', 1, '3990.90', '2019-11-14 00:33:24', '2019-11-14 00:33:24'),
(3, 2, 1, 'M02 – Muške cipele \"Oxford\" #2', 'Plava', '20.0', '1990.90', 1, '1990.90', '2019-11-14 00:33:25', '2019-11-14 00:33:25'),
(4, 3, 3, 'W07 – Ženske cipele \"Oxford\" #2', 'bela', '34.5', '6990.90', 1, '6990.90', '2019-11-14 01:10:08', '2019-11-14 01:10:08'),
(8, 6, 4, 'M11 – Muške cipele \"Double M2\"', 'crna', '21.5', '4590.90', 1, '4590.90', '2019-11-14 11:24:59', '2019-11-14 11:24:59'),
(9, 6, 3, 'W07 – Ženske cipele \"Oxford\" #2', 'bela', '21.5', '6990.90', 1, '6990.90', '2019-11-14 11:25:00', '2019-11-14 11:25:00'),
(11, 8, 5, 'M02 – Muške cipele \"Oxford\" #2', 'siva', '33.5', '8890.90', 1, '8890.90', '2019-11-14 11:41:39', '2019-11-14 11:41:39'),
(12, 8, 3, 'W07 – Ženske cipele \"Oxford\" #2', 'bela', '33.5', '6990.90', 1, '6990.90', '2019-11-14 11:41:40', '2019-11-14 11:41:40'),
(19, 11, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '0.0', '3890.90', 1, '3890.90', '2019-11-14 12:39:03', '2019-11-14 12:39:03'),
(23, 13, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '27.0', '2990.90', 1, '2990.90', '2019-11-14 18:34:54', '2019-11-14 18:34:54'),
(24, 13, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '27.0', '3890.90', 1, '3890.90', '2019-11-14 18:34:54', '2019-11-14 18:34:54'),
(25, 13, 7, 'W06 – Ženske čizme poluduboke', 'Siva', '27.0', '5890.90', 1, '5890.90', '2019-11-14 18:34:54', '2019-11-14 18:34:54'),
(29, 15, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '23.0', '2990.00', 1, '2990.00', '2019-11-14 20:23:29', '2019-11-14 20:23:29'),
(30, 15, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '23.0', '3890.90', 1, '3890.90', '2019-11-14 20:23:29', '2019-11-14 20:23:29'),
(31, 16, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '0.0', '2990.00', 1, '2990.00', '2019-11-14 20:25:42', '2019-11-14 20:25:42'),
(32, 16, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '0.0', '3890.90', 1, '3890.90', '2019-11-14 20:25:42', '2019-11-14 20:25:42'),
(223, 130, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '34.0', '2990.00', 3, '8970.00', '2019-11-14 23:29:40', '2019-11-14 23:29:40'),
(224, 130, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '34.0', '3890.90', 4, '15563.60', '2019-11-14 23:29:40', '2019-11-14 23:29:40'),
(225, 133, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '0.0', '2990.00', 5, '14950.00', '2019-11-14 23:31:33', '2019-11-14 23:31:33'),
(226, 133, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '0.0', '3890.90', 4, '15563.60', '2019-11-14 23:31:33', '2019-11-14 23:31:33'),
(227, 134, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '0.0', '2990.00', 2, '5980.00', '2019-11-14 23:37:24', '2019-11-14 23:37:24'),
(228, 134, 7, 'W06 – Ženske čizme poluduboke', 'Siva', '0.0', '5890.90', 2, '11781.80', '2019-11-14 23:37:24', '2019-11-14 23:37:24'),
(229, 134, 6, 'M02 – Muške cipele \"Oxford\" #2', 'plava', '0.0', '3590.90', 2, '7181.80', '2019-11-14 23:37:24', '2019-11-14 23:37:24'),
(230, 135, 5, 'M02 – Muške cipele \"Oxford\" #2', 'siva', '30.0', '8890.90', 1, '8890.90', '2019-11-14 23:38:29', '2019-11-14 23:38:29'),
(231, 135, 4, 'M11 – Muške cipele \"Double M2\"', 'crna', '30.0', '4590.90', 1, '4590.90', '2019-11-14 23:38:29', '2019-11-14 23:38:29'),
(232, 135, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '30.0', '3890.90', 1, '3890.90', '2019-11-14 23:38:29', '2019-11-14 23:38:29'),
(233, 135, 7, 'W06 – Ženske čizme poluduboke', 'Siva', '30.0', '5890.90', 1, '5890.90', '2019-11-14 23:38:29', '2019-11-14 23:38:29'),
(234, 135, 3, 'W07 – Ženske cipele \"Oxford\" #2', 'bela', '30.0', '6990.90', 1, '6990.90', '2019-11-14 23:38:29', '2019-11-14 23:38:29'),
(235, 136, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '28.5', '2990.00', 1, '2990.00', '2019-11-15 00:08:58', '2019-11-15 00:08:58'),
(236, 136, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '28.5', '3890.90', 1, '3890.90', '2019-11-15 00:08:58', '2019-11-15 00:08:58'),
(237, 136, 4, 'M11 – Muške cipele \"Double M2\"', 'crna', '28.5', '4590.90', 1, '4590.90', '2019-11-15 00:08:58', '2019-11-15 00:08:58'),
(238, 137, 10, 'W03 – Ženske cipele \"Paris\"', 'roza', '22.0', '2990.00', 1, '2990.00', '2019-11-15 00:46:58', '2019-11-15 00:46:58'),
(239, 137, 9, 'W06 – Ženske čizme poluduboke', 'Crvena', '22.0', '3890.90', 1, '3890.90', '2019-11-15 00:46:58', '2019-11-15 00:46:58');

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
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$94pXnXH9Vyf3.3u.GCVBLeZC/kcdcbrXoxXouVb.cGmzuLf1bkad2', 1, '12345667', NULL, '2019-11-14 00:22:56', '2019-11-14 00:22:56'),
(5, 'PeraKojot', 'pera@kojot.com', NULL, '$2y$10$z7qbJN7epirfwIEOMQ2JB.4vELBpvGdWHW4ntZSgtczTj9Z/cb7h2', 0, '0698761433', NULL, '2019-11-14 20:52:39', '2019-11-14 20:52:39'),
(6, 'Dragan', 'dmspamftw@gmail.com', NULL, '$2y$10$hisvCfcRdfmWkbCsi74.DOT9xoZ6dR/70sFV5SsdGKMIbPr06LiuC', 0, '0698765555', NULL, '2019-11-14 21:25:50', '2019-11-14 23:34:53');

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
(1, 1, 'Admin', 'Adminovič', 'Adminova 35', 37000, 'Admingrad', 'Adminija', '2019-11-14 00:23:35', '2019-11-14 12:58:19'),
(3, 5, 'Dragan', 'Mitic', 'Stojana Novakovica 6', 37000, 'Krusevac', 'Serbia', '2019-11-14 20:53:23', '2019-11-14 20:53:23'),
(4, 6, 'Dragan', 'Mitic', 'Stojana Novakovica 6', 37000, 'Krusevac', 'Serbia', '2019-11-14 21:26:28', '2019-11-14 21:43:41');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `stavke`
--
ALTER TABLE `stavke`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
