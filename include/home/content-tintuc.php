<div id="tintucCarousel" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach( $posts as $post ) { ?>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="<?php echo $post["UrlHinh"]; ?>" class="d-block w-100" alt="..."> </div>
                    <div class="card-body text-center">
                        <div class="card-created-at">
                            <i class="fa fa-calendar" aria-hidden="true"></i> 
                            <span class="text-created-at"><?php echo date('d/m/Y', strtotime($post['NgayDang'])); ?></span>
                        </div>
                        <h5 class="card-title"><?php echo substr(strip_tags($post["TieuDe"]), 0, 30) ?></h5>
                        <p class="card-text"><?php echo substr(strip_tags($post["Des"]), 0, 150) . "..."; ?></p>
                        <a href="post.php?slug=<?php echo $post['TieuDeKD']; ?>" class="tintuc-button">
                            <img src="include/asset/images/XemChiTiet.png">
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <button class="carousel-control-prev" type="button" data-bs-target="#tintucCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#tintucCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>

<div class="main-slider">
<?php foreach( $posts as $post ) { ?>
            <div class="item">
                <div class="card">
                    <div class="img-wrapper"><img src="<?php echo $post["UrlHinh"]; ?>" class="d-block w-100" alt="..."> </div>
                    <div class="card-body text-center">
                        <div class="card-created-at">
                            <i class="fa fa-calendar" aria-hidden="true"></i> 
                            <span class="text-created-at"><?php echo date('d/m/Y', strtotime($post['NgayDang'])); ?></span>
                        </div>
                        <h5 class="card-title"><?php echo substr(strip_tags($post["TieuDe"]), 0, 150) . "..."; ?></h5>
                        <p class="card-text"><?php echo substr(strip_tags($post["Des"]), 0, 150) . "..."; ?></p>
                        <div class="buttoncT">
                        <a href="post.php?slug=<?php echo $post['TieuDeKD']; ?>" class="tintuc-button">
                            <img src="include/asset/images/XemChiTiet.png">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <button type="button" class="slick-prev"><img src="include/asset/images/prev-pc.png"></button>
        <button type="button" class="slick-next"><img src="include/asset/images/next-pc.png"></button>
</div>