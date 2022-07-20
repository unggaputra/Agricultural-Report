-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220629.14f90d77f8
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 17.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_petani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit`
--

CREATE TABLE `bibit` (
  `id_bibit` int(11) NOT NULL,
  `nama_bibit` varchar(35) NOT NULL,
  `jenis_tanaman` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bibit`
--

INSERT INTO `bibit` (`id_bibit`, `nama_bibit`, `jenis_tanaman`) VALUES
(1, 'Inpara 3', 'Padi'),
(2, 'Inpara 4', 'Padi'),
(3, 'Inpara 5', 'Padi'),
(4, 'Bisi 12', 'Jagung'),
(5, 'Bisi 18', 'Jagung'),
(6, 'Pertiwi-3', 'Jagung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`) VALUES
(1, 'Patik'),
(2, 'Singgahan'),
(3, 'Pulung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` int(11) NOT NULL,
  `id_petani` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `luas` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lahan`
--

INSERT INTO `lahan` (`id_lahan`, `id_petani`, `id_lokasi`, `luas`) VALUES
(1, 1, 1, 1000),
(2, 2, 2, 200),
(3, 3, 3, 500),
(4, 4, 4, 300),
(5, 5, 5, 157),
(6, 10, 12, 350),
(7, 7, 9, 350),
(8, 12, 6, 175),
(9, 28, 7, 120),
(10, 26, 8, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(35) NOT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `id_desa`) VALUES
(1, 'Dukuh Tunjungan Wetan', 1),
(2, 'Dukuh Tunjungan Kulon', 1),
(3, 'Krajan', 1),
(4, 'Jangglengan', 1),
(5, 'Bedagan', 3),
(6, 'Krajan', 3),
(7, 'Gambiran', 3),
(8, 'Sekandang', 3),
(9, 'Kebon', 3),
(10, 'Jegolan', 3),
(11, 'Senayu', 3),
(12, 'Singgahan Lor', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `id_petani` int(11) NOT NULL,
  `nama_petani` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `no_telepon`) VALUES
(1, 'Ungga', '0852'),
(2, 'Putra', '0852'),
(3, 'Mahendra', '0852'),
(4, 'Naufal', '0852'),
(5, 'Saiful', '0852'),
(6, 'Saputra', '0852'),
(7, 'Sulton', '0852'),
(8, 'Subagyo', '0852'),
(9, 'Sudirman', '0852'),
(10, 'Sugeng', '0852'),
(11, 'Supri', '0852'),
(12, 'Ahmad', '0852'),
(13, 'Eko', '0852'),
(14, 'Nanda', '0852'),
(15, 'Dani', '0852'),
(16, 'Darto', '0852'),
(17, 'Dio', '0852'),
(18, 'Daffa', '0852'),
(19, 'Dimas', '0852'),
(20, 'Dwi', '0852'),
(21, 'Kateno', '0852'),
(22, 'Kiki', '0852'),
(23, 'Bambang', '0852'),
(24, 'Budi', '0852'),
(25, 'Rizky', '0852'),
(26, 'Misnan', '0852'),
(27, 'Robert', '0852'),
(28, 'Max', '0852'),
(29, 'Mustofa', '0852'),
(30, 'Yanto', '0852');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pupuk`
--

CREATE TABLE `pupuk` (
  `id_pupuk` int(11) NOT NULL,
  `nama_pupuk` varchar(35) NOT NULL,
  `jenis_pupuk` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pupuk`
--

INSERT INTO `pupuk` (`id_pupuk`, `nama_pupuk`, `jenis_pupuk`) VALUES
(1, 'Urea', 'Kimia'),
(2, 'ZA', 'Kimia'),
(3, 'SP-36', 'Kimia'),
(4, 'NPK Phonska', 'Kimia'),
(5, 'Petroganik', 'Organik'),
(6, 'Trubus', 'Organik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pembelian_pupuk`
--

CREATE TABLE `riwayat_pembelian_pupuk` (
  `id_transaksi` int(11) NOT NULL,
  `id_petani` int(11) NOT NULL,
  `id_pupuk` int(11) NOT NULL,
  `jumlah_karung` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pembelian_pupuk`
--

INSERT INTO `riwayat_pembelian_pupuk` (`id_transaksi`, `id_petani`, `id_pupuk`, `jumlah_karung`) VALUES
(1, 1, 1, 50),
(2, 2, 2, 50),
(3, 3, 3, 16),
(4, 14, 5, 150),
(5, 15, 5, 120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_tanam`
--

CREATE TABLE `riwayat_tanam` (
  `id_riwayat_tanam` int(11) NOT NULL,
  `id_lahan` int(11) NOT NULL,
  `id_bibit` int(11) NOT NULL,
  `jumlah_bibit` int(50) NOT NULL,
  `id_pupuk` int(11) NOT NULL,
  `jumlah_pupuk` int(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_hasil` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_tanam`
--

INSERT INTO `riwayat_tanam` (`id_riwayat_tanam`, `id_lahan`, `id_bibit`, `jumlah_bibit`, `id_pupuk`, `jumlah_pupuk`, `start_date`, `end_date`, `total_hasil`) VALUES
(1, 1, 1, 10, 1, 30, '2022-04-01', '2022-06-01', 3000),
(2, 3, 2, 5, 3, 150, '2020-01-18', '2021-05-13', 2000),
(3, 4, 3, 4, 1, 100, '2020-02-18', '2020-07-18', 500),
(4, 10, 6, 10, 6, 10, '2020-07-16', '2020-12-19', 1000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`id_bibit`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`),
  ADD KEY `id_petani` (`id_petani`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- Indeks untuk tabel `pupuk`
--
ALTER TABLE `pupuk`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indeks untuk tabel `riwayat_pembelian_pupuk`
--
ALTER TABLE `riwayat_pembelian_pupuk`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_petani` (`id_petani`),
  ADD KEY `id_pupuk` (`id_pupuk`);

--
-- Indeks untuk tabel `riwayat_tanam`
--
ALTER TABLE `riwayat_tanam`
  ADD PRIMARY KEY (`id_riwayat_tanam`),
  ADD KEY `id_lahan` (`id_lahan`),
  ADD KEY `id_bibit` (`id_bibit`),
  ADD KEY `id_pupuk` (`id_pupuk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bibit`
--
ALTER TABLE `bibit`
  MODIFY `id_bibit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `petani`
--
ALTER TABLE `petani`
  MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pupuk`
--
ALTER TABLE `pupuk`
  MODIFY `id_pupuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pembelian_pupuk`
--
ALTER TABLE `riwayat_pembelian_pupuk`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `riwayat_tanam`
--
ALTER TABLE `riwayat_tanam`
  MODIFY `id_riwayat_tanam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lahan`
--
ALTER TABLE `lahan`
  ADD CONSTRAINT `lahan_ibfk_1` FOREIGN KEY (`id_petani`) REFERENCES `petani` (`id_petani`),
  ADD CONSTRAINT `lahan_ibfk_2` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`);

--
-- Ketidakleluasaan untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Ketidakleluasaan untuk tabel `riwayat_pembelian_pupuk`
--
ALTER TABLE `riwayat_pembelian_pupuk`
  ADD CONSTRAINT `riwayat_pembelian_pupuk_ibfk_1` FOREIGN KEY (`id_petani`) REFERENCES `petani` (`id_petani`),
  ADD CONSTRAINT `riwayat_pembelian_pupuk_ibfk_2` FOREIGN KEY (`id_pupuk`) REFERENCES `pupuk` (`id_pupuk`);

--
-- Ketidakleluasaan untuk tabel `riwayat_tanam`
--
ALTER TABLE `riwayat_tanam`
  ADD CONSTRAINT `riwayat_tanam_ibfk_1` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`),
  ADD CONSTRAINT `riwayat_tanam_ibfk_2` FOREIGN KEY (`id_bibit`) REFERENCES `bibit` (`id_bibit`),
  ADD CONSTRAINT `riwayat_tanam_ibfk_3` FOREIGN KEY (`id_pupuk`) REFERENCES `pupuk` (`id_pupuk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



