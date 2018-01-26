-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2018 lúc 11:09 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ci_clothes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `alt` varchar(10) NOT NULL,
  `order_image` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `url_image`, `image`, `url`, `title`, `alt`, `order_image`, `active`) VALUES
(6, 'uploads/multi-banner/1511060896-bg_viewcolection.jpg', 'bg_viewcolection.jpg', '', '', '', 0, 1),
(7, 'uploads/multi-banner/1511060904-bg_viewcolection.jpg', 'bg_viewcolection.jpg', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(100) NOT NULL,
  `idCustomer` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `idCustomer`, `discount`, `status`) VALUES
(1, 1, 10, 1),
(3, 2, 0, 0),
(4, 3, 0, 0),
(5, 4, 0, 0),
(6, 5, 0, 0),
(7, 6, 0, 0),
(8, 7, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `idProduct` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `idBill` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idProduct`, `price`, `quantity`, `idBill`) VALUES
(1, 1, 10000, 2, 1),
(2, 2, 10000, 4, 2),
(3, 619, 61000, 1, 3),
(4, 619, 61000, 1, 4),
(5, 1, 20000, 4, 5),
(6, 619, 61000, 1, 6),
(7, 1, 20000, 1, 7),
(8, 1, 20000, 1, 8),
(9, 2, 70000, 1, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content_page`
--

CREATE TABLE `content_page` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idPage` tinyint(3) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `content_page`
--

INSERT INTO `content_page` (`id`, `name`, `idPage`, `content`, `description`, `keyword`, `status`) VALUES
(1, 'liên hệ đến tôi', 2, '<h2 xss=removed>GIỚI THIỆU VỀ CTY TNHH MTV NHÔM XINGFA VIỆT NAM</h2>\r\n\r\n<p xss=removed> </p>\r\n\r\n<p><strong>CTY TNHH MTV Nhôm Xingfa Việt Nam</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><a href=\"http://xingfavn.com.vn/\"><strong>CTY TNHH MTV Nhôm Xingfa Việt Nam</strong></a> được thành lập với vốn đầu tư trên 100 Tỷ đồng, nhà máy được xây tại Khu Công Nghiệp Xuyên Á.</p>\r\n\r\n<p><strong>T</strong>iêu chí ban đầu khi thành lập doanh nghiệp của chúng tôi là xác lập một Công ty có đầy đủ năng lực và trình độ chuyên môn trong lĩnh vực sản xuất Nhôm thanh định hình.</p>\r\n\r\n<p>Sản phẩm chúng tôi gồm: nhiều loại hợp Kim Nhôm, xử lý bề mặt đa dạng và nhiều chủng loại nhôm công nghiệp.<br>\r\nNgoài việc đứng vững trên thị trường Nhôm thanh xây dựng trong nước, chúng tôi còn tiếp nhận rất nhiều đơn hàng Nhôm công nghiệp xuất khẩu.</p>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"\" src=\"http://xingfavn.com.vn/file/ckfinder/userfiles/images/unnamed2(5).jpg\"></p>\r\n\r\n<p><br>\r\nVới phương châm kinh doanh: <strong>UY TÍN – CHẤT LƯỢNG – PHÁT TRIỂN</strong> .</p>\r\n\r\n<p>Chúng tôi tự hào là một trong số công ty hàng đầu tại Việt Nam chuyên cung cấp và thi công cửa nhôm cho các công trình cao cấp.<br>\r\nChúng tôi chân thành cảm ơn quý khách hàng đã tín nhiệm, ủng hộ và sử dụng sản phẩm nhôm TWA trong suốt thời gian vừa qua.<br>\r\nĐể đáp lại tấm chân tình ấy, Nhôm TWA rất vinh hạnh được đồng hành cùng quý khách, nghiên cứu và phát triển nhiều hơn về sản phẩm Nhôm thanh định hình.<br>\r\nQua đó quý khách hàng có thể yên tâm về chất lượng và mẫu mã sản phẩm.</p>\r\n', '', 'liên hệ đến tôi', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(100) NOT NULL,
  `meno` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `email`, `sdt`, `meno`, `create_date`) VALUES
(1, 'nhut', 'test', '', 1667423434, 'test', '2017-11-12 00:00:00'),
(2, 'aaaaa', 'ttttt', 'itnguyenhominhnhut@gmail.com', 1667423430, 'ttttt', '2017-11-20 16:55:23'),
(3, 'adsaaa', 'ttt', 'itnguyenhominhnhut@gmail.com', 1667423434, 'aaaaa', '2017-11-20 16:56:23'),
(4, 'nhut', 'aaa', 'itnguyenhominhnhut@gmail.com', 1667423434, 'aaaaa', '2017-11-24 16:11:47'),
(5, 'nguyen ho minh nhut', 'tphcm', 'itnguyenhominhnhut@gmail.com', 1667423434, 'hahahaa', '2017-12-04 14:42:10'),
(6, 'devs nhut', 'tphcm', 'itnguyenhominhnhut@gmail.com', 1667423434, 'kakakaa', '2017-12-04 14:45:20'),
(7, 'aaaaa', 'aaaaa', 'aaaaa@gmail.com', 1667423434, 'aaaaa', '2017-12-04 14:51:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imagefooter`
--

CREATE TABLE `imagefooter` (
  `id` int(10) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `alt` varchar(10) NOT NULL,
  `order_image` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `imagefooter`
--

INSERT INTO `imagefooter` (`id`, `url_image`, `image`, `url`, `title`, `alt`, `order_image`, `active`) VALUES
(1, 'uploads/multi-footer/1510476165-4-480x635.jpg', '4-480x635.jpg', '', '', '', 2, 1),
(3, 'uploads/multi-footer/1510476165-10-500x600.jpg', '10-500x600.jpg', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageproduct`
--

CREATE TABLE `imageproduct` (
  `id` int(100) NOT NULL,
  `idProduct` int(100) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `avata` tinyint(3) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `imageproduct`
--

INSERT INTO `imageproduct` (`id`, `idProduct`, `url_image`, `image`, `avata`, `status`) VALUES
(1, 1, 'uploads/product/multi-image/1/1511454434-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(2, 2, 'uploads/product/multi-image/2/1511454590-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(3, 3, 'uploads/product/multi-image/3/1511454638-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(4, 4, 'uploads/product/multi-image/4/1511454672-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(5, 5, 'uploads/product/multi-image/5/1511533383-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(6, 4, 'uploads/product/multi-image/4/1514618166-5-480x635.jpg', '5-480x635.jpg', 0, 1),
(7, 1, 'uploads/product/multi-image/1/1516093196-2-500x600.jpg', '2-500x600.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `menu_image` tinyint(3) NOT NULL,
  `status_menu_img` tinyint(3) NOT NULL,
  `order_menu` int(10) NOT NULL,
  `parent` int(10) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `menu` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `title`, `alt`, `des`, `slug`, `url_image`, `img`, `menu_image`, `status_menu_img`, `order_menu`, `parent`, `status`, `menu`) VALUES
(1, 'Người lớn 1', 'Quần áo người lớn', 'Quần áo người lớn', 'Quần áo người lớn', 'nguoi-lon-1', './uploads/menu/15104765700_1.jpg', '15104765700_1.jpg', 6, 1, 1, 0, 1, 1),
(2, 'Quần áo người lớn 2', 'Quần áo người lớn 2', 'Quần áo người lớn 2', '', 'quan-ao-nguoi-lon-2', './uploads/menu/15160930520_1.jpg', '15160930520_1.jpg', 5, 1, 2, 1, 1, 0),
(3, 'Quần áo người lớn 3', 'Quần áo người lớn 3', 'Quần áo người lớn 3', '', 'Quần áo người lớn 3', '', '', 0, 0, 4, 2, 1, 0),
(4, 'Quần áo người lớn 4', 'Quần áo người lớn 4', 'Quần áo người lớn 4', '', 'quan-ao-nguoi-lon-4', '', '', 0, 0, 3, 2, 0, 0),
(5, 'Người lớn 5', 'Quần áo người lớn 6', 'Quần áo người lớn 6', 'Quần áo người lớn 6', 'quan-ao-nguoi-lon-5', './uploads/menu/15104765700_1.jpg', '15104765700_1.jpg', 4, 1, 4, 0, 1, 1),
(6, 'Quần áo người lớn 6', 'Quần áo người lớn 7', 'Quần áo người lớn 7', 'Quần áo người lớn 7', 'quan-ao-nguoi-lon-7', '', '', 0, 0, 5, 8, 0, 0),
(7, 'Quần áo người lớn 7', 'Quần áo người lớn 8', 'Quần áo người lớn 8', 'Quần áo người lớn 8', 'quan-ao-nguoi-lon-8', '', '', 0, 0, 4, 8, 0, 0),
(8, 'Quần áo người lớn 8', 'Quần áo người lớn 9', 'Quần áo người lớn 9', 'Quần áo người lớn 9', 'quan-ao-nguoi-lon-9', '', '', 0, 0, 3, 1, 0, 0),
(9, 'Quần áo người lớn 9', 'Quần áo người lớn 10', 'Quần áo người lớn 10', 'Quần áo người lớn 10', 'quan-ao-nguoi-lon-10', '', '', 0, 0, 5, 5, 0, 1),
(10, 'Blog', 'blog', 'blog', 'blog', 'blog', './uploads/menu/15160918090_1.gif', '0', 4, 0, 6, 0, 1, 0),
(11, 'Blog1', 'blog1', 'blog1', 'blog1', 'blog1', './uploads/menu/15146003230_1.gif', '15146003230_1.gif', 1, 1, 7, 10, 1, 0),
(12, 'Blog2', 'blog2', 'blog2', 'blog2', 'blog2', './uploads/menu/15146003300_1.gif', '15146003300_1.gif', 2, 1, 8, 10, 1, 0),
(13, 'Bê đê', 'bê đê', 'bê đê', 'bê đê', 'be-de', './uploads/menu/15146003360_1.gif', '15146003360_1.gif', 3, 1, 9, 10, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(3) NOT NULL COMMENT 'xuất hiện ở menu',
  `show_hiden` tinyint(3) NOT NULL COMMENT 'ẩn hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `status`, `show_hiden`) VALUES
(2, 'liên hệ', 'lien-he', 1, 1),
(4, 'thanh toán', 'thanh-toan', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `idParent` int(100) NOT NULL,
  `idSubChild` int(100) NOT NULL,
  `idChild` int(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `salePrice` int(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `idParent`, `idSubChild`, `idChild`, `des`, `content`, `keyword`, `description`, `tags`, `price`, `salePrice`, `create_date`, `status`) VALUES
(1, 'áo thun nam', 'ao-thun-nam', 1, 2, 4, '', '<p xss=removed>áo thun nam</p>\r\n', '', '', 'áo thun nam', 50000, 20000, '2018-01-16 04:17:49', 1),
(2, 'áo thun nam-1', 'ao-thun-nam-1', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 1', 70000, 0, '2017-11-23 16:28:22', 1),
(3, 'áo thun nam-2', 'ao-thun-nam-2', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 2', 80000, 0, '2017-11-23 16:28:22', 1),
(4, 'áo thun nam-3', 'ao-thun-nam-3', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 3', 90000, 0, '2017-11-23 16:28:22', 1),
(5, 'áo thun nam 4', 'ao-thun-nam-4', 1, 8, 7, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 3', 100000, 0, '2017-11-25 14:27:51', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `alt` varchar(10) NOT NULL,
  `order_image` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `url_image`, `image`, `url`, `title`, `alt`, `order_image`, `active`) VALUES
(1, 'uploads/multi-slider/1510928896-bg_viewcolection.jpg', 'bg_viewcolection.jpg', '', 'slider', 'slider', 1, 1),
(2, 'uploads/multi-slider/1510929785-bg_viewcolection.jpg', 'bg_viewcolection.jpg', '', 'slider', 'slider', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `group_admin` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `group_admin`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `content_page`
--
ALTER TABLE `content_page`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imagefooter`
--
ALTER TABLE `imagefooter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `content_page`
--
ALTER TABLE `content_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `imagefooter`
--
ALTER TABLE `imagefooter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
