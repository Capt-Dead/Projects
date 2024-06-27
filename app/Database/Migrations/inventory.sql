-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 23, 2024 at 04:42 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `ctgryID` int NOT NULL AUTO_INCREMENT,
  `ctgryName` varchar(60) NOT NULL,
  `ctgryDesc` varchar(60) NOT NULL,
  PRIMARY KEY (`ctgryID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ctgryID`, `ctgryName`, `ctgryDesc`) VALUES
(2, 'Soap', 'Body Essential'),
(3, 'Conditioner', 'Hair Treatment'),
(4, 'Laundry Soap', ''),
(5, 'Can Goods', ''),
(6, 'Condiments', ''),
(7, 'Essential', 'Essential'),
(8, 'Shampoo', 'Hair Essential'),
(9, 'Biscuits', 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

DROP TABLE IF EXISTS `supplies`;
CREATE TABLE IF NOT EXISTS `supplies` (
  `suppID` int NOT NULL AUTO_INCREMENT,
  `suppName` varchar(60) NOT NULL,
  `suppSize` varchar(60) NOT NULL,
  `suppQuan` int NOT NULL,
  `suppUnit` varchar(60) NOT NULL,
  `ctgryID` int NOT NULL,
  PRIMARY KEY (`suppID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`suppID`, `suppName`, `suppSize`, `suppQuan`, `suppUnit`, `ctgryID`) VALUES
(1, 'Bioderm', 'Medium', 1, 'pcs', 2),
(2, 'Cream Silk', 'Small', 12, 'pcs', 3),
(3, 'Century Tuna Flakes n Oil', 'Small', 3, 'pcs', 5),
(4, 'Luncheon Meat', 'Small', 5, 'pcs', 5),
(5, 'Calla', 'Large', 1, 'pcs', 4),
(6, 'Oil', 'Medium', 1, 'pcs', 6),
(7, 'Skyflakes', 'Small', 2, 'pack', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `isAdmin` tinyint NOT NULL DEFAULT '1' COMMENT '1 admin, 0 not admin',
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1 active, 0 not active',
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstname`, `lastname`, `isAdmin`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'John', 'Carza', 1, 1),
(2, 'Sanlayt8', '44b8f4a2d245544e7b8f420b1bd3f321', 'Sanlie', 'Monteclaro', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
