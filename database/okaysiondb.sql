-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 07:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_Code` varchar(15) NOT NULL,
  `Date_Of_Bill` date NOT NULL,
  `Amount_Of_Bill` int(20) NOT NULL,
  `Bill_Desc` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_Id` varchar(15) NOT NULL,
  `Cus_FName` char(30) NOT NULL,
  `Cus_LName` char(30) NOT NULL,
  `Cus_Birthdate` date NOT NULL,
  `Cus_ContactNum` int(15) NOT NULL,
  `Cus_Email.` varchar(30) NOT NULL,
  `Cus_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_Id` varchar(15) NOT NULL,
  `Event_Start_Date` date NOT NULL,
  `Event_End_Date` date NOT NULL,
  `Number_of_Guest` int(5) NOT NULL,
  `Calculated_Cost` int(20) NOT NULL,
  `Potential_Cost` int(20) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_status`
--

CREATE TABLE `event_status` (
  `Event_Type_Code` varchar(15) NOT NULL,
  `Event_Type` char(30) NOT NULL,
  `Event_Type_Desc` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `Org_ID` varchar(15) NOT NULL,
  `Org_FName` char(30) NOT NULL,
  `Org_LName` char(30) NOT NULL,
  `Org_Birthdate` date NOT NULL,
  `Org_ContactNum` int(15) NOT NULL,
  `Org_Email` varchar(30) NOT NULL,
  `Org_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `Payment_Id` varchar(15) NOT NULL,
  `Payment_Type` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
