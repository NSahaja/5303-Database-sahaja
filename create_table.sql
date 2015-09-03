-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2015 at 01:08 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snaredla`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `gender` enum('male','female') NOT NULL,
  `title` varchar(4) NOT NULL,
  `first` varchar(16) NOT NULL,
  `last` varchar(32) NOT NULL,
  `street` varchar(38) NOT NULL,
  `city` varchar(32) NOT NULL,
  `state` varchar(38) NOT NULL,
  `zip` int(5) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(16) NOT NULL,
  `dob` int(10) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `picture` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
