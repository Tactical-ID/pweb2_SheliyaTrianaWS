-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 02:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imunisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int NOT NULL,
  `id_siswa` int NOT NULL,
  `id_sekolah` int NOT NULL,
  `id_vaksin` int NOT NULL,
  `tgl_imunisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `id_siswa`, `id_sekolah`, `id_vaksin`, `tgl_imunisasi`) VALUES
(7, 3, 4, 1, '2023-11-27'),
(11, 3, 4, 2, '2023-11-02'),
(12, 9, 6, 1, '2023-11-22'),
(13, 4, 4, 1, '2023-11-30'),
(14, 11, 4, 1, '2023-11-30'),
(15, 6, 4, 2, '2023-11-30'),
(16, 6, 4, 1, '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `url_imunisasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `username`, `url`, `url_imunisasi`) VALUES
(3, 'SD Aisyiyah Plus 01 Cilacap', 'Jl. Kol. Sugiyono No. 67', 'sd_aisyiyahplus01', 'sd_aisyiyah.php', 'rekap_imunisasi_sd_aisyiyah.php'),
(4, 'SDN Cilacap 03', 'Jl. Veteran No.06 Cilacap', 'sdn_cilacap03', 'sdn_cilacap03.php', 'rekap_imunisasi_sdn_cilacap03.php'),
(6, 'SDN Cilacap 08', 'Jl. Kol. Sugiyono No. 67', 'sdn_cilacap08', 'sdn_cilacap08.php', 'rekap_imunisasi_sdn_cilacap08.php'),
(10, 'SDN Sidakaya 06', 'Jl. Cempaka', NULL, NULL, NULL),
(21, 'sky6', 'aln', NULL, NULL, NULL),
(29, 'sekolah kita', 'jljojmmm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int NOT NULL,
  `nis` int NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `id_sekolah` int NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `jk`, `ttl`, `alamat`, `nama_ortu`, `id_sekolah`, `username`) VALUES
(3, 23000001, 'Isna Dewi ', 'Perempuan', 'Cilacap, 8 oktober 2012', 'Jl. Kakap', 'Yat0', 4, 'isnadewi'),
(5, 230003, 'Fiza', 'Perempuan', 'Cilacap, 1 januari 2012', 'Jl. Mahkota', 'Sumini', 6, 'fiza'),
(6, 23000004, 'Ajie', 'Laki-laki', 'Korea, 17 Mei 2010', 'Jl. Pasir Besi', 'Putro', 4, 'ajie'),
(8, 23000005, 'Tatung', 'Laki-laki', 'Jepun, 2 Februari 2012', 'Jl. Jawa', 'Toto', 4, 'tatung'),
(9, 2300006, 'Yunie', 'Perempuan', 'Jepang, 3 Januari 2012', 'Kebumen', 'Yono', 6, 'yunie'),
(10, 22, 'Sino', 'Laki-laki', 'Sakti, 1 Januari 2023', 'Jl. Lumba lumba', 'Sono', 6, 'sino');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'petugas1', 'petugas1', 'admin'),
(2, 'sekolah1', 'sekolah1', 'sekolah'),
(3, 'siswa1', 'siswa1', 'siswa'),
(4, 'petugas2', 'petugas2', 'admin'),
(5, 'seliyoy', 'seliyoy', 'siswa'),
(8, 'sd_aisyiyahplus01', 'sd_aisyiyahplus01', 'sekolah'),
(9, 'sdn_cilacap03', 'sdn_cilacap03', 'sekolah'),
(12, 'popi', 'popi', 'siswa'),
(13, 'isnadewi', 'isnadewi', 'siswa'),
(14, 'indahkurnia', 'indahkurnia', 'siswa'),
(15, 'fiza', 'fiza', 'siswa'),
(16, 'ajie', 'ajie', 'siswa'),
(17, 'sdn_cilacap08', 'sdn_cilacap08', 'sekolah'),
(18, 'moja', 'moja', 'siswa'),
(19, 'tatung', 'tatung', 'siswa'),
(20, 'yunie', 'yunie', 'siswa'),
(21, 'sino', 'sino', 'siswa'),
(22, 'mauza', 'mauza', 'siswa'),
(24, 'Sheliya Triana', 'Sheliya Triana', 'siswa'),
(25, 'seliiiii', 'seli', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int NOT NULL,
  `jenis_vaksin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `jenis_vaksin`) VALUES
(1, 'Campak'),
(2, 'Difteri Tetanus (DT)'),
(6, 'Human Papiloma Virus (HPV)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
