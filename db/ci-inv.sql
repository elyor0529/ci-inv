-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 10:17 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `img` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `type_id` int(75) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `serial_number` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `status_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`img`, `id`, `type_id`, `name`, `quantity`, `serial_number`, `location`, `size`, `status_id`, `date`, `user_id`) VALUES
('code.jpg', 86, 1, 'Samsung', '20', 'DXBJUMTV234653', 'Al Naseem', '72', 3, '2016-03-17', 39),
('code2.jpg', 87, 3, 'ThinkPad', '35', 'DXBJUMBAA6543', 'Al Qasr', '15', 2, '2017-06-18', 47);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_status`
--

CREATE TABLE `inventory_status` (
  `id` int(11) NOT NULL,
  `name` varchar(11) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_status`
--

INSERT INTO `inventory_status` (`id`, `name`) VALUES
(2, 'OLD'),
(3, 'NEW'),
(4, 'FADA');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_types`
--

CREATE TABLE `inventory_types` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_types`
--

INSERT INTO `inventory_types` (`id`, `name`) VALUES
(1, 'TV'),
(2, 'Router'),
(3, 'Laptop'),
(4, 'Mobile'),
(5, 'Micros'),
(6, 'Server');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(75) DEFAULT NULL,
  `username` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email`, `is_active`, `role_id`) VALUES
(38, 'Samandar Mirzaev', 'samandarmirzayev@gmail.com', 'admin', 'samandarmirzayev@gmail.com', 1, 1),
(39, 'User_jum', 'user', '1234', 'user@ex.com', 1, 2),
(45, 'Operator_FK', 'operator@jumeirah.com', 'fk', 'operator@jumeirah.com', 1, 3),
(47, 'Elyor Latipov', 'elyor.blog@gmail.com', '12345', 'elyor.blog@gmail.com', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `inventory_status`
--
ALTER TABLE `inventory_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_types`
--
ALTER TABLE `inventory_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `inventory_status`
--
ALTER TABLE `inventory_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `inventory_types`
--
ALTER TABLE `inventory_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
