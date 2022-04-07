<div class="popup">
	<div class="popup-content clearfix">
        <a href="<?php echo $link_chat; ?>" title="phong kham da khoa khang thai">
            <img src="modules/popup/bg.gif" alt="phong kham da khoa khang thai">
        </a>
        <form class="pop-form" action="" method="POST">
            <input type="text" name="sodienthoai" placeholder="Nhập số điện thoại">
            <input type="submit" name="btn_gui_sdt" value=" ">
            <input type="hidden" name="vitri" value="pc-popup-main">
        </form>
        <span class="p-dh">10</span>
        <span class="p-tv">15</span>
		<span class="popup-closer">x</span>
	</div>
</div>
<style type="text/css">
	.popup{
		position: fixed;width: 100%;height: 100%;background: rgba(11, 103, 138, 0.4);
    top: 0;
    z-index: 100000; transform-origin: 0 0;
    animation:  popup 2s;display: none;left: 0;
	}
	.popup-content {
    position:  absolute;
    left: 50%;
    top:  100px;
    transform: translate(-50%,0);
}
@keyframes popup{
	0%{
		opacity: 0;transform: translate(0px,-500px);
	}
	100%{
		opacity: 1;transform: translate(0px,0px);
	}
}
span.popup-closer {
    width: 40px;
    height: 40px;
    position: absolute;
    border-radius: 50%;
    top: 5px;
    right: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
}

span.popup-closer:hover {
    cursor:  pointer;
    transform: rotate(180deg);
}
.popup-img {
    float:  left;
    width:  30%;
}

.popup-content1 {
    margin-left:  30%;
}
form.pop-form {
    position: absolute;
    width: 100%;
    top: 58%;
    left: 0;
    padding: 0 22px;
    box-sizing: border-box;
}

form.pop-form input[type='submit'] {
 position: absolute;
 right: 5%;
 top: 0px;
 padding: 7px 10px;
 background: transparent;
 border: none;
 height: 50px;
 width: 20%;
}

form.pop-form input[type='text'] {
     width: 70%;
    box-sizing: border-box;
    padding: 5px;
    height: 48px;
    background: transparent;
    border: none;
    position: absolute;
    left: 27px;
}
span.p-dh, span.p-tv {
       position: absolute;
    bottom: 35px;
    left: 40px;
    color: white;
    font-weight: bold;
    font-size: 10px;
    display: inline-block;
    width: 30px;
    text-align: center;
}
span.p-tv{
    left: 185px;
}
</style>
<script type="text/javascript">
setTimeout(function(){
    $('.popup').css({
        'transform':'translateY(0px)',
        'opacity':'1',
        'visibility': 'visible',
        'display':'block'
    });
},2000);
$(document).ready(function() {

setInterval(function(){ 
 l=$('.p-dh').text();
 l=Math.floor((Math.random() * 100) + 20);
 $('.p-dh').text(l);
 
 l2=$('.p-tv').text();
 l2=Math.floor((Math.random() * 100) + 25);
 $('.p-tv').text(l2);
   }, 5000);

        $(document).keydown(function(e) {
    if (e.keyCode == 27) {
            //$('.videoshow').removeClass('video-active');
            // khi an esc thi tat luon video, khong cho chay ngam ben duoi
            //var src= $('.videoshow').find('iframe').attr('src');
            //$('.videoshow').find('iframe').attr('src',src);
            $('.popup').css({
                'transform':'translateY(100%)',
                'opacity':'0',
                'visibility': 'hidden'
            });
            var l = setTimeout(function(){
                $('.popup').css({
                    'transform':'translateY(0px)',
                    'opacity':'1',
                    'visibility': 'visible'
                });
            },15000)
        }
    });
$('.popup').on('click', function(e)
{
    if (e.target !== this)
        return;
    $(this).css({
        'transform':'translateY(-100%)',
        'opacity':'0',
        'visibility': 'hidden'
    });
    var l = setTimeout(function(){
        $('.popup').css({
            'transform':'translateY(0px)',
            'opacity':'1',
            'visibility': 'visible'
        });
    },15000)
});
$('.popup-closer').click(function(){
    $('.popup').css({
        'transform':'translateY(-100%)',
        'opacity':'0',
        'visibility': 'hidden'
    });
    var l = setTimeout(function(){
        $('.popup').css({
            'transform':'translateY(0px)',
            'opacity':'1',
            'visibility': 'visible'
        });
    },15000)
});
    });
</script>
