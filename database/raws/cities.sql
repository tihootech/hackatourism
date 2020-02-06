-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 01:34 PM
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
-- Database: `compt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'کرمانشاه', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(2, 'اسلام‌آباد غرب', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(3, 'جوانرود', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(4, 'کنگاور', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(5, 'سرپل ذهاب', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(6, 'سنقر', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(7, 'هرسین', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(8, 'صحنه', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(9, 'پاوه', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(10, 'روانسر', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(11, 'گیلانغرب', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(12, 'روانسر', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(13, 'قصر شیرین', '2020-02-04 20:30:00', '2020-02-04 20:30:00'),
(14, 'تازه‌آباد', '2020-02-04 20:30:00', '2020-02-04 20:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
