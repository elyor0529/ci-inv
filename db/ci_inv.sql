-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 31, 2017 at 10:43 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `type_id`, `name`, `quantity`, `serial_number`, `location`, `size`, `status_id`, `date`, `user_id`) VALUES
(1, 0, 'asdfsadfsdfsadf', '123123213', 'saf12312asdas13212', 'dubai', '32', 0, '2017-07-06', 0),
(2, 0, 'asdfsadfsdfsadf', '123123213', 'saf12312asdas13212', 'dubai', '32', 0, '2017-07-06', 0),
(3, 0, 'asdfasdfasdfasdf', 'asdfasdfsadfasdf', 'asdfasdfasdf', 'sadfasdfsadf', 'sdafasdfasdf', 0, '2017-07-11', 0),
(5, 0, 'asdfasdf', 'asdfasdfsdfasdf', 'sdafasdfasd', 'fasdfsd', 'fasdfsdfasd', 0, '2017-07-11', 0),
(6, 0, 'asdfasdf', 'asdfasdfsdfasdf', 'sdafasdfasd', 'fasdfsd', 'fasdfsdfasd', 0, '2017-07-11', 0),
(7, 0, 'sdfasdf', '12', '134234asda1`3`13', 'dsafsdfasdf', 'sdfsadfasd', 0, '2017-07-06', 0),
(8, 0, 'sdfasdf', '12', '134234asda1`3`13', 'dsafsdfasdf', 'sdfsadfasd', 0, '2017-07-06', 0),
(9, 0, 'werwerwerew', 'rwerwer', 'werwere', 'qwrqwerwer', 'werwerqwer', 0, '2017-07-09', 0),
(10, 0, 'werwerwerew', 'rwerwer', 'werwere', 'qwrqwerwer', 'werwerqwer', 0, '2017-07-09', 0),
(11, 0, 'werwerer', 'werwer', 'werwer', 'werwer', 'wer', 0, '2017-07-11', 0),
(12, 0, 'werwerer', 'werwer', 'werwer', 'werwer', 'wer', 0, '2017-07-11', 0),
(15, 0, 'asdasdasDASD', 'asdaSDASD', 'asdasdaSDASD', 'asdasdASASD', 'ASDASDASD', 0, '2017-07-06', 0),
(20, 0, 'asdasd', 'asdasd', 'asdasd', 'asdasdas', '123123123123', 0, '2017-07-19', 0),
(21, 0, 'adssadasd', 'asdasdsdasd', 'DXB7021JUMBAA', 'adasdsdasd', '23', 0, '2017-07-30', 0),
(22, 0, 'asdasdas', 'asd', 'asd', 'asdasd', 'asdasd', 0, '2017-07-18', 0),
(24, 0, 'asdasdas', 'asd', 'asd', 'asdasd', 'asdasd', 0, '2017-07-18', 0),
(27, 0, 'asdasDASD', 'asdasD', 'ASDASD', 'ASDASD', 'ASDASD', 0, '2017-07-11', 0),
(29, 0, 'LG Desktop', '150', 'DXBJUM7021BAA', 'Etisalat Store', '21\"', 0, '2017-07-11', 0),
(32, 0, 'asdasDASD', 'asdasD', 'ASDASD', 'ASDASD', 'ASDASD', 0, '2017-07-11', 0),
(33, 0, 'LG Desktop', '150', 'DXBJUMBAA7021', 'Al Naseem Store', '21', 0, '2017-07-11', 0),
(36, 0, 'LG Desktop', '350', 'DXBJUMBAA7021', 'Al Naseem Store', '25', 0, '0000-00-00', 0),
(37, 0, 'ad;lkfas;dflk', '1837463124234', 'sad123asdas', 'Mina ASalam', 'fffffffffffffffffffff', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_status`
--

CREATE TABLE `inventory_status` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_types`
--

CREATE TABLE `inventory_types` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(75) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(75) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(75) CHARACTER SET utf8 DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `inventory_status`
--
ALTER TABLE `inventory_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory_types`
--
ALTER TABLE `inventory_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory_status`
--
ALTER TABLE `inventory_status`
  ADD CONSTRAINT `inventory_status_ibfk_1` FOREIGN KEY (`id`) REFERENCES `inventories` (`status_id`);

--
-- Constraints for table `inventory_types`
--
ALTER TABLE `inventory_types`
  ADD CONSTRAINT `inventory_types_ibfk_1` FOREIGN KEY (`id`) REFERENCES `inventories` (`type_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `inventories` (`user_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
