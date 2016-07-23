-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2016 at 11:07 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `katalyst_team3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_email` varchar(50) NOT NULL,
  `adm_pass` varchar(40) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_email`, `adm_pass`) VALUES
(1, 'shantanuugemuge@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(2, 'shantanu@ugemuge.com', 'a152e841783914146e4bcd4f39100686'),
(3, 'asdf@gmail.com', 'a53cf5ed952f2b8ae9f84fc406f6399f'),
(8, 'sdsd', 'sdsds'),
(9, 'zsas', 'asasa'),
(10, 'fdsfsdfsd', 'sadasdas');

--
-- Triggers `admin`
--
DROP TRIGGER IF EXISTS `admin_to_login`;
DELIMITER //
CREATE TRIGGER `admin_to_login` AFTER INSERT ON `admin`
 FOR EACH ROW BEGIN
    INSERT INTO login (log_email,log_pass,log_role) 
    SELECT adm_email,adm_pass,'admin'
    FROM admin ORDER BY adm_id DESC 
    LIMIT 1;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `assign_mtrid` int(11) NOT NULL,
  `assign_mntid` int(11) NOT NULL,
  PRIMARY KEY (`assign_id`),
  KEY `assign_mtrid` (`assign_mtrid`),
  KEY `assign_mntid` (`assign_mntid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_email` varchar(50) NOT NULL,
  `log_pass` varchar(40) NOT NULL,
  `log_role` varchar(10) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `log_email`, `log_pass`, `log_role`) VALUES
(1, 'shahsa', 'sdsd', 'admin'),
(2, 'a', 'b', 'c'),
(3, 'fdsfsdfsd', 'sadasdas', 'admin'),
(4, 'jane@gmail.com', 'key123', 'mentee'),
(5, 'yashshah96@gmail.com', 'key123', 'mentor'),
(6, 'shantanuugemuge@gmail.com', 'key123', 'mentor'),
(7, 'yogeetamanglani@gmail.com', 'key1234', 'mentee'),
(8, 'swetagupta19@gmail.com', 'key123', 'mentee'),
(9, 'richashah@gmail.com', 'key123', 'mentee'),
(10, 'coreacm@gmail.com', 'key123', 'mentee'),
(11, 'shantanu@ugemuge.com', 'key123', 'mentor'),
(12, 'Jiahsen@gmail.com', 'key123', 'mentor');

-- --------------------------------------------------------

--
-- Table structure for table `meetings_comp`
--

CREATE TABLE IF NOT EXISTS `meetings_comp` (
  `mcom_id` int(11) NOT NULL AUTO_INCREMENT,
  `mcom_mtrid` int(11) NOT NULL,
  `mcom_mntid` int(11) NOT NULL,
  `mcom_date` varchar(15) NOT NULL,
  `mcom_hrs` varchar(15) NOT NULL,
  `mcom_loc` varchar(120) NOT NULL,
  PRIMARY KEY (`mcom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meetings_sche`
--

CREATE TABLE IF NOT EXISTS `meetings_sche` (
  `msce_id` int(11) NOT NULL AUTO_INCREMENT,
  `msce_mtrid` int(11) NOT NULL,
  `msce_mntid` int(11) NOT NULL,
  `msce_date` varchar(15) NOT NULL,
  `msce_time` varchar(15) NOT NULL,
  `msce_loc` varchar(120) NOT NULL,
  `msce_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`msce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mentee_basic`
--

