-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2019 at 10:12 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nhac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `tenAlbum` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `caSi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `theLoai` int(11) NOT NULL,
  `artworkPath` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dangBoi` int(11) NOT NULL DEFAULT '102',
  `hienThi` int(11) NOT NULL DEFAULT '0',
  `ngayDang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `tenAlbum`, `caSi`, `theLoai`, `artworkPath`, `dangBoi`, `hienThi`, `ngayDang`) VALUES
(35, 'Albums Đan Trường', 'Đan Trường', 1, 'lamtruong.jpg', 0, 1, '2017-11-05 08:42:52'),
(36, 'Albums Sơn Tùng', 'Sơn Tùng MTP', 1, 'sontungMTP.jpg', 102, 1, '2017-11-05 08:50:54'),
(37, 'Albums Hương Tràm', 'Hương Tràm', 1, 'huongtram.jpg', 102, 1, '2017-11-05 08:56:32'),
(38, 'Albums Phương Ly', 'Phương Ly', 1, 'pl.jpg', 102, 1, '2017-11-05 09:02:40'),
(39, 'Albums Đức Phúc', 'Đức Phúc', 1, 'ducphuc.jpg', 102, 1, '2017-11-05 09:06:01'),
(48, 'Albums Ưng Hoàng Phúc ', 'Ưng Hoàng Phúc', 1, 'uhp.jpg', 114, 0, '2017-11-06 13:26:04'),
(49, 'Albums Phan Mạnh Quỳnh', 'Phan Mạnh Quỳnh', 1, 'phanquynh.jpg', 102, 0, '2017-11-08 14:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `id` int(11) NOT NULL,
  `tenBaiHat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caSi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `album` int(11) NOT NULL DEFAULT '0',
  `theLoai` int(11) NOT NULL,
  `duration` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT '3:00',
  `path` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `albumOrder` int(11) NOT NULL DEFAULT '1',
  `luotNghe` int(11) NOT NULL DEFAULT '0',
  `dangBoi` int(11) NOT NULL DEFAULT '102',
  `ngayDangBaiHat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Hinhcasi` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id`, `tenBaiHat`, `caSi`, `album`, `theLoai`, `duration`, `path`, `albumOrder`, `luotNghe`, `dangBoi`, `ngayDangBaiHat`, `Hinhcasi`) VALUES
(37, 'Vẫn Luôn Mong Chờ', 'Hương Tràm', 37, 1, '3:00', 'VanLuonChoMong-HuongTram[MP3320kbps].mp3', 1, 67, 102, '2017-11-05 08:56:57', 'huongtram.jpeg'),
(38, 'Anh Cứ Đi Đi', 'Vân Trang', 36, 1, '3:00', 'AnhCuDiDi-DanTrang[MP3320kbps].mp3', 1, 16, 102, '2017-11-05 09:00:01', 'hariwon.jpg'),
(49, 'Tôi Muốn Quên Em', 'Phan Mạnh Quỳnh', 35, 1, '3:00', 'ToiMuonQuenEm-PhanManhQuynh-5231684.mp3', 1, 11, 102, '2017-11-06 10:07:55', 'tmqe.jpg'),
(149, 'Tâm sự người lạ', 'Tiên Cookie', 0, 2, '3:00', 'TAM_SU_VII_NGUOI_LA_-_NGUYEN_THAC_BAO_NGOC[MP3Fiber.com].mp3', 1, 112, 102, '2017-11-05 08:44:49', 'tiencookie.jpg'),
(150, 'Giọt Buồn Để Lại', 'Khắc Việt', 36, 1, '3:00', 'Giot_buon_de_lai_-_Bich_Ngoc[MP3Fiber.com].mp3', 1, 71, 102, '2017-11-05 08:51:23', 'khacviet.jpg'),
(151, 'Rơi', 'Kiêu anh Hera', 36, 1, '3:00', 'Kieu_Anh_The_Voice_-_Roi_DuongK_Remix_-_OFFICIAL_AUDIO[MP3Fiber.com].mp3', 1, 64, 102, '2017-11-05 08:53:57', 'kieuanh.jpg'),
(153, 'Yêu Không Hối Hận', 'Ngô Thanh Tâm', 36, 1, '3:00', 'Yeu_Khong_Hoi_Han_Ngo_Thanh_Tam.mp3', 1, 15, 102, '2017-11-05 08:58:51', 'votranthanh.jpg'),
(155, 'Để Em Rời Xa', 'Hạnh Sino', 38, 1, '3:00', 'DeEmRoiXa-HanhSino.mp3', 1, 99, 102, '2017-11-05 09:04:12', 'hanhsino.jpg'),
(156, 'Đi Về Đâu', 'Tiên Tiên', 39, 1, '3:00', 'Di-ve-dau.mp3', 1, 110, 102, '2017-11-05 09:07:12', 'tien.jpg'),
(160, 'I Dont Want', 'Khởi My', 38, 1, '3:00', 'IDontWant-KhoiMy.mp3', 1, 150, 102, '2017-11-05 09:10:34', 'khoimy.jpg'),
(161, 'Em Gái Mưa', 'Hương Tràm', 37, 1, '3:00', 'EmGaiMua-HuongTram[320kbps_MP3].mp3', 1, 31, 102, '2017-11-05 09:34:54', 'huongtram.jpg'),
(162, 'Túy Âm', 'Xesi, Masew', 39, 1, '3:00', 'TuyAm Xesi_Masew_NhatNguyen[320kbps_MP3].mp3', 1, 33, 102, '2017-11-05 09:36:48', 'tuyam.jpg'),
(164, 'Quên', 'Trình Đình Quang', 38, 1, '3:00', 'Quen-TrinhDinhQuangMVLyrics.mp3', 1, 49, 102, '2017-11-05 09:40:04', 'tdq.jpg'),
(166, 'Đừng Đi', 'Nguyễn Thạch Bảo', 35, 1, '3:00', '[MASHUP]Dungdi-KeepmeinloveNguyenThacBaoNgoc.mp3', 1, 54, 102, '2017-11-05 12:27:02', 'nguyenthachbao.jpg'),
(195, 'Hai thế giới', 'Con Nhỏ hát bải Khóc', 37, 1, '3:00', 'HaiTheGioi.mp3', 1, 17, 102, '2017-11-06 12:59:42', '2tg.jpg'),
(197, 'Yêu Nhau Nữa Ngày', 'Phan Mạnh Quỳnh', 48, 1, '3:00', 'YeuNhauNuaNgay-PhanManhQuynh-5168900.mp3', 1, 25, 114, '2017-11-06 13:26:48', 'ynnng.jpg'),
(198, 'Nơi Bình Yên', 'Trịnh Đình Quang', 38, 1, '3:00', 'NoiBinhYen-TrinhDinhQuang-5186306_hq.mp3', 1, 10, 102, '2017-11-06 18:59:01', 'noibinhyen.jpg'),
(207, 'Sống Xa Anh Chẳng Dễ Dàng', 'Bảo Anh', 49, 1, '3:00', 'Songxaanhchangdedang.mp3', 1, 26, 102, '2017-11-08 14:38:54', 'sxacdd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `casi`
--

CREATE TABLE `casi` (
  `id` int(11) NOT NULL,
  `tenCaSi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anhCaSi` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `casi`
--

INSERT INTO `casi` (`id`, `tenCaSi`, `anhCaSi`) VALUES
(42, 'Nguyễn Thạc Bảo Ngọc', 'public/images/anhcasi/3.jpg'),
(43, 'Bích Ngọc', 'public/images/anhcasi/artworks-000157138501-1gy812-t500x500.jpg'),
(44, 'Nhiều ca sĩ', 'public/images/anhcasi/73688444a73a76169d03b689a7e785cf_1404904575.jpg'),
(45, 'Kiều Anh', 'public/images/anhcasi/artworks-000120294222-5c3idd-t500x500.jpg'),
(46, 'Hương Tràm', 'public/images/anhcasi/artworks-000215052508-22m8a2-t500x500.jpg'),
(47, 'Ngô Thanh Tâm', 'public/images/anhcasi/avatars-000306582645-h1ezxt-t500x500.jpg'),
(48, 'Đan Trang', 'public/images/anhcasi/artworks-000169485276-azveyj-t500x500.jpg'),
(49, 'Hạnh Sino', 'public/images/anhcasi/4de608209a815d36f7aaee38403da40d_1508294889.jpg'),
(50, 'Tiên Tiên', 'public/images/anhcasi/avatars-000184994366-uk4rrw-t500x500.jpg'),
(51, 'Khởi My', 'public/images/anhcasi/69fd71a1b4cbb01df91cb9839efd9763_1485081286.jpg'),
(52, 'Xesi', 'public/images/anhcasi/f9c0475ec02716554fba3f63e5b4ac37_1504991428.jpg'),
(53, 'Zunny', 'public/images/anhcasi/6f8775cc15a362003d0f72b3c4818ed2_1433384922.jpg'),
(54, 'Trịnh Đình Quang', 'public/images/anhcasi/1250fc39417b3822a7672ad957562a35_1509607623.jpg'),
(62, 'Bảo Anh', 'public/images/anhcasi/68bcf97b41cd37e918cdf2dc0b85e895_1509438182.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hinhcasi`
--

