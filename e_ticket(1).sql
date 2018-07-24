-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 07:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `CustomerID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`CustomerID`, `name`, `email`) VALUES
(36, 'zia', 'ziaulhossain1@gmail.com'),
(37, 'nirjhor', 'sumonxpress69@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_no` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `TrainName` varchar(20) NOT NULL,
  `from_place` varchar(20) DEFAULT NULL,
  `to_place` varchar(20) DEFAULT NULL,
  `DepartureDate` date DEFAULT NULL,
  `departure_time` varchar(10) DEFAULT NULL,
  `NumberOfSeat` int(11) NOT NULL,
  `Total Fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `name` varchar(20) DEFAULT NULL,
  `code` int(11) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `from_place` varchar(30) NOT NULL,
  `to_place` varchar(30) NOT NULL,
  `DepartureTime` time NOT NULL,
  `Fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`name`, `code`, `capacity`, `from_place`, `to_place`, `DepartureTime`, `Fare`) VALUES
('Bogra Express', 1, 30, 'bogra', 'dhaka', '12:10:00', 320),
('Rangpur Express', 10, 30, 'rangpur', 'dhaka', '08:10:00', 400),
('Pabna Express', 11, 30, 'pabna', 'dhaka', '09:10:00', 350),
('Rangpur Express', 101, 30, 'dhaka', 'rangpur', '04:10:00', 400),
('Pabna Express', 102, 30, 'dhaka', 'pabna', '05:10:00', 350),
('Bogra Express', 111, 30, 'dhaka', 'bogra', '21:10:00', 320);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_no`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
