-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 10 Lut 2021, 10:41
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
-- Struktura tabeli dla tabeli `Rejestracja`
--

CREATE TABLE `Rejestracja` (
  `ID` int(5) NOT NULL,
  `Login` varchar(21) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `Rejestracja`
--

INSERT INTO `Rejestracja` (`ID`, `Login`, `Haslo`, `Email`) VALUES
(1, 'value-2', 'value-3', 'value-4'),
(2, 'adam3', '$2y$10$.rVGSn4Sj.r1Rpj0gOyIRe831dQlOnn.iwctN0r2m3SxkStkYDi9K', 'adam3@wp.pl'),
(3, 'adam123', '$2y$10$MwfeAkd/n4zQKoOctOpkaO//LsKH5jgUt6W3c2Uf7Pxjx.5coAB8i', 'adam123@da.sd'),
(4, 'JaJa', '$2y$10$llobFhqg9TBGnz.Nnr60jurIObIcVszsuAk6wp7nwvhYGKQy1KTc6', 'tety@gmail.com'),
(5, 'adam7', '$2y$10$ylmOHmofkO2oxtAZ0tyVLubfOZtIRvRVrgBYBg5688deeL9TMR/9G', 'adam7@fam.fawf'),
(6, 'jan11', '$2y$10$9Ih53.dGb9g4bjR85CAH7O7st6q1kaE4rXJT7G8.ohLIj7fB9NMa2', 'jan11@fasdf.aw'),
(7, 'adsadasdas', '$2y$10$3r6d7Q/RQf0S.N.bsxwnAuZG2lJfs0CwebIw2FknN6APsuKuLL0cK', 'sdadad@gdfsdf.pl'),
(8, 'adam8', '$2y$10$6EBlKKiGtw0XXdAfPzUDSuPkkkSt6vUiGbsS78BuN9cBQ6QipW1PS', 'dasdasda@gmail.com'),
(9, 'adam8', '$2y$10$6EBlKKiGtw0XXdAfPzUDSuPkkkSt6vUiGbsS78BuN9cBQ6QipW1PS', 'dasdads@fsfsd.com'),
(10, 'adam9', '$2y$10$tINB1m6evm66AjnS..6wPu4e6aqxv.Nx6T.JJmPLMiSACtnVGdwcy', 'adam9@gmail.com'),
(11, 'adam9', '$2y$10$b511EhcSdt7a1L30K7r2reHPujoPqhxdFR7u2xDOTXnroQ/cL3xXa', 'adam9@gmail.com'),
(12, 'adam9', '$2y$10$2RrBr7dteVmdLs0RhdgssObk4tdBvtDoL6HLQPHMC4Ffb/fxxKYr2', 'adam9@gmail.com'),
(13, 'adam9', '$2y$10$IQV6XMUvhD3DKKg12qQ/FeilOoeol3gJ64kb5eg6/eAyuxa4Dko.6', 'adam9@gmail.com'),
(14, 'jan12', '$2y$10$86AlcPHQ905XfMFZe.2Jzux.4oz9V4z6wkViNwWqh4wPobS/dnxMy', 'jan12@das.awd'),
(15, 'jan13', '$2y$10$9bbWzIV32EkO/x8HdvwF1ui//WkyJ/TInZPgkNDjpesXaN/hE4iUS', 'jan13@wa.wa'),
(16, 'adam8', '$2y$10$6EBlKKiGtw0XXdAfPzUDSuPkkkSt6vUiGbsS78BuN9cBQ6QipW1PS', 'adam89@dam.wda'),
(17, 'adam12', '$2y$10$IkS5uO8zzBJqvC6mAU9IwOSJ0USX9lc13iERMT7TDf2.Tyto3grBa', 'adam12@adam12.ad');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Rejestracja`
--
ALTER TABLE `Rejestracja`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `Rejestracja`
--
ALTER TABLE `Rejestracja`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
