-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 07:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`, `jumlah`, `jumlah2`) VALUES
(1, 'Senin', 7, 6),
(2, 'Selasa', 7, 6),
(3, 'Rabu', 7, 6),
(4, 'Kamis', 7, 6),
(5, 'Jumat', 8, 6),
(6, 'Sabtu', 2, 2),
(7, 'Minggu', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `id_job` varchar(30) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `jml` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `id_job`, `shift`, `jml`) VALUES
(1, 'Senin', '2', '1', 1),
(2, 'Senin', '3', '1', 1),
(3, 'Senin', '1', '1', 1),
(4, 'Senin', '4', '1', 4),
(5, 'Selasa', '2', '1', 1),
(6, 'Selasa', '3', '1', 1),
(7, 'Selasa', '1', '1', 1),
(8, 'Selasa', '4', '1', 4),
(9, 'Rabu', '2', '1', 1),
(10, 'Rabu', '3', '1', 1),
(11, 'Rabu', '1', '1', 1),
(12, 'Rabu', '4', '1', 4),
(13, 'Kamis', '2', '1', 1),
(14, 'Kamis', '3', '1', 1),
(15, 'Kamis', '1', '1', 1),
(16, 'Kamis', '4', '1', 4),
(17, 'Jumat', '2', '1', 2),
(18, 'Jumat', '3', '1', 1),
(19, 'Jumat', '1', '1', 1),
(20, 'Jumat', '4', '1', 4),
(23, 'Sabtu', '6', '1', 1),
(24, 'Minggu', '6', '1', 1),
(25, 'Senin', '1', '2', 1),
(26, 'Senin', '5', '2', 1),
(27, 'Senin', '4', '2', 4),
(28, 'Selasa', '1', '2', 1),
(29, 'Selasa', '5', '2', 1),
(30, 'Selasa', '4', '2', 4),
(31, 'Rabu', '1', '2', 1),
(32, 'Rabu', '5', '2', 1),
(33, 'Rabu', '4', '2', 4),
(34, 'Kamis', '1', '2', 1),
(35, 'Kamis', '5', '2', 1),
(36, 'Kamis', '4', '2', 4),
(37, 'Jumat', '1', '2', 1),
(38, 'Jumat', '5', '2', 1),
(39, 'Jumat', '4', '2', 4),
(40, 'Sabtu', '6', '2', 1),
(41, 'Sabtu', '5', '2', 1),
(42, 'Minggu', '6', '2', 1),
(43, 'Minggu', '5', '2', 1),
(44, 'Minggu', '5', '1', 1),
(45, 'Sabtu', '5', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_karyawan`
--

