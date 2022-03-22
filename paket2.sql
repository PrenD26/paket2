-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Mar 2022 pada 09.00
-- Versi server: 5.7.33
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paket2`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `v_idfask` (IN `id_kamar` INT(11))   BEGIN
SELECT A.id_kamar, A.id_fasilitas,A.nama_fasilitas,B.image, B.tipe_kamar,B.jumlah_kamar
FROM `fasilitas_kamar` A 
JOIN `kamar` B ON 
A.id_kamar = B.id_kamar
WHERE A.id_kamar = id_kamar;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fasilitas`, `nama_fasilitas`, `keterangan`, `image`) VALUES
(3, 'Kolam Renang', 'Terdapat sebuah kolam renang ,dengan pemandangan yang sangat beautifull cool af, membuat anda akan merasa ingin loncat ke dalam kolam', '176416058.jpg'),
(4, 'Lapangan Golf', 'Lapangan Golf Seluas 50m+ berada di belakang gedung,dengan suasana pepohonan yang dapat membuat anda betah bermain golf', '658004936.jpg'),
(5, 'Restoran Bintang 9', 'Restoran mewah dengan pelayanan profesional,masakan dibuat oleh koki bintang 9', '38679544.jpg'),
(6, 'Bar', 'Tempat minum,hanya untuk orang dewasa', '584553348.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas`, `id_kamar`, `nama_fasilitas`) VALUES
(4, 1, 'Free Wifi'),
(5, 2, 'Bowlingxxxxxx'),
(6, 8, 'Kolam'),
(7, 8, 'Spa'),
(8, 1, 'Kamar Mandi Pribadi'),
(9, 1, 'Smart Tv 40 Inch 4k'),
(10, 1, 'Double Bed'),
(11, 1, 'Ac'),
(12, 1, 'Kipas Angin'),
(13, 9, 'Extra Large Double Bed'),
(14, 9, 'Free Wifi'),
(15, 9, 'Kamar Mandi Pribadi + Air Hangat'),
(16, 9, 'Ac'),
(17, 9, 'Snack Didalam Kulkas'),
(19, 9, 'Smart Tv 50 Inch 8k'),
(21, 9, 'Meja Kerja Lebar'),
(22, 10, 'Single Bed '),
(23, 10, 'Free Wifi'),
(24, 10, 'Kamar Mandi Pribadi'),
(25, 10, 'Ac'),
(26, 10, 'Smart Tv 35 Inch 2k'),
(28, 11, 'Single Bed '),
(29, 11, 'Kipas Angin'),
(30, 11, 'Kamar Mandi Pribadi'),
(31, 11, 'Smart Tv 35 Inch Full HD'),
(35, 11, 'Free Wifi'),
(36, 10, 'Kipas Angin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `jumlah_kamar` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`, `jumlah_kamar`, `image`) VALUES
(1, 'Deluxe', '70', '1569073293.jpg'),
(9, 'Superior', '50', '1095587483.jpg'),
(10, 'Mini', '120', '131443565.jpg'),
(11, 'Lite', '200', '543756201.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `pemesan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `tamu` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `checkin`, `checkout`, `pemesan`, `email`, `no_telp`, `tamu`, `id_kamar`, `jumlah`, `status`, `id_user`) VALUES
(1, '2022-03-21', '2022-03-21', 'frendy', 'frendyrahma26@gmail.com', '62895710518585', 'bambank', 1, 5, 2, 3),
(2, '2022-03-21', '2022-03-21', 'frendy', 'frendyrahma26@gmail.com', '62895721212', 'bambank', 1, 5, 1, 3),
(3, '2022-03-21', '2022-03-21', 'frendy', 'frendyrahma26@gmail.com', '+62895710518585', 'bambank', 1, 8, 1, 3),
(4, '2022-03-21', '2022-03-24', 'frendy', 'frendyrahma26@gmail.com', '(+62) 895-7105-18585', 'bambankd', 1, 5, 1, 3),
(5, '2022-03-21', '2022-03-23', 'frendy', 'frendyrahma26@gmail.com', '(+62) 895-7105-18585', 'bambank', 10, 7, 1, 3),
(8, '2022-03-22', '2022-03-30', 'Marsella Octavia', 'marsella26@gmail.com', '(+08) 957-2121-22222', 'Frendy', 9, 7, 3, 4),
(9, '2022-04-01', '2022-05-04', 'Marsella Octavia', 'marsella26@gmail.com', '(+08) 957-2121-22222', 'Adhmia', 9, 4, 1, 4),
(10, '2022-03-22', '2022-03-22', 'Marsella Octavia', 'marsella26@gmail.com', '(+08) 957-2121-22222', 'Merry', 11, 4, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `nama`, `username`, `password`, `email`, `no_telp`) VALUES
(1, 1, 'Amogus', 'admin', '12345', '', ''),
(2, 2, 'Bambank', 'resep', '12345', '', ''),
(3, 3, 'Frendy Wahyu Ramadhany', '', '12345', 'frendyrahma26@gmail.com', '(+62) 895-7105-18585'),
(4, 3, 'Marsella Octavia', '', '12345', 'marsella26@gmail.com', '(+08) 957-2121-22222');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_fk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_fk` (
`id_fasilitas` int(11)
,`nama_fasilitas` varchar(50)
,`id_kamar` int(11)
,`jumlah_kamar` varchar(50)
,`tipe_kamar` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_reserv`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_reserv` (
`id_reservasi` int(11)
,`pemesan` varchar(50)
,`tamu` varchar(50)
,`checkin` date
,`checkout` date
,`email` varchar(50)
,`no_telp` varchar(50)
,`jumlah` int(11)
,`status` int(11)
,`id_kamar` int(11)
,`id_user` int(11)
,`tipe_kamar` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_fk`
--
DROP TABLE IF EXISTS `view_fk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_fk`  AS SELECT `fasilitas_kamar`.`id_fasilitas` AS `id_fasilitas`, `fasilitas_kamar`.`nama_fasilitas` AS `nama_fasilitas`, `fasilitas_kamar`.`id_kamar` AS `id_kamar`, `kamar`.`jumlah_kamar` AS `jumlah_kamar`, `kamar`.`tipe_kamar` AS `tipe_kamar` FROM (`fasilitas_kamar` join `kamar` on((`fasilitas_kamar`.`id_kamar` = `kamar`.`id_kamar`))) ORDER BY `fasilitas_kamar`.`id_fasilitas` ASC  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_reserv`
--
DROP TABLE IF EXISTS `view_reserv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_reserv`  AS SELECT `a`.`id_reservasi` AS `id_reservasi`, `a`.`pemesan` AS `pemesan`, `a`.`tamu` AS `tamu`, `a`.`checkin` AS `checkin`, `a`.`checkout` AS `checkout`, `a`.`email` AS `email`, `a`.`no_telp` AS `no_telp`, `a`.`jumlah` AS `jumlah`, `a`.`status` AS `status`, `a`.`id_kamar` AS `id_kamar`, `a`.`id_user` AS `id_user`, `b`.`tipe_kamar` AS `tipe_kamar` FROM (`reservasi` `a` join `kamar` `b` on((`b`.`id_kamar` = `a`.`id_kamar`))) ORDER BY `a`.`id_reservasi` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
