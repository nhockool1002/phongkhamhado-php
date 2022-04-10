<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-5 ft-col-1">
            <img src="include/asset/images/logo.png">
            <div class="ft-text-1">
                TRUNG TÂM Y TẾ HÀ ĐÔ – ĐỊA CHỈ ĐIỀU TRỊ UY TÍN TẠI TP.HCM
            </div>
            <div class="ft-text-2">
            Sed ut perspiciatis unde om is nerror sit voluptatem
            accustium dolorem tium totam rem<br /> aperam eaque ipsa
            quae ab illose inntore veritatis
            </div>
            <div class="ft-icon-social">
                <a href='<?php echo $settings['FaceBookLink']; ?>'><i class="fab fa-facebook-f"></i></a>
                <a href='<?php echo $settings['TwitterLink']; ?>'><i class="fa-brands fa-twitter"></i></a>
                <a href='<?php echo $settings['InsLink']; ?>'><i class="fa-brands fa-instagram"></i></a>
                <a href='<?php echo $settings['YoutubeLink']; ?>'><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-sm-3 lienketnhanh">
            <div class="lienketnhanh-title">
                LIÊN KẾT NHANH
            </div>
            <div class="space-title-ft"></div>
            <ul class="listlienket">
                <li>
                    <a href='#'>TRANG CHỦ</a>
                </li>
                <li>
                    <a href='#'>GIỚI THIỆU</a>
                </li>
                <li>
                    <a href='#'>DANH MỤC BÊNH</a>
                </li>
                <li>
                    <a href='#'>TIN TỨC</a>
                </li>
                <li>
                    <a href='#'>LIÊN HỆ</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-4 thongtinlienhe">
            <div class="lienketnhanh-title">
                LIÊN HỆ
            </div>
            <div class="space-title-ft"></div>
            <div class="listcontact">
                <p class="contact-item">
                    <i class="fas fa-map-marker-alt"></i> 
                    <span class="contact-info"><?php echo $settings['Location']; ?></span>
                </p>
                <p class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <span class="contact-info"><?php echo $settings['Phone']; ?></span>
                </p>
                <p class="contact-item">
                    <i class="fas fa-globe"></i>
                    <span class="contact-info"><?php echo $settings['Website']; ?></span>
                </p>
                <p class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span class="contact-info"><?php echo $settings['Mail']; ?></span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 copyright">
    <div class="row">
        <div class="col-sm-12 text-center">
            <?php echo $settings['Copyright']; ?>
        </div>
    </div>
</div>