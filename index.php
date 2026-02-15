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
    <title>Nhà Hàng Hải Sản Biển Xanh - Blue Sea Seafood Restaurant </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

  <!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h4>Nhà Hàng Hải Sản Biển Xanh - Blue Sea Seafood Restaurant </h4>
        <h1>KÍNH CHÀO QUÝ KHÁCH</h1>
        <div class="hero-buttons">
            <a href="#contact" class="btn primary">ĐẶT BÀN</a>
            <a href="#contact" class="btn outline">ĐẶT MÓN</a>
        </div>
    </div>
</section>

    <!-- Notification -->
    <?php if ($message): ?>
    <div class="notification" id="notification">
        <p><?php echo htmlspecialchars($message); ?></p>
        <button onclick="closeNotification()">×</button>
    </div>
    <?php endif; ?>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">Về Chúng Tôi</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Nhà hàng <strong>Biển Xanh</strong> tự hào là địa chỉ hàng đầu chuyên về các món hải sản tươi sống cao cấp. Với hơn 15 năm kinh nghiệm, chúng tôi cam kết mang đến cho thực khách những trải nghiệm ẩm thực đáng nhớ.</p>
                    <p>Hải sản của chúng tôi được tuyển chọn kỹ lưỡng từ các vùng biển nổi tiếng, đảm bảo độ tươi ngon và chất lượng. Đội ngũ đầu bếp giàu kinh nghiệm sẽ chế biến những món ăn tinh tế, kết hợp hài hòa giữa hương vị truyền thống và hiện đại.</p>
                    <p>Không gian nhà hàng được thiết kế sang trọng, ấm cúng với view nhìn ra biển tuyệt đẹp, tạo nên bầu không khí lý tưởng cho mọi dịp đặc biệt.</p>
                </div>
              <div class="about-image">
  <img 
  src="images/about/sea1.jpg" 
  alt="Hải sản tươi sống"
/>
</div>

        </div>
    </section>

    <!-- Menu Section -->
      <section id="gallery" class="gallery">
    <div class="container">
        <h2 class="section-title">Cẩm Nang Ẩm Thực </h2>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/about/sea5.jpg" alt="crayfish">
                <span>Tôm Càng Xanh  </span>
            </div>

            <div class="gallery-item">
                <img src="images/about/bowagyu.png" alt="Beef Wagyu/Kobe">
                <span>Bò Wagyu/Kobe </span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea4.jpg" alt="Norwegian salmon">
                <span>Cá Hồi Na Uy</span>
            </div>

            <div class="gallery-item">
                <img src="images/about/camu.jpg" alt="Grouper" >
                <span>Cá Song ( Cá Mú )</span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea6.jpg" alt="Ca Mau crab">
                <span>Cua Cà Mau</span>
            </div>

            <div class="gallery-item">
            <img src="images/about/sea7.jpg" alt="Phu Quoc ink">
                <span>Mực Phú Quốc</span>
            </div>

            <div class="gallery-item">
                <img src="images/about/sea8.jpg" alt="Sea milk oysters">
                <span>Hàu Sữa Biển </span>
            </div>

            <div class="gallery-item">
                <img src="images/products/sea13.jpg" alt="abalone">
                <span>Bào Ngư  </span>
            </div>
        </div>
    </div>
</section>



  <!-- Features Section -->
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


    <!-- Galley tabs -->
 <section class="gallery-space">
    <div class="container">

        <div class="gallery-tabs">
            <button class="tab active">KHÔNG GIAN</button>
        </div>

        <div class="gallery-space-grid">
            <div class="gallery-space-item">
                <img src="images/hero/viewer1.webp" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/hero/viewer2.webp" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/hero/viewer3.webp" alt="">
            </div>

            <div class="gallery-space-item">
                <img src="images/hero/viewer4.webp" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/hero/viewer5.webp" alt="">
            </div>
            <div class="gallery-space-item">
                <img src="images/products/khonggian.png" alt="">
            </div>
        </div>

    </div>
</section>
    <!-- Customer feedback -->
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

    <!-- Booking Section -->
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
        </div>
    </section>

    <!-- dots -->
    <div class="dots">
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>

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

    <a href="tel:0123456789" class="contact-btn phone" title="Gọi điện">
        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Phone">
    </a>

    <a href="https://zalo.me/0123456789" target="_blank" class="contact-btn zalo" title="Zalo">
        <img src="images/about/zalo.webp" alt="Zalo">
    </a>

</div>



  <script src="js/script.js"></script>

<script>
const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".nav.next");
const prevBtn = document.querySelector(".nav.prev");

let currentSlide = 0;

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
}

nextBtn.addEventListener("click", () => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
});

prevBtn.addEventListener("click", () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".header");

    window.addEventListener("scroll", () => {
        header.classList.toggle("shrink", window.scrollY > 120);
    });
});
</script>
    <!-- Chữ trong ô tìm kiếm chạy  -->
     <script>
document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("searchInput");
    if (!input) return;

    const texts = [
        "Bạn có thể tìm kiếm nhanh tại đây",
        "Hải sản tươi sống mỗi ngày",
        "Đặt bàn nhanh – phục vụ tận tâm",
        "Khuyến mãi hấp dẫn hôm nay"
    ];

    let textIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function typeEffect() {
        const currentText = texts[textIndex];

        if (!deleting) {
            input.placeholder = currentText.slice(0, charIndex++);
            if (charIndex > currentText.length) {
                deleting = true;
                setTimeout(typeEffect, 1500);
                return;
            }
        } else {
            input.placeholder = currentText.slice(0, charIndex--);
            if (charIndex < 0) {
                deleting = false;
                textIndex = (textIndex + 1) % texts.length;
            }
        }
        setTimeout(typeEffect, deleting ? 40 : 80);
    }

    typeEffect();

    // Khi focus thì cho gõ thật
    input.addEventListener("focus", () => {
        input.placeholder = "";
        input.removeAttribute("readonly");
    });

    input.addEventListener("blur", () => {
        input.setAttribute("readonly", true);
    });
});

</script>

</body>
</html>