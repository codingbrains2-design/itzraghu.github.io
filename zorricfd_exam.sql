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
-- Database: `zorricfd_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `subject` varchar(20) NOT NULL,
  `set_no` varchar(50) NOT NULL,
  `ques_no` varchar(20) NOT NULL,
  `correct_answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=243 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `subject`, `set_no`, `ques_no`, `correct_answer`) VALUES
(1, 'php', '1', '1', 'Ques1-4'),
(2, 'php', '1', '2', 'Ques2-2'),
(3, 'php', '1', '3', 'Ques3-2'),
(4, 'php', '1', '4', 'Ques4-3'),
(5, 'php', '1', '5', 'Ques5-2'),
(6, 'php', '1', '6', 'Ques6-3'),
(7, 'php', '1', '7', 'Ques7-1'),
(8, 'php', '1', '8', 'Ques8-2'),
(9, 'php', '1', '9', 'Ques9-1'),
(10, 'php', '1', '10', 'Ques10-2'),
(11, 'php', '2', '1', 'Ques1-4'),
(12, 'php', '2', '2', 'Ques2-1'),
(13, 'php', '2', '3', 'Ques3-4'),
(14, 'php', '2', '4', 'Ques4-1'),
(15, 'php', '2', '5', 'Ques5-2'),
(16, 'php', '2', '6', 'Ques6-2'),
(17, 'php', '2', '7', 'Ques7-3'),
(18, 'php', '2', '8', 'Ques8-3'),
(19, 'php', '2', '9', 'Ques9-1'),
(20, 'php', '2', '10', 'Ques10-4'),
(21, 'php', '3', '1', 'Ques1-3'),
(22, 'php', '3', '2', 'Ques2-1'),
(23, 'php', '3', '3', 'Ques3-2'),
(24, 'php', '3', '4', 'Ques4-2'),
(25, 'php', '3', '5', 'Ques5-4'),
(26, 'php', '3', '6', 'Ques6-3'),
(27, 'php', '3', '7', 'Ques7-3'),
(28, 'php', '3', '8', 'Ques8-1'),
(29, 'php', '3', '9', 'Ques9-4'),
(30, 'php', '3', '10', 'Ques10-1'),
(31, 'java', '1', '1', 'Ques1-3'),
(32, 'java', '1', '2', 'Ques2-3'),
(33, 'java', '1', '3', 'Ques3-3'),
(34, 'java', '1', '4', 'Ques4-2'),
(35, 'java', '1', '5', 'Ques5-1'),
(36, 'java', '1', '6', 'Ques6-1'),
(37, 'java', '1', '7', 'Ques7-3'),
(38, 'java', '1', '8', 'Ques8-3'),
(39, 'java', '1', '9', 'Ques9-1'),
(40, 'java', '1', '10', 'Ques10-3'),
(41, 'java', '2', '1', 'Ques1-4'),
(42, 'java', '2', '2', 'Ques2-1'),
(43, 'java', '2', '3', 'Ques3-4'),
(44, 'java', '2', '4', 'Ques1-4'),
(45, 'java', '2', '5', 'Ques5-2'),
(46, 'java', '2', '6', 'Ques6-2'),
(47, 'java', '2', '7', 'Ques7-3'),
(48, 'java', '2', '8', 'Ques8-2'),
(49, 'java', '2', '9', 'Ques9-4'),
(50, 'java', '2', '10', 'Ques10-2'),
(51, 'java', '3', '1', 'Ques1-2'),
(52, 'java', '3', '2', 'Ques2-2'),
(53, 'java', '3', '3', 'Ques3-2'),
(54, 'java', '3', '4', 'Ques4-3'),
(55, 'java', '3', '5', 'Ques5-4'),
(56, 'java', '3', '6', 'Ques6-4'),
(57, 'java', '3', '7', 'Ques7-3'),
(58, 'java', '3', '8', 'Ques8-2'),
(59, 'java', '3', '9', 'Ques9-3'),
(60, 'java', '3', '10', 'Ques10-1'),
(62, 'html', '1', '1', 'Ques1-3'),
(63, 'html', '1', '2', 'Ques2-1'),
(64, 'html', '1', '3', 'Ques3-1'),
(65, 'html', '1', '4', 'Ques4-1'),
(66, 'html', '1', '5', 'Ques5-2'),
(67, 'html', '1', '6', 'Ques6-3'),
(68, 'html', '1', '7', 'Ques7-4'),
(69, 'html', '1', '8', 'Ques8-2'),
(70, 'html', '1', '9', 'Ques9-4'),
(71, 'html', '1', '10', 'Ques10-3'),
(72, 'html', '2', '1', 'Ques1-2'),
(73, 'html', '2', '2', 'Ques2-3'),
(74, 'html', '2', '3', 'Ques3-1'),
(75, 'html', '2', '4', 'Ques4-3'),
(76, 'html', '2', '5', 'Ques5-4'),
(77, 'html', '2', '6', 'Ques6-4'),
(78, 'html', '2', '7', 'Ques7-1'),
(79, 'html', '2', '8', 'Ques8-2'),
(80, 'html', '2', '9', 'Ques9-3'),
(81, 'html', '2', '10', 'Ques10-2'),
(82, 'html', '3', '1', 'Ques1-1'),
(83, 'html', '3', '2', 'Ques2-2'),
(84, 'html', '3', '3', 'Ques3-4'),
(85, 'html', '3', '4', 'Ques4-3'),
(86, 'html', '3', '5', 'Ques5-2'),
(87, 'html', '3', '6', 'Ques6-3'),
(88, 'html', '3', '7', 'Ques7-1'),
(89, 'html', '3', '8', 'Ques8-4'),
(90, 'html', '3', '9', 'Ques9-4'),
(91, 'html', '3', '10', 'Ques10-1'),
(92, 'jquery', '2', '1', 'Ques1-1'),
(93, 'jquery', '2', '2', 'Ques2-3'),
(94, 'jquery', '2', '3', 'Ques3-1'),
(95, 'jquery', '2', '4', 'Ques4-1'),
(96, 'jquery', '2', '5', 'Ques5-2'),
(97, 'jquery', '2', '6', 'Ques6-3'),
(98, 'jquery', '2', '7', 'Ques7-3'),
(99, 'jquery', '2', '8', 'Ques8-1'),
(100, 'jquery', '2', '9', 'Ques9-2'),
(101, 'jquery', '2', '10', 'Ques10-1'),
(102, 'jquery', '3', '1', 'Ques1-2'),
(103, 'jquery', '3', '2', 'Ques2-3'),
(104, 'jquery', '3', '3', 'Ques3-1'),
(105, 'jquery', '3', '4', 'Ques4-2'),
(106, 'jquery', '3', '5', 'Ques5-1'),
(107, 'jquery', '3', '6', 'Ques6-3'),
(108, 'jquery', '3', '7', 'Ques7-3'),
(109, 'jquery', '3', '8', 'Ques8-3'),
(110, 'jquery', '3', '9', 'Ques9-2'),
(111, 'jquery', '3', '10', 'Ques10-2'),
(112, 'bootstrap', '1', '1', 'Ques1-4'),
(113, 'bootstrap', '1', '2', 'Ques2-3'),
(114, 'bootstrap', '1', '3', 'Ques3-1'),
(115, 'bootstrap', '1', '4', 'Ques4-3'),
(116, 'bootstrap', '1', '5', 'Ques5-4'),
(117, 'bootstrap', '1', '6', 'Ques6-1'),
(118, 'bootstrap', '1', '7', 'Ques7-1'),
(119, 'bootstrap', '1', '8', 'Ques8-3'),
(120, 'bootstrap', '1', '9', 'Ques9-3'),
(121, 'bootstrap', '1', '10', 'Ques10-1'),
(122, 'bootstrap', '2', '1', 'Ques1-4'),
(123, 'bootstrap', '2', '2', 'Ques2-1'),
(124, 'bootstrap', '2', '3', 'Ques3-4'),
(125, 'bootstrap', '2', '4', 'Ques4-2'),
(126, 'bootstrap', '2', '5', 'Ques5-2'),
(127, 'bootstrap', '2', '6', 'Ques6-2'),
(128, 'bootstrap', '2', '7', 'Ques7-1'),
(129, 'bootstrap', '2', '8', 'Ques8-1'),
(130, 'bootstrap', '2', '9', 'Ques9-2'),
(131, 'bootstrap', '2', '10', 'Ques10-3'),
(132, 'bootstrap', '3', '1', 'Ques1-3'),
(133, 'bootstrap', '3', '2', 'Ques2-2'),
(134, 'bootstrap', '3', '3', 'Ques3-2'),
(135, 'bootstrap', '3', '4', 'Ques1-4'),
(136, 'bootstrap', '3', '5', 'Ques5-3'),
(137, 'bootstrap', '3', '6', 'Ques6-2'),
(138, 'bootstrap', '3', '7', 'Ques7-4'),
(139, 'bootstrap', '3', '8', 'Ques8-2'),
(140, 'bootstrap', '3', '9', 'Ques9-3'),
(141, 'bootstrap', '3', '10', 'Ques10-3'),
(142, 'jquery', '1', '1', 'Ques1-2'),
(143, 'jquery', '1', '2', 'Ques2-3'),
(144, 'jquery', '1', '3', 'Ques3-4'),
(145, 'jquery', '1', '4', 'Ques4-2'),
(146, 'jquery', '1', '5', 'Ques5-2'),
(147, 'jquery', '1', '6', 'Ques6-2'),
(148, 'jquery', '1', '7', 'Ques7-3'),
(149, 'jquery', '1', '8', 'Ques8-3'),
(150, 'jquery', '1', '9', 'Ques9-2'),
(151, 'jquery', '1', '10', 'Ques10-4'),
(152, 'css', '1', '1', 'Ques1-1'),
(153, 'css', '1', '2', 'Ques2-3'),
(154, 'css', '1', '3', 'Ques3-4'),
(155, 'css', '1', '4', 'Ques4-2'),
(156, 'css', '1', '2', 'Ques5-1'),
(157, 'css', '1', '6', 'Ques6-3'),
(158, 'css', '1', '7', 'Ques7-1'),
(159, 'css', '1', '8', 'Ques8-3'),
(160, 'css', '1', '9', 'Ques9-4'),
(161, 'css', '1', '10', 'Ques10-2'),
(162, 'css', '2', '1', 'Ques1-4'),
(163, 'css', '2', '2', 'Ques2-4'),
(164, 'css', '2', '3', 'Ques3-4'),
(165, 'css', '2', '4', 'Ques4-1'),
(166, 'css', '2', '5', 'Ques5-2'),
(167, 'css', '2', '6', 'Ques6-1'),
(168, 'css', '2', '7', 'Ques7-1'),
(169, 'css', '2', '8', 'Ques8-4'),
(170, 'css', '2', '9', 'Ques9-1'),
(171, 'css', '2', '10', 'Ques10-4'),
(173, 'css', '3', '1', 'Ques1-4'),
(174, 'css', '3', '2', 'Ques2-1'),
(175, 'css', '3', '3', 'Ques3-4'),
(176, 'css', '3', '4', 'Ques4-4'),
(177, 'css', '3', '5', 'Ques5-4'),
(178, 'css', '3', '6', 'Ques6-1'),
(179, 'css', '3', '7', 'Ques7-4'),
(180, 'css', '3', '8', 'Ques8-2'),
(181, 'css', '3', '9', 'Ques9-1'),
(182, 'css', '3', '10', 'Ques10-3\r\n                                        '),
(183, 'c', '1', '1', 'Ques1-3'),
(184, 'c', '1', '2', 'Ques2-2'),
(185, 'c', '1', '3', 'Ques3-2'),
(186, 'c', '1', '4', 'Ques4-1'),
(187, 'c', '1', '5', 'Ques5-4'),
(188, 'c', '1', '6', 'Ques6-1'),
(189, 'c', '1', '7', 'Ques7-4'),
(190, 'c', '1', '8', 'Ques8-3'),
(191, 'c', '1', '9', 'Ques9-4'),
(192, 'c', '1', '10', 'Ques10-1\r\n                                        '),
(193, 'c', '2', '1', 'Ques1-4'),
(194, 'c', '2', '2', 'Ques2-2'),
(195, 'c', '2', '3', 'Ques3-3'),
(196, 'c', '2', '4', 'Ques4-1'),
(197, 'c', '2', '5', 'Ques5-4'),
(198, 'c', '2', '6', 'Ques6-2'),
(199, 'c', '2', '7', 'Ques7-1'),
(200, 'c', '2', '8', 'Ques8-3'),
(201, 'c', '2', '9', 'Ques9-3'),
(202, 'c', '2', '10', 'Ques10-2'),
(203, 'database', '1', '1', 'Ques1-3'),
(204, 'database', '1', '2', 'Ques2-3'),
(205, 'database', '1', '3', 'Ques3-2'),
(206, 'database', '1', '4', 'Ques4-2'),
(207, 'database', '1', '5', 'Ques5-1'),
(208, 'database', '1', '6', 'Ques6-1'),
(209, 'database', '1', '7', 'Ques7-2'),
(210, 'database', '1', '8', 'Ques8-4'),
(211, 'database', '1', '9', 'Ques9-4'),
(212, 'database', '1', '10', 'Ques10-2'),
(213, 'database', '2', '1', 'Ques1-3'),
(214, 'database', '2', '2', 'Ques2-1'),
(215, 'database', '2', '3', 'Ques3-4'),
(216, 'database', '2', '4', 'Ques4-1'),
(217, 'database', '2', '5', 'Ques5-2'),
(218, 'database', '2', '6', 'Ques6-3'),
(219, 'database', '2', '7', 'Ques7-1'),
(220, 'database', '2', '8', 'Ques8-1'),
(221, 'database', '2', '9', 'Ques9-3'),
(222, 'database', '2', '10', 'Ques10-2'),
(223, 'database', '3', '1', 'Ques1-2'),
(224, 'database', '3', '2', 'Ques2-4'),
(225, 'database', '3', '3', 'Ques3-2'),
(226, 'database', '3', '4', 'Ques4-3'),
(227, 'database', '3', '5', 'Ques5-2'),
(228, 'database', '3', '6', 'Ques6-2'),
(229, 'database', '3', '7', 'Ques7-1'),
(230, 'database', '3', '8', 'Ques8-3'),
(231, 'database', '3', '9', 'Ques9-1'),
(232, 'database', '3', '10', 'Ques10-2'),
(233, 'c', '3', '1', 'Ques1-3'),
(234, 'c', '3', '', 'Ques2-3'),
(235, 'c', '3', '3', 'Ques3-3'),
(236, 'c', '3', '4', 'Ques4-2'),
(237, 'c', '3', '5', 'Ques5-4'),
(238, 'c', '3', '6', 'Ques6-3'),
(239, 'c', '3', '7', 'Ques7-3'),
(240, 'c', '3', '8', 'Ques8-4'),
(241, 'c', '3', '9', 'Ques9-4'),
(242, 'c', '3', '10', 'Ques10-2\r\n                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `set_no` varchar(50) DEFAULT NULL,
  `obtained_marks` int(50) DEFAULT NULL,
  `total_marks` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `username`, `subject`, `set_no`, `obtained_marks`, `total_marks`) VALUES
