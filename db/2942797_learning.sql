-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb25.runhosting.com
-- Generation Time: Feb 05, 2019 at 09:58 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2942797_learning`
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
(2, 'ทดสอบ Hey', 'https://www.youtube.com/watch?v=32FB-gYr49Y'),
(3, 'ทดสอบ Cat', 'https://www.youtube.com/watch?v=hY7m5jjJ9mM');

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
(21, 1, 'ข้อที่ 21', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(22, 2, 'ข้อที่ 22', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(23, 2, 'ข้อที่ 23', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(24, 2, 'ข้อที่ 24', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(25, 2, 'ข้อที่ 25', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(41, 2, 'ข้อที่ 26', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(42, 2, 'ข้อที่ 27', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(43, 2, 'ข้อที่ 28', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(44, 2, 'ข้อที่ 29', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(45, 2, 'ข้อที่ 30', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(46, 3, 'ข้อที่ 1', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(47, 3, 'ข้อที่ 2', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(48, 3, 'ข้อที่ 3', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(49, 3, 'ข้อที่ 4', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(50, 3, 'ข้อที่ 5', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 4),
(51, 3, 'ข้อที่ 6', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(52, 3, 'ข้อที่ 7', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(53, 3, 'ข้อที่ 8', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 1),
(54, 3, 'ข้อที่ 9', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 2),
(55, 3, 'ข้อที่ 10', 'ตัวเลือกที่ 1', 'ตัวเลือกที่ 2', 'ตัวเลือกที่ 3', 'ตัวเลือกที่ 4', 3),
(56, 6, 'ทดทดทดทด13', 'ข้อที่ 1', 'ข้อที่ 2', 'ข้อที่ 3', 'ข้อที่ 4', 2),
(57, 6, 'ทดทดทดทด15', 'ข้อที่ 1', 'ข้อที่ 2', 'ข้อที่ 3', 'ข้อที่ 4', 2);

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
  `Userlevel` varchar(1) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `email`, `phone`, `Userlevel`, `session_id`, `Status`) VALUES
(30, 'ssssss', 'ssssss', 'ssss', 'ssss', '23.noop@gmail.com', '5165165165', 'M', '1476514e0f154b00cdfc68033cac8b01', 'Y'),
(31, 'gggg', 'gggggg', 'gggg', 'gggg', 'oiru6699@gmail.com', '5454543432', 'M', '1476514e0f154b00cdfc68033cac8b01', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user_learning`
--

CREATE TABLE `user_learning` (
  `user_learning_id` int(10) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_learning_bf` int(20) NOT NULL,
  `user_learning_af` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_learning`
--
ALTER TABLE `user_learning`
  MODIFY `user_learning_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
