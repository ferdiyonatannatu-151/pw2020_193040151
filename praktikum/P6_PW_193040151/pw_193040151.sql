-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 09:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040151`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(10) NOT NULL,
  `gambar` varchar(126) NOT NULL,
  `nama_barang` char(64) NOT NULL,
  `fungsi` char(250) NOT NULL,
  `tahun_produksi` int(64) NOT NULL,
  `harga_baru` varchar(64) NOT NULL,
  `harga_sekon` varchar(64) NOT NULL,
  `garansi` varchar(64) NOT NULL,
  `pusat` char(64) NOT NULL,
  `merek` char(64) NOT NULL,
  `berat_barang` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `gambar`, `nama_barang`, `fungsi`, `tahun_produksi`, `harga_baru`, `harga_sekon`, `garansi`, `pusat`, `merek`, `berat_barang`) VALUES
(1, '1.jpg', 'Handphone', 'Sebagai alat komunikasi', 2019, 'Rp.12.500.000,00-', 'Rp.9.500.000,00-', '1 tahun', 'jawa barat', 'Apple', '177 gram'),
(2, '2.jpg', 'Mouse', 'sebagai penggerak pointer untuk menentukan kursor', 2018, 'Rp.600.000,00-', 'Rp.450.000,00-', '1 tahun', 'jawa barat', 'Razer', '350 gram'),
(9, '3.jpg', 'Laptop', 'untuk memudahkan dalam pekerjaan manusia', 2019, 'Rp.59.000.000,00-', 'Rp.58.000.000,00-', '1 tahun', 'Amerika', 'Razer', '2,1 kg'),
(10, '4.jpg', 'Headphone', 'untuk mendengarkan suara', 2019, 'Rp.2.500.000,00-', 'Rp,2.000.000,00-', '1 tahun', 'Amerika', 'Razer', '550 gram'),
(11, '5.jpg', 'Keyboard', 'sebagai invut device', 2019, 'Rp.5.000.000,00-', 'Rp.4.000.000,00-', '1 tahun', 'Amerika', 'Razer', '1 kg '),
(12, '6.jpg', 'Monitor', 'untuk menampilkan video dan informasi grafis yang dihasilkan dari komputer melalui alat yang disebut kartu grafis ( VGA Card ).', 2019, 'Rp.20.000.000,00-', 'Rp.19.000.000,00-', '1 tahun', 'Amerika', 'Razer', '2,1 kg'),
(13, '7.jpg', 'Speaker', 'sebagai alat untuk mengubah gelombang listrik yang mulanya dari perangkat penguat audio/suara menjadi gelombang getaran yaitu berupa suara itu sendiri', 2019, 'Rp.3.500.000,00-', 'Rp.3.000.000,00-', '1 tahun', 'Bandung', 'JBL', '750 gram'),
(14, '8.jpg', 'CCTV', 'untuk membantu keamanan', 2019, 'Rp.120.000.000,00-', 'Rp.19.000.000,00-', '1 tahun', 'China', 'Sony', '500 gram'),
(16, '8.jpg', 'CCTV', 'untuk membantu keamanan', 2019, 'Rp.120.000.000,00-', 'Rp.119.000.000,00-', '1 tahun', 'China', 'Sony', '500 gram'),
(17, '9.jpg', 'Drone', 'untuk mendukung pekerjaan', 2019, 'Rp.120.000.000,00-', 'Rp.115.000.000,00-', '1 tahun', 'Amerika', 'DJI Mavic Pro combo', '3 kg'),
(18, '10.jpg', 'alat ukur', 'untuk mengukur', 2019, 'Rp.800.000,00-', 'Rp.400.000,00-', '6 bulan', 'Jepang', 'FG', '550 gram');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$OfZxPCigmrhz3lAet8o7sOC/gyrn3xea1kG3s5BpAfpmYyyU9Vfx.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
