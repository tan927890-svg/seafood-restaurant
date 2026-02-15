-- Database: seafood_restaurant
-- Tạo database

-- -- CREATE DATABASE IF NOT EXISTS seafood_restaurant 
-- CHARACTER SET utf8mb4 
-- COLLATE utf8mb4_unicode_ci;

-- USE seafood_restaurant;

-- Bảng đặt bàn (bookings)
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(100),
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    guests VARCHAR(20) NOT NULL,
    notes TEXT,
    status ENUM('pending', 'confirmed', 'cancelled') DEFAULT 'pending',
    created_at DATETIME NOT NULL,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_booking_date (booking_date),
    INDEX idx_phone (phone),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Bảng menu items (tùy chọn - để quản lý thực đơn động)
CREATE TABLE IF NOT EXISTS menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    category VARCHAR(50),
    icon VARCHAR(10),
    is_available BOOLEAN DEFAULT TRUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_category (category),
    INDEX idx_available (is_available)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample menu items
INSERT INTO menu_items (name, description, price, category, icon) VALUES
('Tôm Hùm Alaska', 'Tôm hùm Alaska tươi sống nướng bơ tỏi, hương vị đậm đà khó cưỡng', 1200000.00, 'seafood', '🦞'),
('Cua Hoàng Đế', 'Cua hoàng đế hấp bia thơm ngon, thịt chắc ngọt tự nhiên', 2500000.00, 'seafood', '🦀'),
('Cá Hồi Na Uy', 'Cá hồi Na Uy áp chảo hoàn hảo, giàu omega-3 bổ dưỡng', 450000.00, 'fish', '🐟'),
('Mực Hấp Gừng', 'Mực tươi hấp gừng sả, giữ nguyên độ ngọt tự nhiên', 350000.00, 'seafood', '🦑'),
('Tôm Sú Rang Muối', 'Tôm sú size lớn rang muối ớt thơm lừng, giòn tan', 550000.00, 'seafood', '🦐'),
('Hàu Tươi Sống', 'Hàu tươi Pháp cao cấp, ăn sống với chanh và wasabi', 80000.00, 'seafood', '🦪');

-- Bảng liên hệ (contacts) - tùy chọn
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Bảng admin users (tùy chọn - để quản lý đặt bàn)
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role ENUM('admin', 'staff') DEFAULT 'staff',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME,
    INDEX idx_username (username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default admin user (password: admin123)
-- Note: In production, use properly hashed passwords
INSERT INTO admin_users (username, password, email, role) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@bienxanh.vn', 'admin');