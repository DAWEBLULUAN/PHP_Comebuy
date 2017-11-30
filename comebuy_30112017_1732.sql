-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 11:32 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comebuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `ma_hoa_don` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(3) DEFAULT NULL,
  `thanh_tien` float NOT NULL,
  `trang_thai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cua_hang`
--

CREATE TABLE `cua_hang` (
  `ma_cua_hang` int(2) NOT NULL,
  `ten_cua_hang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cua_hang`
--

INSERT INTO `cua_hang` (`ma_cua_hang`, `ten_cua_hang`, `so_dien_thoai`, `dia_chi`, `email`, `trang_thai`) VALUES
(1, 'COMEBUY', '01227978173', '65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1, TP.Hồ Chí Minh', 'comebuyHL@gmail.com', b'1111111111111111111111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_ban`
--

CREATE TABLE `hoa_don_ban` (
  `ma_hoa_don` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lap` date DEFAULT NULL,
  `nguoi_lap` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_khach_hang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tong_tien` float DEFAULT NULL,
  `don_vi_tien` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai_sp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_sp` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL,
  `trang_thai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai_sp`, `ten_loai_sp`, `ngay_tao`, `trang_thai`) VALUES
('LSP001', 'Teapresso', '2017-01-13', b'1111111111111111111111111111111'),
('LSP002', 'Milk tea', '2017-05-14', b'1111111111111111111111111111111'),
('LSP003', 'Cream teaccino', '2017-07-13', b'1111111111111111111111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `loai_tai_khoan`
--

CREATE TABLE `loai_tai_khoan` (
  `ma_loai_tk` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_tk` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_tinh` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_loai_sp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_ban` float DEFAULT NULL,
  `don_vi_ban` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_thieu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_tk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loai_tai_khoan` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_nguoi_dung` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL,
  `trang_thai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_sp`),
  ADD KEY `ma_hoa_don` (`ma_hoa_don`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Indexes for table `cua_hang`
--
ALTER TABLE `cua_hang`
  ADD PRIMARY KEY (`ma_cua_hang`);

--
-- Indexes for table `hoa_don_ban`
--
ALTER TABLE `hoa_don_ban`
  ADD PRIMARY KEY (`ma_hoa_don`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai_sp`);

--
-- Indexes for table `loai_tai_khoan`
--
ALTER TABLE `loai_tai_khoan`
  ADD PRIMARY KEY (`ma_loai_tk`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_loai_sp` (`ma_loai_sp`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_tai_khoan` (`loai_tai_khoan`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_1` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don_ban` (`ma_hoa_don`),
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai_sp`) REFERENCES `loai_san_pham` (`ma_loai_sp`);

--
-- Constraints for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_ibfk_1` FOREIGN KEY (`loai_tai_khoan`) REFERENCES `loai_tai_khoan` (`ma_loai_tk`),
  ADD CONSTRAINT `tai_khoan_ibfk_2` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`ma_nguoi_dung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
