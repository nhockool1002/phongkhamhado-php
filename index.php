<?php 
    error_reporting(0);
    ini_set('display_errors', 0);
    include_once('include/function/posts/func.php');
    include_once('include/function/settings/func.php');
    include_once('include/function/category/func.php');
    $posts = getAllPost();
    $settings = getAllSettings();
    $allCatParent = getAllParentCat();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/common/header.php'); ?>
</head>
<body>
    <!-- Menu -->
    <div class="menu">
        <div class="content-menu">
            <?php include_once('include/common/menu.php'); ?>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mb">
        <div class="content-menu-mb">
            <?php include_once('include/common/menu-mb.php'); ?>
        </div>
    </div>

     <!-- Slide -->
    <div class="slide">
        <div class="content-slide">
            <?php include_once('include/home/slide.php'); ?>
        </div>
    </div>
   
    <!-- Chuyen khoa ho tro -->
    <div class="chuyenkhoahotro">
        <div class="title-chuyenkhoahotro text-center">
           <img class="title-image-ckhd" src="include/asset/images/chuyenkhoahotro.png" />
        </div>
        <div class="content-chuyenkhoahotro">
            <?php include_once('include/home/content-chuyenkhoahotro.php'); ?>
        </div>
    </div>

    <!-- Form dang ky -->
    <div class="formdangky">
        <div class="content-formdangky">
            <?php include_once('include/home/content-formdangky.php'); ?>
        </div>
    </div>

    <!-- Ly Do Lua Chon -->
    <div class="lydoluachon">
        <div class="title-lydoluachon text-center">
           <img class="title-image-ckhd" src="include/asset/images/LyDoLuaChon.png" />
        </div>
        <div class="content-lydoluachon">
            <?php include_once('include/home/content-lydoluachon.php'); ?>
        </div>
    </div>

    <!-- Dich Vu -->
    <div class="dichvu">
        <div class="content-dichvu">
            <?php include_once('include/home/content-dichvu.php'); ?>
        </div>
    </div>

    <!-- Tin tuc -->
    <div class="tintuc">
        <div class="title-tintuc text-center">
           <img class="title-image-ckhd" src="include/asset/images/BlogTinTuc.png" />
        </div>
        <div class="content-tintuc">
            <?php include_once('include/home/content-tintuc.php'); ?>
        </div>
    </div>

    <!-- Khach hang noi -->
    <div class="khachhangnoi">
        <div class="title-khachhangnoi text-center">
           <img class="title-image-ckhd" src="include/asset/images/KhachHangNoi.png" />
        </div>
        <div class="content-khachhangnoi">
            <?php include_once('include/home/content-khachhangnoi.php'); ?>
        </div>
    </div>

    <!-- Form Lien He -->
    <div class="formlienhe">
        <div class="content-formlienhe">
            <?php include_once('include/home/content-formlienhe.php'); ?>
        </div>
    </div>

    <!-- HuongDan -->
    <div class="huongdan">
        <div class="content-huongdan">
            <?php include_once('include/home/content-huongdan.php'); ?>
        </div>
    </div>

    <!-- Thoigianlamviec -->
    <div class="thoigianlamviec w-100 text-center">
        <p>THỜI GIAN LÀM VIỆC: 8:00 - 20:00 * Tất cả các ngày trong tuần, kể cả ngày lễ, Tết.</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="content-footer">
            <?php include_once('include/common/footer.php'); ?>
        </div>
    </div>

    <!-- Footer Mobile -->
    <div class="footer-mb">
        <div class="content-footer-mb">
            <?php include_once('include/common/footer-mb.php'); ?>
        </div>
    </div>

    <?php include_once('include/common/js.php'); ?>
</body>
</html>