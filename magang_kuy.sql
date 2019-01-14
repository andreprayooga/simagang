-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 05:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang_kuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `datang` time NOT NULL,
  `pulang` time NOT NULL,
  `keterangan` text NOT NULL,
  `fk_id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_administrator` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fk_id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(45) NOT NULL,
  `fk_id_pendamping` int(11) NOT NULL,
  `fk_id_siswa` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_magang`
--

CREATE TABLE `kegiatan_magang` (
  `id_kegiatan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `uraian_kegiatan` varchar(100) NOT NULL,
  `fk_id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(55) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nama_sekolah`
--

CREATE TABLE `nama_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(55) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `logo_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendamping_magang`
--

CREATE TABLE `pendamping_magang` (
  `id_pendamping` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `fk_id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `nilai_angka` text NOT NULL,
  `nilai_huruf` varchar(45) NOT NULL,
  `keterangan` text NOT NULL,
  `fk_id_siswa` int(11) NOT NULL,
  `fk_id_pendamping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_magang`
--

CREATE TABLE `siswa_magang` (
  `id_siswa` int(11) NOT NULL,
  `nim_nisn` varchar(15) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `nama_sekolah` varchar(45) NOT NULL,
  `semester` int(8) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(55) NOT NULL,
  `kota` varchar(55) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `alamat_magang` varchar(100) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_level`
--

CREATE TABLE `status_level` (
  `id_level` int(11) NOT NULL,
  `level` int(3) NOT NULL,
  `keterangan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_level`
--

INSERT INTO `status_level` (`id_level`, `level`, `keterangan`) VALUES
(1, 1, 'admin'),
(2, 2, 'mahasiswa'),
(3, 3, 'pendamping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `fk_id_siswa` (`fk_id_siswa`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_administrator`),
  ADD KEY `fk_id_level` (`fk_id_level`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`),
  ADD KEY `fk_id_pendamping` (`fk_id_pendamping`),
  ADD KEY `fk_id_siswa` (`fk_id_siswa`);

--
-- Indexes for table `kegiatan_magang`
--
ALTER TABLE `kegiatan_magang`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `fk_id_siswa` (`fk_id_siswa`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `nama_sekolah`
--
ALTER TABLE `nama_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `pendamping_magang`
--
ALTER TABLE `pendamping_magang`
  ADD PRIMARY KEY (`id_pendamping`),
  ADD KEY `fk_id_level` (`fk_id_level`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `fk_id_siswa` (`fk_id_siswa`),
  ADD KEY `fk_id_pendamping` (`fk_id_pendamping`);

--
-- Indexes for table `siswa_magang`
--
ALTER TABLE `siswa_magang`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `status_level`
--
ALTER TABLE `status_level`
  ADD PRIMARY KEY (`id_level`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_administrator` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan_magang`
--
ALTER TABLE `kegiatan_magang`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nama_sekolah`
--
ALTER TABLE `nama_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendamping_magang`
--
ALTER TABLE `pendamping_magang`
  MODIFY `id_pendamping` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa_magang`
--
ALTER TABLE `siswa_magang`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_level`
--
ALTER TABLE `status_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`fk_id_siswa`) REFERENCES `siswa_magang` (`id_siswa`);

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`fk_id_level`) REFERENCES `status_level` (`level`);

--
-- Constraints for table `divisi`
--
ALTER TABLE `divisi`
  ADD CONSTRAINT `divisi_ibfk_1` FOREIGN KEY (`fk_id_pendamping`) REFERENCES `pendamping_magang` (`id_pendamping`),
  ADD CONSTRAINT `divisi_ibfk_2` FOREIGN KEY (`fk_id_siswa`) REFERENCES `siswa_magang` (`id_siswa`);

--
-- Constraints for table `kegiatan_magang`
--
ALTER TABLE `kegiatan_magang`
  ADD CONSTRAINT `kegiatan_magang_ibfk_1` FOREIGN KEY (`fk_id_siswa`) REFERENCES `siswa_magang` (`id_siswa`);

--
-- Constraints for table `pendamping_magang`
--
ALTER TABLE `pendamping_magang`
  ADD CONSTRAINT `pendamping_magang_ibfk_1` FOREIGN KEY (`fk_id_level`) REFERENCES `status_level` (`level`);

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`fk_id_siswa`) REFERENCES `siswa_magang` (`id_siswa`),
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`fk_id_pendamping`) REFERENCES `pendamping_magang` (`id_pendamping`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
