-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2018 at 01:02 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `fit_admin_management`
--

CREATE TABLE IF NOT EXISTS `fit_admin_management` (
  `id` int(11) NOT NULL,
  `trainer_code` varchar(20) NOT NULL,
  `trainer_follow` int(11) DEFAULT NULL,
  `trainer_score` int(11) DEFAULT NULL,
  `trainer_status_system` varchar(2) DEFAULT NULL,
  `createdDate` date NOT NULL,
  `modifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fit_answers`
--

CREATE TABLE IF NOT EXISTS `fit_answers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_code` varchar(20) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `fit_member`
--

CREATE TABLE IF NOT EXISTS `fit_member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `frist_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `photo_path` varchar(50) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `address3` varchar(50) DEFAULT NULL,
  `telephone1` varchar(10) DEFAULT NULL,
  `telephone2` varchar(10) DEFAULT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `member_vote` varchar(10) DEFAULT NULL,
  `member_read` varchar(10) DEFAULT NULL,
  `count_read_profile` varchar(10) DEFAULT NULL,
  `status_logon` varchar(2) DEFAULT NULL,
  `status_system` varchar(2) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `member_type` varchar(10) DEFAULT NULL,
  `work_exprerience` int(5) DEFAULT NULL,
  `member_overview` varchar(200) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_code` varchar(20) NOT NULL,
  `price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `fit_member_regis`
--

CREATE TABLE IF NOT EXISTS `fit_member_regis` (
  `member_id` int(11) NOT NULL,
  `member_code` varchar(20) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(20) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_fullname` varchar(100) CHARACTER SET utf32 NOT NULL,
  `member_filename` varchar(100) DEFAULT NULL,
  `member_brithday` date DEFAULT NULL,
  `member_gender` varchar(10) DEFAULT NULL,
  `member_status` varchar(10) DEFAULT NULL,
  `member_address` varchar(250) DEFAULT NULL,
  `member_phone1` varchar(10) DEFAULT NULL,
  `member_phone2` varchar(10) DEFAULT NULL,
  `member_id_card` varchar(13) DEFAULT NULL,
  `member_student` varchar(50) DEFAULT NULL,
  `member_status_system` varchar(2) DEFAULT NULL,
  `createdDate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_member_regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `fit_questions`
--

CREATE TABLE IF NOT EXISTS `fit_questions` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `view` int(10) NOT NULL,
  `reply` int(10) NOT NULL,
  `user_code` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_questions`
--


-- --------------------------------------------------------

--
-- Table structure for table `fit_trainer_regis`
--

CREATE TABLE IF NOT EXISTS `fit_trainer_regis` (
  `trainer_id` int(11) NOT NULL,
  `trainer_code` varchar(20) NOT NULL,
  `trainer_username` varchar(50) NOT NULL,
  `trainer_password` varchar(20) NOT NULL,
  `trainer_email` varchar(50) NOT NULL,
  `trainer_fullname` varchar(50) NOT NULL,
  `trainer_filename` varchar(50) NOT NULL,
  `trainer_birthday` date DEFAULT NULL,
  `trainer_gender` varchar(5) DEFAULT NULL,
  `trainer_status` varchar(10) DEFAULT NULL,
  `trainer_address_card` varchar(250) DEFAULT NULL,
  `trainer_address_contact` varchar(250) DEFAULT NULL,
  `trainer_occupation` varchar(100) DEFAULT NULL,
  `trainer_skill` varchar(100) DEFAULT NULL,
  `trainer_phone1` varchar(10) DEFAULT NULL,
  `trainer_phone2` varchar(10) DEFAULT NULL,
  `trainer_time` varchar(20) DEFAULT NULL,
  `trainer_area` varchar(20) DEFAULT NULL,
  `trainer_language` varchar(20) DEFAULT NULL,
  `trainer_idcard` varchar(13) DEFAULT NULL,
  `trainer_vehicle` varchar(10) DEFAULT NULL,
  `tainer_experience` varchar(5) DEFAULT NULL,
  `tainer_overview` varchar(200) DEFAULT NULL,
  `tainer_status_system` varchar(2) DEFAULT NULL,
  `tainer_createdDate` date NOT NULL,
  `tainer_modifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
--
-- Indexes for dumped tables
--

--
-- Indexes for table `fit_admin_management`
--
ALTER TABLE `fit_admin_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fit_answers`
--
ALTER TABLE `fit_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fit_member`
--
ALTER TABLE `fit_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `fit_member_regis`
--
ALTER TABLE `fit_member_regis`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `fit_questions`
--
ALTER TABLE `fit_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fit_trainer_regis`
--
ALTER TABLE `fit_trainer_regis`
  ADD PRIMARY KEY (`trainer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fit_admin_management`
--
ALTER TABLE `fit_admin_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fit_answers`
--
ALTER TABLE `fit_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fit_member`
--
ALTER TABLE `fit_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fit_member_regis`
--
ALTER TABLE `fit_member_regis`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `fit_questions`
--
ALTER TABLE `fit_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `fit_trainer_regis`
--
ALTER TABLE `fit_trainer_regis`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
