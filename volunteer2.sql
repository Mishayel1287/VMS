-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2024 at 04:00 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volunteer2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `monday` varchar(10) DEFAULT NULL,
  `tuesday` varchar(10) DEFAULT NULL,
  `wednesday` varchar(10) DEFAULT NULL,
  `thursday` varchar(10) DEFAULT NULL,
  `friday` varchar(10) DEFAULT NULL,
  `saturday` varchar(10) DEFAULT NULL,
  `sunday` varchar(10) DEFAULT NULL,
  `Stime` varchar(20) DEFAULT NULL,
  `Etime` varchar(20) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `otherRole` varchar(255) DEFAULT NULL,
  `qualifications` text,
  `ccase` varchar(10) DEFAULT NULL,
  `license` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `fname`, `lname`, `email`, `address`, `city`, `phoneNo`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `Stime`, `Etime`, `role`, `otherRole`, `qualifications`, `ccase`, `license`) VALUES
(4, 'Mishayel', 'Fernando', 'mishayelshamika@gmail.com', '112/A/15 Kamaragoda Road, Ganihimulla, Dewalapola', 'Minuwangoda', '0763178737', 'monday', 'tuesday', 'wednesday', '', '', '', '', '15:00', '17:00', 'animalShelter', '', 'veterinarian', 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individualprofile`
--

DROP TABLE IF EXISTS `individualprofile`;
CREATE TABLE IF NOT EXISTS `individualprofile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `otherInterests` text NOT NULL,
  `talent` varchar(100) NOT NULL,
  `leadership` varchar(100) NOT NULL,
  `communication` varchar(100) NOT NULL,
  `management` varchar(100) NOT NULL,
  `attitude` varchar(100) NOT NULL,
  `teamWork` varchar(100) NOT NULL,
  `adaptability` varchar(100) NOT NULL,
  `empathy` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `individualprofile`
--

INSERT INTO `individualprofile` (`id`, `name`, `email`, `city`, `phoneNo`, `interest`, `otherInterests`, `talent`, `leadership`, `communication`, `management`, `attitude`, `teamWork`, `adaptability`, `empathy`) VALUES
(6, 'Mishayel Fernando', 'mishayelshamika@gmail.com', 'Minuwangoda', '0763178737', 'animals', '', '', 'no', 'communication', 'no', 'attitude', 'no', 'adaptability', 'empathy'),
(7, 'Nethmi Navodya', 'nethmi@gmail.com', 'Yakkala', '0771234567', 'food', '', 'Cooking', 'leadership', 'communication', 'no', 'attitude', 'teamWork', 'no', 'no'),
(8, 'Dewmini Thennakoon', 'dewmini@gmail.com', 'Veyangoda', '0771234567', 'other', 'Listning to music', 'Cooking', 'no', 'communication', 'management', 'attitude', 'teamWork', 'adaptability', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

DROP TABLE IF EXISTS `msg`;
CREATE TABLE IF NOT EXISTS `msg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `user2` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `user`, `user2`, `msg`) VALUES
(30, 'jude', 'adrian', 'hi adrian!'),
(31, 'adrian', 'jude', 'hello jude.');

-- --------------------------------------------------------

--
-- Table structure for table `organizationprofile`
--

DROP TABLE IF EXISTS `organizationprofile`;
CREATE TABLE IF NOT EXISTS `organizationprofile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `otherInterests` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `organizationprofile`
--

INSERT INTO `organizationprofile` (`id`, `name`, `type`, `email`, `city`, `phoneNo`, `interest`, `otherInterests`) VALUES
(3, 'Hemas', 'committee', 'hemas@hemas.com', 'Colombo', '0112345678', 'children', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

DROP TABLE IF EXISTS `schedule_list`;
CREATE TABLE IF NOT EXISTS `schedule_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(8, 'Teaching', 'Teaching English', '2024-04-30 09:00:00', '2024-04-30 12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup1`
--

DROP TABLE IF EXISTS `signup1`;
CREATE TABLE IF NOT EXISTS `signup1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup1`
--

INSERT INTO `signup1` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$f5HmwXA8bhgxhekuz038x.uTq3TOC7GNOgwCWUa8GVuG11nQGgbTC', '2024-04-12 16:36:47'),
(4, 'Jane', 'jane@gmail.com', '$2y$10$D78MbEjAkNUSDOki98A.cufMMAo4pXsmIkKQZrOxJFJ0aQhdgCFg.', '2024-04-13 07:32:43'),
(5, 'user', 'user@gmail.com', '$2y$10$T1jrpzVk5hTIbZ97onvufeNH5yP20QJphaiRiGsur9j95Dp/0m4D6', '2024-04-15 18:14:57'),
(6, 'angelo', 'angelo@gmail.com', '$2y$10$0xMi0oA1WS4033ez.qi16uebS.qSOwx.7ak76AAOiSK1B1QXkmZ5.', '2024-04-16 07:33:28'),
(13, 'misha', 'misha@gmail.com', '$2y$10$MKLwSFZzdjtwBmdXVQXrt.hw8y9iqWg7/cRp2BxXos/VmZLGY27cq', '2024-04-16 07:43:06'),
(14, 'example', 'example@hotmail.com', '$2y$10$0pOYCz8Mw10lPVepPizDde4VFZkxNyPcymIhTc45d0RSk7Yqu0Qsq', '2024-04-28 15:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `rpass` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `pass`, `rpass`, `status`) VALUES
(8, 'jude suarez', 'jude', '8e84684e9c911b53d0aaf4cc21f63b9b', 'judesuarez', 'Availible'),
(9, 'adrian mercurio', 'adrian', '8a1618d76725448816d5f1db309b5500', 'adrianmercurio', 'Availible');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
