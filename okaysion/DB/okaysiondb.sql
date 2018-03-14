-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 10:49 AM
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
-- Table structure for table `amessage_tbl`
--

CREATE TABLE `amessage_tbl` (
  `amid` int(11) NOT NULL,
  `amname` varchar(255) NOT NULL,
  `amemail` varchar(255) NOT NULL,
  `amsubject` varchar(255) NOT NULL,
  `ammsg` text NOT NULL,
  `amcreated` date NOT NULL,
  `amstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amessage_tbl`
--

INSERT INTO `amessage_tbl` (`amid`, `amname`, `amemail`, `amsubject`, `ammsg`, `amcreated`, `amstatus`) VALUES
(1, 'hdkjdlkjfdkjlafjkl', 'jlkjlkjjkljkfakljfasjklfadsjklfakjsafkjfdajkkjfds', 'jdflkdfsajaflk', 'jlkjlkjjkljkfakljfasjklfadsjklfakjsafkjfdajkkjfds', '2018-03-01', 0),
(4, 'Vincent', 'please help me i can\'t signup\r\n', 'error register', 'please help me i can\'t signup\r\n', '2018-03-01', 0),

(5, 'tibbs', 'tiboobs@gmail.com', 'wla lng to ', 'hello sa oinyo', '2018-03-02', 0),
(6, '', '', '', '', '2018-03-02', 0),
(7, '', 'as@dd', 'we', '', '2018-03-02', 0),
(8, 'VIncent', 'greenchay22@gmail.com', 'wla lng po ', 'nagtatry lng ako\r\n', '2018-03-03', 1),
(9, 'hello', 'hayyys@gmail.com', 'ang saya saya', 'marami akong sasabihin', '2018-03-03', 0),
(10, 'vincent joram tibubos', 'vincentjoramtibubos@gmail.com', 'basta try lng mag send', 'itu lng ung tinry ko', '2018-03-04', 0),
(11, 'lanz kamot kamot', 'kamot2x@gmail.com', 'kakamot lng ako', 'tpos amoy kamay pagtapos', '2018-03-04', 1),
(12, 'Vener', 'connecting@gmail.com', 'ang panget ni vener', 'sobra sobra', '2018-03-04', 0),
(13, 'wejlkwrjl', 'jlsadkjdf@d', 'afkjlaf', 'wew', '2018-03-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `cid` int(11) NOT NULL,
  `clogo` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cwelcome` varchar(255) NOT NULL,
  `cabout` text NOT NULL,
  `curl` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `ccontact` varchar(255) NOT NULL,
  `ctemplate` int(11) NOT NULL,
  `ccreated` date NOT NULL,
  `cmodified` date NOT NULL,
  `cstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `cuid` int(11) NOT NULL,
  `cuname` varchar(255) NOT NULL,
  `cuemail` varchar(255) NOT NULL,
  `cuaddress` varchar(255) NOT NULL,
  `cucontact` varchar(255) NOT NULL,
  `cucreated` date NOT NULL,
  `cumodified` date NOT NULL,
  `custatus` tinyint(4) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `eid` int(11) NOT NULL,
  `edate` date NOT NULL,
  `etime` time NOT NULL,
  `edetails` varchar(255) NOT NULL,
  `enumg` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cuid` int(11) NOT NULL,
  `ecreated` date NOT NULL,
  `emodified` date NOT NULL,
  `estatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_tbl`
--


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


-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE `service_tbl` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdescription` text NOT NULL,
  `svenue` varchar(255) NOT NULL,
  `sduration` time NOT NULL,
  `sprice` bigint(11) NOT NULL,
  `sgprice` int(11) NOT NULL,
  `screated` date NOT NULL,
  `smodified` date NOT NULL,
  `sstatus` tinyint(4) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tbl`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `amessage_tbl`
--
ALTER TABLE `amessage_tbl`
  ADD PRIMARY KEY (`amid`);

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`cuid`);

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `organizer_tbl`
--
ALTER TABLE `organizer_tbl`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amessage_tbl`
--
ALTER TABLE `amessage_tbl`
  MODIFY `amid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `company_tbl`
--
ALTER TABLE `company_tbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `cuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `organizer_tbl`
--
ALTER TABLE `organizer_tbl`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