(8, 'mohit', 'html', '1', 3, 10),
(9, 'mohit', 'html', '2', 2, 10),
(10, 'mohit', 'html', '3', 3, 10),
(11, 'mohit', 'jquery', '1', 0, 10),
(12, 'mohit', 'jquery', '2', 5, 10),
(13, 'mohit', 'jquery', '3', 2, 10),
(14, 'mohit', 'css', '1', 3, 10),
(15, 'mohit', 'css', '2', 4, 10),
(16, 'mohit', 'css', '3', 3, 10),
(19, 'mohit', 'bootstrap', '1', 4, 10),
(20, 'mohit', 'bootstrap', '2', 3, 10),
(21, 'mohit', 'bootstrap', '3', 0, 10),
(22, 'mohit', 'database', '1', 2, 10),
(23, 'mohit', 'database', '2', 4, 10),
(24, 'mohit', 'database', '3', 2, 10),
(25, 'mohit', 'c', '1', 2, 10),
(26, 'mohit', 'c', '2', 2, 10),
(27, 'mohit', 'c', '3', 0, 10),
(31, 'mohit', 'java', '3', 1, 10),
(32, 'mohit', 'java', '2', 1, 10),
(33, 'mohit', 'java', '1', 3, 10),
(34, 'mohit', 'php', '1', 2, 10),
(36, 'mohit', 'php', '3', 3, 10),
(38, 'mohit', 'php', '2', 3, 10),
(39, 'raghu', 'php', '1', 10, 10),
(40, '', 'java', '1', 3, 10),
(41, '', 'java', '1', 3, 10),
(42, '', 'java', '1', 3, 10),
(43, 'akanksha22', 'html', '1', 3, 10),
(44, 'varun', 'c', '1', 4, 10),
(45, '', 'php', '2', 3, 10),
(46, '', 'php', '2', 3, 10),
(47, '', 'php', '2', 3, 10),
(48, 'varun', 'java', '1', 3, 10),
(49, 'test', 'php', '1', 1, 10),
(50, 'vabhav', 'php', '1', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `mobile`, `qualification`) VALUES
(1, 'Raghvendra Pratap Singh', 'raghu', '123', 'raghugkp10@gmail.com', 9532064154, NULL),
(4, 'Surendra Singh Rana', 'lotusgt1', '123', 'lotus@gmail.com', 7275758027, NULL),
(5, 'Mohit Tripathi', 'mohit', 'pass', 'mohit123@gmail.com', 9638527410, NULL),
(6, 'Satyapal', 'Vibhasingh', 'sattu_123', 'satypal@hotmail.com', 9839485001, NULL),
(9, 'akanksha srivastava', 'akanksha22', 'akanksha22', 'akanksha.srivstva@gmail.com', 9008197024, NULL),
(10, 'Akanksha', 'Aks', '9852212129', 'aks9892@gmail.com', 9807275411, NULL),
(11, 'varun', 'varun', 'varun', 'varun200192@gmail.com', 8563902302, NULL),
(15, 'raghu', 'test ', 'test', 'test@gmail .com', 1234567890, NULL),
(16, 'Vaibhav', 'vabhav', '1234', 'vaibhav@gmail.com', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
