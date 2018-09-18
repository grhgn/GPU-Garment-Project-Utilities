-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 03:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro_datatracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataitem`
--

CREATE TABLE IF NOT EXISTS `dataitem` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `types` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `dataitem`
--

INSERT INTO `dataitem` (`id`, `itemname`, `price`, `types`, `stock`) VALUES
(2, 'Badge Sekolah', 5000, 'Pcs', 50),
(3, 'Beng Beng', 1000, 'Pcs', 0),
(4, 'Better', 500, 'Pcs', 35),
(5, 'Big Royal Stroberri', 0, 'Pcs', 9),
(6, 'Buku MAXI 50', 0, 'Pcs', 2),
(7, 'Buku tulis kecil 38', 0, 'Pcs', 10),
(8, 'Chaca', 500, 'Pcs', 0),
(9, 'Chewez', 0, 'Pcs', 25),
(10, 'Choky-Choky Pasta 2 Rasa', 500, 'Pcs', 23),
(11, 'choky pasta chococastle', 500, 'Pcs', 0),
(12, 'Container Hot Hot Pop', 0, 'Pcs', 0),
(13, 'Domostic Jagung Bakar', 0, 'Pcs', 20),
(14, 'Domostic Jagung Coklat', 0, 'Pcs', 20),
(15, 'Gerry Chocolatos', 500, 'Pcs', 17),
(17, 'Hello Panda Strawberry', 1000, 'Pcs', 0),
(19, 'Kacang', 0, 'Pcs', 0),
(20, 'Kacang Garuda Semi', 500, 'Pcs', 20),
(21, 'Kacang Telor', 500, 'Pcs', 16),
(22, 'Kertas Buffalo', 0, 'Pcs', 90),
(23, 'Kertas Folio', 0, 'Pcs', 0),
(24, 'Kertas HVS A4', 0, 'Pcs', 2500),
(25, 'Kertas HVS F4', 0, 'Pcs', 2492),
(26, 'Kiss Cherry', 0, 'Pcs', 0),
(27, 'Lokasi sekolah', 0, 'Pcs', 222),
(28, 'Mie Kremez', 500, 'Pcs', 27),
(29, 'Milkita Reffilolipop', 500, 'Pcs', 50),
(30, 'Milkuat Bantal', 1000, 'Pcs', 53),
(31, 'Momogi Stick Coklat', 500, 'Pcs', 8),
(32, 'Okky Drink Blackcurrant', 1000, 'Pcs', 0),
(33, 'Penggaris LJK', 0, 'Pcs', 25),
(34, 'Penghapus Faber-Castell', 0, 'Pcs', 25),
(35, 'Penghapus Joyko', 0, 'Pcs', 34),
(36, 'Pensil Staedler 2B', 0, 'Pcs', 2),
(37, 'Pillows Ubi', 0, 'Pcs', 15),
(38, 'Plastik Mika', 0, 'Pcs', 94),
(39, 'Polong Mas', 0, 'Pcs', 50),
(40, 'Pucuk Harum Yasmin', 3500, 'Pcs', 12),
(41, 'Rautan Pensil', 0, 'Pcs', 10),
(42, 'Richeese Nabati', 500, 'Pcs', 14),
(43, 'Relaxa Barleymint', 0, 'Pcs', 50),
(44, 'Richeese Ahh', 500, 'Pcs', 18),
(45, 'Sampul Coklat', 0, 'Pcs', 7),
(46, 'Selotip ', 0, 'Pcs', 4),
(47, 'Snack Chuba Balado', 500, 'Pcs', 20),
(48, 'Superstar Coklat', 500, 'Pcs', 7),
(49, 'Susu Ultra', 3500, 'Pcs', 11),
(50, 'Taro', 1000, 'Pcs', 29),
(51, 'Teh Gelas', 1000, 'Pcs', 0),
(52, 'TicTac Sapi Panggang', 500, 'Pcs', 20),
(53, 'Tissue', 0, 'Pak', 7),
(54, 'Top Coklat', 500, 'Pcs', 8),
(55, 'Type-X', 0, 'Pcs', 12),
(56, 'Wafer Tango Vanila', 500, 'Pcs', 20),
(57, 'Yakult', 0, 'Pcs', 10),
(58, 'yuppi berrybonz', 500, 'Pcs', 7),
(60, 'Amanplast', 500, 'Pcs', 50),
(61, 'TAKOYAKI', 28000, 'pcs', 45);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE IF NOT EXISTS `tb_gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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

CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phonenumber` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `email`, `firstname`, `lastname`, `username`, `password`, `gender`, `address`, `phonenumber`) VALUES
(7, 'farhan.zakki@gmail.com', 'Farhan', 'Muzakki', 'ZakkiFarhan', '21232f297a57a5a743894a0e4a801fc3', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
