-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 12:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `id_order` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_order`, `id_product`, `soluong`) VALUES
(1, '1', 1, 1),
(2, '2', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `ma` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `hoten`, `dienthoai`, `diachi`, `ghichu`, `ma`, `email`, `tinhtrang`) VALUES
(1, 'quy', '0918680255', 'a', 'aaaa', 'TFBDG5', 'kieuhongquy@gmail.com', 0),
(2, 'quy', '0918680255', 'a', 'ádasdsad', 'G8JPJ4', 'kieuhongquy@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `ten`, `mota`, `noidung`, `type`, `tenkhongdau`, `img`) VALUES
(1, 'logo', '', '', 'logo', '', 'img/logo.png'),
(2, 'giohang', '', '', 'giohang', '', 'img/top_icon_cart.png'),
(3, 'icon', '', '', 'icon', '', 'img/top_icon_coupon.png'),
(4, 'sự kiện', '', '', 'su-kien', '', 'img/top_icon_event.png'),
(5, 'đơn hàng', '', '', 'don-hang', '', 'img/top_icon_truck.png'),
(6, 'sản phẩm yêu thích', '', '', 'san-pham-yeu-thich', '', 'img/top_icon_wish.png'),
(9, 'thông tin công ty\r\n', '', '<h1 style="margin: -6px 0px 0px; padding: 0px; border: 0px; background: rgb(247, 247, 247); font-family: Roboto, verdana, arial, &quot;맑은 고딕&quot;, MalgunGothic, 돋움, Dotum, 굴림, gulim, Helvetica, &quot;Apple SD Gothic Neo&quot;, sans-serif; font-size: 24px; color: rgb(34, 34, 34);">Chăm sóc khách hàng</h1>  <p class="mainService_lSide_num" style="margin: 0px; padding: 0px; border: 0px; background: rgb(247, 247, 247); font-family: Roboto, verdana, arial, &quot;맑은 고딕&quot;, MalgunGothic, 돋움, Dotum, Helvetica, &quot;Apple SD Gothic Neo&quot;, sans-serif; font-size: 24px; color: rgb(0, 104, 183);">028-5413 5756 (488)</p>  <p class="p_fax_1" style="margin: 0px; padding: 0px; border: 0px; background: rgb(247, 247, 247); font-family: Roboto, verdana, arial, &quot;맑은 고딕&quot;, MalgunGothic, 돋움, Dotum, Helvetica, &quot;Apple SD Gothic Neo&quot;, sans-serif; font-size: 18px; color: rgb(102, 102, 102);">Email : thubui@locknlock.com</p>  <ul class="mainService_lSide_work" style="margin: 0px; padding-right: 0px; padding-left: 0px; border: 0px; list-style: none; background: rgb(247, 247, 247); font-family: Roboto, verdana, arial, &quot;맑은 고딕&quot;, MalgunGothic, 돋움, Dotum, Helvetica, &quot;Apple SD Gothic Neo&quot;, sans-serif; font-size: 12px; color: rgb(102, 102, 102);"> 	<li style="margin: 0px; padding: 5px 0px 0px; border: 0px; vertical-align: middle; list-style: none; line-height: 17px; background: transparent;">Các ngày trong tuần</li> 	<li style="margin: 0px; padding: 5px 0px 0px; border: 0px; vertical-align: middle; list-style: none; line-height: 17px; background: transparent;">(Thứ Hai ~ Thứ Sáu) 09:00 ~ 18:00</li> 	<li style="margin: 0px; padding: 5px 0px 0px; border: 0px; vertical-align: middle; list-style: none; line-height: 17px; background: transparent;">Thứ bảy, chủ nhật và ngày lễ</li> </ul>', 'thong-tin', '', 'img/mainService_lSide_banner02.jpg'),
(10, 'Mạng Xã Hội >', '', '', 'mxh', '', 'img/mainService_rSide_middle.jpg'),
(11, 'CBHQ -BÌNH ĐỰNG NƯỚC LOCKLOCK BẰNG NHỰA PET HAP654', '', '', 'notice', '', ''),
(12, 'tin tức', '', '', 'bg-tintuc', '', 'img/untitled_1.png'),
(13, 'cart', '', '', 'bg-cart', '', 'img/20170101_1.png'),
(14, 'tên công ty', 'CÔNG TY TNHH LOCK&LOCK HCM\r\nGiấy CNĐKDN : 0309921077 –Ngày cấp :17/03/2010  ,  được sửa đổi lần thứ 08 ngày : 16/11/2015 được sửa đổi lần thứ\r\nCơ quan cấp : Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP.HCM\r\nĐịa chỉ đăng ký kinh doanh : 27487 77 Hoàng Văn Thái. Phường Tân Phú , Quận 7, TP HCM', '', 'thong-footer', '', 'img/footerLogo.png'),
(16, 'congthuong.png', '', '', 'bo-cong-thuong', '', 'img/congthuong.png'),
(17, 'Giới thiệu', '', '<div style="display:flex">\r\n<p class="imgA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 0px; float: left; width: 510px; height: 358px; color: rgb(102, 102, 102); font-family: "><img alt="" src="https://www.locknlock.com/eng/File/Details/RKPhwxa" style="margin: 0px; padding: 0px; border: none; vertical-align: top; width: 510px; height: 358px;" /></p>\r\n\r\n  <div class="infoA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 7px 0px 0px; float: right; width: 616px; color: rgb(102, 102, 102);padding-left:20px; font-family: ">\r\n<h3 style="margin: 0px; padding: 0px; font-size: 30px; color: rgb(51, 51, 51);">China Corporation</h3>\r\n\r\n<p class="txt" style="margin: 25px 0px 0px; padding: 27px 0px 0px; color: rgb(85, 85, 85); line-height: 24px; border-top: 1px solid rgb(225, 225, 225); white-space: pre-wrap;">To target China, the world’s largest market with a population of 1.4 billion, LOCK&LOCK has established corporations in 24 cities throughout China, including Beijing sales unit and Shenzhen sales unit with the start of Shanghai sales unit in 2004. As part of localizing strategy, we have built production unit in Weihei of Shandong and Manshan right after we entered the Chinese market. In 2007, we also have built a plant with the area of 95,000㎡ in Suzhou, Kiangsu, which is currently used as Chinese domestic base. LOCK&LOCK has successfully settled into the Chinese market through a variety of promotions and marketing using Korean celebrities and local opinion leaders and continue to carry out aggressive marketing. As a result, we have won the first place in China Brand Power Index (C-BPI) every year since 2012. LOCK&LOCK does not consider China as a simple production unit. It is a vital consumer base we plan to develop; therefore, we keep securing various distribution channels such as high-end department stores or large discount stores including directly managed stores. We have recently established a partnership with ‘Alibaba’, the largest IT company in China to keep up with the trend of Chinese rapidly growing online market. LOCK&LOCK is locating itself to be No.1 Kitchen Living Culture Corporation in China, the world’s largest consumer market.</p>\r\n</div>\r\n</div>', 'gioi-thieu', 'gioi-thieu', 'logo-8428.png'),
(18, 'Điều khoản', '', '<div style="display:flex">\r\n<p class="imgA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 0px; float: left; width: 510px; height: 358px; color: rgb(102, 102, 102); font-family: "><img alt="" src="https://www.locknlock.com/eng/File/Details/nhtJfkC" style="margin: 0px; padding: 0px; border: none; vertical-align: top; width: 510px; height: 358px;" /></p>\r\n\r\n  <div class="infoA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 7px 0px 0px; float: right; width: 616px; color: rgb(102, 102, 102);padding-left:20px; font-family: ">\r\n<h3 style="margin: 0px; padding: 0px; font-size: 30px; color: rgb(51, 51, 51);">Vietnam Corporation</h3>\r\n\r\n<p class="txt" style="margin: 25px 0px 0px; padding: 27px 0px 0px; color: rgb(85, 85, 85); line-height: 24px; border-top: 1px solid rgb(225, 225, 225); white-space: pre-wrap;">LOCK&LOCK has completed the construction of production plant with 70,000㎡ of area and 32,693㎡ of the total ground area in 2009 in Nhon Trach, Vietnam. With its price competitiveness and geographical advantage, we export to worldwide nations including ASEAN, Europe and North America. In addition, we are becoming a true comprehensive kitchen household items brand by completing the construction of Vung Tau Heat Resistant Glass Plant in 2011 and Vung Tau Cookware Plant in 2012, realizing the stable supply and demand and definite product quality through own manufacturing facilities. Vietnam is a core global production point of LOCK&LOCK and also an emerging market that connects to China. LOCK&LOCK has become the premium brand by opening our directly managed stores around shopping malls and luxurious department stores such as The Parkson or Vincom Center Shopping Mall based on advancing brand strategy at the early stage of market entry. We are currently targeting various other channels including large supermarkets such as Co-op Mart, Big C and Metro, home shopping, B2B, online shopping malls, keeping the annual sale on the upward direction.</p>\r\n</div>\r\n</div>\r\n', 'dieu-khoan', 'dieu-khoan', 'logo-8428.png'),
(19, 'Chính sách xử lý thông tin', '', '<div style="display:flex">\r\n<p class="imgA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 0px; float: left; width: 510px; height: 358px; color: rgb(102, 102, 102); font-family: "><img alt="" src="https://www.locknlock.com/eng/File/Details/nhtJfkC" style="margin: 0px; padding: 0px; border: none; vertical-align: top; width: 510px; height: 358px;" /></p>\r\n\r\n  <div class="infoA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 7px 0px 0px; float: right; width: 616px; color: rgb(102, 102, 102); padding-left:20px;font-family: ">\r\n<h3 style="margin: 0px; padding: 0px; font-size: 30px; color: rgb(51, 51, 51);">Vietnam Corporation</h3>\r\n\r\n<p class="txt" style="margin: 25px 0px 0px; padding: 27px 0px 0px; color: rgb(85, 85, 85); line-height: 24px; border-top: 1px solid rgb(225, 225, 225); white-space: pre-wrap;">LOCK&LOCK has completed the construction of production plant with 70,000㎡ of area and 32,693㎡ of the total ground area in 2009 in Nhon Trach, Vietnam. With its price competitiveness and geographical advantage, we export to worldwide nations including ASEAN, Europe and North America. In addition, we are becoming a true comprehensive kitchen household items brand by completing the construction of Vung Tau Heat Resistant Glass Plant in 2011 and Vung Tau Cookware Plant in 2012, realizing the stable supply and demand and definite product quality through own manufacturing facilities. Vietnam is a core global production point of LOCK&LOCK and also an emerging market that connects to China. LOCK&LOCK has become the premium brand by opening our directly managed stores around shopping malls and luxurious department stores such as The Parkson or Vincom Center Shopping Mall based on advancing brand strategy at the early stage of market entry. We are currently targeting various other channels including large supermarkets such as Co-op Mart, Big C and Metro, home shopping, B2B, online shopping malls, keeping the annual sale on the upward direction.</p>\r\n</div>\r\n</div>\r\n', 'chinh-sach', 'chinh-sach', 'logo-8428.png'),
(20, 'Từ chối thư rác', '', '<div style="display:flex">\r\n<p class="imgA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 0px; float: left; width: 510px; height: 358px; color: rgb(102, 102, 102); font-family: "><img alt="" src="https://www.locknlock.com/eng/File/Details/RKPhwxa" style="margin: 0px; padding: 0px; border: none; vertical-align: top; width: 510px; height: 358px;" /></p>\r\n\r\n<div class="infoA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 7px 0px 0px; float: right; width: 616px; color: rgb(102, 102, 102);padding-left:20px; font-family: ">\r\n<h3 style="margin: 0px; padding: 0px; font-size: 30px; color: rgb(51, 51, 51);">China Corporation</h3>\r\n\r\n<p class="txt" style="margin: 25px 0px 0px; padding: 27px 0px 0px; color: rgb(85, 85, 85); line-height: 24px; border-top: 1px solid rgb(225, 225, 225); white-space: pre-wrap;">To target China, the world’s largest market with a population of 1.4 billion, LOCK&LOCK has established corporations in 24 cities throughout China, including Beijing sales unit and Shenzhen sales unit with the start of Shanghai sales unit in 2004. As part of localizing strategy, we have built production unit in Weihei of Shandong and Manshan right after we entered the Chinese market. In 2007, we also have built a plant with the area of 95,000㎡ in Suzhou, Kiangsu, which is currently used as Chinese domestic base. LOCK&LOCK has successfully settled into the Chinese market through a variety of promotions and marketing using Korean celebrities and local opinion leaders and continue to carry out aggressive marketing. As a result, we have won the first place in China Brand Power Index (C-BPI) every year since 2012. LOCK&LOCK does not consider China as a simple production unit. It is a vital consumer base we plan to develop; therefore, we keep securing various distribution channels such as high-end department stores or large discount stores including directly managed stores. We have recently established a partnership with ‘Alibaba’, the largest IT company in China to keep up with the trend of Chinese rapidly growing online market. LOCK&LOCK is locating itself to be No.1 Kitchen Living Culture Corporation in China, the world’s largest consumer market.</p>\r\n</div>\r\n</div>\r\n', 'tu-choi-thu-rac', 'tu-choi-thu-rac', 'logo-8428.png'),
(21, 'Chăm sóc khách hàng', '', '<div style="display:flex">\r\n<p class="imgA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 0px; float: left; width: 510px; height: 358px; color: rgb(102, 102, 102); font-family: "><img alt="" src="https://www.locknlock.com/eng/File/Details/RKPhwxa" style="margin: 0px; padding: 0px; border: none; vertical-align: top; width: 510px; height: 358px;" /></p>\r\n\r\n<div class="infoA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 7px 0px 0px; float: right; width: 616px; color: rgb(102, 102, 102);padding-left:20px; font-family: ">\r\n<h3 style="margin: 0px; padding: 0px; font-size: 30px; color: rgb(51, 51, 51);">China Corporation</h3>\r\n\r\n<p class="txt" style="margin: 25px 0px 0px; padding: 27px 0px 0px; color: rgb(85, 85, 85); line-height: 24px; border-top: 1px solid rgb(225, 225, 225); white-space: pre-wrap;">To target China, the world’s largest market with a population of 1.4 billion, LOCK&LOCK has established corporations in 24 cities throughout China, including Beijing sales unit and Shenzhen sales unit with the start of Shanghai sales unit in 2004. As part of localizing strategy, we have built production unit in Weihei of Shandong and Manshan right after we entered the Chinese market. In 2007, we also have built a plant with the area of 95,000㎡ in Suzhou, Kiangsu, which is currently used as Chinese domestic base. LOCK&LOCK has successfully settled into the Chinese market through a variety of promotions and marketing using Korean celebrities and local opinion leaders and continue to carry out aggressive marketing. As a result, we have won the first place in China Brand Power Index (C-BPI) every year since 2012. LOCK&LOCK does not consider China as a simple production unit. It is a vital consumer base we plan to develop; therefore, we keep securing various distribution channels such as high-end department stores or large discount stores including directly managed stores. We have recently established a partnership with ‘Alibaba’, the largest IT company in China to keep up with the trend of Chinese rapidly growing online market. LOCK&LOCK is locating itself to be No.1 Kitchen Living Culture Corporation in China, the world’s largest consumer market.</p>\r\n</div>\r\n</div>\r\n', 'cham-soc-khach-hang', 'cham-soc-khach-hang', 'logo-8428.png'),
(22, 'Sơ đồ', '', '<div style="display:flex">\r\n<p class="imgA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 0px; float: left; width: 510px; height: 358px; color: rgb(102, 102, 102); font-family: "><img alt="" src="https://www.locknlock.com/eng/File/Details/RKPhwxa" style="margin: 0px; padding: 0px; border: none; vertical-align: top; width: 510px; height: 358px;" /></p>\r\n\r\n<div class="infoA" font-size:="" letter-spacing:="" malgun="" style="margin: 0px; padding: 7px 0px 0px; float: right; width: 616px; color: rgb(102, 102, 102);padding-left:20px; font-family: ">\r\n<h3 style="margin: 0px; padding: 0px; font-size: 30px; color: rgb(51, 51, 51);">China Corporation</h3>\r\n\r\n<p class="txt" style="margin: 25px 0px 0px; padding: 27px 0px 0px; color: rgb(85, 85, 85); line-height: 24px; border-top: 1px solid rgb(225, 225, 225); white-space: pre-wrap;">To target China, the world’s largest market with a population of 1.4 billion, LOCK&LOCK has established corporations in 24 cities throughout China, including Beijing sales unit and Shenzhen sales unit with the start of Shanghai sales unit in 2004. As part of localizing strategy, we have built production unit in Weihei of Shandong and Manshan right after we entered the Chinese market. In 2007, we also have built a plant with the area of 95,000㎡ in Suzhou, Kiangsu, which is currently used as Chinese domestic base. LOCK&LOCK has successfully settled into the Chinese market through a variety of promotions and marketing using Korean celebrities and local opinion leaders and continue to carry out aggressive marketing. As a result, we have won the first place in China Brand Power Index (C-BPI) every year since 2012. LOCK&LOCK does not consider China as a simple production unit. It is a vital consumer base we plan to develop; therefore, we keep securing various distribution channels such as high-end department stores or large discount stores including directly managed stores. We have recently established a partnership with ‘Alibaba’, the largest IT company in China to keep up with the trend of Chinese rapidly growing online market. LOCK&LOCK is locating itself to be No.1 Kitchen Living Culture Corporation in China, the world’s largest consumer market.</p>\r\n</div>\r\n</div>\r\n', 'so-do', 'so-do', 'logo-8428.png'),
(23, 'slider', '', '', 'slider', '', '900x350-4984.jpg'),
(24, 'slider', '', '', 'slider', '', 'binhgiunhietcolorfulbanner-2138.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `noibat` int(11) NOT NULL,
  `sanphammoi` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `banchay` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `tenkhongdau` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hienthi` int(11) NOT NULL,
  `nhanxet` text COLLATE utf8_unicode_ci NOT NULL,
  `qva` text COLLATE utf8_unicode_ci NOT NULL,
  `giaohang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `code`, `ten`, `gia`, `mota`, `noidung`, `noibat`, `sanphammoi`, `khuyenmai`, `banchay`, `id_list`, `id_cat`, `tenkhongdau`, `img`, `masp`, `hienthi`, `nhanxet`, `qva`, `giaohang`) VALUES
(1, 0, 'Bình nhựa đựng nước Lock& Lock dung tích 520 ml', 1900000, 'abc', '<p>Bộ Công an đề xuất rút thời hạn giấy phép lái xe của một số hạng xuống còn 5 năm thay vì 10 năm như hiện nay.</p>\r\n\r\n<p>Bộ Công an vừa ban hành dự thảo lần 5 Luật Bảo đảm trật tự, an toàn giao thông đường bộ.</p>\r\n\r\n<p>Trong dự thảo, đáng chú ý là đề xuất rút thời hạn giấy phép lái xe (GPLX) hạng B xuống còn 5 năm.</p>\r\n\r\n<p>Theo đó, khoản 9 Điều 46 của dự thảo quy định giấy phép lái xe hạng B, C, D1, D, BE, CE, D1E, DE có thời hạn 5 năm kể từ ngày cấp, giấy phép lái xe hạng A1, A2, A3 không thời hạn.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Rut thoi han GPLX 5 nam anh 1" src="https://znews-photo.zadn.vn/w660/Uploaded/qxwpzdjwp/2020_08_25/a_3_1_a.jpg" width="660" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GPLX hạng B2 hiện nay có thời hạn 10 năm kể từ ngày cấp. Ảnh: <em>V.P.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trao đổi với <em>Zing</em>, ông Nguyễn Văn Thanh, nguyên Chủ tịch Hiệp hội Vận tải ôtô Việt Nam, cho biết hiện nay GPLX hạng B1 có thời hạn đến khi tài xế đủ 55 tuổi đối với nữ và đủ 60 tuổi đối với nam; trường hợp lái xe trên 45 tuổi đối với nữ và trên 50 tuổi đối với nam thì GPLX có thời hạn 10 năm.</p>\r\n\r\n<p>GPLX hạng A4, B2 có thời hạn 10 năm. Các hạng GPLX ôtô khác có thời hạn 5 năm, tuy nhiên các hạng khác số lượng không nhiều mà chủ yếu là bằng lái hạng B1 và B2.</p>\r\n\r\n<p>“Ở một số quốc gia, quá trình đổi bằng lái cần phải trải qua việc học, sát hạch những điều luật mới và kiểm tra sức khỏe đối với tài xế. Nếu chúng ta đổi bằng lái mà chỉ đến làm thủ tục hoặc khám sức khỏe như hiện nay thì không phát huy hiệu quả”, ông Thanh nói.</p>\r\n\r\n<p>Ngoài ra, nguyên Chủ tịch Hiệp hội Vận tải ôtô Việt Nam cũng nhấn mạnh việc thay đổi thời hạn bằng lái sẽ có tác động đến hàng triệu người, nếu thực thi cần tính đến phương án giảm thủ tục, phiền hà cho người dân.</p>\r\n\r\n<p>Trong khi đó, theo ông Lương Duyên Thống, Vụ trưởng Vụ Phương tiện và Người lái thuộc Tổng cục Đường bộ Việt Nam, tại dự thảo Luật Giao thông đường bộ sửa đổi, Bộ GTVT đề xuất giữ nguyên thời hạn GPLX như hiện nay.</p>\r\n\r\n<p>Thông tin với <em>Zing</em> về việc thay đổi thời hạn GPLX, đại diện Cục CSGT (Bộ Công an) cho biết dự thảo Luật Bảo đảm trật tự, an toàn giao thông đường bộ đang trong quá trình xây dựng và tiếp thu ý kiến đóng góp của người dân và các chuyên gia. Thời gian tới, Bộ Công an sẽ cân nhắc những ý kiến đóng góp để tiếp tục hoàn thiện bộ luật này trước khi chính thức trình Chính phủ.</p>\r\n\r\n<p><strong><a href="https://zingnews.vn/video-uong-1-lon-bia-trong-tiec-tat-nien-tai-xe-khong-duoc-lai-xe-ca-nam-post1036628.html">Uống 1 lon bia trong tiệc tất niên, tài xế không được lái xe cả năm</a></strong> Uống 1 lon bia tài xế ở Quảng Nam có mức nồng độ cồn 0,042 mg/l khí thở. Người này bị CSGT lập biên bản xử phạt 2,5 triệu đồng, tước GPLX 11 tháng và giữ xe 7 ngày.</p>\r\n', 1, 1, 1, 1, 1, 1, 'binh-nhua-dung-nuoc-lock-lock-dung-tich-520-ml', '201817039046792-6172.jpg', 'hkmas123', 1, '<header class="the-article-header" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-size-adjust: 100%; float: left; width: 1000px; color: rgb(0, 0, 0); font-family: Arial, sans-serif;">\r\n<p class="the-article-category" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; text-transform: uppercase; font-family: Arial, Helvetica, sans-serif; letter-spacing: 1px;"><a class="parent_cate" href="https://zingnews.vn/the-gioi.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(136, 136, 136); cursor: pointer;" title="Thế giới">THẾ GIỚI</a> <a class="parent_cate" href="https://zingnews.vn/tu-lieu-the-gioi.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(136, 136, 136); cursor: pointer;" title="Tư liệu">TƯ LIỆU</a></p>\r\n\r\n<h1 class="the-article-title" letter-spacing:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 10px 0px; padding: 0px; border: 0px; font-size: 2.6em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; font-family: ">Bộ Nội vụ Cyprus viết gì về hồ sơ Pham Phu Quoc?</h1>\r\n\r\n<ul class="the-article-meta" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 15px 0px 8px; padding-right: 0px; padding-left: 0px; border: 0px; font-size: 0.85em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; list-style: none; float: left; width: 1000px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<li class="the-article-author" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; display: block; font-weight: bold; color: rgb(68, 68, 68); width: auto;"><a href="https://zingnews.vn/Nguy%E1%BB%85n-B%C3%A1-tim-kiem.html?type=3" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(34, 34, 34); cursor: pointer; display: inline-block;">Nguyễn Bá</a></li>\r\n	<li class="the-article-publish" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 10px; padding: 0px; border: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; display: block;">18:37 26/08/2020</li>\r\n</ul>\r\n</header>\r\n\r\n<section class="main" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px 340px 0px 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-size-adjust: 100%; float: left; width: 1000px; position: relative; color: rgb(0, 0, 0); font-family: Arial, sans-serif;">\r\n<p class="the-article-summary" clear:="" color:="" float:="" font-weight:="" line-height:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 0px 18px; padding: 0px; border: 0px; font-size: 1.1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; font-family: " width:="">Công văn Bộ Nội vụ Cyprus cho thấy vợ chồng ông Pham Phu Quoc đã nộp đơn xin cấp quốc tịch theo diện đặc cách vào năm 2018.</p>\r\n\r\n<div class="the-article-body" color:="" line-height:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 1.1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; width: 660px; position: relative; font-family: ">\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin-top: 0px !important; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: none; width: 660px;">Cụ thể, ngày 12/12/2018, Bộ Nội vụ Cyprus gửi đề xuất cho Hội đồng Bộ trưởng nước này về việc cấp quốc tịch Cyprus cho "bà Phan Dieu Phuong NGUYEN sinh năm 1969 tại Việt Nam còn chồng là ông Pham Phu Quoc sinh năm 1968 cũng tại Việt Nam".</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Cả hai vợ chồng xin quốc tịch theo diện “đầu tư vào bất động sản và phát triển các dự án cơ sở hạ tầng”.</p>\r\n\r\n<table align="center" class="picture gallery" style="text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 0.8em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; border-collapse: collapse; border-spacing: 0px; width: 660px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<tbody style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; width: 660px;">\r\n			<td class="pic" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px 0px 2px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative; overflow: hidden; width: 660px; cursor: pointer;">\r\n			<div class="photoset-item" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 1px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left;"><img alt="cyprus pham phu quoc anh 1" class="loaded" data-bind-event="true" data-title="cyprus phạm phú quốc ảnh 1" height="13366" slide-pos="1" src="https://znews-photo.zadn.vn/w660/Uploaded/liqpwivo/2020_08_26/quoc_1.jpg" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; max-width: 100%; display: block; height: 481px; width: 328px;" title="cyprus phạm phú quốc ảnh 1" width="9113" /></div>\r\n\r\n			<div class="photoset-item" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 1px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left;"><img alt="cyprus pham phu quoc anh 2" class="loaded" data-bind-event="true" data-title="cyprus phạm phú quốc ảnh 2" height="1358" original-width="329" slide-pos="2" src="https://znews-photo.zadn.vn/w660/Uploaded/liqpwivo/2020_08_26/Screen_Shot_2020_08_26_at_18.04.58.png" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; max-width: 100%; display: block; height: 481px; width: 329px;" title="cyprus phạm phú quốc ảnh 2" width="928" /></div>\r\n			</td>\r\n		</tr>\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; width: 660px;">\r\n			<td class="pCaption caption default-caption" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 5px 0px 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative; overflow: hidden; width: 660px;">\r\n			<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; display: inline;">Bản đề xuất xin cấp quốc tịch cho vợ chồng ông Pham Phu Quoc được Bộ Nội vụ Cyprus gửi Hội đồng Bộ trưởng nước này. Ảnh: <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Al Jazeera.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Bộ Nội vụ Cyprus dẫn luật: “Chiếu theo đoạn (2) điều 111A của Luật Lưu trữ Dân cư Cyprus, Hội đồng Bộ trưởng có thể xem xét cấp quốc tịch cho doanh nhân và nhà đầu tư nước ngoài có nguyện vọng nhập tịch Cyprus tùy vào trường hợp cụ thể”.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Bộ trưởng Nội vụ Cyprus cũng nói "bà Phan Dieu Phuong NGUYEN và chồng là ông Phu Quoc PHAM đáp ứng các tiêu chí và điều kiện do Hội đồng (Bộ trưởng) đề ra để được cấp quyền quốc tịch Cyprus đối với các nhà đầu tư nước ngoài và các thành viên gia đình của họ".</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Theo nội dung bản đề xuất, Bộ Tài chính Cyprus cũng đồng tình với trường hợp xin quốc tịch của vợ chồng ông Phạm Phú Quốc, với điều kiện là “đương đơn phải nộp cho Bộ Nội vụ mỗi năm một giấy chứng nhận tiến độ xây dựng của các công trình xây dựng và đầu tư trong và sau khi hoàn thành”.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Ở phần 7, Bộ Nội vụ có giải thích rằng “vì nội dung của đề xuất liên quan đến các vấn đề cá nhân nhạy cảm, được bảo vệ bởi Luật Bảo vệ Dữ liệu Cá nhân năm 2002-2012” nên thông tin “sẽ không được công khai dưới bất kỳ hình thức nào".</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Hồ sơ ông Pham Phu Quoc nằm trong những tài liệu mà <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Al Jazeera</em> thu thập được, tức "Hồ sơ Cyprus", bao gồm 1.471 đơn đăng ký, có tên của 2.544 người nhận được hộ chiếu Cyprus từ 2017 đến cuối năm 2019.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Những tài liệu mật cho thấy hàng chục quan chức cấp cao các nước đã mua "hộ chiếu vàng" của Cyprus từ 2017 cho đến cuối 2019.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Để có “hộ chiếu vàng”, người nộp đơn xin quốc tịch phải đầu tư một khoản ít nhất <abbr class="rate-usd quickview" data-content="2,5 triệu USD" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: 1px dashed rgb(187, 187, 187) !important; border-left: 0px; border-image: initial; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; white-space: nowrap;">2,5 triệu USD</abbr> vào Cyprus.</p>\r\n\r\n<table align="center" class="picture" style="text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 0.8em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; border-collapse: collapse; border-spacing: 0px; width: 660px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<tbody style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n			<td class="pic" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative; cursor: pointer;"><img alt="cyprus pham phu quoc anh 3" data-title="cyprus phạm phú quốc ảnh 3" src="https://znews-photo.zadn.vn/w660/Uploaded/liqpwivo/2020_08_26/Screen_Shot_2020_08_26_at_17.23.51.png" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; max-width: 100%; display: block; height: auto; width: 660px;" title="cyprus phạm phú quốc ảnh 3" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n</section>\r\n', '<header class="the-article-header" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-size-adjust: 100%; float: left; width: 1000px; color: rgb(0, 0, 0); font-family: Arial, sans-serif;">\r\n<p class="the-article-category" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; text-transform: uppercase; font-family: Arial, Helvetica, sans-serif; letter-spacing: 1px;"><a class="parent_cate" href="https://zingnews.vn/the-gioi.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(136, 136, 136); cursor: pointer;" title="Thế giới">THẾ GIỚI</a></p>\r\n\r\n<h1 class="the-article-title" letter-spacing:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 10px 0px; padding: 0px; border: 0px; font-size: 2.6em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; font-family: ">Mỹ trừng phạt 24 công ty Trung Quốc xây đảo nhân tạo ở Biển Đông</h1>\r\n\r\n<ul class="the-article-meta" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 15px 0px 8px; padding-right: 0px; padding-left: 0px; border: 0px; font-size: 0.85em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; list-style: none; float: left; width: 1000px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<li class="the-article-author" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; display: block; font-weight: bold; color: rgb(68, 68, 68); width: auto;"><a href="https://zingnews.vn/Thanh-Danh-tim-kiem.html?type=3" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(34, 34, 34); cursor: pointer; display: inline-block;">Thanh Danh</a></li>\r\n	<li class="the-article-publish" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 10px; padding: 0px; border: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; display: block;">20:16 26/08/2020</li>\r\n</ul>\r\n</header>\r\n\r\n<section class="main" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px 340px 0px 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-size-adjust: 100%; float: left; width: 1000px; position: relative; color: rgb(0, 0, 0); font-family: Arial, sans-serif;">\r\n<p class="the-article-summary" clear:="" color:="" float:="" font-weight:="" line-height:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 0px 18px; padding: 0px; border: 0px; font-size: 1.1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; font-family: " width:="">Chính phủ Mỹ ngày 26/8 thông báo sẽ trừng phạt 24 công ty và nhiều cá nhân của Trung Quốc có liên quan đến hoạt động xây dựng và quân sự hóa trên Biển Đông.</p>\r\n\r\n<div class="the-article-body" color:="" line-height:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 1.1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; width: 660px; position: relative; font-family: ">\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin-top: 0px !important; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: none; width: 660px;">Bộ Thương mại <a class="topic location autolink quickview" href="https://zingnews.vn/tieu-diem/hop-chung-quoc-hoa-ky.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(0, 72, 97); cursor: pointer; white-space: nowrap; border-bottom: 0px !important;" topic-id="3909">Mỹ</a> thông báo 24 công ty đã "hỗ trợ <a class="topic location autolink quickview" href="https://zingnews.vn/tieu-diem/trung-quoc.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(0, 72, 97); cursor: pointer; white-space: nowrap; border-bottom: 0px !important;" topic-id="3906">Trung Quốc</a> trong các hoạt động xây dựng quân sự và quân sự hóa bị quốc tế lên án tại các đảo nhân tạo trên Biển Đông", theo <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Reuters.</em></p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Trong tuyên bố riêng, Bộ Ngoại giao Mỹ cho biết sẽ áp lệnh hạn chế thị thực cho một số cá nhân Trung Quốc "chịu trách nhiệm hoặc đồng lõa" với những hành động này trên Biển Đông.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">"Hôm nay, Bộ Ngoại giao sẽ bắt đầu hạn chế thị thực đối với một số cá nhân Trung Quốc chịu trách nhiệm hoặc đồng lõa với việc cải tạo quy mô lớn, xây dựng hoặc quân sự hóa những tiền đồn bị phản đối trên Biển Đông, hoặc liên quan đến việc Trung Quốc cưỡng ép các bên tranh chấp Đông Nam Á ngăn cản tiếp cận tài nguyên xa bờ", Ngoại trưởng Mike Pompeo nhấn mạnh trong thông cáo cùng ngày.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">"Những cá nhân này từ giờ sẽ không được nhập cảnh vào Mỹ, và người trong cùng gia đình của họ cũng chịu lệnh hạn chế thị thực tương tự", ông Pompeo tuyên bố.</p>\r\n\r\n<table align="center" class="picture" style="text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 0.8em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; border-collapse: collapse; border-spacing: 0px; width: 660px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<tbody style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n			<td class="pic" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative; cursor: pointer;"><img alt="My trung phat 24 cong ty Trung Quoc anh 1" data-bind-event="true" data-title="Mỹ trừng phạt 24 công ty Trung Quốc ảnh 1" slide-pos="1" src="https://znews-photo.zadn.vn/w660/Uploaded/jgtnrz/2020_08_26/Quan_su_hoa_1.jpg" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; max-width: 100%; display: block; height: auto; width: 660px;" title="Mỹ trừng phạt 24 công ty Trung Quốc ảnh 1" /></td>\r\n		</tr>\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n			<td class="pCaption caption" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 5px 0px 8px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative;">Tàu Trung Quốc hoạt động tại đá Vành Khăn, nơi nước này chiếm đóng trái phép trên quần đảo Trường Sa của Việt Nam và xây dựng đảo nhân tạo trái phép từ năm 2015. Ảnh: <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Hải quân Mỹ.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Các công ty Trung Quốc sẽ bị đưa vào "danh sách đen", hạn chế công ty Mỹ cung cấp công nghệ có nguồn gốc Mỹ cho những công ty bị trừng phạt nếu không có giấy phép từ Bộ Thương mại.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">"Những pháp nhân được nêu tên hôm nay đã đóng vai trò đáng kể trong việc xây dựng mang tính khiêu khích của Trung Quốc ở các đảo nhân tạo và cần phải chịu trách nhiệm", Bộ trưởng Thương mại Mỹ Wilbur Ross thông báo trên Twitter.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Ông Ross nhấn mạnh "Mỹ, các láng giềng của Trung Quốc và cộng đồng quốc tế đã phản đối những tuyên bố chủ quyền trên Biển Đông" của Bắc Kinh và lên án việc xây dựng đảo nhân tạo vì mục đích quân sự.</p>\r\n</div>\r\n</section>\r\n', '<header class="the-article-header" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-size-adjust: 100%; float: left; width: 1000px; color: rgb(0, 0, 0); font-family: Arial, sans-serif;">\r\n<p class="the-article-category" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; text-transform: uppercase; font-family: Arial, Helvetica, sans-serif; letter-spacing: 1px;"><a class="parent_cate" href="https://zingnews.vn/xuat-ban.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(136, 136, 136); cursor: pointer;" title="Xuất bản">XUẤT BẢN</a> <a class="parent_cate" href="https://zingnews.vn/tin-tuc-xuat-ban.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(136, 136, 136); cursor: pointer;" title="Xuất bản">XUẤT BẢN</a></p>\r\n\r\n<h1 class="the-article-title" letter-spacing:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 10px 0px; padding: 0px; border: 0px; font-size: 2.6em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; font-family: ">''Trại hoa vàng'' được dựng nhạc kịch</h1>\r\n\r\n<ul class="the-article-meta" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 15px 0px 8px; padding-right: 0px; padding-left: 0px; border: 0px; font-size: 0.85em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; list-style: none; float: left; width: 1000px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<li class="the-article-author" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 3px 0px 0px; padding: 0px; border: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; display: block; font-weight: bold; color: rgb(68, 68, 68); width: auto;"><a href="https://zingnews.vn/Y-Nguy%C3%AAn-tim-kiem.html?type=3" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(34, 34, 34); cursor: pointer; display: inline-block;">Y Nguyên</a></li>\r\n	<li class="the-article-publish" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 10px; padding: 0px; border: 0px; font-size: 13.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; display: block;">20:42 26/08/2020</li>\r\n</ul>\r\n</header>\r\n\r\n<section class="main" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px 340px 0px 0px; border: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-size-adjust: 100%; float: left; width: 1000px; position: relative; color: rgb(0, 0, 0); font-family: Arial, sans-serif;">\r\n<p class="the-article-summary" clear:="" color:="" float:="" font-weight:="" line-height:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px 0px 18px; padding: 0px; border: 0px; font-size: 1.1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; font-family: " width:="">Các nghệ sĩ Nhà hát Tuổi trẻ đưa tác phẩm của Nguyễn Nhật Ánh lên sân khấu. Dự kiến, nhạc kịch được công diễn vào tháng 9.</p>\r\n\r\n<div class="the-article-body" color:="" line-height:="" noto="" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 1.1em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: left; width: 660px; position: relative; font-family: ">\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin-top: 0px !important; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; float: none; width: 660px;">Thông tin từ Nhà hát Tuổi trẻ cho biết vở <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Trại hoa vàng</em> sẽ được công diễn vào 20h ngày 13/9 tại Hà Nội. Nhạc kịch được chuyển thể từ truyện dài cùng tên của nhà văn <a class="topic person autolink quickview" href="https://zingnews.vn/tieu-diem/nguyen-nhat-anh.html" style="box-sizing: border-box; text-rendering: geometricprecision; outline: none; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-decoration-line: none; color: rgb(0, 72, 97); cursor: pointer; white-space: nowrap; border-bottom: 1px dashed rgb(187, 187, 187);" topic-id="3902">Nguyễn Nhật Ánh</a>.</p>\r\n\r\n<table align="left" class="picture" style="text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 10px 20px 18px 0px; padding: 0px; border: 0px; font-size: 0.8em; vertical-align: baseline; background: transparent; text-size-adjust: 100%; border-collapse: collapse; border-spacing: 0px; width: 330px; font-family: sans-serif; color: rgb(136, 136, 136);">\r\n	<tbody style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n			<td class="pic" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative; cursor: pointer;"><img alt="Trai hoa vang anh 1" src="https://znews-photo.zadn.vn/w660/Uploaded/oplukaa/2020_08_26/117445144_3532136500131018_6507536746070915755_n.jpg" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; max-width: 100%; display: block; height: auto; width: 330px;" title="Trại hoa vàng ảnh 1" /></td>\r\n		</tr>\r\n		<tr style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">\r\n			<td class="pCaption caption" style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 5px 0px 8px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; position: relative;">\r\n			<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%; display: inline;">Bìa sách <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Trại hoa vàng</em>. Nguồn: <em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 14.08px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">NXB Trẻ</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Tác phẩm do đạo diễn Lê Ánh Tuyết dàn dựng, biên kịch Hoàng Trang, giám đốc âm nhạc Huyền Trung. Các diễn viên Quang Trọng, Yến My, Hoàng Du Ka, Ngô Lệ Quyên… tham gia nhạc kịch.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Nhân vật chính của<em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;"> Trại hoa vàng</em> là Chuẩn - người yêu thích hoa, đã trồng cho mình một vườn hoa vàng. Chuẩn vốn là học sinh không thông minh, nhưng bất ngờ thi đỗ vào trường cấp 3 danh tiếng.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Câu chuyện xoay quanh tình yêu tuổi mới lớn của Chuẩn. Tác phẩm cũng đề cập những ước mơ, hoài bão của người trẻ khi đứng trước ngã rẽ cuộc đời.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Khi được chuyển thể thành nhạc kịch, tác phẩm này dành cho giới trẻ với chủ đề hướng nghiệp.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Thông tin trên trang web của Nhà hát Tuổi trẻ cho biết: “Đam mê là khởi nguồn của mọi ước mơ. Vở diễn là những ngày tháng vui buồn, nghịch ngợm, ngây ngô của tuổi học trò nhưng cũng đầy ý nghĩa khi chúng ta đã vượt qua mọi khó khăn để có con đường đi riêng cho mình”.</p>\r\n\r\n<p style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 18px 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;"><em style="box-sizing: border-box; text-rendering: geometricprecision; outline: 0px; -webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border: 0px; font-size: 17.6px; vertical-align: baseline; background: transparent; text-size-adjust: 100%;">Trại hoa vàng</em> được xuất bản lần đầu năm 1994, là một trong nhiều truyện về tình yêu tuổi ô mai của Nguyễn Nhật Ánh. Tác phẩm chinh phục bạn đọc với giọng văn hóm hỉnh, hài hước. Ẩn sau câu chuyện ngây ngô của tuổi học trò là thông điệp ý nghĩa gửi người trẻ.</p>\r\n</div>\r\n</section>\r\n'),
(2, 0, 'Bình nước nhựa Lock&Lock 430ml', 260000, '', '', 1, 1, 1, 1, 1, 1, 'binh-nuoc-nhua-locklock-430ml', 'img/201817036880419.jpg', '', 1, '', '', ''),
(3, 0, 'Bình đựng nước Lock&Lock Eco Water Bottle 550ml', 146000, '', '', 1, 1, 1, 1, 1, 1, 'binh-dung-nuoc-locklock-eco-water-bottle-550ml', 'img/201817034804743.jpg', '', 1, '', '', ''),
(4, 0, 'Bình lắc SHAKE IT L&L, 600ml - Màu xanh dương', 230000, '', '', 1, 1, 1, 1, 1, 1, 'binh-lac-shake-it-ll-600ml-mau-xanh-duong', 'img/201834653628044.JPG', '', 1, '', '', ''),
(5, 0, 'Bình Đựng Nước Lock&Lock Ice Bottle HLC568 (550ml)', 95000, '', '', 1, 1, 1, 1, 1, 1, 'binh-dung-nuoc-locklock-ice-bottle-hlc568-550ml', 'img/201817041087790.jpg', '', 1, '', '', ''),
(6, 0, 'Bình lắc SHAKE IT L&L, 600ml - Màu hồng', 230000, '', '', 0, 0, 1, 1, 1, 2, 'binh-lac-shake-it-ll-600ml-mau-hong', 'img/201834656686569.JPG', '', 1, '', '', ''),
(7, 0, 'Chảo sâu lòng Cookplus Hard&Light 32cm, W/Coating inside Okitsumo (Sử dụng bếp từ)', 520000, '', '', 0, 0, 1, 0, 0, 0, 'chao-sau-long-cookplus-hardlight-32cm-wcoating-inside-okitsumo-su-dung-bep-tu', '201825359631506-412.jpg', '', 1, '', '', ''),
(8, 0, 'Chảo Cookplus Hard&Light 28cm, W/Coating inside Okitsumo (Có thể sử dụng bếp từ)', 520000, '', '', 1, 0, 1, 0, 1, 2, 'chao-cookplus-hardlight-28cm-wcoating-inside-okitsumo-co-the-su-dung-bep-tu', 'img/201825359631506.jpg', '', 1, '', '', ''),
(9, 0, 'Chảo sâu lòng Cookplus Hard&Light 26cm,W/Coating inside Okitsumo (Sử dụng bếp từ)', 500000, '', '', 1, 0, 1, 0, 1, 2, 'chao-sau-long-cookplus-hardlight-26cmwcoating-inside-okitsumo-su-dung-bep-tu', 'img/201825359631772.jpg', '', 1, '', '', ''),
(10, 0, 'Chảo sâu lòng Cookplus Hard&Light 30cm,W/Coating inside Okitsumo (Sử dụng bếp từ)', 590000, '', '', 0, 0, 1, 0, 2, 0, 'chao-sau-long-cookplus-hardlight-30cmwcoating-inside-okitsumo-su-dung-bep-tu', 'img/201825359631044.jpg', '', 1, '', '', '');
INSERT INTO `product` (`id`, `code`, `ten`, `gia`, `mota`, `noidung`, `noibat`, `sanphammoi`, `khuyenmai`, `banchay`, `id_list`, `id_cat`, `tenkhongdau`, `img`, `masp`, `hienthi`, `nhanxet`, `qva`, `giaohang`) VALUES
(11, 0, 'Chảo Cookplus Hard&Light 30cm, W/Coating inside Okitsumo (Có thể sử dụng bếp từ)', 550000, '', '', 0, 0, 1, 0, 2, 0, 'chao-cookplus-hardlight-30cm-wcoating-inside-okitsumo-co-the-su-dung-bep-tu', 'img/201825359631992.jpg', '', 1, '', '', ''),
(12, 0, 'Chảo sâu lòng Cookplus Hard&Light 28cm, W/Coating inside Okitsumo (Sử dụng bếp từ)', 560000, '', '', 0, 0, 1, 0, 2, 0, 'chao-sau-long-cookplus-hardlight-28cm-wcoating-inside-okitsumo-su-dung-bep-tu', 'img/201825359631114.jpg', '', 0, '', '', ''),
(13, 0, 'Nồi chiên không dầu thương hiệu LOCK&LOCK, 220-240V, 1500W, 4L - Màu trắng (EJF376WHT)', 4500000, '', '', 0, 0, 1, 0, 2, 0, 'noi-chien-khong-dau-thuong-hieu-locklock-220240v-1500w-4l-mau-trang-ejf376wht', 'img/201835438430430.JPG', '', 0, '', '', ''),
(14, 0, 'Nồi cơm điện thương hiệu Lock&Lock 220V, 860W, 50/60Hz, 1.8L(5L) - Màu nâu', 2770000, '', '', 0, 0, 1, 0, 2, 0, 'noi-com-dien-thuong-hieu-locklock-220v-860w-5060hz-18l5l-mau-nau', 'img/201913439724209.jpg', '', 0, '', '', ''),
(15, 0, 'Ấm Điện Thủy Tinh Siêu Tốc Có Điều Chỉnh Nhiệt Độ Lock&Lock EJK341 (1.8L)', 1020000, '', '', 0, 0, 1, 0, 3, 0, 'am-dien-thuy-tinh-sieu-toc-co-dieu-chinh-nhiet-do-locklock-ejk341-18l', 'img/201828950486960.jpg', '', 0, '', '', ''),
(16, 0, 'Máy ép trái cây tốc độ cao, hiệu L&L, 220V, 50Hz,600W, 292*237*384mm', 2678000, '', '', 0, 0, 1, 0, 3, 0, 'may-ep-trai-cay-toc-do-cao-hieu-ll-220v-50hz600w-292237384mm', 'img/201821953428453.jpg', '', 0, '', '', ''),
(17, 0, 'Máy pha café hiệu Lock&Lock - ELCM-202 (0.3L)', 1369000, '', '', 0, 0, 1, 0, 3, 0, 'may-pha-cafe-hieu-locklock-elcm202-03l', 'img/201816557430172.jpg', '', 0, '', '', ''),
(18, 0, 'Máy Xay Trộn Đa Năng Lock&Lock ELHB-220 (420W)', 2400000, '', '', 0, 0, 1, 0, 3, 0, 'may-xay-tron-da-nang-locklock-elhb220-420w', 'img/201816553664694.jpg', '', 0, '', '', ''),
(19, 0, 'Bộ 2 Hộp Bảo Quản Lock&Lock Special W/Flip Lid HPL700S2 (5L/Hộp)', 546000, '', '', 0, 0, 1, 0, 3, 0, 'bo-2-hop-bao-quan-locklock-special-wflip-lid-hpl700s2-5lhop', 'img/201814857271583.jpg', '', 0, '', '', ''),
(20, 0, 'Bộ 5 Hộp Bảo Quản Thủy Tinh Tròn Lock&Lock Glass Euro LLG821S5', 748000, '', '', 0, 0, 1, 0, 3, 0, 'bo-5-hop-bao-quan-thuy-tinh-tron-locklock-glass-euro-llg821s5', 'img/201814855698263.jpg', '', 0, '', '', ''),
(21, 0, 'Bộ 8 hộp Interlock (INL301W*4, INL302W*4)', 440000, '', '', 0, 0, 1, 0, 3, 0, 'bo-8-hop-interlock-inl301w4-inl302w4', 'img/201834559498345.jpg', '', 0, '', '', ''),
(22, 0, 'Bộ 4 Hộp Bảo Quản Thủy Tinh Lock&Lock Glass Euro LLG428S4', 847000, '', '', 0, 0, 1, 0, 3, 0, 'bo-4-hop-bao-quan-thuy-tinh-locklock-glass-euro-llg428s4', 'img/201814854694650.jpg', '', 0, '', '', ''),
(23, 0, 'Bộ 5 hộp thủy tinh hình vuông L&L Euro Steam Hole (LLG224T*2, LLG234T*1,LLG214T*2)', 999000, '', '', 0, 0, 1, 0, 3, 0, 'bo-5-hop-thuy-tinh-hinh-vuong-ll-euro-steam-hole-llg224t2-llg234t1llg214t2', 'img/201814233904694.jpg', '', 0, '', '', ''),
(24, 0, 'Combo 10 Hộp Nhựa Bisfree Table Top Lock&Lock LBF631S10', 1530000, '', '', 0, 0, 1, 0, 3, 0, 'combo-10-hop-nhua-bisfree-table-top-locklock-lbf631s10', 'img/201806161182366.jpg', '', 0, '', '', ''),
(25, 0, 'LHC1448PIK - Bình nước giữ nhiệt Lock&Lock City Vacuum Bottle (Olympic) Montreal 700ml - Màu hồng', 482000, '', '', 0, 0, 1, 0, 4, 0, 'lhc1448pik-binh-nuoc-giu-nhiet-locklock-city-vacuum-bottle-olympic-montreal-700ml-mau-hong', 'img/201900755110529.jpg', '', 0, '', '', ''),
(26, 0, 'LHC8029- Hộp cơm giữ nhiệt thương hiệu Lock & Lock, 500ml (Màu đỏ, xanh, đen)', 515000, '', '', 0, 0, 1, 0, 4, 0, 'lhc8029-hop-com-giu-nhiet-thuong-hieu-lock-lock-500ml-mau-do-xanh-den', 'img/201913559744948.jpg', '', 0, '', '', ''),
(27, 0, 'Bình giữ nhiệt bằng thép không gỉ Lock&Lock Loop Tumbler 620ml', 450000, '', '', 1, 0, 1, 0, 4, 0, 'binh-giu-nhiet-bang-thep-khong-gi-locklock-loop-tumbler-620ml', 'img/201822947975749.jpg', '', 1, '', '', ''),
(28, 0, 'Bình giữ nhiệt bằng thép không gỉ Lock&Lock Clip Tumbler 540ml', 460000, '', '', 1, 0, 1, 0, 4, 0, 'binh-giu-nhiet-bang-thep-khong-gi-locklock-clip-tumbler-540ml', 'img/201822947766590.jpg', '', 1, '', '', ''),
(29, 0, 'Bình giữ nhiệt bằng thép không gỉ Lock&Lock Cylinder Bottle 600ml Màu bạc', 524000, '', '', 1, 0, 1, 0, 4, 0, 'binh-giu-nhiet-bang-thep-khong-gi-locklock-cylinder-bottle-600ml-mau-bac', 'img/201822947766937.jpg', '', 1, '', '', ''),
(30, 0, 'Bình giữ nhiệt bằng thép không gỉ Lock&Lock Bumper Bottle 650ml Màu bạc', 513000, '', '', 1, 0, 1, 0, 4, 0, 'binh-giu-nhiet-bang-thep-khong-gi-locklock-bumper-bottle-650ml-mau-bac', 'img/201822947765081.jpg', '', 1, '', '', ''),
(31, 0, 'Bộ 6 Sản Phẩm Lock&Lock LHC4119BSH606', 1775000, '', '', 1, 0, 1, 0, 4, 0, 'bo-6-san-pham-locklock-lhc4119bsh606', 'img/201814861148412.jpg', '', 1, '', '', ''),
(32, 0, 'Bộ túi hộp cơm thủy tinh L&L 4EA  (LLG422*3, HWB801WN-B-0*1) - Màu Wine', 620000, '', '', 1, 0, 1, 0, 4, 0, 'bo-tui-hop-com-thuy-tinh-ll-4ea-llg4223-hwb801wnb01-mau-wine', 'img/201829053857496.jpg', '', 1, '', '', ''),
(33, 0, 'Bộ Túi Hộp Cơm Lock&Lock Triangle Pattern Bag - 470*470*300 ml', 430000, '', '', 1, 0, 1, 0, 4, 0, 'bo-tui-hop-com-locklock-triangle-pattern-bag-470470300-ml', 'img/201814153156395.jpg', '', 1, '', '', ''),
(34, 0, 'Bộ Túi Hộp Cơm Thủy Tinh Lock&Lock 4EA LLG224I3 (750ml)', 879000, '', '', 1, 0, 1, 0, 5, 0, 'bo-tui-hop-com-thuy-tinh-locklock-4ea-llg224i3-750ml', 'img/201814150559907.jpg', '', 1, '', '', ''),
(35, 0, 'Bộ 3 Hộp Cơm Giữ Nhiệt Lock&Lock Mushroom LHC8025SLV - Bạc', 870000, '', '', 1, 0, 1, 0, 5, 0, 'bo-3-hop-com-giu-nhiet-locklock-mushroom-lhc8025slv-bac', 'img/201806157274562.jpg', '', 1, '', '', ''),
(36, 0, 'LHC8031SLV-OCH - Bộ hộp cơm giữ nhiệt L&L bằng thép không gỉ -460ml*1, 420ml*1, 280ml*1, đũa*1, túi', 1112000, '', '', 1, 0, 1, 0, 2, 0, 'lhc8031slvoch-bo-hop-com-giu-nhiet-ll-bang-thep-khong-gi-460ml1-420ml1-280ml1-dua1-tui', 'img/201914957458521.jpg', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE IF NOT EXISTS `product_cat` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `ten` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`id`, `id_list`, `ten`, `tenkhongdau`) VALUES
(1, 1, 'Hộp kín hơi', 'hop_kin_hoi'),
(2, 1, 'Hộp nhựa', 'hop_nhua'),
(3, 2, 'Chảo/chảo sâu lòng', 'Chao-chao_sau_long'),
(4, 2, 'Nồi chảo/Nồi áp suât', 'Noi_chao-Noi_ap_suat'),
(5, 2, 'Dùng cho lò nướng', 'Dung_cho_lo_nuong'),
(6, 2, 'Dụng cụ trộn thực phẩm', 'Dung_cu_tron_thuc_pham'),
(7, 2, 'Khay/rỗ', 'khay-ro'),
(8, 2, 'Dụng cụ nhà bếp/ khay gắp', 'Dung_cu_nha_bep-khay_gap'),
(9, 2, 'Dao/kéo', 'dao-keo'),
(10, 2, 'Thớt', 'thot'),
(11, 3, 'Bình nước', 'binh_nuoc'),
(12, 3, 'ly/cốc', 'Ly-coc'),
(13, 3, 'Đế nồi', 'De_noi'),
(14, 3, 'khay', 'khay'),
(15, 3, 'ẤM đun nước', 'am_dun_nuoc'),
(16, 3, 'Dụng cụ vệ sinh', 'Dung_cu_ve_sinh'),
(17, 3, 'Đồ rửa chén', 'Do_rua_chen'),
(18, 3, 'Dụng cụ làm đá', 'Dung_cu_lam_da'),
(19, 3, 'Dụng cụ nấu ăn', 'Dung_cu_nau_an'),
(20, 3, 'Giá/kệ', 'gia-ke'),
(21, 3, 'Hàng dùng một lần', 'Hang_dung_mot_lan'),
(22, 3, 'Dụng cụ bảo quản tủ lạnh', 'Dung_cu_bao_quan_tu_lanh'),
(23, 4, 'Bình nước', 'Binh_nuoc'),
(24, 4, 'Hộp cơm', 'Hop_com'),
(25, 4, 'Đồ dùng du lịch', 'Do_dung_du_lich'),
(26, 4, 'Đồ dùng cắm trại', 'do_dung_cam_trai'),
(27, 4, 'Hộp cơm giữ nhiệt', 'Hop_com_giu_nhiet'),
(28, 4, 'Hộp đựng cháo', 'Hop_dung_chao'),
(29, 4, 'Bình giữ nhiệt', 'Binh_giu_nhiet'),
(30, 4, 'Túi chờm lạnh', 'Tui_chom_lanh'),
(32, 5, 'Thùng đựng đồ', 'Thung_dung_do'),
(33, 5, 'Giỏ', 'Gio'),
(34, 5, 'kệ tủ', 'ke_tu'),
(35, 5, 'kệ kéo', 'ke_keo'),
(36, 5, 'dụng cụ nhà tắm', 'Dung_cu_nha_tam'),
(37, 5, 'Thùng rác', 'thung_rac'),
(38, 5, 'móc/kệ treo đồ', 'moc-ke_trao_do'),
(39, 5, 'cây lau nhà', 'cay_lau_nha'),
(40, 6, 'Thiết bị nhà bếp', 'thiet_bi_nha_bep'),
(41, 6, 'thiết bị gia dụng', 'Thiet_bi_gia_dung'),
(42, 7, 'Dụng cụ uống sữa', 'Dung_cu_uong_sua'),
(43, 7, 'Đồ dùng cho bé', 'Do_dung_cho_be'),
(44, 7, 'DỤng cụ vệ sinh cho bé', 'Dung_cu_ve_sinh_cho_be'),
(45, 7, 'Thảm cho bé', 'Tham_cho_be'),
(46, 8, 'Bàn đa năng', 'Ban_da_nang');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE IF NOT EXISTS `product_img` (
`id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `id_product`, `img`, `stt`) VALUES
(77, 1, '201806157274562-2627.jpg', 0),
(78, 1, '201806161182366-320.jpg', 0),
(79, 1, '201814150559907-7197.jpg', 0),
(80, 1, '201814153156395-4258.jpg', 0),
(81, 36, '2019149574585211-9010.jpg', 0),
(82, 36, '2019149574585212-5483.jpg', 0),
(83, 36, '2019149574585213-4312.jpg', 0),
(84, 36, '2019149574585214-8193.jpg', 0),
(85, 35, '2018061572745621-5398.jpg', 0),
(86, 35, '2018061572745622-4874.jpg', 0),
(87, 35, '2018061572745623-2539.jpg', 0),
(88, 34, '2018141505599071-5735.jpg', 0),
(89, 34, '2018141505599072-2973.jpg', 0),
(90, 34, '2018141505599073-8346.jpg', 0),
(91, 34, '2018141505599074-6972.jpg', 0),
(92, 31, '2018148611484122-7825.jpg', 0),
(93, 31, '2018148611484123-3654.jpg', 0),
(94, 31, '2018148611484124-2229.jpg', 0),
(95, 28, '2020062516755351-2524.jpg', 0),
(96, 28, '2020062516755352-3259.jpg', 0),
(97, 27, '2020062380608061-7740.jpg', 0),
(98, 27, '2020062380608062-6468.jpg', 0),
(99, 26, '2019135593563921-8432.jpg', 0),
(100, 26, '2019135593563922-2541.jpg', 0),
(101, 26, '2019135593563923-248.jpg', 0),
(102, 26, '2019135593563924-1228.jpg', 0),
(103, 25, '2019007551105291-8955.jpg', 0),
(104, 25, '2019007551105292-2624.jpg', 0),
(105, 25, '2019007551105293-2920.jpg', 0),
(106, 25, '2019007551105294-4504.jpg', 0),
(107, 21, '2018345594983451-1833.jpg', 0),
(108, 21, '2018345594983452-5570.jpg', 0),
(109, 21, '2018345594983453-4384.jpg', 0),
(110, 19, '2018148572715831-698.jpg', 0),
(111, 18, '2018165536646941-4697.jpg', 0),
(112, 18, '2018165536646942-2744.jpg', 0),
(113, 18, '2018165536646943-6960.jpg', 0),
(114, 18, '2018165536646944-7438.jpg', 0),
(115, 17, '2018165574301721-730.jpg', 0),
(116, 17, '2018165574301722-8030.jpg', 0),
(117, 17, '2018165574301723-9383.jpg', 0),
(118, 15, '2018289504869601-4949.jpg', 0),
(119, 15, '2018289504869602-9778.jpg', 0),
(120, 15, '2018289504869603-3307.jpg', 0),
(121, 15, '2018289504869604-9679.jpg', 0),
(122, 14, '2019134397242091-2091.jpg', 0),
(123, 14, '2019134397242092-6769.jpg', 0),
(124, 14, '2019134397242093-5802.jpg', 0),
(125, 13, '2018354384304301-4172.jpg', 0),
(126, 13, '2018354384304302-5895.jpg', 0),
(127, 13, '2018354384304303-1910.jpg', 0),
(128, 2, '2018170368804191-7039.jpg', 0),
(129, 2, '2018170368804192-4338.jpg', 0),
(130, 2, '2018170368804193-5119.jpg', 0),
(131, 3, '2018170348047431-5303.jpg', 0),
(132, 3, '2018170348047432-3248.jpg', 0),
(133, 3, '2018170348047433-8786.jpg', 0),
(134, 3, '2018170348047434-6001.jpg', 0),
(135, 4, '2018346537622601-5726.jpg', 0),
(136, 4, '2018346537622602-7539.jpg', 0),
(137, 4, '2018346537622603-2643.jpg', 0),
(138, 4, '2018346537622604-8916.jpg', 0),
(143, 6, '2018346537622601-3156.jpg', 0),
(144, 6, '2018346537622602-4558.jpg', 0),
(145, 6, '2018346537622603-4950.jpg', 0),
(146, 6, '2018346537622604-8160.jpg', 0),
(147, 5, '2018170410877902-9491.jpg', 0),
(148, 5, '2018170410877903-3913.jpg', 0),
(149, 5, '2018170410877904-193.jpg', 0),
(150, 37, '2018061572745621-8945.jpg', 0),
(151, 37, '2018061572745622-6555.jpg', 0),
(152, 37, '2018061572745623-6891.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE IF NOT EXISTS `product_list` (
`id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `ten`, `tenkhongdau`, `img`, `noibat`) VALUES
(1, 'Hộp bảo quản', 'hop-bao-quan', 'img/CA_water_bottle.png', 1),
(2, 'Dụng cụ nấu ăn', 'dung-cu-nau-an', 'img/CA_vacuum_flask.png', 1),
(3, 'Phụ Kiện nhà bếp', 'phu-kien-nha-bep', 'img/CA_food_storage.png', 1),
(4, 'ĐỒ dùng dã ngoại', 'do-dung-da-ngoai', 'img/CA_cookware_2.png', 1),
(5, 'Đồ dùng sinh hoạt', 'do-dung-sinh-hoat', 'img/CA_appliances_1.png', 1),
(6, 'Hàng da dụng', 'hang-da-dung', '', 0),
(7, 'Đồ dùng trẻ em', 'do-dung-tre-em', '', 0),
(8, 'Đồ nội thất', 'do-noi-that', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `gioitinh`, `email`, `dienthoai`, `hoten`, `quyen`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 0, '', '0', '', 1),
(2, 'quy', '202cb962ac59075b964b07152d234b70', 2, 'kieuhongquy@gmail.com', '0918680255', 'quy', 0),
(4, 'quy123', '202cb962ac59075b964b07152d234b70', 0, '', '', '', 0),
(5, 'quy1', '202cb962ac59075b964b07152d234b70', 0, '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
