$(document).ready(function() {
	$('.banner').slick({
		centerPadding: '0px',
		prevArrow: '<a class="slick-prev" aria-label="Previous"><i></i></a>',
		nextArrow: '<a class="slick-next" aria-label="Next"><i></i></a>',
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
	});
	$('.slider_benhnhannoi').slick({
		centerPadding: '0px',
		arrows:false,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
	});
	$('.slider_trangloai').slick({
		centerPadding: '0px',
		arrows:false,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 3000,
	});
	$('.list-uuthe li').hover(function() {
		$('.list-uuthe li').removeClass('activeuuthe');
		$(this).addClass('activeuuthe');
		console.log($(this).data('id'));
		$('div[id^="tag"]').hide();
		$('#'+$(this).data('id')).show();
	});
	$('.slide_dnul li').hover(function() {
		var _id = $(this).data('id');
		$('.slide_dnul li').removeClass();
		$(this).addClass('ep'+_id);
		$('div[id^="ep"]').hide();
		$('#ep_'+_id).show();
	});
});
zxNo();
function zxNo(){
	var rno1=888;
	var rnot1=0;
	autoNo();
	setInterval(autoNo,5000);
	function autoNo(){
		rnot1=String(ltRand(200,200));
		if(rnot1!=rno1){
			rno1=rnot1;
			changeNo(rno1,$('.demso ul li'),3);
		}
	}
	function changeNo(no,id,len){
		var n=0;
		var nl=no.length;
		if(nl<len){
			for(var i=0;i<len-nl;i++){
				no="0"+no;
			}
		}
		for(var i=1;i<=len;i++){
			n=no.substr(i-1,1);
		            //them 1 div vao cuoi
		            id.eq(i-1).append('<div class="nopic" style="background:url(img/num_'+n+'.png); top:49px;"></div>');
		            //an cai div dau
		            id.eq(i-1).find(".nopic").eq(0).animate({"top":"-49px","height":"49px;"},500,function(){
		                //xoa div dau
		                $(this).remove();
		            });
		            id.eq(i-1).find(".nopic").eq(1).animate({"top":"0","height":"49px"},500);
		        }
		    }
		}
		function ltRand(maxNo,minNo){
			return parseInt(Math.floor(Math.random()*maxNo)+minNo);
		}
