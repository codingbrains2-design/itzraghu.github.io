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
-- Database: `zorricfd_enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('raghu', 'pass'),
('suri', 'pass'),
('mohit', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `lappy`
--

CREATE TABLE IF NOT EXISTS `lappy` (
  `reference` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` bigint(50) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lappy`
--

INSERT INTO `lappy` (`reference`, `name`, `email`, `address`, `contact`, `mode`, `status`) VALUES
('pen', 'pen', 'pen@gamil.com', 'company', 1245789632, 'Face to Face', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `mohit`
--

CREATE TABLE IF NOT EXISTS `mohit` (
  `reference` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` bigint(50) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mohit`
--

INSERT INTO `mohit` (`reference`, `name`, `email`, `address`, `contact`, `mode`, `status`) VALUES
('sdgz,xv', 'mohit', 'mohitkt1993@gmail.com', 'sdVzxvcdbd', 385983859375, 'Face to Face', 'just dial');

-- --------------------------------------------------------

--
-- Table structure for table `raghu`
--

CREATE TABLE IF NOT EXISTS `raghu` (
  `reference` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raghu`
--

INSERT INTO `raghu` (`reference`, `name`, `email`, `address`, `contact`, `mode`, `status`) VALUES
('bgrbr', 'brg', 'brgb', 'bdf', 0, '', 'jyuk'),
('asfd', 'afd', 'sdf', 'asfd', 1234567890, 'Face to Face', 'dfsasdf'),
('justdail', 'raghvendra', 'raghugkp10@gmail.com', 'ferg', 36597123, 'Face to Face', 'frewgfregrevbjbvjbdsjvhgbdjgug bdufgwruvgbj bdjcgewucg cvguygfcewuyfvwhjd cdfwefwef'),
('grt', 'thrs', 'gt', 'grt', 0, 'Face to Face', 'vfv'),
('hrth', 'grf', 'grtg', 'hwrstg', 0, 'Face to Face', 'hrth'),
('news paper', 'akash', 'akash@gmail.com', 'lucknow', 1234567890, 'Face to Face', 'not confirmed'),
('', '', '', '', 0, '---Please Select---', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `account_type`, `company_name`, `name`, `username`, `password`, `email`, `address`, `mobile`, `telephone`) VALUES
(1, '---Please Select---', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`username`, `password`) VALUES
('admin', '8808021421');

-- --------------------------------------------------------

--
-- Table structure for table `suri`
--

CREATE TABLE IF NOT EXISTS `suri` (
  `reference` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zorrofox`
--

CREATE TABLE IF NOT EXISTS `zorrofox` (
  `reference` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` bigint(50) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
