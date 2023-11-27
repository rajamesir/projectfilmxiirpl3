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

--
-- Table structure for table `sinopsis`
--


--

INSERT INTO `sinopsis` (`id_sinopsis`, `id_barang`, `pembukaan`, `pembukaan_lagi`, `gambar`, `gambar_lagi`, `sinopsis`, `sinopsis_lagi`, `poster`) VALUES
(1, 4, 'Team Fortress 2 adalah game bergenre FPS (First-person shooter) multiplayer, Game ini diciptakan dan dikembangkan oleh Valve Corporation. Kamu dapat memainkan game ini secara online, ', 'Namun kamu harus download game ini terlebih dahulu di Steam. Game ini dapat dijadikan game kompetitif dimana team-team dari luar negeri melawan satu sama lain.', 'mnm.jpeg', 'meetspy.jpeg', 'Team Fortress 2 adalah game bergenre FPS (First-person shooter) multiplayer, Game ini diciptakan dan dikembangkan oleh Valve Corporation. Kamu dapat memainkan game ini secara online, Namun kamu harus download game ini terlebih dahulu di Steam. Game ini dapat dijadikan game kompetitif dimana team-team dari luar negeri melawan satu sama lain.', 'Team Fortress 2 adalah game bergenre FPS (First-person shooter) multiplayer, Game ini diciptakan dan dikembangkan oleh Valve Corporation. Kamu dapat memainkan game ini secara online, Namun kamu harus download game ini terlebih dahulu di Steam. Game ini dapat dijadikan game kompetitif dimana team-team dari luar negeri melawan satu sama lain.', 'tf2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--


-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_barang`, `id_user`, `ulasan`, `rating`) VALUES
('', 16, 3, 'UWAAAAA UWAAAA', '8 Dari 10'),
('', 16, 6, 'You were good, son', '10 Dari 10'),
('', 6, 11, 'Mother of omellete', '9 Dari 10'),
('', 7, 8, 'Sayang sekali uno dah takde', '9 Dari 10'),
('', 6, 13, 'Jetstream Sam', '10 Dari 10'),
('', 6, 8, 'Doktor. Turn off my ad blocker!	\r\nAnd The Doktor said : \"But Raiden. This is madness!!\"', '10 Dari 10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--



INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `photo_user`) VALUES
('', 'rudi', 'udin@gmail.com', '$2y$10$S7zejJbkWbzg/r6V0qDb0.M82Uol5z91K70YKzm045FFM3DLDadem', 'admin', ''),
('', 'popo', 'popo@gmail.com', '$2y$10$cQpPu6nFAgVvxp07Hyt8sO/CM9qCxQeEy6X5Z8ufPv99RP3Jo3mHS', 'user', ''),
('', 'ujang', 'ujang@gmail.com', '$2y$10$mrPcOH3bLQQ7SIEXVLogv.PtxvFFQRGWl9n6LygFxXQwa.viwPX5G', 'user', ''),
('', 'kopi', 'k@gmail.com', '$2y$10$eRxHLDOOPvfsVAe70Hs3bOEgaB.V8X3Dpv9BqaGKfYGsnWAXUtINm', 'admin', ''),
('', 'tutu', 'tit@gmail.com', '$2y$10$t1tN0zWn8WOdCGSpTDSWGunBLbV.7sdjIigVlFwA/hmb/UPj8NDNi', 'user', ''),
('', 'asep', 'asepsunandar@gmail.com', '$2y$10$k2WhuCVjUyZPKZl/hgJZOeY5sODN0E0YD1Il0aFzLb8L7s.Bro6U2', 'user', ''),
('', 'Yazzir', 'a@gmail.com', '$2y$10$xfDUlJCVPWRhn89RF8iL8.xNUh1mcIYfUvDiLM.0rU9gyGHwO4qwq', 'user', ''),
('', 'LOPPO', 'itel@gmail.com', '$2y$10$hPEFO9eZfI6PWENS6VtjhuNG/W/4GM3d.yHJEDCTOR25Ehgk1Dc5y', 'user', ''),
('', 'DJ', 'd@gmail.com', '$2y$10$0hjW1cCRDjcOjeIWSi0a5e89lbXiDPSGhgrMfAt9Mg59Tjh62idxG', 'user', 'djmm.jpg'),
('', 'lalahati', 'lalamove@gmail.com', '$2y$10$nNsD1kFsKG1IkOv0mcrcAuIZFb40dZZ19RO665y8grAlWyqwVm7c6', 'user', 'download (1).jpeg'),
('', 'brodi', 'b@gmail.com', '$2y$10$7rfBvkSXzHYCfZAy.4OwM.lBvgCiff6lY6SzJan/lXKeoQ/Hp2RSG', 'user', 'OIP.jpg'),
('', 'tutu', 'tit@gmail.com', '$2y$10$gGsi5Sb1HUvHrlzWFjsFieVCcUJApoRXUoX.o89Lsk/x6lM6KX9Gu', 'user', 'es.jpg'),
('', 'Drill', 'w@gmail.com', '$2y$10$wTnACQVJoCGlBFk9vknuyuEo4iDjgq5N4kEsyLkPqde6AC9Bwya0a', 'user', 'es.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
--
-- Indexes for table `user`
--