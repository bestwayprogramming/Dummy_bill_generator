-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2022 at 10:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `itemdesc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `uname`, `email_id`, `date`, `time`, `itemdesc`) VALUES
(1, 'KELIN', 'kelin@gmail.com', '2022-08-18', '01:35:00', ''),
(2, 'VIVEK', 'vivek@gmail.com', '2022-08-17', '01:36:00', ''),
(3, 'OM', 'om@gmail.com', '2022-08-17', '01:37:00', ''),
(12, 'vivek', 'vivek@gmail.com', '2030-06-28', '11:24:00', ''),
(13, 'root', 'etjr@wgfd.sdcws', '1111-11-11', '11:11:00', ''),
(14, 'root', 'etjr@wgfd.sdcws', '2012-02-23', '06:06:00', 'muffin260'),
(15, 'root', 'etjr@wgfd.sdcws', '2012-02-23', '06:06:00', 'muffin260');
