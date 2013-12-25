-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2013 at 02:35 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citc_phantom`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `need_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `addr` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `needHelp` int(1) NOT NULL DEFAULT '1',
  `point` int(11) NOT NULL DEFAULT '0',
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(200) NOT NULL,
  `in_fund` int(11) NOT NULL DEFAULT '0',
  `received` int(11) NOT NULL DEFAULT '0',
  `beEvent` int(11) NOT NULL DEFAULT '0',
  `eventTime` varchar(50) NOT NULL,
  PRIMARY KEY (`need_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`need_id`, `name`, `addr`, `date`, `timestamp`, `needHelp`, `point`, `title`, `city`, `lat`, `lng`, `content`, `uid`, `in_fund`, `received`, `beEvent`, `eventTime`) VALUES
('0044c00ed69f243f06e2863e66a739165eaba0fc', '', '24 Đống Đa, Tan Binh District, Ho Chi Minh City, Vietnam', '21-12-13 06:12:30', '1', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.8090053', '106.6654926', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh&nbsp;</span>      ', '', 0, 0, 0, ''),
('183061c0fefbc3158df0b477131645a68c564946', '', '294 Hòa Bình, Hiệp Tân, Ho Chi Minh City, Vietnam', '21-12-13 07:12:18', '2', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.7727243', '106.6246533', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì&nbsp;</span>      ', 'tanta', 0, 0, 0, ''),
('1b7ecfe15f3ce21b8c29724df6e511d2d4ec2642', '', '234 Nguyễn Đình Chính, Phú Nhuận, Ho Chi Minh City, Vietnam', '21-12-13 10:12:37', '1387661826', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.7920694', '106.6729331', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh&nbsp;</span>      ', 'tanta', 0, 0, 1, ''),
('26116c662be4491a6d15ea0ece596787e9956512', '', 'Đống Đa, Hà Nội, Việt Nam', '21-12-13 11:12:37', '1387665478', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hà Nội', '21.0134822', '105.8269415', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ</span>      ', 'tanta', 0, 0, 0, ''),
('3e4fb7fae8a1204948a71cbe622758d02047d051', '', 'Bình Quế, Quảng Nam, Việt Nam', '22-12-13 02:12:14', '1387674899', 1, 0, 'Hãy giúp đỡ để em Lành không bỏ học giữa chừng', 'Quảng Nam', '15.6275693', '108.3741977', '<h6 style="margin-bottom: 0px; padding: 0px 0px 7px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Được đi học, được có cha có mẹ, với nhiều học sinh lớp 10 là việc hiển nhiên, nhưng với em Nguyễn Thị Lành (SN 1997) ở tổ 8, thôn Bình Quang, xã Bình Quế, huyện Thăng Bình (Quảng Nam) giờ là một ước mơ quá xa vời.</h6><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);"><a rel="attachment wp-att-20795" href="http://nhandaovadoisong.com.vn/20793/hay-giup-do-de-em-lanh-khong-bo-hoc-giua-chung.html/mong-co-nhung-tam-long-1" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; color: rgb(92, 161, 47); text-decoration: none;"><img class="aligncenter size-full wp-image-20795 colorbox-20793" title="Mong co nhung tam long 1" src="http://nhandaovadoisong.com.vn/wp-content/uploads/Mong-co-nhung-tam-long-1.jpg" alt="" width="440" height="330" original="http://nhandaovadoisong.com.vn/wp-content/uploads/Mong-co-nhung-tam-long-1.jpg" style="margin-right: auto; margin-bottom: 10px; margin-left: auto; padding: 0px; border-style: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; display: block;"></a></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Hơn 10 năm trước, Lành cũng có một gia đình đủ cha đủ mẹ, dù còn nghèo nhưng cũng nương tựa vào nhau mà sống, cố gắng đi lên. Nhưng rồi, tai họa ập xuống khi năm 2005, ba em Lành là anh Nguyễn Văn Hóa bị bệnh ung thư gan rồi đột ngột qua đời. Trụ cột lao động của gia đình ngã xuống. Ba năm sau, vì ráng sức làm lụng quá vất vả mà mẹ em Lành là chị Nguyễn Thị Hiền cũng bị tai biến, nằm một chỗ. Suốt 5 năm trời, em Lành vừa chăm mẹ, vừa lo toan mọi việc trong nhà bằng những đồng tiền ít ỏi được trợ cấp từ chính quyền địa phương. Dù vất vả, nhưng Lành vẫn quyết tâm đi học. Những năm trước, em phải đi bộ hơn 10km đường đất gồ ghề để đến trường học. Nhưng thời gian gần đây, một nhà hảo tâm đã cho em một chiếc xe đạp để em có thể đỡ vất vả hơn khi đến trường.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Nhưng rồi, ngày cuối tháng 11, năm 2013, sau 5 năm quằn quại với căn bệnh tai biến quái ác, chị Nguyễn Thị Hiền đã ra đi, bỏ lại đứa con gái thơ dại bơ vơ giữa dòng đời. Lúc trước, dù vất vả lo cho mẹ, nhưng ngôi nhà dù sao cũng có mẹ có con thủ thỉ qua ngày. Nhưng giờ, em Lành chỉ còn lại một mình, mồ côi cả cha lẫn mẹ. Họ hàng thân thích đều ở xa và nghèo nên không thể giúp gì nhiều, lâu lâu đến chỉ động viên em mà thôi.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Trong dòng nước mắt, khi nỗi đau vẫn còn nguyên vẹn, em Nguyễn Thị Lành chia sẻ: “Thật sự giờ em cũng không biết ước mơ gì. Lúc trước, em đã phải bỏ học 1 năm để ở nhà chăm sóc mẹ. Sau đó, nhờ sự động viên của thầy cô bạn bè và bà con hàng xóm, em quyết tâm đi học lại và ước mơ mình có thể là một bác sỹ, chữa bệnh cho mẹ và cho những bệnh nhân hiểm nghèo khác. Nhưng giờ mẹ cũng đã qua đời, em không biết những ngày tới đây em còn có thể đi học nữa hay không…”. Câu nói chưa dứt, em lại khóc. Từ khi mẹ mất, tâm lý của em thay đổi hẳn, trầm cảm nặng và rất sợ hãi khi có người lạ vào nhà. Trông em rúm ró, im lặng nơi góc nhà mà chúng tôi không cầm lòng được.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Trao đổi với chúng tôi, cô Nguyễn Thị Mỹ Dung, giáo viên chủ nhiệm lớp 10A4, Trường THPT Hùng Vương (xã Bình An, huyện Thăng Bình, Quảng Nam) – nơi em Nguyễn Thị Lành đang theo học – cho biết: “Em Lành là một em học sinh rất chăm dù điều kiện gia đình em rất khó khăn. Từ trước đến nay, nhà trường đã và đang có nhiều chương trình giúp đỡ, động viên em tiếp tục con đường học tập của mình. Nhưng bây giờ, mẹ em mất đi, hoàn cảnh em càng éo le hơn. Chúng tôi mong có nhiều hơn những tấm lòng cùng em ấy vượt qua thời điểm khó khăn này…”.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Căn nhà nơi vùng trung du Bình Quế mùa đông này đã lạnh càng lạnh hơn. Khi chúng tôi ra về, vẫn thấy em Lành tần ngần đứng bên bàn thờ mẹ, nước mắt chảy quanh gò má. Gió vẫn thốc từng cơn buốt lạnh vào căn nhà ấy. Tôi chợt nhận ra, em Lành không có một tấm áo ấm để mặc. Căn nhà chỉ có những đồ vật thô sơ nhất có thể… Thầm mong điều kỳ diệu sẽ giúp em vượt qua những khó khăn này.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Mọi sự giúp đỡ, xin vui lòng gửi về: Em Nguyễn Thị Lành, ở tổ 8, thôn Bình Quang, xã Bình Quế, huyện Thăng Bình, Quảng Nam; Số điện thoại: 0944484033.</p>      ', 'tanta', 0, 0, 1, '2013-12-27'),
('3ffd2d32e8befe29602f13114afc08db22b17f33', '', 'Xa lộ Hà Nội, Thành phố Hồ Chí Minh, Hồ Chí Minh, Việt Nam', '21-12-13 07:12:20', '3', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.8537286', '106.7804796', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì&nbsp;</span>      ', 'tanta', 0, 0, 0, ''),
('5a1e0b5b11c060df89fad4628e66cc90d372e303', '', '234 Nguyễn Đình Chính, Phú Nhuận, Ho Chi Minh City, Vietnam', '21-12-13 07:12:03', '4', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.7920694', '106.6729331', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh&nbsp;</span>      ', '', 0, 0, 0, ''),
('5adde5c4532e722a838c7382c09a82711e08bc57', '', 'Rach Gia, Kien Giang, Vietnam', '21-12-13 11:12:38', '1387665536', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Kiên Giang', '10.021507', '105.0910974', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ</span>      ', 'tanta', 0, 0, 0, ''),
('7aec7016e8ef732a4e79b4afd8dfaf004823577b', '', 'Xa lộ Hà Nội, Thành phố Hồ Chí Minh, Hồ Chí Minh, Việt Nam', '21-12-13 08:12:40', '1387654852', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.8537286', '106.7804796', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì&nbsp;</span>      ', 'tanta', 0, 0, 0, ''),
('a23ca80bf4c88ab99ab6d3494293a490b7ca232a', '', '24 Đống Đa, Tan Binh District, Ho Chi Minh City, Vietnam', '21-12-13 06:12:31', '5', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.8090053', '106.6654926', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh&nbsp;</span>      ', '', 0, 0, 0, ''),
('db891f5b5dbec717fcb3a088595ba049efd08482', '', 'xã Bình Quý, huyện Thăng Bình, Quảng Nam, Việt Nam', '22-12-13 01:12:32', '1387672358', 1, 0, 'Sau cơn bão số 11, gia đình chị Bảy lâm cảnh màn trời chiếu đất', 'Quảng Nam', '15.69826', '108.3385977', '<h6 style="margin-bottom: 0px; padding: 0px 0px 7px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Cái câu&nbsp; “họa vô đơn chí” cứ bám theo mãi cuộc đời của không ít người, để rồi cả một đời lận đận, gian lao. Dù miệt mài cố gắng mãi nhưng rồi định phận nhiều khi quá khắt khe… Những hoàn cảnh nghèo trong cơn bão số 11 vừa qua ở các tỉnh miền Trung nói chung và Quảng Nam nói riêng là một ví dụ. Gia sản chỉ vỏn vẹn những gì đơn giản nhất. Mà khi thiên tai ập đến, chút đơn sơ ấy cũng trôi theo. Một trong những hoàn cảnh éo le ấy là gia đình chị Võ Thị Bảy (SN1965) ở tổ 15, thôn Quý Xuân 1, xã Bình Quý, huyện Thăng Bình, Quảng Nam.</h6><p id="attachment_20403" class="wp-caption aligncenter" style="margin-right: auto; margin-bottom: 10px; margin-left: auto; padding: 4px 0px 5px; border: 1px solid rgb(230, 230, 230); font-size: 12px; line-height: 16.796875px; vertical-align: baseline; background-color: rgb(247, 247, 247); text-align: center; color: rgb(17, 17, 17); width: 450px;"><a rel="attachment wp-att-20403" href="http://nhandaovadoisong.com.vn/20401/sau-con-bao-so-11-gia-dinh-chi-bay-lam-canh-man-troi-chieu-dat.html/3-30" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; color: rgb(92, 161, 47); text-decoration: none;"><img class="size-full wp-image-20403 colorbox-20401" title="(3)" src="http://nhandaovadoisong.com.vn/wp-content/uploads/328.jpg" alt="" width="440" height="330" original="http://nhandaovadoisong.com.vn/wp-content/uploads/328.jpg" style="margin-right: 0px; padding: 0px; border-style: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline;"></a><p class="wp-caption-text" style="margin-bottom: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: 11px; font-style: inherit; font-variant: inherit; line-height: 12px; vertical-align: baseline;">Những đồ đạc vương vãi trong căn nhà gần sập.</p></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);"><b style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">27 năm không xây được một ngôi nhà…</b></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Sau hơn nửa tháng khi cơn bão số 11 đi qua, lúc chúng tôi đến thì anh Nguyễn Văn Nhân (SN1963), chồng chị Bảy đang đi chặt tre ở xóm bên để về chống lại cho nhà khỏi đổ ụp. Đã định đi từ mấy hôm trước, nhưng anh cứ đau ốm liên miên. Hôm nay, khỏe hơn một chút là đã cầm rựa ra đi. Phía trước nhà, mái tôn trước đổ ụp xuống sát đất. Vào bên trong, ngước nhìn lên mới thấy rõ cả phần mái bị tốc đi 1/3. Những cột kèo bằng tre đa phần đã gãy sau những trận gió bão. Ngôi nhà nghiêng hẳn về một bên. Chỉ cần một tác động nhẹ nữa là có thể ngã bất cứ lúc nào.</p><p id="attachment_20404" class="wp-caption aligncenter" style="margin-right: auto; margin-bottom: 10px; margin-left: auto; padding: 4px 0px 5px; border: 1px solid rgb(230, 230, 230); font-size: 12px; line-height: 16.796875px; vertical-align: baseline; background-color: rgb(247, 247, 247); text-align: center; color: rgb(17, 17, 17); width: 450px;"><a rel="attachment wp-att-20404" href="http://nhandaovadoisong.com.vn/20401/sau-con-bao-so-11-gia-dinh-chi-bay-lam-canh-man-troi-chieu-dat.html/4-13" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; color: rgb(92, 161, 47); text-decoration: none;"><img class="size-full wp-image-20404 colorbox-20401" title="(4)" src="http://nhandaovadoisong.com.vn/wp-content/uploads/412.jpg" alt="" width="440" height="330" original="http://nhandaovadoisong.com.vn/wp-content/uploads/412.jpg" style="margin-right: 0px; padding: 0px; border-style: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; display: inline;"></a><p class="wp-caption-text" style="margin-bottom: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: 11px; font-style: inherit; font-variant: inherit; line-height: 12px; vertical-align: baseline;">Chị Võ Thị Bảy bần thần trước căn nhà trống hoang, xiêu vẹo.</p></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Chị Bảy tâm sự: Năm 1987, sau khi cưới nhau, hai anh chị làm ngôi nhà này, với kết cấu là sườn gỗ và tre tạm, lợp tôn. Với tư tưởng nông dân cố hữu và cái câu “trời sinh voi trời sinh cỏ”, cả hai vợ chồng đâu biết rằng cái khổ từ đó mà đeo theo. Sinh ra 5 người con, lớn nhất hiện cũng chỉ mới 25 tuổi, bé nhất đang học lớp 8, cả hai vợ chồng làm việc cật lực vẫn không đủ nuôi con cái, huống gì nghĩ đến việc xây nhà cửa mới. Chỉ mỗi cái ăn, cái mặc không thôi thì không vướng vào nợ nần cũng là may mắn rồi. Cuộc sống cứ thế trôi đi, dù khó khăn nhưng cũng đắp đổi qua ngày.</p><p id="attachment_20405" class="wp-caption aligncenter" style="margin-right: auto; margin-bottom: 10px; margin-left: auto; padding: 4px 0px 5px; border: 1px solid rgb(230, 230, 230); font-size: 12px; line-height: 16.796875px; vertical-align: baseline; background-color: rgb(247, 247, 247); text-align: center; color: rgb(17, 17, 17); width: 450px;"><a rel="attachment wp-att-20405" href="http://nhandaovadoisong.com.vn/20401/sau-con-bao-so-11-gia-dinh-chi-bay-lam-canh-man-troi-chieu-dat.html/5-13" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; color: rgb(92, 161, 47); text-decoration: none;"><img class="size-full wp-image-20405 colorbox-20401" title="(5)" src="http://nhandaovadoisong.com.vn/wp-content/uploads/512.jpg" alt="" width="440" height="330" original="http://nhandaovadoisong.com.vn/wp-content/uploads/512.jpg" style="margin-right: 0px; padding: 0px; border-style: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; display: inline;"></a><p class="wp-caption-text" style="margin-bottom: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: 11px; font-style: inherit; font-variant: inherit; line-height: 12px; vertical-align: baseline;">Căn nhà xiêu vẹo, gần sập của chị Bảy, nhìn từ phía trước.</p></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Nhà làm nông, anh Nhân có thêm nghề sửa xe đạp. Nhưng ở một xã nghèo nông thôn như Bình Quý thì thu nhập bằng nghề sửa xe đạp cũng hết sức eo hẹp. Bên cạnh đó, anh Nhân thường xuyên đau ốm, không làm việc được. Nhất là mấy năm nay, bệnh anh trở nặng, thuốc thang thường xuyên mới đỡ. Sửa xe thì bữa làm bữa nghỉ. Một mình chị Bảy phải vừa vật lộn nuôi con bằng các việc đồng áng, lúc rảnh lại đi các vùng lên cận làm thuê kiếm thêm tiền trang trải. Chị sức khỏe cũng yếu với bệnh tim hành hạ trong cơ thể. Giờ, cô con gái đầu tiên đã có chồng. Ba người con giữa vì nhà khó khăn, phải bỏ học giữa chừng nhưng rồi quay lại đang học nghề để kiếm cách mưu sinh. Đứa nhỏ nhất đang học lớp 8, tại một trường THCS địa phương. Vậy là bây giờ chị Bảy vẫn phải lo chu cấp tiền cho 3 người con đi học nghề và cậu con trai học cấp II.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);"><b style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">Và cảnh màn trời chiếu đất</b></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Rạng sáng ngày 15/10/2013, cơn bão số 11 đổ bộ vào đất liền với cấp gió mạnh dữ dội. Nhiều ngôi nhà, cây cối, công trình đã không thể chống chọi lại cơn thịnh nộ của thiên nhiên.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Và rồi, ngôi nhà tạm sau 23 năm tồn tại, đã không thể đứng vững trước những cơn gió giật kinh hoàng vào rạng sáng ngày hôm ấy. Chị Võ Thị Bảy vẫn rất bàng hoàng khi kể lại: “Đêm đó, nghe bão vào mạnh lắm, sáng thì trời bắt đầu ít gió. May mà căn nhà không sập…”</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Bão tố đi qua, nỗi lo của gia đình chị thì càng tăng thêm. Giờ, ngôi nhà của chị Bảy không khác nào một cái bẫy. Đứng trước nhà, thấy những miếng tôn đổ sập xuống, che tất cả ở bên trong. Trong nhà, những đồ đạc chưa di chuyển kịp còn lại chỏng chơ. Nền nhà lõm bõm nước do là nền đất, mái bị tốc chưa lợp lại nên những trận mưa gần đây cứ đổ thẳng nước xuống. Cũng may là mấy năm trước, anh chị xin được gạch và xi măng của một người hảo tâm về xây dựng một căn bếp tạm phía sau. Xây xong vội vã, cũng không có tiền tô lại. Dù vững chắc hơn ngôi nhà phía trên những cũng rất tạm bợ so với những nhà xung quanh. Bão qua, căn bếp ấy may mắn bị tốc mái đi. Nhưng không còn cách nào khác, anh chị phải tìm cách lợp nhanh lại cái mái bếp ấy để có chỗ chui ra chui vào. Thế là mọi sinh hoạt của gia đình gồm 3 người (hai vợ chồng và đứa con trai út) từ hôm ấy hẹp lại trong khoảng hơn 10 mét vuông bếp. Nấu nướng cũng đó, ăn uống cũng đó mà ngủ cũng ở đó. Nhưng nỗi lo vẫn hiện hữu thường trực khi những chỗ dột xuất hiện ngày càng nhiều trong căn bếp.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Ngước nhìn chúng tôi rồi lại nhìn mái nhà trống toang, chực đổ sập theo những cơn gió mới, chị Võ Thị Bảy chia sẻ là chị ao ước có được một ngôi nhà chắc chắn hơn để ở, một ngôi nhà xây, cấp 4. Xây thô thôi chứ không cần tô vôi gì cả. Để yên tâm mà đi làm, chữa bệnh cho chồng và lo lắng cho các con. Chứ cái cảnh bâng khuâng hốt hoảng từng đêm lo màn trời chiếu đất này chị thật sự vô cùng buồn. Nhưng ước mơ ấy dường như quá lớn. Bởi giờ, ngay cả mua tre, gỗ và tôn để sửa lại căn nhà tạm để sống qua ngày với gia đình chị cũng đã rất khó khăn. Nửa tháng trôi qua vẫn không làm được. Chị bảo cũng muốn lắm nhưng tiền không có, mà cũng không thể trông chờ vào chính quyền. Bởi ngay trong đợt bão vừa qua, gia đình chị dù thiệt hại như vậy, cũng chỉ nhận được sự hỗ trợ duy nhất từ một tờ báo. Còn lại, chính quyền địa phương có lẽ do ngân sách hạn hẹp, vẫn chưa có sự hỗ trợ kịp thời.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Về phía chính quyền thôn, chúng tôi nhận thấy cũng có sự đồng cảm, sẻ chia với gia đình chị Bảy. Nói chuyện với chúng tôi, ông Nguyễn Văn Tùng, trưởng thôn Quý Xuân 1, cho biết: “Hoàn cảnh của gia đình chị Bảy tại địa phương đã khó khăn từ lâu nay. Chính quyền cũng đã biết nhưng phạm vi hỗ trợ thì rất khiêm tốn. Qua cơn bão số 11, nhà của gia đình anh Nhân chị Bảy đã gần như hư hại đến 90%. Chính quyền thôn cũng đã lên danh sách, ưu tiên đưa nguyện vọng của gia đình của chị lên các cấp để được sự hỗ trợ trong thời gian sắp tới. Tuy nhiên, nguồn lực của địa phương là có hạn, chúng tôi bây giờ cũng chỉ có thể động viên gia đình chị về mặt tinh thần. Rất mong các nhà hảo tâm, các mạnh thường quân có thể giúp sức cùng anh chị để gia đình có một căn nhà vững chắc hơn trong tương lai…”</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);"><b style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; line-height: inherit; vertical-align: baseline;">Nguyễn Thành Giang</b></p>      ', 'tanta', 0, 0, 0, ''),
('e0764e9810159180d3d3fed41eb69b451f7c56e5', '', '29 Độc Lập, Thành phố Hồ Chí Minh, Hồ Chí Minh, Việt Nam', '21-12-13 07:12:19', '6', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.7917691', '106.636455', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì&nbsp;</span>      ', 'tanta', 0, 0, 0, ''),
('e4c9fd890e6a9e4004d61a3c51aa567c2ee58791', '', 'Bình Quế, Quảng Nam, Việt Nam', '22-12-13 12:12:59', '1387670352', 1, 0, 'Hãy giúp đỡ để em Lành không bỏ học giữa chừng', 'Quảng Nam', '15.6275693', '108.3741977', '<h6 style="margin-bottom: 0px; padding: 0px 0px 7px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Được đi học, được có cha có mẹ, với nhiều học sinh lớp 10 là việc hiển nhiên, nhưng với em Nguyễn Thị Lành (SN 1997) ở tổ 8, thôn Bình Quang, xã Bình Quế, huyện Thăng Bình (Quảng Nam) giờ là một ước mơ quá xa vời.</h6><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);"><a rel="attachment wp-att-20795" href="http://nhandaovadoisong.com.vn/20793/hay-giup-do-de-em-lanh-khong-bo-hoc-giua-chung.html/mong-co-nhung-tam-long-1" style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; color: rgb(92, 161, 47); text-decoration: none;"><img class="aligncenter size-full wp-image-20795 colorbox-20793" title="Mong co nhung tam long 1" src="http://nhandaovadoisong.com.vn/wp-content/uploads/Mong-co-nhung-tam-long-1.jpg" alt="" width="440" height="330" original="http://nhandaovadoisong.com.vn/wp-content/uploads/Mong-co-nhung-tam-long-1.jpg" style="margin-right: auto; margin-bottom: 10px; margin-left: auto; padding: 0px; border-style: none; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; display: block;"></a></p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Hơn 10 năm trước, Lành cũng có một gia đình đủ cha đủ mẹ, dù còn nghèo nhưng cũng nương tựa vào nhau mà sống, cố gắng đi lên. Nhưng rồi, tai họa ập xuống khi năm 2005, ba em Lành là anh Nguyễn Văn Hóa bị bệnh ung thư gan rồi đột ngột qua đời. Trụ cột lao động của gia đình ngã xuống. Ba năm sau, vì ráng sức làm lụng quá vất vả mà mẹ em Lành là chị Nguyễn Thị Hiền cũng bị tai biến, nằm một chỗ. Suốt 5 năm trời, em Lành vừa chăm mẹ, vừa lo toan mọi việc trong nhà bằng những đồng tiền ít ỏi được trợ cấp từ chính quyền địa phương. Dù vất vả, nhưng Lành vẫn quyết tâm đi học. Những năm trước, em phải đi bộ hơn 10km đường đất gồ ghề để đến trường học. Nhưng thời gian gần đây, một nhà hảo tâm đã cho em một chiếc xe đạp để em có thể đỡ vất vả hơn khi đến trường.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Nhưng rồi, ngày cuối tháng 11, năm 2013, sau 5 năm quằn quại với căn bệnh tai biến quái ác, chị Nguyễn Thị Hiền đã ra đi, bỏ lại đứa con gái thơ dại bơ vơ giữa dòng đời. Lúc trước, dù vất vả lo cho mẹ, nhưng ngôi nhà dù sao cũng có mẹ có con thủ thỉ qua ngày. Nhưng giờ, em Lành chỉ còn lại một mình, mồ côi cả cha lẫn mẹ. Họ hàng thân thích đều ở xa và nghèo nên không thể giúp gì nhiều, lâu lâu đến chỉ động viên em mà thôi.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Trong dòng nước mắt, khi nỗi đau vẫn còn nguyên vẹn, em Nguyễn Thị Lành chia sẻ: “Thật sự giờ em cũng không biết ước mơ gì. Lúc trước, em đã phải bỏ học 1 năm để ở nhà chăm sóc mẹ. Sau đó, nhờ sự động viên của thầy cô bạn bè và bà con hàng xóm, em quyết tâm đi học lại và ước mơ mình có thể là một bác sỹ, chữa bệnh cho mẹ và cho những bệnh nhân hiểm nghèo khác. Nhưng giờ mẹ cũng đã qua đời, em không biết những ngày tới đây em còn có thể đi học nữa hay không…”. Câu nói chưa dứt, em lại khóc. Từ khi mẹ mất, tâm lý của em thay đổi hẳn, trầm cảm nặng và rất sợ hãi khi có người lạ vào nhà. Trông em rúm ró, im lặng nơi góc nhà mà chúng tôi không cầm lòng được.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Trao đổi với chúng tôi, cô Nguyễn Thị Mỹ Dung, giáo viên chủ nhiệm lớp 10A4, Trường THPT Hùng Vương (xã Bình An, huyện Thăng Bình, Quảng Nam) – nơi em Nguyễn Thị Lành đang theo học – cho biết: “Em Lành là một em học sinh rất chăm dù điều kiện gia đình em rất khó khăn. Từ trước đến nay, nhà trường đã và đang có nhiều chương trình giúp đỡ, động viên em tiếp tục con đường học tập của mình. Nhưng bây giờ, mẹ em mất đi, hoàn cảnh em càng éo le hơn. Chúng tôi mong có nhiều hơn những tấm lòng cùng em ấy vượt qua thời điểm khó khăn này…”.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Căn nhà nơi vùng trung du Bình Quế mùa đông này đã lạnh càng lạnh hơn. Khi chúng tôi ra về, vẫn thấy em Lành tần ngần đứng bên bàn thờ mẹ, nước mắt chảy quanh gò má. Gió vẫn thốc từng cơn buốt lạnh vào căn nhà ấy. Tôi chợt nhận ra, em Lành không có một tấm áo ấm để mặc. Căn nhà chỉ có những đồ vật thô sơ nhất có thể… Thầm mong điều kỳ diệu sẽ giúp em vượt qua những khó khăn này.</p><p style="margin-bottom: 0px; padding: 0px 0px 10px; border: 0px; font-size: 12px; line-height: 16.796875px; vertical-align: baseline; color: rgb(17, 17, 17);">Mọi sự giúp đỡ, xin vui lòng gửi về: Em Nguyễn Thị Lành, ở tổ 8, thôn Bình Quang, xã Bình Quế, huyện Thăng Bình, Quảng Nam; Số điện thoại: 0944484033.</p>      ', 'tanta', 0, 0, 0, ''),
('ff3be1b006e12f18aa3357c56f708ac08c3f612d', '', '23 Nguyễn Thị Huỳnh, Phú Nhuận, Ho Chi Minh City, Vietnam', '21-12-13 07:12:05', '7', 1, 0, 'Một gia đình rất cần sự giúp đỡ', 'Hồ Chí Minh', '10.7968963', '106.676377', '<span style="color: rgb(68, 68, 68); font-family: sans-serif; font-size: 13px; line-height: 18px;">Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay.Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh nặng nằm liệt giường từ mấy năm nay. Một gia đình với một hoàn cảnh vô cùng éo le. Gia đình có 4 thành viên, 2 vợ chồng và 2 đứa con. Người mẹ thì bệnh&nbsp;</span>      ', 'tanta', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `country`) VALUES
(1, 'Ho Chi Minh City', '0');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(0, 'vietnam');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donate_id` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `from` varchar(200) NOT NULL,
  `to` varchar(200) NOT NULL,
  `type` text NOT NULL,
  `need_id` int(11) NOT NULL,
  `timestamp` int(200) NOT NULL,
  PRIMARY KEY (`donate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` varchar(400) NOT NULL,
  `date` varchar(200) NOT NULL,
  `location` varchar(400) NOT NULL,
  `oid` varchar(200) NOT NULL,
  `members` varchar(200) NOT NULL,
  `timestamp` int(200) NOT NULL,
  PRIMARY KEY (`event_id`,`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `oid` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `province` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `postal_code` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `tweet` varchar(200) NOT NULL,
  `timestamp` int(200) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `tweet` varchar(200) NOT NULL,
  `timestamp` varchar(200) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userType` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid` (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `address`, `province`, `city`, `postal_code`, `phone`, `facebook`, `tweet`, `timestamp`, `name`, `description`, `userType`) VALUES
('tanta', 'tantan.bamboo123@gmail.com', '388bb788bacd118c3417093a2bfd7e25b546aa1e', '', '', '', '', '', '', '', '21', 'Nguyễn Đức Tân', '', 'person');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
