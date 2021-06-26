-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 06:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aid` int(11) NOT NULL,
  `aname` varchar(45) NOT NULL,
  `aaddress` varchar(45) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `f_hid` int(11) NOT NULL,
  `apass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `aname`, `aaddress`, `phno`, `designation`, `f_hid`, `apass`) VALUES
(1001, 'Admin', 'Amrutdham', '9921988941', 'Phd', 1, 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `cin_date` date DEFAULT NULL,
  `cout_date` date DEFAULT NULL,
  `idtype` varchar(20) NOT NULL,
  `idno` varchar(15) NOT NULL,
  `adult_no` int(15) NOT NULL,
  `child_no` int(15) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `f_rno` int(11) DEFAULT NULL,
  `f_uno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_history`
--

CREATE TABLE `booking_history` (
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `cindate` date NOT NULL,
  `coutdate` date NOT NULL,
  `idtype` varchar(45) NOT NULL,
  `idno` varchar(15) NOT NULL,
  `adultno` int(11) NOT NULL,
  `childno` int(11) NOT NULL,
  `totalamount` varchar(7) NOT NULL,
  `rno` int(11) NOT NULL,
  `uno` int(11) NOT NULL,
  `bstate` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_history`
--

INSERT INTO `booking_history` (`bid`, `bdate`, `cindate`, `coutdate`, `idtype`, `idno`, `adultno`, `childno`, `totalamount`, `rno`, `uno`, `bstate`) VALUES
(44, '2021-01-17', '2021-01-18', '2021-01-23', 'Adhar Card', '123412341234', 2, 2, '9000', 110, 6, 'Canceled'),
(45, '2021-01-17', '2021-01-20', '2021-01-30', 'Adhar Card', '123412341234', 2, 2, '9000', 110, 6, 'Checkouted'),
(46, '2021-01-17', '2021-01-20', '2021-01-30', 'Adhar Card', '123412341234', 3, 3, '14000', 109, 8, 'Canceled'),
(47, '2021-01-17', '2021-01-18', '2021-01-29', 'Adhar Card', '1234567890', 2, 2, '14000', 108, 8, 'Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hid` int(11) NOT NULL,
  `hname` varchar(45) NOT NULL,
  `hcity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `hname`, `hcity`) VALUES
(1, 'Hotel green park', 'nashik');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `rno` int(11) NOT NULL,
  `rtype` varchar(30) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `amount` int(20) NOT NULL,
  `rstate` varchar(2) NOT NULL
) ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rno`, `rtype`, `beds`, `amount`, `rstate`) VALUES
(101, 'double', 2, 2000, 'A'),
(102, 'double', 2, 2000, 'A'),
(103, 'double', 2, 2000, 'A'),
(104, 'double', 2, 2000, 'A'),
(105, 'double', 2, 2000, 'A'),
(106, 'double', 2, 2000, 'A'),
(107, 'double', 2, 2000, 'A'),
(108, 'double', 2, 2000, 'A'),
(109, 'double', 2, 2000, 'A'),
(110, 'double', 2, 2000, 'A'),
(111, 'king', 1, 3000, 'A'),
(112, 'king', 1, 3000, 'A'),
(113, 'king', 1, 3000, 'A'),
(114, 'king', 1, 3000, 'A'),
(115, 'king', 1, 3000, 'A'),
(116, 'king', 1, 3000, 'A'),
(117, 'king', 1, 3000, 'A'),
(118, 'king', 1, 3000, 'A'),
(119, 'king', 1, 3000, 'A'),
(120, 'king', 1, 3000, 'A'),
(121, 'family', 5, 15000, 'A'),
(122, 'family', 5, 15000, 'A'),
(123, 'family', 5, 15000, 'A'),
(124, 'family', 5, 15000, 'A'),
(125, 'family', 5, 15000, 'A'),
(126, 'family', 5, 15000, 'A'),
(127, 'family', 5, 15000, 'A'),
(128, 'family', 5, 15000, 'A'),
(129, 'family', 5, 15000, 'A'),
(130, 'family', 5, 15000, 'A'),
(131, 'standard', 2, 4000, 'A'),
(132, 'standard', 2, 4000, 'A'),
(133, 'standard', 2, 4000, 'A'),
(134, 'standard', 2, 4000, 'A'),
(135, 'standard', 2, 4000, 'A'),
(136, 'standard', 2, 4000, 'A'),
(137, 'standard', 2, 4000, 'A'),
(138, 'standard', 2, 4000, 'A'),
(139, 'standard', 2, 4000, 'A'),
(140, 'standard', 2, 4000, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uno` int(11) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `upass` varchar(45) NOT NULL,
  `fhid` int(11) NOT NULL,
  `f_aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uno`, `uname`, `phno`, `email`, `upass`, `fhid`, `f_aid`) VALUES
(6, 'Shashank Afre', '9921988941', 'shashank@gmail.com', 'shashank@123', 1, 1001),
(7, 'Navin Gautam', '9876543223', 'navin@gmail.com', 'navin@123', 1, 1001),
(8, 'Chetan Shirsath', '7788452343', 'chetan@gmail.com', 'chetan@123', 1, 1001),
(10, 'Shashank Afre', '9923499642', 'shashankafre@gmail.com', 'shashank@123', 1, 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `f_hid` (`f_hid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `f_rno` (`f_rno`),
  ADD KEY `f_uno` (`f_uno`);

--
-- Indexes for table `booking_history`
--
ALTER TABLE `booking_history`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `uno` (`uno`),
  ADD KEY `rno` (`rno`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uno`),
  ADD KEY `fhid` (`fhid`),
  ADD KEY `f_aid` (`f_aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `booking_history`
--
ALTER TABLE `booking_history`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `f_hid` FOREIGN KEY (`f_hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `f_rno` FOREIGN KEY (`f_rno`) REFERENCES `rooms` (`rno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_uno` FOREIGN KEY (`f_uno`) REFERENCES `user` (`uno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_history`
--
ALTER TABLE `booking_history`
  ADD CONSTRAINT `rno` FOREIGN KEY (`rno`) REFERENCES `rooms` (`rno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uno` FOREIGN KEY (`uno`) REFERENCES `user` (`uno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `f_aid` FOREIGN KEY (`f_aid`) REFERENCES `admins` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fhid` FOREIGN KEY (`fhid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
