-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 07:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `fakultas`) VALUES
('1708561044', 'Yusha Tresnatama', 'Laki-Laki', 'Tabanan', '1999-11-25', 'Buduk', 'yusha@gmail.com', 'FMIPA'),
('1708561073', 'Mira', 'Perempuan', 'Denpasar', '1999-12-31', 'Denpasar', 'mira@gmail.com', 'FMIPA'),
('1708561078', 'I Kadek Agus Andika Putra', 'Laki-Laki', 'Gianyar', '1999-03-19', 'Jalan Sahadewa', 'dexandika19@gmail.com', 'FMIPA'),
('1708561081', 'Sinta', 'Perempuan', 'Jimbaran', '1999-12-31', 'Jimbaran', 'sinta@gmail.com', 'FMIPA'),
('1708561085', 'Winda', 'Perempuan', 'Jimbaran', '1999-12-31', 'Bukit Jimbaran', 'winda@gmail.com', 'FMIPA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
