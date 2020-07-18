-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2020 at 11:49 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `timezoneid` varchar(100) NOT NULL,
  `slot` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `countryCode` char(5) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `age` text,
  `gender` char(15) DEFAULT NULL,
  `optional` longtext,
  `opt` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date`, `timezoneid`, `slot`, `name`, `email`, `countryCode`, `phonenumber`, `age`, `gender`, `optional`, `opt`) VALUES
(15, '18/07/2020', 'International Date Line West (GMT-12:00)', '10:00-11:00', 'meghna', 'rao@gmail.com', '1', '', '1', 'M', '', ''),
(16, '25/07/2020', 'Midway Island, Samoa (GMT-11:00)', '10:00-11:00', 'meghna', 'rao@gmail.com', '61', '9980837234', '20', 'F', 'anxiety,depression', ''),
(17, '18/07/2020', 'International Date Line West (GMT-12:00)', '02:00-03:00', 'meghna', 'rao@gmail.com', '1', '', '1', 'Male', '', ''),
(18, '25/07/2020', 'Midway Island, Samoa (GMT-11:00)', '02:00-03:00', 'meghna', 'rao@gmail.com', '1', '9980837234', '19', 'RNS', 'not feeling good', ''),
(19, '25/07/2020', 'Midway Island, Samoa (GMT-11:00)', '02:00-03:00', 'meghna', 'rao@gmail.com', '1', '9980837234', '19', 'RNS', 'not feeling good', ''),
(20, '25/07/2020', 'Midway Island, Samoa (GMT-11:00)', '10:00-11:00', 'meghan', 'fox@gmail.com', '1', '', '20', 'Female', 'anxiety', 'not well'),
(21, '25/07/2020', 'Midway Island, Samoa (GMT-11:00)', '10:00-11:00', 'meghan', 'fox@gmail.com', '1', '9980837234', '20', 'Female', 'anxiety', 'not well');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
