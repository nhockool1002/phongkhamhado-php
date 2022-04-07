<?php

$idLoai = $_GET['idLoai'];settype($idLoai,"int");
$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum']:1;
settype($pageNum,"int");
$pageSize = 9;
$TieuDeKD1 = $_GET['TieuDeKD'];
$TieuDeKD = $qly_loai -> LayTieuDeKD($idLoai);
$idCha = $qly_loai -> LayIDCha($idLoai);
$idCL = $qly_loai ->LayIDCha($idLoai);
if($idCL == 0){
	$idCL = $idLoai;
}
?>