-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2014 at 03:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE IF NOT EXISTS `logintable` (
  `login_id` int(100) NOT NULL AUTO_INCREMENT,
  `login_email` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`login_id`, `login_email`, `login_password`) VALUES
(1, 'ujjaval@inkoniq.com', 'inkoniq'),
(2, 'ujjs@dsfds.com', 'dfsdfsfsdf'),
(3, 'sdfsdf@dfds.com', 'sdfsdfwerwer');

-- --------------------------------------------------------

--
-- Table structure for table `messagelist`
--

CREATE TABLE IF NOT EXISTS `messagelist` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `messageuser_id` int(11) NOT NULL,
  `message_no` int(11) NOT NULL,
  `message_text` varchar(200) NOT NULL,
  `message_datetime` varchar(100) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `messagelist`
--

INSERT INTO `messagelist` (`message_id`, `messageuser_id`, `message_no`, `message_text`, `message_datetime`) VALUES
(1, 1, 2147483647, 'this is test', '1410955816'),
(2, 1, 2147483647, 'this is test', '1410955832'),
(3, 0, 2147483647, 'this is test', '1410956051'),
(4, 0, 2147483647, 'rhh hsdf hsfsdf', '1410956061'),
(5, 1, 2147483647, 'this thsdf hsdf hsfd hsf hsfd hsdf hsdfdsf', '1410956114'),
(6, 2, 2147483647, 'user 2 testing ', '1410956227'),
(7, 2, 0, '', '1410956463'),
(8, 2, 2147483647, 'sfdfsdfsfsdf', '1410956481'),
(9, 2, 2147483647, 'sfdsfsfdsf sfds dfsd sdf sf sdfsdfd sdf sdf dsf', '1410956525');

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE IF NOT EXISTS `usercontact` (
  `contact_id` int(100) NOT NULL AUTO_INCREMENT,
  `contact_userid` int(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
