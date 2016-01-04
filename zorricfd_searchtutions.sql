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
-- Database: `zorricfd_searchtutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `login_time`) VALUES
('admin', 'pass', '2015-12-29 08:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_applied`
--

CREATE TABLE IF NOT EXISTS `jobs_applied` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `applicant_name` varchar(100) NOT NULL,
  `applicant_email` varchar(100) NOT NULL,
  `applicant_contact` bigint(100) NOT NULL,
  `applied_to` varchar(100) NOT NULL,
  `job_contact` bigint(100) DEFAULT NULL,
  `job_email` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobs_applied`
--

INSERT INTO `jobs_applied` (`id`, `applicant_name`, `applicant_email`, `applicant_contact`, `applied_to`, `job_contact`, `job_email`) VALUES
(6, 'surendra singh', 'suri@zorrofoxtech.com', 7412589632, '1', 7412589632, 'varun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `login_time` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `password`, `login_time`) VALUES
('manager', '123', '2015-12-29 13:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `posted_leads`
--

CREATE TABLE IF NOT EXISTS `posted_leads` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(100) DEFAULT NULL,
  `area` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `requirement` varchar(500) NOT NULL,
  `lead_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posted_leads`
--

INSERT INTO `posted_leads` (`id`, `email`, `contact`, `area`, `parent`, `requirement`, `lead_status`) VALUES
(1, 'varun@gmail.com', 7412589632, 'Ashiana', 'Varun', 'need a PHP Trainer. contact ASAP', 'filled');

-- --------------------------------------------------------

--
-- Table structure for table `request_tutor`
--

CREATE TABLE IF NOT EXISTS `request_tutor` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `requestor` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` bigint(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `board` varchar(100) NOT NULL,
  `standard` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `brief_requirement` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `requested_to` varchar(100) DEFAULT NULL,
  `request_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `request_tutor`
--

INSERT INTO `request_tutor` (`id`, `requestor`, `name`, `mobile`, `email`, `gender`, `location`, `board`, `standard`, `subject`, `brief_requirement`, `address`, `requested_to`, `request_status`) VALUES
(1, 'Parent', 'varun', 7412589632, 'varun@gmail.com', 'Male', 'Ashiana', 'CBSE', '12th', 'Computer', 'need a PHP Trainer.\ncontact  ASAP', '16/106 surya palace, munshipuliya', NULL, 'posted'),
(2, 'Parent', 'zAS', 0, 'XZASX', 'Preferred Gender', '', 'Select Board', 'Select Standard', 'Select Subject', 'Brief your requirements', 'Your Address', 'test8@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact_number` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `about` varchar(500) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `board` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `image_path` varchar(500) NOT NULL,
  `approve_status` varchar(100) DEFAULT NULL,
  `tutor_category` varchar(100) DEFAULT NULL,
  `free_leads` int(100) DEFAULT NULL,
  `remaining_leads` int(100) DEFAULT NULL,
  `lecture_path` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `login_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `contact_number`, `email`, `password`, `gender`, `about`, `qualification`, `location`, `board`, `class`, `subject`, `image_path`, `approve_status`, `tutor_category`, `free_leads`, `remaining_leads`, `lecture_path`, `address`, `login_time`) VALUES
(1, 'Raghvendra Pratap Singh', 8858222928, 'raghugkp10@gmail.com', '123', 'Male', 'Trainer (PHP, Core JAVA)', 'B.TECH (IT)', ' Sadar Ashiana Ambarganj Aminabad Amir Nagar', ' CBSE ICSE UP', ' Nursery Kg 11th 12th', NULL, '../tutor_images/14443871222.jpg', 'approved', 'Diamond', 10, 10, 'https://www.youtube.com/embed/9TF4I65uOlw', NULL, '2015-11-30 15:59:46'),
(2, 'mohit tripathi', 9632145874, 'mohit@gmail.com', '123', 'Male', 'Trainer', 'BE', ' Sadar Ashiana Ashok Marg Awas Vikas Colony Bhitau', ' CBSE ICSE UP', ' Nursery Kg 12th', NULL, '../tutor_images/144480192514443872873.jpg', 'approved', 'Gold', 8, 8, NULL, NULL, '0000-00-00 00:00:00'),
(3, 'surendra singh', 7412589632, 'suri@zorrofoxtech.com', '123', 'Male', 'Trainer', 'MCA', '', '', '', NULL, '../tutor_images/144480199014443873764.jpg', 'approved', 'Silver', 3, 2, 'https://www.youtube.com/embed/9TF4I65uOlw', '', '2015-10-17 11:18:30'),
(6, 'test3', 789654123, 'test3@gmail.com', '123', 'Female', 'Trainer', 'MCA', ' Sadar Ashiana Alam Nagar Alambagh Alamnagar Road', ' CBSE ICSE', ' Nursery Kg 10th 11th 12th', NULL, '../tutor_images/1444802479cat1.jpg', 'approved', 'Super Premium', 5, 5, NULL, NULL, '0000-00-00 00:00:00'),
(9, 'test7', 8521456358, 'test7@gmail.com', NULL, 'Female', 'hello frnds', '10th', ' Sadar Ashiana', ' CBSE ICSE UP', ' Nursery Kg 10th 11th 12th', NULL, '../tutor_images/1444802674dog3.jpg', 'approved', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(10, 'test8', 8974521456, 'test8@gmail.com', NULL, 'Male', 'Hello..i am a tutuor', 'BCA', ' Sadar Ashiana Aminabad Amir Nagar Faridi Nagar Fa', ' CBSE ICSE', ' Nursery Kg', NULL, '../tutor_images/1444802787dog5.jpg', 'approved', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(12, 'Aadarsh', 9987456321, 'adarsh1@gmail.com', NULL, 'Male', 'Hi ..I am a science Teacher', 'B.sc', ' Sadar Ashiana', ' CBSE ICSE', ' 10th 11th 12th', NULL, '../tutor_images/1451306194images.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(13, 'abhinav', 7412589632, 'abhinav@gmail.com', NULL, 'Male', 'Hi.', 'M.sc', ' Sadar Ashiana', ' CBSE ICSE UP', ' 10th 11th 12th', NULL, '../tutor_images/1451364962download.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(14, 'abhi', 7412365892, 'abhi@gmail.com', NULL, 'Male', 'Hi i am a computer teacher', 'Bsc IT', ' Sadar Ashiana Ambarganj Aminabad Amir Nagar', ' CBSE ICSE', ' Kg 10th 11th 12th', NULL, '../tutor_images/1451376269images.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(18, 'ratneshwar', 9632145871, 'rattu@gmail.com', NULL, 'Male', 'Hi', 'Btech', ' Sadar Ashiana', ' CBSE ICSE', ' 10th 11th 12th', NULL, '../tutor_images/1451381192tutor.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(20, 'Mike', 7894563210, 'mike@gmail.com', '123', 'Male', 'Hi', 'M.Sc', ' Sadar Ashiana', ' CBSE ICSE', ' Kg 6th 7th 8th', NULL, '../tutor_images/1451388540tutor.jpg', 'approved', 'Silver', 3, 3, NULL, NULL, '2015-12-29 08:50:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
