-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 09:13 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `email`, `sandi`, `last_login`) VALUES
(1, 'a@a', 'a', '28-09-2016 13-03-58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `email`, `sandi`, `no_hp`, `alamat`, `status`) VALUES
(1, 'k@k', 'dc468c70fb574ebd07287b38d0d0676d', '08573266', 'Tempuran, Tarik, SDA', ''),
(2, 'm@m', '6f8f57715090da2632453988d9a1501b', '1234789172895412890', 'ashdjkash', ''),
(3, 'g@g', 'b2f5ff47436671b6e533d8dc3614845d', '1268489126589', 'tarik,sda', ''),
(4, 'l@l', '2db95e8e1a9267b7a1188556b2013b33', '08572156786', 'MJK', ''),
(5, 'p@p', '83878c91171338902e0fe0fb97a8c47a', '0678567858', 'ghdg', ''),
(6, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama`, `gambar`, `ket`, `tgl`, `rating`, `kategori`) VALUES
(1, 'Alun-Alun MJK', 'img/artikel/27-09-2016 11-02-44.jpg', 'Alun', '27-09-2016 11-02-44', 4, 'SEJARAH'),
(2, 'Api Abadi', 'img/artikel/28-09-2016 09-01-04.jpg', 'Api yang keluar abadi ini terletak di daerah mojokerto.', '28-09-2016 09-01-04', 0, 'SEJARAH'),
(3, 'Candi Jalatunda', 'img/artikel/28-09-2016 09-27-16.jpg', 'Chandi yang sangan besar dan bagus...', '28-09-2016 09-27-16', 0, 'SEJARAH'),
(4, 'Candi Prambanan', 'img/artikel/28-09-2016 09-29-07.jpg', 'Candi yang ada di yogyakarta ini termasuk salah satu candi yang paling megah di indonesia..', '28-09-2016 09-29-07', 0, 'SEJARAH'),
(5, 'Candi Tikus Mojokerto', 'img/artikel/28-09-2016 09-31-12.jpg', 'Canti tikus adalah salah satu candi yang terletak di daerah mojokerto.', '28-09-2016 09-31-12', 0, 'SEJARAH'),
(6, 'Gunung Bromo', 'img/artikel/28-09-2016 09-33-02.jpg', 'Gunung Bromo', '28-09-2016 09-33-02', 0, 'SEJARAH'),
(7, 'Musium Majapahit', 'img/artikel/28-09-2016 09-33-16.jpg', 'Musium Majapahit', '28-09-2016 09-33-16', 0, 'SEJARAH'),
(8, 'Musium trowulan', 'img/artikel/28-09-2016 09-33-37.jpg', 'Musium trowulan', '28-09-2016 09-33-37', 0, 'SEJARAH'),
(9, 'Patung Budha', 'img/artikel/28-09-2016 09-33-46.jpg', 'Patung Budha', '28-09-2016 09-33-46', 0, 'SEJARAH'),
(10, 'Pemandian Ubalan', 'img/artikel/28-09-2016 09-35-02.jpg', 'Pemandian Ubalan', '28-09-2016 10-33-13', 0, 'SEJARAH'),
(12, 'Candi wringin lawang', 'img/artikel/28-09-2016 09-35-47.jpg', 'Candi wringin lawang', '28-09-2016 10-29-27', 0, 'SEJARAH'),
(13, 'Candi Bajang Ratu MJK', 'img/artikel/28-09-2016 09-36-01.jpg', 'Candi Bajang Ratu', '28-09-2016 10-28-47', 0, 'SEJARAH'),
(14, 'Air terjun 3 warna', 'img/artikel/28-09-2016 11-22-32.jpg', 'Air terjun 3 warna memiliki warna air yang berjumlah tiga..', '28-09-2016 11-22-32', 5, 'FUN'),
(15, 'Lapangan bola', 'img/artikel/28-09-2016 12-57-44.jpg', 'Lapangan bola', '28-09-2016 12-57-44', 4, 'AGAMA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `hal` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama`, `hal`) VALUES
(2, 'SEJARAH', 'ARTIKEL PARIWISATA'),
(3, 'AGAMA', 'ARTIKEL PARIWISATA'),
(4, 'RELIGI', 'PAKET PARIWISATA'),
(5, 'SERU', 'PAKET PARIWISATA'),
(6, 'FUN', 'ARTIKEL PARIWISATA'),
(7, 'FUN', 'PAKET PARIWISATA'),
(8, 'SEJARAH', 'PAKET PARIWISATA'),
(9, 'olahraga', 'PAKET PARIWISATA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `email`, `rating`, `ket`, `id_artikel`, `tgl`) VALUES
(6, 'k@k', 5, 'asdasdasd', 1, '27-09-2016 11-35-11'),
(7, 'k@k', 3, 'KOMENTAR TELAH DI HAPUS ADMIN', 1, '27-09-2016 11-38-58'),
(8, 'khisby', 5, 'hjsdbfhjbq', 14, '28-09-2016 12-51-23'),
(9, 'l@l', 5, 'dfdf', 15, '28-09-2016 12-59-45'),
(10, 'p@p', 2, 'asdjkhsak', 15, '28-09-2016 13-08-46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE IF NOT EXISTS `tbl_paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `harga` int(11) NOT NULL,
  `ketemu` varchar(255) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `tgl` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nama`, `gambar`, `ket`, `harga`, `ketemu`, `id_artikel`, `tgl`, `kategori`) VALUES
(1, 'Alun Tour2', 'img/paket/27-09-2016 11-44-22.jpg', 'Perjalanan Keliling Alun  - Alun Mojokerto', 20000, 'Jl. Majapahit No.3 Kantor Dinas Pariwisata Daerah', 1, 28, 'FUN'),
(2, 'Jalantunda Tour', 'img/paket/28-09-2016 09-28-26.jpg', 'sudah disediakan makan.minum,dan payung teduh.', 3000000, 'Jl Merak no.12 kantor ayana tour', 3, 28, 'SEJARAH'),
(3, 'Prambanan Tour', 'img/paket/28-09-2016 09-30-32.jpg', 'sudah tersedia payung teduh...', 4672461, 'Jl.malioboro no.3 kantor ayana tour', 4, 28, 'SEJARAH'),
(4, 'Candi tikus Tour', 'img/paket/28-09-2016 09-32-03.jpg', 'sudah termasuk tiket masuk', 2147483647, 'Jl. mayjen sungkono no.23', 5, 28, 'SEJARAH'),
(7, '3 Warna tour', 'img/paket/28-09-2016 11-24-05.jpg', 'sudah ada makanan, minuman, tempat berteduh', 2000, 'Di mojokerto', 14, 28, 'FUN'),
(8, 'Olahraga', 'img/paket/28-09-2016 12-58-41.jpg', 'sudah termasuk tiket masuk', 20000, 'Jl. majapahit no.3 kantor ayana tour', 15, 28, 'olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `berangkat` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `tiket` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_transportasi` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `email`, `id_paket`, `berangkat`, `pembayaran`, `tiket`, `status`, `jumlah`, `id_transportasi`, `tgl`, `no_hp`, `alamat`) VALUES
(3, 'k@k', 1, '23/09/2016', 'img/pembayaran/27-09-2016 14-10-45.jpg', 'DRTQWPOMNZXL', '', 2, 1, '27-09-2016 13-17-51', '08573266', 'Tempuran, Tarik, SDA'),
(4, 'k@k', 1, '09/03/2016', '', '', '', 2, 0, '28-09-2016 08-48-15', '08573266', 'Tempuran, Tarik, SDA'),
(6, 'k@k', 1, '09/07/2016', '', '', '', 2, 0, '28-09-2016 08-54-42', '08573266', 'Tempuran, Tarik, SDA'),
(7, 'l@l', 1, '09/10/2016', '', '', '', 2, 0, '28-09-2016 12-54-22', '08572156786', 'MJK'),
(8, 'l@l', 8, '09/01/2016', 'img/pembayaran/28-09-2016 13-01-54.jpg', '', '', 9, 2, '28-09-2016 13-00-24', '08572156786', 'MJK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transportasi`
--

CREATE TABLE IF NOT EXISTS `tbl_transportasi` (
  `id_transportasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_transportasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_transportasi`
--

INSERT INTO `tbl_transportasi` (`id_transportasi`, `nama`, `kapasitas`, `jumlah`, `status`) VALUES
(1, 'Toyota Avanza', 8, 4, 'TERSEDIA'),
(2, 'Toyota Rush', 10, 7, 'TERSEDIA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
