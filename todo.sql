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
-- Database: `todo`
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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_10_104948_create_tasks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `task_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `email`, `task_title`, `task`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', 'hello', 'dfhfgh vgshnf dfsdgdf cv', '2015-12-16 06:43:48', '2015-12-16 06:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `pic`, `profession`, `address`, `contact`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohit', 'mohitkt1993@gmail.com', '$2y$10$6WinIFvp6tOVbnm3tuuj0.53MvBEX0D/gqWPNeXSyLYcg94O1SjT.', '', 'Pvt.Employee', '', '', '9yI5F1muAQrFZIKj1k5VRVmvPRmKOvszRAE4BcZK', '2015-12-11 00:26:18', '2015-12-11 00:26:18'),
(2, 'Raghvendra ', 'raghu@gmail.com', '$2y$10$WixsQxDJ5wQM.iOWaFOjt.9tsZbp7NrBYi5JLX2/0cG.7VoK9/8rS', '', 'student', 'lekhraj', '7891456212', 'rh4BkOiDv0F1H7yLwXBjB5nOOTvVPRXL6KmzbCe7T1J5Dy8iSnQnUWW5xOQc', '2015-12-11 06:28:18', '2015-12-12 17:01:10'),
(3, 'RAGHU', 'raghugkp10@gmail.com', '$2y$10$I2/0DUfahMpRjBR463JmKOKTa8LAyFZACVILY495ZPsv4Cv0/pAPC', '', 'Student', '', '', '9hi55IWNJcFYlL5iu2WLjZJ6BbFwkmQFeeUEsIqxXBJqNnYunemm4VADdiQ7', '2015-12-12 08:34:02', '2015-12-12 08:35:44'),
(9, 'test', 'test@gmail.com', '$2y$10$84pVazyBI/jhngEdq4qx4ey/Zump/sXx9ENOhdSJGCnKpkEVU7ega', 'img/145024356920151114-125523.jpg', 'Student', '', '', 'Y5lADqtug71OCPhhFpsXlSroNLoruvYXouXyWNrpLftcktFRI9QjqixDgZBN', '2015-12-16 05:26:09', '2015-12-16 07:14:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
