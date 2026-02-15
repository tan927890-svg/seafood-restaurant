<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Hải Sản Biển Xanh</title>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#dcdcdc;
    display:flex;
    flex-direction:column;
    min-height:100vh;
    padding-top:80px;
    font-family:Arial, sans-serif;
}

/* WRAPPER */
.menu-wrapper{
    display:flex;
    justify-content:center;
    width:100%;
    padding:0 15px;
}

/* BOOK */
#book{
    width:100%;
    max-width:800px;
}

/* PAGE */
.page{
    width:100%;
    max-width:800px;
    background:#ffffff;
    border-radius:10px;
    box-shadow:0 20px 50px rgba(0,0,0,0.2);
    position:relative;
}

/* TOP */
.top-section{
    text-align:center;
    padding:60px 20px;
}

.title-main{
    font-size:60px;
    color:#5ba6d6;
    letter-spacing:3px;
}

.title-sub{
    font-size:30px;
    color:#5ba6d6;
    font-style:italic;
    margin-bottom:40px;
}

/* IMAGES */
.img-wrapper{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    padding:0 40px;
    margin-bottom:40px;
}

.img-main{
    width:260px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.25);
}

.img-small{
    width:230px;
    transform:rotate(-12deg);
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.25);
}

/* BOTTOM */
.bottom-section{
    background:#163d5c;
    color:white;
    padding:50px 40px;
    border-top-left-radius:60px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
}

/* MENU */
.menu-row{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-bottom:30px;
}

.food-name{
    font-weight:bold;
    font-size:20px;
    letter-spacing:1px;
    margin-bottom:6px;
}

.food-sub{
    font-size:13px;
    opacity:0.8;
    margin-bottom:8px;
}

.price{
    font-size:20px;
    font-weight:bold;
}

/* PAGINATION */
.pagination{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    margin:40px 0 60px 0;
}

.page-btn{
    width:45px;
    height:45px;
    border-radius:50%;
    border:none;
    background:#1f4663;
    color:white;
    font-size:18px;
    cursor:pointer;
    transition:0.3s;
}

.page-btn:hover{
    background:#ff6600;
}

.page-btn:disabled{
    background:#999;
    cursor:not-allowed;
}

.page-info{
    font-size:18px;
    font-weight:bold;
    color:#1f4663;
}

