-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 10.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slt_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adm`
--

CREATE TABLE `adm` (
  `admid` int(11) NOT NULL,
  `minume` varchar(12) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adm`
--

INSERT INTO `adm` (`admid`, `minume`, `pwd`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id_comp` int(11) NOT NULL,
  `tgl` datetime DEFAULT NULL,
  `comp_limit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id_comp`, `tgl`, `comp_limit`) VALUES
(1, '2022-06-10 16:14:41', '10000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uvc`
--

CREATE TABLE `uvc` (
  `usid` int(11) NOT NULL,
  `unme` varchar(12) NOT NULL,
  `vpwd` varchar(6) NOT NULL,
  `vid` int(1) NOT NULL,
  `prize` int(12) NOT NULL,
  `min` int(12) NOT NULL,
  `max` int(12) NOT NULL,
  `ucreate` datetime DEFAULT NULL,
  `ply` datetime DEFAULT NULL,
  `stats` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uvc`
--

INSERT INTO `uvc` (`usid`, `unme`, `vpwd`, `vid`, `prize`, `min`, `max`, `ucreate`, `ply`, `stats`) VALUES
(1, 'salah11', 'DkXWD3', 3, 300000, 300000, 300000, '2022-06-11 02:58:45', '2022-06-11 03:06:45', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`admid`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indeks untuk tabel `uvc`
--
ALTER TABLE `uvc`
  ADD PRIMARY KEY (`usid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adm`
--
ALTER TABLE `adm`
  MODIFY `admid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `uvc`
--
ALTER TABLE `uvc`
  MODIFY `usid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
