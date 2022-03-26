-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id_book` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `name_book` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  `des` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id_book`, `id_subject`, `name_book`, `price`, `images`, `des`) VALUES
(2, 2, 'Hướng dẫn tự học Photoshop CS(Photoshop 6.0)', 50000, 'TH005.jpg', '<p>Adobe Photoshop l&agrave; một trong những phần mềm chuy&ecirc;n nghiệp xử l&yacute; ảnh mạnh mẽ v&agrave; được xem l&agrave; tiện &iacute;ch nhất hiện nay. Đối với c&aacute;c nhiếp ảnh gia, Photoshop c&oacute; thể được xem như một nh&agrave; ph&eacute;p thuật tạo ra hiệu ứng đặc biệt cho c&aacute;c bức ảnh. Bạn đọc c&oacute; thể ho&agrave;n to&agrave;n tự t&igrave;m hiểu phần mềm n&agrave;y với tuyển tập những cuốn s&aacute;ch dạy Photoshop hay nhất hiện nay được liệt k&ecirc; trong b&agrave;i viết n&agrave;y.</p>\r\n'),
(3, 2, 'Thủ Thuật Lập Trình Visual Basic 6', 65000, 'TH008.jpg', '<p>Phần&nbsp;<strong>Visual</strong>&nbsp;(c&oacute; nghĩa l&agrave;&nbsp;<em>h&igrave;nh ảnh trực quan</em>) đề cập đến phương ph&aacute;p được sử dụng để tạo&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Giao_di%E1%BB%87n_%C4%91%E1%BB%93_h%E1%BB%8Da_ng%C6%B0%E1%BB%9Di_d%C3%B9ng\">giao diện đồ họa người d&ugrave;ng</a>&nbsp;(Graphical User Interface hay viết tắt l&agrave; GUI). Với những bộ phận h&igrave;nh ảnh (gọi l&agrave; controls), bạn c&oacute; thể sắp đặt vị tr&iacute; v&agrave; quyết định c&aacute;c đặc t&iacute;nh của ch&uacute;ng tr&ecirc;n một khung m&agrave;n h&igrave;nh, gọi l&agrave; form (giống form trong&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Microsoft_Access\">Access</a>). Nếu bạn đă từng sử dụng chương tr&igrave;nh vẽ chẳng hạn như Paint, bạn đă c&oacute; sẵn c&aacute;c kỹ năng cần thiết để tạo một GUI cho VB6.</p>\r\n'),
(4, 8, 'Quản Lý Chiến Lược', 100000, 'KT0003.jpg', '<p>Nh&agrave;&nbsp;<strong>quản l&yacute; chiến lược</strong>&nbsp;sẽ kiểm tra, theo d&otilde;i qu&aacute; tr&igrave;nh hoạt động của c&ocirc;ng ty th&ocirc;ng qua việc thiết lập hệ thống th&ocirc;ng tin&nbsp;<strong>quản</strong>&nbsp;trị, c&aacute;c ti&ecirc;u chuẩn đo lường, đ&aacute;nh gi&aacute; v&agrave; thu thập c&aacute;c th&ocirc;ng tin nhằm xử&nbsp;<strong>l&yacute;</strong>&nbsp;điều chỉnh c&aacute;c hoạt động của c&ocirc;ng ty sao cho qu&aacute; tr&igrave;nh thực hiện ph&ugrave; hợp với mục ti&ecirc;u chung đ&atilde; đặt ra.</p>\r\n'),
(5, 2, 'Căn Bản Về Photoshop CS Tinh Chỉnh Và Xử Lý Màu', 85000, 'TH002.jpg', '<p><strong>Photoshop</strong>&nbsp;l&agrave; phần mềm chỉnh sửa ảnh tốt nhất m&agrave; bạn c&oacute; d&ugrave;ng để xử l&yacute; c&aacute;c bức ảnh của m&igrave;nh. Bạn đ&atilde; biết&nbsp;<strong>c&aacute;ch Photoshop ảnh</strong>&nbsp;chưa? Hầu hết ở lần đầu ti&ecirc;n sử dụng đầu ti&ecirc;n, mọi người đều l&uacute;ng t&uacute;ng với v&ocirc; v&agrave;n c&aacute;c c&ocirc;ng cụ v&agrave; t&iacute;nh năng m&agrave; n&oacute; mang lại bởi phần mềm n&agrave;y thiết kế để d&agrave;nh cho c&aacute;c chuy&ecirc;n gia m&agrave;.</p>\r\n'),
(6, 2, 'Visual Bacsic 2005 Tập 3, Quyển 2: Lập Trình Web', 50000, 'LTWeb2005.jpg', '<p><strong>&quot;Visual Basic 2005 Tập 3, Quyển 2: Lập Tr&igrave;nh Web Với Cơ Sở Dữ Liệu&quot;</strong>&nbsp;sẽ cung cấp kỹ thuật v&agrave; hướng dẫn bạn:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tự học x&acirc;y dựng ứng dụng Web quản l&yacute; CSDL to&agrave;n diện với ADO.NET 2.0 v&agrave; ASP.NET. Khai th&aacute;c c&aacute;c đối tượng v&agrave; nguồn dữ liệu d&agrave;nh cho WebForm. Sử dụng c&aacute;c điều khiển dữ liệu đặc th&ugrave; d&agrave;nh ri&ecirc;ng cho ASP.NET v&agrave; Web. L&agrave;m quen với những kh&aacute;i niệm xử l&yacute; dữ liệu ho&agrave;n to&agrave;n mới. R&agrave;ng buộc dữ liệu với c&aacute;c th&agrave;nh phần giao diện Web Forms. Thiết kế ứng dụng Web &quot;Quản l&yacute; CD Shop&quot; trực quan v&agrave; thực tế. Cung cấp một kiến thức ho&agrave;n chỉnh về Web cho c&aacute;c bạn y&ecirc;u th&iacute;ch ng&ocirc;n ngữ Visual Basic v&agrave; .NET Framework.</p>\r\n'),
(7, 1, 'Giáo trình Tin học cơ bản', 120000, 'THCB.jpg', '<ul>\r\n	<li>Hướng dẫn c&aacute;ch sử dụng m&aacute;y t&iacute;nh cơ bản, c&aacute;ch lưu trữ dữ liệu gọn g&agrave;ng,..</li>\r\n	<li>Sử dụng c&aacute;c ph&iacute;m tắt thao t&aacute;c nhanh trong windows, c&agrave;i đặt một số chương tr&igrave;nh thường sử dụng, c&aacute;ch gỡ bỏ chương tr&igrave;nh, quản l&yacute; chương tr&igrave;nh đ&atilde; c&agrave;i đặt trong m&aacute;y t&iacute;nh</li>\r\n	<li>Hướng dẫn tự bảo vệ m&aacute;y t&iacute;nh khỏi c&aacute;c nguồn nguy hại từ virut</li>\r\n	<li>Hướng dẫn c&aacute;ch sử dụng Email, gửi mail đ&uacute;ng chuẩn v&agrave; lịch sự, tạo chữ k&yacute; Gmail, quản l&yacute; hộp thư, c&aacute;c chức năng trong gửi mail: đ&iacute;nh k&egrave;m tập tin, gửi CC, BCC</li>\r\n	<li>Hướng dẫn sử dụng c&aacute;c c&ocirc;ng cụ đ&aacute;m m&acirc;y như: Google Drive, Google Docs, Google Sheets, Google Form, tạo bảng khảo s&aacute;t, quản l&yacute; th&ocirc;ng tin đăng k&yacute; khảo s&aacute;t, tạo đường dẫn li&ecirc;n kết webste th&acirc;n thiện, ngắn Bit.ly</li>\r\n</ul>\r\n'),
(8, 1, 'Oracle', 45000, 'Oracle.jpg', '<p><a href=\"https://bizflycloud.vn/tin-tuc/oracle-la-gi-20181115154434768.htm\"><strong>Oracle</strong></a>&nbsp;l&agrave; một trong những nh&agrave; cung cấp lớn nhất tr&ecirc;n thị trường c&ocirc;ng nghệ hiện nay. C&aacute;i t&ecirc;n Oracle ch&iacute;nh l&agrave; t&ecirc;n viết tắt từ sản phẩm chủ lực của h&atilde;ng, hệ thống quản l&yacute; cơ sở dữ liệu quan hệ (RDBMS) c&oacute; t&ecirc;n ch&iacute;nh thức l&agrave;&nbsp;<strong>Oracle Database</strong>. Phần mềm cơ sở dữ liệu thường giữ vị tr&iacute; trung t&acirc;m trong mảng IT của c&ocirc;ng ty, hỗ trợ nhiều nhiệm vụ kh&aacute;c nhau gồm xử l&yacute; giao dịch, business intelligence (BI), v&agrave; c&aacute;c ứng dụng ph&acirc;n t&iacute;ch.</p>\r\n'),
(9, 1, 'Mạng máy tính và hệ thống bảo mật', 77000, 'KT0007.jpg', '<p>Những kiến thức bảo mật, vấn đề bảo mật nổi cộm sẽ được cập nhật tại đ&acirc;y. Bạn kh&ocirc;ng chỉ biết th&ecirc;m về những vấn đề bảo mật đang nổi l&ecirc;n hiện nay m&agrave; c&ograve;n được trang bị những hướng dẫn để tự bảo vệ m&igrave;nh trước c&aacute;c vấn đề đ&oacute;.</p>\r\n'),
(10, 6, 'Cán bộ quản lý trong sản xuất công nghiệp', 110000, 'KT0001.jpg', '<p>Mặc d&ugrave; bạn đ&atilde; nghe nhắc đến nh&acirc;n vi&ecirc;n quản l&yacute; sản xuất nhiều nhưng kh&ocirc;ng biết c&ocirc;ng việc n&agrave;y cụ thể l&agrave; l&agrave;m g&igrave;? Thu nhập nh&acirc;n vi&ecirc;n quản l&yacute; sản xuất cao hay thấp cũng l&agrave; vấn đề nhiều người quan t&acirc;m trước khi c&acirc;n nhắc lựa chọn ứng tuyển. Để gi&uacute;p bạn đọc c&oacute; thể dễ d&agrave;ng trong qu&aacute; tr&igrave;nh ứng tuyển nh&acirc;n vi&ecirc;n quản l&yacute; sản xuất, JOBOKO chia sẻ những th&ocirc;ng tin hữu &iacute;ch về vị tr&iacute; n&agrave;y trong b&agrave;i viết sau.</p>\r\n'),
(11, 2, 'Quản lý LANs WANs', 100000, '130499.jpg', '<p>Mạng m&aacute;y t&iacute;nh kh&ocirc;ng chỉ c&oacute; một m&agrave; bao gồm nhiều m&ocirc; h&igrave;nh mạng kh&aacute;c nhau. Tuy nhi&ecirc;n loại mạng được ứng dụng nhiều v&agrave; phổ biến nhất tr&ecirc;n thế giới hiện nay phải kể đến mạng LAN, MAN, WAN. Vậy mạng<strong>&nbsp;LAN l&agrave; g&igrave;</strong>? mạng<strong>&nbsp;MAN l&agrave; g&igrave;</strong>? mạng<strong>&nbsp;WAN l&agrave; g&igrave;</strong>? Những loại mạng n&agrave;y kh&aacute;c nhau như thế n&agrave;o?</p>\r\n'),
(12, 2, 'Lập trình web và cơ sở dữ liệu', 78000, 'LTWeb2005.jpg', '<ul>\r\n	<li>Khi x&acirc;y dựng giao diện c&aacute;c trang web cho một website, ch&uacute;ng ta n&ecirc;n x&acirc;y dựng một giao diện đồng nhất cho tất cả c&aacute;c trang, v&iacute; dụ như c&aacute;c trang sẽ c&oacute; chuẩn m&agrave;u sắc giống nhau, c&oacute; c&ugrave;ng menu, footer&hellip; Để giải quyết vấn đề đồng nhất qua tất cả c&aacute;c trang, trong ASP.NET ch&uacute;ng ta c&oacute; thể thiết kế trang Master Page, v&agrave; c&aacute;c trang con c&oacute; thể kế thừa từ c&aacute;c trang n&agrave;y</li>\r\n	<li>Sử dụng CSS để định kiểu trang một c&aacute;ch linh hoạt v&agrave; dễ bảo tr&igrave;</li>\r\n</ul>\r\n'),
(13, 8, 'Tài chính tiền tệ', 89000, 'KT0006.jpg', '<p>Khi gửi tiền tại c&aacute;c tổ chức t&iacute;n dụng, cuối k&igrave; ta lu&ocirc;n nhận được đầy đủ vốn gốc cộng th&ecirc;m một khoản tiền l&atilde;i (trừ khi tổ chức đ&oacute; ph&aacute; sản). Nhưng khi nắm giữ chứng kho&aacute;n, gi&aacute; trị t&agrave;i sản của ta c&oacute; sinh lời, thậm ch&iacute; c&oacute; bảo tồn được gi&aacute; trị hay kh&ocirc;ng l&agrave; điều kh&ocirc;ng biết trước. Chi ph&iacute; b&aacute;n chứng kho&aacute;n hiện nay rất thấp do sự cạnh tranh giữa c&aacute;c c&ocirc;ng ty m&ocirc;i giới, thanh khoản của chứng kho&aacute;n thấp hơn tiền gửi chủ yếu bởi khoản lỗ c&oacute; thể gặp phải khi kinh doanh, m&agrave; đ&acirc;y lại l&agrave; điều rất dễ xảy ra. Suy ra M3 &gt; M4.</p>\r\n'),
(16, 1, 'fvgdfdz', 100000, 'echip.jpg', '<p>gfx</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `id_subject` int(11) NOT NULL,
  `name_subject` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`id_subject`, `name_subject`) VALUES
(1, 'Ngoại ngữ'),
(2, 'Công nghệ thông tin'),
(3, 'Luật'),
(4, 'Văn học'),
(5, 'Khoa học kỹ thuật'),
(6, 'Nông nghiệp'),
(7, 'Lịch sử, Địa lí'),
(8, 'Kinh tế'),
(9, 'Nghệ thuật sống');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id_user`, `username`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'abc', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
