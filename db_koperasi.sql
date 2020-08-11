-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2020 pada 04.16
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `pekerjaan` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` char(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `user_id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `no_hp`, `status`) VALUES
(1, '0', 'Yuliana Ana Mandasari', 1705670710111010, 'Padangsidempuan', '1976-03-20', 'Laki-Laki', 'Pembantu Rumah T', 'Ki. Muwardi No. 490, Prabumulih 72626, DIY', '0853 5420 196', 0),
(4, '0', 'Vanesa Zahra Novitasari', 1375116812919963, 'Kupang', '1992-07-24', 'Perempuan', 'Tukang Listrik', 'Jln. Perintis Kemerdekaan No. 720, Cilegon 56057, KepR', '0821 1667 2515', 0),
(5, '0', 'Pandu Cahyo Setiawan', 9105246710162098, 'Bontang', '1973-08-29', 'Perempuan', 'Tabib', 'Dk. Muwardi No. 264, Pekalongan 71222, SumUt', '0818 0895 2881', 0),
(6, '0', 'Eli Kania Puspita', 9105785409081786, 'Banjar', '1977-11-23', 'Perempuan', 'Pialang', 'Ds. Rumah Sakit No. 291, Banda Aceh 91758, Papua', '0877 6361 838', 1),
(7, '0', 'Vega Galar Utama S.Pd', 6403530409077423, 'Ternate', '1976-06-23', 'Laki-Laki', 'Dokter', 'Ki. Yap Tjwan Bing No. 272, Jambi 92864, Gorontalo', '0825 6036 9560', 0),
(8, '0', 'Luluh Suryono M.Farm', 6472720808960610, 'Palu', '1973-11-08', 'Perempuan', 'Tukang Jahit', 'Jr. Baiduri No. 153, Parepare 39239, KalUt', '0895 0722 116', 0),
(9, '0', 'Hasna Yuniar', 6103191311112716, 'Sungai Penuh', '1987-10-19', 'Perempuan', 'Paraji', 'Dk. Babadan No. 782, Prabumulih 79168, SumUt', '0894 6756 155', 0),
(10, '0', 'Karna Kasim Saputra M.Kom.', 5321461906095126, 'Administrasi Jakarta', '1974-06-29', 'Laki-Laki', 'Wiraswasta', 'Dk. Sukajadi No. 194, Payakumbuh 70288, SulBar', '0860 9373 194', 0),
(11, '0', 'Chandra Marbun', 5201376008984656, 'Administrasi Jakarta', '1978-05-20', 'Laki-Laki', 'Wakil Bupati', 'Ki. Otista No. 767, Bengkulu 40099, SumUt', '0827 7024 7654', 0),
(12, '0', 'Lukman Prayoga S.Pt', 5316285611006255, 'Cilegon', '1973-11-02', 'Perempuan', 'Ustadz / Mubalig', 'Ki. Labu No. 480, Yogyakarta 44453, SulTeng', '0898 5623 573', 0),
(13, '0', 'Bagus Siregar', 9208276310049520, 'Lubuklinggau', '1970-01-17', 'Laki-Laki', 'Imam Masjid', 'Jln. Babadan No. 949, Tual 12661, SulTeng', '0819 2900 9028', 0),
(14, '0', 'Pangestu Damu Marbun S.IP', 6407610104105583, 'Gunungsitoli', '1978-09-13', 'Laki-Laki', 'Karyawan Swasta', 'Gg. Hasanuddin No. 66, Tangerang Selatan 94000, KalTeng', '0844 7042 565', 1),
(15, '0', 'Zelaya Padmasari', 3309907004082231, 'Jayapura', '1976-04-18', 'Perempuan', 'Pedagang', 'Ki. Ciumbuleuit No. 458, Bengkulu 36169, JaTeng', '0830 7910 8011', 1),
(16, '0', 'Genta Aryani S.Pd', 8203300105027945, 'Serang', '1970-11-12', 'Perempuan', 'Anggota DPD', 'Ki. Wahidin Sudirohusodo No. 520, Administrasi Jakarta Pusat 18349, SumSel', '0800 9439 9717', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`, `keterangan`) VALUES
(1, 'Simpanan Pokok', 'Wajib dibayarkan setiap anggota koperasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `angsuran` bigint(20) NOT NULL,
  `cicilan` tinyint(4) NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu_insert` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambilan`
--

CREATE TABLE `pengambilan` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu_insert` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `durasi` tinyint(4) NOT NULL,
  `bunga` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu_insert` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tgl_simpan` date NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu_insert` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `level` int(1) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `foto`, `status`, `date_created`) VALUES
(1, 'admi', '123', 'abimanugraha@gmail.com', 0, 'default.png', 1, '2020-02-25 15:15:30'),
(2, 'maman', '123', 'maman@gmail.com', 1, 'default.png', 0, '2020-02-25 15:15:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `id_user`, `keterangan`) VALUES
(1, 0, 'Administrator'),
(2, 1, 'Anggota'),
(3, 2, 'Pengurus'),
(4, 3, 'Ketua Koperasi'),
(5, 4, 'Sekretaris Koperasi'),
(6, 5, 'Bendahara Koperasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengambilan`
--
ALTER TABLE `pengambilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengambilan`
--
ALTER TABLE `pengambilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
