<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

ob_start();
session_start();
define('BASE_URI', __DIR__."/");
define('SDT', '');
define('TEL', '');
define('TENPK', 'Á');
define('MAP', '');
define('ADDRESS', '');
$actual_link = sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI']);
$link_chat = "";

require_once "lib/class_tintuc.php";
require_once "lib/class_loai.php";
require_once "lib/class_pages.php";
$qly_tin = new qly_tin;
$qly_loai = new qly_loai;
$qly_pa = new qly_pa;
require_once 'blocks/meta.php';
if (isset($_GET['p'])) {$p = $_GET['p']; } else{ $p = ''; }

// gui so dien thoai
if(isset($_POST["btn_gui_sdt"])){
	if(is_numeric($_POST["sodienthoai"])){
		$qly_pa->NhapSDT_GoiLai();
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<base href="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<script type="text/javascript" src="js/jquery.3.1.1.js"></script>

</head>
<body>
	<?php
	require_once 'blocks/header.php';
	if (!in_array($p,array('trangloai','trangchitiet','trangtimkiem','gioithieu'))) 
	{
		require_once 'blocks/banner.php';
	}
	switch ($p) {
		case 'trangloai':
		require_once BASE_URI . 'pages/trangloai.php' ;
		break;
		case 'trangchitiet':
		require_once BASE_URI . 'pages/trangchitiet.php' ;
		break;
		case 'trangtimkiem':
		require_once BASE_URI . 'pages/trangtimkiem.php' ;
		break;
		case 'gioithieu':
		require_once BASE_URI . 'pages/tranggioithieu.php' ;
		break;
		default:
		require_once BASE_URI . 'pages/trangchu.php' ;
		break;
	}
	require_once 'blocks/footer.php';
	?>
</body>
<script>
	$(document).ready(function() {
		$('#input-search').keypress(function (e) {
			  if (e.which == 13) {
				$('#btn-search').click();
			  }
			});
			$('#btn-search').click(function(){
				key = $('#input-search').val();
				window.location.href="tim-kiem/"+key+"/";
			});
	});
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<?php require_once 'chat.php'; ?>
<?php require_once 'modules/shock/index.php'; ?>
<?php //require_once 'modules/popup/index.php'; ?>
</html>