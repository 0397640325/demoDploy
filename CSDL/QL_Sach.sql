-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2020 lúc 03:40 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`) VALUES
(20, '0353270197'),
(21, '0374156513');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id_cart`, `id_product`, `qty`) VALUES
(21, 54, 2),
(20, 54, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `note_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `note_category`) VALUES
(1, 'Sách thiếu nhi', 'Sách thiếu nhi'),
(2, 'Sách ngoại ngữ', 'Sách ngoại ngữ'),
(3, 'Sách giáo khoa', 'Sách giáo khoa'),
(4, 'Chuyện tranh thiếu nhi', 'Chuyện tranh thiếu nhi'),
(5, 'Phụ kiện', 'Phụ kiện'),
(6, 'Tiểu thuyết', 'Tiểu thuyết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_product` int(11) NOT NULL,
  `time` datetime NOT NULL COMMENT 'thời gian bình luận',
  `comment` text NOT NULL COMMENT 'nội dung bình luận',
  `rate_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like_product`
--

CREATE TABLE `like_product` (
  `id_like` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `note_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`id_location`, `location`, `note_location`) VALUES
(1, 'Thái Nguyên', '1'),
(2, 'VSIP - Bắc Giang', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_product`, `qty`) VALUES
(179, 54, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id_order` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `address_order` text NOT NULL,
  `id_location` int(11) NOT NULL,
  `id_methods` int(11) NOT NULL,
  `note` text NOT NULL,
  `phone` text NOT NULL,
  `order_date` date NOT NULL,
  `price_order` int(11) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id_order`, `id_user`, `address_order`, `id_location`, `id_methods`, `note`, `phone`, `order_date`, `price_order`, `status`) VALUES
(179, '0353270197', 'Tân Thịnh', 1, 1, '', '0987654321', '2020-07-10', 23000000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id_methods` int(11) NOT NULL,
  `methods` varchar(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `payment_methods`
--

INSERT INTO `payment_methods` (`id_methods`, `methods`, `note`) VALUES
(1, 'Trả tiền mặt khi nhận hàng', 'Trả tiền mặt khi giao hàng'),
(2, 'Khấu trừ vào lương', 'Bạn không phải trả tiền mặt khi nhận hàng. Thay vào đó tiền sẽ được trừ vào lương của bạn vào ngày 12 hàng tháng. Nếu có thắc mắc vui lòng liên hệ bộ phận HR.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL COMMENT 'số lượng',
  `id_category` int(11) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'đơn giá',
  `image` varchar(255) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name`, `qty`, `id_category`, `price`, `image`, `id_supplier`, `note`) VALUES
(27, 'Điện thoại iPhone 11 64GB', 100, 1, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(28, 'Điện thoại iPhone 11 64GB', 100, 1, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(29, 'Điện thoại iPhone 11 64GB', 100, 1, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(30, 'Điện thoại iPhone 11 64GB', 100, 1, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(31, 'Điện thoại iPhone 11 64GB', 100, 2, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(32, 'Điện thoại iPhone 11 64GB', 100, 2, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(33, 'Điện thoại iPhone 11 64GB', 100, 2, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(34, 'Điện thoại iPhone 11 64GB', 100, 2, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(35, 'Điện thoại iPhone 11 64GB', 100, 3, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(36, 'Điện thoại iPhone 11 64GB', 100, 3, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(37, 'Điện thoại iPhone 11 64GB', 100, 3, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(38, 'Điện thoại iPhone 11 64GB', 100, 3, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(39, 'Điện thoại iPhone 11 64GB', 100, 4, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(40, 'Điện thoại iPhone 11 64GB', 100, 4, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(41, 'Điện thoại iPhone 11 64GB', 100, 4, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(42, 'Điện thoại iPhone 11 64GB', 100, 4, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(43, 'Điện thoại iPhone 11 64GB', 100, 5, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(44, 'Điện thoại iPhone 11 64GB', 100, 5, 19490000, 'oppo-a92.png', 1, 'Điện thoại iPhone 11 64GB'),
(45, 'Điện thoại iPhone 11 64GB', 100, 5, 19490000, 'ip11.png', 1, 'Điện thoại iPhone 11 64GB'),
(46, 'Những câu chuyện về các loại động vật', 100, 1, 25000, 'oppo-a92.png', 1, 'Những c&acirc;u chuyện về c&aacute;c loại động vật'),
(50, 'Thiếu nữ toàn phong tập 1', 100, 6, 190000, 'thieu-nu-toan-phong-tap-1-anh-sang-ban-mai.jpg', 2, 'Thiếu nữ to&agrave;n phong'),
(51, 'Bộ sách giáo khoa lớp 1', 100, 3, 300000, 'unnamed.jpg', 1, 'Bộ s&aacute;ch gi&aacute;o khoa lớp 1'),
(52, 'Sách giáo khoa tiếng anh lớp 6', 100, 2, 19000, 'sach-giao-khoa-tieng-anh-6.jpg', 1, 'S&aacute;ch gi&aacute;o khoa tiếng anh lớp 6'),
(54, '10 vạn câu hỏi vì sao', 100, 1, 23000, 'sach-hay-nen-doc.jpg', 1, 'M&ocirc; tả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_order`
--

CREATE TABLE `status_order` (
  `status` int(5) NOT NULL,
  `note_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status_order`
--

INSERT INTO `status_order` (`status`, `note_status`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đã giao'),
(4, 'Hủy đơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `name_supplier` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `name_supplier`, `adress`, `phone_number`) VALUES
(1, 'Nhà xuất bản giáo dục Việt Nam', 'ĐH CNTT&TT Thái Nguyên, tp Thái Nguyên', '0987654321'),
(2, 'Công ty TNHH hai thành viên', 'ĐH CNTT&TT Thái Nguyên, tp Thái Nguyên', '0987654321'),
(3, 'Công ty TNHH ba thành viên', 'Thanh Giang, Thanh Miện, Hải Dương', '0964003047');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `room` varchar(50) NOT NULL,
  `id_location` int(11) NOT NULL COMMENT 'địa chỉ công ty',
  `avata` varchar(255) NOT NULL,
  `debt` int(11) NOT NULL COMMENT 'Tiền thiếu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `password`, `permission`, `fullname`, `dateofbirth`, `mail`, `phone`, `adress`, `room`, `id_location`, `avata`, `debt`) VALUES
('0332665832', 'e10adc3949ba59abbe56e057f20f883e', 2, 'Đinh Lê Ngọc Hân', '2000-05-11', 'aabfgfg@gmail.com', '0964003047', 'Tp Hồ Chí Minh', '511-B09', 1, '81415080_173540680714059_2380288682377609216_o.jpg', 0),
('0353270197', 'e10adc3949ba59abbe56e057f20f883e', 2, 'Nông Văn Khánh', '1997-01-27', 'khanhtit@gmail.com', '0987654321', 'Văn Quan - Lạng Sơn', '511-B09', 1, 'V0977977.jpg', 130000),
('0374156513', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Phạm Công Danh', '1997-06-11', 'phamcongdanh11061997@gmail.com', '0374156513', 'Quỳnh Hải, Quỳnh Phụ, Thái Bình', 'Tân Thịnh', 1, '81415080_173540680714059_2380288682377609216_o.jpg', 0),
('0986845621', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Nguyễn Đình Hậu', '1997-09-20', 'hau.20.09.1997@gmail.com', '0964003047', 'Phúc Than - Than Uyên - Lai Châu', '511-B09', 2, 'v0977996.jpg', 773000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD KEY `id_cart` (`id_cart`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `like_product`
--
ALTER TABLE `like_product`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_location` (`id_location`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_methods` (`id_methods`) USING BTREE,
  ADD KEY `status` (`status`);

--
-- Chỉ mục cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id_methods`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type_product` (`id_category`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Chỉ mục cho bảng `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`status`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `location` (`id_location`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `like_product`
--
ALTER TABLE `like_product`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id_methods` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `status_order`
--
ALTER TABLE `status_order`
  MODIFY `status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`),
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `like_product`
--
ALTER TABLE `like_product`
  ADD CONSTRAINT `like_product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `like_product_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order_product` (`id_order`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`id_location`) REFERENCES `location` (`id_location`),
  ADD CONSTRAINT `order_product_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `order_product_ibfk_5` FOREIGN KEY (`id_methods`) REFERENCES `payment_methods` (`id_methods`),
  ADD CONSTRAINT `order_product_ibfk_6` FOREIGN KEY (`status`) REFERENCES `status_order` (`status`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_location`) REFERENCES `location` (`id_location`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
