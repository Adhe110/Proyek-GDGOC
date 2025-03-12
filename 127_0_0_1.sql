-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 01:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_todolist`
--
CREATE DATABASE IF NOT EXISTS `db_todolist` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_todolist`;

-- --------------------------------------------------------

--
-- Table structure for table `daily_schedule`
--

CREATE TABLE `daily_schedule` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL,
  `activity` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily_schedule`
--

INSERT INTO `daily_schedule` (`id`, `time`, `activity`, `created_at`) VALUES
(12, '22:00:00', 'Fix Error Codingan', '2025-03-10 09:44:31'),
(13, '23:00:00', 'Ngoding', '2025-03-10 09:44:31'),
(14, '24:00:00', 'Fix Error Codingan', '2025-03-10 09:44:31'),
(15, '01:00:00', 'Ngoding', '2025-03-10 09:44:31'),
(18, '12:12:00', 'Alamat Paksu', '2025-03-10 11:24:58'),
(19, '18:19:00', 'Ea', '2025-03-10 11:27:38'),
(20, '12:12:00', 'mansu', '2025-03-10 11:28:25'),
(21, '12:12:00', 'mansu', '2025-03-10 11:30:07'),
(26, '21:42:00', 'sas', '2025-03-10 12:42:13'),
(27, '23:23:00', 'Buka', '2025-03-10 12:42:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_schedule`
--
ALTER TABLE `daily_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_schedule`
--
ALTER TABLE `daily_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
