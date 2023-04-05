-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 05:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpdaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `Sr_no` int(11) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`Sr_no`, `notice`, `descript`, `file`) VALUES
(1, '0', ' dfmdfksmds dc', ''),
(2, '0', ' fsf df', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(3, '', ' ', ''),
(4, '', ' ', ''),
(5, '', ' ', ''),
(6, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(7, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(8, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(9, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(10, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(11, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(12, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(13, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(14, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg'),
(15, 'refsdf', 'sdferfwd ', 'WhatsApp Image 2022-10-25 at 11.56.01 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `sr_no` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `anumber` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `enrollment_number` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `term_end` varchar(50) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_lname` varchar(255) NOT NULL,
  `foccupation` varchar(255) NOT NULL,
  `fmobile` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_lname` varchar(255) NOT NULL,
  `mmobile` varchar(255) NOT NULL,
  `moccupation` varchar(255) NOT NULL,
  `sem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`sr_no`, `fname`, `lname`, `mname`, `gender`, `email`, `aadhar`, `number`, `anumber`, `dob`, `pob`, `address`, `city`, `state`, `pincode`, `enrollment_number`, `password`, `courses`, `branch`, `college_name`, `term_end`, `father_name`, `father_lname`, `foccupation`, `fmobile`, `mother_name`, `mother_lname`, `mmobile`, `moccupation`, `sem`) VALUES
(61, 'rakesh', 'mali', 'xyz', 'male', 'rakeshmali46519@gmail.com', '1234340293243', '07600404831', '07600404831', '2022-11-11', 'maharashtra', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '206580316002', '1234', 'diploma', 'Information technology', 'Government polyphonic daman', '2023', 'savalram', 'patel', 'bussniues', '07600404831', 'sangita', 'mali', '07600404831', 'housewife', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_teacher`
--

CREATE TABLE `add_teacher` (
  `sr_no` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `amobile` varchar(15) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pob` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `resume` varchar(150) NOT NULL,
  `higher_education` varchar(200) NOT NULL,
  `doj` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_teacher`
--

INSERT INTO `add_teacher` (`sr_no`, `fname`, `lname`, `mname`, `teacher_email`, `mobile`, `amobile`, `profile`, `dob`, `gender`, `pob`, `address`, `city`, `state`, `pincode`, `resume`, `higher_education`, `doj`, `email`, `password`) VALUES
(1, 'dr rakesh', 'kumar', 'bhujade', 'rakesh@gmail.com', '07600404831', '07600404831', '', '2022-10-14', 'male', 'gujrat', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '', 'phd', '2022-10-18', 'rakesh1234', '1234'),
(3, 'shubham', 'gupta', 'xyz', 'shubham@gmail.com', '1234567890', '7894561230', 'Snapchat-196990947.jpg', '2022-11-15', 'male', 'rajeshthan', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', 'Program-20.doc', 'phd', '2020-06-03', 'shubham@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `sr_no` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sr_no`, `user_id`, `password`) VALUES
(1, 'admin@gmail.com', '1234\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admissionform`
--

CREATE TABLE `admissionform` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `acontact` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `enquiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`sr_no`, `name`, `email`, `number`, `enquiry`) VALUES
(1, '0', 'rakeshmali46519@gmail.com', '07600404831', 'dcfvgbhnjmkl'),
(2, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'dcfvgbhnjmkl'),
(3, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'dcfvgbhnjmkl'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'uynhtbgvfcdxs'),
(17, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'uynhtbgvfcdxs'),
(18, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'uynhtbgvfcdxs'),
(19, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'uynhtbgvfcdxs'),
(20, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'qtyjuhgrfedswa'),
(21, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'hgfd\r\n\r\n'),
(22, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'ewrtyuikjhgfd'),
(23, 'mali', 'mali@gmail.com', '7896432141', 'hi i am\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sr_no` int(11) NOT NULL,
  `subject_code` varchar(15) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `teaching_hour` varchar(15) NOT NULL,
  `assign_teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sr_no`, `subject_code`, `subject_name`, `semester`, `teaching_hour`, `assign_teacher`) VALUES
(11, '75642', 'dbmss', '5', '54', 'pandem'),
(12, '7985', 'pyt', '2', '25', 'bharti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`Sr_no`);

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `add_teacher`
--
ALTER TABLE `add_teacher`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `Sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `add_teacher`
--
ALTER TABLE `add_teacher`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
