-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 06.23
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendscrud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `type_user` enum('admin','member','','') NOT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama_lengkap`, `username`, `password`, `telp`, `alamat`, `type_user`, `lastlogin`) VALUES
(10, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', 813862343, 'Jl.KOMP', 'admin', NULL),
(11, 'Pekorine', 'Pekorine1337', '202cb962ac59075b964b07152d234b70', 813862343, 'Jl.KOMP', 'member', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `size` varchar(5) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `namabarang`, `gambar`, `size`, `stock`, `harga`, `deskripsi`) VALUES
(16, 'Trends.co - Sadness', '.jpg', 'L', 55, 75000, 'T-Shirt Trends.co saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Dibuat dengan bahan cotton yang nyaman untuk menemani harimu dan memiliki print desain yang unik. Dapatkan long lasting tee dengan warna cantik ini untuk merasa muda selamanya!\r\n\r\nUntuk Model Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL\r\nUntuk Model Wanita: Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M\r\n\r\nBahan: Katun\r\n\r\nM: Lebar Dada: 52 cm - Panjang Baju: 72 cm - Lebar Badan: 44\r\nL: Lebar Dada: 54 cm - Panjang Baju: 74 cm - Lebar Badan: 46\r\nXL: Lebar Dada: 56 cm - Panjang Baju: 76 cm - Lebar Badan: 48\r\n\r\nToleransi setiap size 1-1½cm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
