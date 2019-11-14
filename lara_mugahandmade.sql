-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 12:13 PM
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
(8, 'Cipele 24', 'Duboke 2', 'Koža34', 'Guma43', 'Crna', NULL, 'Ženske', 'Proleće', 'asd asd asd', '223.00', '2019-11-09 23:40:54', '2019-11-10 18:19:20'),
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
(1, 'dmitic', 'dmitic@gmail.com', NULL, '$2y$10$JSUG7rYf2/wtZZwpnywz7.9JqZwykP8bdlbCBYuIX.T50bjbLn5ka', 1, '0698761433', NULL, '2019-11-11 13:59:19', '2019-11-11 13:59:19');

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
(1, 1, 'Dragan', 'Mitic', 'Stojana Novakovica 6', 37000, 'Krusevac', 'Serbia', '2019-11-11 14:00:18', '2019-11-11 14:00:18');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