CREATE TABLE `jadwal_karyawan` (
  `no` int(11) NOT NULL,
  `minggu_ke` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_karyawan`
--

INSERT INTO `jadwal_karyawan` (`no`, `minggu_ke`, `hari`, `shift`, `nip`) VALUES
(42033, 1, 'Senin', '1', '7'),
(42034, 1, 'Senin', '1', '4'),
(42035, 1, 'Senin', '1', '12'),
(42036, 1, 'Senin', '1', '22'),
(42037, 1, 'Senin', '1', '15'),
(42038, 1, 'Senin', '1', '16'),
(42039, 1, 'Senin', '1', '23'),
(42040, 1, 'Senin', '2', '5'),
(42041, 1, 'Senin', '2', '10'),
(42042, 1, 'Senin', '2', '13'),
(42043, 1, 'Senin', '2', '17'),
(42044, 1, 'Senin', '2', '24'),
(42045, 1, 'Senin', '2', '6'),
(42046, 1, 'Selasa', '1', '7'),
(42047, 1, 'Selasa', '1', '4'),
(42048, 1, 'Selasa', '1', '3'),
(42049, 1, 'Selasa', '1', '17'),
(42050, 1, 'Selasa', '1', '16'),
(42051, 1, 'Selasa', '1', '6'),
(42052, 1, 'Selasa', '1', '21'),
(42053, 1, 'Selasa', '2', '1'),
(42054, 1, 'Selasa', '2', '20'),
(42055, 1, 'Selasa', '2', '14'),
(42056, 1, 'Selasa', '2', '15'),
(42057, 1, 'Selasa', '2', '18'),
(42058, 1, 'Selasa', '2', '24'),
(42059, 1, 'Rabu', '1', '6'),
(42060, 1, 'Rabu', '1', '2'),
(42061, 1, 'Rabu', '1', '3'),
(42062, 1, 'Rabu', '1', '18'),
(42063, 1, 'Rabu', '1', '21'),
(42064, 1, 'Rabu', '1', '15'),
(42065, 1, 'Rabu', '1', '13'),
(42066, 1, 'Rabu', '2', '5'),
(42067, 1, 'Rabu', '2', '9'),
(42068, 1, 'Rabu', '2', '20'),
(42069, 1, 'Rabu', '2', '14'),
(42070, 1, 'Rabu', '2', '19'),
(42071, 1, 'Rabu', '2', '23'),
(42072, 1, 'Kamis', '1', '7'),
(42073, 1, 'Kamis', '1', '4'),
(42074, 1, 'Kamis', '1', '12'),
(42075, 1, 'Kamis', '1', '21'),
(42076, 1, 'Kamis', '1', '5'),
(42077, 1, 'Kamis', '1', '25'),
(42078, 1, 'Kamis', '1', '19'),
(42079, 1, 'Kamis', '2', '7'),
(42080, 1, 'Kamis', '2', '9'),
(42081, 1, 'Kamis', '2', '23'),
(42082, 1, 'Kamis', '2', '16'),
(42083, 1, 'Kamis', '2', '17'),
(42084, 1, 'Kamis', '2', '22'),
(42085, 1, 'Jumat', '1', '7'),
(42086, 1, 'Jumat', '1', '6'),
(42087, 1, 'Jumat', '1', '4'),
(42088, 1, 'Jumat', '1', '3'),
(42089, 1, 'Jumat', '1', '22'),
(42090, 1, 'Jumat', '1', '19'),
(42091, 1, 'Jumat', '1', '15'),
(42092, 1, 'Jumat', '1', '18'),
(42093, 1, 'Jumat', '2', '1'),
(42094, 1, 'Jumat', '2', '16'),
(42095, 1, 'Jumat', '2', '25'),
(42096, 1, 'Jumat', '2', '13'),
(42097, 1, 'Jumat', '2', '8'),
(42098, 1, 'Jumat', '2', '24'),
(42099, 1, 'Sabtu', '1', '24'),
(42100, 1, 'Sabtu', '1', '9'),
(42101, 1, 'Sabtu', '2', '20'),
(42102, 1, 'Sabtu', '2', '10'),
(42103, 1, 'Minggu', '1', '16'),
(42104, 1, 'Minggu', '1', '10'),
(42105, 1, 'Minggu', '2', '25'),
(42106, 1, 'Minggu', '2', '6'),
(42107, 2, 'Senin', '1', '5'),
(42108, 2, 'Senin', '1', '1'),
(42109, 2, 'Senin', '1', '4'),
(42110, 2, 'Senin', '1', '16'),
(42111, 2, 'Senin', '1', '19'),
(42112, 2, 'Senin', '1', '21'),
(42113, 2, 'Senin', '1', '15'),
(42114, 2, 'Senin', '2', '2'),
(42115, 2, 'Senin', '2', '10'),
(42116, 2, 'Senin', '2', '18'),
(42117, 2, 'Senin', '2', '24'),
(42118, 2, 'Senin', '2', '22'),
(42119, 2, 'Senin', '2', '20'),
(42120, 2, 'Selasa', '1', '5'),
(42121, 2, 'Selasa', '1', '1'),
(42122, 2, 'Selasa', '1', '12'),
(42123, 2, 'Selasa', '1', '14'),
(42124, 2, 'Selasa', '1', '18'),
(42125, 2, 'Selasa', '1', '6'),
(42126, 2, 'Selasa', '1', '5'),
(42127, 2, 'Selasa', '2', '7'),
(42128, 2, 'Selasa', '2', '9'),
(42129, 2, 'Selasa', '2', '15'),
(42130, 2, 'Selasa', '2', '19'),
(42131, 2, 'Selasa', '2', '13'),
(42132, 2, 'Selasa', '2', '22'),
(42133, 2, 'Rabu', '1', '6'),
(42134, 2, 'Rabu', '1', '3'),
(42135, 2, 'Rabu', '1', '12'),
(42136, 2, 'Rabu', '1', '23'),
(42137, 2, 'Rabu', '1', '20'),
(42138, 2, 'Rabu', '1', '18'),
(42139, 2, 'Rabu', '1', '19'),
(42140, 2, 'Rabu', '2', '5'),
(42141, 2, 'Rabu', '2', '10'),
(42142, 2, 'Rabu', '2', '7'),
(42143, 2, 'Rabu', '2', '22'),
(42144, 2, 'Rabu', '2', '8'),
(42145, 2, 'Rabu', '2', '14'),
(42146, 2, 'Kamis', '1', '6'),
(42147, 2, 'Kamis', '1', '3'),
(42148, 2, 'Kamis', '1', '4'),
(42149, 2, 'Kamis', '1', '14'),
(42150, 2, 'Kamis', '1', '17'),
(42151, 2, 'Kamis', '1', '21'),
(42152, 2, 'Kamis', '1', '18'),
(42153, 2, 'Kamis', '2', '7'),
(42154, 2, 'Kamis', '2', '9'),
(42155, 2, 'Kamis', '2', '24'),
(42156, 2, 'Kamis', '2', '20'),
(42157, 2, 'Kamis', '2', '23'),
(42158, 2, 'Kamis', '2', '15'),
(42159, 2, 'Jumat', '1', '7'),
(42160, 2, 'Jumat', '1', '5'),
(42161, 2, 'Jumat', '1', '4'),
(42162, 2, 'Jumat', '1', '4'),
(42163, 2, 'Jumat', '1', '14'),
(42164, 2, 'Jumat', '1', '14'),
(42165, 2, 'Jumat', '1', '22'),
(42166, 2, 'Jumat', '1', '23'),
(42167, 2, 'Jumat', '2', '2'),
(42168, 2, 'Jumat', '2', '9'),
(42169, 2, 'Jumat', '2', '24'),
(42170, 2, 'Jumat', '2', '18'),
(42171, 2, 'Jumat', '2', '13'),
(42172, 2, 'Jumat', '2', '17'),
(42173, 2, 'Sabtu', '1', '13'),
(42174, 2, 'Sabtu', '1', '5'),
(42175, 2, 'Sabtu', '2', '25'),
(42176, 2, 'Sabtu', '2', '10'),
(42177, 2, 'Minggu', '1', '16'),
(42178, 2, 'Minggu', '1', '9'),
(42179, 2, 'Minggu', '2', '19'),
(42180, 2, 'Minggu', '2', '10'),
(42181, 3, 'Senin', '1', '6'),
(42182, 3, 'Senin', '1', '3'),
(42183, 3, 'Senin', '1', '12'),
(42184, 3, 'Senin', '1', '16'),
(42185, 3, 'Senin', '1', '23'),
(42186, 3, 'Senin', '1', '21'),
(42187, 3, 'Senin', '1', '5'),
(42188, 3, 'Senin', '2', '2'),
(42189, 3, 'Senin', '2', '10'),
(42190, 3, 'Senin', '2', '22'),
(42191, 3, 'Senin', '2', '25'),
(42192, 3, 'Senin', '2', '13'),
(42193, 3, 'Senin', '2', '20'),
(42194, 3, 'Selasa', '1', '6'),
(42195, 3, 'Selasa', '1', '3'),
(42196, 3, 'Selasa', '1', '4'),
(42197, 3, 'Selasa', '1', '5'),
(42198, 3, 'Selasa', '1', '7'),
(42199, 3, 'Selasa', '1', '19'),
(42200, 3, 'Selasa', '1', '14'),
(42201, 3, 'Selasa', '2', '11'),
(42202, 3, 'Selasa', '2', '10'),
(42203, 3, 'Selasa', '2', '20'),
(42204, 3, 'Selasa', '2', '24'),
(42205, 3, 'Selasa', '2', '18'),
(42206, 3, 'Selasa', '2', '22'),
(42207, 3, 'Rabu', '1', '6'),
(42208, 3, 'Rabu', '1', '2'),
(42209, 3, 'Rabu', '1', '3'),
(42210, 3, 'Rabu', '1', '24'),
(42211, 3, 'Rabu', '1', '15'),
(42212, 3, 'Rabu', '1', '17'),
(42213, 3, 'Rabu', '1', '13'),
(42214, 3, 'Rabu', '2', '1'),
(42215, 3, 'Rabu', '2', '18'),
(42216, 3, 'Rabu', '2', '14'),
(42217, 3, 'Rabu', '2', '19'),
(42218, 3, 'Rabu', '2', '8'),
(42219, 3, 'Rabu', '2', '7'),
(42220, 3, 'Kamis', '1', '5'),
(42221, 3, 'Kamis', '1', '1'),
(42222, 3, 'Kamis', '1', '8'),
(42223, 3, 'Kamis', '1', '23'),
(42224, 3, 'Kamis', '1', '21'),
(42225, 3, 'Kamis', '1', '15'),
(42226, 3, 'Kamis', '1', '17'),
(42227, 3, 'Kamis', '2', '7'),
(42228, 3, 'Kamis', '2', '10'),
(42229, 3, 'Kamis', '2', '25'),
(42230, 3, 'Kamis', '2', '24'),
(42231, 3, 'Kamis', '2', '16'),
(42232, 3, 'Kamis', '2', '14'),
(42233, 3, 'Jumat', '1', '6'),
(42234, 3, 'Jumat', '1', '5'),
(42235, 3, 'Jumat', '1', '4'),
(42236, 3, 'Jumat', '1', '3'),
(42237, 3, 'Jumat', '1', '22'),
(42238, 3, 'Jumat', '1', '25'),
(42239, 3, 'Jumat', '1', '15'),
(42240, 3, 'Jumat', '1', '21'),
(42241, 3, 'Jumat', '2', '2'),
(42242, 3, 'Jumat', '2', '10'),
(42243, 3, 'Jumat', '2', '8'),
(42244, 3, 'Jumat', '2', '18'),
(42245, 3, 'Jumat', '2', '16'),
(42246, 3, 'Jumat', '2', '19'),
(42247, 3, 'Sabtu', '1', '8'),
(42248, 3, 'Sabtu', '1', '9'),
(42249, 3, 'Sabtu', '2', '6'),
(42250, 3, 'Sabtu', '2', '10'),
(42251, 3, 'Minggu', '1', '24'),
(42252, 3, 'Minggu', '1', '9'),
(42253, 3, 'Minggu', '2', '20'),
(42254, 3, 'Minggu', '2', '10'),
(42255, 4, 'Senin', '1', '5'),
(42256, 4, 'Senin', '1', '2'),
(42257, 4, 'Senin', '1', '12'),
(42258, 4, 'Senin', '1', '16'),
(42259, 4, 'Senin', '1', '24'),
(42260, 4, 'Senin', '1', '19'),
(42261, 4, 'Senin', '1', '14'),
(42262, 4, 'Senin', '2', '6'),
(42263, 4, 'Senin', '2', '7'),
(42264, 4, 'Senin', '2', '20'),
(42265, 4, 'Senin', '2', '18'),
(42266, 4, 'Senin', '2', '25'),
(42267, 4, 'Senin', '2', '13'),
(42268, 4, 'Selasa', '1', '6'),
(42269, 4, 'Selasa', '1', '1'),
(42270, 4, 'Selasa', '1', '4'),
(42271, 4, 'Selasa', '1', '5'),
(42272, 4, 'Selasa', '1', '18'),
(42273, 4, 'Selasa', '1', '14'),
(42274, 4, 'Selasa', '1', '25'),
(42275, 4, 'Selasa', '2', '11'),
(42276, 4, 'Selasa', '2', '9'),
(42277, 4, 'Selasa', '2', '20'),
(42278, 4, 'Selasa', '2', '7'),
(42279, 4, 'Selasa', '2', '15'),
(42280, 4, 'Selasa', '2', '13'),
(42281, 4, 'Rabu', '1', '5'),
(42282, 4, 'Rabu', '1', '2'),
(42283, 4, 'Rabu', '1', '12'),
(42284, 4, 'Rabu', '1', '14'),
(42285, 4, 'Rabu', '1', '24'),
(42286, 4, 'Rabu', '1', '21'),
(42287, 4, 'Rabu', '1', '6'),
(42288, 4, 'Rabu', '2', '1'),
(42289, 4, 'Rabu', '2', '9'),
(42290, 4, 'Rabu', '2', '15'),
(42291, 4, 'Rabu', '2', '23'),
(42292, 4, 'Rabu', '2', '25'),
(42293, 4, 'Rabu', '2', '13'),
(42294, 4, 'Kamis', '1', '6'),
(42295, 4, 'Kamis', '1', '4'),
(42296, 4, 'Kamis', '1', '12'),
(42297, 4, 'Kamis', '1', '17'),
(42298, 4, 'Kamis', '1', '14'),
(42299, 4, 'Kamis', '1', '21'),
(42300, 4, 'Kamis', '1', '13'),
(42301, 4, 'Kamis', '2', '5'),
(42302, 4, 'Kamis', '2', '10'),
(42303, 4, 'Kamis', '2', '7'),
(42304, 4, 'Kamis', '2', '18'),
(42305, 4, 'Kamis', '2', '15'),
(42306, 4, 'Kamis', '2', '8'),
(42307, 4, 'Jumat', '1', '7'),
(42308, 4, 'Jumat', '1', '6'),
(42309, 4, 'Jumat', '1', '2'),
(42310, 4, 'Jumat', '1', '4'),
(42311, 4, 'Jumat', '1', '15'),
(42312, 4, 'Jumat', '1', '19'),
(42313, 4, 'Jumat', '1', '5'),
(42314, 4, 'Jumat', '1', '21'),
(42315, 4, 'Jumat', '2', '1'),
(42316, 4, 'Jumat', '2', '9'),
(42317, 4, 'Jumat', '2', '13'),
(42318, 4, 'Jumat', '2', '25'),
(42319, 4, 'Jumat', '2', '24'),
(42320, 4, 'Jumat', '2', '14'),
(42321, 4, 'Sabtu', '1', '1'),
(42322, 4, 'Sabtu', '1', '9'),
(42323, 4, 'Sabtu', '2', '19'),
(42324, 4, 'Sabtu', '2', '9'),
(42325, 4, 'Minggu', '1', '1'),
(42326, 4, 'Minggu', '1', '10'),
(42327, 4, 'Minggu', '2', '22'),
(42328, 4, 'Minggu', '2', '15');

-- --------------------------------------------------------

--
-- Table structure for table `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `kode_jenis` varchar(1) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`kode_jenis`, `jenis_kelamin`) VALUES
('L', 'Laki-laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `job`) VALUES
('1', 'SPV'),
('2', 'MPL'),
('3', 'DTA'),
('4', 'OPT'),
('5', 'AOP'),
('6', 'OPTW');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nip`, `nama`, `jenis_kelamin`) VALUES
('1', 'Patria', 'L'),
('10', 'Bachtiar', 'L'),
('11', 'Amrullah', 'L'),
('12', 'Desti', 'P'),
('13', 'Kirun', 'P'),
('14', 'Adelia', 'P'),
('15', 'Ulfa', 'P'),
('16', 'Aulia', 'P'),
('17', 'Isma', 'P'),
('18', 'Sri', 'P'),
('19', 'Gafur', 'L'),
('2', 'Satria', 'L'),
('20', 'Dede', 'L'),
('21', 'Aden', 'L'),
('22', 'Maul', 'L'),
('23', 'Azzam', 'L'),
('24', 'Reyza', 'L'),
('25', 'Bayu', 'L'),
('3', 'Salas', 'P'),
('4', 'Momoi', 'P'),
('5', 'Nova', 'L'),
('6', 'Rise', 'P'),
('7', 'Zammir', 'L'),
('8', 'Sigit', 'L'),
('9', 'Tantra', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `log_ga`
--

CREATE TABLE `log_ga` (
  `id` int(11) NOT NULL,
  `mutation_rate` float NOT NULL,
  `individu` int(11) NOT NULL,
  `fitness` int(11) NOT NULL,
  `time` float NOT NULL,
  `suhu` int(11) NOT NULL,
  `alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_ga`
--

INSERT INTO `log_ga` (`id`, `mutation_rate`, `individu`, `fitness`, `time`, `suhu`, `alpha`) VALUES
(6, 0.004, 10, 0, 645.059, 0, 0),
(7, 0.004, 10, 0, 3525.24, 0, 0),
(8, 0.004, 10, 0, 815.292, 0, 0),
(9, 0.004, 10, 0, 997.639, 0, 0),
(10, 0.004, 10, 0, 1307.7, 0, 0),
(11, 0.004, 10, 0, 1057.43, 0, 0),
(12, 0.004, 10, 0, 921.658, 0, 0),
(13, 0.004, 10, 0, 716.533, 0, 0),
(14, 0.004, 10, 0, 1877.72, 0, 0),
(15, 0.004, 10, 0, 966.945, 0, 0),
(16, 0.004, 10, 0, 768.854, 0, 0),
(17, 0.004, 10, 0, 2389.5, 0, 0),
(18, 0.004, 10, 0, 2182.53, 0, 0),
(19, 0.004, 10, 0, 1041.02, 0, 0),
(20, 0.004, 10, 0, 1110.1, 0, 0),
(21, 0.004, 10, 0, 815.836, 0, 0),
(22, 0.004, 10, 0, 966.136, 0, 0),
(23, 0.004, 10, 0, 1143.92, 0, 0),
(24, 0.004, 8, 0, 1862.99, 0, 0),
(25, 0.004, 8, 0, 1075.99, 0, 0),
(26, 0.004, 8, 0, 970.815, 0, 0),
(27, 0.004, 8, 0, 1094.66, 0, 0),
(28, 0.004, 8, 0, 1257.13, 0, 0),
(29, 0.004, 8, 0, 731.158, 0, 0),
(30, 0.004, 8, 0, 1772.76, 0, 0),
(31, 0.004, 8, 0, 2477.38, 0, 0),
(32, 0.004, 8, 0, 774.064, 0, 0),
(33, 0.004, 8, 0, 701.32, 0, 0),
(34, 0.004, 8, 0, 1989.51, 0, 0),
(35, 0.004, 8, 0, 1619.9, 0, 0),
(36, 0.004, 8, 0, 2769.2, 0, 0),
(37, 0.004, 8, 0, 1062.42, 0, 0),
(38, 0.004, 8, 0, 826.33, 0, 0),
(39, 0.004, 8, 0, 859.807, 0, 0),
(40, 0.004, 8, 0, 868.696, 0, 0),
(41, 0.004, 8, 0, 821.982, 0, 0),
(42, 0.004, 8, 0, 815.924, 0, 0),
(43, 0.004, 8, 0, 2271.63, 0, 0),
(44, 0.004, 8, 0, 1222.36, 0, 0),
(45, 0.004, 8, 0, 1530.12, 0, 0),
(46, 0.004, 6, 0, 1790.41, 0, 0),
(47, 0.004, 6, 0, 859.889, 0, 0),
(48, 0.004, 6, 0, 938.958, 0, 0),
(49, 0.004, 6, 0, 649.343, 0, 0),
(50, 0.004, 6, 0, 688.868, 0, 0),
(51, 0.004, 6, 0, 729.206, 0, 0),
(52, 0.004, 6, 0, 851.528, 0, 0),
(53, 0.004, 6, 0, 1099.24, 0, 0),
(54, 0.004, 6, 0, 1085.42, 0, 0),
(55, 0.004, 6, 0, 696.227, 0, 0),
(56, 0.004, 6, 0, 711.85, 0, 0),
(57, 0.004, 6, 0, 557.317, 0, 0),
(58, 0.004, 6, 0, 1010.46, 0, 0),
(59, 0.004, 6, 0, 531.528, 0, 0),
(60, 0.004, 6, 0, 1944.57, 0, 0),
(61, 0.004, 6, 0, 3974.44, 0, 0),
(62, 0.004, 6, 0, 2434.83, 0, 0),
(63, 0.004, 12, 0, 3804.34, 0, 0),
(64, 0.004, 12, 0, 1204.56, 0, 0),
(65, 0.004, 12, 0, 4689.38, 0, 0),
(66, 0.004, 12, 0, 1535.59, 0, 0),
(67, 0.004, 12, 0, 3326.67, 0, 0),
(68, 0.004, 12, 0, 1481.99, 0, 0),
(69, 0.006, 6, 0, 1453.44, 0, 0),
(70, 0.006, 6, 0, 1362.24, 0, 0),
(71, 0.006, 6, 0, 795.391, 0, 0),
(72, 0.006, 6, 0, 681.014, 0, 0),
(73, 0.006, 6, 0, 659.289, 0, 0),
(74, 0.006, 6, 0, 901.932, 0, 0),
(75, 0.006, 6, 0, 1227.33, 0, 0),
(76, 0.008, 6, 0, 948.566, 0, 0),
(77, 0.008, 6, 0, 975.87, 0, 0),
(78, 0.008, 6, 0, 1098.56, 0, 0),
(79, 0.008, 6, 0, 944.747, 0, 0),
(80, 0.008, 6, 0, 908.1, 0, 0),
(81, 0.008, 6, 0, 982.516, 0, 0),
(82, 0.008, 6, 0, 1099.66, 0, 0),
(83, 0.01, 6, 0, 1903.29, 0, 0),
(84, 0.01, 6, 0, 961.445, 0, 0),
(85, 0.01, 6, 0, 858.061, 0, 0),
(86, 0.01, 6, 0, 960.451, 0, 0),
(87, 0.01, 6, 0, 774.319, 0, 0),
(88, 0.01, 6, 0, 1383.73, 0, 0),
(89, 0.01, 6, 0, 831.533, 0, 0),
(90, 0.02, 6, 0, 942.647, 0, 0),
(91, 0.02, 6, 0, 1027.59, 0, 0),
(92, 0.02, 6, 0, 858.986, 0, 0),
(93, 0.02, 6, 0, 995.057, 0, 0),
(94, 0.02, 6, 0, 874.906, 0, 0),
(95, 0.02, 6, 0, 892.323, 0, 0),
(96, 0.02, 6, 0, 1530.89, 0, 0),
(97, 0.02, 6, 0, 1225.75, 0, 0),
(98, 0.02, 6, 0, 805.738, 0, 0),
(99, 0.004, 6, 0, 1079.38, 0, 0),
(100, 0.004, 6, 0, 1748.04, 0, 0),
(101, 0.004, 6, 0, 944.612, 0, 0),
(102, 0.004, 6, 0, 1096.58, 5, 0.98),
(103, 0.004, 6, 0, 854.347, 5, 0.98),
(104, 0.004, 6, 0, 1298.72, 5, 0.98),
(105, 0.004, 6, 0, 2161.98, 5, 0.98),
(106, 0.004, 6, 0, 930.484, 5, 0.98),
(107, 0.004, 6, 0, 1067.05, 5, 0.98),
(108, 0.004, 6, 0, 568.748, 5, 0.98),
(109, 0.004, 6, 0, 1533.44, 3, 0.98),
(110, 0.004, 6, 0, 1121.06, 3, 0.98),
(111, 0.004, 6, 0, 712.56, 3, 0.98),
(112, 0.004, 6, 0, 626.159, 3, 0.98),
(113, 0.004, 6, 0, 650.38, 3, 0.98),
(114, 0.004, 6, 0, 561.185, 3, 0.98),
(115, 0.004, 6, 0, 594.579, 3, 0.98),
(116, 0.004, 6, 0, 970.85, 8, 0.98),
(117, 0.004, 6, 0, 788.462, 8, 0.98),
(118, 0.004, 6, 0, 614.729, 8, 0.98),
(119, 0.004, 6, 0, 1061.22, 8, 0.98),
(120, 0.004, 6, 0, 1135.36, 8, 0.98),
(121, 0.004, 6, 0, 633.29, 8, 0.98),
(122, 0.004, 6, 0, 828.33, 8, 0.98),
(123, 0.004, 6, 0, 585.628, 10, 0.98),
(124, 0.004, 6, 0, 550.419, 10, 0.98),
(125, 0.004, 6, 0, 1559.1, 10, 0.98),
(126, 0.004, 6, 0, 641.67, 10, 0.98),
(127, 0.004, 6, 0, 689.025, 10, 0.98),
(128, 0.004, 6, 0, 954.027, 10, 0.98),
(129, 0.004, 6, 0, 1102.65, 10, 0.98),
(130, 0.004, 6, 0, 1416.08, 3, 0.98),
(131, 0.004, 6, 0, 575.041, 3, 0.98),
(132, 0.004, 6, 0, 1097.47, 3, 0.98),
(133, 0.004, 6, 0, 647.076, 3, 0.98);

-- --------------------------------------------------------

--
-- Table structure for table `satelit`
--

CREATE TABLE `satelit` (
  `id_satelit` int(11) NOT NULL,
  `nama_satelit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satelit`
--

INSERT INTO `satelit` (`id_satelit`, `nama_satelit`) VALUES
(1, 'LAPAN-A2');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` varchar(30) NOT NULL,
  `shift` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `shift`) VALUES
