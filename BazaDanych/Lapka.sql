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
-- Struktura tabeli dla tabeli `Lapka`
--

CREATE TABLE `Lapka` (
  `ID` int(4) NOT NULL,
  `Login` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `TytulObrazu` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `Lapka`
--

INSERT INTO `Lapka` (`ID`, `Login`, `TytulObrazu`) VALUES
(1, '3', ''),
(2, 'adam8', ''),
(3, '', ''),
(6, 'adam3', 'Testowe1.png'),
(19, 'adam7', 'test111.png'),
(26, 'adam7', 'unknown.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Lapka`
--
ALTER TABLE `Lapka`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `Lapka`
--
ALTER TABLE `Lapka`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
