-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 10:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_level` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_level`, `admin_email`, `admin_pass`) VALUES
(30, 'admin', '', 'admin@yahoo.com', 'admin'),
(32, 'adminnew', '', 'new@yahoo.com', 'admin'),
(34, 'test', '', 'test@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `serial_num` varchar(20) NOT NULL,
  `user_ic` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`serial_num`, `user_ic`) VALUES
('789', '09'),
('0005140003', '0987654321'),
('98767`', '12456'),
('565656565', '6786'),
('87676', '756565'),
('67', '89'),
('09090', '99');

-- --------------------------------------------------------

--
-- Table structure for table `timestamp`
--

CREATE TABLE `timestamp` (
  `time_id` int(11) NOT NULL,
  `serial_num` varchar(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timestamp`
--

INSERT INTO `timestamp` (`time_id`, `serial_num`, `time`, `status`) VALUES
(28, '	 87676', '2017-12-06 02:34:18', 'out'),
(29, '	 87676', '2017-12-06 02:35:03', 'in'),
(30, '1', '2017-12-11 07:39:41', ''),
(31, '6', '2017-12-11 07:39:44', ''),
(32, '65', '2017-12-11 07:39:44', ''),
(33, '9', '2017-12-11 07:40:58', 'out'),
(34, '33', '2017-12-11 07:44:31', 'out'),
(35, '3', '2017-12-11 07:44:33', 'out');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(150) NOT NULL,
  `user_ic` varchar(15) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `user_ic`, `user_email`, `user_address`, `user_phone`, `user_pass`) VALUES
('unik', '09', 'unik@yahoo.com', 'unik', '78', 'unik'),
('kahagaa', '0987654321', 'kahaga@yuip.com', 'TITIWANGSA', '01123456789', 'kahaga'),
('test', '6786', 'yuiu@wew.pik', 'yuiy', '090', 'tyry'),
('testuser', '891', 'test@taha.kik', 'address', '324324', 'testt'),
('nurul', '919191', 'nurul@gmail.com', 'jalan', '11111', 'nurul'),
('Nurul Iktifariah', '970726', 'iktifariah@gmail.com', 'impian ehsan', '01123281465', 'iktifariah');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `plat_num` varchar(10) NOT NULL,
  `user_ic` varchar(15) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`plat_num`, `user_ic`, `vehicle_type`, `vehicle_model`) VALUES
('AA456', '12456', 'Car', 'yamaha'),
('dfg7', '756565', 'Motorcycle', 'kawasaki'),
('F546', '970726', 'Car', 'Volkswagennner'),
('gdg', '970726', 'Motorcycle', 'fgdfgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`serial_num`),
  ADD KEY `user_ic` (`user_ic`);

--
-- Indexes for table `timestamp`
--
ALTER TABLE `timestamp`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `user_ic` (`serial_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ic`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`plat_num`),
  ADD KEY `user_ic` (`user_ic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `timestamp`
--
ALTER TABLE `timestamp`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
