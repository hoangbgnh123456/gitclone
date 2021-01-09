-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2020 lúc 08:26 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `music`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `authorID` int(255) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `songID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`authorID`, `authorName`, `songID`) VALUES
(1, 'K/DA', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `genreID` int(255) NOT NULL,
  `genreName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderID` int(255) NOT NULL,
  `orderName` varchar(255) NOT NULL,
  `songName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `ds_sanpham` varchar(255) DEFAULT NULL,
  `add_product` varchar(255) DEFAULT NULL,
  `edit_product` varchar(255) DEFAULT NULL,
  `delete_product` varchar(255) DEFAULT NULL,
  `search_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `songID` int(255) NOT NULL,
  `songName` varchar(255) NOT NULL,
  `songPrice` varchar(255) NOT NULL,
  `songDescription` varchar(255) NOT NULL,
  `songImage` varchar(255) NOT NULL,
  `songFile` varchar(255) NOT NULL,
  `genreID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`songID`, `songName`, `songPrice`, `songDescription`, `songImage`, `songFile`, `genreID`) VALUES
(0, 'Pop/star', '10$', 'K/DA', '1541268104862_640.jpg', 'KDA - POPSTARS (ft. Madison Beer, (G)I-DLE, Jaira Burns).mp3', 1),
(1, 'Legend never die', '11$', '', '1509587114293_500.jpg', 'Legends Never Die (ft. Against The Current).mp3', 1),
(2, 'Awaken', '12$', 'Valerie Broussard', 'artworks-000476343180-a8uhcr-t500x500.jpg', 'Awaken (ft. Valerie Broussard).mp3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `File` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `File`) VALUES
(1, 'Nen va hoa - Rhymastic', '11.jpg', 100.00, 'nen va hoa.mp3'),
(2, 'Sorry, i like you - burbank', '16.jpg', 299.00, 'sorry i like u.mp3'),
(3, 'Nhung ngay - Dick x Tuyet', '14.jpg', 125.00, 'nhung ngay.mp3'),
(4, 'khoi thuoc', '17.jpg', 5.00, 'khoi thuoc.mp3'),
(5, 'Vi sao toi la gay', '18.jpg', 10.00, 'vi sao toi la gay.mp3'),
(6, 'Eo le cuoc tinh', '19.jpg', 10.00, 'eo le cuoc tinh.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `orderID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD KEY `songID` (`songID`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `songName` (`songName`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`),
  ADD UNIQUE KEY `songName` (`songName`),
  ADD KEY `genreID` (`genreID`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `orderID` (`orderID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Các ràng buộc cho bảng `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_ibfk_1` FOREIGN KEY (`genreID`) REFERENCES `song` (`genreID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`songName`) REFERENCES `song` (`songName`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