CREATE TABLE `hinhcasi` (
  `id` int(11) NOT NULL,
  `tencasi` varchar(250) DEFAULT NULL,
  `hinhcasi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhcasi`
--

INSERT INTO `hinhcasi` (`id`, `tencasi`, `hinhcasi`) VALUES
(37, 'Hương Tràm', 'ht.jpg'),
(49, 'Phan Mạnh Quỳnh', 'pmq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `tieuDe`, `hinh`, `link`) VALUES
(1, 'sơn tùng slide', 'sontungslider.jpg', 'playlist/37/tong-hop-huong-tram.htm'),
(2, 'Hương Tràm silde', 'huongtramsilde.jpg', 'playlist/39/dance-vpop-2017.htm'),
(3, 'Đan Trường silde', 'dantruong1silde.jpg', 'playlist/38/giong-hat-moi.htm');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `tenTheLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `tenTheLoai`) VALUES
(1, 'Nhạc trẻ'),
(2, 'Nước ngoài'),
(5, 'Nhạc Sến'),
(6, 'a'),
(7, 'Nhạc Thính Phòng'),
(8, 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taiKhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phanQuyen` int(11) NOT NULL DEFAULT '0',
  `ngayDangKy` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `anhDaiDien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public/images/logo_macdinh.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ten`, `taiKhoan`, `matKhau`, `email`, `phanQuyen`, `ngayDangKy`, `anhDaiDien`) VALUES
(99, 'Admin', 'admin', 'Phuclk', 'Admin@gmail.com', 0, '2017-11-01 14:17:34', 'public/images/logo_macdinh.png'),
(118, 'asdf', 'asdf', 'asdfasdf123', 'asdf@gmail.com', 0, '2019-11-02 13:50:56', 'public/images/logo_macdinh.png'),
(126, 'zxcvzxc', 'user1', '123', 'asdc@gmail.com', 0, '2019-11-04 16:00:45', 'public/images/logo_macdinh.png'),
(127, 'zxcvzxc', 'user2', '123', 'asdc@gmail.com', 0, '2019-11-04 16:01:22', 'public/images/logo_macdinh.png'),
(128, 'zxcvzxc', 'user3', '123', 'asdc@gmail.com', 0, '2019-11-04 16:01:22', 'public/images/logo_macdinh.png'),
(129, 'zxcvzxc', 'user4', '123', 'asdc@gmail.com', 0, '2019-11-04 16:01:22', 'public/images/logo_macdinh.png'),
(130, 'zxcvzxc', 'user5', '123', 'asdc@gmail.com', 0, '2019-11-04 16:01:22', 'public/images/logo_macdinh.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `hinhcasi`
--
ALTER TABLE `hinhcasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `casi`
--
ALTER TABLE `casi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `hinhcasi`
--
ALTER TABLE `hinhcasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
