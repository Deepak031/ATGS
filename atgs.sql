-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 05:48 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atgs`
--
CREATE DATABASE IF NOT EXISTS `atgs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `atgs`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Name` varchar(20) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `Email` varchar(10) NOT NULL DEFAULT '',
  `Securityq` text NOT NULL,
  `securitya` text NOT NULL,
  `designation` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Name`, `username`, `password`, `Email`, `Securityq`, `securitya`, `designation`) VALUES
('admin', 'ITJEC', '1234', 'YASHNARANG', 'First Phone you bought of which company?', 'samsung', 'Student'),
('CSE GPCB', 'CSE', '1000', 'cse', 'what is Your favorite Color', 'blue', 'Head');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`name`, `status`) VALUES
('2nd sem', 0),
('hhmkkc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dfghjk`
--

CREATE TABLE `dfghjk` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dfghjk`
--

INSERT INTO `dfghjk` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('friday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `examfirst`
--

CREATE TABLE `examfirst` (
  `sno` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `subcode` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examsecond`
--

CREATE TABLE `examsecond` (
  `sno` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `subcode` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examthird`
--

CREATE TABLE `examthird` (
  `sno` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `subcode` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h677`
--

CREATE TABLE `h677` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h677`
--

INSERT INTO `h677` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('friday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jvb`
--

CREATE TABLE `jvb` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jvb`
--

INSERT INTO `jvb` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester2`
--

INSERT INTO `semester2` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '204<br>KU', '203<br>VU', '201<br>', '202<br>VU', '206<br>SA', '201p<br>, pb, ta'),
('tuesday', '202<br>VU', '204<br>KU', '203<br>VU', '201<br>', '206<br>SA', '203p<br>VU, ta, SA'),
('wednesday', '206<br>SA', '202<br>VU', '204<br>KU', '203<br>VU', '201<bkjfgndfiughr>', '204p<br>KU, KU, KU'),
('thursday', '202<br>VU', '206<br>SA', '204<br>KU', '201<br>', '203<br>VU', '205p<br>SK, SK, SK'),
('friday', '201<br>', '206<br>SA', '202<br>VU', '203<br>VU', '204<br>KU', '204p<br>KU, KU, KU'),
('saturday', '203<br>VU', '201<br>', '204<br>KU', '206<br>SA', '202<br>VU', '205p<br>SK, SK, SK');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'e0305<br>, , '),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'e0305<br>, , '),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester4`
--

INSERT INTO `semester4` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '404<br>pb', '403<br>pb', '402<br>', '401<br>ta', '411<br>VU', '-<br>-, -, -'),
('tuesday', '404<br>pb', '411<br>VU', '403<br>pb', '402<br>', '401<br>ta', '402p<br>, , '),
('wednesday', '411<br>VU', '408<br>SA', '404<br>pb', '403<br>pb', '401<br>ta', '404p<br>pb, pb, pb'),
('thursday', '401<br>ta', '411<br>VU', '408<br>SA', '404<br>pb', '402<br>', '403p<br>ta, ta, SA'),
('friday', '402<br>', '411<br>VU', '401<br>ta', '408<br>SA', '403<br>pb', '-<br>-, -, -'),
('saturday', '403<br>pb', '402<br>', '401<br>ta', '404<br>pb', '408<br>SA', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester6`
--

INSERT INTO `semester6` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '622<br>ta', '601<br>', '612<br>pb', '-<br>-', '-<br>-', '-<br>-, -, -'),
('tuesday', '622<br>ta', '612<br>pb', '601<br>', '-<br>-', '-<br>-', '-<br>-, -, -'),
('wednesday', '612<br>pb', '622<br>ta', '-<br>-', '-<br>-', '-<br>-', '601p<br>, , '),
('thursday', '601<br>', '612<br>pb', '622<br>ta', '-<br>-', '-<br>-', '601p<br>, , '),
('friday', '601<br>', '622<br>ta', '612<br>pb', '-<br>-', '-<br>-', 'PW<br>, pb, ta'),
('saturday', '622<br>ta', '612<br>pb', '601<br>', '-<br>-', '-<br>-', '622p<br>pb, , SA');

-- --------------------------------------------------------

--
-- Table structure for table `sess`
--

CREATE TABLE `sess` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sess` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sess`
--

INSERT INTO `sess` (`id`, `status`, `sess`) VALUES
(1, 'odd', 'jul-dec');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `department` varchar(50) NOT NULL,
  `isAlloted` int(1) NOT NULL,
  `allotedto` text NOT NULL,
  `allotedto2` text NOT NULL,
  `allotedto3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject_name`, `course_type`, `semester`, `department`, `isAlloted`, `allotedto`, `allotedto2`, `allotedto3`) VALUES
('c090r', 'c++', 'THEORY', 2, 'Mechanical Engg.', 0, '', '', ''),
('e0305', 'edc', 'LAB', 3, 'Electronics Engg.', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t02`
--

CREATE TABLE `t02` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t02`
--

INSERT INTO `t02` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '504<br>FF5', '-<br>-', '503<br>FF5', '502<br>FF5', '301<br>FF4', '501P'),
('tuesday', '-<br>-', '301<br>FF4', '504<br>FF5', '503<br>FF5', '501<br>FF5', '-'),
('wednesday', '501<br>FF5', '-<br>-', '301<br>FF4', '504<br>FF5', '502<br>FF5', '503P'),
('thursday', '502<br>FF5', '-<br>-', '501<br>FF5', '301<br>FF4', '503<br>FF5', '501P'),
('friday', '503<br>FF5', '502<br>FF5', '-<br>-', '501<br>FF5', '301<br>FF4', '-'),
('saturday', '504<br>FF5', '503<br>FF5', '502<br>FF5', '-<br>-', '501<br>FF5', '503P');

