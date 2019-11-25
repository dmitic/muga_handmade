-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 01:08 PM
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
