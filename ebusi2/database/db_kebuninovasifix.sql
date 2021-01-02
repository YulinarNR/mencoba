-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 07:06 AM
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
-- Database: `db_kebuninovasifix`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `info_kontak` varchar(50) NOT NULL,
  `foto_admin` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `username`, `password`, `nama_depan`, `nama_belakang`, `alamat`, `info_kontak`, `foto_admin`, `tgl_buat`, `id_level`) VALUES
(1, 'yulinar@gmail.com', 'Admin', 'admin', 'yulinar nur', 'rahmawati', 'Probolinggo', '628563728', '20200530_193422_0000.png', '2020-12-11', 1),
(2, 'smkyulinar@gmail.com', 'smkn', 'yulinar', 'yulinar nur', 'rahmawati', 'Lampung', '62888888', '530688.jpg', '2020-12-23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(11) NOT NULL,
  `an_bank` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `an_bank`, `nama_bank`, `no_rek`) VALUES
(1, 'TOSAN', 'MANDIRI', '459-8551-0241');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`, `tgl_input`) VALUES
(1, 'Buah', '2020-12-01'),
(2, 'Sayur', '2020-12-07'),
(10, 'Kacang Kacangan', '2020-12-23');

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
-- Table structure for table `tb_ongkir`
--

CREATE TABLE `tb_ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ongkir`
--

INSERT INTO `tb_ongkir` (`id_ongkir`, `nama_kota`, `tarif`, `tgl_input`) VALUES
(1, 'Probolinggo', 22000, '2020-12-08'),
(2, 'Surabaya', 40000, '2020-12-08'),
(3, 'Malang', 27000, '2020-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `bukti_pembayaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tgl_pembayaran`, `bukti_pembayaran`) VALUES
(3, 1, 'Reka', 'BCA', 31400, '2020-12-19', '20201219094715lg.jpg'),
(4, 2, 'Rekaser', 'BCA', 40400, '2020-12-19', '20201219122617IMG_20200404_122425.jpg'),
(5, 16, 'Nando', 'Mandiri', 45000, '2020-12-19', '202012191522141594999745092.jpg'),
(6, 19, 'Ferenia', 'BNI', 54000, '2020-12-20', '20201220084738529672.jpg'),
(7, 23, 'Nando', 'Mandiri', 27000, '2020-12-21', '20201221154709Screenshot 2020-10-30 213349.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_user`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(6, 1, 2, '2020-12-18', 42000, 'Surabaya', 40000, 'jl. wringin', 'Pesanan Dibatalkan', ''),
(7, 1, 2, '2020-12-18', 50000, 'Surabaya', 40000, 'Jl. Panjaitan', 'pending', ''),
(8, 1, 2, '2020-12-18', 45000, 'Surabaya', 40000, 'Jl. Ponorogo 1', 'Pesanan Dibatalkan', ''),
(9, 1, 1, '2020-12-18', 33000, 'Probolinggo', 22000, 'Jl. Sultan Agung', 'Pesanan Dibatalkan', ''),
(10, 1, 1, '2020-12-18', 31000, 'Probolinggo', 22000, 'Jl. Bromo', 'pending', ''),
(11, 1, 2, '2020-12-18', 52000, 'Surabaya', 40000, 'Jl. Mastrip', 'pending', ''),
(12, 1, 1, '2020-12-19', 49000, 'Probolinggo', 22000, 'Jl. Bunderan Serang', 'pending', ''),
(13, 1, 1, '2020-12-19', 24000, 'Probolinggo', 22000, 'jl. pedesaan', 'pending', ''),
(15, 1, 1, '2020-12-19', 32000, 'Probolinggo', 22000, 'Jl. Ir. Soekarno', 'pending', ''),
(16, 1, 2, '2020-12-19', 45000, 'Surabaya', 40000, 'Jl. Dr. Soetomo', 'Sudah Kirim Pembayaran', ''),
(17, 1, 1, '2020-12-20', 32000, 'Probolinggo', 22000, 'Jl. Cokroaminoto', 'pending', ''),
(18, 1, 1, '2020-12-20', 237000, 'Probolinggo', 22000, 'Jl. Brantas', 'pending', ''),
(19, 1, 2, '2020-12-20', 54000, 'Surabaya', 40000, 'Jl. Porong', 'Barang Dikirim', 'KB10000665657823'),
(20, 1, 2, '2020-12-20', 49000, 'Surabaya', 40000, 'Jl. Panglima Sudirman', 'pending', ''),
(21, 1, 1, '2020-12-21', 40000, 'Probolinggo', 22000, 'wqewq', 'pending', ''),
(22, 1, 2, '2020-12-21', 54000, 'Surabaya', 40000, 'Jl. Sudirman', 'pending', ''),
(23, 1, 1, '2020-12-21', 27000, 'Probolinggo', 22000, 'Jl. Soetomo', 'Barang Dikirim', 'KSP1000066565781234243'),
(24, 1, 1, '2020-12-22', 27000, 'Probolinggo', 22000, 'Jl. Teuku Umar', 'pending', ''),
(25, 1, 1, '2020-12-22', 32000, 'Probolinggo', 22000, 'kjlkhk', 'pending', ''),
(26, 1, 1, '2020-12-23', 41000, 'Probolinggo', 22000, 'Jl. Mastrip', 'pending', ''),
(27, 1, 3, '2020-12-23', 38000, 'Malang', 27000, 'Jl. Teuku Umar', 'pending', ''),
(28, 1, 1, '2020-12-23', 37000, 'Probolinggo', 22000, 'anggrek', 'pending', ''),
(29, 1, 2, '2020-12-23', 60000, 'Surabaya', 40000, 'Jl. Soekarno Hatta', 'pending', ''),
(30, 1, 1, '2020-12-23', 26000, 'Probolinggo', 22000, 'a', 'pending', ''),
(31, 1, 2, '2020-12-24', 47000, 'Surabaya', 40000, 'Jl. Panglima Sudirman', 'pending', ''),
(32, 1, 0, '2020-12-24', 2000, '', 0, 'sd', 'Pesanan Dibatalkan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian_produk`
--

CREATE TABLE `tb_pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subtot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembelian_produk`
--

INSERT INTO `tb_pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subtot`) VALUES
(8, 6, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(9, 7, 1, 5, 'Bayam', 2000, 12, 60, 10000),
(10, 8, 2, 1, 'Jeruk', 5000, 2, 2, 5000),
(11, 9, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(12, 9, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(13, 10, 2, 1, 'Jeruk', 5000, 2, 2, 5000),
(14, 10, 1, 2, 'Bayam', 2000, 12, 24, 4000),
(15, 11, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(16, 11, 2, 2, 'Jeruk', 5000, 2, 4, 10000),
(17, 12, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(18, 12, 2, 5, 'Jeruk', 5000, 2, 10, 25000),
(19, 13, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(21, 15, 1, 5, 'Bayam', 2000, 12, 60, 10000),
(22, 16, 2, 1, 'Jeruk', 5000, 2, 2, 5000),
(23, 17, 2, 2, 'Jeruk', 5000, 2, 4, 10000),
(24, 18, 2, 43, 'Jeruk', 5000, 2, 86, 215000),
(25, 19, 4, 1, 'Sawi', 5000, 500, 500, 5000),
(26, 19, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(27, 20, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(28, 21, 3, 2, 'Kangkung', 9000, 9, 18, 18000),
(29, 22, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(30, 22, 4, 1, 'Sawi', 5000, 500, 500, 5000),
(31, 23, 4, 1, 'Sawi', 5000, 500, 500, 5000),
(32, 24, 2, 1, 'Jeruk', 5000, 2, 2, 5000),
(33, 25, 1, 5, 'Bayam', 2000, 12, 60, 10000),
(34, 26, 2, 2, 'Jeruk', 5000, 2, 4, 10000),
(35, 26, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(36, 27, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(37, 27, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(38, 28, 1, 1, 'Bayam', 2000, 12, 12, 2000),
(39, 28, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(40, 28, 6, 1, 'Sawi', 4000, 0, 0, 4000),
(41, 29, 1, 1, 'Bayam', 2000, 0, 0, 2000),
(42, 29, 3, 1, 'Kangkung', 9000, 9, 9, 9000),
(43, 29, 2, 1, 'Jeruk', 5000, 2, 2, 5000),
(44, 29, 6, 1, 'Sawi', 4000, 0, 0, 4000),
(45, 30, 6, 1, 'Sawi', 4000, 0, 0, 4000),
(46, 31, 1, 1, 'Bayam', 2000, 1, 1, 2000),
(47, 31, 2, 1, 'Jeruk', 5000, 2, 2, 5000),
(48, 32, 1, 1, 'Bayam', 2000, 1, 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `moto` varchar(255) NOT NULL,
  `gambar_awal` varchar(50) NOT NULL,
  `judul_tentang` varchar(50) NOT NULL,
  `gambar_tentang` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `info_tambahan` varchar(255) NOT NULL,
  `galeri` varchar(25) NOT NULL,
  `judul_service` varchar(50) NOT NULL,
  `service1` varchar(25) NOT NULL,
  `gambar_sv1` varchar(25) NOT NULL,
  `text_sv1` varchar(100) NOT NULL,
  `service2` varchar(25) NOT NULL,
  `gambar_sv2` varchar(25) NOT NULL,
  `text_sv2` varchar(100) NOT NULL,
  `service3` varchar(25) NOT NULL,
  `gambar_sv3` varchar(25) NOT NULL,
  `text_sv3` varchar(100) NOT NULL,
  `judul_kontak` varchar(25) NOT NULL,
  `judul_alamat` varchar(50) NOT NULL,
  `nama_jalan` varchar(100) NOT NULL,
  `nama_kota_kab` varchar(100) NOT NULL,
  `link_maps` text NOT NULL,
  `judul_email` varchar(50) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `judul_call` varchar(50) NOT NULL,
  `no_hp1` varchar(12) NOT NULL,
  `no_hp2` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaturan`
--

INSERT INTO `tb_pengaturan` (`id_pengaturan`, `judul`, `moto`, `gambar_awal`, `judul_tentang`, `gambar_tentang`, `text`, `info_tambahan`, `galeri`, `judul_service`, `service1`, `gambar_sv1`, `text_sv1`, `service2`, `gambar_sv2`, `text_sv2`, `service3`, `gambar_sv3`, `text_sv3`, `judul_kontak`, `judul_alamat`, `nama_jalan`, `nama_kota_kab`, `link_maps`, `judul_email`, `email1`, `email2`, `judul_call`, `no_hp1`, `no_hp2`) VALUES
(1, 'SISTEM INFORMASI E-BUSI', 'Cepat Mudah Efektif', 'jpg', 'Kebun Inovasi Polije', 'jpg', 'Kebun Inovasi bertujuan untuk menciptakan sumber daya manusia yang berkualitas. Beragam koleksi tanaman yang tersedia di Kebun Inovasi adalah semangka, melon, terong, bawang merah, jagung dan juga tanaman jeruk. Kegiatan pengelolaan lahan ini juga melibatkan instruktur yang ahli di bidang pertanian. Instruktur pertanian akan melakukan edukasi materi dan praktik langsung di lahan ini. Di antara materi yang akan diberikan yakni\r\n', 'Cara bercocok tanam di lahan kering dan basah\r\nCara perawatan tanaman\r\nInstruktur pertanian juga akan mengajarkan proses mencampurkan pupuk organi', 'jpg', 'SERVICES', 'PELAYANAN TERBAIK', 'jpg', 'Respon yang cepat dan aman\r\nBerbelanja nyaman', 'KUALITAS TERBAIK', 'jpg', 'Kualitas sudah terjamin  Pesanan aman sampai tujuan', 'BUAH DAN SAYURAN SEGAR', 'jpg', ' Buah/sayur segar dan bersih\r\n Langsung petik dari kebun', 'KONTAK', 'Our Address', 'Jl. Mastrip Kotak Pos 164', 'Jember, Jawa Timur, Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4696.704327963119!2d113.72202653559624!3d-8.15816096065096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sState%20Polytechnic%20of%20Jember!5e0!3m2!1sen!2sid!4v1605834966884!5m2!1sen!2sid', 'Email Us', 'ujang_tri@polije.ac.id', 'tosan@polije.ac.id', 'Call Us', '08124944360', '081335703958');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `beratisi_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `info_produk` text NOT NULL,
  `nutrisi_manfaat` text NOT NULL,
  `cara_penyimpanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `kategori`, `stok`, `beratisi_produk`, `harga_produk`, `foto_produk`, `info_produk`, `nutrisi_manfaat`, `cara_penyimpanan`) VALUES
(1, 'Bayam', 'Sayur', 5, '1', 2000, 'bayam2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Mempunyai banyak manfaat', 'xx\r\n\r\n'),
(2, 'Jeruk', 'Buah', 5, '2', 5000, 'jeruk.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Mempunyai banyak manfaat', 'xx'),
(3, 'Kangkung', 'Sayur', 8, '9', 9000, 'kangkung.jpg', 'hgjh', 'efw', 'wgwgw'),
(6, 'Sawi', 'Sayur', 9, '1', 4000, 'sawi.jpg', 'Sawi', 'Banyak manfaat yang diperoleh', 'apa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
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
(1, 'smkyulinar@gmail.com', 'smkyulinar', '231', 'Yulinar Nur', 'Rahmawati', 'sadaps', '09824252533', '20201224053355529672.jpg', '2020-12-22', 2),
(2, 'paperplane@bookstore1.com', 'paperplanea', '', 'paperplane', 'bookstore', 'Jl. Melati', '09824252', '529865.jpg', '2020-12-23', 2),
(4, 'ironman@admin.com', 'ironman', '', 'man', 'robert', 'Jl. Anggur', '09824252', '530661.jpg', '2020-12-23', 2),
(6, 'yulinarnurrahma@gmail.com', 'smkyulinar', '', 'paperplaneal', 'Rahmawatiuy', 'dfsfs', '41241241', '20201223182642529672.jpg', '2020-12-23', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

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
-- Indexes for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

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
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
