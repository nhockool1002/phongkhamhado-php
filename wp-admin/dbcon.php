<?php
//sau e vứt lên  host thì include cái file config của e vào ok a
include 'config.php';
// mysql_connect(HOST,USERNAME,PASSWORD);

// Create connection
$conn = mysql_connect(HOST,USERNAME,PASSWORD);
global $pdo;
mysql_select_db(DATABASE);
mysql_query("set names 'utf8'");

function listsdt($tungay,$denngay){
	$sql = "select * from sodienthoai where DATE_FORMAT(NgayGioDK,'%Y-%m-%d') between '{$tungay}' and '{$denngay}'";
	return mysqli_query($sql);
}


try {
	$pdo = new PDO("mysql:host=" .HOST . ";dbname=" . DATABASE, USERNAME, PASSWORD);
	// set the PDO error mode to exception
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
  }
?>