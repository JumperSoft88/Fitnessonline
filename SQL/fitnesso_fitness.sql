-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2020 at 01:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnesso_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_proto_path`
--

CREATE TABLE `file_proto_path` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `path` varchar(250) NOT NULL,
  `type` varchar(10) NOT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `createdDate` datetime NOT NULL,
  `photo_type` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_proto_path`
--

INSERT INTO `file_proto_path` (`id`, `username`, `path`, `type`, `file_name`, `createdDate`, `photo_type`) VALUES
(21, 'test01', 'upload', 'header', 'green_btn.png', '2018-03-28 07:27:17', 'P'),
(22, 'test01', 'upload', 'exp', 'select_registration.png', '2018-03-28 07:27:29', 'E'),
(26, 'test01', 'upload', 'exp', 'IMG_50221.JPG', '2018-03-29 21:31:50', 'E'),
(27, 'test01', 'upload', 'exp', 'B0B91AEA-064D-4C94-B468-0844ABF36A0E.jpeg', '2018-04-08 11:44:51', 'E'),
(28, 'test01', 'upload', 'exp', '53076033-7500-4478-8A03-3452AF6E4C7D.jpeg', '2018-04-08 11:45:53', 'E'),
(29, 'test01', 'upload', 'header', 'IMG_5319.JPG', '2018-05-24 11:45:51', 'P'),
(30, 'gxi,', 'upload', 'header', 'Unlike_Pluto_-_No_Scrubs_ft__Joanna_Jones.jpg', '2018-07-27 02:30:17', 'P'),
(31, 'gxi,', 'upload', 'exp', 'fish-red-arwana-hd-wallpaper.jpg', '2018-07-27 02:30:37', 'E'),
(32, 'administrator', 'upload', 'header', 'v40.png', '2018-09-23 23:47:43', 'P'),
(33, 'mTranner', 'upload', 'header', 'ประชามติ1.jpg', '2019-02-02 09:06:28', 'P'),
(34, 'mTranner', 'upload', 'exp', 'Raising-hands34Normal_200.jpg', '2019-02-02 09:06:42', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `fit_admin_management`
--

CREATE TABLE `fit_admin_management` (
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

CREATE TABLE `fit_answers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_code` varchar(20) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_answers`
--

INSERT INTO `fit_answers` (`id`, `name`, `email`, `detail`, `question_id`, `user_code`, `created`) VALUES
(3, 'ลีน่า', 'lena@mail.com', 'ขอเบอร์ติดต่อด้วยนะค่ะ', 26, '00001', '2017-12-28'),
(4, 'สนใจ', 'test88@gmail.com', 'ติดต่อได้ที่ไหนครับ', 28, '00001', '2018-01-15'),
(5, 'ลีน่า', 'araya@gmail.com', 'น่าสนใจ', 28, '00001', '2018-01-19'),
(6, 'member01', 'mail@gmail.com', 'สนใจครับ', 63, 'test0000', '2018-03-18'),
(7, 'member02', 'jumpersoft88@gmail.com', 'สนใจ', 66, 'test0000', '2018-07-07'),
(8, 'member01', 'jumpersoft88@gmail.com', 'มีความสนใจ', 165, 'test0000', '2018-07-25'),
(9, 'gxi', 'Prem@k2l.co.th', 'test', 165, 'test0000', '2018-07-27'),
(10, 'เปรม', 'Prem@k2l.com', 'test2', 165, 'test0000', '2018-07-27'),
(11, 'ใครอยากรวย!!คลิก', 'nongdeerza111@gmail.com', 'ใครอยากรวย!!คลิก : <a href=\"https://www.satu88.com/promotions\" title=\"satu88\">satu88</a>', 0, '00001', '2018-09-26'),
(12, 'nongdeerza111', 'nongdeerza111@gmail.com', 'ทางเข้า <a href=\"https://www.goldenslot.games/\" title=\"Goldenslot\">Goldenslot</a> เรามีลิงก์ทางเข้าคอยให้บริการ ท่านสามารเลือก ทางเข้าด้านล่าง เพื่อเข้าสู้หน้าหลักของ <a href=\"https://www.goldenslot-online.com/\" title=\"Goldenslot\">Goldenslot</a> จากนั้นให้ทำการกรอก Username และ Password เพื่อเข้าสู่ระบบ แล้วเพลิดเพลินไปกับเกมส์สล็อตออนไลน์ คาสิโนออนไลน์ ที่ดีที่สุด หากเกิดปัญหาในการเข้าเล่น <a href=\" http://www.gdslot.com/\" title=\"Golden slot\">Golden slot</a> สอบถามเพิ่มเติมกับเราได้ที่นี่', 0, '00001', '2018-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `fit_history_system`
--

CREATE TABLE `fit_history_system` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `member_type` varchar(50) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_history_system`
--

INSERT INTO `fit_history_system` (`id`, `username`, `email`, `member_type`, `createdDate`) VALUES
(1, 'member01', 'jumpersoft88@gmail.com', 'member', '2018-04-08 11:35:38'),
(2, 'test01', 'jumpersoft88@gmail.com', 'trainer', '2018-04-08 11:37:05'),
(3, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-08 11:37:51'),
(4, 'member02', 'jumpersoft88@gmail.com', 'member', '2018-04-08 11:42:45'),
(5, 'test01', 'jumpersoft88@gmail.com', 'trainer', '2018-04-08 11:43:46'),
(6, 'test01', 'jumpersoft88@gmail.com', 'trainer', '2018-04-08 11:47:24'),
(7, 'test01', 'jumpersoft88@gmail.com', 'trainer', '2018-04-08 11:58:35'),
(8, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 11:41:07'),
(9, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 11:53:23'),
(10, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 11:54:48'),
(11, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 11:58:46'),
(12, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 12:02:09'),
(13, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 12:06:27'),
(14, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 12:08:04'),
(15, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 12:11:41'),
(16, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-04-10 12:21:24'),
(17, 'test01', 'jumpersoft88@gmail.com', 'trainer', '2018-05-24 11:45:00'),
(18, 'member02', 'jumpersoft88@gmail.com', 'member', '2018-07-07 14:43:02'),
(19, 'test01', 'jumpersoft88@gmail.com', 'trainer', '2018-07-07 14:45:22'),
(20, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-07-07 14:46:13'),
(21, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-07-24 14:20:14'),
(22, 'member01', 'jumpersoft88@gmail.com', 'member', '2018-07-25 06:30:03'),
(23, 'gxi', 'Prem@k2l.co.th', 'member', '2018-07-27 01:48:52'),
(24, 'gxi', 'Prem@k2l.co.th', 'member', '2018-07-27 01:55:01'),
(25, 'gxi', 'Prem@k2l.co.th', 'member', '2018-07-27 02:15:57'),
(26, 'gxi,', 'Prem@k2l.co.th', 'trainer', '2018-07-27 02:28:27'),
(27, 'gxi,', 'Prem@k2l.co.th', 'trainer', '2018-07-27 10:37:52'),
(28, 'userTrainer01', 'jumpersoft88@gmail.com', 'ftcenter', '2018-08-07 23:53:33'),
(29, 'userTrainer01', 'jumpersoft88@gmail.com', 'ftcenter', '2018-08-07 23:57:08'),
(30, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2018-09-23 23:46:13'),
(31, 'mTranner', 'jumpersoft8@gmail.com', 'trainer', '2019-02-02 08:54:45'),
(32, 'mTranner', 'jumpersoft8@gmail.com', 'trainer', '2019-02-02 09:30:03'),
(33, 'Mtranner', 'jumpersoft8@gmail.com', 'trainer', '2019-02-02 09:39:54'),
(34, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2019-09-03 23:08:58'),
(35, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2019-09-27 05:44:48'),
(36, 'Magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 05:46:28'),
(37, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 05:54:08'),
(38, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 05:55:09'),
(39, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 05:57:31'),
(40, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 05:58:27'),
(41, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 06:00:15'),
(42, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 06:01:53'),
(43, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 06:04:16'),
(44, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 06:07:21'),
(45, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:05:17'),
(46, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:06:09'),
(47, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:07:38'),
(48, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:09:06'),
(49, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:09:33'),
(50, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:10:08'),
(51, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:10:38'),
(52, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:12:36'),
(53, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:12:59'),
(54, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:13:42'),
(55, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:25:46'),
(56, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:28:00'),
(57, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:33:34'),
(58, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:36:06'),
(59, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:39:53'),
(60, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 11:59:33'),
(61, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:00:25'),
(62, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:01:01'),
(63, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:01:43'),
(64, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:03:00'),
(65, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:04:54'),
(66, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:05:46'),
(67, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:32:09'),
(68, 'magtrainer', 'jumpersoft88@gmail.com', 'trainer', '2019-09-27 12:42:08'),
(69, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2019-10-14 18:10:25'),
(70, 'administrator', 'jumpersoft88@gmail.com', 'admin', '2019-10-14 18:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `fit_history_trainer`
--

CREATE TABLE `fit_history_trainer` (
  `id` int(11) NOT NULL,
  `his_username` varchar(100) NOT NULL,
  `his_email` varchar(100) NOT NULL,
  `createdDate` date NOT NULL,
  `his_view_id` int(11) DEFAULT NULL,
  `his_username_trainer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_history_trainer`
--

INSERT INTO `fit_history_trainer` (`id`, `his_username`, `his_email`, `createdDate`, `his_view_id`, `his_username_trainer`) VALUES
(6, 'member01', 'jumpersoft88@gmail.com', '2018-04-08', 159, 'test01'),
(7, 'member02', 'jumpersoft88@gmail.com', '2018-04-08', 159, 'test01'),
(8, 'member02', 'jumpersoft88@gmail.com', '2018-07-07', 161, 'test40'),
(9, 'member02', 'jumpersoft88@gmail.com', '2018-07-07', 63, 'ครูบอย'),
(10, 'member02', 'jumpersoft88@gmail.com', '2018-07-07', 66, 'ครูชาย'),
(11, 'member02', 'jumpersoft88@gmail.com', '2018-07-07', 66, 'ครูชาย'),
(12, 'member01', 'jumpersoft88@gmail.com', '2018-07-25', 165, 'GuestGolla'),
(13, 'member01', 'jumpersoft88@gmail.com', '2018-07-25', 165, 'GuestGolla'),
(14, 'member01', 'jumpersoft88@gmail.com', '2018-07-25', 165, 'GuestGolla'),
(15, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(16, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(17, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(18, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(19, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(20, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(21, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(22, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(23, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 165, 'GuestGolla'),
(24, 'gxi', 'Prem@k2l.co.th', '2018-07-27', 163, 'swu.6199000test');

-- --------------------------------------------------------

--
-- Table structure for table `fit_member`
--

CREATE TABLE `fit_member` (
  `member_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `frist_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `photo_path` varchar(50) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `address3` varchar(50) DEFAULT NULL,
  `province_id` varchar(2) NOT NULL,
  `province_name` varchar(50) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `telephone1` varchar(10) DEFAULT NULL,
  `telephone2` varchar(10) DEFAULT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `member_vote` varchar(10) DEFAULT NULL,
  `member_read` varchar(10) DEFAULT NULL,
  `count_read_profile` varchar(10) DEFAULT NULL,
  `status_logon` varchar(3) DEFAULT NULL,
  `status_system` varchar(3) DEFAULT NULL,
  `session_id` varchar(50) DEFAULT NULL,
  `member_type` varchar(10) DEFAULT NULL,
  `work_exprerience` int(5) DEFAULT NULL,
  `member_overview` varchar(200) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `modifiedDate` date DEFAULT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_code` varchar(20) NOT NULL,
  `price` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `activeted` bit(1) DEFAULT NULL,
  `uni_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_member`
--

INSERT INTO `fit_member` (`member_id`, `email`, `password`, `frist_name`, `last_name`, `photo_path`, `gender`, `status`, `address1`, `address2`, `address3`, `province_id`, `province_name`, `postcode`, `telephone1`, `telephone2`, `id_card`, `member_vote`, `member_read`, `count_read_profile`, `status_logon`, `status_system`, `session_id`, `member_type`, `work_exprerience`, `member_overview`, `createdDate`, `modifiedDate`, `member_username`, `member_code`, `price`, `age`, `activeted`, `uni_code`) VALUES
(42, 'jumpersoft88@gmail.com', 'c4c10027995f5749ce2216863b8278b2', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'off', 'off', NULL, 'admin', NULL, NULL, '2018-03-25', '2018-03-25', 'administrator', '', '2,000', NULL, b'1', NULL),
(67, 'jumpersoft88@gmail.com', 'c4c10027995f5749ce2216863b8278b2', '', '', NULL, 'ชาย', 'marriage', '', '', NULL, '0', '', '', '', '', '', NULL, NULL, NULL, 'off', 'on', NULL, 'trainer', 0, '', '2019-09-27', '2019-09-27', 'magTrainer', '', '3,999', '', b'1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fit_member_regis`
--

CREATE TABLE `fit_member_regis` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_member_regis`
--

INSERT INTO `fit_member_regis` (`member_id`, `member_code`, `member_username`, `member_password`, `member_email`, `member_fullname`, `member_filename`, `member_brithday`, `member_gender`, `member_status`, `member_address`, `member_phone1`, `member_phone2`, `member_id_card`, `member_student`, `member_status_system`, `createdDate`) VALUES
(1, 'MB66577997', 'username_mag01', '1234', 'user@mail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fit_province`
--

CREATE TABLE `fit_province` (
  `id` int(11) NOT NULL,
  `province` varchar(250) DEFAULT NULL,
  `region` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_province`
--

INSERT INTO `fit_province` (`id`, `province`, `region`) VALUES
(1, 'กทม', 'ภาคกลาง'),
(2, 'สมุทรปราการ', ''),
(3, 'นนทบุรี', ''),
(4, 'ปทุมธานี', ''),
(5, 'พระนครศรีอยุธยา', ''),
(6, 'อ่างทอง', ''),
(7, 'ลพบุรี', ''),
(8, 'สิงห์บุรี', ''),
(9, 'ชัยนาท', ''),
(10, 'สระบุรี', ''),
(11, 'ชลบุรี', ''),
(12, 'ระยอง', ''),
(13, 'จันทบุรี', ''),
(14, 'ตราด', ''),
(15, 'ฉะเชิงเทรา', ''),
(16, 'ปราจีนบุรี', ''),
(17, 'นครนายก', ''),
(18, 'สระแก้ว', ''),
(19, 'นครราชสีมา', ''),
(20, 'บุรีรัมย์', ''),
(21, 'สุรินทร์', ''),
(22, 'ศรีสะเกษ', ''),
(23, 'อุบลราชธานี', ''),
(24, 'ยโสธร', ''),
(25, 'ชัยภูมิ', ''),
(26, 'อำนาจเจริญ', ''),
(27, 'หนองบัวลำภู', ''),
(28, 'ขอนแก่น', ''),
(29, 'อุดรธานี', ''),
(30, 'เลย', ''),
(31, 'หนองคาย', ''),
(32, 'มหาสารคาม', ''),
(33, 'ร้อยเอ็ด', ''),
(34, 'กาฬสินธุ์', ''),
(35, 'สกลนคร', ''),
(36, 'นครพนม', ''),
(37, 'มุกดาหาร', ''),
(38, 'เชียงใหม่', ''),
(39, 'ลำพูน', ''),
(40, 'ลำปาง', ''),
(41, 'อุตรดิตถ์', ''),
(42, 'แพร่', ''),
(43, 'น่าน', ''),
(44, 'พะเยา', ''),
(45, 'เชียงราย', ''),
(46, 'แม่ฮ่องสอน', ''),
(47, 'นครสวรรค์', ''),
(48, 'อุทัยธานี', ''),
(49, 'กำแพงเพชร', ''),
(50, 'ตาก', ''),
(51, 'สุโขทัย', ''),
(52, 'พิษณุโลก', ''),
(53, 'พิจิตร', ''),
(54, 'เพชรบูรณ์', ''),
(55, 'ราชบุรี', ''),
(56, 'กาญจนบุรี', ''),
(57, 'สุพรรณบุรี', ''),
(58, 'นครปฐม', ''),
(59, 'สมุทรสาคร', ''),
(60, 'สมุทรสงคราม', ''),
(61, 'เพชรบุรี', ''),
(62, 'ประจวบคีรีขันธ์', ''),
(63, 'นครศรีธรรมราช', ''),
(64, 'กระบี่', ''),
(65, 'พังงา', ''),
(66, 'ภูเก็ต', ''),
(67, 'สุราษฎร์ธานี', ''),
(68, 'ระนอง', ''),
(69, 'ชุมพร', ''),
(70, 'สงขลา', ''),
(71, 'สตูล', ''),
(72, 'ตรัง', ''),
(73, 'พัทลุง', ''),
(74, 'ปัตตานี', ''),
(75, 'ยะลา', ''),
(76, 'นราธิวาส', ''),
(77, 'บึงกาฬ', '');

-- --------------------------------------------------------

--
-- Table structure for table `fit_questions`
--

CREATE TABLE `fit_questions` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `view` int(10) NOT NULL,
  `reply` int(10) NOT NULL,
  `user_code` varchar(10) NOT NULL,
  `status_system` varchar(10) DEFAULT NULL,
  `member_type` varchar(50) NOT NULL,
  `isDeleted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_questions`
--

INSERT INTO `fit_questions` (`id`, `topic`, `detail`, `name`, `email`, `created`, `view`, `reply`, `user_code`, `status_system`, `member_type`, `isDeleted`) VALUES
(31, 'รับสอนฟิตเน็ตในเขตพื้นที่ กทม.', 'รับสอนฟิตเน็ตในเขตพื้นที่ กทม. จากเทรนเนอร์มืออาชีพ ประสบการณ์มากกว่า 3 ปี', 'สมสกุล', 'jumpersoft88@gmail.com', '2018-03-07 00:00:00', 27, 0, '', NULL, 'trainer', b'0'),
(32, 'รับสอนฟิตเน็ตในเขตพื้นที่ ลาดพร้าว', 'รับสอนฟิตเน็ตในเขตพื้นที่ ลาดพร้าว จากเทรนเนอร์ ประสบการณ์มากกว่า 5 ปี', 'จักพงษ์', 'jumpersoft88@gmail.com', '2018-03-07 00:00:00', 13, 0, '', NULL, 'trainer', b'0'),
(33, 'รับสอนส่วนตัวที่ ฟิตเนส7ศรีนคริทร์', 'รายคุยกันได้ครับ 0860469444', 'เทรนเนอร์โบ้', 'veerasak.vs@gmail.com', '2018-03-08 00:00:00', 10, 0, '', NULL, 'trainer', b'0'),
(34, 'รับสอนว่ายน้ำพื่นฐานสำหรับเด็ก 1ปีค่ะ', 'รายละเอียดคุยกันได้นะค่ะราคาไม่แพง', 'ครูก้อย ค่ะ', 'fitnessonline.vs@gmail.com', '2018-03-08 00:00:00', 5, 0, '', NULL, 'trainer', b'0'),
(35, 'รับสอนมวยไทยครับ', 'รายละเอียดได้เลยครัย', 'ครูชาย', 'fitnessonline.vs@gmail.com', '2018-03-08 00:00:00', 3, 0, '', NULL, 'trainer', b'0'),
(36, 'รับสอนเป็นกลุ่ม5คนที่สวนหลวง ร.9 ค่ะ', 'รายละเอียดคุยกันได้คะ', 'ครูเม', 'fitnessonline.vs@gmail.com', '2018-03-08 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(37, 'รับสอนส่วนตัวที่fitness7พัทยาครับ', 'รายละเอียดคุยกันได้ครับ', 'ครูปอ', 'fitnessonline.vs@gmail.com', '2018-03-08 00:00:00', 9, 0, '', NULL, 'trainer', b'0'),
(38, 'รับสอนส่วนตัวที่ฟิตเนส7รัชดาค่ะ', 'รายละเอียดทักมานะค่ะ', 'ครูเจน', 'fitnessonline.vs@gmail.com', '2018-03-08 00:00:00', 5, 0, '', NULL, 'trainer', b'0'),
(39, 'รับสอนโยคะกลุ่ม10-20คน ค่ะ สวนสุขภาพเทศบาลกระบี่', 'รายละเอียดส่งมาที่Mailคะ', 'ครูจ้า', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 1, 0, '', NULL, 'trainer', b'0'),
(40, 'รับสอนออกกำลังกายกลุ่ม5คนค่ะสวนหลวงเทศบาลำระแท่น', 'ส่งรายละเอียดทางmailค่ะ', 'ครูไก่', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(41, 'รับสอนโยคะกลุ่ม10คนค่ะสวนสุขภาพเทศบาลเมืองกาฬสินธุ์', 'รายละเอียดทางmailค่ะ', 'ครูปลา', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(42, 'รับสอนเต้น/โยคะกลุ่ม20คนค่ะเทศบาลเมืองกำแพงเพชร', 'รายละเอียดทางmailค่ะ', 'ครูปาย', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(43, 'รับสอนส่วนตัวออกกำลังกายส่วนตัวฟิตเนสตัวเมืองขอนแก่น', 'รายละเอียดทางmailครับ', 'ครูปอน', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(44, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักภายใน6เดือนฟิตเนสเมืองจันจันทบุรี', 'รายละเอียดทางmailครับ', 'ครูปอ', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(45, 'รับสอนตัวลดน้ำหนักสร้างกล้ามเนื้อที่ฟิตเนสตัวเมืองฉะเชิงเทรา', 'รายละเอียดทางmailครับ', 'ครูโบ้', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(46, 'รับสอนส่วนตัวลดน้ำหนักสำหรับผู้หญิงค่ะภายใน6เดือนฟิตเนสที่พัทยา', 'รายละเอียดทางmailค่ะ', 'ครูชมพู่', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(47, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสตัวเมืองชัยนาท', 'รายละเอียดทางmailครับ', 'ครูบอย', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(48, 'รับสอนโยคะกลุ่ม20คนค่ะเทศบาลเมืองชัยภูมิ', 'รายละเอียดทางmailค่ะ', 'ครูหญิง', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(49, 'รับสอนเต้นกลุ่ม10คนค่ะเทศบาลเมืองชุมพรค่ะ', 'รายละเอียดmailค่ะ', 'ครูวิ', 'fitnessonlin.vs@gmail.com', '2018-03-11 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(50, 'รับสอนสร้างกล้ามเนื้อเพื่อแข่งขันฟิตเนสเมืองเชียงรายครับ', 'รายละเอียดmailครับ', 'ครูโจ', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 1, 0, '', NULL, 'trainer', b'0'),
(51, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสตัวเมืองเชียงใหม่', 'รายละเอียดทางmailครับ', 'ครูบอย', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(52, 'รับสอนโยคะกลุ่ม10คนค่ะเทศบาลเมืองตรัง', 'รายละเอียดทางmailค่ะ', 'ครูจ้า', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(53, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อที่ฟิตเนสตัวเมืองตราด', 'รายละเอียดทางmailครับ', 'ครูภพ', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(54, 'รับสอนลดน้ำหนัก/สร้างกล้ามเนื้อที่ฟิตเนสตัวเมืองตาก', 'รายละเอียดทางmailครับ', 'ครูเอ', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 3, 0, '', NULL, 'trainer', b'0'),
(55, 'รับสอนโยคะกลุ่ม10คนค่ะเทศบาลเมืองนครนายก', 'รายละเอียดทางmailค่ะ', 'ครูพร', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(56, 'รับสอนสวนตัวลดน้ำหนักสร้างกล้ามเนื้อฟิตเนสตัวเมืองนครปฐม', 'รายละเอียดทางmailครับ', 'ครูเจี๊ยบ', 'fitnessonline.vs@gmail.com', '2018-03-11 00:00:00', 2, 0, '', NULL, 'trainer', b'0'),
(57, 'รับสอนโยคะกลุ่ม10-20คน ค่ะเทศบาลเมืองนครพนม', 'รายละเอียดทางmailค่ะ', 'ครูสา', 'fitnessonline.vs@gmail.com', '2018-03-12 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(58, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนัก ฟิตเนสเมืองนครราชสีมาครับ', 'รายละเอียดทางmail', 'ครูโจ้', 'fitnessonline.vs@gmail.com', '2018-03-12 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(59, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสนครศรีธรรมราชครับ', 'รายละเอียดทางmailครับ', 'ครูโบ้', 'fitnessonline.vs@gmail.com', '2018-03-12 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(60, 'รับสอนเต้น/โยคะกลุ่ม10-20คน ค่ะ เทศบาลเมืองนครสวรรค์', 'รายละเอียดทางmail', 'ครูแมว', 'fitnessonline.vs@gmail.com', '2018-03-12 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(61, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักปากเกร็ดนนทบุรีครับ', 'รายละเอียดทางmail', 'ครูหนุ่ม', 'fitnessonline.vs@gmail.com', '2018-03-12 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(62, 'รับสอนโยคะ/เต้นค่ะ เมืองน่าน', 'รายละเอียดทางmail', 'ครูจุ๊ม', 'fitnessobline.co.th', '2018-03-12 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(63, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักที่ฟิตเนสเมืองบึงกาฬ(ริมน้ำโขง)', 'รายละเอียดทางmail', 'ครูบอย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 50, 1, '', NULL, 'trainer', b'0'),
(64, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อที่ฟิตเนสวังน้อย อยุธยา', 'รายละเอียดทางmail', 'ครูโย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 22, 0, '', NULL, 'trainer', b'0'),
(65, 'รับสอนเต้นกลุ่ม 5-10 คนค่ะเทศบาลเมืองบุรีรัมย์', 'รายละเอียดทางmail', 'ครูก้อย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 32, 0, '', NULL, 'trainer', b'0'),
(66, 'รับสอนสอนส่วนตัวลดน้ำหนักสร้างกล้ามเนื้อเพื่อแข่งขันคลองหลวงปทุมธานี', 'รายละเอียดทางmail', 'ครูชาย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 21, 1, '', NULL, 'trainer', b'0'),
(67, 'รับสอนส่วนตัวลดน้ำหนักสร้างกล้ามเนื้อฟิตเนสเทศบาล อ.หัวหิน ประจวบคีรีขันธ์', 'รายละเอียดทางmail', 'ครูเอ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 19, 0, '', NULL, 'trainer', b'0'),
(68, 'รับสอนส่วนตัวสร้างกล้ามเนื้อลดน้ำหนักฟิตเนสเทศบาลเมืองปราจีนบุรี', 'รายละเอียดทางmail', 'ครูเสือ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(69, 'รับสอนเต้น5-10คนค่ะและลดน้ำหนักฟิตเนสเทศบาลเมืองพังงาค่ะ', 'รายละเอียดทางmail', 'ครูจุม', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 22, 0, '', NULL, 'trainer', b'0'),
(70, 'รับสอนสร้างกล้ามเนื้อเพื่อการแข่งขัน/ลดน้ำหนักที่ฟิตเนสเมืองพิจิตร', 'รายละเอียดทางmail', 'ครูโจ้', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 25, 0, '', NULL, 'trainer', b'0'),
(71, 'รับสอนส่วนตัวลดน้ำหนัด/สร้างกล้ามเนื้อ/มวย ที่ฟิตเนสเมืองพิษณุโลก', 'รายละเอียดทางmail', 'ครูชาย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 19, 0, '', NULL, 'trainer', b'0'),
(72, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อที่ฟิตเนสเมืองเพชรบุรี', 'รายละเอียดทางmail', 'ครูฟลุค', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 21, 0, '', NULL, 'trainer', b'0'),
(73, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักเนื้อฟิตเนสเทศบาลเมืองเพชรบรูณ์', 'รายละเอียดทางmail', 'ครูชิต', 'fitnessonline.vs@gamil.com', '2018-03-13 00:00:00', 16, 0, '', NULL, 'trainer', b'0'),
(74, 'รับสอนสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสเทศบาลเมืองแพร่', 'รายละเอียดทางmail', 'ครูพี', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 23, 0, '', NULL, 'trainer', b'0'),
(75, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสเทศบาลเมืองพะเยา', 'รายละเอียดทางmail', 'ครูอาท', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 18, 0, '', NULL, 'trainer', b'0'),
(76, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสแถวหาดป่าตองภูเก็ต', 'รายละเอียดทางmail', 'ครูเอ็ส', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 22, 0, '', NULL, 'trainer', b'0'),
(77, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสแถวเมืองมหาสารคาม', 'รายละเอียดทางmail', 'ครูไก่', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 14, 0, '', NULL, 'trainer', b'0'),
(78, 'รับสอนสร้างกล้ามเนื้อลดน้ำหนักฟิตเนสเทศบาลเมืองมุกดาหาร', 'รายละเอียดทางmail', 'ครูเบียร์', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(79, 'รับสอนลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสใน อ.เมืองปาย จ.แม่ฮ่องสอน', 'รายละเอียดทางmail', 'ครูป๊อป', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 18, 0, '', NULL, 'trainer', b'0'),
(80, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักที่ฟิตเนสเมืองยโสธร', 'รายละเอียดทางmail', 'ครูกบ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 19, 0, '', NULL, 'trainer', b'0'),
(81, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสเมืองร้อยเอ็ด', 'รายละเอียดทางmail', 'ครูแจ๊ค', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 18, 0, '', NULL, 'trainer', b'0'),
(82, 'รับสอนโยคะกลุ่ม10-15 คนค่ะที่เทศบาลเมืองระนอง', 'รายละเอียดทางmail', 'ครูจอย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 22, 0, '', NULL, 'trainer', b'0'),
(83, 'รับสอนเต้น/ลดน้ำหนักที่ฟิตเนสเมืองระยองค่ะ', 'รายละเอียดทางmail', 'ครูบี', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 23, 0, '', NULL, 'trainer', b'0'),
(84, 'รับสอนส่วนตัวสร้างกล้ามเนื้อลดน้ำหนักที่ฟิตเนสเมืองราชบุรี', 'รายละเอียดทางmail', 'ครูริค', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 12, 0, '', NULL, 'trainer', b'0'),
(85, 'รับสอนโยคะกลุ่ม5-10คนค่ะที่เทศบาลเมืองลพบุรี', 'รายละเอียดทางmail', 'ครูปลา', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 16, 0, '', NULL, 'trainer', b'0'),
(86, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักที่ฟิตเนสเมืองลำปาง', 'รายละเอียดทางmail', 'ครูใหญ่', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 21, 0, '', NULL, 'trainer', b'0'),
(87, 'รับสอนส่วนตัวลดน้ำหนักสร้างกล้ามเนื้อฟิตเนสเมืองลำพูน', 'รายละเอียดทางmail', 'ครูA', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 13, 0, '', NULL, 'trainer', b'0'),
(88, 'รับสอนส่วนตัวลดน้ำหนักสร้างกล้ามเนื้อฟิตเนสที่เทศบาลเมืองเลย', 'รายละเอียดทางmail', 'ครูเอ็ส', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 12, 0, '', NULL, 'trainer', b'0'),
(89, 'รับสอนเต้น/ลดน้ำหนักกลุ่ม5คนค่ะฟิตเนสเทศบาลเมืองศรีสะเกษ', 'รายละเอียดทางmail', 'ครูพร', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 27, 0, '', NULL, 'trainer', b'0'),
(90, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักที่ฟิตเนสเมืองสกลนคร', 'รายละเอียดทางmail', 'ครูพี', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 20, 0, '', NULL, 'trainer', b'0'),
(91, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักที่ฟิตเนส7ศรีนครินทร์', 'รายละเอียดทางmail', 'ครูยะ', 'fitneonline.vs@gmail.com', '2018-03-13 00:00:00', 19, 0, '', NULL, 'trainer', b'0'),
(92, 'รับสอนโยคะกลุ่ม5-10คนค่ะที่เทศบาลเมืองสมุทรสาคร', 'รายละเอียดทางmail', 'ครูแพ', 'fitnessinline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(93, 'รับสอนเต้นกลุ่ม5-10คยค่ะที่เทศบาลเมืองสระแก้ว', 'รายละเอียดทรงmail', 'ครูจ้า', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 19, 0, '', NULL, 'trainer', b'0'),
(94, 'รับสอนส่วนตัวสร้างกล้ามเนื้อลกน้ำหนักฟิตเนสเมืองสระบุรี', 'รายละเอียดทางmail', 'ครูหนุ่ย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 15, 0, '', NULL, 'trainer', b'0'),
(95, 'รับสอนโยคะกลุ่ม5-20คนค่ะที่เทศบสลเมืองสิงห์บุรี', 'รายละเอียดทางmail', 'ครูออย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 21, 0, '', NULL, 'trainer', b'0'),
(96, 'รับสอนส่วนตัวและกลุ่มเต้น5-10คน/ลดน้ำหนักที่เทศบาลเมืองสุโขทัย', 'รายละเอียดทางmail', 'ครูโอ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 16, 0, '', NULL, 'trainer', b'0'),
(97, 'รับสอนส่วนตัวลดน้ำหนักสร้างกล้ามเนื้อฟิตเนสเทศบาลเมืองสุพรรณบุรี', 'รายละเอียดทางmail', 'ครูโจ้', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 12, 0, '', NULL, 'trainer', b'0'),
(98, 'รับสอนส่วนตัวมวย/ลดน้ำหนัก/สร้างกล้ามเนื้อที่ฟิตเนสเมืองสมุย/สุราษฎร์ธานี', 'รายละเอียดทางmail', 'ครูเจ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(99, 'รับสอนส่วนตัวสร้างกล้ามเนื้อลดน้ำหนักฟิตเนสเมืองสุรินทร์', 'รายละเอียดทางmail', 'ครูโอ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(100, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสเมืองหนองคาย', 'รายละเอียดทางmail', 'ครูเค', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(101, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสเมืองหนองบัวลำภู', 'รายละเอียดทางmail', 'ครูปอง', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 13, 0, '', NULL, 'trainer', b'0'),
(102, 'รับสอนสอนโยคะกลุ่ม5-15คนค่ะเทศบาลเมืองอ่างทอง', 'รายละเอียดทางmail', 'ครูแคท', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 19, 0, '', NULL, 'trainer', b'0'),
(103, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสเมืองอุดรธานี', 'รายละเอียดทางmail', 'ครูM', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 18, 0, '', NULL, 'trainer', b'0'),
(104, 'รับสอนโยคะกลุ่ม5-10คนค่ะเทศบาลเมืองอุทัยธานี', 'รายละเอียดทางmail', 'ครูโรส', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 15, 0, '', NULL, 'trainer', b'0'),
(105, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสเมืองอุตรดิตถ์', 'รายละเอียดทางmail', 'ครูชิต', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 10, 0, '', NULL, 'trainer', b'0'),
(106, 'รับสอนส่วนตัวสร้างกล้ามเนื้อ/ลดน้ำหนักฟิตเนสเมืองอุบลราชธานี', 'รายละเอียดทางmail', 'ครูบอย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 17, 0, '', NULL, 'trainer', b'0'),
(107, 'รับสอนส่วนตัวลดน้ำหนัก/สร้างกล้ามเนื้อฟิตเนสเมืองอำนาจเจริญ', 'รายละเอียดทางmail', 'ครูบี', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 9, 0, '', NULL, 'trainer', b'0'),
(108, 'รับสอนส่วนตัวที่ฟิตเนส7ทาวอินทาวน์', 'รายละเอียดทางmail', 'PT.B', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 7, 0, '', NULL, 'trainer', b'0'),
(109, 'รับสอนส่วนตัวที่ฟิตเนส7ทาวอินทาวน์', 'รายละเอียดทางMail', 'PT.POB', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 6, 0, '', NULL, 'trainer', b'0'),
(110, 'รับสอนส่วนตัวที่ fitnessfun เมืองราชบุรี', 'รายละเอียดทางMail', 'PT.BOY', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 9, 0, '', NULL, 'trainer', b'0'),
(111, 'รับสอนส่วนตัวที่บ้านโป่งยิม', 'รายละเอียดทางMail', 'PT.M', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 7, 0, '', NULL, 'trainer', b'0'),
(112, 'รับสอนส่วนตัวมวย/สร้างกล้ามเนื้อ A Fitness เมืองเพชรบรูณ์', 'รายละเอียดMail', 'PT.JO', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 10, 0, '', NULL, 'trainer', b'0'),
(113, 'รับสอนส่วนตัวมวย/สร้างกล้ามเนื้อ/ลดน้ำหนัก ฟิตเนสเทศบาลเมืองหล่มสักเพชรบรูณ์', 'รายละเอียดMail', 'ครูปอ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(114, 'รับสอนส่วนตัว/มวย/สร้างกล้ามเนื้อ/ลดน้ำหนัก ฟิตเนสแถวๆสามแยกการไฟฟ้าสมุทรปราการ', 'รายละเอียดMail', 'ครูโบ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(115, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดMail', 'PT.KI', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(116, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดทางMail', 'ครูเอก', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(117, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Max Fitness เทพารักษ์', 'รายละเอียดทางMail', 'ครูป้อม', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(118, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness 7 แจ้งวัฒนะ', 'รายละเอียดทางMail', 'PT.BOY', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(119, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness รัชดา', 'รายละเอียดทางMail', 'PT.TUM', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(120, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดทางMail', 'PT.NOI', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(121, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสเมืองกาญจนบุรี', 'รายละเอียดMail', 'PT.Jum', 'f', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(122, 'รับสอนโยคะกลุ่ม5-15คนค่ะฟิตเนเทศบาลเมืองกาญจนบุรี', 'รายละเอียดทางMail', 'PT.Aoy', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(123, 'รับสอนโยคะกลุ่ม5-15คนค่ะฟิตเนเทศบาลเมืองนครปฐม', 'รายละเอียดทางMail', 'ครูส้ม', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(124, 'รับสอนโยคะกลุ่ม5-15คนค่ะฟิตเนเทศบาลเมืองนเพชรบุรึ', 'รายละเอียดMail', 'ครูน้ำหวาน', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(125, 'รับสอนโยคะกลุ่ม5-15คนค่ะฟิตเนเทศบาลเมืองตัง', 'รายละเอียดทางMail', 'ครูวิ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(126, 'รับสอนโยคะกลุ่ม5-15คนค่ะฟิตเนสเทศบาลเมืองเพชรบรูณ์', 'รายละเอียดทางMail', 'ครูเม', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(127, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดทางMail', 'ครูชัย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(128, 'รับสอนโยคะกลุ่ม5-15คนค่ะ สวนหลวง ร.9 ค่ะ', 'รายละเอียดทางMail', 'ครูสุ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(129, 'รับสอนโยคะกลุ่ม5-15คนค่ะ สวนสุขภาพวารินชำราบ ค่ะ', 'รายละเอียดทางMail', 'ครูปู', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(130, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7รัชดา', 'รายละเอียดทางMail', 'PT.C', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(131, 'รับสอนส่วนตัวที่ฟิตเนส7ทาวอินทาวน์', 'รายละเอียดทางMail', 'PT.Som', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(132, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดทางMail', 'PT.JJ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(133, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness 7 แจ้งวัฒนะ', 'รายละเอียดทางMail', 'PT.MAX', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(134, 'รับสอนโยคะกลุ่ม5-20คนค่ะฟิตเนเทศบาลเมืองชัยภูมิ', 'รายละเอียดทางMail', 'ครูส้มโอ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(135, 'รับสอนโยคะกลุ่ม5-15คนค่ะ สวนสุขภาพเทศบาลเมืองกำแพงเพชร ค่ะ', 'รายละเอียดทางMail', 'ครูแมว', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(136, 'รัับสอนส่วนตัว/กลุ่ม 1-5คน ที่ฟิตเนส/สวนสุขภาพ เทศบาลเมืองเชียงใหม่', 'รายละเอียดMail', 'PT.Chob', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(137, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟินเนส เทศบาลเมืองหัวหิน', 'รายละเอียดทางMail', 'PT.Bee', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(138, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสเมืองมุกดาหาร', 'รายละเอียดทางMail', 'PT.Ae', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(139, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ TOP Fitness สกลนคร', 'รายละเอียดทางMail', 'PT.Jo', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(140, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ M Fitness', 'รายละเอียดทางMail', 'PT.PP', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(141, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดทางMail', 'PT.Zon', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(142, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness รัชดา', 'รายละเอียดทางMail', 'PT.Big', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(143, 'รับสอนโยคะกลุ่ม5-15คนค่ะ สวนหลวง ร.9 ค่ะ', 'รายละเอียดทางMail', 'ครูโย', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(144, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสเทศบาลเมืองชัยนาท', 'รายละเอียดทางMail', 'PT.BOB', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(145, 'รับสอนมวย ป่าตอง ภูเก็ต', 'รายละเอียดทางMail', 'ครูพี', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(146, 'รับสอนครั้งละ 2 คน เรียนโยคะ100ชม.ได้ใบประกาศครูสอนโยคะ ห้วยขวาง', 'รายละเอียดทางMail', 'ครูเจ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(147, 'รับสอนออกกำลังกาย กลุ่ม 10-20 คน สวนหลวงเทศบาลพระเท่น อ.ท่าเรือ จ.กาญจนบุรี', 'รายละเอียดทางMail', 'PT.Bee', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(148, 'รับสอนออกกำลังกายกลุ่ม 5-10 คน สวนหลวง ร.9 เขต.ประเวศ', 'รายละเอียดทางMail', 'PT.BOY', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(149, 'รับสอนส่วนตัว มวยไทย/ลดน้ำหนัก ฟิตเนสมวยไทย เข้าค้อ', 'รายละเอียดทางMail', 'ครูสมพร', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(150, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ Fitness7พัทยา', 'รายละเอียดทางMail', 'PT.JAM', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(151, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสเทศบาลเมืองนครพนม', 'รายละเอียดทางMail', 'ครูท๊อป', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(152, 'รับสอนเต้น/โยคะกลุ่ม 5-15คน เทศบาลเมืองเลย', 'รายละเอียดทางMail', 'PT.AO', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(153, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสเมืองเชียงราย', 'รายละเอียดทางMail', 'PT.Mas', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(154, 'รับสอนมวย ชำอำ', 'รายละเอียดทางMail', 'ครูโส', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(155, 'สอนเทคนิ่งการวื่งไตรกีฬา สนามศุก', 'รายละเอียดทางMail', 'ครูปลา', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(156, 'รับสอนว่ายน้ำสำหรับเด็ก 1 ปีขึ้นไป หนองจอก', 'รายละเอียดทางMail', 'ครูนาฟ', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(157, 'รับสอนส่วนตัว มวย/ลดน้ำหนัก/สร้างกล้ามเนื้อ ฟิตเนสเทศบาลนครปฐม', 'รายละเอียทางMail', 'PT.Pom', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(158, 'รับสอนโยคะกลุ่ม5-15คนค่ะ สวนสุขภาพเมืองพิษณุโลก', 'รายละเอียดทางMail', 'PT.B', 'fitnessonline.vs@gmail.com', '2018-03-13 00:00:00', 0, 0, '', NULL, 'trainer', b'0'),
(159, 'สนใจสอน', 'รายละเอียด', 'test01', 'mail@gmail.com', '2018-03-18 00:00:00', 95, 0, '', 'on', 'trainer', b'0'),
(160, 'รับสอนฟิตเนสโดยคุณ test36', 'รับสอนฟิตเนส ตามสถานที่ออกกำลังกาย ตามบ้านและคอนโด', 'test36', 'jumpersoft88@gmail.com', '2018-03-29 07:08:24', 14, 0, '', NULL, 'trainer', b'0'),
(161, 'รับสอนฟิตเนสโดยคุณ test40', 'รับสอนฟิตเนส ตามสถานที่ออกกำลังกาย ตามบ้านและคอนโด', 'test40', 'jumpersoft88@gmail.com', '2018-03-29 22:54:41', 22, 0, '', NULL, 'trainer', b'0'),
(162, 'รับสอนฟิตเนสโดยคุณ test41', 'รับสอนฟิตเนส ตามสถานที่ออกกำลังกาย ตามบ้านและคอนโด', 'test41', 'jumpersoft88@gmail.com', '2018-03-29 22:56:18', 14, 0, '', NULL, 'trainer', b'0'),
(163, 'รับสอนฟิตเนสโดยคุณ swu.6199000test', 'รับสอนฟิตเนส ตามสถานที่ออกกำลังกาย ตามบ้านและคอนโด', 'swu.6199000test', 'jumpersoft88@gmail.com', '2018-03-29 23:06:55', 22, 0, '', NULL, 'trainer', b'0'),
(164, 'guest test title', 'guest test post \r\n[url=http://temresults2018.com/]bbcode[/url] \r\n<a href=\"http://temresults2018.com/\">html</a> \r\nhttp://temresults2018.com/ simple', 'GuestGolla', 'samburton202@aol.co.uk', '2018-06-11 04:44:51', 12, 0, '', NULL, 'trainer', b'0'),
(165, 'guest test title', 'guest test post \r\n[url=http://temresults2018.com/]bbcode[/url] \r\n<a href=\"http://temresults2018.com/\">html</a> \r\nhttp://temresults2018.com/ simple', 'GuestGolla', 'samburton202@aol.co.uk', '2018-06-13 14:41:40', 41, 3, '', NULL, 'trainer', b'0'),
(166, 'test', 'test2dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\n', 'ชื่อปลอม', 'Prem@k2l.com', '2018-07-27 02:53:03', 12, 0, '', NULL, 'trainer', b'0'),
(167, 'ลด 50%', 'ลด 50%', 'userTrainer01', 'jumpersoft88@gmail.com', '2018-08-08 00:01:17', 21, 0, '', NULL, 'ftcenter', b'0'),
(168, 'รับเทรน ลาดพร้าว', 'รับเทรน ลาดพร้าว', 'magtrainer', 'jumpersoft88@gmail.com', '2019-09-27 12:14:15', 0, 0, '', 'on', 'trainer', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `fit_trainer_regis`
--

CREATE TABLE `fit_trainer_regis` (
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

-- --------------------------------------------------------

--
-- Table structure for table `fit_university`
--

CREATE TABLE `fit_university` (
  `uni_id` int(10) NOT NULL,
  `uni_code_en` varchar(10) DEFAULT NULL,
  `uni_code_th` varchar(10) DEFAULT NULL,
  `uni_name` varchar(250) DEFAULT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_university`
--

INSERT INTO `fit_university` (`uni_id`, `uni_code_en`, `uni_code_th`, `uni_name`, `createdDate`) VALUES
(1, 'NRRU', 'มทส', 'มหาวิทยาลัยราชภัฏนครราชสีมา', '2018-03-29 00:00:00'),
(2, 'SWU', 'มศว', 'มหาวิทยาลัยศรีนครินทรวิโรฒ', '2018-03-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `username`, `password`, `email`) VALUES
(4, 'Test', '5f4dcc3b5aa765d61d8327deb882cf99', 'jumpersoft88@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `webboard_answers`
--

CREATE TABLE `webboard_answers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `detail` longtext NOT NULL,
  `question_id` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `webboard_questions`
--

CREATE TABLE `webboard_questions` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `view` int(5) NOT NULL,
  `reply` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_proto_path`
--
ALTER TABLE `file_proto_path`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `fit_history_system`
--
ALTER TABLE `fit_history_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fit_history_trainer`
--
ALTER TABLE `fit_history_trainer`
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
-- Indexes for table `fit_province`
--
ALTER TABLE `fit_province`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `fit_university`
--
ALTER TABLE `fit_university`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `webboard_answers`
--
ALTER TABLE `webboard_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webboard_questions`
--
ALTER TABLE `webboard_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_proto_path`
--
ALTER TABLE `file_proto_path`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `fit_admin_management`
--
ALTER TABLE `fit_admin_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fit_answers`
--
ALTER TABLE `fit_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fit_history_system`
--
ALTER TABLE `fit_history_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `fit_history_trainer`
--
ALTER TABLE `fit_history_trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `fit_member`
--
ALTER TABLE `fit_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `fit_member_regis`
--
ALTER TABLE `fit_member_regis`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fit_province`
--
ALTER TABLE `fit_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `fit_questions`
--
ALTER TABLE `fit_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `fit_trainer_regis`
--
ALTER TABLE `fit_trainer_regis`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fit_university`
--
ALTER TABLE `fit_university`
  MODIFY `uni_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `webboard_answers`
--
ALTER TABLE `webboard_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webboard_questions`
--
ALTER TABLE `webboard_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
