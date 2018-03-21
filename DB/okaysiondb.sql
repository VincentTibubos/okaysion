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

INSERT INTO `company_tbl` (`cid`, `clogo`, `cname`, `cpass`, `cemail`, `cwelcome`, `cabout`, `curl`, `caddress`, `ccontact`, `ctemplate`, `ccreated`, `cmodified`, `cstatus`) VALUES
(13, '', 'opo3', '698d51a19d8a121ce581499d7b701668', 'wowmagic@galing3', '', '', '', '', '', 0, '0000-00-00', '2018-02-24', 0),
(15, '', 'asdfmsdfa', '202cb962ac59075b964b07152d234b70', '123@saddjkaslkj', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(16, '', 'jheremie', '202cb962ac59075b964b07152d234b70', 'jheremie10@gmail.com', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(17, '', 'johnpaul', '202cb962ac59075b964b07152d234b70', 'suckmydick@yahoo.com', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(19, '', 'vincentpo', '827ccb0eea8a706c4c34a16891f84e7b', 'vincent@gmail.com', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(20, '', 'raymart', '202cb962ac59075b964b07152d234b70', 'ray@gmail.com', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(21, '', 'via corp', '827ccb0eea8a706c4c34a16891f84e7b', 'vian22@gmail.com', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(22, '', '123', '827ccb0eea8a706c4c34a16891f84e7b', 'wew#@hhkjahsd', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(24, '', 'wewjp', '827ccb0eea8a706c4c34a16891f84e7b', 'wew@gmail', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(25, '', 'boka', '827ccb0eea8a706c4c34a16891f84e7b', 'boka@mart.gutz', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(26, '', 'hayyyys', '827ccb0eea8a706c4c34a16891f84e7b', 'lakasko@gmail.COM', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(28, '', 'macam', '202cb962ac59075b964b07152d234b70', 'geronimo@g', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(30, '', 'okklng', '827ccb0eea8a706c4c34a16891f84e7b', 'basta@wlalng', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(31, '', 'Sample2', '202cb962ac59075b964b07152d234b70', 'VC@gmail.com2', '', '', '', 'sa eskinita', '09158150262', 0, '2018-02-24', '2018-03-05', 1),
(32, '', 'joven montilla', '827ccb0eea8a706c4c34a16891f84e7b', 'joven@montilla', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 0),
(33, '', 'VIncent Cooperative2', '202cb962ac59075b964b07152d234b70', 'VC@gmail.com', 'kdafjlkasjflkajslkfjlka some random stuff', 'kdafjlkasjflkajslkfjlka some random stuff', 'lanz.com', 'jflkjdslfjalkjfdklasjd', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 2, '2018-02-24', '2018-03-11', 1),
(34, '', 'wew', '827ccb0eea8a706c4c34a16891f84e7b', 'wew@gmail.com', '', '', '', '', '', 0, '2018-02-24', '2018-02-24', 0),
(35, '', 'wow', '827ccb0eea8a706c4c34a16891f84e7b', 'wow@gmail.com', '', '', '', '', '', 0, '2018-02-24', '2018-02-24', 0),
(36, 'vlcsnap-2018-01-19-14h48m03s995.png', 'VIncent', '202cb962ac59075b964b07152d234b70', 'greenchay22@gmail.com', '', '', '', '', '', 0, '2018-02-25', '2018-03-10', 1),
(37, 'avatar.jpg', 'lanz kamot kamot lng', '202cb962ac59075b964b07152d234b70', 'lanz@backend.daw', '', '', '', '', '', 0, '2018-02-25', '2018-02-25', 1),
(38, 'avatar1.jpg', 'wewpona', '202cb962ac59075b964b07152d234b70', 'webpona@g', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(39, 'Capture.PNG', 'wew2', '202cb962ac59075b964b07152d234b70', 'vincent@gmail.com2', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(40, 'vlcsnap-2018-01-22-06h17m00s307.png', '2113', '202cb962ac59075b964b07152d234b70', 'wewdddsjjkdsa@cxsdds', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 0),
(41, 'arrray.png', 'fjdksljlskafjfl', '202cb962ac59075b964b07152d234b70', 'fdksjlksfjfldksjaslkf@jfdkjafdlk', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(42, 'conversion codes.png', '324432sdafsafdjafjdlk', '202cb962ac59075b964b07152d234b70', 'jlfkjdfaslkf@jlsdjl', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(43, 'compare ignore case.png', 'vincent2', '202cb962ac59075b964b07152d234b70', 'vincent@gmail', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(44, 'declare index array.png', 'we', '202cb962ac59075b964b07152d234b70', 'we@k', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 0),
(45, 'vlcsnap-2018-01-21-21h24m27s188.png', 'wqwqqw', '202cb962ac59075b964b07152d234b70', '23213@dsd', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(46, 'vlcsnap-2018-01-21-21h24m27s188.png', 'eehwjkh', '202cb962ac59075b964b07152d234b70', 'hfkjsdh@hkjhkj', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(47, 'avatar1.jpg', 'abamatindi', 'd41d8cd98f00b204e9800998ecf8427e', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(48, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 0),
(49, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(50, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(51, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(52, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(53, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(54, 'avatar1.jpg', 'abamatindi', '202cb962ac59075b964b07152d234b70', 'mal@kas', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 0),
(55, 'comments.png', 'vince', '202cb962ac59075b964b07152d234b70', 'bil@t', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(56, 'explode implode.png', 'Vincent22', '202cb962ac59075b964b07152d234b70', 'vince22@g', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(57, 'vlcsnap-2018-01-30-16h20m17s141.png', 'vincent1312', '202cb962ac59075b964b07152d234b70', '123213123@djkhkj', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(58, 'ternary.png', 'wiw', '202cb962ac59075b964b07152d234b70', 'wiw@gm', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(59, 'patricia29.png', 'patricia', '202cb962ac59075b964b07152d234b70', 'patrici@gutz', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(60, 'change type.png', 'binsent', '202cb962ac59075b964b07152d234b70', 'bin@nat', '', '', '', '', '', 0, '2018-02-26', '2018-02-26', 1),
(61, 'avatar1.jpg', 'jlksjfljflsjflkf', '827ccb0eea8a706c4c34a16891f84e7b', 'ljkfjlsfdjlfk@hkjhkj', '', '', '', '', '', 0, '2018-03-04', '2018-03-04', 1),
(62, 'avatar1.jpg', 'vincentrdklasld', '827ccb0eea8a706c4c34a16891f84e7b', 'vinvdk@kjhjkh', '', '', '', '', '', 0, '2018-03-04', '2018-03-04', 1),
(63, 'Untitled.png', 'Vicente', 'e10adc3949ba59abbe56e057f20f883e', 'vicente@gmail.com', '', '', '', '', '', 0, '2018-03-04', '2018-03-04', 1),
(64, 'vlcsnap-2018-01-21-22h42m28s473.png', 'fsjksldfjfls', '202cb962ac59075b964b07152d234b70', 'weww@g', '', '', '', '', '', 0, '2018-03-04', '2018-03-04', 1),
(65, 'avatar1.jpg', 'jkflsajfa', '202cb962ac59075b964b07152d234b70', 'fksdjflk@jfdlksjdf', '', '', '', '', '', 0, '2018-03-04', '2018-03-04', 1),
(66, 'avatar1.jpg', 'vincent2223', '202cb962ac59075b964b07152d234b70', 'vincent@wew3', '', '', '', '', '', 0, '2018-03-05', '2018-03-10', 1),
(67, 'avatar1.jpg', 'adas2', 'e10adc3949ba59abbe56e057f20f883e', 'wewewewewwe@2', '', '', '', '', '', 0, '2018-03-05', '2018-03-05', 1),
(68, 'avatar1.jpg', 'dadfsdfsa', 'e10adc3949ba59abbe56e057f20f883e', 'ewwew@dsdssd', '', '', '', '', '', 0, '2018-03-05', '2018-03-05', 1),
(69, 'avatar1.jpg', 'vincentsaaas2', 'e10adc3949ba59abbe56e057f20f883e', 'lkdsjsadlk@jlkjjk2', '', '', '', '', '', 0, '2018-03-05', '2018-03-05', 0),
(70, 'avatar1.jpg', 'vuvu', '202cb962ac59075b964b07152d234b70', 'vuvu@gmail.com', '', '', '', '', '', 0, '2018-03-05', '2018-03-05', 1),
(71, 'avatar1.jpg', 'vincentti', '202cb962ac59075b964b07152d234b70', 'vincentti@gmail.com', '', '', '', '', '', 0, '2018-03-05', '2018-03-05', 1),
(72, 'avatar1.jpg', 'wewr', '202cb962ac59075b964b07152d234b70', 'wewr@gma', '', '', '', '', '', 0, '2018-03-05', '2018-03-05', 1),
(73, 'avatar1.jpg', 'lanz2', '202cb962ac59075b964b07152d234b70', 'lanz@gmail.com2', '', '', '', '', '', 0, '2018-03-06', '2018-03-06', 1),
(74, 'Capture3.PNG', 'hahahahhahaa', '101a6ec9f938885df0a44f20458d2eb4', 'hjuj@jkjhkj', '', '', '', '', '', 0, '2018-03-06', '2018-03-06', 1),
(75, 'Capture.PNG', 'hehehe', 'ffe553694f5096471590343432359e02', 'hehehe@gmail.com', '', '', '', '', '', 0, '2018-03-06', '2018-03-06', 1),
(76, 'wew.PNG', 'Amaya company', '202cb962ac59075b964b07152d234b70', 'amaya@gmail.com', '', '', '', '', '', 0, '2018-03-06', '2018-03-06', 1),
(77, 'avatar1.jpg', ' fdjkhsafkjh', '202cb962ac59075b964b07152d234b70', 'kjhaskjdfhkash@hkjhkj', 'dsklfkjalk', 'klajfjals', 'wow.com', '232', '2323223', 1, '2018-03-08', '2018-03-08', 1),
(78, 'avatar1.jpg', 'wew2222', '827ccb0eea8a706c4c34a16891f84e7b', 'vince@corp', 'hello powszxc', 'ang saya saya ko po ngayun no', 'wew.com', 'ayyy wow nman', '09158150262', 2, '2018-03-08', '2018-03-10', 1),
(79, 'avatar1.jpg', 'kresta', '202cb962ac59075b964b07152d234b70', 'kresta@gmail.com', 'hi po', 'fhkjdashgfgsakjdfhasdkjdhdfkj', 'kresta.com', 'khit saan', '12321312312231', 1, '2018-03-10', '2018-03-10', 1),
(80, 'avatar1.jpg', 'jheremiev2', '202cb962ac59075b964b07152d234b70', 'jheremie10v2@gmail.com', 'ako ay scrub', 'wlang priority', 'wlakwenta.com', 'khit san pde', '7324198743928', 0, '2018-03-10', '2018-03-10', 1),
(81, '', 'bona', '202cb962ac59075b964b07152d234b70', 'bona@gmail.com', '', '', '', '', '', 0, '2018-03-10', '2018-03-10', 1),
(82, '', 'teves', '202cb962ac59075b964b07152d234b70', 'teves@gmail.com', '', '', '', '', '', 0, '2018-03-10', '2018-03-10', 1),
(83, '', 'TUP1', '202cb962ac59075b964b07152d234b70', 'lala2@gmail.com', 'hahahaaha\'\r\njehhehehehehe\r\nhhihihi\r\nparang k=joke', '', 'tupjoker.com', '', '', 1, '2018-03-11', '2018-03-11',
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

INSERT INTO `customer_tbl` (`cuid`, `cuname`, `cuemail`, `cuaddress`, `cucontact`, `cucreated`, `cumodified`, `custatus`, `cid`) VALUES
(4, 'vincdent2', 'vincent2@gmail.com', 'bandang san marcelino', '09158150262', '2018-02-24', '2018-02-24', 1, 31),
(5, 'vincentpoako3', 'vincent@gmail.com3', '', '', '0000-00-00', '2018-02-24', 1, 33),
(6, '123', 'wew@gmail.com', '', '', '0000-00-00', '0000-00-00', 0, 33),
(7, 'vincent', 'vincent@gmail.com', '', '', '2018-02-24', '2018-02-24', 0, 33),
(8, 'customer2', 'customer2@gmial.com', '', '', '2018-02-24', '2018-02-24', 1, 33),
(9, 'vener2', 'vener@gmail.com2', 'sa gilid', '09158150262', '0000-00-00', '2018-02-26', 1, 58),
(10, 'vener', 'vener@gmail.com', 'sa gilid', '09158150262', '0000-00-00', '0000-00-00', 1, 58),
(11, 'wow', 'wow@gma', '', '', '2018-02-26', '2018-02-26', 0, 58),
(12, 'qw', 'vincent@ss', '', '', '2018-02-26', '2018-02-26', 1, 59),
(13, 'bona2', 'bona@gmail.com', '', '', '2018-02-27', '2018-02-27', 1, 39),
(14, 'joram', 'vincent@sdjkhds', '', '', '2018-03-04', '2018-03-04', 1, 33),
(15, 'weww', 'fhkjadhfkjfh@hkfajfh', '', '', '2018-03-04', '2018-03-04', 1, 63),
(16, 'vincent', 'vincent@gmail.com', '', '', '2018-03-04', '2018-03-04', 1, 63),
(17, 'wew', 'wew@gmail.com', '', '', '2018-03-04', '2018-03-04', 1, 63),
(18, 'wow', 'wow@gma', '', '', '2018-03-04', '2018-03-04', 1, 63),
(19, 'wow', 'wow@gma', '', '', '2018-03-04', '2018-03-04', 1, 33),
(20, 'vincent', 'vincent@gmail.com', '', '', '2018-03-05', '2018-03-05', 1, 66),
(21, 'vincent2', 'vincent@gmail.com2', '', '', '2018-03-05', '2018-03-05', 1, 70),
(22, 'vincent', 'vincent@gmail.com', '', '', '2018-03-05', '2018-03-05', 1, 70),
(23, 'weew', 'vincent@gmial.com', '', '', '2018-03-05', '2018-03-05', 1, 71),
(24, 'weweew2', 'wewe@dsds2', '', '', '2018-03-05', '2018-03-05', 1, 72),
(25, 'Haha', 'lalala@gmail.comm', '', '', '2018-03-11', '2018-03-11', 0, 83),
(26, 'lanzki', 'lanz@desu', '', '', '2018-03-11', '2018-03-11', 1, 83);

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

INSERT INTO `event_tbl` (`eid`, `edate`, `etime`, `edetails`, `enumg`, `sid`, `cid`, `cuid`, `ecreated`, `emodified`, `estatus`) VALUES
(1, '2018-02-08', '00:00:00', 'wew', 3, 1, 31, 4, '0000-00-00', '0000-00-00', 0),
(2, '2018-02-07', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(3, '2018-02-08', '00:00:00', 'so un po no', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(4, '2018-02-16', '00:00:00', 'panget si vener', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(5, '2018-02-06', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(6, '2018-02-07', '00:00:00', '2', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(7, '2018-02-05', '00:00:00', '23', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(8, '2018-02-09', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(9, '2018-02-01', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(10, '2018-02-10', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(11, '2018-02-18', '00:00:00', 'feb 18', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(12, '2018-02-13', '00:00:00', 'feb 13', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(13, '2018-02-21', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(14, '2018-02-02', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(15, '2018-02-15', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(16, '2018-02-14', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(17, '2018-02-14', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(18, '2018-02-11', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(19, '2018-02-10', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(20, '2018-02-10', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(21, '2018-02-04', '00:00:00', '4', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(22, '2018-02-06', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(23, '2018-02-22', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(24, '2018-02-24', '00:00:00', 'wow', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(25, '2018-02-17', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(26, '2018-02-20', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(27, '2018-02-25', '00:00:00', 'wew', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(28, '2018-02-26', '00:00:00', 'testing2', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 0),
(29, '2018-03-14', '10:45:00', 'hmmm di po alam', 0, 3, 33, 5, '0000-00-00', '0000-00-00', 0),
(30, '2018-03-16', '18:34:00', 'venue2', 0, 3, 33, 5, '0000-00-00', '2018-03-10', 1),
(31, '2018-02-25', '09:25:00', 'medyo malupit ako nu', 0, 3, 33, 5, '0000-00-00', '0000-00-00', 1),
(32, '2018-03-21', '04:45:00', 'wew', 0, 3, 33, 5, '0000-00-00', '2018-02-25', 1),
(33, '2018-03-16', '10:45:00', 'd na masya', 0, 4, 33, 8, '0000-00-00', '2018-02-25', 1),
(34, '2018-02-27', '09:45:00', 'dun ako magisa lng :(', 0, 3, 33, 5, '2018-02-25', '2018-02-25', 1),
(35, '2018-02-28', '16:45:00', 'wew', 0, 3, 33, 5, '2018-02-25', '2018-02-25', 1),
(36, '2018-03-16', '18:34:00', 'venue', 0, 3, 33, 5, '2018-02-25', '2018-02-25', 1),
(37, '2018-04-12', '05:25:00', 'wewewew', 0, 4, 33, 8, '2018-02-25', '2018-02-25', 1),
(38, '2018-02-26', '09:45:00', 'wlang lalagay dto', 0, 0, 38, 0, '2018-02-26', '2018-02-26', 1),
(39, '2018-02-27', '13:20:00', 'upakan ang mga demonyo', 0, 9, 58, 10, '2018-02-26', '2018-02-26', 1),
(40, '2018-03-01', '09:45:00', 'wew', 0, 9, 58, 9, '2018-02-26', '2018-02-26', 1),
(41, '2018-02-26', '17:13:00', 'wew', 0, 6, 59, 12, '2018-02-26', '2018-02-26', 1),
(42, '2018-02-26', '17:15:00', '232', 0, 9, 58, 9, '2018-02-26', '2018-02-26', 1),
(43, '2018-02-28', '17:45:00', 'may pasok2', 0, 14, 39, 13, '2018-02-27', '2018-02-27', 1),
(44, '2018-03-04', '10:50:00', 'sasdsdsd', 0, 3, 33, 5, '2018-03-04', '2018-03-04', 1),
(45, '2018-03-22', '05:25:00', 'maraming gagawin hayyys :(2', 0, 16, 66, 20, '2018-03-05', '2018-03-05', 1),
(46, '2018-03-05', '09:45:00', 'wew', 0, 18, 70, 22, '2018-03-05', '2018-03-05', 1),
(47, '2018-03-05', '12:53:00', 'qsasa', 0, 17, 70, 21, '2018-03-05', '2018-03-05', 1),
(48, '2018-03-05', '05:25:00', 'nangnawalay iba na ang mahal', 0, 19, 71, 23, '2018-03-05', '2018-03-05', 1),
(49, '2018-03-05', '09:45:00', 'wew', 0, 20, 72, 24, '2018-03-05', '2018-03-05', 1),
(50, '2018-03-13', '09:45:00', 'wew', 0, 20, 72, 24, '2018-03-05', '2018-03-05', 1),
(51, '2018-03-21', '17:25:00', 'papatqayin c amaya', 0, 5, 33, 14, '2018-03-06', '2018-03-06', 1),
(52, '2018-03-23', '09:20:00', 'lanz supot', 0, 22, 83, 26, '2018-03-11', '2018-03-11', 1);

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

INSERT INTO `schedule` (`id`, `date`, `details`) VALUES
(1, '2018-02-23', 'wlang pasok chill lng'),
(38, '2018-03-27', 'wew'),
(39, '2018-04-05', 'wew'),
(40, '2018-04-06', 'wew'),
(41, '2018-04-12', 'wew'),
(42, '2018-04-11', 'wew'),
(43, '2018-04-03', 'awwtsu boiz'),
(44, '2018-04-10', 'sampu mga daliri ko yes'),
(45, '2018-04-11', 'patay sampu lng :('),
(46, '2018-04-12', 'GG dapat 20 pla X|'),
(47, '2018-04-05', 'ang lupet pre'),
(48, '2018-04-05', 'ang lupet pre47'),
(49, '2018-04-06', 'wew40'),
(50, '2018-04-04', 'hayyys'),
(51, '2018-04-04', 'hayyys'),
(52, '2018-04-07', 'wew'),
(53, '2018-04-02', 'wew'),
(54, '2018-04-09', 'qw'),
(55, '2018-04-17', 'aww'),
(56, '2018-04-01', 'we'),
(57, '2018-04-03', 'wew'),
(58, '2018-04-08', '232'),
(59, '2018-04-14', 'wew'),
(60, '2018-04-27', 'wew'),
(61, '2018-04-21', 'wew'),
(62, '2018-03-08', 'wew'),
(63, '2018-03-09', 'wew'),
(64, '2018-03-16', 'wew'),
(65, '2018-03-23', 'wew'),
(66, '2018-05-09', 'may 9'),
(67, '2018-05-11', 'wew'),
(68, '2018-05-10', 'dsdsffsd'),
(69, '2018-05-08', 'dsds'),
(70, '2018-05-12', 'wew'),
(71, '2018-05-12', 'we'),
(72, '2018-05-18', 'wew'),
(73, '2018-05-19', 'wew'),
(74, '2018-05-13', 'wew'),
(75, '2018-05-16', 'wew'),
(76, '2018-05-15', 'wew'),
(77, '2018-05-07', 'awwwww7'),
(78, '2018-05-03', 'wew'),
(79, '2018-05-04', 'wew'),
(80, '2018-05-05', 'wew'),
(81, '2018-05-17', '232'),
(82, '2018-05-01', 'qwe'),
(83, '2018-05-24', 'awww'),
(84, '2018-05-14', 'wew'),
(85, '2018-05-03', 'wwewewewwe');

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

INSERT INTO `service_tbl` (`sid`, `sname`, `sdescription`, `svenue`, `sduration`, `sprice`, `sgprice`, `screated`, `smodified`, `sstatus`, `cid`) VALUES
(1, 'tambayan package2', 'free beer and some girls2', 'sa kanto', '00:02:00', 2000, 100, '2018-02-24', '2018-02-24', 0, 33),
(2, 'sabaw', 'wla na po libre', '', '00:00:00', 0, 0, '0000-00-00', '0000-00-00', 0, 33),
(3, 'serviceno3', 'malupit', 'wew', '00:00:00', 12, 0, '2018-02-24', '2018-02-25', 1, 33),
(4, 'service1', 'service na malupit to wew', 'sasasa', '00:00:00', 41208, 0, '2018-02-24', '2018-03-04', 1, 33),
(5, 'serviceno.2', 'wlang khit na anung dagdag', '', '00:00:00', 90000, 0, '2018-02-25', '2018-02-25', 1, 33),
(6, 'wew2', 'eeqfsda2', 'qweewqeqe2', '00:00:00', 1200004, 0, '2018-02-25', '2018-02-26', 1, 59),
(7, 'serviceno34', '4', '4', '00:00:00', 44, 0, '2018-02-25', '2018-02-25', 1, 33),
(8, 'Para saken lng', 'kse wlang kami', 'sad nu?', '00:00:00', 1, 0, '2018-02-26', '2018-02-26', 1, 36),
(9, 'service ko', 'madaming sabaw', 'sa gilid ;)', '00:00:00', 123, 0, '2018-02-26', '2018-02-26', 1, 58),
(10, 'vincent', '23', '121', '00:00:00', 4433, 0, '2018-02-26', '2018-02-26', 1, 58),
(11, 'wew212212112', 'eeqfsda2212121', 'qweewqeqe21212', '00:00:00', 12000046, 0, '2018-02-26', '2018-02-26', 1, 59),
(12, 'wew', 'wew', '123', '00:00:00', 123, 0, '2018-02-26', '2018-02-26', 1, 59),
(13, 'jdfkjsdfl', 'jkfjaslj', 'jkljsaflk', '00:00:00', 0, 0, '2018-02-26', '2018-02-26', 1, 59),
(14, 'bona', 'bona', 'bona', '00:00:00', 1231, 0, '2018-02-27', '2018-02-27', 1, 39),
(15, 'jklsdfksdajflsdf', 'fdsajdsfjksfda', 'fjhdfsakjasj', '00:00:00', 9223372036854775807, 0, '2018-03-04', '2018-03-04', 1, 33),
(16, 'vincent', 'wewew', 'wewweoi', '00:00:00', 12232, 0, '2018-03-05', '2018-03-05', 1, 66),
(17, 'vincent3', 'vincent3', 'vincent3', '00:00:00', 120, 0, '2018-03-05', '2018-03-05', 1, 70),
(18, 'vincent2', 'vincent2', 'vincent', '00:00:00', 2, 0, '2018-03-05', '2018-03-05', 1, 70),
(19, 'jflksdjdlksj', 'jsfkladjlfkjafl', 'lkjslajflka', '00:00:00', 32, 0, '2018-03-05', '2018-03-05', 1, 71),
(20, 'jkhfdjksadhfk3', 'assaas3', '3', '00:00:00', 12, 0, '2018-03-05', '2018-03-05', 1, 72),
(21, 'jkhfdjksadhfk2', 'assaas2', '2', '00:00:00', 22, 0, '2018-03-05', '2018-03-05', 1, 72),
(22, 'Wedding', 'Tali', 'Church', '00:00:00', 100, 0, '2018-03-11', '2018-03-11', 1, 83);

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
