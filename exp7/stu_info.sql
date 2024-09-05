-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 04:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE `stu_info` (
  `Name` varchar(50) NOT NULL,
  `stuID` int(5) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `MblNo` bigint(10) NOT NULL,
  `emailID` varchar(20) NOT NULL,
  `Father_Name` varchar(40) NOT NULL,
  `Father_MblNo` bigint(10) NOT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stu_info`
--

INSERT INTO `stu_info` (`Name`, `stuID`, `Gender`, `DOB`, `MblNo`, `emailID`, `Father_Name`, `Father_MblNo`, `Address`) VALUES
('C.C.S.Lakshmi Narayana Reddy  Reddy', 4, 'male', '0000-00-00', 35, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 234325, 'krp'),
('C.C.S.Lakshmi Narayana Reddy  Reddy', 5, 'male', '0000-00-00', 35, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 234325, 'krp'),
('C.C.S.Lakshmi Narayana Reddy  Reddy', 6, 'male', '0000-00-00', 2147483647, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 2147483647, 'Kanchi Reddy Palli.'),
('C.C.S.Lakshmi Narayana Reddy  Reddy', 7, 'male', '0000-00-00', 2147483647, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 2147483647, 'Kanchi Reddy Palli.'),
('C.Rahul  Reddy', 8, 'male', '0000-00-00', 2147483647, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 2147483647, 'Kanchi Reddy Palli'),
('C.Rahul  Reddy', 9, 'male', '0000-00-00', 2147483647, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 2147483647, 'Kanchi Reddy Palli'),
('C.Rahul  Reddy', 10, 'male', '0000-00-00', 6305203530, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 9704750790, 'krp'),
('C.Rahul  Reddy', 11, 'male', '0000-00-00', 6305203530, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 9704750790, 'krp'),
('C.Rahul  Reddy', 12, 'male', '2024-09-16', 6305203530, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 9704750790, 'krp'),
('C.Rahul  Reddy', 13, 'male', '2024-09-16', 6305203530, 'rahul@gmail.com', 'C.S.Lakshmi Narayana Reddy', 9704750790, 'krp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
  ADD PRIMARY KEY (`stuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_info`
--
ALTER TABLE `stu_info`
  MODIFY `stuID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
