-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 04:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `user_category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `password_hash`, `user_category`) VALUES
(1, 'Bill', 'bill@gmail.com', '12345', 'user'),
(2, 'Gemma Gaines', 'gubysex@gmail.com', '$2y$10$ZwrcTz4OM0lOtSR1/L1Gp.zEquwwQGW8UwiX2rEu8vjTppPFhkAZ.', 'admin'),
(3, 'Kareem Cortez', 'rinamituvu@mailinator.com', '$2y$10$GTVHYNW3Yy8Y9cd3cZyzs.uDvfaZ10zHmm.LkLVCOdwAQDqEpunTm', 'user'),
(4, 'Reece Hobbs', 'dytyfijuz@mailinator.com', '$2y$10$Pr9rk4zR16y4t21Ybsg4xeKpnMXmGAVbHgRmgycdQnzMHYH.Lu/ou', 'user'),
(5, 'Lacy Mills', 'hynace@mailinator.com', '$2y$10$FfedKD.9q8Fsipjd5aN1xep9sYUSU/0S3lD5IZz5FzL95py7WWBGW', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
