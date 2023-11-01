-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 09:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartoon_recommendation`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `email`, `username`, `password`) VALUES
(1, 'olipuw@gmail.com', 'rara', '$2y$10$/7fsAUFgaknCEsKODL9nBeCpo.8hXJWSOVGQnqpGdJrT0aHRuwijG'),
(2, 'rara@gmail.com', 'apa', '$2y$10$l8qyhKsXOO01jWrQ8nIax.ETm6QSbMjZObAQqs6eYsDtoGQAPiNVW'),
(3, 'vedra.dian.vedra@gmail.com', 'lala', '$2y$10$aye5mdNSavFBnTOqz/SrBuxG8PBNU3AphJc3x1fssb3le0P3KgfYS'),
(4, 'vedra.dian.vedra@gmail.com', 'mey mey', '$2y$10$v93haWKLCUfAJGWKmJJx4Ol9s5UlMAAIKvnBwo3Aj3tmFnX6jQTfW'),
(5, 'vedra.dian.vedra@gmail.com', 'meymey', '$2y$10$Jlse1z/71f74Qmr6msD6pu2zXMc0jY4Yb4wR75GASHriM6l6YZVUa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
