-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 08:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran`
--

CREATE TABLE `capaian_pembelajaran` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `capaian` text NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capaian_pembelajaran`
--

INSERT INTO `capaian_pembelajaran` (`id`, `id_rps`, `capaian`, `keterangan`) VALUES
(1, 1, 'Mampu menjelaskan konsep dasar dan komponen dalam teknologi web.', ''),
(2, 1, 'Mampu membuat aplikasi mobile berbasiskan web', ''),
(3, 1, 'Mampu memiliki kompetensi softskill berikut ini', '');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` bigint(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `status`) VALUES
(1982011820081002, 'Husnil Kamil, MT', 1),
(196404091995121001, 'Prof. Surya Afnarius, Ph.D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `kurikulum` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `id_rps`, `kurikulum`, `keterangan`) VALUES
(1, 1, 'Kurikulum 2013', ''),
(2, 2, 'Kurikulum 2014', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`) VALUES
(1311521012, 'Faishal Wafiq Zakiy'),
(1311521032, 'Zikri Khairan');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`, `sks`) VALUES
('TIK301', 'Pemrograman Web', 3),
('TIK308', 'Jaringan Komputer II', 2);

-- --------------------------------------------------------

--
-- Table structure for table `norma_akademik`
--

CREATE TABLE `norma_akademik` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `norma` text NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `norma_akademik`
--

INSERT INTO `norma_akademik` (`id`, `id_rps`, `norma`, `keterangan`) VALUES
(1, 1, 'Norma-norma yang ada\r\n1.\r\n2.\r\n3.\r\n4.\r\n5.', '');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `persentase` decimal(30,0) NOT NULL,
  `jenis` tinyint(4) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `id_rps`, `nama`, `persentase`, `jenis`, `keterangan`) VALUES
(1, 1, 'UTS', '25', 1, ''),
(2, 1, 'UAS', '25', 1, ''),
(3, 1, 'Praktikum', '15', 1, ''),
(4, 1, 'Tugas Besar', '10', 1, ''),
(5, 1, 'Kemampuan mengelola diri', '10', 2, ''),
(6, 1, 'Presentasi', '15', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `referensi` text NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id`, `id_rps`, `referensi`, `keterangan`) VALUES
(1, 1, '- Nicholas\r\n- Mark Pilgrim\r\n- Steve', '');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_pembelajaran`
--

CREATE TABLE `rencana_pembelajaran` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `minggu_ke` varchar(30) NOT NULL,
  `capaian_pembelajaran` varchar(200) NOT NULL,
  `pokok_bahasan` varchar(200) NOT NULL,
  `sub_pokok_bahasan` varchar(200) NOT NULL,
  `metode_pembelajaran` text NOT NULL,
  `yang_dilakukan_mahasiswa` text NOT NULL,
  `yang_dilakukan_dosen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencana_pembelajaran`
--

INSERT INTO `rencana_pembelajaran` (`id`, `id_rps`, `minggu_ke`, `capaian_pembelajaran`, `pokok_bahasan`, `sub_pokok_bahasan`, `metode_pembelajaran`, `yang_dilakukan_mahasiswa`, `yang_dilakukan_dosen`) VALUES
(1, 1, '1', 'Mengetahuiii', 'mbasa', 'askdguadhao8igadbh', 'mhasjdfuaydgasuycfu6wd', 'mengamati dpesadaihdhia', 'mmashsdgahkuagutaiydgasyyg'),
(2, 1, '2', 'sdfs', 'sadadas', '', '', '', ''),
(3, 1, '3', 'zsasa', '', '', '', '', ''),
(4, 1, '4', '', '', '', '', '', ''),
(5, 1, '5', '', '', '', '', '', ''),
(6, 1, '6', '', '', '', '', '', ''),
(7, 1, '7', '', '', '', '', '', ''),
(8, 1, '8', '', '', '', '', '', ''),
(9, 1, '9', '', '', '', '', '', ''),
(10, 1, '10', '', '', '', '', '', ''),
(11, 1, '11', '', '', '', '', '', ''),
(12, 1, '12', '', '', '', '', '', ''),
(13, 1, '13', '', '', '', '', '', ''),
(14, 1, '14', 'sdas', 'asasc', 'cascxz', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rps`
--

