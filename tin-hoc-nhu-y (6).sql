-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 11:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin-hoc-nhu-y`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `level` int(11) NOT NULL COMMENT '0: main banner; 1: sub banner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `id_khach_hang` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `danh_gia` int(10) NOT NULL DEFAULT 0,
  `noi_dung` varchar(255) NOT NULL,
  `tra_loi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tri_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `id` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `chi_tiet_1` varchar(100) NOT NULL,
  `chi_tiet_2` varchar(100) NOT NULL,
  `chi_tiet_3` varchar(100) NOT NULL,
  `chi_tiet_4` varchar(100) NOT NULL,
  `chi_tiet_5` varchar(100) NOT NULL,
  `chi_tiet_6` varchar(100) NOT NULL,
  `chi_tiet_7` varchar(100) NOT NULL,
  `chi_tiet_8` varchar(100) NOT NULL,
  `chi_tiet_9` varchar(100) NOT NULL,
  `chi_tiet_10` varchar(100) NOT NULL,
  `chi_tiet_11` varchar(100) NOT NULL,
  `chi_tiet_12` varchar(100) NOT NULL,
  `chi_tiet_13` varchar(100) NOT NULL,
  `chi_tiet_14` varchar(100) NOT NULL,
  `chi_tiet_15` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id`, `id_san_pham`, `chi_tiet_1`, `chi_tiet_2`, `chi_tiet_3`, `chi_tiet_4`, `chi_tiet_5`, `chi_tiet_6`, `chi_tiet_7`, `chi_tiet_8`, `chi_tiet_9`, `chi_tiet_10`, `chi_tiet_11`, `chi_tiet_12`, `chi_tiet_13`, `chi_tiet_14`, `chi_tiet_15`) VALUES
(2, 5, 'Công nghệ CPU: i5, 11400H, 2.7GHz', 'RAM: 8 GB, DDR4 2 khe (1 khe 8 GB + 1 khe rời), 3200 MHz', 'Ổ cứng: 256 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2 TB (2280) / 512 GB (2230))', 'Màn hình: 15.6\", Full HD (1920 x 1080) 120Hz', 'Card màn hình: Card rời, RTX 3050 4GB', 'Cổng kết nối: USB Type-C, HDMI, LAN (RJ45), 3 x USB 3.2, Jack tai nghe 3.5 mm', 'Đặc biệt: Có đèn bàn phím', 'Hệ điều hành: Windows 11 Home SL + Office Home & Student vĩnh viễn', 'Thiết kế: Vỏ nhựa', 'Kích thước, khối lượng: Dài 357 mm - Rộng 272 mm - Dày 25 mm - Nặng 2.81 kg', 'Thời điểm ra mắt: 2021', '', '', '', ''),
(3, 7, 'Công nghệ CPU: i7, 12700, 2.10 GHz', 'RAM: 16 GB, DDR5 2 khe (1 khe 16 GB + 1 khe trống), 4800 MHz, 2 khe', 'Ổ cứng: 512 GB SSD, Hỗ trợ khe M.2 connector for WLAN', 'Màn hình: 27\", 2K', 'Card màn hình: RTX 3050Ti 4GB', 'Cổng kết nối: LAN (RJ45), Display port, HDMI in, 1 x Headphone/microphone combo, 5 x SuperSpeed USB ', 'Hệ điều hành: Windows 11', 'Kích thước: Dài 614 mm - Rộng 599.5 mm - Dày 247 mm - Nặng 11.2 kg', '', '', '', '', '', '', ''),
(4, 6, 'Độ phân giải:3 MP (2048 x 1536)', 'Góc camera:Xoay ngang 360 độ, Xoay dọc 114 độ', 'Tầm nhìn hồng ngoại:9 m trong tối', 'Hỗ trợ thẻ nhớ:MicroSD ≤ 256GB', 'Thời gian lưu trữ:MicroSD ≤ 256GB (21-30 ngày)', 'Hỗ trợ thiết bị:Android, iOS (iPhone), iPadOS (iPad)', 'Thương hiệu:Trung Quốc', 'Sản xuất:Trung Quốc', 'Hãng:TP-Link', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) NOT NULL,
  `ten_danh_muc` varchar(30) NOT NULL,
  `duong_dan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`, `duong_dan`) VALUES
(1, 'TRANG CHỦ', '/'),
(2, 'GIỚI THIỆU', './about'),
(3, 'SẢN PHẨM', './products'),
(4, 'LIÊN HỆ', './contact'),
(5, 'TIN TỨC', './news');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `trang_thai` bit(1) NOT NULL DEFAULT b'0' COMMENT '0: Đang xử lý; 1: Đơn hàng đã thanh toán thành công',
  `hinh_thuc_thanh_toan` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(10) NOT NULL,
  `id_khach_hang` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) NOT NULL,
  `ten_tai_khoan` varchar(30) NOT NULL,
  `ho_ten` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mat_khau` varchar(16) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL DEFAULT 'Nam',
  `ngay_sinh` date DEFAULT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `level` varchar(1) NOT NULL DEFAULT '0' COMMENT '0: user; 1: Admin',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar-default.jfif',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_tai_khoan`, `ho_ten`, `email`, `mat_khau`, `gioi_tinh`, `ngay_sinh`, `so_dien_thoai`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Đào Thị Diệu Thương', 'daothuong068@gmail.com', '123456', 'Nữ', '2023-05-08', '0868337083', '1', 'avatar-default.jfif', '2023-05-08 18:23:35', '2023-05-08 18:23:55'),
