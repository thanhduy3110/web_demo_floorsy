<div class="menu">
    <div class="image-menu">
        <a href=""><img class="Frame-1" src="assets/img/Frame_1.png" alt=""></a>
    </div>
    <div class="nav">
        <ul class="main-menu">
            <li class=" home">
                <a class="li-item" href="#">TRANG CHỦ</a>
            </li>
            <li class=" about">
                <a class="li-item" href="#">VỀ CHÚNG TÔI</a>
            </li>
            <li class="service">
                <a class="li-item" href="#">DỊCH VỤ</a>
                <ul class="sub-menu">
                    <li class="text-sub"><a href="#">Sửa Nền Gỗ</a></li>
                    <li class="text-sub"><a href="#">Sơn Lại Sàn</a></li>
                    <li class="text-sub"><a href="#">Lắp Đặt Thảm</a></li>
                    <li class="text-sub"><a href="#">Vệ Sinh Sàn</a></li>
                    <li class="text-sub"><a href="#">Cài đặt Vinyl</a></li>
                    <li class="text-sub"><a href="#">Gạch Lát Sàn</a></li>
                </ul>
            </li>
            <li class="product">
                <a class="li-item" href="#">SẢN PHẨM</a>
                <ul class="sub-menu">
                    <?php
                    foreach ($products as $pro) { ?>
                        <li class="text-sub"><a href="#"><?php echo $pro['name_vn'] ?></a></li>

                    <?php } ?>

                    <!-- <li class="text-sub"><a href="#">Sản Phẩm 1</a></li>
                    <li class="text-sub"><a href="#">Sản Phẩm 2</a></li>
                    <li class="text-sub"><a href="#">Sản Phẩm 3</a></li> -->
                </ul>
            </li>
            <li class="news">
                <a class="li-item" href="#">TIN TỨC</a>
                <ul class="sub-menu">
                    <?php
                    foreach ($news as $new) { ?>
                        <li class="text-sub"><a href="#"><?php echo $new['name_vn'] ?></a></li>

                    <?php } ?>

                    <!-- <li class="text-sub"><a href="#">Sản Phẩm 1</a></li>
                    <li class="text-sub"><a href="#">Sản Phẩm 2</a></li>
                    <li class="text-sub"><a href="#">Sản Phẩm 3</a></li> -->
                </ul>
            </li>
            <li class="contact">
                <a class="li-item" href="source/pages/registerAjax.php">LIÊN HỆ</a>
            </li>
            <li class="search">
                <form action="" class="frm-search">

                    <input id="search" type="text" class="input" placeholder="" />
                    <img class="test" src="assets/img/icon_search.svg" alt="">
                </form>
                <ul class="results-list sub-menu" id="list">
                </ul>

            </li>
        </ul>
    </div>
</div>
<div class="slider-bar">
    <div class="slideshow">
        <div class="mySlides fade">
            <img class="rectangle" src="assets/img/Rectangle.png" alt="">
        </div>
        <div class="mySlides fade">
            <img class="rectangle" src="assets/img/Rectangle.png" alt="">
        </div>
        <div class="mySlides fade">
            <img class="rectangle" src="assets/img/Rectangle.png" alt="">
        </div>

    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
</div>