/* MOBILE */
@media (max-width:768px){

    .title-main{
        font-size:36px;
    }

    .title-sub{
        font-size:20px;
    }

    .img-wrapper{
        flex-direction:column;
        align-items:center;
        gap:20px;
        padding:0 10px;
    }

    .img-main,
    .img-small{
        width:100%;
        max-width:280px;
        transform:none;
    }

    .bottom-section{
        padding:30px 20px;
    }

    .menu-row{
        flex-direction:column;
        gap:10px;
    }

    .price{
        align-self:flex-end;
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
</head>

<body>

<?php include 'includes/nav.php'; ?>

<div class="menu-wrapper">
<div id="book">

<!-- CÁC TRANG CỦA BẠN GIỮ NGUYÊN Ở ĐÂY -->
<!-- TRANG 1 -->
<div class="page">
    <div class="top-section">
        <h1 class="title-main">❦ Khai Vị ❦</h1>
        <div class="title-sub">Appetizer</div>

        <div class="img-wrapper">
            <img src="images/products/khoquet.webp" class="img-main">
            <img src="images/products/xoicua.jpg" class="img-small">
        </div>
    </div>

    <div class="bottom-section">
        <div class="menu-row">
            <div>
                <div class="food-name">Cơm Cháy Kho Quẹt</div>
                <div class="food-sub">Crispy rice with braised pork belly</div>
            </div>
            <div class="price">180</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Xôi Cua Biển Xanh</div>
                <div class="food-sub">Blue crab sticky rice</div>
            </div>
            <div class="price">300</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Nem Cua Bể</div>
                <div class="food-sub">Crab spring rolls</div>
            </div>
            <div class="price">250</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Gân Heo Xào Cải Chua</div>
                <div class="food-sub">Stir-fried pork tendons with pickled mustard greens</div>
            </div>
            <div class="price">210</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Rau Củ Quả Lắc Bơ</div>
                <div class="food-sub">Vegetables and Fruits with Butter Shake</div>
            </div>
            <div class="price">120</div>
        </div>
    </div>
</div>

<!-- TRANG 2 -->
<div class="page">
    <div class="top-section">
        <h1 class="title-main">❦ HẢI SẢN ❦</h1>
        <div class="title-sub">Seafood</div>

        <div class="img-wrapper">
            <img src="images/products/chagio.png" class="img-main">
            <img src="images/products/tommalai.webp" class="img-small">
        </div>
    </div>

    <div class="bottom-section">
        <div class="menu-row">
            <div>
                <div class="food-name">Tôm Xóc Muối Mã Lai</div>
                <div class="food-sub">Malaysian Salted Shrimp</div>
            </div>
            <div class="price">250</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Chả Giò Tôm GALA </div>
                <div class="food-sub">Shrimp spring rolls GALA</div>
            </div>
            <div class="price">220</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Tôm Càng Xanh Nướng Phô Mai</div>
                <div class="food-sub">Grilled green prawns with cheese</div>
            </div>
            <div class="price">260</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Tôm Xóc Muối Mã Lai</div>
                <div class="food-sub">Malaysian Salted Shrimp</div>
            </div>
            <div class="price">250</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Tôm Nằm Trong Tơ</div>
                <div class="food-sub">Shrimp is in silk</div>
            </div>
            <div class="price">300</div>
        </div>
    </div>
</div>
     <!-- TRANG 3 -->
<div class="page">
    <div class="top-section">
        <h1 class="title-main">❦ CUA ❦</h1>
        <div class="title-sub">Crab</div>

        <div class="img-wrapper">
            <img src="images/products/sottieuden.jpeg" class="img-main">
            <img src="images/products/cuarangmuoi.jpg" class="img-small">
        </div>
    </div>

    <div class="bottom-section">

        <div class="menu-row">
            <div>
                <div class="food-name">Cua Sốt Tiêu Đen Singapore</div>
                <div class="food-sub"> Singapore crab with black pepper sauce </div>
            </div>
            <div class="price">450</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Cua Rang Muối Hong Kong </div>
                <div class="food-sub"> Hong Kong style salted crab </div>
            </div>
            <div class="price">420</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Miến Xào Cua </div>
                <div class="food-sub"> Crab stir-fried vermicelli</div>
            </div>
            <div class="price">250</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Cua Hấp Nước Dừa/Bia </div>
                <div class="food-sub"> Steamed crab with coconut milk/beer </div>
            </div>
            <div class="price">330</div>
        </div>

        <div class="menu-row">
            <div>
                <div class="food-name">Chả Mai Cua </div>
                <div class="food-sub"> Crab shell </div>
            </div>
            <div class="price">230</div>
        </div>

    </div>
    </div>
       <!-- TRANG 4 -->
<div class="page">
    <div class="top-section">
        <h1 class="title-main">❦ Bò Úc ❦</h1>
        <div class="title-sub">Australian beef</div>

        <div class="img-wrapper">
            <img src="images/about/nuong.jpg" class="img-main">
            <img src="images/about/luclac.png" class="img-small">
        </div>
    </div>

    <div class="bottom-section">
        <div class="menu-row">
            <div>
                <div class="food-name">Bò sốt vang</div>
                <div class="food-sub">Beef with wine sauce</div>
            </div>
            <div class="price">250</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Bò lúc lắc </div>
                <div class="food-sub">Cow shakes</div>
            </div>
            <div class="price">220</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Thăn Ngoại Bò Úc Cháy Tỏi Lý Sơn</div>
                <div class="food-sub">Australian Beef Sirloin with Garlic Sauce (Ly Son style)</div>
            </div>
            <div class="price">260</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Bắp Bò Úc Ngâm Mắm</div>
                <div class="food-sub">Australian Beef Shank Marinated in Fish Sauce</div>
            </div>
            <div class="price">250</div>
        </div>

         <div class="menu-row">
            <div>
                <div class="food-name">Bò Úc Nướng Đá Muối Sốt Mắm Nhĩ</div>
                <div class="food-sub">Grilled Australian Beef on Salt Stone with Fish Sauce</div>
            </div>
            <div class="price">300</div>
        </div>
    </div>
</div>


</div>
</div>

<div class="pagination">
    <button class="page-btn" id="prevPage">&#10094;</button>
    <div class="page-info">
        <span id="currentPage">1</span> /
        <span id="totalPage"></span>
    </div>
    <button class="page-btn" id="nextPage">&#10095;</button>
</div>
 <!-- Floating Contact -->
<div class="floating-contact">

    <a href="tel:0123456789" class="contact-btn phone" title="Gọi điện">
        <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Phone">
    </a>

    <a href="https://zalo.me/0123456789" target="_blank" class="contact-btn zalo" title="Zalo">
        <img src="images/about/zalo.webp" alt="Zalo">
    </a>

</div>
<?php include 'includes/footer.php'; ?>

<script>
$(document).ready(function(){

    var bookWidth = $("#book").width();
    var pageHeight = $('.page').outerHeight(true);
    var totalPages = $('.page').length;

    $('#totalPage').text(totalPages);

    $("#book").turn({
        width:bookWidth,
        height:pageHeight,
        autoCenter:true,
        display:"single",
        gradients:true,
        elevation:80,
        duration:1200,
        when:{
            turned:function(event, page){
                updateUI(page);
            }
        }
    });

    function updateUI(page){
        $('#currentPage').text(page);
        $('#prevPage').prop('disabled', page === 1);
        $('#nextPage').prop('disabled', page === totalPages);
    }

    $('#prevPage').click(function(){
        $('#book').turn('previous');
    });

    $('#nextPage').click(function(){
        $('#book').turn('next');
    });

    updateUI(1);
});
</script>

</body>
</html>
