-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2015 at 04:18 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` varchar(30) NOT NULL,
  `id_thread` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `isi_comment` varchar(50) NOT NULL,
  `tanggal_comment` varchar(15) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(30) NOT NULL,
  `judul_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(50) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `mime_type` varchar(20) NOT NULL,
  `file_data` varchar(30) NOT NULL,
  `jawaban` varchar(20) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `join` datetime NOT NULL,
  `ulang_tahun` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--


-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tanggal_message` date NOT NULL,
  `isi_message` varchar(30) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `reputasi`
--

CREATE TABLE IF NOT EXISTS `reputasi` (
  `id_reputasi` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `reputasi` varchar(20) NOT NULL,
  `komentar` varchar(30) NOT NULL,
  `tanggal_reputasi` date NOT NULL,
  `id_thread` varchar(30) NOT NULL,
  PRIMARY KEY (`id_reputasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reputasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `id_thread` varchar(30) NOT NULL,
  `id_kategori` varchar(30) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` varchar(30) NOT NULL,
  `tanggal_thread` date NOT NULL,
  `rating` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id_thread`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

