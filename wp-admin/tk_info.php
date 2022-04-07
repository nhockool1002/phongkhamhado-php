<?php
	require_once "class_quantri.php";
	$qt = new quantri;
	$id=$_GET['id'];
	$name=$_GET['name'];
	$bophan=$_GET['bophan'];

	settype($id,"int");

	$qt->SuaTKInfo($id, $name, $bophan);
?>