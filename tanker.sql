-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanker`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakdown`
--

CREATE TABLE `breakdown` (
  `idbr` varchar(100) NOT NULL,
  `tt` int(20) NOT NULL,
  `load1` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `probdet` varchar(100) NOT NULL,
  `probdet1` varchar(100) NOT NULL,
  `probdet2` varchar(100) NOT NULL,
  `probdet3` varchar(100) NOT NULL,
  `probdet4` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `amt` int(20) NOT NULL,
  `billno` int(20) NOT NULL,
  `vendor1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breakdown`
--

INSERT INTO `breakdown` (`idbr`, `tt`, `load1`, `date1`, `probdet`, `probdet1`, `probdet2`, `probdet3`, `probdet4`, `vendor`, `cash`, `qty`, `amt`, `billno`, `vendor1`) VALUES
('sd', 1212, '', '2021-01-05', 'awdawd', 'awdad', 'awdawd', 'awdawd', 'awdawd', '12121add', 'cash', 1212, 1212121, 1212, 'adad'),
('sd', 1234, '', '2021-01-07', 'awdwad', 'awdawd', 'wadawd', 'awdawd', 'awdawd', '12121add', 'cash', 1212, 121212, 12121, 'aaa'),
('sd', 1234, '', '2021-01-07', 'awdwad', 'awdawd', 'wadawd', 'awdawd', 'awdawd', '12121add', 'cash', 1212, 121212, 12121, 'aaa'),
('sd', 211, 'load', '2021-01-27', 'ada', 'awdad', 'wadawd', 'awdawd', 'awdawd', '12121add', 'cash', 1223, 1313, 13, 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `cashdate` date NOT NULL,
  `unid` varchar(100) NOT NULL,
  `drcr` int(100) NOT NULL,
  `accdet` varchar(100) NOT NULL,
  `amount1` int(50) NOT NULL,
  `accdet1` varchar(100) NOT NULL,
  `amount2` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`cashdate`, `unid`, `drcr`, `accdet`, `amount1`, `accdet1`, `amount2`) VALUES
('2021-01-14', 'abcd1234', 11, 'accb1234455', 12212, 'avbbbcc124', 1232131),
('2021-01-08', 'abcd1234', 1212, 'accb1234455', 1221, 'avbbbcc124', 1221),
('0000-00-00', 'abcd1234', 11, 'abcd', 13333, 'efgh', 547);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `lid` int(11) NOT NULL,
  `username` varchar(240) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`lid`, `username`, `password`) VALUES
