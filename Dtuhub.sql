-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2017 at 01:16 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Dtuhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `browser` varchar(100) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`name`, `email`, `reason`, `browser`) VALUES
('Milindra', 'davipsmilindra11@gmail.com', 'good', 'FireFox'),
('milindra', 'mili@gmail.com', '', 'Chrome'),
('lll', 'milindrakanwar@gmail.com', '', 'IntenetExplore'),
('asdf', 's@gmail.com', 'ss', 'Chrome');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
