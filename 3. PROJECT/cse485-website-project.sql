-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2020 lúc 04:20 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cse485-website-project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoris`
--

CREATE TABLE `categoris` (
  `ID` int(11) NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categoris`
--

INSERT INTO `categoris` (`ID`, `CategoryName`, `Created`, `Updated`) VALUES
(1, 'Sự kiện khoa', '2020-10-19 12:01:34', '2020-11-01 14:48:44'),
(3, 'Học bổng', '2020-10-19 12:03:20', '2020-10-19 19:35:55'),
(6, 'Sinh viên', '2020-10-19 12:48:39', '2020-10-19 19:49:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoris_questions`
--

CREATE TABLE `categoris_questions` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categoris_questions`
--

INSERT INTO `categoris_questions` (`ID`, `CategoryName`, `Created`, `Updated`) VALUES
(1, 'Môn học', '2020-10-20 14:16:22', NULL),
(2, 'Học tập', '2020-10-20 14:16:30', NULL),
(3, 'Học bổng', '2020-10-20 14:16:39', NULL),
(4, 'Trao đổi kiến thức', '2020-10-20 14:18:50', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `Comment_ID` int(10) NOT NULL,
  `Content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Question_ID` int(10) NOT NULL,
  `UserName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`Comment_ID`, `Content`, `Question_ID`, `UserName`, `Created`) VALUES
(1, 'Theo mình là nên học C# nhé.', 1, 'Nguyễn Văn Mạnh', '2020-11-01 12:15:49'),
(2, 'Theo mình thì nên học Javascript haha', 1, 'Nguyễn Quốc Tỉnh', '2020-11-01 12:43:13'),
(3, 'java nhé', 1, '1851171704@e.tlu.edu.vn', '2020-11-01 14:46:27'),
(5, 'ASP.NET nhé ', 2, '1851171704@e.tlu.edu.vn', '2020-11-01 14:48:47'),
(8, 'Học code đi', 12, 'Nguyễn Văn Mạnh', '2020-11-01 15:12:52'),
(9, 'Sao không ai comment', 16, 'Error', '2020-11-01 15:18:52'),
(10, 'Sao không ai comment', 16, 'Error', '2020-11-01 15:18:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Views` int(11) NOT NULL DEFAULT 0,
  `Created` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated` datetime DEFAULT NULL,
  `Link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`ID`, `Title`, `Contents`, `CategoryID`, `Image`, `Status`, `Views`, `Created`, `Updated`, `Link`) VALUES
(3, 'Đây là bài viết đầu tiên', ' Chào mừng bạn đã đến với khoa công nghệ thông tin.  ', 1, '', 1, 0, '2020-10-18 18:01:41', '2020-11-01 15:16:30', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `ID` int(10) NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Views` int(11) NOT NULL DEFAULT 0,
  `CategoryID_question` int(10) NOT NULL,
  `UserName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `Created` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`ID`, `Title`, `Contents`, `Image`, `Views`, `CategoryID_question`, `UserName`, `Status`, `Created`, `Updated`) VALUES
(1, 'Nên học C# hay JAVA', 'Chào mọi người.\r\nMình là một sinh viên năm nhất của trường, mình đang tìm hiểu về .NET technology và thấy rất thích nhưng mình thấy job của JAVA nhiều hơn và lúc nào cũng là top ngôn ngữ lập trình vậy mọi người có thể tư vấn giúp mình hướng đi không ạ.', '', 155, 4, 'Error', 1, '2020-10-19 15:44:55', NULL),
(2, 'Nên học ASP.NET MVC hay PHP', 'Xin chào mọi người.\r\nMình là một sinh viên năm 2 muốn theo ngành web và mình đang phân vân giữa ASP.NET của .NET technology và PHP mình có tìm hiểu thì thấy job của PHP khá nhiều và có nhiều bài viết so sánh 2 nền tảng này mọi người ai đã từng lựa chọn có thể cho mình xin ý kiến được không ạ.\r\n', '', 36, 4, 'Error', 1, '2020-10-19 15:48:26', NULL),
(3, 'Làm sao để phát triển tư duy lập trình tốt', 'Xin chào mọi người.\r\nMình là một tân sinh viên khoa công nghệ thông tin và hiện tại mình đang học môn C++ thấy tư duy lập trình còn rất kém vậy làm sao để phát triển tư duy lập trình ạ', '', 9, 4, 'Error', 1, '2020-10-20 17:38:44', NULL),
(9, 'Cần tài liệu môn Công Nghệ Web', 'Cần tài liệu môn Công Nghệ Web', '', 13, 1, '1851171704@e.tlu.edu.vn', 1, '2020-10-30 15:10:23', NULL),
(12, 'Tiền nhiều để làm gì', 'Em muốn có nhiều tiền', '', 6, 4, 'Nguyễn Văn Mạnh', 1, '2020-10-31 19:46:19', NULL),
(14, 'Em xin hỏi về học bổng', 'các điều kiện để được học bổng ạ', '', 2, 3, '1851171704@e.tlu.edu.vn', 1, '2020-11-01 07:24:40', NULL),
(15, 'Em xin hỏi về lịch học ', 'Làm sao để xem lịch học của mình ạ', '', 0, 2, '1851171704@e.tlu.edu.vn', 1, '2020-11-01 07:25:57', NULL),
(16, 'Cách học tiếng anh hiệu quả', 'Em rất kém tiếng anh nên muốn hỏi phương pháp học tiếng anh ạ', '', 3, 4, 'Error', 1, '2020-11-01 15:18:32', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gmail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Verification_Code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `Created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated` datetime DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `Username`, `Gmail`, `Password`, `Verification_Code`, `Status`, `Role`, `Created_date`, `Updated`, `Image`) VALUES
(12, 'Admin', 'nguyenvanmanhh360@gmail.com', '$2y$10$w3X.4a8XHXU/z', 'e74f8a02817f55c8', 1, 'admin', '2020-10-06 14:20:39', '2020-10-25 21:23:45', ''),
(26, 'Nguyễn Văn Mạnh', '1851171704@tlu.edu.vn', '$2y$10$vgHYubCgpEvY4', '', 1, 'user', '2020-10-20 21:04:42', NULL, ''),
(29, 'Error', 'Error.NVM@gmail.com', '$2y$10$npoB4hGYQdOHx', '', 1, 'user', '2020-10-25 21:04:50', '2020-11-01 15:18:16', 'nguyen-van-manh.jpg'),
(30, '1851171704@e.tlu.edu.vn', '1851171704@tlu.edu.vn', '$2y$10$re88wQ1QYvCcW', '', 1, 'user', '2020-10-30 20:20:06', '2020-11-01 15:18:05', 'IMG_20190904_1.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categoris`
--
ALTER TABLE `categoris`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `categoris_questions`
--
ALTER TABLE `categoris_questions`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categoris`
--
ALTER TABLE `categoris`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `categoris_questions`
--
ALTER TABLE `categoris_questions`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
