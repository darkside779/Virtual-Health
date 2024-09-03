-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 02:07 PM
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
-- Database: `virtualhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT 'default.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `email`, `password`, `specialization`, `image_path`, `created_at`) VALUES
(1, 'Ahmed ', 'ali', 'ahmed@ahmed.com', '202cb962ac59075b964b07152d234b70', 'Dermatology', 'images/default.jpg', '2024-09-01 17:41:49'),
(2, 'Aa', 'Bb', '1234@1234.com', '202cb962ac59075b964b07152d234b70', 'InternalMedicine', 'images/default.jpg', '2024-09-01 17:46:35'),
(3, 'as', 'as', 'as@as.com', '202cb962ac59075b964b07152d234b70', 'ophthalmology', 'images/default.jpg', '2024-09-01 21:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Alzaki', 'Abdalwahed', 'alzaki@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Adbalrhman', 'Nasser', 'abdalrhmannassir03@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'abdo', 'nas', 'ab@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Moez', 'Saif', 'moez@gmail.com', 'f69471ca2c42621b8b8e731b2b4446e4'),
(6, 'nasser', 'ahmed', 'nasser@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Mohammed ', 'Adil', 'Mohammed@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Ahmed', 'Ali', 'Ahmed@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
