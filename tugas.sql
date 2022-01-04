-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 06:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `date_updated`) VALUES
(1, 'Akademik', 'Berisi Keterangan untuk Akademik', '2021-12-18 13:20:30'),
(2, 'Programming', 'Berisi Keterangan untuk Programming', '2021-12-18 13:20:30'),
(3, 'Non-Akademik', 'Berisi Keterangan untuk Non-Akademik', '2021-12-18 13:20:30'),
(4, 'Basis Data', 'Berisi Keterangan untuk Basis Data', '2021-12-18 13:20:30'),
(5, 'Pengelolaan Data Umum', 'Berisi Keterangan untuk Pengeloaan Data Umum', '2021-12-18 13:20:30'),
(6, 'Bimbingan Skripsi', 'Berisi Keterangan untuk Bimbingan Skripsi', '2021-12-18 13:21:55'),
(7, 'Prestasi Coder', 'Berisi untuk Para Coder Berprestasi', '2021-12-18 13:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `topic_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic_id`, `user_id`, `comment`, `date_created`, `date_updated`) VALUES
(1, 1, 1, 'Silahkan diperbarui kembali definisinya.', '2021-12-28 10:40:15', '2021-12-28 10:40:18'),
(2, 1, 3, 'Baik, akan saya perbarui', '2021-12-28 10:45:03', '2021-12-28 10:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dos` int(11) NOT NULL,
  `nip_dos` varchar(255) NOT NULL,
  `nama_dos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dos`, `nip_dos`, `nama_dos`) VALUES
(1, '421000001', 'Syauqie Muhammad, S.Kom., M.Kom'),
(2, '421000002', 'Pipit Febriana Dewi, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_bimbingan`
--

CREATE TABLE `formulir_bimbingan` (
  `id_formulir` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `semester` int(2) NOT NULL,
  `judul_bimbingan` text NOT NULL,
  `nama_dosen` varchar(35) NOT NULL,
  `status_formulir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulir_bimbingan`
--

INSERT INTO `formulir_bimbingan` (`id_formulir`, `nim`, `nama_mahasiswa`, `semester`, `judul_bimbingan`, `nama_dosen`, `status_formulir`) VALUES
(1, 210003, 'Angga Saputra', 3, 'web', 'Syauqie Muhammad, S.Kom., M.Kom', 'Ajukan'),
(2, 210005, 'Nimas Ristiya Rahma', 3, 'Pemrograman Web', 'Pipit Febriana Dewi, M.Kom', 'Ajukan');

-- --------------------------------------------------------

--
-- Table structure for table `forum_views`
--

CREATE TABLE `forum_views` (
  `id` int(30) NOT NULL,
  `topic_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_views`
--

INSERT INTO `forum_views` (`id`, `topic_id`, `user_id`) VALUES
(1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(100) NOT NULL,
  `nim` int(100) NOT NULL,
  `waktu_mulai` date NOT NULL,
  `waktu_selesai` date NOT NULL,
  `status_jadwal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nim`, `waktu_mulai`, `waktu_selesai`, `status_jadwal`) VALUES
(1, 210003, '2022-01-02', '2022-01-04', 'Ajukan'),
(2, 210004, '2022-01-02', '2022-01-03', 'Mulai'),
(3, 210005, '2022-01-02', '2022-01-04', 'Sedang Berlangsung'),
(4, 210006, '2022-01-02', '2022-01-04', 'Selesai'),
(5, 210003, '0000-00-00', '0000-00-00', 'Ajukan');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(255) NOT NULL,
  `nim` int(255) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `nama_dos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama_mhs`, `prodi`, `nama_dos`) VALUES
(1, 210001, 'Ivan Ganteng', 'Informatika', 'Syauqie Muhammad, S.Kom., M.Kom'),
(2, 210002, 'Alex Agustin ', 'Informatika', 'Pipit Febriana Dewi, M.Kom'),
(3, 210003, 'Nimas Ristya', 'Informatika', 'Syauqie Muhammad, S.Kom., M.Kom'),
(4, 210004, 'Alesandro Dejon M', 'Informatika', 'Pipit Febriana Dewi, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(30) NOT NULL,
  `comment_id` int(30) NOT NULL,
  `reply` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(30) NOT NULL,
  `category_ids` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_ids`, `title`, `content`, `user_id`, `date_created`) VALUES
(1, '4,5,2', 'Pengembangan Web', 'Pengembangan web adalah istilah yang luas untuk pekerjaan yang terlibat dalam mengembangkan suatu situs web untuk internet atau intranet. Wikipedia', 1, '2021-12-28 10:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `nim` int(255) DEFAULT NULL,
  `name` text NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `IDJurusanUser` bigint(20) NOT NULL,
  `IDKonsentrasiUser` bigint(20) NOT NULL,
  `NoHP` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Foto` varchar(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Dosen, 3= Mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `name`, `prodi`, `IDJurusanUser`, `IDKonsentrasiUser`, `NoHP`, `Email`, `Foto`, `username`, `password`, `type`) VALUES
(1, 201111111, 'Administrator', 'Informatika', 101, 202, '088763542665', 'admin@gmail.com', '', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(2, 201111101, 'Dejon', 'Informatika', 101, 202, '085298764536', 'dejon@gmail.com', '', 'dejon', '1253208465b1efa876f982d8a9e73eef', 2),
(3, 201111102, 'Nimas', 'Informatika', 101, 202, '088758398337', 'nimas@gmaill.com', '', 'nimas', '365ef4dbc7ed3caa72eeb8ae9c87ccb0', 2),
(4, 201111103, 'M. Zaki', 'Informatika', 101, 202, '088763562763', 'zaki@gmail.com', '', 'zaki', 'bd860b55c2d4dc908b35931f398fbc99', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dos`);

--
-- Indexes for table `formulir_bimbingan`
--
ALTER TABLE `formulir_bimbingan`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `forum_views`
--
ALTER TABLE `forum_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formulir_bimbingan`
--
ALTER TABLE `formulir_bimbingan`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum_views`
--
ALTER TABLE `forum_views`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
