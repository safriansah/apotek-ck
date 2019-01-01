
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 04:23 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u380467861_apot`
--

-- --------------------------------------------------------

--
-- Table structure for table `OBAT`
--

CREATE TABLE IF NOT EXISTS `OBAT` (
  `KODE_OBAT` char(4) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `JENIS_OBAT` varchar(16) NOT NULL,
  `KATEGORI_OBAT` varchar(32) NOT NULL,
  `HARGA` int(11) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `EXP` date NOT NULL,
  `KETERANGAN` text NOT NULL,
  PRIMARY KEY (`KODE_OBAT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OBAT`
--

INSERT INTO `OBAT` (`KODE_OBAT`, `NAMA`, `JENIS_OBAT`, `KATEGORI_OBAT`, `HARGA`, `STOCK`, `EXP`, `KETERANGAN`) VALUES
('1111', 'bodrex', 'Tablet', 'Obat Bebas', 2500, 500, '2018-05-26', 'Obat sakit kepala'),
('6969', 'VMax', 'Kapsul', 'Obat Keras', 25000, 83, '2017-05-17', 'Lunas'),
('1199', 'Paracetamol2', 'Kapsul', 'Obat Bebas Terbatas', 25002, 773, '2019-07-02', 'Bukan Obat Biasa 2'),
('2222', 'diapet', 'Kapsul', 'Obat Bebas', 3000, 240, '2023-05-26', 'Obat sakit perut'),
('3333', 'antangin', 'Sirup', 'Obat Bebas Terbatas', 1500, 120, '2018-06-27', 'Obat masuk angin'),
('4444', 'vitacimin', 'Kapsul', 'Obat Keras', 1000, 200, '2017-08-31', 'Vitamin c'),
('5555', 'kombatrin', 'Bubuk', 'Obat Keras', 5000, 96, '2022-05-26', 'Obat sakit perut'),
('7777', 'tropicana slim', 'Sirup', 'Obat Bebas Terbatas', 1200, 69, '2017-05-26', 'Ini untuk mencoba'),
('8888', 'smadav', 'Drase', 'Obat Bebas Terbatas', 10000, 999, '2021-05-26', 'Obat ransomewere'),
('9999', 'mixagrip', 'Kapsul', 'Obat Bebas Terbatas', 3500, 88, '2021-05-30', 'Membuat mengantuk');

-- --------------------------------------------------------

--
-- Table structure for table `PEGAWAI`
--

CREATE TABLE IF NOT EXISTS `PEGAWAI` (
  `NIP` char(10) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `JENIS_KEL` varchar(9) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `ALAMAT` varchar(32) NOT NULL,
  `KOTA` varchar(16) NOT NULL,
  `TELP` varchar(16) NOT NULL,
  `EMAIL` varchar(32) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PEGAWAI`
--

