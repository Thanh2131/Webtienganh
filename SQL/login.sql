-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 04:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'ads', 'alo@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `baigiang`
--

CREATE TABLE `baigiang` (
  `MABAIGIANG` varchar(20) NOT NULL,
  `TIEUDEBAIGIANG` varchar(100) NOT NULL,
  `NOIDUNGBAIGIANG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baigiang`
--

INSERT INTO `baigiang` (`MABAIGIANG`, `TIEUDEBAIGIANG`, `NOIDUNGBAIGIANG`) VALUES
('BG1', 'howtolisten', 'listen'),
('BG2', 'howtoreading', 'reading'),
('BG3', 'howtospeaking', 'speaking'),
('BG4', 'howtowritting', 'writting'),
('BG5', 'foreign teacher', 'only use english'),
('BG6', 'bilingual use', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `MAHOCVIEN` varchar(20) NOT NULL,
  `TENHOCVIEN` varchar(60) NOT NULL,
  `TUOIHOCVIEN` varchar(100) NOT NULL,
  `DIACHIHOCVIEN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`MAHOCVIEN`, `TENHOCVIEN`, `TUOIHOCVIEN`, `DIACHIHOCVIEN`) VALUES
('HV01', 'NGUYỄN VĂN TÚ', '12', 'HỒ CHÍ MINH'),
('HV02', 'NGUYỄN THỊ NĂM', '13', 'HỒ CHÍ MINH'),
('HV03', 'NGUYỄN VĂN LINH', '11', 'HÀ NỘI'),
('HV04', 'TRẦN HOÀI NAM', '12', 'BẮC GIANG'),
('HV05', 'HUỲNH THIÊN QUANG', '14', 'HỒ CHÍ MINH'),
('HV06', 'NGUYỄN THỊ THU HUYỀN', '15', 'HỒ CHÍ MINH');

-- --------------------------------------------------------

--
-- Table structure for table `ketquahoctap`
--

CREATE TABLE `ketquahoctap` (
  `MAKETQUA` varchar(20) NOT NULL,
  `TENCLB` varchar(100) NOT NULL,
  `CHUYENNGANH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ketquahoctap`
--

INSERT INTO `ketquahoctap` (`MAKETQUA`, `TENCLB`, `CHUYENNGANH`) VALUES
('5', 'ax4', 'TRUNG BÌNH'),
('5.5', 'ax5', 'TRUNG BÌNH'),
('6', 'ax5', 'KHÁ'),
('7', 'ax2', 'KHÁ'),
('8', 'ax1', 'TỐT'),
('8.5', 'ax6', 'TỐT');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MAKHOAHOC` varchar(20) NOT NULL,
  `TENKHOAHOC` varchar(20) NOT NULL,
  `NGAYBAYDAU` date NOT NULL,
  `NGAYKETTHUC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`MAKHOAHOC`, `TENKHOAHOC`, `NGAYBAYDAU`, `NGAYKETTHUC`) VALUES
('KH2', 'tienganh2', '2020-09-14', '2021-02-02'),
('KH3', 'tienganh3', '2020-10-22', '2021-03-07'),
('KH4', 'tienganh4', '2020-09-13', '2021-05-15'),
('KH5', 'tienganh5', '2020-04-23', '2021-07-22'),
('KH6', 'tienganh6', '2020-04-08', '2021-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `nep1test`
--

CREATE TABLE `nep1test` (
  `id` int(255) NOT NULL,
  `diemdung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nep1test`
--

INSERT INTO `nep1test` (`id`, `diemdung`) VALUES
(1, '0'),
(3, '7');

-- --------------------------------------------------------

--
-- Table structure for table `nep2test`
--

CREATE TABLE `nep2test` (
  `id` int(255) NOT NULL,
  `diemdung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baigiang`
--
ALTER TABLE `baigiang`
  ADD PRIMARY KEY (`MABAIGIANG`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`MAHOCVIEN`);

--
-- Indexes for table `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  ADD PRIMARY KEY (`MAKETQUA`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MAKHOAHOC`);

--
-- Indexes for table `nep1test`
--
ALTER TABLE `nep1test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nep2test`
--
ALTER TABLE `nep2test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nep1test`
--
ALTER TABLE `nep1test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nep2test`
--
ALTER TABLE `nep2test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
