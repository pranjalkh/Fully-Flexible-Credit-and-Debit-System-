-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 06:47 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_details`
--

CREATE TABLE `ad_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_details`
--

INSERT INTO `ad_details` (`username`, `password`) VALUES
('Admin', 'Password'),
('User', 'Pass'),
('16', 'dontknow'),
('18', 'dontknow'),
('pranjal', 'khandelwal'),
('bhagyashree', 'bagwe');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`username`, `password`, `balance`) VALUES
('duggar', '$2y$10$6e6AFS2ehBzfR', 810),
('HHH', '$2y$10$t8UdcBmzz6VbifXXPYSYme1GQ.J2voDwT79HT5KB7qbavl5jJUbTC', 9999),
('Lol', '$2y$10$1Kjh0io6YQGXK', 2104),
('Pappu', 'Pappu', 80),
('PPP', '$2y$10$tKd2BjFjqFCeqf8dEwSV2.M4j3xkSj6Q4FoJwu37rjhBwMYWEMu7i', 100),
('Pranjal', 'qwerty', 58083),
('pranjalkhandelwal', '$2y$10$4pmQcbuKN1RMC', 100),
('qwer', 'qaz', 100),
('Rajeev', 'Pass', 100),
('Ritveak', 'pass', 9960);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `name` varchar(20) NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`name`, `balance`) VALUES
('Enzo', 18098),
('Benzo', 0),
('Saloon', 0),
('Balaji', 0),
('Food Park', 0),
('DC', 0),
('K-block', 0),
('sjt canteen', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
