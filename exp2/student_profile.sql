-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 04:51 PM
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
-- Database: `student_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_info`
--

CREATE TABLE `branch_info` (
  `Branch_ID` int(5) NOT NULL,
  `Branch_Name` varchar(10) NOT NULL,
  `Course_ID` int(5) NOT NULL,
  `Fees` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `Course_ID` int(5) NOT NULL,
  `Course_Name` varchar(15) NOT NULL,
  `Stu_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_info`
--

CREATE TABLE `enrollment_info` (
  `Stu_ID` int(5) NOT NULL,
  `Course_ID` int(5) NOT NULL,
  `Mode` varchar(10) NOT NULL,
  `Duration` tinyint(1) NOT NULL,
  `DOB` date NOT NULL,
  `Branch_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE `stu_info` (
  `First_Name` varchar(15) NOT NULL,
  `Middle_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Sur_Name` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile_Number` bigint(10) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Stu_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_info`
--
ALTER TABLE `branch_info`
  ADD PRIMARY KEY (`Branch_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`Course_ID`),
  ADD UNIQUE KEY `Stu_ID` (`Stu_ID`),
  ADD KEY `Stu_ID_2` (`Stu_ID`);

--
-- Indexes for table `enrollment_info`
--
ALTER TABLE `enrollment_info`
  ADD PRIMARY KEY (`Stu_ID`),
  ADD UNIQUE KEY `Course_ID` (`Course_ID`,`Branch_ID`),
  ADD KEY `Branch_ID` (`Branch_ID`);

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
  ADD PRIMARY KEY (`Stu_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_info`
--
ALTER TABLE `branch_info`
  MODIFY `Branch_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stu_info`
--
ALTER TABLE `stu_info`
  MODIFY `Stu_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_info`
--
ALTER TABLE `branch_info`
  ADD CONSTRAINT `branch_info_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course_info` (`Course_ID`);

--
-- Constraints for table `course_info`
--
ALTER TABLE `course_info`
  ADD CONSTRAINT `course_info_ibfk_1` FOREIGN KEY (`Stu_ID`) REFERENCES `stu_info` (`Stu_ID`);

--
-- Constraints for table `enrollment_info`
--
ALTER TABLE `enrollment_info`
  ADD CONSTRAINT `enrollment_info_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course_info` (`Course_ID`),
  ADD CONSTRAINT `enrollment_info_ibfk_2` FOREIGN KEY (`Branch_ID`) REFERENCES `branch_info` (`Branch_ID`),
  ADD CONSTRAINT `enrollment_info_ibfk_3` FOREIGN KEY (`Stu_ID`) REFERENCES `stu_info` (`Stu_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
