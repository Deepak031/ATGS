-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 10:32 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `Name` varchar(20) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `Email` varchar(10) NOT NULL DEFAULT '',
  `Securityq` text NOT NULL,
  `securitya` text NOT NULL,
  `designation` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Email_2` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Name`, `username`, `password`, `Email`, `Securityq`, `securitya`, `designation`) VALUES
('Yash Narang', 'Yash', '1234', 'YASHNARANG', 'First Phone you bought of which company?', 'samsung', 'Student'),
('CSE GPCB', 'CSE', '1000', 'cse', 'what is Your favorite Color', 'blue', 'Head');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE IF NOT EXISTS `classrooms` (
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`name`, `status`) VALUES
('FF7', 1),
('FF5', 3),
('FF4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `examfirst`
--

CREATE TABLE IF NOT EXISTS `examfirst` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `subcode` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examsecond`
--

CREATE TABLE IF NOT EXISTS `examsecond` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `subcode` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examthird`
--

CREATE TABLE IF NOT EXISTS `examthird` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Day` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `subcode` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE IF NOT EXISTS `semester1` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '103<br>kr', '102<br>SP', '101<br>LS', '104<br>VU', '106<br>SA', '102p<br>SP, SP, SP'),
('tuesday', '104<br>VU', '103<br>kr', '102<br>SP', '101<br>LS', '106<br>SA', '104p<br>VU, VU, VU'),
('wednesday', '106<br>SA', '104<br>VU', '103<br>kr', '102<br>SP', '101<br>LS', '102p<br>SP, SP, SP'),
('thursday', '104<br>VU', '106<br>SA', '103<br>kr', '101<br>LS', '102<br>SP', '104p<br>VU, VU, VU'),
('friday', '101<br>LS', '106<br>SA', '104<br>VU', '102<br>SP', '103<br>kr', '-<br>-, -, -'),
('saturday', '102<br>SP', '101<br>LS', '106<br>SA', '103<br>kr', '104<br>VU', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE IF NOT EXISTS `semester2` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester2`
--

INSERT INTO `semester2` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '204<br>KU', '203<br>VU', '201<br>', '202<br>VU', '206<br>SA', '201p<br>, pb, ta'),
('tuesday', '202<br>VU', '204<br>KU', '203<br>VU', '201<br>', '206<br>SA', '203p<br>VU, ta, SA'),
('wednesday', '206<br>SA', '202<br>VU', '204<br>KU', '203<br>VU', '201<br>', '204p<br>KU, KU, KU'),
('thursday', '202<br>VU', '206<br>SA', '204<br>KU', '201<br>', '203<br>VU', '205p<br>SK, SK, SK'),
('friday', '201<br>', '206<br>SA', '202<br>VU', '203<br>VU', '204<br>KU', '204p<br>KU, KU, KU'),
('saturday', '203<br>VU', '201<br>', '204<br>KU', '206<br>SA', '202<br>VU', '205p<br>SK, SK, SK');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE IF NOT EXISTS `semester3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '303<br>ta', '308<br>SA', '304<br>SA', '-<br>-', '301<br>pb', '304p<br>ta, ta, ta'),
('tuesday', '304<br>SA', '301<br>pb', '303<br>ta', '302<br>ta', '-<br>-', '303p<br>SA, SA, SA'),
('wednesday', '302<br>ta', '304<br>SA', '301<br>pb', '303<br>ta', '308<br>SA', '305p<br>, , '),
('thursday', '308<br>SA', '302<br>ta', '304<br>SA', '301<br>pb', '303<br>ta', '306p<br>, , '),
('friday', '308<br>SA', '302<br>ta', '304<br>SA', '303<br>ta', '301<br>pb', '304p<br>ta, ta, ta'),
('saturday', '308<br>SA', '302<br>ta', '303<br>ta', '304<br>SA', '-<br>-', '303p<br>SA, SA, SA');

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE IF NOT EXISTS `semester4` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `semester5` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '504<br>', '511<br>ta', '503<br>pb', '502<br>', '508<br>LS', '501P<br>pb, pb, pb'),
('tuesday', '511<br>ta', '508<br>LS', '504<br>', '503<br>pb', '501<br>pb', '502P<br>, , '),
('wednesday', '501<br>pb', '511<br>ta', '508<br>LS', '504<br>', '502<br>', '503P<br>pb, pb, pb'),
('thursday', '502<br>', '508<br>LS', '501<br>pb', '511<br>ta', '503<br>pb', '501P<br>pb, pb, pb'),
('friday', '503<br>pb', '502<br>', '508<br>LS', '501<br>pb', '511<br>ta', '502P<br>, , '),
('saturday', '504<br>', '503<br>pb', '502<br>', '508<br>LS', '501<br>pb', '503P<br>pb, pb, pb');

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE IF NOT EXISTS `semester6` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `sess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  `sess` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sess`
--

INSERT INTO `sess` (`id`, `status`, `sess`) VALUES
(1, 'odd', 'jul-dec');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `department` varchar(50) NOT NULL,
  `isAlloted` int(1) NOT NULL,
  `allotedto` text NOT NULL,
  `allotedto2` text NOT NULL,
  `allotedto3` text NOT NULL,
  PRIMARY KEY (`subject_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject_name`, `course_type`, `semester`, `department`, `isAlloted`, `allotedto`, `allotedto2`, `allotedto3`) VALUES
('304p', 'Operating system', 'LAB', 3, 'Computer Engg.', 1, 't03', 't03', 't03'),
('303', 'Data structures', 'THEORY', 3, 'Computer Engg.', 1, 't03', '', ''),
('304', 'Operating system', 'THEORY', 3, 'Computer Engg.', 1, 't05', '', ''),
('303p', 'Data structures', 'LAB', 3, 'Computer Engg.', 1, 't05', 't05', 't05'),
('501', 'Web Technology', 'THEORY', 5, 'Computer Engg.', 1, 't02', '', ''),
('502', 'Java Programming', 'THEORY', 5, 'Computer Engg.', 1, 't01', '', ''),
('503', 'Hardware Installation & Maintenance', 'THEORY', 5, 'Computer Engg.', 1, 't02', '', ''),
('504', 'Software Engg.', 'THEORY', 5, 'Computer Engg.', 1, 't01', '', ''),
('511', 'Wireless Comunication', 'THEORY', 5, 'Computer Engg.', 1, 't03', '', ''),
('305p', 'Visual Basic', 'LAB', 3, 'Computer Engg.', 1, 't01', 't01', 't01'),
('306p', 'Prog. with C++', 'LAB', 3, 'Computer Engg.', 1, 't01', 't01', 't01'),
('501P', 'Web Technology', 'LAB', 5, 'Computer Engg.', 1, 't02', 't02', 't02'),
('502P', 'Java Programming', 'LAB', 5, 'Computer Engg.', 1, 't01', 't01', 't01'),
('503P', 'Hardware Installation & Maintenance', 'LAB', 5, 'Computer Engg.', 1, 't02', 't02', 't02'),
('301', 'Computer architecture', 'THEORY', 3, 'Computer Engg.', 1, 't02', '', ''),
('302', 'Data comm', 'THEORY', 3, 'Computer Engg.', 1, 't03', '', ''),
('308', 'Professional Activities', 'THEORY', 3, 'Computer Engg.', 1, 't05', '', ''),
('101', 'Communication skills', 'THEORY', 1, 'Computer Engg.', 1, 't07', '', ''),
('102', 'Physics', 'THEORY', 1, 'Computer Engg.', 1, 't08', '', ''),
('103', 'Mathematics', 'THEORY', 1, 'Computer Engg.', 1, 't06', '', ''),
('104', 'Computer FundaMentals', 'THEORY', 1, 'Computer Engg.', 1, 't04', '', ''),
('102p', 'Physics', 'LAB', 1, 'Computer Engg.', 1, 't08', 't08', 't08'),
('104p', 'Computer FundaMentals', 'LAB', 1, 'Computer Engg.', 1, 't04', 't04', 't04'),
('106', 'Professional Activities', 'THEORY', 1, 'Computer Engg.', 1, 't05', '', ''),
('508', 'Professional Activities', 'THEORY', 5, 'Computer Engg.', 1, 't07', '', ''),
('201', 'programming in c', 'THEORY', 2, 'Computer Engg.', 1, 't01', '', ''),
('203', 'Digital techniques', 'THEORY', 2, 'Computer Engg.', 1, 't04', '', ''),
('204', 'Basics of Electrical, Electronics, and Measurement', 'THEORY', 2, 'Computer Engg.', 1, 't10', '', ''),
('202', 'Environmental Engineering and Safety', 'THEORY', 2, 'Computer Engg.', 1, 't04', '', ''),
('201p', 'programming in c', 'LAB', 2, 'Computer Engg.', 1, 't01', 't02', 't03'),
('203p', 'Digital techniques', 'LAB', 2, 'Computer Engg.', 1, 't04', 't03', 't05'),
('204p', 'Basics of Electrical, Electronics, and Measurement', 'LAB', 2, 'Computer Engg.', 1, 't10', 't10', 't10'),
('205p', 'Electronic workshop', 'LAB', 2, 'Computer Engg.', 1, 't11', 't11', 't11'),
('206', 'Professional Activities', 'THEORY', 2, 'Computer Engg.', 1, 't05', '', ''),
('401', 'Computer Network', 'THEORY', 4, 'Computer Engg.', 1, 't03', '', ''),
('402', 'Database Management System', 'THEORY', 4, 'Computer Engg.', 1, 't01', '', ''),
('403', 'Linux and Shell Programming', 'THEORY', 4, 'Computer Engg.', 1, 't02', '', ''),
('404', 'Microprocessor & Interface', 'THEORY', 4, 'Computer Engg.', 1, 't02', '', ''),
('411', 'Entrepreneurship', 'THEORY', 4, 'Computer Engg.', 1, 't04', '', ''),
('402p', 'Database Management System', 'LAB', 4, 'Computer Engg.', 1, 't01', 't01', 't01'),
('404p', 'Microprocessor & Interface', 'LAB', 4, 'Computer Engg.', 1, 't02', 't02', 't02'),
('403p', 'Linux and Shell Programming', 'LAB', 4, 'Computer Engg.', 1, 't03', 't03', 't05'),
('408', 'Professional Activities', 'THEORY', 4, 'Computer Engg.', 1, 't05', '', ''),
('PW', 'Project Work', 'LAB', 6, 'Computer Engg.', 1, 't01', 't02', 't03'),
('601', 'Computer Graphics, Multimedia & Animation', 'THEORY', 6, 'Computer Engg.', 1, 't01', '', ''),
('601p', 'Computer Graphics, Multimedia & Animation', 'LAB', 6, 'Computer Engg.', 1, 't01', 't01', 't01'),
('622', 'Artificial Intelligence & Expert System (AI & ES)', 'THEORY', 6, 'Computer Engg.', 1, 't03', '', ''),
('622p', 'Artificial Intelligence & Expert System (AI & ES)', 'LAB', 6, 'Computer Engg.', 1, 't02', 't01', 't05'),
('612', 'Network Security and Management', 'THEORY', 6, 'Computer Engg.', 1, 't02', '', ''),
('612p', 'Network Security and Management', 'LAB', 6, 'Computer Engg.', 1, 't02', 't01', 't03'),
('606', 'Professional Activities', 'LAB', 6, 'Computer Engg.', 1, 't05', 't03', 't04');

-- --------------------------------------------------------

--
-- Table structure for table `t01`
--

CREATE TABLE IF NOT EXISTS `t01` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t01`
--

