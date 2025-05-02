-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2025 pada 05.44
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arske`
--

CREATE TABLE `arske` (
  `id` int(5) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `noklasi` varchar(25) NOT NULL,
  `ringkasan` text NOT NULL,
  `pengelolah` varchar(25) NOT NULL,
  `tglsurat` date NOT NULL,
  `kepada` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `surat` varchar(25) NOT NULL,
  `lamp1` varchar(25) NOT NULL,
  `lamp2` varchar(25) NOT NULL,
  `lamp3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arske`
--

INSERT INTO `arske` (`id`, `nosurat`, `noklasi`, `ringkasan`, `pengelolah`, `tglsurat`, `kepada`, `keterangan`, `surat`, `lamp1`, `lamp2`, `lamp3`) VALUES
(13, 'K01/11/VIA/Kelurahan	', '601', 'Surat Peringatan', 'Sekertaris', '2021-03-25', 'Lurah Rewarangga', 'Peringatan', 'KHS_1.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsma`
--

CREATE TABLE `arsma` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `noklasi` varchar(50) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglteri` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `disposisi` text NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `tembusan` varchar(25) NOT NULL,
  `tindak_lanjut` varchar(35) NOT NULL,
  `gbr_surat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsma`
--

INSERT INTO `arsma` (`id`, `nosurat`, `noklasi`, `tglsurat`, `tglteri`, `perihal`, `isi`, `disposisi`, `pengirim`, `instansi`, `tembusan`, `tindak_lanjut`, `gbr_surat`) VALUES
(57, '11/VIA/Kelurahan', '101', '2020-08-11', '2020-08-10', 'Undangan Rapat', 'Undangan Menhadiri Pertemuan', 'sekertaris', '', 'Kec. Ende Timur', '', '', 'KHS_1.jpg'),
(58, '111112', '111112', '2021-10-05', '2021-10-05', 'Undangan Rapat2', 'asdda2', 'wqewqe2', 'qweq2', 'aeqwe2', 'qeqw2', 'wqeqweqw2', ''),
(59, '3333', '333', '2021-10-04', '2021-10-04', 'Undangan Rapat', 'ssfs', '', 'sfsfs', 'sfsf', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kode`
--

