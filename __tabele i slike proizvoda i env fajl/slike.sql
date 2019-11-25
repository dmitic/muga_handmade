-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 01:09 PM
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

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
