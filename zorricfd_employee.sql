-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2016 at 01:06 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zorricfd_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `applied_for` varchar(100) NOT NULL,
  `expected_salary` bigint(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `willing_to_relocate` varchar(20) NOT NULL,
  `last_company` varchar(100) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `reference` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `first_name`, `last_name`, `email`, `applied_for`, `expected_salary`, `mobile`, `willing_to_relocate`, `last_company`, `experience`, `reference`) VALUES
(1, 'surendra', 'rana', 'lotusgt1@gmail.com', 'web developer', 8000, 7275758027, 'No', 'techReliant', '6 months', 'hi, this is surendra singh rana ........'),
(2, 'raghu', 'raghvendra', 'raghu@gmail.com', 'web developer', 8000, 7894561230, 'No', 'zorrofox', '6 months', 'hi, this is raghvendra pratap singh'),
(3, 'mohit', 'sir', 'mohit@gmail.com', 'technical trainer', 15000, 7894561230, 'No', 'zorrofox', '1 year', 'hi, i m technical trainer in zorrofox technologies pvt ltd'),
(4, 'Varun', 'agarwal', 'varun200192@gmail.com', 'CEO', 0, 8563902302, 'Yes', 'Rajkumar pawan kumar', '10 years', 'i want to be part of your organization'),
(5, 'Raghvendra', 'singh', 'raghvendrasngh0@gmail.com', 'web developer', 0, 9532064154, 'Yes', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `personal_id` varchar(50) NOT NULL,
  `date_from` varchar(50) NOT NULL,
  `date_to` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`s_no`, `personal_id`, `date_from`, `date_to`, `reason`) VALUES
(8, 'varun', '2015-08-12', '2015-08-24', 'Meri marji');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `personal_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `sign_in_time` varchar(100) NOT NULL,
  `sign_out_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `personal_id`, `date`, `sign_in_time`, `sign_out_time`) VALUES
(1, 'mohit123', '2015-08-11', '12:24:03', NULL),
(2, 'mohit123', '2015-08-11', '12:55:13', NULL),
(3, 'mohit123', '2015-08-11', '14:11:17', NULL),
(4, 'mohit123', '2015-08-11', '14:14:38', '14:15:00'),
(5, 'mohit123', '2015-08-11', '14:16:15', '14:16:17'),
(6, 'mohit123', '2015-08-11', '14:16:56', '14:18:41'),
(7, 'mohit123', '2015-08-11', '14:18:48', NULL),
(8, 'mohit123', '2015-08-11', '14:32:27', NULL),
(9, 'suri', '2015-08-11', '17:12:10', '17:12:22'),
(10, 'suri', '2015-08-11', '17:12:27', '17:12:34'),
(11, 'suri', '2015-08-11', '17:12:41', '17:12:43'),
(12, 'varun', '2015-08-11', '18:02:06', '18:09:38'),
(13, 'suri', '2015-08-11', '18:14:46', NULL),
(14, 'suri', '2015-08-11', '18:18:33', '18:18:55'),
(15, 'suri', '2015-08-11', '18:20:39', '18:21:49'),
(16, 'suri', '2015-08-11', '18:23:15', NULL),
(17, 'suri', '2015-08-11', '18:25:04', '18:25:16'),
(18, 'suri', '2015-08-11', '18:26:50', '18:27:07'),
(19, 'suri', '2015-08-13', '16:00:58', NULL),
(20, 'mohit123', '2015-08-18', '13:45:15', NULL),
(21, 'suri', '2015-08-19', '18:31:27', NULL),
(22, 'suri', '2015-09-04', '15:29:11', NULL),
(23, 'mohit123', '2016-01-02', '02:27:32', '02:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`start_date`, `end_date`) VALUES
('14:52:47', '14:52:47'),
('14:14:14', '14:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mobile` bigint(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `postal_code` bigint(50) DEFAULT NULL,
  `marital_status` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `date_of_joining` varchar(100) DEFAULT NULL,
  `type_of_employee` varchar(50) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `leaves` varchar(100) DEFAULT NULL,
  `total_leaves` varchar(100) DEFAULT NULL,
  `leave_status` varchar(500) DEFAULT NULL,
  `working_hour` varchar(100) DEFAULT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `personal_id`, `password`, `first_name`, `last_name`, `date_of_birth`, `age`, `gender`, `mobile`, `email`, `address`, `postal_code`, `marital_status`, `qualification`, `experience`, `date_of_joining`, `type_of_employee`, `designation`, `leaves`, `total_leaves`, `leave_status`, `working_hour`, `message`) VALUES
(3, 'mohit123', '12345', 'Mohit', 'Tripathi', '2015-08-10', 29, 'male', 7778889990, 'mohit@gmail.com', 'indira nagar', 123123, 'Unmarried', 'B-Tech', '1 year', '2015-08-24', 'Full Time', 'Trainer', '4', '6', 'no', '6 hours', 'Hello Mohit how are u buddy'),
(6, 'suri', 'pass', 'suri', 'rana', '2015-08-03', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'mca', NULL, '2015-08-14', NULL, 'web developer', NULL, NULL, NULL, '8 hours', 'hello suri ,\nhow are you!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
