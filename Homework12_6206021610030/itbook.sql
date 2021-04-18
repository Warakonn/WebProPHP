-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 07:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `BookName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TypeID` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `StatusID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `Publish` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UnitPrice` int(4) NOT NULL,
  `UnitRent` int(2) NOT NULL,
  `DayAmount` int(2) DEFAULT NULL,
  `Picture` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BookDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`, `Picture`, `BookDate`) VALUES
('00001', 'Doraemon', '001', '01', 'KPN', 150, 3, 2, NULL, '2021-03-09'),
('00002', 'เก็บตะวัน', '002', '03', 'WRP', 250, 5, 3, NULL, '2021-02-01'),
('003', 'Conan', '001', '01', 'TTRD', 200, 20, 30, 'large.jpg', '2021-04-07'),
('00112', 'Conan Test', '001', '01', 'ATRD', 150, 4, 5, 'large.jpg', '2021-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerSurname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerAddr` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CustomerPhone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `CustomerSurname`, `CustomerAddr`, `CustomerPhone`) VALUES
('0001', 'ธนวัฒ', 'นันทจิตตานนท์', 'ปราจีนบุรี', '037217300'),
('0002', 'Jone', 'Smith', 'กรุงเทพ', '027341293');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`userID`, `userName`, `password`, `level`) VALUES
(1, 'admin', '123', '1'),
(2, 'non', '123', '2');

-- --------------------------------------------------------

--
-- Table structure for table `statusbook`
--

CREATE TABLE `statusbook` (
  `StatusID` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `StatusName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statusbook`
--

INSERT INTO `statusbook` (`StatusID`, `StatusName`) VALUES
('01', 'ปกติ'),
('02', 'ชำรุด'),
('03', 'ส่งซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `typebook`
--

CREATE TABLE `typebook` (
  `TypeID` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `TypeName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typebook`
--

INSERT INTO `typebook` (`TypeID`, `TypeName`) VALUES
('001', 'การ์ตูน'),
('002', 'นิยาย'),
('003', 'นิตยสาร');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
