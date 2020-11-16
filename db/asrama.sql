-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 05:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_rutin`
--

CREATE TABLE `absensi_rutin` (
  `id_absensi_rutin` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `qiyamul_lail` int(1) NOT NULL,
  `subuh` int(1) NOT NULL,
  `taklim` int(1) NOT NULL,
  `maghrib` int(1) NOT NULL,
  `kajian` int(1) NOT NULL,
  `isyak` int(1) NOT NULL,
  `jam_malam` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_rutin`
--

INSERT INTO `absensi_rutin` (`id_absensi_rutin`, `id_pengguna`, `tanggal`, `qiyamul_lail`, `subuh`, `taklim`, `maghrib`, `kajian`, `isyak`, `jam_malam`) VALUES
(4, 3, '2020-11-24', 0, 0, 1, 0, 1, 1, 0),
(5, 3, '2020-11-24', 0, 0, 0, 1, 1, 1, 0),
(6, 5, '2020-11-10', 0, 0, 1, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan_to_warga` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan_to_warga`, `id_pengguna`, `tanggal`, `keterangan`) VALUES
(2, 3, '2020-10-28', 'jarang ngaji'),
(3, 3, '2020-10-26', 'jarang setor hafalan'),
(4, 6, '2020-10-21', 'Memiliki masalah dengan Teman Sekamar');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_to_asrama`
--

CREATE TABLE `catatan_to_asrama` (
  `id_catatan_to_asrama` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan_pengelola` varchar(250) NOT NULL,
  `catatan_pg` varchar(250) NOT NULL,
  `catatan_ph` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan_to_asrama`
--

INSERT INTO `catatan_to_asrama` (`id_catatan_to_asrama`, `id_pengguna`, `tanggal`, `catatan_pengelola`, `catatan_pg`, `catatan_ph`) VALUES
(3, 3, '2020-10-13', '-', 'agak sedikit galak', 'kurang membaur dengan warga'),
(4, 6, '2020-10-23', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_nonrutin`
--

CREATE TABLE `kegiatan_nonrutin` (
  `id_kegiatan_nonrutin` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kegiatan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_nonrutin`
--

INSERT INTO `kegiatan_nonrutin` (`id_kegiatan_nonrutin`, `id_pengguna`, `tanggal`, `jenis_kegiatan`) VALUES
(1, 3, '2020-10-28', 7),
(3, 3, '2020-10-26', 5),
(4, 5, '2020-10-20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` int(1) NOT NULL,
  `alasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `id_pengguna`, `tanggal`, `jenis`, `alasan`) VALUES
(1, 3, '2020-10-29', 0, 'Tidak Izin'),
(2, 5, '2020-10-06', 0, 'Tidak Izin '),
(3, 3, '2020-11-24', 1, 'Locat pagar');

-- --------------------------------------------------------

--
-- Table structure for table `pembobotan`
--

CREATE TABLE `pembobotan` (
  `id_pembobotan` int(11) NOT NULL,
  `rutin` decimal(5,2) NOT NULL,
  `non_rutin` decimal(5,2) NOT NULL,
  `pelanggaran` decimal(5,2) NOT NULL,
  `catatan` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rule` int(2) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gedung` varchar(1) NOT NULL,
  `kamar` varchar(3) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hapus` int(11) NOT NULL,
  `penanggung_jawab` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `rule`, `jenis_kelamin`, `jurusan`, `gedung`, `kamar`, `no_hp`, `alamat`, `hapus`, `penanggung_jawab`) VALUES
