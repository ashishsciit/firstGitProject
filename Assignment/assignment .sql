-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 10:43 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `facuties_tbl`
--

CREATE TABLE `facuties_tbl` (
  `faculties_id` int(10) UNSIGNED NOT NULL,
  `faculties_name` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facuties_tbl`
--

INSERT INTO `facuties_tbl` (`faculties_id`, `faculties_name`, `note`) VALUES
(2, 'Science and Technology', 'Part of science'),
(3, 'Law', 'part of Commersce');

-- --------------------------------------------------------

--
-- Table structure for table `stu_score_tbl`
--

CREATE TABLE `stu_score_tbl` (
  `ss_id` int(10) UNSIGNED NOT NULL,
  `stu_id` int(10) NOT NULL,
  `faculties_id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `miderm` float NOT NULL,
  `final` float NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_score_tbl`
--

INSERT INTO `stu_score_tbl` (`ss_id`, `stu_id`, `faculties_id`, `sub_id`, `miderm`, `final`, `note`) VALUES
(1, 1, 2, 1, 39, 39, 'good'),
(2, 1, 2, 2, 40, 40, 'top score'),
(6, 1, 2, 3, 30, 34, 'good'),
(7, 1, 2, 4, 40, 39, 'top'),
(8, 1, 2, 5, 57, 40, 'good'),
(9, 1, 2, 6, 54, 39, 'good'),
(10, 2, 2, 1, 48, 40, 'good'),
(11, 2, 2, 2, 60, 40, 'good'),
(12, 2, 2, 3, 57, 40, 'good'),
(13, 2, 2, 4, 57, 40, 'good'),
(15, 2, 2, 5, 48, 40, 'good'),
(16, 2, 2, 6, 59, 39, 'good'),
(17, 3, 2, 1, 53, 34, 'good'),
(18, 3, 2, 2, 40, 40, 'good'),
(19, 3, 2, 3, 48, 40, 'good'),
(20, 3, 2, 4, 40, 34, 'good'),
(21, 3, 2, 5, 49, 34, 'good'),
(22, 3, 2, 6, 54, 34, 'good'),
(23, 4, 2, 1, 59, 40, 'good'),
(24, 4, 2, 2, 53, 40, 'good'),
(25, 4, 2, 3, 59, 40, 'good'),
(26, 4, 2, 4, 58, 40, 'good'),
(27, 4, 2, 5, 58, 40, 'good'),
(28, 4, 2, 3, 69, 51, 'Very Good'),
(29, 1, 2, 1, 45, 52, '96');

-- --------------------------------------------------------

--
-- Table structure for table `stu_tbl`
--

CREATE TABLE `stu_tbl` (
  `stu_id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `pob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_tbl`
--

INSERT INTO `stu_tbl` (`stu_id`, `f_name`, `l_name`, `gender`, `dob`, `pob`, `address`, `phone`, `email`, `note`) VALUES
(1, 'Ashish', 'Kumar', 'Male', '1996-01-15', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Student'),
(2, 'Sonu', 'Gupta', 'Male', '1996-01-14', 'Mumbai', 'Room no.274, Motilal Neharu Nagar, S.M road, Antop hill. Sion Koliwada, Mumbai -400037', '0123456789', 'ashishsciit@gmail.com', 'Student'),
(3, 'Pratik', 'Adwani', 'Male', '1997-06-05', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '0123456789', 'pratik@gmail.com', 'Student'),
(4, 'Navin', 'Chainani', 'Male', '1996-08-11', 'Mumbai', 'Room no.274, Motilal Neharu Nagar, S.M road, Antop hill. Sion Koliwada, Mumbai -400037', '0123456789', 'navin123@gmail.com', 'Student'),
(5, 'Ashish', 'Shyamlal', 'Male', '1988-06-10', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'sknckjascd'),
(7, 'Sumanta', 'pradhan', 'Male', '2002-03-15', 'Mumbai', ' Room no.274, Motilal Neharu Nagar, S.M road, Antop hill. Sion Koliwada, Mumbai -400037', '8286379688', 'sumantapradhan21@gmail.com', 'Student'),
(8, 'Satish', 'Kumar', 'Male', '2000-02-02', 'Mumbai', '             Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291565', 'satish123@gmail.com', 'Student'),
(10, 'Ashish', 'Shyamlal', 'Male', '2000-02-02', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Teacher'),
(11, 'Ashish', 'Shyamlal', 'Male', '2002-02-16', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Tecaher'),
(14, 'Ashish', 'Shyamlal', 'Female', '05/05/2001', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'designer'),
(15, 'Ashish', 'Shyamlal', 'Male', '31/02/2002', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Date Validator'),
(16, 'Ashish', 'Shyamlal', 'Male', '31/02/2002', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Date Validator'),
(17, 'Ashish', 'Kumar', 'Male', '15/01/1996', 'Mumbai', ' Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Student'),
(18, 'Ashish', 'Kumar', 'Male', '28/02/1996', 'Mumbai', ' Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', '8898291567', 'ashishsciit@gmail.com', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tbl`
--

CREATE TABLE `sub_tbl` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `faculties_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_tbl`
--

INSERT INTO `sub_tbl` (`sub_id`, `faculties_id`, `teacher_id`, `semester`, `sub_name`, `note`) VALUES
(1, 2, 1, '1', 'Web Technology', 'HTML and CSS'),
(2, 2, 2, '1', 'OOP and C++', 'Part of C Language'),
(3, 2, 3, '2', 'SOOAD', 'Sem 5'),
(4, 2, 4, '2', 'CN', 'Computer Network');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `pob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `salary` float NOT NULL,
  `married` char(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `f_name`, `l_name`, `gender`, `dob`, `pob`, `address`, `degree`, `salary`, `married`, `phone`, `email`, `note`) VALUES
(1, 'Ashish', 'Ashish', 'Male', '1996-01-05', '   Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'Master', 30000, 'No', '8898291567', 'ashishsciit@gmail.com', 'Teacher and Staff'),
(2, 'Sonu', 'Gupta', 'Male', '1996-03-08', 'Mumbai', 'Room no.274, Motilal Neharu Nagar, S.M road, Antop hill. Sion Koliwada, Mumbai -400037', 'Bachelor', 20000, 'Yes', '0123456789', 'sonu123@gmail.com', 'Teacher and Staff'),
(3, 'Pratik', 'Pratik', 'Male', '1996-07-03', ' Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'Bachelor', 400000, 'Yes', '0123456789', 'pratik123@gmail.com', 'Teacher'),
(4, 'Navin', 'Navin', 'Male', '1997-09-10', '   Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'P.HD', 50000, 'Yes', '012345678', 'navin@gmail.com', 'SOOAD'),
(5, 'Ashish', 'Shyamlal', 'Male', '31/02/2002', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'Master', 30000, 'Yes', '8898291567', 'ashishsciit@gmail.com', 'Tester'),
(6, 'Ashish', 'Shyamlal', 'Male', '28/02/2002', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'Master', 30000, 'Yes', '8898291567', 'ashishsciit@gmail.com', 'Tester'),
(7, 'Ashish', 'Kumar', 'Male', '15/01/1996', 'Mumbai', 'Room no.18, Motilal Neharu Nagar, S.M road, Antop hill, Sion Koliwada, Mumbai -400037', 'Master', 4000, 'Yes', '8898291567', 'ashishsciit@gmail.com', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `u_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` char(10) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`u_id`, `username`, `password`, `type`, `note`) VALUES
(1, 'admin', 'admin', 'creator', 'creator'),
(5, 'ashishsciit', 'E14266105', 'Creator', 'Designer, Developer'),
(6, 'navin123', 'navin123', 'Student', 'Group Member'),
(7, 'sonu123', 'sonu123', 'Student', 'Group Member'),
(9, 'chiranjiv', 'chranjiv123', 'student', 'tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facuties_tbl`
--
ALTER TABLE `facuties_tbl`
  ADD PRIMARY KEY (`faculties_id`);

--
-- Indexes for table `stu_score_tbl`
--
ALTER TABLE `stu_score_tbl`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `stu_tbl`
--
ALTER TABLE `stu_tbl`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `sub_tbl`
--
ALTER TABLE `sub_tbl`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facuties_tbl`
--
ALTER TABLE `facuties_tbl`
  MODIFY `faculties_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stu_score_tbl`
--
ALTER TABLE `stu_score_tbl`
  MODIFY `ss_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `stu_tbl`
--
ALTER TABLE `stu_tbl`
  MODIFY `stu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sub_tbl`
--
ALTER TABLE `sub_tbl`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `u_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
