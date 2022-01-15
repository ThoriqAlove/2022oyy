-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2022 pada 02.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `13_mywebsite_12rpl2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nis` varchar(10) COLLATE macce_bin NOT NULL,
  `nama` varchar(20) COLLATE macce_bin NOT NULL,
  `kelas` varchar(20) COLLATE macce_bin NOT NULL,
  `jurusan` varchar(20) COLLATE macce_bin NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` int(13) NOT NULL,
  `alamat` text COLLATE macce_bin NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE macce_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=macce COLLATE=macce_bin;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nis`, `nama`, `kelas`, `jurusan`, `tgl_lahir`, `no_telepon`, `alamat`, `jenis_kelamin`) VALUES
(1142, '0123', 'waone', 'XI', 'TKR', '2021-11-14', 2147483647, 'bekuttttuj', 'P'),
(1149, 'ghghhh', 'hhhhh', 'XII', 'TAV', '2021-11-11', 0, 'hhh', 'L'),
(1165, '23414', 'sdfsdaf', 'X', 'TKR', '2021-11-04', 3523523, 'sdgasdga', 'P'),
(1166, '04204', 'uuuuuuu', 'XII', 'RPL', '2021-11-18', 2147483647, 'cgvfdgv', 'L'),
(1167, '465454', 'SDGSG', 'X', 'RPL', '2021-11-05', 78777898, 'SDGSGTSD', 'P'),
(1168, '2315361', 'SDFDSFSDE', 'XII', 'TKR', '2021-11-13', 21546475, 'FSDXFEST', 'P'),
(1169, '0662235', 'Iwan Wawansah', 'XII', 'RPL', '2021-11-27', 2147483647, 'Bekasi Griya ', 'L'),
(1173, '66256', 'Wawan ....', 'XII', 'TAV', '2021-11-27', 628123225, 'Bekasi fgsee', 'L'),
(1174, '45454', 'fyhghuj', 'XI', 'TKR', '2022-01-14', 7, '87', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('qwer', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
