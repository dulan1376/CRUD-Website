-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 05:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup_verify`
--

CREATE TABLE `signup_verify` (
  `id` int(11) NOT NULL,
  `student_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `student_scholarship` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `student_contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `student_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `student_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hashed_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup_verify`
--

INSERT INTO `signup_verify` (`id`, `student_lname`, `student_fname`, `student_id`, `student_scholarship`, `student_gender`, `student_contact`, `student_address`, `guardian_contact`, `user_name`, `student_email`, `hashed_password`) VALUES
(0, 'Robynn', 'John', '987654', 'Clerical Assistant', 'Male', '09456738574', '381, 26th Street Fernando Air Base', '09237183749', 'john', 'john@gmail.com', '$2y$10$D/UWI8SZaFllkru9ZRE/6.PcVKZ5eQTM1CkAWIOyaHOnkSTFKJ36.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentdata`
--

CREATE TABLE `tbl_studentdata` (
  `student_fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_scholarship` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `student_contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `student_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_studentdata`
--

INSERT INTO `tbl_studentdata` (`student_fname`, `student_lname`, `student_id`, `student_scholarship`, `student_gender`, `student_contact`, `student_address`, `guardian_contact`, `id`) VALUES
('Renzo ', 'Baldovino', 206, 'Maintenance Assistant', 'Male', '09020182332', 'Lipa City', '1234567097', 9),
('Robynn', 'Hernandez', 1202, 'Clerical Assistant', 'Male', '0923415243', 'Lipa City', '09938463724', 6),
('Gaerlan', 'Gutierrez', 1213, 'Maintenance Assistant', 'Male', '09263813443', 'Batangas City', '09123456719', 1),
('Unika', 'Oba', 1234, 'FEBRES', 'Female', '09527382913', 'Lipa City', '09562673601', 2),
('Dylan', 'Matocinos', 1354, 'Athlete', 'Male', '09723846371', 'Mabini', '09827384685', 5),
('Rey ', 'Arnoco', 1565, 'ALUMNI', 'Male', '09356273662', 'Lipa City', '09472896643', 7),
('Nelia', 'Rocamora', 2343, 'ALUMNI', 'Female', '09747483758', 'Lipa City', '09262738291', 8),
('Joshua', 'Hernandez', 9999, 'Academic Scholar', 'Male', '09999999999', 'Lipa City', '0988888888', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_lamp_scholar`
--

CREATE TABLE `user_lamp_scholar` (
  `id` int(11) NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hashed_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_lamp_scholar`
--

INSERT INTO `user_lamp_scholar` (`id`, `user_email`, `user_name`, `user_password`, `hashed_password`) VALUES
(1, 'gaerlan@gmail.com', '', 'gaerlan77', ''),
(2, 'oba@gmail.com', 'Oba', '', '$2y$10$q4kUDaT8lfZ8M8epSDIy1.HmgdQgWa.iCCWd0KhbuZV3TX/n8EGwi'),
(3, 'gaerlan752@gmail.com', 'gj', '', '$2y$10$0npJAsTn17OT3IK6PLohSeVTyN28qqEuu96N.w4F97MdtHGq0lwWS'),
(5, 'dylan@gmail.com', 'dulan', '', '$2y$10$Vj.Glrc05xSs67E9SoNRa.Eece9OA.FIA9UV.TNemgqs4fuOSrG4W'),
(6, 'robynn@gmail.com', 'rob', '', '$2y$10$FXs.hUxo9TwThhIixxltz.RVtodJDwM4wrNunSpnbkZ6BBjnBDUZC'),
(7, 'rey@gmail.com', 'rey', '', '$2y$10$5hnSa0Sbr63RtMXK/pDsAuzDoKVp0uCQN1RcCZKfjiGQWR72JWArm'),
(8, 'nelia@gmail.com', 'neliar', '', '$2y$10$jjMgPiZb8qwWqBSPKbPOguU0pZQQa3c/iqJtTHc.LC1/czcpm5NTW'),
(9, 'renzo@gmail.com', 'renzo', '', '$2y$10$t9yCe.y/oz3jugJ3j0Y1m..SWmbPnV9BnwBOug5syusTb6q4AlEoi'),
(10, 'admin', 'admin', '', '$2y$10$XwJAFK3iKInsqjBPUCC65eQwOUHzBphBgZevU1IGkkKsmQ.7sJLoa'),
(15, 'joshy@gmail.com', 'joshy', '', '$2y$10$hUgk.R2rsgxSWGEvDWaCfOBRpwOXhJWYz3DVxJz2ehLGEAGCc3a9C'),
(17, 'voncarlos@gmail.com', 'von123', '', '$2y$10$1w6lEZl9AShJinIXbiWZ4uTLpl6r5oD3O8J4W/Jk0i3qbZGVQrnO.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_verify`
--
ALTER TABLE `signup_verify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_studentdata`
--
ALTER TABLE `tbl_studentdata`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_lamp_scholar`
--
ALTER TABLE `user_lamp_scholar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_lamp_scholar`
--
ALTER TABLE `user_lamp_scholar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
