-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2021 lúc 03:41 PM
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
-- Cơ sở dữ liệu: `web_mysql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(101, 'conghuy', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'công huy', 'conghuy972001@gmail.com', 'bình dương', '202cb962ac59075b964b07152d234b70', 1234123412);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ma_sp` varchar(20) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `thutu` varchar(20) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ma_sp`, `tendanhmuc`, `giasp`, `soluong`, `noidung`, `thutu`, `hinhanh`, `tinhtrang`, `id_danhmuc`) VALUES
('BP001', 'Bàn phím cơ', 300000, 10, 'Bàn phím cơ giá rẻ sinh viên có thể sử dụng đa năng trong các loại lĩnh vực: Game, học tập, làm việc dễ chịu và thoải mái', '1', '1640574514_banphim_co.jpg', 1, 'BP1'),
('BP002', 'Bàn phím bluetooth', 400000, 10, 'Bàn phím bluetooth giá rẻ xuất xứ tại Việt Nam', '1', '1640573740_banphim_bluetooth.jpg', 1, 'BP1'),
('BP003', 'Bàn phím cơ LED đổi màu', 500000, 10, 'Bàn phím LED với thiết kế sang trọng mà đẹp mắt', '1', '1640574047_banphim_co_led_doimau.jpg', 1, 'BP1'),
('C001', 'Chuột không giây', 249000, 20, 'chuột không dây tiện dụng cho mọi nơi', '1', '1640574271_chuot_khongday.jpg', 1, 'CLT1'),
('C002', 'Chuột Gaming', 449000, 10, 'chuột chiến game thả ga, không lo tụt FPS', '1', '1640574324_chuot_gaming.jpg', 1, 'CLT1'),
('KCL001', 'Kính cường lực', 79000, 10, 'kính cường lực giá rẻ bảo vệ điện thoại của bạn', '1', '1640574758_kinhcuongluc_thuong.jpg', 1, 'KCL1'),
('KCL002', 'Kính cường lực chống nhìn trộm', 189000, 10, 'kính chống nhìn trộm trên điện thoại', '1', '1640574824_kinhcuongluc_chongnhintrom.png', 1, 'KCL1'),
('LC001', 'Tấm lót chuột hình con chó', 99000, 10, 'lót chuột dễ thương với các bạn trẻ', '1', '1640574399_chuot_tamlot.jpg', 1, 'CLT1'),
('OL001', 'Ốp lưng iphone 8 plus', 69000, 10, 'ốp lưng hình trái tim cho iphone 8 plus', '1', '1640576821_oplung_iphone8plus.jpg', 1, 'OL1'),
('OL002', 'Ốp lưng iphone 11', 99000, 10, 'ốp lưng cho iphone 11 có nhiều màu sắc', '1', '1640576868_oplung_iphone11.jpg', 1, 'OL1'),
('OL003', 'Ốp lưng iphone 12 pro max', 179000, 5, 'ốp lưng iphone 12 pro max trong suốt', '1', '1640576919_oplung_iphone12promax.jpg', 1, 'OL1'),
('TN001', 'Tai nghe không dây', 490000, 5, 'tai nghe không dây gọn nhẹ', '1', '1640577261_tainghe_khongday.jpg', 1, 'TN1'),
('TN002', 'Tai nghe gaming', 720000, 5, 'tai nghe gaming led cực đẹp và ngầu', '1', '1640577308_tainghe_gaming.jpg', 1, 'TN1'),
('TN003', 'Tai nghe LED tai mèo', 600000, 5, 'tai nghe hình tao mèo dễ thương cho phái nữ ', '1', '1640577353_tainghe_led_meo.jpg', 1, 'TN1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlydanhmuc`
--

CREATE TABLE `quanlydanhmuc` (
  `id_danhmuc` varchar(20) NOT NULL,
  `ten_danhmuc` varchar(100) NOT NULL,
  `thutu_danhmuc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlydanhmuc`
--

INSERT INTO `quanlydanhmuc` (`id_danhmuc`, `ten_danhmuc`, `thutu_danhmuc`) VALUES
('BP1', 'Bàn Phím', 5),
('CLT1', 'Chuột Laptop', 4),
('KCL1', 'Kính Cường Lực', 2),
('OL1', 'Ốp Lưng', 1),
('TN1', 'Tai nghe', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlytintuc`
--

CREATE TABLE `quanlytintuc` (
  `id_tintuc` varchar(20) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quanlytintuc`
--

INSERT INTO `quanlytintuc` (`id_tintuc`, `tieude`, `noidung`, `hinhanh`) VALUES
('001', 'Giảm giá ốp lưng nhân dịp noel', 'giảm gái ữu đãi lớn cho giới trẻ', '1640581057_oplung_giamgia.png'),
('002', '1', 'aaa', '1640581196_chuot_tamlot.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ma_sp`);

--
-- Chỉ mục cho bảng `quanlydanhmuc`
--
ALTER TABLE `quanlydanhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
