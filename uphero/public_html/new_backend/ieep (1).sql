-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2013 at 08:37 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieep`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(35) NOT NULL,
  `school` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `time` varchar(11) NOT NULL,
  `rand_str` varchar(50) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email_id`, `password`, `school`, `country`, `place`, `type`, `time`, `rand_str`, `activation_status`) VALUES
(1, 'sss', '', 'sss', 'sss', '', '', 0, '1357048249', '', 0),
(2, 'aaa', 'aaa', 'aaa', 'aaa', '', '', 0, '1357048773', '', 0),
(4, 'chethan', 'chethann12793@gmail.com', 'aaa', 'nitk', '', '', 1, '1357271424', '', 0),
(5, 'teacher', 'teacher@teac.com', 'teach', 'teach', '', '', 1, '1357271500', '', 0),
(6, 'teacher', 'teacher@teac.com', 'xxx', 'teach', '', '', 1, '1357271528', '', 0),
(7, 'org', 'org@org', 'ccc', 'ccc', '', '', 2, '1357271824', '', 0),
(8, 'zzz', 'zzz', 'zzz', 'zzz', '', '', 1, '1357272348', '453e41d218e071ccfb2d1c99ce23906a', 0),
(9, 'test', 'test', 'test', 'test', '', '', 1, '1357273266', '05a671c66aefea124cc08b76ea6d30bb', 0),
(10, 'chethan', 'chethann12793@gmail.com', 'vvv', 'nitk', '', '', 0, '1357275155', '2af5b044f0c8c72761ce321c1ca9935c', 1),
(11, 'chethan123', 'chethann12793@gmail.com', 'ccc', 'ccc', '', '', 0, '1357306736', '89acd9dea431450eacf0026b20bdad20', 1),
(12, 'zzzzz', 'zzzzz', 'zzzzzz', 'zzzzz', '', '', 0, '1357307361', '771ab4b3c2c35b31fafd418ded2e0135', 1),
(13, 'eer', 'eter', 'ete', 'ertet', '', '', 0, '1357307417', '042db87ebd1220acafa83d03e7f382fe', 1),
(14, 'chandramouli', 'sharma.cms007@gmail.com', 'qwerty', 'nitk', '', '', 0, '1357367307', '1158b8db04cf5149ca0f6b134b0dc0f5', 0),
(15, 'jhg', 't76', 'aaa', '7r', '', '', 0, '1357367910', '19a0350d065ecc681ff34467edf3245a', 1),
(16, 'new', 'new', 'new', 'new', 'IND', 'new', 0, '1357373343', 'e3b81d385ca4c26109dfbda28c563e2b', 0),
(17, 'cccc', 'cccc', 'cccc', 'cccc', 'AFG', 'cccc', 0, '1357373984', 'bee397acc400449ea3a35ed3fc87fea1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
