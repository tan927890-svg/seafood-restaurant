<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu -Nhà Hàng Hải Sản Biển Xanh - Blue Sea Seafood Restaurant </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php include 'includes/nav.php'; ?>

<section class="about-section">
    <div class="container">

        <!-- BLOCK 1 -->
        <div class="about-block">
            <h2 class="about-title">
                <span class="wave-icon">❦</span>
               Nhà Hàng Hải Sản Biển Xanh 
                <span class="wave-icon">❦</span>
            </h2>

            <h3 class="about-subtitle">
                Vị Trí Lý Tưởng, Điểm Hẹn Yêu Thương
            </h3>

            <p class="about-text">
            Tọa lạc tại vị trí đắc địa 123 Đường Võ Văn Kiệt, Q.1, TP.HCM,
            <strong>Nhà Hàng Hải Sản Biển Xanh - Blue Sea Seafood Restaurant</strong>
            mang đến không gian ẩm thực sang trọng, thoáng đãng và đậm hơi thở đại dương.
            Với thiết kế hiện đại, tinh tế cùng thực đơn hải sản tươi sống được tuyển chọn mỗi ngày,
            Biển Xanh là điểm đến lý tưởng cho những buổi gặp gỡ đối tác, sum họp gia đình
            hay những bữa tiệc ấm cúng giữa lòng thành phố sôi động.
            </p>


            <div class="about-image">
                <img src="images/products/khonggian.png" alt="View Biển">
            </div>
        </div>

        <!-- BLOCK 2 -->
        <div class="about-block">
            <h2 class="about-title">
                <span class="wave-icon">❦</span>
                Không Gian & Trải Nghiệm
                <span class="wave-icon">❦</span>
            </h2>

            <h3 class="about-subtitle">
                Đẳng Cấp & Sang Trọng
            </h3>

            <p class="about-text">
                Nhà hàng được thiết kế hiện đại, sang trọng nhưng vẫn gần gũi.
                Không gian mở giúp thực khách tận hưởng trọn vẹn hương vị biển cả
                trong từng món ăn tươi ngon được chế biến bởi đội ngũ đầu bếp chuyên nghiệp.
            </p>

            <div class="about-image">
                <img src="images/hero/viewer5.webp" alt="Không gian nhà hàng">
            </div>
        </div>
        
         <!-- BLOCK 3 -->
        <div class="about-block">
            <h2 class="about-title">
                <span class="wave-icon">❦</span>
               Nơi Gắn Kết Những Khoảnh Khắc Ý Nghĩa
                <span class="wave-icon">❦</span>
            </h2>

            <h3 class="about-subtitle">
               Yêu Thương và San Sẻ
            </h3>

            <p class="about-text">
                Nhà hàng được thiết kế hiện đại, sang trọng nhưng vẫn gần gũi.
                Không gian mở giúp thực khách tận hưởng trọn vẹn hương vị biển cả
                trong từng món ăn tươi ngon được chế biến bởi đội ngũ đầu bếp chuyên nghiệp.
            </p>

            <div class="about-image">
                <img src="images/hero/viewer3.webp" alt="Không gian nhà hàng">
            </div>
        </div>

    </div>
</section>

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
</body>
</html>

<style>
/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background: #f5f5f5;
    color: #333;
    padding-top: 80px; /* tránh nav fixed đè */
}

/* SECTION */
.about-section {
    padding: 80px 0;
    background: #f2f2f2;
}

/* CONTAINER */
.container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
}

/* BLOCK */
.about-block {
    margin-bottom: 100px;
}

/* TITLE */
.about-title {
    text-align: center;
    font-size: 36px;
    color: #0b2c4d;
    margin-bottom: 30px;
}

.wave-icon {
    color: #2ec4f1;
    font-size: 26px;
    margin: 0 15px;
}

/* SUBTITLE */
.about-subtitle {
    font-size: 22px;
    font-style: italic;
    color: #0096c7;
    border-left: 4px solid #0b2c4d;
    padding-left: 20px;
    margin-bottom: 25px;
}

/* TEXT */
.about-text {
    font-size: 17px;
    line-height: 1.8;
    margin-bottom: 40px;
}

/* IMAGE */
.about-image img {
    width: 100%;
    border-radius: 10px;
    display: block;
}

/* ================= MOBILE ================= */
@media (max-width: 768px){

    .about-title {
        font-size: 26px;
    }

    .about-subtitle {
        font-size: 18px;
    }

    .about-text {
        font-size: 15px;
    }

    .about-block {
        margin-bottom: 60px;
    }

}
/* Floating Contact */
.floating-contact {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    z-index: 999;
}

.contact-btn {
    position: relative;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: rgb(33, 141, 195);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
    overflow: hidden;
}

/* Icon */
.contact-btn img {
    width: 30px;
    height: 30px;
    z-index: 2;
}

/* Hover label */
.contact-btn .label {
    position: absolute;
    right: 70px;
    background: #333;
    color: rgb(51, 143, 205);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 13px;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(10px);
    transition: 0.3s ease;
}

.contact-btn:hover .label {
    opacity: 1;
    transform: translateX(0);
}

.contact-btn:hover {
    transform: translateY(-6px) scale(1.08);
}

/* 🟠 Phone pulse */
.contact-btn.phone {
    animation: pulseOrange 2s infinite;
}

@keyframes pulseOrange {
    0% { box-shadow: 0 0 0 0 rgba(255,102,0,0.6); }
    70% { box-shadow: 0 0 0 15px rgba(255,102,0,0); }
    100% { box-shadow: 0 0 0 0 rgba(255,102,0,0); }
}

/* 🔵 Zalo pulse */
.contact-btn.zalo {
    animation: pulseBlue 2s infinite;
}

@keyframes pulseBlue {
    0% { box-shadow: 0 0 0 0 rgba(0,104,255,0.6); }
    70% { box-shadow: 0 0 0 15px rgba(0,104,255,0); }
    100% { box-shadow: 0 0 0 0 rgba(0,104,255,0); }
}
/* */
@media (max-width: 768px) {

    .floating-contact {
        right: 15px;
        bottom: 15px;
    }

    .contact-btn {
        width: 50px;
        height: 50px;
    }

    .contact-btn img {
        width: 24px;
        height: 24px;
    }

    /* Ẩn chữ trên mobile để không che màn hình */
    .contact-btn .label {
        display: none;
    }
}

</style>