(1, 'user1@tanker.com', 'user1'),
(2, 'user2', 'user2'),
(3, 'user2@tanker.com', 'user2'),
(4, 'admin', 'admin'),
(5, 'use', '123');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `idma` varchar(100) NOT NULL,
  `tt` int(20) NOT NULL,
  `load1` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `probdet` varchar(100) NOT NULL,
  `probdet1` varchar(100) NOT NULL,
  `probdet2` varchar(100) NOT NULL,
  `probdet3` varchar(100) NOT NULL,
  `probdet4` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `amt` int(20) NOT NULL,
  `billno` int(20) NOT NULL,
  `vendor1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`idma`, `tt`, `load1`, `date1`, `probdet`, `probdet1`, `probdet2`, `probdet3`, `probdet4`, `vendor`, `cash`, `qty`, `amt`, `billno`, `vendor1`) VALUES
('wdwad', 11, '', '2021-01-20', 'adawd', 'awdawd', 'awdawd', 'awdawd', 'awdaw', 'awdwad', 'cash', 111, 1121221, 1221, 'wadawda'),
('awdaw', 1213, 'load', '2021-01-17', 'ada', 'awdd', 'wadawd', 'awdawd', 'awdawd', 'awdwad', 'cash', 4353, 343, 53453, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `minor`
--

CREATE TABLE `minor` (
  `idmi` varchar(100) NOT NULL,
  `tt` int(20) NOT NULL,
  `load1` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `probdet` varchar(100) NOT NULL,
  `probdet1` varchar(100) NOT NULL,
  `probdet2` varchar(100) NOT NULL,
  `probdet3` varchar(100) NOT NULL,
  `probdet4` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `amt` int(20) NOT NULL,
  `billno` int(20) NOT NULL,
  `vendor1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minor`
--

INSERT INTO `minor` (`idmi`, `tt`, `load1`, `date1`, `probdet`, `probdet1`, `probdet2`, `probdet3`, `probdet4`, `vendor`, `cash`, `qty`, `amt`, `billno`, `vendor1`) VALUES
('awda', 1212, '', '2021-01-20', 'ada', 'awdawd', 'wadawd', 'wdad', 'awdawd', 'awdwad', 'cash', 121, 1234, 2131, 'wd'),
('awda', 323, '', '2021-01-13', 'ada', 'awdawd', 'wadawd', 'wdad', 'awdawd', 'rrrrr', 'cash', 123, 131231, 12321, 'adad');

-- --------------------------------------------------------

--
-- Table structure for table `tankerdetails`
--

CREATE TABLE `tankerdetails` (
  `registrationnumber` varchar(100) NOT NULL,
  `certificate` int(100) NOT NULL,
  `image` longtext NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `manufacturingdate` date NOT NULL,
  `DATE` date NOT NULL,
  `fitness` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `insurance` date NOT NULL,
  `productinsurance` date NOT NULL,
  `statepermit` date NOT NULL,
  `nationalpermit` date NOT NULL,
  `explosive` date NOT NULL,
  `calibraton` date NOT NULL,
  `polution` date NOT NULL,
  `safety` date NOT NULL,
  `tax` date NOT NULL,
  `emidate` date NOT NULL,
  `emiamount` int(20) NOT NULL,
  `restemiamount` int(20) NOT NULL,
  `tyre` int(20) NOT NULL,
  `battery` int(20) NOT NULL,
  `capacity` int(20) NOT NULL,
  `ch1` int(10) NOT NULL,
  `ch2` int(10) NOT NULL,
  `ch3` int(10) NOT NULL,
  `ch4` int(10) NOT NULL,
  `ch5` int(10) NOT NULL,
  `ch6` int(10) NOT NULL,
  `company` varchar(100) NOT NULL,
  `slno` int(10) NOT NULL,
  `dop` date NOT NULL,
  `warupto` date NOT NULL,
  `image2` varchar(100) NOT NULL,
  `dlno` int(20) NOT NULL,
  `hazno` int(20) NOT NULL,
  `aadharno` int(20) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `nob` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `dlno1` int(20) NOT NULL,
  `hazno1` int(20) NOT NULL,
  `aadharno1` int(20) NOT NULL,
  `mobileno1` int(20) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `accno1` varchar(100) NOT NULL,
  `nob1` varchar(100) NOT NULL,
  `ifsc1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tankerdetails`
--

INSERT INTO `tankerdetails` (`registrationnumber`, `certificate`, `image`, `make`, `model`, `manufacturingdate`, `DATE`, `fitness`, `image1`, `insurance`, `productinsurance`, `statepermit`, `nationalpermit`, `explosive`, `calibraton`, `polution`, `safety`, `tax`, `emidate`, `emiamount`, `restemiamount`, `tyre`, `battery`, `capacity`, `ch1`, `ch2`, `ch3`, `ch4`, `ch5`, `ch6`, `company`, `slno`, `dop`, `warupto`, `image2`, `dlno`, `hazno`, `aadharno`, `mobileno`, `address`, `accno`, `nob`, `ifsc`, `dlno1`, `hazno1`, `aadharno1`, `mobileno1`, `address1`, `accno1`, `nob1`, `ifsc1`) VALUES
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 122, '', 'tata', 'rx12', '2020-12-31', '2021-01-15', '131', '', '2021-01-14', '2021-01-15', '2021-01-05', '2021-01-10', '2021-01-05', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-23', '2021-01-13', 1222, 122, 12, 4, 12, 4, 4, 0, 0, 0, 0, 'abcd', 123, '2021-01-26', '2021-01-15', '', 2311, 1231, 1213, 13213, 'Ghatkopar East', '13123', 'ICICI', 'AVC123', 1313, 123, 12321, 1313, 'Ghatkopar East', '131', 'ADDDDD', 'ADAW1223'),
('1234', 21321, '', 'tata', 'rx12', '2021-01-09', '2021-01-06', 'wqeqe', '', '2021-01-08', '2021-01-21', '2021-01-23', '2021-01-18', '2021-01-20', '2021-01-15', '2021-01-23', '2021-01-14', '2021-01-28', '2021-01-28', 1213, 1312, 12, 12, 12, 3, 4, 4, 0, 0, 0, 'abcd', 1231, '2021-01-17', '2021-02-02', '', 1231, 1231, 1231, 1231313, '1ada', '12', 'ICICI', 'AVC123', 2131, 1231, 1321, 21313, 'adwda', 'wdaw131', 'dadw', 'ADAW1223'),
('12313', 212313, '', 'qeqe', 'qeqe', '2021-01-27', '2021-01-11', 'nice', '', '2021-01-06', '2021-01-06', '2021-01-02', '2021-01-11', '2021-01-13', '2021-01-27', '2021-01-07', '2021-01-19', '2021-01-08', '2021-01-17', 1321321, 12321313, 12, 12, 12, 1, 7, 4, 0, 0, 0, 'abcd', 12313, '2021-01-14', '2021-01-19', '', 123123, 123213, 12313, 11231, 'dqwq', '13123', 'ICICI', 'AVC123', 123213, 12313, 1231, 1213123, 'dadwda', '21231', 'adwa', 'wadw131231'),
('1234', 12313, '', 'tata', 'rx12', '2021-01-06', '2021-01-15', 'wqeqe', '', '2021-01-12', '2021-01-07', '2021-01-16', '2021-01-23', '2021-01-21', '2021-01-11', '2021-01-18', '2021-01-14', '2021-01-27', '2021-01-21', 12313, 123213, 123, 12, 12, 4, 5, 3, 0, 0, 0, 'abcd', 12313, '2021-01-20', '2021-01-27', '', 1232, 1231, 123131, 12321313, 'Ghatkopar East', '2131', 'ICICI', 'AVC123', 1231, 1231, 123131, 1312, 'Ghatkopar East', '132131', 'ADDDDD', '21312'),
('1234', 12313, '', 'tata', 'rx12', '2021-01-06', '2021-01-15', 'wqeqe', '', '2021-01-12', '2021-01-07', '2021-01-16', '2021-01-23', '2021-01-21', '2021-01-11', '2021-01-18', '2021-01-14', '2021-01-27', '2021-01-21', 12313, 123213, 123, 12, 12, 4, 5, 3, 4, 0, 0, 'abcd', 12313, '2021-01-20', '2021-01-27', '', 1232, 1231, 123131, 12321313, 'Ghatkopar East', '2131', 'ICICI', 'AVC123', 1231, 1231, 123131, 1312, 'Ghatkopar East', '132131', 'ADDDDD', '21312'),
('1234', 12313, '', 'tata', 'rx12', '2021-01-06', '2021-01-15', 'wqeqe', '', '2021-01-12', '2021-01-07', '2021-01-16', '2021-01-23', '2021-01-21', '2021-01-11', '2021-01-18', '2021-01-14', '2021-01-27', '2021-01-21', 12313, 123213, 123, 12, 12, 4, 5, 3, 4, 0, 0, 'abcd', 12313, '2021-01-20', '2021-01-27', '', 1232, 1231, 123131, 12321313, 'Ghatkopar East', '2131', 'ICICI', 'AVC123', 1231, 1231, 123131, 1312, 'Ghatkopar East', '132131', 'ADDDDD', '21312'),
('1234', 1212, '', 'tata', 'rx12', '2021-01-14', '2020-12-28', 'wadawd', '', '2021-01-08', '2021-01-20', '2021-01-08', '2021-01-27', '2021-01-06', '2021-01-16', '2021-01-20', '2021-01-27', '2021-01-21', '2021-01-25', 2212, 1231, 12, 12313, 123, 21, 12, 12, 12, 34, 32, 'abcd', 12, '2021-01-24', '2021-01-12', '', 1212, 123, 1231, 12313, 'Ghatkopar East', '1231', 'ICICI', '131', 123, 123, 1231, 123213213, 'Ghatkopar East', '12313', 'ADDDDD', '21312'),
('1234', 1212, '', 'tata', 'rx12', '2021-01-14', '2020-12-28', 'wadawd', '', '2021-01-08', '2021-01-20', '2021-01-08', '2021-01-27', '2021-01-06', '2021-01-16', '2021-01-20', '2021-01-27', '2021-01-21', '2021-01-25', 2212, 1231, 12, 12313, 123, 21, 12, 12, 12, 34, 32, 'abcd', 12, '2021-01-24', '2021-01-12', '', 1212, 123, 1231, 12313, 'Ghatkopar East', '1231', 'ICICI', '131', 123, 123, 1231, 123213213, 'Ghatkopar East', '12313', 'ADDDDD', '21312'),
('1234', 1212, '', 'tata', 'rx12', '2021-01-14', '2020-12-28', 'wadawd', '', '2021-01-08', '2021-01-20', '2021-01-08', '2021-01-27', '2021-01-06', '2021-01-16', '2021-01-20', '2021-01-27', '2021-01-21', '2021-01-25', 2212, 1231, 12, 12313, 123, 21, 12, 12, 12, 34, 32, 'abcd', 12, '2021-01-24', '2021-01-12', '', 1212, 123, 1231, 12313, 'Ghatkopar East', '1231', 'ICICI', '131', 123, 123, 1231, 123213213, 'Ghatkopar East', '12313', 'ADDDDD', '21312'),
('1234', 122, '1.png', '122', 'rx12', '2021-01-05', '2021-01-09', 'wqeqe', '1.png', '2021-01-13', '2021-01-15', '2021-01-12', '2021-01-14', '2021-01-08', '2021-01-27', '2021-01-20', '2021-01-27', '2021-01-26', '2021-01-14', 1243, 1341344, 12, 12, 12, 2, 2, 2, 2, 2, 2, 'awda', 122, '2021-01-07', '2021-01-19', '2.jpg', 13123, 1231, 12313, 12313, 'Ghatkopar East', '1231', 'ICICI', 'AVC123', 123, 1231, 123213, 12313, 'Ghatkopar East', '1231', 'ADDDDD', 'ADAW1223'),
('1234', 122, '1.png', '122', 'rx12', '2021-01-05', '2021-01-09', 'wqeqe', '1.png', '2021-01-13', '2021-01-15', '2021-01-12', '2021-01-14', '2021-01-08', '2021-01-27', '2021-01-20', '2021-01-27', '2021-01-26', '2021-01-14', 1243, 1341344, 12, 12, 12, 2, 2, 2, 2, 2, 2, 'awda', 122, '2021-01-07', '2021-01-19', '2.jpg', 13123, 1231, 12313, 12313, 'Ghatkopar East', '1231', 'ICICI', 'AVC123', 123, 1231, 123213, 12313, 'Ghatkopar East', '1231', 'ADDDDD', 'ADAW1223'),
('123442342', 122, '1.png', '122', 'rx12', '2021-01-05', '2021-01-09', 'wqeqe', '1.png', '2021-01-13', '2021-01-15', '2021-01-12', '2021-01-14', '2021-01-08', '2021-01-27', '2021-01-20', '2021-01-27', '2021-01-26', '2021-01-14', 1243, 1341344, 12, 12, 12, 2, 2, 2, 2, 2, 2, 'awda', 122, '2021-01-07', '2021-01-19', '2.jpg', 13123, 1231, 12313, 12313, 'Ghatkopar East', '1231', 'ICICI', 'AVC123', 123, 1231, 123213, 12313, 'Ghatkopar East', '1231', 'ADDDDD', 'ADAW1223'),
('123442342', 122, '1.png', '122', 'rx12', '2021-01-05', '2021-01-09', 'wqeqe', '1.png', '2021-01-13', '2021-01-15', '2021-01-12', '2021-01-14', '2021-01-08', '2021-01-27', '2021-01-20', '2021-01-27', '2021-01-26', '2021-01-14', 1243, 1341344, 12, 12, 12, 2, 2, 2, 2, 2, 2, 'awda', 122, '2021-01-07', '2021-01-19', '2.jpg', 13123, 1231, 12313, 12313, 'Ghatkopar East', '1231', 'ICICI', 'AVC123', 123, 1231, 123213, 12313, 'Ghatkopar East', '1231', 'ADDDDD', 'ADAW1223'),
('123442342', 122, '1.png', '122', 'rx12', '2021-01-05', '2021-01-09', 'wqeqe', '1.png', '2021-01-13', '2021-01-15', '2021-01-12', '2021-01-14', '2021-01-08', '2021-01-27', '2021-01-20', '2021-01-27', '2021-01-26', '2021-01-14', 1243, 1341344, 12, 12, 12, 2, 2, 2, 2, 2, 2, 'awda', 122, '2021-01-07', '2021-01-19', '2.jpg', 13123, 1231, 12313, 12313, 'Ghatkopar East', '1231', 'ICICI', 'AVC123', 123, 1231, 123213, 12313, 'Ghatkopar East', '1231', 'ADDDDD', 'ADAW12234'),
('123442342', 122, '1.png', '122', 'rx12', '2021-01-05', '2021-01-09', 'wqeqe', '1.png', '2021-01-13', '2021-01-15', '2021-01-12', '2021-01-14', '2021-01-08', '2021-01-27', '2021-01-20', '2021-01-27', '2021-01-26', '2021-01-14', 1243, 1341344, 12, 12, 12, 2, 2, 2, 2, 2, 2, 'awda', 122, '2021-01-07', '2021-01-19', '2.jpg', 13123, 1231, 12313, 12313, 'Ghatkopar East', '1231', 'ICICI', 'AVC123', 123, 1231, 123213, 12313, 'Ghatkopar East', '1231', 'ADDDDD', 'ADAW12234');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `notf` varchar(100) NOT NULL,
  `gst` int(50) NOT NULL,
  `mono` int(10) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `baccno` varchar(100) NOT NULL,
  `notb` varchar(100) NOT NULL,
  `ifsc1` varchar(100) NOT NULL,
  `limit1` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`notf`, `gst`, `mono`, `add1`, `cp`, `baccno`, `notb`, `ifsc1`, `limit1`) VALUES
('awdadaw', 21123, 12313, 'Ghatkopar East', 'awdad', '13231', 'cscasa', '13211', 1231),
('tan', 1234, 2312, 'awd', 'adacc', 'hhgb', 'hkv', 'juk', 5652),
('tan', 1234, 2312, 'awd', 'adacc', 'hhgb', 'hkv', 'juk', 5652),
('aaa', 333, 22, '2dd', '3e', '1w2', 'caz', 'afc', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
