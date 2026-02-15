<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư Viện </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/nav.php'; ?>
    <section class="library-section">
    <div class="container">

        <h2 class="section-title">
            Không Gian & Sức Chứa Ấn Tượng
        </h2>

        <p class="library-text">
            Không chỉ sở hữu không gian sang trọng, thoáng đãng và đậm hơi thở đại dương,
            <strong>Nhà Hàng Hải Sản Biển Xanh - Blue Sea Seafood Restaurant</strong>
           còn gây ấn tượng với thiết kế rộng rãi gồm khu trệt và lầu hiện đại, mỗi khu có sức chứa lên đến 200 khách. Bên cạnh đó, 
           nhà hàng còn có hệ thống 4 phòng VIP riêng tư, trong đó phòng lớn phục vụ đến 40 khách và các phòng nhỏ từ 10 – 12 khách, 
           đáp ứng linh hoạt từ những buổi họp mặt gia đình, gặp gỡ bạn bè đến tiệc doanh nghiệp quy mô lớn với tổng sức chứa gần 400 khách. 
           Sự kết hợp giữa không gian tinh tế, 
           dịch vụ chuyên nghiệp và ẩm thực hải sản tươi ngon chính là điểm nhấn tạo nên dấu ấn riêng của Biển Xanh giữa lòng thành phố.
        </p>

        <div class="library-image">
            <img src="images/hero/banner1.jpg" alt="Không gian nhà hàng Biển Xanh">
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
<style>
  /* Library Section */
.library-section {
    padding: 80px 20px;
    background: #f8f9fb;
}

.container {
    max-width: 1100px;
    margin: auto;
}

/* Tiêu đề */
.section-title {
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    color: #0d3b66;
    margin-bottom: 30px;
    position: relative;
}

/* Gạch chân tiêu đề */
.section-title::after {
    content: "";
    width: 80px;
    height: 4px;
    background: #0d6efd;
    display: block;
    margin: 15px auto 0;
    border-radius: 2px;
}

/* Nội dung */
.library-text {
    font-size: 20px;
    line-height: 1.8;
    color: #444;
    margin-bottom: 40px;
    text-align: justify;
}

/* Làm nổi tên nhà hàng */
.library-text strong {
    color: #0d6efd;
}

/* Ảnh */
.library-image img {
    width: 100%;
    border-radius: 12px;
    display: block;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

/* Responsive */
@media (max-width: 768px) {

    .section-title {
        font-size: 24px;
    }

    .library-text {
        font-size: 16px;
        line-height: 1.6;
    }

    .library-section {
        padding: 50px 15px;
    }
}

</style>