CREATE TABLE `tb_kode` (
  `id` int(11) NOT NULL,
  `kode` varchar(3) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kode`
--

INSERT INTO `tb_kode` (`id`, `kode`, `keterangan`) VALUES
(1, 'A', 'Perencanaan'),
(2, 'B', 'Keuangan'),
(3, 'C', 'Kepegawaian'),
(4, 'D', 'Perlengkapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nomor_surat`
--

CREATE TABLE `tb_nomor_surat` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nomor_surat`
--

INSERT INTO `tb_nomor_surat` (`id`, `nomor`) VALUES
(11, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perihal`
--

CREATE TABLE `tb_perihal` (
  `id` int(11) NOT NULL,
  `perihal` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perihal`
--

INSERT INTO `tb_perihal` (`id`, `perihal`, `isi`) VALUES
(1, 'Permohonan ATK UAS', 'Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024  ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.'),
(2, 'Permohonan Ijin Mahasiswa Mengikuti Kuliah Tamu', 'Dengan hormat,\nMemperhatikan surat Dekan Fakultas Ekonomi dan Bisnis; Nomor : 130/115/F5/31/O/IV/2024; Tanggal : 18 April 2024; sesuai perihal surat diatas, maka kami teruskan permohonan ijin mahasiswa pada program studi selingkup Fakultas Sains dan Teknologi untuk mengikuti kegiatan Kuliah Tamu (Talkshow) dengan materi Leadership oleh Bupati Ngada (surat dan daftar nama mahasiswa terlampir). Kegiatan akan dilaksanakan hari Jumad, 19 April 2024, pukul 10.00 di Auditorium H. J. Gadi Djou. \n\nDemikian penyampaian, atas perhatian dan kerjasamanya disampaikan terima kasih.\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id` int(11) NOT NULL,
  `kode1` varchar(10) NOT NULL,
  `kode2` varchar(10) NOT NULL,
  `kode3` varchar(10) NOT NULL,
  `kode4` varchar(10) NOT NULL,
  `kode5` varchar(10) NOT NULL,
  `kode6` varchar(10) NOT NULL,
  `kode7` varchar(10) NOT NULL,
  `perihal` text NOT NULL,
  `lampiran` text NOT NULL,
  `tgl_surat` date NOT NULL,
  `kepada` text NOT NULL,
  `ttd` text NOT NULL,
  `jabatan` text NOT NULL,
  `nipy` text NOT NULL,
  `nidn` varchar(30) NOT NULL,
  `tembusan` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id`, `kode1`, `kode2`, `kode3`, `kode4`, `kode5`, `kode6`, `kode7`, `perihal`, `lampiran`, `tgl_surat`, `kepada`, `ttd`, `jabatan`, `nipy`, `nidn`, `tembusan`, `isi`) VALUES
(50, '001', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '1 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Ketua Program Studi Teknik Sipil', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(51, '003', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(52, '003', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(53, '006', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(54, '009', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(55, '002', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '1 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(56, '002', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(57, '003', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Ketua Program Studi Arsitektur', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(58, '004', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-15', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,</p>\r\n<p style=\"text-align: justify;\">Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(59, '001', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Ketua Program Studi Teknik Sipil', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,</p>\r\n<p style=\"text-align: justify;\">Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(60, '104', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-14', 'Ketua Program Studi Teknik Sipil', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Ketua Program Studi Teknik Sipil', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(61, '167', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '1 Jepitan', '2025-04-15', '1. Ketua Program Studi Teknik Sipil<br>2. Ketua Program Studi Arsitektur<br>3. Ketua Program Studi Agroteknologi<br>4. Ketua Program Studi Sistem Informasi', 'Marselinus Y. Nisanson, ST.,MT.,IPM', 'Dekan', '1980 2000 151', '11111111111', '1. Arsip<br>2. Ketua Program Studi Teknik Sipil<br>3. Ketua Program Studi Arsitektur<br>4. Ketua Program Studi Agroteknologi<br>5. Ketua Program Studi Sistem Informasi', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,</p>\r\n<p style=\"text-align: justify;\">Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).</p>\r\n<p style=\"text-align: justify;\">Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>'),
(62, '168', '115', 'F1', '72', 'A', 'I', '2025', 'Permohonan ATK UAS', '2 Jepitan', '2025-04-15', 'Ketua Program Studi Sistem Informasi', 'Yoseph D. Da Yen Khwuta, S.Kom.,M.Cs', 'Wakil Dekan Bidang Administrasi Umum dan Keuangan', '1980 99 135', '0802067501', '1. Arsip<br>2. Ketua Program Studi Sistem Informasi', '<div style =\"margin-right: 45px;\"><p style=\"text-align: justify;\">Dengan hormat,</p>\r\n<p style=\"text-align: justify;\">Memperhatikan surat Ketua Program Studi Agroteknologi; Nomor : 95/115/72/F12/61/D/VI/2024; Ketua Program Studi Sistem Informasi; Nomor: 173/115/F11/72/71/D/VI/2024; Ketua Program Studi Arsitektur; Nomor : 84/115/72/F11/32/D/07/2024; maka kami teruskan permohonan ATK untuk pelaksanaan ujian akhir semester genap TA. 2023/2024&nbsp; ( rekapan permohonan terlampir ).</p>\r\n<p style=\"text-align: justify;\">Demikian permohonan, atas perhatian dan kerjasamanya disampaikan terima kasih.</p></div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tembusan`
--

CREATE TABLE `tb_tembusan` (
  `id` int(11) NOT NULL,
  `tembusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tembusan`
--

INSERT INTO `tb_tembusan` (`id`, `tembusan`) VALUES
(1, 'Arsip'),
(2, 'Ketua Program Studi Teknik Sipil'),
(6, 'Ketua Program Studi Arsitektur'),
(7, 'Ketua Program Studi Agroteknologi'),
(8, 'Ketua Program Studi Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ttd`
--

CREATE TABLE `tb_ttd` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nipy` varchar(30) NOT NULL,
  `nidn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ttd`
--

INSERT INTO `tb_ttd` (`id`, `jabatan`, `nama`, `nipy`, `nidn`) VALUES
(1, 'Dekan', 'Marselinus Y. Nisanson, ST.,MT.,IPM', '1980 2000 151', '11111111111'),
(2, 'Wakil Dekan Bidang Administrasi Umum dan Keuangan', 'Yoseph D. Da Yen Khwuta, S.Kom.,M.Cs', '1980 99 135', '0802067501'),
(3, 'Wakil Dekan Bidang Akademik', 'Silvester M. Siso, ST.,M.Sc', '1980 2009 378', '2222222222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `id` int(11) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`id`, `tujuan`) VALUES
(1, 'Ketua Program Studi Teknik Sipil'),
(2, 'Ketua Program Studi Arsitektur'),
(3, 'Ketua Program Studi Agroteknologi'),
(4, 'Ketua Program Studi Sistem Informasi'),
(5, 'Rektor Universitas Flores');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Andi', 'yohanesardinus@gmail.com', 'Logo_Golang_Basic_2.jpg', '$2y$10$UWHfrxur3PVtweVFKbrQmu7ANstY6ohk9H7cMLf.RYEGMGE3SuIcG', 1, 1, 1577927356);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(17, 1, 2),
(20, 2, 6),
(21, 2, 4),
(22, 1, 6),
(27, 1, 5),
(28, 1, 8),
(31, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `name`, `menu`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Master Data', 'Master'),
(3, 'Administrasi', 'Administrasi'),
(4, 'Manajemen Arsip', 'Arsip'),
(5, 'Setting Menu', 'Menu'),
(6, 'Setting Account', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 6, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 6, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 5, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 5, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 0),
(9, 5, 'Management Role Access', 'admin/role', 'fa fa-fw fa-user-tie', 0),
(10, 4, 'Arsip Surat Masuk', 'arsip', 'fas fa-fw fa-folder', 1),
(11, 4, 'Arsip Surat Keluar', 'arsip/suratkel', 'fas fa-fw fa-folder', 0),
(12, 5, 'Management Pengguna', 'menu/tampiluser', 'fas fa-fw fa-users', 1),
(13, 4, 'Tambah Data', 'arsip/tambah', 'fas fa-fw fa-plus', 1),
(14, 4, 'Laporan Arsip', 'arsip/laporan', 'fas fa-fw fa-print', 1),
(15, 3, 'Surat Keluar', 'administrasi/suratKeluar', 'fas fa-fw fa-folder', 1),
(16, 3, 'Data Surat Keluar', 'administrasi/master', 'fas fa-fw fa-folder', 1),
(17, 2, 'Master Kode', 'master', 'fa fa-book', 1),
(18, 2, 'Master Perihal', 'master/perihal', 'fa fa-book', 1),
(19, 2, 'Master Tembusan', 'master/tembusan', 'fa fa-book', 1),
(20, 2, 'Master TTD', 'master/ttd', 'fa fa-book', 1),
(21, 2, 'Master Tujuan', 'master/tujuan', 'fa fa-book', 1),
(22, 5, 'Tentang Aplikasi', 'menu/tentang', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arske`
--
ALTER TABLE `arske`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsma`
--
ALTER TABLE `arsma`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nomor_surat`
--
ALTER TABLE `tb_nomor_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perihal`
--
ALTER TABLE `tb_perihal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tembusan`
--
ALTER TABLE `tb_tembusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ttd`
--
ALTER TABLE `tb_ttd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arske`
--
ALTER TABLE `arske`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `arsma`
--
ALTER TABLE `arsma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tb_kode`
--
ALTER TABLE `tb_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_nomor_surat`
--
ALTER TABLE `tb_nomor_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_perihal`
--
ALTER TABLE `tb_perihal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tb_tembusan`
--
ALTER TABLE `tb_tembusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_ttd`
--
ALTER TABLE `tb_ttd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
