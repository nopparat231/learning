-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 11:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choice_id` int(11) NOT NULL,
  `choice_name` varchar(100) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `choice_name`, `video`) VALUES
(1, 'การดูแลผู้สูงอายุ', 'https://www.youtube.com/watch?v=jyRLALwqjX8'),
(2, 'ทดสอบ', 'https://www.youtube.com/watch?v=32FB-gYr49Y'),
(3, 'ทดสอบ Cat Cat Cat', 'https://www.youtube.com/watch?v=UnD2YY2XHno');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(3) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL DEFAULT '',
  `c1` varchar(100) NOT NULL DEFAULT '',
  `c2` varchar(100) NOT NULL DEFAULT '',
  `c3` varchar(100) NOT NULL DEFAULT '',
  `c4` varchar(100) NOT NULL DEFAULT '',
  `answer` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `choice_id`, `question`, `c1`, `c2`, `c3`, `c4`, `answer`) VALUES
(1, 1, 'ข้อที่ 1', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(2, 1, 'ข้อที่ 2', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(3, 1, 'ข้อที่ 3', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(4, 1, 'ข้อที่ 4', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(5, 1, 'ข้อที่ 5', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(6, 1, 'ข้อที่ 6', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(7, 1, 'ข้อที่ 7', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(8, 1, 'ข้อที่ 8', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(9, 1, 'ข้อที่ 9', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(10, 1, 'ข้อที่ 10', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(11, 1, 'ข้อที่ 11', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(12, 1, 'ข้อที่ 12', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(13, 1, 'ข้อที่ 13', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(14, 1, 'ข้อที่ 14', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(15, 1, 'ข้อที่ 15', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(16, 1, 'ข้อที่ 16', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(17, 1, 'ข้อที่ 17', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(18, 1, 'ข้อที่ 18', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(19, 1, 'ข้อที่ 19', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(20, 1, 'ข้อที่ 20', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(21, 2, 'ข้อที่ 1', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(22, 2, 'ข้อที่ 2', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(23, 2, 'ข้อที่ 3', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(24, 2, 'ข้อที่ 4', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(25, 2, 'ข้อที่ 5', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(26, 2, 'ข้อที่ 6', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(27, 2, 'ข้อที่ 7', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(28, 2, 'ข้อที่ 8', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(29, 2, 'ข้อที่ 9', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(30, 2, 'ข้อที่ 10', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(31, 2, 'ข้อที่ 11', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(32, 2, 'ข้อที่ 12', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(33, 2, 'ข้อที่ 13', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(34, 2, 'ข้อที่ 14', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(35, 2, 'ข้อที่ 15', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(36, 2, 'ข้อที่ 16', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(37, 2, 'ข้อที่ 17', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(38, 2, 'ข้อที่ 18', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(39, 1, 'ข้อที่ 19', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(40, 2, 'ข้อที่ 20', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `Userlevel` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `email`, `phone`, `Userlevel`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 'admin@gmail.com', '0900000000', 'A'),
(2, 'bbb', 'bbb', 'bbbb', 'bbbb', 'user@gmail.com', '0900000000', 'M'),
(9, 'หกดหกดหกด', 'หกดหกดหกด', 'หกดหกดหกด', 'หกดหกดหกด', 'dfdf@gg.com', '32', 'M'),
(8, 'sdfsdfdsf', 'sdfsdfsdf', 'sdfsdfsdfsdf', 'sdfsdfsdfsdf', 'sdfd@hh.dd', '201021212', 'M'),
(10, 'fff', 'fff', 'fff', 'fff', 'fff@gg.ff', '111111111', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `user_learning`
--

CREATE TABLE `user_learning` (
  `user_learning_id` int(10) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_learning_bf` int(20) NOT NULL,
  `user_learning_af` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_learning`
--

INSERT INTO `user_learning` (`user_learning_id`, `choice_id`, `user_id`, `user_learning_bf`, `user_learning_af`) VALUES
(1, 1, 2, 15, 20),
(2, 2, 8, 10, 15),
(3, 3, 2, 15, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_learning`
--
ALTER TABLE `user_learning`
  ADD PRIMARY KEY (`user_learning_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_learning`
--
ALTER TABLE `user_learning`
  MODIFY `user_learning_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
