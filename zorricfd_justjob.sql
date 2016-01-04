-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2016 at 01:07 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zorricfd_justjob`
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
(6, 'web development', 'php', '6 months', '6000', 'web developer', 'kanpur', '7894561230', 'hello', 'HCL', 'raghu', 'Raghvendra pratap singh');

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
  `img_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `name`, `username`, `password`, `email`, `contact`, `company`, `experience`, `recruiting_area`, `designation`, `location`, `img_path`) VALUES
(1, 'Raghvendra Pratap Singh', 'raghu', '123', 'raghugkp10@gmail.com', 9532064154, 'zorrofox', '1 years', 'php', 'web developer', 'lucknow', '../recruiter-img/1451884874pic.jpg'),
(4, 'surendra', 'suri', 'pass', 'suri@khudkamail', 5241367896, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Raghvendra pratap singh', 'raghu', '123', 'raghvendrasngh0@gmail.com', 9532064154, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `img_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `mobile`, `address`, `resume`, `experience`, `keyskills`, `resume_headlines`, `img_path`) VALUES
(1, 'Raghvendra pratap singh', 'raghu', '123', 'raghu@gmail.com', 9532064154, 'lekhraj lucknow', '../uploads/raghuRaghvendra _resume.pdf', '1 year', 'php,wordpress,html,css', 'PHP Developer with 1 year Experience', '../jobseeker-img/1451729981pic.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
