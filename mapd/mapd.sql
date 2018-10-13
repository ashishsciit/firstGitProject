-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2018 at 07:13 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapd`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `postal` varchar(50) NOT NULL,
  `admin_user` int(11) NOT NULL,
  `doj` varchar(12) NOT NULL,
  `acc_no` varchar(16) NOT NULL,
  `department` varchar(30) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `leaves_alloted` int(2) NOT NULL,
  `ctc` int(11) NOT NULL,
  `basic` double(12,2) DEFAULT NULL,
  `hr` float NOT NULL,
  `pf` float NOT NULL,
  `medical` float NOT NULL,
  `travel` float NOT NULL,
  PRIMARY KEY (`empid`),
  KEY `FK_products_1` (`admin_user`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `full_name`, `dob`, `email`, `mobile_no`, `gender`, `address`, `city`, `state`, `postal`, `admin_user`, `doj`, `acc_no`, `department`, `designation`, `leaves_alloted`, `ctc`, `basic`, `hr`, `pf`, `medical`, `travel`) VALUES
(43, 'Dheeraj Punjabi', '04/19/2018', 'dheeraj@mapd.com', '54564154', 'male', 'Block no. 18, Motilal Neharu Nagar', 'Pune', 'Maharashtra', '400022', 7, '12/02/2015', '284968464', 'Bio', 'Teacher', 2, 4651256, 2325628.00, 1162810, 279075, 441869, 441869),
(44, 'Ashish Kumar', '04/20/1996', 'ashishsciit@gmail.com', '8898291567', 'Male', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'Mumbai', 'Maharashtra', '400037', 7, '12/04/2015', '21536457595', 'Computer', 'HOD', 1, 520000, 260000.00, 130000, 31200, 49400, 49400),
(45, 'dhiraj punjabi', '04/19/2018', 'dheeraj@mapd.com', '8941984189', 'male', 'Block no. 18, Motilal Neharu Nagar', 'Pune', 'Maharashtra', '400022', 7, '12/09/2012', '5456451441', 'Office staff', 'pa', 2, 275000, 137500.00, 68750, 16500, 26125, 26125),
(46, 'Amit Kumar', '07/19/1990', 'amit@mapd.com', '8134675642', 'male', 'Block no. 18, Motilal Neharu Nagar', 'Pune', 'Maharashtra', '400022', 7, '21/10/2014', '64761554766', 'Office staff', 'clerk', 2, 220000, 110000.00, 55000, 13200, 20900, 20900),
(47, 'pranjal chaubal', '07/19/1990', 'pranja@mapd.com', '7865694552', 'Female', 'Block A/25, Suyash apparatment, worli', 'Mumbai', 'Maharashtra', '400028', 7, '12/02/2015', '21536457595', 'Bio', 'Teacher', 2, 400000, 200000.00, 100000, 24000, 38000, 38000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`) VALUES
(2, 'ashishsciit', '$2y$10$auPONyWPhWVgH9KFjAefwONkhjpG3eXyGtspgVz23U6rxOqD6Wweq', '2018-03-29 16:07:58', ''),
(3, 'admin', '$2y$10$7FHEESDkx/eu0hC.OALLMe/JOnhalxOCa1DvQebCdhj44l9ub33ve', '2018-03-29 16:13:06', ''),
(4, 'qwerty', '$2y$10$QkATP5Xgy.1sg.BHGHGKYOzvKsJI3KtIruE.HRqcht.R88QW/FimO', '2018-03-29 23:38:01', ''),
(5, 'asdfgh', '$2y$10$5UnV79k5Am3tG2EFSNlnhuNj8nvz2R0Co.GgRjXvbyva.RBbspRki', '2018-03-31 11:24:31', ''),
(6, 'zxcvbn', '$2y$10$a/JfgQ2mUyleIvY0xk5jg.EkL4ps2CKUtQeh2VB.y3xyYyMl9Cc2S', '2018-04-01 13:48:51', ''),
(7, 'ashish', '$2y$10$erwqmQNanRrMObiqQ7Igm.ODL6qpq5cqKnZTZ4b1h1QCcKYWeaSA2', '2018-04-02 21:50:01', ''),
(8, 'ajitkr', '$2y$10$eVdaM/5.jV0EqADOZXrOAOHquj.1IgxZUhW0uttStFkiZu1pMo/9i', '2018-04-03 13:54:23', ''),
(9, 'mamta', '$2y$10$Ijmc6UksSraWlJOQjfGbC.01hBr6xfPAVJd8OJll710IBksRyAlIW', '2018-04-04 15:24:19', ''),
(10, 'dheeraj', '$2y$10$MJPX9N3zCLAFOarAPRUBp.7i7vd3AlKkC/iOtklMNbWW7GbVjXtzK', '2018-04-04 15:46:07', ''),
(11, 'sonu123', '$2y$10$./H1rgNhI6KeAgljUXhApuNL6J4D7cUImIYvmtss9vL2nVu69SRGS', '2018-04-04 16:04:36', ''),
(12, 'sumanta', '$2y$10$leqlmMlhzsQ6rfj94J7Aq.eYLuhjjMmzMVWfIsnBHGwBsEI3P2hgy', '2018-04-07 15:26:56', ''),
(13, 'dhiraj', '$2y$10$YLoZufIqbgRPCYPGfxyFR..hYiVWthgZlIo3BZUDqgKRn3/F0bEqi', '2018-04-10 13:19:17', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `FK_products_1` FOREIGN KEY (`admin_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
