-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venkat`
--

-- --------------------------------------------------------

--
-- Table structure for table `fbuser`
--

CREATE TABLE `fbuser` (
  `imgname` varchar(50) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fbuser`
--

INSERT INTO `fbuser` (`imgname`, `feedback`) VALUES
('rose', 'rose smells good'),
('rose', 'rose smells good');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `pass2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `email`, `pass1`, `pass2`) VALUES
('venkat', 'venkycheemala@gmail.com', '', ''),
('dddd', 'dfdfd@dfd', '', ''),
('dddd', 'dfdfd@dfd', 'ddd', 'ddd'),
('venkat', 'venkycheemala@gmail.com', 'venky', 'venky'),
('venkat', 'venkycheemala@gmail.com', 'venky', 'venky'),
('venkat', 'venkycheemala@gmail.com', 'venky', 'venky'),
('venkat', 'venkycheemala@gmail.com', 'venky', 'venky'),
('venkat', 'venkycheemala@gmail.com', 'hello', 'hello'),
('uday', 'uday@hello.com', '12345', '12345'),
('ram', 'ram@hell.com', '345', '345');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `file` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `des` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`file`, `name`, `des`) VALUES
('1.jpg', 'venkat', 'dfsadfsd'),
('1.jpg', 'agrybird2', 'dgretgrhds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
