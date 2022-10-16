-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 02:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jumlah`, `harga`, `tanggal`) VALUES
(1, 'Pulpen', 50, 5000, '2022-10-04'),
(2, 'Tipex', 3, 8000, '2022-10-07'),
(3, 'Penggaris', 10, 10000, '2022-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `jenisplant`
--

CREATE TABLE `jenisplant` (
  `jenis` varchar(255) NOT NULL,
  `banyak_tanaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisplant`
--

INSERT INTO `jenisplant` (`jenis`, `banyak_tanaman`) VALUES
('Tanaman Hias', 0),
('Tanaman Obat', 1),
('Tanaman Hidroponik', 2),
('Tanaman Buah', 2),
('Tanaman Sayur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `namapengguna` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `namapengguna`, `email`, `pekerjaan`, `telepon`, `gambar`) VALUES
(1, 'Rahma Fairuz Rania ', 'rahmarahma@apps.ipb.ac.id', 'Data Scientist', '081214603038', '634bc9cadc8a7.jpg'),
(15, 'Rahma', 'rahma@gmail.com', 'Accountant', '9129013830', '634bc9e4f1308.png');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `namailmiah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id`, `nama`, `jenis`, `namailmiah`) VALUES
(65, 'Daun Mint', 'Tanaman Obat', 'Spearmint(Mentha spicata)'),
(66, 'Selada', 'Tanaman Hidroponik', 'Lactuca sativa L'),
(67, 'Pakcoy', 'Tanaman Hidroponik', 'Brassica rapa subsp. Chinensis'),
(68, 'Ceri', 'Tanaman Buah', 'Prunus subg. Cerasus'),
(69, 'Rambutan', 'Tanaman Buah', 'Nephelium jappaceum'),
(70, 'Cabe Rawit', 'Tanaman Sayur', 'Capsicum frutescens '),
(80, 'Tanaman Kaktus Belimbing Own Root', 'Tanaman Hias', 'Noto cactus'),
(81, ' Tanaman Samber Lilin', 'Tanaman Hias', 'Strobilanthes dyerianus'),
(82, ' Tanaman Samber Lilin', 'Tanaman Hias', 'Noto cactus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
