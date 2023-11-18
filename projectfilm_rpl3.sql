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

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `qty` date NOT NULL,
  `harga` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinopsis`
--

CREATE TABLE `sinopsis` (
  `id_sinopsis` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `pembukaan` text NOT NULL,
  `pembukaan_lagi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar_lagi` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `sinopsis_lagi` text NOT NULL,
  `poster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_barang`, `id_user`, `ulasan`, `rating`) VALUES
(1000000001, 6, 6, 'OOOMAMAMAMAAGAGAGAGAGGAGA', '10 Dari 10'),
(1000000002, 4, 7, 'Menurut saya SAKUCI itu akfjnlkasflal.ivaliv bvhnadibn;ajd;b ad.ibhloiadjb;a dbida;boahn dinbipadnipb.', '8 Dari 10'),
(1000000003, 7, 8, 'Apel adalah buah kegemaran saye sejak saye kecik lagi', '10 Dari 10'),
(1000000009, 12, 3, 'kemane ejen rizwan selepas ni? Apekah beliau akan muncul l;agi?', '9 Dari 10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `photo_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `photo_user`) VALUES
(1, 'rudi', 'udin@gmail.com', '$2y$10$S7zejJbkWbzg/r6V0qDb0.M82Uol5z91K70YKzm045FFM3DLDadem', 'admin', ''),
(2, 'popo', 'popo@gmail.com', '$2y$10$cQpPu6nFAgVvxp07Hyt8sO/CM9qCxQeEy6X5Z8ufPv99RP3Jo3mHS', 'user', ''),
(3, 'ujang', 'ujang@gmail.com', '$2y$10$mrPcOH3bLQQ7SIEXVLogv.PtxvFFQRGWl9n6LygFxXQwa.viwPX5G', 'user', ''),
(4, 'kopi', 'k@gmail.com', '$2y$10$eRxHLDOOPvfsVAe70Hs3bOEgaB.V8X3Dpv9BqaGKfYGsnWAXUtINm', 'admin', ''),
(5, 'tutu', 'tit@gmail.com', '$2y$10$t1tN0zWn8WOdCGSpTDSWGunBLbV.7sdjIigVlFwA/hmb/UPj8NDNi', 'user', ''),
(6, 'asep', 'asepsunandar@gmail.com', '$2y$10$k2WhuCVjUyZPKZl/hgJZOeY5sODN0E0YD1Il0aFzLb8L7s.Bro6U2', 'user', ''),
(7, 'Yazzir', 'a@gmail.com', '$2y$10$xfDUlJCVPWRhn89RF8iL8.xNUh1mcIYfUvDiLM.0rU9gyGHwO4qwq', 'user', ''),
(8, 'LOPPO', 'itel@gmail.com', '$2y$10$hPEFO9eZfI6PWENS6VtjhuNG/W/4GM3d.yHJEDCTOR25Ehgk1Dc5y', 'user', ''),
(9, 'DJ', 'd@gmail.com', '$2y$10$0hjW1cCRDjcOjeIWSi0a5e89lbXiDPSGhgrMfAt9Mg59Tjh62idxG', 'user', 'djmm.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

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
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD UNIQUE KEY `id_barang` (`id_barang`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sinopsis`
--
ALTER TABLE `sinopsis`
  MODIFY `id_sinopsis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000010;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ulasan` (`id_barang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sinopsis`
--
ALTER TABLE `sinopsis`
  ADD CONSTRAINT `sinopsis_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
