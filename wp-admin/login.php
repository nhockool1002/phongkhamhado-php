<?php
ob_start();
session_start();
require_once('constants.php');
if (isset($_POST['btnLog']) == true) {
	require_once("dbcon.php");
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if (get_magic_quotes_gpc() == false) {
		$username = trim(mysql_real_escape_string($username));
		$password = trim(mysql_real_escape_string($password));
	}
	$sql = "SELECT * FROM users WHERE User='$username' AND Pass ='$password'";
	$user = mysql_query($sql);
	if (mysql_num_rows($user) == 1) //Thành công
	{
		if (isset($_POST['nho']) == true) {
			setcookie("un", $_POST['username'], time() + 60 * 60 * 24 * 7);
			setcookie("pw", $_POST['password'], time() + 60 * 60 * 24 * 7);
		} else {
			setcookie("un", $_POST['username'], time() - 1);
			setcookie("pw", $_POST['password'], time() - 1);
		}
		$row_user = mysql_fetch_assoc($user);
		$_SESSION['kt_login_id'] = $row_user['idUser'];
		$_SESSION['kt_login_user'] = $row_user['User'];
		$_SESSION['kt_login_level'] = $row_user['idGroup'];

		if (strlen($_SESSION['back']) > 0) {
			$back = $_SESSION['back']; //unset($_SESSION['back']);
			header("location:$back");
		} else header("location: main.php");
	} else { //Thất bại

		header("location: login.php");
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo ADMIN_PANEL_LOGIN; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!--// FOLLOWING SCRIPT IS FOR PNG FIX IE5.5/IE6-->
		<!--[if lt IE 7]>
		<script defer type="text/javascript" src="js/pngfix.js"></script>
		<![endif]-->

		<!-- Styles starts -->
		<link href="css/login.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div class="box">
		<div class="welcome" id="welcometitle">
			<?php echo ADMIN_PANEL_LOGIN; ?>
		</div>

		<div id="fields">
			<form id="form1" name="form1" method="post" action="">
				<div align="center" id="error" style="width:400px; color:#F00; ">
					<?php
						echo $_SESSION['error'];
						unset($_SESSION['error']);
					?>
				</div>
				<div style="clear:both"></div>
				<table class="login-form">
					<tr>
						<td>
							<span class="login">
								<?php echo ADMIN_PANEL_USERNAME; ?>
							</span>
						</td>
						<td>
							<label>
								<input name="username" type="text" class="fields" id="username" />
							</label></td>
					</tr>
					<tr>
						<td>
							<span class="login">
								<?php echo ADMIN_PANEL_PASSWORD; ?>
							</span>
						</td>
						<td height="35"><input name="password" type="password" class="fields" id="password" size="30" />
						</td>
					</tr>
					<tr>
						<td width="90" height="65">&nbsp;</td>
						<td height="65" align="right" valign="middle">
							<label>
								<input name="btnLog" type="submit" class="button" id="btnLog" value="<?php echo ADMIN_PANEL_LOGIN_BUTTON; ?>" />
							</label>
						</td>
					</tr>
				</table>
			</form>
			<div class="login" id="lostpassword"><a href="#">Lost Password?</a></div>
		</div>
	</body>
</html>
