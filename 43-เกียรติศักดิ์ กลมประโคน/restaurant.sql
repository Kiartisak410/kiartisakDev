-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 07:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_ID` varchar(5) NOT NULL COMMENT 'รหัสเมนูอาหาร',
  `menu_Name` varchar(50) NOT NULL COMMENT 'ขื่อเมนูอาหาร',
  `menu_Type` int(2) NOT NULL COMMENT 'ประเภทเมนูอาหาร',
  `menu_price` int(4) DEFAULT NULL COMMENT 'ราคาอาหาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_ID`, `menu_Name`, `menu_Type`, `menu_price`) VALUES
('m0001', 'ข้าวผัดอเมริกัน', 1, 70),
('m0002', 'ไอศกรีม', 2, 50),
('m0003', 'ข้าวผัดปู', 1, 80),
('m0004', 'ผัดมักกะโรนีกุ้ง', 1, 100),
('m0005', 'ปอเปี๊ยะสด', 3, 60),
('m0007', 'ขนมกล้วย', 2, 30),
('m0008', 'แกงจืด', 1, 60),
('m0011', 'ไข่เจียว', 1, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
