-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 12:01 AM
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
  `id` int(11) NOT NULL,
  `type_id` int(75) NOT NULL,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `quantity` varchar(250) CHARACTER SET latin1 NOT NULL,
  `serial_number` varchar(250) CHARACTER SET latin1 NOT NULL,
  `location` varchar(250) CHARACTER SET latin1 NOT NULL,
  `size` varchar(250) CHARACTER SET latin1 NOT NULL,
  `status_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `type_id`, `name`, `quantity`, `serial_number`, `location`, `size`, `status_id`, `date`, `user_id`) VALUES
(0, 3, 'asfasd', 'sdasd', 'asdas', 'asdsd', 'asdsd', 3, '0000-00-00', 38),
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
(39, 2, 'asdasd', 'asdasdas', 'asdasd', 'asdasd', 'asdasd', 2, '0000-00-00', 38),
(40, 2, 'asdasd', 'asdasd', 'dsadas', 'asdasd', 'asdasd', 2, '0000-00-00', 38),
(41, 1, 'adggggggggggggg', 'ggggggggggggg', 'ggggggggggg', 'ggggggggg', 'gggggggg', 3, '0000-00-00', 38);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
