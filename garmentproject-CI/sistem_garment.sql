-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Sep 2018 pada 13.13
-- Versi Server: 10.1.28-MariaDB
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
-- Struktur dari tabel `dataitem`
--

CREATE TABLE `dataitem` (
  `id` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `types` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataitem`
--

INSERT INTO `dataitem` (`id`, `itemname`, `price`, `types`, `stock`, `images`) VALUES
(73, 'Baju Polo', 80000, 'Pcs', 3, 'polo-shirt.jpg'),
(74, 'Chino', 175000, 'Pcs', 10, 'celana-chino.jpg'),
(75, 'Kaos Polos', 55000, 'Pack', 5, 'T-shir.png'),
(76, 'Daster Kece', 75000, 'Pcs', 10, 'daster.jpg'),
(77, 'Ripped Jeans', 190000, 'Pcs', 30, 'ripped-skinny.jpg'),
(79, 'Bomber Jacket', 230000, 'Pcs', 8, 'bomber-jacket.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `id_barang` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `total_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `id_barang`, `price`, `itemname`, `qty`, `total_price`) VALUES
(20, 77, 190000, 'Ripped Jeans', 1, 190000),
(20, 75, 55000, 'Kaos Polos', 1, 55000),
(22, 77, 190000, 'Ripped Jeans', 1, 190000),
(22, 79, 230000, 'Bomber Jacket', 2, 460000),
(23, 73, 80000, 'Baju Polo', 1, 80000),
(23, 79, 230000, 'Bomber Jacket', 3, 690000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gambar`
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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `customer`, `address`, `message`, `city`, `state`, `zipcode`) VALUES
(1, 22, 'Sukabirus, Bandung', 'Warna Hitam', 'Bandung', 'Indonesia', '75119'),
(2, 23, 'PBB, Bandung', 'Dipacking yang rapi', 'Samarinda', 'Indonesia', '75119');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `tanggallahir` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phonenumber` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userdata`
--

INSERT INTO `userdata` (`id`, `email`, `firstname`, `lastname`, `tanggallahir`, `username`, `password`, `address`, `phonenumber`, `images`) VALUES
(21, 'chindyamalia@gmail.com', 'Chindy', 'Amalia', 'Bandung, 8 Agustus 2018', 'chindyAm', '21232f297a57a5a743894a0e4a801fc3', 'Sukapura, Bandung', '081243534645', 'gambar-orang.jpg'),
(22, 'galihrahagi@gmail.com', 'Galih', 'Rahagi', '7 April 1998', 'galihrhg', '0bef1939b3c02eea4b89f1a8247419cf', 'Sukabirus', '08352634747', 'gambar-orang.jpg'),
(23, 'fauzanrahman@gmail.com', 'Fauzan', 'Rahman', 'Samarinda, 2 Februari 1998', 'fauzanrhman', '2fc4bfee344471c68b724856b9b6f13d', 'PBB, Bandung', '0853259636', 'gambar-orang.jpg');

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
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
