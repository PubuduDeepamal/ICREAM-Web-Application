-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 27, 2022 at 11:43 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icream`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmessage`
--

DROP TABLE IF EXISTS `cmessage`;
CREATE TABLE IF NOT EXISTS `cmessage` (
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cmessage`
--

INSERT INTO `cmessage` (`name`, `email`, `subject`, `message`) VALUES
('pubudu Deepamal', 'pubududeepamal98@gmail.com', 'complane', 'no'),
('Mihishani', 'Mihishani@gmail.com', 'complain', 'no'),
('Selani alwis', 'Selanialwis@gmail.com', 'complane', 'no'),
('Selani ', 'Selani@gmail.com', 'complain', 'kama kunuwela'),
('Selani', 'Selanialwis@gmail.com', 'complain', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `corder`
--

DROP TABLE IF EXISTS `corder`;
CREATE TABLE IF NOT EXISTS `corder` (
  `nic` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL,
  `quntity` int(11) NOT NULL,
  `note` varchar(250) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `corder`
--

INSERT INTO `corder` (`nic`, `name`, `email`, `product`, `quntity`, `note`) VALUES
(2222, 'pubudu Deepamal', 'pubududeepamal98@gmail.com', 's', 1, 'www'),
(2000876771, 'Selani alwis', 'Selanialwis@gmail.com', 'New Superman Ice Cream', 9, 'no'),
(2000231267, 'pubudu Deepamal', 'pubududeepamal98@gmail.com', 'New Red Velvet Ice Cream', 3, 'no'),
(200087672, 'nimesh pahasara', 'nimeshpahasara@gmail.com', 'Cotton Candy Ice Cream', 2, 'no'),
(2000876772, 'Mihishani', 'Mihishani@gmail.com', 'Moose Tracks Ice Cream', 1, 'no'),
(2000876778, 'Selani', 'Selani34@gmail.com', 'Bubble Gum Ice Cream', 2, 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
