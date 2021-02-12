-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 03:58 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `open_position`
--

CREATE TABLE `open_position` (
  `id` int(11) NOT NULL,
  `pos_num` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `pos_id` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `job_type_id` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `status_id` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `unit_id` int(4) UNSIGNED ZEROFILL DEFAULT NULL,
  `n_open` int(4) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `view_count` int(8) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `public_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `announce_name_date` date DEFAULT NULL,
  `is_exam` tinyint(1) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `exam_result_date` date DEFAULT NULL,
  `is_interview` tinyint(1) DEFAULT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_result_date` date DEFAULT NULL,
  `remark` text COLLATE utf8_unicode_ci,
  `last_update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `open_position`
--

INSERT INTO `open_position` (`id`, `pos_num`, `pos_id`, `job_type_id`, `status_id`, `unit_id`, `n_open`, `salary`, `view_count`, `create_date`, `update_date`, `public_date`, `end_date`, `announce_name_date`, `is_exam`, `exam_date`, `exam_result_date`, `is_interview`, `interview_date`, `interview_result_date`, `remark`, `last_update_by`) VALUES
(1, 'E100001', 58, 01, 01, 0606, 1, 50000, 10, '2021-02-12 20:41:57', '2021-02-12 20:53:18', '2021-02-12', '2021-02-22', '2021-02-25', 1, '2021-02-26', '2021-03-01', 1, '2021-03-05', '2021-03-12', NULL, 0),
(2, 'S100001', 44, 02, 00, 0101, 1, 25000, 0, '2021-02-12 20:54:49', '2021-02-12 20:54:49', '2021-02-17', '2021-02-28', '2021-03-08', 1, '2021-03-11', '2021-03-19', 0, NULL, NULL, NULL, 0),
(3, 'E100002', 01, 01, 00, 0000, 1, 80000, 0, '2021-02-12 20:56:05', '2021-02-12 20:56:05', '2021-02-18', '2021-03-03', '2021-03-04', 0, NULL, NULL, 1, '2021-03-12', '2021-03-13', NULL, 0),
(4, 'S100002', 66, 02, 01, 0606, 2, 12000, 1, '2021-02-12 20:57:25', '2021-02-12 20:57:25', '2021-02-08', '2021-02-11', '2021-02-17', 1, '2021-02-19', '2021-02-23', 1, '2021-02-26', '2021-02-28', NULL, 0),
(5, 'E100003', 02, 01, 02, 0000, 1, 50000, 0, '2021-02-12 20:58:19', '2021-02-12 20:58:19', '2021-02-01', '2021-02-09', '2021-02-11', 1, '2021-02-18', '2021-02-19', 0, NULL, NULL, NULL, 0),
(6, 'S100003', 64, 02, 03, 1212, 1, 45000, 0, '2021-02-12 21:00:26', '2021-02-12 21:00:26', '2021-01-31', '2021-02-01', '2021-02-04', 1, '2021-02-08', '2021-02-10', 1, NULL, NULL, 'เลื่อนการสอบสัมภาษณ์', 0),
(7, 'E100006', 55, 01, 04, 1212, 2, 45000, 0, '2021-02-12 21:03:12', '2021-02-12 21:03:12', '2021-01-24', '2021-02-01', '2021-02-03', 1, '2021-02-06', '2021-02-08', 1, '2021-02-10', '2021-02-11', 'ให้ผู้ผ่านสัมภาษณ์เข้ารายงานตัวภายใน 7 วัน', 0),
(8, 'S100007', 56, 02, 03, 0101, 1, 15000, 0, '2021-02-12 21:04:32', '2021-02-12 21:04:32', '2021-01-31', '2021-02-01', '2021-02-03', 1, '2021-02-09', '2021-02-10', 1, '2021-02-11', '2021-02-23', NULL, 0),
(9, 'E200001', 65, 01, 01, 1717, 1, 28000, 1, '2021-02-12 21:05:33', '2021-02-12 21:05:33', '2021-02-09', '2021-02-11', '2021-02-19', 0, NULL, NULL, 0, NULL, NULL, NULL, 0),
(10, 'S200015', 59, 02, 01, 0303, 1, 60000, 0, '2021-02-12 21:06:23', '2021-02-12 21:06:23', '2021-02-01', '2021-02-17', NULL, 1, NULL, NULL, 0, NULL, NULL, NULL, 0),
(11, 'E300001', 63, 01, 02, 1212, 1, 50000, 0, '2021-02-12 21:07:02', '2021-02-12 21:07:02', '2020-12-27', '2021-02-07', '2021-02-11', 0, NULL, NULL, 0, NULL, NULL, NULL, 0),
(12, 'S500001', 47, 02, 00, 0505, 1, 15100, 0, '2021-02-12 21:07:47', '2021-02-12 21:07:47', '2021-02-17', '2021-02-26', '2021-03-12', 0, NULL, NULL, 0, NULL, NULL, NULL, 0),
(13, 'E100010', 88, 01, 01, 1616, 1, 28000, 0, '2021-02-12 21:15:38', '2021-02-12 21:15:38', '2021-02-02', '2021-02-19', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 0),
(14, 'S5012000', 89, 02, 02, 1313, 1, 15000, 0, '2021-02-12 21:16:17', '2021-02-12 21:16:17', '2021-02-02', '2021-02-09', '2021-02-10', 1, '2021-02-26', NULL, 0, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `open_position_files`
--

CREATE TABLE `open_position_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_path` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_pos_id` int(11) NOT NULL,
  `upload_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `download_count` int(11) DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0= inactive 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `open_position_files`
--

INSERT INTO `open_position_files` (`id`, `file_name`, `file_path`, `open_pos_id`, `upload_date`, `download_count`, `is_active`) VALUES
(1, 'E100001_Exam date.docx', 'files/E100001_Exam date.docx', 1, '2021-02-12 20:53:18', 0, 1),
(2, 'S100001_Job App Announce.docx', 'files/S100001_Job App Announce.docx', 2, '2021-02-12 20:54:49', 0, 1),
(3, 'E100002_Job App Announce.docx', 'files/E100002_Job App Announce.docx', 3, '2021-02-12 20:56:05', 0, 1),
(4, 'S100002_Job App Announce.docx', 'files/S100002_Job App Announce.docx', 4, '2021-02-12 20:57:25', 0, 1),
(5, 'E100003_Job App Announce.docx', 'files/E100003_Job App Announce.docx', 5, '2021-02-12 20:58:19', 0, 1),
(6, 'E100003_Exam date.docx', 'files/E100003_Exam date.docx', 5, '2021-02-12 20:58:19', 0, 1),
(7, 'S100003_Job App Announce.docx', 'files/S100003_Job App Announce.docx', 6, '2021-02-12 21:00:26', 0, 1),
(8, 'S100003_Result.docx', 'files/S100003_Result.docx', 6, '2021-02-12 21:00:26', 0, 1),
(9, 'E100006_Job App Announce.docx', 'files/E100006_Job App Announce.docx', 7, '2021-02-12 21:03:12', 0, 1),
(10, 'E100006_Result.docx', 'files/E100006_Result.docx', 7, '2021-02-12 21:03:12', 0, 1),
(11, 'E100006_name_annaouce.docx', 'files/E100006_name_annaouce.docx', 7, '2021-02-12 21:03:12', 0, 1),
(12, 'S100007_Job App Announce.docx', 'files/S100007_Job App Announce.docx', 8, '2021-02-12 21:04:32', 0, 1),
(13, 'S100007_name_annaouce.docx', 'files/S100007_name_annaouce.docx', 8, '2021-02-12 21:04:32', 0, 1),
(14, 'E200001_Job App Announce.docx', 'files/E200001_Job App Announce.docx', 9, '2021-02-12 21:05:33', 0, 1),
(15, 'E200001_name_annaouce.docx', 'files/E200001_name_annaouce.docx', 9, '2021-02-12 21:05:33', 0, 1),
(16, 'S200015_Job App Announce.docx', 'files/S200015_Job App Announce.docx', 10, '2021-02-12 21:06:23', 0, 1),
(17, 'E300001_Job App Announce.docx', 'files/E300001_Job App Announce.docx', 11, '2021-02-12 21:07:02', 0, 1),
(18, 'S5012000_Job App Announce.docx', 'files/S5012000_Job App Announce.docx', 14, '2021-02-12 21:16:17', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sev_position`
--

CREATE TABLE `sev_position` (
  `position_id` int(11) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `position_name` varchar(100) NOT NULL COMMENT 'ชื่อตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sev_position`
--

INSERT INTO `sev_position` (`position_id`, `position_name`) VALUES
(1, 'แพทย์'),
(2, 'แพทย์จีน / แพทย์แผนไทยประยุกต์'),
(3, 'ผู้จัดการศูนย์ฯ'),
(4, 'พยาบาลเวชศาสตร์นิวเคลียร์'),
(5, 'พยาบาลวิชาชีพ'),
(6, 'ผู้ช่วยทางการแพทย์'),
(7, 'เภสัชกร'),
(8, 'ผู้ช่วยเภสัชกร'),
(9, 'นักกายภาพบำบัด'),
(10, 'นักกิจกรรมบำบัด'),
(11, 'นักเทคนิคการแพทย์'),
(12, 'นักรังสีการแพทย์'),
(13, 'นักเคมีรังสี'),
(14, 'นักเภสัชรังสี'),
(15, 'นักฟิสิกส์การแพทย์'),
(16, 'เจ้าหน้าที่ตรวจการนอนหลับ'),
(17, 'วิศวกรระบบเครือข่ายคอมพิวเตอร์'),
(18, 'นักวิชาการคอมพิวเตอร์'),
(19, 'พนักงานเครื่องคอมพิวเตอร์'),
(20, 'พยาบาลวิชาชีพ (วิจัย)'),
(21, 'พนักงานบริหารงานทั่วไป'),
(22, 'พนักงานทรัพยากรบุคคล'),
(23, 'พนักงานประชาสัมพันธ์'),
(24, 'นักพัสดุ'),
(25, 'เจ้าพนักงานพัสดุ'),
(26, 'นักวิชาการเงินการบัญชี'),
(27, 'เจ้าหน้าที่การเงินการบัญชี'),
(28, 'พนักงานเก็บเงิน'),
(29, 'พนักงานการตลาด'),
(30, 'พนักงานบริหารทั่วไป(นักพัฒนาคุณภาพ)'),
(31, 'พนักงานธุรการ'),
(32, 'พนักงานเวชระเบียน'),
(33, 'นักโภชนาการ'),
(34, 'พนักงานโภชนาการ'),
(35, 'ช่างไฟฟ้า'),
(36, 'พนักงานขับรถยนต์'),
(37, 'พนักงานเปล'),
(38, 'พนักงานบริการทั่วไป'),
(39, 'พยาบาลระดับบริหาร'),
(40, 'เจ้าหน้าที่บริหารงานวิจัย');

-- --------------------------------------------------------

--
-- Table structure for table `tb_job_status`
--

CREATE TABLE `tb_job_status` (
  `id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `job_status_name` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_job_status`
--

INSERT INTO `tb_job_status` (`id`, `job_status_name`) VALUES
(00, 'รอดำเนินการประกาศ'),
(01, 'ประกาศรับสมัคร'),
(02, 'ประกาศรายชื่อผู้มีสิทธิ์สอบข้อเขียน'),
(03, 'ประกาศรายชื่อผู้มีสิทธิ์สอบสัมภาษณ์'),
(04, 'ประกาศผลสอบสัมภาษณ์');

-- --------------------------------------------------------

--
-- Table structure for table `tb_job_type`
--

CREATE TABLE `tb_job_type` (
  `id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `type_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_job_type`
--

INSERT INTO `tb_job_type` (`id`, `type_name`) VALUES
(01, 'พนักงานประจำ'),
(02, 'พนักงานชั่วคราว');

-- --------------------------------------------------------

--
-- Table structure for table `tb_location1`
--

CREATE TABLE `tb_location1` (
  `Ward_code` char(4) NOT NULL DEFAULT '',
  `Ward_code_old` char(4) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `ward_name` char(30) DEFAULT NULL,
  `ward_name1` char(80) DEFAULT NULL,
  `mis_code` char(12) DEFAULT NULL,
  `ward_name_eng` varchar(150) DEFAULT NULL,
  `ward_name_short` varchar(50) DEFAULT NULL,
  `ward_name_old` varchar(255) DEFAULT NULL,
  `ward_name1_old` varchar(255) DEFAULT NULL,
  `ward_tel` char(12) DEFAULT NULL,
  `ward_tel2` varchar(50) DEFAULT NULL,
  `ward_build` int(11) DEFAULT NULL,
  `ward_floor` char(30) DEFAULT NULL,
  `section_code` char(3) DEFAULT NULL,
  `Smi_code` char(5) DEFAULT NULL,
  `Smi_code_old` char(11) DEFAULT NULL,
  `Ward_order` char(4) DEFAULT NULL,
  `Ward_cat` char(2) DEFAULT NULL,
  `ward_asc_cat` char(2) DEFAULT NULL,
  `bed` int(10) UNSIGNED DEFAULT NULL,
  `bed_real` int(10) DEFAULT NULL,
  `pt` float(7,0) DEFAULT NULL,
  `noptbed` varchar(255) DEFAULT NULL,
  `WARD_OTRATE` char(5) DEFAULT NULL,
  `Costcenter` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_location1`
--

INSERT INTO `tb_location1` (`Ward_code`, `Ward_code_old`, `active`, `ward_name`, `ward_name1`, `mis_code`, `ward_name_eng`, `ward_name_short`, `ward_name_old`, `ward_name1_old`, `ward_tel`, `ward_tel2`, `ward_build`, `ward_floor`, `section_code`, `Smi_code`, `Smi_code_old`, `Ward_order`, `Ward_cat`, `ward_asc_cat`, `bed`, `bed_real`, `pt`, `noptbed`, `WARD_OTRATE`, `Costcenter`) VALUES
('0000', '0000', 3, 'สำนักงานศูนย์ความเป็นเลิศฯ', 'สำนักงานศูนย์ความเป็นเลิศทางการแพทย์', NULL, 'CMEX OFFICE', 'CMEX OFFICE', 'สำนักงานบริหาร', 'สำนักงานบริหาร', '053-934700', '053-934700', NULL, NULL, '00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0101', '0101', 3, 'ศูนย์เลสิค', 'ศูนย์เลสิค', NULL, 'CMU Lasik Center', 'CMU Lasik Center', 'ศูนย์เลสิคมหาวิทยาลัยเชียงใหม่', 'ศูนย์เลสิคมหาวิทยาลัยเชียงใหม่', '053-934777', '0827666909', NULL, NULL, '01', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0202', '0202', 3, 'ศูนย์สุขภาพสตรี', 'ศูนย์สุขภาพสตรี', NULL, 'Women Health Center', 'Women Health Center', 'ศูนย์สุขภาพสตรี', 'ศูนย์สุขภาพสตรี', '053-934711', '053-934712', NULL, NULL, '02', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0303', '0303', 3, 'ศูนย์การแพทย์ผสมผสาน', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', NULL, 'The Center of Thai Traditional and Complementary Medicine', 'TTCM', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', 'ศูนย์การแพทย์แผนไทยและการแพทย์ผสมผสาน', '053-934899', '053-934899', NULL, NULL, '03', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0404', '0404', 3, 'ศูนย์เพทซีที และไซโคลตรอน', 'ศูนย์เพทซีที และไซโคลตรอน', NULL, 'PET/CT & CYCLOTRON CENTER', 'PET/CT & CYCLOTRON CENTER', 'ศูนย์เพ็ทซี และไซโคลตรอน', 'ศูนย์เพ็ทซี และไซโคลตรอน', '053-934790', '053-934790', NULL, NULL, '04', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0505', '0505', 3, 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', NULL, 'Chiang Mai Laser Cataract Surgery Center', 'Chiang Mai Laser Cataract Surgery Center', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', 'ศูนย์เลเซอร์ต้อกระจกเชียงใหม่', '053-934714', '053-934715', NULL, NULL, '05', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0606', '0606', 3, 'ศูนย์เวชศาสตร์ผู้สูงอายุ', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', NULL, 'Geriatric Medical Center', 'Geriatric Medical Center', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', 'ศูนย์เวชศาสตร์ผู้สูงอายุ', '053-920800', '053920700', NULL, NULL, '06', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0707', '0707', 3, 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', NULL, 'Sleep Disorders Center', 'Sleep Disorders Center', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', 'ศูนย์วิเคราะห์สุขภาพการนอนหลับ', '053-920666', '053-920666', NULL, NULL, '07', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0808', '0808', 3, 'ศูนย์ผู้ป่วยนอกCmex', 'ศูนย์ผู้ป่วยนอกCmex', NULL, 'OPD Cmex', 'OPD Cmex', 'ศูนย์ผู้ป่วยนอกCmex', 'ศูนย์ผู้ป่วยนอกCmex', NULL, NULL, NULL, NULL, '08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('0909', '0909', 3, 'ศูนย์ผู้ป่วยนอกGMC', 'ศูนย์ผู้ป่วยนอกGMC', NULL, 'OPD GMC', 'OPD GMC', 'ศูนย์ผู้ป่วยนอกGMC', 'ศูนย์ผู้ป่วยนอกGMC', NULL, NULL, NULL, NULL, '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1010', '1010', 3, 'ศูนย์ผู้ป่วยในGMC', 'ศูนย์ผู้ป่วยในGMC', NULL, 'IPD Cmex', 'IPD Cmex', 'ศูนย์ผู้ป่วยในCmex', 'ศูนย์ผู้ป่วยในCmex', NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1111', '1111', 3, 'ห้องตรวจจักษุGMC', 'ห้องตรวจจักษุ ศูนย์เวชศาสตร์ผู้สูงอายุ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1212', '1212', 3, 'ห้องยาCmex', 'ห้องยาCmex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1313', '1313', 3, 'ห้องยา IPD GMC', 'ห้องยา IPD GMC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1414', '1414', 3, 'ห้องยา OPD GMC', 'ห้องยา OPD GMC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1515', '1515', 3, 'ห้องยา TTCM', 'ห้องยา TTCM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1616', '1616', 3, 'หน่วยปฏิบัติการLab CMEx', 'หน่วยปฏิบัติการLab CMEx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
('1717', '1717', 3, 'ศูนย์การแพทย์เพื่อการมีบุตร', 'ศูนย์การแพทย์เพื่อการมีบุตร', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nuser`
--

CREATE TABLE `tb_nuser` (
  `NUM_OT` varchar(8) NOT NULL DEFAULT '',
  `Upass` varchar(20) DEFAULT NULL,
  `ward_code` varchar(4) DEFAULT NULL,
  `pos` char(1) DEFAULT NULL,
  `PP` char(2) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `Utype` varchar(5) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_nuser`
--

INSERT INTO `tb_nuser` (`NUM_OT`, `Upass`, `ward_code`, `pos`, `PP`, `status`, `Utype`, `lastdate`) VALUES
('59001', '1111', '0000', '7', '77', '1', NULL, NULL),
('60010', '2222', '0000', '7', '90', '1', NULL, NULL),
('somsang', '3333', '0101', '7', '01', '1', NULL, NULL),
('61008', '4444', '0303', '7', '58', '1', NULL, NULL),
('63002', '5555', '0000', '7', '66', '1', NULL, NULL),
('teekorn', '6666', '0707', '7', '01', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `SSUSR_Initials` varchar(255) DEFAULT NULL,
  `NUM_OT` varchar(8) NOT NULL DEFAULT '',
  `work` date DEFAULT NULL COMMENT 'วันเริ่มทำงาน',
  `start` date DEFAULT NULL COMMENT 'วันเข้าทำงานวันแรก',
  `Person_id` varchar(30) DEFAULT NULL,
  `Person_id1` varchar(30) DEFAULT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `chFname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `chLname` varchar(50) DEFAULT NULL,
  `name_english` varchar(30) DEFAULT NULL,
  `lname_english` varchar(50) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `MR1` varchar(10) DEFAULT NULL,
  `MR` char(1) DEFAULT NULL,
  `position_id` varchar(15) DEFAULT NULL,
  `mstatus` tinyint(1) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `born_1` date DEFAULT NULL,
  `national` varchar(30) DEFAULT NULL,
  `religion` tinyint(1) DEFAULT NULL,
  `BIRTH_PLACE` text,
  `father` varchar(100) DEFAULT NULL,
  `father_occu` varchar(255) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `mother_occu` varchar(255) DEFAULT NULL,
  `MAR` varchar(11) DEFAULT NULL,
  `MAR_new` tinyint(1) DEFAULT '1',
  `couple` varchar(100) DEFAULT NULL,
  `couple_occu` varchar(255) DEFAULT NULL,
  `son_count` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT '',
  `TUMBOL` varchar(50) DEFAULT NULL,
  `tumbol_id` int(11) DEFAULT NULL,
  `tumbol_name` int(10) DEFAULT NULL,
  `aumphor` int(11) DEFAULT NULL,
  `aumphor_name` varchar(15) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `PROVINCE` varchar(30) DEFAULT NULL,
  `mail_code` varchar(255) DEFAULT NULL,
  `telaphone` varchar(30) DEFAULT NULL,
  `mobile_phone` varchar(30) DEFAULT NULL,
  `ward_phone` varchar(30) DEFAULT NULL,
  `relative` text,
  `relative_occu` varchar(255) DEFAULT NULL,
  `relative_addr` text,
  `num_people` varchar(13) DEFAULT NULL,
  `num_people1` varchar(13) DEFAULT NULL,
  `edu_cer` smallint(6) DEFAULT NULL,
  `edu_cer1` varchar(255) DEFAULT NULL,
  `edu_degree` tinyint(1) DEFAULT NULL,
  `edu_from` varchar(255) DEFAULT NULL,
  `edu_vol` varchar(255) DEFAULT NULL,
  `edu_year` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `form_size` varchar(255) DEFAULT NULL,
  `form_size1` varchar(255) DEFAULT NULL,
  `pos_new` char(3) DEFAULT NULL,
  `pos_old` varchar(50) DEFAULT NULL,
  `pos1` char(3) DEFAULT NULL,
  `pos_thai` varchar(255) DEFAULT NULL,
  `PP` char(3) DEFAULT NULL,
  `PP1` varchar(19) DEFAULT NULL,
  `PP_new` char(3) DEFAULT NULL,
  `FW_CODE` varchar(10) DEFAULT NULL,
  `FW_CODE_new` varchar(10) DEFAULT NULL,
  `FW_CODE1` varchar(45) DEFAULT NULL,
  `per_order` int(11) DEFAULT NULL,
  `work_sec` varchar(255) DEFAULT NULL,
  `nursecer_id` varchar(255) DEFAULT NULL,
  `nursecer_date` date DEFAULT NULL,
  `sapa_id` varchar(255) DEFAULT NULL,
  `samakom_id` varchar(15) DEFAULT NULL,
  `bank_no` varchar(255) DEFAULT NULL,
  `new` varchar(255) DEFAULT NULL,
  `memo` text,
  `mr_english` varchar(255) DEFAULT NULL,
  `mr_thai` varchar(255) DEFAULT NULL,
  `c_now` varchar(255) DEFAULT NULL,
  `newnurse` tinyint(1) DEFAULT '1',
  `ck` tinyint(1) DEFAULT '0',
  `ncomment` varchar(255) DEFAULT NULL,
  `nyear` char(4) DEFAULT NULL,
  `codeper` varchar(10) DEFAULT NULL,
  `goverment_fund` varchar(50) DEFAULT NULL,
  `day_card` varchar(50) DEFAULT NULL,
  `num_card` varchar(50) DEFAULT NULL,
  `stu` varchar(50) DEFAULT NULL,
  `new_status` varchar(50) DEFAULT NULL,
  `expert` varchar(50) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL,
  `nupdate` tinyint(1) DEFAULT '0',
  `hncheck` tinyint(1) DEFAULT '0',
  `pos` char(3) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`SSUSR_Initials`, `NUM_OT`, `work`, `start`, `Person_id`, `Person_id1`, `Fname`, `chFname`, `Lname`, `chLname`, `name_english`, `lname_english`, `sex`, `MR1`, `MR`, `position_id`, `mstatus`, `born`, `born_1`, `national`, `religion`, `BIRTH_PLACE`, `father`, `father_occu`, `mother`, `mother_occu`, `MAR`, `MAR_new`, `couple`, `couple_occu`, `son_count`, `home`, `TUMBOL`, `tumbol_id`, `tumbol_name`, `aumphor`, `aumphor_name`, `province_id`, `PROVINCE`, `mail_code`, `telaphone`, `mobile_phone`, `ward_phone`, `relative`, `relative_occu`, `relative_addr`, `num_people`, `num_people1`, `edu_cer`, `edu_cer1`, `edu_degree`, `edu_from`, `edu_vol`, `edu_year`, `blood_group`, `form_size`, `form_size1`, `pos_new`, `pos_old`, `pos1`, `pos_thai`, `PP`, `PP1`, `PP_new`, `FW_CODE`, `FW_CODE_new`, `FW_CODE1`, `per_order`, `work_sec`, `nursecer_id`, `nursecer_date`, `sapa_id`, `samakom_id`, `bank_no`, `new`, `memo`, `mr_english`, `mr_thai`, `c_now`, `newnurse`, `ck`, `ncomment`, `nyear`, `codeper`, `goverment_fund`, `day_card`, `num_card`, `stu`, `new_status`, `expert`, `lastupdate`, `nupdate`, `hncheck`, `pos`) VALUES
(NULL, '59001', NULL, NULL, '59001', NULL, 'ชัยธวัช', NULL, 'กิตติคุณากร', NULL, 'chaithawat', 'kittikunakorn', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '60010', NULL, NULL, '60010', NULL, 'รังสิมันตุ์', NULL, 'ไก่งาม', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '61008', NULL, NULL, '61008', NULL, 'กรณ์ณภัทร', NULL, 'จตุพรเรืองรอง', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, '63002', NULL, NULL, '63002', NULL, 'ปัทมา', NULL, 'ประดับ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1'),
(NULL, 'somsang', NULL, NULL, 'somsang', NULL, 'สมสงวน', NULL, 'อัษญคุณ', NULL, NULL, NULL, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `position_code` char(255) NOT NULL DEFAULT '',
  `position_code1` varchar(255) DEFAULT NULL,
  `position_name` char(255) DEFAULT NULL,
  `position_nameAB` char(255) DEFAULT NULL,
  `position_name1` char(255) DEFAULT NULL,
  `pp_code` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`position_code`, `position_code1`, `position_name`, `position_nameAB`, `position_name1`, `pp_code`) VALUES
('00', '00', NULL, NULL, NULL, NULL),
('43', '43', 'พนักงานธุรการ', NULL, 'พนักงานธุรการ', NULL),
('47', '47', 'พนักงานบริการทั่วไป(คนงาน)', NULL, 'พนักงานบริการทั่วไป(คนงาน)', NULL),
('44', '44', 'ช่างเขียนแบบ', NULL, 'ช่างเขียนแบบ', NULL),
('55', '55', 'เภสัชกร', '', 'เภสัชกร', ''),
('56', '56', 'พนักงานบัญชี', NULL, 'พนักงานบัญชี', NULL),
('57', '57', 'พนักงานผู้ช่วยทางการแพทย์', NULL, 'พนักงานผู้ช่วยทางการแพทย์', NULL),
('58', '58', 'แพทย์จีน', NULL, 'แพทย์จีน', NULL),
('59', '59', 'นักฟิสิกส์การแพทย์', NULL, 'นักฟิสิกส์การแพทย์', NULL),
('60', '60', 'ผู้จัดการ (LASIK)', NULL, 'ผู้จัดการ (LASIK)', NULL),
('61', '61', 'พนักงานการเงิน', NULL, 'พนักงานการเงิน', NULL),
('62', '62', 'นักเคมีรังสี', NULL, 'นักเคมีรังสี', NULL),
('63', '63', 'นักเภสัชรังสี', NULL, 'นักเภสัชรังสี', NULL),
('64', '64', 'นักรังสีการแพทย์', NULL, 'นักรังสีการแพทย์', NULL),
('65', '65', 'แพทย์', NULL, 'แพทย์', NULL),
('66', '66', 'พนักงานเวชระเบียน', NULL, 'พนักงานเวชระเบียน', NULL),
('67', '67', 'พนักงานบริหารงานทั่วไป', NULL, 'พนักงานบริหารงานทั่วไป', NULL),
('68', '68', 'พนักงานเก็บเงิน', NULL, 'พนักงานเก็บเงิน', NULL),
('69', '69', 'แพทย์แผนไทยประยุกต์', NULL, 'แพทย์แผนไทยประยุกต์', NULL),
('70', '70', 'ช่างไฟฟ้า', NULL, 'ช่างไฟฟ้า', NULL),
('71', '71', 'พนักงานเปล', NULL, 'พนักงานเปล', NULL),
('72', '72', 'พนักงานผู้ช่วยเภสัชกร', NULL, 'พนักงานผู้ช่วยเภสัชกร', NULL),
('73', '73', 'นักเทคนิคการแพทย์', NULL, 'นักเทคนิคการแพทย์', NULL),
('74', '74', 'นักกายภาพบำบัด', NULL, 'นักกายภาพบำบัด', NULL),
('75', '75', 'พนักงานขับรถยนต์', NULL, 'พนักงานขับรถยนต์', NULL),
('76', '76', 'พนักงานผู้ช่วยทางการแพทย์', NULL, 'พนักงานผู้ช่วยทางการแพทย์', NULL),
('77', '77', 'นักวิชาการคอมพิวเตอร์', NULL, 'นักวิชาการคอมพิวเตอร์', NULL),
('78', '78', 'นักกิจกรรมบำบัด', NULL, 'นักกิจกรรมบำบัด', NULL),
('79', '79', 'พนักงานโภชนาการ', NULL, 'พนักงานโภชนาการ', NULL),
('80', '80', 'นักโภชนาการ', NULL, 'นักโภชนาการ', NULL),
('81', '81', 'พนักงานเปล', NULL, 'พนักงานเปล', NULL),
('82', '82', 'พนักงานเครื่องคอมพิวเตอร์', NULL, 'พนักงานเครื่องคอมพิวเตอร์', NULL),
('83', '83', 'พนักงานประชาสัมพันธ์', NULL, 'พนักงานประชาสัมพันธ์', NULL),
('84', '84', 'พนักงานธุรการ (พัสดุ)', NULL, 'พนักงานธุรการ (พัสดุ)', NULL),
('85', '85', 'พนักงานกายภาพบำบัด', NULL, 'พนักงานกายภาพบำบัด', NULL),
('86', '86', 'พนักงานการตลาด', NULL, 'พนักงานการตลาด', NULL),
('87', '87', 'เจ้าหน้าที่ตรวจการนอนหลับ', NULL, 'เจ้าหน้าที่ตรวจการนอนหลับ', NULL),
('88', '88', 'วิศวกรระบบเครือข่าย', NULL, 'วิศวกรระบบเครือข่าย', NULL),
('89', '89', 'พยาบาล', NULL, 'พยาบาล', NULL),
('90', '90', 'พนักงานบริหารงานทั่วไป (บุคคล)', NULL, 'พนักงานบริหารงานทั่วไป (บุคคล)', NULL),
('91', '91', 'เจ้าหน้าที่การเงินและบัญชี', NULL, 'เจ้าหน้าที่การเงินและบัญชี', NULL),
('92', '92', 'พนักงานต้อนรับ', NULL, 'พนักงานต้อนรับ', NULL),
('93', '93', 'ผู้จัดการ (TTCM)', NULL, 'ผู้จัดการ (TTCM)', NULL),
('94', '94', 'พนักงานธุรการ (กายภาพบำบัด)', NULL, 'พนักงานธุรการ (กายภาพบำบัด)', NULL),
('95', '95', 'พนักงานผู้ช่วยทางการแพทย์ (กายภาพบำบัด)', NULL, 'พนักงานผู้ช่วยทางการแพทย์ (กายภาพบำบัด)', NULL),
('96', '96', 'พนักงานโภชนาการ (กุ๊ก)', NULL, 'พนักงานโภชนาการ (กุ๊ก)', NULL),
('97', '97', 'พนักงานโภชนาการ (ผู้ช่วยกุ๊ก)', NULL, 'พนักงานโภชนาการ (ผู้ช่วยกุ๊ก)', NULL),
('98', '98', 'ผู้อำนวยการศูนย์', NULL, 'ผู้อำนวยการศูนย์', NULL),
('99', '99', 'รองผู้อำนวยการ', NULL, 'รองผู้อำนวยการ', NULL),
('01', '01', 'หัวหน้าศูนย์', NULL, 'หัวหน้าศูนย์', NULL),
('02', '02', 'รักษาการแทน เลขานุการศูนย์', NULL, 'รักษาการแทน เลขานุการศูนย์', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num_ot` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `job_type_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `user_password`, `email`, `num_ot`, `pos_id`, `job_type_id`, `ward_id`, `status`) VALUES
(1, 'admin', 'cd5bb1686c1f4e2925e4c0a79efb37ab597a2f61e8e2091842ce6f20f500311e81535a1f2149aa6339ab912856c138f26207d5d6ed1700ea96bd2a979e1393597DxER6TDxOR/KglZjVhxgFB9plz9GxZg4lFw+d9ewCs=', 'admin@exmed.com', NULL, NULL, NULL, NULL, 1),
(2, 'admin1', 'ac287d0657fa559a94750154b3b05807ccf4db87ccb3eef716abe2f19031002e27b29a52e6fb08ffba9d7df0fa54c380243ef0a5bb1148ebf7a75de703182ba1qJJhcW62kxlU1LxqW+YW+bc+8kIIMmvenqhpnmiaV7g=', 'admin1@exmed.com', NULL, NULL, NULL, NULL, 1),
(3, 'admin@admin', '8300744fa7fc10d43b7b76b43d4906841a168ef06dc76f09366e941f10a6cfc13a847bca0558076e8bc474882020b0e7c0c3e379cf29211b2f0abe784e64c989MZRW0HblcLaHf3oqevrU5Kv2Mf0C7aQxBdklxz5+asA=', 'admin_admin@exmed.com', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_status`
--

CREATE TABLE `tb_user_status` (
  `id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `user_status_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user_status`
--

INSERT INTO `tb_user_status` (`id`, `user_status_name`) VALUES
(00, 'inactive'),
(01, 'active'),
(02, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `open_position`
--
ALTER TABLE `open_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_position_files`
--
ALTER TABLE `open_position_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sev_position`
--
ALTER TABLE `sev_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `tb_job_status`
--
ALTER TABLE `tb_job_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_job_type`
--
ALTER TABLE `tb_job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_location1`
--
ALTER TABLE `tb_location1`
  ADD PRIMARY KEY (`Ward_code`);

--
-- Indexes for table `tb_nuser`
--
ALTER TABLE `tb_nuser`
  ADD PRIMARY KEY (`NUM_OT`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`NUM_OT`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`position_code`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_user_status`
--
ALTER TABLE `tb_user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `open_position`
--
ALTER TABLE `open_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `open_position_files`
--
ALTER TABLE `open_position_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sev_position`
--
ALTER TABLE `sev_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตำแหน่ง', AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
