<?php
session_start();

// Khởi tạo thông báo
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà Hàng Hải Sản Biển Xanh - Fresh Seafood Restaurant</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<!-- Hero -->
<section id="home" class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h4>Nhà Hàng Hải Sản Biển Xanh - Fresh Seafood Restaurant</h4>
        <h1>KÍNH CHÀO QUÝ KHÁCH</h1>
        <div class="hero-buttons">
            <a href="#" class="btn primary">ĐẶT BÀN</a>
            <a href="#" class="btn outline">ĐẶT MÓN</a>
        </div>
    </div>
</section>

<?php if ($message): ?>
<div class="notification" id="notification">
    <p><?php echo htmlspecialchars($message); ?></p>
    <button onclick="closeNotification()">×</button>
</div>
<?php endif; ?>

<!-- About -->
<section id="about" class="about">
    <div class="container">

        <h2 class="section-title">Về Chúng Tôi</h2>

        <div class="about-content">

            <div class="about-text">
                <p>Nhà hàng <strong>Biển Xanh</strong> tự hào là địa chỉ hàng đầu chuyên về các món hải sản tươi sống cao cấp...</p>
                <p>Hải sản được tuyển chọn kỹ lưỡng từ các vùng biển nổi tiếng...</p>
                <p>Không gian nhà hàng sang trọng, ấm cúng với view nhìn ra biển tuyệt đẹp.</p>
            </div>

            <div class="about-image">
                <img src="images/hero/sea9.jpg" alt="Hải sản tươi sống">
            </div>

        </div>

    </div>
</section>

<!-- Gallery -->
<section id="gallery" class="gallery">
    <div class="container">
        <h2 class="section-title">Cẩm Nang Ẩm Thực</h2>

        <div class="gallery-grid">
                    <div class="gallery-item">
                <img src="images/about/sea2.jpg" alt="Tôm hùm đất">
                <span>Tôm hùm đất </span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea3.jpg" alt="Tôm tươi">
                <span>Tôm Tươi </span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea4.jpg" alt="Cá Hồi">
                <span>Cá Hồi</span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea5.jpg" alt="Tôm càng xanh">
                <span>Tôm Càng Xanh</span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea6.jpg" alt="Cua Cà Mau">
                <span>Cua Cà Mau</span>
            </div>

            <div class="gallery-item">
            <img src="images/about/sea7.jpg" alt="Mực Phú Quốc">
                <span>Mực Phú Quốc</span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea8.jpg" alt="Hàu Sữa Biển">
                <span>Hàu Sữa Biển </span>
            </div>

            <div class="gallery-item">
                <img src="images/products/sea13.jpg" alt="Bào Ngư">
                <span>Bào Ngư  </span>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="features">
    <div class="container">
        <h2 class="section-title">Điểm Nổi Bật</h2>

        <div class="features-grid">
            <div class="feature-card chef">
                <div class="content">
                    <h3>Đầu Bếp Chuyên Nghiệp</h3>
                    <p>Đội ngũ đầu bếp giàu kinh nghiệm, tay nghề cao</p>
                </div>
            </div>

            <div class="feature-card quality">
                <div class="content">
                    <h3>Chất Lượng Hàng Đầu</h3>
                    <p>Đạt chứng nhận HACCP và ISO 22000</p>
                </div>
            </div>

              <div class="feature-card space">
                <div class="content">
                    <h3>Hải Sản Tươi Sống </h3>
                    <p>Hương Vị Của Biển Cả </p>
                </div>
            </div>

            <div class="feature-card fresh">
                <div class="content">
                    <h3>Không Gian Sang Trọng</h3>
                    <p>Thiết kế hiện đại, view biển tuyệt đẹp</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Space -->
