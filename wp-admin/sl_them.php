<?php
	require_once "checklogin.php";
	require_once "class_quantri.php";
	$qt =  new quantri;
	if (isset($_POST['btnOK'])==true)
	{
		$qt ->ThemSL();
		header("location:main.php?p=sl_xem");
	}
	$chungloai= $qt ->DanhMuc(-1,0);
?>
<script>

		function BrowseServer( startupPath, functionData ){
			var finder = new CKFinder();
			finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
			finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
			finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
			finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
			finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn
			finder.popup(); // Bật cửa sổ CKFinder
		} //BrowseServer

		function SetFileField( fileUrl, data ){
			document.getElementById( data["selectActionData"] ).value = fileUrl;
			hienthumb();
		}
		function ShowThumbnails( fileUrl, data ){
			var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
			document.getElementById( 'thumbnails' ).innerHTML +=
			'<div class="thumb">' +
			'<img src="' + fileUrl + '" />' +
			'<div class="caption">' +
			'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
			'</div>' +
			'</div>';
			document.getElementById( 'preview' ).style.display = "";
			return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn

		}
		function hienthumb(){
			var valu = $('#UrlHinh').val();
			if (valu != "") {
				var bien = "<img src='"+valu+"' width='710' height='350'>";
				$('#thumbnail').html(bien);
			};
		}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table border="1" align="center" cellpadding="4" cellspacing="0">
<tr> <td colspan="2" align="center">THÊM SLIDER</td> </tr>

<tr><td width="100">Danh mục</td>
     <td>
		<select id="idLoai" name="idLoai">
                <option value="0">Chọn Thể Loại</option>
                <?php while ($row = mysql_fetch_assoc($chungloai)) { ?>
    				<option <?php if ($_POST['idCL'] == $row['idLoai']) echo "selected='selected'"; ?> value="<?php echo $row['idLoai'];?>"> <?php echo $row['TieuDe'];?> </option>
    			<?php } ?>
        </select>
	 </td>
</tr>

<tr><td width="100">Tiêu Đề</td>
     <td><input type="text" name="TieuDe" id="TieuDe" /></td>
</tr>
<tr><td>Hình Ảnh</td>
     <td>
     <input type=text name="UrlHinh" id="UrlHinh" class="txt" />
      <label>

        <input onclick="BrowseServer('hinhanh:/','UrlHinh')"  type="button" name="btnChonFile" id="btnChonFile" value="Chọn File" />

      </label>
      <div style="clear: both"></div>
      <div id="thumbnail">

      </div>
    </td>
</tr>
<tr><td width="100">Liên kết</td>
     <td><input type="text" name="Link" id="Link" /></td>
</tr>

<tr><td colspan="2" align="center"><input type="submit" name="btnOK" id="btnOK" value="Thêm" />
  <input type="reset" name="btnxoa" id="btnxoa" value="Làm lại" /></td>
</tr>
</table>
</form>
