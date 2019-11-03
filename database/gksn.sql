-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 08:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gksn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `name`, `password`) VALUES
('asiffyy@gmail.com', 'Asif', 1234),
('maruf@gmail.com', 'Maruf', 1212),
('tom@gmail.com', 'Tom', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `dev_id` int(10) NOT NULL,
  `dev_name` varchar(30) NOT NULL,
  `dev_phone` int(11) NOT NULL,
  `game_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(10) NOT NULL,
  `game_name` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `specs` text NOT NULL,
  `rating` float(2,1) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `genre`, `specs`, `rating`, `price`) VALUES
(222, 'Assassin\'s Creed 2', 'Action', 'Windows: 7 CPU: core i3 GPU: Nvidia 780', 9.5, 4000),
(777, 'Witcher3', 'Action', 'Windows: 7,8,10 CPU: core i5 GPU: Nvidia 970', 9.5, 3500),
(999, 'Prototype', 'Action', 'Windows: 7 CPU: core i3 GPU: Nvidia 780', 8.5, 1000),
(8080, 'Crisis3', 'Action', 'Windows: 7,8,10 CPU: core i5 GPU: Nvidia 970', 9.5, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `mygames`
--

CREATE TABLE `mygames` (
  `user_name` varchar(50) NOT NULL,
  `game_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mygames`
--

INSERT INTO `mygames` (`user_name`, `game_name`) VALUES
('asif', 'Assassin\'s Creed 2'),
('maruf', 'Assassin\'s Creed 2'),
('maruf', 'prototype'),
('samira', 'prototype'),
('samira', 'Witcher3'),
('asif', 'prototype'),
('tom', 'prototype'),
('tom', 'Witcher3'),
('samira', 'Assassin\'s Creed 2');

-- --------------------------------------------------------

--
-- Table structure for table `topten`
--

CREATE TABLE `topten` (
  `user_name` varchar(30) NOT NULL,
  `discount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topten`
--

INSERT INTO `topten` (`user_name`, `discount`) VALUES
('Asif', '10%'),
('Mahmud', '10%'),
('Samira', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `tournament_id` int(10) NOT NULL,
  `tournament_name` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `prize` int(6) NOT NULL,
  `result` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `password` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `user_phone` int(11) NOT NULL,
  `experience_points` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_name`, `address`, `user_phone`, `experience_points`) VALUES
(1, 1234, 'Asif', 'Dhaka', 1671324427, 1005),
(2, 1234, 'Mahmud', 'Malibug', 1671324427, 500),
(8, 1212, 'Samira', 'Bashundhara', 122, 15),
(9, 1212, 'Maruf', 'Lalbagh', 122, 10),
(10, 1234, 'Tom', 'bidesh', 21323, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `topten`
--
ALTER TABLE `topten`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
