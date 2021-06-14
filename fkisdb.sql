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
  `Booking_status` varchar(10) NOT NULL
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
  `Collection_date` date NOT NULL,
  `Booking_status` varchar(100) NOT NULL
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Staff_ID` varchar(10) NOT NULL,
  `Treasurer_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Dumping data for table `registration`
--

INSERT INTO `login` (`Username`, `Password`, `level`, `email`, `Admin_ID`, `Staff_ID`, `Treasurer_ID`) VALUES
('Admin1234', 'admin123', 'admin', 'ayunibaiduri07@gmail.com', 'CB19087', '', ''),
('Staff1110', 'staff1110', 'staff', 'safwan@gmail.com', '', 'ST19010', ''),
('Staff2220', 'staff2220', 'staff', 'darwish@gmail.com', '', 'ST19011', ''),
('Staff3330', 'staff3330', 'staff', 'asmyra@gmail.com', '', 'ST19020', ''),
('Staff4440', 'staff4440', 'staff', 'afikahashikin@gmail.com', '', 'ST19019', ''),
('Staff5550', 'staff5550', 'staff', 'luqman@gmail.com\r\n', '', 'ST19086', ''),
('Treasurer1', 'treasure123', 'treasurer', 'treasurerump2021@gmail.com', '', '', 'TS12345');

-- --------------------------------------------------------

--
--
-- Table structure for table `recoverpassword`
--

CREATE TABLE `recoverpassword` (
  `email` varchar(20) NOT NULL,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` varchar(10) NOT NULL,
  `Report_Date` date NOT NULL,
  `Booking_status` varchar(10) NOT NULL,
  `Audit_ID` varchar(10) NOT NULL,
  `Order_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_ID`, `Report_Date`, `Booking_status`, `Audit_ID`, `Order_ID`) VALUES
('AS123', '2021-05-12', 'Approved', 'RT545', 'DF3455');

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

INSERT INTO `routine_audit` (`Audit_ID`, `Admin_ID`, `Item_Code`, `Item_Quantity`) VALUES
('125896325', 'Admin1234', '1258963254', 10),
('145236856', 'Admin1234', '7896582589', 10),
('145632789', 'Admin1234', '7421589632', 10),
('147845875', 'Admin1234', '1478458523', 10),
('745896325', 'Admin1234', '1478536985', 10);
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
  ADD KEY `Booking_status` (`Booking_status`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `new_order`
--
ALTER TABLE `new_order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `Booking_status` (`Booking_status`),
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
