-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2017 at 11:44 AM
-- Server version: 5.7.13-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_reservasi` int(20) NOT NULL,
  `no_ruangan` int(20) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `id_sesi` varchar(6) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_reservasi`, `no_ruangan`, `tgl_reservasi`, `id_sesi`, `keterangan`) VALUES
(7, 202, '2017-01-16', 'sesi2', 'Mandi'),
(7, 202, '2017-01-16', 'sesi3', 'Mamam'),
(7, 203, '2017-01-17', 'sesi2', 'aa'),
(7, 203, '2017-01-17', 'sesi3', 'aaa'),
(14, 202, '0000-00-00', 'sesi1', ''),
(14, 202, '0000-00-00', 'sesi2', ''),
(14, 202, '0000-00-00', 'sesi4', ''),
(15, 202, '2017-02-01', 'sesi1', ''),
(15, 202, '2017-02-01', 'sesi2', ''),
(15, 202, '2017-02-01', 'sesi4', ''),
(16, 211, '2017-01-20', 'sesi1', ''),
(16, 211, '2017-01-20', 'sesi2', ''),
(17, 211, '2017-01-20', 'sesi1', ''),
(17, 211, '2017-01-20', 'sesi2', ''),
(18, 211, '2017-01-20', 'sesi1', ''),
(18, 211, '2017-01-20', 'sesi2', ''),
(19, 201, '2017-01-18', 'sesi1', ''),
(20, 201, '2017-01-18', 'sesi1', ''),
(21, 201, '2017-01-18', 'sesi2', ''),
(22, 201, '2017-01-18', 'sesi2', ''),
(23, 205, '2017-01-20', 'sesi2', ''),
(24, 202, '2017-01-20', 'sesi3', ''),
(25, 201, '2017-01-17', 'sesi4', ''),
(26, 202, '2017-01-16', 'sesi1', ''),
(27, 202, '2017-01-16', 'sesi2', ''),
(28, 202, '2017-01-16', 'sesi3', ''),
(28, 202, '2017-01-16', 'sesi4', ''),
(29, 202, '2017-01-18', 'sesi1', 'Kanibal'),
(30, 212, '2017-01-24', 'sesi3', 'Vale'),
(30, 212, '2017-01-24', 'sesi4', 'Vale'),
(31, 203, '2017-01-17', 'sesi1', 'Uvubuuvuvu'),
(31, 203, '2017-01-17', 'sesi4', 'Uvubuuvuvu'),
(32, 202, '2017-01-17', 'sesi1', 'aa'),
(33, 201, '2017-01-17', 'sesi1', 'Pemweb'),
(33, 201, '2017-01-17', 'sesi2', 'Pemweb'),
(34, 208, '2017-01-17', 'sesi2', 'Aaaa'),
(35, 208, '2017-01-17', 'sesi1', 'aa'),
(36, 208, '2017-01-18', 'sesi1', 'Makan'),
(36, 208, '2017-01-18', 'sesi2', 'Makan'),
(37, 205, '2017-01-17', 'sesi1', 'Pemweb'),
(37, 205, '2017-01-17', 'sesi2', 'Pemweb'),
(38, 202, '2017-01-17', 'sesi2', 'Pemweb'),
(38, 202, '2017-01-17', 'sesi3', 'Pemweb'),
(38, 202, '2017-01-17', 'sesi4', 'Pemweb'),
(39, 206, '2017-01-17', 'sesi1', 'sa'),
(39, 206, '2017-01-17', 'sesi2', 'sa'),
(40, 206, '2017-01-17', 'sesi3', 'Aa'),
(40, 206, '2017-01-17', 'sesi4', 'Aa'),
(41, 206, '2017-01-17', 'sesi3', 'Aa'),
(41, 206, '2017-01-17', 'sesi4', 'Aa'),
(42, 206, '2017-01-17', 'sesi3', 'Aa'),
(42, 206, '2017-01-17', 'sesi4', 'Aa'),
(43, 206, '2017-01-17', 'sesi3', 'Aa'),
(43, 206, '2017-01-17', 'sesi4', 'Aa'),
(44, 206, '2017-01-17', 'sesi3', 'Aa'),
(44, 206, '2017-01-17', 'sesi4', 'Aa'),
(45, 206, '2017-01-17', 'sesi3', 'Aa'),
(45, 206, '2017-01-17', 'sesi4', 'Aa'),
(46, 206, '2017-01-17', 'sesi3', 'Aa'),
(46, 206, '2017-01-17', 'sesi4', 'Aa'),
(47, 206, '2017-01-17', 'sesi3', 'Aa'),
(47, 206, '2017-01-17', 'sesi4', 'Aa'),
(48, 206, '2017-01-17', 'sesi3', 'Aa'),
(48, 206, '2017-01-17', 'sesi4', 'Aa'),
(49, 206, '2017-01-17', 'sesi3', 'Aa'),
(49, 206, '2017-01-17', 'sesi4', 'Aa'),
(50, 206, '2017-01-17', 'sesi3', 'Aa'),
(50, 206, '2017-01-17', 'sesi4', 'Aa'),
(51, 206, '2017-01-17', 'sesi3', 'Aa'),
(51, 206, '2017-01-17', 'sesi4', 'Aa'),
(52, 206, '2017-01-17', 'sesi3', 'Aa'),
(52, 206, '2017-01-17', 'sesi4', 'Aa'),
(53, 206, '2017-01-17', 'sesi3', 'Aa'),
(53, 206, '2017-01-17', 'sesi4', 'Aa'),
(54, 206, '2017-01-17', 'sesi3', 'Aa'),
(54, 206, '2017-01-17', 'sesi4', 'Aa'),
(55, 206, '2017-01-17', 'sesi3', 'Aa'),
(55, 206, '2017-01-17', 'sesi4', 'Aa'),
(56, 206, '2017-01-17', 'sesi3', 'Aa'),
(56, 206, '2017-01-17', 'sesi4', 'Aa'),
(57, 206, '2017-01-17', 'sesi3', 'Aa'),
(57, 206, '2017-01-17', 'sesi4', 'Aa'),
(58, 206, '2017-01-17', 'sesi3', 'Aa'),
(58, 206, '2017-01-17', 'sesi4', 'Aa'),
(59, 206, '2017-01-17', 'sesi3', 'Aa'),
(59, 206, '2017-01-17', 'sesi4', 'Aa'),
(60, 206, '2017-01-17', 'sesi3', 'Aa'),
(60, 206, '2017-01-17', 'sesi4', 'Aa'),
(61, 206, '2017-01-17', 'sesi3', 'Aa'),
(61, 206, '2017-01-17', 'sesi4', 'Aa'),
(62, 206, '2017-01-17', 'sesi3', 'Aa'),
(62, 206, '2017-01-17', 'sesi4', 'Aa'),
(63, 206, '2017-01-17', 'sesi3', 'Aa'),
(63, 206, '2017-01-17', 'sesi4', 'Aa'),
(64, 206, '2017-01-17', 'sesi3', 'Aa'),
(64, 206, '2017-01-17', 'sesi4', 'Aa'),
(65, 206, '2017-01-17', 'sesi3', 'Aa'),
(65, 206, '2017-01-17', 'sesi4', 'Aa'),
(66, 206, '2017-01-17', 'sesi3', 'Aa'),
(66, 206, '2017-01-17', 'sesi4', 'Aa'),
(67, 206, '2017-01-17', 'sesi3', 'Aa'),
(67, 206, '2017-01-17', 'sesi4', 'Aa'),
(68, 206, '2017-01-17', 'sesi3', 'Aa'),
(68, 206, '2017-01-17', 'sesi4', 'Aa'),
(69, 210, '2017-01-17', 'sesi1', 'Pemweb'),
(69, 210, '2017-01-17', 'sesi2', 'Pemweb');

