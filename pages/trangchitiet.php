<?php require_once BASE_URI . 'blocks/breadcrumb_ct.php' ; 
		$shotcut = array(
		"{tuvanbxh}",
		"{sdt_bxh}",
		"{sdt}",
		"{so}",
		"{tuvan_ngay}",
		"{tuvan2}",
		"{tuvan4}",		
		"{tuvan}"
	);
	$meger = array(
		'<div class="box-tv-insert">
		<div class="info-tv-insert text-center"><a href="'.$link_chat.'"><img class="btn_tuvan_noidung" src="img/tu-van.gif"> </a><a href="tel:'.TEL.'" class="tel"></a></div></div>',
		'<span class="hotline-chitiet">Hotline '.SDT.'</span>',
		'<span class="hotline-chitiet">Hotline '.SDT.'</span>',
		'<span class="hotline-chitiet">Hotline '.SDT.'</span>',
		'<center><a target="_blank" href="'.$link_chat.'"><img class="btn_tuvan_noidung" src="img/tuvan_ngay.gif"> </a></center>',
		'<center><a target="_blank" href="'.$link_chat.'"><img class="btn_tuvan_noidung" src="img/tuvan2.gif"> </a></center>',
		'<center><a target="_blank" href="'.$link_chat.'"><img class="btn_tuvan_noidung" src="img/tu-van-nk-4.gif"> </a></center>',
		'<center><a target="_blank" href="'.$link_chat.'"><img class="btn_tuvan_noidung" src="img/khung-tuvan.gif"> </a></center>'
	);
	$noidung = str_replace($shotcut,$meger,$detail['NoiDung']);
?>
<div class="header_trangloai">
	<img src="img/banner_tl.jpg">
	<div class="namepk_trangloai">
		phòng khám đa khoa đông á
	</div>
</div>
<div class="hethong my-4">
	<div class="container border border-top-0 pb-3">
		<div class="row">
			<div class="col-md-3 text-center">
				<div class="item-hethong">
					<img src="img/hethong1.png" alt="">
					<div>
						HỆ THỐNG AN TOÀN
					</div>
					<b>Quá trình trị liệu quy phạm hóa <br> Nâng cao chất lượng phục vụ</b>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="item-hethong">
					<img src="img/hethong2.png" alt="">
					<div>
						HỆ THỐNG KIỂM TRA
					</div>
					<b>Trước thủ thuật kiểm tra kĩ lưỡng <br> Kiểm tra hồi phục sau thủ thuật</b>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="item-hethong">
					<img src="img/hethong3.png" alt="">
					<div>
						HỆ THỐNG DỊCH VỤ
					</div>
					<b>Y tá phục vụ toàn bộ quá trình <br> Sau thủ thuật theo dõi và phục vụ</b>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="item-hethong">
					<img src="img/hethong4.png" alt="">
					<div>
						CHÍNH SÁCH BẢO MẬT
					</div>
					<b>
						Hệ thống bảo mật thông tin <br> Bảo vệ thông tin của bạn.</b>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="list_tintuctrangloai">
		<div class="container mt-4">
			<div class="row">
				<div class="col-md-9 border">
					<div id="breadcrumb">
						<div itemscope="">
							<a href="https://<?= $_SERVER['SERVER_NAME']?>">
								<span itemprop="title">Home</span>
							</a>
						</div>
						<div itemscope="">
							<a href="<?= $qly_loai->LayTieuDeKD($idCL).'-'.$idCL ?>/" itemprop="url">
								<span itemprop="title"><?= $qly_loai -> LayTieuDe($idCL)?></span>
							</a>
						</div>
						<div itemscope="">
							<a href="<?= $detail['TieuDeKD'] ?>.html" itemprop="url">
								<span itemprop="title"><?= $qly_tin->cutString($detail['TieuDe'],50)?></span>
							</a>
						</div>
					</div>
					<div class="noidung">
						<div class="img_chuyennghiep text-center">
							<img src="img/ico_detail.png">
						</div>
						<div class="tieude text-center">
							<?= $detail['TieuDe']?>
						</div>
						<div class="noidungdetail">
							<?= $noidung?>
						</div>
					</div>
					<div class="social_bs">
						<div class="social_tct">
							<ul>
								<li>
									<a href="<?= $link_chat?>">
										<img src="img/benh-18.png">
										TƯ VẤN
									</a>
									<a href="<?= $link_chat?>">
										<img src="img/sci_fb.png">
										Facebook
									</a>
									<a href="<?= $link_chat?>">
										<img src="img/sci_zalo.png">
										Zalo
									</a>
								</li>
								<li>
									<a href="<?= $link_chat?>">
										<img src="img/po_detail.png">
										<?= SDT?>
									</a>
								</li>
								<li>
									<a href="<?= MAP?>">
										<img src="img/home_detail.png">
										<?= ADDRESS?>
									</a>
								</li>
							</ul>
							<div>
								Phòng khám làm việc tất cả các ngày trong tuần, bao gồm cả ngày lễ.
							</div>
						</div>
					</div>
					<div class="titletvtt">
						KHÔNG CÓ NỘI DUNG BẠN CẦN, HÃY TƯ VẤN TRỰC TIẾP VỚI BÁC SỸ > > > >
					</div>
					<div class="tuvantructiep mb-3">
						<div class="row">
							<div class="col-md-4">
								<a href="<?= $link_chat?>" class="item_tvtt">
									<img src="img/ico_bs.png">
									tìm hiểu bệnh
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?= $link_chat?>" class="item_tvtt">
									<img src="img/dola.png">
									tư vấn chi phí
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?= $link_chat?>" class="item_tvtt">
									<img src="img/ico_bs.png">
									bác sĩ tư vấn
								</a>
							</div>
						</div>
						<div class="tinnong my-4">
							<div class="title_tinnong">
								TIN NÓNG <?= $idTT?>
							</div>
							<ul class="list_tinnong">
								<?php $tinnong = $qly_tin->ListTin_Where($idLoai,0,7,"AND idTT != ".$idTT); ?>
								<?php while ($row_tinnong = mysql_fetch_assoc($tinnong)) {?>
									<li>
										<a href="<?= $row_tinnong['TieuDeKD']?>.html">- <?= $row_tinnong['TieuDe']?></a>
									</li>
								<?php } ?>
							</ul>
						</div>
						<div class="slide_doingu">
							<ul class="slide_dnul d-flex align-items-center">
								<li class="ep1" data-id="1">
									ĐỘI NGŨ <br>
									BÁC SĨ
								</li>
								<li class="" data-id="2">
									KỸ THUẬT <br>
									ĐIỀU TRỊ
								</li>
								<li class="" data-id="3">
									CHẤT LƯỢNG <br>
									DỊCH VỤ
								</li>
								<li class="" data-id="4">
									BẢO MẬT <br>
									THÔNG TIN
								</li>
							</ul>
							<div class="listimg_dn">
								<div id="ep_1">
									<img src="img/qp_content1.jpg" class="w-100">
								</div>
								<div id="ep_2" style="display: none;">
									<img src="img/qp_content2.jpg" class="w-100">
								</div>
								<div id="ep_3" style="display: none;">
									<img src="img/qp_content3.jpg" class="w-100">
								</div>
								<div id="ep_4" style="display: none;">
									<img src="img/qp_content4.jpg" class="w-100">
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php require_once BASE_URI."blocks/leftmenu.php"; ?>
			</div>
		</div>
	</div>