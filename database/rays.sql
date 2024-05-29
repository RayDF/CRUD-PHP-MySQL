-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2022 pada 05.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rays`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_catatan`
--

CREATE TABLE `tb_catatan` (
  `id_catatan` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `id_userc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_catatan`
--

INSERT INTO `tb_catatan` (`id_catatan`, `tanggal`, `jam`, `lokasi`, `suhu`, `id_userc`) VALUES
(12, '2022-04-20', '12:20:00', 'Tembarak', '36', 9),
(20, '2022-04-20', '01:51:00', 'Temanggung', '37', 9),
(22, '2022-04-21', '08:26:00', 'Temanggung', '38', 0),
(23, '2022-04-21', '08:27:00', 'Semarang', '37', 9),
(24, '2022-04-21', '08:29:00', 'Temanggung', '36', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `nik`, `nama_lengkap`, `role_id`) VALUES
(3, 'admin', '12345', '004', 'Administrator', 1),
(9, 'radenmas', '2003', '', 'Raya Dinhaqi Farid', 2),
(12, 'RK', '2345', '123456789', 'Ridwan Kamil', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_catatan`
--
ALTER TABLE `tb_catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_catatan`
--
ALTER TABLE `tb_catatan`
  MODIFY `id_catatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
