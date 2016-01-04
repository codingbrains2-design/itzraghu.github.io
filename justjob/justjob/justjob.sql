-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2015 at 01:56 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `justjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(100) NOT NULL,
  `keyskills` varchar(200) DEFAULT NULL,
  `required_experience` varchar(50) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact_details` varchar(200) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `company` varchar(100) NOT NULL,
  `post_by` varchar(100) DEFAULT NULL,
  `applied_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `keyskills`, `required_experience`, `salary`, `role`, `location`, `contact_details`, `description`, `company`, `post_by`, `applied_by`) VALUES
(1, 'php developer', 'php,jquery,html,css', '1 years', '10000', 'web deleper', 'lucknow', '9532064154', 'full time', 'zorrofox', NULL, NULL),
(5, 'web developer', 'javascript', '6 months', '5000', 'web developer', 'delhi', 'kuch bhi', 'part time', 'abhi khuli nahi hai', 'raghu', 'raghvendra'),
(6, 'web development', 'php', '6 months', '6000', 'web developer', 'kanpur', '7894561230', 'hello', 'HCL', 'raghu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE IF NOT EXISTS `recruiter` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `recruiting_area` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `name`, `username`, `password`, `email`, `contact`, `company`, `experience`, `recruiting_area`, `designation`, `location`) VALUES
(1, 'Raghvendra Pratap Singh', 'raghu', 'pass', 'raghugkp10@gmail.com', 9532064154, 'zorrofox', '1 years', 'php', 'web developer', 'lucknow'),
(4, 'surendra', 'suri', 'pass', 'suri@khudkamail', 5241367896, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saved_jobs`
--

CREATE TABLE IF NOT EXISTS `saved_jobs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `keyskills` varchar(100) NOT NULL,
  `job_description` varchar(500) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `salary` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact_details` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `saved_jobs`
--

INSERT INTO `saved_jobs` (`id`, `username`, `job_title`, `keyskills`, `job_description`, `experience`, `role`, `salary`, `company`, `location`, `contact_details`) VALUES
(1, 'raghu', 'php developer', 'php,jquery', 'av kuch nhi', '6 month', 'web developer', '10000', 'hogi koi', 'lucknow', '8574555158');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `resume` varchar(100) NOT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `keyskills` varchar(200) DEFAULT NULL,
  `resume_headlines` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `mobile`, `address`, `resume`, `experience`, `keyskills`, `resume_headlines`) VALUES
(1, 'raghvendra', 'raghu', '123', 'raghu@gamil.com', 7894561232, 'indira nagar', '../uploads/raghuRaghvendra _(IT).PDF', '6 months', 'java, php, jquery', 'web developer'),
(3, 'surendra', 'suri', '123', 'lotusgt1suri@gmail.com', 8565831816, NULL, '../uploads/surionlinejobportalupdated-121204031037-phpapp01.pdf', NULL, NULL, NULL),
(4, 'mohit tripathi', 'mohit123', '123456', 'mohit@gmail.com', 4125369874, NULL, '../uploads/mohit123Practical_Exercises.pdf', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
