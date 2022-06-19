-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2022 lúc 01:24 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

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
  `idNV` int(11) DEFAULT NULL,
  `tieuDe` text NOT NULL,
  `noiDung` text NOT NULL,
  `ngayDang` date DEFAULT NULL,
  `linkIMG` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangmaybay`
--

CREATE TABLE `hangmaybay` (
  `idHang` int(11) NOT NULL,
  `tenHang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hangmaybay`
--

INSERT INTO `hangmaybay` (`idHang`, `tenHang`) VALUES
(1, 'VietNamAirlines'),
(2, 'VietJack');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maybay`
--

CREATE TABLE `maybay` (
  `soHieu` varchar(100) NOT NULL,
  `idHang` int(11) NOT NULL,
  `tenMayBay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `maybay`
--

INSERT INTO `maybay` (`soHieu`, `idHang`, `tenMayBay`) VALUES
('BN-01', 1, 'Boin77701'),
('BN-02', 2, 'Boin77701');

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

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idNV`, `idQuyen`, `tenNV`, `gioiTinh`, `ngaySinh`, `diaChi`, `SDT`, `CCCD`, `taiKhoang`, `matKhau`) VALUES
(11, 1, 'Thịnh', 1, '0000-00-00', 'Huế', '1234567890', '213455678901', 'thinh123', '123456'),
(12, 0, 'Khang', 1, '0000-00-00', 'Quảng Nam', '12345678901', '12344576427', 'khang123', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idQuyen` int(11) NOT NULL,
  `tenQuyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`idQuyen`, `tenQuyen`) VALUES
(0, 'Nhân Viên'),
(1, 'Quản lí');

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
  `thoigiandi` datetime NOT NULL,
  `thoigianden` datetime NOT NULL,
  `idNV` int(11) NOT NULL,
  `moTa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtinchuyenbay`
--

INSERT INTO `thongtinchuyenbay` (`idChuyenBay`, `soHieu`, `tenChuyenBay`, `diemDi`, `diemDen`, `thoigiandukien`, `thoigiandi`, `thoigianden`, `idNV`, `moTa`) VALUES
(125, 'BN-02', 'Chuyen bay thuong mai 03', 'Ha Noi', 'Da Nang', '01:30:00', '2022-06-19 10:00:00', '2022-06-19 11:30:00', 11, '0000-00-00'),
(127, 'BN-01', 'Chuyen bay 1', 'Da Nang', 'Tokyo', '06:00:00', '2022-06-19 07:00:00', '2022-06-19 13:00:00', 11, '0000-00-00'),
(128, 'BN-02', 'Chuyen bay thuong mai 06', 'Da Nang', 'Bangkok', '04:00:00', '2022-06-19 11:00:00', '2022-06-19 03:00:00', 11, '0000-00-00'),
(130, 'BN-02', 'Chuyen bay thuong mai', 'Da Nang', 'Hai Phong', '02:00:00', '2022-06-19 07:00:00', '2022-06-19 09:00:00', 12, '0000-00-00'),
(132, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(133, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(134, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(135, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(136, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(137, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(138, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(139, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(140, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(141, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(142, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(143, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(144, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(145, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(146, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(147, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(148, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(149, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(150, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(151, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(152, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(153, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(154, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(155, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(156, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(157, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(158, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(159, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(160, 'BN-01', 'Chuyen bay thuonh mao', 'Vinh', 'Da Nang', '00:40:00', '2022-06-19 08:00:00', '2022-06-19 08:40:00', 11, '0000-00-00'),
(161, 'BN-02', 'Chuyến bay đi vào lòng đất', 'Hai Phong', 'Da Nang', '03:00:00', '2022-06-19 15:51:00', '2022-06-19 00:00:00', 12, 'Không');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`idBD`),
  ADD KEY `idNV` (`idNV`);

--
-- Chỉ mục cho bảng `hangmaybay`
--
ALTER TABLE `hangmaybay`
  ADD PRIMARY KEY (`idHang`);

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
  MODIFY `idHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `thongtinchuyenbay`
--
ALTER TABLE `thongtinchuyenbay`
  MODIFY `idChuyenBay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`idNV`) REFERENCES `nhanvien` (`idNV`);

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
