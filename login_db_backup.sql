-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 50.62.209.150:3306
-- Generation Time: May 21, 2019 at 03:52 AM
-- Server version: 5.5.51-38.1-log
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@hypernymbiz.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL COMMENT 'User Unique Id',
  `email` varchar(25) NOT NULL COMMENT 'Email Address of users',
  `password` varchar(15) NOT NULL COMMENT 'Password of email',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `create_date` datetime NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `expiry_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `password`, `is_active`, `create_date`, `expiry_date`, `expiry_time`) VALUES
(2, 'pih-v@hypernymbiz.com', 'Hypernym@@qatar', 1, '2019-04-29 12:03:57', '2019-05-16', 3),
(4, 'rizwan@hypernymbiz.com', 'riz@hypernym9', 1, '2019-04-29 12:33:37', '2020-12-31', 30),
(10, 'su@hypernymbiz.com', 'Hypernym@321', 1, '2019-05-19 10:46:50', '2020-06-19', 15),
(13, 'test@gmail.com', 'test123', 1, '2019-05-20 09:29:03', '2020-02-29', 200);

-- --------------------------------------------------------

--
-- Table structure for table `login_service_table`
--

CREATE TABLE `login_service_table` (
  `login_fk` int(11) NOT NULL,
  `service_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_service_table`
--

INSERT INTO `login_service_table` (`login_fk`, `service_fk`) VALUES
(2, 1),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(10, 7),
(10, 8),
(10, 9),
(10, 10),
(10, 11),
(10, 13),
(10, 14),
(10, 15),
(10, 16),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(13, 6),
(13, 7),
(13, 8),
(13, 9),
(13, 10),
(13, 11),
(13, 13),
(13, 14),
(13, 15),
(13, 16),
(13, 18);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `user_id` int(11) NOT NULL,
  `IP` varchar(18) DEFAULT NULL,
  `service_name` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`user_id`, `IP`, `service_name`, `date_time`) VALUES
(2, '39.40.8.168', 'vessel', '2019-04-29 17:17:35'),
(2, '39.40.8.168', 'vessel', '2019-04-29 17:25:39'),
(2, '39.40.8.168', 'vessel', '2019-04-29 17:29:45'),
(2, '178.152.75.36', 'vessel', '2019-04-30 19:03:26'),
(2, '178.152.75.36', 'vessel', '2019-04-30 19:10:26'),
(2, '101.50.93.45', 'vessel', '2019-04-30 19:13:29'),
(2, '178.152.75.36', 'vessel', '2019-04-30 19:15:05'),
(2, '78.100.82.102', 'vessel', '2019-04-30 19:19:47'),
(2, '78.100.82.102', 'vessel', '2019-04-30 19:56:10'),
(2, '175.110.97.178', 'vessel', '2019-05-10 13:51:35'),
(2, '175.110.97.178', 'vessel', '2019-05-10 13:54:21'),
(2, '178.152.75.36', 'vessel', '2019-05-12 11:59:06'),
(2, '78.100.82.102', 'vessel', '2019-05-12 12:39:51'),
(2, '78.100.82.102', 'vessel', '2019-05-12 12:43:14'),
(2, '78.100.82.102', 'vessel', '2019-05-12 12:48:21'),
(4, '45.116.232.43', 'transport', '2019-05-16 11:30:09'),
(4, '45.116.232.43', 'transport', '2019-05-16 11:39:16'),
(4, '45.116.232.43', 'asset', '2019-05-16 14:03:25'),
(4, '45.116.232.43', 'vessel', '2019-05-16 14:31:12'),
(10, '45.115.86.187', 'animal', '2019-05-19 16:10:09'),
(10, '::1', 'transport', '2019-05-19 16:11:02'),
(10, '45.115.86.187', 'vessel', '2019-05-19 16:11:30'),
(10, '94.203.246.204', 'transport', '2019-05-20 04:08:19'),
(10, '175.110.97.178', 'transport', '2019-05-20 12:11:59'),
(13, '::1', 'animal', '2019-05-20 12:29:22'),
(13, '::1', 'fieldforce', '2019-05-20 12:30:00'),
(13, '::1', 'power', '2019-05-20 12:30:27'),
(13, '::1', 'power', '2019-05-20 12:31:30'),
(13, '::1', 'animal', '2019-05-20 12:32:41'),
(13, '175.110.97.178', 'iffco', '2019-05-20 12:46:53'),
(10, '39.40.16.34', 'iffco', '2019-05-20 12:57:44'),
(13, '::1', 'conference', '2019-05-20 10:33:19'),
(13, '::1', 'animal', '2019-05-20 14:38:23'),
(13, '39.40.16.34', 'iffco', '2019-05-20 16:00:33'),
(10, '58.65.164.43', 'vessel', '2019-05-20 16:55:07'),
(13, '175.110.97.178', 'iffco', '2019-05-20 17:56:05'),
(13, '::1', 'animal', '2019-05-20 19:52:25'),
(13, '::1', 'animal', '2019-05-20 23:13:36'),
(13, '::1', 'animal', '2019-05-20 23:13:38'),
(13, '::1', 'animal', '2019-05-20 23:13:39'),
(13, '::1', 'fleet', '2019-05-21 08:51:22'),
(13, '::1', 'fieldforce', '2019-05-21 08:52:47'),
(13, '::1', 'animal', '2019-05-21 09:08:35'),
(13, '::1', 'power', '2019-05-21 09:53:11'),
(13, '175.110.97.178', 'iffco', '2019-05-21 10:24:14'),
(13, '::1', 'fieldforce', '2019-05-21 12:16:06'),
(13, '::1', 'animal', '2019-05-21 12:29:59'),
(13, '175.110.97.178', 'iffco', '2019-05-21 13:09:12'),
(13, '39.40.16.34', 'iffco', '2019-05-21 13:11:40'),
(13, '::1', 'conference', '2019-05-21 10:13:22'),
(13, '39.40.16.34', 'iffco', '2019-05-21 14:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`) VALUES
(1, 'vessel'),
(2, 'transport'),
(3, 'waste'),
(4, 'iffco'),
(5, 'waste'),
(6, 'asset'),
(7, 'courier'),
(8, 'conference'),
(9, 'fleet'),
(10, 'supplychain'),
(11, 'cms'),
(13, 'isb-police-bd'),
(14, 'dubai-uniform'),
(15, 'power'),
(16, 'animal'),
(18, 'fieldforce');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_service_table`
--
ALTER TABLE `login_service_table`
  ADD KEY `Login_FK_Constraint` (`login_fk`),
  ADD KEY `Service_FK_Constraint` (`service_fk`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD KEY `login_logs` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User Unique Id', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_service_table`
--
ALTER TABLE `login_service_table`
  ADD CONSTRAINT `Login_FK_Constraint` FOREIGN KEY (`login_fk`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Service_FK_Constraint` FOREIGN KEY (`service_fk`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `login_logs` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
