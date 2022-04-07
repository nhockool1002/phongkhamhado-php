<div class="md-left">
	<a href="<?php echo $link_chat ?>" target="_blank"><img src="modules/left/left.gif"></a>
	<span class="md-l-c">x</span>
	<form method="POST">
		<input type="text" pattern="[0-9]{10}" maxlength="10" name="sodienthoai" placeholder="Nhập số điện thoại" required="">
		<input type="submit" name="btn_sdt_goilai" value="GỬI">
	</form>
</div>
<style type="text/css" media="screen">
	.md-left {
		box-shadow: 0px 0px 5px rgba(239,82,94,0.8);
		position: fixed;
		top: 50px;
		left: 0;
		transform-origin: 0 0;
		transition: all 0.7s;
		transform: scaleX(1);
	}
	span.md-l-c {
		height: 25px;
		width: 25px;
		background: red;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		border-radius: 50%;
		color: white;
		position: absolute;
		top: -13px;
		right: -13px;
		cursor: pointer;
	}
	.md-left.hide {
		transform: scaleX(0);
	}
	.md-left form {
		position: absolute;
		width: 95%;
		left: 0;
		bottom: 112px;
		left: 2.5%;
	}

	.md-left form input[type='text'] {
		width: 100%;
		box-sizing: border-box;
		padding: 3px;
		border: 2px solid #1face1;
		border-radius: 10px;
		padding-left: 8px;
		outline: none;
	}
	.md-left form input[type='submit'] {
		border: none;
		display: inline-block;
		background: red;
		padding: 3px 10px;
		color: white;
		position: absolute;
		bottom: calc(100% + 3px);
		left: 50%;
		transform: translateX(-50%);
		border-radius: 5px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$('span.md-l-c').click(function(){
			$('.md-left').toggleClass('hide');
		});
	});
</script>