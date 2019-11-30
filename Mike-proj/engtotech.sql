-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lis 2019, 00:14
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `engtotech`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `courses`
--

CREATE TABLE `courses` (
  `Course_ID` int(11) NOT NULL,
  `Course_Name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Exam_Name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Difficulty_Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `difficulty_levels`
--

CREATE TABLE `difficulty_levels` (
  `Difficulty_ID` int(11) NOT NULL,
  `Difficulty_Name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permissions`
--

CREATE TABLE `permissions` (
  `Permission_ID` int(11) NOT NULL,
  `Permission_Name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statuses`
--

CREATE TABLE `statuses` (
  `Status_ID` int(11) NOT NULL,
  `Status_Name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Login` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Family_Name` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `E-mail` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Status` int(11) NOT NULL,
  `Permissions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words`
--

CREATE TABLE `words` (
  `Word_ID` int(11) NOT NULL,
  `Course` int(11) NOT NULL,
  `Word_Number` int(11) NOT NULL,
  `Polish_Word` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `English_Word` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words_learning`
--

CREATE TABLE `words_learning` (
  `Login` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `Word_ID` int(11) NOT NULL,
  `Solved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`),
  ADD UNIQUE KEY `Exam_Name` (`Exam_Name`),
  ADD KEY `Difficulty_Level` (`Difficulty_Level`);

--
-- Indeksy dla tabeli `difficulty_levels`
--
ALTER TABLE `difficulty_levels`
  ADD PRIMARY KEY (`Difficulty_ID`);

--
-- Indeksy dla tabeli `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`Permission_ID`);

--
-- Indeksy dla tabeli `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`Status_ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Login`),
  ADD KEY `Permissions` (`Permissions`),
  ADD KEY `Status` (`Status`);

--
-- Indeksy dla tabeli `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`Word_ID`),
  ADD KEY `Course` (`Course`);

--
-- Indeksy dla tabeli `words_learning`
--
ALTER TABLE `words_learning`
  ADD PRIMARY KEY (`Login`,`Word_ID`),
  ADD KEY `Word_ID` (`Word_ID`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Difficulty_Level`) REFERENCES `difficulty_levels` (`Difficulty_ID`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `words` (`Course`);

--
-- Ograniczenia dla tabeli `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_ibfk_1` FOREIGN KEY (`Permission_ID`) REFERENCES `users` (`Permissions`);

--
-- Ograniczenia dla tabeli `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_ibfk_1` FOREIGN KEY (`Status_ID`) REFERENCES `users` (`Status`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`Login`) REFERENCES `words_learning` (`Login`);

--
-- Ograniczenia dla tabeli `words_learning`
--
ALTER TABLE `words_learning`
  ADD CONSTRAINT `words_learning_ibfk_2` FOREIGN KEY (`Word_ID`) REFERENCES `words` (`Word_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
