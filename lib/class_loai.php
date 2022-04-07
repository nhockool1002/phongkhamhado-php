<?php
require_once "class_db.php";
class qly_loai extends db{

	public function DanhMucLoai($idLoai){
		$parents = $this-> LayIDCha($idLoai);
		$idList = array($idLoai);
		if ($parents > 0) {
			$idList = array_merge($idList, $this-> DanhMucLoai($parents));
		}
		return $idList;
	}
    public function ListLoai($menu, $home, $parent,$start=0,$limit=-1){
		$sql="SELECT TieuDe, TieuDeKD, UrlHinh, idLoai
            from loai
            WHERE  (Menu = $menu or $menu = -1) and(Home = $home or $home = -1) and(Parent = $parent or $parent = -1) and AnHien =1
            Order By ThuTu ASC, idLoai ASC
            ";
		if($limit!=-1) $sql.=" limit {$start},{$limit}";	
		$kq = mysql_query($sql,$this->conn);
		return $kq;
	}
	public function LayHinh($idLoai){
		$sql="SELECT UrlHinh FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['UrlHinh'];
	}
	public function LayTieuDe($idLoai){
		$sql="SELECT TieuDe  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['TieuDe'];
	}
	public function LayTomTat($idLoai){
		$sql="SELECT TomTat  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['TomTat'];
	}
	public function LayTieuDeKD($idLoai){
		$sql="SELECT TieuDeKD  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['TieuDeKD'];
	}
	public function LayID($TieuDeKD){
		$sql="SELECT idLoai  FROM loai WHERE TieuDeKD = '$TieuDeKD' and AnHien = 1
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['idLoai'];
	}
	public function LayIDCha($idLoai){
		$sql="SELECT Parent  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['Parent'];
	}
	public function LayTitle($idLoai){
		$sql="SELECT Title  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['Title'];
	}
	public function LayDes($idLoai){
		$sql="SELECT Des  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['Des'];
	}
	public function LayKeyword($idLoai){
		$sql="SELECT Keyword  FROM loai WHERE idLoai = '$idLoai'
			";
		$kq = mysql_query($sql,$this->conn);
		$row_trang = mysql_fetch_assoc($kq);
        return $row_trang['Keyword'];
	}
	
	public function SlideLoai($idLoai){
		$sql = "select * from quangcao where idLoai = $idLoai or $idLoai = -1";
		$result = mysql_query($sql);
		return $result;
	}
}
?>