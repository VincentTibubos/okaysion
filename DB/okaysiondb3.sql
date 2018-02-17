-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 07:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okaysiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `aid` int(11) NOT NULL,
  `auser` varchar(255) NOT NULL,
  `apass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`aid`, `auser`, `apass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `ccontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_tbl`
--

INSERT INTO `company_tbl` (`cid`, `cname`, `cpass`, `cemail`, `caddress`, `ccontact`) VALUES
(1, 'you', '202cb962ac59075b964b07152d234b70', 'you@tube', 'sa kanto', 'wla po'),
(11, 'joven', '202cb962ac59075b964b07152d234b70', 'kanta@gmail.com', '', ''),
(12, 'hello', '202cb962ac59075b964b07152d234b70', 'jsdflkdfsajlfs@sfadjfs', '', ''),
(13, 'klkkjkljlkk', '698d51a19d8a121ce581499d7b701668', 'adjaksddjkl#@hhkjahsd', '', ''),
(14, 'vian corp', '202cb962ac59075b964b07152d234b70', 'vian@gmail.com', '', ''),
(15, 'asdfmsdfa', '202cb962ac59075b964b07152d234b70', '123@saddjkaslkj', '', ''),
(16, 'vincentjoram', '202cb962ac59075b964b07152d234b70', 'vincent@pogi.ccom', '', ''),
(17, 'hellopo', '202cb962ac59075b964b07152d234b70', 'helo@gmail', '', ''),
(18, 'VincentCorp', '202cb962ac59075b964b07152d234b70', 'Vince@corp', '', ''),
(19, 'vincent', '81dc9bdb52d04dc20036dbd8313ed055', 'leo4@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `organizer_tbl`
--

CREATE TABLE `organizer_tbl` (
  `oid` int(11) NOT NULL,
  `ouser` varchar(255) NOT NULL,
  `ofname` varchar(255) NOT NULL,
  `olname` varchar(255) NOT NULL,
  `opass` varchar(255) NOT NULL,
  `ogender` enum('Male','Female') NOT NULL,
  `oemail` varchar(255) NOT NULL,
  `ocontact` varchar(20) NOT NULL,
  `oaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer_tbl`
--

INSERT INTO `organizer_tbl` (`oid`, `ouser`, `ofname`, `olname`, `opass`, `ogender`, `oemail`, `ocontact`, `oaddress`) VALUES
(1, 'Vincent23', 'Vincent Joram', 'Tibubos', '123', 'Male', 'greenchay22@gmail.com', '09158150262', 'pampanga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `organizer_tbl`
--
ALTER TABLE `organizer_tbl`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_tbl`
--
ALTER TABLE `company_tbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `organizer_tbl`
--
ALTER TABLE `organizer_tbl`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
