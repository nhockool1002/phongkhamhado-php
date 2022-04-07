$(function() {
	var pop1 = 'daidong-popup'; var pop2 = 'popup'; var timer1 = null; var changePop = null; var temp = true;
	
	// Hiển thi popup 1.
	function showP1(){
		$('.'+pop1).fadeIn();
		timer1 = setTimeout(function(){ 
			$('.'+pop1).fadeOut();			
		},20000);
		changePop = setTimeout(function(){
			showP2();
		},20000);
	}
	// Hiển thị popup 2.  
	function showP2(){
		$('.'+pop2).fadeIn();
		timer1 = setTimeout(function(){
			$('.'+pop2).fadeOut();			
		},50000000000);
		changePop = setTimeout(function(){
			showP1();
		},20000000000000);
	}	
	// Hàm họi popup
	function callP(){			
		if(temp){
			showP1();
		}else{
			showP2();
		}
		temp = !temp;
	}
	// Không hiển thị cả hai popup
	function clearP(){
		$('.'+pop1).fadeOut();
		$('.'+pop2).fadeOut();
	}
	function stopAll(){
		clearTimeout(timer1);
		clearTimeout(changePop);
	}
	document.getElementsByClassName("stop")[0].addEventListener("focus", stopAll);
	
	document.getElementsByClassName("daidong-popup-close")[0].addEventListener("click", closeP1);
	function closeP1() {
		stopAll();
		$('.'+pop1).fadeOut();	
		changePop = setTimeout(function(){
			showP2();
		},10000);
	}
	document.getElementsByClassName("daidong-popup-close2")[0].addEventListener("click", closeP1);
	function closeP1() {
		stopAll();
		$('.'+pop1).fadeOut();	
		changePop = setTimeout(function(){
			showP2();
		},10000);
	}
	
	document.getElementsByClassName("close")[0].addEventListener("click", closeP2);
	function closeP2() {
		stopAll();
		$('.'+pop2).fadeOut();	
		changePop = setTimeout(function(){
			showP1();
		},10000);
	}
	// Hàm khởi chạy.
	function run(){
		clearP();
		callP();
	}
	run();
	
});  