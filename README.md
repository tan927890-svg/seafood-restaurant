# 🦞 Nhà Hàng Hải Sản Biển Xanh - Website

Website nhà hàng hải sản chuyên nghiệp được xây dựng bằng PHP, HTML, CSS và JavaScript.

## 📋 Tính Năng

### Phần Khách Hàng:
- ✅ Trang chủ với thiết kế hiện đại, responsive
- ✅ Giới thiệu nhà hàng
- ✅ Thực đơn đặc biệt với hình ảnh và giá cả
- ✅ Thư viện hình ảnh
- ✅ Form đặt bàn trực tuyến
- ✅ Thông tin liên hệ
- ✅ Smooth scrolling và animations
- ✅ Mobile responsive

### Phần Quản Trị:
- ✅ Đăng nhập admin bảo mật
- ✅ Dashboard thống kê
- ✅ Quản lý đặt bàn
- ✅ Xác nhận/Hủy đặt bàn
- ✅ Xem danh sách đặt bàn

## 🚀 Cài Đặt

### Yêu Cầu Hệ Thống:
- PHP 7.4 trở lên
- MySQL 5.7 trở lên
- Apache/Nginx web server
- XAMPP/WAMP/LAMP (khuyến nghị cho môi trường phát triển)

### Các Bước Cài Đặt:

#### 1. Clone hoặc tải project về máy
```bash
# Đặt folder vào thư mục htdocs (XAMPP) hoặc www (WAMP)
```

#### 2. Tạo Database
```bash
# Mở phpMyAdmin (http://localhost/phpmyadmin)
# Tạo database mới tên: seafood_restaurant
# Import file: database/setup.sql
```

Hoặc chạy SQL trực tiếp:
```sql
CREATE DATABASE seafood_restaurant CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Sau đó import file `database/setup.sql`

#### 3. Cấu Hình Database
Mở file `config/database.php` và chỉnh sửa thông tin kết nối:

```php
define('DB_HOST', 'localhost');     // Host database
define('DB_USER', 'root');          // Username
define('DB_PASS', '');              // Password
define('DB_NAME', 'seafood_restaurant');  // Tên database
```

#### 4. Chạy Website
```bash
# Khởi động XAMPP/WAMP
# Mở trình duyệt và truy cập:
http://localhost/seafood-restaurant-php/
```

## 📁 Cấu Trúc Thư Mục

```
seafood-restaurant-php/
│
├── admin/                      # Phần quản trị
│   ├── login.php              # Trang đăng nhập admin
│   ├── dashboard.php          # Trang quản lý
│   ├── logout.php             # Đăng xuất
│   └── update-booking.php     # Cập nhật trạng thái đặt bàn
│
├── config/                     # Cấu hình
│   └── database.php           # Kết nối database
│
├── css/                        # Stylesheets
│   └── style.css              # CSS chính
│
├── database/                   # Database
│   └── setup.sql              # File SQL tạo database
│
├── includes/                   # Các file include
│   └── menu-items.php         # Danh sách thực đơn
│
├── js/                         # JavaScript
│   └── script.js              # JS chính
│
├── index.php                   # Trang chủ
└── process-booking.php        # Xử lý đặt bàn
```

## 🔐 Đăng Nhập Quản Trị

```
URL: http://localhost/seafood-restaurant-php/admin/login.php

Tài khoản mặc định:
- Username: admin
- Password: admin123
```

⚠️ **LƯU Ý**: Đổi mật khẩu ngay sau khi cài đặt để bảo mật!

## 🎨 Tính Năng Nổi Bật

### Responsive Design
- Tự động điều chỉnh giao diện cho mobile, tablet, desktop
- Hamburger menu cho thiết bị di động
- Touch-friendly interface

### Form Validation
- Validate số điện thoại (10-11 chữ số)
- Kiểm tra ngày đặt bàn (phải từ hôm nay trở đi)
- Kiểm tra giờ mở cửa (10:00 - 22:00)
- Thông báo lỗi thân thiện

### Database Security
- Prepared statements để chống SQL Injection
- Password hashing với bcrypt
- Input sanitization
- Session management bảo mật

## 🛠️ Tùy Chỉnh

### Thay Đổi Màu Sắc:
Chỉnh sửa file `css/style.css`:
```css
/* Màu chủ đạo */
#006994 - Xanh dương chính
#0a4d68 - Xanh dương đậm
#ffd700 - Vàng gold
#87ceeb - Xanh nhạt
```

### Thêm Món Ăn:
Chỉnh sửa file `includes/menu-items.php` hoặc thêm trực tiếp vào database bảng `menu_items`

### Thay Đổi Thông Tin Liên Hệ:
Chỉnh sửa file `index.php` tại phần footer

## 📧 Tính Năng Sắp Có

- [ ] Gửi email xác nhận đặt bàn
- [ ] Tích hợp thanh toán online
- [ ] Hệ thống đánh giá và review
- [ ] Multi-language support
- [ ] Export báo cáo Excel/PDF
- [ ] API cho mobile app

## 🐛 Xử Lý Lỗi Thường Gặp

### Lỗi kết nối database:
```
- Kiểm tra XAMPP/WAMP đã khởi động MySQL chưa
- Kiểm tra thông tin kết nối trong config/database.php
- Đảm bảo đã tạo database
```

### Lỗi 404 Not Found:
```
- Kiểm tra đường dẫn URL
- Kiểm tra file .htaccess (nếu có)
- Đảm bảo mod_rewrite đã được bật
```

### Lỗi không hiển thị tiếng Việt:
```
- Đảm bảo database charset là utf8mb4
- Kiểm tra meta charset trong HTML
- Kiểm tra charset trong PHP
```

## 📄 License

MIT License - Tự do sử dụng cho mục đích cá nhân và thương mại.

## 👨‍💻 Hỗ Trợ

Nếu gặp vấn đề trong quá trình cài đặt hoặc sử dụng, vui lòng liên hệ:
- Email: support@bienxanh.vn
- Phone: 1900 xxxx

## 🎉 Credits

Developed by Claude AI Assistant
© 2024 Nhà Hàng Hải Sản Biển Xanh