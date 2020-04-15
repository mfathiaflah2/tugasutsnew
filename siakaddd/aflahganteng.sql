-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 12:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lindabaik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kd_dosen` varchar(15) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kd_dosen`, `nama_dosen`) VALUES
('DOS-001', 'Akhmad Khanif Zyen'),
('DOS-002', 'Buang Budi Wahono'),
('DOS-003', 'R Hadapiningraja Kusumodestoni'),
('DOS-004', 'Adi Sucipto'),
('DOS-005', 'Harminto Mulyo'),
('DOS-006', 'Teguh Tamrin'),
('DOS-007', 'Gentur Wahyu'),
('DOS-008', 'Nur Aeni Widiastuti'),
('DOS-009', 'Nadia Annia Maori'),
('DOS-010', 'Sarwido');

-- --------------------------------------------------------

--
-- Table structure for table `kuliah`
--

CREATE TABLE `kuliah` (
  `kd_kuliah` varchar(15) NOT NULL,
  `nama_kuliah` varchar(50) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `kd_dosen` varchar(15) DEFAULT NULL,
  `ruang` varchar(15) DEFAULT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliah`
--

INSERT INTO `kuliah` (`kd_kuliah`, `nama_kuliah`, `sks`, `kd_dosen`, `ruang`, `waktu`) VALUES
('TIF318', 'Rekayasa Perangkat Lunak', 2, 'DOS-008', 'D204', '10:00:00'),
('TIF5315', 'Basis Data lanjut', 2, 'DOS-009', 'D103', '07:30:00'),
('TIF5316', 'Strategi Algoritma', 3, 'DOS-002', 'D303', '07:30:00'),
('TIF5317', 'Grafika Komputer', 3, 'DOS-003', 'D101', '07:30:00'),
('TIF5319', 'Pemrograman Web', 3, 'DOS-007', 'D101', '10:00:00'),
('TIF5320', 'Jaringan Komputer', 3, 'DOS-008', 'D104', '13:30:00'),
('TIF5321', 'Pemrograman Berorientasi Objek lanjut', 3, 'DOS-009', 'D103', '13:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `no_telepon`) VALUES
('181240000735', 'Muhammad Yusuf Hidayatullah', 'Kalinyamatan', '089765432134'),
('181240000739', 'Mukhammad', 'Pecangaan', '089789765435'),
('181240000752', 'Adjie Laksono', 'Jepara', '089765432678'),
('181240000759', 'Maulana Ashar', 'Pecangaan', '089765876900'),
('181240000763', 'Muhammad Tsaniyatul Faiz', 'Tahunan', '085678909876'),
('181240000772', 'Anang Maruf', 'Tahunan', '085678943543'),
('181240000778', 'Muhammad Aris Widaryani', 'Mlonggo', '082345678540'),
('181240000779', 'Muhammad Rizal Najib', 'Jepara', '082345678909'),
('181240000785', 'Linda Yuliana', 'Bangsri', '089765432612'),
('181240000788', 'Ainul Futuchiya', 'Tahunan', '082335020225'),
('181240000801', 'Mia Nur Indah', 'Bugel', '089654321789');

-- --------------------------------------------------------

--
-- Table structure for table `mempelajari`
--

CREATE TABLE `mempelajari` (
  `nim` varchar(15) DEFAULT NULL,
  `kd_kuliah` varchar(15) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mempelajari`
--

INSERT INTO `mempelajari` (`nim`, `kd_kuliah`, `nilai`) VALUES
('181240000735', 'TIF5315', 89),
('181240000739', 'TIF5315', 89),
('181240000752', 'TIF5315', 88),
('181240000759', 'TIF5315', 89),
('181240000763', 'TIF5315', 88),
('181240000772', 'TIF5315', 88),
('181240000778', 'TIF5315', 95),
('181240000779', 'TIF5315', 89),
('181240000785', 'TIF5315', 93),
('181240000801', 'TIF5315', 92),
('181240000735', 'TIF318', 87),
('181240000739', 'TIF318', 87),
('181240000752', 'TIF318', 89),
('181240000759', 'TIF318', 87),
('181240000763', 'TIF318', 86),
('181240000772', 'TIF318', 86),
('181240000779', 'TIF318', 89),
('181240000785', 'TIF318', 91),
('181240000801', 'TIF318', 91),
('181240000735', 'TIF5316', 90),
('181240000739', 'TIF5316', 90),
('181240000752', 'TIF5316', 91),
('181240000759', 'TIF5316', 90),
('181240000763', 'TIF5316', 92),
('181240000772', 'TIF5316', 89),
('181240000778', 'TIF5316', 95),
('181240000779', 'TIF5316', 89),
('181240000785', 'TIF5316', 92),
('181240000801', 'TIF5316', 91),
('181240000735', 'TIF5317', 90),
('181240000739', 'TIF5317', 90),
('181240000752', 'TIF5317', 91),
('181240000759', 'TIF5317', 90),
('181240000763', 'TIF5317', 92),
('181240000772', 'TIF5317', 93),
('181240000779', 'TIF5317', 92),
('181240000785', 'TIF5317', 94),
('181240000801', 'TIF5317', 93),
('181240000788', 'TIF5315', 89),
('181240000788', 'TIF318', 92),
('181240000788', 'TIF5316', 92),
('181240000788', 'TIF5317', 90),
('181240000778', 'TIF5317', 95),
('181240000735', 'TIF5319', 92),
('181240000739', 'TIF5319', 91),
('181240000752', 'TIF5319', 90),
('181240000759', 'TIF5319', 90),
('181240000763', 'TIF5319', 91),
('181240000772', 'TIF5319', 92),
('181240000779', 'TIF5319', 92),
('181240000778', 'TIF5319', 98),
('181240000785', 'TIF5319', 92),
('181240000788', 'TIF5319', 91),
('181240000801', 'TIF5319', 91),
('181240000735', 'TIF5320', 92),
('181240000739', 'TIF5320', 91),
('181240000752', 'TIF5320', 90),
('181240000759', 'TIF5320', 90),
('181240000763', 'TIF5320', 91),
('181240000772', 'TIF5320', 92),
('181240000778', 'TIF5320', 98),
('181240000779', 'TIF5320', 92),
('181240000785', 'TIF5320', 92),
('181240000788', 'TIF5320', 92),
('181240000801', 'TIF5320', 92),
('181240000735', 'TIF5321', 92),
('181240000739', 'TIF5321', 91),
('181240000759', 'TIF5321', 90),
('181240000763', 'TIF5321', 91),
('181240000772', 'TIF5321', 92),
('181240000788', 'TIF5321', 92),
('181240000778', 'TIF5321', 98),
('181240000779', 'TIF5321', 92),
('181240000785', 'TIF5321', 92),
('181240000801', 'TIF5321', 92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kd_dosen`);

--
-- Indexes for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD PRIMARY KEY (`kd_kuliah`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mempelajari`
--
ALTER TABLE `mempelajari`
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_kuliah` (`kd_kuliah`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD CONSTRAINT `kuliah_ibfk_1` FOREIGN KEY (`kd_dosen`) REFERENCES `dosen` (`kd_dosen`);

--
-- Constraints for table `mempelajari`
--
ALTER TABLE `mempelajari`
  ADD CONSTRAINT `mempelajari_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `mempelajari_ibfk_2` FOREIGN KEY (`kd_kuliah`) REFERENCES `kuliah` (`kd_kuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
