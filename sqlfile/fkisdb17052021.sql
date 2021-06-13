-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 09:58 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
  `Item_Quantity` int(100) NOT NULL,
  `Requestdate` date NOT NULL,
  `Collection_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingconfirmation`
--

CREATE TABLE `bookingconfirmation` (
  `Approved_Booking` varchar(10) NOT NULL,
  `Collection_Date` date NOT NULL,
  `Booking_ID` varchar(10) NOT NULL,
  `Rejected_Booking` varchar(10) NOT NULL,
  `Reject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `neworder`
--

CREATE TABLE `neworder` (
  `Order_ID` varchar(10) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Item_Code` varchar(20) NOT NULL,
  `Item_Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Staff_ID` varchar(10) NOT NULL,
  `Treasurer_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `level`, `email`, `Admin_ID`, `Staff_ID`, `Treasurer_ID`) VALUES
('Admin1234', 'admin123', 'admin', 'ayunibaiduri07@gmail.com', 'CB19087', '', ''),
('Staff1234', 'Staff123', 'staff', 'AfikahAlias45@gmail.com\r\n', '', 'ST19086', ''),
('Treasurer1', 'treasure123', 'treasurer', 'ABCDE122@gmail.com', '', '', 'TS12345');

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

-- --------------------------------------------------------

--
-- Table structure for table `routineaudit`
--

CREATE TABLE `routineaudit` (
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
-- Indexes for table `bookingconfirmation`
--
ALTER TABLE `bookingconfirmation`
  ADD PRIMARY KEY (`Approved_Booking`),
  ADD KEY `Booking_ID` (`Booking_ID`);

--
-- Indexes for table `neworder`
--
ALTER TABLE `neworder`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- Indexes for table `routineaudit`
--
ALTER TABLE `routineaudit`
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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Approved_Booking`) REFERENCES `bookingconfirmation` (`Approved_Booking`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `umpstaff` (`Staff_ID`);

--
-- Constraints for table `bookingconfirmation`
--
ALTER TABLE `bookingconfirmation`
  ADD CONSTRAINT `bookingconfirmation_ibfk_1` FOREIGN KEY (`Booking_ID`) REFERENCES `booking` (`Booking_ID`);

--
-- Constraints for table `neworder`
--
ALTER TABLE `neworder`
  ADD CONSTRAINT `neworder_ibfk_1` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`Approved_Booking`) REFERENCES `bookingconfirmation` (`Approved_Booking`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`Audit_ID`) REFERENCES `routineaudit` (`Audit_ID`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`Order_ID`) REFERENCES `neworder` (`Order_ID`);

--
-- Constraints for table `routineaudit`
--
ALTER TABLE `routineaudit`
  ADD CONSTRAINT `routineaudit_ibfk_1` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `treasurer`
--
ALTER TABLE `treasurer`
  ADD CONSTRAINT `treasurer_ibfk_1` FOREIGN KEY (`Report_ID`) REFERENCES `report` (`Report_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
