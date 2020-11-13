-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 08:33 PM
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
(6, 'Sinh viên', '2020-10-19 12:48:39', '2020-10-19 19:49:16'),
(13, 'Nghiên cứu', '2020-11-02 22:09:11', '2020-11-14 01:44:35'),
(14, 'Đào tạo', '2020-11-12 16:51:54', NULL);

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
(4, 'Trao đổi kiến thức', '2020-10-20 14:18:50', NULL),
(5, 'Khác', '2020-11-02 08:38:33', NULL),
(7, 'Giải đáp', '2020-11-12 15:17:08', NULL);

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
(11, 'Bạn có thể liên hệ thầy Dũng qua email : dungkt@e.tlu.edu.vn', 9, 'Nguyễn Văn Mạnh', '2020-11-02 07:08:25'),
(13, 'C# thịnh hành ở Châu Âu, Java thịnh hành ở Châu Á', 1, '1851171704@e.tlu.edu.vn', '2020-11-02 07:37:25'),
(17, 'Hình như comment này bị lag', 1, 'Nguyễn Văn Mạnh', '2020-11-03 06:10:06'),
(21, 'C#', 1, '1851171704@e.tlu.edu.vn', '2020-11-12 12:05:27'),
(24, 'ok', 12, '1851171704@e.tlu.edu.vn', '2020-11-12 21:25:02'),
(27, 'Vẫn là C#', 1, '1851171704@e.tlu.edu.vn', '2020-11-12 21:27:40'),
(29, 'C# tiếp nè', 1, '1851171704@e.tlu.edu.vn', '2020-11-13 02:55:44'),
(31, 'Chăm chỉ', 3, '1851171704@e.tlu.edu.vn', '2020-11-13 18:47:54'),
(33, 'Cố gắng', 3, '1851171704@e.tlu.edu.vn', '2020-11-13 18:51:47'),
(35, 'Thực hành nhiều', 3, '1851171704@e.tlu.edu.vn', '2020-11-13 18:53:08');

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
(3, 'Đây là bài viết đầu tiên', 'đây là bài viết đầu tiên', 13, 'first-one.jpg', 1, 3, '2020-10-18 18:01:41', '2020-11-12 12:19:14', ''),
(10, 'Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28', 'Đoàn dự thi đến từ Trường Đại học Thủy lợi\r\n\r\nDanh sách sinh viên tham dự\r\n\r\nĐội ICPI\r\n\r\nTưởng Thị Hồng Nhung  58HT\r\nTừ Việt Thảo                    60HT\r\nLê Viết Quyết                   58TH2\r\nĐội Chuyên Tin học\r\n\r\nTưởng Thị Hồng Nhung  58HT\r\nTừ Việt Thảo                    60HT\r\nTrịnh Đình Hiếu               60PM2.\r\nĐội không chuyên\r\n\r\nTrần Quốc Toàn   61PM2\r\nTưởng Đăng Vương Quốc 61TH.NB\r\nNguyễn Văn Trí       61PM1\r\nVới những nỗ lực của cả thầy và trò đã đem về cho Nhà trường những kết quả đáng mừng. Cụ thể:\r\n\r\nKhối chuyên tin\r\n\r\n          1.  Từ Việt Thảo, lớp 60HT đạt giải Ba\r\n\r\n          2. Tưởng Thị Hồng Nhung, lớp 58HT đạt giải Khuyến khích\r\n\r\nKhối không chuyên\r\n\r\n          1. Trần Quốc Toản, lớp 61PM2 đạt giải Khuyến khích\r\n\r\n Đội tuyển ICPC lần đầu tham dự xếp vị trí 60/115 đội tuyển Quốc tế và các đội mạnh từ các trường ĐH lớn trong nước; xếp thứ 46 trong số các đội tuyển từ Việt Nam; xếp thứ 20 trong số các trường ĐH ở Việt Nam.\r\n\r\nChúc mừng thành công của thầy và trò khoa CNTT – Đại học Thủy Lợi.', 1, 'post4.jpg', 1, 4, '2020-11-02 22:03:26', '2020-11-03 05:05:21', ''),
(11, 'HỌC BỔNG TÀI NĂNG SAMSUNG - STP 2020', 'Bước 1: Nộp hồ sơ online từ ngày 10/02 ~ 12/04/2020 tại www.samsungcareers.com.vn => Tuyển dụng sinh viên mới tốt nghiệp = > Học bổng Tài năng Samsung STP 2020 (Đây là cách ứng tuyển duy nhất)\r\n\r\n(*) Ôn luyện với mentor:                             từ lúc nộp hồ sơ ~ trước khi thi\r\n\r\n(*) Đào tạo trước thi tuyển:                        11/04 & 18/04/2020\r\n\r\nBước 2: Thi lập trình cơ bản      :               25/04/2020\r\n\r\nBước 3: Phỏng vấn                       :               06/05/2020\r\n\r\nBước 4: Lễ trao học bổng           :                    06/2020\r\n\r\n(*) Về bài thi lập trình\r\n\r\nNội dung thi                                    :               Thuật toán và kỹ năng lập trình cơ bản\r\nPhương pháp thi                            :               Lập trình trên máy tính, chấm thi tự động\r\nNgôn ngữ bài thi                            :               Tiếng Việt\r\nNgôn ngữ lập trình                        :               C/C++/Java (chọn 1 trong 3 ngôn ngữ)\r\nCông cụ (IDE)                                :               Microsoft Visual Studio (C/C++) / Eclipse (Java)\r\nLiên hệ\r\n* Ms Đinh Thị Diệu Thảo - Phòng Nhân sự\r\nTrung tâm Nghiên cứu và Phát triển ĐTDĐ Samsung Việt Nam (SVMC)\r\n\r\nTầng 15, tòa nhà PVI, số 1 Phạm Văn Bạch, Yên Hòa, Cầu Giấy, Hà Nội\r\n\r\nEmail: thao.dtd@samsung.com\r\n\r\nĐiện thoại: +84 888 990 085\r\n\r\n* Chương trình và hướng dẫn chi tiết xem tại fanpage: SamsungVietnam RnD (https://www.facebook.com/samsungvietnamrnd/)\r\nLưu ý\r\nSinh viên không đạt học bổng STP 2020 vẫn có cơ hội tham dự các chương trình tuyển dụng khác.\r\nChi tiết thông báo', 3, 'post3.jpg', 1, 29, '2020-11-02 22:06:22', '2020-11-03 05:07:17', 'http://cse.tlu.edu.vn/Portals/0/2_%20Thong%20tin%20Hc%20bng%20STP.pdf'),
(13, 'HỌC BỔNG TÀI NĂNG SAMSUNG - STP 2021', 'Đây là học bổng', 3, 'post2.jpg', 1, 9, '2020-11-10 21:39:49', NULL, 'http://cse.tlu.edu.vn/Portals/0/2_%20Thong%20tin%20Hc%20bng%20STP.pdf'),
(20, 'Thông báo Về việc điều chỉnh kế hoạch chi tiết Lễ tốt nghiệp Đại học chính quy học kỳ 1 năm học 2019 - 2020', '1. Lễ tốt nghiệp và trao bằng tốt nghiệp\r\n\r\na/ Đối với sinh viên thuộc các Khoa Công nghệ thông tin, Cơ khí, Điện – Điện tử, Hóa – Môi trường, Kinh tế quản lý\r\n\r\n- Thời gian & địa điểm: từ 8h30 đến 11h00 thứ Ba (02/06/2020) tại Hội trường T45\r\n\r\n- Thành phần: Toàn thể sinh viên đại học hệ chính quy thuộc các khoa nêu trên đủ điều kiện tốt nghiệp đợt học kỳ 1 (2019 – 2020).\r\n\r\nb/ Đối với sinh viên thuộc các Khoa Công trình, Kỹ thuật tài nguyên nước.\r\n\r\n- Thời gian & địa điểm: 14h30 đến 17h00 thứ Ba (02/06/2020) tại Hội trường T45.\r\n\r\n- Thành phần: Toàn thể sinh viên đại học, cao đẳng, liên thông hệ chính quy thuộc các khoa nêu trên đủ điều kiện tốt nghiệp đợt học kỳ 1 (2019 – 2020).\r\n\r\nc/ Đối với sinh viên thuộc Chương trình tiên tiến\r\n\r\n- Thời gian & địa điểm: từ 8h30 đến 11h00 thứ Tư (03/06/2020) tại Hội trường T45.\r\n\r\n- Thành phần: Toàn thể sinh viên thuộc Chương trình tiên tiến (từ K57 trở về trước) đủ điều kiện tốt nghiệp đợt học kỳ 1 (2019 - 2020).\r\n\r\n2.Trả hồ sơ sinh viên tốt nghiệp\r\n\r\n- Địa điểm: Hội trường T35. Thời gian trả hồ sơ, theo lịch dưới đây:', 1, 'post1.jpg', 1, 13, '2020-11-12 16:31:08', NULL, ''),
(21, 'Chuẩn đầu ra - Ngành Hệ thống thông tin', 'Yêu cầu về kiến thức\r\n1.    Kiến thức cơ sở: trang bị cho sinh viên những kiến thức về Toán chuyên ngành công nghệ thông tin, cơ sở của nhóm ngành công nghệ thông tin: cơ sở dữ liệu, hệ quản trị cơ sở dữ liệu, toán rời rạc, cấu trúc dữ liệu và giải thuật, mạng máy tính;\r\n2.    Có kiến thức về lập trình, nắm vững ít nhất các công cụ lập trình (C++, C#, Lập trình Web, Java, Lập trình di động,…). Hiểu khai thác được Hệ quản trị CSDL; Làm chủ được hệ điều hành Windows, Linux,… Hiểu và thực hiện được đầy đủ quy trình xây dựng và sản xuất phần mềm.\r\n3.    Có khả năng xây dựng xây dựng một hệ thống phần mềm, quản lý các hệ thống thông tin phục vụ cho: kinh tế xã hội, y tế, tài chính, nông nghiệp, công nghiệp, giao thông, an ninh quốc phòng,…\r\n4.    Có kiến thức trong việc xây dựng, quản lý một hệ thống thông tin hiện đại. Ứng dụng trí tuệ nhân tạo trong việc xây dựng và quản lý các hệ thống thông minh như các hệ thống hỗ trợ ra quyết định, hệ thống dự báo, hệ thống nhận dạng, phân tích và xử lý dữ liệu lớn,….\r\n5.    Tiếng Anh: đạt trình độ A2 khung chuẩn Châu Âu hoặc tương đương.\r\n6.    Trang bị cho sinh viên các kiến thức giáo dục đại cương về nguyên lý cơ bản của chủ nghĩa Mác – Lênin, Đảng cộng sản Việt Nam, Tư tưởng Hồ Chí Minh,  pháp luận của Nhà nước Việt Nam.\r\nYêu cầu về kỹ năng\r\n7.    Kỹ năng lập trình: Nắm vững một số công nghệ, công cụ lập trình, làm chủ được các Hệ quản trị CSDL.\r\n8.    Kỹ năng về việc xây dựng và phân tích một hệ thống phần mềm. Thực hành, thực tập thực tế tại các doanh nghiệp trong quá trình làm các Project thực tế. Có kỹ năng ứng dụng và phát triển các mô hình, thuật toán trong việc xây dựng các hệ thống thông tin.\r\n9.    Kỹ năng Quản lý: Trang bị những kiến thức cơ bản về quản lý dự án, điều hành công việc hiệu quả.\r\n10.    Kỹ năng Phân tích và xử lý thông tin: Có kỹ năng tổng hợp phân tích và xử lý thông tin trong các lĩnh vực cuộc sống. Đặc biệt là khả năng xử lý và phân tích dữ liệu lớn.\r\n11.    Tăng cường kỹ năng mềm như kỹ năng thuyết trình, đàm phán, làm việc nhóm, kiểm soát thời gian, xây dựng kế hoạch và tổ chức công việc.\r\n12.    Biết đọc và khai thác các tài liệu bằng tiếng Anh; có khả năng giao tiếp, làm việc bằng tiếng anh trong các tổ chức, công ty trong và ngoài nước.\r\nYêu cầu về thái độ\r\n13.    Có ý thức trách nhiệm công dân; có thái độ và đạo đức nghề nghiệp đúng đắn; có ý thức kỷ luật và tác phong công nghiệp; khả năng làm việc theo nhóm;\r\n14.    Có phương pháp làm việc khoa học, biết phân tích và giải quyết các vấn đề nảy sinh trong thực tiễn, đúc kết kinh nghiệm để hình thành kỹ năng tư duy sáng tạo tiến tới có sáng kiến đột phá;\r\n15.    Có tinh thần ham học hỏi và lòng can đảm, cũng như chấp nhận những thử thách về sự cạnh tranh trên thị trường với lòng kiên trì để đạt được thành công;\r\n16.    Trung thành với cấp dưới cũng như với cấp trên, có được sự tôn trọng của các thành viên trong nhóm về năng lực cá nhân, lòng bao dung, và khả năng giám sát để tiến tới trở thành người lãnh đạo tốt.\r\n \r\nQuan hệ giữa mô-đun kiến thức/kỹ năng và chuẩn đầu ra ngành hệ thống thông tin xem tại đây:', 14, 'post5.jpg', 1, 7, '2020-11-12 16:53:05', NULL, '');

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
(1, 'Nên học C# hay JAVA', 'Chào mọi người.\r\nMình là một sinh viên năm nhất của trường, mình đang tìm hiểu về .NET technology và thấy rất thích nhưng mình thấy job của JAVA nhiều hơn và lúc nào cũng là top ngôn ngữ lập trình vậy mọi người có thể tư vấn giúp mình hướng đi không ạ.', 'csharp-and-java.jpg', 208, 4, 'Error', 1, '2020-10-19 15:44:55', NULL),
(2, 'Nên học ASP.NET MVC hay PHP', 'Xin chào mọi người.\r\nMình là một sinh viên năm 2 muốn theo ngành web và mình đang phân vân giữa ASP.NET của .NET technology và PHP mình có tìm hiểu thì thấy job của PHP khá nhiều và có nhiều bài viết so sánh 2 nền tảng này mọi người ai đã từng lựa chọn có thể cho mình xin ý kiến được không ạ.\r\n', '', 47, 4, 'Error', 1, '2020-10-19 15:48:26', NULL),
(3, 'Làm sao để phát triển tư duy lập trình tốt', 'Xin chào mọi người.\r\nMình là một tân sinh viên khoa công nghệ thông tin và hiện tại mình đang học môn C++ thấy tư duy lập trình còn rất kém vậy làm sao để phát triển tư duy lập trình ạ', '', 20, 4, 'Error', 1, '2020-10-20 17:38:44', NULL),
(9, 'Cần tài liệu môn Công Nghệ Web', 'Cần tài liệu môn Công Nghệ Web', '', 17, 1, '1851171704@e.tlu.edu.vn', 1, '2020-10-30 15:10:23', NULL),
(12, 'Tiền nhiều để làm gì', 'Em muốn có nhiều tiền', '', 28, 4, 'Nguyễn Văn Mạnh', 1, '2020-10-31 19:46:19', NULL),
(14, 'Em xin hỏi về học bổng', 'các điều kiện để được học bổng ạ', '', 4, 3, '1851171704@e.tlu.edu.vn', 1, '2020-11-01 07:24:40', NULL),
(16, 'Cách học tiếng anh hiệu quả', 'Em rất kém tiếng anh nên muốn hỏi phương pháp học tiếng anh ạ', '', 6, 4, 'Error', 1, '2020-11-01 15:18:32', NULL),
(17, 'Hỏi về khu kí túc xá', 'Em năm nay năm nhất muốn tham khảo một số thông tin kí túc xá trường mình ạ', '', 8, 5, 'Nguyễn Quốc Tỉnh', 1, '2020-11-02 08:42:11', NULL);

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
(12, 'Admin', 'nguyenvanmanhh360@gmail.com', '$2y$10$w3X.4a8XHXU/z', 'e74f8a02817f55c8', 1, 'admin', '2020-10-06 14:20:39', '2020-10-25 21:23:45', 'nvm.error.jpg'),
(26, 'Nguyễn Văn Mạnh', '1851171704@tlu.edu.vn', '$2y$10$m/ESvTZfomCjj', '', 1, 'admin', '2020-10-20 21:04:42', '2020-11-14 02:28:32', 'nguyen-van-manh.jpg'),
(29, 'Error', 'Error.NVM@gmail.com', '$2y$10$npoB4hGYQdOHx', '', 1, 'user', '2020-10-25 21:04:50', '2020-11-01 15:18:16', 'user.jpg'),
(30, '1851171704@e.tlu.edu.vn', '1851171704@tlu.edu.vn', '$2y$10$re88wQ1QYvCcW', '', 1, 'user', '2020-10-30 20:20:06', '2020-11-01 15:18:05', 'user.jpg'),
(42, 'Nguyễn Quốc Tỉnh', 'nguyenquoctinh0310@gmail.com', '$2y$10$c/wnwcHjIU46r', '', 1, 'admin', '2020-11-02 15:17:43', NULL, 'tinh.lol.jpg'),
(59, 'admin2', 'Error@gmail.com', '$2y$10$pLY6agahKqtuU', '', 0, 'user', '2020-11-13 05:51:02', '2020-11-14 00:33:57', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `categoris_questions`
--
ALTER TABLE `categoris_questions`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
