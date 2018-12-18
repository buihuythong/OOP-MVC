-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2018 lúc 09:14 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `manage_student`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_student_class`
--

CREATE TABLE `manage_student_class` (
  `id` int(11) NOT NULL,
  `class` varchar(1) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_student_score`
--

CREATE TABLE `manage_student_score` (
  `id` int(11) NOT NULL,
  `score1` int(2) NOT NULL,
  `score2` int(2) NOT NULL,
  `score3` int(2) NOT NULL,
  `class_id` int(11) NOT NULL,
  `students_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manage_student_score`
--

INSERT INTO `manage_student_score` (`id`, `score1`, `score2`, `score3`, `class_id`, `students_id`) VALUES
(1, 9, 7, 6, 1, 1041360006),
(2, 6, 7, 3, 2, 1041360007),
(3, 6, 7, 4, 3, 1141120043),
(4, 6, 9, 0, 2, 456123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_student_students`
--

CREATE TABLE `manage_student_students` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prioritize` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manage_student_students`
--

INSERT INTO `manage_student_students` (`id`, `fullname`, `address`, `prioritize`) VALUES
(1041360006, 'Bùi Huy Thống', 'Bắc Từ Liêm - Hà Nội - Việt Nam', 1),
(1041360007, 'Bùi Huy C', 'Bắc Từ Liêm - Hà Nội - Việt Nam', 1),
(1141120043, 'Trần Văn Thiệu', 'Hà Nội - Việt Nam', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `manage_student_class`
--
ALTER TABLE `manage_student_class`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `manage_student_score`
--
ALTER TABLE `manage_student_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `manage_student_class`
--
ALTER TABLE `manage_student_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `manage_student_score`
--
ALTER TABLE `manage_student_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
