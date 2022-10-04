-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 01:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `phone`, `email`, `gender`, `address`, `pass`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 'male', 'kh', '123'),
(7, 'jesika', '123', 'njkkkooo@dsd.com', 'fmale', 'kh', '123'),
(6, 'abeer', '09332', 'non@gmail.com', 'male', 'kh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `collectors`
--

CREATE TABLE `collectors` (
  `collecter_id` int(11) NOT NULL,
  `col_email` varchar(255) NOT NULL,
  `col_phone` varchar(255) NOT NULL,
  `col_address` varchar(255) NOT NULL,
  `col_gender` varchar(255) NOT NULL,
  `col_user_name` varchar(255) NOT NULL,
  `col_password` varchar(255) NOT NULL,
  `col_del` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collectors`
--

INSERT INTO `collectors` (`collecter_id`, `col_email`, `col_phone`, `col_address`, `col_gender`, `col_user_name`, `col_password`, `col_del`) VALUES
(1, 'collector@gmail.com', '5555', 'KH', 'male', 'osman', '123', 0),
(2, 'ali@gmail.com', '45862', 'KH', 'male', 'Ali', '123', 0),
(3, 'Irdc@2022.com', '2525', 'KH', 'male', 'omer', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipp_type` varchar(255) NOT NULL,
  `rec_name` varchar(255) NOT NULL,
  `rec_cun` varchar(255) NOT NULL,
  `rec_add` varchar(255) NOT NULL,
  `rec_phone` varchar(255) NOT NULL,
  `ship_date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `admin_feedback` varchar(255) DEFAULT '0',
  `admin_id` int(11) DEFAULT 0,
  `user_view` int(11) NOT NULL DEFAULT 0,
  `collecter_id` int(11) DEFAULT 0,
  `collecter_feedback` varchar(255) DEFAULT NULL,
  `req_del` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `service_id`, `user_id`, `shipp_type`, `rec_name`, `rec_cun`, `rec_add`, `rec_phone`, `ship_date`, `status`, `total_price`, `admin_feedback`, `admin_id`, `user_view`, `collecter_id`, `collecter_feedback`, `req_del`) VALUES
(15, 2, 1, 'mony', 'osmn', 'uae', 'streer', '5554', '2022-06-28', 1, 120, 'Your Rqeuest has been Approved !! Thank You For Choosing DHL', 1, 1, 3, NULL, 0),
(13, 5, 1, 'document', 'abdallah hasan', 'sudan', 'kh', '092645508', '2022-05-19', 2, 645, 'Your Rqeuest has been Rejected For violating company regulations !! Thank You For Choosing DHL', 1, 1, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_desc` varchar(255) NOT NULL,
  `service_policy` varchar(255) NOT NULL,
  `service_photo` varchar(255) NOT NULL,
  `price` varchar(525) NOT NULL,
  `kilo_price` varchar(255) NOT NULL,
  `service_del` int(11) NOT NULL DEFAULT 0,
  `service_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_desc`, `service_policy`, `service_photo`, `price`, `kilo_price`, `service_del`, `service_date`) VALUES
(2, 'Air Freight', ' Air Freight!!', '1- No Guns', 'service-1.jpg', '100', '10', 0, '2022-03-15 17:48:53'),
(3, 'Ocean Freight', 'We have Ocean Freight', '1- No Deugs\r\n2 - NO More GUNS', 'service-2.jpg', '50', '50', 0, '2022-03-15 17:51:59'),
(4, 'Road Freight', 'we have Road Freight!!', '1- no drunks\r\n2-no red wine', 'service-3.jpg', '80', '100', 1, '2022-03-15 17:54:17'),
(5, 'jesica', 'none', 'guns \r\n', 'service-4.jpg', '555', '90', 0, '2022-03-19 10:24:44'),
(7, 'test name', 'we have Air Freight!!', 'no', '20171028_205926.jpg', '5', '5', 0, '2022-07-30 19:46:42'),
(6, 'service_a', 'service', 'on', '85TYL.jpg', '5', '10', 1, '2022-05-12 08:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `ship_type`
--

CREATE TABLE `ship_type` (
  `ship_type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `ship_del` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ship_type`
--

INSERT INTO `ship_type` (`ship_type_id`, `type_name`, `ship_del`) VALUES
(1, 'Document', 0),
(2, 'Home Staff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `birth_of_date` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `del_user` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `F_Name`, `L_Name`, `Email`, `phone`, `Address`, `Gender`, `birth_of_date`, `country`, `Pass`, `add_date`, `del_user`) VALUES
(1, 'ahmed', 'omer', 'ahmed@gmail.com', '09332', 'kh', 'male', '1988-02-02', 'sudan', '123', '2022-03-15 12:12:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `collectors`
--
ALTER TABLE `collectors`
  ADD PRIMARY KEY (`collecter_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `ship_type`
--
ALTER TABLE `ship_type`
  ADD PRIMARY KEY (`ship_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `collectors`
--
ALTER TABLE `collectors`
  MODIFY `collecter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ship_type`
--
ALTER TABLE `ship_type`
  MODIFY `ship_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
