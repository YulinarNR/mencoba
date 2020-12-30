-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 06:12 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kebuninovasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `info_kontak` varchar(50) NOT NULL,
  `foto_admin` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `id_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `username`, `password`, `nama_depan`, `nama_belakang`, `alamat`, `info_kontak`, `foto_admin`, `tgl_buat`, `id_level`) VALUES
(1, 'yulinar@gmail.com', 'Admin', 'admin', 'yulinar nur', 'rahmawati', 'probolinggo', '+62839012832', 'foto_burned.png', '2020-12-11', 1),
(2, 'smkyulinar@gmail.com', 'smk', 'yulinar', 'yulinar nur', 'rahmawati', 'prob', '+628563728', 'nothing', '2020-12-07', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`, `ket`) VALUES
(1, 'Buah', 'Buah-Buahan'),
(2, 'Sayur ', 'Sayuran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(3) NOT NULL,
  `level` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'pelanggan'),
(3, 'super admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `beratisi_produk` varchar(50) NOT NULL,
  `harga_produk` float NOT NULL,
  `diskon` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `info_produk` text NOT NULL,
  `nutrisi_manfaat` text NOT NULL,
  `cara_penyimpanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `kategori`, `stok`, `beratisi_produk`, `harga_produk`, `diskon`, `foto_produk`, `info_produk`, `nutrisi_manfaat`, `cara_penyimpanan`) VALUES
(2, 'Bayams', 'Buah', 5, '12', 2000, 2, 'bayam.jpg', 'Sayuran Segar', 'Mempunyai banyak manfaat', 'www'),
(3, 'Jeruk', 'Buah', 45, '2', 5000, 2, 'jeruk.jpg', 'r', 'rw', 'fds'),
(5, 'Kangkung', 'Sayur', 5, '9', 9000, 0, 'kangkung.jpg', 'hgjh', 'gcgh', 'jkkgk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `info_kontak` varchar(100) NOT NULL,
  `foto_user` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `id_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `username`, `password`, `nama_depan`, `nama_belakang`, `alamat`, `info_kontak`, `foto_user`, `tgl_buat`, `id_level`) VALUES
(5, 'youth@gmail.com', 'yuli ', 'yuliNar123', 'qwerty', 'uiop', 'prob', '24325235', '', '2020-12-10', 2),
(9, 'scarlet@witch.com', 'scarletwitch', '$2y$10$dOHF2oS9P.SIX', 'Scarlet', 'Witch', '', '', '', '2020-12-10', 2),
(10, 'yuli@rahma.com', 'yulinarnurr', '8f1a3f94ed964d07277585bf62178405', 'yuli', 'rahma', '', '', '', '2020-12-11', 2),
(11, 'ironman@admin.com', 'ironman', '$2y$10$zWOkIcXqtOrHCaSqptK6q.AJh1vJD.Bz2z4MDNOuqRiZilXryrRI2', 'Iron', 'Man', '', '', '', '2020-12-11', 2),
(13, 'sutini@titin.com', 'sutini', '$2y$10$OpPlhOfUEgyCWWG896Z27.jX2bNt4B.Ts3Q8kmXKVKhqGjaefixB2', 'titi', 'titin', '', '', '', '2020-12-11', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
