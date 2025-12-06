-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 07:39 AM
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
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `Sr_no` int(11) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`Sr_no`, `notice`, `descript`, `date`, `file`) VALUES
(78, 'hb', 'njn', '2023-04-10', '2645-certi fo software testing.pdf');

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
(68, 'minaz', 'mulla', 'minaz', 'Female', 'minaz@gmail.com', '121101111554', '07600404831', '8866590998', '2022-12-06', 'vapi', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '206580316025', '1234', 'diploma  ', 'Information Technology', 'Government polyphonic daman', '2023  ', 'jafar', 'patel', 'bussniues', '0760454556', 'wrert', 'devi', '07600404831', 'homewife', '1'),
(69, 'rakesh', 'mali', 'ratan', 'male', 'rakeshmali46519@gmail.com', '12333454754', '0760043333', '5655607600', '2023-01-19', 'maharashtra', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '206580316003', '1234', 'diploma              ', 'Information Technology', 'Government polyphonic daman', '2023              ', 'savalram', 'patel', 'bussniues', '07600404831', 'sangita', 'devi', '45423333333', 'adweads', '1'),
(70, 'poonam', 'patel', 'ratan', 'Female', 'poonam@gmail.com', '1234340293243', '07600404831', '9898801055', '2023-01-06', 'gujrat', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '206580316002', '1234', 'diploma', 'Information Technology', 'Government polyphonic daman', '2023', 'savalram', 'patel', 'bussniues', '07600404831', 'ramila', 'devi', '07600404831', 'adweads', '1'),
(71, 'yashvi', 'patel', 'raju', 'Female', 'rakeshmali46519@gmail.com', '4356578', '07600404831', '3453454', '2023-01-12', 'maharashtra', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '206580316001', '1234', 'Diploma', 'Information Technology', 'Government polyphonic daman', '2023', 'raju', 'patel', '345345', '7878', 'ram', 'patel', '34534534', 'v345v34', '1'),
(72, 'rakesh', 'mali', 'xyz', 'Male', 'rakeshmali46519@gmail.com', '12345678', '07600404831', '0760', '2023-01-20', 'maharashtra', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '206580316006', '1234', 'diploma', 'Information Technology', 'Government polyphonic daman', '2023', 'rakesh', 'patel', 'bussniues', '07600404831', 'xyz', 'patel', '07600404831', 'ereer', '1'),
(74, 'ritika', 'pandey', 'rakesh', 'Female', 'ritika@gmail.com', '11212121212', '232323232333', '333333333333', '2023-03-02', 'up', 'pardi', 'gav', 'gujrat', '3962103333', '206580316018', '1234', 'diploma', 'Information Technology', 'Government polyphonic daman', '2023', 'rakesh', 'panday', 'worker', '2222222222', 'ramila', 'pandey', '222222222222', 'housewife', '1'),
(75, 'satyam', 'yadav', 'xyz', 'Male', 'satyam@gmail.com', '1234567890', '07600404831', '07600404831', '2023-03-08', 'daman', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '3962102222', '206580316004', '1234', 'diploma', 'Information Technology', 'Government polyphonic daman', '2023', 'rakesh', 'eeee', 'bussniues', '07600404831', 'nita', 'pandey', '07600404831', 'ereer', '1'),
(76, 'khushi', 'pandey', 'rakesh', 'Female', 'ritika99@gmail.com', '12345678912', '999863423888', '665431234567', '3333-03-03', 'dubai', 'UTTTAR Pradesh', 'dubai', 'londan', '3961859999', '206580316028', '1234', 'diploma', 'civil', 'ritika college', '2024', 'rakesh', 'pandey', 'prime minster', '887654432125', 'gita ', 'pandey', '9987654356', 'IPS', '6');

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
(14, 'rakesh', 'bhujade', 'ram', 'rakeshbhujade@gmail.com', '076897565433', '07600404831', '', '2023-01-12', 'male', 'vapi', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '', 'phd', '2023-01-18', 'rakesh@1234', '1234'),
(16, 'subham', 'gupta', 'kumar', 'subham@gmail.com', '076004048222', '07600404831', '', '2023-01-04', 'male', 'vapi', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '', 'phd', '2023-01-17', 'shubham@1234', '1234'),
(17, 'sanjay', 'mate', 'ram', 'sanjay@gmail.com', '07600404831', '3434343434', '', '2023-01-18', 'male', '445fg', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '', 'phd', '2023-01-25', 'sanjay@1234', '1234');

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
(1, 'admin12@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admissionform`
--

CREATE TABLE `admissionform` (
  `sr_no` int(11) NOT NULL,
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
  `email` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admissionform`
--

INSERT INTO `admissionform` (`sr_no`, `fname`, `lname`, `mname`, `fathername`, `mothername`, `pob`, `dob`, `address`, `city`, `state`, `pincode`, `contact`, `acontact`, `email`, `percentage`) VALUES
(14, 'rakesh', 'mali', 'ratan', 'savalram', 'pushpa', 'gujrat', '2023-01-03', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 34),
(15, 'rake', 'mkmd', 'sasdwe', 'wedw', 'wed', 'wed', '2023-01-10', 'edwed', 'wedwed', 'wedwe', '898', '4554', '5454', 'rakeshmali46519@gmail.com', 0),
(16, 'rake', 'mkmd', 'sasdwe', 'wedw', 'wed', 'wed', '2023-01-10', 'edwed', 'wedwed', 'wedwe', '898', '4554', '5454', 'rakeshmali46519@gmail.com', 0),
(17, 'rakesh', 'ece', 'ceec', 'cecde', 'cedced', 'cedc', '2023-01-04', 'csdc', 'sdcd', 'sdcsd', '65656', '6565', '54654', 'rakeshmali46519@gmail.com', 56),
(18, 'rakesh', 'ece', 'ceec', 'cecde', 'cedced', 'cedc', '2023-01-04', 'csdc', 'sdcd', 'sdcsd', '65656', '6565', '54654', 'rakeshmali46519@gmail.com', 56),
(19, 'rakeshd', 'dsf', 'df', 'df', 'sdf', 'sdf', '2023-01-19', 'ddsf', 'sdf', 'sdf', '545', '54', '54', 'rakeshmali46519@gmail.com', 54),
(20, 'rakeshd', 'dsf', 'df', 'df', 'sdf', 'sdf', '2023-01-19', 'ddsf', 'sdf', 'sdf', '545', '54', '54', 'rakeshmali46519@gmail.com', 54),
(21, 'rakeshd', 'dsf', 'df', 'df', 'sdf', 'sdf', '2023-01-19', 'ddsf', 'sdf', 'sdf', '545', '54', '54', 'rakeshmali46519@gmail.com', 54),
(22, 'rakeshd', 'dsf', 'df', 'df', 'sdf', 'sdf', '2023-01-19', 'ddsf', 'sdf', 'sdf', '545', '54', '54', 'rakeshmali46519@gmail.com', 54),
(23, 'er', 'er', 'er', 'er', 'er', 'er', '2023-01-02', 'er', 'er', 'er', '88', '', '', 'rakeshmali46519@gmail.com', 54),
(24, 'er', 'er', 'er', 'er', 'er', 'er', '2023-01-02', 'er', 'er', 'er', '88', '', '', 'rakeshmali46519@gmail.com', 54),
(25, 'er', 'er', 'er', 'er', 'er', 'er', '2023-01-02', 'er', 'er', 'er', '88', '', '', 'rakeshmali46519@gmail.com', 54),
(26, 'er', 'er', 'er', 'er', 'er', 'er', '2023-01-02', 'er', 'er', 'er', '88', '', '', 'rakeshmali46519@gmail.com', 54),
(27, 'rakesh', 'fg', 'fg', 'fgd', 'dfg', 'fg', '2023-01-10', 'sfg', 'dfg', 'dfg', '64', '', '548', 'rakeshmali46519@gmail.com', 45),
(28, 'rakesh', 'fg', 'fg', 'fgd', 'dfg', 'fg', '2023-01-10', 'sfg', 'dfg', 'dfg', '64', '', '548', 'rakeshmali46519@gmail.com', 45),
(29, 'rakesh', 'r', 'r', 'rt', 'rt', 'r', '2023-01-10', 'rt', 'rt', 'rt', '45', '', '89899898998', 'rakeshmali46519@gmail.com', 56),
(30, 'rakesh', 'r', 'r', 'rt', 'rt', 'r', '2023-01-10', 'rt', 'rt', 'rt', '45', '', '89899898998', 'rakeshmali46519@gmail.com', 56),
(31, 'sd', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2023-01-11', 'sdf', 'sdf', 'sdf', '54', 'sdfsdf', 'sdfsdf', 'rakeshmali46519@gmail.com', 45),
(32, 'sd', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2023-01-11', 'sdf', 'sdf', 'sdf', '54', 'sdfsdf', 'sdfsdf', 'rakeshmali46519@gmail.com', 45),
(33, 'ere', 'er', 'er', 'er', 'er', 'er', '2023-01-16', 'er', 'er', 'er', '56', '65656565856', '5683268656', 'rakeshmali46519@gmail.com', 54),
(34, 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', '2023-01-03', 'sd', 'sd', 'sd', '56', '3434343434', '6586456545', 'rakeshmali46519@gmail.com', 12),
(35, 'h', 'j', 'u', 'j', 'j', 'u', '2023-03-08', 'b', 'n', 'j', '77', '9898989898', '9999999999', 'rakeshmali46519@gmail.com', 9),
(36, 'e', 'e', 'e', 'e', 'e', 'e', '2023-03-13', 'e', 'e', 'e', '35', '3333333333', '3333333333', 'rakeshmali46519@gmail.com', 4),
(37, 'shubham ji', 'rakeshmali', 'raj', 'savalram', 'ramila', 'maharashtra', '2023-03-16', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 45),
(38, 'shubham ji', 'rakeshmali', 'raj', 'savalram', 'ramila', 'maharashtra', '2023-03-16', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 45),
(39, 'shubham ji', 'rakeshmali', 'raj', 'savalram', 'ramila', 'maharashtra', '2023-03-16', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 45),
(40, 'shubham ji', 'rakeshmali', 'raj', 'savalram', 'ramila', 'maharashtra', '2023-03-16', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 45),
(41, 'shubham ji', 'rakeshmali', 'raj', 'savalram', 'ramila', 'maharashtra', '2023-03-16', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 45),
(42, 'shubham ji', 'rakeshmali', 'raj', 'savalram', 'ramila', 'maharashtra', '2023-03-16', 'Daman', 'Daman', 'Dadra and Nagar Haveli and Daman and Diu', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 45),
(43, 'rakesh', 'rakeshma', 'ratan', 'savalram', 'sangita', 'maharashtra', '2023-03-10', 'Daman', 'Daman', 'Kerala', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 44),
(44, 'rakesh', 'rakeshma', 'ratan', 'savalram', 'sangita', 'maharashtra', '2023-03-10', 'Daman', 'Daman', 'Kerala', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 44),
(45, 'rakesh', 'rakeshma', 'ratan', 'savalram', 'sangita', 'maharashtra', '2023-03-10', 'Daman', 'Daman', 'Kerala', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 44),
(46, 'rakesh', 'rakeshma', 'ratan', 'savalram', 'sangita', 'maharashtra', '2023-03-10', 'Daman', 'Daman', 'Kerala', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 44),
(47, 'rakesh', 'rakeshma', 'ratan', 'savalram', 'sangita', 'maharashtra', '2023-03-10', 'Daman', 'Daman', 'Kerala', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 44),
(48, 'rakesh', 'rakeshma', 'ratan', 'savalram', 'sangita', 'maharashtra', '2023-03-10', 'Daman', 'Daman', 'Kerala', '396210', '07600404831', '07600404831', 'rakeshmali46519@gmail.com', 44),
(49, 'poonam', 'fff', 'fff', 'fff', 'fff', 'fff', '2023-03-23', 'fffff', 'ffff', 'Andhra Pradesh', '444', '4444333333', '3333333333', 'rakeshmali46519@gmail.com', 34),
(50, 'rak', 'ddd', 'ddd', 'ddd', 'ddd', 'ddddddd', '3333-03-31', 'ddddd', 'dddd', 'Mizoram', '977878', '1212121212', '2222222222', 'aloktiwari5804@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `sdate` date NOT NULL,
  `subject` varchar(254) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`sr_no`, `image`, `date`, `sdate`, `subject`, `faculty`, `sem`) VALUES
(30, '8049-1. ICT Fundamentals.pptx', '2023-01-17', '2023-01-24', '', '', ''),
(31, '1987-4. Network Addressing.pptx', '2023-01-16', '2023-01-24', '', '', ''),
(32, '4689-it.docx', '2023-01-10', '2023-01-10', 'Maths', 'rk', '1'),
(33, '2070-20191031_080213.jpg', '2023-01-01', '2023-01-31', 'Maths', 'rk', '1'),
(34, '5950-20191031_080213.jpg', '2023-01-06', '2023-01-31', 'Maths', '2545', '1'),
(35, '4722-20191101_175208.jpg', '2023-01-01', '2023-01-24', 'Maths', 'dw', '1'),
(36, '3357-Download More Source Code and Scripts.html', '2023-03-01', '2023-03-22', 'Maths', 'vff', '1'),
(37, '8170-Bus.jpg', '2023-04-04', '2023-04-12', 'Maths', 'mnm m', '1');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `sr_no` int(255) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `start_month` varchar(30) NOT NULL,
  `end_month` varchar(20) NOT NULL,
  `total_attendence` varchar(15) NOT NULL,
  `persent` varchar(15) NOT NULL,
  `mark` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sr_no`, `enrollment`, `name`, `subject`, `sem`, `start_month`, `end_month`, `total_attendence`, `persent`, `mark`) VALUES
(24, '206580316002', 'poonam', 'Maths', '1', '2023-01-02', '2023-01-31', '20', '80%', '23'),
(25, '206580316002', 'poonam', 'eniromental', '1', '2023-01-01', '2023-01-31', '20', '78%', '24'),
(26, '206580316003', 'rakesh', 'python advance', '1', '2023-01-01', '2023-01-31', '20', '80%', '98'),
(27, '206580316003', 'minaz', 'eniromental', '2', '2023-01-01', '2023-01-31', '20', '33%', '23'),
(28, '206580316025', 'minaz', 'Maths', '1', '2023-01-02', '2023-01-31', '25', '96%', '24'),
(29, '206580316025', 'minaz', 'Maths', '1', '2023-01-02', '2023-01-31', '25', '96%', '24'),
(30, '206580316003', 'rakesh', 'ens', '4', '2023-03-01', '2023-03-31', '20', '80%', '7'),
(31, '33', 'ddd', 'Maths', '1', '2023-03-01', '2023-03-31', 'd', 'd', '33');

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
(72, 'rakesh mali', 'rakeshmali46519@gmail.com', '07600404831', 'hi'),
(73, 'r', '456@gmail.com', 'jjjjjjjjjjjj', 'k\r\n\r\n'),
(74, 'e', 'rakeshmali46519@gmail.com', '07600404831', '12\r\n'),
(75, 'rakesh mali', 'rakeshmali46519@gmail.com', '0', 'rrr\r\n'),
(76, 'rakesh mali', 'rakeshmali46519@gmail.com', '0', 'rrr\r\n'),
(77, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(78, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(79, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(80, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(81, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(82, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(83, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(84, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(85, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(86, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(87, 't', 'rakeshmali46519@gmail.com', '0', '444444444444444\r\n'),
(88, 'ttt', 'rakeshmali46519@gmail.comr', '4', '\r\n'),
(89, 'ttt', 'rakeshmali46519@gmail.comr', '4', '\r\n'),
(90, 'rrr', 'rakeshmali46519@gmail.com', '44', '\r\nr\r\n'),
(91, 'rrr', 'rakeshmali46519@gmail.com', '44', '\r\nr\r\n'),
(92, 'rrr', 'rakeshmali46519@gmail.com', '44', '\r\nr\r\n'),
(93, 'Rakesh mali', 'rakeshmali46519@gmail.com', '4444444444', '4444444444444444444\r\n\r\n'),
(94, 'Rakesh mali', 'rakeshmali46519@gmail.com', '4444444444', '4444444444444444444\r\n\r\n'),
(95, 'raj', 'rakeshmali46519@gmail.com', '2222222222', 'wewe\r\n\r\n'),
(96, 'raj', 'rakeshmali46519@gmail.com', '2222222222', 'wewe\r\n\r\n'),
(97, 'oip', 'aloktiwari5804@gmail.com', '4444444444', 'hi\r\n\r\n'),
(98, 'kkk', 'rakeshmali46519@gmail.com', '9898801505', 'kijiknjn '),
(99, 'kkk', 'rakeshmali46519@gmail.com', '9898801505', 'kijiknjn '),
(100, 'kkk', 'rakeshmali46519@gmail.com', '9898801505', 'kijiknjn ');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`sr_no`, `image`) VALUES
(121, '7053-ict.docx');

-- --------------------------------------------------------

--
-- Table structure for table `pre-question-paper`
--

CREATE TABLE `pre-question-paper` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `subject` varchar(233) NOT NULL,
  `sem` varchar(2233) NOT NULL,
  `faculty` varchar(233) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sr_no` int(11) NOT NULL,
  `enrollment_no` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `mark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sr_no`, `enrollment_no`, `name`, `subject`, `sem`, `mark`) VALUES
(15, '206580316003', 'rakesh', 'Enviromental', '1', '78'),
(16, '206580316003', 'rakesh', 'asp.net', '5', '23'),
(17, '206580316025', 'rakesh', 'Math Basic', '1', '5'),
(18, '206580316025', 'ram', 'Math Basic', '1', '24'),
(19, '206580316025', 'minaz', 'Math Basic', '1', '1'),
(20, '206580316025', 'rakesh', 'Math Basic', '1', '444'),
(23, '206580316004', 'satyam', 'Enviromental', '1', '30');

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
(19, '12350', 'information technology', '1', '25', 'sunita'),
(20, '12435', 'maths', '1', '25', 'sunita'),
(21, '1243', 'dbmss', '2', '19', 'bharti'),
(22, '124353', 'dbmss', '3', '124', 'bharti'),
(23, '7985', 'MATHS', '1', '54', 'rakesh bhujade'),
(24, '151', 'information technology', '1', '56', '656'),
(26, '124352', 'opp', '1', '34', 'sanjay'),
(27, '4434', 'computer', '1', '34', 'sanjay');

-- --------------------------------------------------------

--
-- Table structure for table `studentenquiry`
--

CREATE TABLE `studentenquiry` (
  `sr_no` int(11) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sem` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentenquiry`
--

INSERT INTO `studentenquiry` (`sr_no`, `enrollment`, `name`, `faculty`, `title`, `description`, `date`, `sem`) VALUES
(3, '206580316002', 'rakesh mali', 'rk', 'edwfdd', 'dsdfwr3323', '2023-01-03', '5');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time_table_sem_1`
--

CREATE TABLE `time_table_sem_1` (
  `day` varchar(255) NOT NULL,
  `1` varchar(255) NOT NULL,
  `2` varchar(255) NOT NULL,
  `3` varchar(255) NOT NULL,
  `4` varchar(255) NOT NULL,
  `5` varchar(255) NOT NULL,
  `6` varchar(255) NOT NULL,
  `7` varchar(255) NOT NULL,
  `8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table_sem_1`
--

INSERT INTO `time_table_sem_1` (`day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
('monday', '  english', '                  english', '                  wns', '                  oop', '                     se             ', '         pratical 1', '    pratical                        ', '                 cs                  '),
('tuesday', '                  english', '                  english', '                  icn', '                  m-2', '                  ti', '       pratical  ', '     pratical                     ', '   ict                     '),
('wednesday', '                  maths', '                 maths ', '                  m-2', '                  m-2', '                  me', '        pratical                        fd  ', '      pratical  ', '           maths       '),
('thursday', '                  java', '                  java', '                  ins', '                      m-2                                                    ', '                  ac', '           pratical 3', '      pratical   ', '   graphic                                hih                          '),
('friday', '              math', '                    math                  fr                wrf', '                   asp                    fr       fr         wf', '        fr               android                 fr          wre       ', '                 re ', '                  pratical', '    pratical                                           ', '               maths                                         '),
('saturday', ' php', ' ', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_sem_2`
--

CREATE TABLE `time_table_sem_2` (
  `day` varchar(255) NOT NULL,
  `1` varchar(255) NOT NULL,
  `2` varchar(255) NOT NULL,
  `3` varchar(255) NOT NULL,
  `4` varchar(255) NOT NULL,
  `5` varchar(255) NOT NULL,
  `6` varchar(255) NOT NULL,
  `7` varchar(255) NOT NULL,
  `8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table_sem_2`
--

INSERT INTO `time_table_sem_2` (`day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
('monday', 'maths', '                 english', '                 wns', '                 oop', '                    se             ', '        pratical 1', '   pratical                        ', '                cs                  '),
('tuesday', '                 english', '                 english', '                 icn', '                 m-2', '                 ti', '      pratical  ', '    pratical                     ', '  ict                     '),
('wednesday', '                 maths', '                maths ', '                 m-2', '                 m-2', '                 me', '       pratical                        fd  ', '     pratical  ', '          maths       '),
('thursday', '                 java', '                 java', '                 ins', '                     m-2                                                    ', '                 ac', '          pratical 3', '     pratical   ', '  graphic                                hih                          '),
('friday', '             math', '                   math                  fr                wrf', '                  asp                    fr       fr         wf', '       fr               android                 fr          wre       ', '                re ', '                 pratical', '   pratical                                           ', '              maths                                         '),
('saturday', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_sem_3`
--

CREATE TABLE `time_table_sem_3` (
  `day` varchar(255) NOT NULL,
  `1` varchar(255) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(110) NOT NULL,
  `4` varchar(110) NOT NULL,
  `5` varchar(110) NOT NULL,
  `6` varchar(110) NOT NULL,
  `7` varchar(110) NOT NULL,
  `8` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table_sem_3`
--

INSERT INTO `time_table_sem_3` (`day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
('monday', '              m5', '              wf', '           math   ', '              ', '           maths   ', '              ', '         3     ', '              '),
('tuesday', '              m5', '              wf', '           math   ', '              ', '           maths   ', '              ', '         3     ', '              '),
('wednesday', '              m5', '              wf', '           math   ', '              ', '           maths   ', '              ', '         3     ', '              '),
('thursday', '              m5', '              wf', '           math   ', '              ', '           maths   ', '              ', '         3     ', '              '),
('friday', '              m5', '              wf', '           math   ', '              ', '           maths   ', '              ', '         3     ', '              '),
('saturday', '              m5', '              wf', '           math   ', '              ', '           maths   ', '              ', '         3     ', '              ');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_sem_4`
--

CREATE TABLE `time_table_sem_4` (
  `day` varchar(255) NOT NULL,
  `1` varchar(255) NOT NULL,
  `2` varchar(255) NOT NULL,
  `3` varchar(110) NOT NULL,
  `4` varchar(255) NOT NULL,
  `5` varchar(255) NOT NULL,
  `6` varchar(110) NOT NULL,
  `7` varchar(100) NOT NULL,
  `8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table_sem_4`
--

INSERT INTO `time_table_sem_4` (`day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
('monday', '   gk', '   ', '   ', '   ', '   ', '   ', '   ', '   '),
('tuesday', '   matg', '   ', '   ', '   ', '   ', '   ', '   ', '   '),
('wednesday', '   fr', '   ', '   ', '   ', '   ', '   ', '   ', '   '),
('thursday', '   fr', '   ', '   ', '   ', '   ', '   ', '   ', '   '),
('friday', '   erf', '   ', '   ', '   ', '   ', '   ', '   ', '   '),
('saturday', ' py', ' practivcal', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_sem_5`
--

CREATE TABLE `time_table_sem_5` (
  `day` varchar(255) NOT NULL,
  `1` varchar(222) NOT NULL,
  `2` varchar(222) NOT NULL,
  `3` varchar(222) NOT NULL,
  `4` varchar(222) NOT NULL,
  `5` varchar(222) NOT NULL,
  `6` varchar(222) NOT NULL,
  `7` varchar(222) NOT NULL,
  `8` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table_sem_5`
--

INSERT INTO `time_table_sem_5` (`day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
('monday', 'math', '              wrf', '              wf', '       wre       ', '              ', '            fd  ', '              ', '              '),
('tuesday', 'maths-2', '              wrf', '              wf', '       wre       ', '              ', '            fd  ', '              ', '              '),
('wednesday', 'gk', '              wrf', '              wf', '       wre       ', '              ', '            fd  ', '              ', '              '),
('thursday', '              hi', '              wrf', '              wf', '       wre       ', '              ', '            fd  ', '              ', '              '),
('friday', '              hi', '              wrf', '              wf', '       wre       ', '              ', '            fd  ', '              ', '              '),
('saturday', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_sem_6`
--

CREATE TABLE `time_table_sem_6` (
  `day` varchar(255) NOT NULL,
  `1` varchar(222) NOT NULL,
  `2` varchar(222) NOT NULL,
  `3` varchar(222) NOT NULL,
  `4` varchar(22) NOT NULL,
  `5` varchar(222) NOT NULL,
  `6` varchar(222) NOT NULL,
  `7` varchar(222) NOT NULL,
  `8` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table_sem_6`
--

INSERT INTO `time_table_sem_6` (`day`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
('monday', '                 english', '                 english', '                 wns', '                 oop', '                    se             ', '       maths                  pratical', '                  pratical                        ', '       maths               '),
('tuesday', '                 english', '                 english', '                 icn', '                 m-2', '                 ti', '                       pratical  ', '                      pratical                     ', '           fr                        '),
('wednesday', '                 maths', '                maths ', '                 m-2', '                 m-2', '                 me', '                       pratical                        fd  ', '                       pratical  ', '          maths       '),
('thursday', '                 java', '                 java', '                 ins', '                     m', '                 ac', '                         pratical', '                    pratical                                           hijijou                  ', '             tr                                  hih                          '),
('friday', '             math', '                   math                  fr                wrf', '                  asp                    fr       fr         wf', '                      ', '                re ', '                 pratical', '                     pratical                                           ', '              jo                                          '),
('saturday', ' pyhon', ' ophj', ' math', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `sr_no` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sem` varchar(233) NOT NULL,
  `faculty` varchar(243) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`sr_no`);

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
-- Indexes for table `admissionform`
--
ALTER TABLE `admissionform`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
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
-- Indexes for table `pre-question-paper`
--
ALTER TABLE `pre-question-paper`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- Indexes for table `studentenquiry`
--
ALTER TABLE `studentenquiry`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `Sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `add_teacher`
--
ALTER TABLE `add_teacher`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissionform`
--
ALTER TABLE `admissionform`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `sr_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `pre-question-paper`
--
ALTER TABLE `pre-question-paper`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studentenquiry`
--
ALTER TABLE `studentenquiry`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
