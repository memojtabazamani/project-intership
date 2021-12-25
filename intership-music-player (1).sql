-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 08:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intership-music-player`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_musics`
--

CREATE TABLE `tbl_musics` (
  `musics_id` int(11) NOT NULL,
  `musics_title` varchar(191) COLLATE utf8_bin DEFAULT NULL,
  `musics_genre` varchar(191) COLLATE utf8_bin DEFAULT NULL,
  `musics_address` varchar(191) COLLATE utf8_bin DEFAULT NULL,
  `musics_image` varchar(191) COLLATE utf8_bin DEFAULT NULL,
  `musics_signer` varchar(191) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_id` int(191) NOT NULL COMMENT 'آیدی',
  `users_username` varchar(191) COLLATE utf8_bin DEFAULT NULL COMMENT 'نام کاربری',
  `users_password` varchar(191) COLLATE utf8_bin DEFAULT NULL COMMENT 'رمز عبور',
  `users_firstname` varchar(191) COLLATE utf8_bin DEFAULT NULL COMMENT 'نام کوچک',
  `users_lastname` varchar(191) COLLATE utf8_bin DEFAULT NULL COMMENT 'نام خانوادگی',
  `users_type` int(11) DEFAULT 0 COMMENT 'بخش کاری مدیر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_musics`
--
ALTER TABLE `tbl_musics`
  ADD PRIMARY KEY (`musics_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_musics`
--
ALTER TABLE `tbl_musics`
  MODIFY `musics_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(191) NOT NULL AUTO_INCREMENT COMMENT 'آیدی', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
