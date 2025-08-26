-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2025 at 06:11 AM
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
-- Database: `sarvasarathi`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES
('SHLOKA', 'shlo@gmail.com', 'hiring', 'good'),
('Shloka_shetty', 'shlokashetty536@gmail.com', 'hiring', 'jdssnsdmn');

-- --------------------------------------------------------

--
-- Table structure for table `janitor`
--

CREATE TABLE `janitor` (
  `empno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `experience` int(11) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `mobileno` varchar(15) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fName` varchar(10) NOT NULL,
  `lName` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fName`, `lName`, `email`, `password`) VALUES
(8, 'Shloka', 'shetty', 'shlokashetty536@gmail.com', '$2y$10$/tt3/xNYKG5Mn9OSvZ3JGOAOl7sKf0hzZ8mvkw7NtHbl.pvBN1tau'),
(9, 'Shloka', 'shetty', 'shlokashetty56@gmail.com', '$2y$10$Ez6vA/Shhs.2.VFK6ZDtAe3KcSu078JmyPQv.QK0D5g/BK0ndzK6K'),
(10, 'Shloka', 'dhjk', 'shlo@gmail.com', '$2y$10$bK7qMb3uz4yaL1CGDXQPauDa/BtqeG5pkz7qyWHe1jThQEwPTOTAC'),
(11, 'Admin', 'admin', 'Test@123', '$2y$10$AJl92LH3T1K./R/HySsCGetCAJA/v1crxjT7oF3Ztq9DO.13jzPpO'),
(12, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$IjHVd8GckwONckTrprQt0.Ox7kUZaFtq7s.zxyXMjXZMFNZdpRvyK');

--
-- Indexes for dumped tables
--

--

--
-- Indexes for table `janitor`
--
ALTER TABLE `janitor`
  ADD PRIMARY KEY (`empno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
