-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2024 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onehome`
--

-- --------------------------------------------------------

--
-- Table structure for table `bs_client`
--

CREATE TABLE `bs_client` (
  `c_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `c_fname` varchar(100) DEFAULT NULL,
  `c_mname` varchar(100) DEFAULT NULL,
  `c_lname` varchar(100) DEFAULT NULL,
  `c_suffix` varchar(20) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `birth` varchar(50) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `govid` varchar(100) DEFAULT NULL,
  `idnum` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `civil` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `connum` varchar(50) DEFAULT NULL,
  `region_text` text DEFAULT NULL,
  `province_text` text DEFAULT NULL,
  `city_text` text DEFAULT NULL,
  `barangay_text` text DEFAULT NULL,
  `zipcode` int(50) DEFAULT NULL,
  `subdivision` text DEFAULT NULL,
  `street` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `building` text DEFAULT NULL,
  `phase` text DEFAULT NULL,
  `blocklot` text DEFAULT NULL,
  `membership` text DEFAULT NULL,
  `payment` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `bank` text DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `checknum` text DEFAULT NULL,
  `accnum` text DEFAULT NULL,
  `billing` text DEFAULT NULL,
  `gateperimeter` varchar(10) DEFAULT NULL,
  `waiver` text DEFAULT NULL,
  `agree` varchar(10) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` varchar(170) DEFAULT NULL,
  `thumbnail` varchar(50) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `date_modified` varchar(50) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `date_deleted` varchar(50) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0,
  `uid` varchar(150) DEFAULT NULL,
  `c_username` varchar(50) DEFAULT NULL,
  `c_password` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_logout` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_test` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bs_client`
--

INSERT INTO `bs_client` (`c_id`, `user_id`, `c_fname`, `c_mname`, `c_lname`, `c_suffix`, `nationality`, `birth`, `age`, `govid`, `idnum`, `gender`, `civil`, `email`, `connum`, `region_text`, `province_text`, `city_text`, `barangay_text`, `zipcode`, `subdivision`, `street`, `unit`, `building`, `phase`, `blocklot`, `membership`, `payment`, `amount`, `bank`, `branch`, `checknum`, `accnum`, `billing`, `gateperimeter`, `waiver`, `agree`, `longitude`, `latitude`, `message`, `address`, `image`, `thumbnail`, `date_added`, `added_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `is_deleted`, `uid`, `c_username`, `c_password`, `is_active`, `last_login`, `last_logout`, `is_test`) VALUES
(1, 1002, 'Admin', '', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', '09321321321', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trident', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '2024-03-18 08:18:05', '2024-03-18 08:12:40', 0),
(43, 1150, 'Kevin', '', 'Cortez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kevin@gmail.com', '09665034568', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BC Mansilingan', '', '', '2024-03-11 09:49:42', 1002, '2024-03-15 14:38:48', 1150, '', 0, 0, '17e62166fc8586dfa4d1bc0e1742c08b', NULL, NULL, 0, '2024-09-17 06:43:43', '2024-03-11 01:49:42', 0),
(82, NULL, 'Ronald', '', 'Tangguan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ronald@gmail.com', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-08 15:08:07', 1002, NULL, NULL, NULL, NULL, 0, '9778d5d219c5080b9a6a17bef029331c', NULL, NULL, 0, '2024-10-08 07:08:07', '2024-10-08 07:08:07', 0),
(83, NULL, 'Hadden', '', 'Abarisia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hadden@tridentechnology.com', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-08 15:09:30', 1002, '2024-10-08 16:00:34', 1002, NULL, NULL, 0, 'fe9fc289c3ff0af142b6d3bead98a923', NULL, NULL, 0, '2024-10-08 08:00:34', '2024-10-08 07:09:30', 0),
(84, NULL, 'Ronald', 'Pagran', 'Tangguan', '', 'Filipino', '2001-07-17', 23, 'TIN ID', '12331123321', 'Male', 'Single', 'tangguaronald@gmail.com', '09397765466', 'Region VI (Western Visayas)', 'Negros Occidental', 'City Of Talisay', 'Zone 4 (Pob.)', 6115, '', 'Capt Sabi', '', 'Rolly Hair Salon', '', '', 'Basic', 'cash', '500000', '123321123321', 'Talisay', '123321123321', '123321123321', 'Yes', 'Yes', 'Ronald Tangguan', 'agree', '122.966017', '10.739538', NULL, NULL, NULL, NULL, '2024-10-15 15:34:21', NULL, NULL, NULL, NULL, NULL, 0, '68d30a9594728bc39aa24be94b319d21', NULL, NULL, 0, '2024-10-15 07:34:21', '2024-10-15 07:34:21', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bs_client`
--
ALTER TABLE `bs_client`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bs_client`
--
ALTER TABLE `bs_client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
