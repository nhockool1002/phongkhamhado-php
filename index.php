<?php 
    error_reporting(0);
    ini_set('display_errors', 0);
    include_once('include/function/posts/func.php');
    include_once('include/function/settings/func.php');
    $posts = getAllPost();
    $settings = getAllSettings();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="height=device-height, 
                      width=device-width, initial-scale=1.0, 
                      minimum-scale=1.0, maximum-scale=1.0, 
                      user-scalable=no, target-densitydpi=device-dpi">
    <title>Phòng khám đa khoa Hà Đô</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="include/asset/css/style.css" type="text/css">
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="include/asset/js/custom.js"></script>
</body>
</html>