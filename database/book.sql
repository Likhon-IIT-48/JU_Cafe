-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2022 at 09:48 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maher`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Booking Type` enum('Any relative of any teacher----4000/-','Anyone referred. by any teacher----6000/-','Any program of any department-----500/-','') NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Guests` enum('1-50','50-100','100+','') NOT NULL,
  `Check_In` varchar(255) NOT NULL,
  `Check-out` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Name`, `Email`, `Dept`, `Booking Type`, `Phone`, `Guests`, `Check_In`, `Check-out`) VALUES
('Nahid', 'nahid.iit.ju.2018@gmail.com', ' IIT', 'Anyone referred. by any teacher----6000/-', '01539584732', '50-100', '2022-03-23', '2022-03-30'),
('Likhon', 'likhon@gmail.com', ' CSE', 'Any program of any department-----500/-', '0195969843', '100+', '2022-02-27', '2022-03-18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
