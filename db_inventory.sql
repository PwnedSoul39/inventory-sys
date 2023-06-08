-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 01:08 AM
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
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_type` varchar(255) NOT NULL,
  `i_brand` varchar(255) NOT NULL,
  `i_price` int(11) NOT NULL,
  `i_qty` int(11) NOT NULL,
  `i_status` tinyint(4) NOT NULL,
  `i_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`i_id`, `i_name`, `i_type`, `i_brand`, `i_price`, `i_qty`, `i_status`, `i_added`) VALUES
(1, 'Microsoft Ergonomic Keyboard', 'Keyboard', 'Microsoft', 3000, 50, 1, '2021-08-19 00:18:55'),
(2, 'Pro Type Ultra', 'Keyboard', 'Razer', 8500, 50, 1, '2021-02-14 17:27:45'),
(3, 'MX Mechanical Keyboard', 'Keyboard', 'Logitech', 7500, 30, 1, '2021-10-17 07:10:06'),
(4, 'K95 RGB Platinum XT Gaming Keyboard', 'Keyboard', 'Corsair', 7000, 35, 1, '2021-09-21 17:32:46'),
(5, 'K70 RGB Pro Mini Wireless', 'Keyboard', 'Corsair', 5500, 40, 1, '2021-08-19 00:12:55'),
(6, 'Cherry Stream Wireless Keyboard', 'Keyboard', 'Cherry', 2500, 25, 1, '2021-02-15 16:43:41'),
(7, 'ROG Claymore II Wireless Keyboard', 'Keyboard', 'Asus', 5500, 30, 1, '2021-05-11 15:24:49'),
(8, 'ROG Falchion Wireless Gaming Keyboard', 'Keyboard', 'Asus', 5000, 40, 1, '2022-09-25 14:43:56'),
(9, 'Das Keyboard 6 Professional', 'Keyboard', 'Das Keyboard', 6000, 40, 1, '2022-08-03 02:48:15'),
(10, 'Freestyle Edge RGB Split Mechanical Gaming Keyboard', 'Keyboard', 'Kinesis', 6000, 25, 1, '2023-04-27 06:37:43'),
(11, 'MX Master 3 Wireless Mouse', 'Mouse', 'Logitech', 5600, 10, 1, '2023-01-12 15:05:38'),
(12, 'Microsoft Bluetooth Ergonomic Wireless Mouse', 'Mouse', 'Microsoft', 2000, 45, 1, '2023-04-14 22:46:50'),
(13, 'Microsoft Adaptive Mouse', 'Mouse', 'Microsoft', 2500, 45, 1, '2022-01-17 00:48:34'),
(14, 'DeathAdder V3 Pro', 'Mouse', 'Razer', 4500, 30, 1, '2022-11-27 18:57:45'),
(15, 'Pro Click Mini', 'Mouse', 'Razer', 3500, 50, 1, '2022-09-14 10:01:57'),
(16, 'Microsoft Surface Mobile Mouse', 'Mouse', 'Microsoft', 2650, 30, 1, '2022-12-10 20:03:14'),
(17, 'Evoluent Vertical Mouse C Right Wired', 'Mouse', 'Evoluent', 3250, 30, 1, '2022-05-28 16:24:34'),
(18, 'R.A.T. 8+ Gaming Mouse', 'Mouse', 'Mad Catz', 2700, 45, 1, '2022-01-13 14:00:25'),
(19, 'OP-720 Optical Mouse', 'Mouse', 'A4Tech', 1500, 200, 1, '2021-04-08 11:10:33'),
(20, 'Pulsefire Haste Gaming Mouse', 'Mouse', 'HyperX', 2700, 30, 1, '2023-01-10 13:44:36'),
(21, 'SN30 Pro+', 'Controller', '8BitDo', 3500, 50, 1, '2021-10-27 03:43:11'),
(22, 'SN30 Pro SN', 'Controller', '8BitDo', 3250, 45, 1, '2022-03-07 10:41:18'),
(23, 'DualShock 4 Wireless Controller', 'Controller', 'Playstation', 3500, 50, 1, '2023-03-04 03:51:26'),
(24, 'Logitech F310 Gamepad', 'Controller', 'Logitech', 1300, 80, 1, '2021-04-08 11:10:33'),
(25, 'Logitech F710 Wireless Gamepad', 'Controller', 'Logitech', 2500, 90, 1, '2023-04-02 04:27:20'),
(26, 'XBOX Elite Wireless Controller', 'Controller', 'Microsoft', 6000, 50, 1, '2021-07-07 14:42:28'),
(27, 'Switch Pro Controller', 'Controller', 'Nintendo', 3300, 50, 1, '2021-07-22 10:22:38'),
(28, 'Seagate BarraCuda 1TB', 'HDD', 'Seagate', 3750, 40, 1, '2021-04-29 02:58:15'),
(29, 'WD Blue Desktop 1TB', 'HDD', 'Western Digital', 3800, 45, 1, '2021-06-30 15:51:38'),
(30, 'Seagate Firecuda Desktop 2TB', 'HDD', 'Seagate', 6800, 30, 1, '2023-04-02 04:27:20'),
(31, 'Samsung 870 EVO 500GB', 'SSD', 'Samsung', 3300, 100, 1, '2021-07-07 14:42:28'),
(32, 'Crucial BX500 2TB', 'SSD', 'Crucial', 7500, 100, 1, '2021-07-22 10:22:38'),
(33, 'Crucial P3 500GB', 'SSD', 'Crucial', 2000, 25, 1, '2022-05-07 03:17:07'),
(34, 'WD Black SN850X 1TB', 'SSD', 'Western Digital', 6700, 30, 1, '2022-12-27 07:23:55'),
(35, 'Dominator Platinum RGB 32GB DDR4-3200', 'RAM', 'Corsair', 9000, 10, 1, '2021-12-02 00:32:52'),
(36, 'Ripjaws V 16GB DDR4-3600', 'RAM', 'G.SKill', 3500, 25, 1, '2023-05-31 11:01:50'),
(37, 'Trident Z Royal Series 64GB DDR4-3600', 'RAM', 'G.Skill', 12000, 5, 1, '2022-10-14 06:45:25'),
(38, 'Vivobook 15', 'Laptop', 'Asus', 50000, 10, 1, '2022-04-06 20:47:19'),
(39, 'IdeaPad Notebook', 'Laptop', 'Lenovo', 40000, 15, 1, '2021-04-19 01:58:09'),
(40, 'ThinkPad T14s', 'Laptop', 'Lenovo', 95000, 5, 1, '2022-08-21 22:52:21'),
(41, 'DualShock3 Controller', 'Controller', 'Sony', 2300, 1550, 1, '2021-09-22 21:19:57'),
(42, 'DualShock2 Controller', 'Controller', 'Sony', 500, 5000, 1, '2022-02-10 02:19:22'),
(43, 'DualShock1 Controller', 'Controller', 'Sony', 250, 150000, 1, '2023-01-18 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `o_id` int(11) NOT NULL,
  `o_cus` varchar(255) NOT NULL,
  `o_item` varchar(255) NOT NULL,
  `o_qty` int(11) NOT NULL,
  `o_total` int(11) NOT NULL,
  `o_status` tinyint(4) NOT NULL,
  `o_order` datetime DEFAULT NULL,
  `o_receive` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`o_id`, `o_cus`, `o_item`, `o_qty`, `o_total`, `o_status`, `o_order`, `o_receive`) VALUES