('1', 'Pagi'),
('2', 'Malam');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
('PNS', 'Pegawai Negeri Sipil'),
('PPNPN', 'non pns');

-- --------------------------------------------------------

--
-- Table structure for table `status_karyawan`
--

CREATE TABLE `status_karyawan` (
  `no` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `shift` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_karyawan`
--

INSERT INTO `status_karyawan` (`no`, `nip`, `job`, `status`, `shift`) VALUES
(1, '1', '3', 'PNS', '1'),
(2, '1', '1', 'PNS', '2'),
(3, '2', '3', 'PNS', '1'),
(4, '2', '1', 'PNS', '2'),
(5, '3', '1', 'PNS', '1'),
(6, '3', '3', 'PNS', '1'),
(7, '4', '1', 'PNS', '1'),
(8, '4', '3', 'PNS', '1'),
(9, '5', '2', 'PNS', '1'),
(10, '5', '4', 'PNS', '1'),
(11, '5', '1', 'PNS', '2'),
(12, '5', '4', 'PNS', '2'),
(13, '6', '2', 'PNS', '1'),
(14, '6', '4', 'PNS', '1'),
(15, '6', '1', 'PNS', '2'),
(16, '6', '4', 'PNS', '2'),
(17, '7', '2', 'PNS', '1'),
(18, '7', '4', 'PNS', '1'),
(19, '7', '1', 'PNS', '2'),
(20, '7', '4', 'PNS', '2'),
(25, '8', '4', 'PNS', '2'),
(26, '9', '5', 'PPNPN', '1'),
(27, '10', '5', 'PPNPN', '1'),
(28, '11', '1', 'PNS', '2'),
(29, '12', '1', 'PNS', '1'),
(30, '13', '4', 'PNS', '1'),
(31, '13', '4', 'PNS', '2'),
(34, '14', '4', 'PNS', '1'),
(35, '14', '4', 'PNS', '2'),
(36, '15', '4', 'PNS', '1'),
(37, '15', '4', 'PNS', '2'),
(38, '16', '4', 'PNS', '1'),
(39, '16', '4', 'PNS', '2'),
(40, '17', '4', 'PNS', '1'),
(41, '17', '4', 'PNS', '2'),
(42, '18', '4', 'PNS', '1'),
(43, '18', '4', 'PNS', '2'),
(44, '19', '4', 'PNS', '1'),
(45, '19', '4', 'PNS', '2'),
(46, '20', '4', 'PNS', '1'),
(47, '20', '4', 'PNS', '2'),
(48, '21', '4', 'PNS', '1'),
(49, '21', '4', 'PNS', '2'),
(50, '22', '4', 'PNS', '1'),
(51, '22', '4', 'PNS', '2'),
(52, '23', '4', 'PNS', '1'),
(53, '23', '4', 'PNS', '2'),
(54, '24', '4', 'PNS', '1'),
(55, '24', '4', 'PNS', '2'),
(56, '25', '4', 'PNS', '1'),
(57, '25', '4', 'PNS', '2'),
(58, '1', '6', 'PNS', '1'),
(59, '6', '6', 'PNS', '1'),
(60, '7', '6', 'PNS', '1'),
(61, '8', '6', 'PNS', '1'),
(62, '9', '6', 'PPNPN', '1'),
(63, '10', '6', 'PPNPN', '1'),
(64, '11', '6', 'PNS', '1'),
(65, '13', '6', 'PNS', '1'),
(66, '15', '6', 'PNS', '1'),
(67, '16', '6', 'PNS', '1'),
(68, '17', '6', 'PNS', '1'),
(69, '19', '6', 'PNS', '1'),
(70, '20', '6', 'PNS', '1'),
(71, '22', '6', 'PNS', '1'),
(72, '24', '6', 'PNS', '1'),
(73, '25', '6', 'PNS', '1'),
(74, '9', '6', 'PPNPN', '2'),
(75, '10', '6', 'PPNPN', '2'),
(76, '10', '5', 'PPNPN', '2'),
(77, '9', '5', 'PPNPN', '2'),
(78, '6', '6', 'PNS', '2'),
(79, '7', '6', 'PNS', '2'),
(80, '8', '6', 'PNS', '2'),
(81, '11', '6', 'PNS', '2'),
(82, '19', '6', 'PNS', '2'),
(85, '20', '6', 'PNS', '2'),
(86, '22', '6', 'PNS', '2'),
(87, '24', '6', 'PNS', '2'),
(88, '25', '6', 'PNS', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL,
  `job` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `no_hp`, `image`, `job`, `password`, `rule_id`, `is_active`, `date_created`) VALUES
(3, 'Patria', 'patria@gmail.com', '0813232321', 'k.jpg', '2', '$2y$10$viAmLJDtT.iASaCY2.iLcOt2mKtKOEnAPa6aLQLkrIOd0mk.MthtW', 3, 1, 1572531080),
(5, 'Amrullah', 'bram@gmail.com', '0892341234', '1.jpg', '1', '$2y$10$Al/usws7.eLys2EDKMPDUelv0RMXVqh3b/UjOrBeTT7zOrdx5cYNa', 1, 1, 1572973013),
(6, 'Bachtiar', 'bachtiar@gmail.com', '0814546657', '2.jpg', '1', '$2y$10$FM/2.2DnMW54DqR8aR07A.rdQHwoke5IW5H4zNQvpcGmvu2MSGH0e', 3, 1, 1573870598),
(7, 'Desti', 'desti@gmail.com', '0814546657', 'a.jpeg', '1', '$2y$10$rrxZOJkWu22pd4TRL2g4huyNRXPtg7/Iy0IFkl5aTqaZ6l20hrz1e', 2, 1, 1573870643),
(8, 'Kirun', 'kirun@gmail.com', '0814546657', '3.jpg', '1', '$2y$10$VFcyGH.sV6cbHs4C2hM/BO1Efvn5dCWSFeruVcU0Xh3TXMsBLVetK', 2, 1, 1573870678),
(9, 'Adelia', 'adelia@gmail.com', '0814546657', 'b.jpeg', '1', '$2y$10$Wloj0fExhDdcpXRXMKZ83.2jqP9Te/ygE/Jh90omljmjXBlXXwTvC', 2, 1, 1573870718),
(10, 'Ulfa', 'ulfa@gmail.com', '0814546657', 'c.jpeg', '1', '$2y$10$KOmgfPaMyfOfdD1axgPAqOPFPBeThBFBA2moA7Cm3Cea/mUDw6Y0.', 2, 1, 1573870752),
(11, 'Aulia', 'aulia@gmail.com', '0814546657', 'd.jpeg', '1', '$2y$10$rahd4LeTVy.6nXbioFjqYuFg19xsstM62kw89tOBQneCzuhu.jRx2', 2, 1, 1573870785),
(12, 'Isma', 'isma@gmail.com', '0814546657', 'e.jpeg', '1', '$2y$10$xrxpNvBe8yIlzL/bj87KrePNT/nuzv3bPLIouI3Zl5DIQ3R/rDRle', 2, 1, 1573870815),
(13, 'Sri', 'sri@gmail.com', '0814546657', 'f.jpeg', '1', '$2y$10$2BOFef9kVxFB3aQ1bJBPbeZUQ0LiHLKRPO7WUvglW0jNO9dcQR8DK', 2, 1, 1573870861),
(14, 'Gafur', 'gafur@gmail.com', '0814546657', '4.jpg', '1', '$2y$10$0HdMnHCUHl4/k0mLLX3L0u1GFKR8nduViXxcBZPmWLOiUjKZRV25u', 2, 1, 1573870903),
(15, 'Satria', 'satria@gmail.com', '0814546657', '5.jpg', '1', '$2y$10$Gm91dGOmi3aM2U6jTU5jouBVJymgy9Zy7H71J9BYjqJ1LntccmPgy', 2, 1, 1573870937),
(16, 'Dede', 'dede@gmail.com', '0814546657', '6.jpg', '1', '$2y$10$xPfGMRB0Yz/YegKASCe1nOjFJ2YSUw8tbtiyX9GM9rJMmUKV67T4m', 2, 1, 1573871008),
(17, 'Aden', 'aden@gmail.com', '0814546657', '7.jpg', '1', '$2y$10$GayKn6E8/Y3VN659CJCkJemrTlqu/HpwZM15Ob3xd2Nwqhu70RFm2', 2, 1, 1573871053),
(18, 'Maul', 'maul@gmail.com', '0814546657', '8.jpg', '1', '$2y$10$gZedPTzCWwUl7U9Vd95lqO/YHPY7XPyOa28gQ4VDUbFqmbqIv7Dx6', 2, 1, 1573871121),
(19, 'Azzam', 'azzam@gmail.com', '0814546657', '9.jpg', '1', '$2y$10$gTq9vysKxQPESh3DFzLwOeGB2JcXWI7cn6.QeLI4t.J.bTOWZCCX6', 2, 1, 1573871189),
(20, 'Reyza', 'reyza@gmail.com', '0814546657', '10.jpg', '1', '$2y$10$vc5axGdJ8xbjMbcqWhY68eakBFoF.TbiXB2HxI4l2Nx4lhEutUg/e', 2, 1, 1573871253),
(21, 'Bayu', 'bayu@gmail.com', '0814546657', '11.jpg', '1', '$2y$10$5LeZUOezaPupv0odSL4hQeoagX0NxMmXSUiNRmMNYVRIRK7ml2QZG', 2, 1, 1573871354),
(22, 'Salas', 'salas@gmail.com', '0814546657', 'g.jpeg', '1', '$2y$10$vrxL5b6nHnEu3AnexIfBjuD7ha5Xd9e2dNByHNXPsgdWEs13xdyxq', 2, 1, 1573871394),
(23, 'Momoi', 'momoi@gmail.com', '0814546657', 'h.jpeg', '1', '$2y$10$auo9Q5b/OUFnFsOzQ8FXsuiUED9kPSSx2VKDb3347zW/baFvI8ojq', 2, 1, 1573871442),
(24, 'Nova', 'nova@gmail.com', '0814546657', 'i.jpeg', '1', '$2y$10$jLSUVr8uYhacxXSS572h1u7ZPjm0WN4iq9dKH.upq9st/0u1qL646', 2, 1, 1573871484),
(25, 'Rise', 'risa@gmail.com', '0814546657', 'j.jpg', '1', '$2y$10$9TLK0TLJ6LDD7n4AlUZNHOZwMIa6.F2nU4YTyR9N5ErFrz4hMdtFK', 2, 1, 1573871523),
(26, 'Zammir', 'zammir@gmail.com', '0814546657', '12.jpg', '1', '$2y$10$.vvsldUx36BMDuNQPQlIROh4Rif8/3Q0yTR8B7AjxtnY4FhjPZEHS', 2, 1, 1573871562),
(27, 'Sigit', 'sigit@gmail.com', '0814546657', '13.jpg', '1', '$2y$10$57tf3qd.TEr00Ky5/uS/aO2udoFsFAEGzvSr0Kwibh.i2/KDdr0r.', 2, 1, 1573871589),
(28, 'Tantra', 'tantra@gmail.com', '0814546657', '14.jpg', '1', '$2y$10$06COoVZHRN/VjTce09ATEOBWx3IpXHVt0qgtmoy8QWD2fXKe171li', 2, 1, 1573871616);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `rule_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 4),
(7, 3, 4),
(8, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_job`
--

CREATE TABLE `user_job` (
  `id` int(11) NOT NULL,
  `job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_job`
--

INSERT INTO `user_job` (`id`, `job`) VALUES
(1, 'SPV'),
(2, 'MPL'),
(3, 'DTA'),
(4, 'OPT'),
(5, 'AOP'),
(6, 'OPTW');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Jadwal'),
(5, 'Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Mamber'),
(3, 'Jadwal');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Jadwal', 'admin', 'fas fa-fw fa-tachometer-alt', 0),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 3, 'Daftar Akun Karyawan', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Backup', 'admin/ejadwal', 'fab fa-fw fa-youtube', 1),
(7, 3, 'Daftare Karyawan', 'menu/karyawan', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'hari ini', 'jadwal/harian', 'fas fa-fw fa-tachometer-alt', 1),
(10, 1, 'bulan ini', 'jadwal', 'fas fa-fw fa-tachometer-alt', 1),
(11, 3, 'Job Karyawan', 'menu/jobKaryawan', 'fas fa-fw fa-user-tie', 1),
(12, 1, 'Generate Jadwal', 'jadwal/generate', 'fas fa-fw fa-tachometer-alt', 1),
(13, 5, 'Jadwal Bulanan', 'jadwal/bulanan', 'fas fa-fw fa-tachometer-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD KEY `nama_hari` (`nama_hari`),
  ADD KEY `nama_hari_2` (`nama_hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `hari` (`hari`),
  ADD KEY `id_job` (`id_job`),
  ADD KEY `hari_2` (`hari`),
  ADD KEY `shift` (`shift`);

--
-- Indexes for table `jadwal_karyawan`
--
ALTER TABLE `jadwal_karyawan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `hari` (`hari`),
  ADD KEY `shift` (`shift`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `jenis_kelamin` (`jenis_kelamin`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `log_ga`
--
ALTER TABLE `log_ga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_karyawan`
--
ALTER TABLE `status_karyawan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nip` (`nip`),
  ADD KEY `job` (`job`),
  ADD KEY `status` (`status`),
  ADD KEY `shift` (`shift`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_job`
--
ALTER TABLE `user_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `jadwal_karyawan`
--
ALTER TABLE `jadwal_karyawan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42329;

--
-- AUTO_INCREMENT for table `log_ga`
--
ALTER TABLE `log_ga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `status_karyawan`
--
ALTER TABLE `status_karyawan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_job`
--
ALTER TABLE `user_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`hari`) REFERENCES `hari` (`nama_hari`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_job`) REFERENCES `job` (`id_job`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`shift`) REFERENCES `shift` (`id_shift`);

--
-- Constraints for table `jadwal_karyawan`
--
ALTER TABLE `jadwal_karyawan`
  ADD CONSTRAINT `jadwal_karyawan_ibfk_1` FOREIGN KEY (`hari`) REFERENCES `hari` (`nama_hari`),
  ADD CONSTRAINT `jadwal_karyawan_ibfk_2` FOREIGN KEY (`shift`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `jadwal_karyawan_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `karyawan` (`nip`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`jenis_kelamin`) REFERENCES `jeniskelamin` (`kode_jenis`);

--
-- Constraints for table `status_karyawan`
--
ALTER TABLE `status_karyawan`
  ADD CONSTRAINT `status_karyawan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `karyawan` (`nip`),
  ADD CONSTRAINT `status_karyawan_ibfk_2` FOREIGN KEY (`job`) REFERENCES `job` (`id_job`),
  ADD CONSTRAINT `status_karyawan_ibfk_3` FOREIGN KEY (`shift`) REFERENCES `shift` (`id_shift`),
  ADD CONSTRAINT `status_karyawan_ibfk_4` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`name`) REFERENCES `karyawan` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
