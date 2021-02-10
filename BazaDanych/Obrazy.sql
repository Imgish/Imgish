-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 10 Lut 2021, 10:42
-- Wersja serwera: 10.3.16-MariaDB
-- Wersja PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `id15971773_projektio`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Obrazy`
--

CREATE TABLE `Obrazy` (
  `ID` int(4) NOT NULL,
  `IDUzytkownika` int(100) NOT NULL,
  `Nazwa` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `TytulObrazu` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Rozmiar` int(100) NOT NULL,
  `DataWstawienia` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Lapka` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `Obrazy`
--

INSERT INTO `Obrazy` (`ID`, `IDUzytkownika`, `Nazwa`, `TytulObrazu`, `Rozmiar`, `DataWstawienia`, `Lapka`) VALUES
(1, 2, 'test.png', 'test', 793, '2021-01-22 11:26:51', 9953),
(3, 2, 'pom.png', 'pom', 665, '2021-01-22 11:27:50', 0),
(4, 3, '1.jpg', 'Herbata', 85574, '2021-01-22 13:35:41', 1),
(5, 3, '2.jpg', 'Ciasto', 202318, '2021-01-22 13:36:46', 0),
(6, 3, '3.jpg', 'Inne', 99277, '2021-01-22 13:37:04', 0),
(7, 4, '4k-3840-x-2160-wallpapers-themefoxx (297).jpg', 'Ziemia', 1585469, '2021-01-22 13:38:56', 0),
(8, 3, '4.jpg', 'Inne', 95556, '2021-01-22 13:39:42', 0),
(9, 3, '5.jpg', 'Śnieg', 153917, '2021-01-22 13:39:52', 33),
(10, 3, '6.jpg', 'Pokój', 189992, '2021-01-22 13:40:03', 0),
(11, 3, '7.jpg', 'Abstrakcja', 242595, '2021-01-22 13:40:22', 0),
(12, 3, '8.jpg', 'Orzeł', 93497, '2021-01-22 13:40:30', 0),
(13, 3, '9.jpg', 'Morze', 219864, '2021-01-22 13:40:37', 0),
(14, 3, '10.jpg', 'Plaża', 72365, '2021-01-22 13:40:53', 0),
(15, 4, '4k-3840-x-2160-wallpapers-themefoxx (331).jpg', 'Niebo', 3036822, '2021-01-22 13:42:31', 0),
(16, 3, 'IoObraz.png', 'Czerwone', 948, '2021-01-22 13:46:06', 0),
(17, 4, '4k-3840-x-2160-wallpapers-themefoxx (339).jpg', 'Słupek', 2618946, '2021-01-22 13:46:14', 0),
(21, 6, 'test111.png', 'Czerwony', 948, '2021-01-30 10:36:33', 1),
(22, 8, 'Testowe1.png', 'Zielony', 521, '2021-02-05 10:47:53', 6345),
(25, 6, 'Testowe13.png', 'Zielony', 521, '2021-02-09 11:36:20', 0),
(26, 6, 'Testowe123.png', 'Czerwony', 948, '2021-02-09 11:36:30', 0),
(28, 5, 'unknown.png', 'Thoos', 1188604, '2021-02-09 13:23:22', 1),
(29, 2, 'Kamyk.jpg', 'Kamyk', 83261, '2021-02-09 13:32:33', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Obrazy`
--
ALTER TABLE `Obrazy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `Obrazy`
--
ALTER TABLE `Obrazy`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
