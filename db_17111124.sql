-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 08:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_17111124`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `int_id_akun` int(10) NOT NULL,
  `var_username` varchar(20) NOT NULL,
  `var_password` varchar(20) NOT NULL,
  `int_tipe` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`int_id_akun`, `var_username`, `var_password`, `int_tipe`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `int_id_mahasiswa` int(10) NOT NULL,
  `var_npm` varchar(10) NOT NULL,
  `var_nama` varchar(50) NOT NULL,
  `int_semester` int(5) NOT NULL,
  `int_status` int(5) NOT NULL,
  `var_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`int_id_mahasiswa`, `var_npm`, `var_nama`, `int_semester`, `int_status`, `var_password`) VALUES
(16, '17111331', 'Kriastian Dede Firmansyah', 4, 0, ''),
(17, '17111124', 'Rizky Kurnia Ramadhan', 5, 1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_login`
--

CREATE TABLE `tbl_status_login` (
  `int_id_status` int(10) NOT NULL,
  `var_username` varchar(20) NOT NULL,
  `var_password` varchar(20) NOT NULL,
  `int_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_login`
--

INSERT INTO `tbl_status_login` (`int_id_status`, `var_username`, `var_password`, `int_status`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`int_id_akun`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`int_id_mahasiswa`);

--
-- Indexes for table `tbl_status_login`
--
ALTER TABLE `tbl_status_login`
  ADD PRIMARY KEY (`int_id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `int_id_akun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `int_id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_status_login`
--
ALTER TABLE `tbl_status_login`
  MODIFY `int_id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
