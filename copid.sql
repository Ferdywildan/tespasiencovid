-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 07:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copid`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(100) NOT NULL,
  `namalengkap_pasien` varchar(100) NOT NULL,
  `nama_pasien` varchar(250) NOT NULL,
  `umur_pasien` varchar(250) NOT NULL,
  `alamat_pasien` varchar(250) NOT NULL,
  `kecamatan_pasien` varchar(100) NOT NULL,
  `kelurahan_pasien` varchar(100) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `suhu_pasien` int(13) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `id_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `namalengkap_pasien`, `nama_pasien`, `umur_pasien`, `alamat_pasien`, `kecamatan_pasien`, `kelurahan_pasien`, `tgl_periksa`, `suhu_pasien`, `id_kategori`, `id_status`) VALUES
(1, 'Joni Salamander', 'Joni', '26 tahun', 'Malang', 'Lokdaru', 'Demlo', '2020-04-23', 38, 2, 1),
(2, 'Astaga Tuan', 'Tuan', '78 tahun', 'Manado', 'Stansol', 'Kepri', '2020-04-24', 39, 2, 2),
(3, 'Joni Iskandr', 'Alaikasam', '78 tahun', 'Manado', 'Sabe-Sabe', 'Demlo', '2020-04-25', 36, 2, 2),
(4, 'Darul Alaika', 'Darul', '12 tahun', 'Lumajang', 'Lokdaru', 'Kelipare', '2020-04-23', 39, 2, 1),
(5, 'Ari Lesmana', 'Lesmana', '34 tahun', 'Medan', 'Loki-Loki', 'Amboy', '2020-04-23', 36, 1, 1),
(7, 'Khofifah', 'Kofif', '23 tahun', 'Madiun', 'Lokdoro', 'Maedal', '2020-04-22', 35, 1, 1),
(8, 'Dani Yulis', 'Yulis', '33 tahun', 'Makasar', 'Balu-balu', 'Sitonggung', '2020-04-25', 37, 2, 2),
(9, 'Yasir Ahmad', 'Yasir', '45 tahun', 'Malang', 'Lowokwaru', 'Lowokwaru', '2020-04-24', 36, 1, 1),
(10, 'Ponipah Nur', 'Nur', '29 tahun', 'Surabaya', 'Doksongo', 'Solong', '2020-04-24', 38, 2, 1),
(11, 'Ponipah Nur', 'Nur', '29 tahun', 'Surabaya', 'Doksongo', 'Solong', '2020-04-24', 38, 2, 2),
(12, 'Saepah Joni', 'Saepah', '66 tahun', 'Jakarta', 'Kebumen', 'Kemayoran', '2020-04-24', 37, 2, 2),
(13, 'Levi Ansyah', 'Levi', '14 tahun', 'Malang', 'Kedungkandang', 'Blimbing', '2020-04-25', 38, 2, 2),
(14, 'Levi Ansyah', 'Levi', '14 tahun', 'Malang', 'Kedungkandang', 'Blimbing', '2020-04-25', 38, 2, 2),
(15, 'Lori Revan', 'Revan', '34 tahun', 'Malnag', 'Blimbing', 'Kesatrian', '2020-04-25', 36, 1, 1),
(16, 'Darul Salam', 'Salam', '34 tahun', 'Malang', 'Belimbing', 'Kesatrian', '2020-04-25', 36, 1, 1),
(23, 'Ponipah Nur', 'Joni', '78 tahun', 'Madiun', 'Lokdoro', 'Kelipare', '2020-04-25', 36, 1, 1),
(26, 'Ponipah Nur', 'Alaika', '78 tahun', 'Medan', 'Lokdoro', 'Solong', '2020-04-25', 39, 2, 2),
(27, 'Yani alam', 'Yani', '34 tahun', 'Malang', 'Kedungkandang', 'Kesatrian', '2020-04-25', 37, 2, 2),
(28, 'Ponipah Nur', 'Nur', '78 tahun', 'Malang', 'Tajinana', 'Tajinan', '2020-04-24', 36, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(1, 'ferdy wildan', 'wildan', 'wildan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `id_kategori` int(100) NOT NULL,
  `id_status` int(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id_kategori`, `id_status`, `kategori`, `status`) VALUES
(1, 1, 'Isolasi Mandiri', 'ODP(Orang Dalam Pemantauan)'),
(2, 2, 'Pantauan Medis', 'PDP(Pasien Dalam Pengawasan)\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_kategori` (`id_kategori`,`id_status`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `rujukan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasien_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `rujukan` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
