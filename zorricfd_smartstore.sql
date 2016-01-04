-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2016 at 01:08 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zorricfd_smartstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE IF NOT EXISTS `ac` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

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
('raghu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', 'a', 'a', 'a', 'a', '../../images/14503468251447836268230.png'),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'slider1', NULL, NULL, NULL, NULL, '../../images/14503464081447836268230.png'),
(6, 'slider2', NULL, NULL, NULL, NULL, NULL),
(7, 'slider3', NULL, NULL, NULL, NULL, NULL),
(8, 'slider4', NULL, NULL, NULL, NULL, NULL),
(9, 'featurePic1', 'a', 'a', 'a', 'a', '../../images/14503466131447836268230.png'),
(10, 'featurePic2', NULL, NULL, NULL, NULL, NULL),
(11, 'featurePic3', NULL, NULL, NULL, NULL, NULL),
(12, 'featurePic4', NULL, NULL, NULL, NULL, NULL),
(13, 'newPic1', 'a', 'a', 'a', 'a', '../../images/14503466341447836268230.png'),
(14, 'newPic2', NULL, NULL, NULL, NULL, NULL),
(15, 'newPic3', NULL, NULL, NULL, NULL, NULL),
(16, 'newPic4', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `irons`
--

CREATE TABLE IF NOT EXISTS `irons` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `irons`
--

INSERT INTO `irons` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kent`
--

CREATE TABLE IF NOT EXISTS `kent` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kent`
--

INSERT INTO `kent` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livpure`
--

CREATE TABLE IF NOT EXISTS `livpure` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `livpure`
--

INSERT INTO `livpure` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `microwaves`
--

CREATE TABLE IF NOT EXISTS `microwaves` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `microwaves`
--

INSERT INTO `microwaves` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE IF NOT EXISTS `miscellaneous` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `miscellaneous`
--

INSERT INTO `miscellaneous` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mixers`
--

CREATE TABLE IF NOT EXISTS `mixers` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mixers`
--

INSERT INTO `mixers` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE IF NOT EXISTS `mobiles` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', 'vtv', 'vyh5', 'byhb', 'by5jn', '../../mobiles/1451734310r-mobile.png'),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refrigerators`
--

CREATE TABLE IF NOT EXISTS `refrigerators` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `refrigerators`
--

INSERT INTO `refrigerators` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tablets`
--

CREATE TABLE IF NOT EXISTS `tablets` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tablets`
--

INSERT INTO `tablets` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `televisions`
--

CREATE TABLE IF NOT EXISTS `televisions` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `televisions`
--

INSERT INTO `televisions` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `washing_machines`
--

CREATE TABLE IF NOT EXISTS `washing_machines` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `snp` varchar(100) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `washing_machines`
--

INSERT INTO `washing_machines` (`id`, `name`, `heading`, `description`, `mrp`, `snp`, `image_path`) VALUES
(1, 'pic1', NULL, NULL, NULL, NULL, NULL),
(2, 'pic2', NULL, NULL, NULL, NULL, NULL),
(3, 'pic3', NULL, NULL, NULL, NULL, NULL),
(4, 'pic4', NULL, NULL, NULL, NULL, NULL),
(5, 'pic5', NULL, NULL, NULL, NULL, NULL),
(6, 'pic6', NULL, NULL, NULL, NULL, NULL),
(7, 'pic7', NULL, NULL, NULL, NULL, NULL),
(8, 'pic8', NULL, NULL, NULL, NULL, NULL),
(9, 'pic9', NULL, NULL, NULL, NULL, NULL),
(10, 'pic10', NULL, NULL, NULL, NULL, NULL),
(11, 'pic11', NULL, NULL, NULL, NULL, NULL),
(12, 'pic12', NULL, NULL, NULL, NULL, NULL),
(13, 'pic13', NULL, NULL, NULL, NULL, NULL),
(14, 'pic14', NULL, NULL, NULL, NULL, NULL),
(15, 'pic15', NULL, NULL, NULL, NULL, NULL),
(16, 'pic16', NULL, NULL, NULL, NULL, NULL),
(17, 'pic17', NULL, NULL, NULL, NULL, NULL),
(18, '18', NULL, NULL, NULL, NULL, NULL),
(19, 'pic19', NULL, NULL, NULL, NULL, NULL),
(20, 'pic20', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
