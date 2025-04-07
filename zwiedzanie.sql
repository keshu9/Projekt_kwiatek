-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 09:50 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zwiedzanie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miejsca`
--

CREATE TABLE `miejsca` (
  `miejsce_id` int(11) NOT NULL,
  `nazwa_miejsca` varchar(40) DEFAULT NULL,
  `opis_miejsca` varchar(200) DEFAULT NULL,
  `zdjecie_miejsca` varchar(150) DEFAULT NULL,
  `koordynaty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `miejsca`
--

INSERT INTO `miejsca` (`miejsce_id`, `nazwa_miejsca`, `opis_miejsca`, `zdjecie_miejsca`, `koordynaty`) VALUES
(1, 'Statua Wolności', 'Jeden z najbardziej rozpoznawalnych symboli USA, zlokalizowany na Liberty Island w Nowym Jorku. Pomnik wolności i demokracji.', 'https://s.ciekawostkihistoryczne.pl/uploads/2022/03/Statue_of_Liberty_7.jpg', '40.6892,-74.0445'),
(2, 'Mount Rushmore', 'Monumentalna rzeźba przedstawiająca czterech prezydentów USA wykuta w granitowej górze w Dakocie Południowej.', 'https://lh3.googleusercontent.com/p/AF1QipNwDGk5p2ETcJWOnHDMLrSVmPmsmIv3npu82eg2=s680-w680-h510', '43.8791,-103.4591'),
(3, 'Alcatraz', 'Byłe więzienie federalne zlokalizowane na wyspie w zatoce San Francisco, znane z prób ucieczki i tajemniczej historii.', 'https://img.static-kl.com/images/media/A2D559E4-F13E-4BEB-84BF68C69EA181B8', '37.8267,-122.4230'),
(4, 'French Quarter', 'Najstarsza dzielnica Nowego Orleanu, znana z francuskiej architektury kolonialnej i bogatej historii muzyki jazzowej.', 'https://static.independent.co.uk/2023/07/28/16/newFile.jpg', '29.9584,-90.0640'),
(5, 'Mesa Verde National Park', 'Park narodowy w Kolorado, słynący z dobrze zachowanych osiedli skalnych wybudowanych przez lud Ancestral Puebloans.', 'https://lh3.googleusercontent.com/p/AF1QipOkNs2cvZiTyYZ5FxJzQeog6kTnlKBU7duoSyJq=s680-w680-h510', '37.2309,-108.4618'),
(6, 'Independence Hall', 'Miejsce podpisania Deklaracji Niepodległości i Konstytucji Stanów Zjednoczonych, zlokalizowane w Filadelfii.', 'https://www.nps.gov/npgallery/GetAsset/B6F0257A-155D-451F-67E68FF4C2857CBC/proxy/hires', '39.9489,-75.1500'),
(7, 'Colonial Williamsburg', 'Odtworzona historyczna dzielnica z XVIII wieku w Wirginii, pozwalająca cofnąć się w czasie do epoki rewolucji amerykańskiej.', 'https://lh3.googleusercontent.com/p/AF1QipMeQw_MUPPaBuSgF9Jwv-RphvImJPlhCecTAfGi=s680-w680-h510', '37.2707,-76.7075'),
(8, 'Fort Sumter', 'Historyczny fort w Karolinie Południowej, gdzie rozpoczęła się wojna secesyjna w 1861 roku.', 'https://upload.wikimedia.org/wikipedia/commons/0/00/FortSumter2009.jpg', '32.7523,-79.8747'),
(9, 'San Antonio Missions', 'Zespół pięciu hiszpańskich misji w Teksasie, z których najbardziej znana to Misja Alamo. Miejsce o dużym znaczeniu kulturowym i religijnym.', 'https://upload.wikimedia.org/wikipedia/commons/9/93/Mission_Concepcion_San_Antonio.JPG', '29.4252,-98.4946'),
(10, 'Ellis Island', 'Wyspa w pobliżu Nowego Jorku, na której mieściło się główne centrum imigracyjne USA w latach 1892–1954.', 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Aerial_view_of_Ellis_Island%2C_Jersey_City%2C_New_Jersey_LCCN2011635626_-_cropped_balance.jpg', '40.6995,-74.0396');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ulubione`
--

CREATE TABLE `ulubione` (
  `user_id` int(11) DEFAULT NULL,
  `miejsce_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `imie` varchar(15) DEFAULT NULL,
  `nazwisko` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `miejsca`
--
ALTER TABLE `miejsca`
  ADD PRIMARY KEY (`miejsce_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `miejsca`
--
ALTER TABLE `miejsca`
  MODIFY `miejsce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
