-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 04:58 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--
CREATE DATABASE IF NOT EXISTS `hackathon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hackathon`;

-- --------------------------------------------------------

--
-- Table structure for table `job_seekers`
--

DROP TABLE IF EXISTS `job_seekers`;
CREATE TABLE IF NOT EXISTS `job_seekers` (
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Dob_Date` int(2) DEFAULT NULL,
  `Dob_Month` int(2) DEFAULT NULL,
  `Dob_Year` int(4) DEFAULT NULL,
  `Contact_No` varchar(10) DEFAULT NULL,
  `Type_of_Work` varchar(30) DEFAULT NULL,
  `Salary` int(10) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'ACTIVE',
  `App_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Reg_date` date DEFAULT NULL,
  `Reg_Time` time DEFAULT NULL,
  `Aadhar_No` varchar(12) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`App_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10013 ;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`Name`, `Gender`, `Dob_Date`, `Dob_Month`, `Dob_Year`, `Contact_No`, `Type_of_Work`, `Salary`, `Location`, `Description`, `status`, `App_Id`, `Reg_date`, `Reg_Time`, `Aadhar_No`, `Password`) VALUES
('Swati', 'F', 12, 12, 1990, '9876543210', 'COOK', 5000, 'CHENNAI', '', 'ACTIVE', 10000, '2015-03-07', '11:55:45', '908978675645', NULL),
('Khushboo', 'F', 11, 9, 1992, '9856453434', 'COOK', 5000, 'CHENNAI', '', 'ACTIVE', 10001, '2015-03-04', '11:55:45', '908978673333', NULL),
('Ruchi', 'F', 11, 9, 1985, '9856454433', 'MAID', 2000, 'CHENNAI', '', 'ACTIVE', 10002, '2015-02-01', '11:55:45', '908976663333', NULL),
('Pooja', 'F', 11, 4, 1982, '8956454433', 'DRIVER', 3000, 'MUMBAI', '', 'ACTIVE', 10003, '2015-01-30', '05:55:45', '908975633333', NULL),
('sa', 'F', 5, 6, 2015, '7439793', '', 4832, 'sds', 'sds', 'ACTIVE', 10004, NULL, NULL, '3879274', 'hds'),
('$name', '$gender', 17, 3, 1990, '$phone', '$work', 9088, '$location', '$det', 'ACTIVE', 10005, NULL, NULL, '$aadhar', '$pwd'),
('hfkjhfw', '3', 19, 11, 1996, '+912345678', '5', 900, 'Delhi', 'need work', 'ACTIVE', 10006, NULL, NULL, '908070605040', 'abcd1234'),
('Name', '0', 0, 0, 0, '+91', '0', 0, '', '', 'ACTIVE', 10007, NULL, NULL, '', ''),
('Hardika', 'F', 25, 8, 1989, '9953562725', 'COOK', 9000, 'DELHI', 'HI', 'HIRED', 10008, NULL, NULL, '990099009900', NULL),
('Hardika', 'F', 25, 8, 1989, '9953562725', 'COOK', 9000, 'GURGAON', 'I want to work with you', 'ACTIVE', 10009, NULL, NULL, '990099009900', 'jaisiyaram'),
('Chinky', '2', 18, 12, 1995, '+919999999', '3', 9000, 'Gurgaon', 'hi', 'ACTIVE', 10010, NULL, NULL, '444444444444', 'password'),
('Name', '0', 0, 0, 0, '+91', '0', 0, '', '', 'ACTIVE', 10011, NULL, NULL, '', ''),
('Name', '0', 0, 0, 0, '+91', '0', 0, '', '', 'ACTIVE', 10012, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_seekers`
--

DROP TABLE IF EXISTS `service_seekers`;
CREATE TABLE IF NOT EXISTS `service_seekers` (
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Dob_date` int(11) DEFAULT NULL,
  `Dob_month` int(11) DEFAULT NULL,
  `Dob_year` int(11) DEFAULT NULL,
  `Contact_No` varchar(11) NOT NULL,
  `Aadhar_No` varchar(12) NOT NULL DEFAULT '',
  `Gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Aadhar_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_seekers`
--

INSERT INTO `service_seekers` (`Name`, `Email`, `Password`, `Dob_date`, `Dob_month`, `Dob_year`, `Contact_No`, `Aadhar_No`, `Gender`) VALUES
('harshitha', 'khushishah_99@yahoo.co.in', 'abcd1234', 9, 9, 1992, 'phone', '100000000000', '2'),
('Vishakha', 'vishi@ex.com', 'vish1234', 23, 12, 1995, '9182736450', '908912456725', 'F'),
('Radhika', 'radhika@gmail.com', 'radhikaanand', 9, 9, 1993, 'phone', '909921001193', '2'),
('Raghav', 'raghav@email.com', '12345678', 7, 3, 2013, 'phone', '919280077334', '1'),
('ldfewef', 'poojagoel1991@yahoo.com', 'abcd1234', 18, 12, 1997, 'phone', '987237664345', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
