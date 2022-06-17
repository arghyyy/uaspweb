-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2022 pada 08.34
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

use uas202410103031;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaspweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(200) NOT NULL,
  `jumlah_terjual` VARCHAR(200) NOT NULL
  `id_jenis` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`


INSERT INTO `mobil` (`id`, `nama`, `jumlah_terjual`,`id_jenis`) VALUES
(1, 'toyota avanza', 100000,1),
(2, 'toyota raize', 250000,2),
(3, 'Mitsubishi pajero', 375000, 3),
(4, 'Honda Civic', 20000, 4),
(5, 'Honda CRV', 500000, 5),
(6, 'daihatsu rocky', 600000, 6),
(7, 'daihatsu sirion', 650000, 7),
(8, 'toyota rush', 700000, 8),
(9, 'Honda Brio', 900000, 9),
(10, 'Mazda 2', 850000, 10),
(11, 'mazda 3', 900000, 11),
(12, 'wuling cortez', 1000000, 12),


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

-- 
-- struktur untuk tabel  `jenis`
--

CREATE TABLE `jenis` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `jenis` VARCHAR(200) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`) VALUES
(1, 'MPV'),
(2, 'SUV'),
(3, 'SUV'),
(4, 'Sedan'),
(5, 'SUV'),
(6, 'SUV'),
(7, 'hatchback'),
(8, 'SUV'),
(9, 'hatchback'),
(10, 'hatchback'),
(11, 'hatchback'),
(12, 'MPV'),


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD FOREIGN KEY (`jenis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
