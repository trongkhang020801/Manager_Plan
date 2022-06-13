-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2022 lúc 09:08 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `maybay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `idBD` int(11) NOT NULL,
  `idHA` int(11) NOT NULL,
  `idNV` int(11) NOT NULL,
  `tieuDe` varchar(100) NOT NULL,
  `noiDung` text NOT NULL,
  `ngayDang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangmaybay`
--

CREATE TABLE `hangmaybay` (
  `idHang` int(11) NOT NULL,
  `tenHang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `idHA` int(11) NOT NULL,
  `noiDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maybay`
--

CREATE TABLE `maybay` (
  `soHieu` varchar(100) NOT NULL,
  `idHang` int(11) NOT NULL,
  `tenMayBay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idNV` int(11) NOT NULL,
  `idQuyen` int(11) NOT NULL,
  `tenNV` varchar(200) NOT NULL,
  `gioiTinh` int(1) NOT NULL,
  `ngaySinh` date NOT NULL,
  `diaChi` text NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `CCCD` varchar(12) NOT NULL,
  `taiKhoang` varchar(100) NOT NULL,
  `matKhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idQuyen` int(11) NOT NULL,
  `tenQuyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinchuyenbay`
--

CREATE TABLE `thongtinchuyenbay` (
  `idChuyenBay` int(11) NOT NULL,
  `soHieu` varchar(100) NOT NULL,
  `tenChuyenBay` varchar(100) NOT NULL,
  `diemDi` varchar(100) NOT NULL,
  `diemDen` varchar(100) NOT NULL,
  `thoigiandukien` time NOT NULL,
  `thoigiandi` time NOT NULL,
  `thoigianden` time NOT NULL,
  `idNV` int(11) NOT NULL,
  `moTa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`idBD`),
  ADD KEY `hinhAnh` (`idHA`),
  ADD KEY `nhanVien` (`idNV`);

--
-- Chỉ mục cho bảng `hangmaybay`
--
ALTER TABLE `hangmaybay`
  ADD PRIMARY KEY (`idHang`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`idHA`);

--
-- Chỉ mục cho bảng `maybay`
--
ALTER TABLE `maybay`
  ADD PRIMARY KEY (`soHieu`),
  ADD KEY `hangmaybay` (`idHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idNV`),
  ADD KEY `idQuyen` (`idQuyen`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Chỉ mục cho bảng `thongtinchuyenbay`
--
ALTER TABLE `thongtinchuyenbay`
  ADD PRIMARY KEY (`idChuyenBay`),
  ADD KEY `nhanvien1` (`idNV`),
  ADD KEY `maybay` (`soHieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `idBD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hangmaybay`
--
ALTER TABLE `hangmaybay`
  MODIFY `idHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `idHA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idNV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongtinchuyenbay`
--
ALTER TABLE `thongtinchuyenbay`
  MODIFY `idChuyenBay` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `hinhAnh` FOREIGN KEY (`idHA`) REFERENCES `hinhanh` (`idHA`),
  ADD CONSTRAINT `nhanVien` FOREIGN KEY (`idNV`) REFERENCES `nhanvien` (`idNV`);

--
-- Các ràng buộc cho bảng `maybay`
--
ALTER TABLE `maybay`
  ADD CONSTRAINT `hangmaybay` FOREIGN KEY (`idHang`) REFERENCES `hangmaybay` (`idHang`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `idQuyen` FOREIGN KEY (`idQuyen`) REFERENCES `phanquyen` (`idQuyen`);

--
-- Các ràng buộc cho bảng `thongtinchuyenbay`
--
ALTER TABLE `thongtinchuyenbay`
  ADD CONSTRAINT `maybay` FOREIGN KEY (`soHieu`) REFERENCES `maybay` (`soHieu`),
  ADD CONSTRAINT `nhanvien1` FOREIGN KEY (`idNV`) REFERENCES `nhanvien` (`idNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
