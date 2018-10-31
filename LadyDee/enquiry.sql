-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 05:39 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ladydee`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL auto_increment,
  `names` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `messages` text NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `names`, `email`, `messages`, `timestamp`) VALUES
(1, 'Akeem Qudus', 'akeemqudus2016@gmail.com', 'I LOVE THIS WEBSITE!!!', '2018-10-28 15:25:04'),
(2, 'Akeem Hassan', 'temitolaitan@gmail.com', 'HOWDY ', '2018-10-28 21:14:06'),
(3, 'Adeola', 'Ola@gmail.com', 'I love your website and like the foods. my mouth is watering right now!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '2018-10-28 22:53:16'),
(4, 'Adeola Dickson', 'Hardex@gmail.com', 'Hey', '2018-10-29 02:41:30');
