<?php
$TieuDeKD = $_GET['TieuDeKD'];
$TieuDeKD = $qly_tin -> XoaDinhDang($TieuDeKD);
$idTT = $qly_tin -> LayID($TieuDeKD);
settype($idTT,"int");
if($idTT > 0){
	$result = $qly_tin -> TinTuc($idTT);
	$detail = mysql_fetch_assoc($result);
	$idCL = $qly_tin -> LayidCL($idTT);
	$idCLTDKD = $qly_tin -> LayidCL($idTT);
	$idLoai = $qly_tin -> LayidLoai($idTT);
	$idCon = $detail['idCon'];}
	else{
		$idPa = $qly_pa->LayID($TieuDeKD); 
		if ($idPa > 0) {
			$content = $qly_pa->Pages($idPa);
			$detail = mysql_fetch_assoc($content);		
		}
		else
		{
			header("location: /");
		}
	}
	
	?>