(17, 'test123', 'Nguyen Van A', 'abc@gmail.com', '123456', 'Nam', '2023-05-15', '0966480302', '0', 'avatar-default.jfif', '2023-05-14 15:30:31', '2023-05-15 12:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang`
--

CREATE TABLE `loai_hang` (
  `id` int(10) NOT NULL,
  `ma_loai` varchar(10) NOT NULL,
  `ten_loai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_hang`
--

INSERT INTO `loai_hang` (`id`, `ma_loai`, `ten_loai`) VALUES
(1, 'PC', 'PC'),
(2, 'LT', 'Laptop'),
(3, 'CMR', 'Camera'),
(4, 'DT', 'Điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `don_gia_nhap` int(11) NOT NULL,
  `don_gia_ban` int(11) NOT NULL,
  `so_luong_kho` int(11) NOT NULL,
  `mo_ta` longtext NOT NULL,
  `hinh_anh` varchar(500) NOT NULL,
  `id_loai_hang` int(10) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_sp`, `don_gia_nhap`, `don_gia_ban`, `so_luong_kho`, `mo_ta`, `hinh_anh`, `id_loai_hang`, `ngay_nhap`, `created_at`, `updated_at`) VALUES
(5, 'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4G', 20000000, 27490000, 20, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Không những mang đến cho người dùng hiệu năng ấn tượng nhờ con chip \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Intel thế hệ 11\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" tân tiến cùng \"},{\"attributes\":{\"color\":\"#0066cc\",\"link\":\"https://www.thegioididong.com/laptop-card-roi-rtx-30-series\"},\"insert\":\"card rời RTX 30 series\"},{\"attributes\":{\"color\":\"#0066cc\"},\"insert\":\", \"},{\"attributes\":{\"color\":\"#0066cc\",\"link\":\"https://www.thegioididong.com/laptop/dell-gaming-g15-5511-i5-70266676\"},\"insert\":\"laptop Dell Gaming G15 5511 i5 11400H (70266676)\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" còn sở hữu thiết kế thời thượng, lôi cuốn, hứa hẹn sẽ là người cộng sự lý tưởng cùng bạn chinh phục mọi chiến trường.\"},{\"attributes\":{\"header\":4},\"insert\":\"\\n\"},{\"insert\":\"\\nThu hút mọi ánh nhìn cùng vẻ ngoài nổi bật\"},{\"attributes\":{\"header\":4},\"insert\":\"\\n\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Đến với chiếc \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop\"},\"insert\":\"laptop\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", ngôn ngữ thiết kế đã được thay đổi so với các phiên bản tiền nhiệm, hầm hố hơn, các đường nét cắt xẻ tăng thêm phần gaming cho chiếc máy. Lớp \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"vỏ nhựa\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" màu xám bao bọc bên ngoài chiếc \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop-dell-gaming-g-series\"},\"insert\":\"laptop Dell Gaming\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" này mang đến sự bền bỉ hoàn mỹ cùng khối lượng \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"2.81 kg\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" và dày \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"25 mm\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", với mình đây là một con số vừa đủ để có thể mang theo bên người, phục vụ cho nhu cầu làm việc cũng như giải trí cho bản thân. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-7-3.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-7-3.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop-den-ban-phim\"},\"insert\":\"Đèn nền\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" tiện lợi cùng các phím gõ sâu, độ nảy tốt được trang bị ở chiếc \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop-dell\"},\"insert\":\"laptop Dell\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" này hỗ trợ người dùng tối đa trong quá trình học tập, làm việc cũng như chơi các tựa game mà không lo nhầm lẫn, nâng cao hiệu suất làm việc dù ở bất kỳ điều kiện ánh sáng nào.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-2-3.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-2-3.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Phiên bản laptop này còn được trang bị hàng loạt những cổng giao tiếp thông dụng dọc hai bên máy như USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45) và USB Type-C, cho phép bạn kết nối hay truyền xuất dữ liệu đến nhiều loại thiết bị ngoại vi tương thích một cách dễ dàng hơn. Nhà Dell đã tâm lý khi mang những cổng kết nối về phía sau máy, giúp mình không bị vướng víu khi vừa làm việc trên máy vừa phải cắm sạc.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Chiến mọi tựa game đình đám mượt mà\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Bộ vi xử lý \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Intel Core i5 Tiger Lake\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" đã mang lại hiệu năng tốt, tuy nhiên chiếc máy khi trải nghiệm tựa game \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/game-app/cyberpunk-2077-231286\"},\"insert\":\"Cyberpunk\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" thì đã hơi “đuối” nếu để mức cài đặt cao nhất. Mình khuyến khích các bạn hãy hạ mức đồ hoạ của game xuống thấp để có trải nghiệm tốt hơn nhé. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-4-3.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-4-3.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Đến với tựa game \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/game-app/cs-go-game-ban-sung-nhieu-nguoi-choi-nhat-tren-the-gioi-221745\"},\"insert\":\"CS:GO\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", máy đã ổn định hơn với mức FPS là \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"90\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\". Qua trải nghiệm chơi game, các thao tác như di chuột, qua lại đều rất trơn tru, cảm giác chơi game vẫn phấn khích, ấn tượng trong khi mức cài đặt của mình luôn để cao hoặc tối đa.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-3-2.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-3-2.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Cho phép bạn mở cùng lúc nhiều ứng dụng, hàng loạt tab và chuyển đổi qua lại mà không lo giật lag nhờ sự đa nhiệm đến từ \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop-8-gb\"},\"insert\":\"laptop RAM 8 GB\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" chuẩn \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"DDR4 2 khe\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" (1 khe \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"8 GB\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" + 1 khe rời). Tuy nhiên các tác vụ dó chỉ dừng lại ở mức cơ bản, nên để có thể khai thác tốt sức mạnh của CPU và GPU thì mình khuyên các bạn hãy nâng cấp thêm RAM nhé.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-4.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-4.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Cùng bạn tạo nên những tác phẩm ấn tượng với chất lượng đồ họa vượt trội, hình ảnh chân thật nhờ card đồ họa rời \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"NVIDIA GeForce RTX 3050 4 GB\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", cho bạn thỏa sức chỉnh sửa hình ảnh, render video,... chuyên nghiệp trên Photoshop, AI,... đồng thời mang đến trải nghiệm các tựa game một cách trơn tru ở cả mức đồ họa thấp hay cao như PUBG: Battlegrounds, LOL,...\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-5.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-5.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Chiếc máy được mình thử thách kiểm tra qua phần mềm \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Intel Processor Diagnostic Tool\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", qua đó nhận thấy mức xung nhịp tăng lên đến \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"3.15 Ghz\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" so với thông số cơ bản mà hãng cung cấp là \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"2.7 Ghz\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\". \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-1-2.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-1-2.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Đến với khả năng test GPU, mình chọn phần mềm \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Fur Mark\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" để kiểm tra thì kết quả cho thấy máy sẽ xử lý loanh quanh \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"33 FPS\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\". Đây là mức điểm chấp nhận được với chiếc máy gaming giá rẻ. Như mình đã nói, để khai thác hết sức mạnh của card màn hình thì các bạn hãy nâng cấp RAM để có trải nghiệm tốt nhất nha.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-6-3.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-6-3.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Ổ cứng \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"SSD 256 GB\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" mang lại không gian lưu trữ thấp, với nhu cầu sử dụng hằng ngày của mình ở mức đơn giản, mình khuyên các bạn hãy nâng cấp SSD để mở rộng khả năng lưu trữ, cài game, ứng dụng thoả thích mà không lo phải giải phóng.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Chuẩn xác hơn cả về hình ảnh lẫn âm thanh\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Màn hình viền mỏng \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"15.6 inch\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" sở hữu độ phân giải \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Full HD (1920 x 1080)\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" cho hình ảnh hiển thị rõ nét, chân thật hơn ở những nơi có điều kiện ánh sáng bình thường như trong nhà, phòng học,... đồng thời mở rộng không gian đến \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"178 độ\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" nhờ công nghệ \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"WVA\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" kết hợp cùng độ sáng \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"250 nits\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", mang đến những trải nghiệm trọn vẹn hơn. Theo mình màn hình máy sẽ đáp ứng tốt nhu cầu giải trí cơ bản như xem phim, chơi game nhẹ nhàng.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-8.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-8.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop-120-hz\"},\"insert\":\"Màn hình laptop 120 Hz\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" cho bạn mãn nhãn với từng chuyển động của những bộ phim hành động đầy kịch tính hay các tựa game rượt đuổi hấp dẫn mà không lo xảy ra tình trạng giật, xé hình, kết hợp cùng công nghệ chống chói \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Anti Glare\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", hỗ trợ bạn giải trí ở cả điều kiện ánh sáng bất lợi mà không sợ ảnh hưởng tiêu cực đến mắt nhưng vẫn tiết kiệm điện năng tối ưu nhờ công nghệ \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"LED Backlit\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\".\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-9.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-9.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Âm thanh to rõ cùng khả năng khử tiếng ồn tân tiến đến từ công nghệ \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Nahimic Audio\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", cho bạn những trải nghiệm khó quên với không gian âm nhạc đặc sắc, sống động, mang đến cảm giác thư giãn hơn bao giờ hết.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-10.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-10.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Dell Gaming G15 5511 i5 11400H (70266676) là phiên bản \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/laptop?g=laptop-gaming\"},\"insert\":\"laptop gaming\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" mà các game thủ nên cân nhắc chọn mua bởi cấu hình mạnh mẽ cùng kiểu dáng hiện đại. Bên cạnh đó thì Dell đã mang đến một sản phẩm gaming có mức giá dễ tiếp cận hơn với người dùng nên đây vẫn có thể là sự lựa chọn lý tưởng cho những ai có nhu cầu về đồ họa - kỹ thuật.\"},{\"insert\":\"\\n\\n\"}]}', 'dell-gaming-g15-5511-i5-70266676-290322-110237-600x600.jpg||dell-gaming-g15-5511-i5-70266676-fix-ab-01-1020x570-2.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-2.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-3.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-4.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-5.jpg||dell-gaming-g15-5511-i5-70266676-fix-ab-06-1020x570.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-7.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-8.jpg||vi-vn-dell-gaming-g15-5511-i5-70266676-9.jpg||vi', 2, '2023-05-14', '2023-05-14 20:26:55', '2023-05-14 20:54:52'),
(6, 'Camera IP 360 Độ 1536P TP-Link Tapo C210', 600000, 900000, 20, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Kiểu dáng tròn trĩnh, thiết kế sang trọng với gam màu trắng tươi sáng\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Kiểu dáng \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/camera-giam-sat\"},\"insert\":\"camera\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" gọn chắc, chân đế phẳng dễ dàng cho việc lắp đặt ở nhiều vị trí từ để bàn, kệ đến gắn tường, trần. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-1.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-1.jpg\"}},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Vùng quan sát trải rộng với góc quay và quét ngang 360 độ, dọc 114 độ\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"TP-Link Tapo C210 quay bao quát toàn bộ không gian, không những giúp bạn thu thập dữ liệu giá trị tối ưu mà còn tiết kiệm chi phí khi không cần phải mua nhiều camera giám sát cho 1 khu vực nhất định. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-2.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-2.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Mọi chi tiết đều được ghi lại sắc nét với độ phân giải cực cao 3MP\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Số lượng điểm ảnh 2048 x 1536, bất kỳ hoạt động gì diễn ra trước ống kính camera đều được thu lại rõ ràng với độ chuẩn xác cao, giúp bạn nhận ra nhanh các nguy hiểm có thể xảy ra, bảo vệ gia đình mình tốt hơn.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-3.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-3.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Thiết lập chế độ quan sát ban đêm có \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"tầm nhìn xa hồng ngoại 850 nm\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", bộ lọc chuyển đổi màu tự động khi ánh sáng kém cho khả năng thu hình rõ nét vào ban đêm ở\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" khoảng cách tối đa 9 m\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/camera-giam-sat-tp-link\"},\"insert\":\"camera TP-Link\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" giúp bạn yên tâm ngủ ngon vào đêm xuống. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-7.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-7.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Giám sát chặt chẽ với khả năng phát hiện chuyển động thông minh\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/hoi-dap/camera-ip-wifi-la-gi-uu-nhuoc-diem-ra-sao-co-nen-mua-1229534\"},\"insert\":\"Camera IP\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" dõi theo chuyển động trong tầm quan sát, \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"gửi ngay thông báo \"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"để bạn biết có người lạ tiếp cận ngôi nhà mình. Đặc biệt, hiệu ứng đèn và âm báo động phát ra sẽ khiến các vị khách lạ dè chừng mà không xâm nhập vào bên trong để lấy cắp tài sản hay gây hại cho người thân của bạn. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-4.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-4.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Thực hiện các cuộc trò chuyện 2 chiều dễ dàng với loa và mic gắn trên camera\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Nghe và được nghe thuận lợi, bạn có thể giao tiếp với người nhà từ cơ quan hoặc kiểm tra thú cưng, ngăn chúng ăn vụng đồ ăn của bạn từ xa dễ dàng. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-6.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-6.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Cho thời gian lưu trữ video lâu từ 21 - 30 ngày với khả năng hỗ trợ thẻ nhớ MicroSD đến 256 GB\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Với dung lượng thẻ nhớ lớn, bạn không cần thường xuyên xóa bớt video tốn thời gian. Lưu ý, thẻ nhớ không đính kèm \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/camera-giam-sat?g=camera-giam-sat\"},\"insert\":\"camera giám sát\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", bạn cần mua thêm khi sử dụng. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-8.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-8.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Quản lý hiệu quả trên điện thoại qua ứng dụng Tapo\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Chỉ vài thao tác nhẹ nhàng trên điện thoại là bạn có thể điều khiển camera tùy ý như thiết lập chế độ riêng tư (tắt tính năng giám sát để bảo vệ sự riêng tư của bạn), kiểm tra thư mục video để phát lại video thu trước đó, đặt lịch kiểm tra bản ghi định kỳ, xác định và giữ vị trí quay cố định,...\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Giải phóng đôi tay với tính năng điều khiển bằng giọng nói hiện đại, sử dụng với cả trợ lý Google và Amazon Alexa. \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Ứng dụng này hỗ trợ cho hệ điều hành \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"iOS 9+, Android 4.4+\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\". Cài đặt đơn giản: Tải ứng dụng - Bật Camera - Cài đặt theo chỉ dẫn trên màn hình. \"},{\"insert\":\"\\nLink tải ứng dụng: \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://apps.apple.com/us/app/tp-link-tapo/id1472718009\"},\"insert\":\"iOS\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" | \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://play.google.com/store/apps/details?id=com.tplink.iot&hl=en&gl=US\"},\"insert\":\"Android\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\".\"},{\"insert\":\"\\nXem thêm: \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/game-app/tapo-ung-dung-quan-ly-dieu-khien-thiet-bi-gia-dinh-239412\"},\"insert\":\"Tapo: Ứng dụng quản lý, điều khiển thiết bị gia đình thông minh\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-5.jpg\"},\"insert\":{\"image\":\"https://cdn.tgdd.vn/Products/Images/4728/242566/camera-ip-360-do-3mp-tp-link-tapo-c210-5.jpg\"}},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Tóm lại, \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/camera-giam-sat/camera-ip-360-do-3mp-tp-link-tapo-c210\"},\"insert\":\"camera IP 360 độ 3MP TP-Link Tapo C210\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" có thiết kế nhỏ nhắn, tầm quan sát rộng, thu hình với độ phân giải 3MP, lưu trữ dữ liệu lớn, phát hiện chuyển động thông minh, quản lý thuận tiện bằng ứng dụng Tapo, lựa chọn đúng đắn để bảo vệ ngôi nhà Việt.\"},{\"insert\":\"\\n\\n\"}]}', 'camera-ip-360-do-3mp-tp-link-tapo-c210-030822-051551-600x600.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-2-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-3-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-4-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-5-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-6-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-7-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-8-1-org.jpg||camera-ip-360-do-3mp-tp-link-tapo-c210-9-1-org.jpg||camera-ip-360-do-3', 3, '2023-05-14', '2023-05-14 20:37:54', '2023-05-14 20:37:54'),
(7, 'HP EliteOne 870 G9 AIO i7 12700/16GB/512GB/4GB RTX', 3000000, 40590000, 20, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"Với thiết kế đẳng cấp và trang bị tính năng mạnh mẽ, \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/may-tinh-de-ban/hp-eliteone-870-g9-aio-i7-76n72pa\"},\"insert\":\"máy tính để bàn HP EliteOne 870 G9 AIO i7 12700 27 inch (76N72PA)\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" được HP tung ra thị trường nhắm trực tiếp đến người dùng doanh nghiệp hoặc cá nhân khi đáp ứng mọi nhu cầu sử dụng khác nhau.\"},{\"attributes\":{\"header\":3},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"• \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/may-tinh-de-ban\"},\"insert\":\"Máy tính để bàn\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" được trang bị bộ vi xử lý \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Intel Core i7 12700\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" có khả năng xử lý đa nhiệm, tác vụ nặng một cách mượt mà và hiệu quả. Việc xử lý các công việc đòi hỏi nhiều tài nguyên như xử lý video, đồ họa, chơi game hoặc chạy các ứng dụng có tính năng cao sẽ không gặp trở ngại với bộ xử lý mạnh mẽ này.\"},{\"insert\":\"\\n• Bộ nhớ \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"RAM 16 GB DDR5 \"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\"được trang bị trên máy tính để bàn HP EliteOne 870 G9 cho phép người dùng chạy nhiều ứng dụng đồng thời và xử lý các tác vụ nặng với hiệu suất cao và độ ổn định tốt, từ đó giúp người dùng có trải nghiệm sử dụng máy tính mượt mà và không bị gián đoạn trong quá trình làm việc.\"},{\"insert\":\"\\n• Ổ cứng \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"SSD 512 GB\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" giúp người dùng lưu trữ nhiều tệp tin, hình ảnh, video và phần mềm mà không gặp trở ngại về tốc độ hoặc dung lượng bộ nhớ. Ngoài ra, ổ cứng SSD còn giúp tăng tốc độ khởi động của máy tính và tăng hiệu suất trong khi làm việc với các ứng dụng và chương trình đòi hỏi tốc độ cao.\"},{\"insert\":\"\\n• Card đồ họa \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"NVIDIA GeForce RTX 3050 Ti 4 GB\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" được tích hợp trên chiếc \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/may-tinh-de-ban-aio\"},\"insert\":\"máy tính để bàn All in One (AIO)\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" này giúp người dùng thực hiện các công việc đòi hỏi nhiều tài nguyên hệ thống như thiết kế hình ảnh 3D, cũng như giải trí và chơi game một cách mượt mà, trơn tru.\"},{\"insert\":\"\\n• Màn hình \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"27 inch\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" với độ phân giải \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"QHD (2560 x 1440)\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" của máy tính để bàn HP không chỉ giúp bạn quan sát nội dung trên máy tính một cách dễ dàng và thuận tiện, mà còn đem lại trải nghiệm hình ảnh sắc nét, đáp ứng nhu cầu giải trí và làm việc của người dùng.\"},{\"insert\":\"\\n• Trang bị \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"loa stereo\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" với công nghệ \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Bang & Olufsen audio\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" và \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Realtek High Definition Audio\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" giúp người dùng thực hiện các công việc liên quan đến giải trí và đa phương tiện như xem phim, nghe nhạc, hoặc hội họp trực tuyến một cách trải nghiệm và tốt hơn.\"},{\"insert\":\"\\n• Đối với các doanh nghiệp, máy tính để bàn còn được tích hợp các tính năng bảo mật và quản lý tiên tiến như \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"TPM 2.0\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\", \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"công tắc khoá camera\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" và các tính năng quản lý của HP.\"},{\"insert\":\"\\n• \"},{\"attributes\":{\"color\":\"#333333\",\"link\":\"https://www.thegioididong.com/may-tinh-de-ban-hp\"},\"insert\":\"Máy tính để bàn HP\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" không chỉ được trang bị những tính năng vượt trội mà còn sở hữu một thiết kế đẹp mắt với những đường nét tinh tế và sự kết hợp hài hòa giữa \"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"màu bạc\"},{\"attributes\":{\"color\":\"#333333\"},\"insert\":\" sang trọng, phù hợp với mọi không gian khác nhau.\"},{\"insert\":\"\\n• Máy tính được trang bị đầy đủ các cổng giao tiếp như: USB Type-A, USB Type-C, HDMI và LAN, cho phép bạn kết nối nhiều thiết bị khác nhau.\\n\\n\"}]}', 'hp-eliteone-870-g9-aio-i7-76n72pa-thumb-600x600.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-1.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-2.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-3.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-4.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-5.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-6.jpg||hp-eliteone-870-g9-aio-i7-76n72pa-7.jpg', 1, '2023-05-14', '2023-05-14 20:42:18', '2023-05-14 20:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `so_dia_chi`
--

CREATE TABLE `so_dia_chi` (
  `id` int(10) NOT NULL,
  `id_khach_hang` int(10) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `tinh_tp` varchar(50) NOT NULL,
  `quan_huyen` varchar(50) NOT NULL,
  `phuong_xa` varchar(50) NOT NULL,
  `dia_chi_cu_the` varchar(100) NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 1 COMMENT '0: Mặc định; 1: Bình thường '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `so_dia_chi`
--

INSERT INTO `so_dia_chi` (`id`, `id_khach_hang`, `ho_ten`, `email`, `so_dien_thoai`, `tinh_tp`, `quan_huyen`, `phuong_xa`, `dia_chi_cu_the`, `trang_thai`) VALUES
(6, 17, 'Nguyen Van A 123', 'abc@gmail.com', '0966480302', '92-Thành phố Cần Thơ', '918-Quận Bình Thuỷ', '31177-Phường An Thới', 'Hẻm 517, Trần Quang Diệu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khach_hang` (`id_khach_hang`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Indexes for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`,`id_khach_hang`),
  ADD KEY `id_khach_hang` (`id_khach_hang`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`,`id_khach_hang`,`id_san_pham`),
  ADD KEY `id_khach_hang` (`id_khach_hang`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ten_tai_khoan` (`ten_tai_khoan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `san_pham_ibfk_1` (`id_loai_hang`);

--
-- Indexes for table `so_dia_chi`
--
ALTER TABLE `so_dia_chi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khach_hang` (`id_khach_hang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `so_dia_chi`
--
ALTER TABLE `so_dia_chi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Constraints for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `chi_tiet_san_pham_ibfk_1` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_loai_hang`) REFERENCES `loai_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `so_dia_chi`
--
ALTER TABLE `so_dia_chi`
  ADD CONSTRAINT `so_dia_chi_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
