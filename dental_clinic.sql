-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 03:59 PM
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
-- Database: `dental clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` char(5) NOT NULL,
  `password` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('ad001', '001'),
('ad002', '002');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` char(5) NOT NULL,
  `DATE` date DEFAULT NULL,
  `TIME` time DEFAULT NULL,
  `pid` char(5) DEFAULT NULL,
  `did` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `DATE`, `TIME`, `pid`, `did`) VALUES
('ap001', '2022-03-29', '10:32:00', 'sn090', 'su100'),
('ap002', '2022-03-22', '09:46:00', 'su105', 'su100'),
('ap003', '2022-03-29', '09:47:00', 'si089', 'su104'),
('ap004', '2022-03-30', '09:48:00', 'so091', 'su104'),
('ap005', '2022-03-30', '09:50:00', 'sp093', 'su100'),
('ap006', '2022-03-29', '12:50:00', 'sp094', 'su104'),
('ap007', '2022-03-29', '14:06:00', 'sn090', 'su100'),
('fee1', '2022-04-05', '21:32:00', 'sn090', 'su100');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `aid` char(5) DEFAULT NULL,
  `pid` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`aid`, `pid`) VALUES
('ap001', 'sn090'),
('ap002', 'su105'),
('ap003', 'si089'),
('ap004', 'so091'),
('ap005', 'sp093'),
('ap006', 'sp094'),
('ap007', 'sn090'),
('fee1', 'sn090');

-- --------------------------------------------------------

--
-- Table structure for table `dentist`
--

CREATE TABLE `dentist` (
  `did` char(5) NOT NULL,
  `NAME` varchar(15) DEFAULT NULL,
  `qualifi` varchar(15) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `phno` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dentist`
--

INSERT INTO `dentist` (`did`, `NAME`, `qualifi`, `email`, `phno`) VALUES
('su100', 'suhas', 'dmd', 'sushmitha.hs200', '8637826558'),
('su104', 'susheel', 'dds', 'susheel123@gmai', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` char(5) NOT NULL,
  `pname` varchar(15) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `phno` decimal(10,0) DEFAULT NULL,
  `blood_group` char(3) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `address`, `phno`, `blood_group`, `email`) VALUES
('si089', 'sinchana', 'hosmane', '3030303030', 'ab+', 'sinchana2001@gmail.com'),
('sn090', 'sneha', 'ftydytd', '8637826559', 'ab-', 'smgsneha14@gmail.com'),
('so091', 'sona', 'kolur', '4040404040', 'o-', 'sona123@gmail.com'),
('sp093', 'sparsha', 'katesubana', '5050505050', 'ab+', 'sparsha123@gmail.com'),
('sp094', 'spoorthi', 'bhadravathi', '6060606060', 'a-', 'spoorthi123@gmail.com'),
('su105', 'sushmitha', 'gopala', '1010101010', 'b+', 'sushmitha.hs2001@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `did` varchar(5) DEFAULT NULL,
  `treid` varchar(5) DEFAULT NULL,
  `medicine` varchar(15) DEFAULT NULL,
  `dosage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`did`, `treid`, `medicine`, `dosage`) VALUES
('su100', 'tr001', 'pain killer', 1),
('su104', 'tr003', 'pain killer', 4),
('su104', 'tr004', 'mouth wash', 15),
('su100', 'fest', 'pain killer', 15),
('su100', 'guu13', 'pain killer', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ptreat`
--

CREATE TABLE `ptreat` (
  `pid` char(5) NOT NULL,
  `tid` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptreat`
--

INSERT INTO `ptreat` (`pid`, `tid`) VALUES
('si089', 'tr003'),
('sn090', 'fest'),
('sn090', 'guu13'),
('so091', 'tr002'),
('sp094', 'tr004'),
('su105', 'tr001');

-- --------------------------------------------------------

--
-- Table structure for table `treatement`
--

CREATE TABLE `treatement` (
  `tid` char(5) NOT NULL,
  `treatement` varchar(20) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `did` char(5) DEFAULT NULL,
  `equipment` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatement`
--

INSERT INTO `treatement` (`tid`, `treatement`, `fee`, `did`, `equipment`) VALUES
('fest', 'Root cannal', 1000, 'su100', 'hammer'),
('guu13', 'Root cannal', 1000, 'su100', 'hammer'),
('tr001', 'Root cannal', 1000, 'su100', 'dental dri'),
('tr002', 'teeth whitening', 500, 'su100', 'dental cream'),
('tr003', 'ceramic teeth', 2000, 'su104', 'Teeth cap'),
('tr004', 'sterilization', 2000, 'su104', 'sterilizer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`,`password`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `gfyd` (`pid`),
  ADD KEY `gfyfd` (`did`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD KEY `nsbd` (`aid`),
  ADD KEY `bjb` (`pid`);

--
-- Indexes for table `dentist`
--
ALTER TABLE `dentist`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD KEY `fyf` (`did`),
  ADD KEY `fyfgg` (`treid`);

--
-- Indexes for table `ptreat`
--
ALTER TABLE `ptreat`
  ADD PRIMARY KEY (`pid`,`tid`),
  ADD KEY `nhgji` (`tid`);

--
-- Indexes for table `treatement`
--
ALTER TABLE `treatement`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `bhji` (`did`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `gfyd` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  ADD CONSTRAINT `gfyfd` FOREIGN KEY (`did`) REFERENCES `dentist` (`did`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `bjb` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`) ON DELETE SET NULL,
  ADD CONSTRAINT `nsbd` FOREIGN KEY (`aid`) REFERENCES `appointment` (`aid`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `fyf` FOREIGN KEY (`did`) REFERENCES `dentist` (`did`),
  ADD CONSTRAINT `fyfgg` FOREIGN KEY (`treid`) REFERENCES `treatement` (`tid`);

--
-- Constraints for table `ptreat`
--
ALTER TABLE `ptreat`
  ADD CONSTRAINT `nhg` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`),
  ADD CONSTRAINT `nhgji` FOREIGN KEY (`tid`) REFERENCES `treatement` (`tid`);

--
-- Constraints for table `treatement`
--
ALTER TABLE `treatement`
  ADD CONSTRAINT `bhji` FOREIGN KEY (`did`) REFERENCES `dentist` (`did`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
