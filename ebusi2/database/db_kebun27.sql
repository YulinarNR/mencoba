-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 03:56 AM
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
-- Database: `db_kebun27`
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
(3, 'yulinar@gmail.com', 'smkn', 'yulinar', 'Yulinar Nur', 'Rahmawati', 'Probolinggo', '089322234', '530688.jpg', '2020-12-27', 3),
(4, 'yulinarnurrahma@gmail.com', 'admin12345', 'admin', 'paperplane', 'bookstore', 'Surabaya', '089423411', '202012290519051.PNG', '2020-12-29', 1);

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
(12, 'Buah', '2020-12-27'),
(13, 'Sayuran', '2020-12-27'),
(14, 'Kacang Kacangan', '2020-12-27'),
(15, 'Biji Bijian', '2020-12-30');

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
(4, 'probolinggo', 12000, '2020-12-07'),
(5, 'Banyuwangi', 24000, '2020-12-27'),
(6, 'Malang', 27000, '2020-12-27');

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
(11, 88, 'Yulinar', 'Mandiri', 41000, '2021-01-01', '202101010600163.PNG');

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
(88, 12, 5, '2021-01-01', 41000, 'Banyuwangi', 24000, 'banyu iki', 'Sudah Kirim Pembayaran', ''),
(89, 12, 6, '2021-01-01', 51000, 'Malang', 27000, 'malabf', 'Pesanan Dibatalkan', '');

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
(122, 88, 29, 1, 'Selada', 12000, 1, 1, 12000),
(123, 88, 30, 1, 'Sawi', 5000, 1, 1, 5000),
(124, 89, 29, 2, 'Selada', 12000, 1, 2, 24000);

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
(29, 'Selada', '13', 9, '1', 8000, 'selada.jpg', 'Selada atau daun sla adalah tumbuhan sayur yang biasa ditanam di daerah beriklim sedang maupun daerah tropika. Kegunaan utama adalah sebagai salad. ', 'Mencegah dehidrasi, Menangkal radikal bebas, Menjaga kesehatan mata, Menjaga kesehatan tulang, Membantu menurunkan tekanan darah dan masih banyak lagi', 'Melansir laman The Spruce, kamu harus memisahkan daun-daun selada terlebih dahulu, cuci bersih, dan keringkan menggunakan salad spinner.\r\nSetelah itu, bungkus menggunakan kertas tipis atau tisu dan letakkan dalam penyimpanan sayur yang ada di lemari pendingin.\r\nDengan metode ini, selada akan awet selama 3-5 hari.'),
(30, 'Sawi', '13', 19, '1', 5000, '530688.jpg', 'xx', 'xx', 'xx'),
(31, 'Bayam', '13', 10, '1', 3000, 'bayam2.jpg', 'xx', 'xx', 'xx'),
(32, 'Jeruk', '12', 23, '2', 34000, 'jeruk.jpg', 'xx', 'xx', 'xx');

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
(12, 'yulinar@gmail.com', 'user', 'user', 'Yulinar', ' User', 'Jl. Bringin', '0986987567', '20201227140520529672.jpg', '2020-12-07', 2);

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
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
