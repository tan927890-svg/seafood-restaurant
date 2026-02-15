<!-- NAV -->
<nav class="main-nav">
    <div class="main-nav-inner">

        <ul class="nav-menu">
            <li><a href="index.php">TRANG CHỦ</a></li>
            <li><a href="gioithieu.php">GIỚI THIỆU</a></li>
            <li><a href="menu-book.php">THỰC ĐƠN</a></li>
            <li><a href="thuvien.php">THƯ VIỆN</a></li>
            <li><a href="index.php">TIN TỨC</a></li>
            <li><a href="index.php#contact">LIÊN HỆ</a></li>
        </ul>

        <div class="cart-icon">
            <!-- SVG Giỏ Hàng -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                 width="24" 
                 height="24" 
                 viewBox="0 0 24 24" 
                 fill="none" 
                 stroke="currentColor" 
                 stroke-width="2" 
                 stroke-linecap="round" 
                 stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 
                         2 1.61h9.72a2 2 0 0 0 
                         2-1.61L23 6H6"></path>
            </svg>
        </div>

    </div>
</nav>
<style>
/* NAV */
/* ================= MAIN NAV ================= */
.main-nav {
    background: #eb780dce;
    height: 80px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}

.main-nav-inner {
    max-width: 1200px;
    width: 100%;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* MENU */
.nav-menu {
    display: flex;
    gap: 40px;
    list-style: none;
    flex-wrap: wrap;          /* QUAN TRỌNG */
    justify-content: center;  /* mobile không lệch */
}

.nav-menu a {
    color: white;
    font-size: 20px;
    text-decoration: none;
    font-weight: 600;
    position: relative;
    padding: 10px 0;
    transition: 0.3s;
}

.nav-menu a::after {
    content: "";
    position: absolute;
    bottom: -6px;
    left: 0;
    width: 0;
    height: 2px;
    background: #ff6600;
    transition: width 0.3s ease;
}

.nav-menu a:hover {
    color: #ff6600;
}

.nav-menu a:hover::after {
    width: 100%;
}

.cart-icon {
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.cart-icon:hover {
    color: #ff6600;
}

/* ================= MOBILE ================= */
@media (max-width: 992px){

    .main-nav {
        height: auto;           /* Cho phép nav cao hơn */
        padding: 10px 0;
    }

    .main-nav-inner {
        flex-direction: column;
        gap: 10px;
    }

    .nav-menu {
        gap: 20px;
    }

    .nav-menu a {
        font-size: 16px;
    }
}

</style>