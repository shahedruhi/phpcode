-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2014 at 08:41 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `code`, `created`, `modified`) VALUES
(1, 'LARAVEL', 'P-002', '2014-08-10 11:46:09', '2014-08-10 11:46:09'),
(2, 'PHOTOSHOP', 'D-003', '2014-08-10 11:46:09', '2014-08-10 11:46:09'),
(3, 'UNITY 3D', 'G-004', '2014-08-10 11:46:36', '2014-08-10 11:46:36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `map_students_courses`
--

INSERT INTO `map_students_courses` (`id`, `student_id`, `course_id`, `created`, `modified`) VALUES
(1, 1, '1', '2014-08-10 11:49:15', '2014-08-10 11:49:15'),
(2, 1, '2', '2014-08-10 11:49:15', '2014-08-10 11:49:15'),
(3, 2, '1', '2014-08-10 11:49:37', '2014-08-10 11:49:37'),
(4, 2, '2', '2014-08-10 11:49:37', '2014-08-10 11:49:37'),
(5, 2, '3', '2014-08-10 11:49:54', '2014-08-10 11:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE IF NOT EXISTS `new_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(23) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`id`, `name`, `created`) VALUES
(1, 'SAJIA', '2014-08-10 00:00:00'),
(2, 'TANJIM', '2014-08-10 00:00:00');

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
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `created`, `modified`) VALUES
(11, 'Sajia', '2014-08-10 09:53:20', '2014-08-10 09:53:20'),
(12, 'Daisy', '2014-08-10 09:53:20', '2014-08-10 09:53:20'),
(13, 'Ruhi', '2014-08-10 09:53:20', '2014-08-10 09:53:20'),
(14, 'Sanjib', '2014-08-10 09:53:20', '2014-08-10 09:53:20');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `final_results`
--
ALTER TABLE `final_results`
  ADD CONSTRAINT `final_results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
