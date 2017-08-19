-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2017 at 03:41 PM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgcn`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL,
  `bill_date` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `bill_total` double NOT NULL,
  `bill_payment` double NOT NULL,
  `bill_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE IF NOT EXISTS `billdetail` (
  `bill_id` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `bd_quantity` int(11) NOT NULL,
  `bd_price` double NOT NULL,
  `bd_payment` double NOT NULL,
  `bd_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'ASUS'),
(2, 'ACER'),
(3, 'DELL'),
(4, 'APPLE'),
(5, 'SAMSUNG'),
(6, 'SONY'),
(7, 'MEIZU'),
(8, 'XIAOMI'),
(9, 'VIVO'),
(10, 'LENOVO'),
(11, 'HUAWEI');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(9, 'Máy in'),
(10, 'Laptop'),
(11, 'Máy tính');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `cat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inventory` int(11) NOT NULL,
  `sold` int(11) NOT NULL DEFAULT '0',
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `cat_id`, `brand_id`, `image`, `inventory`, `sold`, `created`) VALUES
(1, 'MEIZU MS5', 'Màn hình:	IPS LCD, 5.2", HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	MTK6753 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:	2 Nano SIM\r\nDung lượng pin:	3000 mAh\r\nThiết kế:	Nguyên khối', 3190, 1, 7, 'meizu.jpg', 3, 5, '0000-00-00'),
(2, 'Điện thoại Samsung Galaxy S8', 'Màn hình:	Super AMOLED, 5.8", Quad HD (2K)\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	12 MP\r\nCamera trước:	8 MP\r\nCPU:	Exynos 8895 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:	2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nDung lượng pin:	3000 mAh, có sạc nhanh', 18490, 1, 5, 's8.jpg', 0, 4, '0000-00-00'),
(3, 'Vivo Y55S', 'Màn hình:	TFT, 5.2", HD\r\nHệ điều hành:	Funtouch OS 3.0 (nền tảng Android 6.0)\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	Qualcomm Snapdragon 425 4 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nThẻ SIM:	Nano SIM & Micro SIM, Hỗ trợ 4G\r\nDung lượng pin:	2730 mAh', 3990, 1, 9, 'vivo.jpg', 0, 0, '0000-00-00'),
(4, 'Xiaomi Redmi Note 4 32GB', 'Màn hình:	IPS LCD, 5.5", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 625 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nThẻ SIM:	Nano SIM & Micro SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nDung lượng pin:	4100 mAh', 4690, 1, 8, 'xiaomi.jpg', 0, 3, '0000-00-00'),
(5, 'Laptop Asus E402SA N3060/2GB/500GB/Win10/(WX251T)', '', 6, 2, 1, 'product1.png', 4, 0, '0000-00-00'),
(6, 'Laptop Dell Inspiron 3467 i3 7100U/4GB/1TB/Win10/(M20NR21)', '', 11, 2, 3, 'product3.png', 10, 0, '2017-08-09'),
(7, 'Laptop Acer Aspire ES1 432 C5J2 N3350/2GB/500GB/Win10/(NX.GFSSV.004)', '', 6, 2, 2, 'product2.png', 4, 0, '0000-00-00'),
(8, 'Máy in HP GT5820 (M2Q28A)', 'Loại máy in:	In phun màu\r\nChức năng:	Print, Coppy, Scan, Wireless\r\nĐộ phân giải:	Đen trắng (Up to 1200x1200dpi) - Màu (Up to 4800x1200dpi)\r\nTốc độ in trắng đen:	8 trang/phút\r\nTốc độ in màu ::	5 trang/phút\r\nIn 2 mặt tự động:	Không\r\nKhổ giấy:	A4, A5, A6, DL\r\nKết nối, tiêu chuẩn:	1 Hi-Speed USB 2.0\r\nKết nối mạng:	HP ePrint, Wifi\r\nĐộ phân giải bản sao:	Up to 600x300dpi\r\nĐịnh dang tập tin quét:	JPEG, TIFF, PDF, BMP, PNG\r\nHỗ trợ hệ điều hành:	Windows 10, 8.1, 8, 7: 32 bit hoặc 64 bit,OS X 10.7,8,9,10.', 4390, 3, 6, 'mayin2.jpg', 0, 0, '0000-00-00'),
(9, 'Máy in HP LJ Pro MFP M277DW-B3Q11A', 'Loại máy in:	In laser Màu\r\nChức năng:	In, Scan, Copy, Fax\r\nĐộ phân giải:	600 x 600 dpi\r\nTốc độ in trắng đen:	21 trang / phút\r\nTốc độ in màu ::	18 trang / phút\r\nIn 2 mặt tự động:	Có\r\nBộ nhớ Tích hợp:	256 MB\r\nKhổ giấy:	A4, A5, A6, B5, Bưu thiếp, Phong bì\r\nKết nối, tiêu chuẩn:	USB 2.0\r\nHỗ trợ hệ điều hành:	Windows 10, 8.1, 8, 7: 32 bit hoặc 64 bit,Linux,Ubuntu,OS X 10.7,8,9,10.', 20865, 3, 6, 'mayin.jpg', 0, 0, '0000-00-00'),
(10, 'Máy in Xerox P365d', 'Loại máy in:	In laser đơn sắc\r\nChức năng:	In\r\nĐộ phân giải:	1200x1200dpi\r\nTốc độ in trắng đen:	38 trang/phút\r\nIn 2 mặt tự động:	Có\r\nBộ nhớ Tích hợp:	256 MB\r\nKhổ giấy:	A4, Letter\r\nKết nối, tiêu chuẩn:	USB 2.0\r\nKết nối mạng:	Lan 1G\r\nHỗ trợ hệ điều hành:	Win7,8,8.1,10-Win server 2003,2008,2012,Mac OS X v, 10.7.5, 10.8.x, 10.9.x', 7280, 3, 5, 'mayin3.jpg', 0, 0, '0000-00-00'),
(11, 'Máy in HP 8720-(D9L19A', 'Loại máy in:	Đa sắc\r\nChức năng:	In, Scan, Copy,Fax\r\nĐộ phân giải:	1200 x 1200dpi\r\nTốc độ in trắng đen:	lên đến 30 trang/phút\r\nTốc độ in màu ::	lên đến 25 trang/phút\r\nIn 2 mặt tự động:	Có\r\nBộ nhớ Tích hợp:	256 MB\r\nKhổ giấy:	A4/A5/B6\r\nKết nối, tiêu chuẩn:	USB Ethernet 802.11b/g Wireless Interfaces RJ-11 fax\r\nTốc độ sao chụp:	20 trang/phút màu 25 trang/phút đen trắng\r\nĐịnh dang tập tin quét:	PDF BMP PNG TIF JPG\r\nLoại máy fax:	Fax màu\r\nHỗ trợ hệ điều hành:	Windows 10, 8.1, 8, 7: 32 bit hoặc 64 bit,Linux,OS X 10.7,8,9,10.', 9315, 3, 6, 'mayin4.jpg', 0, 3, '0000-00-00'),
(12, 'iPad Wi-Fi 32GB', 'Màn hìnhLED backlit LCD, 9.7"\r\nHệ điều hành\r\niOS 10\r\nCPU\r\nApple A9 2 nhân 64-bit, 1.84 GHz\r\nRAM\r\n2 GB Bộ nhớ trong\r\n32 GB\r\nCamera sau\r\n8 MP\r\nCamera trước\r\n1.2 MP\r\nKết nối mạng\r\nWiFi, Không hỗ trợ 3G, Không hỗ trợ 4G\r\nĐàm thoại\r\nFaceTime\r\nTrọng lượng\r\n478 g\r\nMàn hình\r\nLED backlit LCD, 9.7"\r\nHệ điều hành\r\niOS 10\r\nCPU\r\nApple A9 2 nhân 64-bit, 1.84 GHz\r\nRAM\r\n2 GB\r\nBộ nhớ trong\r\n32 GB\r\nCamera sau\r\n8 MP\r\nCamera trước\r\n1.2 MP\r\nKết nối mạng\r\nWiFi, Không hỗ trợ 3G, Không hỗ trợ 4G\r\n', 8990, 4, 4, 'ipad.jpg', 0, 4, '0000-00-00'),
(13, 'Samsung Tab S2 9.7 inch', 'Màn hình -Super AMOLED, 9.7"\r\nHệ điều hành\r\nAndroid 5.0\r\nCPU\r\nExynos 5433, 4 nhân 1.9 GHz & 4 nhân 1.3 GHz\r\nRAM\r\n3 GB\r\nBộ nhớ trong\r\n32 GB\r\nCamera sau\r\n8 MP\r\nCamera trước\r\n2.1 MP\r\nKết nối mạng\r\nWiFi, 3G, 4G LTE\r\nHỗ trợ SIM\r\nNano Sim\r\nĐàm thoại\r\nCó\r\n', 9990, 4, 5, 'sstab.jpg', 0, 0, '0000-00-00'),
(14, 'Lenovo Phab 2', '•	Màn hình\r\nIPS LCD, 6.4"\r\n•	Hệ điều hành\r\nAndroid 6.0 (Marshmallow)\r\n•	CPU\r\nMediaTek MT 8735 4 nhân, 1.3 GHz\r\n•	RAM\r\n3 GB\r\n•	Bộ nhớ trong\r\n32 GB\r\n•	Camera sau\r\n13 MP\r\n•	Camera trước\r\n5 MP\r\n•	Kết nối mạng\r\nWiFi, 3G, 4G LTE\r\n•	Hỗ trợ SIM\r\nMicro sim\r\n', 3990, 4, 10, 'lenovo.jpg', 0, 0, '0000-00-00'),
(15, 'Huawei MediaPad T3 8.0 (2017)', 'Màn hình\r\nIPS LCD, 8"\r\nHệ điều hành\r\nAndroid 7.0\r\nCPU\r\nQualcomm MSM8917, 1.4 GHz\r\nRAM\r\n2 GB\r\nBộ nhớ trong\r\n16 GB\r\nCamera sau\r\n5 MP\r\nCamera trước\r\n2 MP\r\nKết nối mạng\r\nWiFi, 3G, 4G LTE\r\nHỗ trợ SIM\r\nNano Sim\r\nĐàm thoại\r\nCó\r\n', 4290, 4, 11, 'huawei.jpg', 0, 0, '0000-00-00'),
(16, 'Asus E502NA-GO010', 'CPU :Intel, Celeron\r\nRAM :2 GB, DDR3L\r\nỔ cứng :HDD, 500 GB\r\nMàn hình :15.6 inch , 1366 x 768 pixels\r\nCard màn hình :Intel HD Graphics, Tích hợp\r\nCổng kết nối :LAN : 10/100/1000 Mbps, WIFI : IEEE 802.11b/g\r\nHệ điều hành :Windows 10\r\nTrọng lượng :1.86 Kg\r\nKích thước :383 x 258 x 22.1 mm\r\n\r\n', 6990, 2, 1, 'asus.jpg', 0, 0, '0000-00-00'),
(17, 'Dell Ins N3458/i3-5005U', 'RAM :4 GB, DDR3L\r\nỔ cứng :HDD, 500 GB\r\nMàn hình :14 inch, 1366 x 768 pixels\r\nCard màn hình :nVidia Geforce 820M , Card rời\r\nCổng kết nối :LAN : 10/100Mbps , WIFI : 802.11b/g\r\nHệ điều hành :Free DOS\r\nTrọng lượng :2.0 Kg\r\nKích thước :345 x 243 x 21.4 mm\r\n', 10290, 2, 3, 'dell.png', 0, 4, '0000-00-00'),
(18, 'Macbook 12 256GB (2017)', 'CPU :Intel, Core M3\r\nRAM :8 GB, LPDDR3\r\nỔ cứng :SSD, 256 GB\r\nMàn hình :12 inch, 2304 x 1440 Pixels\r\nCard màn hình :Intel HD Graphics 615\r\nCổng kết nối :LAN : 802.11ac Wi-Fi wireless networking, WIFI : IEEE 802.11a/b/g/n compatib\r\nHệ điều hành :Mac Os\r\nTrọng lượng :0.92 kg\r\nKích thước :\r\n', 33999, 2, 4, 'macbook.jpg', 0, 3, '0000-00-00'),
(19, 'MSI GL62M 7RDX-1817XVN', 'CPU :	Intel, Core i5\r\nRAM :	8 GB, DDR4\r\nỔ cứng :	HDD, 1 TB\r\nMàn hình :	15.6 inch , 1920 x 1080 pixels\r\nCard màn hình :	NVIDIA Geforce GTX 1050, Card rời\r\nCổng kết nối :	LAN : 10/100/1000 MbpsWIFI : IEEE 802.11\r\nHệ điều hành :	Free DOS\r\nTrọng lượng :	2.2 Kg\r\n', 20999, 2, 12, 'msi.jpg', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `dname`, `address`, `phone`, `email`, `permission`) VALUES
(1, 'admin', 'admin', 'Quản trị viên', '', '', '', 0),
(2, 'user', 'user', 'Người dùng', '', '', '', 1),
(3, 'toi', 'toi', 'toi', '', '1254', 'Toi@abc.vn', 0),
(4, 'a', 'b', 'a', '', '12', 'Abc@gmail.com', 1),
(5, 'admini', 'admini', 'admini', '', '09215625400', 'Abc@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`bill_id`,`pro_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
