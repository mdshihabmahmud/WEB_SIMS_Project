-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 10:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `userid` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`userid`, `password`) VALUES
(12345, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clotharrival`
--

CREATE TABLE `clotharrival` (
  `pname` varchar(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `psize` varchar(10) NOT NULL,
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clotharrival`
--

INSERT INTO `clotharrival` (`pname`, `pid`, `psize`, `picture`) VALUES
('Lehenga', 22, 'M', ''),
('genji', 18961, 'XXL', ''),
('Pant', 1811510908, 'XXL', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sname` varchar(20) NOT NULL,
  `id` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sname`, `id`, `email`, `contact`) VALUES
('zannat', 918, 'tuna-10961@diu.edu.bd', '0847186809');

-- --------------------------------------------------------

--
-- Table structure for table `insertform`
--

CREATE TABLE `insertform` (
  `pname` varchar(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `psize` varchar(10) NOT NULL,
  `cemail` varchar(20) NOT NULL,
  `ccontact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insertform`
--

INSERT INTO `insertform` (`pname`, `pid`, `psize`, `cemail`, `ccontact`) VALUES
('sharee', 1, 'M', 'demo@gmail.com', '01788660099');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `clotharrival`
--
ALTER TABLE `clotharrival`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertform`
--
ALTER TABLE `insertform`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `clotharrival`
--
ALTER TABLE `clotharrival`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1811510909;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18115102;

--
-- AUTO_INCREMENT for table `insertform`
--
ALTER TABLE `insertform`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18115162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
