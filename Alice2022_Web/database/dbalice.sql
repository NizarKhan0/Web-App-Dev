-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 01:32 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalice`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `method` varchar(100) DEFAULT NULL,
  `flat` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `pin_code` int(10) DEFAULT NULL,
  `total_products` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `staffid` int(20) NOT NULL,
  `staff_id` varchar(20) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `admin_fullname` varchar(50) NOT NULL,
  `admin_nophone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`staffid`, `staff_id`, `admin_username`, `admin_password`, `admin_fullname`, `admin_nophone`) VALUES
(10, '202045063', 'kenzo', '1234', 'Kenzo Kai', '019-8382882'),
(11, '2002458890', 'eli', 'eli', 'elinadira', '011-1209010'),
(12, '2022459780', 'kura', '1245', 'Sakura', '011-12910018'),
(14, '2022458895', 'kana', '1234', 'Kana', '012-3784848'),
(21, '2022458001', 'ELICOMEL', '9999', 'Eli paling cantik', '019-9001901');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(20) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `full_name`, `date`, `time`) VALUES
(15, 'Nizar Khan', '2022-06-10', '3:20 P.M');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `id` int(11) NOT NULL,
  `ord_name` varchar(50) DEFAULT NULL,
  `ord_price` double DEFAULT NULL,
  `ord_img` varchar(50) DEFAULT NULL,
  `ord_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`id`, `ord_name`, `ord_price`, `ord_img`, `ord_quantity`) VALUES
(14, 'strawberry mango smoothie', 9, 'pic2.jpg', 1),
(15, 'choco smoothie', 8.5, 'pic3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `order_image` varchar(255) DEFAULT NULL,
  `order_price` double DEFAULT NULL,
  `tot_price` double DEFAULT NULL,
  `fd_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `order_name`, `order_image`, `order_price`, `tot_price`, `fd_type`) VALUES
(1, 'souffle pancake', 'pic1.jpg', 15, NULL, 'dessert'),
(2, 'strawberry mango smoothie', 'pic2.jpg', 9, NULL, 'beverage'),
(3, 'choco smoothie', 'pic3.jpg', 8.5, NULL, 'beverage'),
(4, 'strawberry berry smoothie', 'pic4.jpg', 9, NULL, 'beverage'),
(5, 'creampuff', 'pic5.jpg', 3.5, NULL, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `prod_name` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `prod_price` double DEFAULT NULL,
  `prod_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`prod_name`, `id`, `prod_price`, `prod_image`) VALUES
('souffle pancake', 2, 15, 'pic1.jpg'),
('strawberry mango smoothie', 3, 9, 'pic2.jpg'),
('choco smoothie', 4, 8.5, 'pic3.jpg'),
('strawberry berry smoothie', 6, 9, 'pic4.jpg'),
('creampuff', 7, 3.5, 'pic5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `username`, `password`, `full_name`, `phone_number`, `address`, `email`, `gender`) VALUES
(1, 'nizark', '1234', 'Nizar Khan', '018-7898521', 'Batu Pahat,Johor', 'nizaruitm7@gmail.com', 'Male'),
(1245, 'ryuzaki', '1234', 'Ryuzaki', '012-3456789', 'Tokyo, Japan ', 'ryu01@gmail.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `staffid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1246;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
