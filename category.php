<?php 
    error_reporting(1);
    ini_set('display_errors', 1);
    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];
    } else {
        header("Location: index.php");
        die();
    }
    include_once('include/function/posts/func.php');
    include_once('include/function/settings/func.php');
    include_once('include/function/category/func.php');


    $catCurrent = findSlugCat($slug);
    if ($catCurrent == false) {
        header("Location: index.php");
        die();
    }
    $posts = getAllPost();
    $settings = getAllSettings();
    $allCatParent = getAllParentCat();

    $postsBySlug = getPostsBySlugCat($slug);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/common/header.php'); ?>
</head>
<body>
    <!-- Common -->
    <div class="common">
        <div class="content-common">
            <?php include_once('include/common/content-common.php'); ?>
        </div>
    </div>
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

    
    <!-- Category -->
    <div class="container">
        <div class="row category">
            <div class="col-md-3 col-xs-12">
                <div class="tamloiich">
                    <img src="include/asset/images/8loiich.png" >
                </div>
                <div class="danhmucbenh">
                    <div class="titleDanhMucBenh">
                        <span class="text">DANH MỤC BỆNH</span>
                        <span class="spaceDmb"></span>
                    </div>
                    <div class="contentDmb">
                        <ul class="listDmb">
                            <?php foreach ($allCatParent as $item) { ?>
                            <li><a href="?slug=<?php echo $item['TieuDeKD']; ?>"><?php echo $item['TieuDe']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="thoigianhoatdong">
                    <img src="include/asset/images/tghd.png" >
                </div>
                <div class="hinhbacsicat">
                    <img src="include/asset/images/bs-formdangki.png" >
                </div>
            </div>
            <div class="col-md-9 col-xs-12 contentCategory">
                <div class="bannerkham">
                    <img src="include/asset/images/bannerkham@4x.png" >
                </div>
                <div class="breadcrum">
                    <i class="fas fa-home"></i> <a href="#">Trang chủ</a> <i class="fas fa-chevron-circle-right breakcrumawww"></i> <?php echo $catCurrent['TieuDe']; ?>
                </div>
                <div class="exline">
                    <img src="include/asset/images/exline@4x.png" >
                </div>
                <div class="listPostOfCat">
                    <?php foreach($postsBySlug as $item) { ?>
                        <div class="oneItem">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-md-4 col-xs-5 imgPost imgKD">
                                        <img src="<?php echo $item['UrlHinh']; ?>" >
                                    </div>
                                    <div class="col-md-8 col-xs-5 postContent">
                                        <div class="titlePost">
                                            <a href="post.php?slug=<?php echo $item['TieuDeKD']; ?>">
                                                <?php echo $item['TieuDe']; ?>
                                            </a>
                                        </div>
                                        <div class="desPost">
                                            <?php echo $item['TomTat']; ?>
                                        </div>
                                        <div class="btnPost w-100">
                                            <a href="post.php?slug=<?php echo $item['TieuDeKD']; ?>">
                                                <img src="include/asset/images/xctt.png">
                                            </a>
                                            <a href="#">
                                                <img src="include/asset/images/bstvv.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <!-- End Category --> 


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