-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2015 at 09:41 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `combo`
--

-- --------------------------------------------------------

--
-- Table structure for table `case1`
--

CREATE TABLE IF NOT EXISTS `case1` (
  `case_id` int(11) NOT NULL AUTO_INCREMENT,
  `case_name` varchar(255) NOT NULL,
  `case_date` varchar(255) NOT NULL,
  `case_registered_by` varchar(255) NOT NULL,
  `case_filed_by` varchar(255) NOT NULL,
  `case_suspects` text NOT NULL,
  `case_status` varchar(255) NOT NULL,
  `case_police_head` varchar(255) NOT NULL,
  `case_crime` varchar(255) NOT NULL,
  `case_crime_location` varchar(255) NOT NULL,
  `case_affected_people` varchar(255) NOT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `case1`
--

INSERT INTO `case1` (`case_id`, `case_name`, `case_date`, `case_registered_by`, `case_filed_by`, `case_suspects`, `case_status`, `case_police_head`, `case_crime`, `case_crime_location`, `case_affected_people`) VALUES
(3, '', '', '', '', '', '', '', '', '', ''),
(4, 'Arushi case', '22/03/13', 'nidhi', 'vanika', 'prianka\r\nrucha\r\nshariwa', 'running', 'kiran', 'rape', 'dombivali', 'arushifamily'),
(5, 'murder', '10/11/2013', 'vishwa', 'nidhi', 'shahu\r\nswati', 'running', 'vanika', '', 'kalyan', 'kiran'),
(6, 'igweji', '04/04/2014', 'iapnf', 'iosndg', 'ipngs', 'sing;k', 'ing', 'oingor', 'insg', 'nigw;np');
