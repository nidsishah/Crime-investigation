-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2015 at 06:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notice board`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `iid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `branch` varchar(50) NOT NULL,
  `notice` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`iid`, `branch`, `notice`, `image_path`) VALUES
(1, 'IT', 'Extra lectures ', 'images/app.jpg'),
(2, 'Etrx', 'tutorial on java', 'images/te.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `tid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `branch` varchar(50) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `notice` text,
  `image_path` text,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`tid`, `branch`, `subject`, `notice`, `image_path`) VALUES
(1, 'IT', 'python', 'gygygygy', ''),
(2, 'Electronics', 'python', 'jbjbjbj', 'images/app.jpg'),
(3, 'Electronics', 'python', 'jbjbjbj', 'images/app.jpg'),
(4, 'Electronics', 'python', 'jbjbjbj', 'images/app.jpg'),
(5, 'Electronics', 'python', 'jbjbjbj', 'images/app.jpg'),
(6, 'Electronics', 'python', 'jbjbjbj\r\nsdzsdv\r\nzdzdv\r\nzfdzsd', 'images/bg.jpg'),
(7, 'IT', 'dsa', 'study dsa', 'images/Desert.jpg'),
(8, 'IT', 'dsa', 'study dsa', 'images/Desert.jpg'),
(9, 'IT', 'dsa', 'hfjtfh', 'images/Desert.jpg'),
(10, 'IT', 'dsa', 'study dsa', ''),
(11, 'Instrumentation', 'sefs', '', 'images/Penguins.jpg'),
(12, 'IT', 'python', 'fhrhfbrbgfhrbgvurhhguserhgsuhgreuhgrujhgnvriufjgnv\r\ngtbvhtbvgbfgv\r\nvfrbvrehbv\r\n', 'images/Indian-Police-Service-Hierarchy.jpg'),
(13, 'IT', 'Rasberry pi', 'nfjdfgnuhgnv\r\nbfrghrfbguyr', 'images/Penguins.jpg'),
(15, 'IT', 'Python Workshop', '5 days python workshop\r\nby Gautam sir\r\non 2, 3, 4, 5 january\r\nat 12:25\r\nin 512 lab', NULL),
(16, 'Electronics', 'eagle workshop', '5 days python workshop\r\nby Roshab sir\r\non 2, 3, 4, 5 january\r\nat 12:25\r\nin 213 lab', 'images/Penguins.jpg'),
(17, 'Instrumentation', 'VLSI', '5 days python workshop\r\nby kumar sir\r\non 2, 3, 4, 5 january\r\nat 12:25\r\nin 112 lab', 'images/bg.jpg'),
(18, 'Instrumentation', 'VLSI', '5 days python workshop\r\nby kumar sir\r\non 2, 3, 4, 5 january\r\nat 12:25\r\nin 112 lab', 'images/bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `vid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `branch` varchar(50) NOT NULL,
  `notice` varchar(255) DEFAULT NULL,
  `video_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid`, `branch`, `notice`, `video_path`) VALUES
(1, 'IT', 'python workshop', 'images/Sortv.mp4'),
(2, 'Extc', 'Rasberry pi', 'images/Sortv.mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
