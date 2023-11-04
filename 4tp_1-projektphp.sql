-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Lis 2023, 23:18
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4tp_1-projektphp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `category_id` smallint(5) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

CREATE TABLE `company` (
  `company_id` smallint(5) UNSIGNED NOT NULL,
  `name` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `street` tinytext NOT NULL,
  `street_number` tinytext NOT NULL,
  `longtitude` decimal(15,10) NOT NULL,
  `latitude` decimal(15,10) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `education`
--

CREATE TABLE `education` (
  `education_id` smallint(5) UNSIGNED NOT NULL,
  `level` tinytext NOT NULL,
  `school_name` tinytext NOT NULL,
  `place_of_residence` tinytext NOT NULL,
  `field_of_study` tinytext NOT NULL,
  `study_period_start` date NOT NULL,
  `study_period_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `education`
--

INSERT INTO `education` (`education_id`, `level`, `school_name`, `place_of_residence`, `field_of_study`, `study_period_start`, `study_period_end`) VALUES
(1, 'asd', 'safsfda', 'sadff', 'dsfas', '2023-11-22', '2023-11-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `job_offer`
--

CREATE TABLE `job_offer` (
  `offer_id` int(10) UNSIGNED NOT NULL,
  `offer_name` tinytext NOT NULL,
  `company_id` smallint(6) UNSIGNED NOT NULL,
  `job_name` tinytext NOT NULL,
  `job_level` tinytext NOT NULL,
  `type_of_contract` tinytext NOT NULL,
  `employment_dimension` tinytext NOT NULL,
  `type_of_work` tinytext NOT NULL,
  `salary_range_min` tinytext NOT NULL,
  `salary_range_max` tinytext NOT NULL,
  `days_of_work` tinytext NOT NULL,
  `work_hours_min` tinyint(3) UNSIGNED NOT NULL,
  `work_hours_max` tinyint(3) UNSIGNED NOT NULL,
  `end_of_recrutation` date NOT NULL,
  `category_id` smallint(5) UNSIGNED NOT NULL,
  `responsibilities` mediumtext NOT NULL,
  `requirements` mediumtext NOT NULL,
  `benefits` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profession_experience`
--

CREATE TABLE `profession_experience` (
  `profession_experience_id` smallint(5) UNSIGNED NOT NULL,
  `position` tinytext NOT NULL,
  `company_name` tinytext NOT NULL,
  `company_city` tinytext NOT NULL,
  `company_street` tinytext NOT NULL,
  `employment_period_start` date NOT NULL,
  `employment_period_end` date NOT NULL,
  `duties` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `profession_experience`
--

INSERT INTO `profession_experience` (`profession_experience_id`, `position`, `company_name`, `company_city`, `company_street`, `employment_period_start`, `employment_period_end`, `duties`) VALUES
(1, 'sdfa', 'asfd', 'sdaf', 'dsfa', '2023-11-01', '2023-11-09', 'fsd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` tinytext NOT NULL,
  `surname` tinytext NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` tinytext NOT NULL,
  `tel_number` varchar(9) NOT NULL,
  `profile_picture` text NOT NULL,
  `place_of_residence` tinytext NOT NULL,
  `current_position` tinytext NOT NULL,
  `description_of_position` mediumtext NOT NULL,
  `profession_summary` mediumtext NOT NULL,
  `profession_experience_id` smallint(6) UNSIGNED NOT NULL,
  `education_id` smallint(6) UNSIGNED NOT NULL,
  `knowledge_of_languages` mediumtext NOT NULL,
  `skills` mediumtext NOT NULL,
  `courses_certificates` mediumtext NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indeksy dla tabeli `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indeksy dla tabeli `job_offer`
--
ALTER TABLE `job_offer`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indeksy dla tabeli `profession_experience`
--
ALTER TABLE `profession_experience`
  ADD PRIMARY KEY (`profession_experience_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `education_id` (`education_id`),
  ADD KEY `profession_experience_id` (`profession_experience_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `category_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `company`
--
ALTER TABLE `company`
  MODIFY `company_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `education`
--
ALTER TABLE `education`
  MODIFY `education_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `job_offer`
--
ALTER TABLE `job_offer`
  MODIFY `offer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `profession_experience`
--
ALTER TABLE `profession_experience`
  MODIFY `profession_experience_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `job_offer`
--
ALTER TABLE `job_offer`
  ADD CONSTRAINT `job_offer_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_offer_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`education_id`) REFERENCES `education` (`education_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`profession_experience_id`) REFERENCES `profession_experience` (`profession_experience_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
