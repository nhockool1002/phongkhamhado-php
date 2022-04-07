<div id="header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5 p-0">
					<a href="">
						<img src="img/header-1.png">
					</a>
				</div>
				<div class="col-md-7">
					<div class="d-flex justify-content-between">
						<div>
							<a href="<?= TEL?>">
								<img src="img/header-2.png" alt="">
							</a>
						</div>
						<div>
							<a href="<?= $link_chat?>">
								<img src="img/header-3.png" alt="">
							</a>
						</div>
						<div>
							<a href="<?= MAP?>">
								<img src="img/header-4.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="menu-top">
		<div class="container">
			<div class="row justify-content-around align-items-center">
				<ul class="d-flex flex-grow-1">
					<li class="flex-grow-1">
						<a href="">
							<i class="fa fa-home"></i>
							Trang chủ
						</a>
					</li>
					<li class="flex-grow-1">
						<a href="gioi-thieu-phong-kham.html">
							Giới thiếu
						</a>
					</li>
					<li class="flex-grow-1">
						<a href="doi-ngu-bac-si.html">
							Đội ngũ bác sĩ
						</a>
					</li>
					<li class="flex-grow-1 havsub">
						<a href="">
							Hạng mục điều trị
							<i class="fas fa-caret-down"></i>
						</a>
						<div class="sub-menu d-flex">
							<ul class="w-100">
								<?php $menu_top = $qly_loai->ListLoai(1,1,0); ?>
								<?php while ($row_menu = mysql_fetch_assoc($menu_top)) 
								{?>
									<li><a href="<?= $row_menu['TieuDeKD']?>-<?= $row_menu['idLoai']?>/"><?= $row_menu['TieuDe']?></a> </li>
								<?php } ?>
							</ul>
						</div>
					</li>
					<li class="flex-grow-1">
						<a href="<?= $link_chat?>">
							Đăng kí khám
						</a>
					</li>
				</ul>
				<div class="form-search-top">
						<div class="input-group">
							<input type="text" id="input-search" class="form-control" placeholder="Search for...">
							<div class="input-group-append">
								<button class="btn btn-default border" type="button" id="btn-search" style="width: 50px;">Tìm</button>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>