CREATE TABLE IF NOT EXISTS `mentee_basic` (
  `mnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `mnt_name` varchar(40) NOT NULL,
  `mnt_dob` date NOT NULL,
  `mnt_address` varchar(120) NOT NULL,
  `mnt_college` varchar(40) NOT NULL,
  `mnt_cyear` varchar(10) NOT NULL,
  `mnt_mobile` varchar(20) NOT NULL,
  `mnt_resno` varchar(15) DEFAULT NULL,
  `mnt_email` varchar(50) NOT NULL,
  `mnt_pass` varchar(40) NOT NULL,
  `mnt_aggr12th` varchar(7) NOT NULL,
  PRIMARY KEY (`mnt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mentee_basic`
--

INSERT INTO `mentee_basic` (`mnt_id`, `mnt_name`, `mnt_dob`, `mnt_address`, `mnt_college`, `mnt_cyear`, `mnt_mobile`, `mnt_resno`, `mnt_email`, `mnt_pass`, `mnt_aggr12th`) VALUES
(1, 'Jane Rogers', '1995-01-17', '123 buidling street andheri mumbai', 'MIT', '4th', '9876543210', '022-2544323', 'shantanu1938@gmail.com', 'key123', '80%'),
(2, 'Rucha Shah', '1996-07-08', 'Jai Prakash Rd, Sahakar Nagar, Azad Nagar, Andheri West, Mumbai', 'VESIT', '3rd', '9876152364', '022-2348695', 'yogeetamanglani@gmail.com', 'key1234', '90%'),
(3, 'Sweta Gupta', '1995-11-04', '1,S.N.D.T College,Nathibai Thackersey Road,Juhu, Mumbai', 'S.N.D.T College', '4th Year', '9876543092', NULL, 'swetagupta19@gmail.com', 'key123', '60%'),
(4, 'Richa Shah', '1994-07-20', 'Plot No.U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Marg, Vile Parle West,Mumbai', 'D.J Sanghvi', '4th Year', '8879444333', '022-23456433', 'richashah@gmail.com', 'key123', '75%'),
(5, 'Neha Mehta', '2016-09-22', 'Plot No.U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Marg, Vile Parle West', 'D.J Sanghvi', '3rd Year', '992090322', NULL, 'coreacm@gmail.com', 'key123', '80%');

--
-- Triggers `mentee_basic`
--
DROP TRIGGER IF EXISTS `mentee_to_login`;
DELIMITER //
CREATE TRIGGER `mentee_to_login` AFTER INSERT ON `mentee_basic`
 FOR EACH ROW BEGIN
    INSERT INTO login (log_email,log_pass,log_role) 
    SELECT mnt_email,mnt_pass,'mentee'
    FROM mentee_basic ORDER BY mnt_id DESC 
    LIMIT 1;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_basic`
--

CREATE TABLE IF NOT EXISTS `mentor_basic` (
  `mtr_id` int(11) NOT NULL AUTO_INCREMENT,
  `mtr_email` varchar(50) NOT NULL,
  `mtr_pass` varchar(40) NOT NULL,
  `mtr_name` varchar(50) NOT NULL,
  `mtr_contact` varchar(20) NOT NULL,
  `mtr_address` varchar(120) NOT NULL,
  `mtr_sex` enum('Male','Female') NOT NULL,
  `mtr_dob` date NOT NULL,
  `mtr_resno` varchar(15) NOT NULL,
  `mtr_HighAcadQual` varchar(20) NOT NULL,
  `mtr_currentcom` varchar(40) NOT NULL,
  `mtr_workex` int(3) NOT NULL,
  `mtr_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`mtr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mentor_basic`
--

INSERT INTO `mentor_basic` (`mtr_id`, `mtr_email`, `mtr_pass`, `mtr_name`, `mtr_contact`, `mtr_address`, `mtr_sex`, `mtr_dob`, `mtr_resno`, `mtr_HighAcadQual`, `mtr_currentcom`, `mtr_workex`, `mtr_status`) VALUES
(1, 'yashshah96@gmail.com', 'key123', 'Yash Shah', '982222335', '403 Raheja Crest 1,Off new link road, Lokhandwala,Andheri West,Mumbai', 'Male', '1990-03-24', '022-2434567', 'M.S', 'ABC copr', 8, 0),
(2, 'shantanuugemuge@gmail.com', 'key123', 'Shantanu Ugemuge', '8879000777', '1403, SOham''s tropical lagoon,Vijay VIlas ROad,Off Ghodbunder Road, Thane WEST,Thane', 'Male', '1992-03-24', '022-2434567', 'M.S', 'XYZ copr', 9, 0),
(3, 'shantanu@ugemuge.com', 'key123', 'Rita Varma', '8879000777', '303, Platinum Building , B wing, Juhu Lane,Andheri West, Mumbai', 'Male', '1987-04-28', '022-22334455', 'M.B.A', 'ECorp', 4, 0),
(4, 'Jiahsen@gmail.com', 'key123', 'Jiah Sen', '987635543', '2403, Awasekar Heights, Worli Check Naka, Worli,Mumbai', 'Female', '2016-06-24', '022-2243433', 'M.B.A', 'zolt tech', 3, 0);

--
-- Triggers `mentor_basic`
--
DROP TRIGGER IF EXISTS `mentor_to_login`;
DELIMITER //
CREATE TRIGGER `mentor_to_login` AFTER INSERT ON `mentor_basic`
 FOR EACH ROW BEGIN
    INSERT INTO login (log_email,log_pass,log_role) 
    SELECT mtr_email,mtr_pass,'mentor'
    FROM mentor_basic ORDER BY mtr_id DESC 
    LIMIT 1;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_skills`
--

CREATE TABLE IF NOT EXISTS `mentor_skills` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_mtrid` int(10) NOT NULL,
  `ms_skillid` int(10) NOT NULL,
  PRIMARY KEY (`ms_id`),
  KEY `ms_mtrid` (`ms_mtrid`),
  KEY `ms_mtrid_2` (`ms_mtrid`),
  KEY `ms_mtrid_3` (`ms_mtrid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `progress_mentee`
--

CREATE TABLE IF NOT EXISTS `progress_mentee` (
  `prog_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_mntid` int(11) NOT NULL,
  `prog_hrs` int(11) NOT NULL DEFAULT '0',
  `prog_meetingno` int(11) NOT NULL DEFAULT '0',
  `prog_month` varchar(20) NOT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skills_master`
--

CREATE TABLE IF NOT EXISTS `skills_master` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(15) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `skills_master`
--

INSERT INTO `skills_master` (`skill_id`, `skill_name`) VALUES
(1, 'Managerial'),
(2, 'Technical'),
(3, 'Life Skills');

-- --------------------------------------------------------

--
-- Table structure for table `s_chat_messages`
--

CREATE TABLE IF NOT EXISTS `s_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `when` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`assign_mntid`) REFERENCES `mentee_basic` (`mnt_id`),
  ADD CONSTRAINT `assignment_ibfk_3` FOREIGN KEY (`assign_mtrid`) REFERENCES `mentor_basic` (`mtr_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
