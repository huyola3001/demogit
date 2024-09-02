-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 04:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trac_nghiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `answer` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `muc_do` varchar(10) NOT NULL,
  `loai_cau_hoi` varchar(100) NOT NULL,
  `id_kien_thuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cau_hoi`
--

INSERT INTO `cau_hoi` (`id`, `noi_dung`, `answer`, `hinh_anh`, `muc_do`, `loai_cau_hoi`, `id_kien_thuc`) VALUES
(1, 'CSS là từ viết tắt của:', 'A.Creative Style Sheets;0::B.Computer Style Sheets;0::C.Cascading Style Sheets;1::D.Cascade Style Sheets;0', '', 'dễ', 'một đáp án', 1),
(2, 'Những điều nào sau đây là một thành phần của quy tắc kiểu CSS?(chọn 3 đáp án)', 'A.Selector;1::B.Property;1::C.Value;1::D.color;0', '', 'trung bình', 'nhiều đáp án', 1),
(3, 'Phần nào của file HTML được đặt mã tới external style sheet?\r\n ', 'A.Trong thẻ <body>;0::B.Ở phía cuối của file HTML;0::C.Ở phần đầu của file HTML;0::D.Trong thẻ <head>;1', '', 'dễ', 'một đáp án', 1),
(4, 'Thẻ HTML nào được sử dụng để khởi tạo internal style sheet?\r\n', 'A.Css;0::B.Text/style;0::C.Style;1::D.Script;0', '', 'dễ', 'một đáp án', 1),
(5, 'Thuộc tính HTML nào được sử dụng để khởi tạo inline style?\r\n\r\n', 'A.Font;0::B.Style;1::C.Css;0::D.Text;0', '', 'dễ', 'một đáp án', 1),
(6, 'Cú pháp CSS nào sau đây là chuẩn xác:', 'A.Body color:black};1::B.Body:color=black;0::C.{body:color=black(body};0::D.{body;color:black};0', '', 'dễ', 'một đáp án', 1),
(7, 'Làm thế nào để chèn 1 đoạn chú thích vào file CSS', 'A./* đoạn chú thích */;1::B.\' đoạn chú thích;0::C.// đoạn chú thích//;0::D.// đoạn chú thích;0', '', 'dễ', 'một đáp án', 1),
(8, 'Thuộc tính nào được sử dụng để thay đổi màu nền', 'A.Bgcolor;0::B.Background-color:;1::C.Color;0::D.Background;0', '', 'dễ', 'một đáp án', 1),
(9, 'Làm thế nào để gán màu nền vào tất cả các thẻ &lt;h1>\r\n\r\n', 'A.all.h1 {background-color:#FFFFFF};0::B.h1.all {background-color:#FFFFFF};0::C.h1 {background-color:#FFFFFF};1::D.h1.all {background:#FFFFFF};0', '', 'dễ', 'một đáp án', 1),
(10, 'Làm thế nào để thay đổi màu text của thẻ bất kỳ:', 'A.Text-color:;0::B.Color:;1::C.Tex-color=;0::D.Font-color:;0', '', 'dễ', 'một đáp án', 1),
(11, 'Thuộc tính CSS nào được sử dụng để điều khiển kích thước của text:\r\n', 'A.font-stye;0::B.text-style;0::C.font-size; ;1::D.text-size;0', '', 'dễ', 'một đáp án', 1),
(12, 'Cú pháp CSS nào được sử dụng để chuyển tất cả các thẻ <p> thành bold:', 'A.p {text-size:bold};0::B.p {font-weight:bold};1::C.Style:bold;0::D.p {font:bold};0', '', 'dễ', 'một đáp án', 1),
(13, 'Làm thế nào để hiển thị đường dẫn hyperlink không gạch dưới?\r\n', 'A.a {decoration:no underline};0::B.a {text-decoration:no underline};0::C.a {underline:none};0::D.a {text-decoration:none};1', '', 'dễ', 'một đáp án', 1),
(14, 'Làm thế nào để chuyển tất cả các ký tự đầu tiên thành chữ viết hoa:', 'A.Text-transform:uppercase;0::B.Text-transform:capitaliza;1::C.Không thể làm được với CSS;0::D.Text-transform: lowercase;0', '', 'dễ', 'một đáp án', 1),
(15, 'Làm thế nào để chuyển font của 1 thẻ bất kỳ:', 'A.Font-face:;0::B.Font-family:;1::C.F:;0::D.Font-style:;0', '', 'khó', 'một đáp án', 1),
(16, 'Làm thế nào để hiển thị nội dung text dưới dạng bold:', 'A.Font:b;0::B.Style:bold;0::C.Font-weight:bold;1::D.Font:bold;0', '', 'dễ', 'một đáp án', 1),
(17, 'Làm thế nào để hiển thị phần border như sau: The top border = 10 pixels, The bottom border = 5 pixels, The left border = 20 pixels, The right border = 1 pixel\r\n', 'A.Border-width:10px 20px 5px 1px;0::B.Border-width:10px 1px 5px 20px;1::C.Border-width:10px 5px 20px 1px;0::D.Border-width:5px 20px 10px 1px;0', '', 'dễ', 'một đáp án', 1),
(19, 'Để khởi tạo khoảng trống giữa border và nội dung, chúng ta sẽ sử dụng thuộc tính padding, nhưng có chấp nhận giá trị negative hay không:\r\n', 'A.Có;0::B.Không;1', '', 'dễ', 'một đáp án', 1),
(20, 'Làm thế nào để tạo danh sách hiển thị tất cả các thành phần trong ô vuông:\r\n', 'A.Type: square;0::B.List-style-type: square;1::C.List-type: square;0::D.style-type: square;0', '', 'dễ', 'một đáp án', 2),
(22, 'Làm thế nào để hình ở đầu mỗi dung của 1list (danh sách) có hình vuông?\r\n', 'A.type: 2;0::B.type: square;0::C.list-type: square;0::D.list-style-type: square;1', '', 'dễ', 'một đáp án', 2),
(23, 'Làm thế nào để bo tròn góc cạnh các phần tử?\r\n', 'A.border[round]: 30px;;0::B.corner-effect: round;;0::C.border-radius: 30px;;1::D.alpha-effect: round-corner;;0', '', 'dễ', 'một đáp án', 2),
(24, 'Làm sao để hiển thị liên kết mà ko có gạch chân bên dưới?\r\n', 'A.a {decoration:no underline};0::B.a {text-decoration:no underline};1::C.a {underline:none};0::D.a {text-decoration:none};0', '', 'trung bình', 'một đáp án', 2),
(25, 'Làm thế nào để chuyển từng từ trong chữ thành chữ hoa:', 'A.text-transform:capitalize;0::B.text-transform:uppercase;1::C.Không làm được với CSS;0::D.text-transform: lowercase;0', '', 'dễ', 'một đáp án', 2),
(26, '3 phương thức nào được sử dụng để style sheet với trang web:\r\n', 'A.Dreamweaver, GoLive hoặc FrontPage;0::B.Inline, embedded hoặc document level và external;1::C.Handcoded, Generated hoặc WYSIWYG;0::D.Handcoded, Generated, Dreamweaver;0', '', 'dễ', 'một đáp án', 2),
(27, 'Muốn liên kết xHTML với 1 file định nghĩa CSS ta dùng dòng nào sau đây?\r\n\r\n', 'A.&lt;style src=\"mystyle.css\">;0::B.&lt;stylesheet>mystyle.css</stylesheet>;0::C.&lt;link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\">;1::D.&lt;link rel=\"stylesheet\" style src=\"style.css\" type=type=\"text/css\">;0', '', 'dễ', 'một đáp án', 2),
(28, 'Loại CSS nào phổ biến nhất hiện nay?\r\n', 'A.CSS1;0::B.CSS2;0::C.CSS2.1;0::D.CSS3;1', '', 'dễ', 'một đáp án', 2),
(29, 'Thuộc tính nào định nghĩa CSS ngay trong 1 tag?\r\n', 'A.font;0::B.class;0::C.style;1::D.styles;0', '', 'dễ', 'một đáp án', 2),
(30, 'Làm thế nào để thêm bóng (shadow) cho các phần tử trong CSS3?\r\n', 'A.box-shadow: 10px 10px 5px grey;;1::B.shadow-right: 10px shadow-bottom: 10px;;0::C.shadow-color: grey;;0::D.alpha-effect[shadow]: 10px 10px 5px grey;;0', '', 'dễ', 'một đáp án', 2),
(31, 'Làm cách nào để tạo hiệu ứng chuyển tiếp transition bằng CSS3?\r\n', 'A.transition: width 2s; ;1::B.transition-duration: 2s;0 transition-effect: width; ;0::C.alpha-effect: transition (width,2s); ;0::D.None;0', '', 'dễ', 'một đáp án', 2),
(32, 'Làm thế nào để xoay phần tử trong CSS3?\r\n', 'A.transform: rotate(30deg);;0::B.rotate-object: 30deg;;1::C.transform: rotate-30deg-clockwise;;0::D.object-rotation: 30deg;;0', '', 'dễ', 'một đáp án', 2),
(33, 'Làm thế nào để bắt buộc đoạn text xuống dòng?', 'A.word-wrap: break-word;;1::B.text-wrap: break-word;;0::C.text-wrap: force; ;0::D.text-width: set;;0', '', 'trung bình', 'một đáp án', 2),
(34, '4 giá trị của border-radius lần lượt là? ', 'A.top, bottom, left, right ;0::B.up, down, front, behind ;0::C.top-left, top-right, bottom-right, bottom-left;1::D.bottom-left, bottom-right, top-right, top-left;0', '', 'trung bình', 'một đáp án', 2),
(35, 'Thuộc tính nào sử dụng để thay đổi kiểu danh sách hiển thị thành chữ số La Mã thay vì số bình thường?\r\n', 'A.list-style-type:upper-roman;;1::B.list-type:roman;;0::C.list-bullet-type:roman-numerals;;0::D.list-style:roman;;0', '', 'trung bình', 'một đáp án', 2),
(36, 'Điều nào sau đây định nghĩa một phép đo là phần trăm so với một giá trị khác, thường là một phần tử bao quanh?\r\n', 'A.% ;1::B.cm;0::C.em ;0::D.ex ;0', '', 'trung bình', 'một đáp án', 1),
(37, 'Những điều nào sau đây là đúng về định dạng Giá trị RGB của màu CSS?(chọn 3 đáp án)\r\n', 'A.rgb( );1::B.Thuộc tính này nhận ba giá trị, mỗi giá trị cho màu đỏ, xanh lục và xanh lam.;1::C.Giá trị có thể là số nguyên từ 0 đến 255 hoặc phần trăm.;1::D.Độ mờ.;0', '', 'trung bình', 'nhiều đáp án', 1),
(38, 'Làm cách nào để thay đổi kích thước hình ảnh background bằng CSS3?\r\n', 'A.background-size: 80px 60px;;1::B.bg-dimensions: 80px 60px;;0::C.background-proportion: 80px 60px;;0::D.alpha-effect: bg-resize 80px 60px;;0', '', 'trung bình', 'một đáp án', 1),
(39, 'Thuộc tính nào sau đây được sử dụng để thiết lập chiều cao của hình ảnh?\r\n', 'A.border;0::B.height;1::C.width;0::D.-moz-opacity;0', '', 'trung bình', 'một đáp án', 1),
(40, 'Thuộc tính nào sau đây của một phần tử bảng chỉ định độ rộng sẽ xuất hiện giữa các ô trong bảng?\r\n', 'A.border-collapse;0::B.border-spacing;1::C.caption-side;0::D.empty-cells;0', '', 'trung bình', 'một đáp án', 1),
(41, 'Thuộc tính nào sau đây chỉ định hình ảnh cho điểm đánh dấu chứ không phải dấu đầu dòng hoặc số?\r\n', 'A.list-style-type;0::B.list-style-position;0::C.list-style-image;1::D.list-style;0', '', 'trung bình', 'một đáp án', 1),
(43, 'Phát biểu nào sau đây là đúng khi nói về style sheet?\r\n\r\n', 'A.Có thể đặt trong thẻ meta;0::B.Không thể chứa nhiều hơn một luật(rule) ;0::C.Có thể đặt ở một file bên ngoài và không được liên kết với trang html;0::D.Có thể đặt trong một trang html;1', '', 'dễ', 'một đáp án', 2),
(44, 'Trong mã màu hệ RGB dạng hệ thập lục, #FFFFFF là màu gì?\r\n', 'A.Đen;0::B.Trắng;1::C.Đỏ;0::D.Xanh;0', '', 'khó', 'một đáp án', 2),
(45, 'Thuộc tính ___chỉ định thứ tự ngăn xếp của một phần tử\r\n', 'A.d-index;0::B.s-index;0::C.x-index;0::D.z-index.;1\r\n', '', 'khó', 'một đáp án', 2),
(46, 'RGBa có nghĩa là gì?\r\n', 'A.Red Green Blue alpha;1::B.Red Gray Brown alpha;0::C.Red Gold Black alpha;0::D.Red Gray Black alpha;0', '', 'dễ', 'một đáp án', 2),
(47, 'Để thay đổi chiều cao mỗi hàng trong văn bản, trong CSS ta dùng thuộc tính gì?\r\n', 'A.height: 20px;;0::B.line-spacing: 20px;0::C.line-height: 20px;1::D.row-height: 20px;0', '', 'khó', 'một đáp án', 2),
(48, 'Câu 49 Cho đoạn mã HTML sau\r\nĐể CSS riêng cho thẻ p nằm giữa (vị trí số 2) thì những selectors nào sau đây có thể dùng được?\r\n', 'A.paragraph.p2;1::B.p,p2;1::C.div paragraph;0::D.p2;0', 'images/cau_hoi_1.png', 'dễ', 'nhiều đáp án', 1),
(49, 'Độ ưu tiên CSS theo thứ tự là gì?\r\n', 'A.inline > id > class > tag;1::B.tag > class > id > inline;0::C.inline > class > id > tag;0::D.tag > id > inline > class;0', '', 'khó', 'một đáp án', 2),
(50, 'Dòng nào thể hiện đúng một comment (lời chú thích) trong CSS?\r\n', 'A./* this is a comment */1::B.// this is a comment //0::C.“this is a comment” 0::D.// this is a comment//;;0\r\n', '', 'khó', 'một đáp án', 1),
(51, 'Hình dưới đây đã sử dụng các thuộc tính nào', 'A.border-style: solid;\nborder-bottom-right-radius:15px;;0::B.border-style: dotted;\nborder-bottom-left-radius:15px;;0::C.border-style: dashed;\nborder-bottom-left-radius:15px;;1::D.border-style: dotted;\nborder-bottom-right-radius:15px;;0', 'images/cau_hoi_3.png', 'trung bình', 'một đáp án', 1),
(52, 'Thuộc tính nào sử dụng để xác định khoảng thời gian trì hoãn giữa thời gian một thuộc tính thay đổi và lúc chuyển tiếp thực sự bắt đầu.\r\n', 'A.transform-delay;0::B.transition-delay;1::C.transform-duration;0::D.Không có đáp án chính xác.;0', '', 'trung bình', 'một đáp án', 1),
(53, 'Hình ảnh dưới đây sử dụng thuộc tính nào của align-items:', 'A.center;0::B.stretch;0::C.flex-end;1::D.baseline;0', 'images/cau_hoi_4.png', 'trung bình', 'một đáp án', 1),
(54, 'Thuộc tính nào sẽ biến đổi phần tử từ trạng thái A sang trạng thái B?', 'A.transform: perspective(200px);;0::B.transform: skew(45deg, 45deg);;0::C.transform: scale(0.5);;1::D.transform: scale(0.25);;0', 'images/cau_hoi_5.png', 'trung bình', 'một đáp án', 1),
(55, 'Selector nào hướng mục tiêu tới phần tử <li> cuối cùng?', 'A.ul li:last-child;1::B.ul:last-child li;0::C.ul:last-child(li);0::D.ul:lastchild(li);0', 'images/cau_hoi_1.png', 'trung bình', 'một đáp án', 1),
(56, 'Màu nền cuối cùng của div này sẽ là gì?', 'A.Màu vàng - vì id có mức độ ưu tiên cao hơn các đối tượng còn lại;1::B.Màu đen- vì định dạng class .đen nằm sau định dạng id #yellow. ;0::C.Màu vàng đậm - mix của vàng và đen;0::D.Không hiển thị màu;0', 'images/cau_hoi_7.png', 'trung bình', 'một đáp án', 2),
(58, 'CSS selector nào để chọn thẻ con trực tiếp của thẻ khác?', 'A.element > element;1::B.element element;0::C.element + element;0::D.element < element;0', '', 'trung bình', 'một đáp án', 2),
(59, 'Thuộc tính nào sau đây xác định khoảng thời gian mà quá trình transition diễn ra?\r\n', 'A.transition;0::B.transition-duration;1::C.transform-duration;0::D.transition-property;0', '', 'trung bình', 'một đáp án', 2),
(60, 'Thuộc tính transform nào sau đây sử dụng để xử lý phép biến đổi 3D thay đổi độ rộng và chiều cao của phần tử?\r\n', 'A.circle(x,y,z);0::B.scale3d(x,y,z);1::C.rotate3d(x,y,z,angle);0::D.rotate(angle);0', '', 'trung bình', 'một đáp án', 2),
(61, 'Bộ chọn :focus dùng để chọn tất cả các phần tử ___,___,___đang được người dùng truy cập vào(chọn 3) \n', 'A.input;1::B.textarea;1::C.select;1::D.button;0', '', 'trung bình', 'nhiều đáp án', 2),
(62, 'Ba giá trị đầu tiên của text-shadow theo thứ tự là gì?\r\n', 'A.vertical, blur, horizontal;0::B.blur, vertical, horizontal;0::C.vertical, horizontal, blur;0::D.horizontal, vertical, blur;1', '', 'trung bình', 'một đáp án', 1),
(63, 'Cần thêm tiền tố nào để các thuộc tính CSS3 hoạt động trên trình duyệt Mozilla Firefox cũ?\r\n', 'A.-webkit- ;0::B.-moz- ;1::C.-o- ;0::D.-gecko-;0', '', 'trung bình', 'một đáp án', 1),
(64, 'Lệnh chuyển đổi (transform) hợp lệ trong CSS3 là ?\r\n', 'A.matrix();1::B.modify();0::C.skip();0::D.simulate();;0\r\n', '', 'trung bình', 'một đáp án', 1),
(65, 'Trong một bảng, làm thể nào để có màu nền các hàng xen kẽ nhau?\r\n', 'A.tr:even{background-color:#CCC;};0::B.td:even{background-color:#CCC;};0::C.td:nth-child(even){background-color:#CCC;};0::D.tr:nth-child(even){background-color:#CCC;};1', '', 'trung bình', 'một đáp án', 1),
(66, 'Làm thế nào để thêm hình ảnh xuất hiện trên đường viền cho các phần tử trong CSS3?\r\n', 'A.border: url(image.png);;0::B.border-variable: image url(image.png);;0::C.border-image: url(border.png) 30 30 round;;1::D.Không thêm được hình ảnh xuất hiện trên đường viền;0', '', 'trung bình', 'một đáp án', 1),
(67, 'Đâu là cách để chuyển đổi kích thước/tỷ lệ phần tử bằng CSS3?\r\n', 'A.transform: scale(2,4);;1::B.scale-object: 2,4;;0::C.scale: (2,4);;0::D.None;0', '', 'trung bình', 'một đáp án', 2),
(68, 'Đâu là cách để tạo một email link?\r\n\r\n', 'A.A href=\"xxx@yyy.com\";0::B.A href=mailto:xxx@yyy.com;1::C.Mail href=\"xxx@yyy.com\" ;0::D.Không có đáp án đúng;0', '', 'trung bình', 'một đáp án', 2),
(69, 'Đâu là thẻ sử dụng để tạo một danh sách liệt kê có các bullet ở đầu dòng?\r\n\r\n', 'A.List;0::B.OI;0::C.UI;0::D.DI;1', '', 'trung bình', 'một đáp án', 2),
(70, 'Color: rgb(255,255,255)\r\n\r\n', 'A.Red;0::Green;0::B.Black;0::C.White;1', '', 'trung bình', 'một đáp án', 2),
(71, 'Muốn tạo bo 4 góc đường viền cho thẻ sử dụng thuộc tính nào?\r\n', 'A.Border-color: value;;0::B.Border-width: ?px;;0::C.Border-radius: ?px;;1::D.Border-right: width type color;;0', '', 'trung bình', 'một đáp án', 2),
(72, 'Chọn đáp án đúng\r\n@media screen and (max-width: 600px) {\r\n  div.example {\r\n    display: none;\r\n  }\r\n}\r\n\r\n', 'A.khối div sẽ ẩn khi kích thước màn hình lớn hơn 600;0::B.Khối div sẽ ẩn  khi kích thước màn hình nhỏ hơn hoặc bằng 600;1::C.Khối div sẽ ẩn khi kích thước màn hình bằng 600;0::D.Khối div sẽ ẩn khi kích thước màn hình nhỏ hơn 600;0', '', 'trung bình', 'một đáp án', 2),
(73, 'Muốn tạo đường viền phải cho thẻ sử dụng thuộc tính nào?\r\n', 'A.Border-top: width type color;;0::B.Border-bottom: width type color;;0::C.Border-left: width type color;;0::D.Border-right: width type color;;1', '', 'trung bình', 'một đáp án', 2),
(74, 'Chọn các đáp án đúng:\r\nĐể căn chỉnh các thành phần con như hình,ta phải sử dụng kết hợp các thuộc tính nào trong phần tử cha \r\n', 'A.float:left;0::B.align-items: flex-start;0::C.display:flex;;1::D.align-items: baseline;0::E.display: inline;;0::F.align-items: flex-end;1::G.align-items: stretch; ;0::H.display: inline-block;0', 'images/cau_hoi_8.png', 'khó', 'nhiều đáp án', 1),
(75, 'Câu lệnh dưới đây thực hiện bo góc lần lượt là:\r\nborder-radius: 15px 50px 30px;\r\n', 'A.giá trị đầu tiên áp dụng cho góc trên cùng bên trái, giá trị thứ hai áp dụng cho góc trên cùng bên phải, giá trị thứ ba áp dụng cho góc dưới cùng bên phải;0::B.giá trị đầu tiên áp dụng cho góc trên cùng bên trái, giá trị thứ hai áp dụng cho góc trên cùng bên phải, giá trị thứ ba áp dụng cho góc dưới cùng bên trái;0::C.giá trị đầu tiên áp dụng cho góc trên cùng bên trái, giá trị thứ hai áp dụng cho góc trên cùng bên phải và dưới cùng bên trái và giá trị thứ ba áp dụng cho góc dưới cùng bên phải;1::D.giá trị đầu tiên áp dụng cho góc trên cùng bên trái, giá trị thứ hai áp dụng cho góc trên cùng bên phải và dưới cùng bên phải và giá trị thứ ba áp dụng cho góc dưới cùng bên trái;0', '', 'khó', 'một đáp án', 2),
(76, 'Giá trị thứ 3 trong dòng code dưới dùng để:\r\nh1 {\r\n     text-shadow: 2px 2px 5px red;\r\n}\r\n\r\n', 'A.Chỉnh size bóng;0::B.Xác định bóng ngang;0::C.Thêm hiệu ứng mờ vào bóng;1::D.Xác định bóng dọc;0', '', 'khó', 'một đáp án', 2),
(77, 'div sẽ thay đổi như nào trong dòng code bên dưới:\r\ndiv{\r\nwidth: 100px;\r\nheight: 100px;\r\n    background: red;\r\n    transition: width 2s;\r\n}\r\ndiv:hover{\r\n    background: green;\r\nwidth: 300px;\r\n}\r\n\r\n', 'A. Không thay đổi;0::B.Khi di chuột vào div chiều dài div sẽ chuyển ngay sang kích thước 300px;0::C.Khi di chuột vào div chiều dài sẽ chuyển sang kích thước 300 trong 2s;0::D..Khi di chuột vào div background sẽ chuyển sang màu xanh và chiều dài div sẽ chuyển sang kích thước 300px trong 2s;1', '', 'khó', 'một đáp án', 2),
(78, 'Cách thêm danh sách các bóng đúng\r\n', 'A.text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; ;1::B.text-shadow: 0 0 3px #FF0000; 0 0 5px #0000FF; ;0::C.text-shadow: 0 0 3px #FF0000 0 0 5px #0000FF; ;0::D.text-shadow: 0 0 3px #FF0000. 0 0 5px #0000FF;;0', '', 'khó', 'một đáp án', 2),
(79, 'Vai trò của CSS trong phát triển website là gì?\r\n\r\n', 'A.Định dạng, trang trí, layout các thành phần trên web. ;1::B.Cung cấp các thẻ xây dựng cấu trúc khung của trang web. ;0::C.Xử lý logic và tương tác người dùng. ;0::D.Cung cấp các tính năng để kiểm soát hiệu năng web. ;0', '', 'khó', 'một đáp án', 2),
(80, 'Điều gì xảy ra khi trình duyệt không hỗ trợ font chữ Cursive hoặc Helvetica', 'A.Văn bản sẽ hiển thị Verdana;1::B.Văn bản sẽ hiển thị Cursive ;0::C.Văn bản không hiển thị Verdana;0::D.Văn bản sẽ hiển thị Helvetica ;0\n', 'images/cau_hoi_9.png', 'khó', 'một đáp án', 2),
(81, '”Hi” hiển thị màu nào?', 'A.Red;0::B.Green;0::C.Black;1::D.Không hiển thị;0', 'images/cau_hoi_10.png', 'khó', 'một đáp án', 2),
(82, 'Nếu bạn muốn thanh điều hướng của mình vẫn hiển thị ngay cả khi người dùng cuộn xuống, bạn nên sử dụng loại thuộc tính nào của thẻ position?\r\n', 'A.Relative;0::B.Static;0::C.Fixed;1::D.Absolute;0', '', 'khó', 'một đáp án', 1),
(83, 'Thuộc tính CSS nào được sử dụng để chọn tất cả các phần tử được cung cấp trong một giá trị phạm vi cụ thể?\r\n', 'A.:last;0::B.:in-range;1::C.:long;0::D.:invalid;0', '', 'khó', 'một đáp án', 1),
(85, 'Thuộc tính nào trong CSS được sử dụng để đặt kích thước và vị trí mục lưới trong bố cục lưới?\r\n', 'A.layout-area;0::B.input -area;0::C.text-area;0::D.grid-area;1', '', 'khó', 'một đáp án', 1),
(86, 'Thuộc tính transform nào sau đây dùng để xử lý phép biến đổi 3D sử dụng ma trận 4×4 gồm 16 giá trị?\r\n\r\n', 'A.matrix3d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n);1::B.matrix(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n);0::C.matrix2d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n) ;0::D.Tất cả các đáp án trên đều chính xác.;0', '', 'khó', 'một đáp án', 1),
(87, 'CSS selector nào để chọn thẻ con trực tiếp của thẻ khác?\r\n\r\n', 'A.element > element;1::B.element element;0::C.element + element;0::D.element < element;0', '', 'khó', 'một đáp án', 1),
(88, 'Làm thế nào để bạn hiển thị một đường viền như thế này:\r\nĐường viền trên cùng = 10 pixel\r\nĐường viền dưới cùng = 5 pixel\r\nĐường viền bên trái = 20 pixel\r\nĐường viền bên phải = 1pixel?\r\n\r\n', 'A.border-width:10px 5px 20px 1px;;0::B.border-width:10px 20px 5px 1px;;0::C.border-width:10px 1px 5px 20px;;1::D.border-width:5px 20px 10px 1px;;0', '', 'khó', 'một đáp án', 1),
(89, 'Điền đáp án đúng:\r\nMuốn giảm tỉ lệ hình ảnh nếu cần,nhưng không được tăng kích thước lớn hơn  kích thước ban đầu của nó ta nên để width bằng ___\r\n\r\n', '100%;1', '', 'khó', 'điền', 1),
(90, 'Điền vào chỗ trống\r\nID có độ ưu tiên cao hơn class. Có thể sử dụng nhiều thuộc tính ID trên một trang nhưng mỗi giá trị Id là___\r\n', 'duy nhất;1\r\n', '', 'khó', 'điền', 1),
(91, 'Điền đáp án đúng\r\nThuộc tính  _____ của transition-timing-function dùng để xác định tốc độ chuyển đổi chậm dần khi kết thúc. \r\n\r\n', 'ease-out;1', '', 'khó', 'điền', 2),
(92, 'Điền vào chỗ trống:\r\ntransform: scale(0.5, 0.5) làm ____một nửa chiều dài và chiều rộng\r\n\r\n', 'giảm;1', '', 'khó', 'điền', 2),
(93, 'Thuộc tính text-indent dùng để?', 'A.Thiết lập khoảng cách thụt đầu dòng;1::B.Thiết lập chế độ canh văn bản;0::C.Thêm hiệu ứng đặc biệt cho văn bản;0::D.Tất cả đều sai;0', '', 'khó', 'một đáp án', 1),
(94, 'Làm sao để thay đổi font của mỗi phần tử?\r\n', 'A.font=;0::B.font:;0::C.font-family:;1::D.font-family= ;0', '', 'khó', 'một đáp án', 1),
(95, 'Để định nghĩa khoảng trống giữa các cạnh (viền) của phần tử và nội dung, bạn sử dụng thuộc tính padding, có thể gán giá trị âm cho thuộc tính này không?\r\n\r\n', 'A.Có;0::B.Không;1::C.Chỉ có thể ở một vài trường hợp đặc biệt;0::D.Tùy theo trình duyệt người dùng;0', '', 'khó', 'một đáp án', 1),
(96, 'a:hover là:', 'A.Liên kết chưa thăm;0::B.Mouse over một thành phần;1::C.Liên kết đã thăm;0::D.Kích hoạt một thành phần;0', '', 'khó', 'một đáp án', 1),
(97, 'Lệnh CSS được viết lẫn vào HTML nhưng khi viết có thẻ _______,viết theo tên thẻ ở thuộc tính style=”hoặc viết ra một file riêng và đặt tên có phần mở rộng là .css', '<style></style>;1\r\n', '', 'khó', 'điền', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_de_thi`
--

CREATE TABLE `chi_tiet_de_thi` (
  `id` int(11) NOT NULL,
  `ngay_thi` timestamp NOT NULL DEFAULT current_timestamp(),
  `ket_qua` varchar(10) NOT NULL,
  `diem` double NOT NULL,
  `id_de_thi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `so_cau_dung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_de_thi`
--

INSERT INTO `chi_tiet_de_thi` (`id`, `ngay_thi`, `ket_qua`, `diem`, `id_de_thi`, `id_user`, `so_cau_dung`) VALUES
(12, '2022-12-24 14:13:24', 'fail', 40, 2, 2, 4),
(13, '2022-12-25 05:39:09', 'fail', 40, 2, 2, 4),
(14, '2022-12-25 05:40:28', 'pass', 80, 2, 2, 8),
(15, '2022-12-25 08:15:23', 'fail', 0, 2, 2, 0),
(16, '2022-12-25 08:15:33', 'fail', 0, 2, 2, 0),
(17, '2022-12-25 08:16:48', 'fail', 0, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `de_thi`
--

CREATE TABLE `de_thi` (
  `id` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `id_kien_thuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `de_thi`
--

INSERT INTO `de_thi` (`id`, `id_khoa_hoc`, `id_kien_thuc`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(255) NOT NULL,
  `mo_ta` varchar(2000) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id`, `ten_khoa_hoc`, `mo_ta`, `hinh_anh`) VALUES
(1, 'Khoá học CSS cơ bản', 'Mọi lập trình viên Front-end đều phải nắm chắc kiến thức về CSS để tạo nên một giao diện website đẹp mắt. Để chia được bố cục cho website thành các cột các hàng, để thay đổi màu sắc cho văn bản hoặc các nút ấn, chúng ta đều sẽ sử dụng CSS. ', 'images/css.jpg'),
(2, 'Khoá học HTML ', 'HTML là một trong những dạng code phổ biến trong nghề lập trình ở phạm vi toàn thế giới. Tuy nhiên, với các lập trình viên mới vào nghề sẽ gặp phải một số khó khăn trong việc học ngôn ngữ HTML để đạt được hiệu quả cao kh', 'images/html.jpg'),
(3, 'Khoá học JavaScript', 'Javascript là ngôn ngữ có thể được dùng cho cả phía client và phía server. Nó nhỏ,nhẹ và là một ngôn ngữ hướng đối tượng. Javascript được sử dụng rộng rãi cho các trang web và các ứng dụng. Giúp người học hiểu được những chức năng cơ bản của javascript để có thể xây dựng được các trang web động và các ứng dụng web.', 'images/js.jpg'),
(4, 'Khoá học Java cơ bản', 'Khóa học Java căn bản bao gồm tất cả nội dung kiến thức về java core (J2SE). Đáp ứng nhu cầu kiến thức và kỹ năng về ngôn ngữ lập trình java và là bước đệm cho các lập trình viên muốn tìm hiểu về ngôn ngữ java nâng cao hay học tiếp ngôn ngữ lập trình Android.', 'images/java.png');

-- --------------------------------------------------------

--
-- Table structure for table `khoi_kien_thuc`
--

CREATE TABLE `khoi_kien_thuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoi_kien_thuc`
--

INSERT INTO `khoi_kien_thuc` (`id`, `ten`, `id_khoa_hoc`) VALUES
(1, 'cơ bản', 1),
(2, 'nâng cao', 1),
(3, 'vận dụng', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'hoanghuy@gmail.com', '123456', 0),
(2, 'hoanghuyy@gmail.com', '123', 1),
(5, 'linda123@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kien_thuc` (`id_kien_thuc`);

--
-- Indexes for table `chi_tiet_de_thi`
--
ALTER TABLE `chi_tiet_de_thi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_de_thi` (`id_de_thi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `de_thi`
--
ALTER TABLE `de_thi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khoa_hoc` (`id_khoa_hoc`),
  ADD KEY `id_kien_thuc` (`id_kien_thuc`);

--
-- Indexes for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoi_kien_thuc`
--
ALTER TABLE `khoi_kien_thuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khoa_hoc` (`id_khoa_hoc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `chi_tiet_de_thi`
--
ALTER TABLE `chi_tiet_de_thi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `de_thi`
--
ALTER TABLE `de_thi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khoi_kien_thuc`
--
ALTER TABLE `khoi_kien_thuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD CONSTRAINT `cau_hoi_ibfk_1` FOREIGN KEY (`id_kien_thuc`) REFERENCES `khoi_kien_thuc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_de_thi`
--
ALTER TABLE `chi_tiet_de_thi`
  ADD CONSTRAINT `chi_tiet_de_thi_ibfk_1` FOREIGN KEY (`id_de_thi`) REFERENCES `de_thi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_de_thi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `de_thi`
--
ALTER TABLE `de_thi`
  ADD CONSTRAINT `de_thi_ibfk_1` FOREIGN KEY (`id_khoa_hoc`) REFERENCES `khoa_hoc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `de_thi_ibfk_2` FOREIGN KEY (`id_kien_thuc`) REFERENCES `khoi_kien_thuc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `khoi_kien_thuc`
--
ALTER TABLE `khoi_kien_thuc`
  ADD CONSTRAINT `khoi_kien_thuc_ibfk_1` FOREIGN KEY (`id_khoa_hoc`) REFERENCES `khoa_hoc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
