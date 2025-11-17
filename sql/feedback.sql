-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2025 at 11:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `submitted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `full_name`, `email`, `message`, `submitted_at`, `image`) VALUES
(1, 'Park Jihyo', 'parkjijihyo2@gmail.com', 'The layout is pretty solid and all about lebron is legit', '2025-06-16 20:30:20', NULL),
(3, 'qeqwewq', 'ewqewqeqwe@gmail.com', 'eqweqweqwewqeq', '2025-06-18 13:13:26', '68524af6df608_King-lebron-james-logo-2-logodesignfx.png'),
(5, 'kevin durant', 'kevindurant35@gmail.com', 'i love all about lebron james and his achievement throughout his career', '2025-06-18 13:20:40', NULL),
(6, 'kai sotto', 'kaisotto2@gmail.com', 'the goat', '2025-06-18 13:21:34', NULL),
(8, 'qweqwe', 'asdsada@jsad.com', 'jasdjasdja', '2025-06-18 13:29:32', '68524ebcb2d88_Lebron king jaems.jpg'),
(9, 'Michael Jordan', 'michaeljordan23@gmail.com', 'The Real Goat Hands Down!', '2025-06-18 13:31:51', '68524f473a347_left.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
