-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2019 at 06:06 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `name`, `username`, `password`) VALUES
(3, 'Arka Sinha', 'arka', '3132333435363738');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` mediumtext NOT NULL,
  `type` varchar(7) NOT NULL,
  `content` longtext NOT NULL,
  `e_ques` varchar(3) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `title`, `summary`, `author`, `tags`, `type`, `content`, `e_ques`, `date`) VALUES
INSERT INTO `books` (`bid`, `title`, `summary`, `author`, `tags`, `type`, `content`, `e_ques`, `date`) VALUES
(12, 'xyz', 'demo data', 'Virag', 'Motivational;', 'book', '686a6b6c3b68666b73646a68666b68666466736466646b6a6e6b6a7368646a6b686a6b68616b6a686b6a6661666e6e616a6b666b6a61666b6a6866', 'yes', '2019-02-21'),
(13, 'demo', 'demo data', 'Virag', 'Motivational;', 'book', '6b66686b6a646766686a646861676a66736b646a6661646a6b66686a6873646773666b6a676a', 'yes', '2019-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `books_catelog`
--

DROP TABLE IF EXISTS `books_catelog`;
CREATE TABLE IF NOT EXISTS `books_catelog` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `book_data` text NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_instance`
--

DROP TABLE IF EXISTS `book_instance`;
CREATE TABLE IF NOT EXISTS `book_instance` (
  `bi_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(3) NOT NULL,
  `emp_id` int(3) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`bi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `username`, `password`, `name`) VALUES
(4, 'talmeez', '7669726167', 'Talmeez'),
(11, 'virag', '7669726167', 'virag');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(3) NOT NULL,
  `book_read` int(3) NOT NULL,
  `book_pending` int(3) NOT NULL,
  `exams_completed` int(3) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(3) NOT NULL,
  `emp_id` int(3) NOT NULL,
  `test_score` int(3) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(3) NOT NULL,
  `question` varchar(50) NOT NULL,
  `op_1` varchar(50) NOT NULL,
  `op_2` varchar(50) NOT NULL,
  `op_3` varchar(50) NOT NULL,
  `op_4` varchar(50) NOT NULL,
  `correct_op` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `book_id`, `question`, `op_1`, `op_2`, `op_3`, `op_4`, `correct_op`) VALUES
(1, 10, '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;