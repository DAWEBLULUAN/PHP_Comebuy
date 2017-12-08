-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 08:35 AM
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
  `trang_thai` tinyint(1) NOT NULL
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
  `trang_thai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cua_hang`
--

INSERT INTO `cua_hang` (`ma_cua_hang`, `ten_cua_hang`, `so_dien_thoai`, `dia_chi`, `email`, `trang_thai`) VALUES
(1, 'COMEBUY', '01227978173', '65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1, TP.Hồ Chí Minh', 'comebuyHL@gmail.com', 1);

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
  `trang_thai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai_sp`, `ten_loai_sp`, `ngay_tao`, `trang_thai`) VALUES
('LSP001', 'Teapresso', '2017-01-13', 1),
('LSP002', 'Milk tea', '2017-05-14', 1),
('LSP003', 'Cream teaccino', '2017-07-13', 1),
('LSP004', 'OTHER TEA', '2017-12-13', 1),
('LSP005', 'FRUIT TEA', '2017-12-13', 1),
('LSP006', 'ICE BLENDED', '2017-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loai_tai_khoan`
--

CREATE TABLE `loai_tai_khoan` (
  `ma_loai_tk` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_tk` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_tai_khoan`
--

INSERT INTO `loai_tai_khoan` (`ma_loai_tk`, `ten_loai_tk`, `trang_thai`) VALUES
('LTK001', 'Admin', 1),
('LTK002', 'Moderator', 1),
('LTK003', 'Customer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tai_khoan_id` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_tinh` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `ten_nguoi_dung`, `tai_khoan_id`, `ngay_sinh`, `email`, `dia_chi`, `so_dien_thoai`, `gioi_tinh`) VALUES
('ND0001', 'Vũ Minh Luân', 'TK0001', '1997-07-14', 'vuminhluan97@gmail.com', 'Tân Phú, Hồ Chí Minh', '01227978173', 1),
('ND0002', 'Đỗ Thị Quản Lý', 'TK0002', '1989-05-20', 'ql@gmail.com', 'TP.HCM', '0909082112', 0),
('ND0003', 'Lê Thị Nết Na', 'TK0003', '2017-12-05', 'lena@gmail.com', 'Quận 1, TP. Hồ Chí Minh', '0999223111', 0),
('ND0004', 'Một Người Nào Đó', 'TK0004', '1995-08-20', 'abc@gmail.com', 'Quận  4, TP. Hồ Chí Minh', '099122734', 1),
('ND0005', 'Phạm Quốc Hùng', 'TK0005', '2017-12-03', '', 'Hồ Chí Minh city', '01227978173', NULL),
('ND0006', 'Võ Minh Tấn', 'TK0006', '2017-12-03', 'tan@gmail.com', 'Hồ Chí Minh', '0163222836', 1),
('ND0007', 'tao', 'TK0007', NULL, NULL, '65 htk', '19006886', NULL);

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
  `gioi_thieu` text COLLATE utf8_unicode_ci,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ten_sp`, `ma_loai_sp`, `hinh_anh`, `gia_ban`, `don_vi_ban`, `gioi_thieu`, `trang_thai`) VALUES
('SP1', 'Trà sữa 01', 'LSP001', 'Views/img/sanpham/2017111217131931V4TCfBjLL.jpg', 20000, NULL, 'Có hả', 1),
('SP10', 'Trà thạch thủy tinh', 'LSP001', 'Views/img/sanpham/Trà-thạch-vải-thạnh-thủy-tinh-荔枝玉露＋晶球-L-600x600-min.png', 29000, NULL, 'Có', 1),
('SP11', 'matcha smoothie', 'LSP001', 'Views/img/sanpham/matcha-smoothie-275x275.png', 18000, NULL, 'Có', 1),
('SP2', 'Trà sữa trên châu', 'LSP001', 'Views/img/sanpham/20171112001954Trà-sữa-Trân-châu-Edited.png', 30000, NULL, 'Có', 1),
('SP3', 'Smoothie', 'LSP003', 'Views/img/sanpham/20171112012146Kiwi-Smoothies.png', 10000, NULL, 'có', 1),
('SP4', 'Kem ly đậu', 'LSP001', 'Views/img/sanpham/2017111201473906402d92e7c2b4a0c018d47a03c34e56--fast-food-icecream (3).jpg', 30000, NULL, 'Có', 1),
('SP5', 'Ô long mật ong', 'LSP001', 'Views/img/sanpham/2017113013054520171112170243olong-dao-mat-ong-min-275x275 (2).png', 60000, NULL, 'Có', 1),
('SP6', 'Trà sữa Chocolate', 'LSP001', 'Views/img/sanpham/Chocolate.png', 40000, NULL, 'Có', 1),
('SP7', 'Trà xanh chanh', 'LSP001', 'Views/img/sanpham/tra-xanh-chanh-oi-min-275x275.png', 50000, NULL, 'Có', 1),
('SP8', 'Kem Vanila', 'LSP001', 'Views/img/sanpham/20171111212915Coffee-Vanila.jpg', 45000, NULL, 'Có', 1),
('SP9', 'Mango Fruite', 'LSP001', 'Views/img/sanpham/201711112128539d82dbea60d3bcdd79fd4ef3dad87c33--mango-fruit-fruit-tea (3).jpg', 39000, NULL, 'Có', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_tk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loai_tai_khoan` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL,
  `trang_thai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_tk`, `mat_khau`, `loai_tai_khoan`, `ngay_tao`, `trang_thai`) VALUES
('TK0001', 'luan123', '1', 'LTK001', '2017-11-29', 1),
('TK0002', 'quanly', '123', 'LTK002', '2017-09-29', 1),
('TK0003', 'na', '456', 'LTK003', '2017-10-12', 1),
('TK0004', 'someone01', '123', 'LTK003', '2017-12-03', 0),
('TK0005', 'hung123', '789', 'LTK003', '2017-12-03', 1),
('TK0006', 'tan123', '123', 'LTK003', '2017-12-21', 0),
('TK0007', 'tao', 'may', 'LTK003', '2017-12-06', 1);

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
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `tai_khoan_id` (`tai_khoan_id`);

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
  ADD KEY `loai_tai_khoan` (`loai_tai_khoan`);

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
-- Constraints for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `nguoi_dung_ibfk_1` FOREIGN KEY (`tai_khoan_id`) REFERENCES `tai_khoan` (`id`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai_sp`) REFERENCES `loai_san_pham` (`ma_loai_sp`);

--
-- Constraints for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_ibfk_1` FOREIGN KEY (`loai_tai_khoan`) REFERENCES `loai_tai_khoan` (`ma_loai_tk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
