-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acount`
--

CREATE TABLE `acount` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `acount`
--

INSERT INTO `acount` (`id`, `username`, `email`, `password`) VALUES
(1, 'nano', 'test2@gmail.com', '$2y$10$aoTdmeBhEiLfqPbdn9gYIuiDlEA4lwpxU5MezBeMeI/OTPOnXK0rS'),
(2, 'name', 'test1@gmail.com', '$2y$10$vngoCVpw0kMu.rqd8zHmtu2x/9TeMbJyfCVlXol0JzI67ThQ91seK'),
(4, 'name1', 'test3@gmail.com', '$2y$10$OgIDSLNb8OaNC2Uxi9Ito.A2A69Y0Nrtl4xtSlC1Ync8HIitj3l9u'),
(5, 'tienhuy', 'phantienhuy@gmail.com', '12345'),
(6, 'trungquan', 'quan@gmail.com', '12345'),
(8, 'test7', 'tesssst@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(50) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'phantienhuy', 'tienhuy@gmail.com', 123456, 0),
(2, 'admin', 'admin@gmail.com', 123456, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `type`, `address`) VALUES
(1, 'chó', 'hà nội'),
(2, 'mèo', 'hồ chí minh'),
(3, 'Chuồng', 'Hải Phòng'),
(4, 'Thức ăn', 'Khánh hòa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`name`, `phone`, `email`, `message`, `id`) VALUES
('Nguyễn Hải Đăng 1', 39659343, 'ngoanhduc9a@gmail.com', 'tôi yêu cửa hàng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` char(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `guest`
--

INSERT INTO `guest` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'anhduc', 'sugoi@gmail.com', '123456', '123456789', 'hoài đức'),
(2, 'juno', 'lele@gmail.com', '123456', '31231231', 'hoài đức'),
(5, 'tienhuy', 'huylele@gmail.com', '123456', '0313028932', 'thanh xuân'),
(7, 'juno', 'vuive@gmail.com', 'Ducdz1234$', '231312', 'jolo'),
(10, 'trungquan', 'admin@gmail.com', '123456', '1234567889', 'DA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_details`
--

CREATE TABLE `invoice_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invoice_details`
--

INSERT INTO `invoice_details` (`order_id`, `product_id`, `quantity`) VALUES
(47, 26, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `guest_id` int(50) NOT NULL,
  `name_receiv` varchar(20) NOT NULL,
  `phone_receiv` char(20) NOT NULL,
  `address_receiv` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sum_pri` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `guest_id`, `name_receiv`, `phone_receiv`, `address_receiv`, `status`, `date_time`, `sum_pri`) VALUES
(47, 2, 'huy lele', '12345678', 'hoài đức', 0, '2022-12-15 04:19:31', 8900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcategory` int(11) NOT NULL,
  `hot_pick` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `detail`, `idcategory`, `hot_pick`) VALUES
(3, 'Alaska Standard Nâu Đỏ Đực C13022', 'https://azpet.b-cdn.net/wp-content/uploads/2022/07/C2409-C13022-5.jpg', 10000, 'chó rất đẹp', 1, 1),
(23, 'SỮA CHO PET THÚ CƯNG CHÓ MÈO BIO MILK GÓI 100G Bổ sung chất dinh dưỡng', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFTWxn5j0n4h_oeJUZGgyuZBQM6yduANYJUA&usqp=CAU', 8900000, 'Bảo hành sức khỏe 30 ngày.Giảm 10% khi mua bé thứ 2.Giảm trọn đời 5% khi mua phụ kiện.Giảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 3, 1),
(24, '1 CÂY XÚC XÍCH DINH DƯỠNG CHO CHÓ MÈO - Pet shop Uytinpro', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaPBn84U4qy6ViY4SvkezgLetPfMlbWJkUYA&usqp=CAU', 12500000, '1. Xuất xứ: Bio-Pharmachemie 2. Trọng lượng gói: 100g 3. Sữa phù hợp với tất cả các thú cưng từ mới sinh đến trưởng thành * Đảm bảo hàng chính hãng', 4, NULL),
(25, 'Alaska Oversize Nâu Đỏ Cái C13006', 'https://azpet.b-cdn.net/wp-content/uploads/2022/07/C2363-C13006-1.jpg', 12500000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nộ', 1, NULL),
(26, 'Alaska Standard Nâu Đỏ Cái C12987', 'https://azpet.b-cdn.net/wp-content/uploads/2022/06/C2358-C12987-1.jpg', 8900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 1, NULL),
(27, 'Xương Orgo làm sạch răng cho Chó - Pet shop Uytinpro', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEh_gVtyAEHV4e9D2Jf4z99HwHYjeJNeeTJw&usqp=CAU', 21900000, 'Xương canxi cho chó orgo có hàm lượng canxi cao, đám ứng tốt cho mọi giống chó ở mọi độ tuổi khác nhau. - Làm sạch răng, hợp khẩu vị, giúp xương chắc khỏe và bổ xung canxi. - Với thành phần phomat chất lượng cao từ nguyên liệu thô, cùng với công thức sữa ', 4, NULL),
(28, 'THỨC ĂN CHO CHÓ Ganador adult Dạng hạt Vị gà nướng Túi 400g Thương hiệu từ Pháp Dành cho tất cả các giống Chó trưởng thành từ 12 tháng tuổi trở lên', 'https://azpet.com.vn/wp-content/uploads/2022/09/C2811-C13205-1.jpg', 21900000, 'Ganador là nhãn hiệu thức ăn cho chó cưng được sản xuất bởi Tập đoàn Neovia với gần 60 năm kinh nghiệm trong lĩnh vực dinh dưỡng và chăm sóc thú cưng.  Công thức sản phẩm là tâm huyết nghiên cứu của các chuyên gia dinh dưỡng vật nuôi hàng đầu tại Pháp với', 4, NULL),
(29, 'Akita Vàng C12015', 'https://azpet.b-cdn.net/wp-content/uploads/2021/06/C12015-1.jpg', 21900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(30, 'Corgi Trắng Vàng Đực C13195', 'https://azpet.b-cdn.net/wp-content/uploads/2022/09/C2783-C13195-1.jpg', 13900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(31, 'Corgi Trắng Vàng Cái C13171', 'https://azpet.b-cdn.net/wp-content/uploads/2022/09/C2710-C13171-1.jpg', 13900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(34, 'Anh Lông Dài Bicolor Đực M12487', 'https://azpet.b-cdn.net/wp-content/uploads/2022/07/M771-M12487-1.jpg', 7500000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 2, NULL),
(35, 'Anh Lông Dài Lilac Đực M12481', 'https://azpet.b-cdn.net/wp-content/uploads/2022/07/M770-M12481-1.jpg', 6750000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 2, NULL),
(36, 'Anh Lông Dài Gold Đực M12448', 'https://azpet.b-cdn.net/wp-content/uploads/2022/05/M726-M12448-1.jpg', 14310000, 'Trả góp LS 0% trong 12 tháng \r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc \r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà', 2, NULL),
(37, 'Anh Lông Dài Xanh Xám Cái M12394', 'https://azpet.b-cdn.net/wp-content/uploads/2022/03/M650-M12394-1.jpg', 3900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 2, NULL),
(38, 'Munchkin Bicolor Cái M12529', 'https://azpet.b-cdn.net/wp-content/uploads/2022/09/M829-M12529-5.jpg', 14900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 2, NULL),
(39, 'Munchkin Bicolor Cái M12502', 'https://azpet.b-cdn.net/wp-content/uploads/2022/08/M794-M12502-1.jpg', 14900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 2, NULL),
(40, 'Munchkin Bicolor Cái M12456', 'https://azpet.b-cdn.net/wp-content/uploads/2022/06/M737-M12456-1.jpg', 14900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 2, NULL),
(41, 'Munchkin Bicolor Lilac Đực M12435', 'https://azpet.b-cdn.net/wp-content/uploads/2022/05/m12435-1.jpg', 22900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 2, NULL),
(42, 'American Shorthair Black Tabby Cái M12061', 'https://azpet.b-cdn.net/wp-content/uploads/2021/06/M12061-1.jpg', 7500000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 2, 1),
(43, 'Chuồng xanh M12086', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhMTEhIVFhUXGhcVGBcXFxgcGxgYGxgaIRweFxgfHikjHB4mHBoXIjIjKCssLzAvGCE0OTQtOCsuLywBCgoKDg0OHBAQHDgmISYvMjAuLCwzNjAuLC4uMzgsLi4uLjMsMDAuLi4uLi4uLi4uLi4uLi4uLC4uMC4uLi4uLv/AABEIAMIBBAMBIgACEQEDEQH/', 499000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)Bảo hành lên tới 365 ngày.Bảo hiểm sức khỏe lên tới 1,000,000đMiễn phí vận chuyển toàn quốc (Chi tiết)Giảm 500,000đ khi mua bé thứ 2.Giảm trọn đời 5% khi mua phụ kiện.Giảm trọn đời 20% Spa cắt tỉa – Áp dụ', 3, NULL),
(44, 'American Shorthair Black Tabby Đực M12059', 'https://azpet.b-cdn.net/wp-content/uploads/2021/06/M12059-1.jpg', 35600000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 2, 1),
(45, 'Husky Đen Trắng Cái C13157', 'https://azpet.b-cdn.net/wp-content/uploads/2022/08/C2655-C13157-1.jpg', 5900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 1, NULL),
(46, 'Husky Đen Trắng Cái C13156', 'https://azpet.b-cdn.net/wp-content/uploads/2022/08/C2654-C13156-1.jpg', 5900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 1, NULL),
(47, 'Husky Đen Trắng Cái C13155', 'https://azpet.b-cdn.net/wp-content/uploads/2022/08/C2653-C13155-1.jpg', 5900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 1, NULL),
(48, 'Husky Đen Trắng Đực C13154', 'https://azpet.b-cdn.net/wp-content/uploads/2022/08/C2651-C13154-1.jpg', 5900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 1, NULL),
(49, 'Husky Đen Trắng Đực C13153', 'https://azpet.b-cdn.net/wp-content/uploads/2022/08/C2650-C13153-1.jpg', 11900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(50, 'Husky Đen Trắng Đực C12986', 'https://azpet.b-cdn.net/wp-content/uploads/2022/06/C2356-C12986-4.jpg', 11900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(51, 'Husky Đen Trắng Đực C12956', 'https://azpet.b-cdn.net/wp-content/uploads/2022/06/C2286-C12956-1.jpg', 5900000, 'Bảo hành sức khỏe 30 ngày.\r\nGiảm 10% khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụng với KH khu vực Hà Nội.', 1, NULL),
(52, 'Husky Đen Trắng Đực C12955', 'https://azpet.b-cdn.net/wp-content/uploads/2022/06/C2285-C12955-1.jpg', 11900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(53, 'Bully Vàng Cái C12321', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/Bully-Vang-C12321-1.jpg', 14900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(54, 'Bully Vàng Đực C12320', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/Bully-Vang-C12320-1.jpg', 14900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(55, 'Bully Blue Cái C12319', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/Bully-Blue-C12319-1.jpg', 17900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(56, 'Bully Bò Sữa Đực C12318', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/Bully-Bo-Sua-C12318-1.jpg', 14900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(57, 'Bully Bò Sữa Cái C12317', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/Bully-Bo-Sua-C12317-1.jpg', 14900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(58, 'Đàn Bully C12028', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/American-Bully-C12028-1.jpg', 13900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(59, 'Đàn Bully C12027', 'https://azpet.b-cdn.net/wp-content/uploads/2021/07/American-Bully-C12027-1.jpg', 14900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(60, 'Bully Blue C12026', 'https://azpet.b-cdn.net/wp-content/uploads/2021/06/C12026-1-1.jpg', 17900000, 'Trả góp LS 0% trong 12 tháng (Chi tiết)\r\nBảo hành lên tới 365 ngày.\r\nBảo hiểm sức khỏe lên tới 1,000,000đ\r\nMiễn phí vận chuyển toàn quốc (Chi tiết)\r\nGiảm 500,000đ khi mua bé thứ 2.\r\nGiảm trọn đời 5% khi mua phụ kiện.\r\nGiảm trọn đời 20% Spa cắt tỉa – Áp dụ', 1, NULL),
(63, 'https://azpet.com.vn/wp-content/uploads/2022/09/C2811-C13205-1.jpg', 'https://azpet.com.vn/wp-content/uploads/2022/09/C2811-C13205-1.jpg', 20000, 'chó rất đẹp', 2, NULL),
(70, '3 Gói Thức ăn hạt cho Mèo trưởng thành PRO-CAT ALDULT Gói 400g Xuất xứ Pro-Pet Việt Nam Dinh dưỡng hoàn chỉnh cho Mèo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYnILws2Xula0ACMj2MxXEw1S55CDZxn7ueg&usqp=CAU', 20000, 'Trả góp LS 0% trong 12 tháng (Chi tiết) Bảo hành lên tới 365 ngày. Bảo hiểm sức khỏe lên tới 1,000,000đ Miễn phí vận chuyển toàn quốc (Chi tiết) Giảm 500,000đ khi mua bé thứ 2. Giảm trọn đời 5% khi mua phụ kiện. Giảm trọn đời 20% Spa cắt tỉa – Áp dụng với', 4, NULL),
(71, 'THỨC ĂN CHO MÈO APro I.Q. Formula Dạng hạt Gói 500g Xuất xứ Thái Lan', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP2PIlmggsd8OTA17f5K8x2JwWtmEDSxQZQg&usqp=CAU', 85000, 'THÀNH PHẦN DINH DƯỠNG Chất đạm (Min) : 25.5%; Chất béo thô (Max): 14.0%; Chất xơ (Max) :5.0%; Độ ẩm (Max) :10.0%; ME (Min) : 3.500 Kcal/kg; Canxi (Max - Min) : 0.5% - 3.0%; Photpho (Max) : 0.5% - 2.0%; Methionine + Cystine (Min) : 0.5; Lysine (Min) : 0.8%', 4, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vn_pay`
--

CREATE TABLE `vn_pay` (
  `id_vnpay` int(11) NOT NULL,
  `code_cart` varchar(50) NOT NULL,
  `vnp_amount` varchar(100) NOT NULL,
  `vnp_bankcode` varchar(100) NOT NULL,
  `vnp_banktranno` varchar(100) NOT NULL,
  `vnp_cardtype` varchar(100) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(100) NOT NULL,
  `vnp_tmncode` varchar(100) NOT NULL,
  `vnp_transactionno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vn_pay`
--

INSERT INTO `vn_pay` (`id_vnpay`, `code_cart`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`) VALUES
(12, '7504', '8900000', 'NCB', 'VNP13904961', 'ATM', 'Thanh toán đơn hàng tại Website', '20221215111947', '13904961', '00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acount`
--
ALTER TABLE `acount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guest_id` (`guest_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prd` (`idcategory`);

--
-- Chỉ mục cho bảng `vn_pay`
--
ALTER TABLE `vn_pay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acount`
--
ALTER TABLE `acount`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `vn_pay`
--
ALTER TABLE `vn_pay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `invoice_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `prd` FOREIGN KEY (`idcategory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