(1, 'User39', 'Pro Type Ultra', 5, 42500, 1, '2023-05-20 07:32:59', NULL),
(2, 'SmithyWeen', 'OP-720 Optical Mouse', 5, 7500, 2, '2023-05-20 08:09:35', NULL),
(3, 'User39', 'Logitech F310 Gamepad', 2, 2600, 5, '2023-05-20 12:07:50', '2023-05-20 20:08:25'),
(4, 'a', 'e', 3, 223, 5, '2023-06-01 16:03:00', '2023-06-08 17:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `u_user` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_type` tinyint(4) NOT NULL,
  `u_join` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_user`, `u_email`, `u_pass`, `u_type`, `u_join`) VALUES
(1, 'user39', 'user@email.com', '$2y$10$mEswyh0obAHTRtFFvZITReWt/tDHjHlumrZuJFT0NXk0NcxKTjLs.', 1, '2023-06-06 17:29:59'),
(2, 'admin1', 'admin1@email.com', '$2y$10$uz5a.C1zoAoYtHq2EYkYyeWL.NokDoaZFipGeby9HiQJFRSYXha72', 2, '2023-06-06 17:30:14'),
(3, 'BulkBogan', 'bulk420@email.com', '$2y$10$XNqHDMmYp04x2yDDYcaA..EiDbxD007o6Tc/LUN6feo0RSYwelwRG', 1, '2023-06-06 18:36:59'),
(4, 'Ethos', 'e@email.com', '$2y$10$GTRUx.TN8jROOzzdo/Dn/eJJqqWFJsMsPv1peT8f.NumvTF8ykZAa', 1, '2023-06-06 19:41:18'),
(5, 'Ramza', 'fft@email.com', '$2y$10$25Y0IX.Xz8407h.lSatg..GYI8gcgHnJ2imlRI5Uvbc2y9Hw1uaKe', 1, '2023-06-06 19:46:19'),
(6, 'Lukan', 'ff1@email.com', '$2y$10$oumKZWTbV5wKgBqTnpW7bOWUl5xoFUVTz6YtcpThiZBYmeeJY8sAO', 1, '2023-06-06 19:46:50'),
(7, 'admin', 'admin@email.com', '$2y$10$VXmoTnOKHdex0T41a4s2D.S.WwFoy/zIJAImssKRJM9yM8BlS0AVC', 2, '2023-06-06 19:47:30'),
(8, 'admin2', 'admin2@email.com', '$2y$10$NAvBk72db23iVLnyM7525efHF5nPjIbs/Ag44RKdFE5GWHnFNYc2O', 2, '2023-06-06 19:48:57'),
(9, 'user40', 'user4@email.com', '$2y$10$LbyPe/9vAZWNdX0VhH0uLeHRQCjzTwhM5o3Su/K.4YWRE2BIph3/i', 1, '2023-06-06 19:54:35'),
(10, 'user41', 'user41@email.com', '$2y$10$BE.ycAJ16n8D5hxbValOx.3i.bvzujKuNnJ6pXpwbAj41CnSvoIY2', 1, '2023-06-06 19:54:53'),
(11, 'user42', 'user42@email.com', '$2y$10$TVI63nh6evLGYan8BIZ87.rfYU.en8cL2T0PkXh4tcQfO638sbXm2', 1, '2023-06-06 19:56:47'),
(12, 'user47', 'agent47@email.com', '$2y$10$6HEa09DtlNE743amqIRzjeaTARStUUjqTX.11/bO50bOdS/h7GlJC', 1, '2023-06-08 07:01:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
