-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 08:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `from_id` int(5) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `to_id`, `from_id`, `msg`, `time`) VALUES
(1, 3, 1, 'hello', '2024-01-07 07:30:12'),
(2, 4, 1, 'hello chetan how are you...?', '2024-01-07 08:14:55'),
(3, 4, 1, ' will you come at college', '2024-01-07 08:16:16'),
(4, 1, 4, 'no ', '2024-01-07 08:19:56'),
(5, 4, 1, '', '2024-01-07 08:21:48'),
(6, 4, 1, 'new demo', '2024-01-08 03:55:06'),
(7, 4, 1, 'again demo', '2024-01-08 03:56:38'),
(8, 2, 1, '', '2024-01-08 04:55:24'),
(9, 2, 1, 'hello', '2024-01-08 05:06:56'),
(10, 1, 2, 'hii rohan how are you...?', '2024-01-08 15:19:53'),
(11, 2, 1, 'i am fine how about you...???', '2024-01-08 15:20:20'),
(12, 1, 2, 'i am alos fine rohan', '2024-01-08 15:21:09'),
(13, 2, 1, 'movie was nice...', '2024-01-08 15:22:14'),
(14, 1, 2, 'yeah ..', '2024-01-08 15:22:35'),
(15, 4, 1, 'hii', '2024-01-13 11:59:49'),
(16, 4, 1, 'hii chtetan', '2024-01-13 12:01:19'),
(17, 4, 1, 'heey4', '2024-01-13 12:02:16'),
(18, 2, 1, 'hlo', '2024-01-13 12:23:00'),
(19, 2, 1, 'hlo', '2024-01-13 12:24:04'),
(20, 3, 1, 'hii', '2024-01-13 12:24:14'),
(21, 1, 3, 'hello', '2024-01-13 12:29:54'),
(22, 3, 1, 'hii', '2024-01-13 12:30:16'),
(23, 1, 3, 'helo rohan how are you...???', '2024-01-13 12:31:23'),
(24, 2, 1, 'nicw', '2024-01-13 13:28:57'),
(25, 3, 1, 'nice', '2024-01-13 13:50:35'),
(26, 5, 1, 'hii', '2024-01-13 14:01:48'),
(27, 2, 1, 'hii', '2024-01-16 05:48:02'),
(28, 2, 1, 'how are you', '2024-01-16 05:48:16'),
(29, 1, 2, 'i am fine', '2024-01-16 05:49:46'),
(30, 2, 1, 'oyy.. kasa aahes tu..???', '2024-03-21 07:39:46'),
(31, 1, 2, 'i am fine...', '2024-03-21 07:41:39'),
(32, 1, 2, 'today is friday...', '2024-03-22 05:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `mobile_no`, `password`, `gender`) VALUES
(1, 'rohan', '123456789', 'rohan123', 'male'),
(2, 'kamesh', '1234567891', 'kamesh123', 'male'),
(3, 'darshit', '1234567892', 'darshit123', 'male'),
(4, 'chetan', '1234567893', 'chetan123', 'male'),
(5, 'Nilesh', '1234567894', 'nilesh123', 'male'),
(6, 'Nayan', '1234567895', 'nayan123', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
