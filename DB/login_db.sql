-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2014 at 02:24 PM
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
  `login_name` varchar(100) NOT NULL,
  `login_mobile` varchar(100) NOT NULL,
  `login_city` varchar(100) NOT NULL,
  `login_state` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`login_id`, `login_email`, `login_password`, `login_name`, `login_mobile`, `login_city`, `login_state`) VALUES
(9, 'ujjaval@inkoniq.com', 'a809c59c5bf583b3486b93a138569b3f', 'ujjaval', '8884201471', 'bangalore', 'karnataka');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `messagelist`
--

INSERT INTO `messagelist` (`message_id`, `messageuser_id`, `message_no`, `message_text`, `message_datetime`) VALUES
(1, 1, 2147483647, 'this is test', '1410955816'),
(2, 1, 2147483647, 'this is test', '1410955832'),
(3, 0, 2147483647, 'this is test', '1410956051'),
(4, 0, 2147483647, 'rhh hsdf hsfsdf', '1410956061'),
(5, 1, 2147483647, 'this thsdf hsdf hsfd hsf hsfd hsdf hsdfdsf', '1410956114'),
(6, 9, 2147483647, 'user 2 testing ', '1410956227'),
(8, 9, 2147483647, 'sfdfsdfsfsdf', '1410956481'),
(9, 9, 2147483647, 'sfdsfsfdsf sfds dfsd sdf sf sdfsdfd sdf sdf dsf', '1410956525'),
(10, 9, 1234567890, 'thsusdf hsdf shsdf hdsf hsfd sdhsdf shdfsd', '1411038710'),
(11, 9, 1131331313, 'this hsis is shsf hsf sdfhsd fshsdf sfhsfd sfdhsdf sdfhsf sdfhsdf sdfhsdf sdfhsf sdfhsdf hsdf sdfhsdf hsdf sdh sfhsdf shdf sfdhsf sdfhsdf shfdsdf sfd', '1411038746'),
(12, 9, 1111111111, 'dcdcfvgg  sfsf sdfsdfsdf sdfsdfsdf sdfsdfsdf sdf sdfsdf sdf sdf sdf sdf   sdfsdfsfsds sdfsfsdfsdf  dsf', '1411038768');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`contact_id`, `contact_userid`, `contact_name`, `contact_no`) VALUES
(1, 1, 'naveen', '8787878787'),
(2, 1, 'naveen k', '8989898989'),
(3, 9, 'jash', '8787878728'),
(6, 9, 'jashsi', '1234567890'),
(7, 9, 'uj', '23234323243'),
(8, 9, 'werwrw', '234324242'),
(9, 9, 'uj', '23234323243'),
(10, 9, 'werwrw', '234324242'),
(11, 9, 'deddes', '1234567890'),
(12, 9, 'awasqwsa', '1234567890'),
(13, 9, 'deddes', '1234567890'),
(14, 9, 'awasqwsa', '1234567890'),
(15, 9, 'sefas', '121212121212'),
(16, 9, 'sdfasf ', '1234567890'),
(17, 9, 'tes', '1234567890'),
(18, 9, 'tests', '1234567890'),
(19, 9, 'tests', '1234567890'),
(20, 9, 'reds', '1234567890'),
(21, 9, 'tests', '1234567890'),
(22, 9, 'reds', '1234567890');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
