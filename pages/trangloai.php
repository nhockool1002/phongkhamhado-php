<?php require_once BASE_URI . 'blocks/breadcrumb_loai.php' ; ?>
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
				<div class="col-md-9">
					<div id="breadcrumb">
						<div itemscope="">
							<a href="https://<?= $_SERVER['SERVER_NAME']?>">
								<span itemprop="title">Home</span>
							</a>
						</div>
						<div itemscope="">
							<a href="<?= $TieuDeKD.'-'.$idLoai ?>/" itemprop="url">
								<span itemprop="title"><?= $qly_loai -> LayTieuDe($idLoai)?></span>
							</a>
						</div>
					</div>
					<ul class="list_trangloai">
						<?php 
							$listtt_tl = $qly_tin->ListTinLoai($idLoai,$totalRows,$pageNum,$pageSize);
						 ?>
						 <?php while ($row_tintl = mysql_fetch_assoc($listtt_tl)) {?>
							<li class="item_tt p-3 border-bottom">
								<a href="<?= $row_tintl['TieuDeKD']?>.html">
									<img src="<?= $row_tintl['UrlHinh']?>">
									<div class="d-flex flex-column">
										<div class="nametttl">
											<?= $row_tintl['TieuDe']?>
										</div>
										<div class="destttl">
											<?= $qly_tin->cutString(strip_tags($row_tintl['TomTat']),250)?>
										</div>
										<span class="xemthem">Xem thêm</span>
									</div>
								</a>
							</li>
						 <?php } ?>
						 <div class="trangloai_phantrang">
						 	<?php echo $qly_tin->pagesList1($TieuDeKD ."-". $idLoai, $totalRows, $pageNum, $pageSize, 2); ?>
						 </div>
					</ul>
					
				</div>
				<?php require_once BASE_URI."blocks/leftmenu.php"; ?>
			</div>
		</div>
	</div>
