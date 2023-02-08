-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 09:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_8feb_mzakya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_motor`
--

CREATE TABLE `tb_motor` (
  `id_motor` int(10) NOT NULL,
  `nomor_rangka` int(10) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `jenis_motor` varchar(20) NOT NULL,
  `tahun_motor` int(4) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `nomor_rangka`, `merek`, `jenis_motor`, `tahun_motor`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 48921, 'Accura NSX', 'bebek', 2020, '2022-01-06', '2023-02-24'),
(2, 1, 'Accura NSX', 'bebek', 1, '2023-01-30', '2023-02-23'),
(3, 5247, 'Accura NSX', 'bebek', 2020, '2020-03-31', '2025-05-05'),
(4, 1, 'Accura NSX', 'bebek', -1, '0000-00-00', '0000-00-00'),
(5, 65, 'Accura NSX', 'trtr', 3434, '2000-02-06', '2233-04-05'),
(6, 444, 'gd', 'vc', 7777, '2023-02-17', '2023-02-11'),
(7, 666, 'tesla kalisari', 'bebek', 2022, '2023-02-08', '2023-02-17'),
(8, 2213, 'dfre', 'ede', 1009, '2023-02-08', '2023-02-21'),
(9, 6565, 'surpa', 'bebek', 2000, '2022-02-12', '2023-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(10) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `id_motor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`id_peminjam`, `nama_peminjam`, `alamat`, `umur`, `keperluan`, `jaminan`, `id_motor`) VALUES
(3, 'mas', 'kalisari', 22, 'tumbas', '', 7),
(4, 'iqbal', 'Sayung', 17, 'tumbas', 'nyawa', 8),
(5, 'adi', 'sayung', 32, 'nuntun motor', 'mata kiri', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_motor`
--
ALTER TABLE `tb_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `tb_peminjam_tb_motor` (`id_motor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_motor`
--
ALTER TABLE `tb_motor`
  MODIFY `id_motor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD CONSTRAINT `tb_peminjam_tb_motor` FOREIGN KEY (`id_motor`) REFERENCES `tb_motor` (`id_motor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
