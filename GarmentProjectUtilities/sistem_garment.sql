-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 03:50 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_garment`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataitem`
--

CREATE TABLE `dataitem` (
  `id` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `types` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataitem`
--

INSERT INTO `dataitem` (`id`, `itemname`, `price`, `types`, `stock`) VALUES
(62, 'PDL', 150000, 'Pcs', 10000),
(63, 'PDH', 95000, 'Pcs', 9000),
(64, 'Kemeja Putih', 55000, 'Pcs', 5000),
(65, 'Rok Hitam ', 55000, 'Pcs', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `image`, `description`) VALUES
(1, '../img/android_honeycomb-wallpaper-1366x768.jpg', 'Test1'),
(2, '../img/4_elements-wallpaper-1366x768.jpg', 'asdasdsadasdasdasd'),
(3, '../img/30_seconds_to_mars_2-wallpaper-1366x768.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, '../img/apple_keyboard-wallpaper-1366x768.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, '../img/blurry_blue_background-wallpaper-1366x768.jpg', 'asdasdasd'),
(6, '../img/10_dollars_macro-wallpaper-1366x768.jpg', 'asdsadsddddddd'),
(7, '../img/3d_colorful_cubes-wallpaper-1366x768.jpg', ''),
(8, '../img/black-abstract_wallpaper-s1920x1200.jpg', 'www'),
(9, '../img/1200w_digital_mixer-wallpaper-1366x768.jpg', 'asdasdasdsdasd'),
(10, '../img/blurred_sunset-wallpaper-1366x768.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, '../img/IOS 5.jpg', 'y78y77y7y'),
(12, '../img/3d_colorful_cubes-wallpaper-1366x768.jpg', 'SDSDFDFS');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phonenumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `email`, `firstname`, `lastname`, `username`, `password`, `gender`, `address`, `phonenumber`) VALUES
(1, 'chindyAm@gmail.com', 'Chindy', 'Amalia', 'chindyam', '21232f297a57a5a743894a0e4a801fc3', 'perempuan', 'bandung', 32526326);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataitem`
--
ALTER TABLE `dataitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataitem`
--
ALTER TABLE `dataitem`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
