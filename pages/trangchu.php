<div class="list-underbanner">
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-flex align-items-center">
					<a class="item-banner" href="sui-mao-ga-2/">
						<img src="img/nav_ico_suimaoga.png">
						Sùi mào gà
					</a>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<a class="item-banner" href="benh-lau-4/">
						<img src="img/nav_ico_benhlau.png">
						Bệnh lậu
					</a>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<a class="item-banner" href="giang-mai-3/">
						<img src="img/nav_ico_giangmai.png">
						Bệnh giang mai
					</a>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<a class="item-banner" href="mun-rop-sinh-duc-5/">
						<img src="img/nav_ico_munropsinhduc.png">
						Mụn rộp sinh dục
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="nhunggiquantam py-5">
		<div class="container">
			<div class="text-center">
				<span class="title-all">NHỮNG GÌ BẠN QUAN TÂM ĐỀU Ở ĐÂY</span>
			</div>
			<p>NHỮNG BỆNH XÃ HỘI ĐƯỢC TÌM THẤY NHIỀU NHẤT TẠI PHÒNG KHÁM</p>
			<ul class="menu-nhunggi d-flex justify-content-center">
				<li class="text-center activenhunggi" data-id="2">
					Sùi mào gà
				</li>
				<li class="text-center" data-id="4">
					Bệnh lậu
				</li>
				<li class="text-center" data-id="3">
					Bệnh giang mai
				</li>
				<li class="text-center" data-id="5">
					Mụn rộp sinh dục
				</li>
			</ul>
			<div class="content_menunhunggi">
				<ul class="d-flex">
					<?php $tin_mng = $qly_tin->ListTinMoi(2,0,4); ?>
					<?php while ($row_tin_mng = mysql_fetch_assoc($tin_mng)) {?>
						<li class="text-center item-ctmn">
							<div class=" pb-3">
								<a href="<?= $row_tin_mng['TieuDeKD']?>.html"><?= $row_tin_mng['TieuDe']?></a>
							</div>
							<a href="<?= $link_chat?>" class="timhieu">Tìm hiểu kỹ hơn</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$('.menu-nhunggi li').hover(function() {
					var idtrangloai = $(this).data("id");
					$('.menu-nhunggi li').removeClass('activenhunggi');
					$(this).addClass('activenhunggi');
					$.post('ajax/ajaxindex.php', {id: idtrangloai}, function(data) {
						$('.content_menunhunggi ul').html('');
						$('.content_menunhunggi ul').html(data);

					});
				});
			});
		</script>
		<div class="text-center mt-4">
			<a href="<?= $link_chat?>" class="btn-tuvan"> Tư vấn bác sĩ</a>
		</div>
	</div>
	<div class="hinhanhphongkham">
		<div class="container">
			<div class="text-center">
				<span class="title-all">PHÒNG KHÁM CHUYÊN KHOA BỆNH XÃ HỘI</span>
			</div>
			<img src="img/chuyenkhoa_img.png" class="mt-3 w-100">
		</div>
	</div>
	<div class="hoibacsi">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="khunghoibacsi">
						<p>Hỏi bác sỹ</p>
						<p>Những thắc mắc về y khoa, các căn bệnh, cách phòng ngừa, điều trị... sẽ được đội ngũ Bác Sĩ chúng tôi trả lời trong thời gian sớm nhất.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="khungringhoibacsi">
						<p>Thưa bác sỹ tôi có vấn đề liên quan đến sức khỏe cần sự giúp đỡ, mong nhận được sự phản hồi nhanh chóng từ bác sỹ.</p>
						<div class="d-flex justify-content-between">
							<a href="<?= $link_chat?>" class="align-self-center btn-tuvan2">gửi câu hỏi của bạn</a>
							<a href="<?= $link_chat?>">
								<img src="img/ico_tv.png">
								bác sĩ trả lời
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="uuthechungtoi">
		<div class="container">
			<div class="text-center">
				<span class="title-all">ƯU THẾ CỦA CHÚNG TÔI</span>
			</div>
			<div class="row mt-5">
				<div class="col-md-9 ">
					<div id="tag1">
						<div class="d-flex">
							<div class="item-leftuuthe">
								<p>Phòng Khám đa khoa Thiện Hòa là phòng khám quy mô lớn chuyên nghiệp ở Hà Nội, có ưu thế mà không phòng khám nào so sánh được.

									Có bác sỹ chuyên nghiệp với hơn 20 năm kinh nghiệm lâm sàng, là cơ sở điều trị có hiệu quả.

									Phòng khám có kỹ thuật tiên tiến, thiết bị điều trị hiện đại mới nhất thế giới.

								Phòng khám Thiện Hòa được người dân Hà Nội lựa chọn và tin tưởng, đây là động lực làm việc của toàn bộ các y bác sỹ nhân viên phòng khám.</p>
							</div>
							<div class="item-rightuuthe">
								<img src="img/uuthe1.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div id="tag2" style="display: none">
						<div class="d-flex" >
							<div class="item-leftuuthe">
								<h4>Thành tích vượt trội, tương lai huy hoàng</h4>
								<p>Nhiều năm nay Phòng Khám đa khoa Thiện Hòa luôn nỗ lực nghiên cứu và mở rộng phương pháp điều trị tốt nhất đối với bệnh xã hội, khiến cho trình độ điều trị các bệnh xã hội không ngừng nâng cao, luôn theo kịp quỹ đạo thế giới, không ngừng nâng cao trình độ kỹ thuật y tế. Toàn tâm thực hiện phòng khám bệnh xã hội chuyên nghiệp, hiện đại...</p>
							</div>
							<div class="item-rightuuthe">
								<img src="img/uuthe2.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div id="tag3" style="display: none">
						<div class="d-flex" >
							<div class="item-leftuuthe">
								<h4>Tiêu chuẩn cao, chất lượng cao, đảm bảo hiệu quả điều trị.</h4>
								<p>Phòng Khám đa khoa Thiện Hòa là phòng khám đa khoa chuyên nghiệp ở Hà Nội, có môi trường nghiên cứu khoa học tốt, môi trường học thuật sâu rộng và kết hợp mật thiết chẩn trị lâm sàng và nghiên cứu cơ sở, Phòng Khám đa khoa Thiện Hòa do tiêu chuẩn cao về dịch vụ, kỹ thuật điều trị tiên tiến chuyên nghiệp, tỷ lệ chữa khỏi cao, nhận được lời nhận xét tốt từ các bộ ngành liên quan...</p>
							</div>
							<div class="item-rightuuthe">
								<img src="img/uuthe3.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div id="tag4" style="display: none">
						<div class="d-flex" >
							<div class="item-leftuuthe">
								<h4>Thương hiệu dịch vụ điều trị bệnh xã hội.</h4>
								<p>Phòng Khám đa khoa Thiện Hòa Hà Nội áp dụng phương pháp quản lý tiêu chuẩn quốc tế, giành được thương hiệu phục vụ về bệnh xã hội, đảm bảo chất lượng chẩn trị về bệnh xã hội, khái niệm về tinh thần nhân viên, khái niệm về dịch vụ phòng khám... Phòng khám theo đuổi môi trường văn hóa</p>
							</div>
							<div class="item-rightuuthe">
								<img src="img/uuthe4.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div id="tag5" style="display: none">
						<div class="d-flex" >
							<div class="item-leftuuthe">
								<h4>Quan niệm dịch vụ: “thành tâm hành nghề, lấy người làm gốc”</h4>
								<p>Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.</p>
							</div>
							<div class="item-rightuuthe">
								<img src="img/uuthe5.jpg" class="w-100">
							</div>
						</div>
					</div>
					<div id="tag6" style="display: none">
						<div class="d-flex" >
							<div class="item-leftuuthe">
								<h4>Hơn 20 nghìn bệnh nhân tin tưởng phòng khám</h4>
								<p>Phòng khám làm theo quan niệm dịch vụ “thành tâm hành nghề, lấy người làm gốc”, lấy “an toàn, không đau, xâm lấn tối thiểu, dễ chịu” làm phương châm mục tiêu điều trị, toàn diện thực hiện “dùng tâm làm việc, chẩn đoán chính xác, giải đáp tận tâm, điều trị hiệu quả, dịch vụ nhiệt tình, thành tâm chúc phúc”, nỗ lực vì sức khỏe của người dân Việt Nam.</p>
							</div>
							<div class="item-rightuuthe">
								<img src="img/uuthe6.jpg" class="w-100">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="list-uuthe">
						<li class="activeuuthe" data-id="tag1">
							<i></i>
							Lịch sử thương hiệu
						</li>
						<li data-id="tag2">
							<i></i>
							Thương hiệu vinh dự
						</li>
						<li data-id="tag3">
							<i></i>
							Thương hiệu thực lực
						</li>
						<li data-id="tag4">
							<i></i>
							Thương hiệu văn hóa
						</li>
						<li data-id="tag5">
							<i></i>
							Thương hiệu dịch vụ
						</li>
						<li data-id="tag6">
							<i></i>
							Thương hiệu truyền miệng
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script>

	</script>
	<style>
		
	</style>
	<div class="benhnhannoi">
		<div class="container">
			<p class="bn_binhluan_tit">Bệnh nhân nói gì về chúng tôi</p>
			<div class="slider_benhnhannoi">
				<div>
					<p>
						Bệnh lậu là bệnh rất khó chữa mọi người ạ, e đã mắc bệnh và điều trị dai dẳng gần 2 năm mà không khỏi. Tuy nhiên chỉ sau khi chữa trị tại phòng khám đa khoa Thiện Hòa bằng kỹ thuật chặn gene GSA công nghệ Mỹ thì em đã hoàn toàn khỏi, tính đến nay bệnh đã khỏi được gần 1 năm và không có dấu hiệu tái phát.
					</p>
				</div>
				<div>
					<p>
						Bệnh lậu là bệnh rất khó chữa mọi người ạ, e đã mắc bệnh và điều trị dai dẳng gần 2 năm mà không khỏi. Tuy nhiên chỉ sau khi chữa trị tại phòng khám đa khoa Thiện Hòa bằng kỹ thuật chặn gene GSA công nghệ Mỹ thì em đã hoàn toàn khỏi, tính đến nay bệnh đã khỏi được gần 1 năm và không có dấu hiệu tái phát.
					</p>
				</div>
				<div>
					<p>
						Bệnh lậu là bệnh rất khó chữa mọi người ạ, e đã mắc bệnh và điều trị dai dẳng gần 2 năm mà không khỏi. Tuy nhiên chỉ sau khi chữa trị tại phòng khám đa khoa Thiện Hòa bằng kỹ thuật chặn gene GSA công nghệ Mỹ thì em đã hoàn toàn khỏi, tính đến nay bệnh đã khỏi được gần 1 năm và không có dấu hiệu tái phát.
					</p>
				</div>
				<div>
					<p>
						Bệnh lậu là bệnh rất khó chữa mọi người ạ, e đã mắc bệnh và điều trị dai dẳng gần 2 năm mà không khỏi. Tuy nhiên chỉ sau khi chữa trị tại phòng khám đa khoa Thiện Hòa bằng kỹ thuật chặn gene GSA công nghệ Mỹ thì em đã hoàn toàn khỏi, tính đến nay bệnh đã khỏi được gần 1 năm và không có dấu hiệu tái phát.
					</p>
				</div>
				<div>
					<p>
						Bệnh lậu là bệnh rất khó chữa mọi người ạ, e đã mắc bệnh và điều trị dai dẳng gần 2 năm mà không khỏi. Tuy nhiên chỉ sau khi chữa trị tại phòng khám đa khoa Thiện Hòa bằng kỹ thuật chặn gene GSA công nghệ Mỹ thì em đã hoàn toàn khỏi, tính đến nay bệnh đã khỏi được gần 1 năm và không có dấu hiệu tái phát.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="chudebanquantam">
		<div class="container">
			<div class="text-center">
				<span class="title-all">chủ đề bạn quan tâm</span>
			</div>
			<div class="row p-4">
				<div class="col-md-8 p-0">
					<ul class="list_chude d-flex justify-content-between">
						<li data-idchude ="2" class="hover">Sùi mào gà</li>
						<li data-idchude ="4">Bệnh lậu</li>
						<li data-idchude ="3">Bệnh giang mai</li>
						<li data-idchude ="5">Mụn rộp sinh dục</li>
					</ul>
					<script>
						$(document).ready(function() {
							$('.list_chude li').hover(function() {
								var idchude = $(this).data("idchude");
								$('.list_chude li').removeClass('hover');
								$(this).addClass('hover');
								$.post('ajax/ajaxindex2.php', {id: idchude}, function(data) {
									$(".allbv_chude").html('');
									$(".allbv_chude").html(data);
								});
								
							});
						});
					</script>
					<div class="allitem_chude">
						<!-- <ul class="list_subchude d-flex align-items-center mb-3">
							<li class="hover">Nguyên nhân</li>
							<li>Triệu chứng</li>
							<li>Triệu chứng</li>
							<li>Triệu chứng</li>
							<li>Triệu chứng</li>
							<li>Triệu chứng</li>
						</ul> -->
						<div class="allbv_chude d-flex mt-4">
							<?php $tin_chude = $qly_tin->ListTinMoi(2,0,9);
									$tinchude1 = mysql_fetch_assoc($tin_chude);
							 ?>
							<div class="col-md-5 itembv_right">
								<a href="<?= $tinchude1['TieuDeKD']?>.html">
									<img src="<?= $tinchude1['UrlHinh']?>" class="w-100">
									<p class="title_chude">
										<?= $tinchude1['TieuDe']?>
									</p>
									<p class="des_chude">
										<?= $tinchude1['TieuDe']?><span class="btn_chitiet">【Chi tiết】</span>
									</p>
								</a>
							</div>
							<div class="col-md-7">
								<ul class="listbv_chude">
									<?php while ($rowtinchude = mysql_fetch_assoc($tin_chude)) {?>
										<li>
											<a href="<?= $rowtinchude['TieuDeKD'] ?>.html"><?= $rowtinchude['TieuDe'] ?></a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 p-0">
					<div class="list_rightchude">Tôi mún đặt hẹn</div>
					<p class="pkpk">Phòng khám mỗi ngày <br> hạn chế số lượng 20 người</p>
					<div class="allphone">
						<div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
							<div class="item_phone">
								<div class="dh_name">Nguyễn Trọng Tuyến</div>
								<div class="dh_sdt">039 3xxxx762</div>
								<div class="dh_status">Thành công</div>
							</div>
						</div>
					</div>
					<div class="free_allphone">
						<div><span>Miễn phí</span>đặt hẹn trên mạng</div>
						<div><span>Điện thoại đặt hẹn:</span> <?= SDT?></div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="count_online">
		<div class="container">
			<div class="row align-items-center h-100">
				<div class="col-md-4">
					<div class="count_ol">
						<div class="demso">
							<ul>
								<li>
									<div class="nopic"></div>
								</li>
								<li>
									<div class="nopic"></div>
								</li>
								<li>
									<div class="nopic"></div>
								</li>
							</ul>
							<div class="contentdem">
								Số người online
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="demso">
						<ul>
							<li>0</li>
							<li>1</li>
							<li>7</li>
							<li>8</li>
							<li>0</li>
						</ul>
						<div class="contentdem">
							Số người tư vấn trong tháng
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="demso">
						<ul>
							<li>1</li>
							<li>2</li>
							<li>8</li>
							<li>0</li>
						</ul>
					</div>
					<div class="contentdem">
						Số người hẹn khám trong tháng
					</div>
				</div>
			</div>
			<div class="col-md-12 d-flex justify-content-center align-items-center">
				<a href="" class="cldk_count">CLICK ĐĂNG KÍ HẸN KHÁM</a>
			</div>
		</div>
	</div>
	<div class="vechungtoi">
		<div class="container">
			<div class="text-center">
				<span class="title-all">vỀ CHÚNG TÔI</span>
			</div>
			<div class="text-center p-2">
				Phòng khám chuyên khoa bệnh xã hội, chúng tôi chứng mình bằng hiệu quả điều trị
			</div>
			<div class="row p-3">
				<div class="col-md-3">
					<img class="w-100" src="img/about1.jpg">
					<div class="title_about">
						Dịch vụ VIP
					</div>
					<div class="content_about border">
						Phòng khám có môi trường y tế lý tưởng, bác sỹ thân thiện với bệnh nhân, hướng dẫn tận tình, phòng bệnh ấm cúng như ở nhà
					</div>
				</div>
				<div class="col-md-3">
					<img class="w-100" src="img/about1.jpg">
					<div class="title_about">
						Bảo mật thông tin
					</div>
					<div class="content_about border">
						Quy trình thăm khám một bác sỹ một bệnh nhân nhằm nâng cao và đảm bảo tính bảo mật thông tin cá nhân cho người bệnh.
					</div>
				</div>
				<div class="col-md-3">
					<img class="w-100" src="img/about1.jpg">
					<div class="title_about">
						Thu phí công khai
					</div>
					<div class="content_about border">
						Phòng khám nghiêm ngặt tuân thủ quy định về thu phí của các ban ngành liên quan, thu phí có hóa đơn rõ ràng, theo dõi chặt chẽ.
					</div>
				</div>
				<div class="col-md-3">
					<img class="w-100" src="img/about1.jpg">
					<div class="title_about">
						Quy trình thăm khám
					</div>
					<div class="content_about border">
						Phòng khám cung cấp quy trình thăm khám rõ ràng, có thể tìm hiểu trên mạng hoặc gọi điện đặt mã số khám và được tư vấn cụ thể
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bancanhotro">
		<div class="container">
			<div class="text-center">
				<span class="title-all">BẠN CẦN HỖ TRỢ</span>
			</div>
			<div class="text-center p-2">
				Bạn có thắc mắc về việc khám và chữa bệnh, hồ sơ bệnh án, đặt lịch hẹn Bác sĩ, những triệu chứng đang mắc phải, .... Hãy liên hệ ngay cho chúng tôi để được hỗ trợ tốt nhất.
			</div>
			<div class="list_help pt-3">
				<ul>
					<li>
						<a href="<?= $link_chat?>">
							<img class="mr-3" src="img/ico_dt.png">
							<div>
								<div>Điện thoại tư vấn</div>
								<div class="name_bcht">	<?= SDT?></div>
							</div>
						</a>
					</li>
					<li>
						<a href="<?= $link_chat?>">
							<img class="mr-3" src="img/ico_tc.png">
							<div>
								<div>Hỗ trợ trò chuyện</div>
								<div class="name_bcht">Trò chuyện</div>
							</div>
						</a>
					</li>
					<li>
						<a href="<?= $link_chat?>">
							<img class="mr-3" src="img/ico_email.png">
							<div>
								<div>Gửi thư cho chúng tôi</div>
								<div class="name_bcht">Qua Email</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="hotro2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 quytrinh">
						<div class="name_hotro2">
							QUY TRÌNH <br>
							KHÁM BỆNH CỦA PHÒNG KHÁM
						</div>
						<a href="<?= $link_chat?>"> Tìm hiểu thêm</a>
					</div>				
					<div class="col-md-6 chuyengia">
						<div class="name_hotro22">
							CHUYÊN GIA <br>
							BÁC SỸ HỖ TRỢ TƯ VẤN
						</div>
						<a href="<?= $link_chat?>">Click để được tư vấn</a>
					</div>					
				</div>
			</div>
		</div>
	</div>