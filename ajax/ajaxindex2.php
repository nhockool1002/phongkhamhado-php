<?php 
require_once '../lib/class_tintuc.php';
$qly_tin = new qly_tin;
$cont = '';
if (isset($_POST['id'])) {
	$tin_ajax = $qly_tin->ListTinMoi($_POST['id'],0,9);
	$tinchude1 = mysql_fetch_assoc($tin_ajax);
	$cont .="<div class='col-md-5 itembv_right'> <a href='".$tinchude1['TieuDeKD'].".html'> <img src='".$tinchude1['UrlHinh']." ' class='w-100'> <p class='title_chude'> ".$tinchude1['TieuDe']."</p> <p class='des_chude'> ".$tinchude1['TieuDe']." <span class='btn_chitiet'>【Chi tiết】</span> </p> </a> </div><div class='col-md-7'> <ul class='listbv_chude'>";
	while ($row_tinaj = mysql_fetch_assoc($tin_ajax)) {
		$cont .='<li> <a href="'.$row_tinaj['TieuDeKD'].'.html">'.$row_tinaj['TieuDe'].'</a> </li>';
	}
	$cont.="</ul> </div>";
	echo $cont;
}

 ?>