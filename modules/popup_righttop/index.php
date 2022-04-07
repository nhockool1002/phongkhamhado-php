<div class="rightbanner">
	<img src="modules/popup_righttop/imgtuvan.gif">
	<form action="" method="post" class="form_left_popup">
		<input type="text" name="sodienthoai" placeholder="Nhập số điện thoại">
		<button name="btn_gui_sdt">Gửi</button>
	</form>
	<!-- <a href="<?= ''//$link_chat?>" target="_blank" class="linkchatleft"></a> -->
	<span class="closepopuright">x</span>
</div>
<style>
	.rightbanner
	{
		position: fixed;
		top: 10%;
		right: -100%;
		box-shadow: 0 0 10px rgba(46,122,122);
		transition: all 500ms;
		z-index: 9999999;
	}
	.open_popup_right
	{
		right: 0.5%;
	}
	.form_left_popup
	{
		position: absolute;
		bottom: 9%;
		left: 3%;
		text-align: center;
		display: flex;
		align-items: center;
		justify-content: center;
		box-shadow: 0 0 10px rgba(64, 50, 54, 0.52);
		border-radius: 8px;
	}
	.form_left_popup input
	{
		height: 30px;
		width: 166px;
		border: 0;
		padding-left: 5px;
		box-sizing: border-box;
		outline: none;
		border-radius: 8px 0 0 8px;
	}
	.form_left_popup button
	{
		height: 30px;
		width: 44px;
		border: 1px solid #11bdff;
		background: #11bdff;
		color: rgb(255, 255, 255);
		box-sizing: border-box;
		cursor: pointer;
		transform: translateY(0px);
		border-radius: 0 8px 8px 0;
	}
	/*.linkchatleft
	{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 66%;
	}*/
	.closepopuright
	{
		position: absolute;
		top: -4px;
		right: 7px;
		color: #f00;
		font-size: 1.5em;
		cursor: pointer;
	}
</style>
<script>
	$(document).ready(function() {
		var arrtime = [7000,9000,12000,12000];
		var demtimei = 0;
		setTimeout(function(){
			$('.rightbanner').addClass('open_popup_right');
		},5000);
		$('.closepopuright').click(function() {
			$('.rightbanner').removeClass('open_popup_right');
			setTimeout(function(){
					$('.rightbanner').addClass('open_popup_right');
				},45000);
			// if (demtimei < 4) 
			// {
			// 	demtimei++;
			// }
		});
	});
</script>