(1, 'ainur inas annisa', '827ccb0eea8a706c4c34a16891f84e7b', 0, '0', 'teknik informatika', 'A', 'A23', '08233123123', 'pejagan', 0, NULL),
(2, 'moh nikmat', '827ccb0eea8a706c4c34a16891f84e7b', 0, '1', 'teknik informatika', 'B', 'B31', '231231231', 'socah', 1, NULL),
(3, 'nur hayati', '827ccb0eea8a706c4c34a16891f84e7b', 1, '0', 'teknik industri', 'A', 'A32', '123456789', 'tanjung bumi', 0, NULL),
(4, 'romy', '827ccb0eea8a706c4c34a16891f84e7b', 2, '1', 'sastra inggris', 'B', 'B34', '123455124', 'bancaran', 0, 3),
(5, 'nina', '827ccb0eea8a706c4c34a16891f84e7b', 2, '0', 'teknik mesin', 'A', 'A44', '12345', 'jombang', 0, 3),
(6, 'halisa nabila', '827ccb0eea8a706c4c34a16891f84e7b', 2, '0', 'PBSI', 'A', 'A22', '123123', 'terst', 0, 3),
(8, 'irmawati', '827ccb0eea8a706c4c34a16891f84e7b', 2, '0', 'psikologi', 'A', '304', '1', 'tanjungbumi', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `keputusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--

CREATE TABLE `perizinan` (
  `id_perizinan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tgl_izin` date NOT NULL,
  `jam_izin` time NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jam_kembali` time NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perizinan`
--

INSERT INTO `perizinan` (`id_perizinan`, `id_pengguna`, `tgl_izin`, `jam_izin`, `tgl_kembali`, `jam_kembali`, `keterangan`) VALUES
(1, 3, '2020-10-14', '13:00:00', '2020-10-21', '20:00:00', 'praktikum'),
(2, 5, '2020-10-30', '13:00:00', '2020-10-19', '15:00:00', 'Pulang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_absensi_rutin`
-- (See below for the actual view)
--
CREATE TABLE `v_absensi_rutin` (
`id_absensi_rutin` int(11)
,`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`gedung` varchar(1)
,`qiyamul_lail` int(1)
,`subuh` int(1)
,`taklim` int(1)
,`maghrib` int(1)
,`isyak` int(1)
,`jam_malam` int(1)
,`tanggal` date
,`penanggung_jawab` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_catatan`
-- (See below for the actual view)
--
CREATE TABLE `v_catatan` (
`id_catatan_to_warga` int(11)
,`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`gedung` varchar(1)
,`tanggal` date
,`keterangan` varchar(255)
,`penanggung_jawab` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kegiatan_nonrutin`
-- (See below for the actual view)
--
CREATE TABLE `v_kegiatan_nonrutin` (
`id_kegiatan_nonrutin` int(11)
,`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`gedung` varchar(1)
,`jenis_kegiatan` int(1)
,`tanggal` date
,`penanggung_jawab` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pelanggaran`
-- (See below for the actual view)
--
CREATE TABLE `v_pelanggaran` (
`id_pelanggaran` int(11)
,`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`gedung` varchar(1)
,`tanggal` date
,`jenis` int(1)
,`alasan` varchar(100)
,`penanggung_jawab` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengaduan`
-- (See below for the actual view)
--
CREATE TABLE `v_pengaduan` (
`id_catatan_to_asrama` int(11)
,`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`gedung` varchar(1)
,`tanggal` date
,`catatan_pengelola` varchar(250)
,`catatan_pg` varchar(250)
,`catatan_ph` varchar(250)
,`penanggung_jawab` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_perizinan`
-- (See below for the actual view)
--
CREATE TABLE `v_perizinan` (
`id_perizinan` int(11)
,`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`gedung` varchar(1)
,`tgl_izin` date
,`jam_izin` time
,`tgl_kembali` date
,`jam_kembali` time
,`keterangan` varchar(255)
,`penanggung_jawab` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_catatan`
-- (See below for the actual view)
--
CREATE TABLE `v_total_catatan` (
`id_pengguna` int(11)
,`TOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_nonrutin`
-- (See below for the actual view)
--
CREATE TABLE `v_total_nonrutin` (
`id_pengguna` int(11)
,`TOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_pelanggaran`
-- (See below for the actual view)
--
CREATE TABLE `v_total_pelanggaran` (
`id_pengguna` int(11)
,`TOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_rutin`
-- (See below for the actual view)
--
CREATE TABLE `v_total_rutin` (
`id_pengguna` int(11)
,`subuh` decimal(22,0)
,`taklim` decimal(22,0)
,`maghrib` decimal(22,0)
,`kajian` decimal(22,0)
,`isyak` decimal(22,0)
,`jam_malam` decimal(22,0)
,`qiyamul_lail` decimal(22,0)
,`TOTAL` decimal(28,0)
);

-- --------------------------------------------------------

--
-- Structure for view `v_absensi_rutin`
--
DROP TABLE IF EXISTS `v_absensi_rutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_absensi_rutin`  AS  select `absensi_rutin`.`id_absensi_rutin` AS `id_absensi_rutin`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`absensi_rutin`.`qiyamul_lail` AS `qiyamul_lail`,`absensi_rutin`.`subuh` AS `subuh`,`absensi_rutin`.`taklim` AS `taklim`,`absensi_rutin`.`maghrib` AS `maghrib`,`absensi_rutin`.`isyak` AS `isyak`,`absensi_rutin`.`jam_malam` AS `jam_malam`,`absensi_rutin`.`tanggal` AS `tanggal`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`absensi_rutin` left join `pengguna` on(`pengguna`.`id_pengguna` = `absensi_rutin`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_catatan`
--
DROP TABLE IF EXISTS `v_catatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_catatan`  AS  select `catatan`.`id_catatan_to_warga` AS `id_catatan_to_warga`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`catatan`.`tanggal` AS `tanggal`,`catatan`.`keterangan` AS `keterangan`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`catatan` left join `pengguna` on(`pengguna`.`id_pengguna` = `catatan`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kegiatan_nonrutin`
--
DROP TABLE IF EXISTS `v_kegiatan_nonrutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kegiatan_nonrutin`  AS  select `kegiatan_nonrutin`.`id_kegiatan_nonrutin` AS `id_kegiatan_nonrutin`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`kegiatan_nonrutin`.`jenis_kegiatan` AS `jenis_kegiatan`,`kegiatan_nonrutin`.`tanggal` AS `tanggal`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`kegiatan_nonrutin` left join `pengguna` on(`pengguna`.`id_pengguna` = `kegiatan_nonrutin`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pelanggaran`
--
DROP TABLE IF EXISTS `v_pelanggaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pelanggaran`  AS  select `pelanggaran`.`id_pelanggaran` AS `id_pelanggaran`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`pelanggaran`.`tanggal` AS `tanggal`,`pelanggaran`.`jenis` AS `jenis`,`pelanggaran`.`alasan` AS `alasan`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`pelanggaran` left join `pengguna` on(`pengguna`.`id_pengguna` = `pelanggaran`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengaduan`
--
DROP TABLE IF EXISTS `v_pengaduan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengaduan`  AS  select `catatan_to_asrama`.`id_catatan_to_asrama` AS `id_catatan_to_asrama`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`catatan_to_asrama`.`tanggal` AS `tanggal`,`catatan_to_asrama`.`catatan_pengelola` AS `catatan_pengelola`,`catatan_to_asrama`.`catatan_pg` AS `catatan_pg`,`catatan_to_asrama`.`catatan_ph` AS `catatan_ph`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`catatan_to_asrama` left join `pengguna` on(`pengguna`.`id_pengguna` = `catatan_to_asrama`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_perizinan`
--
DROP TABLE IF EXISTS `v_perizinan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_perizinan`  AS  select `perizinan`.`id_perizinan` AS `id_perizinan`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`perizinan`.`tgl_izin` AS `tgl_izin`,`perizinan`.`jam_izin` AS `jam_izin`,`perizinan`.`tgl_kembali` AS `tgl_kembali`,`perizinan`.`jam_kembali` AS `jam_kembali`,`perizinan`.`keterangan` AS `keterangan`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`perizinan` left join `pengguna` on(`pengguna`.`id_pengguna` = `perizinan`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_catatan`
--
DROP TABLE IF EXISTS `v_total_catatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_catatan`  AS  select `catatan`.`id_pengguna` AS `id_pengguna`,count(`catatan`.`id_pengguna`) AS `TOTAL` from `catatan` group by `catatan`.`id_pengguna` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_nonrutin`
--
DROP TABLE IF EXISTS `v_total_nonrutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_nonrutin`  AS  select `kegiatan_nonrutin`.`id_pengguna` AS `id_pengguna`,count(`kegiatan_nonrutin`.`id_pengguna`) AS `TOTAL` from `kegiatan_nonrutin` group by `kegiatan_nonrutin`.`id_pengguna` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_pelanggaran`
--
DROP TABLE IF EXISTS `v_total_pelanggaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_pelanggaran`  AS  select `pelanggaran`.`id_pengguna` AS `id_pengguna`,count(`pelanggaran`.`id_pengguna`) AS `TOTAL` from `pelanggaran` group by `pelanggaran`.`id_pengguna` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_rutin`
--
DROP TABLE IF EXISTS `v_total_rutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_rutin`  AS  select `absensi_rutin`.`id_pengguna` AS `id_pengguna`,sum(if(`absensi_rutin`.`subuh` = '0',1,0)) AS `subuh`,sum(if(`absensi_rutin`.`taklim` = '0',1,0)) AS `taklim`,sum(if(`absensi_rutin`.`maghrib` = '0',1,0)) AS `maghrib`,sum(if(`absensi_rutin`.`kajian` = '0',1,0)) AS `kajian`,sum(if(`absensi_rutin`.`isyak` = '0',1,0)) AS `isyak`,sum(if(`absensi_rutin`.`jam_malam` = '0',1,0)) AS `jam_malam`,sum(if(`absensi_rutin`.`qiyamul_lail` = '0',1,0)) AS `qiyamul_lail`,sum(if(`absensi_rutin`.`subuh` = '0',1,0)) + sum(if(`absensi_rutin`.`taklim` = '0',1,0)) + sum(if(`absensi_rutin`.`maghrib` = '0',1,0)) + sum(if(`absensi_rutin`.`kajian` = '0',1,0)) + sum(if(`absensi_rutin`.`isyak` = '0',1,0)) + sum(if(`absensi_rutin`.`jam_malam` = '0',1,0)) + sum(if(`absensi_rutin`.`qiyamul_lail` = '0',1,0)) AS `TOTAL` from `absensi_rutin` group by `absensi_rutin`.`id_pengguna` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_rutin`
--
ALTER TABLE `absensi_rutin`
  ADD PRIMARY KEY (`id_absensi_rutin`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan_to_warga`),
  ADD KEY `id_pengguna` (`id_pengguna`) USING BTREE;

--
-- Indexes for table `catatan_to_asrama`
--
ALTER TABLE `catatan_to_asrama`
  ADD PRIMARY KEY (`id_catatan_to_asrama`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `kegiatan_nonrutin`
--
ALTER TABLE `kegiatan_nonrutin`
  ADD PRIMARY KEY (`id_kegiatan_nonrutin`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`id_pembobotan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id_perizinan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_rutin`
--
ALTER TABLE `absensi_rutin`
  MODIFY `id_absensi_rutin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan_to_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catatan_to_asrama`
--
ALTER TABLE `catatan_to_asrama`
  MODIFY `id_catatan_to_asrama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan_nonrutin`
--
ALTER TABLE `kegiatan_nonrutin`
  MODIFY `id_kegiatan_nonrutin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembobotan`
--
ALTER TABLE `pembobotan`
  MODIFY `id_pembobotan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id_perizinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi_rutin`
--
ALTER TABLE `absensi_rutin`
  ADD CONSTRAINT `rutin_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `catatan_to_asrama`
--
ALTER TABLE `catatan_to_asrama`
  ADD CONSTRAINT `catatan_to_asrama_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `kegiatan_nonrutin`
--
ALTER TABLE `kegiatan_nonrutin`
  ADD CONSTRAINT `nonrutin_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD CONSTRAINT `perizinan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
