-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 04:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_disparta`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_akw`
--

CREATE TABLE `kategori_akw` (
  `id` int(11) NOT NULL,
  `kategori_akw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_akw`
--

INSERT INTO `kategori_akw` (`id`, `kategori_akw`) VALUES
(1, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tkw`
--

CREATE TABLE `kategori_tkw` (
  `id` int(11) NOT NULL,
  `kategori_tkw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_tkw`
--

INSERT INTO `kategori_tkw` (`id`, `kategori_tkw`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kunjungan`
--

CREATE TABLE `laporan_kunjungan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori_akw` int(11) NOT NULL,
  `negara` int(11) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1610337897),
('m130524_201442_init', 1610594837),
('m190124_110200_add_verification_token_column_to_user_table', 1610594837);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id` int(11) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kawasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `negara`, `kawasan`) VALUES
(1, 'Malaysia', 'Asia'),
(2, 'Inggris', 'Eropa');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `provinsi`) VALUES
(1, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'hlR-WCg2k4HJw1MBqMElFnrXJkDlfQkK', '$2y$13$OuTRMM0SAcXfTg/RssHGLOASrjQtiCtuI/3AuteuW6Gk8uSYJMxjC', NULL, 'Ade.cand.jr@gmail.com', 10, 1610594962, 1610594962, 'fDlW37RfM65VMqdSrLRW6Y_7X032J2GE_1610594962'),
(2, 'ade', 'w3tI7dFjddKRfnNXxC_yP7FjD2pJ8AYk', '$2y$13$qwqysFKNSk.4w7Jgq1JsYu51T0KpP1vOxWY8o19WWlLH6kw3vfxKu', NULL, 'adecandram51661@gmail.com', 9, 1610595435, 1610595435, '_IBez9BL1WNsp8L0KP5rzL0nyuPN9M8t_1610595435');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_dtw` varchar(50) NOT NULL,
  `kategori_tkw` int(11) NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accesToken` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_dtw`, `kategori_tkw`, `authKey`, `accesToken`, `role`) VALUES
(2, 'ade', '123456', 'Jatim Park 1', 1, 'toko123', '1234ghjk', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_akw`
--
ALTER TABLE `kategori_akw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_tkw`
--
ALTER TABLE `kategori_tkw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_kunjungan`
--
ALTER TABLE `laporan_kunjungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_akw` (`kategori_akw`),
  ADD KEY `negara` (`negara`,`provinsi`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_tkw` (`kategori_tkw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_akw`
--
ALTER TABLE `kategori_akw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_tkw`
--
ALTER TABLE `kategori_tkw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan_kunjungan`
--
ALTER TABLE `laporan_kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_kunjungan`
--
ALTER TABLE `laporan_kunjungan`
  ADD CONSTRAINT `laporan_kunjungan_ibfk_1` FOREIGN KEY (`kategori_akw`) REFERENCES `kategori_akw` (`id`),
  ADD CONSTRAINT `laporan_kunjungan_ibfk_2` FOREIGN KEY (`negara`) REFERENCES `negara` (`id`),
  ADD CONSTRAINT `laporan_kunjungan_ibfk_3` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id`),
  ADD CONSTRAINT `laporan_kunjungan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`kategori_tkw`) REFERENCES `kategori_tkw` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
