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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
