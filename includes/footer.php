<!-- Footer -->
<footer id="contact">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Về Biển Xanh</h3>
            <p>Nhà hàng hải sản cao cấp, mang đến trải nghiệm ẩm thực đại dương tuyệt vời nhất.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer-section">
            <h3>Liên Hệ</h3>
            <p>📍 123 Đường Võ Văn Kiệt, Q.1, TP.HCM</p>
            <p>📞 Hotline: 1900 xxxx</p>
            <p>✉️ Email: info@bienxanh.vn</p>
            <p>🕐 Giờ mở cửa: 10:00 - 22:00</p>
        </div>

        <div class="footer-section">
            <h3>Liên Kết Nhanh</h3>
            <a href="#menu">Thực Đơn</a>
            <a href="#booking">Đặt Bàn</a>
            <a href="#">Chính Sách</a>
            <a href="#">Điều Khoản</a>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Nhà Hàng Hải Sản Biển Xanh. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
  <style>
/* Footer */
footer {
    background: #1a1a1a;
    color: white;
    padding: 3rem 2rem 1rem;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-section h3 {
    color: #ff6600;
    margin-bottom: 1rem;
}

.footer-section p,
.footer-section a {
    color: #ccc;
    text-decoration: none;
    display: block;
    margin-bottom: 0.5rem;
    transition: color 0.3s;
}

.footer-section a:hover {
    color: #ff6600;
}

.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-links a {
    width: 40px;
    height: 40px;
    background: #ff6600;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 1.2rem;
    transition: all 0.3s;
}

.social-links a:hover {
    background: #ff9933;
    transform: translateY(-3px);
}

.footer-bottom {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid #333;
    color: #999;
}
.social-icons {
    display: flex;
    gap: 14px;
    align-items: center;
}

.social-icons a {
    width: 42px;
    height: 42px;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    transition: 0.3s;
}

.social-icons a:hover {
    background: #ff6600;
    border-color: #ff6600;
    transform: translateY(-3px);
}
</style>
