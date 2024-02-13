-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 10:20 AM
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
-- Database: `employee_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `name`, `start_time`, `end_time`, `project_name`, `task_description`, `rating`) VALUES
(8, 5, 'Mohan', '2024-01-12 10:00:00', '2024-02-12 06:00:00', 'new project', 'This is new project.\r\n\r\n', 4),
(10, 2, 'Rahul', '2024-01-12 10:00:00', '2024-02-12 06:00:00', 'Rahul new peoject', 'This is new project...\r\n\r\n\r\n', 0),
(16, 4, 'Manager', '2021-02-03 01:00:00', '2021-04-05 03:00:00', 'new project', 'This is new peoject here.\r\n', 0),
(19, 1, 'Vishal', '2022-02-02 02:02:00', '2024-02-02 02:02:00', 'Expert messaging system', 'This is expert messaging system.', 0),
(21, 1, 'Vishal', '2012-12-12 12:12:00', '2013-12-13 13:13:00', 'Agrishop.com', '..', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `password`) VALUES
(1, 'Manager', 'admin@gmail.com', '$2y$10$jozKdnIMUpQlgJTEzYDnaeoH2oa3tBdJI6jNQpQgp9gkPhxylsXYC'),
(2, 'manager', 'v@gmail.com', '$2y$10$.l39qRfUzbppQGFxSfBWSeMxCh6yOAbOXZ8ceLxovvpze/iMMPsIS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Vishal', 'v@gmail.com', '$2y$10$OkZ4TnItzywaDVBeohPAX.sQnnc8ubcytvAAbWWFOW6A/S/.IfVU6'),
(2, 'Rahul', 'r@gmail.com', '$2y$10$Zn05s66dy3f7CY/73RnXNuikxtRwyNfis6ew1IDMW9C7k2.vsreQm'),
(4, 'Manager', 'admin@gmail.com', '$2y$10$PDbhHHiQx.SaWQgXAxUl5.9lP8vF/ksLtugzVYhRGwxxjs9yU1.5K'),
(5, 'Mohan', 'm@gmail.com', '$2y$10$eCkyVYxcdUXCuzxflAWjdeS2/dt0qol7Egs9ypufWJli8q9GErebe'),
(7, 'jaypraksh', 'jay@gmail.com', '$2y$10$hHdTA65utFLDpZCzV4Zmc.u24FCp.I/DflISeEtcpUSf5KfPNNpf6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
