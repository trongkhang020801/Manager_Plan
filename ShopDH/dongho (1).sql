-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2022 lúc 02:20 PM
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
-- Cơ sở dữ liệu: `dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(10) NOT NULL,
  `id_hd` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluongdat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hd`, `id_sp`, `soluongdat`) VALUES
(6, 5, 1, 1),
(8, 5, 10, 1),
(11, 9, 10, 1),
(12, 15, 7, 2),
(13, 15, 0, 1),
(14, 16, 0, 2),
(15, 17, 10, 1),
(16, 18, 9, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MaHA` int(10) NOT NULL,
  `MaSP` int(10) NOT NULL,
  `duongdan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) NOT NULL,
  `id_nd` int(10) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaydac` date NOT NULL DEFAULT current_timestamp(),
  `trangthai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_nd`, `hoten`, `sdt`, `email`, `diachi`, `note`, `tongtien`, `ngaydac`, `trangthai`) VALUES
(5, 1, 'Huynh Thịnh', '397989667', 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '', 46090000, '2022-01-11', 3),
(9, 1, 'Huynh Thịnh', '397989667', 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '', 3010000, '2022-01-11', 3),
(15, 1, 'Huynh Thịnh', '397989667', 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '', 90170000, '2022-01-11', 1),
(16, 1, 'Huynh Thịnh', '397989667', 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '', 30050000, '2022-01-11', 2),
(17, 1, 'Huynh Thịnh', '397989667', 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '', 3010000, '2022-01-11', 2),
(18, 1, 'Huynh Thịnh', '397989667', 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '', 10770000, '2022-01-11', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(10) NOT NULL,
  `TenKM` varchar(255) NOT NULL,
  `LoaiKM` varchar(255) NOT NULL,
  `GiaTri` int(11) NOT NULL,
  `NgayBD` date NOT NULL,
  `TrangThai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTri`, `NgayBD`, `TrangThai`) VALUES
(1, 'Noen', 'Giảm giá', 250000, '2021-12-25', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(10) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `SDT` int(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `MatKhau` varchar(200) NOT NULL,
  `MaQuyen` int(1) NOT NULL,
  `TrangThai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `HoTen`, `GioiTinh`, `SDT`, `Email`, `Address`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Huynh Thịnh', 'Nam', 397989667, 'thinhhuynh115@gmail.com', 'An Lộc , Quảng Công , Quảng Điền , Thừa Thiên Huế', '123456', 2, 1),
