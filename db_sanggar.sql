-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Jan 2022 pada 04.23
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sanggar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `ket` varchar(25) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_produk`, `ket`, `gambar`) VALUES
(2, 1, 'ass', 'Cara-Mengubah-Format-Foto-ke-JPG.png'),
(3, 2, 'ass', '7E79878E-C248-4641-AE59-89440BA6D34E.jpeg'),
(4, 15, 'foto1', '921B56CD-FF42-4F75-A335-8B64799AC6D1.jpeg'),
(5, 15, 'foto2', '90AA7DB4-A5B5-4BAF-951B-158B9B091EC8.jpeg'),
(6, 15, 'foto3', '9ADB0CFB-200E-4DF9-91D8-3E51A4C804E9.jpeg'),
(7, 15, 'foto4', '9123BEAA-628C-482C-BD3E-E101FDF4B563.jpeg'),
(8, 15, 'foto5', '9D1D80A2-8E4D-4A69-BC21-03BBC536AF57.jpeg'),
(9, 15, 'foto6', '90AA7DB4-A5B5-4BAF-951B-158B9B091EC81.jpeg'),
(10, 15, 'foto7', '921B56CD-FF42-4F75-A335-8B64799AC6D11.jpeg'),
(11, 18, 'gam1', 'WhatsApp_Image_2021-12-08_at_20_18_02.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gambarhome`
--

CREATE TABLE `tbl_gambarhome` (
  `id_gambar` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gambarhome`
--

INSERT INTO `tbl_gambarhome` (`id_gambar`, `judul`, `ket`, `gambar`) VALUES
(11, 'Pernikahan Boby & Aurel', 'DOkumentasi Sanggar MutiaZayyana', 'WhatsApp_Image_2021-12-08_at_20_18_01.jpeg'),
(12, 'Pernikahan Indr & Izalna', 'Dokumentasi Sanggar MutiaZayyana', 'WhatsApp_Image_2021-12-08_at_20_18_02.jpeg'),
(13, 'Pernikahan Lutfi & Rizky', 'Dokumentasi Sanggar MutiaZayyana', 'WhatsApp_Image_2021-12-08_at_20_19_31.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gambarpromo`
--

CREATE TABLE `tbl_gambarpromo` (
  `id_gambar` int(11) NOT NULL,
  `id_promo` int(11) DEFAULT NULL,
  `ket` varchar(25) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) DEFAULT NULL,
  `gambar_kategori` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(4, 'Pelaminan', 'WhatsApp_Image_2021-12-27_at_21_04_36.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `nama`, `email`, `subject`, `pesan`) VALUES
(13, 'Aisyah', 'aisyah12@gmail.com', 'WOW BAGUS SEKALI', 'bagus sekali saya sangat senang'),
(16, 'Bang Jali', 'aliefsuladen56@gmail.com', 'WOW BAGUS SEKALI', 'bagusssss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(25) DEFAULT NULL,
  `id_kategori` int(25) DEFAULT NULL,
  `harga` varchar(25) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `gambar_produk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `id_kategori`, `harga`, `deskripsi`, `gambar_produk`) VALUES
(18, 'Pelaminan Full Pakage', 4, '2000000', 'des', 'WhatsApp_Image_2021-12-27_at_21_04_36.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `id_promo` int(11) NOT NULL,
  `nama_produk` varchar(25) DEFAULT NULL,
  `harga` varchar(25) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `gambar_produk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id_tim` int(11) NOT NULL,
  `nama_tim` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `link_fb` varchar(255) DEFAULT NULL,
  `link_ig` varchar(255) DEFAULT NULL,
  `gambar_tim` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_team`
--

INSERT INTO `tbl_team` (`id_tim`, `nama_tim`, `jabatan`, `link_fb`, `link_ig`, `gambar_tim`) VALUES
(4, 'Muhammad Alief Suladen', 'IT Production', 'https://Facebook_Muhammad_Alief_Suladen.com', 'https://Instagram_Muhammad_Alief_Suladen.com', 'E91A47E9-4031-4744-9879-63B9FC9E429C.jpeg'),
(7, 'Muhammad Alief Suladen', 'IT Production', 'https://Facebook_Muhammad_Alief_Suladen.com', 'https://Instagram_Muhammad_Alief_Suladen.com', 'F5C71E44-DBC7-4579-A84A-74DE6C7E23FF.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tentang`
--

CREATE TABLE `tbl_tentang` (
  `id_tentang` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`id_tentang`, `email`, `nohp`, `alamat`, `visi`, `misi`, `deskripsi`) VALUES
(1, 'mutiazayyana@gmail.com', '082165436764', 'Jl.Sultan M.Mansyur Lorong Lebak Keranji', 'jnxwxniewxejwxewx', 'wcecewcewcwecc', 'cwecececwcece');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Mutia Zayyana', 'Mutiazayyana', 'Mutiazayyana_12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tbl_gambarhome`
--
ALTER TABLE `tbl_gambarhome`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tbl_gambarpromo`
--
ALTER TABLE `tbl_gambarpromo`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_gambarhome`
--
ALTER TABLE `tbl_gambarhome`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_gambarpromo`
--
ALTER TABLE `tbl_gambarpromo`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
