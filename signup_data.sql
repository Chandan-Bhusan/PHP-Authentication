-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 03:17 PM
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
-- Database: `auth_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup_data`
--

CREATE TABLE `signup_data` (
  `Sno` int(11) NOT NULL,
  `User` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `reset_token_hash` int(11) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_data`
--

INSERT INTO `signup_data` (`Sno`, `User`, `Email`, `Password`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'abcd', 'BHUSANCHANDAN1002@GMAIL.COM', '$2y$10$YNM76hw2qqnFz9emZfjraugs/XJc0cLqno3sWfWkoEbz4LU429JQS', 3365, '2024-06-03 14:54:26'),
(10, 'Chandan', 'chandanmohanta7070@gmail.com', '$2y$10$8Q/K7e8ya38ygAn9X9CUCepcU2WG6oM82JM86oe5hYJcfNO4Qn6Fa', 1048, '2024-06-03 14:49:58'),
(11, 'Bhusan', 'chandanbhusan8080@gmail.com', '$2y$10$FamDB/peyooukG1PsFAIq.czBj.MrxbxE0pdtnLp9Acn2otSsADcy', 7086, '2024-06-04 15:40:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_data`
--
ALTER TABLE `signup_data`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_data`
--
ALTER TABLE `signup_data`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
