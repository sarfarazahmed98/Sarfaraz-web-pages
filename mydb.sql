-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 07:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `options_123456789`
--

CREATE TABLE `options_123456789` (
  `sno` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `icode` varchar(5) DEFAULT NULL,
  `iname` varchar(100) DEFAULT NULL,
  `dist` varchar(5) DEFAULT NULL,
  `bcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options_123456789`
--

INSERT INTO `options_123456789` (`sno`, `option`, `icode`, `iname`, `dist`, `bcode`) VALUES
(1, 1, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'CSE'),
(2, 2, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'ECE'),
(3, 3, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'CSE'),
(4, 4, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'CE'),
(5, 5, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'EEE'),
(6, 6, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `options_1819970403`
--

CREATE TABLE `options_1819970403` (
  `sno` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `icode` varchar(5) DEFAULT NULL,
  `iname` varchar(100) DEFAULT NULL,
  `dist` varchar(5) DEFAULT NULL,
  `bcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options_1819970403`
--

INSERT INTO `options_1819970403` (`sno`, `option`, `icode`, `iname`, `dist`, `bcode`) VALUES
(1, 1, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'CE'),
(2, 2, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'ECE'),
(3, 3, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'IT'),
(4, 4, 'MITS', 'Madanapalle Institute of Technology & Sciences, Madanapalle', 'CTR', 'CSE'),
(5, 5, 'MITS', 'Madanapalle Institute of Technology & Sciences, Madanapalle', 'CTR', 'EEE'),
(6, 6, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'CE'),
(7, 7, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'ECE'),
(8, 8, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'IT'),
(9, 9, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'CSE'),
(10, 10, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'EEE'),
(11, 11, 'SVCE', 'SV College of Engineering, Tirupati', 'CTR', 'CE'),
(12, 12, 'SVCE', 'SV College of Engineering, Tirupati', 'CTR', 'ECE'),
(13, 13, 'SVCE', 'SV College of Engineering, Tirupati', 'CTR', 'IT'),
(14, 14, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'CSE'),
(15, 15, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `options_1819970918`
--

CREATE TABLE `options_1819970918` (
  `sno` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `icode` varchar(5) DEFAULT NULL,
  `iname` varchar(100) DEFAULT NULL,
  `dist` varchar(5) DEFAULT NULL,
  `bcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options_1819970918`
--

INSERT INTO `options_1819970918` (`sno`, `option`, `icode`, `iname`, `dist`, `bcode`) VALUES
(1, 1, 'SVCE', 'SV College of Engineering, Tirupati', 'CTR', 'CE'),
(2, 2, 'SVCE', 'SV College of Engineering, Tirupati', 'CTR', 'ECE'),
(3, 3, 'SVCE', 'SV College of Engineering, Tirupati', 'CTR', 'IT'),
(4, 4, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'CSE'),
(5, 5, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'EEE'),
(6, 6, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'CE'),
(7, 7, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'ECE'),
(8, 8, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'IT'),
(9, 9, 'MITS', 'Madanapalle Institute of Technology & Sciences, Madanapalle', 'CTR', 'CSE'),
(10, 10, 'MITS', 'Madanapalle Institute of Technology & Sciences, Madanapalle', 'CTR', 'EEE'),
(11, 11, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'CE'),
(12, 12, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'ECE'),
(13, 13, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `options_1819971207`
--

CREATE TABLE `options_1819971207` (
  `sno` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `icode` varchar(5) DEFAULT NULL,
  `iname` varchar(100) DEFAULT NULL,
  `dist` varchar(5) DEFAULT NULL,
  `bcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options_1819971207`
--

INSERT INTO `options_1819971207` (`sno`, `option`, `icode`, `iname`, `dist`, `bcode`) VALUES
(1, 1, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'CE'),
(2, 2, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'CSE'),
(3, 3, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'ECE'),
(4, 4, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'EEE'),
(5, 5, 'SVU', 'Sri Venkateswara University, Tirupati', 'CTR', 'IT'),
(6, 6, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'CE'),
(7, 7, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'CSE'),
(8, 8, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'ECE'),
(9, 9, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'EEE'),
(10, 10, 'JNTC', 'JNTUA College of Engineering, Kalikiri', 'CTR', 'IT'),
(11, 11, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'CE'),
(12, 12, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'CSE'),
(13, 13, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'ECE'),
(14, 14, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'EEE'),
(15, 15, 'SVNE', 'Sree Vidyanikethan Engineering College, Tirupati', 'CTR', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `options_1819980301`
--

CREATE TABLE `options_1819980301` (
  `sno` int(11) DEFAULT NULL,
  `option` int(11) DEFAULT NULL,
  `icode` varchar(5) DEFAULT NULL,
  `iname` varchar(100) DEFAULT NULL,
  `dist` varchar(5) DEFAULT NULL,
  `bcode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `lid` varchar(10) NOT NULL,
  `hno` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `cname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `rank` bigint(10) NOT NULL,
  `caste` varchar(5) NOT NULL,
  `ph` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`lid`, `hno`, `password`, `dob`, `cname`, `fname`, `gender`, `rank`, `caste`, `ph`) VALUES
('svecit44', 123456789, '12345', '1984-06-29', 'umamahesh', 'subbarao', 'Male', 28005, 'GEN', 'No'),
('A1296', 1819970403, 'manasa123', '1997-04-03', 'S MANASA', 'S SRINIVASULU', 'Female', 11000, 'GEN', 'No'),
('A1297', 1819970918, 'SRIJA97', '1997-09-18', 'SRIJA CHERKULA VIJAY', 'C VIJAY KUMAR', 'Female', 13252, 'GEN', 'No'),
('A1294', 1819971207, 'sha94', '1997-12-07', 'SHAIK NASEER', 'S ANWAR HUSSAIN', 'Male', 22800, 'BC-E', 'No'),
('A1295', 1819980301, 'guddu123', '1998-03-01', 'SHAIK SARFARAZ AHMED', 'S NOOR AHMED BASHA', 'Male', 19352, 'BC-E', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`hno`),
  ADD UNIQUE KEY `lid` (`lid`,`hno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
