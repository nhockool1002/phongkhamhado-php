<?php
	require_once "checklogin.php";
	require_once "class_quantri.php";
	require_once "../wp-admin/config.php";
	$qt =  new quantri;
?>
<script type="text/javascript">

	$(document).ready(function() {

			// Store variables

			var accordion_head = $('.accordion > li > a'),
			accordion_body = $('.accordion li > .sub-menu');

			// Open the first tab on load

			if ($.cookie('kaka')>0){
				var menu = $.cookie('kaka');
				var menu_hien = '#'+menu+' a';
				$(menu_hien).addClass('active').next().slideDown('normal');
			}
			else
				$('#1 a').addClass('active').next().slideDown('normal');

			// Click function

			accordion_head.on('click', function(event) {

				// Disable header links

				event.preventDefault();

				// Show and hide the tabs on click

				if ($(this).attr('class') != 'active'){
					accordion_body.slideUp('normal');
					$(this).next().stop(true,true).slideToggle('normal');
					accordion_head.removeClass('active');
					$(this).addClass('active');
				}

			});

		});

	function luu(menu){
		$.cookie('kaka', menu, {expires:7,path:'/'});
	}
</script>
<div id="wrapper-250">

	<ul class="accordion">
		<li id="1" class="home">
			<a href="#one">Trang Chủ</a>
			<ul class="sub-menu">
				<li><a onclick="luu(1)" href="<?php echo HOME_LINK; ?>"><em>01</em>Trang Phòng Khám</a></li>
				<li><a onclick="luu(1)" href=""><em>02</em>Trang Chủ</a></li>
			</ul>

		</li>
		<?php if ($_SESSION['kt_login_level'] >= 2 ) { ?>
			<li id="2" class="page">
				<a href="#one">Pages</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(2)" href="main.php?p=pa_xem"><em>01</em>Tất Cả trang<span><?php //echo $qt->TongPages(); ?></span></a></li>
					<li><a  onclick="luu(2)" href="main.php?p=pa_them"><em>02</em>Thêm Trang</a></li>
				</ul>
			</li>
			<li id="4"  class="post">
				<a href="#one">Tin Tức</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(4)" href="main.php?p=tt_xem"><em>01</em>Tất Cả Tin Tức<span><?php //echo $qt->TongTT(); ?></span></a></li>
					<li><a  onclick="luu(4)" href="main.php?p=tt_them"><em>02</em>Thêm Tin Tức</a></li>
				</ul>
			</li>
			<li id="5"  class="catalog">
				<a href="#one">Danh Mục</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(5)" href="main.php?p=dm_xem"><em>01</em>Tất Cả Danh Mục<span><?php //echo $qt->TongDM(); ?></span></a></li>
					<li><a  onclick="luu(5)" href="main.php?p=dm_them"><em>02</em>Thêm Danh Mục</a></li>
				</ul>
			</li>
			<li id="89"  class="advise">
				<a href="#one">Tư vấn</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(89)" href="main.php?p=advise-list"><em>01</em>Danh sách<span><?php //echo $qt->TongDM(); ?></span></a></li>
				</ul>
			</li>
			<li id="90"  class="settings">
				<a href="#one">Cài Đặt</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(90)" href="main.php?p=general-settings"><em>01</em>Cài đặt chung<span><?php //echo $qt->TongDM(); ?></span></a></li>
				</ul>
			</li>
            <li id="91"  class="menus-s">
				<a href="#one">Menu</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(91)" href="main.php?p=menu-settings"><em>01</em>Cài đặt menu<span><?php //echo $qt->TongDM(); ?></span></a></li>
				</ul>
			</li>
		<?php } ?>
		<?php if($_SESSION['kt_login_level'] == 1 || $_SESSION['kt_login_level'] == 3){ ?>
			<li id="6" class="question">
				<a href="#one">Câu Hỏi</a>
				<ul class="sub-menu">
					<li><a  onclick="luu(6)" href="main.php?p=ch_xem"><em>01</em>Tất Cả Câu Hỏi<span><?php //echo $qt->TongCH(); ?></span></a></li>
				</ul>
			</li>
		<?php } ?>
		<li id="9" class="sign">
			<a href="#four">Tài Khoản</a>
			<ul class="sub-menu">
				<li><a onclick="luu(9)" href="thoat.php"><em>01</em>Log Out</a></li>
				<li><a onclick="luu(9)" href="main.php?p=tk_doi"><em>02</em>Đổi Mật Khẩu</a></li>
				<?php if ($_SESSION['kt_login_level'] == 3) { ?>
					<li><a  onclick="luu(9)" href="main.php?p=tk_xem"><em>03</em>Quản Lý User<span><?php //echo $qt->TongTK(); ?></span></a></li>
					<li><a onclick="luu(9)" href="main.php?p=tk_them"><em>04</em>Thêm User</a></li>
				<?php } ?>
			</ul>
		</li>

			<!-- <li id="10" class="page">
				<a href="#one">Sitemap</a>
				<ul class="sub-menu">
					<li><a href="main.php?p=sitemap"><em>01</em>Tạo sitemap</a></li>
				</ul>
			</li>
		-->
	</ul>
</div>
