-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 04:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `aircraftID` varchar(6) NOT NULL,
  `aircraftCompany` varchar(20) NOT NULL,
  `aircraftModel` varchar(20) NOT NULL,
  `passengerCapacity` int(3) NOT NULL,
  `dateLatestMaintenance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`aircraftID`, `aircraftCompany`, `aircraftModel`, `passengerCapacity`, `dateLatestMaintenance`) VALUES
('AK5217', 'Air Asia', 'A320-200', 170, '2020-12-14'),
('D74399', 'Air Asia', 'A330-300', 300, '2020-01-12'),
('FD7878', 'Air Asia', 'A320neo', 180, '2020-03-06'),
('MH1204', 'Malaysia Airlines', 'A320-200', 287, '2020-11-19'),
('MH1326', 'Malaysia Airlines', 'A330-300', 290, '2020-02-07'),
('MH4271', 'Malaysia Airlines', 'A380-800', 486, '2020-05-22'),
('MH9054', 'Malaysia Airlines', 'A350-900', 286, '2020-10-14'),
('OD0648', 'Malindo', 'B737-800', 162, '2020-07-25'),
('OD3247', 'Malindo', 'ATR 72-600', 72, '2020-05-31'),
('OD7264', 'Malindo', 'B737-900', 180, '2020-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destinationID` varchar(3) NOT NULL,
  `aircraftID` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `flightDateTime` datetime NOT NULL,
  `destinationPrice` float(6,2) NOT NULL,
  `departureGate` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`destinationID`, `aircraftID`, `city`, `country`, `flightDateTime`, `destinationPrice`, `departureGate`) VALUES
('BKK', 'AK5217', 'Bangkok', 'Thailand', '2021-06-27 11:30:00', 454.00, 'F06'),
('CGK', 'MH9054', 'Jakarta', 'Indonesia', '2021-05-14 08:15:00', 397.00, 'E11'),
('HDY', 'D74399', 'Hat Yai', 'Thailand', '2021-03-12 20:00:00', 333.00, 'D14'),
('JHB', 'OD0648', 'Johor Bahru', 'Malaysia', '2021-01-29 18:40:00', 17.00, 'H17'),
('KBR', 'OD3247', 'Kota Bharu', 'Malaysia', '2021-01-31 15:15:00', 72.00, 'P05'),
('KCH', 'MH1204', 'Kuching', 'Malaysia', '2021-02-01 06:45:00', 209.00, 'S10'),
('LHR', 'MH1326', 'London', 'United Kingdom', '2021-05-13 23:10:00', 2866.00, 'C14'),
('PNH', 'FD7878', 'Phnom Penh', 'Cambodia', '2021-04-05 09:25:00', 650.00, 'P05'),
('REP', 'MH4271', 'Siem Reap', 'Cambodia', '2021-04-19 12:15:00', 460.00, 'Q04'),
('TGG', 'OD7264', 'Kuala Terengganu', 'Malaysia', '2021-02-10 10:20:00', 62.00, 'T06');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membershipID` varchar(7) NOT NULL,
  `passengerID` int(4) NOT NULL,
  `passengerFirstName` varchar(20) NOT NULL,
  `passengerLastName` varchar(20) NOT NULL,
  `membershipType` varchar(10) NOT NULL,
  `totalFlightHours` int(4) NOT NULL,
  `membershipPoints` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membershipID`, `passengerID`, `passengerFirstName`, `passengerLastName`, `membershipType`, `totalFlightHours`, `membershipPoints`) VALUES
('100', 143, 'Farooq', 'Mukhtar', 'Associate', 12, 170),
('101', 379, 'Zaman', 'Safiyyah', 'Associate', 40, 400),
('102', 381, 'Mohammad', 'Taufiq', 'Associate', 13, 130),
('103', 435, 'Hamid', 'Ibrahim', 'Business', 30, 300),
('104', 567, 'Wafiya', 'Isa', 'Business', 28, 280),
('105', 602, 'Razali ', 'Amin', 'Individual', 20, 200),
('106', 629, 'Sana', 'Abbas', 'Individual', 62, 620),
('107', 719, 'Sarah ', 'Hamid', 'Individual', 51, 510),
('108', 753, 'Abdullah ', 'Zahir', 'Org', 50, 500),
('109', 852, 'Karim', 'Fatihah', 'Org', 38, 380);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passengerID` int(7) NOT NULL,
  `passengerLastName` varchar(20) NOT NULL,
  `passengerFirstName` varchar(20) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `passengerEmail` varchar(30) NOT NULL,
  `membershipID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passengerID`, `passengerLastName`, `passengerFirstName`, `phoneNumber`, `passengerEmail`, `membershipID`) VALUES
(143, 'Mukhtar', 'Farooq', 19680831, 'MukhtarFarooq@email.com', 'A100'),
(379, 'Safiyyah', 'Zaman', 19880728, 'SafiyyahZaman@email.com', 'I101'),
(381, 'Taufiq', 'Mohammad', 19971119, 'TaufiqMohammad@email.com', 'A102'),
(435, 'Ibrahim', 'Hamid', 19990529, 'IbrahimHamid@email.com', 'I100'),
(567, 'Isa', 'Wafiya', 19730130, 'IsaWafiya@email.com', 'B100'),
(602, 'Amin', 'Razali', 19950228, 'AminRazali@email.com', 'I102'),
(629, 'Abbas', 'Sana', 20010908, 'AbbasSana@email.com', 'O101'),
(719, 'Hamid', 'Sarah', 20040527, 'HamidSarah@email.com', 'B102'),
(753, 'Zahir', 'Abdullah', 19841225, 'ZahirAbdullah@email.com', 'O100'),
(852, 'Fatihah', 'Karim', 19820302, 'FatihahKarim@email.com', 'A101');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(7) NOT NULL,
  `passengerID` int(7) NOT NULL,
  `aircraftID` varchar(6) NOT NULL,
  `compartmentClass` varchar(20) NOT NULL,
  `seatNumber` varchar(3) NOT NULL,
  `dateOfBooking` date NOT NULL,
  `destinationID` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `passengerID`, `aircraftID`, `compartmentClass`, `seatNumber`, `dateOfBooking`, `destinationID`) VALUES
(1001, 143, 'AK5217', 'Economy', 'C18', '2020-12-10', 'KCH'),
(2001, 379, 'OD3247', 'First', 'B02', '2020-05-26', 'CGK'),
(2005, 435, 'D74399', 'Economy', 'D14', '2020-01-14', 'KBR'),
(2901, 629, 'MH1204', 'Economy', 'F15', '2020-11-15', 'TGG'),
(3209, 381, 'MH9054', 'Economy', 'A30', '2020-10-04', 'PNH'),
(3901, 602, 'MH4271', 'First', 'C03', '2020-05-27', 'REP'),
(3960, 852, 'OD7264', 'Economy', 'E40', '2020-01-01', 'JHB'),
(4078, 719, 'MH1326', 'Business', 'A10', '2020-02-28', 'HDY'),
(6033, 753, 'FD7878', 'Economy', 'B30', '2020-03-29', 'LHR'),
(6900, 567, 'OD0648', 'Business', 'A08', '2020-07-30', 'BKK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`aircraftID`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destinationID`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membershipID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passengerID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passengerID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=957;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6983;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
