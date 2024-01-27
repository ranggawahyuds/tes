-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2024 pada 14.32
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `nim` varchar(24) NOT NULL,
  `anggota_kelompok` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `program_studi` varchar(128) NOT NULL,
  `universitas` varchar(128) NOT NULL,
  `lama_magang` varchar(10) NOT NULL,
  `status` varchar(123) NOT NULL,
  `surat` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `mulai_magang` date DEFAULT NULL,
  `selesai_magang` date DEFAULT NULL,
  `createDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_user`, `nama_lengkap`, `nim`, `anggota_kelompok`, `no_hp`, `program_studi`, `universitas`, `lama_magang`, `status`, `surat`, `keterangan`, `mulai_magang`, `selesai_magang`, `createDate`, `updateDate`) VALUES
(34, 10, 'rangga wahyu firnanda', 'C1021221045', '3 orang', '08797892', 'Sistem Informasi', 'BSI Pontianak', '3 bulan', 'pending', 'SURAT_PERNYATAAN_MENTOR_PKL1.pdf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-01-01', '2024-01-02', '2024-01-02 21:19:53', '2024-01-27 15:19:14'),
(44, 10, 's', '123123', '', '08797892', 'Sistem Informasi', 'asd12', '3 bulan', 'pending', '11753-33952-1-PB10.pdf', '', NULL, NULL, '2024-01-17 19:00:58', '2024-01-17 21:25:48'),
(45, 11, 'fikri', 'C1021221045', '', '08797892', 'Sistem Informasi', 'BSI Pontianak', '3 bulan', 'pending', 'SURAT_PERNYATAAN_MENTOR_PKL1.pdf', 'malas', '2024-01-01', '2024-01-02', '2024-01-02 21:19:53', '2024-01-17 19:02:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `nisn` varchar(24) NOT NULL,
  `anggota_kelompok` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `sekolah` varchar(128) NOT NULL,
  `lama_magang` varchar(10) NOT NULL,
  `status` varchar(123) NOT NULL,
  `surat` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `mulai_magang` date DEFAULT NULL,
  `selesai_magang` date DEFAULT NULL,
  `createDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `id_user`, `nama_lengkap`, `nisn`, `anggota_kelompok`, `no_hp`, `jurusan`, `sekolah`, `lama_magang`, `status`, `surat`, `keterangan`, `mulai_magang`, `selesai_magang`, `createDate`, `updateDate`) VALUES
(22, 9, 'rangga Wahyuds', '00405986011', '0', '08797892', 'Pertanian', 'SMK N 1 Pontianak', '3 bulan', 'selesai', 'Pertemuan_22.pdf', '', '2024-01-03', '2024-01-04', '2024-01-02 13:49:30', '2024-01-25 14:08:00'),
(24, 9, 'rangga Wahyuds', '0040598601', '0', '08797892', 'Pertanian', 'SMK N 1 Pontianak', '3 Bulan', 'pending', '11753-33952-1-PB12.pdf', '', NULL, NULL, '2024-01-25 14:07:44', '2024-01-25 14:07:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `photo`, `createDate`, `updateDate`) VALUES
(1, 'admin', 'admin', '$2y$10$cU2J0BkNPsjK8lr8yfYyt.Ya2ivX98rG6VyI5pmfiEHtW.oZjALwO', 'admin', NULL, '2024-01-01 01:10:37', '2024-01-17 12:03:21'),
(9, 'rangga Wahyuds', 'parhan', '$2y$10$jGpkRLZHY2GQI.HYWgDIg.JHT.iQxvwWi5jI0hV0W9HvNUxDEuSG2', 'Siswa', 'IMG_20211126_131750.jpg', '2023-12-17 23:04:22', '2024-01-03 01:01:00'),
(10, 'ajih', 'aji', '$2y$10$clYXcFffyzPakJamdX79cuktoErxwYNJj8UlMaS6ggCuQvyI90Go.', 'Mahasiswa', 'photo_2021-11-23_12-44-00.png', '2023-12-17 23:41:41', '2024-01-17 12:04:09'),
(11, 'fikri', 'fikri123', '$2y$10$clYXcFffyzPakJamdX79cuktoErxwYNJj8UlMaS6ggCuQvyI90Go.', 'Mahasiswa', 'photo_2021-11-23_12-44-00.png', '2023-12-17 23:41:41', '2024-01-17 12:04:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_mahasiswa_user` (`id_user`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_siswa_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `fk_mahasiswa_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
ADD CONSTRAINT `fk_siswa_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
