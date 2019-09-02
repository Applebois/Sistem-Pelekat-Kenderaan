-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 02:11 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_program`
--

CREATE TABLE IF NOT EXISTS `jabatan_program` (
  `id` int(50) NOT NULL,
  `Jenis_program` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_program`
--

INSERT INTO `jabatan_program` (`id`, `Jenis_program`) VALUES
(1, 'PERANCANGAN PEMBANGUNAN LATIHAN (PPL)'),
(2, 'BAHAGIAN KHIDMAT PENGURUSAN (BKP)'),
(3, 'PEMBELAJARAN ELEKTRONIK DAN MULTIMEDIA (PEM)'),
(4, 'BAHAGIAN KORPORAT'),
(5, 'PEMBANGUNAN PROFESIONAL KEMAHIRAN (SPD)'),
(6, 'PEMBANGUNAN PENGAJAR KEMAHIRAN (PPK)'),
(7, 'KELAYAKAN KEKOMPETENAN (KK)');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE IF NOT EXISTS `kursus` (
  `ID` int(11) NOT NULL,
  `JENIS_KURSUS` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`ID`, `JENIS_KURSUS`) VALUES
(1, 'VTO'),
(2, 'DLPV KOMPUTER SISTEM'),
(3, 'DLPV KOMPUTER RANGKAIAN'),
(4, 'DLPV KIMPALAN'),
(5, 'DLPV PENGELUARAN'),
(6, 'DLPV AUTOMOTIF'),
(7, 'DLPV MEKATRONIK'),
(8, 'DLPV ELEKTRONIK'),
(9, 'SKM+VTO KIMPALAN'),
(10, 'SKM+VTO ELEKTRONIK'),
(11, 'SKM+VTO MEKATRONIK'),
(12, 'SKM+VTO AUTOMOTIF');

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_pelajar`
--

CREATE TABLE IF NOT EXISTS `maklumat_pelajar` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_phone` bigint(11) NOT NULL,
  `noic` varchar(100) NOT NULL,
  `no_ndp` varchar(15) NOT NULL,
  `jantina` text NOT NULL,
  `sesi` varchar(10) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kursus` text NOT NULL,
  `role` bigint(20) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_pelajar`
--

INSERT INTO `maklumat_pelajar` (`id`, `nama`, `username`, `password`, `no_phone`, `noic`, `no_ndp`, `jantina`, `sesi`, `alamat`, `kursus`, `role`, `date_register`) VALUES
(5, 'Muhammed azha talib', 'azhaat', '123', 132210157, '920422019956', 'd11314030', 'male', 'sept 2014', 'johor darul takzim', 'DLPV COM SIS', 2, '2016-03-28 06:10:19'),
(6, 'admin', 'admin', 'admin', 1, '', '', '', '', '', 'Administration', 1, '2016-03-28 16:59:55'),
(7, 'mohd zamani bin adam', 'zamani', 'zamani', 145412018, '910321125369', 'd11314034', 'male', 'sept 2014', 'sabah negeri dibawah bayu', 'DLPV COM SIS', 2, '2016-03-28 23:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_pelajar`
--

CREATE TABLE IF NOT EXISTS `pendaftaran_pelajar` (
  `id` int(255) NOT NULL,
  `mpID` int(50) NOT NULL,
  `jeniskenderaan` varchar(11) NOT NULL,
  `noplat` varchar(11) NOT NULL,
  `model` text NOT NULL,
  `warna` text NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `jumlah_pembayaran` varchar(20) NOT NULL,
  `lesen` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_pelajar`
--

INSERT INTO `pendaftaran_pelajar` (`id`, `mpID`, `jeniskenderaan`, `noplat`, `model`, `warna`, `status_pembayaran`, `jumlah_pembayaran`, `lesen`) VALUES
(62, 5, 'LC 125z', 'JDT 001', 'Super Bike', 'blue red', 'Unsettle', 'RM 150.00', ''),
(67, 5, 'Super Bike', 'JDT 001', 'LC 125z', 'white blue', '', '', ''),
(68, 5, 'Super Bike', 'JDT333', 'Yamaha Lagenda ZR', 'merah menyala', '', '', '../LICENSE/B.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'Administration'),
(2, 'Regular User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan_program`
--
ALTER TABLE `jabatan_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maklumat_pelajar`
--
ALTER TABLE `maklumat_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran_pelajar`
--
ALTER TABLE `pendaftaran_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan_program`
--
ALTER TABLE `jabatan_program`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `maklumat_pelajar`
--
ALTER TABLE `maklumat_pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pendaftaran_pelajar`
--
ALTER TABLE `pendaftaran_pelajar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
