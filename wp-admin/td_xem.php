<?php
	//require_once "checklogin.php";
	//require_once "class_quantri.php";
	//$qt = new quantri;
	mysql_connect("103.27.239.207","makecall","Duhung_123");
	mysql_select_db("makecall");
	mysql_query("set names 'utf8'");
	$pageSize = 30;
	$pageNum = 1;
	$totalRows = 0;
	if (isset($_GET['pageNum'])==true) $pageNum = $_GET['pageNum'];
	if ($pageNum<=0) $pageNum=1; settype($pageNum,"int");
	function td_ds($pageNum, $pageSize, &$totalRows, $where=''){
		$sql = "select count(id) from makecall1 where 1 = 1 ".$where;
		$kq = mysql_query($sql);
		$row = mysql_fetch_row($kq);
		$totalRows = $row[0];
		$start = ($pageNum - 1)*$pageSize;
		$sql = "select * from makecall1 where 1 = 1 ".$where." order by id desc limit {$start},{$pageSize}";
		return mysql_query($sql);
	}
	$list = td_ds($pageNum,$pageSize,$totalRows);
?>
<style>
#thanhphantrang a {text-decoration:none; padding-left:5px; padding-right:5px; margin-left:5px; margin-right:5px;}
#thanhphantrang span {
  padding-left:5px;
  padding-right:5px;
  margin-left:5px;
  margin-right:5px;
  color:#F00;
  font-size: 24px;
  font-weight: bolder;
}
.smallButton{
  border: 1px solid #cdcdcd;
  padding: 5px 5px;
  display: inline-block;
  background: #f6f6f6;
  margin:0 10px 0 0;
}
</style>
<table id="dsloaitin" align="center" width="90%" cellspacing="0" cellpadding="4" border="1">
	<tr>
		<th>STT</th>
		<th>Số điện thoại</th>
		<th>Ngày</th>
		<th>Tình trạng</th> 
	</tr>
	<?php
		$i = 0;
		while($row = mysql_fetch_assoc($list)){
		$i++;
	?>
	<tr>
		<td><?=$i?></td>
		<td><?php echo $row['sdt']?></td>
		<td><?php echo date("d/m/Y---H:i:s",strtotime($row['ngay']))?></td>
		<td><?php if($row['status']==1) echo "Đã gọi"; else echo "Chưa gọi";?></td>
	</tr>
	<?php }?>
	<?php if ($totalRows > $pageSize) { ?>
	<tr>
		<td colspan="4" align="left">
		   <p id="thanhphantrang">
				<?=$qt->pagesList($totalRows, $pageNum, $pageSize);?>
		  </p>
		</td>
	</tr>
	<?php } ?>
</table>