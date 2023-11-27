-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2023 at 02:27 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `kode_ayam` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_ayam` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga_beli` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga_jual` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_ayam`, `jenis_ayam`, `harga_beli`, `harga_jual`, `jumlah`, `satuan`) VALUES
(7, 'AYM846559', 'Bangkok Clasic', '130000', '200000', 355, '3 Minggu'),
(8, 'AYM846560', 'Bangkok Clasic', '450000', '500000', 555, '3 Bulan'),
(9, 'AYM846561', 'Bangkok Clasic', '700000', '800000', 455, '6 Bulan'),
(10, 'AYM846568', 'Pakhoy', '350000', '400000', 421, '3 Minggu'),
(11, 'AYM846569', 'Pakhoy', '500000', '600000', 521, '3 Bulan'),
(12, 'AYM846570', 'Pakhoy', '1000000', '1200000', 421, '6 Bulan'),
(13, 'AYM846577', 'Samo', '350000', '400000', 504, '3 Minggu'),
(14, 'AYM846578', 'Samo', '500000', '600000', 604, '3 Bulan'),
(15, 'AYM846579', 'Samo', '800000', '1000000', 304, '6 Bulan'),
(16, 'AYM846587', 'Pamaiki', '800000', '1000000', 437, '3 Minggu'),
(17, 'AYM846588', 'Pamaiki', '1350000', '1500000', 337, '3 Bulan'),
(18, 'AYM846589', 'Pamaiki', '1700000', '2000000', 337, '6 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `data_toko`
--

CREATE TABLE `data_toko` (
  `id` int NOT NULL,
  `nama_toko` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_pemilik` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_toko`
--

INSERT INTO `data_toko` (`id`, `nama_toko`, `nama_pemilik`, `no_telepon`, `alamat`) VALUES
(1, 'Toko Berkah Jaya', 'Irfan', '08170090597', 'Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_ayam` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga_barang` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah_barang` int DEFAULT NULL,
  `satuan` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sub_total` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `jenis_ayam`, `harga_barang`, `jumlah_barang`, `satuan`, `sub_total`) VALUES
('PJ106848', 'Bangkok Clasic', '800000', 7, '3 Minggu', '1400000'),
('PJ106848', 'Pakhoy', '1200000', 4, '3 minggu', '4800000'),
('PJ106848', 'Samo', '1000000', 5, '3 Minggu', '2000000'),
('PJ106848', 'Pamaiki', '2000000', 3, '3 Minggu', '6000000'),
('PJ625795', 'Bangkok Clasic', '500000', 10, '3 Bulan', '5000000'),
('PJ625795', 'Pakhoy', '600000', 5, '3 Bulan', '3000000'),
('PJ625795', 'Samo', '600000', 6, '3 Bulan', '3600000'),
('PJ625795', 'Pamaiki', '1500000', 4, '3 Bulan', '6000000'),
('PJ878624', 'Bangkok Clasic', '800000', 7, '6 Bulan', '5600000'),
('PJ878624', 'Pakhoy', '1200000', 4, '6 Bulan', '4800000'),
('PJ878624', 'Samo', '1000000', 5, '6 Bulan', '5000000'),
('PJ878624', 'Pamaiki', '2000000', 3, '6 Bulan', '6000000'),
('PJ133740', 'Bangkok Clasic', '200000', 6, '3 Minggu', '1200000'),
('PJ133740', 'Pakhoy', '400000', 3, '3 Minggu', '1200000'),
('PJ133740', 'Samo', '400000', 5, '3 Minggu', '2000000'),
('PJ133740', 'Pamaiki', '1000000', 2, '3 Minggu', '2000000'),
('PJ326221', 'Bangkok Clasic', '500000', 10, '3 Bulan', '5000000'),
('PJ326221', 'Pakhoy', '600000', 4, '3 Bulan', '2400000'),
('PJ326221', 'Samo', '600000', 7, '3 Bulan', '4200000'),
('PJ326221', 'Pamaiki', '1500000', 7, '3 Bulan', '10500000'),
('PJ535975', 'Bangkok Clasic', '800000', 12, '6 Bulan', '9600000'),
('PJ535975', 'Pakhoy', '1200000', 4, '6 Bulan', '4800000'),
('PJ535975', 'Samo', '1000000', 9, '6 Bulan', '9000000'),
('PJ535975', 'Pamaiki', '2000000', 3, '6 Bulan', '6000000'),
('PJ450048', 'Bangkok Clasic', '200000', 5, '3 Minggu', '1000000'),
('PJ450048', 'Pakhoy', '400000', 6, '3 Minggu', '2400000'),
('PJ450048', 'Samo', '400000', 4, '3 Minggu', '1600000'),
('PJ450048', 'Pamaiki', '1000000', 3, '3 Minggu', '3000000'),
('PJ636347', 'Bangkok Clasic', '500000', 7, '3 Bulan', '3500000'),
('PJ636347', 'Pakhoy', '600000', 5, '3 Bulan', '3000000'),
('PJ636347', 'Samo', '600000', 4, '3 Bulan', '2400000'),
('PJ636347', 'Pamaiki', '1500000', 6, '3 Bulan', '9000000'),
('PJ736004', 'Bangkok Clasic', '800000', 12, '6 Bulan', '9600000'),
('PJ736004', 'Pakhoy', '1200000', 3, '6 Bulan', '3600000'),
('PJ736004', 'Samo', '1000000', 5, '6 Bulan', '5000000'),
('PJ736004', 'Pamaiki', '2000000', 4, '6 Bulan', '8000000'),
('PJ613545', 'Bangkok Clasic', '200000', 8, '3 Minggu', '1600000'),
('PJ613545', 'Pakhoy', '400000', 6, '3 Minggu', '2400000'),
('PJ613545', 'Samo', '400000', 3, '3 Minggu', '1200000'),
('PJ613545', 'Pamaiki', '1000000', 2, '3 Minggu', '2000000'),
('PJ564930', 'Bangkok Clasic', '500000', 9, '3 Bulan', '4500000'),
('PJ564930', 'Pakhoy', '600000', 5, '3 Bulan', '3000000'),
('PJ564930', 'Samo', '600000', 7, '3 Bulan', '4200000'),
('PJ564930', 'Pamaiki', '1500000', 5, '3 Bulan', '7500000'),
('PJ104189', 'Bangkok Clasic', '800000', 11, '6 Bulan', '8800000'),
('PJ104189', 'Pakhoy', '1200000', 5, '6 Bulan', '6000000'),
('PJ104189', 'Samo', '1000000', 8, '6 Bulan', '8000000'),
('PJ104189', 'Pamaiki', '2000000', 4, '6 Bulan', '8000000'),
('PJ256415', 'Bangkok Clasic', '200000', 6, '3 Minggu', '1200000'),
('PJ256415', 'Pakhoy', '400000', 3, '3 Minggu', '1200000'),
('PJ256415', 'Samo', '400000', 4, '3 Minggu', '1600000'),
('PJ256415', 'Pamaiki', '1000000', 3, '3 Minggu', '3000000'),
('PJ706120', 'Bangkok Clasic', '500000', 8, '3 Bulan', '4000000'),
('PJ706120', 'Pakhoy', '600000', 6, '3 Bulan', '3600000'),
('PJ706120', 'Samo', '600000', 7, '3 Bulan', '4200000'),
('PJ706120', 'Pamaiki', '1500000', 4, '3 Bulan', '6000000'),
('PJ354246', 'Bangkok Clasic', '800000', 9, '6 Bulan', '7200000'),
('PJ354246', 'Pakhoy', '1200000', 7, '6 Bulan', '8400000'),
('PJ354246', 'Samo', '1000000', 6, '6 Bulan', '6000000'),
('PJ354246', 'Pamaiki', '2000000', 4, '6 Bulan', '8000000'),
('PJ766917', 'Bangkok Clasic', '200000', 7, '3 Minggu', '1400000'),
('PJ766917', 'Pakhoy', '400000', 3, '3 Minggu', '1200000'),
('PJ766917', 'Samo', '400000', 4, '3 Minggu', '1600000'),
('PJ766917', 'Pamaiki', '1000000', 2, '3 Minggu', '2000000'),
('PJ181203', 'Bangkok Clasic', '600000', 8, '3 Bulan', '4800000'),
('PJ181203', 'Samo', '600000', 7, '3 Bulan', '4200000'),
('PJ181203', 'Pamaiki', '1500000', 3, '3 Bulan', '4500000'),
('PJ181203', 'Pakhoy', '600000', 5, '3 Bulan', '3000000'),
('PJ810614', 'Bangkok Clasic', '800000', 10, '6 Bulan', '8000000'),
('PJ810614', 'Pakhoy', '1200000', 5, '6 Bulan', '6000000'),
('PJ810614', 'Samo', '1000000', 5, '6 Bulan', '5000000'),
('PJ810614', 'Pamaiki', '2000000', 4, '6 Bulan', '8000000');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int NOT NULL,
  `kode_kasir` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_kasir` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username_kasir` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password_kasir` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `kode_kasir`, `nama_kasir`, `username_kasir`, `password_kasir`) VALUES
(1, 'KASIR - 01', 'Dimas', 'kasir', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `kode_pengguna` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_pengguna` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username_pengguna` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password_pengguna` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `kode_pengguna`, `nama_pengguna`, `username_pengguna`, `password_pengguna`) VALUES
(1, 'PGN1', 'irfan', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int NOT NULL,
  `no_penjualan` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_kasir` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_penjualan` date DEFAULT NULL,
  `jam_penjualan` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `nama_kasir`, `tgl_penjualan`, `jam_penjualan`, `status`, `total`) VALUES
(11, 'PJ106848', 'Irfan', '2023-01-19', '03:29:09', 0, 14200000),
(14, 'PJ625795', 'Irfan', '2023-01-19', '03:59:36', 0, 17600000),
(15, 'PJ878624', 'irfan', '2023-01-19', '04:03:00', 0, 21400000),
(16, 'PJ133740', 'irfan', '2023-02-19', '04:07:06', 0, 6400000),
(17, 'PJ326221', 'irfan', '2023-02-19', '04:08:00', 0, 22100000),
(18, 'PJ535975', 'irfan', '2023-02-19', '04:09:47', 0, 29400000),
(19, 'PJ450048', 'irfan', '2023-03-19', '04:21:32', 0, 8000000),
(20, 'PJ636347', 'irfan', '2023-03-19', '04:30:28', 0, 17900000),
(21, 'PJ736004', 'irfan', '2023-03-19', '04:32:08', 0, 26200000),
(22, 'PJ613545', 'irfan', '2023-04-19', '04:37:42', 0, 7200000),
(23, 'PJ564930', 'irfan', '2023-04-19', '04:39:15', 0, 19200000),
(24, 'PJ104189', 'irfan', '2023-04-19', '04:41:02', 1, 30800000),
(25, 'PJ256415', 'Dimas', '2023-05-19', '04:44:26', 0, 7000000),
(26, 'PJ706120', 'Dimas', '2023-05-19', '04:45:18', 0, 17800000),
(27, 'PJ354246', 'Dimas', '2023-05-19', '04:48:15', 0, 29600000),
(28, 'PJ766917', 'Dimas', '2023-06-19', '04:50:08', 0, 6200000),
(29, 'PJ181203', 'Dimas', '2023-06-19', '04:52:52', 0, 16500000),
(30, 'PJ810614', 'Dimas', '2023-06-19', '04:54:39', 0, 27000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_toko`
--
ALTER TABLE `data_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_toko`
--
ALTER TABLE `data_toko`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
