<?php
	require_once "../../lib/class_pages.php";
	session_start();
	if(isset($ql_pa)==false) $qly_pa = new qly_pa;
	if(isset($_POST['sodienthoai'])){
		$phone_number = $_POST['sodienthoai'];
		$url = $_POST['url'];
		if(is_numeric($phone_number)){
			//$qly_pa->NhapSDT_GoiLai($phone_number,$url);
			$qly_pa->NhapSDT_GoiLai2($url);
		}		
		else{
			echo 'error_wrong_number';
		}
	}
?>