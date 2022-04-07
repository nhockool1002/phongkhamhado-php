<?php 
require_once '../lib/class_tintuc.php';
$qly_tin = new qly_tin;
$actual_link = sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']);
$link_chat = "https://tuvan.dakhoavinhhalong.vn/LR/Chatpre.aspx?id=MJE22123319&lng=en&p=".$actual_link;
$cont = '';
if (isset($_POST['id'])) {
	$tin_ajax = $qly_tin->ListTinMoi($_POST['id'],0,4);
	while ($row_tinaj = mysql_fetch_assoc($tin_ajax)) {
		$cont .='<li class="text-center item-ctmn">
						<div class=" pb-3">
							<a href="'.$row_tinaj['TieuDeKD'].'.html">'.$row_tinaj['TieuDe'].'</a>
						</div>
						<a href="'.$link_chat.'" class="timhieu">Tìm hiểu kỹ hơn</a>
					</li>';
	}
	echo $cont;
}

 ?>