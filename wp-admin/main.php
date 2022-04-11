<?php
if (!ini_get('display_errors')) {
    //ini_set('display_errors', '1');
}
// error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(0);
    ini_set('display_errors', 0);
	ob_start();

	require_once("checklogin.php");
	$p = $_GET['p'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from jannek.fi/themeforest/proadmin/ by HTTrack Website Copier/3.x [XR&CO'2008], Wed, 26 Nov 2008 20:36:56 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ProAdmin</title>

<!--// SCRIPTS FOR DROPDOWN AND TABBED INTERFACE -->



<!--// FOLLOWING SCRIPT IS FOR PNG FIX IE5.5/IE6-->


<!--[if lt IE 7]>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->
<!-- Latest compiled and minified CSS -->
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script type='text/javascript' src='js/jquery.cookie.js'></script>
<link rel="stylesheet" href="css/accordionmenu.css" type="text/css" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />

<script>
	$(document).ready(function()
	{
		setTimeout(hieuchinh,500);
	});

	function hieuchinh()
	{
		var h1 = $("#leftcolumn").height();
		var h2 = $("#content").height();
		var mar = $("#submenu.bodytext").height();
		var m = h1;
		if (h2+mar > h1) m = h2+mar;
		$("#leftcolumn").height(m+$("#logo").height());
		$("#content").height(m-mar);
	}
</script>

</head>
<body>

<!--// Horisontal submenu edit starts -->

<div class="bodytext" id="submenu">
    
</div>

<!--// Horisontal submenu edit ends -->
<!--// Logo edit starts -->

<div id="logo">
  <div align="center">
    <img src="images/logo.png" alt="logo" width="116" height="34" />
  </div>
</div>

<!--// logo edit ends -->
<!--// Arrows edit starts -->

<div class="bodytext" id="hello">
    <img src="images/icon-avatar.png" alt="user_icon" class="icon-avatar" />
	<span class="name-avatar">Chào <a href="#"><?=$_SESSION['kt_login_user']?></a></span>
	<a class="logout" href="thoat.php"><img src="images/logout.png" /></a>
</div>
<!--// arrows edit ends -->



<div style="display: none;" class="bodytext" id="dropdown">



<div class="clear"> </div>
</div>

<!--// dropdown edit ends -->
<!--// leftcolumn edit starts -->
	<!--// Mainnavigation edit starts -->


<div id="leftcolumn">
  <div id="navigation">
		<h4>Mục Lục</h4>
    <div class="toplinks style1" id="navigationtitle">
		<?php  include "menu.php"; ?>
    </div>
  </div>
  </div>


	<!--// leftcolumn edit ends -->




<!--// Tabbed interface ends -->

<!--// Content starts -->

<div id="content">
<?php
					switch ($p)
						{
							case "dk_xem":
								include "dk_xem.php";
								break;
							case "dk_chinh":
								include "dk_chinh.php";
								break;

							case "pa_xem":
								include "pa_xem.php";
								break;
							case "pa_chinh":
								include "pa_chinh.php";
								break;
							case "pa_them":
								include "pa_them.php";
								break;

							case "tb_xem":
								include "tb_xem.php";
								break;
							case "tb_chinh":
								include "tb_chinh.php";
								break;
							case "tb_them":
								include "tb_them.php";
								break;

							case "dm_xem":
								include "dm_xem.php";
								break;
							case "dm_chinh":
								include "dm_chinh.php";
								break;
							case "dm_them":
								include "dm_them.php";
								break;

							case "tk_xem":
								include "tk_xem.php";
								break;
							case "tk_mk":
								include "tk_mk.php";
								break;
							case "tk_cv":
								include "tk_cv.php";
								break;
							case "tk_doi":
								include "tk_doi.php";
								break;
							case "tk_them":
								include "tk_them.php";
								break;

							case "sl_xem":
								include "sl_xem.php";
								break;
							case "sl_chinh":
								include "sl_chinh.php";
								break;
							case "sl_them":
								include "sl_them.php";
								break;

							case "tt_xem":
								include "tt_xem.php";
								break;
							case "tt_chinh":
								include "tt_chinh.php";
								break;
							case "tt_them":
								include "tt_them.php";
								break;

							case "ch_xem":
								include "ch_xem.php";
								break;
							case "ch_chitiet":
								include "ch_chitiet.php";
								break;
							case "ch_xoa":
								include "ch_xoa.php";
								break;

							case "tl_chitiet":
								include "tl_chitiet.php";
								break;
							case "tl_xoa":
								include "tl_xoa.php";
								break;

							case "option_xem":
								include "option_xem.php";
								break;

							case "gy_xem":
								include "gy_xem.php";
								break;

							case "sitemap":
								include "sitemap.php";
								break;
                            
                            case "general-settings":
                                include "views/settings/general-settings.php";
                                break;
                            case "menu-settings":
                                include "views/menus/menu-settings.php";
                                break;
							case "advise-list":
								include "views/advise/advise-list.php";
								break;
							default :
								include "content.php";
								break;
						}
			?>

</div>

<!-- add message -->
<?php include_once "message.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
	toastr.options = {
		"closeButton": true,
		"newestOnTop": false,
		"progressBar": true,
		// "positionClass": "toast-bottom-center",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
</script>
</body>

<!-- Mirrored from jannek.fi/themeforest/proadmin/ by HTTrack Website Copier/3.x [XR&CO'2008], Wed, 26 Nov 2008 20:37:11 GMT -->
</html>