INSERT INTO `t01` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('friday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t02`
--

CREATE TABLE IF NOT EXISTS `t02` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t03` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t04` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t05` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t06` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t07` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t08` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t10` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `t11` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`day`)
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

CREATE TABLE IF NOT EXISTS `teachers` (
  `faculty_number` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `alias` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `exp` varchar(50) NOT NULL,
  PRIMARY KEY (`faculty_number`),
  UNIQUE KEY `faculty_number_2` (`faculty_number`),
  UNIQUE KEY `faculty_number_3` (`faculty_number`),
  KEY `faculty_number` (`faculty_number`),
  KEY `faculty_number_4` (`faculty_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`faculty_number`, `name`, `alias`, `designation`, `contact_number`, `emailid`, `quali`, `exp`) VALUES
('t03', 'tripti adkane', 'ta', 'Guest Faculty', '8268219735', 'kbcsdikbiduf', 'M.tech', '4'),
('t04', 'Vimla Uikey', 'VU', 'Guest Faculty', '2345678756', 'kjsdhaisuugdyud', 'Be/B.tech', '5'),
('t05', 'simpy awadhiya', 'SA', 'Guest Faculty', '9589413144', 'jhabsduydtwq', 'btech', '4'),
('t06', 'kalyani ranagire', 'kr', 'Guest Faculty', '8268219735', 'jhdfsudgfguf', 'btech', '6'),
('t07', 'Lokendra Shiv', 'LS', 'Guest Faculty', '9399757710', 'rdtsetyuiodp', 'Be', '5'),
('t02', 'Pragya Balley', 'pb', 'Guest Faculty', '5985895454', 'priyaballey32jdgfyud', 'M.tech', '4'),
('t08', 'Shraddha Pande', 'SP', 'Guest Faculty', '9399757710', 'gfghjyt6redfghj', 'M.phil', '5'),
('t10', 'Smt Kanti uikey', 'KU', 'Professor', '5985895454', 'dhgvhbhfdsg', 'mtech/ phd', '15'),
('t11', 'Saurabh kaithwas', 'SK', 'Assistant Professor', '9865326589', 'dskjcbgduyfeu', 'phd', '10'),
('t01', 'sharad dahate', 'SD', 'Guest Faculty', '9589413124', 'sharad.igec@gmail.com', 'btech', '6');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `lactures` int(10) NOT NULL,
  `time` text NOT NULL,
  PRIMARY KEY (`lactures`)
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
