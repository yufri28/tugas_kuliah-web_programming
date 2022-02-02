-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 04:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'web_programming', '$2y$10$nWAG9FYizUCMFvLwQq.6o./4Le9tUFChOxSdK9OqZb2oFZpGZ4WLG');

-- --------------------------------------------------------

--
-- Table structure for table `images_work`
--

CREATE TABLE `images_work` (
  `id_gmbr` int(11) NOT NULL,
  `nama_gambar` varchar(300) NOT NULL,
  `file_gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images_work`
--

INSERT INTO `images_work` (`id_gmbr`, `nama_gambar`, `file_gambar`) VALUES
(1, 'gambar1', 'galery2.jpg'),
(2, 'gambar2', 'galery3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `myteam`
--

CREATE TABLE `myteam` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Skill` varchar(40) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myteam`
--

INSERT INTO `myteam` (`id`, `nama`, `Skill`, `foto`) VALUES
(1, 'Andi Aulia Rahman', 'JavaScrip dan Php', 'andi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_work`
--
ALTER TABLE `images_work`
  ADD PRIMARY KEY (`id_gmbr`);

--
-- Indexes for table `myteam`
--
ALTER TABLE `myteam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images_work`
--
ALTER TABLE `images_work`
  MODIFY `id_gmbr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myteam`
--
ALTER TABLE `myteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
