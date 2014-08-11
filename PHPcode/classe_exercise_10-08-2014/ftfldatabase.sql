-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2014 at 10:45 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `code`, `created`, `modified`) VALUES
(1, 'LARAVEL', 'P-002', '2014-08-10 11:46:09', '2014-08-10 11:46:09'),
(2, 'PHOTOSHOP', 'D-003', '2014-08-10 11:46:09', '2014-08-10 11:46:09'),
(3, 'UNITY 3D', 'G-004', '2014-08-10 11:46:36', '2014-08-10 11:46:36'),
(6, 'ITES', 'I-006', '2014-08-10 15:52:39', '2014-08-10 15:52:39'),
(7, 'MGMT', 'M-007', '2014-08-10 15:52:54', '2014-08-10 15:52:54'),
(14, 'ASP .NET', 'A-005', '2014-08-11 10:16:07', '2014-08-11 10:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `final_results`
--

CREATE TABLE IF NOT EXISTS `final_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `gpa` float NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `final_results`
--

INSERT INTO `final_results` (`id`, `student_id`, `gpa`, `created`, `modified`) VALUES
(1, 11, 5, '2014-08-10 09:54:27', '2014-08-10 09:54:27'),
(2, 12, 4.5, '2014-08-10 09:54:27', '2014-08-10 09:54:27'),
(3, 13, 3.5, '2014-08-10 09:54:27', '2014-08-10 09:54:27'),
(4, 14, 2.5, '2014-08-10 09:54:27', '2014-08-10 09:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `map_students_courses`
--

CREATE TABLE IF NOT EXISTS `map_students_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `map_students_courses`
--

INSERT INTO `map_students_courses` (`id`, `student_id`, `course_id`, `created`, `modified`) VALUES
(40, 35, '', '2014-08-11 14:39:34', '2014-08-11 14:39:34'),
(41, 35, '', '2014-08-11 14:39:34', '2014-08-11 14:39:34'),
(42, 35, '', '2014-08-11 14:39:34', '2014-08-11 14:39:34'),
(43, 28, '1', '2014-08-11 14:40:32', '2014-08-11 14:40:32'),
(44, 28, '2', '2014-08-11 14:40:32', '2014-08-11 14:40:32'),
(45, 28, '3', '2014-08-11 14:40:32', '2014-08-11 14:40:32'),
(46, 28, '6', '2014-08-11 14:40:32', '2014-08-11 14:40:32'),
(47, 28, '7', '2014-08-11 14:40:32', '2014-08-11 14:40:32'),
(48, 28, '14', '2014-08-11 14:40:32', '2014-08-11 14:40:32'),
(49, 37, '1', '2014-08-11 14:42:49', '2014-08-11 14:42:49'),
(50, 37, '2', '2014-08-11 14:42:50', '2014-08-11 14:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `n_students`
--

CREATE TABLE IF NOT EXISTS `n_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(23) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `n_students`
--

INSERT INTO `n_students` (`id`, `name`, `created`, `modified`) VALUES
(11, 'Sajia', '2014-08-10 09:53:20', '2014-08-10 09:53:20'),
(12, 'Daisy', '2014-08-10 09:53:20', '2014-08-10 09:53:20'),
(13, 'Ruhi', '2014-08-10 09:53:20', '2014-08-10 09:53:20'),
(14, 'Sanjib', '2014-08-10 09:53:20', '2014-08-10 09:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `education_level` varchar(10) NOT NULL,
  `gpa` float NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `education_level`, `gpa`, `created`, `modified`) VALUES
(1, 11, 'SSC', 5, '2014-08-10 09:53:54', '2014-08-10 09:53:54'),
(2, 11, 'HSC', 3.5, '2014-08-10 09:53:54', '2014-08-10 09:53:54'),
(3, 11, 'BA', 4, '2014-08-10 09:53:54', '2014-08-10 09:53:54'),
(4, 14, 'BA', 3, '2014-08-10 09:53:54', '2014-08-10 09:53:54'),
(5, 14, 'SSC', 3, '2014-08-10 09:53:54', '2014-08-10 09:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(23) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `created`) VALUES
(1, 'SAJIA', '2014-08-10 00:00:00'),
(2, 'TANJIM', '2014-08-10 00:00:00'),
(20, 'Shuvo', '2014-08-11 10:57:46'),
(21, 'RUHI', '2014-08-11 11:50:24'),
(27, 'Ishrat', '2014-08-11 14:08:34'),
(28, 'shah', '2014-08-11 14:09:47'),
(35, 'Sudeb', '2014-08-11 14:39:34'),
(36, 'shah', '2014-08-11 14:40:32'),
(37, 'apple', '2014-08-11 14:42:49');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `final_results`
--
ALTER TABLE `final_results`
  ADD CONSTRAINT `final_results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `n_students` (`id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `n_students` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
