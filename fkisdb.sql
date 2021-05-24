-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 09:18 PM
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
-- Database: `fkisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_Num` int(11) NOT NULL,
  `Approved_Booking` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_ID` varchar(10) NOT NULL,
  `Staff_ID` varchar(10) NOT NULL,
  `Item_Code` varchar(20) NOT NULL,
  `Item_Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_conformation`
--

CREATE TABLE `booking_conformation` (
  `Approved_Booking` varchar(10) NOT NULL,
  `Collection_Date` date NOT NULL,
  `Booking_ID` varchar(10) NOT NULL,
  `Rejected_Booking` varchar(10) NOT NULL,
  `Reject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `new_order`
--

CREATE TABLE `new_order` (
  `Order_ID` varchar(10) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Item_Code` varchar(20) NOT NULL,
  `Item_Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Staff_ID` varchar(10) NOT NULL,
  `Treasurer_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` varchar(10) NOT NULL,
  `Report_Date` date NOT NULL,
  `Approved_Booking` varchar(10) NOT NULL,
  `Audit_ID` varchar(10) NOT NULL,
  `Order_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_ID`, `Report_Date`, `Approved_Booking`, `Audit_ID`, `Order_ID`) VALUES
('AS123', '2021-05-12', 'approve', 'RT545', 'DF3455');

-- --------------------------------------------------------

--
-- Table structure for table `routine_audit`
--

CREATE TABLE `routine_audit` (
  `Audit_ID` varchar(10) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Item_Code` varchar(20) NOT NULL,
  `Item_Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treasurer`
--

CREATE TABLE `treasurer` (
  `Treasurer_ID` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_Num` int(11) NOT NULL,
  `Report_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umpstaff`
--

CREATE TABLE `umpstaff` (
  `Staff_ID` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `Approved_Booking` (`Approved_Booking`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `booking_conformation`
--
ALTER TABLE `booking_conformation`
  ADD PRIMARY KEY (`Approved_Booking`),
  ADD KEY `Booking_ID` (`Booking_ID`);

--
-- Indexes for table `new_order`
--
ALTER TABLE `new_order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Admin_ID` (`Admin_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`),
  ADD KEY `Treasurer_ID` (`Treasurer_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `Approved_Booking` (`Approved_Booking`),
  ADD KEY `Audit_ID` (`Audit_ID`),
  ADD KEY `Order_ID` (`Order_ID`);

--
-- Indexes for table `routine_audit`
--
ALTER TABLE `routine_audit`
  ADD PRIMARY KEY (`Audit_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `treasurer`
--
ALTER TABLE `treasurer`
  ADD PRIMARY KEY (`Treasurer_ID`),
  ADD KEY `Report_ID` (`Report_ID`);

--
-- Indexes for table `umpstaff`
--
ALTER TABLE `umpstaff`
  ADD PRIMARY KEY (`Staff_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;