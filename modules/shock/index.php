<style>
	.shock{}
	.shock_wrap{position:relative;display:inline-block}
	.shock_block{position:absolute;top:0;left:0;bottom:0;right:0;background:#666;text-align:center;margin:auto;border:1px solid #ccc;color:#fff}
	.shock_block span{top: 0px;position: absolute;right: 0px;left: 0px;margin: auto;bottom: 0px;width:90%;line-height:90%;display: flex;flex-direction: column;justify-content: center}
	.shock_click{padding:2%;background-color:#eee;border:1px solid #ccc;border-radius:5px;text-decoration:none;color:#666;}
</style>
<script>
	$(function(){
		$(".shock").each(function(){
			$(this).wrap("<span class='shock_wrap'></span>");
		})
		$(".shock_wrap").append('<span class="shock_block"><span><div>Hình ảnh có nội dung gây shock !! Cân nhắc trước khi xem </div><div style="clear:both;height:7%"></div><div style="text-align:center;display:block"><a class="shock_click" href="#">Click vào xem</a></div></span></span>');
		$(".shock_click").click(function(){
			$(this).parent().parent().parent().animate({"opacity":0},500);
			return false;
		});
	})
</script>
