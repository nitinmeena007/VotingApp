-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 10:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `password`, `address`, `email`, `photo`, `role`, `status`, `votes`) VALUES
(1, 'nitni ', 8293633333, 'abc', 'werwe', 'admin@123gmail.com', '4030_1.png', 0, 0, 0),
(2, 'Ruby', 8293633333, '123', 'Shastri Nagar', 'admin@456gmail.com', '3690_6.jpg', 1, 1, 2),
(3, 'Kunal', 8941253165, '789', 'nehru nagar', 'kunal132@gmail.com', '4886_10.jpg', 2, 0, 0),
(4, 'Suresh Kumar', 9874543210, '258', 'gandhi nagar', 'suresh@123gmail.com', '9181_14.jpg', 1, 1, 2),
(5, 'Jack', 8545123625, '4123', '34 Shubhash Nagar Mumbai Maharashtra', 'Jack@123gmail.com', '4559_pexels-chloe-1043473.jpg', 1, 0, 0),
(6, 'Ramesh', 9325146545, '777', '45 Kamla Nagar', 'ramesh@123gmail.com', '1526_9181_14.jpg', 1, 0, 0),
(7, 'Gourav', 5478145421, '000', '54 Bank Colony', 'gourav@345gmail.com', '912_gaurav-saini-BntDFenMtts-unsplash.jpg', 2, 0, 0),
(8, 'Rashmeeka ', 7874859625, 'abcd', '12 Board Colony', 'rashmeeka@123gmail.c', '1448_raamin-ka-Xnu1vsPQO_0-unsplash.jpg', 2, 0, 0),
(9, 'Denver', 123456789, '444', '74 Shubhash Nagar Mumbai Maharashtra', 'denver@234gmail.com', '9801_pexels-elle-hughes-1680172.jpg', 2, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