--
-- Triggers `detail`
--
DELIMITER $$
CREATE TRIGGER `copy_temp` AFTER INSERT ON `detail` FOR EACH ROW INSERT INTO `temp`(`id_reservasi`, `no_ruangan`, `tgl_reservasi`, `id_sesi`, `keterangan`) VALUES (NEW.id_reservasi, NEW.no_ruangan, NEW.tgl_reservasi, NEW.id_sesi, NEW.keterangan)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservasi` int(20) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `tgl_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservasi`, `nama_peminjam`, `id_admin`, `tgl_pinjam`) VALUES
(1, 'Admin', 1, '2017-01-14 15:49:04'),
(7, 'Mona', 1, '2017-01-13 17:00:00'),
(8, 'Nina', 1, '2017-01-14 14:48:25'),
(10, 'Aaa', 1, '2017-01-14 15:33:33'),
(11, 'Aaa', 1, '2017-01-14 16:01:31'),
(12, 'Listiani', 1, '2017-01-14 16:09:36'),
(13, 'Listiani', 1, '2017-01-14 16:11:50'),
(14, 'Listiani', 1, '2017-01-14 16:12:30'),
(15, 'Listiani', 1, '2017-01-14 16:13:40'),
(16, 'Listiani', 1, '2017-01-14 16:49:15'),
(17, 'Listiani', 1, '2017-01-14 16:49:46'),
(18, 'Listiani', 1, '2017-01-14 16:50:49'),
(19, 'Abu', 1, '2017-01-14 17:39:46'),
(20, 'Abu', 1, '2017-01-14 17:41:38'),
(21, 'Aaa', 1, '2017-01-14 17:41:55'),
(22, 'Aaa', 1, '2017-01-14 17:44:02'),
(23, 'Aaa', 1, '2017-01-14 23:50:45'),
(24, 'Listiani', 1, '2017-01-14 23:51:04'),
(25, 'Nidyato', 1, '2017-01-15 02:37:15'),
(26, 'Apapapa', 1, '2017-01-16 07:56:40'),
(27, 'Listiani', 1, '2017-01-16 15:50:40'),
(28, 'Andika', 1, '2017-01-16 16:17:24'),
(29, 'Hannifa', 1, '2017-01-16 16:20:49'),
(30, 'Andi', 1, '2017-01-16 16:28:44'),
(31, 'Dumy', 1, '2017-01-17 02:58:39'),
(32, 'Dumy', 1, '2017-01-17 03:07:36'),
(33, 'Hanna', 1, '2017-01-17 03:24:58'),
(34, 'Listi', 1, '2017-01-17 03:27:13'),
(35, 'aa', 1, '2017-01-17 03:27:23'),
(36, 'Uvuvuuvuv', 1, '2017-01-17 03:30:50'),
(37, 'Hanna', 1, '2017-01-17 10:35:45'),
(38, 'Hani', 1, '2017-01-17 10:36:22'),
(39, 'aa', 1, '2017-01-17 10:40:02'),
(40, 'aa', 1, '2017-01-17 10:43:13'),
(41, 'aa', 1, '2017-01-17 10:43:50'),
(42, 'aa', 1, '2017-01-17 10:45:35'),
(43, 'aa', 1, '2017-01-17 10:46:06'),
(44, 'aa', 1, '2017-01-17 10:46:34'),
(45, 'aa', 1, '2017-01-17 10:48:03'),
(46, 'aa', 1, '2017-01-17 10:48:28'),
(47, 'aa', 1, '2017-01-17 10:48:53'),
(48, 'aa', 1, '2017-01-17 10:49:45'),
(49, 'aa', 1, '2017-01-17 10:50:51'),
(50, 'aa', 1, '2017-01-17 10:51:00'),
(51, 'aa', 1, '2017-01-17 10:52:43'),
(52, 'aa', 1, '2017-01-17 10:53:08'),
(53, 'aa', 1, '2017-01-17 10:53:29'),
(54, 'aa', 1, '2017-01-17 10:54:31'),
(55, 'aa', 1, '2017-01-17 10:55:12'),
(56, 'aa', 1, '2017-01-17 10:55:51'),
(57, 'aa', 1, '2017-01-17 10:56:05'),
(58, 'aa', 1, '2017-01-17 10:56:51'),
(59, 'aa', 1, '2017-01-17 10:57:20'),
(60, 'aa', 1, '2017-01-17 10:57:25'),
(61, 'aa', 1, '2017-01-17 10:57:37'),
(62, 'aa', 1, '2017-01-17 10:57:51'),
(63, 'aa', 1, '2017-01-17 10:58:04'),
(64, 'aa', 1, '2017-01-17 10:58:17'),
(65, 'aa', 1, '2017-01-17 10:58:34'),
(66, 'aa', 1, '2017-01-17 10:58:49'),
(67, 'aa', 1, '2017-01-17 10:59:00'),
(68, 'aa', 1, '2017-01-17 11:00:28'),
(69, 'Adi', 1, '2017-01-17 11:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `no_ruangan` int(20) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`no_ruangan`, `nama_ruangan`, `status`) VALUES
(201, 'B201', ''),
(202, 'B202', ''),
(203, 'B203', ''),
(204, 'B204', ''),
(205, 'B205', ''),
(206, 'B206', ''),
(207, 'B207', ''),
(208, 'B208', ''),
(209, 'B209', ''),
(210, 'B210', ''),
(211, 'B211', ''),
(212, 'B212', ''),
(213, 'B213', ''),
(214, 'B214', ''),
(215, 'B215', ''),
(216, 'B216', ''),
(217, 'B217', ''),
(218, 'B218', ''),
(219, 'B219', ''),
(220, 'B220', '');

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` varchar(6) NOT NULL,
  `nama_sesi` varchar(25) NOT NULL,
  `jam_sesi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`id_sesi`, `nama_sesi`, `jam_sesi`) VALUES
('sesi1', 'Sesi 1', '08.00-10.00'),
('sesi2', 'Sesi 2', '10.00-12.00'),
('sesi3', 'Sesi 3', '13.00-15.00'),
('sesi4', 'Sesi 4', '15.00-17.00');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id_reservasi` int(20) NOT NULL,
  `no_ruangan` int(20) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `id_sesi` varchar(6) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id_reservasi`, `no_ruangan`, `tgl_reservasi`, `id_sesi`, `keterangan`) VALUES
(1, 202, '2016-12-27', 'sesi1', 'Makan'),
(1, 203, '2016-12-28', 'sesi1', 'Mandi'),
(1, 205, '2016-12-27', 'sesi1', 'Minum'),
(7, 203, '2017-01-17', 'sesi2', 'aa'),
(7, 203, '2017-01-17', 'sesi3', 'aaa'),
(14, 202, '0000-00-00', 'sesi1', ''),
(14, 202, '0000-00-00', 'sesi2', ''),
(14, 202, '0000-00-00', 'sesi4', ''),
(15, 202, '2017-02-01', 'sesi1', ''),
(15, 202, '2017-02-01', 'sesi2', ''),
(15, 202, '2017-02-01', 'sesi4', ''),
(16, 211, '2017-01-20', 'sesi1', ''),
(16, 211, '2017-01-20', 'sesi2', ''),
(17, 211, '2017-01-20', 'sesi1', ''),
(17, 211, '2017-01-20', 'sesi2', ''),
(18, 211, '2017-01-20', 'sesi1', ''),
(18, 211, '2017-01-20', 'sesi2', ''),
(19, 201, '2017-01-18', 'sesi1', ''),
(20, 201, '2017-01-18', 'sesi1', ''),
(21, 201, '2017-01-18', 'sesi2', ''),
(22, 201, '2017-01-18', 'sesi2', ''),
(23, 205, '2017-01-20', 'sesi2', ''),
(24, 202, '2017-01-20', 'sesi3', ''),
(25, 201, '2017-01-17', 'sesi4', ''),
(26, 202, '2017-01-16', 'sesi1', ''),
(27, 202, '2017-01-16', 'sesi2', ''),
(28, 202, '2017-01-16', 'sesi3', ''),
(28, 202, '2017-01-16', 'sesi4', ''),
(29, 202, '2017-01-18', 'sesi1', 'Kanibal'),
(30, 212, '2017-01-24', 'sesi3', 'Vale'),
(30, 212, '2017-01-24', 'sesi4', 'Vale'),
(31, 203, '2017-01-17', 'sesi1', 'Uvubuuvuvu'),
(31, 203, '2017-01-17', 'sesi4', 'Uvubuuvuvu'),
(32, 202, '2017-01-17', 'sesi1', 'aa'),
(33, 201, '2017-01-17', 'sesi1', 'Pemweb'),
(33, 201, '2017-01-17', 'sesi2', 'Pemweb'),
(34, 208, '2017-01-17', 'sesi2', 'Aaaa'),
(35, 208, '2017-01-17', 'sesi1', 'aa'),
(36, 208, '2017-01-18', 'sesi1', 'Makan'),
(36, 208, '2017-01-18', 'sesi2', 'Makan'),
(37, 205, '2017-01-17', 'sesi1', 'Pemweb'),
(37, 205, '2017-01-17', 'sesi2', 'Pemweb'),
(38, 202, '2017-01-17', 'sesi2', 'Pemweb'),
(38, 202, '2017-01-17', 'sesi3', 'Pemweb'),
(38, 202, '2017-01-17', 'sesi4', 'Pemweb'),
(39, 206, '2017-01-17', 'sesi1', 'sa'),
(39, 206, '2017-01-17', 'sesi2', 'sa'),
(40, 206, '2017-01-17', 'sesi3', 'Aa'),
(40, 206, '2017-01-17', 'sesi4', 'Aa'),
(41, 206, '2017-01-17', 'sesi3', 'Aa'),
(41, 206, '2017-01-17', 'sesi4', 'Aa'),
(42, 206, '2017-01-17', 'sesi3', 'Aa'),
(42, 206, '2017-01-17', 'sesi4', 'Aa'),
(43, 206, '2017-01-17', 'sesi3', 'Aa'),
(43, 206, '2017-01-17', 'sesi4', 'Aa'),
(44, 206, '2017-01-17', 'sesi3', 'Aa'),
(44, 206, '2017-01-17', 'sesi4', 'Aa'),
(45, 206, '2017-01-17', 'sesi3', 'Aa'),
(45, 206, '2017-01-17', 'sesi4', 'Aa'),
(46, 206, '2017-01-17', 'sesi3', 'Aa'),
(46, 206, '2017-01-17', 'sesi4', 'Aa'),
(47, 206, '2017-01-17', 'sesi3', 'Aa'),
(47, 206, '2017-01-17', 'sesi4', 'Aa'),
(48, 206, '2017-01-17', 'sesi3', 'Aa'),
(48, 206, '2017-01-17', 'sesi4', 'Aa'),
(49, 206, '2017-01-17', 'sesi3', 'Aa'),
(49, 206, '2017-01-17', 'sesi4', 'Aa'),
(50, 206, '2017-01-17', 'sesi3', 'Aa'),
(50, 206, '2017-01-17', 'sesi4', 'Aa'),
(51, 206, '2017-01-17', 'sesi3', 'Aa'),
(51, 206, '2017-01-17', 'sesi4', 'Aa'),
(52, 206, '2017-01-17', 'sesi3', 'Aa'),
(52, 206, '2017-01-17', 'sesi4', 'Aa'),
(53, 206, '2017-01-17', 'sesi3', 'Aa'),
(53, 206, '2017-01-17', 'sesi4', 'Aa'),
(54, 206, '2017-01-17', 'sesi3', 'Aa'),
(54, 206, '2017-01-17', 'sesi4', 'Aa'),
(55, 206, '2017-01-17', 'sesi3', 'Aa'),
(55, 206, '2017-01-17', 'sesi4', 'Aa'),
(56, 206, '2017-01-17', 'sesi3', 'Aa'),
(56, 206, '2017-01-17', 'sesi4', 'Aa'),
(57, 206, '2017-01-17', 'sesi3', 'Aa'),
(57, 206, '2017-01-17', 'sesi4', 'Aa'),
(58, 206, '2017-01-17', 'sesi3', 'Aa'),
(58, 206, '2017-01-17', 'sesi4', 'Aa'),
(59, 206, '2017-01-17', 'sesi3', 'Aa'),
(59, 206, '2017-01-17', 'sesi4', 'Aa'),
(60, 206, '2017-01-17', 'sesi3', 'Aa'),
(60, 206, '2017-01-17', 'sesi4', 'Aa'),
(61, 206, '2017-01-17', 'sesi3', 'Aa'),
(61, 206, '2017-01-17', 'sesi4', 'Aa'),
(62, 206, '2017-01-17', 'sesi3', 'Aa'),
(62, 206, '2017-01-17', 'sesi4', 'Aa'),
(63, 206, '2017-01-17', 'sesi3', 'Aa'),
(63, 206, '2017-01-17', 'sesi4', 'Aa'),
(64, 206, '2017-01-17', 'sesi3', 'Aa'),
(64, 206, '2017-01-17', 'sesi4', 'Aa'),
(65, 206, '2017-01-17', 'sesi3', 'Aa'),
(65, 206, '2017-01-17', 'sesi4', 'Aa'),
(66, 206, '2017-01-17', 'sesi3', 'Aa'),
(66, 206, '2017-01-17', 'sesi4', 'Aa'),
(67, 206, '2017-01-17', 'sesi3', 'Aa'),
(67, 206, '2017-01-17', 'sesi4', 'Aa'),
(68, 206, '2017-01-17', 'sesi3', 'Aa'),
(68, 206, '2017-01-17', 'sesi4', 'Aa'),
(69, 210, '2017-01-17', 'sesi1', 'Pemweb'),
(69, 210, '2017-01-17', 'sesi2', 'Pemweb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD KEY `no_ruangan` (`no_ruangan`),
  ADD KEY `id_sesi` (`id_sesi`),
  ADD KEY `id_reservasi` (`id_reservasi`) USING BTREE;

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `reservation_ibfk_1` (`id_admin`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`no_ruangan`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD KEY `id_reservasi` (`id_reservasi`),
  ADD KEY `no_ruangan` (`no_ruangan`),
  ADD KEY `sesi_temp_fk` (`id_sesi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `reservation` (`id_reservasi`),
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`no_ruangan`) REFERENCES `ruangan` (`no_ruangan`),
  ADD CONSTRAINT `sesi_fk` FOREIGN KEY (`id_sesi`) REFERENCES `sesi` (`id_sesi`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `temp`
--
ALTER TABLE `temp`
  ADD CONSTRAINT `sesi_temp_fk` FOREIGN KEY (`id_sesi`) REFERENCES `sesi` (`id_sesi`),
  ADD CONSTRAINT `temp_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `reservation` (`id_reservasi`),
  ADD CONSTRAINT `temp_ibfk_2` FOREIGN KEY (`no_ruangan`) REFERENCES `ruangan` (`no_ruangan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
