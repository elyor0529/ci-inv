-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 09:08 PM
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
  `description` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`img`, `id`, `type_id`, `name`, `quantity`, `serial_number`, `location`, `size`, `status_id`, `description`, `date`, `user_id`) VALUES
('dream.jpg', 87, 3, 'ThinkPad', '35', 'DXBJUMBAA6543', 'Al Qasr Store', '15', 2, 'data 2222', '2017-06-18', 47),
('jumeirah.jpg', 88, 4, 'Blackberry', '41', 'DXBMJ2345RST', 'Etisalat Store', '4', 3, '', '2017-06-06', 39),
('web.jpg', 89, 2, 'Tendo', '29', 'DXBMJ767679887', 'Al Qasr Store', '0', 4, '', '2017-08-16', 39),
('design.jpg', 90, 3, 'ThinkPad', '34', 'DXBMJ432788FG', 'Al Naseem', '15', 3, '', '2017-08-07', 47),
('uzb.jpg', 91, 4, 'blackberry classic', '26', 'DXBMJ27834678MB', 'Al Qasr Store', '5', 3, '', '2017-08-01', 47),
('50px-Question_book-new.png', 92, 1, 'Hisenese', '26', 'DXBJUMMJ239807403', 'Etisalat Store', '72', 3, '', '2017-08-15', 47),
('no-image.png', 93, 6, 'MicrosoftR2', '10', 'JUMMJDXB21321', 'Al Naseem', '0', 4, 'how it is updated', '2015-03-21', 47),
('no-image.png', 95, 4, 'blackberry Android', '17', 'DXBANDBLAC89009', 'Al Qasr Store', '5', 3, 'this mobile version old need to update', '2016-07-30', 47),
('mj.jpg', 96, 2, 'TP-link', '14', 'DXBJUMBAA65343', 'Al Qasr Store', '0', 2, 'this from database', '2017-08-06', 39),
('<p>You did not select a file to upload.</p>', 98, 2, 'Etisalat', '22', 'dxbjumjahsdjh', 'Al Qasr Store', '0', 3, '', '2016-01-01', 39),
('<p>You did not select a file to upload.</p>', 99, 4, 'Android', '9', 'DXBANDBLAC890093', 'Etisalat Store', '4', 2, '', '2016-10-25', 39),
('hobby.jpg', 100, 3, 'Thinkpad45', '29', 'JUMMJ702345', 'Etisalat Store', '15', 3, '', '2017-03-09', 39),
('<p>You did not select a file to upload.</p>', 101, 1, 'Samsung', '23', 'JUMMJDBB4532', 'Al Qasr Store', '43', 4, '', '2015-02-07', 39),
('design.jpg', 104, 1, 'ads', '324', 'DXBJUMBAA65343555', 'Al Naseem', '1', 2, 'this item has faulty microchip', '2016-08-29', 47),
('dubai2.jpg', 105, 3, 'iMac', '25', 'DXBJUMMJ434354', 'Etisalat Store', '27', 3, 'iMac brand New', '2017-08-16', 39),
('no-image.png', 106, 4, 'jaksdha', '12', 'dxbjumbaa4343', 'Al Naseem', '0', 3, 'this is old but useable', '2017-08-15', 39),
('no-image.png', 107, 2, 'TP-link', '15', 'DXBJUMBAA702122', 'Al Qasr Store', '0', 3, 'new routers need to update fada devices', '2017-08-02', 49),
('<p>You did not select a file to upload.</p>', 108, 2, 'Tendo Urban', '13', 'DXBANDBLAC89034', 'Al Qasr Store', '0', 4, 'faulty', '2016-07-18', 39),
('logo_2.png', 109, 1, 'LG', '22', 'DXB6554TRFG', 'Al Naseem', '72', 2, 'but usable', '2015-06-22', 39);

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
(6, 'Server'),
(7, 'Symphony Micros');

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
(39, 'User_jum', 'user@ex.com', '1234', 'user@ex.com', 1, 2),
(45, 'Operator_FK', 'operator@jumeirah.com', 'fk', 'operator@jumeirah.com', 1, 3),
(47, 'user2', 'user2@jumeirah.com', '1234', 'user2@jumeirah.com', 1, 2),
(49, 'Sam Mirzaev', 'samicmirzayev@gmail.com', '1234', 'samicmirzayev@gmail.com', 1, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `inventory_status`
--
ALTER TABLE `inventory_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `inventory_types`
--
ALTER TABLE `inventory_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
