<?php require_once BASE_URI . 'blocks/breadcrumb_loai.php' ; ?>

<div class="breadcrumb_cus">
		<div itemscope="">
			<a href="">
				<span itemprop="title">Home</span>
			</a>
		</div>
		<div itemscope="">
			<a href="<?= $TieuDeKD?>-<?= $idLoai?>/">
				<span itemprop="title"><?= $TieuDe?></span>
			</a>
		</div>
	</div>
	<div class="list_tttl">
		<?php $listtinloaimo = $qly_tin->ListTinLoai($idLoai,$totalRows, $pageNum, $pageSize); ?>
		<?php while ($rowtinloai = mysql_fetch_assoc($listtinloaimo)) {?>
			<div class="item_tttl">
				<a href="<?= $rowtinloai['TieuDeKD']?>.html">
					<img src="<?= $rowtinloai['UrlHinh']?>">
					<h3><?= $rowtinloai['TieuDe']?></h3>
				</a>
			</div>
		<?php } ?>
		<div class="phantrangloai text-center my-4">
			<?= $qly_tin->pagesList1($TieuDeKD.'-'.$idLoai, $totalRows , $pageNum, $pageSize,2) ?>
		</div>
	</div>
	<style>
		.phantrangloai a
		{
			padding: 10px;
			border-bottom: 2px solid #d6d5d5;
			color: #444;
		}
		.phantrangloai span
		{
			padding: 10px;
			display: inline-block;
			color: #1993A6;
			border-bottom: 2px solid #1993A6;
		}
	</style>