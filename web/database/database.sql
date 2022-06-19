-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2022 lúc 04:27 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_ivydemo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('bang', '11052001'),
('adminbang', '35b4ec0f39b9b5d638f2d51412ca9809'),
('adminbang1', '35b4ec0f39b9b5d638f2d51412ca9809');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(50) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(45, 24, '6514', 0),
(46, 24, '972', 0),
(47, 24, '3319', 0),
(48, 24, '8992', 0),
(61, 24, '885', 0),
(62, 24, '5930', 0),
(63, 24, '7314', 0),
(64, 25, '3865', 0),
(65, 25, '5553', 0),
(66, 25, '6227', 0),
(68, 25, '1258', 1),
(69, 25, '6234', 1),
(70, 25, '426', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(50) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(8, '355', 27, 22),
(9, '355', 31, 1),
(10, '2673', 26, 1),
(11, '3597', 26, 2),
(12, '3597', 37, 2),
(13, '2450', 37, 2),
(14, '2450', 36, 3),
(15, '7245', 37, 1),
(16, '5483', 37, 1),
(17, '5483', 36, 1),
(18, '5868', 37, 1),
(19, '9759', 37, 2),
(20, '9759', 36, 1),
(21, '9316', 37, 1),
(22, '3841', 37, 1),
(23, '7772', 37, 2),
(24, '7772', 36, 2),
(25, '1140', 37, 1),
(26, '1221', 36, 1),
(27, '6124', 37, 1),
(44, '6246', 37, 1),
(48, '885', 37, 3),
(49, '885', 36, 3),
(50, '5930', 37, 1),
(52, '7314', 40, 2),
(54, '3865', 37, 1),
(55, '5553', 41, 1),
(56, '6227', 41, 3),
(58, '1258', 41, 2),
(59, '6234', 37, 4),
(60, '426', 37, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'q', 'qq', 'q', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(24, 'admin051', 'admin04@gmail.com', '11', '35b4ec0f39b9b5d638f2d51412ca9809', 11),
(25, 'bang', 'admin01@gmail.com', 'abc', '35b4ec0f39b9b5d638f2d51412ca9809', 90);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(77, 'Áo', 0),
(78, 'Quần', 0),
(79, 'Váy', 0),
(84, 'Hàng nữ mới về', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(36, 'vay croptop', 'vaycroptop1', '990000', 50, '1633941759_damsuong1.jfif', 'abc', 'aa', 1, 79),
(37, 'đầm suông', 'damsuong1', '990000', 50, '1633969003_damsuong1.jfif', 'Áo sơ mi kiểu cổ V, cài khuy móc bọc vải phía trước. Tay dài bo chun co giãn ở gấu, thêu hình hoa nhiều màu tạo điểm nhấn. Phần cổ xếp nếp với dáng xuông thoải mái.', 'Được làm từ vải Tencel (hoặc Lyocell) - là một loại vải sinh học được chiết xuất từ những cây gỗ thiên nhiên có hàm lượng cenllulo thuộc họ nhà tre như như bạch đàn và phổ biến nhất trong số đó là cây khuynh diệp. Để sản xuất ra loại vải này vỏ gỗ của các loại cây này sẽ được sơ chế và nghiền thành bột sau đó kéo thành sợi bằng công nghệ Nano tạo sự an toàn và thân thiện tuyệt đối cho sức khỏe của người sử dụng.\r\n\r\nSợi vải Tencel rất mềm khả năng khô cực nhanh và đặc biệt là không bị nhăn hay co rút hay nhàu nát sau khi giặt. Với những sản phẩm làm từ chất liệu này bạn hoàn toàn có thể giặt bằng máy mà không sợ ảnh hưởng đến chắt lượng sợi sau khi giặt.\r\n\r\nMàu sắc: Trắng - Nude\r\n\r\nMẫu mặc size S:\r\n\r\nChiều cao: 1m74\r\nCân nặng: 51kg\r\nSố đo 3 vòng: 83-61-90\r\n\r\nDòng sản phẩm	Ladies\r\nNhóm sản phẩm	Áo\r\nCổ áo	Cổ chữ V\r\nTay áo	Tay dài\r\nKiểu dáng	Xuông\r\nĐộ dài	Dài thường\r\nHọa tiết	Trơn\r\nChất liệu	Lụa', 1, 79),
(39, 'quần baggy', 'quanbaggy1', '990000', 50, '1634039585_quanbaggy.jpg', 'Quần jeans cạp cao có đỉa. Dáng baggy. Có túi phía trước và 2 túi vuông phía sau. Cài khóa kéo và khuy kim loại.', 'Chất liệu với hơn 95% cotton mềm mại, thoáng mát & an toàn cho làn da nhạy cảm nhất. Những chiếc quần Jean có thể nói bất cứ ai cũng có thể mặc được dòng sản phẩm này, dù là đi chơi, đi học, hay đi làm.\r\n\r\nMàu sắc: Xanh Lơ\r\n\r\nMẫu mặc size 27:\r\n\r\nChiều cao: 1m65\r\nCân nặng: 48kg\r\nSố đo 3 vòng: 80-62-89\r\n\r\n\r\nDòng sản phẩm	You\r\nNhóm sản phẩm	Quần\r\nKiểu dáng	Baggy\r\nĐộ dài	Ngang mắt cá chân\r\nHọa tiết	Trơn\r\nChất liệu	Denim', 1, 78),
(40, 'quần jeans', 'quanjeans1', '990000', 50, '1634039637_quạneans.jfif', 'Quần jeans cạp cao có đỉa. Dáng suông, Có túi phía trước và 2 túi vuông phía sau. Cài khóa kéo và khuy kim loại.', 'Chất liệu với hơn 95% cotton mềm mại, thoáng mát & an toàn cho làn da nhạy cảm nhất. Những chiếc quần Jean có thể nói bất cứ ai cũng có thể mặc được dòng sản phẩm này, dù là đi chơi, đi học, hay đi làm.\r\n\r\nMàu sắc: Xanh Lơ\r\n\r\nMẫu mặc size 27:\r\n\r\nChiều cao: 1m65\r\nCân nặng: 48kg\r\nSố đo 3 vòng: 80-62-89\r\n\r\nDòng sản phẩm	You\r\nNhóm sản phẩm	Quần\r\nKiểu dáng	Ống suông\r\nĐộ dài	Qua mắt cá chân\r\nHọa tiết	Trơn\r\nChất liệu	Denim', 1, 78),
(41, 'quanjeansbaggy', 'quanjeans2', '990000', 50, '1634045992_quanjeansbaggy.jfif', 'abcd', 'abcd', 1, 78);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id` int(11) NOT NULL,
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `hinh`) VALUES
(22, '1640795878_anh2.jpg'),
(23, '1640795892_anh3.jpg'),
(24, '1640795900_anh4.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
