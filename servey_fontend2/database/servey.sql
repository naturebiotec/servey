-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 05:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servey`
--

-- --------------------------------------------------------

--
-- Table structure for table `servey`
--

CREATE TABLE `servey` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `UID` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'UID',
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อ',
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `study` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `income` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_inquiry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ever_vitamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amphoe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provices` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vitamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `importen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_case` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inredient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_vitamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `how_often` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `many_kind` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `information_vitamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `influence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advert` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promtion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `consider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `case_eat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `know_vitamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `decide` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agree` int(11) NOT NULL,
  `save_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servey`
--
ALTER TABLE `servey`
  ADD PRIMARY KEY (`id`,`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servey`
--
ALTER TABLE `servey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
