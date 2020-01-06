-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 08:02 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vnuserdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `bookingdate` varchar(255) NOT NULL,
  `numberofpeople` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user`, `email`, `contact`, `address`, `plan`, `bookingdate`, `numberofpeople`, `message`) VALUES
(1, 'rajiv k c', 'rozzer.run@gmail.com', '729398309', 'warsawa, poland', 'kathmandu tour', '02/21/2020', '5', 'MAKE SPECIAL ARRANGEMENT FOR KIDS.'),
(2, 'rocky don', 'rockey@gmail.com', '5545664201', 'JAPAN', 'POKHARA TOUR', '02/05/2020', '2', 'WE ARE COUPLE!');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(1, 'rajiv k c', 'rozzer.run@gmail.com', '184861654864', ''),
(2, 'justyna sulka', 'sulka@gmail.com', '26589865', ''),
(3, 'justyna sulka', 'sulka@gmail.com', '26589865', ''),
(4, 'rajiv k c', 'rozzer.run@gmail.com', '184861654864', 'hi there'),
(5, 'janney donn', 'jenny@gmail.com', '454659515312531', 'hi there I am jenny'),
(6, 'rajiv k c', 'rozzer.run@gmail.com', '184861654864', 'I love u'),
(7, 'justyna sulka', 'sulka@gmail.com', '26589865', 'hi there'),
(8, 'janney donn', 'jenny@gmail.com', '454659515312531', 'hello'),
(9, 'janney donn', 'jenny@gmail.com', '454659515312531', 'hi'),
(10, 'janney donn', 'jenny@gmail.com', '454659515312531', 'hi'),
(12, 'rocky don', 'rockey@gmail.com', '5545664201', 'hi rockey'),
(13, 'justyna sulka', 'sulka@gmail.com', '26589865', 'dtjjjjjgfn'),
(14, 'justyna sulka', 'sulka@gmail.com', '26589865', 'eqytge'),
(15, 'rocky don', 'rockey@gmail.com', '5545664201', 'srutjrdykmud'),
(17, 'janney donn', 'jenny@gmail.com', '454659515312531', 'hi jeny'),
(18, 'rocky don', 'rockey@gmail.com', '5545664201', '123466');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search` ADD FULLTEXT KEY `title` (`title`,`description`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
