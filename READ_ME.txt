Hướng dẫn cài đặt:
Yêu cầu:
	- Có hệ quản trị cơ sở dữ liệu Mysql (Phiên bản đã sử dụng : 5.0.10 )
	- Có web server VD: apache (Phiên bản đã sử dụng: 2.4.3)

Cài đặt tập tin:
	- Copy thư mục vào root của localhost và chạy link tương ứng

Cấu hình:
	- Cài đặt link cho trang web trong file config.php
	VD: define ('__SITE_LINK', 'http://localhost/citc-phantom/');
	- Cấu hình database với các thông số cơ bản.
	VD: // database information
		define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASS', '');
		define('DB_NAME', 'citc_phantom');

Database:
	- Tên và các tham số database tạo giống như bạn đã cấu hình.
	- import file citc_phantom.sql trong thư mục vào database tương ứng.
 