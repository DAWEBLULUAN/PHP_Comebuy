-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2017 lúc 06:53 PM
-- Phiên bản máy phục vụ: 5.7.20-log
-- Phiên bản PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `comebuy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
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
-- Cấu trúc bảng cho bảng `cua_hang`
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
-- Đang đổ dữ liệu cho bảng `cua_hang`
--

INSERT INTO `cua_hang` (`ma_cua_hang`, `ten_cua_hang`, `so_dien_thoai`, `dia_chi`, `email`, `trang_thai`) VALUES
(1, 'COMEBUY', '01227978173', '65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1, TP.Hồ Chí Minh', 'comebuyHL@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_ban`
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
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai_sp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_sp` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL,
  `trang_thai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai_sp`, `ten_loai_sp`, `ngay_tao`, `trang_thai`) VALUES
('LSP001', 'Teapresso', '2017-01-13', 1),
('LSP002', 'Milk tea', '2017-05-14', 1),
('LSP003', 'Cream teaccino', '2017-07-13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tai_khoan`
--

CREATE TABLE `loai_tai_khoan` (
  `ma_loai_tk` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loai_tk` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tai_khoan`
--

INSERT INTO `loai_tai_khoan` (`ma_loai_tk`, `ten_loai_tk`, `trang_thai`) VALUES
('LTK001', 'Admin', 1),
('LTK002', 'Moderator', 1),
('LTK003', 'Customer', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_tinh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `ten_nguoi_dung`, `ngay_sinh`, `email`, `dia_chi`, `so_dien_thoai`, `gioi_tinh`) VALUES
('ND0001', 'Vũ Minh Luân', '1997-07-14', 'luan@gmail.com', 'TP. HCM', '01227978173', 1),
('ND0002', 'Đỗ Thị Quản Lý', '1989-05-20', 'ql@gmail.com', 'TP.HCM', '0909082112', 0),
('ND0003', 'Lê Thị Na', '1994-12-31', 'na@gmail.com', 'Quận 1, TP. Hồ Chí Minh', '0969123456', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ten_tk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loai_tai_khoan` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_nguoi_dung` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL,
  `trang_thai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_tk`, `mat_khau`, `loai_tai_khoan`, `ma_nguoi_dung`, `ngay_tao`, `trang_thai`) VALUES
('TK0001', 'luan', '123', 'LTK001', 'ND0001', '2017-11-29', 1),
('TK0002', 'quanly', '123', 'LTK002', 'ND0002', '2017-09-29', 1),
('TK0003', 'na', '123', 'LTK003', 'ND0003', '2017-10-12', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_sp`),
  ADD KEY `ma_hoa_don` (`ma_hoa_don`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `cua_hang`
--
ALTER TABLE `cua_hang`
  ADD PRIMARY KEY (`ma_cua_hang`);

--
-- Chỉ mục cho bảng `hoa_don_ban`
--
ALTER TABLE `hoa_don_ban`
  ADD PRIMARY KEY (`ma_hoa_don`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai_sp`);

--
-- Chỉ mục cho bảng `loai_tai_khoan`
--
ALTER TABLE `loai_tai_khoan`
  ADD PRIMARY KEY (`ma_loai_tk`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_loai_sp` (`ma_loai_sp`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_tai_khoan` (`loai_tai_khoan`),
  ADD KEY `ma_nguoi_dung` (`ma_nguoi_dung`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_1` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don_ban` (`ma_hoa_don`),
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai_sp`) REFERENCES `loai_san_pham` (`ma_loai_sp`);

--
-- Các ràng buộc cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_ibfk_1` FOREIGN KEY (`loai_tai_khoan`) REFERENCES `loai_tai_khoan` (`ma_loai_tk`),
  ADD CONSTRAINT `tai_khoan_ibfk_2` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`ma_nguoi_dung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
