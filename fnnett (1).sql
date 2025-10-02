-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2025 at 04:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fnnett`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `kecepatan` varchar(50) NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `kecepatan`, `harga`, `kota`, `created_at`) VALUES
(1, 'Paket hemat 2 minggu', '25mbps', 165000.00, 'solo', '2025-09-25 00:42:18'),
(4, 'Paket hemat 3 bulan', 'sauhcdscgtysa', 100000.00, 'yogyakarta', '2025-09-25 01:08:43'),
(6, 'ldjkdhab', 'wlqidjwoqif', 219938792.00, 'semarang', '2025-09-26 02:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(15) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `id_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_telp`, `layanan`, `id_layanan`) VALUES
(5, 'namanya', 'Siapa yang tau', 998377464, '165rb 25mbps', 0),
(6, 'Araya Griseldis', 'dirumah', 812345667, '590k 100mbps', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemasangan`
--

CREATE TABLE `pemasangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `harga` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `note` text DEFAULT NULL,
  `tipe` enum('bca','bri','mandiri','bni','dana','bsi') NOT NULL,
  `jumlah` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','gagal','berhasil') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama`, `rekening`, `note`, `tipe`, `jumlah`, `created_at`, `status`) VALUES
(1, 'Asep', '08573920144', 'Pembayaran disetujui oleh admin.', 'bri', 1850000.00, '2025-09-17 12:08:32', 'berhasil'),
(2, 'Cecep', '087380983', 'Pembayaran disetujui oleh admin.', 'dana', 400000.00, '2025-09-17 13:00:11', 'berhasil'),
(3, 'Asep Surasep', '0982838944', 'Pembayaran disetujui oleh admin.', 'mandiri', 1200000.00, '2025-09-17 13:02:20', 'berhasil'),
(4, 'namanya', '340982698374644', 'Pembayaran disetujui oleh admin.', 'dana', 3000000.00, '2025-09-18 00:40:24', 'berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` enum('admin','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `role`) VALUES
(1, 'Asep', 'Asep Surasep', '73076eafece9bec5c3bd4a63fc9cdd6a', 'admin'),
(2, 'Cecep', 'Cecep Acep', '1103b97f18028cd88c672f8c4deb8a61', 'pengguna'),
(3, 'Admin', 'Araya griseldis', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(4, 'pengguna', 'Sakha Abimanyu', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemasangan`
--
ALTER TABLE `pemasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemasangan`
--
ALTER TABLE `pemasangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
