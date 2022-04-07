	<div class="fix_menumobile">
		<div class="coverblack_mm"></div>
		<div class="cover_mm">
			<div class="top_mm">
				Menu
				<span>x</span>
			</div>
			<ul class="list_mm">
				<li>
					<a href="./">Trang chủ</a>
				</li>	
				<li>
					<a href="">Giới thiệu</a>
				</li>	
				<?php $mm_menu = $qly_loai->ListLoai(1,1,0);?>	
				<?php while ($rowmmenu = mysql_fetch_assoc($mm_menu)) {?>
					<li>
						<a href="<?= $rowmmenu['TieuDeKD']?>-<?= $rowmmenu['idLoai']?>/"><?= $rowmmenu['TieuDe']?></a>
					</li>	
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="header py-2">
		<div class="header_top d-flex align-items-center justify-content-center py-2">
			<a href="./">
				<img src="img/logo_top.png">
			</a>
			<a href="<?= TEL?>">
				<img src="img/ico_dienthoai.gif" class="dt_gif">
			</a>
		</div>
		<div class="search_top d-flex align-items-center">
			<div class="bar_menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="flex-fill">
				<div class="input-group">
					<input type="text" name="keyword" id="input-search" class="form-control border-0" placeholder="Search for...">
					<div class="input-group-append">
						<button class="btn btn-default border-0" id="btn-search" type="button">Tìm kiếm</button>
					</div>
				</div>
			</div>
		</div>
		<div class="list_menu_header mt-2">
			<ul class="d-flex align-items-center">
				<li class="flex-fill">
					<a href="">
						Trang chủ 
					</a>
				</li>
				<li class="flex-fill">
					<a href="">
						Giới thiệu 
					</a>
				</li>
				<li class="flex-fill">
					<a href="<?= MAP?>" class="border-0">
						Địa chỉ
					</a>
				</li>
			</ul>
		</div>
	</div>