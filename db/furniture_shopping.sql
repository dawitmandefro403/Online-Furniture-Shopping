-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 07:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnewproduct`
--

CREATE TABLE `addnewproduct` (
  `id` int(11) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addnewproduct`
--

INSERT INTO `addnewproduct` (`id`, `productname`, `description`, `price`, `image`) VALUES
(1, 'Bed', 'for comfortable sleep..', '200000', 'profile/img10.jpg'),
(17, 'Sofa', 'to sit comfortably', '30000', 'profile/photo5.jpg'),
(18, 'Mirror Stand', 'stand your mirror and paint safely..', '2500', 'profile/mekebabiya.jpg'),
(19, 'Chair', 'to sit properly', '2,800', 'profile/photo2.jpg'),
(20, 'Office furniture', 'suitable products for your office', '35,000', 'profile/for_office.jpg'),
(21, 'Kumsatin', 'to store your clothes safe..', '5500', 'profile/kumsatin.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `comment`) VALUES
('Abel', 'abel@gmail.com', 'mjhfytkxryjdtrsngioiyifyrser');

-- --------------------------------------------------------

--
-- Table structure for table `newproduct`
--
-- Error reading structure for table furniture_shopping.newproduct: #1932 - Table 'furniture_shopping.newproduct' doesn't exist in engine
-- Error reading data for table furniture_shopping.newproduct: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `furniture_shopping`.`newproduct`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `sold_product`
--

CREATE TABLE `sold_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`firstname`, `lastname`, `role`, `email`, `password`) VALUES
('Chombe', 'Kobe', 'admin', 'chocho@gmail.com', '6861'),
('Zeki', 'Kobe', 'user', 'kobezekibelay@gmail.com', '5580');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnewproduct`
--
ALTER TABLE `addnewproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_product`
--
ALTER TABLE `sold_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addnewproduct`
--
ALTER TABLE `addnewproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sold_product`
--
ALTER TABLE `sold_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