CREATE TABLE `rps` (
  `id` int(30) NOT NULL,
  `id_rps` int(30) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `nip_dosen_pengampu` bigint(30) NOT NULL,
  `matkul_prasyarat` varchar(100) NOT NULL,
  `status_matkul` varchar(20) NOT NULL,
  `latar_belakang` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tujuan` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rps`
--

INSERT INTO `rps` (`id`, `id_rps`, `nama_matkul`, `kode_matkul`, `nip_dosen_pengampu`, `matkul_prasyarat`, `status_matkul`, `latar_belakang`, `deskripsi`, `tujuan`, `tahun`, `semester`) VALUES
(1, 1, 'Pemrograman Web', 'TIK301', 1982011820081002, '-', 'Wajib', 'Mata kuliah Pemrograman Web merupakan mata kuliah wajib pada kurikulum Sistem Informasi. Matakuliah ini merupakan mata kuliah yang termasuk dalam kurikulum inti Sistem Informasi', 'Mata kuliah pemrograman web merupakan mata kuliah yang membahas teknologi terkini dalam pengembangan aplikasi web meliputi komponen HTML, CSS, dan Javascipt', 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu membangun aplikasi web untuk mobile application dan menampilkannilai juga aplikasi yang dibuat.', 2014, 4),
(2, 2, 'Bahasa Pemrograman', 'TIK201', 1982011820081002, '-', 'Wajib', 'Mata kuliah Pemrograman Web merupakan mata kuliah wajib pada kurikulum Sistem Informasi. Matakuliah ini merupakan mata kuliah yang termasuk dalam kurikulum inti Sistem Informasi', 'Mata kuliah pemrograman web merupakan mata kuliah yang membahas teknologi terkini dalam pengembangan aplikasi web meliputi komponen HTML, CSS, dan Javascipt', 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu membangun aplikasi web untuk mobile application dan menampilkannilai juga aplikasi yang dibuat.', 2014, 4),
(3, 3, 'Struktur Data', 'TIK101', 196404091995121001, '-', 'Wajib', 'Mata kuliah Pemrograman Web merupakan mata kuliah wajib pada kurikulum Sistem Informasi. Matakuliah ini merupakan mata kuliah yang termasuk dalam kurikulum inti Sistem Informasi', 'Mata kuliah pemrograman web merupakan mata kuliah yang membahas teknologi terkini dalam pengembangan aplikasi web meliputi komponen HTML, CSS, dan Javascipt', 'Setelah mengikuti mata kuliah ini, mahasiswa diharapkan mampu membangun aplikasi web untuk mobile application dan menampilkannilai juga aplikasi yang dibuat.', 2014, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(3) NOT NULL,
  `u_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_paswd` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `role` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_paswd`, `role`) VALUES
(1, '1311521032', '70d70567e6d253e5046d6593652b3d2b', 'Mahasiswa'),
(2, 'faishal', '610411b3fa6d392b21728417512487b0', 'Mahasiswa'),
(3, 'ika', '7965c82127bd8517d2495e8efb12702c', 'Mahasiswa'),
(4, 'ayin', '0a1d9a0ce155ffba2753311fd40e48f1', 'Mahasiswa'),
(5, 'suci', '1cc6545f956f39a79c80b05f65df3c0a', 'Mahasiswa'),
(6, '1982011820081002', '120f9a107fbd2669a5c915b5d064b038', 'Dosen'),
(7, 'darwison', 'de50ca06d0b9caaf6624b517f01cac68', 'Pejabat'),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `norma_akademik`
--
ALTER TABLE `norma_akademik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`);

--
-- Indexes for table `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rps` (`id_rps`),
  ADD KEY `nip_dosen_pengampu` (`nip_dosen_pengampu`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `norma_akademik`
--
ALTER TABLE `norma_akademik`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rps`
--
ALTER TABLE `rps`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD CONSTRAINT `capaian_pembelajaran_ibfk_1` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id_rps`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
