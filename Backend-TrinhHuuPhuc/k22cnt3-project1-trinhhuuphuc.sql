-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 11:08 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k22cnt3-project1-trinhhuuphuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_thp`
--

CREATE TABLE `user_thp` (
  `USER_ID_THP` char(11) NOT NULL,
  `USER_NAME_THP` varchar(100) NOT NULL,
  `PASSWORD_THP` varchar(200) NOT NULL,
  `EMAIL_THP` varchar(200) NOT NULL,
  `FULL_NAME_THP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_thp`
--

INSERT INTO `user_thp` (`USER_ID_THP`, `USER_NAME_THP`, `PASSWORD_THP`, `EMAIL_THP`, `FULL_NAME_THP`) VALUES
('2210900054', 'Phúc', '123456789', 'toiduaroima@gmail.com', 'Trịnh Hữu Phúc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user_thp`
--
ALTER TABLE `user_thp`
  ADD PRIMARY KEY (`USER_ID_THP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
