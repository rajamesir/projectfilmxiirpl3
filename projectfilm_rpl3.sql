-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 04:45 PM
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
  `nama_barang` varchar(100) NOT NULL,
  `qty` date NOT NULL,
  `harga` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_barang`, `qty`, `harga`, `photo`) VALUES
(3, 'Ejen Ali The Movie, Misi : NEO', '2019-02-13', 'Lihat Sinopsis', 'aq.jpg'),
(4, 'Team Fortress 2', '2007-07-07', 'Lihat Sinopsis', 'tf2.jpeg'),
(5, 'Metal Gear Rising : Revengeance', '2013-02-14', 'Lihat Sinopsis', 'mgrr.jpg');

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

--
-- Dumping data for table `sinopsis`
--

INSERT INTO `sinopsis` (`id_sinopsis`, `id_barang`, `pembukaan`, `pembukaan_lagi`, `gambar`, `gambar_lagi`, `sinopsis`, `sinopsis_lagi`, `poster`) VALUES
(1, 4, 'Team Fortress 2 adalah game bergenre FPS (First-person shooter) multiplayer, Game ini diciptakan dan dikembangkan oleh Valve Corporation. Kamu dapat memainkan game ini secara online, ', 'Namun kamu harus download game ini terlebih dahulu di Steam. Game ini dapat dijadikan game kompetitif dimana team-team dari luar negeri melawan satu sama lain.', 'mnm.jpeg', 'meetspy.jpeg', 'Team Fortress 2 adalah game bergenre FPS (First-person shooter) multiplayer, Game ini diciptakan dan dikembangkan oleh Valve Corporation. Kamu dapat memainkan game ini secara online, Namun kamu harus download game ini terlebih dahulu di Steam. Game ini dapat dijadikan game kompetitif dimana team-team dari luar negeri melawan satu sama lain.', 'Team Fortress 2 adalah game bergenre FPS (First-person shooter) multiplayer, Game ini diciptakan dan dikembangkan oleh Valve Corporation. Kamu dapat memainkan game ini secara online, Namun kamu harus download game ini terlebih dahulu di Steam. Game ini dapat dijadikan game kompetitif dimana team-team dari luar negeri melawan satu sama lain.', 'tf2.jpeg');

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
(1000000014, 4, 3, 'UWAAAAA UWAAAA', '8 Dari 10'),
(1000000016, 4, 6, 'You were good, son', '10 Dari 10'),
(1000000017, 5, 11, 'Mother of omellete', '9 Dari 10'),
(1000000018, 3, 8, 'Sayang sekali uno dah takde', '9 Dari 10'),
(1000000019, 5, 13, 'Jetstream Sam', '10 Dari 10'),
(1000000036, 5, 8, 'Doktor. Turn off my ad blocker!	\r\nAnd The Doktor said : \"But Raiden. This is madness!!\"', '10 Dari 10');

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
(9, 'DJ', 'd@gmail.com', '$2y$10$0hjW1cCRDjcOjeIWSi0a5e89lbXiDPSGhgrMfAt9Mg59Tjh62idxG', 'user', 'djmm.jpg'),
(10, 'lalahati', 'lalamove@gmail.com', '$2y$10$nNsD1kFsKG1IkOv0mcrcAuIZFb40dZZ19RO665y8grAlWyqwVm7c6', 'user', 'download (1).jpeg'),
(11, 'brodi', 'b@gmail.com', '$2y$10$7rfBvkSXzHYCfZAy.4OwM.lBvgCiff6lY6SzJan/lXKeoQ/Hp2RSG', 'user', 'OIP.jpg'),
(12, 'tutu', 'tit@gmail.com', '$2y$10$gGsi5Sb1HUvHrlzWFjsFieVCcUJApoRXUoX.o89Lsk/x6lM6KX9Gu', 'user', 'es.jpg'),
(13, 'Drill', 'w@gmail.com', '$2y$10$wTnACQVJoCGlBFk9vknuyuEo4iDjgq5N4kEsyLkPqde6AC9Bwya0a', 'user', 'es.jpg');

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
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `id_barang` (`id_barang`) USING BTREE,
  ADD KEY `id_barang_3` (`id_barang`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_user_3` (`id_user`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sinopsis`
--
ALTER TABLE `sinopsis`
  MODIFY `id_sinopsis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000037;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sinopsis`
--
ALTER TABLE `sinopsis`
  ADD CONSTRAINT `sinopsis_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_ibfk_4` FOREIGN KEY (`id_barang`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
