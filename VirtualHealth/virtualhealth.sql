-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 07:22 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(50) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `apass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apass`) VALUES
(1, 'admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `doc_info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `email`, `password`, `specialization`, `image_path`, `created_at`, `doc_info`) VALUES
(1, 'Ahmed ', 'ali', 'ahmed@ahmed.com', '202cb962ac59075b964b07152d234b70', 'Dermatology', 'images/default.jpg', '2024-09-01 17:41:49', ''),
(2, 'Aa', 'Bb', '1234@1234.com', '202cb962ac59075b964b07152d234b70', 'InternalMedicine', 'images/default.jpg', '2024-09-01 17:46:35', ''),
(3, 'as', 'as', 'as@as.com', '202cb962ac59075b964b07152d234b70', 'ophthalmology', 'images/default.jpg', '2024-09-01 21:00:41', ''),
(4, 'test', 'test', 'test@test.com', '$2y$10$bZib3fnc0JEiQcG7oqxEXO9giF.vjXeokoyoF6f0xfJdPDlQS0NS.', 'test', 'uploads/OTAS.png', '2024-09-05 05:11:57', 'test');

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
(8, 'Ahmed', 'Ali', 'Ahmed@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, '1324', '1234', '1234@1234.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, '123', '123', '123@123.com', '$2y$10$YossMu9TNdv.BAQwkkeR2.LAxgPNDyv5TcyzOKzuJDR'),
(11, '13245', '12345', '12345@12345.com', '$2y$10$0qTfoe8ktUSoDeteXq91Luh55l8PiSit4Z3o7fIGPSZ'),
(12, 'test', 'test', 'test@test.com', '$2y$10$nfDZBN8qVY625bRjP7nRh.fR7L9c8cy.zD4MIx3.DUT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
