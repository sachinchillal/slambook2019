-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 06:00 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slam_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `slam2k19`
--

CREATE TABLE `slam2k19` (
  `sl_no` int(11) NOT NULL,
  `f` varchar(30) DEFAULT NULL,
  `t` varchar(30) DEFAULT NULL,
  `dress` varchar(30) DEFAULT NULL,
  `i` varchar(90) DEFAULT NULL,
  `expect` varchar(90) DEFAULT NULL,
  `opinion` varchar(90) DEFAULT NULL,
  `llike` varchar(90) DEFAULT NULL,
  `dlike` varchar(90) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `crime` varchar(90) DEFAULT NULL,
  `love` varchar(90) DEFAULT NULL,
  `gift` varchar(90) DEFAULT NULL,
  `word` varchar(90) DEFAULT NULL,
  `propo` varchar(90) DEFAULT NULL,
  `b1` varchar(30) DEFAULT NULL,
  `b2` varchar(30) DEFAULT NULL,
  `b3` varchar(30) DEFAULT NULL,
  `g1` varchar(30) DEFAULT NULL,
  `g2` varchar(30) DEFAULT NULL,
  `g3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slam2k19`
--

INSERT INTO `slam2k19` (`sl_no`, `f`, `t`, `dress`, `i`, `expect`, `opinion`, `llike`, `dlike`, `name`, `crime`, `love`, `gift`, `word`, `propo`, `b1`, `b2`, `b3`, `g1`, `g2`, `g3`) VALUES
(1, 'me', 'you', 'red', 'SINDHANUR', 'orange', 'green', 'violet', 'naviblue', 'Kannada, Hindi & Telugu Movies', 'grey', 'white', 'pink', 'goldlen wing', 'silver', 'diamond', 'plantinum', 'carbon', 'water', 'air', 'soil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slam2k19`
--
ALTER TABLE `slam2k19`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slam2k19`
--
ALTER TABLE `slam2k19`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
