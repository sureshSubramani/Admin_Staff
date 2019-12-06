-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 12:28 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement_details`
--

CREATE TABLE `achievement_details` (
  `personal_id` int(11) NOT NULL COMMENT 'track reference id by personal',
  `set_net` varchar(10) NOT NULL,
  `nat_journals` tinyint(4) NOT NULL,
  `int_journals` tinyint(4) NOT NULL,
  `sem_journals` tinyint(4) NOT NULL,
  `published_book` tinyint(4) NOT NULL,
  `known_languages` varchar(120) NOT NULL,
  `eng_read` varchar(10) NOT NULL,
  `eng_speak` varchar(10) NOT NULL,
  `eng_write` varchar(10) NOT NULL,
  `typing_tamil` varchar(10) NOT NULL,
  `typing_english` varchar(10) NOT NULL,
  `comp_knowledge` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement_details`
--

INSERT INTO `achievement_details` (`personal_id`, `set_net`, `nat_journals`, `int_journals`, `sem_journals`, `published_book`, `known_languages`, `eng_read`, `eng_speak`, `eng_write`, `typing_tamil`, `typing_english`, `comp_knowledge`, `created_at`, `modified_at`) VALUES
(1, 'Yes', 2, 2, 0, 0, 'Tamil, English', 'Read', 'Speak', 'Write', 'Higher', 'Higher', 'Yes', '2019-12-06 12:06:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `roll_type_id` tinyint(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `roll_type_id`, `username`, `email`, `password`, `status`, `created_at`, `created_by`) VALUES
(1, 0, 'developer', 'sureshsubramani1986@gmail.com', '5e8edd851d2fdfbd7415232c67367cc3', 1, '2019-11-19 08:43:39', 0),
(2, 1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2019-11-19 08:45:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `communication_details`
--

CREATE TABLE `communication_details` (
  `personal_id` int(11) NOT NULL,
  `type_of_address` varchar(20) NOT NULL COMMENT '0 is Present or 1 is Permanent',
  `phone_no` varchar(15) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `pin_no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication_details`
--

INSERT INTO `communication_details` (`personal_id`, `type_of_address`, `phone_no`, `street_address`, `city`, `state`, `country`, `pin_no`, `created_at`, `modified_at`) VALUES
(1, 'Permanent', '8884074278', 'Chittoor', 'Salem', 'Tamilnadu', 'India', 637101, '2019-12-06 12:26:32', NULL),
(1, 'Present', '8884074278', 'Chittoor', 'Salem', 'Tamilnadu', 'India', 637101, '2019-12-06 12:26:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `personal_id` int(11) NOT NULL,
  `degree` varchar(55) NOT NULL,
  `specialization` varchar(55) NOT NULL,
  `mos` varchar(55) NOT NULL,
  `college` varchar(120) NOT NULL,
  `aff_university` varchar(65) NOT NULL,
  `yop` date DEFAULT NULL,
  `percentage` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`personal_id`, `degree`, `specialization`, `mos`, `college`, `aff_university`, `yop`, `percentage`, `created_at`, `modified_at`) VALUES
(1, 'Ph.D', 'Data Structure', 'Regular', 'NIIT', 'Anna University', '2016-05-12', '85%', '2019-12-06 12:26:33', NULL),
(1, 'BSc', 'Computer Science', 'Regular', 'Sri Kandan Collge', 'Anna University', '2009-05-12', '85%', '2019-12-06 12:26:33', NULL),
(1, 'MCA', 'Computer Application', 'Regular', 'Dr.NGPIT', 'Anna University', '2012-06-12', '91%', '2019-12-06 12:26:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `personal_id` int(11) NOT NULL,
  `exp_college` varchar(120) NOT NULL,
  `university` varchar(55) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `doj` date DEFAULT NULL,
  `dol` date DEFAULT NULL,
  `doe` varchar(35) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`personal_id`, `exp_college`, `university`, `designation`, `doj`, `dol`, `doe`, `created_at`, `modified_at`) VALUES
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00'),
(0, '', '', '', NULL, NULL, '', '2019-12-06 12:26:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `joining_details`
--

CREATE TABLE `joining_details` (
  `personal_id` int(11) NOT NULL,
  `doj` date NOT NULL,
  `current_salary` varchar(25) NOT NULL,
  `expected_salary` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joining_details`
--

INSERT INTO `joining_details` (`personal_id`, `doj`, `current_salary`, `expected_salary`, `created_at`, `modified_at`) VALUES
(1, '2019-12-10', '27,000', '35,000', '2019-12-06 07:54:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `personal_id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `father_occupation` varchar(120) NOT NULL,
  `married_status` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `cummunity` varchar(35) NOT NULL,
  `caste` varchar(120) NOT NULL,
  `mother_tongue` varchar(35) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email_id` varchar(120) NOT NULL,
  `native_place` varchar(55) NOT NULL,
  `status` smallint(4) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`personal_id`, `first_name`, `last_name`, `dob`, `gender`, `father_name`, `father_occupation`, `married_status`, `nationality`, `religion`, `cummunity`, `caste`, `mother_tongue`, `phone_no`, `email_id`, `native_place`, `status`, `created_on`) VALUES
(1, 'Suresh', 'Subramani', '1986-12-19', 'Male', 'Subramani', 'Saree Weaver', 'Married', 'indian', 'Hindu', 'MBC', 'test', 'Tamil', '8884074278', 'sureshsubramani1986@gmail.com', 'Salem', 1, '2019-12-06 11:45:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`personal_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `mobile` (`phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
