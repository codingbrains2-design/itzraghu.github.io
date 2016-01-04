-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 07:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_12_06_093550_createVoterTable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `party_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vote_obtained` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `party_name`, `vote_obtained`) VALUES
(1, 'Bhartiya Janta Party', '3'),
(2, 'Samajwaadi Party', '1'),
(3, 'Aam Aadami Party', ''),
(4, 'Congress', '');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `voter_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vote_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `voted_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`remember_token`, `id`, `name`, `voter_id`, `email`, `password`, `age`, `gender`, `location`, `vote_status`, `voted_to`, `updated_at`) VALUES
('ZmeEoSVLhMG7yjiE2C5rfVxh2DpFas6HswgGwbfaDG45VddXoJg0SgMvCWHM', 2, 'Raghvendra', 'voter123', 'raghugkp10@gmail.com', '$2y$10$/OIfOTTa3qVWYb8Of2F0s.wsm4ROfdwPx30TOMbAWfP0LR9gCV8aq', '', 'male', 'indira nagar', 'voted', 'BJP', '2015-12-09 04:47:14'),
('m3HL9aoEMFhwWewaZKKX9LmAsYWOZRoIp0LMfD1MPphzzzDCGeXWwKH3IiGh', 3, 'Mohit', 'voter124', 'mohit@gmail.com', '$2y$10$6agYdRejUequ1k2h5M4Ea.8c0.niXK4/Yf/QYmOnZxm749SdAfRNy', '', 'male', 'indira nagar', '', '', '2015-12-07 07:54:10'),
('k0gsGfawoEJbw7LrtM7xUdDZiAY1LI2kaEkJzkbtOQrEFoEE8Db5FEULix4U', 4, 'raghu', 'voter125', 'raghu@gmail.com', '$2y$10$4O4yO9fEQpiEmBKO23CaUu47zfmx/10j4Q6U3gJoWnd1QY.aT2tyS', '', 'male', 'indira nagar', '', '', '2015-12-07 09:00:01'),
('VYHDKUoDZ7mSORQhrhpEPaeW7Qf9bT2KYABswCmolzPYFY08YSbd81uGJYFJ', 5, 'Surendra', 'voter126', 'surendra@gmail.com', '$2y$10$PKs4w/2HrZHqZ9fWs3mrQ.M6NzGTq2quFploiLGGLcBhI3PL3zRQm', '', 'male', 'munshipulia', 'voted', 'BJP', '2015-12-08 05:58:37'),
('x6EOQ2CZ5GvfA3huIjWQjxPMQ8nhct1aB9kcsK9gRrIvf0cv1m7srmzh0zdQ', 6, 'mohit', '56789', 'mksfnv@gmail.com', '$2y$10$rvPZbWqdublOkKcyj/ouxe6FpGDPAWdAa50faPfUoWkIZsJsMmwIm', '', 'male', 'munshipulia', 'voted', 'Bhartiya Janta Party', '2015-12-09 04:32:53'),
('hSQK9fnaJAD1G25m6ZYbjU4QZrKKY3qgrUhnsewjXyPIkfA89qBRpRxY8hHi', 7, 'Ratneshwar singh', '123456', 'srattu18@gmail.com', '$2y$10$O6aiRxNpm5WrKKqsGkzbJeY1clfZ2zxC04MCHPvgm4J1E2cjzYn9e', '', 'male', 'indira nagar', 'voted', 'Bhartiya Janta Party', '2015-12-09 18:11:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