(31, 'thiện', 'Nam', 0, '1234567890', 'address', '$2y$10$oVsDjbJxvFtZuvI0zaWemO/f3O8J/nBl9QUsbmjjjKOaRqsDziqJ6', 1, 1),
(32, 'thiên123', 'Nam', 0, '2343423', 'address', '$2y$10$IFynqTmv4srDL.BnQOQmv.XBarK6k5z63WE0aaATA8zAp3atUCQfa', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(1) NOT NULL,
  `TenQuyen` varchar(255) NOT NULL,
  `ChiTiet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTiet`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel\r\n', 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) NOT NULL,
  `MaDM` int(10) NOT NULL,
  `MaTH` int(10) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `image4` varchar(100) DEFAULT NULL,
  `daban` int(11) NOT NULL,
  `MaKM` int(10) DEFAULT NULL,
  `SoHieuSP` varchar(100) NOT NULL,
  `XuatXu` varchar(50) NOT NULL,
  `GioiTinh` int(2) NOT NULL,
  `LoaiKinh` varchar(50) NOT NULL,
  `LoaiMay` varchar(50) NOT NULL,
  `DKMS` float NOT NULL,
  `BDMS` float NOT NULL,
  `DayDeo` varchar(100) DEFAULT NULL,
  `ChongNuoc` int(1) NOT NULL,
  `ChucNangKhac` varchar(255) DEFAULT NULL,
  `MoTa` text NOT NULL,
  `TrangThai` int(1) NOT NULL,
  `ThoiGian` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaDM`, `MaTH`, `TenSP`, `GiaBan`, `SoLuong`, `image1`, `image2`, `image3`, `image4`, `daban`, `MaKM`, `SoHieuSP`, `XuatXu`, `GioiTinh`, `LoaiKinh`, `LoaiMay`, `DKMS`, `BDMS`, `DayDeo`, `ChongNuoc`, `ChucNangKhac`, `MoTa`, `TrangThai`, `ThoiGian`) VALUES
(0, 1, 3, 'MoonPhase Master', 5550000, 5, 'public/img/products/ProductProfile/sp8.png', 'public/img/products/ProductMani/sp8.jpg', 'public/img/products/ProductMani/sp8_2.jpg', 'public/img/slider/slider-01-img-01.png', 1, 1, 'SU1908SW2', '', 1, 'Sapphire (Kính Chống Trầy)', 'Automatic (Tự Động)', 35, 7, 'Dây da', 0, ' Lịch Ngày', 'Đồng hồ Longines SU1908SW2 mang thiết kế viền khỏe khoắn với mặt số màu trắng tao nhã, kết hợp cùng 3 kim chỉ số màu trắng, gạch số chi tiết, dây đeo kim loại chắc chắn đem lại vẻ nam tính.', 0, '0000-00-00'),
(1, 1, 2, 'CASIO MTP-1302D-7A1VDF', 18000000, 100, 'public/img/products/ProductProfile/sp1.png', 'public/img/products/ProductMani/sp1.png', 'public/img/products/ProductMani/sp1.png', 'public/img/products/ProductMani/sp1.png', 10, 1, 'MTP-1302D-7A1VDF', 'Nhật Bản', 1, 'Minerial Cristal', 'Quartz', 38.5, 9.2, 'Dây da', 0, 'Chống nước IP68', 'Đồng hồ Casio MTP-1302D-7A1VDF có kiểu dáng truyền thống với mặt số tròn, niềng được tạo khía nổi bật quanh nền trắng mặt số, kim chỉ và vạch số được phủ bạc tạo phản quang nổi bật trên nền số.', 1, '2021-12-01'),
(2, 1, 2, 'CASIO EFB-504JL-1ADR', 15999000, 100, 'public/img/products/ProductProfile/sp4.png', 'public/img/products/ProductMani/sp4.jpg', 'public/img/products/ProductMani/sp4_2.jpg', 'public/img/products/ProductMani/sp4_3.jpg', 11, NULL, 'EFB-504JL-1ADR', 'Nhật Bản', 0, 'Sapphire (Kính Chống Trầy)', 'Quartz (Pin)', 41.6, 11.2, 'Dây da', 1, 'Dạ Quang – Lịch Ngày – Đồng Hồ 24 Giờ – Chronograph', 'Đồng hồ nam Casio EFB-504JL-1ADR theo phong cách hoài cổ, vỏ máy kim loại màu bạc tạo vẻ chắc chắn nam tính, 3 ô phụ với 3 chức năng tiện ích khác nhau, cùng với dây đeo da màu nâu tạo nên phong cách cổ điển lịch lãm.', 0, '2022-01-01'),
(3, 1, 1, 'LONGINES L3.740.4.96.6', 25080000, 100, 'public/img/products/ProductProfile/sp2.png', 'public/img/products/ProductMani/sp2.jpg', 'public/img/products/ProductMani/sp2_2.jpg', 'public/img/products/ProductMani/sp2_3.jpg', 11, NULL, 'L3.740.4.96.6', 'Thụy Sỹ', 0, 'Sapphire (Kính Chống Trầy)', 'Quartz (Pin)', 41, 11, 'Dây kim loại', 0, 'Lịch Ngày', 'Mẫu Longines L3.740.4.96.6 phiên bản máy pin phần vỏ máy kim loại mạ bạc thiết kế dày dặn cùng khả năng chịu nước lên đến 30atm.', 0, '2022-01-01'),
(4, 2, 4, 'FOSSIL ES5112', 2940000, 100, 'public/img/products/ProductProfile/spn1.png', 'public/img/products/ProductMani/spn1_2.jpg', 'public/img/products/ProductMani/spn1.jpg', 'public/img/products/ProductMani/spn1_3.jpg', 11, NULL, 'ES5112', 'Mỹ', 1, 'Mineral Crystal (Kính Cứng)', 'Quartz (Pin)', 28, 7, 'Dây da', 0, NULL, 'Mẫu Fossil ES5112 phiên bản vỏ máy mỏng phong cách trẻ trung chỉ dày 7mm, mặt số tròn nhỏ nữ tính với kích thước 28mm phù hợp cho các bạn nữ có cổ tay nhỏ.', 0, '0000-00-00'),
(5, 2, 4, 'FOSSIL ES5088', 3480000, 10, 'public/img/products/ProductProfile/spn2.png', 'public/img/products/ProductMani/spn2.jpg', 'public/img/products/ProductMani/spn2_2.jpg', 'public/img/products/ProductMani/spn2_3.jpg', 0, NULL, '', 'Mỹ', 1, 'Mineral Crystal (Kính Cứng)', 'Quartz (Pin)', 28, 7, 'Dây lưới', 0, NULL, 'Mẫu Fossil ES5088 phiên bản vỏ máy mỏng phong cách trẻ trung chỉ dày 7mm, mặt số tròn nhỏ nữ tính với kích thước 28mm phù hợp cho các bạn nữ có cổ tay nhỏ.', 0, '2022-01-01'),
(6, 1, 5, 'CITIZEN NJ0154-80H', 126000000, 100, 'public/img/products/ProductProfile/sp3.png', 'public/img/products/ProductMani/sp3.jpg', 'public/img/products/ProductMani/sp3_2.jpg', 'public/img/products/ProductMani/sp3_3.jpg', 12, NULL, 'NJ0154-80H', 'Nhật Bản', 0, 'Mineral Crystal (Kính Cứng)', 'Automatic (Tự Động)', 40, 13, 'Dây kim loại', 0, 'Lịch Ngày – Lịch Thứ', 'Mẫu CITIZEN NJ0154-80H phiên bản dây đeo demi thời trang phối cùng các chi tiết kim chỉ cùng cọc vạch số mạ vàng hồng sang trọng trên nền mặt số 40mm với họa tiết trải tia nhẹ.', 0, '0000-00-00'),
(7, 2, 1, 'DOXA D221SSV', 37560000, 12, 'public/img/products/ProductProfile/spn3.png', 'public/img/products/ProductMani/spn3.jpg', 'public/img/products/ProductMani/spn3_2.jpg', 'public/img/products/ProductMani/spn3_3.jpg', 0, NULL, 'D221SSV', 'Nhật Bản', 1, 'Sapphire (Kính Chống Trầy)', 'Automatic (Tự Động)', 31, 11, 'Dây thép không gỉ', 0, 'Đính 14 Viên Kim Cương Thật – Họa Tiết Guilloché', 'Doxa D221SSV phiên bản kim cương sang trọng đính trên mặt số họa tiết size 31mm, đơn giản trẻ trung với kiểu dáng 3 kim mạ vàng hồng tone màu thời trang cho phái đẹp.', 0, '2022-01-01'),
(8, 1, 6, 'ORIENT RA-AC0007L10B', 7999000, 11, 'public/img/products/ProductProfile/sp5.png', 'public/img/products/ProductMani/sp5.jpg', 'public/img/products/ProductMani/sp5_2.jpg', 'public/img/products/ProductMani/sp5_2.jpg', 0, NULL, 'RA-AC0007L10B', 'Nhật Bản', 0, 'Mineral Crystal (Kính Cứng) ', ' Automatic (Tự Động)', 40, 12, 'Dây kim loại', 0, 'Lịch Ngày', 'Mẫu Orient RA-AC0007L10B mặt số xanh size 40mm nổi bật lên vẻ trẻ trung sang trọng với các chi tiết kim chỉ cùng cọc vạch số tạo hình mỏng mạ bạc.', 0, '2022-01-01'),
(9, 1, 7, 'SEIKO SUR234P1', 5360000, 15, 'public/img/products/ProductProfile/sp6.png', 'public/img/products/ProductMani/sp6.jpg', 'public/img/products/ProductMani/sp6_2.jpg', 'public/img/products/ProductMani/sp6_3.jpg', 0, NULL, 'SUR234P1', 'Nhật Bản', 0, 'Hardlex Crystal (Kính Cứng)', 'Quartz (Pin)', 38, 7, 'Dây da', 0, NULL, 'Thời trang nam tính cùng mẫu Seiko SUR234P1 với kiểu dáng giản dị của chiếc đồng hồ 3 kim ẩn chứa vẻ nổi bật với mẫu dây da trơn được phối tông nền nâu của sự trẻ trung.', 0, '2022-01-01'),
(10, 1, 10, 'SKAGEN SKW6578', 2960000, 13, 'public/img/products/ProductProfile/sp7.png', 'public/img/products/ProductMani/sp7.jpg', 'public/img/products/ProductMani/sp7_2.jpg', 'public/img/products/ProductMani/sp7_3.jpg', 0, NULL, 'SKW6578', 'Đan Mạch', 0, 'Mineral Crystal (Kính Cứng)', 'Quartz (Pin)', 40, 7, 'Dây da', 0, NULL, 'Mẫu Skagen SKW6578 đơn giản 3 kim trẻ trung trên nền mặt số size 40mm tone nền xám, phiên bản mỏng nhẹ thời trang với phần vỏ máy pin chỉ 7mm.', 0, '2022-01-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `order_date` date NOT NULL,
  `sales` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`order_date`, `sales`, `profit`, `quantity`, `order_total`) VALUES
('2022-01-11', 319360000, 63872000, 8, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaTH` int(10) NOT NULL,
  `Ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaTH`, `Ten`) VALUES
(1, 'Doxa'),
(2, 'Casio'),
(3, 'Longines'),
(4, 'Fossil'),
(5, 'Citizen'),
(6, 'Orient'),
(7, 'Seiko'),
(10, 'SKAGEN');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_hd` (`id_hd`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MaHA`),
  ADD KEY `MaSP1` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nd` (`id_nd`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD KEY `MaQuyen1` (`MaQuyen`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaKM` (`MaKM`),
  ADD KEY `th` (`MaTH`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaTH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `MaHA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `MaTH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `MaSP1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_nd`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `MaQuyen1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `MaKM` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`),
  ADD CONSTRAINT `th` FOREIGN KEY (`MaTH`) REFERENCES `thuonghieu` (`MaTH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