<section class="gallery-space">
    <div class="container">
        <div class="gallery-tabs">
            <button class="tab active">KHÔNG GIAN</button>
        </div>

        <div class="gallery-space-grid">
           <div class="gallery-space-item">
                <img src="images/products/view1.jpg" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/products/view2.jpg" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/products/view3.jpg" alt="">
            </div>

            <div class="gallery-space-item">
                <img src="images/products/view4.jpg" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/products/view5.jpg" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/products/view6.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="testimonial">
    <h2 class="title">
        <span class="wave">~ ~ ~</span>
        PHẢN HỒI CỦA KHÁCH HÀNG
        <span class="wave">~ ~ ~</span>
    </h2>

    <div class="testimonial-slider">
        <button class="nav prev">&#10094;</button>

        <div class="slides">
             <div class="slide active">
                <div class="avatar">
                    <img src="images/about/user1.png" alt="user 1">
                </div>
                <p class="content">
                    “Món Tôm hùm baby đút lò phô mai là món ăn yêu thích của tôi...”
                </p>
                <h4>Chị. Phương Nguyễn</h4>
            </div>

            <div class="slide">
                <div class="avatar">
                    <img src="images/about/user2.png" alt="user 2">
                </div>
                <p class="content">
                    “Công ty mình vừa tổ chức tiệc tất niên tại nhà hàng...”
                </p>
                <h4>A. Hiếu Lê</h4>
            </div>
        </div>

        <button class="nav next">&#10095;</button>
    </div>
</section>

<!-- Booking -->
<section id="booking" class="booking">
    <div class="container">
        <h2 class="section-title">Đặt Bàn</h2>

        <form class="booking-form" action="process-booking.php" method="POST">
            <div class="form-group">
                    <label for="name">Họ và Tên *</label>
                    <input type="text" id="name" name="name" required placeholder="Nhập họ tên của bạn">
                </div>
                <div class="form-group">
                    <label for="phone">Số Điện Thoại *</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Nhập số điện thoại" pattern="[0-9]{10,11}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Nhập email của bạn">
                </div>
                <div class="form-group">
                    <label for="date">Ngày Đặt Bàn *</label>
                    <input type="date" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group">
                    <label for="time">Giờ Đặt Bàn *</label>
                    <input type="time" id="time" name="time" required min="10:00" max="21:00">
                </div>
                <div class="form-group">
                    <label for="guests">Số Lượng Khách *</label>
                    <select id="guests" name="guests" required>
                        <option value="">Chọn số lượng khách</option>
                        <option value="1-2">1-2 người</option>
                        <option value="3-4">3-4 người</option>
                        <option value="5-8">5-8 người</option>
                        <option value="8+">Trên 8 người</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="notes">Ghi Chú</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Yêu cầu đặc biệt (nếu có)"></textarea>
                </div>
                <button type="submit" class="btn-submit">Xác Nhận Đặt Bàn</button>
            </form>
        </form>
    </div>
</section>

<!-- Stats -->
<div class="stats">
    <div class="stat">
        <h3>6</h3>
        <p>trong top nhà hàng<br><b>NỔI TIẾNG BÊN BIỂN</b></p>
    </div>
    <div class="stat">
        <h3>98%</h3>
        <p>yêu thích không gian<br><b>VÀ MÓN ĂN TẠI BIỂN</b></p>
    </div>
    <div class="stat">
        <h3>60+</h3>
        <p>món ngon<br><b>ĐƯỢC YÊU THÍCH</b></p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Floating Contact -->
<div class="floating-contact">
    <a href="#" class="contact-btn map"><i class="fas fa-map-marker-alt"></i></a>
    <a href="mailto:tech@fagogroup.vn" class="contact-btn mail"><i class="fas fa-envelope"></i></a>
    <a href="#" class="contact-btn zalo"><img src="images/about/zalo.webp" alt="Zalo"></a>
    <a href="tel:0341234567" class="contact-btn phone"><i class="fas fa-phone"></i></a>
</div>

<script src="js/script.js"></script>

</body>
</html>
