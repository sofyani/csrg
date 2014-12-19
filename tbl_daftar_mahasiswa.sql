-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2014 at 03:33 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcsrg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar_mahasiswa` (
  `id_daftar` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal_daftar` date DEFAULT NULL,
  `nama_pendaftar` varchar(75) DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `NPM` varchar(6) DEFAULT NULL,
  `ttl` varchar(50) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `kelurahan` varchar(75) DEFAULT NULL,
  `kecamatan` varchar(75) DEFAULT NULL,
  `kota` varchar(75) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_daftar`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
