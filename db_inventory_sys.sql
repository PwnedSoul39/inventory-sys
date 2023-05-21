-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 21, 2023 at 05:33 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

DROP TABLE IF EXISTS `tbl_inventory`;
CREATE TABLE IF NOT EXISTS `tbl_inventory` (
  `i_id` int(255) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `i_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `i_brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `i_price` int(255) NOT NULL,
  `i_qty` int(255) NOT NULL,
  `i_status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`i_id`, `i_name`, `i_type`, `i_brand`, `i_price`, `i_qty`, `i_status`) VALUES
(1, 'Microsoft Ergonomic Keyboard', 'Keyboard', 'Microsoft', 3000, 50, 1),
(2, 'Pro Type Ultra', 'Keyboard', 'Razer', 8500, 50, 1),
(3, 'MX Mechanical Keyboard', 'Keyboard', 'Logitech', 7500, 30, 1),
(4, 'K95 RGB Platinum XT Gaming Keyboard', 'Keyboard', 'Corsair', 7000, 35, 1),
(5, 'K70 RGB Pro Mini Wireless', 'Keyboard', 'Corsair', 5500, 40, 1),
(6, 'Cherry Stream Wireless Keyboard', 'Keyboard', 'Cherry', 2500, 25, 1),
(7, 'ROG Claymore II Wireless Keyboard', 'Keyboard', 'Asus', 5500, 30, 1),
(8, 'ROG Falchion Wireless Gaming Keyboard', 'Keyboard', 'Asus', 5000, 40, 1),
(9, 'Das Keyboard 6 Professional', 'Keyboard', 'Das Keyboard', 6000, 40, 1),
(10, 'Freestyle Edge RGB Split Mechanical Gaming Keyboard', 'Keyboard', 'Kinesis', 6000, 25, 1),
(11, 'MX Master 3 Wireless Mouse', 'Mouse', 'Logitech', 5600, 10, 1),
(12, 'Microsoft Bluetooth Ergonomic Wireless Mouse', 'Mouse', 'Microsoft', 2000, 45, 1),
(13, 'Microsoft Adaptive Mouse', 'Mouse', 'Microsoft', 2500, 45, 1),
(14, 'DeathAdder V3 Pro', 'Mouse', 'Razer', 4500, 30, 1),
(15, 'Pro Click Mini', 'Mouse', 'Razer', 3500, 50, 1),
(16, 'Microsoft Surface Mobile Mouse', 'Mouse', 'Microsoft', 2650, 30, 1),
(17, 'Evoluent Vertical Mouse C Right Wired', 'Mouse', 'Evoluent', 3250, 30, 1),
(18, 'R.A.T. 8+ Gaming Mouse', 'Mouse', 'Mad Catz', 2700, 45, 1),
(19, 'OP-720 Optical Mouse', 'Mouse', 'A4Tech', 1500, 200, 1),
(20, 'Pulsefire Haste Gaming Mouse', 'Mouse', 'HyperX', 2700, 30, 1),
(21, 'SN30 Pro+', 'Controller', '8BitDo', 3500, 50, 1),
(22, 'SN30 Pro SN', 'Controller', '8BitDo', 3250, 45, 1),
(23, 'DualShock 4 Wireless Controller', 'Controller', 'Playstation', 3500, 50, 1),
(24, 'Logitech F310 Gamepad', 'Controller', 'Logitech', 1300, 80, 1),
(25, 'Logitech F710 Wireless Gamepad', 'Controller', 'Logitech', 2500, 90, 1),
(26, 'XBOX Elite Wireless Controller', 'Controller', 'Microsoft', 6000, 50, 1),
(27, 'Switch Pro Controller', 'Controller', 'Nintendo', 3300, 50, 1),
(28, 'Seagate BarraCuda 1TB', 'HDD', 'Seagate', 3750, 40, 1),
(29, 'WD Blue Desktop 1TB', 'HDD', 'Western Digital', 3800, 45, 1),
(30, 'Seagate Firecuda Desktop 2TB', 'HDD', 'Seagate', 6800, 30, 1),
(31, 'Samsung 870 EVO 500GB', 'SSD', 'Samsung', 3300, 100, 1),
(32, 'Crucial BX500 2TB', 'SSD', 'Crucial', 7500, 100, 1),
(33, 'Crucial P3 500GB', 'SSD', 'Crucial', 2000, 25, 1),
(34, 'WD Black SN850X 1TB', 'SSD', 'Western Digital', 6700, 30, 1),
(35, 'Dominator Platinum RGB 32GB DDR4-3200', 'RAM', 'Corsair', 9000, 10, 1),
(36, 'Ripjaws V 16GB DDR4-3600', 'RAM', 'G.SKill', 3500, 25, 1),
(37, 'Trident Z Royal Series 64GB DDR4-3600', 'RAM', 'G.Skill', 12000, 5, 1),
(38, 'Vivobook 15', 'Laptop', 'Asus', 50000, 10, 1),
(39, 'IdeaPad Notebook', 'Laptop', 'Lenovo', 40000, 15, 1),
(40, 'ThinkPad T14s', 'Laptop', 'Lenovo', 95000, 5, 1),
(41, 'DualShock3 Controller', 'Controller', 'Sony', 2300, 1550, 1),
(42, 'DualShock2 Controller', 'Controller', 'Sony', 500, 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_customer` varchar(255) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_qty` int(255) NOT NULL,
  `o_total_price` int(255) NOT NULL,
  `o_status` tinyint(4) NOT NULL DEFAULT 1,
  `o_date` datetime NOT NULL,
  `o_received` datetime DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`o_id`, `o_customer`, `o_name`, `o_qty`, `o_total_price`, `o_status`, `o_date`, `o_received`) VALUES
(1, 'User39', 'Pro Type Ultra', 5, 42500, 1, '2023-05-20 07:32:59', NULL),
(2, 'SmithyWeen', 'OP-720 Optical Mouse', 5, 7500, 2, '2023-05-20 08:09:35', NULL),
(3, 'User39', 'Logitech F310 Gamepad', 2, 2600, 4, '2023-05-20 12:07:50', '2023-05-20 20:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_lname` varchar(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_uname` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_type` tinyint(10) NOT NULL,
  `u_date_joined` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_lname`, `u_fname`, `u_uname`, `u_email`, `u_pass`, `u_type`, `u_date_joined`) VALUES
(10, 'Stewart', 'Josh', 'user39', 'user@email.com', '$2y$10$M5DoaKX3TiVtwp06ovzfrOqV3q.zqK/ERA6S57r.85a3EU07EtRPS', 0, '2023-05-18 10:07:19'),
(11, 'Dela Cruz', 'Juan', 'admin1', 'admin@email.com', '$2y$10$Fk8bVkraFoKIVVapQE8wxeydIFY2tpG7db72k0XPF23OgTYEXvcz.', 1, '2023-05-18 10:13:37'),
(40, 'Venis', 'Val', 'Big Valbowski', 'niceandsimple@example.com', '$2y$10$dgyzHDq/ume.Yrmg4zR8COxuAPrmg.Mx6c1njD4A6MHs7hiOxte8q', 0, '2023-05-18 17:02:41'),
(41, 'Smith', 'Mark', 'SmithyWeen', 'helloworld@email.com', '$2y$10$dG8v.3wEnpyAmyUMtrGlke1RC.YBdw3Rail61hH6Fu0g7BGPEtaly', 0, '2023-05-19 21:01:14'),
(43, 'Bogan', 'Bulk', 'Boellk', 'hulkster420@email.com', '$2y$10$X/Yd8W.XDyIYxSk3S7dHFOF56GDyaXkg1kgeALpsa1uz4SDR0UMV2', 1, '2023-05-21 12:51:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