INSERT INTO `PEGAWAI` (`NIP`, `NAMA`, `JENIS_KEL`, `TGL_LAHIR`, `ALAMAT`, `KOTA`, `TELP`, `EMAIL`) VALUES
('1534010031', 'wellz', 'Laki-Laki', '0009-09-09', 'benowo', 'surabaza', '0857', '@gmail.com'),
('1231080092', 'budi', 'Laki-Laki', '1988-05-26', 'jalan semangka', 'surabaya', '08233495555', 'bud1@gmail.com'),
('1534010003', 'nur', 'Perempuan', '1990-01-02', 'kalianank2', 'surabaya 2', '0982', '@yaho2'),
('1512230153', 'rudi', 'Laki-Laki', '1995-02-26', 'jalan merdeka', 'gresik', '085850663', 'lega@gmail.com'),
('1488120001', 'yanti', 'Perempuan', '1992-07-21', 'jalan pemuda', 'bandung', '082334580123', 'yan@gmail.com'),
('1012050056', 'karto', 'Laki-Laki', '1986-01-30', 'jalan delima', 'sidoarjo', '0889556321', 'kartono@gmail.com'),
('1602040167', 'roby', 'Laki-Laki', '1992-03-12', 'jalan bersama', 'semarang', '08565033750', 'roby14@gmail.com'),
('1323010004', 'ana', 'Perempuan', '1987-01-23', 'jalan pahlawan', 'surabaya', '08288850666', 'aaa@yahoo.com'),
('1423050204', 'risman', 'Laki-Laki', '1992-03-05', 'jalan apel', 'jakarta', '088334245369', 'man@hotmail.com'),
('1523050009', 'ina', 'Perempuan', '1998-05-26', 'jalan perjuangan', 'jakarta', '082334551385', 'ina2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `PELANGGAN`
--

CREATE TABLE IF NOT EXISTS `PELANGGAN` (
  `ID_PEL` char(10) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `JENIS_KEL` varchar(9) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `ALAMAT` varchar(32) NOT NULL,
  `KOTA` varchar(16) NOT NULL,
  `TELP` varchar(16) NOT NULL,
  `EMAIL` varchar(32) NOT NULL,
  PRIMARY KEY (`ID_PEL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PELANGGAN`
--

INSERT INTO `PELANGGAN` (`ID_PEL`, `NAMA`, `JENIS_KEL`, `TGL_LAHIR`, `ALAMAT`, `KOTA`, `TELP`, `EMAIL`) VALUES
('1534010032', 'Muhammad ', 'Laki-Laki', '1992-02-02', 'jl h abdul rochim 2', 'gresik 2', '085730462832', '@gmail.com2'),
('8888', 'Voro', 'Perempuan', '0002-02-02', 'alamat', 'kota', '0882', '@gmail.com'),
('a01', 'ozil', 'Laki-Laki', '1992-05-07', 'gubeng', 'surabaya', '-', '-'),
('a02', 'cazorla', 'Laki-Laki', '1980-10-18', 'taman', 'sidoarjo', '-', '-'),
('a03', 'ramsey', 'Perempuan', '1997-03-06', 'rungkut', 'surabaya', '-', '-'),
('a04', 'sanchez', 'Laki-Laki', '1993-07-04', 'pungging', 'mojokerto', '-', '-'),
('a05', 'giroud', 'Laki-Laki', '1994-02-12', 'wonokromo', 'surabaya', '-', '-'),
('a06', 'iwobi', 'Perempuan', '2000-04-08', 'ranupani', 'lumajang', '-', 'blab@gmail.com'),
('a07', 'xhaka', 'Laki-Laki', '1989-01-21', 'manyar', 'surabaya', '085742836865', 'faaa@yahoo.com'),
('a08', 'bellerin', 'Laki-Laki', '1968-08-08', 'krian', 'sidoarjo', '087467906873', 'deeeb@live.com'),
('a09', 'gibbs', 'Perempuan', '1999-05-13', 'perak', 'jombang', '088895673127', 'yuuuhu@gmail.com'),
('a10', 'ubaidillah', 'Laki-Laki', '1996-08-18', 'pungging', 'mojokerto', '085707258464', 'ubed.ublo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `TRANSAKSI`
--

CREATE TABLE IF NOT EXISTS `TRANSAKSI` (
  `ID_TANS` char(8) NOT NULL,
  `NIP` char(10) DEFAULT NULL,
  `KODE_OBAT` char(4) DEFAULT NULL,
  `ID_PEL` char(10) DEFAULT NULL,
  `TGL` date NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `TOTAL_BAYAR` varchar(32) NOT NULL,
  `KET` text NOT NULL,
  PRIMARY KEY (`ID_TANS`),
  KEY `FK_MELAKUKAN` (`ID_PEL`),
  KEY `FK_MELAYANI` (`NIP`),
  KEY `FK_MENGALAMI` (`KODE_OBAT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TRANSAKSI`
--

INSERT INTO `TRANSAKSI` (`ID_TANS`, `NIP`, `KODE_OBAT`, `ID_PEL`, `TGL`, `JUMLAH`, `TOTAL_BAYAR`, `KET`) VALUES
('22222222', '1534010003', '6969', 'a01', '2017-05-25', 1, '25000', 'Pembuat es obat'),
('11111111', '1534010003', '1199', 'a01', '2017-05-25', 3, '75006', '-pengepul obar'),
('33333333', '1534010031', '1199', 'a02', '2017-05-25', 4, '100008', 'Tukang sakit gigi'),
('44444444', '1534010031', '1199', 'a04', '2017-05-25', 5, '125010', 'resep dokter'),
('55555555', '1534010003', '1199', 'a05', '2017-05-25', 6, '150012', 'tidak ada'),
('66666666', '1534010003', '6969', 'a06', '2017-05-25', 5, '125000', 'sakit gigi'),
('77777777', '1534010003', '1199', 'a07', '2017-05-25', 4, '100008', 'resep dokter'),
('88888888', '1534010003', '1199', 'a08', '2017-05-25', 7, '175014', 'cedera kaki'),
('99999999', '1534010003', '1199', 'a02', '2017-05-25', 10, '250020', 'sakit mata merah'),
('00000000', '1534010003', '6969', 'a09', '2017-05-25', 24, '600000', 'jual ulang');

--
-- Triggers `TRANSAKSI`
--
DROP TRIGGER IF EXISTS `add_trans`;
DELIMITER //
CREATE TRIGGER `add_trans` AFTER INSERT ON `TRANSAKSI`
 FOR EACH ROW UPDATE OBAT SET STOCK=(STOCK-new.JUMLAH) WHERE KODE_OBAT=new.KODE_OBAT
//
DELIMITER ;
DROP TRIGGER IF EXISTS `del_trans`;
DELIMITER //
CREATE TRIGGER `del_trans` AFTER DELETE ON `TRANSAKSI`
 FOR EACH ROW UPDATE OBAT SET STOCK=(STOCK+old.JUMLAH) WHERE KODE_OBAT=old.KODE_OBAT
//
DELIMITER ;
DROP TRIGGER IF EXISTS `upd_trans`;
DELIMITER //
CREATE TRIGGER `upd_trans` AFTER UPDATE ON `TRANSAKSI`
 FOR EACH ROW UPDATE OBAT SET STOCK=(STOCK-new.JUMLAH+old.JUMLAH) WHERE KODE_OBAT=new.KODE_OBAT
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
