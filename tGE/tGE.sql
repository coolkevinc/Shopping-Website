-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2017 at 12:39 AM
-- Server version: 10.2.9-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tGE`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `itemID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Board Games'),
(2, 'Card Games'),
(3, 'Puzzles'),
(4, 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `listPrice` decimal(10,2) NOT NULL,
  `discountPercent` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`, `discountPercent`) VALUES
(1, 1, 'mon', 'Monopoly', '25.00', '0.00'),
(3, 1, 'catan', 'Settlers of Catan', '24.95', '5.00'),
(4, 1, 'rsk', 'Risk', '24.00', '0.00'),
(5, 1, 'code', 'Codenames', '19.95', '0.00'),
(6, 2, 'uno', 'Uno Card Game Tin', '12.95', '0.00'),
(7, 2, 'cah', 'Cards Against Humanity Base + Exapnsions 1-6 + Fantasy Bonus Pack', '82.00', '10.00'),
(8, 2, 'p10', 'Phase 10', '5.00', '0.00'),
(9, 2, 'deal', 'Monopoly Deal', '5.00', '0.00'),
(10, 2, 'cards', 'Bicycle Standard Playing Cards 2 Pack', '6.50', '0.00'),
(11, 3, 'jig', 'Ravensburger Sistine Chapel - Puzzle (5000-Piece)', '85.95', '10.00'),
(12, 3, '3dpuzz', 'Ravensburger Eiffel Tower - Night Edition - 3d Puzzle (216-Piece)', '36.99', '5.00'),
(13, 3, 'rubik', 'Rubik\'s Cube Game', '11.95', '0.00'),
(14, 3, 'hanoi', 'Towers of Hanoi', '19.99', '0.00'),
(15, 3, 'moyu', 'MoYu 13x13', '299.99', '10.00'),
(16, 4, 'yahtz', 'Yahtzee Game', '11.95', '0.00'),
(17, 4, 'chess', 'Chess/Checkers/Backgammon Set', '10.60', '0.00'),
(18, 4, 'go', 'Go Set with Reversible Bamboo Board (19x19 & 13x13), Bowls, and Bakelite Stones by Brybelly', '80.00', '8.00'),
(19, 4, 'jenga', 'Jenga Classic Game', '14.99', '0.00'),
(20, 4, 'con4', 'Connect 4', '12.95', '0.00'),
(22, 1, 'scrab', 'Othello', '7199.95', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productCode` (`productCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
