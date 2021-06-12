-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 08:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Admin_ID` varchar(10) NOT NULL,
  `Staff_ID` varchar(10) NOT NULL,
  `Treasurer_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Username`, `Password`, `level`, `email`, `Admin_ID`, `Staff_ID`, `Treasurer_ID`) VALUES
('Admin1234', 'admin123', 'admin', 'ayunibaiduri07@gmail.com', 'CB19087', '', ''),
('Staff1234', 'Staff123', 'staff', 'AfikahAlias45@gmail.com\r\n', '', 'ST19086', ''),
('Treasurer1', 'treasure123', 'treasurer', 'ABCDE122@gmail.com', '', '', 'TS12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Staff_ID` (`Staff_ID`),
  ADD KEY `Treasurer_ID` (`Treasurer_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
