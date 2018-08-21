-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 21, 2018 at 10:32 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_sip`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_anggota`
-- 

CREATE TABLE `tb_anggota` (
  `nis` int(11) NOT NULL,
  `nama` varchar(250) collate latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') collate latin1_general_ci NOT NULL,
  `jurusan` enum('MM','TSM') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tb_anggota`
-- 

INSERT INTO `tb_anggota` VALUES (12346, 'Dinna', 'Bantul', '2000-01-12', 'P', 'MM');
INSERT INTO `tb_anggota` VALUES (12341, 'Akew', 'bantul', '2000-04-29', 'L', 'TSM');
INSERT INTO `tb_anggota` VALUES (12347, 'Ditto', 'Bantul', '2000-07-19', 'L', 'TSM');
INSERT INTO `tb_anggota` VALUES (12345, 'Cikko', 'Bantul', '2000-05-05', 'L', 'MM');
INSERT INTO `tb_anggota` VALUES (12344, 'Belinda', 'Bantul', '2000-01-11', 'P', 'MM');
INSERT INTO `tb_anggota` VALUES (12343, 'Azkia', 'Bantul', '2000-07-05', 'P', 'MM');
INSERT INTO `tb_anggota` VALUES (12342, 'Arjuna', 'bantul', '2000-06-07', 'L', 'TSM');
INSERT INTO `tb_anggota` VALUES (12348, 'Elang', 'Bantul', '2000-11-12', 'L', 'TSM');
INSERT INTO `tb_anggota` VALUES (12349, 'Felita', 'Bantul', '2000-03-05', 'P', 'TSM');
INSERT INTO `tb_anggota` VALUES (12350, 'Giodino', 'Jakarta', '2000-12-12', 'L', 'TSM');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_buku`
-- 

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL auto_increment,
  `judul` varchar(200) collate latin1_general_ci NOT NULL,
  `pengarang` varchar(100) collate latin1_general_ci NOT NULL,
  `penerbit` varchar(150) collate latin1_general_ci NOT NULL,
  `tahun_terbit` varchar(4) collate latin1_general_ci NOT NULL,
  `isbn` varchar(25) collate latin1_general_ci NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') collate latin1_general_ci NOT NULL,
  `tgl_input` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=36 ;

-- 
-- Dumping data for table `tb_buku`
-- 

INSERT INTO `tb_buku` VALUES (20, 'Prakarya dan Kewirausahaan X (cetakan 1)', 'Hendriana W, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'A4', 1, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (22, 'Prakarya dan Kewirausahaan X2 (rev)', 'Hendriana W, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'A6', 40, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (19, 'Prakarya dan Kewirausahaan XI2 (ed 1)', 'RR. Indah S, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'A3', 79, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (18, 'Prakarya dan Kewirausahaan X2', 'Hendriana W, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'A2', 34, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (17, 'Prakarya dan Kewirausahaan X1', 'Hendriana W, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'A1', 85, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (21, 'Prakarya dan Kewirausahaan XI (cetakan 1)', 'RR. Indah S, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'A5', 1, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (23, 'Pendidikan Pancasila dan Kebudayaan X', 'Nuryadi, S.Pd, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'B1', 28, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (24, 'Pendidikan Pancasila dan Kebudayaan XI1', 'Yusnawan L,', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'B2', 20, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (25, 'Pendidikan Pancasila dan Kebudayaan XI2', 'Yusnawan L,', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'B3', 21, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (26, 'Pendidikan Pancasila dan Kebudayaan XI1 (cet 1)', 'Yusnawan L,', 'Kementrian Pendidikan dan Kebudayaan', '1989', 'B4', 11, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (27, 'Pendidikan Pancasila dan Kebudayaan X (rev)', 'Nuryadi dan Tholib', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'B5', 39, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (28, 'Pendidikan Pancasila dan Kebudayaan X2', 'Nuryadi dan Tholib', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'B6', 83, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (29, 'Matematika X2 (cet 2, ed rev)', 'Bornok S, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'C1', 34, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (30, 'Matematika (Program Keahlian)', 'Drs. Kasmma, M.Sc, dkk', 'Erlangga', '2008', 'C2', 35, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (31, 'Matematika XI1 (cet1)', 'Bornok S, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'C3', 46, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (32, 'Matematika XI2', 'Drs. Kasmma, M.Sc, dkk', 'Erlangga', '2008', 'C4', 57, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (33, 'Matematika XI2 (cet 1)', 'Bornok S, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2014', 'C5', 26, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (34, 'Matematika X rev', 'Bornok S, dkk', 'Kementrian Pendidikan dan Kebudayaan', '2016', 'C6', 40, 'rak1', '2018-08-12');
INSERT INTO `tb_buku` VALUES (35, 'Bolang', 'Gatot Subroto', 'bookkey', '2014', 'D1', 0, 'rak2', '2018-08-16');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_presensi`
-- 

CREATE TABLE `tb_presensi` (
  `id` int(9) NOT NULL auto_increment,
  `nama` varchar(250) collate latin1_general_ci NOT NULL,
  `jk` enum('L','P') collate latin1_general_ci NOT NULL,
  `jurusan` enum('MM','TSM') collate latin1_general_ci NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `nis` varchar(11) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `tb_presensi`
-- 

INSERT INTO `tb_presensi` VALUES (6, 'Arjuna', 'L', 'TSM', '2018-07-26', '12342');
INSERT INTO `tb_presensi` VALUES (5, 'Akew', 'L', 'TSM', '2018-07-26', '12341');
INSERT INTO `tb_presensi` VALUES (7, 'Felita', 'P', 'TSM', '2018-07-26', '12349');
INSERT INTO `tb_presensi` VALUES (8, 'Belinda', 'P', 'MM', '2018-07-26', '12344');
INSERT INTO `tb_presensi` VALUES (9, 'Dinna', 'P', 'MM', '2018-07-26', '12346');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_transaksi`
-- 

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL auto_increment,
  `judul` varchar(200) collate latin1_general_ci NOT NULL,
  `nis` varchar(11) collate latin1_general_ci NOT NULL,
  `nama` varchar(250) collate latin1_general_ci NOT NULL,
  `tgl_pinjam` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl_kembali` varchar(30) collate latin1_general_ci NOT NULL,
  `status` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=68 ;

-- 
-- Dumping data for table `tb_transaksi`
-- 

INSERT INTO `tb_transaksi` VALUES (67, 'Bolang', '12345', 'Cikko', '2018-08-16', '2018-08-23', 'pinjam');
INSERT INTO `tb_transaksi` VALUES (66, 'Pendidikan Pancasila dan Kebudayaan X (rev)', '12350', 'Giodino', '2018-08-16', '2018-08-23', 'pinjam');
INSERT INTO `tb_transaksi` VALUES (65, 'Matematika XI1 (cet1)', '12348', 'Elang', '2018-08-16', '2018-08-23', 'pinjam');
INSERT INTO `tb_transaksi` VALUES (61, 'Prakarya dan Kewirausahaan X1', '12341', 'Akew', '2018-08-16', '2018-08-23', 'pinjam');
INSERT INTO `tb_transaksi` VALUES (62, 'Prakarya dan Kewirausahaan X1', '12342', 'Arjuna', '2018-08-16', '2018-08-23', 'pinjam');
INSERT INTO `tb_transaksi` VALUES (63, 'Prakarya dan Kewirausahaan X2', '12346', 'Dinna', '2018-08-01', '2018-08-07', 'pinjam');
INSERT INTO `tb_transaksi` VALUES (64, 'Prakarya dan Kewirausahaan X2', '12347', 'Ditto', '2018-08-02', '2018-08-08', 'pinjam');

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_user`
-- 

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) collate latin1_general_ci NOT NULL,
  `password` varchar(100) collate latin1_general_ci NOT NULL,
  `nama` varchar(200) collate latin1_general_ci NOT NULL,
  `level` varchar(30) collate latin1_general_ci NOT NULL,
  `foto` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `tb_user`
-- 

INSERT INTO `tb_user` VALUES (1, 'admin', 'admin', 'admin', 'admin', 'g1.png');
INSERT INTO `tb_user` VALUES (2, 'user', 'user', 'user', 'user', 'g2.png');
