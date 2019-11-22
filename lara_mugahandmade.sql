-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 01:15 PM
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
(7, '2019_10_27_143245_create_fakture_table', 1),
(8, '2019_11_07_170751_create_stavke_table', 1);

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
(10, 'W03 – Ženske cipele \"Paris\"', 'Plitka', 'Velur + Presovani Velur', 'Koža', 'Mikro-Guma Eva', 'roza', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '2990.00', '2019-11-14 12:45:30', '2019-11-14 19:14:18'),
(123, 'W05 – Ženske patike \"MHM.CAS\"', 'Plitka', 'Boks', 'Koža', 'TR Guma', 'Bela', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '6390.00', '2019-11-22 10:34:12', '2019-11-22 10:34:12'),
(124, 'W04 – Ženske cipele \"Oxford\" #1', 'Plitka', 'Napa', 'Koža', 'Kožni đon (Krupon)', 'plava, crvena', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '3690.00', '2019-11-22 10:36:26', '2019-11-22 10:36:26'),
(125, 'W05 – Ženske patike \"MHM.CAS\"', 'Plitka', 'Velur + Velur (print)', 'Koža', 'TR Guma', 'crna, srebrna', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '6990.00', '2019-11-22 10:38:19', '2019-11-22 10:55:06'),
(126, 'M02 – Muške cipele \"Oxford\" #2', 'Plitka', 'Velur + Boks + Lakovana koža', 'Koža', 'TR Guma', 'Crna', 'Wingtip Oxford cipele, uredjene na elegantom djonu, sa polu-visokom štiklom, uz gradaciju materijala, od najmanje sjajnog Velura, preko polu-sjajne boks kože, sa posebnim akcentom na najsjaniju, lakovanu kožu, ostavljaju izuzetno jak vizuelni utisak. Idealne za svečane prilike, uz prefinjeni, elegantni odevni stil.', 'Muške', 'Proleće/Leto/Jesen', NULL, '5690.90', '2019-11-22 10:40:33', '2019-11-22 10:40:33'),
(127, 'W04 – Ženske cipele \"Oxford\" #1', 'Plitka', 'Napa + Velur', 'Koža', 'Mikro-Guma Eva', 'srebrna, crna', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '4990.90', '2019-11-22 10:42:05', '2019-11-22 10:42:05'),
(128, 'W02 – Baletanke #2', 'Plitka', 'Velur + Lakovana koža', 'Koža', 'TR Guma', 'siva, crvena', NULL, 'Ženske', 'Proleće/Leto/Jesen', NULL, '6890.90', '2019-11-22 10:44:14', '2019-11-22 10:44:14'),
(129, 'M02 – Muške cipele \"Oxford\" #2', 'Plitka', 'Boks + Nubuk', 'Koža', 'Mikro-Guma, presvučen kožom', 'zelena, crna', 'Wingtip Oxford cipele predstavljaju najidealniji model cipela za kombinovanje najrazličitijih materijala I boja, takodje idealne uz sportski djon, elegantni ili casual djon. Koja je Vaša idealna kombinacija, #shoeporn fantazija?', 'Muške', 'Proleće/Leto/Jesen', NULL, '3890.90', '2019-11-22 10:45:54', '2019-11-22 10:45:54'),
(130, 'M05 – Muške patike \"MHM.CAS\"', 'Plitka', 'Boks + Velur (print)', 'Koža', 'TR Guma', 'Crna', 'Dugi niz godina “Military fazon” je prisutan na modnoj sceni, I verujemo da će tu I ostati, bar još neko vreme. Svakodnevna casual varijanta, u crnoj boji, izradjena od, crne boks kože u kombinaciji sa velurom sa, već spomenutim, Military print-om, da razbije monotoniju I “otvori” izgled patike, a opet decentne I neupadljive.', 'Muške', 'Proleće/Leto/Jesen', NULL, '2890.90', '2019-11-22 10:47:31', '2019-11-22 10:47:31'),
(131, 'M02 – Muške cipele \"Oxford\" #2', 'Plitka', 'Velur', 'Koža', 'Mikro-Guma Eva', 'Plava', 'Teget sako ~ 75e, kratke teget pantalone ~ 75e, goli gležnjevi ~ 15e, kratke čarape (kurtonke) ~ 10e, svečana bela košulja ~ 60e, žuta kravata, žuti tregeri ili žuta leptirača ~ 15e...i možeš da budeš: mladoženja ~ 10.000e; kum ~ 500e; starojko ~ 150e; daleki, nepoznati rodjak ~50e….cipele koje bi se uklopile u celu priču – NEPROCENLJIVE, a za njih će se pobrinuti MUGA Handmade Shoes!!!!', 'Muške', 'Proleće/Leto/Jesen', NULL, '4690.90', '2019-11-22 10:49:02', '2019-11-22 10:49:02');

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
(24, 10, 'W03_–_zenske_cipele_Paris/1573739130_53_(1).jpg'),
(25, 10, 'W03_–_zenske_cipele_Paris/1573739223_53_(2).jpg'),
(26, 10, 'W03_–_zenske_cipele_Paris/1573739234_53_(4).jpg'),
(134, 123, 'W05_–_zenske_patike_MHM.CAS/1574422471_83_(1).jpg'),
(135, 123, 'W05_–_zenske_patike_MHM.CAS/1574422483_83_(3).jpg'),
(136, 123, 'W05_–_zenske_patike_MHM.CAS/1574422498_83_(4).jpg'),
(137, 124, 'W04_–_zenske_cipele_Oxford_1/1574422600_67_(1).jpg'),
(138, 124, 'W04_–_zenske_cipele_Oxford_1/1574422612_67_(2).jpg'),
(139, 124, 'W04_–_zenske_cipele_Oxford_1/1574422622_67_(3).jpg'),
(140, 125, 'W05_–_zenske_patike_MHM.CAS/1574422720_68_(1).jpg'),
(141, 125, 'W05_–_zenske_patike_MHM.CAS/1574422733_68_(2).jpg'),
(142, 125, 'W05_–_zenske_patike_MHM.CAS/1574422746_68_(3).jpg'),
(143, 126, 'M02_–_Muske_cipele_Oxford_2/1574422845_8_(1).jpg'),
(144, 126, 'M02_–_Muske_cipele_Oxford_2/1574422853_8_(2).jpg'),
(145, 126, 'M02_–_Muske_cipele_Oxford_2/1574422860_8_(4).jpg'),
(146, 127, 'W04_–_zenske_cipele_Oxford_1/1574422967_56_(1).jpg'),
(147, 127, 'W04_–_zenske_cipele_Oxford_1/1574422979_56_(3).jpg'),
(148, 127, 'W04_–_zenske_cipele_Oxford_1/1574422989_56_(4).jpg'),
(149, 128, 'W02_–_Baletanke_2/1574423067_57_(1).jpg'),
(150, 128, 'W02_–_Baletanke_2/1574423079_57_(4).jpg'),
(151, 128, 'W02_–_Baletanke_2/1574423090_57_(5).jpg'),
(152, 129, 'M02_–_Muske_cipele_Oxford_2/1574423164_9_(1).jpg'),
(153, 129, 'M02_–_Muske_cipele_Oxford_2/1574423174_9_(2).jpg'),
(154, 129, 'M02_–_Muske_cipele_Oxford_2/1574423180_9_(4).jpg'),
(155, 130, 'M05_–_Muske_patike_MHM.CAS/1574423265_10_(1).jpg'),
(156, 130, 'M05_–_Muske_patike_MHM.CAS/1574423272_10_(2).jpg'),
(157, 130, 'M05_–_Muske_patike_MHM.CAS/1574423278_10_(3).jpg'),
(158, 131, 'M02_–_Muske_cipele_Oxford_2/1574423366_11_(1).jpg'),
(159, 131, 'M02_–_Muske_cipele_Oxford_2/1574423372_11_(2).jpg'),
(160, 131, 'M02_–_Muske_cipele_Oxford_2/1574423379_11_(3).jpg'),
(161, 9, 'W06_–_zenske_cizme_poluduboke/1574424357_51_(1).jpg'),
(162, 9, 'W06_–_zenske_cizme_poluduboke/1574424368_51_(2).jpg'),
(163, 9, 'W06_–_zenske_cizme_poluduboke/1574424377_51_(3).jpg'),
(164, 7, 'W06_–_zenske_cizme_poluduboke/1574424391_12_(1).jpg'),
(165, 7, 'W06_–_zenske_cizme_poluduboke/1574424398_12_(2).jpg'),
(166, 7, 'W06_–_zenske_cizme_poluduboke/1574424404_12_(3).jpg');

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
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$4j656YMwtcdKg/Ttj/yKH.LujnL/4I4dhWV/AskRgaeBEvDSqwW7y', 1, '12345678', 'BlMRCfWiI2AKv8xVEBNrQCtHQYZdQVAT9WCZTwet8ZhCKZ0MGMQKYSgdkeRa', '2019-11-15 18:56:19', '2019-11-22 11:10:31');

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
(1, 1, 'Admin', 'Adminović', 'Adminova 35', 12852, 'Admingrad', 'Adminija', '2019-11-16 11:00:31', '2019-11-22 11:10:31');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `stavke`
--
ALTER TABLE `stavke`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
