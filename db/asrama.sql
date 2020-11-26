-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 05.59
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

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
-- Struktur dari tabel `absensi_rutin`
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
-- Dumping data untuk tabel `absensi_rutin`
--

INSERT INTO `absensi_rutin` (`id_absensi_rutin`, `id_pengguna`, `tanggal`, `qiyamul_lail`, `subuh`, `taklim`, `maghrib`, `kajian`, `isyak`, `jam_malam`) VALUES
(4, 3, '2020-11-24', 0, 0, 1, 0, 1, 1, 0),
(5, 3, '2020-11-24', 0, 0, 0, 1, 1, 1, 0),
(6, 5, '2020-11-10', 0, 0, 1, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan_to_warga` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id_catatan_to_warga`, `id_pengguna`, `tanggal`, `keterangan`) VALUES
(2, 3, '2020-10-28', 'jarang ngaji'),
(3, 3, '2020-10-26', 'jarang setor hafalan'),
(4, 6, '2020-10-21', 'Memiliki masalah dengan Teman Sekamar'),
(5, 8, '2020-11-25', 'n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_to_asrama`
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
-- Dumping data untuk tabel `catatan_to_asrama`
--

INSERT INTO `catatan_to_asrama` (`id_catatan_to_asrama`, `id_pengguna`, `tanggal`, `catatan_pengelola`, `catatan_pg`, `catatan_ph`) VALUES
(3, 3, '2020-10-13', '-', 'agak sedikit galak', 'kurang membaur dengan warga'),
(4, 6, '2020-10-23', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_nonrutin`
--

CREATE TABLE `kegiatan_nonrutin` (
  `id_kegiatan_nonrutin` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kegiatan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan_nonrutin`
--

INSERT INTO `kegiatan_nonrutin` (`id_kegiatan_nonrutin`, `id_pengguna`, `tanggal`, `jenis_kegiatan`) VALUES
(1, 3, '2020-10-28', 7),
(3, 3, '2020-10-26', 5),
(4, 5, '2020-10-20', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` int(1) NOT NULL,
  `alasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `id_pengguna`, `tanggal`, `jenis`, `alasan`) VALUES
(1, 3, '2020-10-29', 0, 'Tidak Izin'),
(2, 5, '2020-10-06', 0, 'Tidak Izin '),
(3, 3, '2020-11-24', 1, 'Locat pagar'),
(4, 6, '2020-11-13', 0, 'tidak solat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembobotan`
--

CREATE TABLE `pembobotan` (
  `id_pembobotan` int(11) NOT NULL,
  `rutin` decimal(5,2) NOT NULL,
  `non_rutin` decimal(5,2) NOT NULL,
  `pelanggaran` decimal(5,2) NOT NULL,
  `catatan` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembobotan`
--

INSERT INTO `pembobotan` (`id_pembobotan`, `rutin`, `non_rutin`, `pelanggaran`, `catatan`) VALUES
(3, '0.15', '0.40', '0.25', '0.20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
  `penanggung_jawab` int(11) DEFAULT NULL,
  `id_pembobotan` int(11) DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `rule`, `jenis_kelamin`, `jurusan`, `gedung`, `kamar`, `no_hp`, `alamat`, `hapus`, `penanggung_jawab`, `id_pembobotan`) VALUES
(1, 'ainur inas annisa', '827ccb0eea8a706c4c34a16891f84e7b', 0, '0', 'teknik informatika', 'A', 'A23', '08233123123', 'pejagan', 0, NULL, 3),
(2, 'moh nikmat', '827ccb0eea8a706c4c34a16891f84e7b', 0, '1', 'teknik informatika', 'B', 'B31', '231231231', 'socah', 1, NULL, 3),
(3, 'nur hayati', '827ccb0eea8a706c4c34a16891f84e7b', 1, '0', 'teknik industri', 'A', 'A32', '123456789', 'tanjung bumi', 0, NULL, 3),
(4, 'romy', '1ff70a20b5bf17ac9bea662c19c2fa42', 2, '1', 'sastra inggris', 'B', 'B34', '123455124', 'bancaran', 0, 3, 3),
(5, 'nina', '827ccb0eea8a706c4c34a16891f84e7b', 2, '0', 'teknik mesin', 'A', 'A44', '12345', 'jombang', 0, 3, 3),
(6, 'halisa nabila', '827ccb0eea8a706c4c34a16891f84e7b', 2, '0', 'PBSI', 'A', 'A22', '123123', 'terst', 0, 3, 3),
(8, 'irmawati', '827ccb0eea8a706c4c34a16891f84e7b', 2, '0', 'psikologi', 'A', '304', '1', 'tanjungbumi', 0, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `keputusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perizinan`
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
-- Dumping data untuk tabel `perizinan`
--

INSERT INTO `perizinan` (`id_perizinan`, `id_pengguna`, `tgl_izin`, `jam_izin`, `tgl_kembali`, `jam_kembali`, `keterangan`) VALUES
(1, 3, '2020-10-14', '13:00:00', '2020-10-21', '20:00:00', 'praktikum'),
(2, 5, '2020-10-30', '13:00:00', '2020-10-19', '15:00:00', 'Pulang'),
(3, 6, '2020-11-05', '11:45:00', '2020-11-14', '15:42:00', 'dhg');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_absensi_rutin`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `v_analisa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_analisa` (
`id_pengguna` int(11)
,`username` varchar(255)
,`jurusan` varchar(100)
,`rule` int(2)
,`K1_bobot` decimal(5,2)
,`K2_bobot` decimal(5,2)
,`K3_bobot` decimal(5,2)
,`K4_bobot` decimal(5,2)
,`K1_jumlah` bigint(21)
,`K2_jumlah` bigint(21)
,`K3_jumlah` decimal(28,0)
,`K4_jumlah` bigint(21)
,`K1_utility` decimal(25,4)
,`K2_utility` decimal(25,4)
,`K3_utility` decimal(33,4)
,`K4_utility` decimal(25,4)
,`skor` decimal(40,6)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_catatan`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `v_kegiatan_nonrutin`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `v_pelanggaran`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `v_pengaduan`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `v_perizinan`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Stand-in struktur untuk tampilan `v_total_catatan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_total_catatan` (
`id_pengguna` int(11)
,`TOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_total_nonrutin`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_total_nonrutin` (
`id_pengguna` int(11)
,`TOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_total_pelanggaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_total_pelanggaran` (
`id_pengguna` int(11)
,`TOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_total_rutin`
-- (Lihat di bawah untuk tampilan aktual)
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
-- Struktur untuk view `v_absensi_rutin`
--
DROP TABLE IF EXISTS `v_absensi_rutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_absensi_rutin`  AS  select `absensi_rutin`.`id_absensi_rutin` AS `id_absensi_rutin`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`absensi_rutin`.`qiyamul_lail` AS `qiyamul_lail`,`absensi_rutin`.`subuh` AS `subuh`,`absensi_rutin`.`taklim` AS `taklim`,`absensi_rutin`.`maghrib` AS `maghrib`,`absensi_rutin`.`isyak` AS `isyak`,`absensi_rutin`.`jam_malam` AS `jam_malam`,`absensi_rutin`.`tanggal` AS `tanggal`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`absensi_rutin` left join `pengguna` on(`pengguna`.`id_pengguna` = `absensi_rutin`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_analisa`
--
DROP TABLE IF EXISTS `v_analisa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_analisa`  AS  select `pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pembobotan`.`catatan` AS `K1_bobot`,`pembobotan`.`pelanggaran` AS `K2_bobot`,`pembobotan`.`rutin` AS `K3_bobot`,`pembobotan`.`non_rutin` AS `K4_bobot`,`k1`.`TOTAL` AS `K1_jumlah`,`k2`.`TOTAL` AS `K2_jumlah`,`k3`.`TOTAL` AS `K3_jumlah`,`k4`.`TOTAL` AS `K4_jumlah`,(`k1`.`TOTAL` - 1) / (3 - 1) AS `K1_utility`,(`k2`.`TOTAL` - 1) / (3 - 1) AS `K2_utility`,(`k3`.`TOTAL` - 1) / (3 - 1) AS `K3_utility`,(`k4`.`TOTAL` - 1) / (3 - 1) AS `K4_utility`,(`k1`.`TOTAL` - 1) / (3 - 1) * `pembobotan`.`catatan` + (`k2`.`TOTAL` - 1) / (3 - 1) * `pembobotan`.`pelanggaran` + (`k3`.`TOTAL` - 1) / (3 - 1) * `pembobotan`.`rutin` + (`k4`.`TOTAL` - 1) / (3 - 1) * `pembobotan`.`non_rutin` AS `skor` from (((((`pengguna` join `v_total_rutin` `k3` on(`k3`.`id_pengguna` = `pengguna`.`id_pengguna`)) join `v_total_pelanggaran` `k2` on(`k2`.`id_pengguna` = `pengguna`.`id_pengguna`)) join `v_total_nonrutin` `k4` on(`k4`.`id_pengguna` = `pengguna`.`id_pengguna`)) join `v_total_catatan` `k1` on(`k1`.`id_pengguna` = `pengguna`.`id_pengguna`)) left join `pembobotan` on(`pembobotan`.`id_pembobotan` = `pengguna`.`id_pembobotan`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_catatan`
--
DROP TABLE IF EXISTS `v_catatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_catatan`  AS  select `catatan`.`id_catatan_to_warga` AS `id_catatan_to_warga`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`catatan`.`tanggal` AS `tanggal`,`catatan`.`keterangan` AS `keterangan`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`catatan` left join `pengguna` on(`pengguna`.`id_pengguna` = `catatan`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_kegiatan_nonrutin`
--
DROP TABLE IF EXISTS `v_kegiatan_nonrutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kegiatan_nonrutin`  AS  select `kegiatan_nonrutin`.`id_kegiatan_nonrutin` AS `id_kegiatan_nonrutin`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`kegiatan_nonrutin`.`jenis_kegiatan` AS `jenis_kegiatan`,`kegiatan_nonrutin`.`tanggal` AS `tanggal`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`kegiatan_nonrutin` left join `pengguna` on(`pengguna`.`id_pengguna` = `kegiatan_nonrutin`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pelanggaran`
--
DROP TABLE IF EXISTS `v_pelanggaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pelanggaran`  AS  select `pelanggaran`.`id_pelanggaran` AS `id_pelanggaran`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`pelanggaran`.`tanggal` AS `tanggal`,`pelanggaran`.`jenis` AS `jenis`,`pelanggaran`.`alasan` AS `alasan`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`pelanggaran` left join `pengguna` on(`pengguna`.`id_pengguna` = `pelanggaran`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pengaduan`
--
DROP TABLE IF EXISTS `v_pengaduan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengaduan`  AS  select `catatan_to_asrama`.`id_catatan_to_asrama` AS `id_catatan_to_asrama`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`catatan_to_asrama`.`tanggal` AS `tanggal`,`catatan_to_asrama`.`catatan_pengelola` AS `catatan_pengelola`,`catatan_to_asrama`.`catatan_pg` AS `catatan_pg`,`catatan_to_asrama`.`catatan_ph` AS `catatan_ph`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`catatan_to_asrama` left join `pengguna` on(`pengguna`.`id_pengguna` = `catatan_to_asrama`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_perizinan`
--
DROP TABLE IF EXISTS `v_perizinan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_perizinan`  AS  select `perizinan`.`id_perizinan` AS `id_perizinan`,`pengguna`.`id_pengguna` AS `id_pengguna`,`pengguna`.`username` AS `username`,`pengguna`.`jurusan` AS `jurusan`,`pengguna`.`rule` AS `rule`,`pengguna`.`gedung` AS `gedung`,`perizinan`.`tgl_izin` AS `tgl_izin`,`perizinan`.`jam_izin` AS `jam_izin`,`perizinan`.`tgl_kembali` AS `tgl_kembali`,`perizinan`.`jam_kembali` AS `jam_kembali`,`perizinan`.`keterangan` AS `keterangan`,`pengguna`.`penanggung_jawab` AS `penanggung_jawab` from (`perizinan` left join `pengguna` on(`pengguna`.`id_pengguna` = `perizinan`.`id_pengguna`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_total_catatan`
--
DROP TABLE IF EXISTS `v_total_catatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_catatan`  AS  select `catatan`.`id_pengguna` AS `id_pengguna`,count(`catatan`.`id_pengguna`) AS `TOTAL` from `catatan` group by `catatan`.`id_pengguna` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_total_nonrutin`
--
DROP TABLE IF EXISTS `v_total_nonrutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_nonrutin`  AS  select `kegiatan_nonrutin`.`id_pengguna` AS `id_pengguna`,count(`kegiatan_nonrutin`.`id_pengguna`) AS `TOTAL` from `kegiatan_nonrutin` group by `kegiatan_nonrutin`.`id_pengguna` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_total_pelanggaran`
--
DROP TABLE IF EXISTS `v_total_pelanggaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_pelanggaran`  AS  select `pelanggaran`.`id_pengguna` AS `id_pengguna`,count(`pelanggaran`.`id_pengguna`) AS `TOTAL` from `pelanggaran` group by `pelanggaran`.`id_pengguna` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_total_rutin`
--
DROP TABLE IF EXISTS `v_total_rutin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_rutin`  AS  select `absensi_rutin`.`id_pengguna` AS `id_pengguna`,sum(if(`absensi_rutin`.`subuh` = '0',1,0)) AS `subuh`,sum(if(`absensi_rutin`.`taklim` = '0',1,0)) AS `taklim`,sum(if(`absensi_rutin`.`maghrib` = '0',1,0)) AS `maghrib`,sum(if(`absensi_rutin`.`kajian` = '0',1,0)) AS `kajian`,sum(if(`absensi_rutin`.`isyak` = '0',1,0)) AS `isyak`,sum(if(`absensi_rutin`.`jam_malam` = '0',1,0)) AS `jam_malam`,sum(if(`absensi_rutin`.`qiyamul_lail` = '0',1,0)) AS `qiyamul_lail`,sum(if(`absensi_rutin`.`subuh` = '0',1,0)) + sum(if(`absensi_rutin`.`taklim` = '0',1,0)) + sum(if(`absensi_rutin`.`maghrib` = '0',1,0)) + sum(if(`absensi_rutin`.`kajian` = '0',1,0)) + sum(if(`absensi_rutin`.`isyak` = '0',1,0)) + sum(if(`absensi_rutin`.`jam_malam` = '0',1,0)) + sum(if(`absensi_rutin`.`qiyamul_lail` = '0',1,0)) AS `TOTAL` from `absensi_rutin` group by `absensi_rutin`.`id_pengguna` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi_rutin`
--
ALTER TABLE `absensi_rutin`
  ADD PRIMARY KEY (`id_absensi_rutin`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan_to_warga`),
  ADD KEY `id_pengguna` (`id_pengguna`) USING BTREE;

--
-- Indeks untuk tabel `catatan_to_asrama`
--
ALTER TABLE `catatan_to_asrama`
  ADD PRIMARY KEY (`id_catatan_to_asrama`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `kegiatan_nonrutin`
--
ALTER TABLE `kegiatan_nonrutin`
  ADD PRIMARY KEY (`id_kegiatan_nonrutin`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`id_pembobotan`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_pembobotan` (`id_pembobotan`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id_perizinan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi_rutin`
--
ALTER TABLE `absensi_rutin`
  MODIFY `id_absensi_rutin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan_to_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `catatan_to_asrama`
--
ALTER TABLE `catatan_to_asrama`
  MODIFY `id_catatan_to_asrama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatan_nonrutin`
--
ALTER TABLE `kegiatan_nonrutin`
  MODIFY `id_kegiatan_nonrutin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembobotan`
--
ALTER TABLE `pembobotan`
  MODIFY `id_pembobotan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id_perizinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi_rutin`
--
ALTER TABLE `absensi_rutin`
  ADD CONSTRAINT `rutin_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `catatan_to_asrama`
--
ALTER TABLE `catatan_to_asrama`
  ADD CONSTRAINT `catatan_to_asrama_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `kegiatan_nonrutin`
--
ALTER TABLE `kegiatan_nonrutin`
  ADD CONSTRAINT `nonrutin_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_pembobotan`) REFERENCES `pembobotan` (`id_pembobotan`);

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  ADD CONSTRAINT `perizinan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
