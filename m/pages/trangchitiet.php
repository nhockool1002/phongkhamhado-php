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
<div class="breadcrumb_cus">
		<div itemscope="">
			<a href="">
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
				<span itemprop="title"><?= $qly_tin->cutString($detail['TieuDe'],20)?></span>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="tieude">
			<?= $detail['TieuDe']?>
		</div>
		<div class="noidung">
			<?= $noidung?>
		</div>
		<div class="dangky_tct">
			<div class="title_bvlq">
				ĐĂNG KÝ KHÁM ONLINE
			</div>
			<form action="" method="post" class="mt-3">
				<div class="form-group">
					<label><b>Họ và tên</b></label>
					<input type="text" name="hoten" class="form-control" placeholder="Nhập họ và tên">
				</div>
				<div class="form-group">
					<label><b>Số điện thoại</b></label>
					<input type="text" name="sodienthoai" class="form-control" placeholder="Nhập số điện thoại">
				</div>
				<div class="form-group">
					<label><b>Triệu chứng</b></label>
					<textarea name="trieuchung" class="form-control" cols="30" placeholder="Triệu chứng"></textarea>
				</div>
				<div class="form-group d-flex">
					<button class="btn btn-info ml-auto" name="btn_gui_sdt">Đăng ký trực tuyến</button>
				</div>
			</form>
		</div>
		<div class="bvlq">
			<div class="title_bvlq">
				BÀI VIẾT LIÊN QUAN
			</div>
			<ul class="list_bvlq">
				<?php $tinlq = $qly_tin->ListTin_Where($idLoai,0,5,"AND idTT !=".$idTT); ?>
				<?php while ($rowtinlq = mysql_fetch_assoc($tinlq)) {?>
					<li>
						<a href="<?= $rowtinlq['TieuDeKD']?>.html"><?= $rowtinlq['TieuDe']?></a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<style>
		.noidung img
		{
			max-width: 100%;
			height: auto !important;
		}
		.noidung h2 {
			background: #AFEEF1;
			padding: 5px;
			font-size: 24px !important;
			font-weight: 350;
		}
		.red
		{
			color: #F30;
		}
	</style>