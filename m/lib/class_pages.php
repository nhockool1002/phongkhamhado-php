<?php
require_once "class_db.php";
class qly_pa extends db{

	public function LayTieuDeKD($idPa){
		$sql="SELECT TieuDeKD  FROM pages WHERE idPa = '$idPa'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['TieuDeKD'];
	}
	public function LayID($TieuDeKD){
		$sql="SELECT idPa  FROM pages WHERE TieuDeKD = '$TieuDeKD'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['idPa'];
	}
	public function LayIDGroup($idPa){
		$sql="SELECT idGroup  FROM pages WHERE idPa = '$idPa'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['idGroup'];
	}
	public function LayNoiDung($idPa){
		$sql="SELECT NoiDung  FROM pages WHERE idPa = '$idPa'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['NoiDung'];
	}
	public function Pages($idPa){
		$sql="SELECT TieuDe, NoiDung, idGroup
		from pages
		WHERE  idPa = $idPa";
		$kq = mysql_query($sql,$this->conn);
		return $kq;
	}
	public function ListPages($idGroup, &$totalRows, $pageNum=1, $pageSize = 10){
		$startRow = ($pageNum-1)*$pageSize;
		$sql="SELECT TieuDe, TomTat, TieuDeKD, UrlHinh
		from pages
		WHERE  AnHien = 1 and idGroup = $idGroup
		ORDER BY idPa desc
		LIMIT $startRow , $pageSize
		";
		$kq = mysql_query($sql,$this->conn);
		$sql="SELECT count(*) FROM pages WHERE AnHien = 1 and idGroup = $idGroup
		";
		$rs= mysql_query($sql);
		$row_rs = mysql_fetch_row($rs);
		$totalRows = $row_rs[0];
		return $kq;
	}
	public function LayTitle($idPa){
		$sql="SELECT Title  FROM pages WHERE idPa = '$idPa'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['Title'];
	}
	public function LayDes($idPa){
		$sql="SELECT Des  FROM pages WHERE idPa = '$idPa'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['Des'];
	}
	public function LayKeyword($idPa){
		$sql="SELECT Keyword  FROM pages WHERE idPa = '$idPa'
		";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
		return $row_trang['Keyword'];
	}
	public function LayCauHoi($idCL)
	{
		$sql="SELECT * FROM cauhoi WHERE idCL = '$idCL'";
		$kq = mysql_query($sql,$this->conn);		
		return $kq;
	}
	public function LayCauTraLoi($idCH)
	{
		$sql="SELECT * FROM traloi WHERE idCH = '$idCH'";
		$kq = mysql_query($sql,$this->conn);		
		return $kq;
	}
	public function NhapSDT_GoiLai()
	{ 
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$sdt=$_POST['sodienthoai'];
		$hoten = isset($_POST['hoten'])?$_POST['hoten']:"";
		$hoten = parent::XoaDinhDang($hoten);
		$trieuchung = isset($_POST['trieuchung'])?$_POST['trieuchung']:"";
		$trieuchung = parent::XoaDinhDang($trieuchung);
		$sdt = strip_tags($sdt);
		$sdt = mysql_real_escape_string($sdt);
		$sdt1=$sdt."---http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
		$url = "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
		$conn2 = mysql_connect("localhost","admin_khang","khang123!@#");
		mysql_select_db("admin_dkdavn", $conn2);
		mysql_query("set names 'utf8'");

		$sql="INSERT INTO `sodienthoai` (
		`sdt` ,
		`NgayGioDK`,`IP`
		)
		VALUES ('".$sdt1."',  '".date("Y-m-d H:i:s")."','".$this->getClientIP()."');";
		mysql_query($sql,$conn2);
		echo "<script>alert('Số điện thoại ".$sdt." của bạn đã được gửi đến chúng tôi. Chúng tôi sẽ gọi lại cho bạn trong thời gian sớm nhất!' );window.location.href='".$actual_link."';</script>";
		
	}
	public function NhapSDT_GoiLai2($sodienthoai)
	{  
		$sdt=$sodienthoai;
		if (get_magic_quotes_gpc()== false) {
			$sdt = mysql_real_escape_string($sdt);
		}
		$sdt1=$sdt."---http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; 
		$conn2 = mysql_connect("localhost","shjie888","khang123!@#");
		mysql_select_db("shjie888_bvnk", $conn2);
		mysql_query("set names 'utf8'");

		$sql="INSERT INTO `sodienthoai` (				
		`sdt` ,
		`NgayGioDK`,`IP`
		)
		VALUES ('".$sdt1."',  '".date("Y-m-d H:i:s")."','".$this->getClientIP()."');";
		mysql_query($sql,$conn2);

		echo "<script>alert('Số điện thoại ".$sdt." của bạn đã được gửi đến chúng tôi. Chúng tôi sẽ gọi lại cho bạn trong thời gian sớm nhất!' );</script>";
	}
	function getClientIP() {	
		if (isset($_SERVER)) {

			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
				return $_SERVER["HTTP_X_FORWARDED_FOR"];

			if (isset($_SERVER["HTTP_CLIENT_IP"]))
				return $_SERVER["HTTP_CLIENT_IP"];

			return $_SERVER["REMOTE_ADDR"];
		}

		if (getenv('HTTP_X_FORWARDED_FOR'))
			return getenv('HTTP_X_FORWARDED_FOR');

		if (getenv('HTTP_CLIENT_IP'))
			return getenv('HTTP_CLIENT_IP');

		return getenv('REMOTE_ADDR');
	}
}
?>