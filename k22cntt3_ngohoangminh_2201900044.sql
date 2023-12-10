-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 04:27 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k22cntt3_ngohoangminh_2201900044`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh mục`
--

CREATE TABLE `danh mục` (
  `MADM_NHM` char(5) NOT NULL,
  `TENDM_NHM` varchar(100) NOT NULL,
  `TRANGTHAI_NHM` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh mục`
--

INSERT INTO `danh mục` (`MADM_NHM`, `TENDM_NHM`, `TRANGTHAI_NHM`) VALUES
('111', 'NGOHOANGMINH', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sản phẩm_nhm`
--

CREATE TABLE `sản phẩm_nhm` (
  `SPID_NHM` char(10) NOT NULL,
  `TENSP` varchar(150) NOT NULL,
  `SOLUONG_NHM` int(11) NOT NULL,
  `GIAMUA_NHM` float NOT NULL,
  `GIABAN_NHM` float NOT NULL,
  `TRANGTHAI_NHM` tinyint(1) NOT NULL,
  `MADM_NHM` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sản phẩm_nhm`
--

INSERT INTO `sản phẩm_nhm` (`SPID_NHM`, `TENSP`, `SOLUONG_NHM`, `GIAMUA_NHM`, `GIABAN_NHM`, `TRANGTHAI_NHM`, `MADM_NHM`) VALUES
('2210900004', 'Ngô Hoàng Minh', 12, 1231, 213123, 1, '123'),
('2210900004', 'NGOHOANGMINH', 12, 1231, 213123, 2, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
