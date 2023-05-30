-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 06:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamera`
--

CREATE TABLE `tb_kamera` (
  `id_kamera` int(50) NOT NULL,
  `nama_kamera` varchar(100) NOT NULL,
  `hrg_kamera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kamera`
--

INSERT INTO `tb_kamera` (`id_kamera`, `nama_kamera`, `hrg_kamera`) VALUES
(1, 'CANNON', '500000'),
(2, 'SONI', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laptop`
--

CREATE TABLE `tb_laptop` (
  `id_laptop` int(50) NOT NULL,
  `nama_laptop` varchar(100) NOT NULL,
  `hrg_laptop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_laptop`
--

INSERT INTO `tb_laptop` (`id_laptop`, `nama_laptop`, `hrg_laptop`) VALUES
(1, 'acer', '1000000'),
(2, 'lenovo', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_smartphone`
--

CREATE TABLE `tb_smartphone` (
  `id_smartphone` int(50) NOT NULL,
  `nama_smartphone` varchar(100) NOT NULL,
  `hrg_smartphone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_smartphone`
--

INSERT INTO `tb_smartphone` (`id_smartphone`, `nama_smartphone`, `hrg_smartphone`) VALUES
(1, 'Samsung', '500000'),
(2, 'Xiaomi', '200000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kamera`
--
ALTER TABLE `tb_kamera`
  ADD PRIMARY KEY (`id_kamera`);

--
-- Indexes for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `tb_smartphone`
--
ALTER TABLE `tb_smartphone`
  ADD PRIMARY KEY (`id_smartphone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kamera`
--
ALTER TABLE `tb_kamera`
  MODIFY `id_kamera` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  MODIFY `id_laptop` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_smartphone`
--
ALTER TABLE `tb_smartphone`
  MODIFY `id_smartphone` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