-- --------------------------------------------------------

--
-- Table structure for table `t03`
--

CREATE TABLE `t03` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t03`
--

INSERT INTO `t03` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '303<br>FF4', '511<br>FF5', '-<br>-', '-<br>-', '-<br>-', '304p'),
('tuesday', '511<br>FF5', '-<br>-', '303<br>FF4', '302<br>FF4', '-<br>-', '-'),
('wednesday', '302<br>FF4', '511<br>FF5', '-<br>-', '303<br>FF4', '-<br>-', '-'),
('thursday', '-<br>-', '302<br>FF4', '-<br>-', '511<br>FF5', '303<br>FF4', '-'),
('friday', '-<br>-', '302<br>FF4', '-<br>-', '303<br>FF4', '511<br>FF5', '304p'),
('saturday', '-<br>-', '302<br>FF4', '303<br>FF4', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t04`
--

CREATE TABLE `t04` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t04`
--

INSERT INTO `t04` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '104<br>FF7', '-<br>-', '-'),
('tuesday', '104<br>FF7', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '104p'),
('wednesday', '-<br>-', '104<br>FF7', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '104<br>FF7', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '104p'),
('friday', '-<br>-', '-<br>-', '104<br>FF7', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '104<br>FF7', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t05`
--

CREATE TABLE `t05` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t05`
--

INSERT INTO `t05` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('friday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t06`
--

CREATE TABLE `t06` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t06`
--

INSERT INTO `t06` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '103<br>FF7', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '103<br>FF7', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '103<br>FF7', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '103<br>FF7', '-<br>-', '-<br>-', '-'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '103<br>FF7', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '103<br>FF7', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t07`
--

CREATE TABLE `t07` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t07`
--

INSERT INTO `t07` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '101<br>FF7', '-<br>-', '508<br>FF5', '-'),
('tuesday', '-<br>-', '508<br>FF5', '-<br>-', '101<br>FF7', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '508<br>FF5', '-<br>-', '101<br>FF7', '-'),
('thursday', '-<br>-', '508<br>FF5', '-<br>-', '101<br>FF7', '-<br>-', '-'),
('friday', '101<br>FF7', '-<br>-', '508<br>FF5', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '101<br>FF7', '-<br>-', '508<br>FF5', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t08`
--

CREATE TABLE `t08` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t08`
--

INSERT INTO `t08` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '102<br>FF7', '-<br>-', '-<br>-', '-<br>-', '102p'),
('tuesday', '-<br>-', '-<br>-', '102<br>FF7', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '102<br>FF7', '-<br>-', '102p'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '102<br>FF7', '-'),
('friday', '-<br>-', '-<br>-', '-<br>-', '102<br>FF7', '-<br>-', '-'),
('saturday', '102<br>FF7', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t10`
--

CREATE TABLE `t10` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t10`
--

INSERT INTO `t10` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t11`
--

CREATE TABLE `t11` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t11`
--

INSERT INTO `t11` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `faculty_number` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `alias` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `exp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`faculty_number`, `name`, `alias`, `designation`, `contact_number`, `emailid`, `quali`, `exp`) VALUES
('jvb', 'dfghn', 'kcj', 'Associate Professor', 'kbvcnjkm', 'yashnarang995@gmail.com', ' hbvnjlkcm;', '21');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `lactures` int(10) NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`lactures`, `time`) VALUES
(6, '3:00'),
(5, '2:00'),
(4, '1:30'),
(3, '12:30'),
(2, '11:30'),
(1, '10:30'),
(7, '4:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_2` (`Email`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `dfghjk`
--
ALTER TABLE `dfghjk`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `examfirst`
--
ALTER TABLE `examfirst`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `examsecond`
--
ALTER TABLE `examsecond`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `examthird`
--
ALTER TABLE `examthird`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `h677`
--
ALTER TABLE `h677`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `jvb`
--
ALTER TABLE `jvb`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester4`
--
ALTER TABLE `semester4`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester6`
--
ALTER TABLE `semester6`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `sess`
--
ALTER TABLE `sess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `t02`
--
ALTER TABLE `t02`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t03`
--
ALTER TABLE `t03`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t04`
--
ALTER TABLE `t04`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t05`
--
ALTER TABLE `t05`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t06`
--
ALTER TABLE `t06`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t07`
--
ALTER TABLE `t07`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t08`
--
ALTER TABLE `t08`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t10`
--
ALTER TABLE `t10`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t11`
--
ALTER TABLE `t11`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`faculty_number`),
  ADD UNIQUE KEY `faculty_number_2` (`faculty_number`),
  ADD UNIQUE KEY `faculty_number_3` (`faculty_number`),
  ADD KEY `faculty_number` (`faculty_number`),
  ADD KEY `faculty_number_4` (`faculty_number`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`lactures`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examfirst`
--
ALTER TABLE `examfirst`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `examsecond`
--
ALTER TABLE `examsecond`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `examthird`
--
ALTER TABLE `examthird`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sess`
--
ALTER TABLE `sess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
