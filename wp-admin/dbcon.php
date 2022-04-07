<?php
//sau e vứt lên  host thì include cái file config của e vào ok a
include 'config.php';
// mysql_connect(HOST,USERNAME,PASSWORD);

// Create connection
$conn = mysql_connect(HOST,USERNAME,PASSWORD);

mysql_select_db(DATABASE);
mysql_query("set names 'utf8'");

function listsdt($tungay,$denngay){
	$sql = "select * from sodienthoai where DATE_FORMAT(NgayGioDK,'%Y-%m-%d') between '{$tungay}' and '{$denngay}'";
	return mysqli_query($sql);
}
?>