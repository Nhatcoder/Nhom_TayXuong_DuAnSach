-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 05:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanxuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_donhang`
--

CREATE TABLE `chitiet_donhang` (
  `ma_chi_tiet` int(11) NOT NULL,
  `ma_don` int(11) NOT NULL,
  `ma_sach` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `field` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ma_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(250) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`ma_danhmuc`, `ten_danhmuc`, `trang_thai`) VALUES
(9, 'Không gian văn hóa - Hồ chí Minh', 1),
(11, 'Kinh tế', 1),
(12, 'Văn học Việt Nam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ma_don` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL,
  `ngay_date` date NOT NULL,
  `ghi_chu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `cap_bac` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `ma_sach` int(11) NOT NULL,
  `ten_sach` varchar(255) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `nha_xuat_ban` varchar(255) NOT NULL,
  `ngay_xuat_ban` date NOT NULL,
  `mo_ta` text NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `ma_danh_muc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`ma_sach`, `ten_sach`, `hinh`, `so_luong`, `gia`, `nha_xuat_ban`, `ngay_xuat_ban`, `mo_ta`, `trang_thai`, `ma_danh_muc`) VALUES
(3, 'NHỮNG TẤM GƯƠNG BÌNH DỊ TỎA SÁNG GIỮA ĐỜI THƯỜNG (TẬP 6)', 'bia1_nhungtamguongbinhdit6.jpg', 15, 45000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2023-05-01', 'Quyển “Những tấm gương bình dị tỏa sáng giữa đời thường” (Tập 6) năm 2023 giới thiệu 49 tập thể và 90 cá nhân tiêu biểu trong học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh của Đảng bộ, Chính quyền và Nhân dân Thành phố Hồ Chí Minh giai đoạn 2022 - 2023.\r\n\r\nBan Tuyên giáo Thành ủy trân trọng giới thiệu quyển “Những tấm gương bình dị tỏa sáng giữa đời thường” (Tập 6) đến các cơ sở đảng, các cán bộ, đảng viên và Nhân dân Thành phố.', 1, 9),
(4, 'NHỮNG TẤM GƯƠNG BÌNH DỊ TỎA SÁNG GIỮA ĐỜI THƯỚNG (TẬP 5)', 'nhungtamguongbinhdit5.jpg', 12, 45000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2023-09-29', 'Quyển “Những tấm gương bình dị tỏa sáng giữa đời thường” (Tập 5) năm 2022 giới thiệu 49 tập thể và 84 cá nhân tiêu biểu trong học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh của Đảng bộ, Chính quyền và Nhân dân Thành phố, minh chứng cho ý chí tự lực, tự cường, quyết tâm và khát vọng vượt qua khó khăn để xây dựng cơ quan, đơn vị, địa phương. Thành phố phát triển, không ngừng nâng cao chất lượng cuộc sống của Nhân dân.\r\n\r\nBan Tuyên giáo Thành ủy trân trọng giới thiệu quyển “Những tấm gương bình dị tỏa sáng giữa đời thường” (Tập 5) đến các cơ sở đảng, các cán bộ, đảng viên và Nhân dân Thành phố.', 1, 9),
(5, 'THEO DẤU CHÂN BÁC HỒ', 'theodauchanbacHo.jpg', 20, 24000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2022-11-02', 'Cuốn sách “Theo dấu chân Bác Hồ” tuyển chọn một số bài viết của Tiến sĩ Phan Văn Hoàng về Chủ tịch Hồ Chí Minh. Bằng nguồn tài liệu phong phú từ nhiều phía, bằng lập luận khoa học rõ ràng, chắc chắn, ông đã phản bác một cách thuyết phục luận điểm của Tiến sĩ Lê Hữu Mục cho rằng “Nhật ký trong tù” không phải tác phẩm của Hồ Chủ tịch; góp phần làm rõ vì sao trong những năm 1942 – 1944, Bác đã “thành công trong việc thay đổi địa vị của mình từ một người tù trở thành một đồng minh” và được trả tự do. Những bài viết trong cuốn sách cũng góp phần phác họa chân dung của Hồ Chủ tịch – một lãnh tụ cách mạng luôn lấy “độc lập cho Tổ quốc tôi, tự do cho đồng bào tôi” là mục đích tối thượng; luôn mang trong mình lòng tự hào, tự tôn dân tộc; khiến những người ở bên kia chiến tuyến nể phục và kính trọng. Cuốn sách cũng giúp bạn đọc hiểu rõ hơn về nơi Bác Hồ đã xuống tàu để ra đi tìm đường cứu nước; về những mốc thời gian mà Sài Gòn – Gia Định mang tên lãnh tụ Hồ Chí Minh…', 1, 9),
(6, 'XÂY DỰNG, CHỈNH ĐỐN ĐẢNG THEO SỰ CHỈ DẪN CỦA TƯ TƯỞNG HỒ CHÍ MINH', 'xaydungchinhdondangtheotutuonghochiminh1.jpg', 6, 50000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2022-05-10', 'Đảng Cộng sản Việt Nam là chủ đề nhiều người đã nói, đã viết. Nói và viết với cả cái tâm lành cũng có, với thái độ bực dọc cũng có. Dù gì thì trái đất vẫn cứ xoay như bàn xoay đồ gốm. Có điều là nhiều lúc nó xoay một cách đầy trúc trắc. Thế giới đa cực và con đường phát triển của mỗi dân tộc - quốc gia cũng phong phú, đa dạng, phức tạp hơn trước. Cách nhìn nhận sự vật và hiện tượng của mỗi người, của mỗi cộng đồng người, của mỗi tổ chức chính trị, vì thế, có nhiều sự khác nhau hơn. Sự khác nhau này biểu đạt ra từ điểm nhìn, từ tâm trạng, từ năng lực, từ nghĩ suy, từ hành động.\r\n\r\nTôi viết ra những trang sách này trên cơ sở vốn liếng của một giảng viên có tích lũy đôi chút tri thức để hiểu về một số đảng chính trị trên thế giới, trong đó có Đảng Cộng sản Việt Nam và lãnh tụ của Đảng là Hồ Chí Minh - một nhân vật lịch sử thời hiện đại có sức hấp dẫn đối với người nghiên cứu. Phần đầu của cuốn sách nhìn lại hơn 35 năm đổi mới Đảng Cộng sản Việt Nam đã xây dựng. chỉnh đốn bản thân mình như thế nào. Phần thứ hai của cuốn sách, tôi thử vận dụng tư tưởng Hồ Chí Minh và Nghị quyết Đại hội đại biểu toàn quốc lần thứ XIII của Đảng Cộng sản Việt Nam trong việc xây dựng, chỉnh đốn Đảng hiện nay. Những điều viết ra của tôi trong cuốn sách này có thể đúng, có thể chưa thật chuẩn xác, có thể chưa đầy đủ, nhưng tôi cứ giãi bày ra như là lời tâm sự với những ai quan tâm.', 1, 9),
(7, 'LÒNG NHÂN ÁI CỦA BÁC HỒ', 'longnhanai.jpg', 7, 79000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2022-06-14', 'Cuộc đời của vị lãnh tụ đã có bao nhiêu sách, báo, các công trình nghiên cứu, nhưng lần này cuốn sách hơn 500 trang gồm 2 phần: Phần 1, khoảng 40 trang tiểu luận của tác giả (Nhân ái Hồ Chí Minh); Phần 2, là tuyển chọn sưu tầm 54 câu chuyện đặc biệt của nhiều tác giả nổi tiếng trong ngoài nước (Muôn vàn tình thân yêu).\r\nLòng nhân ái của Bác Hồ là chủ đề xuyên suốt, những câu chuyện cảm động nhân văn gần gũi của vị lãnh tụ và danh nhân văn hóa thế giới, làm người đọc sẽ bất ngờ và chúng ta nhớ lại câu nói rất đúng của GS Trần Văn Giàu: “Đề tài về Hồ Chí Minh là nguồn giếng trời không bao giờ cạn”.\r\n\r\nPhần tiểu luận của cuốn sách giúp chúng ta hiểu sâu chữ Nhân, chữ Dân trong lòng Bác Hồ và kết của tiểu luận dẫn lời cụ Hoàng Đạo Thúy: “Đến bây giờ tôi thấy rằng: Xa rời đạo đức của Hồ Chủ tịch là điều đau xót nhất”. Đó là lời nhắc nhở không chỉ thời cụ Hoàng Đạo Thúy mà có thể soi vào tình hình thời sự hiện nay…', 1, 9),
(8, 'TỪ \"ĐƯỜNG CÁCH MỆNH\" ĐẾN \"SỬA ĐỔI LỐI LÀM VIỆC\" - ÁNH SÁNG XUYÊN THẾ KỶ', 'duongcachmenhbia1.jpg', 6, 50000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2022-07-06', 'Đường cách mệnh là tác phẩm lý luận đầu tiên đặt nền móng cho cách mạng Việt Nam, có tác dụng khai trí, khai tâm, khai đức cho lớp thanh niên yêu nước Việt Nam đầu thế kỷ XX; là ngọn đuốc soi đường, ánh sáng xuyên thế kỷ, có ý nghĩa lý luận lâu dài từ quá khứ đến hôm nay và mai sau đối với nhân dân Việt Nam. Sửa đổi lối làm việc là tác phẩm bàn về đảng cầm quyền đầu tiên, đầy đủ và hoàn chỉnh nhất trong di sản của Chủ tịch Hồ Chí Minh, có ý nghĩa và tác dụng to lớn trong nâng cao năng lực lãnh đạo, năng lực cầm quyền và sức chiến đấu của Đảng trước đây, hiện nay và sau này. Nếu tác phẩm Đường cách mệnh được coi là tác phẩm lý luận mở đường cho cách mạng Việt Nam thì tác phẩm Sửa đổi lối làm việc lại có ý nghĩa cả về lý luận lẫn thực tiễn, liên quan trực tiếp đến công cuộc xây dựng, chỉnh đốn Đảng, sửa đổi lối làm việc của cán bộ, đảng viên do các bệnh chủ quan, hẹp hòi, ba hoa, kém lý luận, khinh lý luận và lý luận suông.   \r\nHiện nay, tình hình thế giới và đất nước có rất nhiều đổi thay so với thời kỳ hai tác phẩm này ra đời. Đặc biệt là mục tiêu và nhiệm vụ cách mạng. Hai tác phẩm ra đời trong giai đoạn cách mạng dân tộc dân chủ nhân dân với mục tiêu và nhiệm vụ là phục vụ công tác chính trị, tư tưởng, lý luận, xây dựng đội ngũ cán bộ cho cuộc đấu tranh giành độc lập dân tộc và kháng chiến kiến quốc. Đất nước, xã hội và con người trong giai đoạn đó cũng không hoàn toàn như hôm nay. Đặt trong bối cảnh đó, hai tác phẩm đã hoàn thành xuất sắc sứ mệnh lịch sử cao cả là đặt nền tảng, mở đường, soi đường cho cách mạng đi tới thắng lợi; xây dựng được đội ngũ cán bộ, đảng viên nhận thức và thực hành tốt bốn chữ “chí công vô tư”. \r\n\r\nNhưng nghiên cứu di sản, tư tưởng Hồ Chí Minh nói chung và các tác phẩm của Người nói riêng, điều có ý nghĩa, nhất lại là trên cơ sở nhận thức đúng đắn, đầy đủ giá trị lịch sử để thấy tầm vóc, ý nghĩa, giá trị hiện tại và giá trị tương lai trên cả các phương diện lý luận và thực tiễn, dân tộc và quốc tế. Cái quý giá nhất, lớn nhất, mãi mãi trường tồn của Chủ tịch Hồ Chí Minh chính là toàn bộ trước tác của Người, những điều Người viết trong hai tác phẩm không chỉ đã đưa sự nghiệp đấu tranh giành độc lập dân tộc, xây dựng chế độ dân chủ nhân dân đến thắng lợi, mà còn soi sáng cho sự nghiệp xây dựng chủ nghĩa xã hội trước đây và công cuộc đổi mới hiện nay. Ánh sáng xuyên thế kỷ chính là ở chỗ đó.\r\n\r\nTác phẩm gồm có 4 chương:\r\n\r\nChương Đầu: “Đường cách mệnh” và “Sửa đổi lối làm việc” trong kho tàng di sản Hồ Chí Minh. Trình bày khái quát một số vấn đề trong nghiên cứu di sản Hồ Chí Minh như sự gắn kết chặt chẽ giữa lý luận và thực tiễn, nói và làm, xây đi đôi với chống. Đặc biệt, trình bày và phân tích khái quát một số tác phẩm, bài viết, bài nói trong chuỗi các tác phẩm của Nguyễn Ái Quốc - Hồ Chí Minh để thấy giá trị của tất cả các tác phẩm và mối liên hệ mật thiết giữa các tác phẩm, từ đó gợi mở, tiếp tục suy nghĩ, nghiên cứu để đi tới xác định bộ Hồ Chí Minh, Toàn tập là bảo vật quốc gia.\r\n\r\nChương Một : Tác phẩm “Đường cách mệnh” - Nghiên cứu bối cảnh ra đời, nội dung và giá trị cốt lõi của tác phẩm. \r\n\r\nChương Hai: Tác phẩm “Sửa đổi lối làm việc” - Nghiên cứu sự ra đời, nội dung cơ bản và giá trị lý luận - thực tiễn của tác phẩm. \r\n\r\nChương Cuối: Xây dựng, chỉnh đốn Đảng dưới ánh sáng “Đường cách mệnh” và “Sửa đổi lối làm việc”. Nhìn lại các nội dung đã trình bày, phân tích tính thời đại và thời sự của tác phẩm. Làm rõ ý nghĩa “xuyên thế kỷ” của hai tác phẩm đối với công tác xây dựng, chỉnh đốn Đảng mà Nghị quyết Trung ương 4 khóa XI, khóa XII và Đại hội XIII trình bày. Chương này có ý nghĩa vừa “kết” vừa “mở”, hướng tới triển vọng những nghiên cứu mới gắn với toàn bộ sự nghiệp đổi mới.\r\n\r\nNăm 2022 đánh dấu 95 năm ra đời tác phẩm “Đường cách mệnh” và 75 năm ra đời tác phẩm “Sửa đổi lối làm việc” của Nguyễn Ái Quốc - Hồ Chí Minh. Nhà xuất bản Tổng hợp TPHCM đã lên kế hoạch đề tài và đặt hàng PGS.TS. Bùi Đình Phong chuẩn bị một công trình nghiên cứu xuyên suốt sự tiếp nối mạch nguồn của dòng chảy cách mạng Việt Nam. Cuốn sách Từ “Đường cách mệnh” đến “Sửa đổi lối làm việc” - Ánh sáng xuyên thế kỷ vinh dự xuất bản và ra mắt bạn đọc vào đúng dịp kỷ niệm 132 năm Ngày sinh Chủ tịch Hồ Chí Minh vĩ đại.', 1, 9),
(9, 'ĐƯỜNG HỒ CHÍ MINH TRONG TÂM', 'duonghcmtrongtambia1.jpg', 7, 41000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2022-05-04', 'Năm 1990, nhân kỷ niệm 100 năm Ngày sinh Chủ tịch Hồ Chí Minh, Ban Khoa học xã hội Thành ủy Thành phố Hồ Chí Minh đã tổ chức thực hiện tập sách Vàng trong lửa do hai nhân vật nổi tiếng đồng chủ biên là Giáo sư Trần Văn Giàu và nhà nghiên cứu Trần Bạch Đằng, với sự tham gia biên soạn, biên tập của nhiều nhà nghiên cứu, tướng lĩnh, nhà văn, nhà báo có tên tuổi như Trần Văn Trà, Bảo Định Giang, Lý Chánh Trung, Hồ Hữu Nhựt, Phan Lạc Tuyên, Lê Quang Vịnh... Sách được đồng chí Võ Trần Chí, Ủy viên Bộ Chính trị, Bí thư Thành ủy Thành phố Hồ Chí Minh, viết lời giới thiệu.\r\nChương VI của tập sách rất công phu này có tên là “Đường Hồ Chí Minh” với các phần như “Đường trong dân - đường trong tim”, “Đường chúng tôi đi - đường Hồ Chí Minh”, “Đường Hồ Chí Minh - đường đổi mới”, “Đường Hồ Chí Minh với lớp trẻ miền Nam ngày nay”. Sách này đã giải thích: “Con đường Hồ Chí Minh là con đường lớn, con đường của lịch sử dân tộc, làm nên thời đại Hồ Chí Minh, cũng là con đường của từng người, nằm trong ước mơ, hoài bão, trong trái tim của mỗi người, từ thuở đất nước còn nô lệ cho đến hai cuộc trường kỳ kháng chiến. Thời kỳ đổi mới đang mở ra nhiều xu hướng, nhiều cách nghĩ, cách làm, nhưng có con đường nào đẹp hơn, có thể thay thế được con “đường trong tim” lấy dân làm gốc, đem lại tự do và hạnh phúc cho dân - con đường mà Chủ tịch Hồ Chí Minh đã hiến dâng trọn vẹn cuộc đời mình”.\r\n\r\nCon đường Hồ Chí Minh ấy đã định hướng lối đi cho dân tộc ta trong suốt hơn 90 năm, từ buổi đấu tranh giành độc lập cho đất nước, tự do cho nhân dân đến thực hiện công cuộc xây dựng chủ nghĩa xã hội. Con đường ấy đã là một lựa chọn tất yếu của lịch sử và sẽ là một lựa chọn tất yếu của tương lai, hướng đến mục tiêu “dân giàu, nước mạnh, dân chủ, công bằng, văn minh”. Mỗi người Việt Nam yêu nước, có lương tri hẳn đã tìm thấy cho mình một “con đường Hồ Chí Minh” mà chúng tôi gọi đó là “đường Hồ Chí Minh trong tâm”. Đó là con đường trong suy nghĩ, trong nhận thức, trong tình cảm, trong hành động, có khi rất lý tưởng, rất cách mạng mà cũng có khi rất giản dị, rất đời thường. Với độ “thấm” khác nhau, hẳn mỗi người có cách nghĩ và cách làm theo Bác Hồ khác nhau, nhất là khi việc học tập và làm theo tư tưởng, đạo đức,  phong cách Hồ Chí Minh đã trở thành một việc làm thường xuyên, hàng ngày.\r\n\r\nTrong nhiều năm qua, trực tiếp làm công tác tuyên truyền về việc học tập và làm theo tấm gương đạo đức Hồ Chí Minh theo các chỉ thị của Đảng, tác giả có điều kiện nghiên cứu về Hồ Chí Minh và tư tưởng của Người dưới góc độ tiếp cận của một người làm báo. Tác giả đã có một số bài viết được công bố trên các báo, tạp chí và ở các hội thảo khoa học. Được sự khích lệ và hỗ trợ của Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh, nay tác giả tập hợp lại thành sách Đường Hồ Chí Minh trong tâm, như là một cách bày tỏ lòng ngưỡng vọng đối với Chủ tịch Hồ Chí Minh và là một lời tự nhủ rằng sẽ nguyện đi theo con đường của Người. Đồng thời, tác giả cũng xin trân trọng gửi gắm lòng mong mỏi về sự chia sẻ, đồng hành của quý bạn đọc.', 1, 9),
(10, 'NGUYỄN TẤT THÀNH - HỒ CHÍ MINH MỘT HÀNH TRÌNH VĨ ĐẠI', 'Bia1_NTT_HCM_mothanhtrinhvidai.jpg', 4, 25000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2021-06-10', 'Sài Gòn - Chợ Lớn - Gia Định - Thành phố Hồ Chí Minh mãi tự hào là nơi Nguyễn Tất Thành - Hồ Chí Minh khởi đầu hành trình tìm đường cứu nước và là Thành phố vinh dự mang tên Người. Kỷ niệm 110 năm Ngày Bác Hồ đi tìm đường cứu nước (5/6/1911 - 5/6/2021). 80 năm Ngày Người về nước trực tiếp lãnh đạo cách mạng Việt Nam (28/1/1941 - 28/1/2021) và kỷ niệm 45 năm Ngày Thành phố Sài Gòn - Gia Định chính thức vinh dự mang lên Chủ tịch Hồ Chí Minh (2/7/1976 - 2/7/2021 ), Ban Tuyên giáo Thành ủy Thành phố Hồ Chí Minh tổ chức biên soạn sách Nguyễn Tất Thành - Hồ Chí Minh - Một hành trình vĩ đại, thể hiện những mốc son cơ bản trong hành trình 30 năm tìm đường cứu nước cứu dân của Chủ tịch Hồ Chí Minh.', 1, 9),
(11, 'TỎA NGÁT HƯƠNG SEN - NHỮNG TẤM GƯƠNG ĐIỂN HÌNH TRONG HỌC TẬP VÀ LÀM THEO BÁC (GIAI ĐOẠN 2016 - 2021)', 'Bia1Toangathuongsen.jpg', 6, 30000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2021-12-07', 'Sách điện tử Tỏa ngát hương sen là một trong những công trình tâm huyết, ý nghĩa của Đảng bộ thành phố Thủ Đức chào mừng kỷ niệm 131 năm Ngày sinh Chủ tịch Hồ Chí Minh (19/5/1890 - 19/5/2021); thể hiện sự ghi nhận, động viên kịp thời của Ban Chấp hành Đảng bộ thành phố Thủ Đức đối với những thành tích và đóng góp của các tập thể, cá nhân trong việc đẩy mạnh học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh.\r\n\r\nSách được thực hiện dưới hình thức sách điện tử (ebook), mọi người đều dễ dàng tiếp cận những bài viết được giới thiệu trong cuốn sách. Sách điện tử Tỏa ngát hương sen sẽ mang đến cho chúng ta một cái nhìn tương đối toàn diện về những nỗ lực, ý chí quyết tâm của Đảng bộ, Chính quyền, Nhân dân thành phố Thủ Đức trong tổ chức thực hiện Chỉ thị số 05-CT/TW của Bộ Chính trị giai đoạn 2016 - 2021, cũng là để góp phần đẩy mạnh công tác tuyên truyền, giới thiệu, nhân rộng những gương điển hình tiên tiến, những cách làm hay, hiệu quả, từ đó tạo động lực quan trọng để toàn hệ thống chính trị phấn đấu xây dựng thành phố Thủ Đức trở thành “Đô thị thông minh, sáng tạo; có chất lượng sống tốt, văn minh - hiện đại - nghĩa tình; phát triển nhanh và bền vững”.', 1, 9),
(12, 'KHÁT VỌNG HỒ CHÍ MINH: VIỆT NAM ĐỘC LẬP, TỰ DO, HẠNH PHÚC, DÂN CHỦ, PHỒN VINH, HÙNG CƯỜNG, SÁNH VAI VỚI CÁC CƯỜNG QUỐC NĂM CHÂU', 'khatvongHCM.jpg', 6, 55000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2021-10-05', 'Kỷ niệm 131 năm Ngày sinh của Chủ tịch Hồ Chí Minh (19/5/1890 - 19/5/2021), 110 năm Ngày Bác ra đi tìm đường cứu nước (5/6/1911 - 5/6/2021), Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh vừa cho ra mắt độc giả cuốn sách “Khát vọng Hồ Chí Minh: Việt Nam độc lập, tự do, hạnh phúc, dân chủ, phồn vinh, hùng cường, sánh vai với các  cường quốc năm châu” của PGS. TS. Bùi Đình Phong.\r\n\r\nĐây là một công trình nghiên cứu tỉ mỉ, nghiêm túc, cẩn trọng của PGS. TS. Bùi Đình Phong, với gần 500 trang và được cấu trúc thành ba chương: \r\n\r\nChương 1: Khát vọng Việt Nam độc lập, tự do, hạnh phúc, dân chủ, phồn vinh, hùng cường - Sợi chỉ đỏ xuyên suốt trong sự nghiệp cách mạng Hồ Chí Minh. \r\n\r\nChương 2: Khát vọng Hồ Chí Minh với Đại hội XIII của Đảng.\r\n\r\nChương 3: Thực hiện tâm nguyện của Chủ tịch Hồ Chí Minh và ước vọng của toàn dân dân tộc.\r\n\r\nTác phẩm chuyển tải những nghiên cứu bước đầu về mối quan hệ khăng khít giữa khát vọng của Hồ Chí Minh với nội dung các văn kiện Đại hội XIII của Đảng về khơi dậy khát vọng phát triển đất nước hùng cường, phồn vinh, hạnh phúc, bước tới đài vinh quang, sánh vai với các cường quốc năm châu. Khát vọng - Kỳ vọng - Quyết tâm - Đồng tâm - Tín tâm - Sáng tạo - Đổi mới là những điểm nhấn trong di sản Hồ Chí Minh và Đại hội XIII của Đảng.\r\n\r\nTheo tác giả Bùi Đình Phong, Đại hội XIII của Đảng vừa kết thúc thành công tốt đẹp. Những điểm mới, điểm nhấn của Đại hội là khơi dậy khát vọng phát triển đất nước, bảo đảm trên hết và trước hết là lợi ích quốc gia - dân tộc. Đại hội khẳng định với hướng đi đúng đắn, khát vọng phát triển mãnh liệt và quyết tâm chính trị cao, đất nước ta nhất định sẽ lập nên kỳ tích mới trong sự nghiệp xây dựng và bảo vệ Tổ quốc xã hội chủ nghĩa, thực hiện thành công tâm nguyện của Chủ tịch Hồ Chí Minh vĩ đại và ước vọng của toàn dân tộc.', 1, 9),
(13, 'KỂ TIẾP CHUYỆN BÁC HỒ', 'ketiepchuyenbacho.jpg', 6, 27000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2020-10-10', 'Năm 2020 chúng ta có nhiều ngày kỷ niệm đáng ghi nhớ. Đó là ngày kỷ niệm lần thứ 130 ngày sinh của Chủ tịch Hồ Chí Minh (19/5/1890 - 19/5/2020); kỷ niệm lần thứ 100 ngày Nguyễn Ái Quốc - Hồ Chí Minh tham dự Đại hội Tua, thành lập Đảng Cộng sản Pháp (30/12/1920); kỷ niệm lần thứ 90 ngày thành lập Đảng Cộng sản Việt Nam (03/02/1930 - 03/02/2020); kỷ niệm 75 năm ngày thành lập nước Việt Nam Dân chủ Cộng hòa (02/9/1945 - 02/9/2020)...\r\n\r\nNhân dịp này Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh cho ra mắt cuốn sách mới của tác giả Trần Quân Ngọc Kể tiếp chuyện Bác Hồ. Cuốn sách bao gồm một số bài viết của tác giả về hai mảng đề tài mà ông quan tâm tìm hiểu trong nhiều năm qua.\r\n\r\nỞ mảng đề tài thứ nhất - về những người bạn quốc tế của Bác Hồ - ngoài bài viết về người bạn Pháp là Pôn Vayăng Cutuyriê (trong thời kỳ thành lập Đảng Cộng sản Pháp) và một người bạn Haiti là Max Clanhvin Blôngcua (trong giai đoạn làm báo Le Paria - Người cùng khổ) đã công bố cách đây 30 năm, chúng tôi tập hợp một số bài của tác giả viết về những người bạn khác của Bác như Côlarốp V.P., Đimitrốp G.M, hai người Bungari từng đảm nhiệm trọng trách Tổng Bí thư Quốc tế Cộng sản do Lênin sáng lập; nhà văn Nhật Bản Kômátsu Kiyôshi, chính khách và nhà văn hóa Thái Lan Pridi Phanomyông, “Ông hoàng Đỏ” người Lào Xuphanuvông...\r\n\r\nỞ mảng đề tài thứ hai - một số sự kiện trong đời hoạt động cách mạng của Bác - tác giả đã sưu tầm được nhiều thông tin, tài liệu đáng tin cậy, chắp nối, liên kết lại với nhau, dựng lại một số sự kiện thú vị như quan hệ của Người với tổ chức hướng đạo sinh; về hai chuyến bí mật đi thăm Liên Xô trong những năm kháng chiến chống Pháp 1950 và 1952...\r\n\r\nCàng tìm hiểu kỹ những sự kiện đã diễn ra trong cuộc đời hoạt động cách mạng phong phú và gian truân của Bác, ta càng thêm yêu quý tấm lòng, đạo đức, càng thêm khâm phục tư tưởng của nhà yêu nước, của người chiến sĩ quốc tế Hồ Chí Minh.', 1, 9),
(14, 'NGHIÊN CỨU HỒ CHÍ MINH MỘT SỐ CÔNG TRÌNH TUYỂN CHỌN (TẬP 1: CHÍNH TRỊ - TƯ TƯỞNG - TỔ CHỨC)', 'nghiencuuhochiminhtap1.jpg', 3, 96000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2020-08-05', 'Bộ sách “Nghiên cứu Hồ Chí Minh - Một số công trình tuyển chọn” được kết cấu thành ba tập. Tập 1 tập trung vào những vấn đề chính trị, tư tưởng, tổ chức. Tập 2 là những chuyên luận về văn hóa, đạo đức, xã hội. Tập 3 đi sâu làm rõ những vấn đề đổi mới, hội nhập và phát triển.\r\n\r\nMỗi tập có nội dung cụ thể bám sát vào chủ đề, nhưng nhìn chung, cả ba tập là một chỉnh thể thống nhất về tư tưởng Hồ Chí Minh với ý nghĩa là hệ thống quan điểm toàn diện và sâu sắc về những vấn đề cơ bản của cách mạng Việt Nam và cách mạng giải phóng dân tộc ở các nước thuộc địa. Gắn kết cả ba tập sách, người đọc có thể nhận thấy trục xuyên suốt của bộ sách bắt đầu từ nhận thức của Đảng Cộng sản Việt Nam về tư tưởng Hồ Chí Minh và cuối cùng là tư tưởng Hồ Chí Minh mãi mãi soi đường cho sự nghiệp cách mạng của nhân dân Việt Nam giành thắng lợi.\r\n\r\nTập 1 làm rõ đường lối cách mạng Việt Nam: Giải phóng dân tộc theo con đường cách mạng vô sản với nội dung cụ thể là giải phóng dân tộc, xây dựng chế độ dân chủ nhân dân, tiến dần lên chủ nghĩa xã hội bỏ qua giai đoạn phát triển tư bản chủ nghĩa. Tác giả phân tích toàn diện tư tưởng Hồ Chí Minh về vấn đề dân tộc thuộc địa và cách mạng giải phóng dân tộc; về chủ nghĩa xã hội và con đường đi lên chủ nghĩa xã hội ở Việt Nam. Tác giả phân tích Hồ Chí Minh vận dụng và phát triển sáng tạo chủ nghĩa Mác - Lênin trong cách mạng giải phóng dân tộc và cách mạng xã hội chủ nghĩa. Những nội dung về hệ thống chính trị, trong đó có xây dựng Đảng trong điều kiện cầm quyền; về xây dựng Nhà nước của nhân dân, do nhân dân, vì nhân dân; về đại đoàn kết toàn dân tộc, kết hợp sức mạnh dân tộc với sức mạnh thời đại được trình bày khá đầy đủ, hệ thống.\r\n\r\nTập 2 bắt đầu bằng việc nêu rõ Nghị quyết 24C/18.6.5 của Khóa họp lần thứ 24 Đại hội đồng UNESCO ở Paris, từ ngày 20-10 đến ngày 20-11-1987, về kỷ niệm 100 năm Ngày sinh Chủ tịch Hồ Chí Minh, Anh hùng giải phóng dân tộc, Nhà văn hóa kiệt xuất Việt Nam. Trên cơ sở đó, công trình làm rõ những khía cạnh văn hóa cụ thể và vai trò của văn hóa trong cuộc đấu tranh giành độc lập dân tộc và xây dựng đất nước. Cùng với lĩnh vực văn hóa, các vấn đề về đạo đức, xã hội với những nội dung mới mẻ như an sinh xã hội, giá trị trường tồn của văn hóa, đạo đức Hồ Chí Minh trong lòng nhân loại tiến bộ được tác giả khai thác và phản ánh đậm nét.\r\n\r\nTập 3 là những nội dung khá rộng và mới, hầu như chưa được đề cập nhiều trong các giáo trình và cũng ít xuất hiện trong các sách chuyên khảo về Hồ Chí Minh của các tác giả trong và ngoài nước. Công trình cho thấy rằng, nhìn xuyên suốt từ tác phẩm Đường kách mệnh đến Di chúc, nói rộng ra là từ lúc ra đi tìm đường cứu nước đến tận cuối đời, sự nghiệp giải phóng dân tộc và xây dựng, phát triển đất nước của Hồ Chí Minh luôn luôn đổi mới, hội nhập và phát triển. Sự  nghiệp cách mạng đó thể hiện tư duy độc lập, tự chủ, sáng tạo, với trí tuệ, bản lĩnh, trách nhiệm cao trước nhân dân, Tổ quốc và nhân loại của Hồ Chí Minh, một con người cả cuộc đời vì nước, vì dân, không dính líu gì với vòng danh lợi.”', 1, 9),
(15, 'NGHIÊN CỨU HỒ CHÍ MINH MỘT SỐ CÔNG TRÌNH TUYỂN CHỌN (TẬP 2: VĂN HÓA - ĐẠO ĐỨC - XÃ HỘI)', 'nghiencuuhochiminhtap2.jpg', 5, 98000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2020-11-08', 'Bộ sách “Nghiên cứu Hồ Chí Minh - Một số công trình tuyển chọn” được kết cấu thành ba tập. Tập 1 tập trung vào những vấn đề chính trị, tư tưởng, tổ chức. Tập 2 là những chuyên luận về văn hóa, đạo đức, xã hội. Tập 3 đi sâu làm rõ những vấn đề đổi mới, hội nhập và phát triển.\r\n\r\nMỗi tập có nội dung cụ thể bám sát vào chủ đề, nhưng nhìn chung, cả ba tập là một chỉnh thể thống nhất về tư tưởng Hồ Chí Minh với ý nghĩa là hệ thống quan điểm toàn diện và sâu sắc về những vấn đề cơ bản của cách mạng Việt Nam và cách mạng giải phóng dân tộc ở các nước thuộc địa. Gắn kết cả ba tập sách, người đọc có thể nhận thấy trục xuyên suốt của bộ sách bắt đầu từ nhận thức của Đảng Cộng sản Việt Nam về tư tưởng Hồ Chí Minh và cuối cùng là tư tưởng Hồ Chí Minh mãi mãi soi đường cho sự nghiệp cách mạng của nhân dân Việt Nam giành thắng lợi.\r\n\r\nTập 1 làm rõ đường lối cách mạng Việt Nam: Giải phóng dân tộc theo con đường cách mạng vô sản với nội dung cụ thể là giải phóng dân tộc, xây dựng chế độ dân chủ nhân dân, tiến dần lên chủ nghĩa xã hội bỏ qua giai đoạn phát triển tư bản chủ nghĩa. Tác giả phân tích toàn diện tư tưởng Hồ Chí Minh về vấn đề dân tộc thuộc địa và cách mạng giải phóng dân tộc; về chủ nghĩa xã hội và con đường đi lên chủ nghĩa xã hội ở Việt Nam. Tác giả phân tích Hồ Chí Minh vận dụng và phát triển sáng tạo chủ nghĩa Mác - Lênin trong cách mạng giải phóng dân tộc và cách mạng xã hội chủ nghĩa. Những nội dung về hệ thống chính trị, trong đó có xây dựng Đảng trong điều kiện cầm quyền; về xây dựng Nhà nước của nhân dân, do nhân dân, vì nhân dân; về đại đoàn kết toàn dân tộc, kết hợp sức mạnh dân tộc với sức mạnh thời đại được trình bày khá đầy đủ, hệ thống.\r\n\r\nTập 2 bắt đầu bằng việc nêu rõ Nghị quyết 24C/18.6.5 của Khóa họp lần thứ 24 Đại hội đồng UNESCO ở Paris, từ ngày 20-10 đến ngày 20-11-1987, về kỷ niệm 100 năm Ngày sinh Chủ tịch Hồ Chí Minh, Anh hùng giải phóng dân tộc, Nhà văn hóa kiệt xuất Việt Nam. Trên cơ sở đó, công trình làm rõ những khía cạnh văn hóa cụ thể và vai trò của văn hóa trong cuộc đấu tranh giành độc lập dân tộc và xây dựng đất nước. Cùng với lĩnh vực văn hóa, các vấn đề về đạo đức, xã hội với những nội dung mới mẻ như an sinh xã hội, giá trị trường tồn của văn hóa, đạo đức Hồ Chí Minh trong lòng nhân loại tiến bộ được tác giả khai thác và phản ánh đậm nét.\r\n\r\nTập 3 là những nội dung khá rộng và mới, hầu như chưa được đề cập nhiều trong các giáo trình và cũng ít xuất hiện trong các sách chuyên khảo về Hồ Chí Minh của các tác giả trong và ngoài nước. Công trình cho thấy rằng, nhìn xuyên suốt từ tác phẩm Đường kách mệnh đến Di chúc, nói rộng ra là từ lúc ra đi tìm đường cứu nước đến tận cuối đời, sự nghiệp giải phóng dân tộc và xây dựng, phát triển đất nước của Hồ Chí Minh luôn luôn đổi mới, hội nhập và phát triển. Sự  nghiệp cách mạng đó thể hiện tư duy độc lập, tự chủ, sáng tạo, với trí tuệ, bản lĩnh, trách nhiệm cao trước nhân dân, Tổ quốc và nhân loại của Hồ Chí Minh, một con người cả cuộc đời vì nước, vì dân, không dính líu gì với vòng danh lợi.”', 1, 9),
(16, 'NGHIÊN CỨU HỒ CHÍ MINH MỘT SỐ CÔNG TRÌNH TUYỂN CHỌN (TẬP 3: ĐỔI MỚI - HỘI NHẬP - PHÁT TRIỂN)', 'nghiencuuhcmtapba.jpg', 5, 98000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2020-10-05', 'Bộ sách “Nghiên cứu Hồ Chí Minh - Một số công trình tuyển chọn” được kết cấu thành ba tập. Tập 1 tập trung vào những vấn đề chính trị, tư tưởng, tổ chức. Tập 2 là những chuyên luận về văn hóa, đạo đức, xã hội. Tập 3 đi sâu làm rõ những vấn đề đổi mới, hội nhập và phát triển.\r\n\r\nMỗi tập có nội dung cụ thể bám sát vào chủ đề, nhưng nhìn chung, cả ba tập là một chỉnh thể thống nhất về tư tưởng Hồ Chí Minh với ý nghĩa là hệ thống quan điểm toàn diện và sâu sắc về những vấn đề cơ bản của cách mạng Việt Nam và cách mạng giải phóng dân tộc ở các nước thuộc địa. Gắn kết cả ba tập sách, người đọc có thể nhận thấy trục xuyên suốt của bộ sách bắt đầu từ nhận thức của Đảng Cộng sản Việt Nam về tư tưởng Hồ Chí Minh và cuối cùng là tư tưởng Hồ Chí Minh mãi mãi soi đường cho sự nghiệp cách mạng của nhân dân Việt Nam giành thắng lợi.\r\n\r\nTập 1 làm rõ đường lối cách mạng Việt Nam: Giải phóng dân tộc theo con đường cách mạng vô sản với nội dung cụ thể là giải phóng dân tộc, xây dựng chế độ dân chủ nhân dân, tiến dần lên chủ nghĩa xã hội bỏ qua giai đoạn phát triển tư bản chủ nghĩa. Tác giả phân tích toàn diện tư tưởng Hồ Chí Minh về vấn đề dân tộc thuộc địa và cách mạng giải phóng dân tộc; về chủ nghĩa xã hội và con đường đi lên chủ nghĩa xã hội ở Việt Nam. Tác giả phân tích Hồ Chí Minh vận dụng và phát triển sáng tạo chủ nghĩa Mác - Lênin trong cách mạng giải phóng dân tộc và cách mạng xã hội chủ nghĩa. Những nội dung về hệ thống chính trị, trong đó có xây dựng Đảng trong điều kiện cầm quyền; về xây dựng Nhà nước của nhân dân, do nhân dân, vì nhân dân; về đại đoàn kết toàn dân tộc, kết hợp sức mạnh dân tộc với sức mạnh thời đại được trình bày khá đầy đủ, hệ thống.\r\n\r\nTập 2 bắt đầu bằng việc nêu rõ Nghị quyết 24C/18.6.5 của Khóa họp lần thứ 24 Đại hội đồng UNESCO ở Paris, từ ngày 20-10 đến ngày 20-11-1987, về kỷ niệm 100 năm Ngày sinh Chủ tịch Hồ Chí Minh, Anh hùng giải phóng dân tộc, Nhà văn hóa kiệt xuất Việt Nam. Trên cơ sở đó, công trình làm rõ những khía cạnh văn hóa cụ thể và vai trò của văn hóa trong cuộc đấu tranh giành độc lập dân tộc và xây dựng đất nước. Cùng với lĩnh vực văn hóa, các vấn đề về đạo đức, xã hội với những nội dung mới mẻ như an sinh xã hội, giá trị trường tồn của văn hóa, đạo đức Hồ Chí Minh trong lòng nhân loại tiến bộ được tác giả khai thác và phản ánh đậm nét.\r\n\r\nTập 3 là những nội dung khá rộng và mới, hầu như chưa được đề cập nhiều trong các giáo trình và cũng ít xuất hiện trong các sách chuyên khảo về Hồ Chí Minh của các tác giả trong và ngoài nước. Công trình cho thấy rằng, nhìn xuyên suốt từ tác phẩm Đường kách mệnh đến Di chúc, nói rộng ra là từ lúc ra đi tìm đường cứu nước đến tận cuối đời, sự nghiệp giải phóng dân tộc và xây dựng, phát triển đất nước của Hồ Chí Minh luôn luôn đổi mới, hội nhập và phát triển. Sự  nghiệp cách mạng đó thể hiện tư duy độc lập, tự chủ, sáng tạo, với trí tuệ, bản lĩnh, trách nhiệm cao trước nhân dân, Tổ quốc và nhân loại của Hồ Chí Minh, một con người cả cuộc đời vì nước, vì dân, không dính líu gì với vòng danh lợi.”', 1, 9),
(17, 'MỘT LÒNG THEO BÁC', 'motlongtheobacup.jpg', 5, 34000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2020-11-05', 'Nhân kỷ niệm 130 năm ngày sinh của Người \"Anh hùng giải phóng dân tộc và nhà văn hóa kiệt xuất của Việt Nam\" (19/5/1890 - 19/5/2020), tác giả tập hợp một số bài viết trước đây, đã phát biểu tại các cuộc Hội thảo khoa học do Thành phố Hồ Chí Minh tổ chức và những bài đã đăng trên các báo về một số nhà cách mạng tiền bối, xuất bản một tuyển tập tựa đề \"Một lòng theo Bác\", nhằm mục đích tôn vinh Chủ tịch Hồ Chí Minh vĩ đại, tri ân các vị \"khai sơn phá thạch\" và ghi công đông đảo học trò xuất sắc của Bác Hồ, đã một lòng theo Bác, học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh, cùng quân và dân cả nước góp phần xứng đáng vào thắng lợi trọn vẹn của sự nghiệp kháng chiến cứu nước chống ngoại xâm, làm rạng rỡ dân tộc ta\" .\r\n\r\nVề Tác giả Võ Anh Tuấn, tên thật là Nguyễn Văn An, sinh năm 1927 tại Thành phố Hồ Chí Minh. Từ năm 1945 - 1954: Công tác giáo dục - Phó Giám đốc Sở Giáo dục Nam Bộ. Từ năm 1955 - 1993: Công tác ngoại giao nhà nước tại Bộ Ngoại giao: Việt Nam Dân chủ Cộng hòa, Chính phủ Cách mạng Lâm thời Cộng hòa miền Nam Việt Nam, Cộng hòa xã hội chủ nghĩa Việt Nam. Từ 1993 - 2015: Công tác ngoại giao Đảng và ngoại giao nhân dân tại Thành ủy Thành phố Hồ Chí Minh.', 1, 9),
(18, 'KẾ THỪA VÀ PHÁT HUY NHỮNG GIÁ TRỊ DI SẢN HỒ CHÍ MINH', 'kethuavaphathuyup.jpg', 5, 50000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2020-12-05', 'Chủ tịch Hồ Chí Minh là vị lãnh tụ vĩ đại, người thầy kính yêu của Đảng và dân tộc ta, người chiến sĩ kiên cường trong phong trào cộng sản và công nhân quốc tế, người chiến sĩ đấu tranh không mệt mỏi cho hòa bình, hữu nghị và hợp tác giữa các dân tộc, một danh nhân văn hóa kiệt xuất của thế giới.\r\n\r\nNgười mất đi, nhưng đã để lại cho Đảng và nhân dân ta một di sản vô cùng to lớn và quý báu. Đó là bản thân cuộc đời và sự nghiệp cách mạng của Người, là tư tưởng, đạo đức, tác phong, phong cách của Người. Một con người từ buổi thiếu niên cho đến phút cuối cùng đã cống hiến trọn đời mình cho sự nghiệp đấu tranh giành độc lập, thống nhất đất nước, đem lại ấm no, hạnh phúc cho nhân dân.\r\n\r\nNhững cống hiến của người đối với cách mạng Việt Nam và cách mạng thế giới mãi mãi trường tồn.\r\n\r\nXuất phát từ long kính yêu vô hạn đối với Bác, nhân kỷ niệm 50 năm thực hiện Di chúc của Chủ tịch Hồ Chí Minh (02/9/1969 - 02/9/2019) và tiến tới kỷ niệm 130 năm Ngày sinh của người (19/5/1890 - 19/5/2020), chúng tôi xin tập hợp một số bài viết, bài nghiên cứu (đã in hoặc chưa in) về Chủ tịch Hồ Chí Minh trong quá trình công tác ở các Bảo tàng Hồ Chí Minh tại Hà Nội và TP. HCM cũng như sau này. Chúng tôi coi đây là món quà nhỏ dâng lên Bác kính yêu và gửi đến bạn đọc gần xa, góp phần tìm hiểu về cuộc đời và sự nghiệp của Bác, về tư tưởng, đạo đức, phong cách của Bác, về tình cảm, sự quan tâm đặc biệt của Bác đối với miền Nam và sự nghiệp giải phóng dân tộc, thống nhất đất nước, về những lời dặn dò của Người thể hiện trong Di chúc trước lúc Người đi xa…', 1, 9),
(19, 'BÁC HỒ VỚI CÔNG VIỆC VĂN PHÒNG', 'scan0253.jpg', 5, 26000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2019-10-05', 'Chủ tịch Hồ Chí Minh - Bác Hồ kính yêu của chúng ta là anh hùng dân tộc vĩ đại, nhà tư tưởng lỗi lạc, nhà văn hóa kiệt xuất và là tấm gương đạo đức ngời sáng.\r\n\r\nTrong những năm gần đây, ở nước ta đang chuyển từ cuộc vận động thành việc làm thường xuyên trong học tập và làm theo gương Chủ tịch Hồ Chí Minh với ba nội dung cơ bản về tư tưởng, đạo đức và phong cách. Cuốn sách là tập hợp một số bài viết xoay quanh chủ đề Bác Hồ với công việc văn phòng được sắp xếp theo hai phần chính:\r\n\r\nPhần thứ nhất: Một số bài viết về Bác Hồ với công việc văn phòng.\r\n\r\nPhần thứ hai: Một số bài viết của Bác Hồ có liên quan đến công việc văn phòng.\r\n\r\nCuốn sách Bác Hồ với công việc văn phòng được hoàn thành vào dịp kỷ niệm 50 năm cả nước ta thực hiện Di chúc thiêng liêng của Bác (1969 - 2019) và cũng là ký ức nhẹ nhàng của riêng tác giả nhân dịp 50 năm tốt nghiệp Khoa Lịch sử, Trường Đại học Tổng hợp Hà Nội để gia nhập đội ngũ những người làm công tác nghiên cứu, giảng dạy trong lĩnh vực quản trị văn phòng - văn thư - lưu trữ.', 1, 9),
(20, 'XÂY DỰNG ĐẤT NƯỚC PHỒN VINH THEO DI CHÚC CỦA CHỦ TỊCH HỒ CHÍ MINH', 'datnuocphonvinh.jpg', 5, 30000.00, 'Nhà Xuất Bản Tổng Hợp Thành Phố Hồ Chí Minh', '2019-10-06', 'Năm 2019, kỷ niệm lần thứ 129 ngày sinh Chủ tịch Hồ Chí Minh và 50 năm thực hiện Di chúc của Người. Do ý nghĩa đặc biệt ấy và với lòng thành kính nhớ ơn Người, được sự gợi ý của Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh, tôi viết cuốn sách Xây dựng đất nước phồn vinh theo Di chúc của Chủ tịch Hồ Chí Minh.\r\n\r\nCuốn sách được kết cấu thành 3 chương:\r\n\r\nChương 1: Mấy lời để lại - “Tuyệt đối bí mật”\r\n\r\nChương 2: Quốc bảo xây dựng đất nước đàng hoàng hơn, to đẹp hơn\r\n\r\nChương 3: Vì một Việt Nam phồn vinh, sánh vai với các cường quốc\r\n\r\nBa chương sách đi từ chỗ phân tích một số khía cạnh trong văn bản Di chúc đến quá trình hơn 30 năm đổi mới, Đảng và Nhà nước từng bước thực hiện theo Di chúc của Bác, cuối cùng là một vài suy nghĩ tiếp tục xây dựng Tổ quốc Việt Nam hùng cường, phồn vinh, hạnh phúc, sánh vai với các cường quốc năm châu, cùng nhịp bước với trào lưu tiến bộ của thế giới và ý nguyện hòa bình của nhân loại.\r\n\r\nĐây là một chủ đề lớn, có nhiều cách tiếp cận, cuốn sách chưa thể đề cập tất cả các vấn đề và chắc chắn còn nhiều khiếm khuyết. Tác giả mong bạn đọc thẳng thắn góp ý và lượng thứ cho những hạn chế. Nhân sách được xuất bản, tác giả chân thành cảm ơn Nhà xuất bản Tổng hợp Thành phố Hồ Chí Minh, đặc biệt là bạn đọc gần xa đã quan tâm đến chủ đề nghiên cứu. Xin trân trọng cảm ơn!', 1, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD PRIMARY KEY (`ma_chi_tiet`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ma_danhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_don`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoi_dung`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ma_sach`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  MODIFY `ma_chi_tiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ma_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `ma_sach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danhmuc` (`ma_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
