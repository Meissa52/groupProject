-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2018 at 11:31 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltutorial`
--

DROP TABLE IF EXISTS `tbltutorial`;
CREATE TABLE IF NOT EXISTS `tbltutorial` (
  `tutId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `shortDesc` varchar(500) NOT NULL,
  `imgPath` varchar(25) NOT NULL,
  `docPath` varchar(25) NOT NULL,
  PRIMARY KEY (`tutId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltutorial`
--

INSERT INTO `tbltutorial` (`tutId`, `name`, `shortDesc`, `imgPath`, `docPath`) VALUES
(1, 'Cisco Passwords', 'This is a tutorial aimed at setting passwords on cisco devices using a console connection', 'images/cmd.png', 'doc/cisco.docx'),
(2, 'Networking', 'Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah ', 'images/net.jpg', 'doc/cisco.docx'),
(4, 'HOLY SHIT', 'IM LITERALLY ON FIRE OH GOD IT HURTS', '', 'doc/test file.txt'),
(5, 'HOLY SHIT', 'IM LITERALLY ON FIRE OH GOD IT HURTS', '', ''),
(6, 'AIOGNANGINAGNOAG', 'GAGFBOAGFBOIABGIOAEG', '', ''),
(7, 'AIOGNANGINAGNOAG', 'GAGFBOAGFBOIABGIOAEG', '', 'doc/c5prj02.txt'),
(8, 'AIOGNANGINAGNOAG', 'GAGFBOAGFBOIABGIOAEG', 'uploads/1921756.jpg', 'doc/c5prj02.txt'),
(9, 'AFNOANGPAOFPOCAKOPSCJP', 'THIS IS A DESCRIPTION', 'uploads/429114.jpg', 'doc/sfonaoi.txt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
