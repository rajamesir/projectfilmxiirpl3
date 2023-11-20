-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 11:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectfilm_rpl3`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinopsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_barang`, `id_user`, `ulasan`, `rating`) VALUES
(1900000001, 6, 6, 'OOOMAMAMAMAAGAGAGAGAGGAGA', '10 Dari 10'),
(1900000002, 4, 7, 'Menurut saya SAKUCI itu akfjnlkasflal.ivaliv bvhnadibn;ajd;b ad.ibhloiadjb;a dbida;boahn dinbipadnipb.', '8 Dari 10'),
(1900000003, 7, 8, 'Apel adalah buah kegemaran saye sejak saye kecik lagi', '10 Dari 10'),
(1900000009, 12, 3, 'kemane ejen rizwan selepas ni? Apekah beliau akan muncul l;agi?', '9 Dari 10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `photo_user`) VALUES
(15, 'rudi', 'udin@gmail.com', '$2y$10$S7zejJbkWbzg/r6V0qDb0.M82Uol5z91K70YKzm045FFM3DLDadem', 'admin', ''),
(16, 'popo', 'popo@gmail.com', '$2y$10$cQpPu6nFAgVvxp07Hyt8sO/CM9qCxQeEy6X5Z8ufPv99RP3Jo3mHS', 'user', ''),
(17, 'ujang', 'ujang@gmail.com', '$2y$10$mrPcOH3bLQQ7SIEXVLogv.PtxvFFQRGWl9n6LygFxXQwa.viwPX5G', 'user', ''),
(18, 'kopi', 'k@gmail.com', '$2y$10$eRxHLDOOPvfsVAe70Hs3bOEgaB.V8X3Dpv9BqaGKfYGsnWAXUtINm', 'admin', ''),
(19, 'tutu', 'tit@gmail.com', '$2y$10$t1tN0zWn8WOdCGSpTDSWGunBLbV.7sdjIigVlFwA/hmb/UPj8NDNi', 'user', ''),
(20, 'asep', 'asepsunandar@gmail.com', '$2y$10$k2WhuCVjUyZPKZl/hgJZOeY5sODN0E0YD1Il0aFzLb8L7s.Bro6U2', 'user', ''),
(21, 'Yazzir', 'a@gmail.com', '$2y$10$xfDUlJCVPWRhn89RF8iL8.xNUh1mcIYfUvDiLM.0rU9gyGHwO4qwq', 'user', ''),
(22, 'LOPPO', 'itel@gmail.com', '$2y$10$hPEFO9eZfI6PWENS6VtjhuNG/W/4GM3d.yHJEDCTOR25Ehgk1Dc5y', 'user', ''),
(23, 'DJ', 'd@gmail.com', '$2y$10$0hjW1cCRDjcOjeIWSi0a5e89lbXiDPSGhgrMfAt9Mg59Tjh62idxG', 'user', 'djmm.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--

--
-- Indexes for table `sinopsis`
--
ALTER TABLE `sinopsis`
  ADD PRIMARY KEY (`id_sinopsis`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_barang_2` (`id_barang`);

--
-- Indexes for table `ulasan`
--

--
-- Indexes for table `user`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--

--
-- AUTO_INCREMENT for table `sinopsis`
--
ALTER TABLE `sinopsis`
  MODIFY `id_sinopsis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ulasan`
--

--
-- Constraints for table `sinopsis`
--
ALTER TABLE `sinopsis`
  ADD CONSTRAINT `sinopsis_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
