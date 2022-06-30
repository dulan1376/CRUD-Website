-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 10:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsample`
--

CREATE TABLE `tblsample` (
  `fldindex` int(100) NOT NULL,
  `fldstudentno` int(100) NOT NULL,
  `fldname` varchar(100) NOT NULL,
  `fldscholar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsample`
--

INSERT INTO `tblsample` (`fldindex`, `fldstudentno`, `fldname`, `fldscholar`) VALUES
(1, 1001, 'Hernandez', 'Academic Scholar'),
(2, 1002, 'Oba', 'Academic Scholar'),
(3, 1003, 'Gutierrez', 'Clerical Assistant'),
(4, 1004, 'Adriano', 'Clerical Assistant'),
(5, 1005, 'Smith', 'FEBRES'),
(6, 1006, 'Johnson', 'FEBRES'),
(7, 1007, 'Brown', 'Maintenance Assistant'),
(8, 1008, 'Jones', 'Maintenance Assistant'),
(9, 1009, 'Garcia', 'Athlete'),
(10, 1010, 'Miller', 'Athlete'),
(11, 1011, 'Davis', 'ALUMNI'),
(12, 1012, 'Martinez', 'ALUMNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsample`
--
ALTER TABLE `tblsample`
  ADD UNIQUE KEY `fldindex` (`fldindex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
