-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 03:06 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slike_proizvod_id_foreign` (`proizvod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slike`
--
ALTER TABLE `slike`
  ADD CONSTRAINT `slike_proizvod_id_foreign` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
