-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 02:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `account_type` varchar(15) NOT NULL,
  `image_path` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `password`, `faculty_id`, `account_type`, `image_path`, `status`) VALUES
('1003423', 'rachel', 1, 'admin', '32563495_10214899388851090_7077005131891343360_n.jpg', 1),
('1242342', 'monina', 3, 'faculty', '7e2eb7fd-d837-4520-ba60-6140ccb28d88.jpg', 1),
('13142415', '2b757e', 2, 'faculty', 'undefined', 1),
('135341', 'lyn123', 5, 'faculty', 'undefined', 1),
('321423', 'dustin', 4, 'faculty', '12305646_958990620814307_681912155_n.jpg', 1),
('35254658', 'ed1782', 7, 'faculty', 'IMG_0801.jpg', 1),
('35465346', 'c6a0f7', 8, '', 'undefined', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(5) NOT NULL,
  `course_desc` varchar(80) NOT NULL,
  `dept` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_desc`, `dept`, `status`) VALUES
(1, 'BSIT', 'Bachelor of Science in Information Technology', 1, 1),
(2, 'BSCS', 'Bachelor of Science in Computer Science', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `curriculum_id` int(11) NOT NULL,
  `curriculum_yr` int(11) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `year_lvl` varchar(20) NOT NULL,
  `course` int(11) NOT NULL,
  `subj_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curriculum_id`, `curriculum_yr`, `sem`, `year_lvl`, `course`, `subj_code`) VALUES
(1, 2, '1st', '1st', 1, 1),
(2, 2, '1st', '1st', 1, 2),
(3, 2, '1st', '1st', 1, 3),
(4, 2, '1st', '1st', 1, 4),
(5, 2, '1st', '1st', 1, 5),
(6, 2, '1st', '1st', 1, 6),
(7, 2, '1st', '1st', 1, 7),
(8, 2, '1st', '1st', 1, 8),
(9, 2, '1st', '2nd', 1, 16),
(10, 2, '1st', '2nd', 1, 17),
(11, 2, '1st', '2nd', 1, 18),
(12, 2, '1st', '2nd', 1, 19),
(13, 2, '1st', '2nd', 1, 20),
(14, 2, '1st', '2nd', 1, 21),
(15, 2, '1st', '2nd', 1, 22),
(16, 2, '1st', '2nd', 1, 23),
(17, 2, '1st', '3rd', 1, 32),
(18, 2, '1st', '3rd', 1, 33),
(19, 2, '1st', '3rd', 1, 34),
(20, 2, '1st', '3rd', 1, 35),
(21, 2, '1st', '3rd', 1, 36),
(22, 2, '1st', '3rd', 1, 37),
(23, 2, '1st', '3rd', 1, 38),
(24, 2, '1st', '4th', 1, 48),
(25, 2, '1st', '4th', 1, 49),
(26, 2, '1st', '4th', 1, 50),
(27, 2, '1st', '4th', 1, 51),
(28, 2, '1st', '4th', 1, 52),
(29, 2, '1st', '4th', 1, 53),
(30, 2, '1st', '4th', 1, 55),
(31, 2, '1st', '4th', 1, 56),
(32, 2, '2nd', '1st', 1, 9),
(33, 2, '2nd', '1st', 1, 10),
(34, 2, '2nd', '1st', 1, 11),
(35, 2, '2nd', '1st', 1, 12),
(36, 2, '2nd', '1st', 1, 13),
(37, 2, '2nd', '1st', 1, 14),
(38, 2, '2nd', '1st', 1, 15),
(39, 2, '2nd', '2nd', 1, 24),
(40, 2, '2nd', '2nd', 1, 25),
(41, 2, '2nd', '2nd', 1, 26),
(42, 2, '2nd', '2nd', 1, 27),
(43, 2, '2nd', '2nd', 1, 28),
(44, 2, '2nd', '2nd', 1, 29),
(45, 2, '2nd', '2nd', 1, 30),
(46, 2, '2nd', '2nd', 1, 31);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_year`
--

CREATE TABLE `curriculum_year` (
  `curr_year_id` int(11) NOT NULL,
  `curr_year_desc` varchar(4) NOT NULL,
  `is_used` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum_year`
--

INSERT INTO `curriculum_year` (`curr_year_id`, `curr_year_desc`, `is_used`) VALUES
(1, '2011', 0),
(2, '2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_code` varchar(10) NOT NULL,
  `dept_desc` varchar(160) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_code`, `dept_desc`, `status`) VALUES
(1, 'DIT', 'Department of Information Technology', 1),
(2, 'DCS', 'Department of Computer Science', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educ_bg`
--

CREATE TABLE `educ_bg` (
  `educ_bg_id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `name_of_school` varchar(100) NOT NULL,
  `basic_educ_degree` varchar(100) NOT NULL,
  `yr_graduated` char(4) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educ_bg`
--

INSERT INTO `educ_bg` (`educ_bg_id`, `level`, `name_of_school`, `basic_educ_degree`, `yr_graduated`, `faculty_id`, `status`) VALUES
(1, 'College', '', '', '', 1, 1),
(2, 'College', 'PUP', 'BIT', '2000', 1, 1),
(5, 'College', 'MU', 'BSECE', '2010', 3, 1),
(6, 'College', 'PUPT', 'BSIT', '2017', 4, 1),
(7, 'Masteral Degree', 'PUP', 'MIT', '2024', 4, 1),
(8, 'College', 'PUP', 'BSIT', '2019', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `evaluation_id` int(11) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `rating` decimal(6,4) NOT NULL,
  `rating_desc` varchar(20) NOT NULL,
  `dept` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`evaluation_id`, `acad_yr`, `sem`, `rating`, `rating_desc`, `dept`, `faculty_id`) VALUES
(1, '2016‐2017', '2nd', '95.6789', 'OUTSTANDING', 1, 3),
(2, '2017‐2018', '2nd', '61.4534', 'SATISFACTORY', 1, 5),
(3, '2017‐2018', '1st', '69.7496', 'SATISFACTORY', 1, 3),
(4, '2017‐2018', '2nd', '77.7826', 'VERY SATISFACTORY', 1, NULL),
(5, '2016‐2017', '2nd', '69.9070', 'SATISFACTORY', 1, 5),
(6, '2016‐2017', '2nd', '88.1840', 'VERY SATISFACTORY', 1, 1),
(7, '2017‐2018', '1st', '84.7710', 'VERY SATISFACTORY', 2, 2),
(8, '2017‐2018', '1st', '80.4268', 'VERY SATISFACTORY', 1, 5),
(10, '2016‐2017', '2nd', '86.3714', 'VERY SATISFACTORY', 2, 2),
(11, '2017‐2018', '1st', '82.2962', 'VERY SATISFACTORY', 1, 8),
(12, '2017‐2018', '2nd', '90.4920', 'VERY SATISFACTORY', 1, 8),
(13, '2017‐2018', '2nd', '85.8794', 'VERY SATISFACTORY', 2, 2),
(14, '2016‐2017', '2nd', '55.4782', 'SATISFACTORY', 1, 4),
(15, '2017‐2018', '2nd', '74.3890', 'VERY SATISFACTORY', 1, NULL),
(16, '2017‐2018', '2nd', '92.8084', 'OUTSTANDING', 1, 1),
(17, '2016‐2017', '2nd', '80.1950', 'VERY SATISFACTORY', 1, 8),
(18, '2017‐2018', '1st', '80.9087', 'VERY SATISFACTORY', 1, 1),
(19, '2017‐2018', '1st', '67.8478', 'SATISFACTORY', 1, 4),
(20, '2017‐2018', '2nd', '92.8000', 'OUTSTANDING', 1, 3),
(21, '2017‐2018', '2nd', '87.6986', 'VERY SATISFACTORY', 1, 4),
(22, '2017‐2018', '2nd', '68.0702', 'SATISFACTORY', 1, NULL),
(23, '2017‐2018', '1st', '69.6470', 'SATISFACTORY', 1, 7),
(24, '2017‐2018', '2nd', '69.6470', 'SATISFACTORY', 1, 7),
(25, '2016‐2017', '2nd', '69.7496', 'SATISFACTORY', 1, 7),
(26, '2016‐2017', '1st', '61.4534', 'SATISFACTORY', 1, 4),
(27, '2016‐2017', '1st', '93.8084', 'OUTSTANDING', 1, 1),
(28, '2016‐2017', '1st', '91.8044', 'OUTSTANDING', 2, 2),
(29, '2016‐2017', '1st', '92.8000', 'OUTSTANDING', 1, 3),
(30, '2016‐2017', '1st', '87.6543', 'VERY SATISFACTORY', 1, 5),
(31, '2016‐2017', '1st', '80.1950', 'VERY SATISFACTORY', 1, 7),
(32, '2016‐2017', '1st', '90.1234', 'VERY SATISFACTORY', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civil_status` varchar(15) DEFAULT NULL,
  `citizenship` varchar(80) DEFAULT NULL,
  `residential_address` varchar(100) DEFAULT NULL,
  `rzip_code` char(4) DEFAULT NULL,
  `permanent_address` varchar(100) DEFAULT NULL,
  `pzip_code` char(4) DEFAULT NULL,
  `faculty_type` int(11) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `lname`, `fname`, `mname`, `email`, `contact_no`, `date_of_birth`, `gender`, `civil_status`, `citizenship`, `residential_address`, `rzip_code`, `permanent_address`, `pzip_code`, `faculty_type`, `dept`, `status`) VALUES
(1, 'Nayre', 'Rachel', 'Atian', 'rachelnayre@pup.com', '09124345653', '1984-10-10', 'female', 'Single', 'Filipino', '', '', '', '', 3, 1, 1),
(2, 'Fabregas', 'Aleta', '', 'afabregas@pup.com', '09103234354', '1970-03-13', 'female', '', '', '', '', '', '', 3, 2, 1),
(3, 'Barretto', 'Monina', '', 'mbarretto@pup.com', '09234321434', '1975-12-12', 'female', 'Single', '', '', '', '', '', 1, 1, 1),
(4, 'Santos', 'John Dustin', '', 'jsantos@pup.com', '09242353345', '1996-05-23', 'male', 'Single', '', '', '', '', '', 5, 1, 1),
(5, 'Dastas', 'Lydinar', '', 'ldastas@pup.com', '09123434543', '1973-01-23', 'female', '', '', '', '', '', '', 1, 1, 1),
(7, 'Buena', 'Annthonite', 'Nanez', 'annthoniteb@gmail.com', '09485044516', '1999-09-02', 'female', '', '', '', '', '', '', 1, 1, 1),
(8, 'Salvador', 'Donn ', '', 'salvador_donn@gmail.com', '09124345653', '1985-01-01', 'male', '', '', '', '', '', '', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_load_type`
--

CREATE TABLE `faculty_load_type` (
  `load_type_id` int(11) NOT NULL,
  `fac_type_desc` int(11) NOT NULL,
  `fac_load_desc` varchar(50) NOT NULL,
  `num_hrs` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_load_type`
--

INSERT INTO `faculty_load_type` (`load_type_id`, `fac_type_desc`, `fac_load_desc`, `num_hrs`, `status`) VALUES
(7, 1, 'Regular Load', 15, 1),
(8, 1, 'Advising Time', 10, 1),
(9, 1, 'Part time Load', 12, 1),
(10, 3, 'Regular Load', 6, 1),
(11, 3, 'Office Hours', 34, 1),
(12, 3, 'Part Time Load', 12, 1),
(13, 3, 'Night Office', 15, 1),
(14, 5, 'Part Time Load', 12, 1),
(15, 5, 'Temporary Substitution ', 30, 1),
(16, 1, 'Temporary Substitution', 15, 1),
(17, 3, 'Temporary Substitution', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_spec`
--

CREATE TABLE `faculty_spec` (
  `fac_spec_id` int(11) NOT NULL,
  `spec_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faculty_spec`
--

INSERT INTO `faculty_spec` (`fac_spec_id`, `spec_id`, `faculty_id`) VALUES
(1, 8, 1),
(2, 9, 5),
(3, 8, 5),
(4, 11, 4),
(5, 12, 4),
(6, 12, 3),
(7, 13, 3),
(10, 8, 2),
(11, 13, 2),
(13, 9, 7),
(14, 8, 7),
(23, 13, 1),
(24, 11, 1),
(26, 12, 7),
(27, 10, 1),
(28, 8, 8),
(29, 13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_type`
--

CREATE TABLE `faculty_type` (
  `fac_type_id` int(11) NOT NULL,
  `fac_type_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_type`
--

INSERT INTO `faculty_type` (`fac_type_id`, `fac_type_desc`) VALUES
(1, 'Regular - Full Time'),
(3, 'Regular - Designee'),
(4, 'Part-time  - Part-time'),
(5, 'Part-time - Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `other_time_sched`
--

CREATE TABLE `other_time_sched` (
  `other_time_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_finish` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `load_type` varchar(20) NOT NULL,
  `isPublished` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_time_sched`
--

INSERT INTO `other_time_sched` (`other_time_id`, `time_start`, `time_finish`, `day`, `acad_yr`, `sem`, `faculty_id`, `load_type`, `isPublished`) VALUES
(179, '17:00:00', '20:00:00', 'Monday', '2018‐2019', '1st', 1, 'NO', 0),
(180, '17:00:00', '20:00:00', 'Tuesday', '2018‐2019', '1st', 1, 'NO', 0),
(181, '17:00:00', '20:00:00', 'Wednesday', '2018‐2019', '1st', 1, 'NO', 0),
(182, '17:00:00', '20:00:00', 'Thursday', '2018‐2019', '1st', 1, 'NO', 0),
(183, '17:00:00', '20:00:00', 'Friday', '2018‐2019', '1st', 1, 'NO', 0),
(213, '15:00:00', '17:00:00', 'Monday', '2018‐2019', '1st', 1, 'OH', 0),
(214, '08:00:00', '12:00:00', 'Tuesday', '2018‐2019', '1st', 1, 'OH', 0),
(215, '13:00:00', '17:00:00', 'Tuesday', '2018‐2019', '1st', 1, 'OH', 0),
(216, '08:00:00', '12:00:00', 'Wednesday', '2018‐2019', '1st', 1, 'OH', 0),
(217, '13:00:00', '17:00:00', 'Wednesday', '2018‐2019', '1st', 1, 'OH', 0),
(218, '08:00:00', '12:00:00', 'Thursday', '2018‐2019', '1st', 1, 'OH', 0),
(219, '13:00:00', '17:00:00', 'Thursday', '2018‐2019', '1st', 1, 'OH', 0),
(220, '08:00:00', '12:00:00', 'Friday', '2018‐2019', '1st', 1, 'OH', 0),
(221, '13:00:00', '17:00:00', 'Friday', '2018‐2019', '1st', 1, 'OH', 0),
(225, '09:30:00', '10:30:00', 'Monday', '2018‐2019', '1st', 5, 'AT', 0),
(226, '13:00:00', '18:00:00', 'Monday', '2018‐2019', '1st', 5, 'AT', 0),
(227, '08:00:00', '12:00:00', 'Tuesday', '2018‐2019', '1st', 5, 'AT', 0);

-- --------------------------------------------------------

--
-- Table structure for table `preferred_subj`
--

CREATE TABLE `preferred_subj` (
  `preferred_subj_id` int(11) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `subj_code` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferred_subj`
--

INSERT INTO `preferred_subj` (`preferred_subj_id`, `acad_yr`, `sem`, `subj_code`, `faculty_id`) VALUES
(1, '2017‐2018', '2nd', 29, 1),
(2, '2017‐2018', '2nd', 13, 1),
(3, '2017‐2018', '2nd', 28, 1),
(4, '2018‐2019', '2nd', 29, 1),
(5, '2018‐2019', '2nd', 13, 1),
(6, '2018‐2019', '2nd', 28, 1),
(7, '2018‐2019', '2nd', 13, 2),
(8, '2018‐2019', '2nd', 29, 2),
(12, '2018‐2019', '1st', 29, 1),
(14, '2018‐2019', '1st', 28, 1),
(15, '2017‐2018', '1st', 29, 1),
(17, '2018‐2019', '1st', 29, 7),
(18, '2018‐2019', '1st', 29, 5),
(22, '2018‐2019', '2nd', 29, 5),
(23, '2018‐2019', '2nd', 13, 5),
(24, '2018‐2019', '2nd', 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `preferred_time`
--

CREATE TABLE `preferred_time` (
  `preferred_time_id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferred_time`
--

INSERT INTO `preferred_time` (`preferred_time_id`, `day`, `start_time`, `end_time`, `acad_yr`, `sem`, `faculty_id`) VALUES
(1, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '1st', 1),
(2, 'Tuesday', '07:30:00', '12:00:00', '2018‐2019', '1st', 1),
(4, 'Wednesday', '07:30:00', '12:00:00', '2018‐2019', '1st', 1),
(5, 'Thursday', '07:30:00', '12:00:00', '2018‐2019', '1st', 1),
(6, 'Friday', '07:30:00', '12:00:00', '2018‐2019', '1st', 1),
(7, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '1st', 2),
(8, 'Tuesday', '07:30:00', '12:00:00', '2018‐2019', '1st', 2),
(9, 'Wednesday', '07:30:00', '12:00:00', '2018‐2019', '1st', 2),
(10, 'Thursday', '07:30:00', '12:00:00', '2018‐2019', '1st', 2),
(11, 'Friday', '07:30:00', '12:00:00', '2018‐2019', '1st', 2),
(13, 'Monday', '12:00:00', '19:00:00', '2018‐2019', '1st', 3),
(16, 'Thursday', '07:30:00', '12:00:00', '2018‐2019', '1st', 3),
(17, 'Thursday', '12:00:00', '19:00:00', '2018‐2019', '1st', 3),
(20, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '1st', 4),
(21, 'Monday', '12:00:00', '06:00:00', '2018‐2019', '1st', 4),
(22, 'Tuesday', '07:30:00', '12:00:00', '2018‐2019', '1st', 4),
(23, 'Tuesday', '12:00:00', '06:00:00', '2018‐2019', '1st', 4),
(24, 'Friday', '07:30:00', '12:00:00', '2018‐2019', '1st', 4),
(25, 'Friday', '12:00:00', '06:00:00', '2018‐2019', '1st', 4),
(26, 'Saturday', '07:30:00', '12:00:00', '2018‐2019', '1st', 4),
(27, 'Saturday', '12:00:00', '06:00:00', '2018‐2019', '1st', 4),
(28, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '1st', 5),
(32, 'Wednesday', '07:30:00', '12:00:00', '2018‐2019', '1st', 5),
(35, 'Thursday', '12:00:00', '06:00:00', '2018‐2019', '1st', 5),
(37, 'Friday', '12:00:00', '06:00:00', '2018‐2019', '1st', 5),
(38, 'Monday', '12:00:00', '06:00:00', '2017‐2018', '2nd', 1),
(39, 'Wednesday', '06:00:00', '09:00:00', '2017‐2018', '2nd', 1),
(40, 'Friday', '07:30:00', '12:00:00', '2017‐2018', '2nd', 1),
(41, 'Saturday', '06:00:00', '09:00:00', '2017‐2018', '2nd', 1),
(42, 'Tuesday', '06:00:00', '09:00:00', '2018‐2019', '2nd', 1),
(43, 'Friday', '12:00:00', '06:00:00', '2018‐2019', '2nd', 1),
(44, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 2),
(45, 'Wednesday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 2),
(46, 'Friday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 2),
(47, 'Thursday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 2),
(48, 'Saturday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 5),
(51, 'Tuesday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 3),
(52, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 3),
(53, 'Friday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 3),
(54, 'Friday', '08:30:00', '17:00:00', '2018‐2019', '2nd', 3),
(55, 'Friday', '08:30:00', '17:00:00', '2018‐2019', '2nd', 3),
(56, 'Saturday', '07:30:00', '13:00:00', '2018‐2019', '1st', 5),
(57, 'Tuesday', '08:00:00', '19:00:00', '2018‐2019', '1st', 5),
(58, 'Tuesday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 5),
(59, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 5),
(60, 'Tuesday', '07:30:00', '20:30:00', '2017‐2018', '1st', 5),
(62, 'Tuesday', '07:30:00', '17:00:00', '2017‐2018', '2nd', 5),
(63, 'Tuesday', '12:00:00', '18:00:00', '2018‐2019', '1st', 1),
(65, 'Friday', '18:00:00', '21:00:00', '2018‐2019', '1st', 3),
(66, 'Friday', '07:30:00', '12:00:00', '2018‐2019', '1st', 3),
(67, 'Tuesday', '12:00:00', '18:00:00', '2018‐2019', '1st', 3),
(68, 'Monday', '07:30:00', '12:00:00', '2018‐2019', '1st', 3),
(69, 'Wednesday', '07:30:00', '12:00:00', '2018‐2019', '2nd', 1),
(70, 'Wednesday', '12:00:00', '18:00:00', '2018‐2019', '1st', 1),
(71, 'Wednesday', '12:00:00', '18:00:00', '2018‐2019', '2nd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pre_requisite`
--

CREATE TABLE `pre_requisite` (
  `pre_requisite_id` int(11) NOT NULL,
  `pre_req_desc` varchar(10) NOT NULL,
  `subj_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_requisite`
--

INSERT INTO `pre_requisite` (`pre_requisite_id`, `pre_req_desc`, `subj_code`) VALUES
(1, 'COMP2133', 20),
(2, 'COMP2143', 20);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_code` varchar(5) NOT NULL,
  `room_desc` varchar(20) NOT NULL,
  `building` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_code`, `room_desc`, `building`, `status`) VALUES
(2, 'S503', 'Laboratory Room', 'PUP-Main', 1),
(3, 'E408', 'Lecture Room', 'PUP-Main', 1),
(4, 'S508', 'Laboratory Room', 'PUP-Main', 1),
(5, 'E418', 'Lecture Room', 'PUP-Main', 1),
(6, 'S504', 'Laboratory Room', 'PUP-Main', 1),
(7, 'E416', 'Lecture Room', 'PUP-Main', 1),
(10, 'E410', 'Lecture Room', 'PUP-Main', 1),
(11, 'E417', 'Lecture Room', 'PUP-Main', 1),
(12, 'E412', 'Lecture Room', 'PUP-Main', 1),
(13, 'S510', 'Laboratory Room', 'South Wing', 1),
(14, 'S501', 'Laboratory Room', 'South Wing', 1),
(15, 'S502', 'Laboratory Room', 'South Wing', 1),
(16, 'S511', 'Laboratory Room', 'South Wing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_desc` varchar(5) NOT NULL,
  `year_lvl` varchar(5) NOT NULL,
  `course` int(11) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_desc`, `year_lvl`, `course`, `acad_yr`, `status`) VALUES
(1, '1', '1st', 1, '2018‐2019', 1),
(2, '2', '1st', 1, '2018‐2019', 1),
(3, '3', '1st', 1, '2018‐2019', 1),
(4, '4', '1st', 1, '2018‐2019', 1),
(5, '5', '1st', 1, '2018‐2019', 1),
(6, '6', '1st', 1, '2018‐2019', 1),
(7, '1', '2nd', 1, '2018‐2019', 1),
(8, '1', '3rd', 1, '2018‐2019', 1),
(9, '1N', '3rd', 1, '2018‐2019', 1),
(10, '1', '4th', 1, '2018‐2019', 1),
(11, '2', '4th', 1, '2018‐2019', 1),
(12, '3', '4th', 1, '2018‐2019', 1),
(13, '4', '4th', 1, '2018‐2019', 1),
(14, '5', '4th', 1, '2018‐2019', 1),
(15, '1N', '4th', 1, '2018‐2019', 1),
(16, '2N', '4th', 1, '2018‐2019', 1),
(17, '3N', '4th', 1, '2018‐2019', 1),
(18, '4N', '4th', 1, '2018‐2019', 1),
(19, '1', '1st', 1, '2017‐2018', 1),
(20, '1', '2nd', 1, '2016‐2017', 1),
(21, '2', '1st', 2, '2017‐2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_assign`
--

CREATE TABLE `services_assign` (
  `services_id` int(11) NOT NULL,
  `subj_code` varchar(10) NOT NULL,
  `subj_desc` varchar(100) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `section` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `room` varchar(5) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `isPublished` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `services_assign`
--

INSERT INTO `services_assign` (`services_id`, `subj_code`, `subj_desc`, `time_start`, `time_end`, `section`, `day`, `room`, `acad_yr`, `sem`, `faculty_id`, `isPublished`) VALUES
(3, 'COMP1153', 'Introduction to Information and Communication Technology', '13:30:00', '16:30:00', 'BAJ 1-1', 'Tuesday', 'MC203', '2018‐2019', '1st', NULL, 0),
(4, 'COMP1023', 'Software Packages', '07:30:00', '10:30:00', 'BBF 3-1', 'Wednesday', 'N509', '2017‐2018', '2nd', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `spec_id` int(11) NOT NULL,
  `spec_desc` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`spec_id`, `spec_desc`, `status`) VALUES
(8, 'Programming', 1),
(9, 'Electronics', 1),
(10, 'Project Management', 1),
(11, 'Networking', 1),
(12, 'Databases', 1),
(13, 'Research', 1),
(14, 'Data Structures and Algorithms', 1),
(15, 'Software Engineering', 1),
(16, 'Analysis and Design of Information Systems', 1),
(17, 'Computer Architecture', 1),
(18, 'Intelligent Systems', 1),
(19, 'Robotics/Mechatronics', 1),
(20, 'E-commerce/E-business', 1),
(21, 'Management Information Systems', 1),
(22, 'Multimedia', 1),
(23, 'Operating Systems', 1),
(24, 'Web Development', 1),
(25, 'Automata and Theory of Computation', 1),
(26, 'Modeling', 1),
(27, 'Technical Writing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subj_id` int(11) NOT NULL,
  `subj_code` varchar(10) NOT NULL,
  `subj_desc` varchar(100) NOT NULL,
  `units` int(11) NOT NULL,
  `lab_hrs` int(11) NOT NULL,
  `lec_hrs` int(11) NOT NULL,
  `specialization` int(11) DEFAULT NULL,
  `isMajor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subj_id`, `subj_code`, `subj_desc`, `units`, `lab_hrs`, `lec_hrs`, `specialization`, `isMajor`) VALUES
(1, 'GEC1 ', 'General Education Core 1 Filipino 1', 3, 0, 3, NULL, 0),
(2, 'GEC2', 'General Education Core 2 - Purposive Communication ', 3, 0, 3, NULL, 0),
(3, 'GEC3', 'General Education Core 3 - Mathematics in the Modern World', 3, 0, 3, NULL, 0),
(4, 'ACCO2143', 'Accounting Principles', 3, 0, 3, NULL, 1),
(5, 'COMP2123', 'Introduction to Computing', 3, 3, 2, 8, 1),
(6, 'COMP2133', 'Computer Programming 1', 3, 3, 2, 8, 1),
(7, 'PHED1', 'Physical Education', 2, 0, 2, NULL, 0),
(8, 'NSTP1', 'CWTS/ROTC1', 3, 0, 3, NULL, 0),
(9, 'GEC4', 'General Education Core 4 - Filipino 2', 3, 0, 3, NULL, 0),
(10, 'GEC5', 'General Education Core 5 - Readings in Philippine History', 3, 0, 3, NULL, 0),
(11, 'GEE1', 'General Education Elective 1 - Argumentation and Debate', 3, 0, 3, NULL, 0),
(12, 'COMP2073', 'Discrete Structures ', 3, 0, 3, NULL, 0),
(13, 'COMP2143', 'Computer Programming 2', 3, 3, 2, 8, 1),
(14, 'PHED2', 'Physical Education 2', 2, 0, 2, NULL, 0),
(15, 'NSTP2', 'CWTS/ROTC 2', 3, 0, 3, NULL, 0),
(16, 'GEC6', 'General Education Core 6 - Understanding Self', 3, 0, 3, NULL, 0),
(17, 'GEE2', 'General Education Elective 2 - Inferential Statistics', 3, 0, 3, NULL, 0),
(18, 'GEC7', 'General Education Core 7 - Panitikan', 3, 0, 3, NULL, 0),
(19, 'COMP3013', 'Operating System', 3, 3, 2, 23, 1),
(20, 'INTE2053', 'Programming 3 (Structured Programming) ', 3, 3, 2, 8, 1),
(21, 'INTE3023', 'Data Communication and Networking', 3, 3, 2, 11, 1),
(22, 'COMP2153', 'Data Structures and Algorithms', 3, 3, 2, 14, 1),
(23, 'PHED3', 'Physical Education 3', 2, 0, 2, NULL, 0),
(24, 'GEE3', 'General Education Elective 3 - People and the Earth\'s Ecosystem', 3, 0, 3, NULL, 0),
(25, 'COMP4033', 'Networking Administration', 3, 3, 2, 11, 1),
(26, 'COMP4083', 'Human Computer Interaction', 3, 0, 3, 19, 1),
(27, 'COMP3093', 'Quantitative Methods with Modeling and Simulations', 3, 0, 3, 26, 1),
(28, 'INTE3063', 'Integrative Programming and Technologies 1', 3, 3, 2, 8, 1),
(29, 'COMP2103', 'Object-Oriented Programming', 3, 3, 2, 8, 1),
(30, 'COMP2163', 'Information Management', 3, 3, 2, 21, 1),
(31, 'PHED4', 'Physical Education 4', 2, 0, 2, NULL, 0),
(32, 'GEC8 ', 'General Education Core 8 - Art Appreciation', 3, 0, 3, NULL, 0),
(33, 'COMP3043', 'Web Development', 3, 3, 2, 24, 1),
(34, 'INTE3073', 'Systems Integration and Architecture 1', 3, 0, 3, 17, 1),
(35, 'INTE3013', 'Multimedia', 3, 3, 2, 22, 1),
(36, 'IT-ELEC1', 'IT ELECTIVE 1', 3, 3, 2, 13, 2),
(37, 'COMP4023', 'Database Administration', 3, 3, 2, 12, 1),
(38, 'COMP4163', 'Fundamentals of Research', 3, 0, 3, 13, 1),
(39, 'GEC9', 'General Education Core 9 - The Contemporary World', 3, 0, 3, NULL, 0),
(40, 'MANA2013', 'Principles of Management and Organization ', 3, 0, 3, NULL, 0),
(41, 'INTE4033', 'Information Assurance and Security 1', 3, 3, 2, 11, 1),
(42, 'COMP3073', 'Technopreneurship', 3, 0, 3, NULL, 1),
(43, 'COMP3103', 'Systems Analysis and Design ', 3, 0, 3, 13, 1),
(44, 'IT-ELEC2', 'IT ELECTIVE 2', 3, 3, 2, 13, 2),
(45, 'COMP2173', 'Applications Development and Emerging Technologies ', 3, 3, 2, 16, 1),
(46, 'COMP4193', 'Capstone Project 1', 3, 3, 2, 13, 1),
(47, 'GEC10', 'General Education Core 10 - Ethics', 3, 0, 3, NULL, 0),
(48, 'GEC11', 'General Education Core 11 - Science, Technology and Society', 3, 0, 3, NULL, 0),
(49, 'HIST1023', 'Buhay, Mga Gawain at Sinulat ni Rizal', 3, 0, 3, NULL, 0),
(50, 'INTE3093', 'Information Assurance and Security', 3, 0, 3, 11, 1),
(51, 'COMP4203', 'IT Social and Professional Issues', 3, 0, 3, 10, 1),
(52, 'IT-ELEC3', 'IT ELECTIVE 3', 3, 3, 2, 11, 2),
(53, 'IT-ELEC4', 'IT ELECTIVE 4', 3, 3, 2, 13, 2),
(54, 'INTE4016', 'Practicum (500 hours)', 6, 0, 6, 10, 1),
(55, 'COMP4203', 'Capstone Project 2', 3, 0, 3, 13, 1),
(56, 'INTE3103', 'Systems Administration and Maintenance', 3, 3, 2, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_match`
--

CREATE TABLE `subject_match` (
  `subj_match_id` int(11) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_match`
--

INSERT INTO `subject_match` (`subj_match_id`, `acad_yr`, `sem`, `subj_id`, `section`, `faculty_id`) VALUES
(6, '2018‐2019', '1st', 5, 6, 2),
(14, '2018‐2019', '1st', 1, 2, NULL),
(19, '2018‐2019', '1st', 5, 5, 3),
(26, '2018‐2019', '1st', 5, 1, 3),
(27, '2018‐2019', '1st', 6, 2, 5),
(32, '2018‐2019', '1st', 6, 3, 5),
(38, '2018‐2019', '1st', 5, 2, 3),
(40, '2018‐2019', '1st', 37, 8, 3),
(41, '2018‐2019', '1st', 21, 7, 4),
(42, '2018‐2019', '1st', 19, 7, 7),
(50, '2018‐2019', '1st', 6, 1, NULL),
(53, '2018‐2019', '1st', 6, 1, 8),
(54, '2018‐2019', '1st', 6, 5, 7),
(55, '2018‐2019', '1st', 6, 6, 7),
(56, '2018‐2019', '1st', 37, 9, 7),
(57, '2018‐2019', '1st', 5, 3, 8),
(58, '2018‐2019', '1st', 34, 8, 3),
(59, '2018‐2019', '1st', 4, 4, NULL),
(60, '2018‐2019', '1st', 4, 4, NULL),
(61, '2018‐2019', '1st', 5, 4, NULL),
(62, '2018‐2019', '1st', 6, 4, NULL),
(63, '2018‐2019', '1st', 1, 4, NULL),
(65, '2018‐2019', '1st', 2, 4, NULL),
(66, '2018‐2019', '1st', 7, 4, NULL),
(67, '2018‐2019', '1st', 3, 4, NULL),
(68, '2018‐2019', '1st', 8, 4, NULL),
(69, '2018‐2019', '1st', 50, 10, 1),
(70, '2018‐2019', '1st', 50, 11, 1),
(71, '2018‐2019', '1st', 5, 6, NULL),
(72, '2018‐2019', '1st', 5, 1, 4),
(73, '2018‐2019', '1st', 1, 1, NULL),
(74, '2018‐2019', '1st', 5, 2, NULL),
(75, '2018‐2019', '1st', 50, 16, NULL),
(76, '2018‐2019', '2nd', 29, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teaching_assign_sched`
--

CREATE TABLE `teaching_assign_sched` (
  `teaching_sched_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_finish` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `acad_yr` varchar(10) CHARACTER SET utf16 NOT NULL,
  `sem` varchar(10) NOT NULL,
  `subj_match_id` int(11) NOT NULL,
  `load_type` varchar(20) NOT NULL,
  `isPublished` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_assign_sched`
--

INSERT INTO `teaching_assign_sched` (`teaching_sched_id`, `room_id`, `time_start`, `time_finish`, `day`, `acad_yr`, `sem`, `subj_match_id`, `load_type`, `isPublished`) VALUES
(10, 3, '10:30:00', '13:30:00', 'Friday', '2018‐2019', '1st', 14, 'M', 0),
(71, 3, '07:30:00', '09:30:00', 'Tuesday', '2018‐2019', '1st', 53, 'PT', 0),
(72, 14, '07:30:00', '10:30:00', 'Friday', '2018‐2019', '1st', 53, 'PT', 0),
(113, 3, '07:30:00', '09:30:00', 'Tuesday', '2018‐2019', '1st', 57, 'PT', 0),
(114, 15, '07:30:00', '10:30:00', 'Friday', '2018‐2019', '1st', 57, 'PT', 0),
(142, 3, '07:30:00', '10:30:00', 'Monday', '2018‐2019', '1st', 60, 'INC', 0),
(143, 3, '12:30:00', '14:30:00', 'Monday', '2018‐2019', '1st', 61, 'INC', 0),
(144, 15, '12:30:00', '15:30:00', 'Thursday', '2018‐2019', '1st', 61, 'INC', 0),
(145, 3, '07:30:00', '09:30:00', 'Tuesday', '2018‐2019', '1st', 62, 'INC', 0),
(146, 6, '07:30:00', '10:30:00', 'Friday', '2018‐2019', '1st', 62, 'INC', 0),
(147, 3, '09:30:00', '12:30:00', 'Tuesday', '2018‐2019', '1st', 63, 'M', 0),
(148, 3, '14:30:00', '17:30:00', 'Monday', '2018‐2019', '1st', 65, 'M', 0),
(149, 3, '13:30:00', '16:30:00', 'Tuesday', '2018‐2019', '1st', 66, 'M', 0),
(150, 10, '07:30:00', '10:30:00', 'Thursday', '2018‐2019', '1st', 67, 'M', 0),
(151, 3, '07:30:00', '10:30:00', 'Sunday', '2018‐2019', '1st', 68, 'M', 0),
(165, 10, '07:30:00', '10:30:00', 'Monday', '2018‐2019', '1st', 69, 'R', 0),
(166, 10, '11:30:00', '14:30:00', 'Monday', '2018‐2019', '1st', 70, 'R', 0),
(167, 3, '07:30:00', '09:30:00', 'Monday', '2018‐2019', '1st', 71, 'INC', 0),
(168, 14, '07:30:00', '10:30:00', 'Thursday', '2018‐2019', '1st', 71, 'INC', 0),
(169, 10, '07:30:00', '09:30:00', 'Monday', '2018‐2019', '1st', 72, 'PT', 0),
(170, 15, '07:30:00', '10:30:00', 'Thursday', '2018‐2019', '1st', 72, 'PT', 0),
(171, 3, '10:30:00', '13:30:00', 'Monday', '2018‐2019', '1st', 73, 'M', 0),
(172, 10, '07:30:00', '09:30:00', 'Monday', '2018‐2019', '1st', 74, 'INC', 0),
(173, 2, '09:30:00', '12:30:00', 'Monday', '2018‐2019', '1st', 74, 'INC', 0),
(174, 12, '07:30:00', '09:30:00', 'Monday', '2018‐2019', '1st', 19, 'R', 1),
(175, 2, '07:30:00', '10:30:00', 'Thursday', '2018‐2019', '1st', 19, 'R', 1),
(176, 3, '10:30:00', '12:30:00', 'Monday', '2018‐2019', '1st', 26, 'R', 1),
(177, 14, '11:30:00', '14:30:00', 'Thursday', '2018‐2019', '1st', 26, 'R', 1),
(178, 12, '13:30:00', '15:30:00', 'Monday', '2018‐2019', '1st', 38, 'R', 1),
(179, 14, '15:30:00', '18:30:00', 'Thursday', '2018‐2019', '1st', 38, 'R', 1),
(180, 10, '07:30:00', '09:30:00', 'Tuesday', '2018‐2019', '1st', 40, 'PT', 1),
(181, 2, '08:30:00', '11:30:00', 'Friday', '2018‐2019', '1st', 40, 'PT', 1),
(182, 10, '10:30:00', '13:30:00', 'Tuesday', '2018‐2019', '1st', 58, 'PT', 1),
(183, 7, '07:30:00', '09:30:00', 'Monday', '2018‐2019', '1st', 27, 'R', 0),
(184, 14, '07:30:00', '10:30:00', 'Wednesday', '2018‐2019', '1st', 27, 'R', 0),
(185, 12, '10:30:00', '12:30:00', 'Monday', '2018‐2019', '1st', 32, 'R', 0),
(186, 14, '11:30:00', '14:30:00', 'Wednesday', '2018‐2019', '1st', 32, 'R', 0),
(187, 3, '07:30:00', '09:00:00', 'Wednesday', '2018‐2019', '1st', 75, 'INC', 0),
(188, 3, '10:30:00', '12:00:00', 'Wednesday', '2018‐2019', '1st', 75, 'INC', 0),
(189, 3, '07:30:00', '09:30:00', 'Wednesday', '2018‐2019', '2nd', 76, 'R', 0),
(190, 15, '10:30:00', '13:30:00', 'Wednesday', '2018‐2019', '2nd', 76, 'R', 0);

-- --------------------------------------------------------

--
-- Table structure for table `track_schedule`
--

CREATE TABLE `track_schedule` (
  `track_sched_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `schedule_name` varchar(80) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_schedule`
--

INSERT INTO `track_schedule` (`track_sched_id`, `user_id`, `schedule_name`, `date_added`) VALUES
(1, 1, 'BSIT 4-1', '2018-09-29 08:30:00'),
(2, 1, 'Monina Barretto', '2018-10-02 10:30:00'),
(3, 1, 'BSIT 1-6', '2018-10-02 15:00:00'),
(4, 1, 'BSIT 1-1', '2018-10-26 12:18:32'),
(5, 1, 'BSIT 3-1', '2018-10-26 12:18:42'),
(6, 1, 'Barretto, Monina ', '2018-10-26 12:19:10'),
(7, 1, 'BSIT 1-1', '2018-10-30 10:00:15'),
(8, 1, 'BSIT 1-3', '2018-10-30 10:00:29'),
(9, 1, 'BSIT 4-2N', '2018-10-30 10:00:39'),
(10, 1, 'BSIT 4-2N', '2018-10-30 10:05:22'),
(11, 1, 'BSIT 4-2N', '2018-10-30 10:06:44'),
(12, 1, 'BSIT 4-2N', '2018-10-30 10:20:45'),
(13, 1, 'BSIT 2-1', '2018-10-30 10:27:57'),
(14, 1, 'BSIT 1-1', '2018-10-30 10:27:59'),
(15, 1, 'BSIT 2-1', '2018-10-30 10:28:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept` (`dept`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`curriculum_id`),
  ADD KEY `subj_code` (`subj_code`),
  ADD KEY `dept` (`course`),
  ADD KEY `curriculum_yr` (`curriculum_yr`);

--
-- Indexes for table `curriculum_year`
--
ALTER TABLE `curriculum_year`
  ADD PRIMARY KEY (`curr_year_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `educ_bg`
--
ALTER TABLE `educ_bg`
  ADD PRIMARY KEY (`educ_bg_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`evaluation_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `dept` (`dept`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `faculty_type` (`faculty_type`),
  ADD KEY `dept` (`dept`);

--
-- Indexes for table `faculty_load_type`
--
ALTER TABLE `faculty_load_type`
  ADD PRIMARY KEY (`load_type_id`),
  ADD KEY `fac_type_desc` (`fac_type_desc`);

--
-- Indexes for table `faculty_spec`
--
ALTER TABLE `faculty_spec`
  ADD PRIMARY KEY (`fac_spec_id`),
  ADD KEY `spec_id` (`spec_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `faculty_type`
--
ALTER TABLE `faculty_type`
  ADD PRIMARY KEY (`fac_type_id`);

--
-- Indexes for table `other_time_sched`
--
ALTER TABLE `other_time_sched`
  ADD PRIMARY KEY (`other_time_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `preferred_subj`
--
ALTER TABLE `preferred_subj`
  ADD PRIMARY KEY (`preferred_subj_id`),
  ADD KEY `subj_code` (`subj_code`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `preferred_time`
--
ALTER TABLE `preferred_time`
  ADD PRIMARY KEY (`preferred_time_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `pre_requisite`
--
ALTER TABLE `pre_requisite`
  ADD PRIMARY KEY (`pre_requisite_id`),
  ADD KEY `subj_code` (`subj_code`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `dept` (`course`);

--
-- Indexes for table `services_assign`
--
ALTER TABLE `services_assign`
  ADD PRIMARY KEY (`services_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subj_id`),
  ADD KEY `specialization` (`specialization`);

--
-- Indexes for table `subject_match`
--
ALTER TABLE `subject_match`
  ADD PRIMARY KEY (`subj_match_id`),
  ADD KEY `subj_code` (`subj_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `section` (`section`);

--
-- Indexes for table `teaching_assign_sched`
--
ALTER TABLE `teaching_assign_sched`
  ADD PRIMARY KEY (`teaching_sched_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `subj_match_id` (`subj_match_id`);

--
-- Indexes for table `track_schedule`
--
ALTER TABLE `track_schedule`
  ADD PRIMARY KEY (`track_sched_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `curriculum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `curriculum_year`
--
ALTER TABLE `curriculum_year`
  MODIFY `curr_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `educ_bg`
--
ALTER TABLE `educ_bg`
  MODIFY `educ_bg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `evaluation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `faculty_load_type`
--
ALTER TABLE `faculty_load_type`
  MODIFY `load_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `faculty_spec`
--
ALTER TABLE `faculty_spec`
  MODIFY `fac_spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `faculty_type`
--
ALTER TABLE `faculty_type`
  MODIFY `fac_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `other_time_sched`
--
ALTER TABLE `other_time_sched`
  MODIFY `other_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
--
-- AUTO_INCREMENT for table `preferred_subj`
--
ALTER TABLE `preferred_subj`
  MODIFY `preferred_subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `preferred_time`
--
ALTER TABLE `preferred_time`
  MODIFY `preferred_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `pre_requisite`
--
ALTER TABLE `pre_requisite`
  MODIFY `pre_requisite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `services_assign`
--
ALTER TABLE `services_assign`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `subject_match`
--
ALTER TABLE `subject_match`
  MODIFY `subj_match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `teaching_assign_sched`
--
ALTER TABLE `teaching_assign_sched`
  MODIFY `teaching_sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT for table `track_schedule`
--
ALTER TABLE `track_schedule`
  MODIFY `track_sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `department` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD CONSTRAINT `curriculum_ibfk_2` FOREIGN KEY (`course`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `curriculum_ibfk_3` FOREIGN KEY (`curriculum_yr`) REFERENCES `curriculum_year` (`curr_year_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `curriculum_ibfk_4` FOREIGN KEY (`subj_code`) REFERENCES `subject` (`subj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `educ_bg`
--
ALTER TABLE `educ_bg`
  ADD CONSTRAINT `educ_bg_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`dept`) REFERENCES `department` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_2` FOREIGN KEY (`faculty_type`) REFERENCES `faculty_type` (`fac_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `faculty_ibfk_3` FOREIGN KEY (`dept`) REFERENCES `department` (`dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_load_type`
--
ALTER TABLE `faculty_load_type`
  ADD CONSTRAINT `faculty_load_type_ibfk_1` FOREIGN KEY (`fac_type_desc`) REFERENCES `faculty_type` (`fac_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_spec`
--
ALTER TABLE `faculty_spec`
  ADD CONSTRAINT `faculty_spec_ibfk_1` FOREIGN KEY (`spec_id`) REFERENCES `specialization` (`spec_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `faculty_spec_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `other_time_sched`
--
ALTER TABLE `other_time_sched`
  ADD CONSTRAINT `other_time_sched_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `preferred_subj`
--
ALTER TABLE `preferred_subj`
  ADD CONSTRAINT `preferred_subj_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `preferred_subj_ibfk_4` FOREIGN KEY (`subj_code`) REFERENCES `subject` (`subj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `preferred_time`
--
ALTER TABLE `preferred_time`
  ADD CONSTRAINT `preferred_time_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pre_requisite`
--
ALTER TABLE `pre_requisite`
  ADD CONSTRAINT `pre_requisite_ibfk_1` FOREIGN KEY (`subj_code`) REFERENCES `subject` (`subj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `services_assign`
--
ALTER TABLE `services_assign`
  ADD CONSTRAINT `services_assign_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`specialization`) REFERENCES `specialization` (`spec_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject_match`
--
ALTER TABLE `subject_match`
  ADD CONSTRAINT `subject_match_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subject_match_ibfk_2` FOREIGN KEY (`subj_id`) REFERENCES `subject` (`subj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subject_match_ibfk_3` FOREIGN KEY (`section`) REFERENCES `section` (`section_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teaching_assign_sched`
--
ALTER TABLE `teaching_assign_sched`
  ADD CONSTRAINT `teaching_assign_sched_ibfk_5` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `teaching_assign_sched_ibfk_6` FOREIGN KEY (`subj_match_id`) REFERENCES `subject_match` (`subj_match_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `track_schedule`
--
ALTER TABLE `track_schedule`
  ADD CONSTRAINT `track_schedule_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
