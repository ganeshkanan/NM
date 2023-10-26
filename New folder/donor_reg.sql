-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 11:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arun`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_reg`
--

CREATE TABLE `donor_reg` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `location` varchar(40) NOT NULL,
  `pincode` int(10) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(20) NOT NULL,
  `paid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_reg`
--

INSERT INTO `donor_reg` (`name`, `email`, `pass`, `state`, `city`, `location`, `pincode`, `blood`, `age`, `gender`, `mobile`, `paid`) VALUES
('', '19338@krcollege.net', '12345678', 'TN', 'Kadambur', 'salaiyam street', 895423, 'B+', 20, 'Male', 2147483647, 'no'),
('', '19338@krcollege.net', '12345678', 'TN', 'Kadambur', 'salaiyam street', 895423, 'B+', 20, 'Male', 2147483647, 'no'),
('', '19338@krcollege.net', '12345678', 'TN', 'Kadambur', 'salaiyam street', 895423, 'B+', 20, 'Male', 2147483647, 'no'),
('arun', 'projectedna2021@gmail.com', 'ewafs', 'AP', 'Abiramam', 'agv', 43534645, 'Bombay Gro', 21, 'Male', 2147483647, 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
